-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2018 at 04:50 AM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `perd3.4`
--

-- --------------------------------------------------------

--
-- Table structure for table `jebat`
--

CREATE TABLE IF NOT EXISTS `jebat` (
  `id_barang` int(11) NOT NULL,
  `katil` int(11) NOT NULL,
  `locker` int(11) NOT NULL,
  `kipas` int(11) NOT NULL,
  `meja` int(11) NOT NULL,
  `cermin` int(11) NOT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jebat`
--

INSERT INTO `jebat` (`id_barang`, `katil`, `locker`, `kipas`, `meja`, `cermin`) VALUES
(1111, 111212122, 1212, 212122, 2121, 2121);

-- --------------------------------------------------------

--
-- Table structure for table `kasturi`
--

CREATE TABLE IF NOT EXISTS `kasturi` (
  `id_barang` int(11) NOT NULL,
  `katil` int(11) NOT NULL,
  `locker` int(11) NOT NULL,
  `kipas` int(11) NOT NULL,
  `meja` int(11) NOT NULL,
  `cermin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kasturi`
--

INSERT INTO `kasturi` (`id_barang`, `katil`, `locker`, `kipas`, `meja`, `cermin`) VALUES
(2121, 2121, 121, 121, 21239, 212);

-- --------------------------------------------------------

--
-- Table structure for table `lekir`
--

CREATE TABLE IF NOT EXISTS `lekir` (
  `id_barang` int(11) NOT NULL,
  `katil` int(11) NOT NULL,
  `locker` int(11) NOT NULL,
  `kipas` int(11) NOT NULL,
  `meja` int(11) NOT NULL,
  `cermin` int(11) NOT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lekir`
--

INSERT INTO `lekir` (`id_barang`, `katil`, `locker`, `kipas`, `meja`, `cermin`) VALUES
(11, 1, 1167, 12, 12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lekiu`
--

CREATE TABLE IF NOT EXISTS `lekiu` (
  `id_barang` int(11) NOT NULL,
  `katil` int(11) NOT NULL,
  `locker` int(11) NOT NULL,
  `kipas` int(11) NOT NULL,
  `meja` int(11) NOT NULL,
  `cermin` int(11) NOT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lekiu`
--

INSERT INTO `lekiu` (`id_barang`, `katil`, `locker`, `kipas`, `meja`, `cermin`) VALUES
(212, 212121212, 121276, 212121, 2121, 21212);

-- --------------------------------------------------------

--
-- Table structure for table `tuah`
--

CREATE TABLE IF NOT EXISTS `tuah` (
  `id_barang` int(11) NOT NULL,
  `katil` int(11) NOT NULL,
  `locker` int(11) NOT NULL,
  `kipas` int(11) NOT NULL,
  `meja` int(11) NOT NULL,
  `cermin` int(11) NOT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tuah`
--

INSERT INTO `tuah` (`id_barang`, `katil`, `locker`, `kipas`, `meja`, `cermin`) VALUES
(21212, 1212121, 212122, 12121, 21212, 21219);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
