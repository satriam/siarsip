-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2022 at 10:16 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siarsip`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_nama` varchar(255) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_nama`, `admin_username`, `admin_password`, `admin_foto`) VALUES
(1, 'Administrator', 'admin', '0192023a7bbd73250516f069df18b500', '29786__MG_3546 copy.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `diri`
--

CREATE TABLE `diri` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `goldar` varchar(5) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `status_kawin` varchar(40) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `npwp` varchar(40) NOT NULL,
  `nip` varchar(40) NOT NULL,
  `telpon1` varchar(14) NOT NULL,
  `telpon2` varchar(14) NOT NULL,
  `bpjs` varchar(40) NOT NULL,
  `serata` varchar(40) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `univ` varchar(60) NOT NULL,
  `id_lokasi` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `id_jabatan` varchar(25) NOT NULL,
  `id_jj` int(11) NOT NULL,
  `nakes` varchar(30) NOT NULL,
  `jenis_jabatan` varchar(30) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diri`
--

INSERT INTO `diri` (`id`, `username`, `password`, `nama`, `tempat_lahir`, `tanggal_lahir`, `goldar`, `nik`, `status_kawin`, `alamat`, `email`, `npwp`, `nip`, `telpon1`, `telpon2`, `bpjs`, `serata`, `jurusan`, `univ`, `id_lokasi`, `id_status`, `id_jabatan`, `id_jj`, `nakes`, `jenis_jabatan`, `foto`, `status`) VALUES
(7, 'user1', '03aa1a0b0375b0461c1b8f35b234e67a', 'Brio satya', 'tanjung enim', '1980-09-21', 'B', '2342424', 'belum kawin', 'dsffsffds', 'satriabae43@gmail.com', 'jhgjhsgfhjsgfjh', '234242', '832487928347', '8768347682764', '23424242', 'D3', 'asdjahgsdj', 'jshfjhsjfhkjf', 2, 101, 'BAM100000I', 1, 'non nakes', 'Struktural', '29748__MG_3546 copy.jpg', 1),
(8, '5190411232', 'e84b59bfbb38b15c14dbc2797a8774f0', 'satria mulya adiwardana', 'tanjung enim', '2001-11-09', 'O', '6728246237882', 'belum kawin', 'tanjung enim', 'satriabae43@gmail.com', '71297396782176', '5190411232', '832487928347', '8768347682764', '752347265772', 'S1', 'informatika', 'UniversitasTeknologi Yogyakarta', 7, 101, 'BAM142100I', 9, 'nakes', 'Fungsional', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `tipe` varchar(40) NOT NULL,
  `created_at` date NOT NULL,
  `author` varchar(50) NOT NULL,
  `tanggal_acara` date NOT NULL,
  `lokasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `judul`, `isi`, `gambar`, `tipe`, `created_at`, `author`, `tanggal_acara`, `lokasi`) VALUES
(2, 'blablabla', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores sint mollitia repellendus assumenda? Assumenda sunt animi ex beatae velit, tempore nihil atque autem cum natus expedita aspernatur harum distinctio corporis.   Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores sint mollitia repellendus assumenda? Assumenda sunt animi ex beatae velit, tempore nihil atque autem cum natus expedita aspernatur harum distinctio corporis.   Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores sint mollitia repellendus assumenda? Assumenda sunt animi ex beatae velit, tempore nihil atque autem cum natus expedita aspernatur harum distinctio corporis.   Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores sint mollitia repellendus assumenda? Assumenda sunt animi ex beatae velit, tempore nihil atque autem cum natus expedita aspernatur harum distinctio corporis.   Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores sint mollitia repellendus assumenda? Assumenda sunt animi ex beatae velit, tempore nihil atque autem cum natus expedita aspernatur harum distinctio corporis.   Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores sint mollitia repellendus assumenda? Assumenda sunt animi ex beatae velit, tempore nihil atque autem cum natus expedita aspernatur harum distinctio corporis.   Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores sint mollitia repellendus assumenda? Assumenda sunt animi ex beatae velit, tempore nihil atque autem cum natus expedita aspernatur harum distinctio corporis.   Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores sint mollitia repellendus assumenda? Assumenda sunt animi ex beatae velit, tempore nihil atque autem cum natus expedita aspernatur harum distinctio corporis.   Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores sint mollitia repellendus assumenda? Assumenda sunt animi ex beatae velit, tempore nihil atque autem cum natus expedita aspernatur harum distinctio corporis.   Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores sint mollitia repellendus assumenda? Assumenda sunt animi ex beatae velit, tempore nihil atque autem cum natus expedita aspernatur harum distinctio corporis.     ', '15280_20200423-EN-BSOD_C0ffee_short-1536x864.png', 'Seminar', '2022-09-20', 'satria', '2022-09-23', 'Online'),
(4, 'jashdkha', 'kjashdkjas', NULL, 'Seminar', '2022-09-20', 'Administrator', '0000-00-00', ''),
(5, 'jashdkha', 'kjashdkjas', NULL, 'Seminar', '2022-09-20', 'Administrator', '0000-00-00', ''),
(6, 'testing', 'testing', '6991_batubara.jpg', 'Seminar', '2022-09-20', 'Administrator', '2022-12-31', 'Online'),
(7, 'blablabalba', 'loremkhdfkjshkfjhsdkfjhskjfhksdjfhskdjfgksdjfkjdsgfkjdsfkjg', NULL, 'hjsgdjfhsjdfhg', '2022-09-20', 'kjdshfkjsdhf', '2022-09-29', 'sdfhjgksdjfgksdjgfksdf');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `Kode_Jabatan` varchar(25) NOT NULL,
  `Nama_Jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`Kode_Jabatan`, `Nama_Jabatan`) VALUES
