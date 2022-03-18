-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2022 at 05:39 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `certeza`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner_posts`
--

CREATE TABLE `banner_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` int(10) UNSIGNED NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banner_posts`
--

INSERT INTO `banner_posts` (`id`, `title`, `status`) VALUES
(1, 1, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(190) NOT NULL,
  `tags` varchar(40) NOT NULL,
  `content` text NOT NULL,
  `photo` varchar(50) NOT NULL,
  `posted` varchar(40) NOT NULL,
  `date` date DEFAULT NULL,
  `author` varchar(40) DEFAULT NULL,
  `category` varchar(40) NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`) VALUES
(1, 'Lifestyle'),
(2, 'Politics / Society'),
(3, 'Fashion'),
(4, 'Career'),
(5, 'Parenting'),
(6, 'Art and Justice'),
(7, 'Health and Fitness');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) DEFAULT NULL,
  `comments` text NOT NULL,
  `comment_sender` text NOT NULL,
  `email` text NOT NULL,
  `post_id` int(10) NOT NULL,
  `commentedon` date NOT NULL,
  `timer` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `parent_comment_id`, `comments`, `comment_sender`, `email`, `post_id`, `commentedon`, `timer`) VALUES
(2, 0, 'Hmmm... Word\nAn awesome piece', 'Adepitan Oluwabusolami', 'oluwabusolami11@gmail.com', 2, '2020-08-09', '00:00:00'),
(3, 0, 'This is so good, Lord help us to discover and walk in our purpose in life.', 'Olamide Daniel', 'olasomojesu@gmail.com', 2, '2020-08-09', '00:00:00'),
(4, 0, 'Nice Piece', 'Abiodun  Samuel', 'samuelaholu15@gmail.com', 2, '2020-08-09', '00:00:00'),
(5, 0, 'Great article here', 'Prodigy', 'Greatnessabolade@outlook.com', 2, '2020-08-09', '00:00:00'),
(6, 0, '\"The impact of our life is measured on how much of Jesus we express\"\nThis part really got me thinking.......', 'Omoniyi Lawal', 'omoniyilawal53@yahoo.com', 2, '2020-08-09', '00:00:00'),
(7, 0, 'Hmmm, the world awaits my manifestation. Powerful', 'TeeWhy', 'toyin4allsouls@gmail.com', 2, '2020-08-09', '00:00:00'),
(8, 0, 'This is really inspiring. Go girl! ', 'Abiodun Oluwabusayo', 'busayoabiodun17@gmail.com', 2, '2020-08-09', '00:00:00'),
(9, 0, 'This piece is focusing om the real existence of men  here on earth. Until all come to this knowledge the world may be living life in total delusion..', 'Abiodun Macarthy ', 'abiodunmacarthy32@gmail.com', 2, '2020-08-09', '00:00:00'),
(10, 0, 'Wawwww pieces piece ...this is impressing, we all need to find an grace or power to maintain our bearing in HIM may God release it upon us,..more knowledge to the writer. This really call my attentions to track my call \nPERMISSION TO COPY AND REPOST \n', 'AlexHkenny', 'hunsakehinde8@gmail.con', 2, '2020-08-10', '00:00:00'),
(11, 0, 'Inspiring !', 'Goodness', 'samuelaholu15@gmail.com', 2, '2020-08-10', '00:00:00'),
(12, 0, 'This is a wonderful piece...thanks for sharing', 'Prince dynamic', 'opeoluwaonafadeji@gmail.com', 2, '2020-08-10', '00:00:00'),
(13, 0, 'Awesome piece here', 'Jay', 'soroyefelicia@gmail.com', 2, '2020-08-10', '00:00:00'),
(14, 0, 'Very fantastic, the more you able to manage your time the easier way to discover your purpose', 'Daniel Olamide', 'olasomojesu@gmail.com', 3, '0000-00-00', '00:00:00'),
(15, 0, 'Nice writeup \nSo helpful', 'Abdulkabir Olamilekan Orthodox', 'saveasoul247@gmail.com', 3, '0000-00-00', '00:00:00'),
(16, 0, 'Very nice write up ðŸ‘ðŸ½ðŸ‘ðŸ½', 'Omodolor Tolulope ', 'odebbytolulope@gmail.com', 3, '0000-00-00', '00:00:00'),
(17, 0, 'Thanks a lot for sharing', 'Pronix77', 'adesewa01@yahoo.com', 3, '0000-00-00', '00:00:00'),
(18, 0, 'Nice write up. God will continue to increase you in knowledge. ', 'Aholu Lydia ', 'aholulydia62@gmail.com', 3, '0000-00-00', '00:00:00'),
(19, 0, 'This so helpful thanks so much', 'Olukotun Esther', 'olukotuntemitope20@gmail.com', 3, '0000-00-00', '00:00:00'),
(20, 0, 'ðŸ’¯ this is nice', 'Wisdom ', 'wisdom_kumuyi@yahoo.co.uk', 3, '0000-00-00', '00:00:00'),
(21, 0, 'I just watched the video and it was really fun and interesting. nice one guys I look forward to more contents. God bless you and have a Grooooovyyyy weekend lol', 'Prince Dynamic ', 'opeoluwaoanafadeji@gmail.com', 5, '0000-00-00', '00:00:00'),
(22, 0, 'I think i missed the Praise session in churchðŸ¤”', 'Luter', 'luteraondona22@gmail.com', 5, '0000-00-00', '00:00:00'),
(23, 0, 'Praise session.\nI missed it alot', 'Luter', 'luteraondona22@gmail.com', 5, '0000-00-00', '00:00:00'),
(24, 0, 'I actually missed the worship andwhole connection with other members\nGreat one ðŸ‘â¤ï¸', 'Bishop sam', 'bishopbosun@gmail.com', 5, '0000-00-00', '00:00:00'),
(25, 0, 'Very nice\nThanks  alot for sharing ', 'Peculiar', 'ezindupeculiar@gmail.com', 3, '0000-00-00', '00:00:00'),
(26, 0, 'Mhen I miss everything, I miss praise and worship session,I miss the sounds,I miss playing with the children and most importantly I miss prayer session especially the early morning altar prayerðŸ˜ðŸ˜ðŸ˜', 'Ibukunoluwa Mercy', 'Olamiposimercy@gmail.com', 5, '0000-00-00', '00:00:00'),
(27, 0, 'Please can we continue with the lockdown as baba said in the video ðŸ¤£ðŸ¤£', 'Samuel', 'samuelaholu15@gmail.com', 5, '0000-00-00', '00:00:00'),
(32, 0, 'I miss all activities that goes on in the church. Because God presence is always here with us in every section of the service.', 'Adams Ayobamidele David', 'doxology360@gmail.com', 5, '0000-00-00', '00:00:00'),
(33, 0, 'I missed youth service', 'Mide', 'olamidesenami98@gmail.com', 5, '0000-00-00', '00:00:00'),
(34, 0, 'Wow!! Quite groovy. ', 'Black Opal', 'toyin4allsouls@gmail.com', 5, '0000-00-00', '00:00:00'),
(35, 0, 'I missed the joy of congregations worshipðŸ‘ŒAMAZING!ðŸ’ƒ\n', 'ANJOLAJESU PELUMI ADUNBI ', 'anjolaadunbi@gmail.com', 5, '0000-00-00', '00:00:00'),
(36, 0, 'Thanks alot for this piece...hmm not paying attention can affect a lot of things and even hurt later on.', 'Prince Dynamic', 'opeoluwaonafadeji@gmail.com', 6, '0000-00-00', '00:00:00'),
(37, 0, 'Great message... The spiritual controls the physical... We have to be sensitive to the spirit. Thanks for this content.', 'Aj Boluwatife', 'Boluwatifeaj121@gmail.com', 6, '0000-00-00', '00:00:00'),
(38, 0, 'Hmmm \nI will start paying attention.\nThanks for this awesome piece ma', 'Adepitan Busolami ', 'oluwabusolami11@gmail.com', 6, '0000-00-00', '00:00:00'),
(39, 0, 'True talk. ', 'Abosede Lizzy Olubunmi Tijani', 'lizzybtjani@gmail.com', 7, '0000-00-00', '00:00:00'),
(40, 0, 'Thank you so much for this piece. Very insiteful. ', 'ANJOLAJESU PELUMI ADUNBI ', 'anjolaadunbi@gmail.com', 7, '0000-00-00', '00:00:00'),
(41, 0, 'Nice piece over here', 'Doteightinc', 'support@doteightinc.com', 7, '0000-00-00', '00:00:00'),
(42, 0, 'What a motivational piece! There is need to always come here for more. Thanks.', 'Olanrewaju Grace', 'olanrewajutosingrace@gmail.com', 7, '0000-00-00', '00:00:00'),
(43, 0, 'The Lord will give us the grace. ', 'Aholu Lydia ', 'aholulydia62@gma', 6, '0000-00-00', '00:00:00'),
(44, 0, 'Excellent pieceðŸ‘Œ', 'Olatunji Emmanuel', 'olatunjiemmanuel07@gmail.com', 7, '0000-00-00', '00:00:00'),
(45, 0, 'Underrated Piece here', 'Victor ', 'samuelaholu15@gmail.com', 7, '0000-00-00', '00:00:00'),
(46, 0, 'Looking  unto Jesus the author and finisher of our faith... Help us Lord!!', 'Olamide', 'adetayoolamide2@gmail.com', 9, '0000-00-00', '00:00:00'),
(47, 0, 'Jesus our perfect life coach!!!!Hallelujah ðŸ‘ðŸ»ðŸ‘ðŸ»ðŸ‘ðŸ»', 'Delight', 'delightabuh@gmail.com', 9, '0000-00-00', '00:00:00'),
(48, 0, 'Thank you very much Sir, for this wonderful message God bless you.', 'Debbie', 'debbieishu@gmail.com', 9, '0000-00-00', '00:00:00'),
(49, 0, 'This is a fact. But remember that the Bible is complete, so Matthew 6:33 should be our watchword ', 'Tijani Abosede Lizzy', 'lizzybijani@gmail.com', 9, '0000-00-00', '00:00:00'),
(50, 0, 'Thank you very much ma\nI set my affections on things above not on the wordly things', 'Oluwabusolami', 'oluwabusolami11@gmail.com', 9, '0000-00-00', '00:00:00'),
(51, 0, 'Wow,educativeðŸ‘Œ\nThanks for this', 'Eniola', 'eniolavictoria2016@gmail.com', 10, '0000-00-00', '00:00:00'),
(52, 0, 'Wow,thanks for this ðŸ‘Œ', 'Eniola Victoria ', 'eniolavictoria2016@gmail.com', 10, '0000-00-00', '00:00:00'),
(53, 0, 'Hnm,  very true,\nThanks for this reminder ', 'Eniola', 'eniolavictoria2016@gmail.com', 9, '0000-00-00', '00:00:00'),
(54, 0, 'You said it all dear,thanks for this piece', 'Eniola ', 'eniolavictoria2016@gmail.com', 10, '0000-00-00', '00:00:00'),
(55, 0, 'Awesome ', 'olapearl', 'samuelaholu15@gmail.com', 0, '0000-00-00', '00:00:00'),
(56, 0, 'ðŸ¤”', 'Prodigy', 'greatnessabolade@outlook.com', 10, '0000-00-00', '00:00:00'),
(57, 0, 'Grateful for life and peace. The peace is beyond understanding', 'Temitope', 'olamidesenami98@gmail.com', 11, '0000-00-00', '00:00:00'),
(59, 0, 'Most grateful for the gift of life and despite all odds, God is faithful.', 'Tijani Abosede Lizzy', 'lizzybtijani@gmail.com', 11, '0000-00-00', '00:00:00'),
(60, 0, 'I love you Jesus ... Well done ma, more insight and knowledge', 'Busolami', 'oluwabusolami11@gmail.com', 12, '0000-00-00', '00:00:00'),
(61, 0, 'My Saviour made it to the cross, went further to give me victory over sin and death and brought me into His marvellous Light. What manner of Love? I will forever be Grateful for the salvation of my soul', 'OluwaTee', 'toyin4allsouls@gmail.com', 12, '0000-00-00', '00:00:00'),
(62, 0, 'Hmmnn. *Think about it*', 'Tee', 'toyin4allsouls@gmail.com', 9, '0000-00-00', '00:00:00'),
(83, 0, 'Thank you Jesus', 'Sammy', '', 12, '2020-09-17', '00:00:00'),
(111, 0, '', '', '', 0, '2021-09-29', '12:09:18'),
(112, 0, '', '', '', 0, '2021-09-29', '12:09:18'),
(113, 0, '', '', '', 0, '2021-09-29', '12:09:19'),
(114, 0, '', '', '', 0, '2021-09-29', '12:09:38'),
(115, 0, '', '', '', 2, '2021-09-29', '12:09:46'),
(116, 0, '', '', '', 0, '2021-09-29', '12:35:30'),
(117, 0, '', '', '', 2, '2021-09-29', '12:36:43'),
(118, 0, '', '', '', 2, '2021-09-29', '12:40:55'),
(119, 118, '', '', '', 0, '2021-09-29', '12:41:58'),
(120, 0, '', '', '', 2, '2021-09-29', '01:08:44'),
(121, 0, '', '', '', 2, '2021-09-29', '01:11:03'),
(122, 0, '', '', '', 0, '2021-09-29', '01:11:58'),
(123, 0, '', '', '', 0, '2021-09-29', '01:12:15'),
(124, 0, '', '', '', 2, '2021-09-29', '01:12:40'),
(125, 0, '', '', '', 2, '2021-09-29', '01:43:09'),
(126, 0, '', '', '', 2, '2021-09-29', '01:45:17'),
(127, 0, '', '', '', 0, '2021-09-29', '01:46:18'),
(128, 0, '', '', '', 2, '2021-09-29', '01:46:42'),
(129, 0, '', '', '', 2, '2021-09-29', '01:47:38'),
(130, 0, '', '', '', 2, '2021-09-29', '01:48:17'),
(131, 0, '', '', '', 0, '2021-09-29', '01:50:47'),
(132, 0, '', '', '', 0, '2021-09-29', '01:51:59'),
(133, 0, 'jqwdkjqlwdqwd', 'Aholu Samuel', '', 10, '2021-09-29', '00:00:00'),
(134, 0, 'jdkwdfwejfwef', 'Aholu Samuel', '', 10, '2021-09-29', '00:00:00'),
(135, 0, 'qwd,jlqwkdqwk', ',jbnqdk/leqdc', '', 10, '2021-09-29', '00:00:00'),
(136, 0, 'ehwqodewjqfdjeklqwdnqd', 'Aholu Samuel', '', 0, '2021-09-29', '00:00:00'),
(137, 0, 'jwqdqlwknddwk', 'DotHost', '', 0, '2021-09-29', '00:00:00'),
(138, 0, 'wdhkdwqedjashfuwertjfwhefehwlfkwelkfjlfec', 'Aholu Samuel', '', 9, '2021-09-29', '00:00:00'),
(139, 0, '', '', '', 0, '2021-09-29', '02:17:27'),
(140, 62, 'DEWQJCEWjewcfewlj;', 'name', '', 9, '2021-09-29', '00:00:00'),
(141, 57, 'wqdyt', 'This is a test', '', 11, '2021-09-29', '00:00:00'),
(142, 141, 'dehdekwfcq', 'Sammy', '', 11, '2021-09-29', '00:00:00'),
(143, 57, 'This is another test', 'DotHost', '', 11, '2021-09-29', '00:00:00'),
(144, 0, 'Samuel is my name', 'Aholu Samuel', '', 0, '2021-09-29', '00:00:00'),
(145, 0, 'xfcgjjbhkl', 'fgxhghjkl', '', 11, '2021-09-29', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `editors_choice`
--

CREATE TABLE `editors_choice` (
  `id` int(10) UNSIGNED NOT NULL,
  `blog` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `editors_choice`
--

INSERT INTO `editors_choice` (`id`, `blog`) VALUES
(2, 3),
(1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` int(10) UNSIGNED NOT NULL,
  `facebook` varchar(40) DEFAULT NULL,
  `twitter` varchar(40) DEFAULT NULL,
  `googleplus` varchar(40) DEFAULT NULL,
  `pinterest` varchar(40) DEFAULT NULL,
  `dribble` varchar(40) DEFAULT NULL,
  `comments_script` text DEFAULT NULL,
  `sharing_script` text DEFAULT NULL,
  `javascript` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `facebook`, `twitter`, `googleplus`, `pinterest`, `dribble`, `comments_script`, `sharing_script`, `javascript`) VALUES
