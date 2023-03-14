-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2022 at 02:27 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertises`
--

CREATE TABLE `advertises` (
  `id` int(11) NOT NULL,
  `position` int(2) NOT NULL,
  `adcode` varchar(2048) NOT NULL,
  `status` smallint(3) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `loginname` varchar(64) NOT NULL,
  `clienttype` smallint(6) NOT NULL DEFAULT 1,
  `fullname` varchar(256) NOT NULL,
  `mobile` varchar(32) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `address` varchar(1024) DEFAULT NULL,
  `status` smallint(1) NOT NULL DEFAULT 3,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `name` varchar(256) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `phone` varchar(32) DEFAULT NULL,
  `body` text NOT NULL,
  `status` smallint(1) NOT NULL DEFAULT 3,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(11) NOT NULL,
  `contenttype` smallint(2) NOT NULL,
  `title` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `details` text COLLATE utf8_unicode_ci NOT NULL,
  `imgname` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `metatitle` varchar(512) COLLATE utf8_unicode_ci DEFAULT NULL,
  `metakey` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `metades` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seq` smallint(2) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contents`
--

-- --------------------------------------------------------

--
-- Table structure for table `pagesettings`
--

CREATE TABLE `pagesettings` (
  `id` smallint(2) NOT NULL,
  `pagename` varchar(16) NOT NULL,
  `metatitle` varchar(256) NOT NULL,
  `metakey` varchar(256) NOT NULL,
  `metades` varchar(256) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pagesettings`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `reporter` varchar(256) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `genus` smallint(1) NOT NULL DEFAULT 1,
  `productcode` varchar(32) DEFAULT NULL,
  `title` varchar(512) NOT NULL,
  `shoulder` varchar(256) DEFAULT NULL,
  `hanger` varchar(256) DEFAULT NULL,
  `entireview` int(9) NOT NULL DEFAULT 0,
  `summary` varchar(1024) DEFAULT NULL,
  `details` text NOT NULL,
  `tagged` varchar(1024) DEFAULT NULL,
  `topseq` smallint(2) NOT NULL DEFAULT 0,
  `headingbox` smallint(2) DEFAULT NULL,
  `featurebox` mediumint(2) DEFAULT NULL,
  `live` smallint(2) DEFAULT NULL,
  `status` smallint(1) NOT NULL DEFAULT 1,
  `isbreaking` smallint(1) DEFAULT NULL,
  `ishome` smallint(3) NOT NULL DEFAULT 0,
  `pDate` varchar(256) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--
-- --------------------------------------------------------

--
-- Table structure for table `products_reporters`
--

