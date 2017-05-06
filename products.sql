-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2015 at 05:53 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `acquisti`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `timestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `picture`, `timestamp`, `type`) VALUES
(1, 'Creeper Diamond Band', '27202', 'img\\rings\\creeper diamond band.bmp', '0000-00-00 00:00:00.000000', 'rings'),
(2, 'Emilly Ring', '25000', 'img\\rings\\emilly ring.bmp', '0000-00-00 00:00:00.000000', 'rings'),
(3, 'Florette Diamond Band', '29500', 'img/rings/florette diamond band.bmp', '0000-00-00 00:00:00.000000', 'rings'),
(4, 'Infinity Solitaire Ring', '24950', 'img/rings/infinity solitaire ring.bmp', '0000-00-00 00:00:00.000000', 'rings'),
(5, 'Kora Infinity Ring', '27550', 'img/rings/kora infinity ring.bmp', '0000-00-00 00:00:00.000000', 'rings'),
(6, 'Locked Hearts Ring', '29575', 'img/rings/locked hearts ring.bmp', '0000-00-00 00:00:00.000000', 'rings'),
(7, 'Sweetheart', '30250', 'img/rings/sweetheart.bmp', '0000-00-00 00:00:00.000000', 'rings'),
(8, 'Unconditional Love Ring', '24500', 'img/rings/unconditional love ring.bmp', '0000-00-00 00:00:00.000000', 'rings'),
(9, 'Valentina Ring', '24500', 'img/rings/valentina ring.bmp', '0000-00-00 00:00:00.000000', 'rings'),
(10, 'Wavy Diamond Band', '34995', 'img/rings/wavy diamond band.bmp', '0000-00-00 00:00:00.000000', 'rings'),
(11, 'You and I Ring ', '35750', 'img/rings/you and i ring.bmp', '0000-00-00 00:00:00.000000', 'rings'),
(12, 'Cherisa Solitaire Heart', '68740', 'img/earrings/cherisa solitaire heart earrings.bmp', '0000-00-00 00:00:00.000000', 'earrings'),
(13, 'Entwine Swirl Earrings', '70500', 'img/earrings/entwine swirl stud earrings.bmp', '0000-00-00 00:00:00.000000', 'earrings'),
(14, 'Jill Heart Earrings', '70450', 'img/earrings/jill heart earrings.bmp', '0000-00-00 00:00:00.000000', 'earrings'),
(15, 'Sunflower Stud Earrings', '68950', 'img/earrings/sunflower stud earrings.bmp', '0000-00-00 00:00:00.000000', 'earrings');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
