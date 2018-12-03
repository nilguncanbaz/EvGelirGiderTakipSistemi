-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 03 Ara 2018, 15:42:51
-- Sunucu sürümü: 5.7.23
-- PHP Sürümü: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `ev-gelir-gider`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gelirler`
--

DROP TABLE IF EXISTS `gelirler`;
CREATE TABLE IF NOT EXISTS `gelirler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL,
  `baslik` varchar(50) NOT NULL,
  `aciklama` text NOT NULL,
  `fiyat` int(11) NOT NULL,
  `tarih` int(11) NOT NULL,
  `uye` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `giderler`
--

DROP TABLE IF EXISTS `giderler`;
CREATE TABLE IF NOT EXISTS `giderler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL,
  `baslik` varchar(50) NOT NULL,
  `aciklama` text NOT NULL,
  `fiyat` double NOT NULL,
  `tarih` int(11) NOT NULL,
  `uye` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `turler`
--

DROP TABLE IF EXISTS `turler`;
CREATE TABLE IF NOT EXISTS `turler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `turler`
--

INSERT INTO `turler` (`id`, `baslik`) VALUES
(1, 'fatura'),
(2, 'Okul Giderleri'),
(3, 'gıda');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

DROP TABLE IF EXISTS `uyeler`;
CREATE TABLE IF NOT EXISTS `uyeler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Ad` varchar(30) NOT NULL,
  `nick` varchar(20) NOT NULL,
  `eposta` varchar(50) NOT NULL,
  `sifre` varchar(50) NOT NULL,
  `yetki` bit(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`id`, `Ad`, `nick`, `eposta`, `sifre`, `yetki`) VALUES
(1, 'Admin', 'admin', 'admin@asad.com', 'admin', b'1'),
(2, 'nilgun', 'nlgn', 'Nilgun@asad.com', '123456', b'0');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
