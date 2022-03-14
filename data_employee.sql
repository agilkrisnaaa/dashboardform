-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Mar 2022 pada 09.20
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `update_employee`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_employee`
--

CREATE TABLE `data_employee` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `emailperusahaan` varchar(70) NOT NULL,
  `nikkaryawan` varchar(50) NOT NULL,
  `nikktp` int(20) NOT NULL,
  `nosim` int(20) NOT NULL,
  `namaktp` varchar(200) NOT NULL,
  `namaibu` varchar(200) NOT NULL,
  `tempatlahir` varchar(100) NOT NULL,
  `tanggallahir` date NOT NULL,
  `agama` varchar(100) NOT NULL,
  `nowhatsapp` int(15) NOT NULL,
  `nobpjs` varchar(70) NOT NULL,
  `nonpwp` varchar(50) NOT NULL,
  `direktorat` varchar(255) NOT NULL,
  `divisi` varchar(255) NOT NULL,
  `statuspernikahan` varchar(25) NOT NULL,
  `jumlahanak` int(20) NOT NULL,
  `namasuamiistri` varchar(100) NOT NULL,
  `nowhatsappkeluarga` int(20) NOT NULL,
  `tempatlahirkeluarga` varchar(100) NOT NULL,
  `tanggallahirkeluarga` date NOT NULL,
  `namaanak1` varchar(100) NOT NULL,
  `tempatlahir1` varchar(100) NOT NULL,
  `tanggallahir1` date NOT NULL,
  `jk1` varchar(50) NOT NULL,
  `namaanak2` varchar(100) NOT NULL,
  `tempatlahir2` varchar(100) NOT NULL,
  `tanggallahir2` date NOT NULL,
  `jk2` varchar(50) NOT NULL,
  `namaanak3` varchar(100) NOT NULL,
  `tempatlahir3` varchar(100) NOT NULL,
  `tanggallahir3` date NOT NULL,
  `jk3` varchar(50) NOT NULL,
  `namaanak4` varchar(100) NOT NULL,
  `tempatlahir4` varchar(100) NOT NULL,
  `tanggallahir4` date NOT NULL,
  `jk4` varchar(50) NOT NULL,
  `buktiktp` varchar(255) NOT NULL,
  `buktikk` varchar(255) NOT NULL,
  `buktisim` varchar(255) NOT NULL,
  `buktiijazah` varchar(255) NOT NULL,
  `buktivaksin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_employee`
--

INSERT INTO `data_employee` (`id`, `email`, `emailperusahaan`, `nikkaryawan`, `nikktp`, `nosim`, `namaktp`, `namaibu`, `tempatlahir`, `tanggallahir`, `agama`, `nowhatsapp`, `nobpjs`, `nonpwp`, `direktorat`, `divisi`, `statuspernikahan`, `jumlahanak`, `namasuamiistri`, `nowhatsappkeluarga`, `tempatlahirkeluarga`, `tanggallahirkeluarga`, `namaanak1`, `tempatlahir1`, `tanggallahir1`, `jk1`, `namaanak2`, `tempatlahir2`, `tanggallahir2`, `jk2`, `namaanak3`, `tempatlahir3`, `tanggallahir3`, `jk3`, `namaanak4`, `tempatlahir4`, `tanggallahir4`, `jk4`, `buktiktp`, `buktikk`, `buktisim`, `buktiijazah`, `buktivaksin`) VALUES
(1, '0', 'EMAIL PERUSAHAAN', 'NIK KARYAWAN', 0, 0, 'NAMA KTP', 'NAMA IBU', 'TEMPAT LAHIR', '0000-00-00', 'AGAMA', 0, 'NO BPJS', '$nonpwp', 'DIREKTORI', 'DIVISI', 'STATUS PERNIKAHAN', 0, 'NAMA SUAMI ISTRI', 0, 'TEMPAT LAHIR KELUARGA', '0000-00-00', 'NAMA ANAK 1', 'TEMPAT LAHIR ANAK 1', '0000-00-00', 'JENIS KELAMIN ANAK 1', 'NAMA ANAK 2', 'TEMPAT LAHIR ANAK 2', '0000-00-00', 'JENIS KELAMIN ANAK 2', 'NAMA ANAK 3', 'TEMPAT LAHIR ANAK 3', '0000-00-00', 'JENIS KELAMIN ANAK 3', 'NAMA ANAK 4', 'TEMPAT LAHIR ANAK 4', '0000-00-00', 'JENIS KELAMIN ANAK 4', 'BUKTI KTP', 'BUKTI KK', 'BUKTI SIM', 'BUKTI IJAZAH', 'BUKTI VAKSIN'),
(2, '0', 'agil.krisna@sicepat.com', '22020355', 2147483647, 2147483647, 'agil krisna tripujianto', 'test ibu', 'tangerang', '2022-03-01', 'islam', 2147483647, '662912861928', '23892739283', 'Directorate Commercial', 'Department Internal Audit', 'Menikah', 4, 'test istri', 2147483647, 'tangerang', '2022-03-02', 'anak 1', 'anak 1', '2022-03-02', 'laki - laki', 'anak 2', 'anak 2', '2022-03-03', 'laki - laki', 'anak 3', 'anak 3', '2022-03-03', 'laki - laki', 'anak 4', 'anak 4', '2022-03-04', 'laki - laki', '3.BPJS AGIL016.jpg', '5.MANDIRI AGIL018 (1).jpg', '9.KK AGIL019.jpg', '0001.jpg', 'Certificate 2.jpg'),
(3, '0', 'Agil@sicepat.com', '22020355', 2147483647, 2147483647, 'Agil', 'Test ibu', 'Tangerang', '2022-03-01', 'Islam', 2147483647, '827282718283', '82718732882', 'Directorate Operation', 'Directorate Technology', 'Menikah', 4, 'Test istri', 2147483647, 'Tangerang', '2022-03-02', '1', '1', '2022-03-19', 'perempuan', '2', '2', '2022-03-15', 'perempuan', '3', '3', '2022-03-25', 'perempuan', '4', '4', '2022-03-09', 'perempuan', 'Screenshot_2021_0214_211959.jpg', 'Screenshot_20210124_151422.jpg', 'Screenshot_20210207_211533.jpg', 'Screenshot_20210214_211939.jpg', 'Screenshot_20220208_083439.jpg'),
(36, '', '', '', 0, 0, '', '', '', '0000-00-00', '', 0, '', '', '---', '---', '---', 0, '', 0, '', '0000-00-00', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '', '', ''),
(37, '', '', '', 0, 0, '', '', '', '0000-00-00', '', 0, '', '', '---', '---', '---', 0, '', 0, '', '0000-00-00', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '', '', ''),
(38, '', '', '', 0, 0, '', '', '', '0000-00-00', '', 0, '', '', '---', '---', '---', 0, '', 0, '', '0000-00-00', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '', '', ''),
(39, '$email', '$emailperusahaan', '$nikkaryawan', 0, 0, '$namaktp', '$namaibu', '$tempatlahir', '0000-00-00', '$agama', 0, '$nobpjs', '$nonpwp', '$direktorat', '$divisi', '$statuspernikahan', 0, '$namasuamiistri', 0, '$tempatlahirkeluarga', '0000-00-00', '$namaanak1', '$tempatlahir1', '0000-00-00', '$jk1', '$namaanak2', '$tempatlahir2', '0000-00-00', '$jk2', '$namaanak3', '$tempatlahir3', '0000-00-00', '$jk3', '$namaanak4', '$tempatlahir4', '0000-00-00', '$jk4', '$buktiktp', '$buktikk', '$buktisim', '$buktiijazah', '$buktivaksin'),
(40, '', '', '', 0, 0, '', '', '', '0000-00-00', '', 0, '', '', '---', '---', '---', 0, '', 0, '', '0000-00-00', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '', '', ''),
(41, '', '', '', 0, 0, '', '', '', '0000-00-00', '', 0, '', '', '---', '---', '---', 0, '', 0, '', '0000-00-00', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '', '', ''),
(42, '', '', '', 0, 0, '', '', '', '0000-00-00', '', 0, '', '', '---', '---', '---', 0, '', 0, '', '0000-00-00', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '', '', ''),
(43, '', '', '', 0, 0, '', '', '', '0000-00-00', '', 0, '', '', '---', '---', '---', 0, '', 0, '', '0000-00-00', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '', '', ''),
(44, 'agilkrisna01@gmail.com', 'agil.krisna@sicepat.com', '22020355', 2147483647, 2147483647, 'agil krisna tripujianto', 'test ibu', 'tangerang', '2022-03-01', 'islam', 2147483647, '662912861928', '23892739283', 'Directorate Commercial', 'Directorate Marketing', 'Menikah', 4, 'test istri', 2147483647, 'tangerang', '2022-03-02', 'anak 1', 'anak 1', '2022-03-02', 'laki - laki', 'anak 2', 'anak 2', '2022-03-04', 'laki - laki', 'anak 3', 'anak 3', '2022-03-04', 'laki - laki', 'anak 4', 'anak 4', '2022-03-04', 'laki - laki', '', '', '', '', ''),
(45, 'agilkrisna01@gmail.com', 'agil.krisna@sicepat.com', '22020355', 2147483647, 2147483647, 'agil krisna tripujianto', 'test ibu', 'tangerang', '2022-03-01', 'islam', 2147483647, '662912861928', '23892739283', 'Directorate Commercial', 'Directorate Marketing', 'Menikah', 4, 'test istri', 2147483647, 'tangerang', '2022-03-02', 'anak 1', 'anak 1', '2022-03-02', 'laki - laki', 'anak 2', 'anak 2', '2022-03-04', 'laki - laki', 'anak 3', 'anak 3', '2022-03-04', 'laki - laki', 'anak 4', 'anak 4', '2022-03-04', 'laki - laki', '', '', '', '', ''),
(46, 'agilkrisna01@gmail.com', 'agil.krisna@sicepat.com', '22020355', 2147483647, 2147483647, 'agil krisna tripujianto', 'test ibu', 'tangerang', '2022-03-01', 'islam', 2147483647, '662912861928', '23892739283', 'Directorate Commercial', 'Directorate Marketing', 'Menikah', 4, 'test istri', 2147483647, 'tangerang', '2022-03-02', 'anak 1', 'anak 1', '2022-03-02', 'laki - laki', 'anak 2', 'anak 2', '2022-03-04', 'laki - laki', 'anak 3', 'anak 3', '2022-03-04', 'laki - laki', 'anak 4', 'anak 4', '2022-03-04', 'perempuan', '', '', '', '', ''),
(47, 'agilkrisna01@gmail.com', 'agil.krisna@sicepat.com', '22020355', 2147483647, 2147483647, 'agil krisna tripujianto', 'test ibu', 'tangerang', '2022-03-01', 'islam', 2147483647, '662912861928', '23892739283', 'Directorate Commercial', 'Directorate Marketing', 'Menikah', 4, 'test istri', 2147483647, 'tangerang', '2022-03-02', 'anak 1', 'anak 1', '2022-03-02', 'laki - laki', 'anak 2', 'anak 2', '2022-03-04', 'laki - laki', 'anak 3', 'anak 3', '2022-03-04', 'laki - laki', 'anak 4', 'anak 4', '2022-03-04', 'perempuan', '', '', '', '', ''),
(48, 'agilkrisna01@gmail.com', 'agil.krisna@sicepat.com', '22020355', 2147483647, 2147483647, 'agil krisna tripujianto', 'test ibu', 'tangerang', '2022-03-01', 'islam', 2147483647, '662912861928', '23892739283', 'Directorate Commercial', 'Directorate Marketing', 'Menikah', 4, 'test istri', 2147483647, 'tangerang', '2022-03-02', 'anak 1', 'anak 1', '2022-03-02', 'laki - laki', 'anak 2', 'anak 2', '2022-03-04', 'laki - laki', 'anak 3', 'anak 3', '2022-03-04', 'laki - laki', 'anak 4', 'anak 4', '2022-03-04', 'perempuan', '', '', '', '', ''),
(49, '', '', '', 0, 0, '', '', '', '0000-00-00', '', 0, '', '', '---', '---', '---', 0, '', 0, '', '0000-00-00', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '', '', ''),
(50, '', '', '', 0, 0, '', '', '', '0000-00-00', '', 0, '', '', '---', '---', '---', 0, '', 0, '', '0000-00-00', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', 'sasasa', '0000-00-00', '---', '', '', '', '', ''),
(51, '', '', '', 0, 0, '', '', '', '0000-00-00', '', 0, '', '', '---', '---', '---', 0, '', 0, '', '0000-00-00', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', 'sasasa', '0000-00-00', '---', '', '', '', '', ''),
(52, '', '', '', 0, 0, '', '', '', '0000-00-00', '', 0, '', '', '---', '---', '---', 0, '', 0, '', '0000-00-00', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', 'sasasa', '0000-00-00', '---', '', '', '', '', ''),
(53, '', '', '', 0, 0, '', '', '', '0000-00-00', '', 0, '', '', '---', '---', '---', 0, '', 0, '', '0000-00-00', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', 'sasasa', '0000-00-00', '---', '', '', '', '', ''),
(54, '', '', '', 0, 0, '', '', '', '0000-00-00', '', 0, '', '', '---', '---', '---', 0, '', 0, '', '0000-00-00', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', 'sasasa', '0000-00-00', 'perempuan', '', '', '', '', ''),
(55, '', '', '', 0, 0, '', '', '', '0000-00-00', '', 0, '', '', '---', '---', '---', 0, '', 0, '', '0000-00-00', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', 'sasasa', '0000-00-00', 'perempuan', '', '', '', '', ''),
(56, '', '', '', 0, 0, '', '', '', '0000-00-00', '', 0, '', '', '---', '---', '---', 0, '', 0, '', '0000-00-00', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '', '', ''),
(57, '', '', '', 0, 0, '', '', '', '0000-00-00', '', 0, '', '', '---', '---', '---', 0, '', 0, '', '0000-00-00', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '', '', ''),
(58, '', '', '', 0, 0, '', '', '', '0000-00-00', '', 0, '', '', '---', '---', '---', 0, '', 0, '', '0000-00-00', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '', '', ''),
(59, '', '', '', 0, 0, '', '', '', '0000-00-00', '', 0, '', '', '---', '---', '---', 0, '', 0, '', '0000-00-00', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '', '', ''),
(60, '', '', '', 0, 0, '', '', '', '0000-00-00', '', 0, '', '', '---', '---', '---', 0, '', 0, '', '0000-00-00', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '', '', ''),
(61, '', '', '', 0, 0, '', '', '', '0000-00-00', '', 0, '', '', '---', '---', '---', 0, '', 0, '', '0000-00-00', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '', '', ''),
(62, '', '', '', 0, 0, '', '', '', '0000-00-00', '', 0, '', '', '---', '---', '---', 0, '', 0, '', '0000-00-00', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '', '', ''),
(63, '', '', '', 0, 0, '', '', '', '0000-00-00', '', 0, '', '', '---', '---', '---', 0, '', 0, '', '0000-00-00', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '', '', ''),
(64, '', '', '', 0, 0, '', '', '', '0000-00-00', '', 0, '', '', '---', '---', 'Menikah', 0, '', 0, '', '0000-00-00', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '0000-00-00', '---', '', '', '', '', ''),
(65, 'agilkrisna01@gmail.com', 'agil.krisna@sicepat.com', '22020355', 2147483647, 2147483647, 'agil krisna tripujianto', 'test ibu', 'tangerang', '2022-03-24', 'islam', 2147483647, '662912861928', '23892739283', 'Directorate Commercial', 'Directorate Commercial', 'Menikah', 4, 'test istri', 2147483647, 'tangerang', '2022-03-03', 'anak 1', 'anak 1', '2022-03-04', 'perempuan', 'anak 2', 'anak 2', '2022-03-04', 'laki - laki', 'anak 3', 'anak 3', '2022-04-01', 'laki - laki', 'anak 4', 'anak 4', '2022-03-05', 'perempuan', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_employee`
--
ALTER TABLE `data_employee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_employee`
--
ALTER TABLE `data_employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
