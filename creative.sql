-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2021 at 11:13 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `creative`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `image`, `status`) VALUES
(5, 'banner1620629665.8344.png', 1),
(6, 'banner1620629674.9614.png', 1),
(7, 'banner1620629681.6245.png', 1),
(8, 'banner1620629688.4806.png', 1),
(9, 'banner1620629693.4381.png', 1),
(10, 'banner1620629903.0388.png', 1),
(11, 'banner1620629912.2624.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer_count`
--

CREATE TABLE `customer_count` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_count`
--

INSERT INTO `customer_count` (`id`, `name`, `number`, `icon`, `status`) VALUES
(1, 'FEATURE ITEM', 245, 'flaticon-award', 1),
(2, 'ACTIVE PRODUCTS', 345, 'flaticon-like', 1),
(3, 'YEAR EXPERIENCE', 39, 'flaticon-event', 1),
(4, 'OUR CLIENTS', 3000, 'flaticon-woman', 1);

-- --------------------------------------------------------

--
-- Table structure for table `educations`
--

CREATE TABLE `educations` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `progress` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `educations`
--

INSERT INTO `educations` (`id`, `title`, `year`, `progress`, `status`) VALUES
(1, 'PHD of Interaction Design & Animation', '2020', 79, 1),
(2, 'Master of Database Administration', '2018', 86, 1),
(3, 'Bachelor of Computer Engineering', '2016', 90, 1),
(4, 'HSC', '2012', 92, 1);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `summary` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `summary`, `status`) VALUES
(1, 'MD Musab Mahmud', 'md.musabmahmud100@gmail.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.', 2),
(2, 'MD Musab Mahmud', 'md.musabmahmud100@gmail.com', 'sdfasdfafdas sadfasdf', 1),
(3, 'MD', 'md.musab@gmail.com', 'Md.Musab@Gmail.ComMd.Musab@Gmail.Com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `featured_image` varchar(255) NOT NULL,
  `summary` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `title`, `category`, `thumbnail`, `featured_image`, `summary`, `status`) VALUES
(16, 'Dark Heaven', 'Audio', 'thumbnail16.jpg', 'featured_image16.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.', 1),
(17, ' DARK BEAUTY', 'VIDEO', 'thumbnail17.jpg', 'featured_image17.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.', 1),
(18, 'GILROY LIMBO.', 'AUDIO ', 'thumbnail18.jpg', 'featured_image18.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.', 1),
(19, 'IPSUM WHICH', 'DESIGN ', 'thumbnail19.jpg', 'featured_image19.jpg', 'orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.', 1),
(20, 'AGAIN THERE', 'UX/UI ', 'thumbnail20.jpg', 'featured_image20.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.', 1),
(21, 'EIUSMOD TEMPOR', 'CREATIVE', 'thumbnail21.jpg', 'featured_image21.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `summary` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active, 2=deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `name`, `icon`, `summary`, `status`) VALUES
(2, 'CREATIVE DESIGN', 'fab fa-react', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.', 1),
(3, 'Unlimited Features', 'fab fa-free-code-camp', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.', 1),
(4, 'Ultra Responsive', 'fal fa-desktop', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.', 1),
(5, 'Ultra Responsive', 'fal fa-desktop', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.', 1),
(6, ' CREATIVE IDEAS', 'fal fa-edit', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.', 1),
(7, 'Supper Support', 'fal fa-headset', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `logo` varchar(255) DEFAULT 'logo.png',
  `logo_black` varchar(255) NOT NULL,
  `copyright` varchar(255) DEFAULT NULL,
  `about` text DEFAULT NULL,
  `tagline` varchar(255) DEFAULT NULL,
  `office_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo`, `logo_black`, `copyright`, `about`, `tagline`, `office_address`, `email`, `phone`) VALUES
(1, 'logo0.png', 'logo_black0.png', 'musab', '<p><cite>Musab </cite>ipsum dolor sit amet, consectetur adipisicing elit. Rerum, sed repudiandae odit deserunt, quas quibusdam necessitatibus nesciunt eligendi esse sit non reprehenderit quisquam <em>asperiores </em><strong>maxime blanditiis culpa vitae velit. Numquam!</strong></p>\r\n', 'professional web developer with long time experience in this field​.', '103 agamasilane, Bangshal', 'md.musabmahmud100@gmail.com', '01630858100');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `name`, `icon`, `link`, `status`) VALUES
(6, 'Whatsapp', 'fab fa-twitter', 'https://www.twitter.com', 'active'),
(7, 'Whatsapp', 'fab fa-whatsapp', 'https://www.whatsapp.com', 'active'),
(8, 'viber', 'fab fa-viber', 'https://www.viber.com', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quotes` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `image`, `quotes`, `position`, `status`) VALUES
(1, 'MD Musab Mahmud', 'testimonial1.jpg', 'An event is a message sent by an object to signal the occur rence of an action. The action can causd user interaction such as a button click, or it can result', 'head of department', 1),
(2, 'MD Musab Mahmud', 'testimonial2.jpg', 'An event is a message sent by an object to signal the occur rence of an action. The action can causd user interaction such as a button click, or it can result', 'head of department', 1),
(3, 'MD Musab Mahmud', 'testimonial3.jpg', 'An event is a message sent by an object to signal the occur rence of an action. The action can causd user interaction such as a button click, or it can result', 'head of department', 1),
(4, 'MD Musab Mahmud', 'testimonial4.jpg', 'An event is a message sent by an object to signal the occur rence of an action. The action can causd user interaction such as a button click, or it can result', 'head of department', 1),
(5, 'MD Musab Mahmud', 'testimonial5.jpg', 'An event is a message sent by an object to signal the occur rence of an action. The action can causd user interaction such as a button click, or it can result', 'head of department', 1),
(6, 'MD Musab Mahmud', 'testimonial6.jpg', 'An event is a message sent by an object to signal the occur rence of an action. The action can causd user interaction such as a button click, or it can result', 'head of department', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `profile_image` varchar(255) NOT NULL DEFAULT 'avatar.jpg',
  `status` int(11) NOT NULL DEFAULT 1 COMMENT 'active = 1\r\ninactive = 2',
  `role` int(11) NOT NULL DEFAULT 1 COMMENT 'user = 1\r\nadmin = 2\r\nemployee = 3'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `profile_image`, `status`, `role`) VALUES
(1, 'MD MUSAB MAHMUD', 'musab', 'md.musabmahmud100@gmail.com', 'md.musabmahmud100@gmail.com', '1.jpg', 1, 2),
(3, 'Sinmim', 'sadiaislam@gmail.com', 'sinmim', 'sadiaislam@gmail.com', 'avatar.jpg', 1, 1),
(4, 'Sadia', 'sadia@gmail.com', 'sadia', 'sadia@gmail.com', 'avatar.jpg', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_count`
--
ALTER TABLE `customer_count`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `educations`
--
ALTER TABLE `educations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `customer_count`
--
ALTER TABLE `customer_count`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `educations`
--
ALTER TABLE `educations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
