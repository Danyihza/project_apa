-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 27, 2020 at 02:08 AM
-- Server version: 10.3.23-MariaDB-log-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oskamat4_recruitment`
--

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `jabatan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `jabatan`) VALUES
(1, 'Ketua MPK'),
(2, 'Wakil Ketua MPK'),
(3, 'Sekretaris MPK'),
(4, 'Bendahara MPK'),
(5, 'Koordinator Kelas XI'),
(6, 'Koordinator Kelas X'),
(7, 'Ketua OSIS'),
(8, 'Wakil Ketua OSIS'),
(9, 'Sekretaris OSIS'),
(10, 'Bendahara OSIS'),
(11, 'Sekbid Ketaqwaan'),
(12, 'Sekbid BPL-LH'),
(13, 'Sekbid Akademik'),
(14, 'Sekbid Apresiasi dan Karya Seni'),
(15, 'Sekbid Jasmani'),
(16, 'Sekbid Jurnalistik'),
(17, 'Sekbid Berbangsa'),
(18, 'Sekbid Bela Negara'),
(19, 'Sekbid Wirausaha'),
(20, 'Sekbid Kerumahtanggaan');

-- --------------------------------------------------------

--
-- Table structure for table `sub_jabatan`
--

CREATE TABLE `sub_jabatan` (
  `id_sub` int(11) NOT NULL,
  `sub_jabatan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_jabatan`
--

INSERT INTO `sub_jabatan` (`id_sub`, `sub_jabatan`) VALUES
(1, 'Ketua'),
(2, 'Wakil'),
(3, 'Sekretaris'),
(4, 'Bendahara');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `ttl` varchar(256) NOT NULL,
  `kelas` varchar(128) NOT NULL,
  `alamat` text NOT NULL,
  `p_ortu` varchar(128) NOT NULL,
  `no_ortu` varchar(128) NOT NULL,
  `no_hp` varchar(128) NOT NULL,
  `pengalaman` text NOT NULL,
  `prestasi` text NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `pilihan1` int(11) DEFAULT NULL,
  `sub_jabatan1` int(11) NOT NULL,
  `pilihan2` int(11) DEFAULT NULL,
  `sub_jabatan2` int(11) NOT NULL,
  `unique_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `ttl`, `kelas`, `alamat`, `p_ortu`, `no_ortu`, `no_hp`, `pengalaman`, `prestasi`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`, `pilihan1`, `sub_jabatan1`, `pilihan2`, `sub_jabatan2`, `unique_code`) VALUES
