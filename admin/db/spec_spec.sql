-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: May 22, 2018 at 01:42 AM
-- Server version: 10.1.31-MariaDB-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spec_spec`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE IF NOT EXISTS `address` (
  `address_id` int(11) NOT NULL AUTO_INCREMENT,
  `head_office_ph_num` varchar(200) NOT NULL,
  `head_office_email` varchar(200) NOT NULL,
  `head_office_location` varchar(200) NOT NULL,
  `branch_office_ph_num` varchar(200) NOT NULL,
  `branch_office_email` varchar(200) NOT NULL,
  `branch_office_location` varchar(200) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT '0',
  `deleted_by` int(11) NOT NULL,
  `deleted_on` datetime NOT NULL,
  `is_updated` int(1) NOT NULL DEFAULT '0',
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL,
  PRIMARY KEY (`address_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`address_id`, `head_office_ph_num`, `head_office_email`, `head_office_location`, `branch_office_ph_num`, `branch_office_email`, `branch_office_location`, `created_by`, `created_on`, `is_deleted`, `deleted_by`, `deleted_on`, `is_updated`, `updated_by`, `updated_on`) VALUES
(1, '01711576419        ', 'spec@gmail.com  ', 'Ka/71, Khapara Khilkhet, Dhaka 1219', '01923752123 ', 'info.specbf01@gmail.com    ', ' AlokaNodi Bangla Complex (4th floor) 4 No Rambabu road, Mymensingh', 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 1, 1, '2018-05-17 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `all_products`
--

CREATE TABLE IF NOT EXISTS `all_products` (
  `products_no` int(11) NOT NULL AUTO_INCREMENT,
  `products_name` varchar(255) NOT NULL,
  `short_details` varchar(255) NOT NULL,
  `full_details` text NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `is_show_home` int(11) NOT NULL DEFAULT '0',
  `is_show_menu` int(11) NOT NULL DEFAULT '0',
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT '0',
  `deleted_on` datetime NOT NULL,
  `deleted_by` int(11) NOT NULL,
  `is_updated` int(1) NOT NULL DEFAULT '0',
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL,
  PRIMARY KEY (`products_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `all_products`
--

INSERT INTO `all_products` (`products_no`, `products_name`, `short_details`, `full_details`, `image_url`, `is_show_home`, `is_show_menu`, `created_by`, `created_on`, `is_deleted`, `deleted_on`, `deleted_by`, `is_updated`, `updated_by`, `updated_on`) VALUES
(2, 'Transformer', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one ', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham. asdfghjk.', '1526591946Generator.jpg', 1, 1, 1, '2018-05-16 17:03:42', 0, '0000-00-00 00:00:00', 0, 1, 13, '2018-05-21 16:39:00'),
(3, 'Switch Gear', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one ', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '1526483308fatak.jpg', 1, 1, 1, '2018-05-16 17:08:28', 0, '0000-00-00 00:00:00', 0, 1, 13, '2018-05-21 16:38:31'),
(4, 'PFI Plant', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one ', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '1526484785fuji-plc-programming.jpg', 1, 1, 1, '2018-05-16 17:33:05', 0, '0000-00-00 00:00:00', 0, 0, 0, '0000-00-00 00:00:00'),
(5, 'ahlhla', 'lahghgl', 'lahghgl', 'No .jpg', 0, 0, 0, '2018-05-17 22:32:42', 1, '2018-05-17 23:11:50', 13, 0, 0, '0000-00-00 00:00:00'),
(6, 'Substation', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one ', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '1526935287hero-slide-2.jpg', 1, 1, 13, '2018-05-21 16:41:27', 0, '0000-00-00 00:00:00', 0, 0, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE IF NOT EXISTS `contact_us` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `message` text NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT '0',
  `deleted_by` int(11) NOT NULL,
  `deleted_on` datetime NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`contact_id`, `message`, `name`, `email`, `phone`, `is_deleted`, `deleted_by`, `deleted_on`) VALUES
(1, ' Hi!\r\nI am Shahadat. \r\nThis is a Test Message to SPEC.COM.BD', 'Shahadat Hossain', ' shahadat@bdsoft.biz', ' 01682961926', 0, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `few_words`
--

CREATE TABLE IF NOT EXISTS `few_words` (
  `few_words_id` int(11) NOT NULL AUTO_INCREMENT,
  `few_words1` text NOT NULL,
  `few_words2` text NOT NULL,
  `company_details1` text NOT NULL,
  `company_details2` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `is_updated` int(1) NOT NULL DEFAULT '0',
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL,
  PRIMARY KEY (`few_words_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `few_words`
--

INSERT INTO `few_words` (`few_words_id`, `few_words1`, `few_words2`, `company_details1`, `company_details2`, `created_by`, `created_on`, `is_updated`, `updated_by`, `updated_on`) VALUES
(1, 'Appropriately benchmark bricks-and-clicks e-business before parallel communities. Completely synergize exceptional outsourcing with principle-centered platforms. Credibly unleash synergistic internal or "organic" sources without functionalized technology. Objectively brand granular human capital without goal-oriented e-business. Competently predominate multifunctional web-readiness via state of the art strategic theme areas.', 'Completely pontificate timely metrics rather than accurate growth strategies. Seamlessly impact premium communities whereas real-time networks. Professionally transform high-payoff collaboration and idea-sharing before resource maximizing supply chains. Energistically evisculate timely manufactured products for resource-leveling ROI. Assertively create client-focused vortals whereas functional potentialities.', 'Whereas 2.0 ideas. Energistically expedites frictionless infrastructures without user-friendly quality vectors. Distinctively communicate customer directed content for leading-edge web-readiness. Professionally fabricate technically sound mindshare before emerging paradigms. Efficiently e-enable vertical benefits after intermandated vortals.', 'Enthusiastically innovate one-to-one technology through user-centric architectures. Dynamically whiteboard global processes with compelling interfaces. Globally empower ubiquitous growth strategies vis-a-vis cross-unit alignments. Collaboratively evisculate client-focused niches with impactful alignments.', 0, '0000-00-00 00:00:00', 1, 1, '2018-05-10 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `footer_details`
--

CREATE TABLE IF NOT EXISTS `footer_details` (
  `footer_details_id` int(11) NOT NULL AUTO_INCREMENT,
  `f_details1` text NOT NULL,
  `f_details2` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `is_updated` int(1) NOT NULL DEFAULT '0',
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL,
  PRIMARY KEY (`footer_details_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `footer_details`
--

INSERT INTO `footer_details` (`footer_details_id`, `f_details1`, `f_details2`, `created_by`, `created_on`, `is_updated`, `updated_by`, `updated_on`) VALUES
(1, 'Continually matrix cross-functional opportunities whereas ethical information. Compellingly streamline enabled human capital before resource-leveling internal or "organic".', 'Distinctively expedite viral materials rather than out-of-the-box solutions. Credibly empower revolutionary ROI rather than unique products. Collaboratively maximize principle-centered ideas before highly efficient data. Phosfluorescently.', 0, '0000-00-00 00:00:00', 1, 1, '2018-05-09 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `footer_social_icon_link`
--

CREATE TABLE IF NOT EXISTS `footer_social_icon_link` (
  `footer_social_icon_link_id` int(11) NOT NULL AUTO_INCREMENT,
  `fb_icon_link` text NOT NULL,
  `twitter_icon_link` text NOT NULL,
  `google_icon_link` text NOT NULL,
  `youtube_icon_link` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` int(11) NOT NULL,
  `is_updated` int(1) NOT NULL DEFAULT '0',
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL,
  PRIMARY KEY (`footer_social_icon_link_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `footer_social_icon_link`
--

INSERT INTO `footer_social_icon_link` (`footer_social_icon_link_id`, `fb_icon_link`, `twitter_icon_link`, `google_icon_link`, `youtube_icon_link`, `created_by`, `created_on`, `is_updated`, `updated_by`, `updated_on`) VALUES
(1, 'https://www.facebook.com/', 'https://www.twitter.com/', 'https://plus.google.com/', 'https://www.linkedin.com/', 0, 0, 1, 1, '2018-05-09 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE IF NOT EXISTS `logo` (
  `logo_id` int(11) NOT NULL AUTO_INCREMENT,
  `image_url` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `is_updated` int(1) DEFAULT '0',
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL,
  PRIMARY KEY (`logo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`logo_id`, `image_url`, `created_by`, `created_on`, `is_updated`, `updated_by`, `updated_on`) VALUES
(1, '1525855476logo-client-2.jpg', 0, '0000-00-00 00:00:00', 1, 1, '2018-05-09 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `maiden_speach`
--

CREATE TABLE IF NOT EXISTS `maiden_speach` (
  `maiden_speach_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `speach_details` text NOT NULL,
  `short_details` varchar(1050) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `is_active` int(1) NOT NULL DEFAULT '1',
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT '0',
  `deleted_by` int(11) NOT NULL,
  `deleted_on` datetime NOT NULL,
  `is_updated` int(1) NOT NULL DEFAULT '0',
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL,
  PRIMARY KEY (`maiden_speach_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `maiden_speach`
--

INSERT INTO `maiden_speach` (`maiden_speach_id`, `title`, `name`, `speach_details`, `short_details`, `image_url`, `is_active`, `created_by`, `created_on`, `is_deleted`, `deleted_by`, `deleted_on`, `is_updated`, `updated_by`, `updated_on`) VALUES
(1, 'Chairman Speach', 'Syed Mahmud Hossain', 'We Import Generator from various countries like that India, China and UK.We Import Generator from various countries like that India, China and UK. We Import Generator from various We Import Generator from various countries like that India, China and UK.We Import Generator from various countries like that India, China and UK.We Import Generator from various countries like that India, China and UK. We Import Generator from various We Import Generator from various countries like that India, China and UK.We Import Generator from various countries like that India, China and UK.We Import Generator from various countries like that India, China and UK. We Import Generator from various We Import Generator from various countries like that India, China and UK. We Import Generator from various countries like that India, China and UK.We Import Generator from various countries like that India, China and UK. We Import Generator from various We Import Generator from various countries like that India, China and UK. We Import Generator from various countries like that India, China and UK.We Import Generator from various countries like that India, China and UK. We Import Generator from various We Import Generator from various countries like that India, China and UK.We Import Generator from various countries like that India, China and UK.We Import Generator from various countries like that India, China and UK. We Import Generator from various We Import Generator from various countries like that India, China and UK.We Import Generator from various countries like that India, China and UK.We Import Generator from various countries like that India, China and UK. We Import Generator from various We Import Generator from various countries like that India, China and UK. We Import Generator from various countries like that India, China and UK.We Import Generator from various countries like that India, China and UK. We Import Generator from various We Import Generator from various countries like that India, China and UK. We Import Generator from various countries like that India, China and UK.We Import Generator from various countries like that India, China and UK. We Import Generator from various We Import Generator from various countries like that India, China and UK.We Import Generator from various countries like that India, China and UK.We Import Generator from various countries like that India, China and UK. We Import Generator from various We Import Generator from various countries like that India, China and UK.We Import Generator from various countries like that India, China and UK.We Import Generator from various countries like that India, China and UK. We Import Generator from various We Import Generator from various countries like that India, China and UK. We Import Generator from various countries like that India, China and UK.We Import Generator from various countries like that India, China and UK. We Import Generator from various We Import Generator from various countries like that India, China and UK.', 'We Import Generator from various countries like that India, China and UK.We Import Generator from various countries like that India, China and UK. We Import Generator from various We Import Generator from various countries like that India, China and UK.We Import Generator from various countries like that India, China and UK.We Import Generator from various countries like that India, China and UK. We Import Generator from various We Import Generator from various countries like that India, China and UK.We Import Generator from various countries like that India, China and UK.We Import Generator from various countries like that India, China and UK. We Import Generator from various We Import Generator from various countries like that India, China and UK. We Import Generator from various countries like that India, China and UK.We Import Generator from various countries like that India, China and UK. We Import Generator from various We Import Generator from various countries like that India, China and UK. We Import Generator from various cou', '1526278582chairman.jpg', 1, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 1, 1, '2018-05-18 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `map`
--

CREATE TABLE IF NOT EXISTS `map` (
  `map_id` int(11) NOT NULL AUTO_INCREMENT,
  `map_url` text NOT NULL,
  `is_updated` int(1) NOT NULL DEFAULT '0',
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL,
  `is_deleted` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL,
  `deleted_on` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  PRIMARY KEY (`map_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `map`
--

INSERT INTO `map` (`map_id`, `map_url`, `is_updated`, `updated_by`, `updated_on`, `is_deleted`, `deleted_by`, `deleted_on`, `created_by`, `created_on`) VALUES
(1, 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7299.075846691156!2d90.419883!3d23.835025!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c6679117010b%3A0x94087c9e13ba21f0!2sKha+Para+Road%2C+Dhaka!5e0!3m2!1sen!2sbd!4v1525891069026', 1, 1, '2018-05-09 00:00:00', 0, 0, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `our_clients`
--

CREATE TABLE IF NOT EXISTS `our_clients` (
  `our_clients_id` int(11) NOT NULL AUTO_INCREMENT,
  `image_url` varchar(250) NOT NULL,
  `is_updated` int(1) NOT NULL DEFAULT '0',
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT '0',
  `deleted_by` int(11) NOT NULL,
  `deleted_on` datetime NOT NULL,
  `created_on` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  PRIMARY KEY (`our_clients_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `our_clients`
--

INSERT INTO `our_clients` (`our_clients_id`, `image_url`, `is_updated`, `updated_by`, `updated_on`, `is_deleted`, `deleted_by`, `deleted_on`, `created_on`, `created_by`) VALUES
(3, '1525949799logo-client-1.jpg', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '2018-05-10 00:00:00', 1),
(4, '1525949853logo-client-1.jpg', 0, 0, '0000-00-00 00:00:00', 1, 13, '2018-05-10 00:00:00', '2018-05-10 00:00:00', 13),
(5, '1525949904logo-client-2.jpg', 1, 13, '2018-05-10 00:00:00', 0, 0, '0000-00-00 00:00:00', '2018-05-10 00:00:00', 13),
(6, '1525949928logo-client-3.jpg', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '2018-05-10 00:00:00', 13),
(7, '1525949938logo-client-3.png', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '2018-05-10 00:00:00', 13),
(8, '1525949946logo-client-4.jpg', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '2018-05-10 00:00:00', 13),
(9, '1525949957partner-logo-3.jpg', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '2018-05-10 00:00:00', 13),
(10, '1525949967partner-logo-4.jpg', 0, 0, '0000-00-00 00:00:00', 1, 13, '2018-05-10 00:00:00', '2018-05-10 00:00:00', 13),
(11, '1526484935address.png', 0, 0, '0000-00-00 00:00:00', 1, 1, '2018-05-17 00:00:00', '2018-05-16 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `our_products`
--

CREATE TABLE IF NOT EXISTS `our_products` (
  `our_products_id` int(11) NOT NULL AUTO_INCREMENT,
  `products_name` varchar(100) NOT NULL,
  `products_details` text NOT NULL,
  `short_details` varchar(250) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `is_active` int(1) NOT NULL DEFAULT '1',
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT '0',
  `deleted_by` int(11) NOT NULL,
  `deleted_on` datetime NOT NULL,
  `is_updated` int(1) NOT NULL DEFAULT '0',
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL,
  PRIMARY KEY (`our_products_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `our_products`
--

INSERT INTO `our_products` (`our_products_id`, `products_name`, `products_details`, `short_details`, `image_url`, `is_active`, `created_by`, `created_on`, `is_deleted`, `deleted_by`, `deleted_on`, `is_updated`, `updated_by`, `updated_on`) VALUES
(1, 'Emergency', '\r\nMost hospitals provide emergency care for traumas and other serious conditions. Emergency room staffs are prepared to provide triage and stabilize patients until they can be moved to a room or treated and released \r\n\r\n', '\r\nMost hospitals provide emergency care for traumas and other serious conditions. Emergency room staffs are prepared to provide triage and stabilize patients until they can be moved to a room or treated and released \r\n\r\n', '1523022760emergency.jpg', 1, 0, '0000-00-00 00:00:00', 1, 1, '2018-05-12 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(2, 'Title', 'Details', 'Read More', '15230233683.png', 1, 0, '0000-00-00 00:00:00', 1, 1, '2018-04-06 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(3, 'vbnjmk', 'cvbhjnmkxcvbnjm', 'cvbhjnmkxcvbnjm', '1526144240hero-slide-6.jpg', 1, 1, '2018-05-12 00:00:00', 1, 1, '2018-05-12 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(4, 'Substation', 'Generators are used for the generation of electricity and they ensure that most of the essential appliances can be run whenever there is a power outage. Generators of different wattage capacities can be used according to the needs of the individual. The choice of buying the right type of generator depends upon a number of factors like the wattage capacity, voltage ratings, fuel type, fuel efficiency, noise level, portability and price – a prudent choice can only be made if you knew what to look for. Stand By – Standby generators provide backup power in homes and offices and are permanently installed outside the house or office building. They are plugged into the electric circuits or home wiring. – The unit turns itself on and off automatically. They can automatically detect disruption in the usual electric supply and begin supplying power within a few seconds. – Propane and natural gas offer a safe, long-term fuel supply and are more environment friendly than gasoline or diesel fuels. – Like any motor, a generator motor creates quite a bit of heat and needs a cooling system to prevent overheating. Standby generators can be either air-cooled or liquid-cooled. The major difference is that air-cooled systems are louder and not quite as effective. Liquid cooled systems are quieter and more dependable – and also more expensive to purchase and to maintain. Portable – Portable generators are usually used in places where there is no power supply such as construction sites, camps, etc. These generators are sufficient to run appliances like televisions, refrigerators, sump pumps and furnaces. – Portable systems are wheeled units that require to roll the generator outside, start it up, and hook it up to a power inlet box Portable generators supply electricity to selected appliances through extension cords. – They are fueled by gasoline, which can be difficult to store and transport during a blackout. Carbon monoxide is always a concern in the safe use of portable generators. – They are designed to be used for short periods of time only a few hours at a stretch. As a result, they tend to be much smaller and less expensive. A related aspect of generator motors is the speed at which they run, as measured in RPMs. Generators made for the US market operate at one of two speeds: 1800 RPM or 3600 RPM. 1800 RPM motors will last longer and run quieter; 3600 RPM motors are smaller and lighter .', 'Generators are used for the generation of electricity and they ensure that most of the essential appliances can be run whenever there is a power outage. Generators of different wattage capacities can be used according to the needs of the individual. ', '1526144429hero-slide-2.jpg', 1, 1, '2018-05-12 00:00:00', 0, 0, '0000-00-00 00:00:00', 1, 1, '2018-05-12 00:00:00'),
(5, 'Transformer', 'Generators are used for the generation of electricity and they ensure that most of the essential appliances can be run whenever there is a power outage. Generators of different wattage capacities can be used according to the needs of the individual. The choice of buying the right type of generator depends upon a number of factors like the wattage capacity, voltage ratings, fuel type, fuel efficiency, noise level, portability and price – a prudent choice can only be made if you knew what to look for. Portable – Portable generators are usually used in places where there is no power supply such as construction sites, camps, etc. These generators are sufficient to run appliances like televisions, refrigerators, sump pumps and furnaces. – Portable systems are wheeled units that require to roll the generator outside, start it up, and hook it up to a power inlet box Portable generators supply electricity to selected appliances through extension cords. – They are fueled by gasoline, which can be difficult to store and transport during a blackout. Carbon monoxide is always a concern in the safe use of portable generators. – They are designed to be used for short periods of time only a few hours at a stretch. As a result, they tend to be much smaller and less expensive. Portable – Portable generators are usually used in places where there is no power supply such as construction sites, camps, etc. These generators are sufficient to run appliances like televisions, refrigerators, sump pumps and furnaces. – Portable systems are wheeled units that require to roll the generator outside, start it up, and hook it up to a power inlet box Portable generators supply electricity to selected appliances through extension cords. – They are fueled by gasoline, which can be difficult to store and transport during a blackout. Carbon monoxide is always a concern in the safe use of portable generators. – They are designed to be used for short periods of time only a few hours at a stretch. As a result, they tend to be much smaller and less expensive.', 'Generators are used for the generation of electricity and they ensure that most of the essential appliances can be run whenever there is a power outage. Generators of different wattage capacities can be used according to the needs of the individual. ', '1526145430hero-slide-10.jpg', 1, 1, '2018-05-12 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(6, 'Switch Gear', 'Stand By – Standby generators provide backup power in homes and offices and are permanently installed outside the house or office building. They are plugged into the electric circuits or home wiring. – The unit turns itself on and off automatically. They can automatically detect disruption in the usual electric supply and begin supplying power within a few seconds. – Propane and natural gas offer a safe, long-term fuel supply and are more environment friendly than gasoline or diesel fuels. – Like any motor, a generator motor creates quite a bit of heat and needs a cooling system to prevent overheating. Standby generators can be either air-cooled or liquid-cooled. Portable – Portable generators are usually used in places where there is no power supply such as construction sites, camps, etc. These generators are sufficient to run appliances like televisions, refrigerators, sump pumps and furnaces. – Portable systems are wheeled units that require to roll the generator outside, start it up, and hook it up to a power inlet box Portable generators supply electricity to selected appliances through extension cords.', 'Stand By – Standby generators provide backup power in homes and offices and are permanently installed outside the house or office building. They are plugged into the electric circuits or home wiring. – The unit turns itself on and off automatically. ', '1526146060hero-slide-8.jpg', 1, 1, '2018-05-12 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(7, 'PFI Plant', 'Generators are used for the generation of electricity and they ensure that most of the essential appliances can be run whenever there is a power outage. Generators of different wattage capacities can be used according to the needs of the individual. The choice of buying the right type of generator depends upon a number of factors like the wattage capacity, voltage ratings, fuel type, fuel efficiency, noise level, portability and price – a prudent choice can only be made if you knew what to look for. Portable – Portable generators are usually used in places where there is no power supply such as construction sites, camps, etc. These generators are sufficient to run appliances like televisions, refrigerators, sump pumps and furnaces. – Portable systems are wheeled units that require to roll the generator outside, start it up, and hook it up to a power inlet box Portable generators supply electricity to selected appliances through extension cords. – They are fueled by gasoline, which can be difficult to store and transport during a blackout. Carbon monoxide is always a concern in the safe use of portable generators. – They are designed to be used for short periods of time only a few hours at a stretch. As a result, they tend to be much smaller and less expensive.', 'Generators are used for the generation of electricity and they ensure that most of the essential appliances can be run whenever there is a power outage. Generators of different wattage capacities can be used according to the needs of the individual. ', '1526146117hero-slide-7.png', 1, 1, '2018-05-12 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `products_no` int(11) NOT NULL AUTO_INCREMENT,
  `products_name` varchar(255) NOT NULL,
  `products_position` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT '0',
  `deleted_by` int(11) NOT NULL,
  `deleted_on` datetime NOT NULL,
  `is_updated` int(1) NOT NULL DEFAULT '0',
  `updated_by` int(11) NOT NULL,
  `updated_on` int(11) NOT NULL,
  PRIMARY KEY (`products_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`products_no`, `products_name`, `products_position`, `created_by`, `created_on`, `is_deleted`, `deleted_by`, `deleted_on`, `is_updated`, `updated_by`, `updated_on`) VALUES
(1, 'Substation', 1, 1, '2018-05-10 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, 0),
(2, 'Transformer', 2, 1, '2018-05-10 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, 0),
(3, 'Switch Gear', 3, 1, '2018-05-10 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, 0),
(4, 'PFI Plant', 4, 1, '2018-05-10 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, 0),
(7, 'thgrfdw', 6, 0, '2018-05-11 00:00:00', 1, 0, '2018-05-11 00:00:00', 0, 0, 0),
(8, 'ewgreh', 5, 13, '2018-05-12 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, 0),
(9, 'jhjjqiuqwebj', 0, 13, '2018-05-12 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `professional_skills`
--

CREATE TABLE IF NOT EXISTS `professional_skills` (
  `professional_skills_id` int(11) NOT NULL AUTO_INCREMENT,
  `Solution` varchar(100) NOT NULL,
  `Creativity` varchar(100) NOT NULL,
  `Finance` varchar(100) NOT NULL,
  `Brand` varchar(100) NOT NULL,
  `Efficiency` varchar(100) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `is_updated` int(1) NOT NULL DEFAULT '0',
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL,
  PRIMARY KEY (`professional_skills_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `professional_skills`
--

INSERT INTO `professional_skills` (`professional_skills_id`, `Solution`, `Creativity`, `Finance`, `Brand`, `Efficiency`, `created_by`, `created_on`, `is_updated`, `updated_by`, `updated_on`) VALUES
(1, '60', '90', '80', '43', '82', 0, '0000-00-00 00:00:00', 1, 1, '2018-05-18 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `satisfied_customer`
--

CREATE TABLE IF NOT EXISTS `satisfied_customer` (
  `satisfied_customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `details` text NOT NULL,
  `image_url` varchar(250) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT '0',
  `deleted_by` int(11) NOT NULL,
  `deleted_on` datetime NOT NULL,
  `is_updated` int(1) NOT NULL DEFAULT '0',
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL,
  PRIMARY KEY (`satisfied_customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `satisfied_customer`
--

INSERT INTO `satisfied_customer` (`satisfied_customer_id`, `name`, `details`, `image_url`, `created_by`, `created_on`, `is_deleted`, `deleted_by`, `deleted_on`, `is_updated`, `updated_by`, `updated_on`) VALUES
(1, 'LENNOX ARNOLD', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum egetvel \r\nlacus pretium rhoncus a quis nisly Ut vehicula gravida dui in pulvinar donec\r\ndiam elit consequat eget augue vitae aliquet sollicitudin.', '1525917768img-testimonial-2.jpg', 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(2, 'PAULINA BERGER', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum egetvel \r\nlacus pretium rhoncus a quis nisly Ut vehicula gravida dui in pulvinar donec\r\ndiam elit consequat eget augue vitae aliquet sollicitudin.', '1525917806img-testimonial-3.jpg', 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(3, 'JUSTUS KUHN', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum egetvel \r\nlacus pretium rhoncus a quis nisly Ut vehicula gravida dui in pulvinar donec\r\ndiam elit consequat eget augue vitae aliquet sollicitudin.', '1525917842img-testimonial-1.jpg', 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `slider_id` int(11) NOT NULL AUTO_INCREMENT,
  `image_url` varchar(255) NOT NULL,
  `title_h1` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT '0',
  `deleted_by` int(11) NOT NULL,
  `deleted_on` datetime NOT NULL,
  `is_updated` int(1) NOT NULL DEFAULT '0',
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL,
  PRIMARY KEY (`slider_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `image_url`, `title_h1`, `created_by`, `created_on`, `is_deleted`, `deleted_by`, `deleted_on`, `is_updated`, `updated_by`, `updated_on`) VALUES
(6, '1525850548hero-slide-5.jpg', 'We are professional and reliable', 13, '2018-05-09 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(7, '1525850608hero-slide-6.jpg', 'We offer affordable prices', 13, '2018-05-09 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(8, '1525850632hero-slide-87.png', 'We are the leading Substation company in Bangladesh', 13, '2018-05-09 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(9, '1525850682hero-slide-8.jpg', 'We are the leading Substation company', 13, '2018-05-09 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(10, '1525850706hero-slide-9.jpg', 'We are the leading Substation company in BD', 13, '2018-05-09 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(11, '1525850743hero-slide-10.jpg', 'We are professional and reliable company in BD', 13, '2018-05-09 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `who_we_are`
--

CREATE TABLE IF NOT EXISTS `who_we_are` (
  `who_we_are_id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `is_updated` int(1) NOT NULL DEFAULT '0',
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL,
  PRIMARY KEY (`who_we_are_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `who_we_are`
--

INSERT INTO `who_we_are` (`who_we_are_id`, `description`, `created_by`, `created_on`, `is_updated`, `updated_by`, `updated_on`) VALUES
(1, 'We are a professional who built the different types of transformer. We are a professional who built the different types of transformer. We are a professional who built the different types of transformer. We are a professional who built the different types of transformer. We are a professional who built the different types of transformer. We are a professional who built the different types of transformer. We are a professional who built the different types of transformer. We are a professional who built the different types of transformer. We are a professional who built the different types of transformer. We are a professional who built the different types of transformer. We are a professional who built the different types of transformer. We are a professional who built the different types of transformer. We are a professional who built the different types of transformer. We are a professional who built the different types of transformer. We are a professional who built the different types of transformer. We are a professional who built the different types of transformer. We are a professional who built the different types of transformer. We are a professional who built the different types of transformer.', 0, '0000-00-00 00:00:00', 1, 1, '2018-05-09 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `who_we_are_tabmenu`
--

CREATE TABLE IF NOT EXISTS `who_we_are_tabmenu` (
  `who_we_are_tabmenu_id` int(11) NOT NULL AUTO_INCREMENT,
  `image_url` varchar(250) NOT NULL,
  `image_url1` varchar(250) NOT NULL,
  `image_url2` varchar(250) NOT NULL,
  `heading1` varchar(500) NOT NULL,
  `heading2` varchar(500) NOT NULL,
  `heading3` varchar(500) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `is_updated` int(1) NOT NULL DEFAULT '0',
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL,
  PRIMARY KEY (`who_we_are_tabmenu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `who_we_are_tabmenu`
--

INSERT INTO `who_we_are_tabmenu` (`who_we_are_tabmenu_id`, `image_url`, `image_url1`, `image_url2`, `heading1`, `heading2`, `heading3`, `created_by`, `created_on`, `is_updated`, `updated_by`, `updated_on`) VALUES
(1, '1525861246hero-slide-2.jpg', '1525947708hero-slide-1.jpg', '1525947708hero-slide-3.jpg', '2000-2006: Survey of Electrical Product market in Bangladesh. 2007: Set up a manufacture plant with all testing facility. 2008: Appointed Transformer designer and well experienced technicians. 2009-2015: Bay Power Technology Ltd. uses international standard product in their manufacturing items.', 'Our vision is to enable the expertise to create just the right transformer, which will be up to date to the latest standards.', '2000-2006: Survey of Electrical Product market in Bangladesh. 2007: Set up a manufacture plant with all testing facility. 2008: Appointed Transformer designer and well experienced technicians. 2009-2015: Bay Power Technology Ltd. uses international standard product in their manufacturing items.', 0, '0000-00-00 00:00:00', 1, 1, '2018-05-10 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `xxx_user`
--

CREATE TABLE IF NOT EXISTS `xxx_user` (
  `USER_NO` int(11) NOT NULL AUTO_INCREMENT,
  `USER_NAME` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `PASS` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `USER_FULL_NAME` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `USER_EMAIL` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `USER_CONTACT` text COLLATE utf8_unicode_ci NOT NULL,
  `IS_ACTIVE` int(11) NOT NULL,
  `ACTIVE_FROM` date NOT NULL,
  `ACTIVE_TO` date NOT NULL,
  PRIMARY KEY (`USER_NO`),
  UNIQUE KEY `USER_NAME` (`USER_NAME`),
  UNIQUE KEY `USER_FULL_NAME` (`USER_FULL_NAME`),
  UNIQUE KEY `USER_EMAIL` (`USER_EMAIL`),
  UNIQUE KEY `USER_NO` (`USER_NO`),
  UNIQUE KEY `USER_NO_2` (`USER_NO`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Dumping data for table `xxx_user`
--

INSERT INTO `xxx_user` (`USER_NO`, `USER_NAME`, `PASS`, `USER_FULL_NAME`, `USER_EMAIL`, `USER_CONTACT`, `IS_ACTIVE`, `ACTIVE_FROM`, `ACTIVE_TO`) VALUES
(1, 'ssislambd', 'fe707ddd5858aec84832a6c39aca75aa', 'Saikat Sarwar', 'ssislambd@gmail.com', '01685505076', 1, '2015-01-01', '2099-01-01'),
(13, 'admin', '202cb962ac59075b964b07152d234b70', 'Admin', 'admin', '98765432', 1, '2015-01-01', '2099-01-01'),
(14, 'robin', '202cb962ac59075b964b07152d234b70', 'Robin Chaklader', 'robin.chaklader@gmail.com', '01778924683', 1, '2015-01-01', '2099-01-01');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
