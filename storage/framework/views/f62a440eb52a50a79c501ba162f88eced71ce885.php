

<?php $__env->startSection('body'); ?>
<div class="container">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <div class="card my-5">
        <form method="POST" action="<?php echo e(route('handle_login')); ?>" class="card-body p-lg-5">
          <?php echo csrf_field(); ?>
          <div class="text-center mb-5">
            <img src="/images/logo.png" class="img-fluid mb-2"
              width="150px" alt="logo silani">
              <h1>SILANI STIS</h1>
          </div>
          <div class="mb-4">
            <h4>Masuk ke SILANI</h4>
          </div>
          <div class="mb-4">
            <input type="text" class="form-control" id="nim" name="nim" placeholder="NIM" required>
          </div>
          <div class="mb-4">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
          </div>
          <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" value="true" id="remember_me" name="remember_me">
            <label class="form-check-label" for="remember_me">
              Ingat saya?
            </label>
          </div>
          <div class="mb-4">
            <a data-bs-toggle="collapse" href="#lupa" role="button" aria-expanded="false" aria-controls="lupa">
              Lupa Password atau NIM?
            </a>
            <div class="collapse mt-3" id="lupa">
              <div class="d-flex justify-content-between align-items-center gap-2">
                <a href="<?php echo e(route('lupa_password')); ?>" class="btn btn-secondary btn-sm flex-grow-1" style="display: block">Lupa Password?</a>
                <a href="<?php echo e(route('lupa_nim')); ?>" class="btn btn-secondary btn-sm flex-grow-1" style="display: block">Lupa NIM?</a>
              </div>
            </div>
          </div>
          <?php if($errors->first('not_match')): ?>
            <div class="alert alert-danger text-sm" role="alert">
              <?php echo e($errors->first('not_match')); ?>

            </div>
          <?php endif; ?>
          <button type="submit" class="btn btn-primary px-5 mb-5 w-100">Masuk</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\KULIAH STIS\SEMESTER 5\RPL\SILANI STIS\project_rpl\resources\views/login.blade.php ENDPATH**/ ?>