(1, 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.plus.google.com', 'http://www.pinterest.com', 'http://www.dribble.com', '<div class=\"fb-comments container\" data-href=\"http://www.uoecu.org/newsview.php?id=<?php echo $row[\'id\'];?>\" data-numposts=\"20\" width=\"100%\"></div>', '<div class=\"addthis_sharing_toolbox\"></div>', '<script>(function(d, s, id) {\r\n		var js, fjs = d.getElementsByTagName(s)[0];\r\n		if (d.getElementById(id)) return;\r\n		js = d.createElement(s); js.id = id;\r\n		js.src = \'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11&appId=298807240601869\';\r\n		fjs.parentNode.insertBefore(js, fjs);\r\n	}(document, \'script\', \'facebook-jssdk\'));</script>\r\n<script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57587edcb1479678\"></script>');

-- --------------------------------------------------------

--
-- Table structure for table `membership_grouppermissions`
--

CREATE TABLE `membership_grouppermissions` (
  `permissionID` int(10) UNSIGNED NOT NULL,
  `groupID` int(11) DEFAULT NULL,
  `tableName` varchar(100) DEFAULT NULL,
  `allowInsert` tinyint(4) DEFAULT NULL,
  `allowView` tinyint(4) NOT NULL DEFAULT 0,
  `allowEdit` tinyint(4) NOT NULL DEFAULT 0,
  `allowDelete` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `membership_grouppermissions`
--

INSERT INTO `membership_grouppermissions` (`permissionID`, `groupID`, `tableName`, `allowInsert`, `allowView`, `allowEdit`, `allowDelete`) VALUES
(1, 2, 'titles', 1, 3, 3, 3),
(2, 2, 'links', 1, 3, 3, 3),
(3, 2, 'blog_categories', 1, 3, 3, 3),
(4, 2, 'blogs', 1, 3, 3, 3),
(5, 2, 'banner_posts', 1, 3, 3, 3),
(6, 2, 'editors_choice', 1, 3, 3, 3),
(47, 3, 'titles', 0, 0, 0, 0),
(48, 3, 'links', 0, 0, 0, 0),
(49, 3, 'blog_categories', 0, 3, 0, 0),
(50, 3, 'blogs', 1, 1, 1, 1),
(51, 3, 'editors_choice', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `membership_groups`
--

CREATE TABLE `membership_groups` (
  `groupID` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `allowSignup` tinyint(4) DEFAULT NULL,
  `needsApproval` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `membership_groups`
--

INSERT INTO `membership_groups` (`groupID`, `name`, `description`, `allowSignup`, `needsApproval`) VALUES
(1, 'anonymous', 'Anonymous group created automatically on 2018-04-26', 0, 0),
(2, 'Admins', 'Admin group created automatically on 2018-04-26', 0, 1),
(3, 'authors', 'contains all the guest authors', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `membership_userpermissions`
--

CREATE TABLE `membership_userpermissions` (
  `permissionID` int(10) UNSIGNED NOT NULL,
  `memberID` varchar(20) NOT NULL,
  `tableName` varchar(100) DEFAULT NULL,
  `allowInsert` tinyint(4) DEFAULT NULL,
  `allowView` tinyint(4) NOT NULL DEFAULT 0,
  `allowEdit` tinyint(4) NOT NULL DEFAULT 0,
  `allowDelete` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `membership_userrecords`
--

CREATE TABLE `membership_userrecords` (
  `recID` bigint(20) UNSIGNED NOT NULL,
  `tableName` varchar(100) DEFAULT NULL,
  `pkValue` varchar(255) DEFAULT NULL,
  `memberID` varchar(20) DEFAULT NULL,
  `dateAdded` bigint(20) UNSIGNED DEFAULT NULL,
  `dateUpdated` bigint(20) UNSIGNED DEFAULT NULL,
  `groupID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `membership_userrecords`
--

INSERT INTO `membership_userrecords` (`recID`, `tableName`, `pkValue`, `memberID`, `dateAdded`, `dateUpdated`, `groupID`) VALUES
(1, 'titles', '1', 'admin', 1524766759, 1597310784, 2),
(2, 'links', '1', 'admin', 1524766827, 1524878963, 2),
(9, 'banner_posts', '1', 'admin', 1524779492, 1524779492, 2),
(13, 'editors_choice', '1', 'admin', 1524799889, 1524799889, 2),
(14, 'editors_choice', '2', 'admin', 1524799903, 1524799903, 2),
(22, 'blog_categories', '10', 'admin', 1592234837, 1592234864, 2),
(23, 'blog_categories', '11', 'admin', 1592234890, 1592234908, 2),
(24, 'blog_categories', '12', 'admin', 1592234947, 1592234952, 2),
(25, 'blog_categories', '13', 'admin', 1592234977, 1592234983, 2),
(26, 'blog_categories', '14', 'admin', 1592235010, 1592235010, 2),
(28, 'blogs', '2', 'admin', 1596981837, 1597053011, 2),
(29, 'blogs', '3', 'admin', 1597046804, 1597310427, 2),
(31, 'blogs', '5', 'admin', 1597501121, 1597502129, 2),
(32, 'blogs', '6', 'olapearl', 1597594530, 1597595057, 3),
(33, 'blogs', '7', 'olapearl', 1597654441, 1597654663, 3),
(34, 'blogs', '8', 'olapearl', 1598106854, 1598106920, 3),
(35, 'blogs', '9', 'olapearl', 1598202896, 1598204991, 3),
(36, 'blogs', '10', 'admin', 1598353845, 1598354491, 2),
(37, 'blogs', '11', 'olapearl', 1599310542, 1599310802, 3),
(38, 'blogs', '12', 'olapearl', 1599414142, 1630063369, 3),
(39, 'blogs', '13', 'admin', 1633613278, 1633615850, 2);

-- --------------------------------------------------------

--
-- Table structure for table `membership_users`
--

CREATE TABLE `membership_users` (
  `memberID` varchar(20) NOT NULL,
  `passMD5` varchar(40) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `signupDate` date DEFAULT NULL,
  `groupID` int(10) UNSIGNED DEFAULT NULL,
  `isBanned` tinyint(4) DEFAULT NULL,
  `isApproved` tinyint(4) DEFAULT NULL,
  `custom1` text DEFAULT NULL,
  `custom2` text DEFAULT NULL,
  `custom3` text DEFAULT NULL,
  `custom4` text DEFAULT NULL,
  `custom5` text NOT NULL,
  `comments` text DEFAULT NULL,
  `pass_reset_key` varchar(100) DEFAULT NULL,
  `pass_reset_expiry` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `membership_users`
--

INSERT INTO `membership_users` (`memberID`, `passMD5`, `email`, `signupDate`, `groupID`, `isBanned`, `isApproved`, `custom1`, `custom2`, `custom3`, `custom4`, `custom5`, `comments`, `pass_reset_key`, `pass_reset_expiry`) VALUES
('admin', '38db4a51e1f10c25623799f62e28fe9a', 'hello@olapearlshub.com', '2018-04-26', 2, 0, 1, '', '', '', '', '', '', NULL, NULL),
('guest', NULL, NULL, '2021-08-27', 1, 0, 1, NULL, NULL, NULL, NULL, '', 'Anonymous member created automatically on 2021-08-27', NULL, NULL),
('olapearl', '38db4a51e1f10c25623799f62e28fe9a', 'olamidesenami98@gmail.com', '2020-08-02', 3, 0, 1, 'Aholu Olamide', '3,Jesus Street, Rolu Estate, Idi Orogbo, Parafa, Ikorodu', 'Lagos', '08094793295', '', 'member signed up through the registration form.\nmember updated his profile on 08/27/2021, 01:11 pm from IP address ::1\nmember updated his profile on 08/27/2021, 01:11 pm from IP address ::1\nmember updated his profile on 08/27/2021, 01:11 pm from IP address ::1\nmember updated his profile on 08/27/2021, 01:11 pm from IP address ::1\nmember updated his profile on 08/27/2021, 01:11 pm from IP address ::1', NULL, NULL),
('sammy', '4385695633f8c6c8ab52592092cecf04', 'sammy@gmail.com', '2021-09-19', 3, 0, 0, 'Sammy Sammy', 'lag', 'Lag', '23457890', '', 'member signed up through the registration form.', NULL, NULL),
('samuel', 'f664811ddc6a6b3a02ea7051e24f5e86', 'somebody@gmail.com', '2021-08-27', 3, 1, 1, 'Same Person', 'Ikole', 'Ekiti', '12345678', '', 'member signed up through the registration form.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `page_hits`
--

CREATE TABLE `page_hits` (
  `page` varchar(255) NOT NULL,
  `count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_hits`
--

INSERT INTO `page_hits` (`page`, `count`) VALUES
('The beginning of the end of the world', 4),
('The challanges of being a writter', 16),
('The future of web developement on earth', 24),
('The subtle art of not giving a fuck-Mark Manson', 34),
('This is test rum', 3),
('Today is a new day', 1),
('Why I did what I did', 1),
('Why i ventured into writting as a proffesion', 16);

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `date` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `name`, `email`, `date`) VALUES
(19, 'Aholu Samuel', 'aholusam@yahoo.com', '2021-01-07 09:07:23'),
(18, 'Olamide', 'olamidesenami98@gmail.com', '2020-12-30 10:54:39'),
(17, 'Ideraoluwa', 'ideraoluwaakosua@gmail.com', '2020-12-14 14:01:23'),
(15, 'Aholu Samuel', 'samuelaholu15@gmail.com', '2020-09-27 10:48:23'),
(14, 'Esther Akinyemi', 'estherabiodun9920@gmail.com', '2020-09-18 18:04:47'),
(20, 'Aholu Samuel Viavor', 'samuelaholu15@gmail.com', '2021-04-22 13:32:31');

-- --------------------------------------------------------

--
-- Table structure for table `titles`
--

CREATE TABLE `titles` (
  `id` int(10) UNSIGNED NOT NULL,
  `website_name` varchar(40) DEFAULT NULL,
  `tagline` varchar(40) DEFAULT NULL,
  `icon` varchar(40) DEFAULT NULL,
  `keywords` varchar(220) DEFAULT NULL,
  `short_description` varchar(200) DEFAULT NULL,
  `bannertext1` varchar(150) DEFAULT NULL,
  `bannertext2` varchar(150) DEFAULT NULL,
  `bannertext3` varchar(150) DEFAULT NULL,
  `bannertext4` varchar(150) DEFAULT NULL,
  `detailed_description` text DEFAULT NULL,
  `address` varchar(40) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `phone` varchar(40) DEFAULT NULL,
  `googlemap` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `titles`
--

INSERT INTO `titles` (`id`, `website_name`, `tagline`, `icon`, `keywords`, `short_description`, `bannertext1`, `bannertext2`, `bannertext3`, `bannertext4`, `detailed_description`, `address`, `email`, `phone`, `googlemap`) VALUES
(1, 'Olapearl\'s Hub', '...Jesus is our inspiration', '98778500_1596303038.png', 'blog, Sunday, challenge ,inspiration, fun, olapearls, Hub, Olapearl\'s, Olapearl\'s Hub', 'Olapearl\'s Hub is an institution where souls are saved and lives are blessed. It is a college where lives are pruned. The center of it all is Jesus.', 'Create a lifestyle <span>you desire</span>', 'Engaging Purposeful <span>and Creative</span>', 'Create the lifestyle <span>you desire</span>', 'Engaging Purposeful <span>and Creative</span>', 'Olapearl\'s Hub is an institution where souls are saved and lives are blessed. It is a college where lives are pruned. The center of it all is Jesus. With fun, we bring to reality the ability to walk in the fullness of Christ and realize the abilities stored up in our spirit man.', 'Lagos, Nigeria', 'hello@olapearlshub.com', '08094793295', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100949.24429313939!2d-122.44206553967531!3d37.75102885910819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1');

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `views`
--

INSERT INTO `views` (`id`, `p_id`, `address`) VALUES
(14, 3, '::1'),
(15, 11, '::1'),
(16, 5, '::1'),
(17, 8, '::1'),
(18, 7, '::1'),
(19, 6, '::1');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_info`
--

CREATE TABLE `visitor_info` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `time_accessed` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor_info`
--

INSERT INTO `visitor_info` (`id`, `ip_address`, `user_agent`, `time_accessed`) VALUES
(1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:26:52'),
(2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:27:01'),
(3, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:27:40'),
(4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:27:55'),
(5, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:28:01'),
(6, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:28:12'),
(7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:28:19'),
(8, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:28:22'),
(9, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:28:29'),
(10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:28:32'),
(11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:28:35'),
(12, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:28:38'),
(13, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:29:05'),
(14, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:29:09'),
(15, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:29:18'),
(16, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:29:25'),
(17, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:29:28'),
(18, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:29:51'),
(19, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:29:57'),
(20, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:30:00'),
(21, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:30:07'),
(22, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:30:15'),
(23, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:39:41'),
(24, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:40:41'),
(25, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:41:27'),
(26, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:26:10'),
(27, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:27:34'),
(28, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:28:20'),
(29, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:28:42'),
(30, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:30:26'),
(31, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:30:38'),
(32, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:30:41'),
(33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:30:43'),
(34, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:30:45'),
(35, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:30:48'),
(36, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:30:51'),
(37, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:30:53'),
(38, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:30:56'),
(39, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:30:59'),
(40, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:32:02'),
(41, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:32:05'),
(42, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:32:07'),
(43, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:32:10'),
(44, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 19:08:04'),
(45, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 19:08:14'),
(46, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 21:43:06'),
(47, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 21:47:01'),
(48, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 21:47:08'),
(49, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 21:48:58'),
(50, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 21:49:18'),
(51, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 22:22:28'),
(52, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-28 01:41:41'),
(53, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-28 01:43:58'),
(54, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-28 01:46:23'),
(55, '::1', 'Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Mobile Safari/537.36', '2020-04-20 16:55:12'),
(56, '::1', 'Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Mobile Safari/537.36', '2020-04-21 14:18:56'),
(57, '::1', 'Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Mobile Safari/537.36', '2020-04-21 14:18:57'),
(58, '::1', 'Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Mobile Safari/537.36', '2020-04-21 14:19:40'),
(59, '::1', 'Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Mobile Safari/537.36', '2020-04-21 14:19:49'),
(60, '::1', 'Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Mobile Safari/537.36', '2020-04-21 14:19:49'),
(61, '::1', 'Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Mobile Safari/537.36', '2020-04-21 14:30:52'),
(62, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36', '2020-04-22 11:00:53'),
(63, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36', '2020-04-22 11:00:53'),
(64, '::1', 'Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Mobile Safari/537.36', '2020-04-22 11:04:32'),
(65, '::1', 'Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Mobile Safari/537.36', '2020-04-22 11:04:32'),
(66, '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Mobile Safari/537.36', '2020-04-23 18:50:19'),
(67, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36', '2020-04-26 15:05:16'),
(68, '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Mobile Safari/537.36', '2020-05-01 11:39:45'),
(69, '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Mobile Safari/537.36', '2020-05-01 11:41:10'),
(70, '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Mobile Safari/537.36', '2020-05-01 11:51:25'),
(71, '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Mobile Safari/537.36', '2020-05-01 11:51:38'),
(72, '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Mobile Safari/537.36', '2020-05-01 11:52:34'),
(73, '::1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Mobile Safari/537.36', '2020-05-07 16:04:11'),
(74, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', '2020-05-17 11:45:03'),
(75, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', '2020-05-18 18:09:04'),
(76, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36', '2020-05-31 13:22:16'),
(77, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36', '2020-06-15 17:26:28'),
(78, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36', '2020-06-15 19:18:38'),
(79, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36', '2020-06-15 22:12:31'),
(80, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36', '2020-06-16 16:42:38'),
(81, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36', '2020-06-16 16:42:56'),
(82, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36', '2020-06-16 17:06:25'),
(83, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36', '2020-06-16 17:06:34'),
(84, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36', '2020-06-17 16:55:14'),
(85, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-11 21:39:17'),
(86, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-11 21:39:17'),
(87, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-15 19:47:58'),
(88, '::1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', '2020-07-18 20:18:39'),
(89, '::1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', '2020-07-18 20:18:55'),
(90, '::1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', '2020-07-19 12:42:07'),
(91, '::1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', '2020-07-19 12:58:34'),
(92, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-21 07:49:29'),
(93, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-22 16:39:26'),
(94, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-22 17:10:29'),
(95, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-22 17:28:22'),
(96, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-22 18:08:18'),
(97, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-22 18:21:49'),
(98, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-22 18:22:31'),
(99, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-22 18:23:46'),
(100, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-22 18:30:46'),
(101, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-22 18:36:54'),
(102, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-22 18:39:39'),
(103, '::1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', '2020-07-23 11:31:22'),
(104, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-23 11:47:42'),
(105, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-23 11:48:17'),
(106, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-23 11:48:30'),
(107, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-23 11:48:48'),
(108, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36', '2020-07-24 00:40:33'),
(109, '::1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', '2020-07-26 15:02:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner_posts`
--
ALTER TABLE `banner_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `title` (`title`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `editors_choice`
--
ALTER TABLE `editors_choice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog` (`blog`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membership_grouppermissions`
--
ALTER TABLE `membership_grouppermissions`
  ADD PRIMARY KEY (`permissionID`);

--
-- Indexes for table `membership_groups`
--
ALTER TABLE `membership_groups`
  ADD PRIMARY KEY (`groupID`);

--
-- Indexes for table `membership_userpermissions`
--
ALTER TABLE `membership_userpermissions`
  ADD PRIMARY KEY (`permissionID`);

--
-- Indexes for table `membership_userrecords`
--
ALTER TABLE `membership_userrecords`
  ADD PRIMARY KEY (`recID`),
  ADD UNIQUE KEY `tableName_pkValue` (`tableName`,`pkValue`),
  ADD KEY `pkValue` (`pkValue`),
  ADD KEY `tableName` (`tableName`),
  ADD KEY `memberID` (`memberID`),
  ADD KEY `groupID` (`groupID`);

--
-- Indexes for table `membership_users`
--
ALTER TABLE `membership_users`
  ADD PRIMARY KEY (`memberID`),
  ADD KEY `groupID` (`groupID`);

--
-- Indexes for table `page_hits`
--
ALTER TABLE `page_hits`
  ADD PRIMARY KEY (`page`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor_info`
--
ALTER TABLE `visitor_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner_posts`
--
ALTER TABLE `banner_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT for table `editors_choice`
--
ALTER TABLE `editors_choice`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `membership_grouppermissions`
--
ALTER TABLE `membership_grouppermissions`
  MODIFY `permissionID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `membership_groups`
--
ALTER TABLE `membership_groups`
  MODIFY `groupID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `membership_userpermissions`
--
ALTER TABLE `membership_userpermissions`
  MODIFY `permissionID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `membership_userrecords`
--
ALTER TABLE `membership_userrecords`
  MODIFY `recID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `titles`
--
ALTER TABLE `titles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `views`
--
ALTER TABLE `views`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `visitor_info`
--
ALTER TABLE `visitor_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
