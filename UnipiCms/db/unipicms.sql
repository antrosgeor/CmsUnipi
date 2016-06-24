-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2015 at 04:14 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `unipicms`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `date` date NOT NULL,
  `marked` varchar(10) NOT NULL DEFAULT 'unread'
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `phone`, `message`, `date`, `marked`) VALUES
(5, 'antreas georgiou', 'antreas@hotmail.gr', '6985042561', 'This method of authentication is a type of multi-factor authentication and is providing an additional layer of security due to the fact that an attacker is unlikely to be able to supply both factors required for access. Many websites support two-factor authentication nowadays, including PayPal, Facebook, eBay, Yahoo and many others.', '2015-10-01', 'read'),
(6, 'fasoulas thanasis', 'thanasis@gmail.com', '6984596540', 'Each user who wants to enable two-factor authentication will have to download the Google authenticator mobile app. After that, the mobile app needs to be connected to your website, which can be done either via the secret code or the QR code. In other words, the website will have to generate a different secret code for each user and store it in the database. First, we will use Composer to install the PHP package, which will be used for secret code generation', '2015-10-01', 'read'),
(10, 'georgios naoum ', 'georgios@naoum.gr', '6909090909', '. Many websites support two-factor authentication nowadays, including PayPal, Facebook, eBay, Yahoo and many others.', '2015-11-03', 'unread'),
(11, 'stamati pavloy ', 'stamatis@pavlou.gr', '6999993392', 'After that, the mobile app needs to be connected to your website, which can be done either via the secret code or the QR code. In other words, the website will have to generate a different secret code for each user and store it in the database. First, we will use Composer to install the PHP package, which will be used for secret code generation', '2015-11-03', 'unread');

-- --------------------------------------------------------

--
-- Table structure for table `navigation`
--

