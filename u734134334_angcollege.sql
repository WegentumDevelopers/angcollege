-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 17, 2022 at 10:36 AM
-- Server version: 10.5.12-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u734134334_angcollege`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fimage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fmsg` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dimage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dmsg` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mdname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mdimage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mdmsg` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trust_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trust` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delete_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `fname`, `fimage`, `fmsg`, `dname`, `dimage`, `dmsg`, `mdname`, `mdimage`, `mdmsg`, `about_img`, `about`, `trust_img`, `trust`, `delete_status`, `created_at`, `updated_at`) VALUES
(1, 'Honorable Shri Shitla Prasad Nigam', '1657629546.jpg', '<div style=\"color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;\"><p class=\"text-justify\" style=\"box-sizing: border-box; outline: none; color: rgb(51, 51, 51); margin-bottom: 1rem; font-family: Roboto, sans-serif; font-size: 16px; white-space: normal; background-color: rgb(248, 249, 250);\"><br></p></div>', 'Xaviera Beard', '1657717090d.jpg', '<div id=\"content\" style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 12px; vertical-align: baseline; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; float: left; width: 713px; color: rgb(46, 48, 54); font-family: Arial, Helvetica, sans-serif;\"><p style=\"margin-bottom: 20px; padding: 0px; border: 0px; outline: 0px; font-size: 14px; vertical-align: baseline; background: transparent; font-family: Lato, sans-serif; line-height: 20px; text-align: justify;\"><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-size: 16px; background-color: rgb(248, 249, 250);\">The term \'education\' encompasses more than just knowledge and knowing. It is a harmonious blend of academia, arts, sports, emotions, attitudes, creativity, n</span><br></p></div>', 'Honorable Shri Bipin Bihari Nigam', '1657717090md.jpg', '<p><br></p><p><br></p>', '1657716711.jpg', '<p class=\"text-justify\" style=\"box-sizing: border-box; outline: none; color: rgb(51, 51, 51); margin-bottom: 1rem; font-family: Roboto, sans-serif; font-size: 16px; background-color: rgb(248, 249, 250);\"></p><p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size: 14pt; line-height: 115%; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;\">IDEAL EDUCATIONAL SOCIETY</span></p><p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size: 14pt; line-height: 115%; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;\"><br></span></p><p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size: 14pt; line-height: 115%; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;\"><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size: 14pt; line-height: 115%; font-family: &quot;Times New Roman&quot;, &quot;serif&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Glorious\r\nOdyssey of <b>IDEAL EDUCATIONAL SOCIETY</b> is register under the society at\r\n1860, establish in the year-2007. The Society has been executing different\r\nEngineering,Pharmacy,Nursing,Law,IT and Management Education Programs under its diverse Institute\r\ni.e. <b>A.N.G. IDEAL GROUP OF INSTITUTIONS.</b> Apart from this<b> IDEAL\r\nEDUCATIONAL SOCIETY</b>&nbsp; Promotes and\r\norganise trends and development in various educational field and streams.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-size:14.0pt;\r\nline-height:115%;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-ansi-language:EN-IN;\r\nmso-bidi-font-weight:bold\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b style=\"\">A.N.G.\r\nIDEAL GROUP OF INSTITUTIONS </b>is one of Varanasi’s largest education with the\r\nlowest fee structure.<o:p></o:p></span></p>', '1657630126.jpg', '<p style=\"border: 0px; margin-bottom: 1.8em; padding: 0px; color: rgb(68, 68, 68); font-family: -apple-system, system-ui, BlinkMacSystemFont, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 19px;\"><span style=\"border: 0px; margin: 0px; padding: 0px; font-weight: 700;\">Trust Messages &amp; Quotes:&nbsp;</span>In any relationship, trust is the most important thing. Love may even be equated to trust.&nbsp; It takes time to earn trust but it can be lost within seconds. Trust has always been the basis of any relationship, whether romantic or just a normal relationship.</p><div class=\"code-block code-block-9\" style=\"border: 0px; margin: 8px 0px; padding: 0px; color: rgb(68, 68, 68); font-family: -apple-system, system-ui, BlinkMacSystemFont, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 19px; clear: both;\"><span id=\"ezoic-pub-ad-placeholder-104\" style=\"border: 0px; margin: 0px; padding: 0px;\"></span></div><p style=\"border: 0px; margin-bottom: 1.8em; padding: 0px; color: rgb(68, 68, 68); font-family: -apple-system, system-ui, BlinkMacSystemFont, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 19px;\">The deeper the trust is between individuals the stronger the relationship. In any relationship, trust is a must. Without trust, the relationship will break. Trust cannot be shown through words but actions.<span id=\"ezoic-pub-ad-placeholder-177\" class=\"ezoic-adpicker-ad\" style=\"border: 0px; margin: 0px; padding: 0px;\"></span></p><div class=\"code-block code-block-2\" style=\"border: 0px; margin: 8px auto; padding: 0px; color: rgb(68, 68, 68); font-family: -apple-system, system-ui, BlinkMacSystemFont, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 19px; text-align: center; clear: both;\"></div><p style=\"border: 0px; margin-bottom: 1.8em; padding: 0px; color: rgb(68, 68, 68); font-family: -apple-system, system-ui, BlinkMacSystemFont, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 19px;\"><br></p>', 0, '2022-07-12 06:16:49', '2022-08-17 08:27:05');

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `delete_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `auther` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `delete_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `auther`, `date`, `category`, `title`, `tags`, `short_description`, `long_description`, `images`, `status`, `delete_status`, `created_at`, `updated_at`) VALUES
(1, 'guru', '2022-07-12', 'food', 'The \'Make My Life Easier\' Headlines.', 'food', 'Not only does the headline affect click-through rates, but it sets the tone and establishes the key subject of the article. points out , a title can have a huge impact on what the audience takes away from an article.', '<p style=\"box-sizing: border-box; margin-top: 1em; margin-bottom: 1em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 18px; line-height: 1.61111em; font-family: AvenirNext, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline; color: rgb(51, 71, 91);\">You might not realize it, but your headline could be the reason you\'re losing traffic. In fact, on average, only 20% of those who read your headline&nbsp;<a href=\"http://www.copyblogger.com/magnetic-headlines/\" target=\"_blank\" rel=\"noopener\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 600; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; color: rgb(0, 145, 174);\">will click through to read your article</a>. That means&nbsp;<em style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">good</em>&nbsp;headlines lose 80% of your audience.</p><p style=\"box-sizing: border-box; margin-top: 1em; margin-bottom: 1em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 18px; line-height: 1.61111em; font-family: AvenirNext, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline; color: rgb(51, 71, 91);\"><em style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Great</em>&nbsp;headlines, though, can make a dramatic impact in the opposite direction. You can increase the traffic to your articles by&nbsp;as much as&nbsp;<a href=\"http://www.wired.com/2013/02/tabloid-chic-the-rise-of-racy-headlines/\" target=\"_blank\" rel=\"noopener\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 600; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; color: rgb(0, 145, 174);\">500%</a>, based solely on the headline.</p><p style=\"box-sizing: border-box; margin-top: 1em; margin-bottom: 1em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 18px; line-height: 1.61111em; font-family: AvenirNext, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline; color: rgb(51, 71, 91);\">Not only does the headline affect click-through rates, but it sets the tone and establishes the key subject of the article.&nbsp;<a href=\"http://www.newyorker.com/science/maria-konnikova/headlines-change-way-think\" target=\"_blank\" rel=\"noopener\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 600; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; color: rgb(0, 145, 174);\">points out</a>&nbsp;, a title can have a huge impact on what the audience takes away from an article.&nbsp;</p><p style=\"box-sizing: border-box; margin-top: 1em; margin-bottom: 1em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 18px; line-height: 1.61111em; font-family: AvenirNext, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline; color: rgb(51, 71, 91);\">Discussing her article, \"<a href=\"http://www.newyorker.com/science/maria-konnikova/a-gene-makes-you-need-less-sleep\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 600; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; color: rgb(0, 145, 174);\">A Gene That Makes You Need Less Sleep</a>,\" Konnikova said, \"If I had instead called it “Why We Need Eight Hours of Sleep,” people would remember it differently.\"</p><p style=\"box-sizing: border-box; margin-top: 1em; margin-bottom: 1em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 18px; line-height: 1.61111em; font-family: AvenirNext, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline; color: rgb(51, 71, 91);\"><br></p>', '1657538821.jpg', 1, 0, '2022-07-11 05:57:01', '2022-07-11 05:57:01'),
(2, 'mickle', '2022-07-14', 'travel', 'What makes a great headline?', 'Travel', 'That depends on who you\'re writing to, and where they\'re reading it.\r\n\r\nAs a marketing consultant, my job is to help companies grow. The content I help them create must accomplish two things:\r\n\r\nThey must appeal to their target personas.\r\nThey must promise to provide value to their tar', '<p style=\"box-sizing: border-box; margin-top: 1em; margin-bottom: 1em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 18px; line-height: 1.61111em; font-family: AvenirNext, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline; color: rgb(51, 71, 91);\">That depends on who you\'re writing to, and where they\'re reading it.</p><p style=\"box-sizing: border-box; margin-top: 1em; margin-bottom: 1em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 18px; line-height: 1.61111em; font-family: AvenirNext, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline; color: rgb(51, 71, 91);\">As a marketing consultant, my job is to help companies grow. The content I help them create must accomplish two things:</p><ul style=\"box-sizing: border-box; margin: 1em 0px 0.25em; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: AvenirNext, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline; color: rgb(51, 71, 91);\"><li style=\"box-sizing: border-box; margin: 1em 0px; padding: 0px 0px 0px 1.25rem; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 1.125rem; line-height: 1.61111em; font-family: inherit; vertical-align: baseline; color: inherit; list-style-type: none; position: relative;\">They must appeal to their target personas.</li><li style=\"box-sizing: border-box; margin: 1em 0px; padding: 0px 0px 0px 1.25rem; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 1.125rem; line-height: 1.61111em; font-family: inherit; vertical-align: baseline; color: inherit; list-style-type: none; position: relative;\">They must promise to provide value to their target personas.</li></ul><p style=\"box-sizing: border-box; margin-top: 1em; margin-bottom: 1em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 18px; line-height: 1.61111em; font-family: AvenirNext, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline; color: rgb(51, 71, 91);\">When I talk about the greatest headlines of all time, it gives a connotation of the most creative titles. If I was writing about creative titles, I&nbsp;would go with something like, \"<a href=\"http://thebillfold.com/2013/11/why-my-cat-has-a-savings-account/\" target=\"_blank\" rel=\"noopener\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 600; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; color: rgb(0, 145, 174);\">Why My Cat Has a Savings Account</a>,\" or \"<a href=\"http://blog.dictionary.com/literally/\" target=\"_blank\" rel=\"noopener\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 600; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; color: rgb(0, 145, 174);\">In Defense of the Figurative Use of Literally</a>.\" These are both intriguing and creative titles.</p>', '1657538953.jpg', 1, 0, '2022-07-11 05:59:13', '2022-07-11 05:59:13'),
(3, 'Dev', '2022-07-04', 'Technology', 'Featured Resource: Free Blog Post Templates', 'Tech', 'problems my clients are facing. Too many marketers make their titles too cute to be effective.\r\n\r\nThe best headlines are the ones that capture the pain points of your target personas and introduces a topic that will make their lives better. And it must be compelling.', '<p style=\"box-sizing: border-box; margin-top: 1em; margin-bottom: 1em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 18px; line-height: 1.61111em; font-family: AvenirNext, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline; color: rgb(51, 71, 91);\">Fewer people read your blog posts than you think. More people read your headline than you think, too.</p><p style=\"box-sizing: border-box; margin-top: 1em; margin-bottom: 1em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 18px; line-height: 1.61111em; font-family: AvenirNext, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline; color: rgb(51, 71, 91);\">You might not realize it, but your headline could be the reason you\'re losing traffic. In fact, on average, only 20% of those who read your headline&nbsp;<a href=\"http://www.copyblogger.com/magnetic-headlines/\" target=\"_blank\" rel=\"noopener\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 600; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; color: rgb(0, 145, 174);\">will click through to read your article</a>. That means&nbsp;<em style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">good</em>&nbsp;headlines lose 80% of your audience.</p><p style=\"box-sizing: border-box; margin-top: 1em; margin-bottom: 1em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 18px; line-height: 1.61111em; font-family: AvenirNext, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline; color: rgb(51, 71, 91);\"><em style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\">Great</em>&nbsp;headlines, though, can make a dramatic impact in the opposite direction. You can increase the traffic to your articles by&nbsp;as much as&nbsp;<a href=\"http://www.wired.com/2013/02/tabloid-chic-the-rise-of-racy-headlines/\" target=\"_blank\" rel=\"noopener\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 600; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; color: rgb(0, 145, 174);\">500%</a>, based solely on the headline.</p>', '1657539075.jpg', 1, 0, '2022-07-11 06:01:15', '2022-07-11 06:01:15'),
(4, 'Gyan', '2022-07-14', 'food', 'A Gene That Makes You Need Less Sleep', 'Tea', 'That depends on who you\'re writing to, and where they\'re reading it.\r\n\r\nAs a marketing consultant, my job is to help companies grow. The content I help them create must accomplish two things:\r\n\r\nThey must appeal to their target personas.\r\nThey must promise to provide value to their target personas.', '<p style=\"box-sizing: border-box; margin-top: 1em; margin-bottom: 1em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 18px; line-height: 1.61111em; font-family: AvenirNext, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline; color: rgb(51, 71, 91);\">That depends on who you\'re writing to, and where they\'re reading it.</p><p style=\"box-sizing: border-box; margin-top: 1em; margin-bottom: 1em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 18px; line-height: 1.61111em; font-family: AvenirNext, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline; color: rgb(51, 71, 91);\">As a marketing consultant, my job is to help companies grow. The content I help them create must accomplish two things:</p><ul style=\"box-sizing: border-box; margin: 1em 0px 0.25em; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: AvenirNext, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline; color: rgb(51, 71, 91);\"><li style=\"box-sizing: border-box; margin: 1em 0px; padding: 0px 0px 0px 1.25rem; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 1.125rem; line-height: 1.61111em; font-family: inherit; vertical-align: baseline; color: inherit; list-style-type: none; position: relative;\">They must appeal to their target personas.</li><li style=\"box-sizing: border-box; margin: 1em 0px; padding: 0px 0px 0px 1.25rem; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 1.125rem; line-height: 1.61111em; font-family: inherit; vertical-align: baseline; color: inherit; list-style-type: none; position: relative;\">They must promise to provide value to their target personas.</li></ul><p style=\"box-sizing: border-box; margin-top: 1em; margin-bottom: 1em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 18px; line-height: 1.61111em; font-family: AvenirNext, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline; color: rgb(51, 71, 91);\">When I talk about the greatest headlines of all time, it gives a connotation of the most creative titles. If I was writing about creative titles, I&nbsp;would go with something like, \"<a href=\"http://thebillfold.com/2013/11/why-my-cat-has-a-savings-account/\" target=\"_blank\" rel=\"noopener\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 600; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; color: rgb(0, 145, 174);\">Why My Cat Has a Savings Account</a>,\" or \"<a href=\"http://blog.dictionary.com/literally/\" target=\"_blank\" rel=\"noopener\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 600; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; color: rgb(0, 145, 174);\">In Defense of the Figurative Use of Literally</a>.\" These are both intriguing and creative titles.&nbsp;</p><p style=\"box-sizing: border-box; margin-top: 1em; margin-bottom: 1em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 18px; line-height: 1.61111em; font-family: AvenirNext, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline; color: rgb(51, 71, 91);\">But these kinds of titles don\'t appeal to SEO, and they don\'t address the problems my clients are facing. Too many marketers make their titles too cute to be effective.</p>', '1657539144.jpg', 1, 0, '2022-07-11 06:02:24', '2022-07-11 06:02:24'),
(5, 'Mark', '2022-07-07', 'Nature', 'The \'Make My Life Easier\' Headlines', 'Nature', 'But these kinds of titles don\'t appeal to SEO, and they don\'t address the problems my clients are facing. Too many marketers make their titles too cute to be effective.\r\n\r\nThe best headlines are the ones that capture the pain points of your target personas and introduces a topic that will make their lives better. And it must be compelling.', '<p style=\"box-sizing: border-box; margin-top: 1em; margin-bottom: 1em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 18px; line-height: 1.61111em; font-family: AvenirNext, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline; color: rgb(51, 71, 91);\">But these kinds of titles don\'t appeal to SEO, and they don\'t address the problems my clients are facing. Too many marketers make their titles too cute to be effective.</p><p style=\"box-sizing: border-box; margin-top: 1em; margin-bottom: 1em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 18px; line-height: 1.61111em; font-family: AvenirNext, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline; color: rgb(51, 71, 91);\">The best headlines are the ones that capture the pain points of your target personas&nbsp;and introduces a topic that will make their lives better. And it must be compelling.</p><p style=\"box-sizing: border-box; margin-top: 1em; margin-bottom: 1em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 18px; line-height: 1.61111em; font-family: AvenirNext, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline; color: rgb(51, 71, 91);\">If your headline is not compelling, you\'ll lose up to 80% of your audience.</p><p><p style=\"box-sizing: border-box; margin-top: 1em; margin-bottom: 1em; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 18px; line-height: 1.61111em; font-family: AvenirNext, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline; color: rgb(51, 71, 91);\"><a href=\"https://offers.hubspot.com/blog-post-templates?hubs_post-cta=image&amp;hubs_signup-url=blog.hubspot.com/marketing/types-of-blog-headlines&amp;hubs_signup-cta=null&amp;hubs_post=blog.hubspot.com/marketing/types-of-blog-headlines\" rel=\"noopener\" target=\"_blank\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 600; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; color: rgb(0, 122, 140); text-decoration-line: underline;\"></a></p></p><h4 style=\"box-sizing: border-box; margin: 0.5em 0px; padding: 0px; border: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: 600; font-stretch: inherit; font-size: 1.375rem; line-height: 1.36em; font-family: AvenirNext, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline; color: rgb(51, 71, 91); letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\">Featured Resource:<span>&nbsp;</span><a href=\"https://offers.hubspot.com/blog-post-templates?hubs_post-cta=header&amp;hubs_signup-url=blog.hubspot.com/marketing/types-of-blog-headlines&amp;hubs_signup-cta=Free%20Blog%20Post%20Templates&amp;hubs_post=blog.hubspot.com/marketing/types-of-blog-headlines\" rel=\"noopener\" target=\"_blank\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: 600; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; color: rgb(0, 145, 174); text-decoration: none;\">Free Blog Post Templates</a></h4>', '1657539235.jpg', 1, 0, '2022-07-11 06:03:55', '2022-07-11 06:03:55');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `delete_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ceos`
--

CREATE TABLE `ceos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `delete_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ceos`
--

