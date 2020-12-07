-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Nov 2020 pada 10.32
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absensi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absen`
--

CREATE TABLE `absen` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `jkel` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `jam_datang` time NOT NULL,
  `jam_pulang` time DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `absen`
--

INSERT INTO `absen` (`id`, `username`, `jkel`, `jabatan`, `tanggal`, `jam_datang`, `jam_pulang`, `status`) VALUES
(107, 'arianto', ' Pria', 'Magang', '2020-11-28', '14:18:09', '14:24:22', 0),
(108, 'anwar', ' Pria', 'Magang', '2020-11-28', '14:26:39', '14:26:46', 0),
(109, 'amar', ' Pria', 'Magang', '2020-11-28', '14:33:52', '14:33:58', 0),
(110, 'yusuf', ' Pria', 'Karyawan', '2020-11-28', '14:34:51', NULL, 1),
(111, 'asep', ' Pria', 'Karyawan', '2020-11-28', '14:36:35', NULL, 1),
(112, 'saldi', ' Pria', 'Karyawan', '2020-11-28', '14:39:25', NULL, 1),
(113, 'mufli', ' Pria', 'Karyawan', '2020-11-28', '14:41:46', NULL, 1),
(114, 'gusti', ' Pria', 'Karyawan', '2020-11-28', '14:42:50', '14:42:59', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nohp` varchar(100) NOT NULL,
  `jkel` varchar(50) NOT NULL,
  `jabatan` varchar(150) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `jam` varchar(100) NOT NULL,
  `hak_akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id`, `username`, `nama_lengkap`, `password`, `nohp`, `jkel`, `jabatan`, `tanggal`, `jam`, `hak_akses`) VALUES
(64, 'arianto', 'Arianto Suyuti', 'arianto', '081244123123', ' Pria', 'Magang', '2020-11-28', '07:17:36', 0),
(65, 'anwar', 'Anwar', 'anwar', '081244321321', ' Pria', 'Magang', '2020-11-28', '07:25:36', 0),
(66, 'admin', 'Admin', 'admin', '081244828111', ' Pria', 'Manajer', '2020-11-28', '07:31:47', 1),
(67, 'amar', 'Muhamar', 'amar', '081244828616', ' Pria', 'Magang', '2020-11-28', '07:33:34', 0),
(68, 'yusuf', 'Yusuf', 'yusuf', '081244545545', ' Pria', 'Karyawan', '2020-11-28', '07:34:18', 0),
(69, 'asep', 'Asep', 'asep', '081244828123', ' Pria', 'Karyawan', '2020-11-28', '07:35:53', 0),
(70, 'saldi', 'Saldi', 'saldi', '812448287101', ' Pria', 'Karyawan', '2020-11-28', '07:38:46', 0),
(71, 'mufli', 'mufli', 'mufli', '081244828721', ' Pria', 'Karyawan', '2020-11-28', '07:40:36', 0),
(72, 'gusti', 'Gusti', 'gusti', '081244828551', ' Pria', 'Karyawan', '2020-11-28', '07:42:23', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absen`
--
ALTER TABLE `absen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
