

<?php $__env->startSection('title', 'Detail Pengajuan Layanan - SILANI STIS'); ?>

<?php $__env->startSection('body'); ?>
<div class="container">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <div class="card my-5">
        <div class="card-body">
          <h2>Detail Pengajuan Layanan</h2>
          <div class="mb-3">
            <p class="mb-1">Jenis Layanan</p>
            <p class="fw-bold"><?php echo e($form['type']=='submitsma'?'Pengumpulan Ijazah SMA':($form['type']=='retrievesma'?'Pengambilan Ijazah SMA':($form['type']=='retrievestis'?'Pengambilan Ijazah STIS':($form['type']=='requestskalumnistis'?'Permintaan Surat Keterangan Alumni Polstat STIS':'Permintaan Surat Tidak Terdaftar di PDDIKTI')))); ?></p>
          </div>
          <div class="mb-3">
            <p class="mb-1">Tanggal Pengambilan</p>
            <p class="fw-bold"><?php echo e(date('d F Y', strtotime($form['tanggal']))); ?></p>
          </div>
          <div class="mb-3">
            <p class="mb-1">Nama</p>
            <p class="fw-bold"><?php echo e($form['type']=='submitsma' || $form['type']=='retrievesma' || $form['type']=='retrievestis'?$form['nama']:$form['user']['name']); ?></p>
          </div>
          <?php if($form['type']=='retrievestis'): ?>
            <div class="mb-3">
              <p class="mb-1">Status Ikatan Dinas</p>
              <p class="fw-bold"><?php echo e($form['ikatan_dinas']); ?></p>
            </div>
            <div class="mb-3">
              <p class="mb-1">File Bukti Ikatan Dinas</p>
              <a href="/<?php echo e($form['bukti']); ?>" target="_blank">Unduh</a>
            </div>
          <?php endif; ?>
          <?php if($form['type']=='submitsma' || $form['type']=='retrievesma' || $form['type']=='retrievestis'): ?>
            <div class="mb-3">
              <p class="mb-1">Diwakilkan</p>
              <p class="fw-bold"><?php echo e($form['diwakilkan']?'Diwakilkan':'Diri Sendiri'); ?></p>
            </div>
            <?php if($form['diwakilkan']): ?>
              <?php if($form['type']=='retrievestis'): ?>
                <div class="mb-3">
                  <p class="mb-1">Nama Pengambil</p>
                  <p class="fw-bold"><?php echo e($form['pengambil']); ?></p>
                </div>
              <?php endif; ?>
              <div class="mb-3">
                <p class="mb-1">Surat Kuasa</p>
                <a href="/<?php echo e($form['surat_kuasa']); ?>" target="_blank">Unduh</a>
              </div>
            <?php endif; ?>
          <?php endif; ?>
          <?php if($form['type'] == 'requestskalumnistis' || $form['type'] == 'requestsuratpddikti'): ?>
            <div class="mb-3">
              <p class="mb-1">NIM</p>
              <p class="fw-bold"><?php echo e($form['user']['nim']); ?></p>
            </div>
            <div class="mb-3">
              <p class="mb-1">Program Studi</p>
              <p class="fw-bold"><?php echo e($form['user']['prodi']); ?></p>
            </div>
            <div class="mb-3">
              <p class="mb-1">Tahun Lulus</p>
              <p class="fw-bold"><?php echo e($form['user']['tahun_lulus']); ?></p>
            </div>
          <?php endif; ?>
          <?php if($form['type'] == 'requestsuratpddikti'): ?>
            <div class="mb-3">
              <p class="mb-1">Tempat Tanggal Lahir</p>
              <p class="fw-bold"><?php echo e($form['ttl']); ?></p>
            </div>
          <?php endif; ?>
          <?php if($form['type'] == 'requestskalumnistis' || $form['type'] == 'requestsuratpddikti'): ?>
            <div class="mb-3">
              <p class="mb-1">Keperluan pembuatan surat</p>
              <p class="fw-bold"><?php echo e($form['keperluan']); ?></p>
            </div>
          <?php endif; ?>
          <div class="mb-3">
            <p class="mb-1">Status</p>
            <div class="badge <?php echo e($form['approve'] == 'Diterima'?'text-bg-primary':($form['approve']=='Ditolak'?'text-bg-danger':($form['approve'] == 'Diserahkan'?'text-bg-success':'text-bg-warning'))); ?>">
              <?php echo e($form['approve']!=null?$form['approve']:'Perlu Diproses'); ?>

            </div>
          </div>
          <?php if($form['approve'] == 'Ditolak'): ?>
            <div class="mb-3">
              <p class="mb-1">Alasan Ditolak</p>
              <p class="fw-bold"><?php echo e($form['reason']); ?></p>
            </div>
          <?php endif; ?>
          <h3 class="mt-2">Aksi</h3>
          <?php if($form['approve'] == null): ?>
            <form action="<?php echo e(route('handle_form_approve', ['id' => $form['id']])); ?>" method="post" class="mb-3">
              <?php echo csrf_field(); ?>
              <input type="hidden" name="approve" value="Diterima">
              <?php if(request()->has('today')): ?>
              <input type="hidden" name="today" value="1">
              <?php endif; ?>
              <button type="submit" class="btn btn-success">Terima</button>
            </form>
            <form action="<?php echo e(route('handle_form_approve', ['id' => $form['id']])); ?>" method="post">
              <?php echo csrf_field(); ?>
              <input type="hidden" name="approve" value="Ditolak">
              <?php if(request()->has('today')): ?>
              <input type="hidden" name="today" value="1">
              <?php endif; ?>
              <div class="mb-3">
                <label for="reason" class="form-label">Alasan Ditolak</label>
                <input type="text" class="form-control" id="reason" name="reason">
              </div>
              <button type="submit" class="btn btn-danger">Tolak</button>
            </form>
          <?php endif; ?>
          <?php if($form['approve'] == 'Diterima'): ?>
            <form action="<?php echo e(route('handle_form_approve', ['id' => $form['id']])); ?>" method="post" class="mb-3">
              <?php echo csrf_field(); ?>
              <input type="hidden" name="approve" value="Diserahkan">
              <?php if(request()->has('today')): ?>
              <input type="hidden" name="today" value="1">
              <?php endif; ?>
              <button type="submit" class="btn btn-success">Telah Diserahkan</button>
            </form>
            <form action="<?php echo e(route('handle_form_approve', ['id' => $form['id']])); ?>" method="post">
              <?php echo csrf_field(); ?>
              <input type="hidden" name="approve" value="Ditolak">
              <?php if(request()->has('today')): ?>
              <input type="hidden" name="today" value="1">
              <?php endif; ?>
              <div class="mb-3">
                <label for="reason" class="form-label">Alasan Ditolak</label>
                <input type="text" class="form-control" id="reason" name="reason">
              </div>
              <button type="submit" class="btn btn-danger">Tolak</button>
            </form>
          <?php endif; ?>
          <a href="<?php echo e(request()->has('today')?route('admin_form_list', ['today' => '1']):route('admin_form_list')); ?>" class="btn btn-dark mt-3">Kembali</a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\KULIAH STIS\SEMESTER 5\RPL\SILANI STIS\project_rpl\resources\views/admin/form/detail.blade.php ENDPATH**/ ?>