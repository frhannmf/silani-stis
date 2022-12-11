

<?php $__env->startSection('title', 'Ubah Pengguna - SILANI STIS'); ?>

<?php $__env->startSection('body'); ?>
<div class="container">
  <div class="row my-5">
    <div class="col-md-6 offset-md-3">
      <div class="card">
        <div class="card-body">
          <h3 class="mb-3">Ubah Akun Pengguna</h3>
          <form method="POST" action="<?php echo e(route('handle_admin_user_update', ['id' => $user['id']])); ?>">
            <?php echo csrf_field(); ?>
            <div class="mb-4">
              <label for="nim" class="form-label">NIM</label>
              <input type="text" class="form-control" id="nim" name="nim" value="<?php echo e($user['nim']); ?>">
            </div>
            <div class="mb-4">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" value="<?php echo e($user['email']); ?>">
            </div>
            <div class="mb-4">
              <label for="password" class="form-label">Password</label>
              <input type="text" placeholder="masukkan password baru" class="form-control" id="password" name="password">
            </div>
            <div class="mb-4">
              <label for="name" class="form-label">Nama</label>
              <input type="text" class="form-control" id="name" name="name" value="<?php echo e($user['name']); ?>">
            </div>
            <div class="mb-4">
              <p class="form-label">Jenis Kelamin</p>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="gendermale" value="Laki-Laki" <?php echo e($user['gender'] == 'Laki-Laki'?'checked':''); ?>>
                <label class="form-check-label" for="gendermale">Laki-Laki</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="genderfemale" value="Perempuan" <?php echo e($user['gender'] == 'Perempuan'?'checked':''); ?>>
                <label class="form-check-label" for="genderfemale">Perempuan</label>
              </div>
            </div>
            <div class="mb-4">
              <label for="prodi" class="form-label">Program Studi</label>
              <select id="prodi" name="prodi" class="form-select" aria-label="prodi">
                <option <?php echo e($user['prodi'] == null?'selected':''); ?>>Pilih Prodi</option>
                <option <?php echo e($user['prodi'] == 'DIV Statistika'?'selected':''); ?> value="DIV Statistika">DIV Statistika</option>
                <option <?php echo e($user['prodi'] == 'DIV Komputasi Statistik'?'selected':''); ?> value="DIV Komputasi Statistik">DIV Komputasi Statistik</option>
                <option <?php echo e($user['prodi'] == 'DIII Statistika'?'selected':''); ?> value="DIII Statistika">DIII Statistika</option>
              </select>
            </div>
            <div class="mb-4">
              <p class="form-label">Status Kelulusan</p>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" id="status1" value="ALUMNI" <?php echo e($user['status'] == 'ALUMNI'?'checked':''); ?>>
                <label class="form-check-label" for="status1">ALUMNI</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" id="status2" value="MAHASISWA" <?php echo e($user['status'] == 'MAHASISWA'?'checked':''); ?>>
                <label class="form-check-label" for="status2">MAHASISWA</label>
              </div>
            </div>
            <div class="mb-4">
              <label for="tahunlulus" class="form-label">Tahun Lulus</label>
              <input type="text" class="form-control" id="tahunlulus" name="tahun_lulus" value="<?php echo e($user['tahun_lulus']); ?>">
            </div>
            <div class="d-flex justify-content-between align-items-center gap-2">
              <button type="submit" class="btn btn-warning flex-grow-1">Ubah Akun</button>
              <a href="<?php echo e(route('admin_user_list')); ?>" class="btn btn-danger flex-grow-1">Kembali</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\KULIAH STIS\SEMESTER 5\RPL\SILANI STIS\project_rpl\resources\views/admin/userman/update_form.blade.php ENDPATH**/ ?>