-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 24, 2021 at 02:48 AM
-- Server version: 10.5.8-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `selimrez_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `name`) VALUES
(1, 'java'),
(2, 'php'),
(3, 'html'),
(4, 'css'),
(7, 'Health'),
(8, 'Sport'),
(9, 'Bootstrap'),
(10, 'tangila');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `body` mediumtext NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_footer`
--

CREATE TABLE `tbl_footer` (
  `id` int(11) NOT NULL,
  `node` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_footer`
--

INSERT INTO `tbl_footer` (`id`, `node`) VALUES
(1, 'Copyright By Selim Reza Swadhin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page`
--

CREATE TABLE `tbl_page` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `body` mediumtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_page`
--

INSERT INTO `tbl_page` (`id`, `name`, `body`) VALUES
(1, 'About Us', '<p>About Us.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>\r\n<p>About me..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>'),
(8, 'Privacy ', '<p>About Us.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>\r\n<p>About me..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>\r\n<p>About Us.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>\r\n<p>About me..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>'),
(9, 'Policy', '<p>About Us.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>\r\n<p>About me..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>\r\n<p>About Us.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>\r\n<p>About me..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>'),
(10, 'Success', '<p>About Us.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>\r\n<p>About me..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>\r\n<p>About Us.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>\r\n<p>About me..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>'),
(11, 'Me', '<p><span class=\"q-box qu-userSelect--text\" style=\"box-sizing: border-box; font-size: large;\"><span style=\"font-weight: normal; font-style: normal; background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%;\">à¦¸à§‡à¦²à¦¿à¦® à¦à¦•à¦Ÿà¦¿ à¦†à¦°à¦¬à§€ à¦¶à¦¬à§à¦¦à¥¤ à¦à¦° à¦¶à§à¦¦à§à¦§ à¦‰à¦šà§à¦šà¦¾à¦°à¦£ à¦¹à¦²à§‹, à¦¸à¦¾à¦²à§€à¦®à¥¤ à¦à¦° à¦…à¦°à§à¦¥ à¦¨à¦¿à¦°à¦¾à¦ªà¦¦, à¦®à§à¦•à§à¦¤, à¦¸à¦ à¦¿à¦•, à¦¸à§à¦¸à§à¦¥, à¦‰à¦¤à§à¦¤à¦®, à¦…à¦Ÿà§à¦Ÿ, à¦…à¦•à§à¦·à¦¤, à¦ªà§‚à¦°à§à¦£à¦¾à¦™à§à¦—à¥¤ à¦‡à¦¸à¦²à¦¾à¦®à¦¿à¦• à¦¶à¦°à§€à§Ÿà¦¾ à¦®à¦¤à§‡ à¦à¦° à¦¸à§à¦¬à¦¤à¦¨à§à¦¤à§à¦° à¦•à§‹à¦¨à§‹ à¦…à¦°à§à¦¥ à¦¨à§‡à¦‡à¥¤</span></span></p>\r\n<p><span class=\"q-box qu-userSelect--text\" style=\"box-sizing: border-box; font-size: large;\"><span style=\"font-weight: normal; font-style: normal; background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%;\"><span class=\"q-box qu-userSelect--text\" style=\"box-sizing: border-box;\"><span style=\"font-weight: normal; font-style: normal; background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%;\"><span class=\"q-box qu-userSelect--text\" style=\"box-sizing: border-box;\"><span style=\"font-weight: normal; font-style: normal; background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%;\"><span class=\"q-box qu-userSelect--text\" style=\"box-sizing: border-box;\"><span style=\"font-weight: normal; font-style: normal; background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%;\"><span class=\"q-box qu-userSelect--text\" style=\"box-sizing: border-box;\"><span style=\"font-weight: normal; font-style: normal; background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%;\">à¦°à§‡à¦œà¦¾</span></span></span></span> à¦à¦•à¦Ÿà¦¿ à¦†à¦°à¦¬à§€ à¦¶à¦¬à§à¦¦à¥¤</span></span> à¦°à§‡à¦œà¦¾ à¦…à¦°à§à¦¥ à¦¹à¦²à§‹, à¦†à¦¨à¦¨à§à¦¦à¦¦à¦¾à§Ÿà¦•, à¦¸à¦¨à§à¦¤à§‹à¦·à¥¤</span></span></span></span></p>\r\n<p><span class=\"q-box qu-userSelect--text\" style=\"box-sizing: border-box;\"><span style=\"font-weight: normal; font-style: normal; background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%;\"><span class=\"q-box qu-userSelect--text\" style=\"box-sizing: border-box;\"><span style=\"font-weight: normal; font-style: normal; background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%;\"><br class=\"Apple-interchange-newline\" /><span style=\"color: #202124; font-family: arial, sans-serif; font-size: large; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: pre-wrap; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #f8f9fa; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">Selim is an Arabic word. Its correct pronunciation is, Salim. It means safe, free, correct, healthy, good, intact, intact, complete. According to Islamic Sharia, it has no unique meaning.</span></span></span></span></span></p>\r\n<p><span class=\"q-box qu-userSelect--text\" style=\"box-sizing: border-box; font-size: large;\"><span style=\"font-weight: normal; font-style: normal; background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%;\"><span class=\"q-box qu-userSelect--text\" style=\"box-sizing: border-box;\"><span style=\"font-weight: normal; font-style: normal; background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%;\"><span style=\"color: #202124; font-family: arial, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: pre-wrap; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #f8f9fa; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">Reza is an Arabic word. Reza means, pleasing, satisfying.</span></span></span></span></span></p>\r\n<p>&nbsp;</p>\r\n<pre id=\"tw-target-text\" class=\"tw-data-text tw-text-large XcVN5d tw-ta\" style=\"unicode-bidi: isolate; font-size: 24px; line-height: 32px; background-color: #f8f9fa; border: none; padding: 2px 0.14em 2px 0px; position: relative; margin: -2px 0px; resize: none; font-family: inherit; overflow: hidden; text-align: left; width: 277px; white-space: pre-wrap; overflow-wrap: break-word; color: #202124; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\" dir=\"ltr\" data-placeholder=\"à¦…à¦¨à§à¦¬à¦¾à¦¦\"><span style=\"font-size: large;\" lang=\"ja\">ã‚»ãƒªãƒ ã¯ã‚¢ãƒ©ãƒ“ã‚¢èªžã§ã™ã€‚ãã®æ­£ã—ã„ç™ºéŸ³ã¯ã€ã‚µãƒªãƒ ã§ã™ã€‚ãã‚Œã¯ã€å®‰å…¨ã€ç„¡æ–™ã€æ­£ã—ã„ã€å¥åº·ã€è‰¯ã„ã€ç„¡å‚·ã€ç„¡å‚·ã€å®Œå…¨ã‚’æ„å‘³ã—ã¾ã™ã€‚ã‚¤ã‚¹ãƒ©ãƒ ã®ã‚·ãƒ£ãƒªã‚¢ã«ã‚ˆã‚Œã°ã€ãã‚Œã¯ç‹¬ç‰¹ã®æ„å‘³ã‚’æŒã£ã¦ã„ã¾ã›ã‚“ã€‚ ãƒ¬ã‚¶ã¯ã‚¢ãƒ©ãƒ“ã‚¢èªžã§ã™ã€‚ Rezaã¯ã€å–œã°ã—ãã€æº€è¶³ã™ã‚‹ã“ã¨ã‚’æ„å‘³ã—ã¾ã™ã€‚</span></pre>\r\n<p><span class=\"q-box qu-userSelect--text\" style=\"box-sizing: border-box;\"><span style=\"font-weight: normal; font-style: normal; background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%;\"><span class=\"q-box qu-userSelect--text\" style=\"box-sizing: border-box;\"><span style=\"font-weight: normal; font-style: normal; background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%;\"><span style=\"color: #202124; font-family: arial, sans-serif; font-size: 28px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: pre-wrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #f8f9fa; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\"><br /></span></span></span></span></span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `id` int(11) NOT NULL,
  `cat` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `userid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`id`, `cat`, `title`, `body`, `image`, `author`, `tags`, `description`, `date`, `userid`) VALUES
