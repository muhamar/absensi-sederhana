<!-- <div class="preloader">
    <div class="loading">
        <img src="<?= base_url(); ?>img/loader5.gif" width="250"">
    </div>
</div> -->

<h3 class="mb-4"><i class="fas fa-users mr-2 ml-3"></i></i> Edit User</h3>
<hr>
<div class="row">
    <div class="col-lg-12">
        <div class="card register">
            <div class="card-body">
                <form autocomplete="off" action="" method="post">
                    <input type="hidden" name="id" value="<?= $karyawans['id']; ?>">
                    <h4 class="text-center">Edit User</h4>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" id="username" name="username" class="form-control" value="<?= $karyawans['username']; ?>">
                                <small class="form-text text-danger"> <?= form_error('username'); ?></small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" id="nama" name="nama" class="form-control" value="<?= $karyawans['nama_lengkap']; ?>">
                                <small class="form-text text-danger"> <?= form_error('nama'); ?></small>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="text" id="password" name="password" class="form-control" value="<?= $karyawans['password']; ?>">
                                <small class="form-text text-danger"> <?= form_error('password'); ?></small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nohp">Nomor Hp</label>
                                <input type="number" id="nohp" name="nohp" class="form-control" value="<?= $karyawans['nohp']; ?>">
                                <small class="form-text text-danger"> <?= form_error('nohp'); ?></small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="jkel">Jenis Kelamin</label>
                                <select name="jkel" id="jkel" class="form-control">
                                    <?php foreach ($jkel as $j) : ?>
                                        <?php if ($j == $karyawans['jkel']) : ?>
                                            <option value="<?= $j; ?>" selected><?= $j; ?></option>
                                        <?php else : ?>
                                            <option value="<?= $j; ?>"><?= $j; ?></option>
                                        <?php endif; ?>

                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="jabatan">Jabatan</label>
                                <select name="jabatan" id="jabatan" class="form-control">
                                    <?php foreach ($jabatan as $j) : ?>
                                        <?php if ($j == $karyawans['jabatan']) : ?>
                                            <option value="<?= $j; ?>" selected><?= $j; ?></option>
                                        <?php else : ?>
                                            <option value="<?= $j; ?>"><?= $j; ?></option>
                                        <?php endif; ?>

                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tanggal">Tanggal Dibuat</label>
                                <input type="date" id="tanggal" name="tanggal" class="form-control" value="<?= $karyawans['tanggal']; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="jam">Jam Dibuat</label>
                                <input type="time" id="jam" name="jam" class="form-control" value="<?= $karyawans['jam']; ?>">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group text-right">
                                <a href="<?= base_url(); ?>dashabsen" class="btn btn-primary" style="width: 15%;"> Kembali
                                </a>
                                <button type=" submit" name="submit-daftar" class="btn btn-primary" style="width: 15%;">Simpan</button>
                            </div>
                        </div>
                    </div>

            </div>
            </form>
        </div>
    </div>
</div>
</div>