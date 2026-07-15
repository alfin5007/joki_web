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
                            <flux:table.cell class="font-medium text-zinc-900 dark:text-white">
                                <a href="{{ route('orders.show', $order->id) }}" class="hover:underline text-indigo-600 dark:text-indigo-400 font-semibold">
                                    {{ $order->nama_klien }}
                                </a>
                            </flux:table.cell>
                            <flux:table.cell>{{ $order->layanan }}</flux:table.cell>
                            <flux:table.cell class="tabular-nums">{{ $order->jumlah }}</flux:table.cell>
                            <flux:table.cell class="font-medium text-zinc-900 dark:text-white tabular-nums">
                                Rp {{ number_format($order->harga_awal, 0, ',', '.') }}
                            </flux:table.cell>
                            <flux:table.cell>
                                @if($order->status_pembayaran === 'lunas')
                                    <span class="inline-flex items-center gap-1.5 rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/10 dark:bg-green-950/30 dark:text-green-400">
                                        Lunas
                                    </span>
                                @elseif($order->status_pembayaran === 'menunggu_konfirmasi')
                                    <span class="inline-flex items-center gap-1.5 rounded-md bg-amber-50 px-2 py-1 text-xs font-medium text-amber-700 ring-1 ring-inset ring-amber-600/10 dark:bg-amber-950/30 dark:text-amber-400 animate-pulse">
                                        Verifikasi
                                    </span>
                                @elseif($order->status_pembayaran === 'ditolak')
                                    <span class="inline-flex items-center gap-1.5 rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-700 ring-1 ring-inset ring-red-600/10 dark:bg-red-950/30 dark:text-red-400">
                                        Ditolak
                                    </span>
                                @else
                                    <span class="inline-flex items-center gap-1.5 rounded-md bg-zinc-50 px-2 py-1 text-xs font-medium text-zinc-700 ring-1 ring-inset ring-zinc-600/10 dark:bg-zinc-950/30 dark:text-zinc-400">
                                        Belum Bayar
                                    </span>
                                @endif
                            </flux:table.cell>
                            <flux:table.cell>
                                <div class="flex gap-1">
                                    <flux:button variant="ghost" size="sm" icon="eye" square href="{{ route('orders.show', $order->id) }}"></flux:button>
                                    <flux:button variant="ghost" size="sm" icon="pencil" square href="{{ route('orders.edit', $order->id) }}"></flux:button>
                                    <form action="{{ route('orders.destroy', $order->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus order ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <flux:button type="submit" variant="ghost" size="sm" icon="trash" class="text-red-500 hover:text-red-600" square></flux:button>
                                    </form>
                                </div>
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