<!--Absen-->
<div class="container">
    <h3 class="mb-4"><i class="fas fa-address-book"></i> Daftar Absen</h3>
    <hr>
    <?= $this->session->flashdata('pesan'); ?>

    <form action="" method="post" class="mb-3">
        <div class="row">
            <div class="col-md-4">
                <label for="awal"><strong>Tanggal Awal :</strong></label>
            </div>
            <div class="col-md-4">
                <label for="awal"><strong>Tanggal Akhir :</strong></label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <input type="date" class="form-control" name="tanggal_awal">
            </div>
            <div class="col-md-4">
                <input type="date" class="form-control" name="tanggal_akhir">
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-6">
                        <button class="btn btn-primary mr-2" type="submit"><i class="fas fa-search pr-2"></i>Cari</button>
                    </div>
                    <div class="col-md-6 text-right">

                        <a href="<?= base_url(); ?>dashboard/cetakAbsen" class="btn btn-info text-white"> <i class="fas fa-file-download"></i> Unduh Absen</a>
                    </div>



                </div>

                <!-- <button class="btn btn-primary" type="submit">Laporan</button> -->
            </div>
        </div>

    </form>

</div>
<div class="container">
    <table class="table table-striped text-center">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Username</th>
                <th scope="col">Jenis-Kelamin</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Jam Datang</th>
                <th scope="col">Jam Pulang</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>

            </tr>
        </thead>
        <tbody>
            <?php $start; ?>
            <?php foreach ($absen as $a) : ?>
                <tr>
                    <th scope="row"><?= ++$start; ?></th>
                    <td><?= $a['username']; ?></td>
                    <td><?= $a['jkel']; ?></td>
                    <td><?= $a['jabatan']; ?></td>
                    <td><?= $a['tanggal']; ?></td>
                    <td><?= $a['jam_datang']; ?></td>
                    <td><?= $a['jam_pulang']; ?></td>
                    <?php if ($a['status'] == 1) : ?>
                        <td>
                            <div class="badge badge-success">Datang</div>
                        </td>
                    <?php elseif ($a['status'] == 0) : ?>
                        <td>
                            <div class="badge badge-danger">Pulang</div>
                        </td>
                    <?php endif; ?>

                    <td>
                        <a href="<?= base_url(); ?>dashboard/editAbsen/<?= $a['id']; ?>" class="edit"><i class="fas fa-pen-square " style="font-size: 22px;"></i></a>

                        <span style="border-left: 2px solid gray; height: 400px; margin: 0 10px;"></span>

                        <a href="<?= base_url(); ?>dashboard/hapusAbsen/<?= $a['id']; ?>" class="hapus" onclick="return confirm('Yakin?');"><i class="fas fa-trash-alt" style="font-size: 22px; "></i></a>
                    </td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?= $this->pagination->create_links(); ?>
</div>