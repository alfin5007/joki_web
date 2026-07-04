<x-layouts::app>
    <div class="flex h-full w-full flex-1 flex-col gap-6 p-6">
        <div>
            <flux:heading size="xl">Tambah Order Baru</flux:heading>
            <flux:subheading>Masukkan detail informasi pesanan klien</flux:subheading>
        </div>

        <flux:card class="p-6">
            {{-- ENCTYPE SANGAT PENTING UNTUK UPLOAD FILE --}}
            <form action="{{ route('orders.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf

                <div class="grid grid-cols-1 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-zinc-700 dark:text-zinc-300 mb-1">Nama Klien</label>
                        <input type="text" name="nama_klien" placeholder="Masukkan nama lengkap klien..." class="w-full rounded-lg border border-zinc-200 bg-white px-3 py-2 text-sm dark:border-zinc-800 dark:bg-zinc-950" required>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-zinc-700 dark:text-zinc-300 mb-1">Layanan</label>
                        <input type="text" name="layanan" placeholder="Pilih jenis layanan..." class="w-full rounded-lg border border-zinc-200 bg-white px-3 py-2 text-sm dark:border-zinc-800 dark:bg-zinc-950" required>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-zinc-700 dark:text-zinc-300 mb-1">Jumlah</label>
                            <input type="number" name="jumlah" value="1" class="w-full rounded-lg border border-zinc-200 bg-white px-3 py-2 text-sm dark:border-zinc-800 dark:bg-zinc-950">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-zinc-700 dark:text-zinc-300 mb-1">Harga Awal</label>
                            <input type="number" name="harga" placeholder="Rp" class="w-full rounded-lg border border-zinc-200 bg-white px-3 py-2 text-sm dark:border-zinc-800 dark:bg-zinc-950">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-zinc-700 dark:text-zinc-300 mb-2">File Referensi</label>
                        <input type="file" name="file_referensi" class="block w-full text-sm text-zinc-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                    </div>
                </div>

                <div class="flex items-center gap-4 pt-4">
                    <flux:button type="submit" variant="filled" color="indigo">
                        Simpan Order
                    </flux:button>
                    <flux:button href="{{ route('orders.index') }}" variant="ghost">
                        Kembali
                    </flux:button>
                </div>
            </form>
        </flux:card>
    </div>
</x-layouts::app>