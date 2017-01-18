-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 07 Oca 2017, 23:43:14
-- Sunucu sürümü: 10.1.19-MariaDB
-- PHP Sürümü: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `rmp`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yemekcesitleri`
--

CREATE TABLE `yemekcesitleri` (
  `id` int(11) NOT NULL,
  `yemekadi` varchar(200) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yemekcesitleri`
--

INSERT INTO `yemekcesitleri` (`id`, `yemekadi`) VALUES
(1, 'Beşemal Soslu Karnıbahar'),
(2, 'Domates Çorbası'),
(3, 'Patlıcan Musakka'),
(4, 'Kuru Fasulye'),
(5, 'Mercimek Çorbası'),
(6, 'Fırın Makarma'),
(7, 'pilav');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yemekkayitleri`
--

CREATE TABLE `yemekkayitleri` (
  `id` int(11) NOT NULL,
  `yemekid` int(11) NOT NULL,
  `tarih` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yemekkayitleri`
--

INSERT INTO `yemekkayitleri` (`id`, `yemekid`, `tarih`) VALUES
(1, 1, '2016-12-09'),
(7, 3, '2017-01-07'),
(8, 3, '2017-01-07'),
(9, 2, '2017-01-01');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `yemekcesitleri`
--
ALTER TABLE `yemekcesitleri`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yemekkayitleri`
--
ALTER TABLE `yemekkayitleri`
  ADD PRIMARY KEY (`id`),
  ADD KEY `yemekid` (`yemekid`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `yemekcesitleri`
--
ALTER TABLE `yemekcesitleri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Tablo için AUTO_INCREMENT değeri `yemekkayitleri`
--
ALTER TABLE `yemekkayitleri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `yemekkayitleri`
--
ALTER TABLE `yemekkayitleri`
  ADD CONSTRAINT `yemek` FOREIGN KEY (`yemekid`) REFERENCES `yemekcesitleri` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
