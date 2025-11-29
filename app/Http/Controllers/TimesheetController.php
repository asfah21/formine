<?php

namespace App\Http\Controllers;

use App\Models\{Timesheet, TimesheetEntry, ActivityCode};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Carbon\Carbon;
use Carbon\CarbonImmutable;
use Illuminate\Support\Str;

class TimesheetController extends Controller
{
    public function index()
    {
        $codes = ActivityCode::orderBy('code')->get();
        $timesheets = Timesheet::with(['entries.code'])
            ->orderByDesc('tanggal')->orderByDesc('id')->limit(20)->get();

        return view('timesheets.index', compact('codes','timesheets'));
    }

    public function store(Request $request)
    {
        $tz = 'Asia/Makassar';

        $request->validate([
            'tanggal'     => ['required','date'],
            'shift'       => ['required', Rule::in(['siang','malam'])],
            'nama'        => ['required','string','max:100'],
            'nomor_unit'  => ['required','string','max:50'],
            'hm_awal'     => ['required','integer','min:0'],
            'hm_akhir'    => ['required','integer','min:0','gte:hm_awal'],
            'catatan'     => ['nullable','string'],
            'signature_data' => ['required', 'string'],
            'confirmation' => ['required', 'accepted'],

            'entries'                     => ['required','array','min:1'],
            'entries.*.activity_code_id'  => ['required','integer','exists:activity_codes,id'],
            'entries.*.start_time'        => ['required','date_format:H:i'],
            'entries.*.end_time'          => ['required','date_format:H:i'],
            'entries.*.description'       => ['nullable','string','max:255'],
        ], [
            'signature_data.required' => 'Harap beri tanda tangan terlebih dahulu',
            'confirmation.required' => 'Harap centang konfirmasi kebenaran data',
            'confirmation.accepted' => 'Harap setujui konfirmasi kebenaran data',
        ]);

        // Window shift (GMT+8) berdasarkan tanggal
        $base = CarbonImmutable::parse($request->tanggal, $tz)->startOfDay();
        if ($request->shift === 'siang') {
            $shiftStart = $base->setTime(6,0);
            $shiftEnd   = $base->setTime(18,0);
        } else {
            $shiftStart = $base->setTime(18,0);
            $shiftEnd   = $base->addDay()->setTime(6,0); // besok
        }

        // Konversi setiap baris H:i → datetime (perhatikan +1 hari saat shift malam)
        $blocks = [];
        foreach ($request->entries as $i => $row) {
            [$sh,$sm] = array_map('intval', explode(':', $row['start_time']));
            [$eh,$em] = array_map('intval', explode(':', $row['end_time']));

            // Tentukan "base tanggal" untuk start/end
            $startBase = $base;
            $endBase   = $base;

            if ($request->shift === 'malam') {
                // Di shift malam, semua jam < 18:00 sebenarnya milik H+1
                if ($sh < 18) $startBase = $base->addDay();
                if ($eh < 18) $endBase   = $base->addDay();
            }

            $startAt = $startBase->setTime($sh, $sm);
            $endAt   = $endBase->setTime($eh, $em);

            // Validasi berada dalam window shift
            if ($startAt->lt($shiftStart) || $endAt->gt($shiftEnd)) {
                return back()->withErrors([
                    "entries.$i.start_time" => "Baris ".($i+1).": jam harus dalam rentang shift",
                ])->withInput();
            }

            // Harus end > start (bukan sama/terbalik)
            if ($endAt->lte($startAt)) {
                return back()->withErrors([
                    "entries.$i.end_time" => "Baris ".($i+1).": waktu selesai harus lebih besar dari waktu mulai",
                ])->withInput();
            }

            // Durasi POSITIF (hindari nilai negatif)
            $duration = $startAt->diffInMinutes($endAt); // SELALU POSITIF
            if ($duration <= 0 || $duration > 12*60) {
                return back()->withErrors([
                    "entries.$i.end_time" => "Baris ".($i+1).": durasi tidak valid",
                ])->withInput();
            }

            $blocks[] = [
                'i' => $i,
                'start_at' => $startAt,
                'end_at'   => $endAt,
                'activity_code_id' => (int)$row['activity_code_id'],
                'description' => $row['description'] ?? null,
                'duration' => $duration,
            ];
        }

        // Cek overlap (urut start)
        usort($blocks, fn($a,$b) => $a['start_at'] <=> $b['start_at']);
        for ($k=1; $k<count($blocks); $k++) {
            if ($blocks[$k]['start_at']->lt($blocks[$k-1]['end_at'])) {
                return back()->withErrors([
                    'entries' => 'Terdeteksi jam overlap antara baris '.($blocks[$k-1]['i']+1).' dan '.($blocks[$k]['i']+1),
                ])->withInput();
            }
        }

        // Calculate total work minutes and operational minutes
        $totalMinutes = 0;
        $operationalMinutes = 0;
        
        foreach ($request->entries as $entry) {
            $start = Carbon::parse($entry['start_time']);
            $end = Carbon::parse($entry['end_time']);
            
            // Handle overnight shifts
            if ($end->lessThan($start)) {
                $end->addDay();
            }
            
            $duration = $start->diffInMinutes($end);
            $totalMinutes += $duration;
            
            // Check if this is operational time
            $activityCode = ActivityCode::find($entry['activity_code_id']);
            if ($activityCode && $activityCode->category === 'OPERASI') {
                $operationalMinutes += $duration;
            }
        }
        
        // Ensure we don't exceed 12 hours (720 minutes) per shift
        $totalMinutes = min($totalMinutes, 720);
        $operationalMinutes = min($operationalMinutes, $totalMinutes);

        // Save the signature
        $signatureData = $request->input('signature_data');
        
        if (empty($signatureData)) {
            return back()->withErrors(['signature' => 'Harap buat tanda tangan terlebih dahulu']);
        }

        DB::transaction(function() use ($request, $blocks, $totalMinutes, $operationalMinutes, $signatureData) {
            $timesheet = Timesheet::create([
                'id_timesheet' => (string) Str::uuid(),
                'tanggal' => $request->tanggal,
                'shift' => $request->shift,
                'nama' => $request->nama,
                'nomor_unit' => $request->nomor_unit,
                'hm_awal' => $request->hm_awal,
                'hm_akhir' => $request->hm_akhir,
                'total_work_minutes' => $totalMinutes,
                'operational_minutes' => $operationalMinutes,
                'catatan' => $request->catatan,
                'created_by' => auth()->id(),
                'approve_by' => null, // Will be set when approved
            ]);

            // Save signature image
            $unik_id = $timesheet->id_timesheet;
            $encodedImage = explode(",", $signatureData)[1];
            $decodedImage = base64_decode($encodedImage);
            $filename = $unik_id . '.png';
            
            // Create directory if not exists
            $directory = 'storage/images/ttd_timesheet';
            if (!file_exists($directory)) {
                mkdir($directory, 0777, true);
            }
            
            $imagePath = $directory . '/' . $filename;
            file_put_contents($imagePath, $decodedImage);
            
            // Update timesheet with signature path
            $timesheet->update(['signature_data' => $imagePath]);

            foreach ($blocks as $b) {
                TimesheetEntry::create([
                    'timesheet_id'     => $timesheet->id,
                    'activity_code_id' => $b['activity_code_id'],
                    'start_at'         => $b['start_at'],
                    'end_at'           => $b['end_at'],
                    'description'      => $b['description'],
                    'duration_minutes' => $b['duration'],
                ]);
            }
        });

        return redirect()->route('timesheets.index')->with('success','Timesheet disimpan.');
    }