(13, 3, 'Hello World Bangladesh', '<p>here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>\r\n<p>About me..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>\r\n<p>About me..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>', 'upload/f2a1111173.jpg', 'Hasan', 'shakib', 'Hello World Bangladesh', '2019-04-26 15:17:59', 1),
(2, 8, 'Cricket Mashrafi', '<p>Bangladesh TeamAbout us..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>\r\n<p>About me..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>\r\n<p>About me..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>', 'upload/46997e9d28.jpg', 'Mashrafi', 'Cricket Team', 'Bangladesh Team About us.', '2019-04-26 04:20:29', 1),
(3, 7, 'Our health post will be go here', '<p>About me..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>\r\n<p>About me..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here</p>', 'upload/1108c25ca6.jpg', 'selimreza', 'health', 'Some text will be go here.Some text will be go here', '2019-04-26 09:27:37', 1),
(4, 1, 'our java project is very nice', '<p>About me..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>\r\n<p>About me..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here</p>', 'upload/9277a72d33.jpg', 'Hamidul Alam n', 'html css', 'হেল্ল বাংলাদেশ হেল্ল বাংলাদেশ হেল্ল বাংলাদেশ', '2019-04-26 09:28:29', 1),
(5, 7, 'Education', '<p>About me..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>\r\n<p>About me..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here</p>', 'upload/8838d63dec.jpg', 'Doctors', 'health', 'be go here.Some text will be go here.Some text will', '2019-04-26 09:29:43', 1),
(10, 10, 'Good Bangladesh', '<p>here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>\r\n<p>About me..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>\r\n<p>About me..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>', 'upload/a6e7174f65.jpg', 'Koushikh', 'Love', 'Good Bangladesh', '2019-04-26 15:13:05', 1),
(14, 3, 'Exam', '<p>here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>\r\n<p>About me..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>\r\n<p>About me..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>', 'upload/1b76fdd2d0.jpg', 'nur', 'swad', 'About me..Some text will be go here. Some text will be go here', '2019-04-26 15:42:39', 1),
(11, 4, 'Hello World', '<p>here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>\r\n<p>About me..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>\r\n<p>About me..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>', 'upload/23cc7c1399.jpg', 'Hello', 'hello', 'Nice Country ', '2019-04-26 15:14:38', 1),
(12, 2, 'selim', '<p>here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>\r\n<p>About me..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>\r\n<p>About me..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>', 'upload/b2b3340721.jpg', 'edit', 'editot', 'This is my creative page here.Some text will be go', '2019-04-26 15:16:35', 1),
(15, 3, '123', '<p>here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>\r\n<p>About me..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>\r\n<p>About me..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>', 'upload/bf4eb85d03.jpg', '121', 'java, Java coding, spring', 'Some text will be go here', '2019-04-26 15:43:33', 1),
(16, 7, '345', '<p>here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>\r\n<p>About me..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>\r\n<p>About me..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>', 'upload/04ebe7af50.jpg', '333', 'education, result, ssc', 'Some text will be go here', '2019-04-26 15:44:02', 1),
(17, 1, '789', '<p>here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>\r\n<p>About me..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>\r\n<p>About me..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>', 'upload/a5fd47b9dd.jpg', '000', '890', 'Some text will be go here.', '2019-04-26 15:44:58', 1),
(18, 4, 'This is my creative page', '<p>&nbsp;This is my creative page here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>\r\n<p>About me..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>\r\n<p>About me..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>', 'upload/dc53164bbf.jpg', 'Bappi Ashraf Dopur', 'Sports, Cricket, Fotbool, hocky', ' This is my creative page here.Some text will be', '2019-04-30 14:33:15', 1),
(19, 10, 'Admin panel problem', '<p><span>About me..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some te<span>About me..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go</span>xt will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</span><span>About me..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</span></p>', 'upload/a3557236b9.jpg', '2', 'Admin panel problem', 'Admin panel problem no solution', '2019-05-02 07:35:38', 1),
(20, 1, 'Hello World Bangladesh', '<p><span>About me..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</span></p>\r\n<p><span>About me..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</span></p>', 'upload/d013dcb7a6.jpg', 'author', 'wow, java, php', 'be go here.Some text will be go here.Some text will', '2019-05-02 12:19:23', 1),
(21, 4, 'Abdul Hai', '<p>here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>\r\n<p>About me..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>', 'upload/6469c61fb4.jpg', 'author', 'Some text will be go here.', 'Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.', '2019-06-17 08:29:44', 1),
(24, 7, 'à¦¯à§‡ à¦­à¦¾à¦‡à¦°à¦¾à¦¸à§‡à¦° à¦•à¦¾à¦°à¦£à§‡ COVID-19 à¦¹à§Ÿ', '<p>à¦¯à§‡ à¦­à¦¾à¦‡à¦°à¦¾à¦¸à§‡à¦° à¦•à¦¾à¦°à¦£à§‡ COVID-19 à¦¹à§Ÿ à¦¤à¦¾ à¦ªà§à¦°à¦§à¦¾à¦¨à¦¤ à¦•à§‹à¦¨à¦“ à¦¸à¦‚à¦•à§à¦°à¦¾à¦®à¦¿à¦¤ à¦¬à§à¦¯à¦•à§à¦¤à¦¿à¦° à¦•à¦¾à¦¶à¦¿, à¦¹à¦¾à¦à¦šà¦¿ à¦¬à¦¾ à¦¨à¦¿à¦ƒà¦¸à¦°à¦£ à¦¥à§‡à¦•à§‡ à¦¤à§ˆà¦°à¦¿ à¦¹à¦“à§Ÿà¦¾ à¦œà¦²à§€à§Ÿ à¦•à¦£à¦¾à¦° à¦®à¦¾à¦§à§à¦¯à¦®à§‡ à¦¸à¦‚à¦¬à¦¾à¦¹à¦¿à¦¤ à¦¹à§Ÿà¥¤ à¦à¦‡ à¦«à§‹à¦à¦Ÿà¦¾ à¦¬à¦¾à¦¤à¦¾à¦¸à§‡ à¦­à§‡à¦¸à§‡ à¦¥à¦¾à¦•à¦¾à¦° à¦ªà¦•à§à¦·à§‡ à¦–à§à¦¬à¦‡ à¦­à¦¾à¦°à§€ à¦à¦¬à¦‚ à¦¸à§‡à¦‡ à¦•à¦¾à¦°à¦£à§‡ à¦¤à¦¾ à¦¦à§à¦°à§à¦¤ à¦®à§‡à¦à§‡ à¦¬à¦¾ à¦¸à¦¾à¦°à¦«à§‡à¦¸à§‡ à¦¨à§‡à¦®à§‡ à¦†à¦¸à§‡à¥¤ à¦†à¦ªà¦¨à¦¿ COVID-19-à¦ à¦†à¦•à§à¦°à¦¾à¦¨à§à¦¤ à¦•à§‹à¦¨à¦“ à¦¬à§à¦¯à¦•à§à¦¤à¦¿à¦° à¦à¦•à§‡à¦¬à¦¾à¦°à§‡ à¦•à¦¾à¦›à¦¾à¦•à¦¾à¦›à¦¿ à¦¥à¦¾à¦•à¦²à§‡ à¦¨à¦¿à¦ƒà¦¶à§à¦¬à¦¾à¦¸à§‡à¦° à¦®à¦¾à¦§à§à¦¯à¦®à§‡ à¦­à¦¾à¦‡à¦°à¦¾à¦¸ à¦—à§à¦°à¦¹à¦£à§‡à¦° à¦«à¦²à§‡ à¦¬à¦¾ à¦¦à§‚à¦·à¦¿à¦¤ à¦•à§‹à¦¨à¦“ à¦œà¦¾à§Ÿà¦—à¦¾ à¦¸à§à¦ªà¦°à§à¦¶ à¦•à¦°à§‡ à¦¤à¦¾à¦°à¦ªà¦° à¦†à¦ªà¦¨à¦¾à¦° à¦šà§‹à¦–, à¦¨à¦¾à¦• à¦¬à¦¾ à¦®à§à¦– à¦¸à§à¦ªà¦°à§à¦¶ à¦•à¦°à¦²à§‡ à¦à¦° à¦¦à§à¦¬à¦¾à¦°à¦¾ à¦¸à¦‚à¦•à§à¦°à¦¾à¦®à¦¿à¦¤ à¦¹à¦¤à§‡ à¦ªà¦¾à¦°à§‡à¦¨à¥¤</p>', 'upload/c90d0634f5.jpg', 'admin', 'à¦­à¦¾à¦‡à¦°à¦¾à¦¸  COVID-19 ', ' à¦†à¦ªà¦¨à¦¾à¦° à¦šà§‹à¦–, à¦¨à¦¾à¦• à¦¬à¦¾ à¦®à§à¦– à¦¸à§à¦ªà¦°à§à¦¶ à¦•à¦°à¦²à§‡ à¦à¦° à¦¦à§à¦¬à¦¾à¦°à¦¾ à¦¸à¦‚à¦•à§à¦°à¦¾à¦®à¦¿à¦¤ à¦¹à¦¤à§‡ à¦ªà¦¾à¦°à§‡à¦¨à¥¤', '2020-10-05 05:44:26', 1),
(23, 7, 'WHO publishes interactive timeline of its response', '<p>To mark six months since WHO declared a public health emergency of international concern, the&nbsp;highest level of alarm under international law, WHO published an interactive timeline showcasing&nbsp;how the organization has taken action on information, science, leadership, advice, response and resourcing.</p>', 'upload/e78e568824.jpg', 'admin', 'WHO experts to travel to China', 'WHO marks six-month anniversary of the COVID-19 outbreak ', '2020-10-05 05:34:32', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`id`, `title`, `image`) VALUES
(8, 'Hello Bangladesh', 'upload/slider/868f350244.jpg'),
(2, 'Second Slider Title will be here', 'upload/slider/3575bd0e45.png'),
(3, 'Third Slider Title will be here', 'upload/slider/fc61dd25e6.jpg'),
(7, 'Good Morning Evrybody', 'upload/slider/0db6712d3a.jpg'),
(11, 'This is my creative page', 'upload/slider/86cba2b99a.jpg'),
(9, 'Good Morning Evrybody', 'upload/slider/5e18ed3205.jpg'),
(10, 'River in Bangladesh', 'upload/slider/479e3e7ef7.jpg'),
(12, 'Tyd', 'upload/slider/3157d70fdb.jpg'),
(13, 'Tytyd gan ', 'upload/slider/cf410d40c1.jpg'),
(14, 'Tyd', 'upload/slider/3b4f73faf5.jpg'),
(15, 'Tyd', 'upload/slider/849439ec71.jpg'),
(16, 'Konsol', 'upload/slider/7e44bda874.jpg'),
(17, 'Konsol', 'upload/slider/601ccff7e9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slogan`
--

CREATE TABLE `tbl_slogan` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slogan` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_slogan`
--

INSERT INTO `tbl_slogan` (`id`, `title`, `slogan`, `logo`) VALUES
(1, 'à¦¸à§‡à¦²à¦¿à¦® à¦°à§‡à¦œà¦¾ à¦¸à§à¦¬à¦¾à¦§à§€à¦¨', 'Our Site Is Best For Public Blog', 'title_image/55c307eec7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_social`
--

CREATE TABLE `tbl_social` (
  `id` int(11) NOT NULL,
  `fb` varchar(255) NOT NULL,
  `ins` varchar(255) NOT NULL,
  `tw` varchar(255) NOT NULL,
  `ln` varchar(255) NOT NULL,
  `gp` varchar(255) NOT NULL,
  `git` varchar(255) NOT NULL,
  `upwork` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_social`
--

INSERT INTO `tbl_social` (`id`, `fb`, `ins`, `tw`, `ln`, `gp`, `git`, `upwork`) VALUES
(1, 'https://web.facebook.com/mdselim.swadhin', 'https://www.instagram.com/mdsr.swadhin/', 'https://twitter.com/SrSwadhin', 'https://www.linkedin.com/in/selim-reza-swadhin-43a46a104/', 'https://selimrezaswadhin.com/wpselim/', 'https://www.github.com/Selim-Reza-Swadhin', 'https://www.upwork.com/freelancers/~01690644d235eead6d?viewMode=1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_theme`
--

CREATE TABLE `tbl_theme` (
  `id` int(11) NOT NULL,
  `theme` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_theme`
--

INSERT INTO `tbl_theme` (`id`, `theme`) VALUES
(1, 'fb');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `role` varchar(11) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `username`, `password`, `email`, `image`, `details`, `role`, `status`) VALUES
(1, 'Admin', 'admin', '74d61923e790464f7d3f535944f4f291308efe43', 'admin@gmail.com', 'user_image/nature-1.jpg', '<p>I am admin from bangladesh&nbsp;I am admin from bangladesh&nbsp;I am admin from bangladesh</p>', 'admin', 'active'),
(4, 'Zannatul Ferdous Bonna', 'author', 'adcd7048512e64b48da55b027577886ee5a36350', 'zannat@gmail.com', 'user_image/nature-2.jpg', 'author', 'author', ''),
(10, 'Selim Reza Swadhin', 'zannat', 'adcd7048512e64b48da55b027577886ee5a36350', 'selimrezaswadhim@gmail.com', 'user_image/nature-3.jpg', 'I wanted Editor Your Blog Page.', 'editor', 'active'),
(11, 'Popy Akhter', 'popy', 'adcd7048512e64b48da55b027577886ee5a36350', 'popyakhter@gmail.com', 'user_image/nature-4.jpg', 'I wanted Text Your Blog', 'author', 'inactive'),
(12, 'Selim Reza Swadhin', 'Delower', 'adcd7048512e64b48da55b027577886ee5a36350', 'selimrezaswadhmim@gmail.com', 'user_image/nature-5.jpg', 'admin too', 'admin', 'active'),
(13, 'hamidul islam', 'hamid', 'adcd7048512e64b48da55b027577886ee5a36350', 'hammid@gmail.com', 'user_image/nature-6.jpg', 'wow', 'author', 'active'),
(14, 'Selim Reza Swadhin', 'selim', 'adcd7048512e64b48da55b027577886ee5a36350', 'selim@gmail.com', '', 'hello test', 'author', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_footer`
--
ALTER TABLE `tbl_footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_page`
--
ALTER TABLE `tbl_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_slogan`
--
ALTER TABLE `tbl_slogan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_social`
--
ALTER TABLE `tbl_social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_theme`
--
ALTER TABLE `tbl_theme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `tbl_footer`
--
ALTER TABLE `tbl_footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_page`
--
ALTER TABLE `tbl_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_slogan`
--
ALTER TABLE `tbl_slogan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_social`
--
ALTER TABLE `tbl_social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_theme`
--
ALTER TABLE `tbl_theme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
