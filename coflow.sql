-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 25 Kas 2020, 11:24:06
-- Sunucu sürümü: 10.4.11-MariaDB
-- PHP Sürümü: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `coflow`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `username` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `password` varchar(256) CHARACTER SET utf8mb4 DEFAULT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `img` varchar(301) CHARACTER SET utf8mb4 NOT NULL DEFAULT 'assets/admin/images/admin.png',
  `email` varchar(70) CHARACTER SET utf8mb4 DEFAULT NULL COMMENT 'Yönetici Email Adresi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci ROW_FORMAT=DYNAMIC;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`Id`, `username`, `password`, `name`, `img`, `email`) VALUES
(10, 'cgtysylr', '$2y$10$qCzuIVZNT2BMAuSDK7Y50uD/V0ubkrEcx5xFYozj.DsO4DxjSpOz.', 'Çağatay SÖYLER', 'assets/admin/images/admin.png', 'cgtysylr@gmail.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `product`
--

CREATE TABLE `product` (
  `item_code` varchar(15) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  `kdv` smallint(6) DEFAULT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `product`
--

INSERT INTO `product` (`item_code`, `brand`, `name`, `category`, `status`, `create_at`, `update_at`, `kdv`, `stock`) VALUES
('A11Y1005', '5', 'L056', 'M', 3, '0000-00-00 00:00:00', '2020-11-25 10:57:34', 8, 50),
('A11Y1007', '5', 'L056', 'S', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, 0),
('A11Y1008', '5', 'L056', 'XL', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, 0),
('A11Y1055', 'DENİZ', 'Mouse', 'Elektronik', 1, '2020-11-25 10:59:25', '2020-11-25 11:02:29', 18, 100),
('A77Y18888', 'ABC', 'MONT', 'XL', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 8, 100),
('G000asd', '99', 'K059', 'B', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 18, 0),
('G11Y70016', '105', 'L099', 'A', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 18, 0),
('GGHH1234', '14', 'K99', 'A', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 18, 0);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_code`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