CREATE TABLE IF NOT EXISTS `navigation` (
`id` mediumint(9) NOT NULL,
  `label` varchar(300) NOT NULL,
  `url` varchar(300) NOT NULL,
  `target` varchar(30) NOT NULL,
  `position` int(3) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `navigation`
--

INSERT INTO `navigation` (`id`, `label`, `url`, `target`, `position`, `status`) VALUES
(1, 'Home ', 'home', '', 0, 1),
(2, 'About', 'about', '', 1, 1),
(4, 'Contact', 'contact', '', 3, 1),
(11, 'News', 'news', '', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
`id` int(11) NOT NULL,
  `title` varchar(400) NOT NULL,
  `date` date NOT NULL,
  `author` int(100) NOT NULL,
  `body` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `date`, `author`, `body`) VALUES
(1, 'Android Material Design Floating Labels for ', '2015-11-03', 1, '<p>Android floating labels were introduced in android design support library to display a floating label over EditText. Initially it acts as hint in EditText when the field is empty. When user start inputting the text, it starts animating by moving to floating label position.This article demonstrates the usage of floating labels with a simple form validation example.</p>'),
(2, 'Android Integrating Google Analytics V4', '2015-11-03', 11, '<p>Have you ever wondered how to track your android user activity in real time? If yes, well here is the solution you are looking for. User activity tracking can be done using any good analytics tool. There are lot of tools out there like Mixpanel, Flurry etc., to track the user activity in real time but none of them are totally free. Google analytics is a powerful service which comes with great features like real time user count, event tracking, geo tracking, error &amp; crash reporting and lot more and yet it is completely free.</p>'),
(3, 'Android Swipe Down to Refresh ListView Tutorial', '2015-11-03', 11, '<p>You might have noticed that lot of android apps like Twitter, Google+ provides an option to swipe / pull down to refresh it&beta;??s content. Whenever user swipes down from top, a loader will be shown and will disappear once the new content is loaded. In this tutorial we are going to learn how to provide the same option to your apps too. Previously we used to implement a custom swipe view to detect the swipe down. But android made our day easier by introducing SwipeRefreshLayout in android.support.v4 to detect the vertical swipe on any view.</p>'),
(10, 'Slim PHP', '2014-12-02', 1, '<p>Instead of start developing a fresh REST framework from scratch, it is better go with a already proven framework. Then I came across Slim framework and selected it for the following reasons.</p>\r\n<p><strong>1</strong>. It is very light weight, clean and a beginner can easily understand the framework.<br /><strong>2</strong>. Supports all HTTP methods GET, POST, PUT and DELETE which are necessary for a REST API.<br /><strong>3</strong>. More importantly it provides a middle layer architecture which will be useful to filter the requests. In our case we can use it for verifying the API Key.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
`id` mediumint(9) NOT NULL,
  `user` mediumint(9) NOT NULL,
  `type` int(11) NOT NULL,
  `slug` varchar(300) NOT NULL,
  `label` varchar(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `header` varchar(300) NOT NULL,
  `body` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `user`, `type`, `slug`, `label`, `title`, `header`, `body`) VALUES
(1, 1, 1, 'home', 'Home ', 'Home', 'Welcome to Unipi Cms', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et lobortis augue, nec scelerisque elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed commodo aliquam venenatis. Maecenas maximus maximus ipsum vitae aliquam. Ut porta ac ipsum ac iaculis. Donec non dolor nec justo consequat aliquet quis eu eros. Sed tristique purus eu dictum laoreet. Nulla vel mattis nisi. Nullam in vehicula neque. Donec porttitor erat ut lectus dictum cursus.In id elementum ipsum. Cras pulvinar purus ut sem vulputate interdum. Aliquam erat volutpat. Pellentesque sit amet convallis eros. Donec tincidunt massa erat, ut suscipit nunc pellentesque ut. Vivamus non augue eget nulla bibendum placerat ac in lorem. Nunc id ligula eu magna laoreet aliquet a at purus. Sed mattis pulvinar tellus pellentesque tristique. Duis ac lacus congue, blandit dolor non, imperdiet nisl. Proin id fringilla leo.Cras in ultricies nisi, a feugiat risus. Pellentesque tincidunt ullamcorper est faucibus vulputate. Proin euismod imperdiet lobortis. Sed vulputate sapien in urna lobortis, eget scelerisque dolor tincidunt. In aliquet lacus eu velit vulputate, at tincidunt tortor mollis. Quisque lacinia tincidunt dolor. Morbi convallis augue sed interdum rhoncus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>'),
(2, 1, 1, 'about', 'About', 'About Us', 'About Unipi Cms', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et lobortis augue, nec scelerisque elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed commodo aliquam venenatis. Maecenas maximus maximus ipsum vitae aliquam. Ut porta ac ipsum ac iaculis. Donec non dolor nec justo consequat aliquet quis eu eros. Sed tristique purus eu dictum laoreet. Nulla vel mattis nisi. Nullam in vehicula neque. Donec porttitor erat ut lectus dictum cursus.In id elementum ipsum. Cras pulvinar purus ut sem vulputate interdum. Aliquam erat volutpat. Pellentesque sit amet convallis eros. Donec tincidunt massa erat, ut suscipit nunc pellentesque ut. Vivamus non augue eget nulla bibendum placerat ac in lorem. Nunc id ligula eu magna laoreet aliquet a at purus. Sed mattis pulvinar tellus pellentesque tristique. Duis ac lacus congue, blandit dolor non, imperdiet nisl. Proin id fringilla leo.Cras in ultricies nisi, a feugiat risus. Pellentesque tincidunt ullamcorper est faucibus vulputate. Proin euismod imperdiet lobortis. Sed vulputate sapien in urna lobortis, eget scelerisque dolor tincidunt. In aliquet lacus eu velit vulputate, at tincidunt tortor mollis. Quisque lacinia tincidunt dolor. Morbi convallis augue sed interdum rhoncus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>'),
(4, 1, 1, 'contact', 'Contact', 'Contact', '', ''),
(11, 11, 3, 'news', 'News', 'News', 'News', '<p>Have you ever wondered how to track your android user activity in real time? If yes, well here is the solution you are looking for. User activity tracking can be done using any good analytics tool.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` varchar(200) NOT NULL,
  `label` varchar(200) NOT NULL,
  `value` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `label`, `value`) VALUES
('debug-status', 'Debug Status', '0'),
('parallax-status', 'Parallax Scrolling', '1'),
('posts_per_page', 'Posts Per Page', '4'),
('site-title', 'Site Title', 'Unipi Cms 2.0');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
`id` mediumint(9) NOT NULL,
  `label` varchar(150) NOT NULL,
  `name` varchar(150) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `label`, `name`, `status`) VALUES
(1, 'Pages', 'page', 1),
(2, 'Sidebar', 'sidebar', 1),
(3, 'news', 'news', 1);

-- --------------------------------------------------------

--
-- Table structure for table `updated`
--

CREATE TABLE IF NOT EXISTS `updated` (
  `type` varchar(100) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `updated`
--

INSERT INTO `updated` (`type`, `date`) VALUES
('navigation', '2015-11-02 13:59:12'),
('news', '2015-11-03 16:43:29'),
('pages', '2015-11-02 13:59:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` mediumint(9) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `first` varchar(200) NOT NULL,
  `last` varchar(200) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `avatar`, `first`, `last`, `email`, `password`, `status`) VALUES
(1, '', 'Thanasis ', 'Fasoulas', 'thanasis@hotmail.gr', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1),
(11, '', 'Antreas', 'Georgiou', 'antreas@hotmail.gr', '7c3c5fb8d955307f1898f9e57f9deaad5869abcd', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navigation`
--
ALTER TABLE `navigation`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
 ADD PRIMARY KEY (`id`), ADD KEY `user` (`user`), ADD KEY `type` (`type`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `updated`
--
ALTER TABLE `updated`
 ADD PRIMARY KEY (`type`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `navigation`
--
ALTER TABLE `navigation`
MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
