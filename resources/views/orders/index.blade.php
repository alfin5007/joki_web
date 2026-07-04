<x-layouts::app>
    <div class="flex h-full w-full flex-1 flex-col gap-6 p-1">
        
        {{-- Header Halaman --}}
        <div class="flex items-center justify-between">
            <div>
                <flux:heading size="xl" class="font-bold tracking-tight">Data Order</flux:heading>
                <flux:subheading class="text-xs text-zinc-500">Manajemen dan daftar seluruh pesanan joki</flux:subheading>
            </div>
            
            {{-- Tombol Tambah Order Berwarna Kuning/Amber Tegas --}}
            <button onclick="window.location.href='{{ route('orders.create') }}'" class="flex items-center gap-2 rounded-xl bg-amber-500 px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition-all hover:bg-amber-600 active:scale-95">
                <flux:icon icon="plus" class="size-4" />
                Tambah Order
            </button>
        </div>

        {{-- Tabel Utama dengan Sentuhan Kartu Berwarna --}}
        <div class="overflow-hidden rounded-2xl border border-zinc-200 bg-white shadow-sm dark:border-zinc-800 dark:bg-zinc-900">
            <flux:table>
                <flux:table.columns class="bg-zinc-50/70 dark:bg-zinc-800/50">
                    <flux:table.column>No</flux:table.column>
                    <flux:table.column>Nama Klien</flux:table.column>
                    <flux:table.column>Layanan</flux:table.column>
                    <flux:table.column>Jumlah</flux:table.column>
                    <flux:table.column>Harga Awal</flux:table.column>
                    <flux:table.column>Status</flux:table.column>
                    <flux:table.column>Aksi</flux:table.column>
                </flux:table.columns>

                <flux:table.rows>
                    @forelse ($orders ?? [] as $index => $order)
                        <flux:table.row class="hover:bg-zinc-50/50 dark:hover:bg-zinc-800/30">
                            <flux:table.cell class="font-semibold text-zinc-400">{{ $index + 1 }}</flux:table.cell>
                            <flux:table.cell class="font-medium text-zinc-900 dark:text-white">{{ $order->client_name }}</flux:table.cell>
                            <flux:table.cell>{{ $order->service->name ?? '—' }}</flux:table.cell>
                            <flux:table.cell class="tabular-nums">{{ $order->qty }}</flux:table.cell>
                            <flux:table.cell class="font-medium text-zinc-900 dark:text-white tabular-nums">
                                Rp {{ number_format($order->total_price, 0, ',', '.') }}
                            </flux:table.cell>
                            <flux:table.cell>
                                <span class="inline-flex items-center gap-1.5 rounded-md bg-purple-50 px-2 py-1 text-xs font-medium text-purple-700 ring-1 ring-inset ring-purple-700/10 dark:bg-purple-950/30 dark:text-purple-400">
                                    <span class="size-1.5 rounded-full bg-purple-500 animate-pulse"></span>
                                    Proses
                                </span>
                            </flux:table.cell>
                            <flux:table.cell>
                                <flux:button variant="ghost" size="sm" icon="pencil" square></flux:button>
                            </flux:table.cell>
                        </flux:table.row>
                    @empty
                        <flux:table.row>
                            <flux:table.cell colspan="7">
                                <div class="flex flex-col items-center justify-center py-16 text-center">
                                    <div class="flex size-14 items-center justify-center rounded-2xl bg-gradient-to-br from-indigo-50 to-purple-50 text-indigo-500 shadow-sm dark:from-indigo-950/20 dark:to-purple-950/20 dark:text-indigo-400 mb-4">
                                        <flux:icon icon="archive-box" class="size-6" />
                                    </div>
                                    <p class="text-base font-bold text-zinc-800 dark:text-zinc-200">Belum Ada Data Order</p>
                                    <p class="mx-auto mt-1 max-w-xs text-xs text-zinc-400">Silakan tambahkan data order baru melalui tombol di sudut kanan atas.</p>
                                </div>
                            </flux:table.cell>
                        </flux:table.row>
                    @endforelse
                </flux:table.rows>
            </flux:table>
        </div>

    </div>
</x-layouts::app>