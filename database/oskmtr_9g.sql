-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2020 at 01:08 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oskmtr_9g`
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
(13, 'Poppy', '', '', '', '', '', '', '', '', 'poppu@gmail.com', 'IMG_3459.JPG', '$2y$10$Orkdv9EFqImpbDn/Vx4aCegQimyE7W2yxIfb.4JIm8rnqBAtaCu7K', 1, 1, 1585497657, 0, 0, 0, 0, ''),
(14, 'Risa Dwi Irwani', '', '', '', '', '', '', '', '', 'risa@gmail.com', 'default.jpg', '$2y$10$ArmvStrkO0MSa0X3VqzrXeDdUeUwG8ETJRBrPVX4yoMh5PsYYeyT6', 2, 1, 1585505789, 0, 0, 0, 0, ''),
(15, 'Rona Agung Teppo', '', '', '', '', '', '', '', '', 'rona@gmail.com', 'default.jpg', '$2y$10$Z5sopfSwrBf8mK9/pJKMTO8Kjji6HRD3Frf8pgav7ACXmzCZ32iRu', 2, 1, 1585505812, 0, 0, 0, 0, ''),
(17, 'Dany Ahmad Ihza Prakoso', '', '', '', '', '', '', '', '', 'danyahmadihza99@gmail.com', 'IMG_34591.JPG', '$2y$10$yh5Ppp1zlIUmmYNer/neT.2F4beMidV090fWjliLG3DQFnyqX2g12', 1, 1, 1585577079, NULL, 0, NULL, 0, ''),
(18, 'Dany Ahmad Ihza Prakoso', '', '', '', '', '', '', '', '', 'danyihza99@gmail.com', 'default.jpg', '$2y$10$LGLYEHgdOSJeKAZZCcaAFegdflAT/FP/FgvuubljKiDQNQSZ5BpWq', 1, 1, 1597742322, 0, 0, 0, 0, ''),
(19, 'Dany Ahmad Ihza Prakoso', '21314312', 'XI MIPA 3', 'malang', 'dads', '123214', '1213214', '', '', 'rad@gmail.com', '', '$2y$10$8V8zVcx52nxx7MXU/z/F5OyAAzkfJWgGGcagBZV4AHoS7Qpcxz7kK', 2, 1, 1597830891, 3, 0, 14, 2, ''),
(23, 'Dany Ahmad Ihza Prakoso', '21314312', 'XI MIPA 3', 'malang', 'dads', 'Dany Ahmad Ihza Prakoso', 'Dany Ahmad Ihza Prakoso', '', '', 'arini@gmail.com', 'coba.jpeg', '$2y$10$Boc3ui7jea2v35b.SgtQ0eW5R0Alt7T6yBxhPQ6X2pvlUut5DgIZG', 2, 1, 1597831923, 19, 1, 18, 3, 'OvfnaWhyuA');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

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
