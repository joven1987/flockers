-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2017 at 11:12 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flockers`
--

-- --------------------------------------------------------

--
-- Table structure for table `evaluation`
--

CREATE TABLE `evaluation` (
  `event_id` tinyint(4) NOT NULL,
  `joiner_user_id` int(5) NOT NULL,
  `question_id` tinyint(4) NOT NULL,
  `rate` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `evaluation_question`
--

CREATE TABLE `evaluation_question` (
  `question_id` tinyint(4) NOT NULL,
  `question_description` text NOT NULL,
  `designer_user_id` int(5) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` tinyint(4) NOT NULL,
  `event_organizer_user_id` int(5) NOT NULL,
  `event_sub_category_id` tinyint(4) NOT NULL,
  `cover_photo_link` varchar(50) NOT NULL,
  `event_title` varchar(30) NOT NULL,
  `event_description` text NOT NULL,
  `event_date_posted` datetime NOT NULL,
  `event_date` datetime NOT NULL,
  `total_no_of_joiners` tinyint(4) NOT NULL,
  `max_no_of_joiners` tinyint(4) NOT NULL,
  `reg_amount` int(5) NOT NULL,
  `event_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event_joiner`
--

CREATE TABLE `event_joiner` (
  `event_id` tinyint(4) NOT NULL,
  `user_id` int(5) NOT NULL,
  `date_joined` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event_photo`
--

CREATE TABLE `event_photo` (
  `event_id` tinyint(4) NOT NULL,
  `photo_link` varchar(64) NOT NULL,
  `photo_description` varchar(64) NOT NULL,
  `place_taken` varchar(32) NOT NULL,
  `date_taken` datetime NOT NULL,
  `date_uploaded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event_reg_transaction`
--

CREATE TABLE `event_reg_transaction` (
  `trans_id` int(11) NOT NULL,
  `event_id` tinyint(4) NOT NULL,
  `trans_date` datetime NOT NULL,
  `user_id` int(5) NOT NULL,
  `ticket_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `group_flockers`
--

CREATE TABLE `group_flockers` (
  `group_id` tinyint(3) NOT NULL,
  `organizer_user_id` int(5) NOT NULL,
  `group_name` varchar(16) NOT NULL,
  `group_description` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL,
  `total_no_of_members` tinyint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `group_member`
--

CREATE TABLE `group_member` (
  `group_id` tinyint(3) NOT NULL,
  `user_id` int(5) NOT NULL,
  `date_joined` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `group_message`
--

CREATE TABLE `group_message` (
  `message_id` int(6) NOT NULL,
  `group_id` tinyint(3) NOT NULL,
  `sender_user_id` int(5) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date_sent` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `main_category`
--

CREATE TABLE `main_category` (
  `main_category_id` tinyint(3) NOT NULL,
  `main_category_name` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_category`
--

INSERT INTO `main_category` (`main_category_id`, `main_category_name`) VALUES
(1, 'E-Sports'),
(2, 'Give a Hand'),
(3, 'Sampel1'),
(4, 'Sampel2'),
(5, 'Sampe3'),
(6, 'Sampel4'),
(7, 'Sampel5'),
(8, 'Sampel6'),
(9, 'Sampel7');

-- --------------------------------------------------------

--
-- Table structure for table `personal_message`
--

CREATE TABLE `personal_message` (
  `message_id` int(6) NOT NULL,
  `from_user_id` int(5) NOT NULL,
  `to_user_id` int(5) NOT NULL,
  `date_sent` datetime NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profile_photo`
--

CREATE TABLE `profile_photo` (
  `user_id` int(5) NOT NULL,
  `photo_link` varchar(64) NOT NULL,
  `date_uploaded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `sub_category_id` tinyint(3) NOT NULL,
  `main_category_id` tinyint(3) NOT NULL,
  `sub_category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sub_category_id`, `main_category_id`, `sub_category_name`) VALUES
(1, 1, 'Defence of the Ancient (DOTA)'),
(2, 1, 'Counter Strike'),
(3, 1, 'Ran Online Ph'),
(4, 1, 'Cross Fire'),
(5, 2, 'Charity Event'),
(6, 2, 'Fun Run'),
(7, 3, 'sub_sample_1_3'),
(8, 3, 'sub_sample_1_3'),
(9, 3, 'sub_sample_1_3'),
(10, 4, 'sub_sample_4_2_4'),
(11, 4, 'sub_sample_4_2_4'),
(12, 4, 'sub_sample_4_2_4'),
(13, 5, 'sub_sample_5_3_5'),
(14, 5, 'sub_sample_5_3_5'),
(15, 5, 'sub_sample_5_3_5'),
(16, 6, 'sub_sample_6_4_6'),
(17, 6, 'sub_sample_6_4_6'),
(18, 6, 'sub_sample_6_4_6'),
(19, 7, 'sub_sample_7_5_7'),
(20, 7, 'sub_sample_7_5_7'),
(21, 7, 'sub_sample_7_5_7'),
(22, 8, 'sub_sample_8_6_8'),
(23, 8, 'sub_sample_8_6_8'),
(24, 8, 'sub_sample_8_6_8'),
(25, 9, 'sub_sample_9_7_9'),
(26, 9, 'sub_sample_9_7_9'),
(27, 9, 'sub_sample_9_7_9');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(5) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `middle_name` varchar(32) NOT NULL,
  `last_name` varchar(16) NOT NULL,
  `mobile_no` varchar(13) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `paypal_account` varchar(50) NOT NULL,
  `date_registered` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `first_name`, `middle_name`, `last_name`, `mobile_no`, `address`, `email_address`, `paypal_account`, `date_registered`) VALUES
(1, 'joven', 'novo', 'joven', 'gutib', 'novo', '+639052317568', 'New Paradise, Pajo, Lapu-lapu City', 'jovennovo2015@gmail.com', 'jovennovo2017@gmail.com', '0000-00-00 00:00:00'),
(2, 'jm', 'abano', 'jm', 'bonsit', 'abano', '+639233429111', 'Lapu-lapu City', 'jm@gmail.com', 'jmabano@gmail.com', '0000-00-00 00:00:00'),
(3, 'joven1873', 'joven', 'novo', 'novo', 'novo', '0983984834', 'LLC', 'gangstoprn_15@yahoo.com', 'gangstoprn_15@yahoo.com', '2017-06-28 00:00:00'),
(4, 'jeric', 'mercado', 'jeric joseph', '', 'mercado', '+639050176969', 'LLC', 'jeric@mercado.com', 'pal@paypal.com', '2017-09-02 00:00:00'),
(5, 'joven', '$2y$10$PezZZk9Ek', 'jm', '', 'abano', '+639050176969', 'LLC', 'jeric@mercado.com', 'pal@paypal.com', '2017-09-02 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_interest`
--

CREATE TABLE `user_interest` (
  `interest_id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `sub_category_id` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `venue_id` tinyint(4) NOT NULL,
  `event_id` tinyint(4) NOT NULL,
  `address_name` varchar(50) NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `event_organizer_user_id` (`event_organizer_user_id`),
  ADD KEY `event_sub_category_id` (`event_sub_category_id`);

--
-- Indexes for table `main_category`
--
ALTER TABLE `main_category`
  ADD PRIMARY KEY (`main_category_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`sub_category_id`),
  ADD KEY `main_category_id` (`main_category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_interest`
--
ALTER TABLE `user_interest`
  ADD PRIMARY KEY (`interest_id`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`venue_id`),
  ADD KEY `event_id` (`event_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `main_category`
--
ALTER TABLE `main_category`
  MODIFY `main_category_id` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sub_category_id` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user_interest`
--
ALTER TABLE `user_interest`
  MODIFY `interest_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`event_organizer_user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD CONSTRAINT `sub_category_ibfk_1` FOREIGN KEY (`main_category_id`) REFERENCES `main_category` (`main_category_id`);

--
-- Constraints for table `venue`
--
ALTER TABLE `venue`
  ADD CONSTRAINT `venue_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `event` (`event_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