('BAM100000I', 'DIREKTURR'),
('BAM101000I', 'STAF AHLI MADYA - DIREKTUR PT BAM'),
('BAM103000I', 'SEKRETARIS'),
('BAM112000I', 'PEMERIKSA PRATAMA'),
('BAM130000I', 'MANAJER SDM, UMUM & LOGISTIK'),
('BAM131110I', 'ADMINISTRATOR SDM'),
('BAM132100I', 'SPESIALIS PENGADAAN'),
('BAM132110I', 'ADMINISTRATOR PENGADAAN'),
('BAM132200I', 'KOORDINATOR PERGUDANGAN'),
('BAM132210I', 'ADMINISTRATOR GUDANG'),
('BAM132310I', 'ADMINISTRATOR LAYANAN UMUM'),
('BAM140000I', 'MANAJER AKUNTANSI & KEUANGAN'),
('BAM141110I', 'ADMINISTRATOR KEUANGAN'),
('BAM142100I', 'SPESIALIS AKUNTANSI'),
('BAM142210I', 'ADMINISTRATOR PAJAK'),
('BAM150000I', 'MANAJER OPERASIONAL & IT'),
('BAM151100I', 'SPESIALIS PEMASARAN'),
('BAM152110I', 'PC SUPPORT'),
('BAM152200I', 'ADMINISTRATOR IT'),
('BAM200000I', 'KEPALA RUMAH SAKIT'),
('BAM202400I', 'TIM IPCN'),
('BAM202500I', 'TIM AKREDITASI');

-- --------------------------------------------------------

--
-- Table structure for table `jenjang`
--

CREATE TABLE `jenjang` (
  `id` int(11) NOT NULL,
  `jenjang` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenjang`
--

INSERT INTO `jenjang` (`id`, `jenjang`) VALUES
(1, '1C'),
(2, '2C'),
(3, '3C'),
(4, '4C'),
(5, '5C'),
(6, '6C'),
(7, '2B'),
(8, '3B'),
(9, '4B'),
(10, '5A');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id` int(11) NOT NULL,
  `Nama_Lokasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id`, `Nama_Lokasi`) VALUES
(2, 'RS BAM'),
(4, 'KLINIK BUKIT ASAM'),
(5, 'KLINIK SR PULAU'),
(6, 'KLINIK TJ LALANG'),
(7, 'KLINIK PAMA'),
(8, 'KLINIK BSP'),
(9, 'KLINIK TARAHAN'),
(10, 'KLINIK HBAP'),
(11, 'KLINIK OMBILIN'),
(12, 'KLINIK DERTI');

-- --------------------------------------------------------

--
-- Table structure for table `notif`
--

