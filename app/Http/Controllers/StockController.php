<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\StockMovement;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function indexx()
    {
        $items = Item::all();
        $stocks = StockMovement::with('item')->latest()->get();

        return view('stock.index', compact('items', 'stocks'));
    }

    public function index(Request $request)
    {
        $search = $request->input('search');
        $departments = $request->input('departments', []);

        // Query dasar tanpa all()
        $query = Item::query();
        $queries = StockMovement::query();

        // Filter pencarian
        if ($search) {
            $query->where('name', 'like', '%' . $search . '%')
                ->orWhere('id', 'like', '%' . $search . '%');
        }

        // Filter berdasarkan departemen (Jika StockMovement memiliki department)
        if (!empty($departments)) {
            $query->whereIn('department', $departments);
        }

        // Filter pencarian
        if ($search) {
            $queries->where('date', 'like', '%' . $search . '%')
                ->orWhere('id', 'like', '%' . $search . '%');
        }

        // Filter berdasarkan departemen (Jika StockMovement memiliki department)
        if (!empty($departments)) {
            $queries->whereIn('department', $departments);
        }

        // Urutkan data terbaru & paginasi (pastikan paginate digunakan pada Query Builder, bukan Collection)
        $items = $query->latest()->paginate(10);

        // Ambil semua item tanpa paginate
        $stocks = $queries->latest()->paginate(10);

        return view('stock.index', compact('items', 'stocks', 'search', 'departments'));
    }

    public function indexa(Request $request)
    {
        $search = $request->input('search');
        $departments = $request->input('departments', []);
        $type = $request->input('type', 'items'); // Default ke 'items'

        if ($type === 'items') {
            $items = $this->getItems($search, $departments);
            $stocks = null;
        } else {
            $items = null;
            $stocks = $this->getStocks($search, $departments);
        }

        return view('stock.index', compact('items', 'stocks', 'search', 'departments', 'type'));
    }

    private function getItems($search, $departments)
    {
        $query = Item::query();

        if ($search) {
            $query->where('name', 'like', '%' . $search . '%')
                ->orWhere('id', 'like', '%' . $search . '%');
        }

        if (!empty($departments)) {
            $query->whereIn('department', $departments);
        }

        return $query->latest()->paginate(10);
    }

    private function getStocks($search, $departments)
    {
        $query = StockMovement::query();

        if ($search) {
            $query->where('date', 'like', '%' . $search . '%')
                ->orWhere('id', 'like', '%' . $search . '%');
        }

        if (!empty($departments)) {
            $query->whereIn('department', $departments);
        }

        return $query->latest()->paginate(10);
    }

    public function create()
    {
        $items = Item::all();
        return view('stock.create', compact('items'));
    }


    public function store(Request $request)
    {
        if ($request->type == 'in') {
            // Proses barang yang sudah ada
            if ($request->has('items')) {
                foreach ($request->items as $itemId => $data) {
                    $quantity = $data['quantity'];
                    $date = $data['date'];

                    // Cari barang berdasarkan ID
                    $item = Item::findOrFail($itemId);
                    $item->stock += $quantity;
                    $item->save();

                    // Simpan transaksi barang masuk
                    StockMovement::create([
                        'item_id' => $item->id,
                        'type' => 'in',
                        'quantity' => $quantity,
                        'date' => $date,
                        'jenis' => $item->jenis, // Simpan jenis barang dalam transaksi
                    ]);
                }
            }

            // Proses barang baru
            if ($request->has('new_items')) {
                foreach ($request->new_items as $key => $data) {
                    // Validasi untuk mencegah nilai null
                    if (!isset($data['quantity']) || !isset($data['date']) || !isset($data['jenis'])) {
                        continue; // Lewati jika data tidak lengkap
                    }

                    $quantity = $data['quantity'];
                    $date = $data['date'];

                    // Buat barang baru dengan "jenis barang"
                    $item = Item::create([
                        'name' => trim($data['name']),
                        'specification' => trim($data['specification']) ?: '-',
                        'jenis' => trim($data['jenis']), // Simpan jenis barang
                        'stock' => 0,
                    ]);

                    // Tambah stok berdasarkan quantity input
                    $item->stock += $quantity;
                    $item->save();

                    // Simpan transaksi
                    StockMovement::create([
                        'item_id' => $item->id,
                        'type' => 'in',
                        'quantity' => $quantity,
                        'date' => $date,
                        'jenis' => $item->jenis, // Simpan jenis barang dalam transaksi
                    ]);
                }
            }

        } elseif ($request->type == 'out') {
            foreach ($request->item_id as $index => $id) {
                $item = Item::findOrFail($id);
                $quantity = $request->quantity[$index];

                if ($item->stock >= $quantity) {
                    // Kurangi stok barang keluar
                    $item->stock -= $quantity;
                    $item->save();

                    // Simpan transaksi barang keluar
                    StockMovement::create([
                        'item_id' => $item->id,
                        'type' => 'out',
                        'quantity' => $quantity,
                        'date' => now(),
                        'jenis' => $item->jenis, // Simpan jenis barang dalam transaksi
                    ]);
                } else {
                    return back()->with('error', "Stok barang {$item->name} tidak mencukupi.");
                }
            }
        }

        return redirect()->route('stock.index')->with('success', 'Data berhasil disimpan!');
    }


    // public function store(Request $request)
    // {

    //     if ($request->type == 'in') {
    //         // Proses barang yang sudah ada
    //         if ($request->has('items')) {
    //             foreach ($request->items as $itemId => $data) {
    //                 $quantity = $data['quantity'];
    //                 $date = $data['date'];

    //                 // Cari barang berdasarkan ID
    //                 $item = Item::findOrFail($itemId);
    //                 $item->stock += $quantity;
    //                 $item->save();

    //                 // Simpan transaksi per item
    //                 StockMovement::create([
    //                     'item_id' => $item->id,
    //                     'type' => 'in',
    //                     'quantity' => $quantity,
    //                     'date' => $date,
    //                 ]);
    //             }
    //         }

    //         // Proses barang baru
    //         if ($request->has('new_items')) {
    //             foreach ($request->new_items as $key => $data) {
    //                 // Validasi untuk mencegah nilai null
    //                 if (!isset($data['quantity']) || !isset($data['date'])) {
    //                     continue; // Lewati jika data tidak lengkap
    //                 }

    //                 $quantity = $data['quantity'];
    //                 $date = $data['date'];

    //                 // Buat barang baru
    //                 $item = Item::create([
    //                     'name' => trim($data['name']),
    //                     'specification' => trim($data['specification']) ?: '-',
    //                     'stock' => 0,
    //                 ]);

    //                 // Tambah stok berdasarkan quantity input
    //                 $item->stock += $quantity;
    //                 $item->save();

    //                 // Simpan transaksi
    //                 StockMovement::create([
    //                     'item_id' => $item->id,
    //                     'type' => 'in',
    //                     'quantity' => $quantity,
    //                     'date' => $date,
    //                 ]);
    //             }
    //         }


    //     } elseif ($request->type == 'out') {
    //         foreach ($request->item_id as $index => $id) {
    //             $item = Item::findOrFail($id);
    //             $quantity = $request->quantity[$index];

    //             if ($item->stock >= $quantity) {
    //                 // Kurangi stok barang keluar
    //                 $item->stock -= $quantity;
    //                 $item->save();

    //                 // Simpan transaksi barang keluar
    //                 StockMovement::create([
    //                     'item_id' => $item->id,
    //                     'type' => 'out',
    //                     'quantity' => $quantity,
    //                     'date' => now()
    //                 ]);
    //             } else {
    //                 return back()->with('error', "Stok barang {$item->name} tidak mencukupi.");
    //             }
    //         }
    //     }

    //     return redirect()->route('stock.index')->with('success', 'Data berhasil disimpan!');
    // }

    public function createIn()
    {
        $items = Item::all();
        return view('stock.in', compact('items'));
    }

    public function createOut()
    {
        $items = Item::all();
        return view('stock.out', compact('items'));
    }

}
