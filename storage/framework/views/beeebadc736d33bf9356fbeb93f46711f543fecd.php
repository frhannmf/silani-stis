

<?php $__env->startSection('title', 'Daftar Pengguna Lupa Identitas - SILANI STIS'); ?>

<?php $__env->startSection('body'); ?>
<div class="container">
  <h2 class="mt-5 mb-3">Daftar Pengguna Lupa Identitas</h2>
  <a href="<?php echo e(route('admin_dashboard')); ?>" class="btn btn-dark">Kembali</a>
  <div class="mt-3">
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>NIM</th>
          <th>Email</th>
          <th>Tipe Identitas</th>
          <th>Status</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $resets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reset): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($reset['nim']?$reset['nim']:'-'); ?></td>
          <td><?php echo e($reset['email']); ?></td>
          <td>
            <div class="badge <?php echo e($reset['type']=='nim'?'text-bg-success':'text-bg-primary'); ?>">
              <?php echo e($reset['type']=='nim'?'NIM':'Password'); ?>

            </div>
          </td>
          <td>
            <div class="badge <?php echo e($reset['selesai']?'text-bg-success':'text-bg-warning'); ?>">
              <?php echo e($reset['selesai']?'Selesai':'Perlu Diproses'); ?>

            </div>
          </td>
          <td>
            <?php if($reset['type']=='nim'): ?>
              <a href="<?php echo e(route('forgot_nim_detail', ['id' => $reset['id']])); ?>" class="btn btn-primary btn-sm">Detail</a>
            <?php else: ?>
              <form method="POST" action="<?php echo e(route('handle_admin_reset_user', ['id' => $reset['id']])); ?>">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="nim" value="<?php echo e($reset['nim']); ?>">
                <button type="submit" class="btn btn-primary btn-sm">Reset</button>
              </form>
            <?php endif; ?>
          </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\KULIAH STIS\SEMESTER 5\RPL\SILANI STIS\project_rpl\resources\views/admin/forgot/index.blade.php ENDPATH**/ ?>