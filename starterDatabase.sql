-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 25, 2021 at 04:55 AM
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
('A journey', 'Trading in cryptocurrencies is indeed very lucrative, given the promises of overnight riches and substantial gains. But not a lot of people are actually able to tap into the famed price waves and \"dips\" that allow for this. And with bitcoin having recently seen a favorable price upswing', 'Trading in cryptocurrencies is indeed very lucrative, given the promises of overnight riches and substantial gains. But not a lot of people are actually able to tap into the famed price waves and \"dips\" that allow for this. And with bitcoin having recently seen a favorable price upswing', 'karan', 28),
('Etherium', 'A much-anticipated event for ethereum enthusiasts, the popular, open-source blockchain underwent a major revamp on August 5, boosting the intraday growth of its native cryptocurrency, Ether by 4.16 percent to trade at 2,790 dollars. But what is the London Hard Fork? ', 'A much-anticipated event for ethereum enthusiasts, the popular, open-source blockchain underwent a major revamp on August 5, boosting the intraday growth of its native cryptocurrency, Ether by 4.16 percent to trade at 2,790 dollars. But what is the London Hard Fork? ', 'karan', 29),
('Rock fossils discovery', 'Pale, wormlike tubes in 890-million-year-old rock may be ancient sea sponges, a new study concludes. If confirmed, that controversial claim would push back the origin of the earliest sponges by about 350 million years and make the tiny squiggles the oldest known fossils of animals, by far.', 'If confirmed, tubes in 890-million-year-old rock may be the oldest animal fossils', 'ram', 30),
('test', 'test', 'testtest', 'karan9118', 37),
('jurassic park', 'Jurassic Park is a 1993 American science fiction action film directed by Steven Spielberg and produced by Kathleen Kennedy and Gerald R. Molen.', 'Jurassic Park is a 1993 American science fiction action film directed by Steven Spielberg and produced by Kathleen Kennedy and Gerald R. Molen.', 'miranda', 69),
('Jamaica United', 'Originally inhabited by the indigenous Taíno peoples, the island came under Spanish rule following the arrival of Christopher Columbus in 1494. Many of the indigenous people were either killed or died of diseases to which they had no immunity, after which the Spanish then brought large numbers of African slaves to Jamaica as labourers.', 'Jamaica, a Caribbean island nation, has a lush topography of mountains, rainforests and reef-lined beaches. Many of its all-inclusive resorts are clustered in Montego Bay,', 'miranda', 70),
('cherry picking updated', 'Cherry picking is an advanced technique used in git', 'Git Cherry function', 'kesha911', 100),
('das', 'sadd', 'dosaads', 'kesha911', 111);

-- --------------------------------------------------------

--
-- Table structure for table `Carousel`
--

CREATE TABLE `Carousel` (
  `id` int(11) NOT NULL,
  `heading` varchar(200) NOT NULL,
  `user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Carousel`
--

INSERT INTO `Carousel` (`id`, `heading`, `user`) VALUES
(1, 'hello', ''),
(2, 'k5', ''),
(3, 'k4', ''),
(4, 'h', ''),
(5, 'ak', 'sd'),
(6, 'njk', 'jnk'),
(7, '', ''),
(8, 'rr', ''),
(9, 'tt', 'kesha911'),
(10, '', 'kesha911'),
(11, '', 'kesha911'),
(12, '', 'kesha911'),
(13, '', 'kesha911'),
(14, '', 'kesha911'),
(15, '', 'kesha911'),
(16, '', 'kesha911'),
(17, '', 'kesha911'),
(18, '', 'kesha911'),
(19, '', 'kesha911'),
(20, '', 'kesha911'),
(21, '', 'kesha911'),
(22, '', 'kesha911'),
(23, '', 'kesha911'),
(24, '', 'kesha911'),
(25, '', 'kesha911'),
(26, '', 'kesha911'),
(27, '', 'kesha911'),
(28, '', 'kesha911'),
(29, '', 'kesha911'),
(30, '', 'kesha911'),
(31, '', 'kesha911'),
(32, '', 'kesha911'),
(33, '', 'kesha911'),
(34, '', 'kesha911'),
(35, '', 'kesha911'),
(36, '', 'kesha911'),
(37, '', 'kesha911'),
(38, '', 'kesha911'),
(39, '', 'hatsuni'),
(40, '', 'kesha911');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image_url` text NOT NULL,
  `image_title` varchar(30) NOT NULL,
  `author` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image_url`, `image_title`, `author`) VALUES
(56, 'IMG-612f1aa66972c0.52918899.jpg', 'Mountains', 'kesha911'),
(70, 'IMG-612f5b90507848.40567876.jpeg', 'Beach', 'kesha911'),
(71, 'IMG-612f5ae088cbe1.12672305.jpg', 'Changeling', 'kesha911'),
(72, 'IMG-612f5b48e5aa23.78687339.jpg', 'Dawn', 'kesha911'),
(74, 'IMG-613c7e4620d6d4.45728163.jpg', 'Food wars', 'hatsuni');

-- --------------------------------------------------------

--
-- Table structure for table `imageTable`
--

