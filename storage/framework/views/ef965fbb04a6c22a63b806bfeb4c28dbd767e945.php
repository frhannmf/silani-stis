

<?php $__env->startSection('title', 'Daftar Pengguna Lupa Identitas - SILANI STIS'); ?>

<?php $__env->startSection('body'); ?>
<div class="container">
  <h2 class="mt-5 mb-3">Daftar Pengguna Lupa Identitas</h2>
  <a href="<?php echo e(route('forgot_list')); ?>" class="btn btn-dark">Kembali</a>
  <div class="card mt-3">
    <div class="card-body">
      <h2>Identitas Akun</h2>
      <div class="row">
        <div class="col-12 col-md-6">
          <p class="mb-1">Nama</p>
          <p class="fw-bold"><?php echo e($reset['name']); ?></p>
        </div>
        <div class="col-12 col-md-6">
          <p class="mb-1">Jenis Kelamin</p>
          <p class="fw-bold"><?php echo e($reset['gender']); ?></p>
        </div>
        <div class="col-12 col-md-6">
          <p class="mb-1">Program Studi</p>
          <p class="fw-bold"><?php echo e($reset['prodi']); ?></p>
        </div>
        <div class="col-12 col-md-6">
          <p class="mb-1">Status Kelulusan</p>
          <p class="fw-bold"><?php echo e($reset['status']); ?></p>
        </div>
        <div class="col-12 col-md-6">
          <p class="mb-1">Tahun Lulus</p>
          <p class="fw-bold"><?php echo e($reset['tahun_lulus']); ?></p>
        </div>
      </div>
    </div>
  </div>
  <div class="mt-5">
    <h4 class="mb-2">Daftar akun dengan identitas yang hampir sama</h4>
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>NIM</th>
          <th>Nama</th>
          <th>Program Studi</th>
          <th>Status</th>
          <th>Tahun Lulus</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($user['nim']); ?></td>
          <td><?php echo e($user['name']); ?></td>
          <td><?php echo e($user['prodi']); ?></td>
          <td><?php echo e($user['status']); ?></td>
          <td><?php echo e($user['tahun_lulus']); ?></td>
          <td>
            <form method="POST" action="<?php echo e(route('handle_admin_reset_user', ['id' => $reset['id']])); ?>">
              <?php echo csrf_field(); ?>
              <input type="hidden" name="nim" value="<?php echo e($user['nim']); ?>">
              <button type="submit" class="btn btn-primary btn-sm">Reset</button>
            </form>
          </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\KULIAH STIS\SEMESTER 5\RPL\SILANI STIS\project_rpl\resources\views/admin/forgot/nim_detail.blade.php ENDPATH**/ ?>