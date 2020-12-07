<div class="preloader">
    <div class="loading">
        <img src="<?= base_url(); ?>img/loader6.gif" width="250"">
    </div>
</div>
<div class=" container login">

        <div class="row justify-content-center align-items-center" style="height: 100vh">
            <div class="judul-auth text-center mt-3 mb-3 mr-5">
                <h1>ABSENSI<strong>KARYAWAN</strong></h1>
            </div>
            <span class="mr-3"></span>
            <div class="col-lg-5">
                <?= $this->session->flashdata('pesan'); ?>
                <div>
                    <div class="card-body">
                        <form autocomplete="off" action="" method="post">
                            <h2 class="text-left"><strong style="letter-spacing:4px;"> LOGIN</strong></h2>
                            <hr>
                            <div class="form-group">
                                <label for="username">Username :</label>
                                <input type="text" id="username" name="username" class="form-control form-control-user" placeholder="Masukkan username">
                                <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="password">Password :</label>
                                <input type="password" id="password" name="password" class="form-control" placeholder="Masukkan password">
                                <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                            </div>

                            <div class="form-group text-right">
                                <button type="submit" value="ok" name="submit" class="btn btn-primary">Login</button>
                            </div>

                            <div class="row link">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <a href="<?= base_url(); ?>"><u> Kembali</u></a>
                                    </div>
                                </div>
                                <div class="col-md-6 text-right">
                                    <div class="form-group">
                                        <a href="<?= base_url(); ?>daftar"> <u>Belum punya akun?</u></a>
                                    </div>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>