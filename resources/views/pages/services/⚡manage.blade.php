<?php

use App\Models\Service;
use App\Models\ServiceCategory;
use Flux\Flux;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('Manage Services')] class extends Component {
    public string $search = '';
    public string $name = '';
    public string $description = '';
    public string $base_price = '';
    public ?int $category_id = null;

    public ?int $editingServiceId = null;
    public bool $showServiceModal = false;
    public bool $showDeleteModal = false;
    public ?int $deletingServiceId = null;

    /**
     * Mendapatkan list layanan sesuai kata kunci pencarian.
     */
    #[Computed]
    public function services()
    {
        return Service::query()
            ->with('category')
            ->when($this->search, function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%')
                    ->orWhere('description', 'like', '%' . $this->search . '%');
            })
            ->latest()
            ->get();
    }

    /**
     * Mendapatkan list kategori untuk dropdown.
     */
    #[Computed]
    public function categories()
    {
        return ServiceCategory::all();
    }

    /**
     * Membuka modal tambah layanan baru.
     */
    public function createService(): void
    {
        $this->resetForm();
        $this->showServiceModal = true;
    }

    /**
     * Membuka modal edit layanan.
     */
    public function editService(int $id): void
    {
        $this->resetForm();
        $service = Service::findOrFail($id);
        $this->editingServiceId = $service->id;
        $this->name = $service->name;
        $this->description = $service->description ?? '';
        $this->base_price = $service->base_price;
        $this->category_id = $service->category_id;
        $this->showServiceModal = true;
    }

    /**
     * Simpan data layanan (buat baru / perbarui).
     */
    public function save(): void
    {
        $rules = [
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:service_categories,id',
            'base_price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
        ];

        $validated = $this->validate($rules);

        if ($this->editingServiceId) {
            $service = Service::findOrFail($this->editingServiceId);
            $service->update($validated);
            Flux::toast(variant: 'success', text: __('Layanan berhasil diperbarui.'));
        } else {
            Service::create($validated);
            Flux::toast(variant: 'success', text: __('Layanan baru berhasil ditambahkan.'));
        }

        $this->closeServiceModal();
    }

    /**
     * Konfirmasi hapus layanan.
     */
    public function confirmDelete(int $id): void
    {
        $this->deletingServiceId = $id;
        $this->showDeleteModal = true;
    }

    /**
     * Eksekusi hapus layanan.
     */
    public function deleteService(): void
    {
        if ($this->deletingServiceId) {
            $service = Service::findOrFail($this->deletingServiceId);
            $service->delete();
            Flux::toast(variant: 'success', text: __('Layanan berhasil dihapus.'));
        }

        $this->closeDeleteModal();
    }

    public function closeServiceModal(): void
    {
        $this->showServiceModal = false;
        $this->resetForm();
    }

    public function closeDeleteModal(): void
    {
        $this->showDeleteModal = false;
        $this->resetForm();
    }

    public function resetForm(): void
    {
        $this->reset('name', 'description', 'base_price', 'category_id', 'editingServiceId', 'deletingServiceId');
        $this->resetValidation();
    }
}; ?>

