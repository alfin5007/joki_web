<x-layouts::app>
    <div class="flex h-full w-full flex-1 flex-col gap-6 p-6">
        
        {{-- Header dengan tombol Aksi --}}
        <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <div class="flex items-center gap-2">
                    <flux:button variant="ghost" size="sm" icon="arrow-left" href="{{ route('orders.index') }}" wire:navigate></flux:button>
                    <flux:heading size="xl">Detail Order #{{ $order->id }}</flux:heading>
                </div>
                <flux:subheading class="text-xs text-zinc-500 mt-1">Kelola status pembayaran, proses pengerjaan, dan akses berkas hasil</flux:subheading>
            </div>
            
            <div class="flex gap-2">
                <flux:button href="{{ route('orders.invoice', $order->id) }}" icon="printer" variant="filled" color="zinc">
                    Cetak Invoice
                </flux:button>
                <flux:button href="{{ route('orders.edit', $order->id) }}" icon="pencil" variant="filled" color="indigo">
                    Edit Data
                </flux:button>
            </div>
        </div>

        {{-- Alerts --}}
        @if (session('success'))
            <div class="rounded-lg bg-green-50 p-4 text-sm text-green-700 dark:bg-green-950/20 dark:text-green-400">
                {{ session('success') }}
            </div>
        @endif

        {{-- Grid Utama --}}
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-3">
            
            {{-- Bagian Kiri: Detail & Timeline (Span 2) --}}
            <div class="space-y-6 lg:col-span-2">
                
                {{-- Timeline Tracking --}}
                <flux:card class="p-6">
                    <flux:heading size="lg" class="mb-6 font-bold">Timeline Progres Pengerjaan</flux:heading>
                    
                    <div class="relative flex flex-col justify-between gap-8 md:flex-row md:gap-4 md:items-center">
                        {{-- Baris penghubung (lay out absolut untuk desktop) --}}
                        <div class="absolute left-4 top-4 bottom-4 w-0.5 bg-zinc-200 dark:bg-zinc-800 md:left-6 md:right-6 md:top-6 md:h-0.5 md:w-auto"></div>

                        @php
                            $step1 = true; // Received
                            $step2 = in_array($order->status_pembayaran, ['menunggu_konfirmasi', 'lunas']); // Paid/Verifying
                            $step3 = $order->status_pengerjaan === 'diproses' || $order->status_pengerjaan === 'selesai'; // Processing
                            $step4 = $order->status_pengerjaan === 'selesai'; // Completed
                        @endphp

                        {{-- Step 1: Diterima --}}
                        <div class="relative z-10 flex items-start gap-4 md:flex-col md:items-center md:text-center md:flex-1">
                            <div class="flex size-10 shrink-0 items-center justify-center rounded-full font-bold shadow-sm {{ $step1 ? 'bg-indigo-600 text-white' : 'bg-zinc-200 text-zinc-500' }}">
                                1
                            </div>
                            <div>
                                <p class="text-sm font-semibold">Order Diterima</p>
                                <p class="text-xs text-zinc-400">Pesanan telah masuk sistem</p>
                            </div>
                        </div>

                        {{-- Step 2: Pembayaran --}}
                        <div class="relative z-10 flex items-start gap-4 md:flex-col md:items-center md:text-center md:flex-1">
                            <div class="flex size-10 shrink-0 items-center justify-center rounded-full font-bold shadow-sm {{ $step2 ? 'bg-indigo-600 text-white' : 'bg-zinc-200 text-zinc-500' }}">
                                2
                            </div>
                            <div>
                                <p class="text-sm font-semibold">Verifikasi Pembayaran</p>
                                <p class="text-xs text-zinc-400">
                                    @if($order->status_pembayaran === 'lunas')
                                        Pembayaran Lunas
                                    @elseif($order->status_pembayaran === 'menunggu_konfirmasi')
                                        Bukti Menunggu Verifikasi
                                    @else
                                        Belum Ada Pembayaran
                                    @endif
                                </p>
                            </div>
                        </div>

                        {{-- Step 3: Proses --}}
                        <div class="relative z-10 flex items-start gap-4 md:flex-col md:items-center md:text-center md:flex-1">
                            <div class="flex size-10 shrink-0 items-center justify-center rounded-full font-bold shadow-sm {{ $step3 ? 'bg-indigo-600 text-white' : 'bg-zinc-200 text-zinc-500' }}">
                                3
                            </div>
                            <div>
                                <p class="text-sm font-semibold">Pengerjaan Jasa</p>
                                <p class="text-xs text-zinc-400">
                                    @if($order->status_pengerjaan === 'diproses')
                                        Sedang Dikerjakan Joki
                                    @elseif($order->status_pengerjaan === 'selesai')
                                        Pengerjaan Selesai
                                    @else
                                        Menunggu Mulai Kerja
                                    @endif
                                </p>
                            </div>
                        </div>

                        {{-- Step 4: Selesai --}}
                        <div class="relative z-10 flex items-start gap-4 md:flex-col md:items-center md:text-center md:flex-1">
                            <div class="flex size-10 shrink-0 items-center justify-center rounded-full font-bold shadow-sm {{ $step4 ? 'bg-indigo-600 text-white' : 'bg-zinc-200 text-zinc-500' }}">
                                4
                            </div>
                            <div>
                                <p class="text-sm font-semibold">Hasil &amp; Selesai</p>
                                <p class="text-xs text-zinc-400">Berkas hasil siap diunduh</p>
                            </div>
                        </div>
                    </div>
                </flux:card>

                {{-- Detail Order Card --}}
                <flux:card class="p-6">
                    <flux:heading size="lg" class="mb-4 font-bold">Informasi Orderan</flux:heading>
                    
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <div class="rounded-xl border border-zinc-100 bg-zinc-50/50 p-4 dark:border-zinc-800 dark:bg-zinc-950/20">
                            <p class="text-xs text-zinc-400 font-medium uppercase tracking-wider">Nama Klien</p>
                            <p class="mt-1 text-sm font-semibold text-zinc-900 dark:text-white">{{ $order->nama_klien }}</p>
                        </div>
                        <div class="rounded-xl border border-zinc-100 bg-zinc-50/50 p-4 dark:border-zinc-800 dark:bg-zinc-950/20">
                            <p class="text-xs text-zinc-400 font-medium uppercase tracking-wider">Layanan</p>
                            <p class="mt-1 text-sm font-semibold text-zinc-900 dark:text-white">{{ $order->layanan }}</p>
                        </div>
                        <div class="rounded-xl border border-zinc-100 bg-zinc-50/50 p-4 dark:border-zinc-800 dark:bg-zinc-950/20">
                            <p class="text-xs text-zinc-400 font-medium uppercase tracking-wider">Jumlah</p>
                            <p class="mt-1 text-sm font-semibold text-zinc-900 dark:text-white">{{ $order->jumlah }}x</p>
                        </div>
                        <div class="rounded-xl border border-zinc-100 bg-zinc-50/50 p-4 dark:border-zinc-800 dark:bg-zinc-950/20">
                            <p class="text-xs text-zinc-400 font-medium uppercase tracking-wider">Total Harga</p>
                            <p class="mt-1 text-sm font-semibold text-zinc-900 dark:text-white">Rp {{ number_format($order->harga_awal, 0, ',', '.') }}</p>
                        </div>
                    </div>

                    <div class="mt-4 rounded-xl border border-zinc-100 bg-zinc-50/50 p-4 dark:border-zinc-800 dark:bg-zinc-950/20">
                        <p class="text-xs text-zinc-400 font-medium uppercase tracking-wider mb-2">File Referensi / Lampiran Klien</p>
                        @if($order->file_referensi)
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-zinc-500 font-mono truncate max-w-xs">{{ basename($order->file_referensi) }}</span>
                                <a href="{{ asset('storage/' . $order->file_referensi) }}" target="_blank" class="inline-flex items-center gap-1 text-xs font-semibold text-indigo-600 hover:underline dark:text-indigo-400">
                                    <flux:icon icon="arrow-down-tray" class="size-3.5" />
                                    Download Lampiran
                                </a>
                            </div>
                        @else
                            <p class="text-xs text-zinc-400">Tidak ada file referensi yang dilampirkan.</p>
                        @endif
                    </div>
                </flux:card>

                {{-- Akses Download Berkas Hasil Joki (Akses Terbatas) --}}
                <flux:card class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <flux:heading size="lg" class="font-bold">Akses File Hasil Pekerjaan</flux:heading>
                        <flux:badge size="sm" color="{{ $order->status_pembayaran === 'lunas' ? 'green' : 'zinc' }}">
                            {{ $order->status_pembayaran === 'lunas' ? 'Akses Terbuka' : 'Terkunci' }}
                        </flux:badge>
                    </div>

                    @if($order->status_pembayaran === 'lunas')
                        @if($order->file_hasil)
                            <div class="rounded-xl border border-green-200 bg-green-50/20 p-5 dark:border-green-800/30 dark:bg-green-950/10">
                                <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                                    <div class="flex items-center gap-3">
                                        <div class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-green-500 text-white shadow-sm">
                                            <flux:icon icon="check-badge" class="size-5" />
                                        </div>
                                        <div>
                                            <p class="text-sm font-bold text-zinc-800 dark:text-zinc-200">Berkas Hasil Joki Tersedia</p>
                                            <p class="text-xs text-zinc-500">Anda dapat mendownload berkas pekerjaan ini secara aman.</p>
                                        </div>
                                    </div>
                                    <flux:button href="{{ route('orders.download', $order->id) }}" icon="arrow-down-tray" variant="filled" color="green">
                                        Download File Hasil
                                    </flux:button>
                                </div>
                            </div>
                        @else
                            <div class="rounded-xl border border-amber-200 bg-amber-50/20 p-5 dark:border-amber-800/30 dark:bg-amber-950/10 text-center">
                                <p class="text-sm font-bold text-amber-700 dark:text-amber-400">Pembayaran Terverifikasi (Lunas)</p>
                                <p class="text-xs text-zinc-500 mt-1">Namun joki/admin belum mengunggah berkas hasil pekerjaan. Silakan tunggu proses pengerjaan selesai.</p>
                            </div>
                        @endif
                    @else
                        <div class="rounded-xl border border-red-200 bg-red-50/20 p-5 dark:border-red-800/30 dark:bg-red-950/10 text-center">
                            <div class="flex justify-center mb-2 text-red-500">
                                <flux:icon icon="lock-closed" class="size-8" />
                            </div>
                            <p class="text-sm font-bold text-red-700 dark:text-red-400">Unduhan Terkunci</p>
                            <p class="text-xs text-zinc-500 mt-1 max-w-md mx-auto">Untuk mendapatkan akses penuh dan mengunduh berkas pengerjaan, silakan lakukan pembayaran dan unggah bukti transfer di panel sebelah kanan.</p>
                        </div>
                    @endif
                </flux:card>

            </div>

            {{-- Bagian Kanan: Pembayaran & Update Status (Span 1) --}}
            <div class="space-y-6">
                
                {{-- Detail Status --}}
                <flux:card class="p-6">
                    <flux:heading size="lg" class="mb-4 font-bold">Status Pesanan</flux:heading>
                    
                    <div class="space-y-4">
                        <div>
                            <p class="text-xs text-zinc-400 font-medium uppercase tracking-wider mb-1.5">Status Pembayaran</p>
                            @if($order->status_pembayaran === 'lunas')
                                <flux:badge size="sm" color="green">Lunas</flux:badge>
                            @elseif($order->status_pembayaran === 'menunggu_konfirmasi')
                                <flux:badge size="sm" color="amber" class="animate-pulse">Menunggu Verifikasi</flux:badge>
                            @elseif($order->status_pembayaran === 'ditolak')
                                <flux:badge size="sm" color="red">Ditolak</flux:badge>
                            @else
                                <flux:badge size="sm" color="zinc">Belum Bayar</flux:badge>
                            @endif
                        </div>
                        <div>
                            <p class="text-xs text-zinc-400 font-medium uppercase tracking-wider mb-1.5">Status Pengerjaan</p>
                            @if($order->status_pengerjaan === 'selesai')
                                <flux:badge size="sm" color="green">Selesai</flux:badge>
                            @elseif($order->status_pengerjaan === 'diproses')
                                <flux:badge size="sm" color="indigo">Dalam Proses</flux:badge>
                            @else
                                <flux:badge size="sm" color="zinc">Belum Mulai</flux:badge>
                            @endif
                        </div>
                    </div>
                </flux:card>

                {{-- Panel Validasi & Pengerjaan (Hanya ADMIN / PEKERJA) --}}
                @if(auth()->user()->isAdmin() || auth()->user()->isPekerja())
                    <flux:card class="p-6 border-indigo-200 dark:border-indigo-900/50">
                        <flux:heading size="lg" class="mb-4 font-bold text-indigo-600 dark:text-indigo-400">Verifikasi Admin</flux:heading>
                        
                        <form action="{{ route('orders.status', $order->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                            @csrf
                            
                            <div>
                                <label class="block text-xs font-semibold text-zinc-500 uppercase tracking-wider mb-1.5">Update Status Bayar</label>
                                <select name="status_pembayaran" class="w-full rounded-lg border border-zinc-200 bg-white px-3 py-2 text-sm dark:border-zinc-800 dark:bg-zinc-950">
                                    <option value="belum_bayar" {{ $order->status_pembayaran === 'belum_bayar' ? 'selected' : '' }}>Belum Bayar</option>
                                    <option value="menunggu_konfirmasi" {{ $order->status_pembayaran === 'menunggu_konfirmasi' ? 'selected' : '' }}>Menunggu Konfirmasi</option>
                                    <option value="lunas" {{ $order->status_pembayaran === 'lunas' ? 'selected' : '' }}>Lunas (Setujui)</option>
                                    <option value="ditolak" {{ $order->status_pembayaran === 'ditolak' ? 'selected' : '' }}>Ditolak</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-xs font-semibold text-zinc-500 uppercase tracking-wider mb-1.5">Update Status Kerja</label>
                                <select name="status_pengerjaan" class="w-full rounded-lg border border-zinc-200 bg-white px-3 py-2 text-sm dark:border-zinc-800 dark:bg-zinc-950">
                                    <option value="belum_mulai" {{ $order->status_pengerjaan === 'belum_mulai' ? 'selected' : '' }}>Belum Mulai</option>
                                    <option value="diproses" {{ $order->status_pengerjaan === 'diproses' ? 'selected' : '' }}>Dalam Proses</option>
                                    <option value="selesai" {{ $order->status_pengerjaan === 'selesai' ? 'selected' : '' }}>Selesai</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-xs font-semibold text-zinc-500 uppercase tracking-wider mb-1.5">Unggah Berkas Hasil Joki</label>
                                <input type="file" name="file_hasil" class="block w-full text-xs text-zinc-500 file:mr-3 file:py-1.5 file:px-3 file:rounded-lg file:border-0 file:text-xs file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                                @if($order->file_hasil)
                                    <p class="mt-1.5 text-[11px] text-zinc-500">Hasil saat ini: <a href="{{ route('orders.download', $order->id) }}" class="text-indigo-600 hover:underline">Download</a></p>
                                @endif
                            </div>

                            <flux:button type="submit" variant="filled" color="indigo" class="w-full mt-2">
                                Simpan Verifikasi
                            </flux:button>
                        </form>
                    </flux:card>
                @endif

                {{-- Bukti Pembayaran Panel (Untuk Klien, atau Admin yang mau check) --}}
                <flux:card class="p-6">
                    <flux:heading size="lg" class="mb-4 font-bold">Bukti Pembayaran</flux:heading>
                    
                    @if($order->bukti_bayar)
                        <div class="mb-4 rounded-xl border border-zinc-100 bg-zinc-50/50 p-2 dark:border-zinc-800 dark:bg-zinc-950/20">
                            <img src="{{ asset('storage/' . $order->bukti_bayar) }}" alt="Bukti Transfer" class="w-full h-auto rounded-lg object-contain max-h-64 shadow-inner">
                        </div>
                    @else
                        <div class="mb-4 rounded-xl border border-zinc-100 bg-zinc-50/50 p-4 text-center dark:border-zinc-800 dark:bg-zinc-950/20">
                            <p class="text-xs text-zinc-400">Belum ada bukti pembayaran yang diunggah.</p>
                        </div>
                    @endif

                    {{-- Form Upload Bukti Transfer --}}
                    @if($order->status_pembayaran !== 'lunas')
                        <form action="{{ route('orders.bukti', $order->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                            @csrf
                            <div>
                                <label class="block text-xs font-semibold text-zinc-500 uppercase tracking-wider mb-1.5">Unggah Bukti Transfer Baru</label>
                                <input type="file" name="bukti_bayar" accept="image/*" class="block w-full text-xs text-zinc-500 file:mr-3 file:py-1.5 file:px-3 file:rounded-lg file:border-0 file:text-xs file:font-semibold file:bg-zinc-100 file:text-zinc-700 hover:file:bg-zinc-200" required>
                            </div>
                            <flux:button type="submit" variant="filled" color="zinc" class="w-full">
                                Unggah Bukti Transfer
                            </flux:button>
                        </form>
                    @endif
                </flux:card>

            </div>

        </div>

    </div>
</x-layouts::app>
