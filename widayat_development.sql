-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2014 at 01:19 AM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `widayat_development`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `news_image` varchar(255) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `text` text NOT NULL,
  `total_read` int(4) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `slug` (`slug`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `news_image`, `slug`, `text`, `total_read`, `created_at`, `updated_at`) VALUES
(21, 'Tes', 'uploads/news/flex_slide_1.jpg', 'tes', 'fdasfdasfdsa', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'fdsa', 'uploads/news/fb_activity.jpg', 'fdsa', 'fdsa', 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'Calon DPRD Lumajang', 'uploads/news/widayat-profile.jpg', 'calon-dprd-lumajang', 'Hari ini hari lahirnya bapak widayat.\r\nSaat ini kami akan mendukung', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'FFFFF', 'uploads/news/case_2.jpg', 'fffff', 'fdsafdsa', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'FFFFFfdsfdsa', 'uploads/news/thumb_7.jpg', 'ffffffdsfdsa', 'fdasfdasdfs', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'FFFFFfdsfdsa', 'uploads/news/thumb_7.jpg', 'ffffffdsfdsa', 'fdasfdasdfs', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'FFFFFfdsfdsa', 'uploads/news/thumb_7.jpg', 'ffffffdsfdsa', 'fdasfdasdfs', 1, '2013-12-31 04:40:52', '2013-12-31 04:40:52'),
(28, 'fdasfdas', 'uploads/news/case_1.jpg', 'fdasfdas', 'dfsafdsa', 3, '2013-12-31 04:41:26', '2013-12-31 04:41:26');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
