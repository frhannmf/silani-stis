

<?php $__env->startSection('title', 'List Form - SILANI STIS'); ?>

<?php $__env->startSection('body'); ?>
<div class="container">
  <div class="my-5">
    <h1>Daftar Pengajuan</h1>
    <a href="<?php echo e(route('user_dashboard')); ?>" class="btn btn-primary mt-3 mb-5">< Kembali ke Halaman Utama</a>
    <div>
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>Jenis Layanan</th>
            <th>Tanggal Pengambilan</th>
            <th>Status</th>
            <th>Keterangan</th>
          </tr>
        </thead>
        <tbody>
          <?php $__currentLoopData = $forms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $form): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($form['type']=='submitsma'?'Pengumpulan Ijazah SMA':($form['type']=='retrievesma'?'Pengambilan Ijazah SMA':($form['type']=='retrievestis'?'Pengambilan Ijazah STIS':($form['type']=='requestskalumnistis'?'Permintaan Surat Keterangan Alumni Polstat STIS':'Permintaan Surat Tidak Terdaftar di PDDIKTI')))); ?></td>
              <td><?php echo e(date('d F Y', strtotime($form['tanggal']))); ?></td>
              <td>
                <div class="badge <?php echo e($form['approve'] == 'Diterima'?'text-bg-primary':($form['approve']=='Ditolak'?'text-bg-danger':($form['approve'] == 'Diserahkan'?'text-bg-success':'text-bg-warning'))); ?>">
                  <?php echo e($form['approve']!=null?$form['approve']:'Diproses'); ?>

                </div>
              </td>
              <td><?php echo e($form['approve']=='Diterima'?'Silahkan ke kampus pada tanggal yang telah ditentukan':($form['approve']=='Diserahkan'?'Dokumen telah diserahkan':$form['reason'])); ?></td>
            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\KULIAH STIS\SEMESTER 5\RPL\SILANI STIS\project_rpl\resources\views/user/list_form.blade.php ENDPATH**/ ?>