CREATE TABLE `products_reporters` (
  `product_id` int(11) NOT NULL,
  `reporter_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products_tags`
--

CREATE TABLE `products_tags` (
  `product_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `isrun` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products_tags`
--

-- --------------------------------------------------------

--
-- Table structure for table `reporters`
--

CREATE TABLE `reporters` (
  `id` int(11) NOT NULL,
  `slug` varchar(256) NOT NULL,
  `namebn` varchar(256) NOT NULL,
  `nameen` varchar(256) NOT NULL,
  `location` varchar(64) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `status` smallint(1) NOT NULL DEFAULT 1,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- --------------------------------------------------------

--
-- Table structure for table `siteoptions`
--

CREATE TABLE `siteoptions` (
  `id` int(5) NOT NULL,
  `okey` varchar(16) NOT NULL,
  `ovalue` varchar(2048) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `siteoptions`
--

INSERT INTO `siteoptions` (`id`, `okey`, `ovalue`, `created`, `modified`) VALUES
(1, 'web_copyright', '© ২০২২ সর্বস্বত্ব স্বত্বাধিকার সংরক্ষিত', '2021-04-14 19:28:16', '2022-01-14 04:35:46'),
(2, 'web_live', '2', '2021-04-22 21:26:58', '2021-07-15 06:01:57'),
(3, 'web_layout', 'newsbd2', NULL, '2022-10-06 12:57:08'),
(4, 'web_url', 'http://localhost/news24', NULL, NULL),
(5, 'web_facebook', 'https://www.facebook.com/news24bdonline', NULL, '2022-02-01 15:29:32'),
(6, 'web_twitter', 'https://twitter.com/News24bdNet', NULL, '2022-02-02 10:47:17'),
(9, 'web_youtube', 'https://www.youtube.com/channel/UCY3oxPh3cvbOJ376ci7RIjQ', NULL, NULL),
(10, 'web_linkedin', 'https://www.news24bd.net/#', NULL, NULL),
(11, 'web_resource', 'http://localhost/news24', NULL, NULL),
(12, 'web_author', 'News24BD', '2021-04-14 19:28:16', '2021-04-14 19:28:16'),
(13, 'web_publisher', 'News24BD', '2021-04-14 19:28:16', '2021-04-14 19:28:16'),
(14, 'web_name', 'News24BD', '2021-04-14 19:28:16', '2021-04-14 19:28:16'),
(15, 'web_googlenews', 'https://news.google.com/publications/CAAqBwgKMLKspgswmre-Aw', NULL, NULL),
(16, 'web_rssfeed', 'https://www.news24bd.net/rss.xml\r\n', NULL, NULL),
(17, 'web_header', '<script async src=\"https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5183503663089719\"\r\n     crossorigin=\"anonymous\"></script>\r\n\r\n<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-213842645-1\"></script>\r\n<script>\r\n  window.dataLayer = window.dataLayer || [];\r\n  function gtag(){dataLayer.push(arguments);}\r\n  gtag(\'js\', new Date());\r\n\r\n  gtag(\'config\', \'UA-213842645-1\');\r\n</script>\r\n', NULL, '2022-02-02 18:04:52'),
(18, 'web_body', '<!-- Body -->', NULL, '2022-02-01 15:34:21'),
(19, 'web_gallery', '#B30F0F', NULL, '2022-02-15 06:15:43'),
(20, 'web_cook', '#b40000', NULL, '2022-02-06 12:43:48'),
(21, 'web_exclusive', '#b40000', NULL, '2022-02-08 10:59:54'),
(22, 'web_latest', '#f1f1f1', NULL, '2022-02-15 06:17:10'),
(23, 'web_latest_txt', '#000000', NULL, '2022-02-06 11:46:31'),
(24, 'web_lead', '#B30F0F', NULL, '2022-02-23 12:04:38'),
(25, 'web_ticker', '#B30F0F', NULL, '2022-02-23 11:40:12'),
(26, 'web_ticker_txt', '#f1f1f1', NULL, '2022-02-24 08:41:16'),
(27, 'web_lead_count', '5', NULL, '2022-03-09 07:03:47'),
(28, 'web_breaking_bg', '#B30F0F', NULL, '2022-02-23 11:40:12'),
(29, 'web_breaking_txt', '#fff', NULL, '2022-02-23 11:40:12');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `tagtype` smallint(1) NOT NULL,
  `title` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `details` text COLLATE utf8_unicode_ci NOT NULL,
  `imgname` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `content_id` int(11) DEFAULT NULL,
  `pagelink` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seq` smallint(3) NOT NULL DEFAULT 0,
  `isspecial` int(2) NOT NULL DEFAULT 0,
  `layout` smallint(2) NOT NULL DEFAULT 1,
  `metatitle` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(230) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags_1`
--

CREATE TABLE `tags_1` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `tagtype` smallint(1) NOT NULL,
  `title` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `details` text COLLATE utf8_unicode_ci NOT NULL,
  `imgname` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `content_id` int(11) DEFAULT NULL,
  `pagelink` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seq` smallint(3) NOT NULL DEFAULT 0,
  `isspecial` int(2) NOT NULL DEFAULT 0,
  `layout` smallint(2) NOT NULL DEFAULT 1,
  `metatitle` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(230) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tags_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `imgname` varchar(64) NOT NULL,
  `caption` varchar(512) DEFAULT NULL,
  `imgurl` varchar(512) DEFAULT NULL,
  `status` smallint(1) NOT NULL DEFAULT 2,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `uploads`
--


-- --------------------------------------------------------

--
-- Table structure for table `upvideos`
--

CREATE TABLE `upvideos` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `title` varchar(512) NOT NULL,
  `category` varchar(256) DEFAULT NULL,
  `sourcelink` varchar(256) DEFAULT NULL,
  `embedlink` varchar(2000) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `vduration` time DEFAULT NULL,
  `status` smallint(1) NOT NULL DEFAULT 1,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `upvideos`
--


-- --------------------------------------------------------

--
-- Table structure for table `usercontrolls`
--

CREATE TABLE `usercontrolls` (
  `id` int(11) NOT NULL,
  `usergroup_id` int(11) NOT NULL,
  `controller` varchar(32) NOT NULL,
  `action` varchar(32) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usercontrolls`
--

INSERT INTO `usercontrolls` (`id`, `usergroup_id`, `controller`, `action`, `status`) VALUES
(2, 4, 'products', 'add', 1),
(3, 5, 'products', 'add', 1),
(4, 6, 'products', 'add', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usergroups`
--

CREATE TABLE `usergroups` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usergroups`
--

INSERT INTO `usergroups` (`id`, `name`) VALUES
(3, 'Super Admin'),
(4, 'Admin'),
(5, 'Editor'),
(6, 'Moderator');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `usergroup_id` smallint(2) NOT NULL,
  `name` varchar(256) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(1) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `usergroup_id`, `name`, `email`, `password`, `status`, `created`, `modified`) VALUES
(6, 3, 'a', 'a@a.com', '$2y$10$K5vXG0n5KCogxda5FAxVXeycdAjMRW/DhuYn/tB2UrrDGHoRFj2Am', 1, '2021-11-06 04:23:18', '2022-01-08 06:51:12');

-- --------------------------------------------------------

--
-- Table structure for table `voteoptions`
--

CREATE TABLE `voteoptions` (
  `id` int(11) NOT NULL,
  `vote_id` int(11) NOT NULL,
  `voption` varchar(64) NOT NULL,
  `vcount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` int(11) NOT NULL,
  `title` varchar(1024) NOT NULL,
  `status` smallint(1) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertises`
--
ALTER TABLE `advertises`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `loginname` (`loginname`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `comments` ADD FULLTEXT KEY `body` (`body`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagesettings`
--
ALTER TABLE `pagesettings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pagename` (`pagename`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `products` ADD FULLTEXT KEY `details` (`details`);
ALTER TABLE `products` ADD FULLTEXT KEY `title` (`title`,`details`);

--
-- Indexes for table `products_tags`
--
ALTER TABLE `products_tags`
  ADD PRIMARY KEY (`product_id`,`tag_id`),
  ADD KEY `tag_key` (`tag_id`);

--
-- Indexes for table `reporters`
--
ALTER TABLE `reporters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);
ALTER TABLE `reporters` ADD FULLTEXT KEY `details` (`details`);

--
-- Indexes for table `siteoptions`
--
ALTER TABLE `siteoptions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `okey` (`okey`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `tags` ADD FULLTEXT KEY `title` (`title`);
ALTER TABLE `tags` ADD FULLTEXT KEY `details` (`details`);

--
-- Indexes for table `tags_1`
--
ALTER TABLE `tags_1`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `tags_1` ADD FULLTEXT KEY `title` (`title`);
ALTER TABLE `tags_1` ADD FULLTEXT KEY `details` (`details`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `uploads` ADD FULLTEXT KEY `caption` (`caption`);

--
-- Indexes for table `upvideos`
--
ALTER TABLE `upvideos`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `upvideos` ADD FULLTEXT KEY `title` (`title`);
ALTER TABLE `upvideos` ADD FULLTEXT KEY `details` (`details`);

--
-- Indexes for table `usercontrolls`
--
ALTER TABLE `usercontrolls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usergroups`
--
ALTER TABLE `usergroups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voteoptions`
--
ALTER TABLE `voteoptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertises`
--
ALTER TABLE `advertises`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pagesettings`
--
ALTER TABLE `pagesettings`
  MODIFY `id` smallint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
