

<?php $__env->startSection('title', 'Form Pengambilan Ijazah SMA - SILANI STIS'); ?>

<?php $__env->startSection('style'); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="<?php echo e(asset('js/datepicker.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
<div class="container">
  <div class="row my-5">
    <div class="col-md-6 offset-md-3">
      <div class="card">
        <div class="card-body">
          <h3 class="mb-3">Form Pengambilan Ijazah SMA</h3>          
          <form method="POST" action="<?php echo e(route('handle_retrieve_sma')); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="user_id" value="<?php echo e($user_id); ?>">
            <div class="mb-4">
              <label for="nama" class="form-label">Nama Lengkap Sesuai Ijazah</label>
              <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-4">
              <label for="nomor" class="form-label">Nomor Ijazah</label>
              <input type="text" class="form-control" id="nomor" name="nomor" required>
            </div>
            <div class="mb-4">
              <label for="tanggal" class="form-label">Tanggal Pengambilan</label>
              <input type="text" class="form-control datepicker" id="tanggal" name="tanggal" required>
            </div>
            <div class="mb-4">
              <p class="form-label">Pengambil Ijazah</p>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="diwakilkan" id="pengumpulsendiri" value="false" checked required>
                <label class="form-check-label" for="pengumpulsendiri">Diri Sendiri</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="diwakilkan" id="pengumpuldiwakilkan" value="true">
                <label class="form-check-label" for="pengumpuldiwakilkan">Diwakilkan</label>
              </div>
            </div>
            <div class="mb-4">
              <label for="surat_kuasa" class="form-label">Surat Kuasa (jika diwakilkan)</label>
              <input class="form-control" type="file" id="surat_kuasa" name="surat_kuasa">
              <a href="/templates/surat_kuasa.docx" class="mt-2" download>Unduh Template Surat</a>
            </div>
            <div class="d-flex justify-content-between align-items-center gap-2">
              <button type="submit" class="btn btn-primary flex-grow-1">Buat Jadwal Pengambilan</button>
              <a href="<?php echo e(route('user_dashboard')); ?>" class="btn btn-dark flex-grow-1">Kembali</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\KULIAH STIS\SEMESTER 5\RPL\SILANI STIS\project_rpl\resources\views/user/forms/retrieve_sma.blade.php ENDPATH**/ ?>