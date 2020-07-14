-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jul 2020 pada 14.51
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
('P01', 'Diare Akut', 'Diare Akut Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita voluptatem voluptas veritatis quas neque impedit nemo tenetur numquam, laboriosam, voluptates incidunt est quod velit commodi in. Minus eum deleniti adipisci.', '<=', 74, '2020-06-29 02:28:58'),
('P02', 'Diare Kronis', 'Diaket Kronis Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita voluptatem voluptas veritatis quas neque impedit nemo tenetur numquam, laboriosam, voluptates incidunt est quod velit commodi in. Minus eum deleniti adipisci.', '>=', 75, '2020-06-29 02:29:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_konfigurasi`
--

CREATE TABLE `tbl_konfigurasi` (
  `id_konfigurasi` int(1) NOT NULL,
  `nama_aplikasi` varchar(100) NOT NULL,
  `nama_pimpinan` varchar(100) NOT NULL,
  `provinsi` varchar(128) NOT NULL,
  `kabupaten` varchar(128) NOT NULL,
  `kecamatan` varchar(128) NOT NULL,
  `alamat` text NOT NULL,
  `kontak_person` varchar(20) NOT NULL,
  `stok_min` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_konfigurasi`
--

INSERT INTO `tbl_konfigurasi` (`id_konfigurasi`, `nama_aplikasi`, `nama_pimpinan`, `provinsi`, `kabupaten`, `kecamatan`, `alamat`, `kontak_person`, `stok_min`) VALUES
(1, 'Inventory Barang', 'Waddah', 'Sulawesi Selatan', 'Makassar', 'Manggala', 'jl. Dg. Hayo', '085298730727', 10);

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
  `diagnosa` varchar(20) NOT NULL,
  `tgl_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pasien`
--

INSERT INTO `tbl_pasien` (`id_pasien`, `nama_pasien`, `jenis_kelamin`, `umur`, `akumulasi_cf`, `diagnosa`, `tgl_update`) VALUES
('024179153528668', 'Aswar Kasim', 'Laki-laki', 22, 0, '', '2020-06-15 07:25:56'),
('027813698530726', 'Aswar Kasim', '', 12, 0, '', '2020-06-23 01:38:16'),
('028816395054129', 'Ali', 'Laki-laki', 13, 0, '', '2020-07-03 06:52:57'),
('034752632489151', 'Mahyuddin', 'Laki-laki', 14, 0, '', '2020-06-29 01:36:58'),
('039261794825731', 'Ali', 'Laki-laki', 12, 0, '', '2020-06-23 01:40:26'),
('040755138226138', 'Aswar Kasim', 'Laki-laki', 12, 0, '', '2020-06-23 06:01:52'),
('043377985951186', 'Ali', 'Laki-laki', 12, 0, '', '2020-06-23 01:46:16'),
('051203447739291', 'Mahyuddin', 'Laki-laki', 12, 0, '', '2020-06-23 06:25:59'),
('060928732468173', 'Mahyuddin', 'Laki-laki', 12, 0, '', '2020-06-23 01:18:34'),
('061810392753948', 'Aswar Kasim', 'Laki-laki', 12, 0, '', '2020-06-23 06:05:30'),
('073518308467622', 'Aswar Kasim', 'Laki-laki', 12, 0, '', '2020-06-23 06:05:08'),
('076721905485812', 'Syamsul', 'Laki-laki', 13, 0, '', '2020-07-03 07:04:19'),
('158063054987692', 'Ali', 'Laki-laki', 12, 0, '', '2020-06-23 01:44:35'),
('164728527690538', 'Aswar Kasim', '', 13, 0, '', '2020-06-23 01:34:27'),
('184609625732548', 'Mahyuddin', 'Laki-laki', 12, 0, '', '2020-06-29 01:35:25'),
('195207261438486', 'Aswar Kasim', '', 13, 0, '', '2020-06-23 01:35:05'),
('227955713466348', 'Aswar Kasim', 'Laki-laki', 12, 0, '', '2020-06-24 01:43:00'),
('256819694103577', 'Aswar Kasim', 'Laki-laki', 12, 0, '', '2020-06-24 01:43:23'),
('268273815949300', 'Ali', 'Laki-laki', 12, 0, '', '2020-06-23 01:49:14'),
('287060438596134', 'Ali', 'Laki-laki', 12, 0, '', '2020-06-23 01:49:56'),
('315379746920815', 'Aswar Kasim', '', 13, 0, '', '2020-06-23 01:31:03'),
('324530420691816', 'Aswar Kasim', 'Perempuan', 12, 0, '', '2020-06-23 06:18:43'),
('347581274265068', 'Aswar Kasim', 'Perempuan', 12, 0, '', '2020-06-23 06:22:52'),
('355962708406972', 'Aswar Kasim', 'Laki-laki', 22, 0, '', '2020-06-15 07:23:08'),
('360381916445802', 'Aswar Kasim', 'Laki-laki', 12, 0, '', '2020-06-24 01:12:57'),
('368208039476249', 'Mahyuddin', 'Laki-laki', 12, 0, '', '2020-06-23 01:20:04'),
('417462731299368', 'Aswar Kasim', 'Laki-laki', 22, 0, '', '2020-06-15 07:14:08'),
('438296705145183', 'Ali', 'Laki-laki', 12, 0, '', '2020-06-23 01:44:56'),
('462517392859687', 'Aswar Kasim', 'Laki-laki', 12, 0, '', '2020-06-23 06:00:10'),
('480512859096672', 'Ali', 'Laki-laki', 12, 0, '', '2020-06-29 01:55:19'),
('480801296692773', 'Ali', 'Laki-laki', 12, 0, '', '2020-06-23 01:45:39'),
('489572562718304', 'Aswar Kasim', 'Laki-laki', 12, 0, '', '2020-06-29 01:37:56'),
('491806225678394', 'Mahyuddin', 'Laki-laki', 12, 0, '', '2020-06-23 06:21:54'),
('553086427173914', 'Ali', 'Laki-laki', 12, 0, '', '2020-06-23 01:46:49'),
('560840334265778', 'Aswar Kasim', 'Laki-laki', 12, 0, '', '2020-06-23 05:55:32'),
('569680421912580', 'Aswar Kasim', 'Laki-laki', 12, 0, '', '2020-06-23 05:58:42'),
('586731106045397', 'Aswar Kasim', 'Laki-laki', 12, 0, '', '2020-07-03 07:28:58'),
('591408129567270', 'Aswar Kasim', 'Laki-laki', 14, 0, '', '2020-06-23 06:22:37'),
('620853342191497', 'Mahyuddin', 'Laki-laki', 12, 0, '', '2020-06-22 01:48:45'),
('640835917214637', 'Ali', 'Laki-laki', 12, 0, '', '2020-06-23 01:44:32'),
('671839525414678', 'Masri', 'Laki-laki', 12, 0, '', '2020-06-29 01:53:31'),
('713621845040962', 'Aswar Kasim', '', 12, 0, '', '2020-06-23 01:37:44'),
('713901565084826', 'Aswar Kasim', 'Laki-laki', 12, 0, '', '2020-06-23 06:01:13'),
('720996750838634', 'Aswar Kasim', 'Laki-laki', 12, 0, '', '2020-06-23 06:18:18'),
('727682045381993', 'Ali', 'Laki-laki', 12, 0, '', '2020-06-23 01:40:58'),
('743314652629880', 'Ali', 'Laki-laki', 12, 0, '', '2020-06-23 01:43:58'),
('751649015323069', 'Mahyuddin', 'Laki-laki', 12, 0, '', '2020-06-23 01:22:32'),
('793816250144720', 'Aswar Kasim', 'Laki-laki', 12, 0, '', '2020-06-29 01:42:33'),
('809337117842425', 'Aswar Kasim', 'Laki-laki', 12, 0, '', '2020-06-23 05:58:47'),
('827670443135218', 'Aswar Kasim', 'Laki-laki', 12, 0, '', '2020-06-29 01:42:01'),
('858153264094703', 'Ali', 'Laki-laki', 12, 0, '', '2020-06-23 01:44:29'),
('874870529416365', 'Aswar Kasim', 'Laki-laki', 12, 0, '', '2020-06-29 01:30:10'),
('896149302578761', 'Ali', 'Laki-laki', 12, 0, '', '2020-06-23 01:44:38'),
('935213685970182', 'Ali', 'Laki-laki', 12, 0, '', '2020-06-23 01:45:42'),
('939781132546406', 'Aswar Kasim', 'Perempuan', 12, 0, '', '2020-07-03 07:19:06'),
('943190857228653', 'Aswar Kasim', 'Laki-laki', 12, 0, '', '2020-06-23 06:24:18'),
('960885796431225', 'Mahyuddin', 'Perempuan', 12, 0, '', '2020-06-29 01:35:47');

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
('09136', 'P01', 'G012', 'Apakah anda mengalami mulut kering?', 0),
('09618', 'P02', 'G021', 'Apakah anda mengalami haus terus menerus?', 0),
('10472', 'P02', 'G006', 'Apakah anda mengalami sakit perut?', 0),
('17289', 'P01', 'G004', 'Apakah Sering Mual?', 0),
('24378', 'P01', 'G010', 'Apakah anda mengalami lemas?', 0),
('29046', 'P01', 'G016', 'Apakah anda mengalami berdarah/lendir pada tinja?', 0),
('43560', 'P01', 'G013', 'Apakah anda mengalami frekuensi buang air kecil berkurang?', 0),
('45187', 'P01', 'G021', 'Apakah anda mengalami haus terus menerus?', 0),
('51047', 'P01', 'G020', 'Apakah anda mengalami lesu?', 0),
('53194', 'P02', 'G007', 'Apakah anda mengalami muntah?', 0),
('54892', 'P01', 'G017', 'Apakah anda mengalami kehilangan nafsu makan?', 0),
('56027', 'P02', 'G003', 'Apakah BAB lebih dari 5 kali dalam sehari?', 0),
('58736', 'P02', 'G004', 'Apaha sering Mual?', 0),
('61478', 'P02', 'G015', 'Apakah anda mengalami demam?', 0),
('64503', 'P02', 'G002', 'Apakah faeses lembek atau cair?', 0),
('68251', 'P02', 'G020', 'Apakah anda mengalami lesu?', 0),
('71364', 'P02', 'G001', 'Apakah anda mengalami perut kembung?', 0.7),
('71865', 'P02', 'G018', 'Apakah anda mengalami dehidrasi?', 0),
('74592', 'P01', 'G018', 'Apakah anda mengalami dehidrasi?', 0),
('75630', 'P02', 'G017', 'Apakah anda mengalami kehilangan nafsu makan?', 0),
('79603', 'P02', 'G019', 'Apakah anda mengalami feses banyak?', 0),
('83467', 'P01', 'G015', 'Apakah anda mengalami demam?', 0),
('83709', 'P01', 'G011', 'Apakah anda mengalami kram otot?', 0),
('84612', 'P01', 'G019', 'Apakah anda mengalami feses banyak?', 0),
('85274', 'P02', 'G008', 'Apakah anda mengalami pucat?', 0),
('89623', 'P01', 'G007', 'Apakah anda mengalami muntah?', 0),
('96780', 'P01', 'G014', 'Apakah anda mengalami sakit kepala?', 0);

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
-- Indeks untuk tabel `tbl_diagnosa`
--
ALTER TABLE `tbl_diagnosa`
  ADD PRIMARY KEY (`id_diagnosa`);

--
-- Indeks untuk tabel `tbl_gejala`
--
ALTER TABLE `tbl_gejala`
  ADD PRIMARY KEY (`kode_gejala`);

--
-- Indeks untuk tabel `tbl_jenis`
--
ALTER TABLE `tbl_jenis`
  ADD PRIMARY KEY (`kode_jenis`);

--
-- Indeks untuk tabel `tbl_konfigurasi`
--
ALTER TABLE `tbl_konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indeks untuk tabel `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indeks untuk tabel `tbl_pengetahuan`
--
ALTER TABLE `tbl_pengetahuan`
  ADD PRIMARY KEY (`kode_pengetahuan`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_diagnosa`
--
ALTER TABLE `tbl_diagnosa`
  MODIFY `id_diagnosa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_konfigurasi`
--
ALTER TABLE `tbl_konfigurasi`
  MODIFY `id_konfigurasi` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
