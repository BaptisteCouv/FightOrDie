-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: May 22, 2019 at 02:12 PM
-- Server version: 10.3.13-MariaDB-1:10.3.13+maria~bionic
-- PHP Version: 7.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `FightOrDie`
--

-- --------------------------------------------------------

--
-- Table structure for table `characters`
--

CREATE TABLE `characters` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `healthPoints` int(10) NOT NULL,
  `class` varchar(40) NOT NULL,
  `strength` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `password`) VALUES
(1, 'bob', '$2y$10$xNAP3H5v6yUncBs2pGc0cOk6W5KBQ57HFV0I8v8r5Bx.2FtdobXCK'),
(3, 'root', '$2y$10$NICYwvImUzgCdCMXpTG8DuCtp096ZaPCBUGSZfqJKlGYYz0xxrbAi'),
(4, '', '$2y$10$L4QIvd1igNzTKs28UoAOKeKbldBTT0UT59m.zlZdTLrO/UTS.UMG6'),
(5, 'test', '$2y$10$v82Ypo36bCzzNk2qNDAeCOeoauyqbpojOeHHgmZjq8GXo6JxkYANS'),
(6, 'b', '$2y$10$lC5sApADDDZcyJAjSUl7UO/P1.g6sJPVWc/htlI0S3ASCxqES82aK'),
(7, 'popo', '$2y$10$oh/UctwLThrngrsE7/qp4e3gTejyTCDscbIzsfkmYgM/1toWAm2Mq'),
(8, 'papa', '$2y$10$o9CPCfTFxW/vL2QmVq3MTuW1cACh0L8yNNgBtOo8ebiPopPc1xWTa'),
(9, 'pipi', '$2y$10$IpnVo8BPobNnlR39rr2HxOBMjohuxUrEhrt7LD2iHB.mwzWWcDHVi'),
(10, 'pkpk', '$2y$10$0wvoorAlsBzPbxnsLULQTughG6U4aBgrRkaS74MoXSsTVwBvtG8ty'),
(11, 'plpl', '$2y$10$oAORkmJ32bJoT1Bj3XIbwObjY1gfca7bwNldRp6X.yiT09qFq7/IC'),
(12, 'psps', '$2y$10$bzlYQmT5hduEtcj0EdPKue4KumWBa9KJm9APKAJXu/i2SXj/5NfMO'),
(13, 'pg', '$2y$10$v7SflB/GUFZ4Cmjby7PHFOZ2GAlGTjsP6JdP469ZrKcW0KDvKhewG'),
(14, 'oigjtgogthjgoongfng', '$2y$10$cnnzMvMmE.rInLvEQKWRY.i084KOtE0r2.Z8olZxAggC297RuTA.6'),
(15, 'rop', '$2y$10$TdVPtiId4KlZW5bJCaxi/e0jrYzXbAJuvoL6BkMMvRNGHkaB5M4zC'),
(16, 'alex', '$2y$10$rZe7Mt8YDr0KM/pEcVYQPemO9OQkHa40m8u80zIpWiMXOyz3NRaCy'),
(17, 'NANO', '$2y$10$QIf4SL8n1mLtSuE3u79HOO3osbIOUWj4B8QMvCdF7uTCP4Qo.12iS'),
(18, 'azdadz', '$2y$10$eoEXBZ.WTegn3W5QhZS/F.Lat7ritDnwm3/u7N548JTOtFggkHibm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `characters`
--
ALTER TABLE `characters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `characters`
--
ALTER TABLE `characters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `characters`
--
ALTER TABLE `characters`
  ADD CONSTRAINT `characters_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
