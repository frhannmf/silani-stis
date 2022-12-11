

<?php $__env->startSection('title', 'Ubah Password - SILANI STIS'); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('js/toggle_password.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
<div class="container">
  <div class="row my-5">
    <div class="col-md-6 offset-md-3">
      <div class="card">
        <div class="card-body">
          <h3 class="mb-5">Ubah Password</h3>
          <form method="POST" action="<?php echo e(route('handle_change_password', ['id' => $user['id']])); ?>">
            <?php echo csrf_field(); ?>
            <div class="mb-4">
              <label for="new_password" class="form-label">Password Baru</label>
              <input type="password" class="form-control password-input" id="new_password" name="new_password">
            </div>
            <div class="mb-4">
              <label for="password" class="form-label">Password Saat Ini</label>
              <input type="password" class="form-control password-input" id="password" name="password">
            </div>
            <div class="mb-5">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="toggle-password">
                <label class="form-check-label" for="toggle-password">
                  Tampilkan Password
                </label>
              </div>
            </div>
            <?php if($errors->first('password')): ?>
              <div class="alert alert-danger text-sm" role="alert">
                <?php echo e($errors->first('password')); ?>

              </div>
            <?php endif; ?>
            <div class="d-flex justify-content-between align-items-center gap-2">
              <button type="submit" class="btn btn-primary flex-grow-1">Ubah Password</button>
              <a href="<?php echo e($user['role']=='USER'?route('user_dashboard'):route('admin_dashboard')); ?>" class="btn btn-dark flex-grow-1">Kembali</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\KULIAH STIS\SEMESTER 5\RPL\SILANI STIS\project_rpl\resources\views/change_password.blade.php ENDPATH**/ ?>