CREATE TABLE `notif` (
  `id` int(11) NOT NULL,
  `aksi` varchar(50) NOT NULL,
  `created_at` date NOT NULL,
  `nama` varchar(50) NOT NULL,
  `file` varchar(50) NOT NULL,
  `target` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notif`
--

INSERT INTO `notif` (`id`, `aksi`, `created_at`, `nama`, `file`, `target`) VALUES
(2, 'Memposting', '2022-09-20', 'Administrator', 'informasi Seminar', 'user'),
(3, 'blablabla', '2022-09-20', 'satt', 'informasi', 'admin'),
(4, 'Upload', '2022-09-20', 'Brio satya', '', 'admin'),
(5, 'Memposting', '2022-09-20', 'Administrator', 'informasi Seminar', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `pks`
--

CREATE TABLE `pks` (
  `id` int(11) NOT NULL,
  `id_diri` int(11) NOT NULL,
  `mulai1` date NOT NULL,
  `mulai2` date NOT NULL,
  `mulai3` date NOT NULL,
  `mulai4` date NOT NULL,
  `akhir1` date NOT NULL,
  `akhir2` date NOT NULL,
  `akhir3` date NOT NULL,
  `akhir4` date NOT NULL,
  `akhir_pks` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pks`
--

INSERT INTO `pks` (`id`, `id_diri`, `mulai1`, `mulai2`, `mulai3`, `mulai4`, `akhir1`, `akhir2`, `akhir3`, `akhir4`, `akhir_pks`) VALUES
(1, 7, '2020-12-31', '2022-12-30', '2021-12-29', '2021-12-29', '2021-12-29', '2021-12-30', '2022-12-29', '2021-12-30', '2016-12-31'),
(2, 0, '2019-09-30', '2021-11-29', '2021-11-30', '2021-11-30', '2017-10-30', '2021-10-29', '2022-11-30', '2022-11-30', '2015-12-30'),
(3, 7, '2020-12-31', '2022-12-30', '2021-12-29', '2021-12-29', '2021-12-29', '2021-12-30', '2022-12-29', '2021-12-31', '2016-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `rekening`
--

CREATE TABLE `rekening` (
  `id` int(11) NOT NULL,
  `id_diri` int(11) NOT NULL,
  `Bank` varchar(50) NOT NULL,
  `Rekening` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekening`
--

INSERT INTO `rekening` (`id`, `id_diri`, `Bank`, `Rekening`) VALUES
(1, 7, 'Mandiri', 5762354),
(3, 7, 'Mandiri', 2147483647),
(4, 7, 'Mandiri', 654321),
(5, 8, 'BCA', 2147483647),
(6, 8, 'BRI', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `sertifikat`
--

CREATE TABLE `sertifikat` (
  `id` int(11) NOT NULL,
  `nama_sertif` varchar(100) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `id_diri` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sertifikat`
--

INSERT INTO `sertifikat` (`id`, `nama_sertif`, `gambar`, `id_diri`) VALUES
(1, 'asdsd', '24918_20200423-EN-BSOD_C0ffee_short-1536x864.png', 0),
(2, 'ygfhg', '16068_20200423-EN-BSOD_C0ffee_short-1536x864.png', 7),
(3, 'kakakaka', '14534_batubara.jpg', 8),
(4, 'Brio satya', '25431_20200423-EN-BSOD_C0ffee_short-1536x864.png', 7);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status`) VALUES
(101, 'PTBA'),
(102, 'PKWTT'),
(103, 'PKWT'),
(104, 'MITRA'),
(105, 'VENDOR');

-- --------------------------------------------------------

--
-- Table structure for table `tstatistika`
--

CREATE TABLE `tstatistika` (
  `id` int(11) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `hits` int(11) NOT NULL,
  `online` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tstatistika`
--

INSERT INTO `tstatistika` (`id`, `ip`, `tanggal`, `hits`, `online`) VALUES
(1, '::1', '2022-09-21', 13, '1663734784'),
(2, '::1', '2022-09-24', 11, '1664024088');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_nama` varchar(100) NOT NULL,
  `user_username` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_nama`, `user_username`, `user_password`, `user_foto`) VALUES
(8, 'Samsul Bahri', 'user1', '24c9e15e52afc47c225b757e7bee1f9d', ''),
(9, 'Reza Yuzanni', 'user2', '7e58d63b60197ceb55a1c487989a3720', ''),
(10, 'Ajir Muhajier', 'user3', '92877af70a45fd6a2ed7fe81e1236b78', ''),
(11, 'Cut Nanda Somay', 'user4', '3f02ebe3d7929b091e3d8ccfde2f3bc6', ''),
(12, 'afika putri', 'afika2021', '827ccb0eea8a706c4c34a16891f84e7b', ''),
(13, 'Iswatul Hasanah', 'iswatul', '202cb962ac59075b964b07152d234b70', ''),
(17, 'Muhammad Farhan', 'aang', 'ecf6312e560a8370e9ff2a99d74817dc', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `diri`
--
ALTER TABLE `diri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`Kode_Jabatan`);

--
-- Indexes for table `jenjang`
--
ALTER TABLE `jenjang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notif`
--
ALTER TABLE `notif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pks`
--
ALTER TABLE `pks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekening`
--
ALTER TABLE `rekening`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sertifikat`
--
ALTER TABLE `sertifikat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tstatistika`
--
ALTER TABLE `tstatistika`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `diri`
--
ALTER TABLE `diri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `jenjang`
--
ALTER TABLE `jenjang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `notif`
--
ALTER TABLE `notif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pks`
--
ALTER TABLE `pks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `rekening`
--
ALTER TABLE `rekening`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `sertifikat`
--
ALTER TABLE `sertifikat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
--
-- AUTO_INCREMENT for table `tstatistika`
--
ALTER TABLE `tstatistika`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
