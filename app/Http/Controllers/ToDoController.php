<?php

namespace App\Http\Controllers;

use App\Models\ItToDoList;
use Illuminate\Http\Request;

class ToDoController extends Controller
{
    // public function index() {
    //     $workOrders = ItToDoList::orderBy('created_at', 'desc')->get();
    //     return view('todo.index', compact('workOrders'));
    // }

    public function index(Request $request) {
        $search = $request->input('search');
        $departments = $request->input('departments', []);

        // Query dasar
        $query = ItToDoList::query();

        // Filter pencarian
        if ($search) {
            $query->where('name', 'like', '%' . $search . '%')
                  ->orWhere('ticket_number', 'like', '%' . $search . '%');
        }

        // Filter berdasarkan departemen
        if (!empty($departments)) {
            $query->whereIn('department', $departments);
        }

        // Urutkan data terbaru & paginasi
        $workOrders = $query->orderBy('created_at', 'desc')->paginate(10);

        return view('todo.index', compact('workOrders', 'search', 'departments'));
    }

    public function create() {
        $lastTicket = ItToDoList::where('ticket_number', 'LIKE', 'TD-%')
            ->latest('id')
            ->first();
        $lastNumber = $lastTicket ? intval(substr($lastTicket->ticket_number, -4)) : 0;
        $newNumber = str_pad($lastNumber + 1, 4, '0', STR_PAD_LEFT);

        return view('todo.create', compact('newNumber'));
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
            'priority' => 'required',
        ]);

        $workOrder = ItToDoList::create([
            'name' => $request->name,
            'tanggal' => $request->tanggal,
            'jam' => $request->jam,
            'department' => $request->department,
            'location' => $request->location,
            'request_type' => $request->request_type,
            'description' => $request->description,
            'priority' => $request->priority,
            // 'status' => $request->status, //enum('open','in_progress','closed')
        ]);

        return redirect()->route('todo.index')
            ->with('success', 'Work Order created with Ticket Number: ' . $workOrder->ticket_number);
    }

    public function updateStatus(Request $request, ItToDoList $workOrder)
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
