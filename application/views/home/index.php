<div class="preloader">
    <div class="loading">
        <img src="<?= base_url(); ?>/img/loader6.gif" width="250"">
    </div>
</div>

<header>
    <nav class=" navbar navbar-expand-md navbar-dark fixed-top" id="muncul">
        <div class="container">
            <div class="navbar-header">
                <a href="#home" class="nav-link">
                    <img src="<?= base_url(); ?>img/logoo.png" alt="">
                </a>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-labe="toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto ">
                    <li class="nav-item">
                        <a href="#home" class="nav-link warna-font"> Home </a>
                    </li>
                    <?php if (isset($_SESSION['login'])) : ?>
                        <li class="nav-item">
                            <a href="#absen" class="nav-link warna-font">Daftar-Absen</a>
                        </li>
                    <?php endif; ?>

                    <li class="nav-item">
                        <a href="#about" class="nav-link warna-font">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#kontak" class="nav-link warna-font">Kontak</a>
                    </li>
                    <?php if (isset($_SESSION['login'])) : ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle warna-font-navbar" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?= $karyawan['nama_lengkap']; ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <?php if ($karyawan['hak_akses'] == 1) : ?>
                                    <a class="dropdown-item " href="<?= base_url(); ?>dashboard">Dashboard</a>
                                <?php endif; ?>
                                <a class="dropdown-item" href="<?= base_url(); ?>logout">Logout</a>
                            </div>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        </nav>
        </header>

        <section class="home" id="home">
            <div class="container">
                <div class="row no-gutters text-left">
                    <div class="col-md-5 ">
                        <h1>Absensi Online</h1>
                        <h3>Berbasis Website</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex dolores recusandae incidunt dolorem magnam perferendis doloribus libero. Tenetur at, ducimus dolore, itaque ea eum modi voluptatum, quibusdam reiciendis aliquam debitis.</p>
                        <div class="row no-gutters">
                            <?php if (isset($_SESSION['login'])) : ?>
                                <button type="button" class="btn mt-4" data-toggle="modal" data-target="#exampleModal">
                                    Absen
                                </button>
                            <?php else : ?>
                                <a href="<?= base_url(); ?>login">
                                    <button type="button" class="btn mt-4 login mr-3">
                                        Login
                                    </button>
                                </a>
                                <a href="<?= base_url(); ?>daftar">
                                    <button type="button" class="btn mt-4 daftar">
                                        Daftar
                                    </button>
                                </a>

                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <img src="<?= base_url(); ?>img/vektor.png" alt="">
                    </div>
                </div>
            </div>
        </section>


        <?php if (isset($_SESSION['login'])) : ?>

            <section class="absen" id="absen">
                <div class="row no-gutters text-center">
                    <div class="col-md-12">
                        <h1>Absen Hari Ini</h1>
                        <hr>
                    </div>
                </div>
                <div class="row no-gutters text-center">
                    <div class="col-lg-12 ">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 text-left">
                                    <strong>Cari Tanggal :</strong>
                                    <form action="" method="post" class="mb-3">
                                        <div class="input-group">
                                            <input type="date" id="cari" class="form-control" name="cari_absen">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit">Cari</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Username</th>
                                        <th scope="col" class="jkel">Jenis-Kelamin</th>
                                        <th scope="col" class="jbtn">Jabatan</th>
                                        <th scope="col" class="tgl">Tanggal</th>
                                        <th scope="col">Jam Datang</th>
                                        <th scope="col">Jam Pulang</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $start; ?>
                                    <?php foreach ($absen as $a) : ?>
                                        <tr>
                                            <th scope="row no-gutters"><?= ++$start; ?></th>
                                            <td><?= $a['username']; ?></td>
                                            <td class="jkel"><?= $a['jkel']; ?></td>
                                            <td class="jbtn"><?= $a['jabatan']; ?></td>
                                            <td class="tgl"><?= $a['tanggal']; ?></td>
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

                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <?= $this->pagination->create_links(); ?>
                        </div>
                    </div>
                </div>

            </section>


        <?php endif; ?>
        <section class="about" id="about">
            <div class="container">
                <div class="row no-gutters text-center">
                    <div class="col-md-12">
                        <h1>About Us</h1>
                        <hr>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-xl-4">
                        <img src="<?= base_url(); ?>img/companylogo1.png" alt="">
                    </div>
                    <div class="col-xl-8">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque impedit, excepturi neque, a dignissimos perferendis nam reprehenderit voluptas, necessitatibus possimus odit. Architecto in aliquid ullam quaerat, minima soluta officia hic Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero quae ipsum mollitia unde fugit recusandae incidunt dolores sint distinctio! Nemo doloremque, laboriosam error quis perspiciatis deleniti alias sed tempore natus..</p>
                        <p>Consectetur, obcaecati. Esse, commodi, placeat tempore quisquam amet alias corrupti sapiente dignissimos cupiditate quidem expedita. Suscipit iste veniam sit porro adipisci minus dolorum iusto quia ipsum, quis deleniti magni inventore Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus modi voluptatum excepturi distinctio magnam doloribus earum neque quidem mollitia, commodi quasi exercitationem accusantium facilis! Illo blanditiis repellat nisi dolorum minima!.</p>
                        <p>Blanditiis dolor ipsum non inventore reprehenderit similique voluptatum impedit necessitatibus nam ex tempore quibusdam adipisci deserunt nostrum nihil neque et, magni voluptatem eos assumenda temporibus sit, repellat amet! Architecto, assumenda?</p>

                    </div>
                </div>
            </div>
        </section>



        <?php if (isset($_SESSION['login'])) : ?>
            <?php if (isset($absens)) : ?>
                <?php if ($absens['status'] == 1) : ?>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Absen Pulang</h5>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="post">
                                        <input type="hidden" name="id" value="<?= $absens['id']; ?>">
                                        <input type="hidden" name="username" value="<?= $absens['username']; ?>">
                                        <input type="hidden" name="jkel" value="<?= $absens['jkel']; ?>">
                                        <input type="hidden" name="jabatan" value="<?= $absens['jabatan']; ?>">
                                        <input type="hidden" name="tanggal" value="<?= $absens['tanggal']; ?>">
                                        <input type="hidden" name="jam_datang" value="<?= $absens['jam_datang']; ?>">
                                        <div class="from-group">
                                            <div class="row no-gutters">

                                                <div class="col md-12"><label for="time">Jam</label>
                                                    <input type="text" id="time" name="jam_pulang" class="form-control" value="<?php echo date("H:i:s"); ?>" readonly></div>
                                            </div>
                                        </div>
                                </div>
                                <div class=" modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" name="absen_pulang" value="pulang" class="btn btn-primary">Absen</button>
                                </div>

                                </form>
                            </div>
                        </div>
                    </div>
                <?php elseif ($absens['status'] == 0 && $absens['tanggal'] == date("Y-m-d")) : ?>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2 class="modal-title" id="exampleModalLabel">Anda sudah absen !</h2>
                                </div>
                                <div class="modal-body">
                                    <h6>Silahkan absen lagi di hari berikutnya ..</h6>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <a href="<?= base_url(); ?>home"><button type="button" class="btn btn-primary">Ok</button></a>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endif ?>
            <?php endif; ?>


            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Absen Hari ini</h5>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="nama">Username</label>
                                    <input type="text" id="nama" name="username" class="form-control" value="<?= $karyawan['username']; ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="jkel">Jenis-Kelamin</label>
                                    <input type="text" id="jkel" name="jkel" class="form-control" value="<?= $karyawan['jkel']; ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="jabatan">Jabatan</label>
                                    <input type="text" id="jabatan" name="jabatan" class="form-control" value="<?= $karyawan['jabatan']; ?>" readonly>
                                </div>
                                <div class="from-group">
                                    <div class="row">
                                        <div class="col md-6">
                                            <label for="tanggal">Tanggal</label>
                                            <input type="text" id="tanggal" name="tanggal" class="form-control" value="<?php echo date("Y-m-d"); ?>" readonly>
                                        </div>

                                        <div class="col md-6"><label for="time">Jam</label>
                                            <input type="text" id="time" name="jam_datang" class="form-control" value="<?php echo date("H:i:s"); ?>" readonly></div>
                                    </div>
                                </div>
                        </div>
                        <div class=" modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="submit_absen" value="absen" class="btn btn-primary">Absen</button>
                        </div>

                        </form>
                    </div>
                </div>
            </div>

        <?php else : ?>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title" id="exampleModalLabel">Login Terlebih Dahulu :)</h2>
                        </div>
                        <div class="modal-body">
                            <h6>Klik OK untuk Login</h6>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <a href="<?= base_url(); ?>login"><button type="button" class="btn btn-primary">Ok</button></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>


        <section class="footer" id="kontak">
            <div class="box"></div>
            <div class="container">
                <div class="row no-gutters mt-2">
                    <div class="col-xl-4 text-left pr-4">
                        <div class="judul "> Kontak :</div>
                        <div class="konten text-left  pt-4">
                            <div class="kontak mb-2">
                                <i class="fas fa-envelope"></i>
                                <span> muhamar.qwerty@gmail.com</span>
                            </div>
                            <div class="kontak mb-2">
                                <i class="fas fa-phone-alt"></i>
                                <span> +6282396574693</span>
                            </div>

                            <div class="kontak">
                                <i class="fab fa-whatsapp"></i>
                                <span> +6282396574693</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 pr-4 ">
                        <div class="judul text-left">Sosial Media :</div>
                        <div class="icon text-left pt-4">
                            <a href="" class="mr-2"> <i class="fab fa-facebook-square"></i></a>
                            <a href="" class="mr-2"><i class="fab fa-instagram"></i></a>
                            <a href="" class="mr-2"><i class="fab fa-twitter"></i></a>
                            <a href="" class="mr-2"><i class="fab fa-medium"></i></i></a>

                        </div>
                    </div>

                    <div class="col-xl-4 ">
                        <div class="judul text-left ">Alamat :</div>
                        <div class="konten mb-2 text-left pt-4">
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            Jl. Toddopuli Raya, Paropo, Kec. Panakkukang, Kota Makassar, Sulawesi Selatan 90222
                        </div>

                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.6310376653064!2d119.45043441448406!3d-5.162915153592418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee32b293f6f9d%3A0xd07a081fafbf816a!2sBMK%20PROJECT%20-%20Jasa%20Pembuatan%20Website%2C%20Aplikasi%20Android%20Dan%20IOS!5e0!3m2!1sid!2sid!4v1606440773738!5m2!1sid!2sid" width="350" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>

                </div>
                <div class="row text-center mt-5">
                    <div class="col-md-12 ">
                        copyright &copy 2020 CV. Qwertyyuiop poiuytre. All Rights Reserved.
                    </div>
                </div>
            </div>
        </section>