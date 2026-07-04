 

<?php $__env->startSection('content'); ?> 
<div class="container-fluid px-4 py-4">
    <div class="row">
        <div class="col-12">
            <h2 class="mb-4">Profil Saya</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 mb-4">
            <!-- Kartu Info Singkat -->
            <div class="card shadow-sm border-0 text-center py-4">
                <div class="card-body">
                    <div class="mb-3">
                        <img src="https://ui-avatars.com/api/?name=<?php echo e(urlencode(auth()->user()->name ?? 'User')); ?>&background=0D6EFD&color=fff" class="rounded-circle img-thumbnail" width="100" alt="Avatar">
                    </div>
                    <h5 class="card-title mb-1"><?php echo e(auth()->user()->name ?? 'Nama Pengguna'); ?></h5>
                    <p class="text-muted small"><?php echo e(auth()->user()->email ?? 'user@email.com'); ?></p>
                    <span class="badge bg-success">Sistem Aktif</span>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <!-- Form Edit Profil -->
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white py-3">
                    <h5 class="mb-0">Detail Profil</h5>
                </div>
                <div class="card-body">
                    <form action="#" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo e(auth()->user()->name ?? 'Nama Pengguna'); ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Alamat Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo e(auth()->user()->email ?? 'user@email.com'); ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password Baru (Kosongkan jika tidak diubah)</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="******">
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-primary px-4">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\joki-web\resources\views/services/index.blade.php ENDPATH**/ ?>