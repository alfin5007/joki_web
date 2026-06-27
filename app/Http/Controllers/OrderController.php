<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    // Menampilkan semua data order
    public function index()
    {
        $orders = Order::all();

        return view('orders.index', compact('orders'));
    }


    // Menampilkan form tambah order
    public function create()
    {
        return view('orders.create');
    }


    // Menyimpan data order baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'pesanan' => 'required',
        ]);


        Order::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'pesanan' => $request->pesanan,
        ]);


        return redirect('/orders')
            ->with('success', 'Order berhasil ditambahkan');
    }


    // Menampilkan form edit
    public function edit($id)
    {
        $order = Order::findOrFail($id);

        return view('orders.edit', compact('order'));
    }


    // Mengupdate data order
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'pesanan' => 'required',
        ]);


        $order = Order::findOrFail($id);

        $order->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'pesanan' => $request->pesanan,
        ]);


        return redirect('/orders')
            ->with('success', 'Order berhasil diubah');
    }


    // Menghapus data order
    public function destroy($id)
    {
        $order = Order::findOrFail($id);

        $order->delete();


        return redirect('/orders')
            ->with('success', 'Order berhasil dihapus');
    }
}