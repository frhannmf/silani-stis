

<?php $__env->startSection('title', 'Detail Pengguna - SILANI STIS'); ?>

<?php $__env->startSection('body'); ?>
<div class="container">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <div class="card my-5">
        <div class="card-body">
          <h2>Detail Akun</h2>
          <div class="row">
            <div class="col-12 col-md-6">
              <p class="mb-1">Nama</p>
              <p class="fw-bold"><?php echo e($user['name']); ?></p>
            </div>
            <div class="col-12 col-md-6">
              <p class="mb-1">NIM</p>
              <p class="fw-bold"><?php echo e($user['nim']); ?></p>
            </div>
            <div class="col-12 col-md-6">
              <p class="mb-1">Email</p>
              <p class="fw-bold"><?php echo e($user['email']); ?></p>
            </div>
            <div class="col-12 col-md-6">
              <p class="mb-1">Jenis Kelamin</p>
              <p class="fw-bold"><?php echo e($user['gender']); ?></p>
            </div>
            <div class="col-12 col-md-6">
              <p class="mb-1">Tempat Tanggal Lahir</p>
              <p class="fw-bold"><?php echo e($user['ttl']); ?></p>
            </div>
            <div class="col-12 col-md-6">
              <p class="mb-1">Program Studi</p>
              <p class="fw-bold"><?php echo e($user['prodi']); ?></p>
            </div>
            <div class="col-12 col-md-6">
              <p class="mb-1">Status Kelulusan</p>
              <p class="fw-bold"><?php echo e($user['status']); ?></p>
            </div>
            <div class="col-12 col-md-6">
              <p class="mb-1">Tahun Lulus</p>
              <p class="fw-bold"><?php echo e($user['tahun_lulus']); ?></p>
            </div>
          </div>
          <div class="d-flex justify-content-between align-items-center gap-2">
            <a href="<?php echo e(route('admin_user_delete', ['id' => $user['id']])); ?>" class="btn btn-danger flex-grow-1">Hapus</a>
            <a href="<?php echo e(route('admin_user_update', ['id' => $user['id']])); ?>" class="btn btn-primary flex-grow-1">Ubah</a>
            <a href="<?php echo e(route('admin_user_list')); ?>" class="btn btn-dark flex-grow-1">Kembali</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\KULIAH STIS\SEMESTER 5\RPL\SILANI STIS\project_rpl\resources\views/admin/userman/detail.blade.php ENDPATH**/ ?>