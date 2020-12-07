<!--Absen-->
<div class="container">
    <h1 class="mb-4">Daftar Absen Keseluruhan</h1>
    <hr>
</div>
<div class="container" style="width:100%;">
    <table border="1" cellpadding="10" cellspacing="0" style="margin:auto;">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis-Kelamin</th>
                <th>Jabatan</th>
                <th>Tanggal</th>
                <th>Jam Datang</th>
                <th>Jam Pulang</th>

            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($absen as $a) : ?>
                <tr>
                    <th scope="row"><?= $no++; ?></th>
                    <td><?= $a['username']; ?></td>
                    <td><?= $a['jkel']; ?></td>
                    <td><?= $a['jabatan']; ?></td>
                    <td><?= $a['tanggal']; ?></td>
                    <td><?= $a['jam_datang']; ?></td>
                    <td><?= $a['jam_pulang']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>