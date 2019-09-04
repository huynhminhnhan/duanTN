-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 04, 2019 at 09:51 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `supportFPT`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `IDaccount` int(11) NOT NULL,
  `IDadmin` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `checkDelete` tinyint(4) NOT NULL DEFAULT '1',
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `class` varchar(20) NOT NULL,
  `parentPhone` int(11) NOT NULL,
  `mssv` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cauhoi`
--

CREATE TABLE `cauhoi` (
  `idquestion` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idAdmin` int(11) NOT NULL,
  `Status` int(11) NOT NULL,
  `content` int(11) NOT NULL,
  `images` varchar(255) DEFAULT NULL,
  `fileName` varchar(255) DEFAULT NULL,
  `idCataQuestion` int(11) NOT NULL,
  `created` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Chamcong`
--

CREATE TABLE `Chamcong` (
  `id` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `Tongsongaylam` int(11) NOT NULL,
  `Chi tiet` varchar(255) NOT NULL,
  `thang` int(11) NOT NULL,
  `nam` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `danhmucauhoi`
--

CREATE TABLE `danhmucauhoi` (
  `idCataQuestion` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Luong`
--

CREATE TABLE `Luong` (
  `id` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `thang` int(11) NOT NULL,
  `nam` year(4) NOT NULL,
  `ghichu` varchar(255) NOT NULL,
  `tong` int(11) NOT NULL,
  `luongcanban` int(11) NOT NULL,
  `thuong` int(11) NOT NULL,
  `baohiem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `maychamcongSql`
--

CREATE TABLE `maychamcongSql` (
  `id` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `ngay` varchar(255) NOT NULL,
  `thang` varchar(255) NOT NULL,
  `gio` varchar(255) NOT NULL,
  `phut` varchar(255) NOT NULL,
  `checked` tinyint(4) NOT NULL DEFAULT '1',
  `machamcong` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `idAccount` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `UserLog`
--

CREATE TABLE `UserLog` (
  `idUserLog` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `time` timestamp NOT NULL,
  `action` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `userPermissions`
--

CREATE TABLE `userPermissions` (
  `id` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `Perm_key` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`IDaccount`);

--
-- Indexes for table `cauhoi`
--
ALTER TABLE `cauhoi`
  ADD PRIMARY KEY (`idquestion`),
  ADD KEY `fk_question` (`idCataQuestion`);

--
-- Indexes for table `Chamcong`
--
ALTER TABLE `Chamcong`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `danhmucauhoi`
--
ALTER TABLE `danhmucauhoi`
  ADD PRIMARY KEY (`idCataQuestion`);

--
-- Indexes for table `Luong`
--
ALTER TABLE `Luong`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_luong` (`idUser`);

--
-- Indexes for table `maychamcongSql`
--
ALTER TABLE `maychamcongSql`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_maychamcong` (`idUser`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`),
  ADD KEY `fk_account` (`idAccount`);

--
-- Indexes for table `UserLog`
--
ALTER TABLE `UserLog`
  ADD PRIMARY KEY (`idUserLog`),
  ADD KEY `fk_idUser` (`idUser`);

--
-- Indexes for table `userPermissions`
--
ALTER TABLE `userPermissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_permission` (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `IDaccount` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cauhoi`
--
ALTER TABLE `cauhoi`
  MODIFY `idquestion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Chamcong`
--
ALTER TABLE `Chamcong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `danhmucauhoi`
--
ALTER TABLE `danhmucauhoi`
  MODIFY `idCataQuestion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Luong`
--
ALTER TABLE `Luong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `maychamcongSql`
--
ALTER TABLE `maychamcongSql`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `UserLog`
--
ALTER TABLE `UserLog`
  MODIFY `idUserLog` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userPermissions`
--
ALTER TABLE `userPermissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cauhoi`
--
ALTER TABLE `cauhoi`
  ADD CONSTRAINT `fk_question` FOREIGN KEY (`idCataQuestion`) REFERENCES `danhmucauhoi` (`idCataQuestion`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `Luong`
--
ALTER TABLE `Luong`
  ADD CONSTRAINT `fk_luong` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `maychamcongSql`
--
ALTER TABLE `maychamcongSql`
  ADD CONSTRAINT `fk_maychamcong` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_account` FOREIGN KEY (`idAccount`) REFERENCES `account` (`IDaccount`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `UserLog`
--
ALTER TABLE `UserLog`
  ADD CONSTRAINT `fk_idUser` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `userPermissions`
--
ALTER TABLE `userPermissions`
  ADD CONSTRAINT `fk_permission` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
