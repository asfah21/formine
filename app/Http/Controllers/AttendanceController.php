<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Session;

class AttendanceController extends Controller
{
    public function index()
    {
        $sessions = Session::orderBy('date', 'desc')->get(); // Ambil semua sesi dari database
        return view('attendance.index', compact('sessions')); // Kirim ke view
        // $attendances = Attendance::latest()->get();
        // return view('attendance.index', compact('attendances'));
    }

    public function create()
    {
        $currentSession = Session::where('date', today())
        ->whereTime('start_time', '<=', now()->format('H:i:s'))
        ->whereTime('end_time', '>=', now()->format('H:i:s'))
        ->first();

    if (!$currentSession) {
        $nextSession = Session::where('date', today())->first();
        $countdown = $nextSession
            ? now()->diffInSeconds($nextSession->start_time)
            : null;
        return view('attendance.countdown', compact('countdown'));
    }

    return view('attendance.create', compact('currentSession'));
    // return view('attendance.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required',
            'location' => 'required|string|max:255',
            'presenter' => 'required|string|max:255',
            'presenter_department' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'photo' => 'required',
            'session_id' => 'required|exists:sessions,id'
        ]);

        // Simpan Foto (Base64 ke File)
        if ($request->photo) {
            $image = str_replace('data:image/jpeg;base64,', '', $request->photo);
            $image = str_replace(' ', '+', $image);
            $imageName = time() . '.jpg';

            // Pastikan direktori ada
            Storage::makeDirectory('public/attendances');

            // Simpan file di storage
            Storage::put('public/attendances/' . $imageName, base64_decode($image));

            $photoPath = 'attendances/' . $imageName; // Perbaiki path penyimpanan
        } else {
            $photoPath = null;
        }

        // Simpan ke Database
        $attendance = Attendance::create([
            'name' => $request->name,
            'position' => $request->position,
            'sleep_time' => $request->sleep_time,
            'is_healthy' => $request->is_healthy,
            'date' => $request->date,
            'time' => $request->time,
            'location' => $request->location,
            'presenter' => $request->presenter,
            'presenter_department' => $request->presenter_department,
            'title' => $request->title,
            'photo' => $photoPath, // Path yang disimpan di database
            'notes' => $request->notes,
            'session_id' => $request->session_id,
        ]);

        if ($attendance) {
            return redirect()->route('attendance.index')->with('success', 'Data berhasil disimpan!');
        } else {
            return redirect()->back()->with('error', 'Gagal menyimpan data!');
        }
    }

    public function show($id)
    {
        $session = Session::with('attendances')->findOrFail($id);
        return view('attendance.show', compact('session'));

    }
}
