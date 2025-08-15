<?php

namespace App\Http\Controllers;

use App\Models\ItWorkOrder;
use Illuminate\Http\Request;

class WorkOrderController extends Controller
{
    // public function index(Request $request) {
    //     $search = $request->input('search');
    //     $departments = $request->input('departments', []);

    //     // Query dasar
    //     $query = ItWorkOrder::query();

    //     // Filter pencarian
    //     if ($search) {
    //         $query->where('name', 'like', '%' . $search . '%')
    //               ->orWhere('ticket_number', 'like', '%' . $search . '%');
    //     }

    //     // Filter berdasarkan departemen
    //     if (!empty($departments)) {
    //         $query->whereIn('department', $departments);
    //     }

    //     // Urutkan data terbaru & paginasi
    //     $workOrders = $query->orderBy('created_at', 'desc')->paginate(10);

    //     return view('wo_it.index', compact('workOrders', 'search', 'departments'));
    // }

    // public function create() {
    //     $lastTicket = ItWorkOrder::orderBy('id', 'desc')->first();
    //     $lastNumber = $lastTicket ? intval(substr($lastTicket->ticket_number, -4)) : 0;
    //     $newNumber = str_pad($lastNumber + 1, 4, '0', STR_PAD_LEFT);

    //     return view('wo_it.create', compact('newNumber'));
    // }

    public function index(Request $request) {
        $search = $request->input('search');
        $departments = $request->input('departments', []);

        // Query dasar dengan filter ticket_number yang hanya angka
        $query = ItWorkOrder::whereRaw('ticket_number REGEXP "^[0-9]+$"');

        // Filter pencarian
        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', '%' . $search . '%')
                  ->orWhere('ticket_number', 'like', '%' . $search . '%');
            });
        }

        // Filter berdasarkan departemen
        if (!empty($departments)) {
            $query->whereIn('department', $departments);
        }

        // Urutkan data terbaru & paginasi
        $workOrders = $query->orderBy('created_at', 'desc')->paginate(10);

        return view('wo_it.index', compact('workOrders', 'search', 'departments'));
    }


    public function create() {
        $lastTicket = ItWorkOrder::whereRaw('ticket_number REGEXP "^[0-9]+$"')
            ->orderBy('id', 'desc')
            ->first();

        $lastNumber = $lastTicket ? intval($lastTicket->ticket_number) : 250000; // Default jika tidak ada nomor sebelumnya
        $newNumber = $lastNumber + 1;

        return view('wo_it.create', compact('newNumber'));
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'tanggal' => 'required',
            'jam' => 'required',
            'department' => 'required',
            'location' => 'required',
            'request_type' => 'required',
            'description' => 'required',
        ]);

        $workOrder = ItWorkOrder::create([
            'name' => $request->name,
            'tanggal' => $request->tanggal,
            'jam' => $request->jam,
            'department' => $request->department,
            'location' => $request->location,
            'request_type' => $request->request_type,
            'description' => $request->description,
            // 'status' => $request->status, //enum('open','in_progress','closed')
        ]);

        return redirect()->route('wo_it.index')
            ->with('success', 'Work Order created with Ticket Number: ' . $workOrder->ticket_number);
    }

    public function updateStatus(Request $request, ItWorkOrder $workOrder)
    {
        $status = $request->input('status');

        if ($status == 'in_progress' && !$workOrder->in_progress_at) {
            $workOrder->in_progress_at = now();
        } elseif ($status == 'closed' && !$workOrder->closed_at) {
            $workOrder->closed_at = now();
        }

        $workOrder->status = $status;
        $workOrder->save();

        return redirect()->back()->with('success', 'Status updated successfully.');
    }

}