CREATE TABLE `imageTable` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img_dir` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`) VALUES
(1, 'karanvpagare@gmail.com'),
(24, 'karanvpofficial@gmail.com'),
(32, 'zz@gmail.com'),
(34, 'zk@gmail.com'),
(35, 'kk@gmail.com'),
(37, 'qq@gmail.com'),
(39, 'md@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `category`, `email`) VALUES
(1, 'testuser', 'popo', 'admin', ''),
(2, 'karan', 'popo', 'user', ''),
(6, 'roland', 'popo', 'user', ''),
(7, 'bean', 'popo', 'user', ''),
(66, 'ram', 'popo', 'user', ''),
(67, 'karansingh', 'popo', 'user', ''),
(76, 'karan911', 'popo', 'admin', ''),
(77, 'karan9118', 'popo', 'user', ''),
(78, 'aa', 'popo', 'user', ''),
(79, 'sad', 'popo', 'user', ''),
(82, 'kyp', 'popo', 'user', ''),
(83, 'miranda', '', 'user', ''),
(84, 'uiui', 'popo', 'user', ''),
(85, 'kiran', 'b1a5b64256e27fa5ae76d62b95209ab3', 'user', 'kiran'),
(86, 'dsadsa', '3d9caa934717fa7bafc1fa3a408f6865', 'user', 'adsddsadad'),
(87, 'ramprasad', '5e77419b0affce27d73e8dc63df1c941', 'user', 'ramu@gmail.com'),
(88, 'oppo', 'c892ba238c98835d4d53a3faed43ee52', 'user', 'oppo'),
(89, 'tttt', '32bf0e6fcff51e53bd74e70ba1d622b2', 'user', 'tttt'),
(90, 'vb', '2ab4f27ab1ffdcdad8ed21a965ca62ad', 'user', 'vb'),
(91, 'bv', '121aa3ee4a7d5b1bbbc760fd0c6de79b', 'user', 'bv'),
(92, 'zx', 'e6c760b3216a51c656c5861d72d5bf62', 'user', 'zx'),
(93, 'er', '818f9c45cfa30eeff277ef38bcbe9910', 'user', 'er'),
(94, 'fgf', 'ad39d1d0135d81ef41fff005ec10f14d', 'user', 'fgf'),
(95, 'hj', '1f28e49f34e2406fdb6d6158eebd793b', 'user', 'hj'),
(96, 'df', 'eff7d5dba32b4da32d9a67a519434d3f', 'user', 'df'),
(97, 'Ramgopal', '43d025a1d7bf85e7031d910fcceeb129', 'user', 'rgv@gmail.com'),
(98, 'Kesha911', '5e77419b0affce27d73e8dc63df1c941', 'user', 'kesha@gmail.com'),
(99, 'qwe', '76d80224611fc919a5d54f0ff9fba446', 'user', 'asd'),
(100, 'adds', '9b49d796554287efd41ce49b6e7590c5', 'user', 'adds'),
(101, 'dosa', '7815696ecbf1c96e6894b779456d330e', 'user', 'df'),
(102, '', 'popo', 'user', ''),
(103, 'Kylie', '8f3100edb4473b3f3b1ef47bbf41041c', 'user', 'kasd'),
(104, 'adsa', '7815696ecbf1c96e6894b779456d330e', 'user', 'dassasd'),
(105, 'ajwain', '567b915de3cd20037892df1af711ef35', 'user', 'aj@gmail.com'),
(106, 'mirand', 'f57c32c0e9371832ac31b11ed1606cd4', 'user', 'm@gmail.com'),
(107, 'cassandra', '3cab68956fa7c8129671ef96bc1adf7c', 'user', 'Winner2021'),
(108, 'cass', '3cab68956fa7c8129671ef96bc1adf7c', 'user', 'adel'),
(109, 'cassd', '3cab68956fa7c8129671ef96bc1adf7c', 'user', 'kndlsa'),
(110, 'spear', '1952a01898073d1e561b9b4f2e42cbd7', 'user', 'kalds'),
(111, 'mk', '07d935680b6501b2e42fe4baea021389', 'user', 'kmda'),
(112, 'hatsuni', '195b92202af5632aa08227c2b5c4ddec', 'user', 'nkald'),
(113, 'rambo', '59931dbc55de73dc815ac4a0170e5443', 'user', 'rambo@gmail.com'),
(115, 'johncena', 'b7adde8a9eec8ce92b5ee0507ce054a4', 'user', 'jc@gmail.com'),
(117, 'jk', '051a9911de7b5bbc610b76f4eda834a0', 'user', 'jk'),
(118, 'qw', '006d2143154327a64d86a264aea225f3', 'user', 'qw'),
(119, 'q', '7694f4a66316e53c8cdd9d9954bd611d', 'user', 'q'),
(120, 'y', '415290769594460e2e485922904f345d', 'user', 'y'),
(121, 'bam', '92eb5ffee6ae2fec3ad71c777531578f', 'user', 'b'),
(122, 'u', '415290769594460e2e485922904f345d', 'user', 'y'),
(123, 'I', '7b774effe4a349c6dd82ad4f4f21d34c', 'user', 'u'),
(124, 'Io', '865c0c0b4ab0e063e5caa3387c1a8741', 'user', 'I'),
(125, 'bb', '21ad0bd836b90d08f4cf640b4c298e7c', 'user', 'bb'),
(126, 'cv', 'de3ec0aa2234aa1e3ee275bbc715c6c9', 'user', 'cv'),
(127, 'ads', '60390c7e429e38e8449519011a24f79d', 'user', 'asd'),
(128, 'abc', '18389a4a9ad5795744699cff0ba66c15', 'user', 'ad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Carousel`
--
ALTER TABLE `Carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imageTable`
--
ALTER TABLE `imageTable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `Carousel`
--
ALTER TABLE `Carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `imageTable`
--
ALTER TABLE `imageTable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;