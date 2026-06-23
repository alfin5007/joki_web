<?php

use App\Models\ServiceCategory;
use Flux\Flux;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('Service Categories')] class extends Component {
    public string $search = '';
    public string $name = '';
    public string $description = '';

    public ?int $editingCategoryId = null;
    public bool $showCategoryModal = false;
    public bool $showDeleteModal = false;
    public ?int $deletingCategoryId = null;

    /**
     * Get the categories matching search query.
     */
    #[Computed]
    public function categories()
    {
        return ServiceCategory::query()
            ->when($this->search, function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%')
                    ->orWhere('description', 'like', '%' . $this->search . '%');
            })
            ->latest()
            ->get();
    }

    /**
     * Open the modal for creating a new category.
     */
    public function createCategory(): void
    {
        $this->resetForm();
        $this->showCategoryModal = true;
    }

    /**
     * Open the modal for editing an existing category.
     */
    public function editCategory(int $id): void
    {
        $this->resetForm();
        $category = ServiceCategory::findOrFail($id);
        $this->editingCategoryId = $category->id;
        $this->name = $category->name;
        $this->description = $category->description ?? '';
        $this->showCategoryModal = true;
    }

    /**
     * Save the category (create or update).
     */
    public function save(): void
    {
        $rules = [
            'name' => 'required|string|max:255|unique:service_categories,name' . ($this->editingCategoryId ? ',' . $this->editingCategoryId : ''),
            'description' => 'nullable|string',
        ];

        $validated = $this->validate($rules);

        if ($this->editingCategoryId) {
            $category = ServiceCategory::findOrFail($this->editingCategoryId);
            $category->update($validated);
            Flux::toast(variant: 'success', text: __('Category updated successfully.'));
        } else {
            ServiceCategory::create($validated);
            Flux::toast(variant: 'success', text: __('Category created successfully.'));
        }

        $this->closeCategoryModal();
    }

    /**
     * Confirm deleting a category.
     */
    public function confirmDelete(int $id): void
    {
        $this->deletingCategoryId = $id;
        $this->showDeleteModal = true;
    }

    /**
     * Delete the category.
     */
    public function deleteCategory(): void
    {
        if ($this->deletingCategoryId) {
            $category = ServiceCategory::findOrFail($this->deletingCategoryId);
            $category->delete();
            Flux::toast(variant: 'success', text: __('Category deleted successfully.'));
        }

        $this->closeDeleteModal();
    }

    /**
     * Close modals and reset form validation.
     */
    public function closeCategoryModal(): void
    {
        $this->showCategoryModal = false;
        $this->resetForm();
    }

    public function closeDeleteModal(): void
    {
        $this->showDeleteModal = false;
        $this->resetForm();
    }

    public function resetForm(): void
    {
        $this->reset('name', 'description', 'editingCategoryId', 'deletingCategoryId');
        $this->resetValidation();
    }
}; ?>

