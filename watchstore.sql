-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2024 at 01:55 AM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `watchstore`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(9, 'zorame', '$2y$10$3TfXfRpy/fus0Th9VzadEOGxoV.d//wnS/PC/VTrQk/VaHk1/ruRK');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `watches`
--

CREATE TABLE `watches` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` double NOT NULL,
  `photo_path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `watches`
--

INSERT INTO `watches` (`id`, `name`, `price`, `photo_path`) VALUES
(1, 'Tag Heuer Chronograph Ceramic Series 6191', 9580.02, './img/watchimage/1.jpg'),
(2, 'Tag Heuer Smart Watch Titanium Series 9322', 43375.72, './img/watchimage/2.jpg'),
(3, 'Citizen Digital Gold-plated Series 5555', 1915.7, './img/watchimage/3.jpg'),
(4, 'Garmin Smart Watch Leather Series 3747', 561.99, './img/watchimage/4.jpg'),
(5, 'Bulova Sports Watch Gold-plated Series 4556', 5964.9, './img/watchimage/5.jpg'),
(6, 'Casio Analog Gold-plated Series 8513', 5676.55, './img/watchimage/6.jpg'),
(7, 'Bulova Dive Watch Titanium Series 2585', 9102.27, './img/watchimage/7.jpg'),
(8, 'Citizen Digital Gold-plated Series 7873', 1930.06, './img/watchimage/8.jpg'),
(9, 'Fossil Dress Watch Gold-plated Series 7439', 547.75, './img/watchimage/9.jpg'),
(10, 'Timex Digital Stainless Steel Series 9571', 2881.25, './img/watchimage/10.jpg'),
(11, 'Apple Sports Watch Stainless Steel Series 3027', 7745.22, './img/watchimage/11.jpg'),
(12, 'Fossil Smart Watch Titanium Series 6892', 7735.58, './img/watchimage/12.jpg'),
(13, 'Apple Chronograph Leather Series 3454', 1044.56, './img/watchimage/13.jpg'),
(14, 'Fossil Dress Watch Titanium Series 9110', 5656.31, './img/watchimage/14.jpg'),
(15, 'Tag Heuer Sports Watch Silicone Series 5488', 24942.88, './img/watchimage/15.jpg'),
(16, 'Seiko Sports Watch Stainless Steel Series 7019', 3212.12, './img/watchimage/16.jpg'),
(17, 'Garmin Dive Watch Gold-plated Series 4157', 9434.25, './img/watchimage/17.jpg'),
(18, 'Apple Dive Watch Silicone Series 4627', 4619.69, './img/watchimage/18.jpg'),
(19, 'Tag Heuer Chronograph Stainless Steel Series 8392', 16241.17, './img/watchimage/19.jpg'),
(20, 'Tag Heuer Dress Watch Titanium Series 4748', 21161.84, './img/watchimage/20.jpg'),
(21, 'Garmin Dress Watch Stainless Steel Series 2853', 4097.98, './img/watchimage/21.jpg'),
(22, 'Omega Smart Watch Stainless Steel Series 1698', 7830.3, './img/watchimage/22.jpg'),
(23, 'Tag Heuer Dive Watch Stainless Steel Series 6249', 31900.39, './img/watchimage/23.jpg'),
(24, 'Casio Sports Watch Titanium Series 9958', 3759.58, './img/watchimage/24.jpg'),
(25, 'Citizen Dress Watch Titanium Series 7287', 8182.68, './img/watchimage/25.jpg'),
(26, 'Seiko Chronograph Gold-plated Series 7546', 6807.89, './img/watchimage/26.jpg'),
(27, 'Rolex Sports Watch Leather Series 2802', 41966.65, './img/watchimage/27.jpg'),
(28, 'Bulova Digital Stainless Steel Series 3049', 5214.7, './img/watchimage/28.jpg'),
(29, 'Garmin Sports Watch Stainless Steel Series 3255', 2860.83, './img/watchimage/29.jpg'),
(30, 'Garmin Analog Gold-plated Series 9445', 8995.69, './img/watchimage/30.jpg'),
(31, 'Omega Dress Watch Leather Series 1956', 24537.88, './img/watchimage/31.jpg'),
(32, 'Timex Chronograph Titanium Series 5555', 6610.37, './img/watchimage/32.jpg'),
(33, 'Citizen Dive Watch Titanium Series 4354', 8931.26, './img/watchimage/33.jpg'),
(34, 'Rolex Dive Watch Gold-plated Series 8683', 36261.38, './img/watchimage/34.jpg'),
(35, 'Bulova Chronograph Silicone Series 4444', 9543.89, './img/watchimage/35.jpg'),
(36, 'Rolex Dress Watch Ceramic Series 1699', 28828.48, './img/watchimage/36.jpg'),
(37, 'Omega Analog Leather Series 1569', 46839.66, './img/watchimage/37.jpg'),
(38, 'Citizen Sports Watch Leather Series 2409', 2616.22, './img/watchimage/38.jpg'),
(39, 'Garmin Dress Watch Ceramic Series 1537', 3035.45, './img/watchimage/39.jpg'),
(40, 'Tag Heuer Analog Gold-plated Series 3368', 40015.61, './img/watchimage/40.jpg'),
(41, 'Bulova Smart Watch Gold-plated Series 6919', 5830.76, './img/watchimage/41.jpg'),
(42, 'Citizen Sports Watch Silicone Series 4124', 5417.12, './img/watchimage/42.jpg'),
(43, 'Casio Dress Watch Ceramic Series 5142', 2024.36, './img/watchimage/43.jpg'),
(44, 'Omega Chronograph Leather Series 5752', 16486.35, './img/watchimage/44.jpg'),
(45, 'Tag Heuer Sports Watch Stainless Steel Series 2664', 34580.75, './img/watchimage/45.jpg'),
(46, 'Citizen Analog Ceramic Series 4343', 2871.35, './img/watchimage/46.jpg'),
(47, 'Tag Heuer Smart Watch Gold-plated Series 4506', 28518.84, './img/watchimage/47.jpg'),
(48, 'Rolex Dress Watch Silicone Series 7617', 48985.77, './img/watchimage/48.jpg'),
(49, 'Timex Sports Watch Leather Series 3849', 6196.92, './img/watchimage/49.jpg'),
(50, 'Samsung Analog Ceramic Series 3839', 6871.24, './img/watchimage/50.jpg'),
(51, 'Garmin Chronograph Gold-plated Series 3427', 3942.88, './img/watchimage/51.jpg'),
(52, 'Seiko Analog Stainless Steel Series 2066', 6549.7, './img/watchimage/52.jpg'),
(53, 'Omega Dive Watch Titanium Series 9967', 31103.57, './img/watchimage/53.jpg'),
(54, 'Omega Smart Watch Stainless Steel Series 1825', 25053.85, './img/watchimage/54.jpg'),
(55, 'Fossil Chronograph Stainless Steel Series 9867', 8054.46, './img/watchimage/55.jpg'),
(56, 'Seiko Analog Titanium Series 6073', 4184.92, './img/watchimage/56.jpg');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `watch_details`
--

