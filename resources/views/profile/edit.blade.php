<div class="max-w-4xl mx-auto p-6 space-y-6">
    {{-- Header --}}
    <h1 class="text-2xl font-bold text-zinc-800 dark:text-zinc-100">Profil Saya</h1>

    {{-- Kartu Profil --}}
    <div class="bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-700 rounded-xl shadow-sm p-8 flex items-center gap-6">
        <div class="w-20 h-20 bg-blue-600 rounded-2xl flex items-center justify-center text-white text-3xl font-bold shadow-lg">
            PE
        </div>
        <div>
            <h2 class="text-xl font-semibold text-zinc-900 dark:text-white">Perdana</h2>
            <p class="text-zinc-500">wahyuperdana@gmail.com</p>
            <span class="inline-flex items-center mt-2 px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400">
                Sistem Aktif
            </span>
        </div>
    </div>

    {{-- Kartu Detail & Form --}}
    <div class="bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-700 rounded-xl shadow-sm p-8">
        <h3 class="text-lg font-medium text-zinc-900 dark:text-white mb-6">Detail Profil</h3>
        
        <form class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-zinc-700 dark:text-zinc-300">Nama Lengkap</label>
                    <input type="text" value="Perdana" class="mt-1 block w-full rounded-lg border-zinc-300 dark:border-zinc-600 dark:bg-zinc-800 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-zinc-700 dark:text-zinc-300">Alamat Email</label>
                    <input type="email" value="wahyuperdana@gmail.com" class="mt-1 block w-full rounded-lg border-zinc-300 dark:border-zinc-600 dark:bg-zinc-800 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium text-zinc-700 dark:text-zinc-300">Password Baru</label>
                <input type="password" placeholder="******" class="mt-1 block w-full rounded-lg border-zinc-300 dark:border-zinc-600 dark:bg-zinc-800 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                <p class="mt-1 text-xs text-zinc-500">Kosongkan jika tidak ingin mengubah password.</p>
            </div>

            <div class="flex justify-end pt-4">
                <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg font-medium hover:bg-blue-700 transition shadow-md">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</div>