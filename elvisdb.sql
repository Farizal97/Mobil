-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Nov 03, 2011 at 09:41 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `elvisdb`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `admin_rs`
-- 

CREATE TABLE `admin_rs` (
  `usernames` varchar(40) NOT NULL,
  `passwords` varchar(50) NOT NULL,
  PRIMARY KEY  (`usernames`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `admin_rs`
-- 

INSERT INTO `admin_rs` VALUES ('admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

-- 
-- Table structure for table `bukutamu`
-- 

CREATE TABLE `bukutamu` (
  `idbuku` varchar(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `tgl` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `pesan` longtext NOT NULL,
  PRIMARY KEY  (`idbuku`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `bukutamu`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `guestbook`
-- 

CREATE TABLE `guestbook` (
  `id` int(4) NOT NULL auto_increment,
  `name` varchar(65) NOT NULL default '',
  `telepon` varchar(65) NOT NULL,
  `email` varchar(65) NOT NULL default '',
  `comment` longtext NOT NULL,
  `datetime` varchar(65) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

-- 
-- Dumping data for table `guestbook`
-- 

INSERT INTO `guestbook` VALUES (11, 'ADMIN', '00000000', 'eyubalzary@gmail.com', 's', '11-11-02 07:21:47');
INSERT INTO `guestbook` VALUES (12, 'CHAVES CCD', '189239123', 'ccd@yyh.com', 'oii. ru.. den cacad', '11-11-03 09:02:23');

-- --------------------------------------------------------

-- 
-- Table structure for table `mobil`
-- 

CREATE TABLE `mobil` (
  `idmobil` varchar(20) NOT NULL,
  `merek` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tahun` varchar(20) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `catatan` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `mobil`
-- 

INSERT INTO `mobil` VALUES ('001', 'Honda', 'Honda CRV', '2010', 'merah', 'mini buss', 'cr-v.jpg', 'Honda CR-V adalah sebuah SUV buatan pabrikan otomotif Jepang Honda sejak 1996. CR-V tersedia dalam penggerak roda depan dan penggerak empat roda, meskipun di beberapa negara hanya tersedia penggerak empat roda saja, seperti di Inggris, dan Australia.');
INSERT INTO `mobil` VALUES ('002', 'Toyota', 'Avanza', '2009', 'silver', 'mini buss', '../images/1320328346.jpg', 'Kapasitas mesin : 1300 cc dan 1500 cc\r\nDikabarkan beberapa pemakai, konsumsi BBM / liter : 1:13 km\r\nToyota Avanza unggul signifikan pada harga jual kembali, tarikkan mesin & tenaga mesin karena memang kapasitas lebih besar\r\nAvanaza dan Xenia 1300 cc kecepatan pada gigi 5 dan RPM 3000 adalah : 81 km/jam');
INSERT INTO `mobil` VALUES ('003', 'Toyota', 'Crown Majesta', '2011', 'silver', 'Sedan', '../images/1320328872.jpg', 'keterangan');
INSERT INTO `mobil` VALUES ('004', 'Suzuki', 'baleno', '2002', 'COKLAT', 'SEDAN', '../images/1320329472.jpg', 'KETERANGAN');
