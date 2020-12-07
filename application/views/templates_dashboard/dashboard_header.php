<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $judul; ?></title>
    <link rel="stylesheet" href="<?= base_url(); ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>css/stylee.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap-grid.css" integrity="sha512-WDu68xnKe1H1v1UaRubYO1VTlhdaZAQYF01WjaVSqbZfA17I2YeS+SrplSK2RN/rxm8kC+TVwTdWFA6NeHcyDw==" crossorigin="anonymous" />

    <script src="https://kit.fontawesome.com/7a17963aef.js" crossorigin="anonymous"></script>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-info navbar-dashboard">
        <a class="navbar-brand" href="<?= base_url(); ?>dashboard">SELAMAT DATANG | <b>ADMIN</b></a>
        <button class=" navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown mr-5">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user-tie mr-2"></i><?= $karyawan['nama_lengkap']; ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= base_url(); ?>logout">Logout</a>
                        <a class="dropdown-item" href="<?= base_url(); ?>home">Back Home</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>


    <div class="row no-gutters ">
        <div class="col-md-2 sidebar-dashboard">
            <ul class="nav flex-column bg-dark p-4" style="height: 639px">
                <li class="nav-item">
                    <a href="<?= base_url(); ?>dashboard" class="nav-link text-white"> <i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a href="<?= base_url(); ?>dashabsen" class="nav-link text-white"><i class="fas fa-address-book mr-2"></i>Daftar Absen</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a href="<?= base_url(); ?>dashuser" class="nav-link text-white"><i class="fas fa-users mr-2"></i>Daftar User</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a href="<?= base_url(); ?>logout" class="nav-link text-white"><i class="fas fa-sign-out-alt"></i>Logout</a>
                </li>
            </ul>
        </div>


        <div class="col-md 10 p-4 main-dashboard">