-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14 Jul 2020 pada 12.02
-- Versi Server: 10.1.32-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cfsistempakar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_diagnosa`
--

CREATE TABLE `tbl_diagnosa` (
  `id_diagnosa` int(11) NOT NULL,
  `id_pasien` varchar(20) NOT NULL,
  `kode_pengetahuan` varchar(10) NOT NULL,
  `nilai_cf` float NOT NULL,
  `cf_hasil` float NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_diagnosa`
--

INSERT INTO `tbl_diagnosa` (`id_diagnosa`, `id_pasien`, `kode_pengetahuan`, `nilai_cf`, `cf_hasil`, `date_created`) VALUES
(1, '112854799657030', '02451', 0, 0, '2020-07-13 13:31:25'),
(2, '112854799657030', '02495', 0, 0, '2020-07-13 13:31:25'),
(3, '112854799657030', '04529', 0, 0, '2020-07-13 13:31:25'),
(4, '112854799657030', '09136', 0, 0, '2020-07-13 13:31:25'),
(5, '832385469206947', '02451', 0.4, 0.24, '2020-07-13 13:34:39'),
(6, '832385469206947', '02495', 0.4, 0.16, '2020-07-13 13:34:39'),
(7, '832385469206947', '04529', 0, 0, '2020-07-13 13:34:39'),
(8, '832385469206947', '09136', 0, 0, '2020-07-13 13:34:39'),
(9, '221608735044795', '02451', 0, 0, '2020-07-13 13:35:01'),
(10, '221608735044795', '02495', 0, 0, '2020-07-13 13:35:01'),
(11, '221608735044795', '04529', 0, 0, '2020-07-13 13:35:01'),
(12, '221608735044795', '09136', 0.4, 0.2, '2020-07-13 13:35:01'),
(13, '148568420512377', '02451', 0, 0, '2020-07-13 23:01:12'),
(14, '148568420512377', '02495', 0.4, 0.16, '2020-07-13 23:01:12'),
(15, '148568420512377', '04529', 0, 0, '2020-07-13 23:01:12'),
(16, '148568420512377', '09136', 0.4, 0.2, '2020-07-13 23:01:12'),
(17, '357108978164940', '02451', 0, 0, '2020-07-13 23:17:46'),
(18, '357108978164940', '02495', 0.4, 0.16, '2020-07-13 23:17:46'),
(19, '357108978164940', '04529', 0, 0, '2020-07-13 23:17:46'),
(20, '357108978164940', '09136', 0, 0, '2020-07-13 23:17:46'),
(21, '587434220691376', '02451', 1, 0.6, '2020-07-13 23:18:51'),
(22, '587434220691376', '02495', 1, 0.4, '2020-07-13 23:18:51'),
(23, '587434220691376', '04529', 1, 0.5, '2020-07-13 23:18:51'),
(24, '587434220691376', '09136', 1, 0.5, '2020-07-13 23:18:51'),
(41, '627085319094168', '02451', 0.4, 0.24, '2020-07-13 23:48:56'),
(42, '627085319094168', '02495', 0.8, 0.32, '2020-07-13 23:48:56'),
(43, '627085319094168', '04529', 0.8, 0.4, '2020-07-13 23:48:56'),
(44, '627085319094168', '09136', 0.8, 0.4, '2020-07-13 23:48:56'),
(49, '039851687409215', '02451', 0, 0, '2020-07-14 00:07:52'),
(50, '039851687409215', '02495', 0.4, 0.16, '2020-07-14 00:07:52'),
(51, '039851687409215', '04529', 0.4, 0.2, '2020-07-14 00:07:52'),
(52, '039851687409215', '09136', 0, 0, '2020-07-14 00:07:52'),
(53, '843725056199736', '02451', 0, 0, '2020-07-14 09:31:51'),
(54, '843725056199736', '02495', 0.4, 0.16, '2020-07-14 09:31:51'),
(55, '843725056199736', '04529', 0.4, 0.2, '2020-07-14 09:31:51'),
(56, '843725056199736', '09136', 0, 0, '2020-07-14 09:31:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gejala`
--

CREATE TABLE `tbl_gejala` (
  `kode_gejala` varchar(4) NOT NULL,
  `nama_gejala` varchar(200) NOT NULL,
  `nilai_cf` float NOT NULL,
  `tgl_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_gejala`
--

INSERT INTO `tbl_gejala` (`kode_gejala`, `nama_gejala`, `nilai_cf`, `tgl_update`) VALUES
('G001', 'Perut kembung', 0.7, '2020-06-14 19:33:04'),
('G002', 'Feses lembek atau cair', 0.8, '2020-06-14 19:33:15'),
('G003', 'Lebih dari 5x bab', 0.8, '2020-06-14 19:33:23'),
('G004', 'Mual', 0.5, '2020-06-14 19:33:29'),
('G005', 'Kram perut', 0.5, '2020-06-14 19:33:33'),
('G006', 'Sakit perut', 0.6, '2020-06-14 19:33:37'),
('G007', 'Muntah ', 0.5, '2020-06-14 19:33:49'),
('G008', 'Pucat ', 0.7, '2020-06-14 19:34:09'),
('G009', 'Berkeringat di malam hari', 0.4, '2020-06-14 19:34:18'),
('G010', 'Lemas ', 0.8, '2020-06-14 19:34:28'),
('G011', 'Kram otot', 0.5, '2020-06-14 19:34:37'),
('G012', 'Mulut kering', 0.5, '2020-06-14 19:34:45'),
('G013', 'Frekuensi buang air kecil berkurang', 0.8, '2020-06-14 19:34:52'),
('G014', 'Sakit kepala', 0.6, '2020-06-14 19:35:04'),
('G015', 'Demam ', 0.7, '2020-06-14 19:35:10'),
('G016', 'Darah / lendir pada tinja ', 0.6, '2020-06-14 19:35:36'),
('G017', 'Kehilangan nafsu makan', 0.7, '2020-06-14 19:35:31'),
('G018', 'Dehidrasi ', 0.8, '2020-06-14 19:35:42'),
('G019', 'Feses banyak', 0.8, '2020-06-14 19:35:47'),
('G020', 'Lesu ', 0.8, '2020-06-14 19:35:52'),
('G021', 'Haus terus menerus', 0.8, '2020-06-14 19:35:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jenis`
--

CREATE TABLE `tbl_jenis` (
  `kode_jenis` varchar(4) NOT NULL,
  `nama_jenis` varchar(200) NOT NULL,
  `penanganan` text NOT NULL,
  `banding` enum('<','>','<=','>=') NOT NULL,
  `parameter` int(4) NOT NULL,
  `tgl_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_jenis`
--

INSERT INTO `tbl_jenis` (`kode_jenis`, `nama_jenis`, `penanganan`, `banding`, `parameter`, `tgl_update`) VALUES
('P01', 'Diare Ringan', 'Diare Ringan lorem ipsum', '>', 40, '2020-07-13 13:15:34'),
('P02', 'Diare Akut', 'Diare Akut Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita voluptatem voluptas veritatis quas neque impedit nemo tenetur numquam, laboriosam, voluptates incidunt est quod velit commodi in. Minus eum deleniti adipisci.', '<=', 74, '2020-07-13 13:15:38'),
('P03', 'Diare Kronis', 'Diaket Kronis Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita voluptatem voluptas veritatis quas neque impedit nemo tenetur numquam, laboriosam, voluptates incidunt est quod velit commodi in. Minus eum deleniti adipisci.', '>=', 75, '2020-07-13 13:15:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_konfigurasi`
--

CREATE TABLE `tbl_konfigurasi` (
  `id_konfigurasi` int(1) NOT NULL,
  `nama_instansi` varchar(100) NOT NULL,
  `nama_pimpinan` varchar(100) NOT NULL,
  `provinsi` varchar(128) NOT NULL,
  `kabupaten` varchar(128) NOT NULL,
  `kecamatan` varchar(128) NOT NULL,
  `alamat` text NOT NULL,
  `kontak_person` varchar(20) NOT NULL,
  `head_panduan` text NOT NULL,
  `panduan` text NOT NULL,
  `banner` varchar(200) NOT NULL,
  `topik_banner` text NOT NULL,
  `deskripsi_banner` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_konfigurasi`
--

INSERT INTO `tbl_konfigurasi` (`id_konfigurasi`, `nama_instansi`, `nama_pimpinan`, `provinsi`, `kabupaten`, `kecamatan`, `alamat`, `kontak_person`, `head_panduan`, `panduan`, `banner`, `topik_banner`, `deskripsi_banner`) VALUES
(1, 'Inventory Barang', 'Waddah', 'Sulawesi Selatan', 'Makassar', 'Manggala', 'Jl. Dg. Hayo', '085298730727', 'Panduan', '<p>Panduan <strong>adkaah</strong> <em>Lorem ipsum</em> dolor sit amet consectetur adipisicing elit. Nobis aut voluptatum dolorem perferendis repudiandae iure in, commodi earum necessitatibus incidunt beatae soluta, culpa, assumenda est odio sint debitis minima dolores?</p>', 'alone-clouds-cloudy-105857.jpg', 'SISTEM PAKAR PENYAKIT DIARE', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit itaque, laudantium cum sequi doloremque earum perferendis consequatur officia velit in voluptates minus corrupti impedit omnis molestiae, voluptate non labore corporis!\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pasien`
--

CREATE TABLE `tbl_pasien` (
  `id_pasien` varchar(20) NOT NULL,
  `nama_pasien` varchar(200) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `umur` int(3) NOT NULL,
  `akumulasi_cf` float NOT NULL,
  `kode_penyakit` varchar(20) NOT NULL,
  `tgl_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pasien`
--

INSERT INTO `tbl_pasien` (`id_pasien`, `nama_pasien`, `jenis_kelamin`, `umur`, `akumulasi_cf`, `kode_penyakit`, `tgl_update`) VALUES
('039851687409215', 'Ali', 'Laki-laki', 12, 43.552, 'P02', '2020-07-14 00:07:54'),
('627085319094168', 'Ali', 'Perempuan', 15, 90.385, 'P03', '2020-07-13 23:48:58'),
('843725056199736', 'Jamil', 'Laki-laki', 12, 43.552, 'P02', '2020-07-14 09:31:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengetahuan`
--

CREATE TABLE `tbl_pengetahuan` (
  `kode_pengetahuan` varchar(10) NOT NULL,
  `kode_jenis` varchar(10) NOT NULL,
  `kode_gejala` varchar(10) NOT NULL,
  `pertanyaan` text NOT NULL,
  `nilai_cf` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pengetahuan`
--

INSERT INTO `tbl_pengetahuan` (`kode_pengetahuan`, `kode_jenis`, `kode_gejala`, `pertanyaan`, `nilai_cf`) VALUES
('02451', 'P02', 'G014', 'Apakah anda mengalami sakit kepala?', 0),
('02495', 'P01', 'G009', 'Apakah anda mengalami berkeringat di mmalam hari?', 0),
('04529', 'P02', 'G005', 'Apakah anda mengalami keram perut?', 0),
('09136', 'P01', 'G012', 'Apakah anda mengalami mulut kering?', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role` enum('Admin','User') NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `email`, `image`, `password`, `role`, `is_active`, `date_created`) VALUES
(1, 'Aswar Kasim', 'aswarkasim@gmail.com', 'default.jpg', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'User', 1, 1560694881),
(9, 'Admin', 'admin@gmail.com', '', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Admin', 0, 0),
(10, 'assa', 'assa@gmail.com', '', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Admin', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_diagnosa`
--
ALTER TABLE `tbl_diagnosa`
  ADD PRIMARY KEY (`id_diagnosa`);

--
-- Indexes for table `tbl_gejala`
--
ALTER TABLE `tbl_gejala`
  ADD PRIMARY KEY (`kode_gejala`);

--
-- Indexes for table `tbl_jenis`
--
ALTER TABLE `tbl_jenis`
  ADD PRIMARY KEY (`kode_jenis`);

--
-- Indexes for table `tbl_konfigurasi`
--
ALTER TABLE `tbl_konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indexes for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `tbl_pengetahuan`
--
ALTER TABLE `tbl_pengetahuan`
  ADD PRIMARY KEY (`kode_pengetahuan`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_diagnosa`
--
ALTER TABLE `tbl_diagnosa`
  MODIFY `id_diagnosa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `tbl_konfigurasi`
--
ALTER TABLE `tbl_konfigurasi`
  MODIFY `id_konfigurasi` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
