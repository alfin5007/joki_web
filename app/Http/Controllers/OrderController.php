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
        $validated = $request->validate([
            'nama_klien' => 'required|string|max:255',
            'layanan' => 'required|string|max:255',
            'jumlah' => 'required|integer|min:1',
            'harga' => 'required|numeric|min:0',
            'file_referensi' => 'nullable|file|max:10240',
        ]);

        $filePath = null;
        if ($request->hasFile('file_referensi')) {
            $filePath = $request->file('file_referensi')->store('referensi', 'public');
        }

        Order::create([
            'nama_klien' => $validated['nama_klien'],
            'layanan' => $validated['layanan'],
            'jumlah' => $validated['jumlah'],
            'harga_awal' => $validated['harga'],
            'file_referensi' => $filePath,
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
        $validated = $request->validate([
            'nama_klien' => 'required|string|max:255',
            'layanan' => 'required|string|max:255',
            'jumlah' => 'required|integer|min:1',
            'harga' => 'required|numeric|min:0',
            'file_referensi' => 'nullable|file|max:10240',
        ]);

        $order = Order::findOrFail($id);

        $filePath = $order->file_referensi;
        if ($request->hasFile('file_referensi')) {
            $filePath = $request->file('file_referensi')->store('referensi', 'public');
        }

        $order->update([
            'nama_klien' => $validated['nama_klien'],
            'layanan' => $validated['layanan'],
            'jumlah' => $validated['jumlah'],
            'harga_awal' => $validated['harga'],
            'file_referensi' => $filePath,
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


    // Menampilkan detail order (dashboard order, timeline, upload bukti, download file)
    public function show($id)
    {
        $order = Order::findOrFail($id);
        return view('orders.show', compact('order'));
    }


    // Mengunggah bukti pembayaran
    public function uploadBuktiBayar(Request $request, $id)
    {
        $request->validate([
            'bukti_bayar' => 'required|image|max:10240',
        ]);

        $order = Order::findOrFail($id);

        if ($request->hasFile('bukti_bayar')) {
            $filePath = $request->file('bukti_bayar')->store('bukti_bayar', 'public');
            $order->update([
                'bukti_bayar' => $filePath,
                'status_pembayaran' => 'menunggu_konfirmasi',
            ]);
        }

        return redirect()->route('orders.show', $id)
            ->with('success', 'Bukti pembayaran berhasil diunggah. Menunggu konfirmasi admin.');
    }


    // Mengupdate status pembayaran, pengerjaan, dan mengunggah file hasil oleh admin
    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status_pembayaran' => 'required|in:belum_bayar,menunggu_konfirmasi,lunas,ditolak',
            'status_pengerjaan' => 'required|in:belum_mulai,diproses,selesai',
            'file_hasil' => 'nullable|file|max:20480',
        ]);

        $order = Order::findOrFail($id);

        $data = [
            'status_pembayaran' => $request->status_pembayaran,
            'status_pengerjaan' => $request->status_pengerjaan,
        ];

        if ($request->hasFile('file_hasil')) {
            $filePath = $request->file('file_hasil')->store('file_hasil', 'public');
            $data['file_hasil'] = $filePath;
        }

        $order->update($data);

        return redirect()->route('orders.show', $id)
            ->with('success', 'Status order berhasil diperbarui.');
    }


    // Mengunduh file hasil joki secara aman (hanya jika sudah lunas)
    public function downloadHasil($id)
    {
        $order = Order::findOrFail($id);

        if ($order->status_pembayaran !== 'lunas') {
            abort(403, 'Akses ditolak. Anda harus melunasi pembayaran terlebih dahulu.');
        }

        if (!$order->file_hasil || !\Storage::disk('public')->exists($order->file_hasil)) {
            abort(404, 'File hasil pengerjaan belum tersedia atau telah dihapus.');
        }

        return \Storage::disk('public')->download($order->file_hasil);
    }


    // Cetak invoice order
    public function invoice($id)
    {
        $order = Order::findOrFail($id);
        return view('orders.invoice', compact('order'));
    }
}