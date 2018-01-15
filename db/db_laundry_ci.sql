-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `tb_kasir`;
CREATE TABLE `tb_kasir` (
  `id_kasir` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL,
  PRIMARY KEY (`id_kasir`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_kasir` (`id_kasir`, `nama`, `password`, `level`) VALUES
('KSR180001',	'yuyu',	'a2FzaXI=',	'kasir'),
('KSR180002',	'manager',	'bWFuYWdlcg==',	'manager'),
('KSR180003',	'kasir',	'a2FzaXI=',	'kasir');

DROP TABLE IF EXISTS `tb_konsumen`;
CREATE TABLE `tb_konsumen` (
  `id_konsumen` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `hp` varchar(13) NOT NULL,
  PRIMARY KEY (`id_konsumen`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_konsumen` (`id_konsumen`, `nama`, `alamat`, `hp`) VALUES
('KON180001',	'Riski Andriyanto',	'Jinggotan RT 04 RW 05',	'0893732723723'),
('KON180002',	'Muhammad Riza Afthoni',	'Bumiharjo',	'089656987973'),
('KON180003',	'Mamat',	'kelet',	'9322332232323');

DROP TABLE IF EXISTS `tb_paket`;
CREATE TABLE `tb_paket` (
  `id_paket` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` varchar(255) NOT NULL,
  PRIMARY KEY (`id_paket`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_paket` (`id_paket`, `nama`, `harga`) VALUES
('PKT180001',	'Cuci',	'5000'),
('PKT180002',	'Strika',	'8000'),
('PKT180003',	'Cuci & Strika',	'10000');

DROP TABLE IF EXISTS `tb_transaksi`;
CREATE TABLE `tb_transaksi` (
  `id_transaksi` varchar(11) NOT NULL,
  `id_kasir` varchar(11) NOT NULL,
  `id_konsumen` varchar(11) NOT NULL,
  `id_paket` varchar(11) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `jml_kilo` varchar(11) NOT NULL,
  `total` varchar(255) NOT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tb_transaksi` (`id_transaksi`, `id_kasir`, `id_konsumen`, `id_paket`, `tgl_transaksi`, `jml_kilo`, `total`) VALUES
('TRA180001',	'KSR180001',	'KON180002',	'PKT180001',	'2018-01-03',	'10',	'50000'),
('TRA180002',	'KSR180003',	'KON180003',	'PKT180003',	'2018-01-04',	'2.4',	'24000');

-- 2018-01-05 01:22:48