CREATE TABLE `watch_details` (
  `id` int(11) NOT NULL,
  `watch_id` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `specification` text DEFAULT NULL,
  `target_audience` text DEFAULT NULL CHECK (`target_audience` in ('Women','Children','Men'))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `watch_details`
--

INSERT INTO `watch_details` (`id`, `watch_id`, `description`, `specification`, `target_audience`) VALUES
(1, 1, 'Premium Ceramic chronograph from Tag Heuer. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 30m, Battery Life: 1 year, Case Size: 34mm, Material: Ceramic', 'Men'),
(2, 2, 'Premium Titanium smart watch from Tag Heuer. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 50m, Battery Life: 1 year, Case Size: 29mm, Material: Titanium', 'Women'),
(3, 3, 'Premium Gold-plated digital from Citizen. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 50m, Battery Life: 2 years, Case Size: 39mm, Material: Gold-plated', 'Men'),
(4, 4, 'Premium Leather smart watch from Garmin. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 200m, Battery Life: 5 years, Case Size: 42mm, Material: Leather', 'Women'),
(5, 5, 'Premium Gold-plated sports watch from Bulova. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 100m, Battery Life: 5 years, Case Size: 36mm, Material: Gold-plated', 'Men'),
(6, 6, 'Premium Gold-plated analog from Casio. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 30m, Battery Life: 2 years, Case Size: 42mm, Material: Gold-plated', 'Women'),
(7, 7, 'Premium Titanium dive watch from Bulova. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 200m, Battery Life: Automatic, Case Size: 29mm, Material: Titanium', 'Men'),
(8, 8, 'Premium Gold-plated digital from Citizen. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 200m, Battery Life: 2 years, Case Size: 37mm, Material: Gold-plated', 'Children'),
(9, 9, 'Premium Gold-plated dress watch from Fossil. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 30m, Battery Life: Automatic, Case Size: 40mm, Material: Gold-plated', 'Men'),
(10, 10, 'Premium Stainless Steel digital from Timex. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 30m, Battery Life: 1 year, Case Size: 42mm, Material: Stainless Steel', 'Men'),
(11, 11, 'Premium Stainless Steel sports watch from Apple. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 200m, Battery Life: Automatic, Case Size: 38mm, Material: Stainless Steel', 'Men'),
(12, 12, 'Premium Titanium smart watch from Fossil. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 50m, Battery Life: 5 years, Case Size: 36mm, Material: Titanium', 'Children'),
(13, 13, 'Premium Leather chronograph from Apple. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 50m, Battery Life: Automatic, Case Size: 32mm, Material: Leather', 'Women'),
(14, 14, 'Premium Titanium dress watch from Fossil. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 50m, Battery Life: 5 years, Case Size: 28mm, Material: Titanium', 'Women'),
(15, 15, 'Premium Silicone sports watch from Tag Heuer. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 100m, Battery Life: 5 years, Case Size: 37mm, Material: Silicone', 'Men'),
(16, 16, 'Premium Stainless Steel sports watch from Seiko. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 50m, Battery Life: 1 year, Case Size: 34mm, Material: Stainless Steel', 'Men'),
(17, 17, 'Premium Gold-plated dive watch from Garmin. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 200m, Battery Life: 2 years, Case Size: 37mm, Material: Gold-plated', 'Women'),
(18, 18, 'Premium Silicone dive watch from Apple. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 200m, Battery Life: 2 years, Case Size: 38mm, Material: Silicone', 'Men'),
(19, 19, 'Premium Stainless Steel chronograph from Tag Heuer. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 30m, Battery Life: 1 year, Case Size: 40mm, Material: Stainless Steel', 'Children'),
(20, 20, 'Premium Titanium dress watch from Tag Heuer. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 30m, Battery Life: 5 years, Case Size: 37mm, Material: Titanium', 'Men'),
(21, 21, 'Premium Stainless Steel dress watch from Garmin. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 30m, Battery Life: 2 years, Case Size: 39mm, Material: Stainless Steel', 'Men'),
(22, 22, 'Premium Stainless Steel smart watch from Omega. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 30m, Battery Life: 2 years, Case Size: 29mm, Material: Stainless Steel', 'Men'),
(23, 23, 'Premium Stainless Steel dive watch from Tag Heuer. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 30m, Battery Life: Automatic, Case Size: 33mm, Material: Stainless Steel', 'Men'),
(24, 24, 'Premium Titanium sports watch from Casio. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 50m, Battery Life: Automatic, Case Size: 32mm, Material: Titanium', 'Women'),
(25, 25, 'Premium Titanium dress watch from Citizen. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 30m, Battery Life: 1 year, Case Size: 33mm, Material: Titanium', 'Women'),
(26, 26, 'Premium Gold-plated chronograph from Seiko. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 50m, Battery Life: 5 years, Case Size: 34mm, Material: Gold-plated', 'Men'),
(27, 27, 'Premium Leather sports watch from Rolex. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 200m, Battery Life: 1 year, Case Size: 37mm, Material: Leather', 'Men'),
(28, 28, 'Premium Stainless Steel digital from Bulova. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 30m, Battery Life: Automatic, Case Size: 39mm, Material: Stainless Steel', 'Women'),
(29, 29, 'Premium Stainless Steel sports watch from Garmin. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 100m, Battery Life: Automatic, Case Size: 28mm, Material: Stainless Steel', 'Women'),
(30, 30, 'Premium Gold-plated analog from Garmin. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 100m, Battery Life: Automatic, Case Size: 30mm, Material: Gold-plated', 'Children'),
(31, 31, 'Premium Leather dress watch from Omega. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 30m, Battery Life: Automatic, Case Size: 28mm, Material: Leather', 'Men'),
(32, 32, 'Premium Titanium chronograph from Timex. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 100m, Battery Life: 5 years, Case Size: 41mm, Material: Titanium', 'Women'),
(33, 33, 'Premium Titanium dive watch from Citizen. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 100m, Battery Life: 2 years, Case Size: 28mm, Material: Titanium', 'Women'),
(34, 34, 'Premium Gold-plated dive watch from Rolex. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 100m, Battery Life: Automatic, Case Size: 44mm, Material: Gold-plated', 'Men'),
(35, 35, 'Premium Silicone chronograph from Bulova. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 50m, Battery Life: 5 years, Case Size: 36mm, Material: Silicone', 'Children'),
(36, 36, 'Premium Ceramic dress watch from Rolex. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 30m, Battery Life: Automatic, Case Size: 28mm, Material: Ceramic', 'Men'),
(37, 37, 'Premium Leather analog from Omega. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 100m, Battery Life: Automatic, Case Size: 41mm, Material: Leather', 'Men'),
(38, 38, 'Premium Leather sports watch from Citizen. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 50m, Battery Life: 1 year, Case Size: 35mm, Material: Leather', 'Women'),
(39, 39, 'Premium Ceramic dress watch from Garmin. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 100m, Battery Life: 2 years, Case Size: 40mm, Material: Ceramic', 'Men'),
(40, 40, 'Premium Gold-plated analog from Tag Heuer. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 200m, Battery Life: Automatic, Case Size: 41mm, Material: Gold-plated', 'Women'),
(41, 41, 'Premium Gold-plated smart watch from Bulova. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 100m, Battery Life: 5 years, Case Size: 44mm, Material: Gold-plated', 'Men'),
(42, 42, 'Premium Silicone sports watch from Citizen. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 200m, Battery Life: Automatic, Case Size: 39mm, Material: Silicone', 'Women'),
(43, 43, 'Premium Ceramic dress watch from Casio. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 100m, Battery Life: 5 years, Case Size: 35mm, Material: Ceramic', 'Women'),
(44, 44, 'Premium Leather chronograph from Omega. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 200m, Battery Life: 5 years, Case Size: 32mm, Material: Leather', 'Men'),
(45, 45, 'Premium Stainless Steel sports watch from Tag Heuer. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 50m, Battery Life: 2 years, Case Size: 28mm, Material: Stainless Steel', 'Men'),
(46, 46, 'Premium Ceramic analog from Citizen. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 30m, Battery Life: 5 years, Case Size: 32mm, Material: Ceramic', 'Women'),
(47, 47, 'Premium Gold-plated smart watch from Tag Heuer. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 30m, Battery Life: 2 years, Case Size: 41mm, Material: Gold-plated', 'Men'),
(48, 48, 'Premium Silicone dress watch from Rolex. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 200m, Battery Life: 1 year, Case Size: 34mm, Material: Silicone', 'Men'),
(49, 49, 'Premium Leather sports watch from Timex. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 200m, Battery Life: 5 years, Case Size: 37mm, Material: Leather', 'Women'),
(50, 50, 'Premium Ceramic analog from Samsung. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 200m, Battery Life: 5 years, Case Size: 29mm, Material: Ceramic', 'Men'),
(51, 51, 'Premium Gold-plated chronograph from Garmin. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 30m, Battery Life: 1 year, Case Size: 38mm, Material: Gold-plated', 'Children'),
(52, 52, 'Premium Stainless Steel analog from Seiko. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 200m, Battery Life: 1 year, Case Size: 40mm, Material: Stainless Steel', 'Men'),
(53, 53, 'Premium Titanium dive watch from Omega. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 30m, Battery Life: 2 years, Case Size: 37mm, Material: Titanium', 'Men'),
(54, 54, 'Premium Stainless Steel smart watch from Omega. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 30m, Battery Life: 2 years, Case Size: 40mm, Material: Stainless Steel', 'Children'),
(55, 55, 'Premium Stainless Steel chronograph from Fossil. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 50m, Battery Life: 1 year, Case Size: 36mm, Material: Stainless Steel', 'Women'),
(56, 56, 'Premium Titanium analog from Seiko. Features a sophisticated design with precise timekeeping and elegant finish.', 'Water Resistance: 30m, Battery Life: 5 years, Case Size: 32mm, Material: Titanium', 'Men');



CREATE TABLE`shopbag`(
`id` int(11) NOT NULL,
    `userid` int(11) NOT NULL,
    `watchid` int(11) NOT NULL
)
--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `watches`
--
ALTER TABLE `watches`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `watch_details`
--
ALTER TABLE `watch_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `watch_id` (`watch_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `watches`
--
ALTER TABLE `watches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `watch_details`
--
ALTER TABLE `watch_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `watch_details`
--
ALTER TABLE `watch_details`
  ADD CONSTRAINT `watch_details_ibfk_1` FOREIGN KEY (`watch_id`) REFERENCES `watches` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
