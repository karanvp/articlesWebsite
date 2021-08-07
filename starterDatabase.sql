-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 07, 2021 at 11:02 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `name` varchar(1000) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `shortdescription` varchar(10000) NOT NULL,
  `author` varchar(100) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`name`, `description`, `shortdescription`, `author`, `ID`) VALUES
('Cryptocurrency', 'Cryptocurrency prices were a mix of red and green on August 6. The global cryptocurrency market cap was $1.67 trillion, a 3.34 percent increase over the previous day. The total crypto market volume over the last 24 hours was $99.90 billion, which makes a 23.06 percent increase. ', 'A daily round-up of the most interesting articles on cryptocurrencies like Bitcoin, Ethereum and Tether to help jump-start the day', 'karan', 26),
('Roy', 'Billionaire investor Ray Dalio said that while he thinks of Bitcoin as \"digital gold\", he prefers one over the other. Dalio, the founder of Bridgewater ', 'Billionaire investor Ray Dalio said that while he thinks of Bitcoin as \"digital gold\", he prefers one over the other. Dalio, the founder of Bridgewater ', 'karan', 27),
('A journey', 'Trading in cryptocurrencies is indeed very lucrative, given the promises of overnight riches and substantial gains. But not a lot of people are actually able to tap into the famed price waves and \"dips\" that allow for this. And with bitcoin having recently seen a favorable price upswing', 'Trading in cryptocurrencies is indeed very lucrative, given the promises of overnight riches and substantial gains. But not a lot of people are actually able to tap into the famed price waves and \"dips\" that allow for this. And with bitcoin having recently seen a favorable price upswing', 'karan', 28),
('Etherium', 'A much-anticipated event for ethereum enthusiasts, the popular, open-source blockchain underwent a major revamp on August 5, boosting the intraday growth of its native cryptocurrency, Ether by 4.16 percent to trade at 2,790 dollars. But what is the London Hard Fork? ', 'A much-anticipated event for ethereum enthusiasts, the popular, open-source blockchain underwent a major revamp on August 5, boosting the intraday growth of its native cryptocurrency, Ether by 4.16 percent to trade at 2,790 dollars. But what is the London Hard Fork? ', 'karan', 29),
('Rock fossils discovery', 'Pale, wormlike tubes in 890-million-year-old rock may be ancient sea sponges, a new study concludes. If confirmed, that controversial claim would push back the origin of the earliest sponges by about 350 million years and make the tiny squiggles the oldest known fossils of animals, by far.', 'If confirmed, tubes in 890-million-year-old rock may be the oldest animal fossils', 'ram', 30);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `category`) VALUES
(1, 'testuser', 'testuserpass', 'admin'),
(2, 'karan', 'karan', 'user'),
(6, 'roland', 'roland', 'user'),
(7, 'bean', 'bean', 'user'),
(66, 'ram', 'ram', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
