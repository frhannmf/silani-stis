

<?php $__env->startSection('title', 'Daftar Pengguna - SILANI STIS'); ?>

<?php $__env->startSection('body'); ?>
<div class="container">
  <h2 class="mt-5 mb-3">Daftar Semua Pengguna SILANI STIS</h2>
  <div class="d-flex gap-3">
    <a href="<?php echo e(route('admin_user_create')); ?>" class="btn btn-primary">Tambah Pengguna</a>
    <a href="<?php echo e(route('admin_dashboard')); ?>" class="btn btn-dark">Kembali</a>
  </div>
  <div class="mt-3">
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
            <div class="row">
              <div class="col">
                <a href="<?php echo e(route('admin_user_detail', ['id' => $user['id']])); ?>" class="btn btn-success btn-sm w-100">Detail</a>
              </div>
              <div class="col">
                <a href="<?php echo e(route('admin_user_update', ['id' => $user['id']])); ?>" class="btn btn-warning btn-sm w-100">Ubah</a>
              </div>
              <div class="col">
                <a href="<?php echo e(route('admin_user_delete', ['id' => $user['id']])); ?>" class="btn btn-danger btn-sm w-100">Hapus</a>
              </div>
            </div>
          </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\KULIAH STIS\SEMESTER 5\RPL\SILANI STIS\project_rpl\resources\views/admin/userman/index.blade.php ENDPATH**/ ?>