-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2021 at 05:27 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maslatizep`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(255) NOT NULL,
  `bg` text NOT NULL,
  `secbg` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`title`, `description`, `category`, `bg`, `secbg`, `date`) VALUES
('Equator Museum', 'A project to create a museum map in Minecraft with 3 major themes, namely, equatorial culture as context, equatorial and global socio-political context, and decolonization of art. In essence, the theme of this museum project relates to the creation of artwork / history in the country of the equator. This project was created in collaboration with the Biennale Yogyakarta art foundation.\r\n\r\nThis virtual museum was built by **MIVUBI**, which is a collaboration team from Mineversal and Unibuild Indonesia engaged in the Minecraft community in Indonesia. [www.minecraft-id.net](http://www.minecraft-id.net)\r\n\r\nIn this project I became a research concept manager, where I helped builders to get the concept of a building and some time I also helped them to build.', 'Project', 'https://museumkhatulistiwa.minecraft-id.net/assets/background/building/India.png', 'https://media.discordapp.net/attachments/445232632679235595/890975595498962984/2021-09-18_21.47.09_1.png', '2021-10-10'),
('Minefest', 'After successfully holding Fest From Blocks Indonesia last August, **Mineversal Team and Fest Form Home ID** are now proud to present a bigger event by announcing Minefest Indonesia Online in 2020.\r\n\r\nWith the pandemic atmosphere forcing participants to stay at home, this event will change the experience of playing Minecraft as well as participating in a music festival.\r\n\r\n\"We want to give offerings and appreciation to the Indonesian Minecraft community and music at the end of 2020 in a series of events. That is Minefest Indonesia Online 2020,\" said Choky Gultom as the head of the event organizer.\r\n\r\nOne of the events that will be held in this 3-day event is the Music Festival which will present various music labels/records directly to participants who are at home to experience a new experience of attending a music festival in the Minecraft sandbox game.', 'Project', 'https://media.discordapp.net/attachments/791310755008872498/792062347857887252/2020-12-25_23.08.10.png', 'https://media.discordapp.net/attachments/791310755008872498/791313863911014491/2020-12-23_20.54.51.png', '2021-10-18');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `password`, `id`) VALUES
('lrahmatullah044@gmail.com', '$2y$12$6ZOYERwZq8y5rG9d1YG3weYs.Yzf3tdat9FkjiccZG6SYbkRIgAg6', 1);

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `ip` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `views`
--

INSERT INTO `views` (`title`, `date`, `ip`, `id`) VALUES
('Equator Museum', '2021-10-18', 'a', 1),
('equator museum', '2021-10-18', 'a', 2),
('Minefest', '2021-10-18', 'a', 3),
('equator museum', '2021-10-18', '::1', 4),
('minefest', '2021-10-18', '::1', 5),
('minefestsa', '2021-10-18', '::1', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`title`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `views`
--
ALTER TABLE `views`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
