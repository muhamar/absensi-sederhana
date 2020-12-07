<!-- Dashboard-->
<h3><i class="fas fa-tachometer-alt mr-2 ml-3"></i>DASHBOARD</h3>
<hr>
<div class="row">
    <div class="card bg-success ml-5" style="width: 18rem;">
        <div class="card-body">
            <div class="card-body-icon">
                <i class="fas fa-address-book text-white"></i>
            </div>
            <h5 class="card-title text-white">Jumlah Absen</h5>
            <div class="display-4 text-white" style="font-weight:bold"><?= $jumlah_absen; ?></div>
            <a href="<?= base_url(); ?>dashabsen" class="nav-link">
                <p class="card-text text-white">Lihat detail <i class="fas fa-angle-double-right ml-2"></i></p>
            </a>
        </div>
    </div>
    <div class="card bg-warning ml-3" style="width: 18rem;">
        <div class="card-body">
            <div class="card-body-icon">
                <i class="fas fa-users mr-2 text-white"></i>
            </div>
            <h5 class="card-title text-white">Jumlah User</h5>
            <div class="display-4 text-white" style="font-weight:bold"><?= $jumlah_user; ?></div>
            <a href="<?= base_url(); ?>dashuser" class="nav-link">
                <p class="card-text text-white">Lihat detail <i class="fas fa-angle-double-right ml-2"></i></p>
            </a>
        </div>
    </div>

</div>