(1, 'admin', '', '', '', '', '', '', '', '', 'oskamatura22@gmail.com', '', '$2y$10$9J1yWEhvsr/aqmFXtUw2tu368pjR00D9fK40DKa13f4yJ54ezitPK', 1, 1, 0, NULL, 0, NULL, 0, ''),
(27, 'Agung Maulana', 'Probolinggo,28 Agustus 2004', 'X MIPA 1', 'Desa Bago, Kecamatan Besuk, Kabupaten Probolinggo', 'Pensiun PNS', '085232652057', '082339002988', '', '', 'agungmaulana29174@gmail.com', 'inbound2276546108750450729.jpg', '$2y$10$UTZtA8shKRZti8jTb8lFVuzJDWDdJTRj5lb7BLQ1liU4U./2mVGRu', 2, 2, 1597858160, 17, 3, 17, 4, 'BCNEQ9'),
(28, 'Abiyasa Aryadipo Pranata', 'Probolinggo 26 Desember 2004', 'X MIPA 4', 'Dusun Krajan,RT 3 RW 1 Desa Karangren Kecamatan Krejengan', 'Petani dan ibu rumah tangga', '085334799889', '081259895126', '', '', 'abiyasapranata555@gmail.com', 'inbound2643148385369548567.jpg', '$2y$10$2WEKLpqRl0G5YGsNRL.GUOtTo7xUEjnBAUNLo5/XcBO.OQ7T5Adnu', 2, 2, 1597866059, 19, 2, 19, 2, 'Qfk5sn'),
(29, 'Diana Kristyana', 'Probolinggo, 25 Juli 2004', 'X MIPA 7', 'Jln. Condong, RT/RW : 02/04, Dusun Pasar, Desa Ketompen, Kecamatan Pajarakan, Kabupaten Probolinggo', 'Wiraswasta', '085235676224', '082245811346', '', '', 'dianakristyana@gmail.com', 'DSC_0196.JPG', '$2y$10$zg6jxuy1ZGHx/eqbkCd.kOfde4qvoNIm8aFicYpyf7PXnR9.rpxBC', 2, 2, 1597870017, 9, 0, 14, 3, 'd9Q2uq'),
(30, 'Indiana zulfa', 'Probolinggo,26 Mei 2005', 'X IPS 1', 'Dusun Bukkolan RT/RW 02/04 - Sidopekso', 'Buruh tani', '083832973537', '081357894891', 'Saya pernah menjadi OSIS saat SMP.', '', 'dianzulfa59@gmail.com', 'inbound1865732682939798059.jpg', '$2y$10$hG8Io.cnnAjkGQB8Ia7zm.2YKSpot9Vu3NgyxLZfEGQFxr9byOA2K', 2, 2, 1597876732, 13, 2, 18, 4, 'MOj9eX'),
(31, 'Indiana zulfa', 'Probolinggo,26 Mei 2005', 'X IPS 1', 'Dusun Bukkolan RT/RW 02/04 - Sidopekso', 'Buruh tani', '083832973537', '081357894891', '', '', 'zulfaindiana1@gmail.com', 'inbound6075900974884244810.jpg', '$2y$10$Oa9YKC5ZzGhUlplHm3Vncu2RUM1JriYmGr8dtS8.K/TeRyFI.lj/S', 2, 2, 1597877527, 13, 2, 18, 4, 'kX6Dl3'),
(32, 'ABRAM MOVIC CRUSADE TAMPUBOLON', 'Probolinggo, 29 Maret 2006', 'X MIPA 7', 'Jl. A. Yani No. 90A Gg. Perkutut, Patokan, Kraksaan', 'Ayah : Swasta ; Ibu : Ibu Rumah Tangga', '081336163834', '081231989948', '', '', 'abrammovic123@gmail.com', '3.jpg', '$2y$10$siUszjf2IPK/3UmlTJPBDuQXdF01KedhPV4W1chRidpwIYuSwYdw6', 2, 2, 1597878681, 15, 2, 13, 2, 'G55ykt'),
(33, 'Riznaya Radin Abdian', 'Probolinggo, 21 Mei 2004', 'X MIPA 5', 'Ds. Kandangjati Kulon, Rt 03 Rw 03, Kec. Kraksaan Kab. Probolinggo', 'Karyawan BUMN', '085259565555', '082302007834', '', '', 'riznayaradinabdian089@gmail.com', '71.JPG', '$2y$10$rxHzUhxfcsdUY2M0Ibqgde42aD7kdYp/3Hszj83.J5vJHg8ELaXW.', 2, 2, 1597879524, 6, 0, 6, 0, 'zJN77S'),
(34, 'FITRIA RAMADHANI SUSANTO', 'Probolinggo,13 september 2005', 'X mipa 7', 'Gebangan,krejengan', 'Perangkat desa', '082314838059', '085259248399', '', '', 'fitriaramadhani1309@gmail.com', '12.jpg', '$2y$10$90UxGoG7IBFZufeNY6QrceoALF/pVGK082AHlOLu3rdE0qDCitP..', 2, 2, 1597879938, 14, 3, 9, 0, 'PUg7rQ'),
(35, 'CIKITHA AISHA THURRIDLOH', 'Probolinggo, 3 Agustus 2004', 'X MIPA 1', 'Jln.Raya Randupitu No.8 Gending - Probolinggo', 'PNS', '082257112369', '085230110465', '', '', 'cikitanikita336@gmail.com', 'inbound8636908452330370006.jpg', '$2y$10$4OW0Bs5SGDPmexWR6j1FLumKDlsGP.FMzqjLJdhJe1MMHfqnD4EQO', 2, 2, 1597882391, 9, 0, 14, 3, 'mS193i'),
(36, 'SILVIA NAYSILLA PUTRI', 'Probolinggo, 29 Juni 2005', 'X MIPA 2', 'Kandangjati Kulon Rt.06/Rw.01', 'Ibu rumah tangga', '-', '083852173330', '', '', 'naysillasilvia29@gmail.com', 'IMG-20200729-WA0009.jpg', '$2y$10$L09bRXqoOHo49oK7TvHmk.VWNf7XfOD0kQMj3Z6MqFTx5ccEs5I2W', 2, 2, 1597882751, 19, 4, 14, 4, '7meYME'),
(37, 'Viky Dwi Nurvianto', 'Surabaya, 13 Februari 2004', 'XI Mipa 1', 'Kampung taman RT001 RW003, Kalianget, Banyuglugur,Situbondo', 'Bidan', '081358885832', '087753420755', 'OSIS SMPN 1 Banyglugur 2016-17', 'Juara 1 lempar cakram tingkat SMP Se-kabupaten Situbondo', 'vikynurvianto@gmail.com', 'viky-1.jpg', '$2y$10$Ezdb5x50F881JBOzDyyvo.mCpZCTe3UgsSxJVy59pA.FjdTCQe4XK', 2, 2, 1597886369, 5, 0, 19, 0, 'wH80fa'),
(38, 'Shovy Masithoh Ta\'zizah', 'Probolinggo, 24 Februari 2005', 'X MIPA 1', 'JL. P. SUDIRMAN NO. 357 Patokan', 'Pedagang', '085234897376', '082332442626', '', '', 'Shovy.M2005@gmail.com', '20200721_125032.jpg', '$2y$10$0lNxAj/ov8WxG9DPalIvF.i45wQ3U89ouqdjyG4Ja3FqrtBe6PVlq', 2, 2, 1597886485, 17, 2, 17, 3, '1rmDpE'),
(39, 'Defina Nurasisah', 'Probolinggo,13, februari,2005', 'X MIPA 2', 'Jl sudirman, belakang kantor kpud, rt1 rw5', 'PNS', '082302471825', '082397547207', '', '', 'Defina135@gmai.com', 'IMG-20200729-WA0032.jpg', '$2y$10$4OZdit/J.i.xF1AzIvW5fe3gpk526/9Nl6azpS12I5o6Tss6Uyh82', 2, 2, 1597887133, 14, 0, 20, 0, 'PnVcu3'),
(40, 'Defina Nurasisah', 'Probolinggo,13, februari,2005', 'X MIPA 2', 'Jl sudirman, belakang kantor kpud, rt1 rw5', 'PNS', '082302471825', '082397547207', '', '', 'Defina890@gmail.com', 'IMG-20200729-WA00321.jpg', '$2y$10$u29Fvofh/d7f9clvik93cetEEP5YhK0RSOfjPembI6VPYjWmlOJv6', 2, 2, 1597887306, 14, 0, 20, 0, 'hCMQhF'),
(41, 'Siti Fauziah Ayu Puspita', 'Probolinggo, 10 Januari 2005', 'X MIPA 5', 'Perumahan Griya Sukomulyo Indah Blok C-6', 'Karyawan Swasta', '081252608335', '082237576302', '', '', 'fauziahkai01@gmail.com', '31.jpg', '$2y$10$UL4rp3.Nemur5rlJhj0tHeaWoJI0x38OAb9gTjG96aw.0Xg9rK.72', 2, 2, 1597887730, 10, 0, 17, 4, 'WYrVMH'),
(42, 'Ananda Luri Nuril Salsabila', 'Probolinggo, 20 Januari 2006', 'X MIPA 3', 'Perum Kraksaan Permai Blok A-10', 'Guru', '085257197403', '089681436824', '', '', 'anandaluri20@gmail.com', 'WhatsApp_Image_2020-08-20_at_08_20_27.jpeg', '$2y$10$wIc8KZIoJvaytLSTmSygFOGny0id8GdiOOnveeSEP.DiT8U0k/yau', 2, 2, 1597888217, 9, 0, 17, 3, 'jooifg'),
(43, 'Firah Salsabila Rahman', '29-MEI-2005', 'X IPS 3', 'DUSUN 3 PASAR 2, RT 11 RW 6, KLASEMAN, GENDING, PROBOLINGGO, JAWA TIMUR', 'Petani', '085230306166', '087753169070', '', '', 'firah.syantik@gmail.com', 'Screenshot_20200820-090019~2.png', '$2y$10$ouaMvFPw070N4CBon4LwFuXgxXtkm2WSOCzBKBEh3MLcAhZC7gj02', 2, 2, 1597888924, 16, 2, 14, 2, 'ODeBfx'),
(44, 'SIGIT DWILAKSONO', 'PROBOLINGGO, 07 JANUARI 2005', 'X MIPA 6', 'DUSUN KLOMPANGAN RT02 RW07 DESA GEBANGAN', 'BURUH TANI', '085334938360', '081232782060', '', '', 'dwisigit426@gmail.com', 'sigit.jpg', '$2y$10$cGfapiELD7/2Djgdq8rMcu8E0bJVs7SSqXH.iz1T..AiQPsV0A4LC', 2, 2, 1597889000, 19, 2, 15, 1, 'vVe2ZH'),
(45, 'IDHAM LINGGA HIDAYAT', 'Sidoarjo, 08 Desember 2004', 'X MIPA 2', 'Jl.sunan giri kel.kraksaan wetan kec.kraksaan', 'Guru', '+62853-3104-5176', '0856-4835-2273', '', '', 'idhamlinggahidayat@gmail.com', 'inbound6531017140718374225.jpg', '$2y$10$Pv8B8yc9/YChSyPjSi0Tb.iXIr83gJuHpOsJ5NWMkGCJ5EZ24eS1K', 2, 2, 1597889346, 15, 2, 17, 2, '7KG7GY'),
(46, 'Frendy Lifmin', 'Probolinggo, 07 Agustus 2004', 'X MIPA 5', 'Desa Wonorejo RT16 RW 05 Kec. Maron', 'Ibu : Ibu Rumah Tangga, Ayah : Wiraswasta', '082213004151', '085732567391', '', '', 'facebookfrendy@gmail.com', '20200820_091231.jpg', '$2y$10$niUDdty95nkQeznJpTf1qul6sx2R71Me1KyMp/O0ZXDpSLPptfYI2', 2, 2, 1597890803, 16, 2, 18, 2, 'WABYRv'),
(47, 'Defina Nurasisah', 'Probolinggo, 13 Februari 2020', 'X MIPA 2', 'jl pangluma sudirman, belakang kantor kpu, rt1 rw5', 'PNS', '082302471815', '082397547207', '', '', 'Defi890@gmail.com', 'IMG-20200729-WA00322.jpg', '$2y$10$ISLrn0oMdHsmALMzanPGeeGLxMfXv/C49tZ1B10bSXPG.mWy4M9E6', 2, 2, 1597890889, 14, 0, 20, 0, '23jNxD'),
(48, 'Ridha Dewi Safirah', 'Pasuruan, 25 Desember 2004', 'X MIPA 5', 'Desa Triwungan, RT 21/RW 10, Kec. Kotaanyar, Kab. Probolinggo', 'Swasta', '082 223 698 889', '087 865 184 752', '', '', 'irrairra3@gmail.com', 'IMG_20200819_232646.jpg', '$2y$10$.pLgN1jGE/Yw6F5UzDID8.Zzrt2RGuB6WaOreaK8ApTvjw5l9./ba', 2, 2, 1597894239, 4, 0, 17, 3, 'eJ9IzK'),
(49, 'Maulidatul Hasanah', 'Probolinggo,23 April 2005', 'X IPS 2', 'Asembagus,Kraksaan', 'Wiraswasta', '082331050494', '085648406270', '', '', 'maulidatulhasanah635@gmail.com', 'PicsArt_08-19-10_12_03.jpg', '$2y$10$tKkVKbtwQz2bM6jJPYZwSOdGWU2mjXKsAvl0poVHyGwswANGA1XSu', 2, 2, 1597894339, 9, 0, 13, 3, 'bcKqh7'),
(50, 'Diva Wahyu Kusumadewi', 'Probolinggo, 30 Mei 2006', 'X MIPA 7', 'Jln.kotaanyar, Desa sumberanyar RT.23 RW.07, Kec. Paiton, Kab. Probolinggo.', 'Polri', '085331083774', '082248419735', 'Osis', '-', 'divawahyu989@gmail.com', 'PicsArt_08-20-10_04_58.jpg', '$2y$10$EL/Bn3FTvsGzMv1AiGSyg.IEWN5QC1eTO03fbFt/w5sgT.pniVyVC', 2, 2, 1597894712, 13, 4, 10, 0, '8w75ev'),
(52, 'Angga Eka Pradana', 'Probolinggo, 28 Maret 2005', 'X MIPA 4', 'Dusun Krajan, RT.02 RW.01, Desa Bago, Kec.Besuk, Kab.Probolinggo', 'Wiraswasta', '085233085899', '085333036961', '', '', 'copotsandal28@gmail.com', 'inbound6376470440270422239.jpg', '$2y$10$qDRBM/jMAGG903ZWZ2z93uNjsDseo5xc/mtxeY4LphDDyMtnZngYm', 2, 2, 1597900249, 19, 3, 11, 3, 'DHXn5t'),
(53, 'Amelia Putri Ramadani', 'Probolinggo, 29 Oktober 2005', 'X MIPA5', 'Jln RA KARTINI NO 240 BULU KRAKSAAN PROBOLINGGO JAWA TIMUR', 'Wirausaha', '081333370905', '081333370905', 'Paser, PMR', '', 'ameliaaameliaa0@gmail.com', 'inbound1358269068620291035.jpg', '$2y$10$scFgC8SbyMMlNy45qCptk.VyJdbKO/h5Np5Yb.jMyIfGmrGrp89CK', 2, 2, 1597902881, 10, 0, 4, 0, 'XBAyrL'),
(54, 'Farel Fauziah Aini', 'Probolinggo,11 Juli 2003', '11 MIPA 1', 'perum bumi bulu indah blok P2 Kraksaan', 'Pegawai Negeri Sipil', '081358259280', '081330960706', '-', 'Juara 3 Bola Tangan ', 'farelfauziah67@gmail.com', 'IMG-20200820-WA0038.jpg', '$2y$10$/tnTQTv.CnpThVk1hLCUKOl3XrdX1EcceoPSkgYnfd9Fkioqgqk1G', 2, 2, 1597904914, 5, 0, 20, 0, 'FgHD6P'),
(56, 'Meisya ayu saputri', 'Probolinggo, 10 Mei 2020', 'X IPS 2', 'jln. Yos sudarso', 'Guru', '085258456661', '085655112301', '', 'Olimpiade IPA ', 'memeisyaayuayu@gmail.com', 'inbound8453848683537636842.jpg', '$2y$10$C9O9HYOboYua8ke7CuAQaOCvE/TtdLQAG0hdJewSkBev3ug6UWeiS', 2, 2, 1597908223, 11, 4, 4, 0, 'yoB1Qy'),
(57, 'Intan Frestika Ayu', 'Probolinggo, 24 Februari 2005', 'X-MIPA 4', 'Dsn.Liyun RT 26 RW 08, Wonorejo-Maron-Kab.Probolinggo-Jawa Timur', 'Wiraswasta', '6282237828155', '085748576837', 'OSIS, Pramuka ', '-Peserta Kemah Hijau 2017\r\n-Peserta Kapolres Cup Probolinggo 2018\r\n-Peserta Kemah 1000 Tenda \r\n-Peserta Jambore Daerah Jawa Timur Tahun 2019\r\n-Mencapai Tingkatan Pramuka Garuda Penggalang \r\n-Mencapai Tingkatan ATAS (Association of Top Achiever Scout)', 'frestikaintan@gmail.com', 'Intan_Frestika_Ayu-min.png', '$2y$10$ZAwJ6OkHmdUwUp5QDthhLOHBnybWR2Cl79BcNU2R3sYF0S9CgJFzm', 2, 2, 1597908339, 3, 0, 9, 0, '6DMwBl'),
(58, 'Meisya ayu', 'Probolinggo, 10 Mei 2004', 'X IPS 2', 'Kan. Yos sudarso', 'Guru', '085258456661', '085655112301', '', 'Juara olimpiade IPA', 'Syaayuayu@gmail.com', 'inbound5490728400350385870.jpg', '$2y$10$zmBDrFFApS4BqOTkEh991..gEaNM6j7gcTMUwU4jmhi/C0XQHRp3a', 2, 2, 1597909285, 11, 4, 11, 4, 'hrTVha'),
(59, 'Achmad Faiz', 'Probolinggo, 05 september 2004', '10 MIPA 4', 'Jl. Ledjen suprapto no.335 rt03/rw04 Desa Bulu', 'Wiraswasta', '085258880646', '085255405091', 'Tidak ada', 'Tidak ada', 'afais5078@gmail.com', 'inbound-175816918.jpg', '$2y$10$CzHyy8FF9kn9x6rsfxn5e.xKiH6AHR66V5fq1t8lhIHwCOSGGLjO6', 2, 2, 1597910273, 14, 2, 13, 2, 'uSRVrN'),
(60, 'Yunita Surgawi Hartanti', 'Probolinggo, 01 Juni 2005', 'XI MIPA 5', 'JL. Patemon sidomukti no. 47', 'Pedagang', '082234147272', '08980499372', 'Sektetaris MPK 2 Periode 2019/2020 Oskamatura G8', '-', 'yunitasurgawihartanti53@gmail.com', '20200820_145316.jpg', '$2y$10$kgFzXneLqGtqTojQFbnV8uP.4PY1o8YEimRWEVKSmPBnjBnjypDxS', 2, 2, 1597910766, 3, 0, 9, 0, 'NcBJX9'),
(61, 'Fitria Nursaidah', 'Probolinggo, 19 November 2004', 'XI MIPA 2', 'Perumahan Kraksaan Permai Sidopekso', 'Swasta', '081334578779', '082352585942', 'Sekretaris Inti 2 Oskamatura G8 Periode 2019/2020', '-', 'fitriaefens19@gmail.com', '20200820_145242.jpg', '$2y$10$mVQ/Fi2gnoDIKMOoie10FOtfuEYIRRJ8WU308k.u7fnPJK3b7HG9W', 2, 2, 1597910817, 9, 0, 3, 0, '3Ep5jr'),
(62, 'Amriyani wahyuningtyas', 'Probolinggo, 06 April 2005', '10 MIPA 6', 'Perum Kraksaan Permai blok F1', 'Guru', '082231137122', '082245403273', 'Pramuka (paser) 2018-2019\r\n', 'Gilang Prestasi 2018\r\n', 'tyasamryani@gmail.com', 'IMG-20200820-WA0010.jpg', '$2y$10$vaYeFtCQTgM3xtPgdMIsEeqPBRLANW2ZpCEfnq9QP/p0PrqLbg8VK', 2, 2, 1597911262, 13, 2, 12, 2, 'bngwyj'),
(63, 'Gepeng', 'Probolingho, 40 april 2002', 'X mipa 9', 'Krejengan', 'Buron', '253839402729', '087649271538', 'Ketua MAFIA', 'Coret coret dinding', 'Gepengnewjr@gmail.com', 'IMG-20200423-WA0083.jpg', '$2y$10$TvKojrd9Fa1OlYK.FPO0i.rURIvMbNpbmnP8YyuYkVzAY3isZg70i', 2, 2, 1597911929, 1, 0, 7, 0, '027Z4k'),
(64, 'Maulidathul Hasanah', 'Probolinggo, 16 April 2005', 'X MIPA 4', 'JL. SUNAN KALIJAGA RT 04/ RW 05 KRAKSAAN WETAN, KRAKSAAN, PROBOLINGGO, JAWA TIMUR', 'Wiraswasta', '082338012877', '081999115959', '', '', 'maulidathul2701@gmail.com', 'inbound6523689654040041767.jpg', '$2y$10$Z25eLxhderZ1FUb6JsU9YubYsawERc1qJ0.WOJp5nUFp8cE.kvMx6', 2, 2, 1597919573, 17, 3, 14, 3, 'FLXIeT'),
(65, 'Faridah', 'Probolinggo,01 September 2005', 'X MIPA 2', 'Jl.Dr.Wahidin RT.02 RW.01 Kraksaan Wetan', 'Buruh', '082234706352', '082228124580', '-', '-', 'Faja48080@gmail.com', 'IMG-20200728-WA0050.jpg', '$2y$10$Ftrl/HUdzr7sFfpc9a5heuMpA/48CU4O2WsfnKd3F5/4Eh7NHXVNe', 2, 2, 1597923460, 9, 0, 19, 3, 'axIz95'),
(66, 'LATIFAH', 'Probolinggo, 06 maret 2005', 'X mipa 3', 'Desa besuk agung RT: 018 RW: 005', 'Petani', '082278724614', '082146059696', '• pernah berorganisasi di OSIS SMP\r\n -menjadi pengurus OSIS / anggota osis SMP\r\n\r\n', '• juara 1 silat di UIN Maulana Malik Ibrahim malang \r\n', 'komang.latifah06@gmail.com', 'CamScanner_08-20-2020_14_11_33.jpg', '$2y$10$izcCBV1DRb9l6l8ZtglpZ.yPC0c0lPg0hKoFYGAZ0qvU88cFowEU6', 2, 2, 1597923900, 9, 0, 19, 0, '5kcDtU'),
(67, 'Aldhea Alifah Ningtyas', 'Probolinggo, 08 Februari 2005', 'X MIPA 5', 'Jl. R. Shidarta, Desa Wangkal, Kec. Gading. RT 12, RW 04', 'Petani', '085649771852', '083857570607', 'Osis', 'Pramuka, Volly dan Tartil Qur\'an', 'aldheaalifahningtyas@gmail.com', 'PicsArt_08-20-06_44_14.jpg', '$2y$10$jQulmk0h7lxYrovFIXHoSO7c/6tS.8EtG7VyqVHpOvDOhmCMM.dSm', 2, 2, 1597925242, 8, 0, 11, 2, 'Aap1Vl'),
(68, 'Shahnazavira Kanahaya Putri Humairo', 'Probolinggo, 2 Juni 2005', 'XI IPS 1', 'Perum. Mutiara Konang, Sidopekso', 'Karyawan Swasta', '085332783157', '082335762914', 'Koordinator Kelas X', '', 'viraahumairo2005@gmail.com', 'Shahnazavira_K_P_H_11_ips_11.jpg', '$2y$10$brsvhY1LkKUm7w/HFGsj1uuFlpTG/nbdWp4p3Jup/KDJB1CiWGdO6', 2, 2, 1597926313, 5, 0, 11, 2, 'nPdyR0'),
(69, 'DAULAH KISMAYA SYAHPUTRI', 'Probolinggo, 21 Mei 2005', 'X MIPA 2', 'Dusun kembang Rt 01/Rw 06. Desa Jambangan, Kec. Besuk - Kabupaten Probolinggo', 'Wiraswasta', '0822-3133-4888', '0813-3420-1802', '(-)', '(-)', 'daulahkismaya@gmail.com', '7.jpg', '$2y$10$7b01WZArqKnXvpPguV7gROTEALtnAHbNlD5Pmx85e585OVIUVXWvS', 2, 2, 1597926770, 9, 3, 12, 3, 'dg3MU2'),
(70, 'Aulia Al tarish', 'Probolinggo 10 Juni 2003', 'XI MIPA 5', 'Sukokerto pajarakan', 'PNS', '085336273363', '0888805402605', 'Osis koordinator kelas 10', '', 'aulia.altarish@gmail.com', 'IMG-20200820-WA0003.jpg', '$2y$10$mEsdreywMClEvkzUL31tie0mKkrcYtv/VwpxLI1LUPESCMURLk3ri', 2, 2, 1597927360, 5, 0, 5, 0, 'XbznHj'),
(71, 'Novika Dwi Cahyani', 'Probolinggo, 30 November 2004', 'X MIPA 4', 'Jln. Letjen s. Parman no 37. Kel Semampir kecamatan kraksaan', 'Wiraswasta', '082266366661', '082331951769', '-', '-', 'novikadwipro3011@gmail.com', 'inbound4199262813597084459.jpg', '$2y$10$D7rAzHisS2un1SqL9uWyDOZa3xJvqGeBRRiSR14S1cAdwdkpejO5q', 2, 2, 1597928436, 12, 2, 14, 3, 'Bf9hLm'),
(72, 'PALUPI DYCHA PUTRI AMANDA', 'Probolinggo, 3 Januari 2005', 'X MIPA 4', 'Desa bulu kraksaan', 'PNS', '085222014009', '082264606971', 'Tidak ada', 'Modelling dan tenis meja', 'Palupidycha01@gmail.com', 'inbound5971142355919175180.jpg', '$2y$10$e8QTxUyZ/uRLpbGRNuhmVeARoHsPEgzQ1zJ54GAs55ndd9j5HYW5u', 2, 2, 1597928658, 14, 3, 15, 3, '7krAwt'),
(73, 'Achmad Reza Aditya', 'Rezaaaditya13@gmail.com', 'X MIPA 1', 'Jl. Dr. Saleh Blok Masjid No. 28 Ds. Sumberlele, Kec. Kraksaan, Kab. Probolinggo-Jatim', 'PNS', '082330605601', '089639325080', 'Pernah menjadi anggota OSIS pada waktu kelas 7', '-', 'Rezaaaditya23@gmail.com', 'inbound7556274585335404985.jpg', '$2y$10$iCDeBmHoMI2g6l9tg0ak6Oifx6rfh0FBUUBEzeo6AN4k6ms0Nh71i', 2, 2, 1597929033, 6, 0, 15, 2, 'gWTAdj'),
(74, 'Achmad Reza Aditya', 'Probolinggo, 13 Maret 2005', 'X MIPA 1', 'Jl. Dr. Saleh Blok Masjid No. 28 Ds. Sumberlele, Kec. Kraksaan, Kab. Probolinggo-Jatim', 'PNS', '082330605601', '089639325080', 'Pernah menjadi anggota OSIS pada waktu SMP ', '-', 'rezaaaditya13@gmail.com', 'inbound2841557268695503503.jpg', '$2y$10$jvmy..o4hUbKxRDKo4hs.u7phgsti.wBmk4xMRYr/pfEXycUvYv8.', 2, 2, 1597929599, 6, 0, 15, 2, 'eisJxW'),
(75, 'Feri kurniawan', 'Probolinggo,19 Februari 2004', 'XI MIPA 7', 'Desa Pendil, kec.banyuayar Jawa Timur', 'Wiraswasta', '085232093975', '082140504119', 'Menjadi wakil ketua Sekbid Budi Pekerti Luhur dan Lingkungan Hidup', 'Juara 1 lomba pramuka kapolres', 'feriawan19022004@gmail.com', 'PicsArt_08-20-09_15_05.jpg', '$2y$10$/xnlotJkGs1TlCWVYFTE9uuhpQQZ2EfiXwVi//j8ohBW.GmRW2kIG', 2, 2, 1597934015, 12, 1, 14, 2, 'Ngv3w3'),
(76, 'Alfian Robit Nadifi Masyhudi', 'Probolinggo, 21 April 2004', '11 Mipa 6', 'Jl. Raya Besuk Agung, Rt.03, Rw.02, Desa Besuk Agung, Kec. Besuk, Kab. Probolinggo, Jawa Timur', 'Wiraswasta', '082232813197', '082232813197', 'Wakil Ketua Sekbid Bela Negara Gen 8', '-', 'alfiantu@gmail.com', 'IMG_20200820_212823.jpg', '$2y$10$eA/pMTvlkhUHym8YTkZ4xOf8SUuUAaBEuONyz845UqNTHGzk3UbVK', 2, 2, 1597934063, 18, 1, 16, 1, 'D79LAO'),
(77, 'NUR ABDUR RAHMAN HAKIM BUSTAMI', 'Probolinggo, 15 Maret 2004', '11 mipa 2', 'kec.pajarakan desa.penambangan dusun.landangan', 'Wiraswasta', '085233693128', '082237267663', 'smp:1.anggota sekbid jasmani\r\n         2.bendahara 1 inti\r\nSma:bendahara sekbid kewirausahaan', 'smp:harapan 1 futsal se kabupaten\r\n         Harapan 1 fotografer', 'Abdurrahmanhakim1503@gmail.com', '20200820_212856.jpg', '$2y$10$BpZZoZwYKDN3BasiEDjmaOcK/.q7dYMiMwukQiOhdVe6jtJPnvovW', 2, 2, 1597934437, 19, 0, 19, 0, 'c7LIiT'),
(78, 'Yusufi Bima Syabil', 'Probolinggo,5 Desember 2003', '11 mipa 1', 'Jalan Hasanudin no.86 Kraksaan', 'Wirausaha', '08124985792', '081238819170', 'Bendahara Sekbid BPL LH', 'Juara 3 Panahan Bupati Cup 1', 'Yusufibimasyabil@gmail.com', '20200820_212736.png', '$2y$10$FiiDYd9f9Z3dCAwEs4CkiesMg77aiLsaQiYcqiZHXCEgEo5O34TkK', 2, 2, 1597934439, 12, 0, 12, 0, 'QpwtzD'),
(79, 'Moh. Faqih Hidayat', 'Probolinggo, 12 Oktober 2003', 'XI - IPS 2', 'Kebon Agung', 'Wiraswasta', '+6285259307828', '081331229468', 'Pengalaman saya pernah menjadi osis waktu smp', 'Tidak ada', 'faqihhidayat834@yahoo.com', 'IMG_20200820_213925.jpg', '$2y$10$hkwlHP34NspSttQ9z5l8dO0z6SliISeiKk0DM0BJcaEcy2b5MSk3G', 2, 2, 1597934465, 5, 0, 5, 0, 'l69LP6'),
(80, 'Bintang Emas Excellenta Fabengkoro Putra', 'Probolinggo, 03 Juli 2003', 'XI MIPA 3', 'excellentabintang7@gmail.com', 'Ibu Rumah Tangga', '085368310555', '085853987798', 'Bendahara Sekbid Berbangsa dan Bernegara', 'Juara 3 Lomba Poster FKIP Unisma', 'excellentabintang7@gmail.com', 'IMG_20200820_212734.jpg', '$2y$10$LMR0spdX2JW5VXEx67KX1ujx62DsJ1LG.Hm7aNP0ZS5ZeE4voyIJi', 2, 2, 1597934472, 17, 1, 16, 1, '6vcDOv'),
(81, 'Dicky Ferdiansyah', 'Probolinggo, 25 Maret 2004', 'XI Mipa 7', 'Gading Wetan, Gading, Probolinggo', 'Wirausaha &amp; PNS', '081334810810', '082350735636', 'Sekretaris Sekbid Ketaqwaaan Kepada Tuhan Yang Maha Esa Oskamatura gen 8', '', 'dickyferdi1169@gmail.com', 'IMG_20200820_213907.JPG', '$2y$10$H.ktWhPAacjWZciklqNxQ.CV1Ff2DKVQqVVywF3uemXSNKGx9PX5a', 2, 2, 1597934905, 11, 0, 14, 0, 'X9WhuL'),
(82, 'Muhammad Rohul Kudus', 'Probolinggo, 24 April 2004', 'XI MIPA 2', 'Jambangan, Besuk, Probolinggo', 'Petani', '082214766606', '085853842518', '1. Osis SMP\r\n2. Osis SMA G8', 'Lomba bercerita nomer 2 e kabupaten\r\nLomba pramuka\r\nDll.', 'Muhammadrohulkudus@gmail.com', 'IMG_20200820_212911.jpg', '$2y$10$JftQGx1GZKLJizkKViFgkuc.cOoTxPySTVk8E0T2QuLAUclY3lprK', 2, 2, 1597935084, 5, 0, 5, 0, 'XRx34O'),
(83, 'Ananda Aditya Dwi Putra', 'Probolinggo, 06 juni 2003', 'XI IPS 2', 'Randujalak, Dusun Giran, RT/RW 02/02, KEC. Besuk', 'Wiraswasta', '082234480755', '0822247169625', 'Bendahara sekbid seni', 'Tidak ada', 'Anandaaditya@gmail.com', 'inbound-1990201713.jpg', '$2y$10$IA0w/HQkQAKgZvD1CSTcsO.vvlumuiFhSGArdNl1DQpXNvm8TyFl.', 2, 2, 1597935281, 14, 0, 14, 0, 'jct6WY'),
(85, 'Aina Diandra Abhira Hyrae', 'Jember, 26 Desember 2004', 'X MIPA 6', 'Sukodadi Indah Residence Blok G/19, Paiton, Probolinggo, Jawa Timur', 'Guru', '0813-3630-1676', '0823-3963-7217', 'Sebelumnya saya tidak pernah mengikuti organisasi saat menduduki bangku SMP', '- Meraih ranking 2 di kelas\r\n- Selalu dipilih untuk mengikuti lomba olimpiade', 'ainahyrae@gmail.com', 'inbound3537904818264521363.jpg', '$2y$10$bk8rvpMVcg0ZbSSsB6vw2ud92g8VBAjL9sO3jK9pexcqNVUdGsueO', 2, 2, 1597970478, 6, 0, 14, 2, 'mjPs2Y'),
(86, 'Amirah Putri Haryanti', 'Probolinggo, 27 Juli 2005', '10 MIPA 5', 'Jln laut penambangan desa penambangan kecamatan Pajarakan', 'Petani', '082247512086', '081357491118', 'Pernah menjadi Anggota dan Bendahara OSIS', 'Pramuka,Tari, Tartil qur\'an', 'amiraputri180@gmail.com', '9B_AMIRAH_PUTRI_H.JPG', '$2y$10$u8UjyPh4ja44MbrRcsx1o.iyYe7R.GSnBMvk/i/El27D4KEnoZxVS', 2, 2, 1597971826, 18, 1, 10, 0, 'SQAfOk'),
(87, 'PUPUNG EFENDI', 'Probolinggo 25 April 2005', 'X MIPA 2', 'Desa wangkal kecamatan gading', 'Wiraswasta', '082359370101', '085791262139', 'OSIS SMP negeri 1 Kraksaan', '', 'pupungefendi07@gmail.com', 'IMG-20200721-WA0050.jpg', '$2y$10$DhOwl0upjj4ZISlPnH9HdOyl9ZBxiGKixB/P/XNCFF/7bTB/yRWmq', 2, 2, 1597973680, 18, 2, 2, 0, 'RH9Jgx'),
(88, 'Cindy Elvina Ramadhaniyanto', 'Probolinggo,02 November 2003', 'XI MIPA 1', 'Perum Griya Sukomulyo Indah D.30', 'Karyawan Swasta', '081234654502', '085704682157', 'Bendahara osis', '', 'cramadhaniyanto@gmail.com', 'inbound7627247464318678943.jpg', '$2y$10$ofyaCwC4ameCeyO/xgVjzeZEEgldvRpPNdrhgSt/t7I8qBOH.cjkG', 2, 2, 1597982046, 10, 0, 4, 0, 'l1HD8T'),
(89, 'Riefka Citra Venandhita Syach', 'Probolinggo, 25 Januari 2005', 'X MIPA 6', 'Kalibuntu', 'PNS', '085335921445', '085745547274', '', 'Juara 3 Matematika OSN 2018 Tingkat Kabupaten Probolinggo', 'riefkacitra@gmail.com', 'foto.jpg', '$2y$10$gvZCJTBoFk/DK7uoLUBjyeUDra80Tey55m1b09CG.UCLIDKuREofG', 2, 2, 1597986316, 20, 4, 19, 0, 'WlM85F'),
(90, 'Athifa Fauzi', 'Probolinggo, 21 April 2005', 'X Mipa 6', 'Perumahan Jatiasri blok F/06', 'Pensiunan karyawan swasta', '081246040260', '082335602506', 'Paser', '', 'athifafauzi@gmail.com', 'IMG-20200820-WA0013.jpg', '$2y$10$Nnnq.swt2R.I.LW.XR6DDuEV/mTMZD517PsNOdLl0a1XbjCBaKiwa', 2, 2, 1597987142, 20, 3, 19, 3, 'vvqDXb'),
(91, 'Agha Daniswara Nabil Zaman', 'Probolinggo, 19 Mei 2005', 'X MIPA 3', 'Perumahan Raya Regency G-17', 'PNS', '085233578072', '082257711020', 'Osis', 'Kejuaran Futsal', 'aghadnz@gmail.com', 'FC577C00-74CE-480F-90E9-3ED194555B14.jpeg', '$2y$10$pOusUDoe9mFa2DQ7AdgOt.fcKSoboPRgfmxTza5tueQk2A0sfZffa', 2, 2, 1597990559, 15, 0, 17, 0, 'JEmcOW'),
(92, 'Keysia Salsabilla Putri Monita Nasution', 'Probolinggo, 22 Mei 2004', 'X IPS 1', 'Perumahan WPS 5 Blok W No.12 RT. 1, RW. 3, Kebonagung Kecamatan Kraksaan Kabupaten Probolinggo', 'Ayah: Karyawan Swasta, Ibu: Guru', 'Ayah: 082231666311, Ibu: 082233115625', '082237268546', 'Belum pernah ikut organisasi', '', 'keysianasution1@gmail.com', 'IMG-20200820-0008-2.jpg', '$2y$10$1sxYKqF/oSJh6hrMI8GTWuTDGO6lfEL42kR/k2I5Aj2PaAPucQOB2', 2, 2, 1597998136, 20, 3, 20, 3, 'd8nrkc'),
(93, 'Yudhadarma Rizqi Prawira Agung', 'Surabaya, 24 April 2004', 'XI MIPA 7', 'Perum. YTL', 'Karyawan', '081252370999', '082231858999', 'Tidak ada', 'Juara 2 PASCAL', 'yudhaprawiragung@gmail.com', 'inbound4725753630642028484.jpg', '$2y$10$b8WuC34Bgp221EFMb8nIme3VXXG6P1LXrDS98E/qZctmIFIM7o/la', 2, 2, 1598011780, 13, 3, 11, 3, 'epUbgd'),
(94, 'Eka Ramadhaningsih Sucahyani', 'Probolinggo, 23 Oktober 2004', 'XI IPS 2', 'Dsn. Kerto Utomo Rt 001 Rw 003 Desa Sumber Lele', 'Karyawan swasta', '081331581591', '085236107065', 'Sekretaris Sekbid Keterampilan dan Kewirausahaan', 'Tahfidz juz 30', 'ekasucahyani@gmail.com', 'PicsArt_08-20-07_53_03.jpg', '$2y$10$LQHaIrsNVJMRfsQif5qosub3ZgW0.Y7zUX1n3ZTZk6KbKS3RgycRm', 2, 2, 1598015059, 19, 0, 19, 0, 'HvdCwR'),
(95, 'Muhammad Rafli Hersa Mardiansyah', 'Probolinggo, 25 Maret 2004', 'XI MIPA 2 /11 MIPA 2', 'Perum bumi bulu indah', 'Wiraswasta', '081331644474', '082233667075', 'Sekbid Akademik ', '', 'Hhersa123@gmail.com', 'IMG_20200820_123532.jpg', '$2y$10$XVmR1vCZIKz4HMC/85P05Ozl45h4101aYNpmufi4IgOmgUp4ZIGtW', 2, 2, 1598019239, 13, 4, 15, 4, 'Ium6xa'),
(96, 'Satrio Tri Wibowo', 'Probolinggo, 20 Desember 2003', 'XI - IPS 2', 'Krejengan', 'Pedagang', '+6285748159747', '085853844419', 'Perna menjadi Wakil Ketua Osis di SMPN 1 KREJENGAN', 'Tidak ada', 'didingaming93@gmail.com', '20200822_101335.jpg', '$2y$10$Ombb6ICJ1SWHkgrbA1E9y.zpcqZ5dO9/Cqcpo8x8V07qTu0dU6q4m', 2, 2, 1598066438, 15, 4, 18, 4, 'BkGGHG'),
(97, 'Moh Annas', 'Probolinggo, 12 januari 2003', 'XI - IPS 2', 'Sidopekso', 'Juragan/bos tambak udang', '+6282232783323', '081237658186', 'Tidak ada', 'Tidak ada', 'Mohannas73@gmail.com', '20200822_102642.jpg', '$2y$10$iMWckLVp.TKbBZIbhD4K1.JTQNJNQ8iZqaro6/pUrYRS7.UPWffB2', 2, 2, 1598066841, 15, 4, 19, 4, 'icXREl'),
(98, 'Noer Vina Yuhanid', 'Probolinggo, 15 Agustus 2004', 'X MIPA 6', 'Dusun Pasar RT/RW 007/003 Desa Sukodadi Kec. Paiton Kab. Probolinggo', 'Guru', '085233019201', '085334632595', 'Osis, Adiwiyata, KKS, Jurnalistik ', 'berkelompok Pramuka dan PMR', 'nrvnyhnd@gmail.com', 'Noer_Vina_Yuhanid_X_MIPA_6.jpg', '$2y$10$XeiXuNW/YlVkiitMASZVvO4urjho7VfGjwmjKEVK01RYG86XrwGLq', 2, 2, 1598074440, 3, 0, 15, 3, 'YRER26'),
(99, 'Farhan Ulil Abshor', 'Probolinggo, 17 Mei 2020', '10 (MIPA 4)', 'Jln=Dusun Durian , RT/RW=006/003 , Desa=KALIBUNTU , Kec.= KRAKSAAN', 'PNS', '085231725439', '085706042322', '', '', 'farhanulil05@gmail.com', 'Farhan_Ulil_Abshor_10_MIPA_IV.jpg', '$2y$10$BfZq9r44uZ1QJ5qkyUq9Y.TYfvTN1N6s7WgSuufyPWk5rVECvGSja', 2, 2, 1598076090, 16, 3, 9, 0, 'lZtbAb'),
(100, 'Fiky Emiliyatul Hilwiyah', 'Probolinggo, 30 Oktober 2004', 'X IPS 1', 'Besuk Agung', 'Ayah: perdagangan, Ibu: pengurus rumah tangga', '085230516427', '081395022042', 'Belum pernah', '', 'FikyemiliyatulHilwiyah@gmail.com', 'IMG-20200822-WA0035.jpg', '$2y$10$2Aa7wKlEo7mhwPD0yvQNzuDIo2ZYrYbnq4pQy3bPhHsnEbsYeEXlG', 2, 2, 1598083477, 20, 3, 20, 3, 'UzGYoZ'),
(101, 'NINDIYA NUR AZIZAH', 'Probolinggo, 15 November 2002', '11 IPS 1', 'Jl. Kampung Melayu RT 02 RW 02 Kel. Kraksaan wetan Kec. Kraksaan Kab. Probolinggo', 'Wiraswasta', '085257680493', '082233018947', 'Oskamatura bendahara sekbid berorganisasi dan kerumahtanggaan periode 2019/2020', '', 'nindiyanur15@gmail.com', 'inbound6473237606610947070.jpg', '$2y$10$piAESYtE1diyABck3Coi5OkzaKSVqxEdS.dKfYfVgIAIN4s6ydfeu', 2, 2, 1598086325, 20, 4, 20, 4, 'UXRRcb'),
(102, 'Sherly Dian Octavia', 'Probolinggo, 05 Oktober 2004', 'XI MIPA 7', 'Jalan Hasanuddin RT.01/RW.07 no.98 Bulu, Kraksaan', 'Wiraswasta', '085330730586', '085259740452', 'Tidak ada', 'Tidak ada', 'sherlydiocta@gmail.com', 'inbound8355449812955478043.jpg', '$2y$10$L18BnWF6NYKPeb970g/5IOkGUADDQJ8XpfVmF5FhRfybB964Xcqrq', 2, 2, 1598090476, 13, 3, 20, 3, 'Rsnk9y'),
(103, 'Adinda Aulia Hasanah', 'Probolinggo, 8 Mei 2003', 'XI MIPA 1', 'sumberanyar, paiton, probolinggo', 'wiraswasta', '082337809337', '087756788103', 'Wakil sekbid akademik ', 'Juara 1 vlog sekabupaten probolinggo, oleh unisma (pembicara presentasi) ', 'Adinda.auliaah@gmail.com', 'IMG_3918-removebg-preview.jpg', '$2y$10$08.a8k1XEBZ.xQ8oyIbO3ebf1tS86HwnLmsx8VO.rhpU5IxgS7qqS', 2, 2, 1598097967, 13, 1, 4, 0, 'owmaKX'),
(104, 'Bilqis ayu humairoh', 'Probolinggo, 1 April 2007', 'X MIPA 2', 'Besuk Agung-Besuk-Probolinggo-Jawa Timur', 'Pedagang', '+62 852-0456-2570', '+6281238332557', 'Belum ada.', '', 'gelembungjatuh@gmail.com', 'InShot_20200822_123110834.jpg', '$2y$10$tp.Cs1PZd5O4JUpmYzcfM./Bs35XHD548RN1RA13mNNtHvFdrVo5K', 2, 2, 1598098403, 13, 4, 18, 4, 'W9m3QJ'),
(105, 'Siti Wulandari', 'Probolinggo 25 Juli 2003', 'XI Mipa 3', 'Sumberanyar, Paiton, Probolinggo', 'Butuh Tani', '085236150031', '087896549241', 'Wakil Sekbid Bela Negara waktu SMP', 'Juara 3 SMA Award 2019 Kategori Ekstrakurikuler Nominasi Cinematografi', 'wulandari250703@gmail.com', '1ACE3686-8A29-483D-AB89-86AB83C87015.jpeg', '$2y$10$kg6uxi72HvWzAtmbPkbJVuT4cz.02w1o9ETR8PT2mqlRBHPouXIrO', 2, 2, 1598100094, 14, 3, 16, 2, 'znunTc'),
(106, 'Dita hari agustina', 'Probolinggo, 14 agustus 2004', '11 ips 2', 'Kraksaan', 'Wiraswasta', '085230528781', '085739629374', 'Osis periode 2019-2020 jabatan sekretaris sekbid berbangsa ', 'Tari solo juara 3\r\nTahfid juz 30,1,29\r\nBaca puisi', 'Ditahari304@gmail.com', 'IMG_20200822_191811.jpg', '$2y$10$LxRehlfl1bWgn/qcdVekjOzrq1G00k3ZNMisTn62XSI3zthF1SAc.', 2, 2, 1598102617, 17, 2, 17, 2, 'h2VlI1'),
(107, 'RYAN RAMADANI', 'PROBOLINGGO', '10MIPA3', 'ALASTENGAH,BESUK,PROBOLINGGO', 'Pedagang', '085204916899', '081246321733', '-', '-', 'ryanramadan006@gmail.com', 'Screenshot_20200822-215644_Gallery.jpg', '$2y$10$iIl4FBD2y1RrpTJy5hGn5eIHAUXve8krQa2Sm/kPAkUcIO46WNJmO', 2, 2, 1598108478, 15, 0, 15, 0, 'BMHSrJ'),
(108, 'JUNIO YOGI ALFIANSAH', 'PROBOLINGGO, 14-06-2005', 'X MIPA 5', 'ALASKANDANG, DUSUN KRAJAN RT 003 RW 0002', 'WIRASWASTA', '082228842338', '082228842338', 'PERNAH BERGABUNG DI OSIS SEBAGAI KETUA. \r\nPERNAH BERGABUNG DI ORGANISASI KEPRAMUKAAN. \r\nPERNAH BERGABUNG DI ORGANISASI KEAGAMAAN.\r\n\r\nDAN ALHAMDULILLAH SAMPEK SEKARANG MASIH BERGABUNG. ', 'MEWAKILI KABUPATEN DI TINGKAT DAERAH TEPATNYA DI BANYUWANGI (SEBAGAI PESERTA JAMBORE DAERAH). \r\nJUARA 3 LOMBA BAHASA INDONESIA TINGKAT KABUPATEN. ', 'yogialvian567@gmail.com', 'IMG_4199.JPG', '$2y$10$OhFgaMIjp.H8Hhd02jbDeepmFay4ebx2gyeCUIJctpyE71ywXCYeW', 2, 2, 1598108635, 8, 0, 18, 1, 'FPhEHp'),
(109, 'Dita Dewi Amelia', 'Probolinggo,4 Maret 2005', '10 ips 2', 'Jalan Mayjend Sutoyo,Patoan,Belakang Penjara', 'Wiraswasta', '081336776868', '085236361070', 'Osis', 'Tahfidz', 'ditadewiamelia@gmail.com', 'IMG-20200822-WA0415.jpg', '$2y$10$ZErOXhVPsSp0FgUu70LyYuz70Ov/jI39iruNygNyUhQ7L.V5iYnIy', 2, 2, 1598108702, 20, 3, 20, 2, 'uQS4Hq'),
(110, 'Atiqoh Khoirun nisa', 'Probolinggo, 15 mei 2005', 'X Mipa 1', 'Besuk agung, besuk', 'Pedagang', '085257171835', '081238498549', 'Tidak ada', 'Tidak ada', 'Atiqohkhoirunnisa334@gmail.com', 'IMG-20200702-WA0009.jpg', '$2y$10$E994CbktbSibEMfNr/8dDeectkd3z5A7xniKdK1k6xpnamtcG4Z8y', 2, 2, 1598110952, 19, 2, 18, 1, 'Eu12WK'),
(111, 'ALFINA AJENG DEWI SENTIKA', 'Probolinggo, 25 September 2003', '11 mipa 2', 'Jabung Candi, Paiton', 'Karyawan Swasta', '082334129973', '085334574163', 'Bendahara Sekbid Ketaqwaan ', '', 'alfinaajengdewisentika9214@gmail.com', '(_Alfina_Ajeng_Dewi_Sentika_11_mipa_2_).jpg', '$2y$10$gWCD7fdYYvqnMQHt/Wk8X.ZaSbJaHDpdO.wLVGbrGydwsxO4z0Mem', 2, 2, 1598111390, 11, 0, 11, 0, 'YzYSsK'),
(112, 'Imelda Meiva Gusman', 'Probolinggo, 13 Mei 2005', 'X MIPA 5', 'RT 03 RT 02, Dsn. krajan, Desa Alaskandang, Kec. besuk, Kab. Probolinggo.', 'PNS', '082334131458', '085707499608', 'OSIS', 'Tidak ada.', 'imeldameivagusman@gmail.com', '24.jpg', '$2y$10$jLoobEUSvn7ftWrfRJXwpu.4Jfix3b5C8PsqZF/5B/uaFg9Ws.81m', 2, 2, 1598146791, 9, 0, 14, 3, 'nyhKG7'),
(113, 'Ahmad Faisol Saifullah', 'Probolinggo, 5 Januari 2005', '10 MIPA 3', 'Rangkang', 'Wiraswasta', '082335069010', '081358039321', 'Pernah mengikuti OSIS waktu SMP', '-', 'ahmadfaisol0501@gmail.com', 'inbound1115736063069659947.jpg', '$2y$10$V9MZk0dMaS34OurCJd6UoOouPpDybg/Pw9oji.Mf1HgyvuBJwMrp.', 2, 2, 1598148546, 6, 0, 15, 2, 'VLP22C'),
(114, 'NURUL HIDAYATI AMELIA', 'PROBOLINGGO, 23 MARET 2005', 'X MIPA 2', 'DESA GUNGGUNGAN LOR RT 02 RW 02', 'WIRASWASTA', '085230240784', '087866113564', 'BENDAHARA I DAN SEKRETARIS II', '', 'nrlhdytiamelia@gmail.com', '20181009_105659_e001.jpg', '$2y$10$PXnSp4PAJHqVqZS7JdbtcumBR2w5GWE6EiRnOGMjSsOl6P4QJixhu', 2, 2, 1598152962, 10, 0, 9, 0, 'kKS31T'),
(115, 'Millatul qoimah', 'Probolinggo, 14 november 2005', '10 mipa 5', 'Sumberan, Besuk, Probolinggo', 'Tani', '085236658459', '081215138837', '', '', 'milatulqoimah070@gmail.com', 'inbound7087474602996117202.jpg', '$2y$10$Ww0Hn5VjR9wvp15jdp/OP.odyLlAW6IU/xmxy6OcEyaRa.tS72aVy', 2, 2, 1598186768, 3, 0, 10, 0, 'gGlbsq'),
(116, 'Rafilza Meisykla Rahman', 'Probolinggo, 08 Mei 2006', '10 MIPA 3', 'Jln. Panglima Sudirman, Patokan', 'Karyawan swasta', '082213456678', '085334897117', 'PASER ', '', 'rafilzarmr45@gmail.com', 'inbound835356091857460799.jpg', '$2y$10$RmPqCqN5vFJiUUnKWq7Z3..YQPXBl6j0hEdX51IIZwzwzbY4oLSqi', 2, 2, 1598187287, 4, 0, 9, 0, 'S3rzIJ'),
(117, 'ABDUL HAQ', 'PROBOLINGGO,24 JANUARI 2005', 'X mipa 5', 'KEL SEMAMPIR.JL S PARMAN NO.21 RT/RW=02/02', 'Petani', '085211267858', '081230136803', 'Ketua Sekretaris osis,dan ketua wakil ketua mpk', '', 'Haq516796@gmail.com', 'ABDUL_HAQ_10_MIPA_5.jpg', '$2y$10$Cuc9mgTF6sTuPSvJTqNmpOq6mDMXt9x3M8Bo1LuvhuBd4qdzo6h16', 2, 2, 1598187574, 9, 0, 11, 1, 'zTLMh8'),
(118, 'NUR MUHAMMAD ALVIN FIKRI ABDILLAH', 'probolinggo, 17 Desember 2004', 'X MIPA 5', 'Dusun Krajan Rt 011,Rw 002 Desa Bucor Kulon Kec. Pakuniran Kab. Probolinggo', 'Buruh Tani', '085335164554', '087882097041', 'Kordinator Sekbid LH, anggota Adiwiyata Lingkungan, anggota UKS, anggota pramuka. ', '', 'fikriarema07@gmail.com', 'inbound998923432.jpg', '$2y$10$eDXQ1eobd6jYAglTz7g/ZesClOiD.jR1T0ajqJvfTiSmRzA27qQi6', 2, 2, 1598192450, 12, 2, 13, 3, 'OCqfjq'),
(119, 'Bagus Indra Jumawa', 'Probolinggo, 15 Januari 2005', 'XI MIPA 7', 'Jln. Candrahasan RT11 RW03 Desa Wangkal Kec.Gading Kab.Probolinggo', 'Pegawai Negeri Sipil', '085230146180', '087754710019', 'Paser, PBB Kreasi', '', 'ibagus079@gmail.com', 'inbound6120829917395034073.jpg', '$2y$10$Hx7PP7Q/ZYZv2xywpGJZi.BeTCgyLb0qn1k.XZXCNJD8P6KH860BS', 2, 2, 1598193649, 13, 2, 11, 2, '1M23oA'),
(120, 'Rofiatul Maisaroh', 'Probolinggo, 25 Mei 2004', 'XI Mipa 7', 'Jl. Teuku Umar semampir no.239', 'Pedagang', '085321525908', '082339572481', 'Tidak ada', 'Tidak ada', 'rofiatulmaisaroh98@gmail.com', 'Rofiatul_Maisaroh_XI_Mipa_7.jpg', '$2y$10$Pu8StoK7pycjPyCJNfFJf.xakq5M/TbaRSapfeetuu/ZrAD67tjFu', 2, 2, 1598194717, 13, 4, 11, 4, 'ChOBdJ'),
(121, 'MOHAMMAD FAISHAL AZMI', 'Probolinggo, 26 November 2004', 'X MIPA 7', 'Dusun Gardu RT 01 RW 04 Desa Randujalak,Kecamatan Besuk, Kabupaten Probolinggo', 'PNS', '085233295078', '085295688457', 'Paser', 'Juara 3 Olimpiade Matematika tk. kabupaten', 'faishalazmi932@gmail.com', 'inbound3705063602285948393.jpg', '$2y$10$FiNVDDqr8xsyxw5QO2cw0ecK5l0SRlkZ6aCsJeuKUV7JyJLeEtpZi', 2, 2, 1598196960, 15, 1, 11, 1, '5YIOIO'),
(122, 'Intan nur kholizah', 'Pasuruan,18 Juni 2004', '11 mipa 6', 'Jl.Melati No 148 Rt 03/Rw 01 Kecamatan Kraksaan Kabupaten Probolinggo', 'Wiraswasta', '08980476518', '089697575638', 'Oskamatura', 'Tidak ada', 'intannurkholisah@gmail.com', '(Intan_Nur_Kholizah_11_mipa_6).jpg', '$2y$10$ygIairZGSdGoPkq/SU14rOkIlEO.OqksnRV69jSWAzuZaE0AdTQh6', 2, 2, 1598197238, 18, 1, 18, 2, 'NBMoCu'),
(123, 'DIANA CHILYATUN NAILUFAR', 'Probolinggo 20 September 2004', 'XMIPA7', 'Jl.laut gg1 sukokerto pajarakan', 'Wiraswasta', '085257792939', '082232511896', 'Tidak ada', 'Tidak ada', 'diananailufar@gmail.com', '11.jpg', '$2y$10$FXyTYHo150N9vvBQdMtsjuV/zul6XumzvnhamkKNAHMI8RZ3cv0NO', 2, 2, 1598197565, 16, 2, 19, 2, 'PWZxG6'),
(124, 'Rizky Fitri Andini', 'Probolinggo, 27 November 2003', '11 Mipa 6', 'Jl. MT. Haryono No. 187 Semampir', 'PNS', '085235535138', '085604636331', 'OSIS', '', 'fitriandini457@gmail.com', '(Rizky_Fitri_Andini_11_MIPA_6).jpg', '$2y$10$rIvrFCFBGf6TgXCi8ayuQuyEk3k4KMJ1TfGGq351QWk0fHEUllDHa', 2, 2, 1598197565, 16, 2, 13, 2, 'OcATJS'),
(125, 'Ibnu Aqil Rahmat', 'Probolinggo, 30 November 2002', 'XI Mipa 6', 'Besuk', 'Wiraswasta', '082234412669', '081332056173', '', '', 'ibnuaqil582@gmail.com', 'IMG_20200819_162937.jpg', '$2y$10$HLPch0dTFHzatGQ2FgQd8uh2wReLGZu.SBANSPlxsDnhh22GwRPVi', 2, 2, 1598324345, 1, 0, 7, 0, 'Ni7JX9'),
(126, 'Defina Nurasisah', 'Probolinggo, 13 februari 2005', 'X mipa 2', 'Jl panglima sudirman rt01 rw05', 'PNS', '082302471815', '082397547207', 'Belum pernah', 'Seni ( belum pernah ikut lomba) hanya menyukai', 'Defina567@gmail.com', 'IMG-20200729-WA00323.jpg', '$2y$10$6gCjHYQda569hg7SaD5iZuD1/cJqZpu9lTfa6RvtOYsSpovzAEvWe', 2, 2, 1598325928, 14, 3, 20, 3, 'EXZZMh');

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(2, 1, 2),
(7, 1, 1),
(13, 2, 2),
(15, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(8, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(9, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(10, 7, 'Test 1', 'test/test1', 'fas fa-fw fa-key', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `sub_jabatan`
--
ALTER TABLE `sub_jabatan`
  ADD PRIMARY KEY (`id_sub`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `sub_jabatan`
--
ALTER TABLE `sub_jabatan`
  MODIFY `id_sub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
