-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15 Jan 2019 pada 05.54
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ujian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mapel`
--

CREATE TABLE `tbl_mapel` (
  `id_mapel` int(11) NOT NULL,
  `nama_mapel` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_mapel`
--

INSERT INTO `tbl_mapel` (`id_mapel`, `nama_mapel`) VALUES
(101, 'Matematika'),
(102, 'IPA'),
(103, 'Bahasa Inggris');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_soal`
--

CREATE TABLE `tbl_soal` (
  `id_soal` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `pertanyaan` longtext NOT NULL,
  `pilihan_a` longtext NOT NULL,
  `pilihan_b` longtext NOT NULL,
  `pilihan_c` longtext NOT NULL,
  `pilihan_d` longtext NOT NULL,
  `skor_a` double NOT NULL,
  `skor_b` double NOT NULL,
  `skor_c` double NOT NULL,
  `skor_d` double NOT NULL,
  `kunci` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_soal`
--

INSERT INTO `tbl_soal` (`id_soal`, `id_mapel`, `pertanyaan`, `pilihan_a`, `pilihan_b`, `pilihan_c`, `pilihan_d`, `skor_a`, `skor_b`, `skor_c`, `skor_d`, `kunci`) VALUES
(5, 101, '1 x 1 +5 = (edit)', '6', '7', '-6', '5', 3, 2, 1, 0, '6'),
(201, 101, '1+1-4x2 ?', '6', '-6', '8', '-5', 1, 2, 0, 0, '-6'),
(202, 101, '2x2+3', '10', '7', '-7', 'sepuluh', 1, 3, 0, 0, '7'),
(203, 103, 'How are you?', 'I\'m fine, thank you. And you? ', 'I\'m not fine, and you?', 'youre welcome', 'shut up!', 3, 2, 1, 0, 'I\'m fine, thank you. And you? '),
(204, 103, 'Sandi is a hunter. He likes ....', 'hunt', 'a', 'b', 'c', 1, 0, 0, 0, 'hunt'),
(207, 103, 'Ant is small but elephant is ...', 'big', 'little', 'more bigger than ant', 'small', 3, 0, 1, 0, 'big');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ujian`
--

CREATE TABLE `tbl_ujian` (
  `id_ujian` int(11) NOT NULL,
  `id_soal` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `pilihan_user` longtext NOT NULL,
  `kunci` longtext NOT NULL,
  `skor_ujian` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `email`, `username`, `password`, `level`) VALUES
(110, 'admin', 'admin@email.com', 'admin', 'admin', 'admin'),
(112, 'siswa', 'siswa@ymail.com', 'siswa', 'siswa', 'siswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `tbl_soal`
--
ALTER TABLE `tbl_soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `tbl_ujian`
--
ALTER TABLE `tbl_ujian`
  ADD PRIMARY KEY (`id_ujian`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `tbl_soal`
--
ALTER TABLE `tbl_soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;

--
-- AUTO_INCREMENT for table `tbl_ujian`
--
ALTER TABLE `tbl_ujian`
  MODIFY `id_ujian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
