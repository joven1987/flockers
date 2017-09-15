-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2017 at 12:38 AM
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
-- Table structure for table `create_event_trans`
--

CREATE TABLE `create_event_trans` (
  `id` int(11) NOT NULL,
  `event_id` varchar(20) NOT NULL,
  `subscription_duration` int(11) NOT NULL,
  `total_amount_paid` int(11) NOT NULL,
  `trans_date` datetime NOT NULL,
  `expiry_date` datetime NOT NULL,
  `payment_status` int(11) NOT NULL,
  `adver_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_event_trans`
--

INSERT INTO `create_event_trans` (`id`, `event_id`, `subscription_duration`, `total_amount_paid`, `trans_date`, `expiry_date`, `payment_status`, `adver_status`) VALUES
(1, '59badcbce2878', 8, 4000, '2017-09-15 04:14:15', '2018-05-13 04:14:15', 1, 1),
(2, '59bb98f818f04', 1, 500, '2017-09-15 05:11:43', '2017-10-15 05:11:43', 1, 1),
(3, '59bb9a8bdb256', 2, 1000, '2017-09-15 05:18:15', '2017-11-14 05:18:15', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `evaluation`
--

CREATE TABLE `evaluation` (
  `id` int(11) NOT NULL,
  `event_id` varchar(20) NOT NULL,
  `participant_user_id` int(5) NOT NULL,
  `question` text NOT NULL,
  `rate` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `event_id` varchar(20) NOT NULL,
  `event_admin_user_id` int(5) NOT NULL,
  `interest_id` varchar(50) NOT NULL,
  `cover_photo_link` text,
  `event_title` text NOT NULL,
  `event_desc` text NOT NULL,
  `event_date` datetime DEFAULT NULL,
  `max_no_participants` int(11) DEFAULT NULL,
  `reg_fee` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `event_id`, `event_admin_user_id`, `interest_id`, `cover_photo_link`, `event_title`, `event_desc`, `event_date`, `max_no_participants`, `reg_fee`) VALUES
(1, '59badcbce2878', 15, '1,2,10,11', NULL, 'Lorem Ipsum', '<p><strong>Lorem Ipsum</strong><span style="color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif; font-size:14px">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\r\n', '2017-09-29 14:23:17', 4352, 500),
(2, '59bb98f818f04', 15, '2,3,4,5,9,10', NULL, 'WATCHING PBA', '<p>PBA LIVE</p>\r\n', '2017-10-15 13:00:00', 500, NULL),
(3, '59bb9a8bdb256', 15, '2,8,13,15', NULL, 'Workshop', '<p>This is a <u><strong>workshop</strong></u> event</p>\r\n', '2017-11-15 08:05:00', 569, 500);

-- --------------------------------------------------------

--
-- Table structure for table `event_payment_trans_admin`
--

CREATE TABLE `event_payment_trans_admin` (
  `id` int(11) NOT NULL,
  `admin_user_id` int(5) NOT NULL,
  `event_id` varchar(20) NOT NULL,
  `amount_per_month` int(11) NOT NULL,
  `no_of_months` int(11) NOT NULL,
  `total_amount_paid` int(11) NOT NULL,
  `trans_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event_photos`
--

CREATE TABLE `event_photos` (
  `id` int(11) NOT NULL,
  `event_id` varchar(20) NOT NULL,
  `photo_link` text NOT NULL,
  `photo_desc` text NOT NULL,
  `date_upload` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event_reg_trans`
--

CREATE TABLE `event_reg_trans` (
  `trans_id` int(11) NOT NULL,
  `event_id` varchar(20) NOT NULL,
  `trans_date` datetime NOT NULL,
  `initiator_user_id` int(5) NOT NULL,
  `order_slip_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `group_flockers`
--

CREATE TABLE `group_flockers` (
  `id` int(11) NOT NULL,
  `admin_user_id` int(5) NOT NULL,
  `group_name` text NOT NULL,
  `group_description` text NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `group_member`
--

CREATE TABLE `group_member` (
  `id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `user_id` int(5) NOT NULL,
  `date_joined` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `group_message`
--

CREATE TABLE `group_message` (
  `id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `sender_user_id` int(5) NOT NULL,
  `message` text NOT NULL,
  `date_sent` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `interest`
--

CREATE TABLE `interest` (
  `id` tinyint(3) NOT NULL,
  `interest_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interest`
--

INSERT INTO `interest` (`id`, `interest_name`) VALUES
(1, 'Adventures and Outdoors'),
(2, 'Technology'),
(3, 'Health and Wellness'),
(4, 'Photography'),
(5, 'Music'),
(6, 'Food and Drinks'),
(7, 'Dance'),
(8, 'Fashion and Beauty'),
(9, 'Sports'),
(10, 'eSports'),
(11, 'Career and Business'),
(12, 'Pets'),
(13, 'Learning'),
(14, 'Film'),
(15, 'Language and Culture'),
(16, 'Social'),
(17, 'LGBTQ'),
(18, 'Arts');

-- --------------------------------------------------------

--
-- Table structure for table `order_slips`
--

CREATE TABLE `order_slips` (
  `id` int(11) NOT NULL,
  `order_slips_id` varchar(20) NOT NULL,
  `participant_user_id` int(5) NOT NULL,
  `institution_type` text NOT NULL,
  `name_of_institution` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(6) NOT NULL,
  `txnid` varchar(20) NOT NULL,
  `payment_amount` decimal(7,2) NOT NULL,
  `payment_status` varchar(25) NOT NULL,
  `itemid` varchar(25) NOT NULL,
  `createdtime` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `personal_message`
--

CREATE TABLE `personal_message` (
  `id` int(11) NOT NULL,
  `from_user_id` int(5) NOT NULL,
  `to_user_id` int(5) NOT NULL,
  `date_sent` datetime NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `email_add` text NOT NULL,
  `password` text NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `middle_name` varchar(32) NOT NULL,
  `last_name` varchar(16) NOT NULL,
  `mobile_no` varchar(13) NOT NULL,
  `address` text NOT NULL,
  `paypal` text NOT NULL,
  `date_registered` datetime NOT NULL,
  `interests_id` tinyint(3) NOT NULL,
  `pp_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email_add`, `password`, `first_name`, `middle_name`, `last_name`, `mobile_no`, `address`, `paypal`, `date_registered`, `interests_id`, `pp_link`) VALUES
(1, 'jovennovo2015@gmail.com', 'novo', 'joven', 'gutib', 'novo', '+639052317568', 'New Paradise, Pajo, Lapu-lapu City', 'jovennovo2017@gmail.com', '0000-00-00 00:00:00', 0, ''),
(2, 'jm@gmail.com', 'abano', 'jm', 'bonsit', 'abano', '+639233429111', 'Lapu-lapu City', 'jmabano@gmail.com', '0000-00-00 00:00:00', 0, ''),
(3, 'gangstoprn_15@yahoo.com', 'joven', 'novo', 'novo', 'novo', '0983984834', 'LLC', 'gangstoprn_15@yahoo.com', '2017-06-28 00:00:00', 0, ''),
(4, 'jeric@mercado.com', 'mercado', 'jeric joseph', '', 'mercado', '+639050176969', 'LLC', 'pal@paypal.com', '2017-09-02 00:00:00', 0, ''),
(5, 'jeric@mercado.com', '$2y$10$PezZZk9Ek', 'jm', '', 'abano', '+639050176969', 'LLC', 'pal@paypal.com', '2017-09-02 00:00:00', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `id` tinyint(4) NOT NULL,
  `event_id` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`id`, `event_id`, `address`, `latitude`, `longitude`) VALUES
(1, '59badcbce2878', 'Mactan-Cebu International Airport', 10.3107, 123.98),
(2, '59bb98f818f04', 'Lapu-Lapu Airport Road', 10.3195, 123.98),
(3, '59bb9a8bdb256', 'IEC Convention Center Cebu (IC3)', 10.3212, 123.909);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `create_event_trans`
--
ALTER TABLE `create_event_trans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `evaluation`
--
ALTER TABLE `evaluation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `event_id` (`event_id`),
  ADD KEY `event_organizer_user_id` (`event_admin_user_id`),
  ADD KEY `event_sub_category_id` (`interest_id`);

--
-- Indexes for table `event_payment_trans_admin`
--
ALTER TABLE `event_payment_trans_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_photos`
--
ALTER TABLE `event_photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_reg_trans`
--
ALTER TABLE `event_reg_trans`
  ADD PRIMARY KEY (`trans_id`);

--
-- Indexes for table `group_flockers`
--
ALTER TABLE `group_flockers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_member`
--
ALTER TABLE `group_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_message`
--
ALTER TABLE `group_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interest`
--
ALTER TABLE `interest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_slips`
--
ALTER TABLE `order_slips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_message`
--
ALTER TABLE `personal_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_id` (`event_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `create_event_trans`
--
ALTER TABLE `create_event_trans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `evaluation`
--
ALTER TABLE `evaluation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `event_payment_trans_admin`
--
ALTER TABLE `event_payment_trans_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `event_photos`
--
ALTER TABLE `event_photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `event_reg_trans`
--
ALTER TABLE `event_reg_trans`
  MODIFY `trans_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `group_flockers`
--
ALTER TABLE `group_flockers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `group_member`
--
ALTER TABLE `group_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `group_message`
--
ALTER TABLE `group_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `interest`
--
ALTER TABLE `interest`
  MODIFY `id` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `order_slips`
--
ALTER TABLE `order_slips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `personal_message`
--
ALTER TABLE `personal_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `venue`
--
ALTER TABLE `venue`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