    /**
     * Display a listing of the timesheet results.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function hasil(Request $request)
    {
        $query = Timesheet::query()
            ->select('*')
            ->with('entries.code')
            ->orderBy('tanggal', 'desc')
            ->orderBy('id', 'desc');

        // Apply search filter
        if ($search = $request->query('search')) {
            $query->where(function($q) use ($search) {
                $q->where('nama', 'like', "%{$search}%")
                  ->orWhere('nomor_unit', 'like', "%{$search}%");
            });
        }

        // Apply date range filter
        if ($startDate = $request->query('start_date')) {
            $query->where('tanggal', '>=', $startDate);
        }
        
        if ($endDate = $request->query('end_date')) {
            $query->where('tanggal', '<=', $endDate);
        }

        // Paginate the results
        $timesheets = $query->paginate(15)->withQueryString();

        // Ensure id_timesheet is set for existing records
        foreach ($timesheets as $timesheet) {
            if (empty($timesheet->id_timesheet)) {
                $timesheet->update(['id_timesheet' => (string) \Illuminate\Support\Str::uuid()]);
            }
        }

        return view('timesheets.hasil', compact('timesheets'));
    }

    /**
     * Display the specified timesheet.
     *
     * @param  string  $name
     * @param  string  $aptnumx
     * @return \Illuminate\View\View
     */
    public function show($name, $aptnumx)
    {
        $timesheet = Timesheet::with(['entries' => function($query) {
                $query->with('code')->orderBy('start_at');
            }])
            ->where('nama', $name)
            ->where('id_timesheet', $aptnumx)
            ->firstOrFail();

        return view('timesheets.show', compact('timesheet'));
    }
}
