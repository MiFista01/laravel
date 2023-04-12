-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2023 at 07:52 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_events`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_event` date NOT NULL DEFAULT current_timestamp(),
  `adress` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `image`, `date_event`, `adress`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Saksamaa kultuuriõhtu', 'saksamaa_kultuurikas.jpg', '2023-02-14', 'Mähe Vaba Aja Keskus, Mugula tee 17a, 11913 Tallinn, Eesti', 'Sellel korral räägime kultuuriõhtul Saksamaast ning valmistame maitsvaid südamekujulisi küpsiseid', '2023-01-03 22:00:00', '2023-01-03 22:00:00', NULL),
(2, 'Sõbrapäeva üritustenädal', 'Sobrapaev.jpg', '2023-02-15', 'Tallinn', 'Sõbrapäeva nädalal on tegemist kuhjaga - leia endale sobivaimad üritused meie valikust', '2023-01-03 22:00:00', '2023-01-03 22:00:00', NULL),
(3, 'Teeme koos tsirkust', 'tsirkus.jpg', '2023-03-29', 'Nõmme kultuurikeskus, Turu plats 2, Tallinn', 'Hea tuju meister Alex, seebimulliprintsess Katarina ja nutikas koer Ginny, kutsuvad kõiki endaga koos 2020 aasta parimat tsirkuseshowd tegema!\r\nKavas on erilised seebimullitrikid, žongleeerimine, mustkunstimaagia ja koerte vabastiil.\r\nTegevusse kaasatakse ka publik ning lapsed saavad mitmeid trikke ise proovida.\r\n', '2023-01-03 22:00:00', '2023-01-03 22:00:00', NULL),
(4, 'Kirbuturg Pirita Vaba Aja Keskuses', 'Kirbuturg.jpg', '2023-03-14', 'Pirita Vaba Aja Keskus, Loodussõbralik ja popp taaskasutus', 'Varakevadine Kirbuturg Pirita Vaba Aja Keskuses toimub 14. märtsil kell 10.30-13.30.\r\nKirbuturule ootame kauplema kasutatud riiete, jalatsite, lastekaupade, mänguasjade, omavalmistatud käsitöö, raamatute, kodukaupade, aiasaaduste, vanavara ja muu seisma jäänud kila kolaga.\r\n', '2023-01-03 22:00:00', '2023-01-03 22:00:00', NULL),
(5, 'Näitus Minu vaba riik', 'naitus.jpg', '2023-04-14', 'Pirita tee 56e, Tallinn', 'Eesti Vabariigi 100. sünnipäeva näitus Eesti Ajaloomuuseumis ootab kõiki külla Maarjamäe lossi alates 15. veebruarist 2018. Avasta aja lugu!\r\n', '2023-01-03 22:00:00', '2023-01-03 22:00:00', NULL),
(6, 'KUMU sünnipäev', 'kumu.png', '2023-05-15', 'Kumu kunstimuuseum A. Weizenbergi 34, 10127 Tallinn, Eesti', 'Kumu kunstimuuseum tähistab 15.–16. veebruaril oma 14. sünnipäeva! Kumu sõpru ootavad sel nädalavahetusel erikeeltes näitusetutvustused, kunstiraamatu- ja disainimüük, loomingulised töötoad jpm.\r\n', '2023-01-03 22:00:00', '2023-01-03 22:00:00', NULL),
(7, 'Test', 'different-types-of-beer-styles-guide-1800x946.jpg', '2023-03-29', 'Kreenholmi 28-32', 'BUHAEM U DIMI', '2023-03-27 21:00:00', '2023-03-27 21:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `register_events`
--

CREATE TABLE `register_events` (
  `id` int(11) NOT NULL,
  `contact_person` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `number_members` int(4) NOT NULL,
  `events_id` int(11) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin','manager') NOT NULL DEFAULT 'user',
  `name` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `role`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin@events.ee', '$2y$12$mjv/GPng4oQFohhkPl8RPucmgRDFVs/UCVP02US.r92ra09kK4d7u', 'admin', 'admin', '2023-01-04', '2023-01-04', NULL),
(2, 'manager@events.ee', '$2y$12$mjv/GPng4oQFohhkPl8RPucmgRDFVs/UCVP02US.r92ra09kK4d7u', 'manager', 'manager', '2023-01-04', '2023-01-04', NULL),
(3, 'user@events.ee', '$2y$12$mjv/GPng4oQFohhkPl8RPucmgRDFVs/UCVP02US.r92ra09kK4d7u', 'user', 'user', '2023-01-04', '2022-01-05', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_events`
--
ALTER TABLE `register_events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `events_id` (`events_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `register_events`
--
ALTER TABLE `register_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `register_events`
--
ALTER TABLE `register_events`
  ADD CONSTRAINT `register_events_ibfk_1` FOREIGN KEY (`events_id`) REFERENCES `events` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
