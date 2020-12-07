<div class="preloader">
    <div class="loading">
        <img src="<?= base_url(); ?>img/loader6.gif" width="250"">
    </div>
</div>

<div class=" container registrasi ">
    <div class=" row justify-content-center align-items-center" style="height: 100vh">
        <div class="judul-auth text-center mt-3 mb-3 mr-5">
            <h1>ABSENSI<strong>KARYAWAN</strong></h1>
        </div>
        <span class="mr-3"></span>
        <div class="col-lg-6">
            <div class="register">
                <div class="card-body">
                    <form autocomplete="off" action="" method="post">
                        <h2 class="text-left"><strong style="letter-spacing: 5px;">REGISTRASI</strong></h2>
                        <hr>
                        <input type="hidden" name="tanggal" value="<?= date('Y-m-d'); ?>">
                        <input type="hidden" name="jam" value="<?= date('h:i:s'); ?>">
                        <div class="form-group">
                            <label for="user">Username</label>
                            <input type="text" id="user" name="username" class="form-control" placeholder="Masukkan Username" value="<?= set_value('username'); ?>">
                            <small class="form-text text-danger"><?= form_error('username'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama_lengkap">Nama Lengkap</label>
                            <input type="text" id="nama_lengkap" name="nama_lengkap" class="form-control" placeholder="Masukkan Nama Lengkap" value="<?= set_value('nama_lengkap'); ?>">
                            <small class=" form-text text-danger"><?= form_error('nama_lengkap'); ?></small>

                        </div>
                        <div class="form-group">
                            <label for="nohp">Nomor Hp</label>
                            <input type="number" maxlength="12" id="nohp" name="nohp" class="form-control" placeholder="Masukkan Nohp" value="<?= set_value('nohp'); ?>">
                            <small class=" form-text text-danger"><?= form_error('nohp'); ?></small>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jkel">Jenis Kelamin</label>
                                    <select name="jkel" id="jkel" class="form-control" value="<?= set_value('jkel'); ?>">
                                        <option value="">--Pilih--</option>
                                        <option value=" Pria">Pria</option>
                                        <option value="Wanita">Wanita</option>
                                    </select>
                                    <small class="form-text text-danger"><?= form_error('jkel'); ?></small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Jabatan">Jabatan</label>
                                    <select name="jabatan" id="Jabatan" class="form-control" value="<?= set_value('jabatan'); ?>">
                                        <option value="">--Pilih--</option>
                                        <option value="Karyawan">Karyawan</option>
                                        <option value="Magang">Magang</option>
                                        <option value="Manajer">Manajer</option>
                                    </select>
                                    <small class="form-text text-danger"><?= form_error('jabatan'); ?></small>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password1"> Password</label>
                                    <input type="password" id="password1" name="password1" class="form-control" placeholder="Masukkan Password">
                                    <small class="form-text text-danger"><?= form_error('password1'); ?></small>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password2">Konfirmasi</label>
                                    <input type="password" id="password2" name="password2" class="form-control" placeholder="Konfirmasi Password">
                                </div>
                            </div>
                        </div>

                        <div class="form-group text-right">
                            <button type=" submit" name="submit-daftar" class="btn btn-primary" style="width: 100%;">Simpan</button>
                        </div>
                        <div class="row link   ">
                            <div class="col-md-6 text">
                                <a href=" <?= base_url(); ?>"><u> Kembali</u></a>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href=" <?= base_url(); ?>login"><u> Sudah punya akun?</u></a>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

</div>