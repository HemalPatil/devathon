-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2016 at 07:51 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `conferences`
--

CREATE TABLE `conferences` (
  `conference_id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `urlname` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `start_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_edited_by` int(10) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conferences`
--

INSERT INTO `conferences` (`conference_id`, `title`, `urlname`, `description`, `start_date`, `end_date`, `last_edited_by`, `timestamp`) VALUES
(5, 'dsgdfg', 'qwerty', 'qwerty 12345', '2016-08-27 18:30:00', '2016-08-30 18:30:00', 1, '2016-08-27 16:20:31'),
(6, 'iiikkjdgtf', 'dwgenkjwIL', 'OOOOOPvdhcf', '2016-08-29 18:30:00', '2016-08-30 18:30:00', 1, '2016-08-28 01:44:37'),
(7, 'Pel paal conference', 'pelpaal', 'Bahut maja aega', '2016-09-11 18:30:00', '2016-09-13 18:30:00', 1, '2016-08-28 03:09:04'),
(8, 'WSDC Demo', 'demolink', 'WSDC Demo\r\n121213', '2016-08-28 18:30:00', '2016-08-30 18:30:00', 1, '2016-08-28 05:27:13');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `content_id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `last_edited_by` int(10) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`content_id`, `title`, `content`, `last_edited_by`, `timestamp`) VALUES
(1, 't1', '<p><strong>Hello world</strong></p>\n<p><em><strong>sdfgh</strong></em></p>', 1, '2016-08-27 23:33:03'),
(2, 'Pel paal content', '<p><strong>Content Line 1</strong></p>\r\n<p><strong>Content Line 2</strong></p>\r\n<p><strong><em>Hello people</em></strong></p>', 1, '2016-08-28 03:42:43'),
(3, 'Content 3', '<p><sup>Maths&nbsp;<sub>is so&nbsp; awesome</sub></sup></p>\r\n<p>&nbsp;</p>\r\n<p><strong style="margin: 0px; padding: 0px; font-family: ''Open Sans'', Arial, sans-serif; font-size: 14px; line-height: 20px; text-align: justify;">Lorem Ipsum</strong><span style="font-family: ''Open Sans'', Arial, sans-serif; font-size: 14px; line-height: 20px; text-align: justify;">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\r\n<p><strong style="margin: 0px; padding: 0px; font-family: ''Open Sans'', Arial, sans-serif; font-size: 14px; line-height: 20px; text-align: justify;">Lorem Ipsum</strong><span style="font-family: ''Open Sans'', Arial, sans-serif; font-size: 14px; line-height: 20px; text-align: justify;">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>', 1, '2016-08-28 03:44:39'),
(4, 'Content 6', '<p style="margin: 15px 0px; color: #444446; font-family: ''Trebuchet MS'', Verdana, Arial, sans-serif; font-size: 13px; line-height: 18px; background-color: #f7f7f9;">??? ???? ? ????? ?????? ?<br />????? ???? ???? ???? ???<br /><br />????? ???? ?????????? ?<br />??? ?????? ??? ?? ????? ???</p>\r\n<p style="margin: 15px 0px; color: #444446; font-family: ''Trebuchet MS'', Verdana, Arial, sans-serif; font-size: 13px; line-height: 18px; background-color: #f7f7f9;">????????? ???? ??? ????? ?<br />??? ??? ????? ?? ???? ???<br /><br />????? ?????? ?????? ?? ????? ?<br />??? ??? ???? ?? ????? ???</p>', 1, '2016-08-28 03:45:13'),
(5, 'Content 24', '<p style="margin: 15px 0px; color: #444446; font-family: ''Trebuchet MS'', Verdana, Arial, sans-serif; font-size: 13px; line-height: 18px; background-color: #f7f7f9;">??? ???? ? ????? ?????? ?<br />????? ???? ???? ???? ???<br /><br />????? ???? ?????????? ?<br />??? ?????? ??? ?? ????? ???</p>\r\n<p style="margin: 15px 0px; color: #444446; font-family: ''Trebuchet MS'', Verdana, Arial, sans-serif; font-size: 13px; line-height: 18px; background-color: #f7f7f9;">????????? ???? ??? ????? ?<br />??? ??? ????? ?? ???? ???<br /><br />????? ?????? ?????? ?? ????? ?<br />??? ??? ???? ?? ????? ???<br /><br />??????? ??? ??? ?????? ?????? ?<br />???? ??? ??? ???? ????? ???<br /><br />??? ??? ??? ???? ?????? ?<br />????????? ?? ??? ?????? ????</p>', 1, '2016-08-28 05:29:50');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'managers', 'Conference Manager'),
(3, 'editor', 'Conference Editor'),
(4, 'user', 'Conference User');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `managers_list`
--

CREATE TABLE `managers_list` (
  `conference_id` int(10) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `managers_list`
--

INSERT INTO `managers_list` (`conference_id`, `userid`) VALUES
(5, 1),
(5, 2),
(6, 5),
(7, 5),
(7, 1),
(8, 5),
(8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `page_id` int(10) NOT NULL,
  `conference_id` int(10) DEFAULT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `last_edited_by` int(10) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `conference_id`, `title`, `description`, `last_edited_by`, `timestamp`) VALUES
(4, 1, 'hfaluih', '54areg9', 1, '2016-08-28 00:43:10'),
(7, 5, 'bfeawbkkb', 'gfdhdoppna', 1, '2016-08-28 00:46:22'),
(8, 5, 'C1 P1', 'qwertyszxcvbn', 1, '2016-08-28 01:11:18'),
(12, 5, 'New page 1', 'Now with extra large textarea', 1, '2016-08-28 01:16:13'),
(13, 5, 'Completely new page', 'Well hello there fellas', 1, '2016-08-28 01:18:21'),
(14, 5, 'uiessh', 'pkbjfd gswagj', 1, '2016-08-28 02:15:43'),
(15, 7, 'Pel paal page', 'Yaha bhi maja aega', 1, '2016-08-28 03:10:35'),
(16, 7, 'Faadu Page', 'Ekdum faaadu wala description', 1, '2016-08-28 03:11:09'),
(17, 7, 'Cheap Thrills', 'Chalo chalo karo radio shuru', 1, '2016-08-28 03:12:48'),
(18, 8, 'Demo page 1', 'Page 1', 1, '2016-08-28 05:27:48'),
(19, 8, 'Demo page 2', 'qwertyuio', 1, '2016-08-28 05:29:22');

-- --------------------------------------------------------

--
-- Table structure for table `pages_contents`
--

CREATE TABLE `pages_contents` (
  `content_id` int(10) NOT NULL,
  `page_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages_contents`
--

INSERT INTO `pages_contents` (`content_id`, `page_id`) VALUES
(2, 15),
(3, 15),
(4, 15),
(3, 18),
(4, 18),
(5, 18);

-- --------------------------------------------------------

--
-- Table structure for table `page_editors`
--

CREATE TABLE `page_editors` (
  `page_id` int(10) NOT NULL,
  `userid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_editors`
--

INSERT INTO `page_editors` (`page_id`, `userid`) VALUES
(12, 1),
(13, 1),
(14, 1),
(14, 4),
(15, 1),
(15, 4),
(16, 1),
(17, 1),
(16, 4),
(18, 4),
(19, 4),
(19, 1);

-- --------------------------------------------------------

--
-- Table structure for table `papers`
--

CREATE TABLE `papers` (
  `paper_id` int(10) NOT NULL,
  `conference_id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `filename` varchar(50) NOT NULL,
  `approved` int(1) NOT NULL COMMENT '1=approved 0=pending 2=rejected',
  `submittedby` int(10) NOT NULL,
  `approvedby` int(10) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `papers`
--

INSERT INTO `papers` (`paper_id`, `conference_id`, `title`, `description`, `filename`, `approved`, `submittedby`, `approvedby`, `timestamp`) VALUES
(6, 5, 'qwerty', 'wery jhgwef', 'user1_conference5.pdf', 2, 1, NULL, '2016-08-27 19:47:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, 'eTx/Wo1Q2RP4vWnZkOHfE.', 1268889823, 1472361884, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(2, '127.0.0.1', 'HemalPatil', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', NULL, 'hempat02@gmail.com', NULL, NULL, NULL, NULL, 1268889823, 1268889823, 1, 'Hemal', 'Patil', 'WSDC', '1234'),
(4, '::1', NULL, '$2y$08$FBogkkSV2YSdOrFznOMi6evIrSSuoDEbadBIDD0rhmOhV2IHtd5ye', NULL, 'jholar@420gali.com', NULL, NULL, NULL, '8kYPmrDqFNZFN8OYNZToje', 1472321071, 1472328057, 1, 'chandu', 'baba', NULL, NULL),
(5, '::1', NULL, '$2y$08$M5biKFchEs3aZ2uZy/2ONuetsS2.hQrfegK5uK.5jDdMKOChr4uTe', NULL, 'def@qwe.com', NULL, NULL, NULL, NULL, 1472321374, 1472321404, 1, 'Yamini', 'Kashyap', NULL, NULL),
(6, '::1', NULL, '$2y$08$gHBOexxTVuWvNZ6YV7XrN.IGCKEYllPHHYc/1on58qiiDPy8A.Hvy', NULL, 'sree@nath.com', NULL, NULL, NULL, NULL, 1472321786, 1472353138, 1, 'Sreerag', 'Sreenath', 'abc', '54713');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(12, 1, 2),
(13, 1, 3),
(14, 1, 4),
(10, 4, 3),
(7, 5, 2),
(11, 6, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `conferences`
--
ALTER TABLE `conferences`
  ADD PRIMARY KEY (`conference_id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`content_id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `papers`
--
ALTER TABLE `papers`
  ADD PRIMARY KEY (`paper_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `conferences`
--
ALTER TABLE `conferences`
  MODIFY `conference_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `content_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `papers`
--
ALTER TABLE `papers`
  MODIFY `paper_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
