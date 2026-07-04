<x-layouts::app>
    <div class="flex h-full w-full flex-1 flex-col gap-6">
        
        {{-- Header Halaman --}}
        <div class="flex items-center justify-between">
            <div>
                <flux:heading size="xl">Manajemen Pengguna</flux:heading>
                <flux:subheading>Daftar seluruh pengguna yang terdaftar di dalam sistem</flux:subheading>
            </div>
        </div>

        {{-- Tabel Data Pengguna --}}
        <flux:card>
            <flux:table>
                <flux:table.columns>
                    <flux:table.column>Nama</flux:table.column>
                    <flux:table.column>Email</flux:table.column>
                    <flux:table.column>Role / Peran</flux:table.column>
                    <flux:table.column>Tanggal Bergabung</flux:table.column>
                </flux:table.columns>

                <flux:table.rows>
                    @forelse ($users as $user)
                        <flux:table.row>
                            <flux:table.cell>
                                <div class="flex items-center gap-3">
                                    <div class="flex size-8 shrink-0 items-center justify-center rounded-full bg-gradient-to-br from-indigo-500 to-purple-600 text-xs font-semibold text-white uppercase">
                                        {{ substr($user->name, 0, 2) }}
                                    </div>
                                    <span class="font-medium text-zinc-800 dark:text-zinc-200">{{ $user->name }}</span>
                                </div>
                            </flux:table.cell>
                            
                            <flux:table.cell class="text-zinc-500">
                                {{ $user->email }}
                            </flux:table.cell>
                            
                            <flux:table.cell>
                                <flux:badge size="sm" color="zinc" class="capitalize">
                                    {{ $user->role ?? 'User' }}
                                </flux:badge>
                            </flux:table.cell>
                            
                            <flux:table.cell class="text-zinc-500 text-sm">
                                {{ $user->created_at->translatedFormat('d M Y, H:i') }}
                            </flux:table.cell>
                        </flux:table.row>
                    @empty
                        <flux:table.row>
                            <flux:table.cell colspan="4">
                                <div class="py-12 text-center text-zinc-400">
                                    Tidak ada data pengguna ditemukan.
                                </div>
                            </flux:table.cell>
                        </flux:table.row>
                    @endforelse
                </flux:table.rows>
            </flux:table>

            {{-- Fitur Pagination --}}
            <div class="mt-4">
                {{ $users->links() }}
            </div>
        </flux:card>

    </div>
</x-layouts::app>