<x-layouts::app>
    <div class="flex h-full w-full flex-1 flex-col gap-6 p-6">
        <div>
            <flux:heading size="xl">Edit Order</flux:heading>
            <flux:subheading>Perbarui detail informasi pesanan klien #{{ $order->id }}</flux:subheading>
        </div>

        <flux:card class="p-6">
            @if ($errors->any())
                <div class="mb-6 rounded-lg bg-red-50 p-4 text-sm text-red-600 dark:bg-red-950/20 dark:text-red-400">
                    <ul class="list-disc pl-5 space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- ENCTYPE SANGAT PENTING UNTUK UPLOAD FILE --}}
            <form action="{{ route('orders.update', $order->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-zinc-700 dark:text-zinc-300 mb-1">Nama Klien</label>
                        <input type="text" name="nama_klien" value="{{ old('nama_klien', $order->nama_klien) }}" placeholder="Masukkan nama lengkap klien..." class="w-full rounded-lg border border-zinc-200 bg-white px-3 py-2 text-sm dark:border-zinc-800 dark:bg-zinc-950" required>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-zinc-700 dark:text-zinc-300 mb-1">Layanan</label>
                        <input type="text" name="layanan" value="{{ old('layanan', $order->layanan) }}" placeholder="Pilih jenis layanan..." class="w-full rounded-lg border border-zinc-200 bg-white px-3 py-2 text-sm dark:border-zinc-800 dark:bg-zinc-950" required>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-zinc-700 dark:text-zinc-300 mb-1">Jumlah</label>
                            <input type="number" name="jumlah" value="{{ old('jumlah', $order->jumlah) }}" class="w-full rounded-lg border border-zinc-200 bg-white px-3 py-2 text-sm dark:border-zinc-800 dark:bg-zinc-950">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-zinc-700 dark:text-zinc-300 mb-1">Harga Awal</label>
                            <input type="number" name="harga" value="{{ old('harga', intval($order->harga_awal)) }}" placeholder="Rp" class="w-full rounded-lg border border-zinc-200 bg-white px-3 py-2 text-sm dark:border-zinc-800 dark:bg-zinc-950">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-zinc-700 dark:text-zinc-300 mb-2">File Referensi</label>
                        <input type="file" name="file_referensi" class="block w-full text-sm text-zinc-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                        @if ($order->file_referensi)
                            <p class="mt-2 text-xs text-zinc-500">
                                File saat ini: <a href="{{ asset('storage/' . $order->file_referensi) }}" target="_blank" class="text-indigo-600 hover:underline">Lihat File</a>
                            </p>
                        @endif
                    </div>
                </div>

                <div class="flex items-center gap-4 pt-4">
                    <flux:button type="submit" variant="filled" color="indigo">
                        Simpan Perubahan
                    </flux:button>
                    <flux:button href="{{ route('orders.index') }}" variant="ghost">
                        Batal
                    </flux:button>
                </div>
            </form>
        </flux:card>
    </div>
</x-layouts::app>
