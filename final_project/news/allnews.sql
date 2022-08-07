-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2022 at 05:20 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `allnews`
--

CREATE TABLE `allnews` (
  `Name` text NOT NULL,
  `News1` text NOT NULL,
  `News2` text NOT NULL,
  `News3` text NOT NULL,
  `News4` text NOT NULL,
  `News5` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `allnews`
--

INSERT INTO `allnews` (`Name`, `News1`, `News2`, `News3`, `News4`, `News5`) VALUES
('Sports', 'CWG 2022 India secure historic medal, reach cricket final .', 'Bangladesh lose to India in Saff U-20 Championship final.', 'Naim, Ebadat called up for third Zimbabwe ODI.', 'BCB To Investigate Shakib Al Hasans Social Media Post.', 'Tamim Poor catching had to cost us at some point, today .'),
('Media', 'Western media and the war on truth in Ukraine.', 'Revealed BPs greenwashing social media ads as anger over fuel costs rose.', 'Salman Khan ropes in social media sensation Abdu Rozik for Bhaijaan.', 'Netflix is expanding its push into video games, but few subscribers are playing along', 'Vox Media cuts staff, slows down hiring as recession fears grow'),
('International', 'Governments decision to hike fuel prices will hurt every section of', 'Agri subsidy should continue to ensure food security', 'Limited public transport on first day of fuel price hike', 'US Assistant Secretary of State Michele J Sison in Dhaka on 2-day visit', 'US-Bangla Airlines to resume Dhaka-Bangkok flights from Sept 1'),
('Domestic', ' Russian strikes forced nuclear reactor closure, operator says', 'Colombia peace deal failing as violent gangs recruit vulnerable children', 'Israel-Gaza: Israel arrests 19 militant suspects after Gaza flare-up', 'Taiwan tensions: China halts co-operation with US on key issues', 'Lowering taxes best way to avoid recession, says Liz Truss');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
