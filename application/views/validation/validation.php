<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Validasi Formulir Pendaftaran OSKMTR 9G</h1>
                        </div>
                        <form class="user" method="POST" action="<?= base_url('landing/update'); ?>" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="name" placeholder="Nama Lengkap" name="name" value="<?= $user['name'] ?>" readonly>
                                <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="ttl" placeholder="Tempat Tanggal Lahir" name="ttl" value="<?= $user['ttl'] ?>" readonly>
                                <small class="pl-3">contoh : Probolinggo, 17 Agustus 2020</small>
                                <?= form_error('ttl', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="kelas" placeholder="Kelas" name="kelas" value="<?= $user['kelas'] ?>" readonly>
                                <?= form_error('kelas', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="alamat" placeholder="Alamat Lengkap" name="alamat" value="<?= $user['alamat'] ?>" readonly>
                                <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="no_hp" placeholder="Nomor HP" name="no_hp" value="<?= $user['no_hp'] ?>" readonly>
                                <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="pekerjaan" placeholder="Pekerjaan Orang Tua" name="pekerjaan" value="<?= $user['p_ortu'] ?>" readonly>
                                <?= form_error('pekerjaan', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="no_hp_ortu" placeholder="Nomor HP Orang Tua" name="no_hp_ortu" value="<?= $user['no_ortu'] ?>" readonly>
                                <?= form_error('no_hp_ortu', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <textarea style="color: #6e707e;background-color: #fff;border-color: #bac8f3;outline: 0;box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.25);" name="pengalaman" class="form-control" id="exampleFormControlTextarea1" placeholder="Pengalaman Organisasi" rows="3"><?= $user['pengalaman']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <textarea style="color: #6e707e;background-color: #fff;border-color: #bac8f3;outline: 0;box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.25);" name="prestasi" class="form-control" id="exampleFormControlTextarea1" placeholder="Prestasi" rows="3"><?= $user['prestasi']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="pilihan1">Pilihan 1</label>
                                    </div>
                                    <select class="custom-select" name="pilihan1" id="pilihan1" disabled>
                                        <?php $pil1 = $this->db->get_where('jabatan', ['id_jabatan' => $user['pilihan1']])->row_array(); ?>
                                        <option selected disabled><?= $pil1['jabatan']; ?></option>
                                    </select>
                                    <?= form_error('pilihan1', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <?php if ($user['sub_jabatan1'] > 0) : ?>
                                <div class="form-group" id="subjabatan1">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="subjabatan1">Pilihan 1</label>
                                        </div>
                                        <select class="custom-select" name="subjabatan1" id="subjabatan1" disabled>
                                            <?php $sub_pil1 = $this->db->get_where('sub_jabatan', ['id_sub' => $user['sub_jabatan1']])->row_array(); ?>
                                            <option selected disabled><?= $sub_pil1['sub_jabatan']; ?></option>
                                        </select>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="pilihan2">Pilihan 2</label>
                                    </div>
                                    <select class="custom-select" name="pilihan2" id="pilihan2" disabled>
                                        <?php $pil2 = $this->db->get_where('jabatan', ['id_jabatan' => $user['pilihan2']])->row_array(); ?>
                                        <option selected disabled><?= $pil2['jabatan']; ?></option>
                                    </select>
                                    <?= form_error('pilihan2', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <?php if ($user['sub_jabatan2'] > 0) : ?>
                                <div class="form-group" id="subjabatan2">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="subjabatan2">Pilihan 2</label>
                                        </div>
                                        <select class="custom-select" name="subjabatan2" id="subjabatan2" disabled>
                                            <?php $sub_pil2 = $this->db->get_where('sub_jabatan', ['id_sub' => $user['sub_jabatan2']])->row_array(); ?>
                                            <option selected disabled><?= $sub_pil2['sub_jabatan']; ?></option>
                                        </select>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <div class="form-group row">
                                <div class="col-sm-9 input-group mb-3">
                                    <div class="custom-file">
                                        <input name="foto" type="file" class="custom-file-input" id="inputGroupFile02">
                                        <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Ganti Foto</label>
                                    </div>
                                    <?= form_error('foto', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <img src="<?= base_url('assets/img/foto_peserta/') . $user['image'] ?>" alt="..." width="64px" id="box" class="img-thumbnail col-sm-3">
                            </div>
                            <div class="alert alert-danger" role="alert">
                                <h4 class="alert-heading">PERHATIAN</h4>
                                <hr>
                                <p class="font-weight-bolder">- Cek kolom prestasi dan pengalaman organisasi, jika sudah terisi silahkan tekan tombol simpan</p>
                                <p class="font-weight-bolder">- Jika foto sudah sesuai tidak perlu menggantinya</p>
                                <p class="font-weight-bolder">- Periksa Kembali Seluruh Data yang anda isikan</p>

                            </div>
                            <!-- <small class="text-danger pl-3 font-weight-bold mb-3">PASSWORD SEBAIKNYA DITULIS AGAR TIDAK LUPA</small> -->
                            <button type="submit" class="btn btn-primary btn-user btn-block" onclick="return confirm('Data yang anda isi tidak bisa diubah nanti, sudah yakin dengan data anda ?')">
                                Simpan
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>