<div class="flex h-full w-full flex-1 flex-col gap-6 rounded-xl p-6 bg-white dark:bg-zinc-900 border border-neutral-200 dark:border-neutral-700 shadow-sm">
    
    <!-- Header -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 border-b border-neutral-200 dark:border-neutral-700 pb-5">
        <div>
            <flux:heading size="xl" class="font-semibold text-neutral-900 dark:text-neutral-100">{{ __('Daftar Layanan Jasa') }}</flux:heading>
            <flux:subheading class="text-sm text-neutral-500 dark:text-neutral-400 mt-1">{{ __('Kelola produk layanan jasa dan pengisian harga dasar.') }}</flux:subheading>
        </div>
        
        <div class="flex items-center gap-3">
            <flux:button variant="primary" icon="plus" wire:click="createService" class="cursor-pointer">
                {{ __('Tambah Layanan') }}
            </flux:button>
        </div>
    </div>

    <!-- Pencarian -->
    <div class="w-full max-w-md">
        <flux:input 
            wire:model.live.debounce.300ms="search" 
            type="search" 
            icon="magnifying-glass" 
            placeholder="{{ __('Cari layanan...') }}" 
            class="w-full"
        />
    </div>

    <!-- Tabel Layanan -->
    <div class="border rounded-xl border-zinc-200 dark:border-zinc-700 overflow-hidden bg-white dark:bg-zinc-800/50 shadow-sm">
        <flux:table>
            <flux:table.columns>
                <flux:table.column class="w-16">No</flux:table.column>
                <flux:table.column>Nama Layanan</flux:table.column>
                <flux:table.column>Kategori</flux:table.column>
                <flux:table.column>Harga Dasar</flux:table.column>
                <flux:table.column>Deskripsi</flux:table.column>
                <flux:table.column class="w-28 text-right">Aksi</flux:table.column>
            </flux:table.columns>

            <flux:table.rows>
                @forelse ($this->services as $service)
                    <flux:table.row :key="$service->id">
                        <flux:table.cell class="font-medium text-zinc-500 dark:text-zinc-400">
                            {{ $loop->iteration }}
                        </flux:table.cell>
                        
                        <flux:table.cell class="font-semibold text-zinc-950 dark:text-white">
                            {{ $service->name }}
                        </flux:table.cell>

                        <flux:table.cell>
                            @if ($service->category)
                                <flux:badge size="sm" color="zinc">{{ $service->category->name }}</flux:badge>
                            @else
                                <span class="text-zinc-400 text-xs italic">—</span>
                            @endif
                        </flux:table.cell>
                        
                        <flux:table.cell class="font-medium text-emerald-600 dark:text-emerald-400">
                            Rp {{ number_format($service->base_price, 0, ',', '.') }}
                        </flux:table.cell>

                        <flux:table.cell class="text-zinc-500 dark:text-zinc-400 max-w-xs truncate">
                            {{ $service->description ?? '-' }}
                        </flux:table.cell>
                        
                        <flux:table.cell class="text-right">
                            <div class="flex items-center justify-end gap-1">
                                <flux:button
                                    variant="ghost"
                                    size="sm"
                                    icon="pencil-square"
                                    wire:click="editService({{ $service->id }})"
                                    class="text-neutral-600 dark:text-neutral-300 hover:bg-neutral-200 dark:hover:bg-zinc-700 cursor-pointer"
                                    title="{{ __('Edit') }}"
                                />
                                <flux:button
                                    variant="ghost"
                                    size="sm"
                                    icon="trash"
                                    wire:click="confirmDelete({{ $service->id }})"
                                    class="text-red-500 hover:text-red-600 hover:bg-red-50 dark:hover:bg-red-950/50 cursor-pointer"
                                    title="{{ __('Hapus') }}"
                                />
                            </div>
                        </flux:table.cell>
                    </flux:row>
                @empty
                    <flux:table.row>
                        <flux:table.cell colspan="6" class="text-center py-12">
                            <div class="mx-auto mb-4 flex size-16 items-center justify-center rounded-2xl bg-neutral-100 dark:bg-zinc-800 border border-neutral-200 dark:border-zinc-700 text-neutral-400 dark:text-neutral-500">
                                <flux:icon.briefcase class="size-8" />
                            </div>
                            <p class="font-semibold text-neutral-800 dark:text-neutral-200 text-lg">{{ __('Belum ada layanan') }}</p>
                            <flux:text class="mt-1 text-sm text-neutral-500 dark:text-neutral-400">
                                {{ __('Tambahkan layanan baru untuk memulainya.') }}
                            </flux:text>
                        </flux:table.cell>
                    </flux:row>
                @endforelse
            </flux:table.rows>
        </flux:table>
    </div>

    <!-- Modal Form (Tambah / Edit) -->
    <flux:modal
        name="service-modal"
        class="max-w-lg md:min-w-[28rem]"
        @close="$wire.resetForm"
        wire:model="showServiceModal"
    >
        <form wire:submit="save" class="space-y-6">
            <div class="space-y-2 border-b border-neutral-100 dark:border-zinc-800 pb-4">
                <flux:heading size="lg">{{ $editingServiceId ? __('Edit Layanan') : __('Tambah Layanan') }}</flux:heading>
                <flux:text>{{ __('Isi detail produk layanan jasa Anda di bawah ini.') }}</flux:text>
            </div>

            <div class="space-y-5">
                <!-- Dropdown Kategori -->
                <flux:select wire:model="category_id" :label="__('Kategori Layanan')" placeholder="{{ __('Pilih Kategori...') }}" required>
                    @foreach ($this->categories as $cat)
                        <flux:select.option value="{{ $cat->id }}">{{ $cat->name }}</flux:select.option>
                    @endforeach
                </flux:select>

                <!-- Nama Layanan -->
                <flux:input
                    wire:model="name"
                    :label="__('Nama Layanan')"
                    type="text"
                    required
                    placeholder="{{ __('e.g., Joki Rank Star (Mobile Legends)') }}"
                />

                <!-- Harga Dasar -->
                <flux:input
                    wire:model="base_price"
                    :label="__('Harga Dasar (Rp)')"
                    type="number"
                    required
                    placeholder="{{ __('e.g., 50000') }}"
                />

                <!-- Deskripsi -->
                <flux:textarea
                    wire:model="description"
                    :label="__('Deskripsi')"
                    placeholder="{{ __('Penjelasan lengkap produk layanan joki...') }}"
                    rows="3"
                />
            </div>

            <div class="flex gap-3 justify-end border-t border-neutral-100 dark:border-zinc-800 pt-4">
                <flux:button
                    variant="outline"
                    wire:click="closeServiceModal"
                    class="cursor-pointer"
                >
                    {{ __('Batal') }}
                </flux:button>
                <flux:button
                    variant="primary"
                    type="submit"
                    class="cursor-pointer"
                >
                    {{ __('Simpan') }}
                </flux:button>
            </div>
        </form>
    </flux:modal>

    <!-- Modal Konfirmasi Hapus -->
    <flux:modal
        name="delete-service-modal"
        class="max-w-md md:min-w-md"
        @close="$wire.resetForm"
        wire:model="showDeleteModal"
    >
        <div class="space-y-6">
            <div class="space-y-2">
                <flux:heading size="lg" class="text-red-600">{{ __('Hapus Layanan') }}</flux:heading>
                <flux:text>
                    {{ __('Apakah Anda yakin ingin menghapus layanan ini? Data pemesanan yang berhubungan mungkin akan terpengaruh. Tindakan ini tidak dapat dibatalkan.') }}
                </flux:text>
            </div>

            <div class="flex gap-3 justify-end">
                <flux:button
                    variant="outline"
                    wire:click="closeDeleteModal"
                    class="cursor-pointer"
                >
                    {{ __('Batal') }}
                </flux:button>
                <flux:button
                    variant="danger"
                    wire:click="deleteService"
                    class="cursor-pointer"
                >
                    {{ __('Hapus') }}
                </flux:button>
            </div>
        </div>
    </flux:modal>
</div>