INSERT INTO `ceos` (`id`, `Name`, `email`, `contact`, `designation`, `address`, `images`, `status`, `delete_status`, `created_at`, `updated_at`) VALUES
(1, 'Jarrod Bond', NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-07-12 04:43:20', '2022-07-12 04:43:20');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contactsales`
--

CREATE TABLE `contactsales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `beds` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bathroom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_course` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delete_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `c_name`, `c_image`, `parent_course`, `description`, `delete_status`, `created_at`, `updated_at`) VALUES
(1, 'Engineering Courses', '1657710825.jpg', 'Courses', '<p>kfjkdrgjfddfmnvjnfbn</p>', 0, '2022-07-13 04:23:04', '2022-07-13 06:20:53'),
(2, 'Medical Courses', NULL, 'Courses', '<p>ds</p>', 0, '2022-07-13 04:23:32', '2022-07-13 04:23:32'),
(3, 'Computer Science', NULL, 'Courses', '<p>dsada</p>', 0, '2022-07-13 04:23:52', '2022-07-13 04:23:52'),
(4, 'Managements Courses', NULL, 'Courses', '<p>dfsd</p>', 0, '2022-07-13 04:24:49', '2022-08-02 07:58:39'),
(5, 'Law Course', NULL, 'Courses', '<p>sdaks</p>', 0, '2022-07-13 04:25:11', '2022-07-13 04:25:11'),
(6, 'Polytechnic/Diploma in Engineering', '1657714997.webp', 'Engineering Courses', '<p>&nbsp;</p><h4>&nbsp;</h4><h4><strong>Polytechnic / Diploma &nbsp;In Engg. (ME,EE,CE,CS,EC) &nbsp;3 Year ( 6 Sem ) &nbsp; &nbsp; &nbsp;32000/- Year &nbsp; &nbsp; 10th Pass/Equivalent&nbsp;</strong></h4><h4><strong>Polytechnic / Diploma &nbsp;In Engg. (ME,EE,CE,CS,EC) &nbsp;2 Year ( 4 Sem ) &nbsp; &nbsp; &nbsp;32000/- Year &nbsp; &nbsp; 12th (PCM)/ ITI/Equivalent&nbsp;</strong></h4><p>&nbsp;</p>', 0, '2022-07-13 04:30:11', '2022-07-31 09:46:14'),
(7, 'B.Tech.', '1657710871.jpg', 'Engineering Courses', '<h4><strong>B.Tech.(ME,EE,CE,CS,EEE) &nbsp;4 Year ( 8 Sem ) &nbsp; &nbsp; &nbsp;60000/- Year &nbsp; &nbsp; 12th (PCM)/ I.T.I./Equivalent&nbsp;</strong></h4><h4><strong>B.Tech.(ME,EE,CE,CS,EEE) &nbsp;3 Year ( 6 Sem ) &nbsp; &nbsp; &nbsp;60000/- Year &nbsp; &nbsp; Polytechnic/B.Sc.(PCM)/ Equivalent&nbsp;</strong></h4>', 0, '2022-07-13 04:31:00', '2022-07-31 09:59:01'),
(8, 'Pharmacy', NULL, 'Medical Courses', '<h2>About Thyrocare Lab</h2><p>Lorem, ipsum dolor sit amet Lorem ipsum dolor sit amet. consectetur Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo magnam a reiciendis nisi corrupti voluptatum! adipisicing elit quod debitis praesentium pariatur temporibus ipsa, cum quidem obcaecati sunt?</p>', 0, '2022-07-13 04:31:47', '2022-07-13 04:31:47'),
(9, 'Nusring', '1657706534.jpg', 'Medical Courses', '<h2>About Thyrocare Lab</h2><p>Lorem, ipsum dolor sit amet Lorem ipsum dolor sit amet. consectetur Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo magnam a reiciendis nisi corrupti voluptatum! adipisicing elit quod debitis praesentium pariatur temporibus ipsa, cum quidem obcaecati sunt?</p>', 0, '2022-07-13 04:32:14', '2022-07-13 04:32:14'),
(10, 'Nutropathy', '1657706569.jpg', 'Medical Courses', '<h2>About Thyrocare Lab</h2><p>Lorem, ipsum dolor sit amet Lorem ipsum dolor sit amet. consectetur Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo magnam a reiciendis nisi corrupti voluptatum! adipisicing elit quod debitis praesentium pariatur temporibus ipsa, cum quidem obcaecati sunt?</p>', 0, '2022-07-13 04:32:49', '2022-07-13 04:32:49'),
(11, 'D. Pharma(Al)', '1657706632.jpg', 'Pharmacy', '<h3><strong>Diploma &nbsp;In Pharmacy (All) &nbsp; &nbsp;2 Year &nbsp; &nbsp; 120000/- Year &nbsp; &nbsp; 12th (PCM)/12th (PCB) /Equivalent</strong></h3>', 0, '2022-07-13 04:33:52', '2022-07-31 10:18:20'),
(12, 'D. Pharma(Ay)', '1657706708.jpg', 'Pharmacy', '<h3><strong>Diploma &nbsp;In Pharmacy (Ay) &nbsp; &nbsp;2 Year &nbsp; &nbsp; &nbsp;60000/- Year &nbsp; &nbsp; &nbsp; 12th (PCM)/12th (PCB) /Equivalent</strong></h3><h4>&nbsp;</h4>', 0, '2022-07-13 04:35:08', '2022-07-31 10:20:30'),
(13, 'GNM', '1657706735.jpg', 'Nusring', '<h2>About Thyrocare Lab</h2><p>Lorem, ipsum dolor sit amet Lorem ipsum dolor sit amet. consectetur Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo magnam a reiciendis nisi corrupti voluptatum! adipisicing elit quod debitis praesentium pariatur temporibus ipsa, cum quidem obcaecati sunt?</p>', 0, '2022-07-13 04:35:35', '2022-07-13 04:35:35'),
(14, 'DNYS', '1657706773.jpg', 'Nutropathy', '<h2>About Thyrocare Lab</h2><p>Lorem, ipsum dolor sit amet Lorem ipsum dolor sit amet. consectetur Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo magnam a reiciendis nisi corrupti voluptatum! adipisicing elit quod debitis praesentium pariatur temporibus ipsa, cum quidem obcaecati sunt?</p>', 0, '2022-07-13 04:36:13', '2022-07-13 04:36:13'),
(15, 'BCA', '1657706806.jpg', 'Computer Science', '<h2>About Thyrocare Lab</h2><p>Lorem, ipsum dolor sit amet Lorem ipsum dolor sit amet. consectetur Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo magnam a reiciendis nisi corrupti voluptatum! adipisicing elit quod debitis praesentium pariatur temporibus ipsa, cum quidem obcaecati sunt?</p>', 0, '2022-07-13 04:36:46', '2022-07-13 04:36:46'),
(16, 'MCA', '1657706840.jpg', 'Computer Science', '<h2>About Thyrocare Lab</h2><p>Lorem, ipsum dolor sit amet Lorem ipsum dolor sit amet. consectetur Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo magnam a reiciendis nisi corrupti voluptatum! adipisicing elit quod debitis praesentium pariatur temporibus ipsa, cum quidem obcaecati sunt?</p>', 0, '2022-07-13 04:37:20', '2022-07-13 04:37:20'),
(17, 'BBA', '1657706892.jpg', 'Managements Courses', '<h2>About Thyrocare Lab</h2><p>Lorem, ipsum dolor sit amet Lorem ipsum dolor sit amet. consectetur Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo magnam a reiciendis nisi corrupti voluptatum! adipisicing elit quod debitis praesentium pariatur temporibus ipsa, cum quidem obcaecati sunt?</p>', 0, '2022-07-13 04:38:12', '2022-07-13 04:38:12'),
(18, 'MBA(Marketing, HR, Finance)', '1657706942.jpg', 'Managements Courses', '<h2>About Thyrocare Lab</h2><p>Lorem, ipsum dolor sit amet Lorem ipsum dolor sit amet. consectetur Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo magnam a reiciendis nisi corrupti voluptatum! adipisicing elit quod debitis praesentium pariatur temporibus ipsa, cum quidem obcaecati sunt?</p>', 0, '2022-07-13 04:39:02', '2022-07-13 04:39:02'),
(19, 'M.COM', '1657706974.jpg', 'Managements Courses', '<h2>About Thyrocare Lab</h2><p>Lorem, ipsum dolor sit amet Lorem ipsum dolor sit amet. consectetur Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo magnam a reiciendis nisi corrupti voluptatum! adipisicing elit quod debitis praesentium pariatur temporibus ipsa, cum quidem obcaecati sunt?</p>', 0, '2022-07-13 04:39:34', '2022-07-13 04:39:34'),
(20, 'LLB', '1657707021.png', 'Law Course', '<h2>About Thyrocare Lab</h2><p>Lorem, ipsum dolor sit amet Lorem ipsum dolor sit amet. consectetur Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo magnam a reiciendis nisi corrupti voluptatum! adipisicing elit quod debitis praesentium pariatur temporibus ipsa, cum quidem obcaecati sunt?</p>', 0, '2022-07-13 04:40:21', '2022-07-13 04:40:21');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `delete_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `Name`, `email`, `contact`, `subject`, `message`, `status`, `delete_status`, `created_at`, `updated_at`) VALUES
(1, 'demo', 'admin@gmail.com', '1535687', NULL, 'fgkljdfdsnam,cv', 1, 0, '2022-07-11 05:26:30', '2022-07-11 05:26:30'),
(2, 'demo', 'admin@gmail.com', '52414578', NULL, 'rfgojkdasmnfd', 1, 0, '2022-07-11 05:31:05', '2022-07-11 05:31:05'),
(3, 'Teresa Milano', 'teresa.milano@gmail.com', '(02) 6167 3148', NULL, 'I registered on the website last week and filled in my details. But since yesterday I can\'t log in to my profile. Help me fix everything. Here is a link to my page ►►►  https://lnk.do/hm3rWS  ✅. Thanks! Annabel', 1, 0, '2022-07-16 14:29:28', '2022-07-16 14:29:28'),
(4, 'Ankush shah', 'ankushshah2004@gmail.com', '9026992966', NULL, 'Hi', 1, 0, '2022-07-23 01:56:44', '2022-07-23 01:56:44'),
(5, 'RAJU YADAV', 'mpscomputer4@gmail.com', '9125445563', NULL, 'admission', 1, 0, '2022-07-26 15:35:40', '2022-07-26 15:35:40'),
(6, 'Kelle Bush', '5hoss@gmailup.com', '02.20.46.95.55', NULL, 'I was wondering if you wanted to submit your new site to our free business directory? bit.ly/submit_site_4lSEZtY470R0', 1, 0, '2022-07-29 08:39:52', '2022-07-29 08:39:52'),
(7, 'Sakshi Yadav', 'rohitsosu2224@gmail.com', '7307498017', NULL, 'tell us about gnm', 1, 0, '2022-07-30 12:04:21', '2022-07-30 12:04:21'),
(8, 'John Kuntharayil Thomas', 'johnkuntharayilthomas73@gmail.com', '+917688803170', NULL, 'Interested in doing polytechnic diploma in mechanical engineering through non attending mode', 1, 0, '2022-08-06 02:17:39', '2022-08-06 02:17:39'),
(9, 'CynthiaWep', 'mm.a.rkizdes.and.@gmail.com', '89197512596', NULL, 'This phrase is simply matchless :), it is pleasant to me))) \r\n \r\nmindfulness \r\n<a href=https://kinkymatureporn.com>mixed wrestling foot domination</a> \r\n@SgfhsS%aw43', 1, 0, '2022-08-08 21:57:14', '2022-08-08 21:57:14'),
(10, 'Idk3sss1pz', 'krav-1983@bk.ru', '85727841778', NULL, 'Выплата на карту № 7216 **** **** **** ЗАВЕРШЕНА  \r\n \r\nПодробнее: https://docs.google.com/document/d/AAAangidealgroup.inBBB/view', 1, 0, '2022-08-09 22:24:51', '2022-08-09 22:24:51'),
(11, 'TommyViots', 'jackdon1@privatezmail.com', '85761844721', NULL, 'In it something is. Thanks for the help in this question, can I too I can to you than that to help?\r\n https://thetranny.com/videos/63830/tranny-fucks-guy/\r\nhttps://thetranny.com/videos/77056/most-beautiful-trannys-compilation/', 1, 0, '2022-08-10 00:47:12', '2022-08-10 00:47:12'),
(12, 'Crytoundef', 'jungh2yun@yahoo.com', '89037961039', NULL, 'बस एक क्लिक से आप डॉलर को $1000 में बदल सकते हैं ।  https://emup.rbertilsson.se/', 1, 0, '2022-08-11 10:38:24', '2022-08-11 10:38:24'),
(13, 'TommyViots', 'jackdon1@privatezmail.com', '86967829563', NULL, 'What do you advise to me?\r\n https://zeenite.com/videos/58049/syren-de-mer-taboo-mom/\r\nhttps://thetranny.com/videos/57713/transsexuals-cumming-in-boys-throats-compilation/', 1, 0, '2022-08-11 13:29:59', '2022-08-11 13:29:59'),
(14, 'Crytoundef', 'gregorivanov@email.org', '89032932967', NULL, 'फिर भी करोड़पति नहीं? इसे अभी ठीक करें! https://emup.rbertilsson.se/', 1, 0, '2022-08-12 16:26:48', '2022-08-12 16:26:48'),
(15, 'Alicetwelp', 'm.m.a.rki.zde.s.an.d@gmail.com', '85317696619', NULL, 'I better, perhaps, shall keep silent \r\n \r\nwatch over \r\n<a href=https://xcavy.com/videos/29402/trahnul-mujik-v-uzkuyu-kisku/>sexy muscle daddy</a> \r\n@DFG#$%a%s%f', 1, 0, '2022-08-13 18:06:56', '2022-08-13 18:06:56'),
(16, 'Crytoundef', 'goodn.e.wsm.ax@gmail.com', '89037396386', NULL, 'पैसे चाहिए? इसे यहाँ आसानी से प्राप्त करें? https://emup.rbertilsson.se/', 1, 0, '2022-08-13 22:25:54', '2022-08-13 22:25:54'),
(17, 'Crytoundef', 'wessryder@yahoo.com', '89039033106', NULL, 'छोटे निवेश तेजी से टन डॉलर ला सकते हैं ।  https://emup.rbertilsson.se/', 1, 0, '2022-08-15 04:15:31', '2022-08-15 04:15:31'),
(18, 'Alicetwelp', 'mm.a.rki.z.d.e.s.a.n.d@gmail.com', '84855671428', NULL, 'I think, that you are not right. I am assured. I can defend the position. \r\n \r\nguardianship \r\n<a href=https://xcavy.com/videos/30047/mackerel-can-fellatio-sex-for-halloween-girls/>gloved mistress</a> \r\n@DFG#$%a%s%f', 1, 0, '2022-08-15 09:34:01', '2022-08-15 09:34:01'),
(19, 'Crytoundef', 'vcastillo@juno.com', '89030459936', NULL, 'जब आप आराम करते हैं तो रोबोट आपको पैसे लाता है ।  https://emup.rbertilsson.se/', 1, 0, '2022-08-16 01:10:08', '2022-08-16 01:10:08'),
(20, 'Crytoundef', 'berryjess21@yahoo.com', '89033672431', NULL, 'वित्तीय स्वतंत्रता वह है जो यह रोबोट गारंटी देता है ।  https://emup.rbertilsson.se/', 1, 0, '2022-08-16 10:28:45', '2022-08-16 10:28:45'),
(21, 'Crytoundef', 'jvigers@comcast.net', '89036671225', NULL, 'वित्तीय स्वतंत्रता के लिए दौड़ने वाले सभी लोगों के लिए सबसे अच्छा तरीका ।  https://emup.rbertilsson.se/', 1, 0, '2022-08-16 12:41:37', '2022-08-16 12:41:37'),
(22, 'Crytoundef', 'jmi6551@aol.com', '89031711776', NULL, 'पैसे चाहिए? इसे यहाँ आसानी से प्राप्त करें? https://emup.rbertilsson.se/', 1, 0, '2022-08-16 15:16:29', '2022-08-16 15:16:29'),
(23, 'Crytoundef', 'staciy05@yahoo.com', '89031053501', NULL, 'अगर आप फाइनेंशियल रोबोट का इस्तेमाल करते हैं तो पैसा कमाना बहुत आसान है ।  https://emup.rbertilsson.se/', 1, 0, '2022-08-16 17:33:52', '2022-08-16 17:33:52'),
(24, 'Crytoundef', 'puroclan@hotmail.com', '89035147985', NULL, 'वाह! यह वित्तीय स्वतंत्रता के लिए सबसे तेज़ तरीका है ।  https://emup.rbertilsson.se/', 1, 0, '2022-08-16 19:51:31', '2022-08-16 19:51:31'),
(25, 'Crytoundef', 'frawgslurp@hotmail.com', '89039044948', NULL, 'आय के लिए आगे देख रहे हैं? इसे ऑनलाइन प्राप्त करें ।  https://emup.rbertilsson.se/', 1, 0, '2022-08-16 22:09:28', '2022-08-16 22:09:28'),
(26, 'Crytoundef', 'fordfamily07@icloud.com', '89031275293', NULL, 'वित्तीय रोबोट आपका भविष्य का धन और स्वतंत्रता है ।  https://emup.rbertilsson.se/', 1, 0, '2022-08-17 00:27:04', '2022-08-17 00:27:04'),
(27, 'Crytoundef', 'Carylec@frontiernet.net', '89037422229', NULL, 'वह सब कुछ खरीदें जो आप ऑनलाइन पैसा कमाना चाहते हैं ।  https://emup.rbertilsson.se/', 1, 0, '2022-08-17 02:46:41', '2022-08-17 02:46:41'),
(28, 'Crytoundef', 'qqycx1995@163.com', '89039545807', NULL, 'प्रत्येक दिन सैकड़ों पीठ बनाना सीखें। https://emup.rbertilsson.se/', 1, 0, '2022-08-17 05:03:51', '2022-08-17 05:03:51'),
(29, 'Crytoundef', 'forhadali18@gmail.com', '89030647340', NULL, 'प्रत्येक दिन सैकड़ों पीठ बनाना सीखें। https://emup.rbertilsson.se/', 1, 0, '2022-08-17 07:23:03', '2022-08-17 07:23:03'),
(30, 'Crytoundef', 'lhelmbrecht@yahoo.com', '89035249579', NULL, 'हमने अमीर होने का सबसे तेज़ तरीका ढूंढ लिया है ।  इसे यहां खोजें। https://emup.rbertilsson.se/', 1, 0, '2022-08-17 09:40:26', '2022-08-17 09:40:26');

-- --------------------------------------------------------

--
-- Table structure for table `experts`
--

CREATE TABLE `experts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `delete_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `delete_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `Name`, `email`, `subject`, `message`, `images`, `status`, `delete_status`, `created_at`, `updated_at`) VALUES
(1, 'Dev', 'dev@gmail.com', 'demo', 'Hiii this is dev...', '1657530881.jpg', 1, 0, '2022-07-11 03:44:41', '2022-07-11 03:44:41'),
(2, 'fusa', 'buzele@mailinator.com', 'demo', 'hi this is fusa ....', '1657530946.jpg', 1, 0, '2022-07-11 03:45:46', '2022-07-11 03:45:46'),
(3, 'gyan', 'admin@gmail.com', 'demo subject', 'Well, seems like a nice plugin and all, but it doesn\'t work on mac.. ( Tried to open the \"Generate\" by shortcut and by right-click - no such luck..', '1657530973.jpg', 1, 0, '2022-07-11 03:46:13', '2022-07-11 03:46:13'),
(4, 'Jhon', 'demo@gmail.com', 'demo subject', 'Well, seems like a nice plugin and all, but it doesn\'t work on mac.. ( Tried to open the \"Generate\" by shortcut and by right-click - no such luck..', '1657530995.jpg', 1, 0, '2022-07-11 03:46:35', '2022-07-11 03:46:35');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lab` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `delete_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `images`, `lab`, `status`, `delete_status`, `created_at`, `updated_at`) VALUES
(1, 'sd', '1657545237.jpg', NULL, 1, 0, '2022-07-11 07:43:57', '2022-07-11 07:43:57'),
(2, 's', '1657545248.jpg', NULL, 1, 0, '2022-07-11 07:44:08', '2022-07-11 07:44:08'),
(3, 'a', '1657545258.jpg', NULL, 1, 0, '2022-07-11 07:44:18', '2022-07-11 07:44:18'),
(4, 'a', '1657545269.jpg', NULL, 1, 0, '2022-07-11 07:44:29', '2022-07-12 00:11:28'),
(5, 'd', '1657545280.jpg', 'on', 1, 1, '2022-07-11 07:44:40', '2022-07-11 07:56:56'),
(6, 'c', '1657545292.jpg', 'on', 1, 0, '2022-07-11 07:44:52', '2022-07-12 00:11:02'),
(7, 'c', '1657545304.webp', 'on', 1, 0, '2022-07-11 07:45:04', '2022-07-12 00:11:50'),
(8, 'z', '1657545318.jpg', 'on', 1, 0, '2022-07-11 07:45:18', '2022-07-11 07:45:18'),
(9, 'e', '1657545332.jpg', NULL, 1, 1, '2022-07-11 07:45:32', '2022-07-11 07:57:38'),
(10, 'aaa', '1657545343.webp', NULL, 1, 0, '2022-07-11 07:45:43', '2022-07-12 00:12:04'),
(11, 'd', '1657545358.jpg', 'on', 1, 0, '2022-07-11 07:45:58', '2022-07-11 07:45:58'),
(12, 'dsfsdf', '1657546035.jpg', NULL, 1, 0, '2022-07-11 07:57:15', '2022-07-11 07:57:15'),
(13, 'd', '1657546404.webp', NULL, 1, 0, '2022-07-11 08:03:24', '2022-07-11 08:03:24'),
(14, 'e', '1657546493.jpg', NULL, 1, 0, '2022-07-11 08:04:53', '2022-07-11 08:04:53'),
(15, 'sd', '1657603001.jpg', NULL, 1, 0, '2022-07-11 23:46:41', '2022-07-12 00:12:17'),
(16, 'd', '1657603124.png', NULL, 1, 1, '2022-07-11 23:48:44', '2022-07-11 23:50:29');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_16_065139_create_galleries_table', 1),
(6, '2022_06_16_075326_create_ourteams_table', 1),
(7, '2022_06_16_090049_create_enquiries_table', 1),
(8, '2022_06_16_091607_create_feedback_table', 1),
(9, '2022_06_16_102825_create_subscribes_table', 1),
(10, '2022_06_16_115130_create_services_table', 1),
(11, '2022_06_16_122905_create_blogs_table', 1),
(12, '2022_06_23_090921_create_settings_table', 1),
(13, '2022_06_24_113337_create_experts_table', 1),
(14, '2022_06_27_045250_create_ceos_table', 1),
(15, '2022_06_27_051736_create_properties_table', 1),
(16, '2022_06_27_051949_create_partners_table', 1),
(17, '2022_06_27_055459_create_agents_table', 1),
(18, '2022_06_28_065555_create_comments_table', 1),
(19, '2022_06_28_105617_create_careers_table', 1),
(20, '2022_07_06_115547_create_contactsales_table', 1),
(21, '2022_07_06_173014_create_plotmodels_table', 1),
(24, '2022_07_12_094317_create_abouts_table', 2),
(26, '2022_07_13_054422_create_courses_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `ourteams`
--

CREATE TABLE `ourteams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `delete_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `delete_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plotmodels`
--

CREATE TABLE `plotmodels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `property_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `running_p` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upcomming_p` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `special` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `t_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'sale',
  `delete_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `delete_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_optional` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insta_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pinterest_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_about` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `g_map` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delete_status` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `company_name`, `logo`, `contact_no`, `url`, `contact_optional`, `address`, `email`, `facebook_link`, `twitter_link`, `insta_link`, `linkedin_link`, `pinterest_link`, `google_link`, `f_about`, `g_map`, `delete_status`, `status`, `created_at`, `updated_at`) VALUES
(1, 'A.N.G. IDEAL GROUP OF INSTITUTIONS', '1657525252.png', '8009354629,9517014343', 'https://angidealgroup.in', '7800542000,9936085516', 'Saraytakki, Babatpur (Near Airport) Varanasi NH-31, Airport Road, Varanasi, Uttar Pradesh 221105', 'angidealgroup2007@gmail.com', 'https://www.facebook.com/ang ideal group', 'https://twitter.com/', 'https://www.instagram.com/', 'https://www.linkedin.com/', 'https://in.pinterest.com/', 'https://myaccount.google.com/', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus alias exercitationem ad iste deleniti ex at maxime. Praesentium commodi molestias omnis ut quisquam, animi magnam accusamus, recusandae, architecto reiciendis repellendus.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10548.802169892755!2d82.85671128703498!3d25.441596212158235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xaeb4cf207aada5fa!2sA.N.G.%20IDEAL%20Group%20Of%20Institutions!5e1!3m2!1sen!2sin!4v1658130555372!5m2!1sen!2sin', 0, 1, '2022-07-11 02:10:52', '2022-07-19 18:38:45');

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Subscribe At` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Un subscribe At` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delete_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribes`
--

INSERT INTO `subscribes` (`id`, `email`, `Subscribe At`, `Un subscribe At`, `delete_status`, `created_at`, `updated_at`) VALUES
(1, 'demo@gmail.com', NULL, NULL, 0, '2022-07-11 04:18:10', '2022-07-11 04:18:10'),
(2, 'test1@gmail.com', NULL, NULL, 0, '2022-07-11 07:14:17', '2022-07-11 07:14:17'),
(3, 'vijaykumarvns20@gmail.com', NULL, NULL, 0, '2022-07-14 04:11:06', '2022-07-14 04:11:06'),
(4, 'vijaykumarvns20@gmail.com', NULL, NULL, 0, '2022-07-24 14:25:22', '2022-07-24 14:25:22'),
(5, 'arjun84189@gmail.com', NULL, NULL, 0, '2022-07-29 11:36:15', '2022-07-29 11:36:15'),
(6, 'arjun84189@gmail.com', NULL, NULL, 0, '2022-07-29 11:36:16', '2022-07-29 11:36:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$H6KwTGfS/yfnqNaDxJfow.guvcsckod0SjoaM7EVldbdubpEuWx6K', NULL, '2022-07-11 01:38:16', '2022-07-11 01:38:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ceos`
--
ALTER TABLE `ceos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactsales`
--
ALTER TABLE `contactsales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experts`
--
ALTER TABLE `experts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ourteams`
--
ALTER TABLE `ourteams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `plotmodels`
--
ALTER TABLE `plotmodels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ceos`
--
ALTER TABLE `ceos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contactsales`
--
ALTER TABLE `contactsales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `experts`
--
ALTER TABLE `experts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `ourteams`
--
ALTER TABLE `ourteams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plotmodels`
--
ALTER TABLE `plotmodels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
