-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2021. Máj 05. 14:45
-- Kiszolgáló verziója: 10.4.17-MariaDB
-- PHP verzió: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `ci_db`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `category` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `rate` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `movies`
--

INSERT INTO `movies` (`id`, `user_id`, `name`, `category`, `rate`) VALUES
(2, 1, 'Star Wars III', 'Sci', 3),
(3, 0, 'Star W', 'Sci-fi', 5),
(4, 0, 'Star W', 'Sci-fi', 5),
(8, 1, 'asd', 'asd', 2),
(9, 3, 'Star Wars III', 'Sci-fi', 5);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`) VALUES
(3, 'kis_aladar@gmail.com', 'KisAli', '2bb80d537b1da3e38bd30361aa855686bde0eacd7162fef6a25fe97bf527a25b'),
(4, 'banyai.balazs412@gmail.com', 'banyai.balazs', '65ae934a8d8a2c4bb764135b23f91433cfa267237b52d98a9fcc687ded092204'),
(5, 'nagy_e@gmail.com', 'NagyE', '773d8f92f07dec1e40c76ff36e0078dd0cff6e910186cf3a36d6940f9c9cd9bf'),
(6, 'horvath_bela@gmail.com', 'HorvathB', '6f5edba9dfc6d4ebdf720cb6b4c723b3a9c68e5d2f044b67e9a86fae65136bbc');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
