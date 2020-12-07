<!--Absen-->

<div class="container">
    <h3 class="mb-4"><i class="fas fa-users"></i></i> Daftar User</h3>
    <hr>
    <div class="row">
        <div class="col-md-5">
            <form action="" method="post" class="mb-3">
                <label for=""><strong>Pencarian :</strong></label>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Masukkan kata kunci !" name="cari_user">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit"><i class="fas fa-search pr-2"></i>Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->session->flashdata('pesan'); ?>
<div class="container">
    <table class="table table-striped text-center">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Username</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Password</th>
                <th scope="col">Nomor Hp</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Aksi</th>

            </tr>
        </thead>
        <tbody>
            <?php $start; ?>
            <?php foreach ($user as $a) : ?>
                <tr>
                    <th scope="row"><?= ++$start; ?></th>
                    <td><?= $a['username']; ?></td>
                    <td><?= $a['nama_lengkap']; ?></td>
                    <td><?= $a['password']; ?></td>
                    <td><?= $a['nohp']; ?></td>
                    <td><?= $a['jkel']; ?></td>
                    <td><?= $a['jabatan']; ?></td>
                    <td>
                        <a href="<?= base_url(); ?>dashedituser/<?= $a['id']; ?>" class="edit"><i class="fas fa-pen-square " style="font-size: 22px;"></i></a>

                        <span style="border-left: 2px solid gray; height: 400px; margin: 0 10px;"></span>

                        <a href="<?= base_url(); ?>dashhapususer/<?= $a['id']; ?>" class="hapus" onclick="return confirm('Yakin?');"><i class="fas fa-trash-alt" style="font-size: 22px; "></i></a>
                    </td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?= $this->pagination->create_links(); ?>
</div>