<!-- <div class="preloader">
    <div class="loading">
        <img src="<?= base_url(); ?>img/loader5.gif" width="250"">
    </div>
</div> -->


<h3 class="mb-4"><i class="fas fa-address-book mr-2 ml-3"></i> Edit Absen</h3>
<hr>
<div class="row">
    <div class="col-lg-12">
        <div class="card register">
            <div class="card-body">
                <form autocomplete="off" action="" method="post">
                    <input type="hidden" name="id" value="<?= $absens['id']; ?>">
                    <h4 class="text-center">Edit Absen</h4>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama">Username</label>
                                <input type="text" id="nama" name="useranme" class="form-control" value="<?= $absens['username']; ?>" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="jkel">Jenis Kelamin</label>
                                <input type="text" name="jkel" class="form-control" value="<?= $absens['jkel']; ?>" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="jabatan">Jabatan</label>
                                <input type="text" name="jabatan" class="form-control" value="<?= $absens['jabatan']; ?>" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tanggal">Tanggal</label>
                                <input type="date" id="tanggal" name="tanggal" class="form-control" value="<?= $absens['tanggal']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="datang">Jam Datang</label>
                                <input type="time" id="datang" name="datang" class="form-control" value="<?= $absens['jam_datang']; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="pulang">Jam Pulang</label>
                                <input type="time" id="pulang" name="pulang" class="form-control" value="<?= $absens['jam_pulang']; ?>">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group text-right">
                                <a href="<?= base_url(); ?>dashabsen" class="btn btn-primary" style="width: 15%;"> Kembali
                                </a>
                                <button type=" submit" name="edit-absen" value="edit" class="btn btn-primary" style="width: 15%;">Simpan</button>
                            </div>
                        </div>
                    </div>

            </div>
            </form>
        </div>
    </div>
</div>
</div>