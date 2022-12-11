

<?php $__env->startSection('title', 'Detail Pengguna - SILANI STIS'); ?>

<?php $__env->startSection('body'); ?>
<div class="container">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <div class="card my-5">
        <div class="card-body">
          <h2>Hapus Akun <?php echo e($user['nim']); ?></h2>
          <div class="mb-4">
            <p class="mb-1">Nama</p>
            <p class="fw-bold"><?php echo e($user['name'] != null ? $user['name'] : '-'); ?></p>
          </div>
          <div class="mb-4">
            <p class="mb-1">NIM</p>
            <p class="fw-bold"><?php echo e($user['nim']); ?></p>
          </div>
          <div class="mb-4">
            <p class="mb-1">Email</p>
            <p class="fw-bold"><?php echo e($user['email']); ?></p>
          </div>
          <form action="<?php echo e(route('handle_admin_user_delete', ['id' => $user['id']])); ?>" method="post" class="mt-4">
            <?php echo csrf_field(); ?>
            <div class="d-flex justify-content-between align-items-center gap-2">
              <button type="submit" class="btn btn-danger flex-grow-1">Hapus Akun</button>
              <a href="<?php echo e(route('admin_user_list')); ?>" class="btn btn-dark flex-grow-1">Kembali</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\KULIAH STIS\SEMESTER 5\RPL\SILANI STIS\project_rpl\resources\views/admin/userman/delete_form.blade.php ENDPATH**/ ?>