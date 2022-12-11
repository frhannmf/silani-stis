

<?php $__env->startSection('title', 'Daftar Pengajuan Layanan Pengguna - SILANI STIS'); ?>

<?php $__env->startSection('body'); ?>
<div class="container">
  <h2 class="mt-5 mb-3">Daftar Pengajuan Layanan Pengguna</h2>
  <div class="d-flex gap-2">
    <?php if(!request()->has('today')): ?>
    <a href="<?php echo e(route('admin_form_list', ['today' => '1'])); ?>" class="btn btn-success">Pengajuan Hari Ini</a>
    <?php endif; ?>
    <a href="<?php echo e(request()->has('today')?route('admin_form_list'):route('admin_dashboard')); ?>" class="btn btn-dark">Kembali</a>
  </div>
  <div class="mt-3">
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>Nama</th>
          <th>Jenis Layanan</th>
          <th>Tanggal Pengambilan</th>
          <th>Status</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $forms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $form): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($form['user']['name']); ?></td>
          <td><?php echo e($form['type']=='submitsma'?'Pengumpulan Ijazah SMA':($form['type']=='retrievesma'?'Pengambilan Ijazah SMA':($form['type']=='retrievestis'?'Pengambilan Ijazah STIS':($form['type']=='requestskalumnistis'?'Permintaan Surat Keterangan Alumni Polstat STIS':'Permintaan Surat Tidak Terdaftar di PDDIKTI')))); ?></td>
          <td><?php echo e(date('d F Y', strtotime($form['tanggal']))); ?></td>
          <td>
            <div class="badge <?php echo e($form['approve'] == 'Diterima'?'text-bg-primary':($form['approve']=='Ditolak'?'text-bg-danger':($form['approve'] == 'Diserahkan'?'text-bg-success':'text-bg-warning'))); ?>">
              <?php echo e($form['approve']!=null?$form['approve']:'Perlu Diproses'); ?>

            </div>
          </td>
          <td>
            <a href="<?php echo e(request()->has('today')?route('admin_form_detail', ['id' => $form['id'], 'today' => '1']):route('admin_form_detail', ['id' => $form['id']])); ?>" class="btn btn-success btn-sm">Detail</a>
          </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\KULIAH STIS\SEMESTER 5\RPL\SILANI STIS\project_rpl\resources\views/admin/form/index.blade.php ENDPATH**/ ?>