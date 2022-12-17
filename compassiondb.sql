-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2022 at 03:51 AM
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
-- Database: `compassiondb`
--

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `id` int(11) NOT NULL,
  `fkey` int(11) NOT NULL,
  `fkey_foundation` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `payment_amount` float NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id`, `fkey`, `fkey_foundation`, `date`, `payment_amount`, `message`) VALUES
(28, 31, 3, '2022-12-17 10:48:55', 1000, 'hello'),
(29, 31, 7, '2022-12-17 10:49:13', 20000, 'nice');

-- --------------------------------------------------------

--
-- Table structure for table `foundations`
--

CREATE TABLE `foundations` (
  `foundationId` int(11) NOT NULL,
  `foundation_name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foundations`
--

INSERT INTO `foundations` (`foundationId`, `foundation_name`, `description`, `image`) VALUES
(3, 'The African Child Foundation', 'The African Child Foundation is a non-profit organization whose mission is to support Fr. Henry Simaro in his efforts to transform the lives of orphaned and vulnerable children in the slums outside Nairobi, Kenya.', 'foundation_1.jpg'),
(4, 'Quebec Breast Cancer Foundation', 'Breast Cancer Action Quebec is a feminist health organization that has been dedicated to breast cancer prevention for over 30 years, with a particular focus on the environmental factors linked to the disease. BCAQ works on the problem of toxic substances present in everyday products and is concerned with environmental issues that have an impact on health.', 'foundation_2.jpg'),
(7, 'Break Poverty Foundation', 'The mission of this humanitarian organisation, Break Poverty Foundation, is to identify and support innovative solutions against poverty. Its unifying ambition also makes it possible to gather around current issues such as global inequalities or child poverty.', 'foundation_3.jpg'),
(8, 'Philippine Cancer Society', 'The Philippine Cancer Society, Inc. (PCSI) is a private, non-stock, non-profit corporation registered with the Securities and Exchange Commission on 22 December 1956. It was founded by a group of laymen and medical doctors with the aim of “helping the Filipino cope with cancer by preventing it and diminishing death caused by it, especially among the disadvantaged, through information, education, advocacy and focused services.”', 'foundation_4.jpg'),
(9, 'Citi Foundation', 'Citi Philippines\' citizenship efforts focus on issues where it can naturally contribute its resources and expertise as a financial services company. Through Financial Inclusion, it seeks to enable financial success and unlock opportunities for low-income communities and individuals; with Youth Economic Opportunities, it aspires to help young people effectively compete for economic prospects and succeed in the 21st century economy.', 'foundation_5.jpeg'),
(10, 'Philippine Animal Rescue Team', 'Life is about choices. But animals have no voice so they don’t have the luxury of making choices. They don\'t have any say in what happens to them. They don’t get to vote so they don\'t count. \r\n\r\nAnimals depend on us for a lot of things, and one of those things is to protect them. They trust us to make the right choices for them. To be their voice. To speak up and advocate for their safety and well-being.', 'foundation_6.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `user_creationDate` date NOT NULL DEFAULT current_timestamp(),
  `usersName` varchar(50) NOT NULL,
  `usersEmail` varchar(50) NOT NULL,
  `usersUid` varchar(50) NOT NULL,
  `usersPwd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `user_creationDate`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`) VALUES
(26, '2022-12-16', 'Jade Rosales', 'jade@gmail.com', 'jade', '/FMt8bE='),
(30, '2022-12-16', 'Dynielle Ryan Goc-ong', 'ryangocong@gmail.com', 'ryan', 'rAVz'),
(31, '2022-12-17', 'testing', 't@gmail.com', 'test', 'rAVzrA==');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `donation_user` (`fkey`),
  ADD KEY `foundations_user` (`fkey_foundation`);

--
-- Indexes for table `foundations`
--
ALTER TABLE `foundations`
  ADD PRIMARY KEY (`foundationId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `foundations`
--
ALTER TABLE `foundations`
  MODIFY `foundationId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donation`
--
ALTER TABLE `donation`
  ADD CONSTRAINT `donation_user` FOREIGN KEY (`fkey`) REFERENCES `users` (`usersId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `foundations_user` FOREIGN KEY (`fkey_foundation`) REFERENCES `foundations` (`foundationId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
