  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Formulir Pendaftaran OSKMTR 9G</h1>
              </div>
              <form class="user" method="POST" action="<?= base_url('auth/registration'); ?>" enctype="multipart/form-data">
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="name" placeholder="Nama Lengkap" name="name" value="<?= set_value('name') ?>">
                  <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="ttl" placeholder="Tempat Tanggal Lahir" name="ttl" value="<?= set_value('ttl') ?>">
                  <small class="pl-3">contoh : Probolinggo, 17 Agustus 2020</small>
                  <?= form_error('ttl', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="kelas" placeholder="Kelas" name="kelas" value="<?= set_value('kelas') ?>">
                  <?= form_error('kelas', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="alamat" placeholder="Alamat Lengkap" name="alamat" value="<?= set_value('alamat') ?>">
                  <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="no_hp" placeholder="Nomor HP" name="no_hp" value="<?= set_value('no_hp') ?>">
                  <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="pekerjaan" placeholder="Pekerjaan Orang Tua" name="pekerjaan" value="<?= set_value('pekerjaan') ?>">
                  <?= form_error('pekerjaan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="no_hp_ortu" placeholder="Nomor HP Orang Tua" name="no_hp_ortu" value="<?= set_value('no_hp_ortu') ?>">
                  <?= form_error('no_hp_ortu', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <textarea name="pengalaman" class="form-control" id="exampleFormControlTextarea1" placeholder="Pengalaman Organisasi" rows="3"></textarea>
                </div>
                <div class="form-group">
                  <textarea name="prestasi" class="form-control" id="exampleFormControlTextarea1" placeholder="Prestasi" rows="3"></textarea>
                </div>
                <div class="form-group">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="pilihan1">Pilihan 1</label>
                    </div>
                    <select class="custom-select" name="pilihan1" id="pilihan1">
                      <option selected disabled>Choose...</option>
                      <?php foreach ($jabatan as $jab) : ?>
                        <option value="<?= $jab['id_jabatan']; ?>"><?= $jab['jabatan']; ?></option>
                      <?php endforeach; ?>
                    </select>
                    <?= form_error('pilihan1', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                </div>
                <div class="form-group" id="subjabatan1">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="subjabatan1">Pilihan 1</label>
                    </div>
                    <select class="custom-select" name="subjabatan1" id="subjabatan1">
                      <option selected disabled>Choose...</option>
                      <?php foreach ($sub_jabatan as $sub) : ?>
                        <option value="<?= $sub['id_sub']; ?>"><?= $sub['sub_jabatan']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="pilihan2">Pilihan 2</label>
                    </div>
                    <select class="custom-select" name="pilihan2" id="pilihan2">
                      <option selected disabled>Choose...</option>
                      <?php foreach ($jabatan as $jab) : ?>
                        <option value="<?= $jab['id_jabatan']; ?>"><?= $jab['jabatan']; ?></option>
                      <?php endforeach; ?>
                    </select>
                    <?= form_error('pilihan2', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                </div>
                <div class="form-group" id="subjabatan2">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="subjabatan2">Pilihan 2</label>
                    </div>
                    <select class="custom-select" name="subjabatan2" id="subjabatan2">
                      <option selected disabled>Choose...</option>
                      <?php foreach ($sub_jabatan as $sub) : ?>
                        <option value="<?= $sub['id_sub']; ?>"><?= $sub['sub_jabatan']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="custom-control custom-checkbox small">
                    <input type="checkbox" class="custom-control-input" id="customCheck" name="setuju">
                    <label class="custom-control-label" for="customCheck">*centang ini sebagai bukti setuju orang tua</label>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="email" placeholder="Email Address" name="email" value="<?= set_value('email') ?>">
                  <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-9 input-group mb-3">
                    <div class="custom-file">
                      <input name="foto" type="file" class="custom-file-input" id="inputGroupFile02">
                      <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Upload Foto</label>
                    </div>
                    <?= form_error('foto', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <img src="<?= base_url('assets/img/profile/default.jpg'); ?>" alt="..." width="64px" id="box" class="img-thumbnail col-sm-3">
                </div>
                <div class="alert alert-danger" role="alert">
                  <h4 class="alert-heading">PERHATIAN</h4>
                  <hr>
                  <p class="font-weight-bolder">Catat Password dengan Baik, Karena jika lupa password tidak bisa melihat pengumuman</p>

                </div>
                <!-- <small class="text-danger pl-3 font-weight-bold mb-3">PASSWORD SEBAIKNYA DITULIS AGAR TIDAK LUPA</small> -->
                <button type="submit" class="btn btn-primary btn-user btn-block" onclick="return confirm('Data yang anda isi tidak bisa diubah nanti, sudah yakin dengan data anda ?')">
                  Daftar
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>