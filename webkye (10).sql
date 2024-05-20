-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2024 at 04:53 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webkye`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `profile` text NOT NULL,
  `name` varchar(266) NOT NULL,
  `email` varchar(266) NOT NULL,
  `designation` varchar(266) NOT NULL,
  `password` text NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `profile`, `name`, `email`, `designation`, `password`, `role`) VALUES
(2, '', '', 'rajansharma.webkye@gmail.com', '', '7496ccc67f8591128e0e6cb496dbe455', 0),
(4, '', '', 'dev@wowevents.in', '', '6357efdbf68e89e78f45fa8e8e4829cc', 0);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `title` varchar(266) NOT NULL,
  `short_desc` text NOT NULL,
  `blog` text NOT NULL,
  `updated_at` datetime NOT NULL,
  `post_by` varchar(266) NOT NULL,
  `banner` text NOT NULL,
  `banner_alt_text` varchar(266) NOT NULL,
  `cover` text NOT NULL,
  `cover_alt_text` varchar(266) NOT NULL,
  `seo_url` varchar(266) NOT NULL,
  `meta_desc` text NOT NULL,
  `meta_keywords` varchar(266) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `timestamp`, `title`, `short_desc`, `blog`, `updated_at`, `post_by`, `banner`, `banner_alt_text`, `cover`, `cover_alt_text`, `seo_url`, `meta_desc`, `meta_keywords`) VALUES
(2, '2024-05-16 17:31:15', 'fvv', 'fsefs fsd s sfse gwet w sd gs gsdg sd gsdg sdg s gsd g s gfgs', '<p>vfvf sdf fs fssd gsdgsfgfg sdf s g sd gs gs g sgs g sdgsg</p>', '0000-00-00 00:00:00', '', '427Article-Page-1.jpg', 'tgbt', '563ferenc-almasi-eYpcLDXHVb0-unsplash.jpg', 'fbg', 'vfvf', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `name` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(266) NOT NULL,
  `subject` varchar(266) NOT NULL,
  `message` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`) VALUES
(2, 'sdfsfs?', 'sfdfsd'),
(3, 'fsdf?', 'fsdfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `title` varchar(266) NOT NULL,
  `subtitle` varchar(266) NOT NULL,
  `short_desc` varchar(266) NOT NULL,
  `long_desc` text NOT NULL,
  `client` varchar(266) NOT NULL,
  `url` text NOT NULL,
  `cat` varchar(266) NOT NULL,
  `cover` text NOT NULL,
  `alt_text` varchar(266) NOT NULL,
  `banner` text NOT NULL,
  `banner_alt_text` varchar(266) NOT NULL,
  `date` date NOT NULL,
  `location` text NOT NULL,
  `seo_url` varchar(266) NOT NULL,
  `meta_title` varchar(266) NOT NULL,
  `meta_keywords` text NOT NULL,
  `meta_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `title`, `subtitle`, `short_desc`, `long_desc`, `client`, `url`, `cat`, `cover`, `alt_text`, `banner`, `banner_alt_text`, `date`, `location`, `seo_url`, `meta_title`, `meta_keywords`, `meta_desc`) VALUES
(3, 'Coming Soon...', 'Stay Tuned', 'N/A', 'N/A', 'N/A', '', 'UI/UX', '6521597728386107-bug.png', 'coming soon cover', '', '', '2024-05-01', 'a:2:{i:0;s:6:\"WEBKYE\";i:1;s:6:\"AGENCY\";}', 'coming-soon-portfolio', '', '', ''),
(7, 'Comming soon..', 'N/A', 'N/A', 'N/A', 'N/A', 'http://localhost/webkye-new/admin/projects', 'graphic', '2071597728386107-bug.png', 'coming soon...', '131682_1597728386107-bug.png', 'banner alt', '2024-05-01', 'delhi', 'COOMMING-SOON', 'demo project', 'sdfs', 'sdfsdfsfs');

-- --------------------------------------------------------

--
-- Table structure for table `project_images`
--

CREATE TABLE `project_images` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `img` text NOT NULL,
  `alt_text` varchar(266) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_images`
--

INSERT INTO `project_images` (`id`, `project_id`, `img`, `alt_text`) VALUES
(19, 3, '319_slide-03.png', 'fdgd'),
(20, 3, '801_Firefly motorola intelligence meets art 21148.jpg', 'dsfsf'),
(21, 6, '662_sunny.jpg', 'ghkg'),
(22, 7, '682_1597728386107-bug.png', 'SFD');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `alt` varchar(266) NOT NULL,
  `heading` varchar(266) NOT NULL,
  `description` text NOT NULL,
  `detail` text NOT NULL,
  `seo_url` text NOT NULL,
  `meta_title` varchar(266) NOT NULL,
  `meta_desc` text NOT NULL,
  `meta_keyword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `img`, `alt`, `heading`, `description`, `detail`, `seo_url`, `meta_title`, `meta_desc`, `meta_keyword`) VALUES
(22, '804-marketing-strategy.jpg', 'Expert Digital Marketing Service: Elevate Your Online Presence with Pro Strategies', 'Digital Marketing ', 'Transform your brand with expert digital marketing strategies.', '', 'digital-marketing-service', '', '', ''),
(23, '996-web-development.jpg', 'Professional Web Development Service: Crafted for Seamless Online Experiences', 'Web Development', 'Enhance your brand\'s online presence with expert web development solutions.', '', 'web-design-&-development-service', 'Professional Web Development Services', '', ''),
(24, '238-ui-ux-designing.jpg', 'Sleek UI/UX Designing: Elevate User Experiences with Intuitive Designs', 'UI/UX Designing', 'Optimize user experiences with top-tier UI/UX design.', '', 'ui-ux-designing-service', 'Expert UI/UX Design & Web Development', '', ''),
(25, '392-graphic-designing.jpg', 'Creative Graphic Designing Service: Transforming Ideas into Stunning Visuals', 'Graphic Designing', 'Enhance brand appeal with expert graphic design solutions.', '', 'graphic-designing-service', '', '', ''),
(26, '280-video-editing.jpg', 'Dynamic Video Editing Service: Transform Your Content with Professional Touches', 'Video Editing', 'Create compelling content with expert video editing.', '', 'video-editing-service', '', '', ''),
(27, '845-seo.jpg', 'Optimize Your Online Presence: Professional SEO Service for Top Search Rankings', 'Search Engine Optimization (SEO)', 'Drive traffic with proven SEO strategies that work.', '', 'search-engine-optimization-seo-service', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(266) NOT NULL,
  `designation` varchar(266) NOT NULL,
  `profile` text NOT NULL,
  `rank` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `designation`, `profile`, `rank`) VALUES
(2, 'Rajan Sharma', 'Web Developer', '180rajan-sharma-webkye.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `name` varchar(266) NOT NULL,
  `country_name` varchar(266) NOT NULL,
  `profile` text NOT NULL,
  `country` varchar(266) NOT NULL,
  `comment` text NOT NULL,
  `project` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `timestamp`, `name`, `country_name`, `profile`, `country`, `comment`, `project`) VALUES
(7, '2024-04-16 15:56:46', 'Marco Capra ', 'USA', '508926client-2.png', '741706united-states-flag-icon.svg ', 'Rajan (webkye) is a user-friendly website developer for designers. Great for showcasing portfolios with beautiful visuals and mobile responsiveness. Recommend for easy & professional online presence.', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_images`
--
ALTER TABLE `project_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `project_images`
--
ALTER TABLE `project_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