<div class="flex h-full w-full flex-1 flex-col gap-6 rounded-xl p-6 bg-white dark:bg-zinc-900 border border-neutral-200 dark:border-neutral-700 shadow-sm">
    
    <!-- Header -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 border-b border-neutral-200 dark:border-neutral-700 pb-5">
        <div>
            <flux:heading size="xl" class="font-semibold text-neutral-900 dark:text-neutral-100">{{ __('Service Categories') }}</flux:heading>
            <flux:subheading class="text-sm text-neutral-500 dark:text-neutral-400 mt-1">{{ __('Manage categories for your services.') }}</flux:subheading>
        </div>
        
        <div class="flex items-center gap-3">
            <flux:button variant="primary" icon="plus" wire:click="createCategory" class="cursor-pointer">
                {{ __('Add Category') }}
            </flux:button>
        </div>
    </div>

    <!-- Search -->
    <div class="w-full max-w-md">
        <flux:input 
            wire:model.live.debounce.300ms="search" 
            type="search" 
            icon="magnifying-glass" 
            placeholder="{{ __('Search categories...') }}" 
            class="w-full"
        />
    </div>


    <!-- Categories Table -->
    <div class="border rounded-xl border-zinc-200 dark:border-zinc-700 overflow-hidden bg-white dark:bg-zinc-800/50 shadow-sm">
        <flux:table>
            <flux:table.columns>
                <flux:table.column class="w-16">No</flux:table.column>
                <flux:table.column>Nama Kategori</flux:table.column>
                <flux:table.column>Deskripsi</flux:table.column>
                <flux:table.column class="w-28 text-right">Aksi</flux:table.column>
            </flux:table.columns>

            <flux:table.rows>
                @forelse ($this->categories as $category)
                    <flux:table.row :key="$category->id">
                        <!-- Kolom No -->
                        <flux:table.cell class="font-medium text-zinc-500 dark:text-zinc-400">
                            {{ $loop->iteration }}
                        </flux:table.cell>
                        
                        <!-- Kolom Nama -->
                        <flux:table.cell class="font-semibold text-zinc-950 dark:text-white">
                            {{ $category->name }}
                        </flux:table.cell>
                        
                        <!-- Kolom Deskripsi -->
                        <flux:table.cell class="text-zinc-500 dark:text-zinc-400 max-w-md truncate">
                            {{ $category->description ?? '-' }}
                        </flux:table.cell>
                        
                        <!-- Kolom Aksi -->
                        <flux:table.cell class="text-right">
                            <div class="flex items-center justify-end gap-1">
                                <flux:button
                                    variant="ghost"
                                    size="sm"
                                    icon="pencil-square"
                                    wire:click="editCategory({{ $category->id }})"
                                    class="text-neutral-600 dark:text-neutral-300 hover:bg-neutral-200 dark:hover:bg-zinc-700 cursor-pointer"
                                    title="{{ __('Edit Category') }}"
                                />
                                <flux:button
                                    variant="ghost"
                                    size="sm"
                                    icon="trash"
                                    wire:click="confirmDelete({{ $category->id }})"
                                    class="text-red-500 hover:text-red-600 hover:bg-red-50 dark:hover:bg-red-950/50 cursor-pointer"
                                    title="{{ __('Delete Category') }}"
                                />
                            </div>
                        </flux:table.cell>
                    </flux:table.row>
                @empty
                    <!-- Tampilan jika Kategori Kosong -->
                    <flux:table.row>
                        <flux:table.cell colspan="4" class="text-center py-12">
                            <div class="mx-auto mb-4 flex size-16 items-center justify-center rounded-2xl bg-neutral-100 dark:bg-zinc-800 border border-neutral-200 dark:border-zinc-700 text-neutral-400 dark:text-neutral-500">
                                <flux:icon.rectangle-stack class="size-8" />
                            </div>
                            <p class="font-semibold text-neutral-800 dark:text-neutral-200 text-lg">{{ __('No categories found') }}</p>
                            <flux:text class="mt-1 text-sm text-neutral-500 dark:text-neutral-400">
                                {{ __('Try adjusting your search or add a new category to get started.') }}
                            </flux:text>
                        </flux:table.cell>
                    </flux:table.row>
                @endforelse
            </flux:table.rows>
        </flux:table>
    </div>



    <!-- Create/Edit Modal -->
    <flux:modal
        name="category-modal"
        class="max-w-lg md:min-w-[28rem]"
        @close="$wire.resetForm"
        wire:model="showCategoryModal"
    >
        <form wire:submit="save" class="space-y-6">
            <div class="space-y-2 border-b border-neutral-100 dark:border-zinc-800 pb-4">
                <flux:heading size="lg">{{ $editingCategoryId ? __('Edit Category') : __('Add Category') }}</flux:heading>
                <flux:text>{{ $editingCategoryId ? __('Update the service category details below.') : __('Create a new category to group your services.') }}</flux:text>
            </div>

            <div class="space-y-5">
                <flux:input
                    wire:model="name"
                    :label="__('Category Name')"
                    type="text"
                    required
                    placeholder="{{ __('e.g., Writing, Programming, Design') }}"
                    autofocus
                />

                <flux:textarea
                    wire:model="description"
                    :label="__('Description')"
                    placeholder="{{ __('Describe what kind of services belong to this category...') }}"
                    rows="3"
                />
            </div>

            <div class="flex gap-3 justify-end border-t border-neutral-100 dark:border-zinc-800 pt-4">
                <flux:button
                    variant="outline"
                    wire:click="closeCategoryModal"
                    class="cursor-pointer"
                >
                    {{ __('Cancel') }}
                </flux:button>
                <flux:button
                    variant="primary"
                    type="submit"
                    class="cursor-pointer"
                >
                    {{ __('Save') }}
                </flux:button>
            </div>
        </form>
    </flux:modal>

    <!-- Delete Confirmation Modal -->
    <flux:modal
        name="delete-category-modal"
        class="max-w-md md:min-w-md"
        @close="$wire.resetForm"
        wire:model="showDeleteModal"
    >
        <div class="space-y-6">
            <div class="space-y-2">
                <flux:heading size="lg" class="text-red-600">{{ __('Delete Category') }}</flux:heading>
                <flux:text>
                    {{ __('Are you sure you want to delete this category? All services associated with it might be affected. This action cannot be undone.') }}
                </flux:text>
            </div>

            <div class="flex gap-3 justify-end">
                <flux:button
                    variant="outline"
                    wire:click="closeDeleteModal"
                    class="cursor-pointer"
                >
                    {{ __('Cancel') }}
                </flux:button>
                <flux:button
                    variant="danger"
                    wire:click="deleteCategory"
                    class="cursor-pointer"
                >
                    {{ __('Delete') }}
                </flux:button>
            </div>
        </div>
    </flux:modal>
</div>
