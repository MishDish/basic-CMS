-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 20, 2014 at 09:27 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cms_web`
--
CREATE DATABASE IF NOT EXISTS `cms_web` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cms_web`;

-- --------------------------------------------------------

--
-- Table structure for table `a_pages`
--

CREATE TABLE IF NOT EXISTS `a_pages` (
  `page_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(40) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`page_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `a_pages`
--

INSERT INTO `a_pages` (`page_id`, `title`, `content`) VALUES
(1, 'Users', ' <form  method =''POST'' action=''overall/users.php'' id=''news_form'' >  \r\n                 <input type=''text'' name=''name''placeholder=''name of the user''/> <br />\r\n                 <input type=''text'' name=''surname'' placeholder=''Surname of the user''/><br />\r\n                 <input type=''text'' name=''email'' placeholder=''Email of the user''/><br />\r\n                 <input type=''text'' name=''password'' placeholder=''Password of the user''/><br />\r\n                 <input type=''text'' name=''active''placeholder=''Active: 0/1''/><br />\r\n                 <input type=''text'' name=''roles'' placeholder=''Role of the user''/><br />\r\n                 <input type=''submit'' name=''update'' value=''Update''/>\r\n                 <input type=''submit'' name=''delete'' value=''Create''/>                \r\n                </form>'),
(3, 'News', '<form style=''float:left;''class=''news_form'' action=''overall/news.php'' method=''POST''>\r\n <input style=''width:250px; height:30px;'' type=''text'' name=''title'' placeholder=''Title of the article'' /><br />\r\n<textarea style=''width:300px; height:300px;'' name=''content''>Your Content</textarea><br />\r\n <input type=''submit'' name=''submit'' value=''Add article ''/>	 \r\n </form>'),
(4, 'Gallery', '<form class=''news_form'' action='''' method=''POST''enctype=''multipart/form-data''>\r\n \r\n <input type=''file'' name=''file'' /><br/>\r\n <label style=''color:red;''>The size of the photo must be 680px x 280px</label><br /> \r\n <input type=''submit'' name=''submit'' value=''Add Photo'' />\r\n		\r\n </form>');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=81 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`post_id`, `Title`, `Content`, `Time`) VALUES
(77, 'BG: Ubijen voÄ‘a navijaÄa DunjiÄ‡', 'Beogradski mediji navode da je voÄ‘u navijaÄa Crvene zvezde Velibor DunjiÄ‡, upucao za sada nepoznati napadaÄ. TakoÄ‘e se navodi da je teÅ¡ko ranjena i devojka koja je u trenutku pucnjave bila pored DunjiÄ‡a.', '2014-05-16 13:07:56'),
(78, 'Ð‘Ð¸Ð±Ð»Ð¸ÑÐºÐ¸ Ð¿Ð¾Ñ‚Ð¾Ð¿ Ð²Ð¾ Ð¡Ñ€Ð±Ð¸Ñ˜Ð°, ÐµÐ²Ð°ÐºÑƒÐ¸Ñ€Ð°Ð½Ð¸ Ð½Ð°Ð´ 6.000 Ð»ÑƒÑ“Ðµ (Ð¤ÐžÐ¢Ðž+', 'Ð¡Ð¸Ñ‚ÑƒÐ°Ñ†Ð¸Ñ˜Ð°Ñ‚Ð° Ð²Ð¾ Ð¡Ñ€Ð±Ð¸Ñ˜Ð° Ð¸ Ð¿Ð¾Ð½Ð°Ñ‚Ð°Ð¼Ñƒ Ðµ ÐºÑ€Ð¸Ñ‚Ð¸Ñ‡Ð½Ð°, ÐµÐ´ÐµÐ½ Ð´ÐµÐ½ Ð¾Ñ‚ÐºÐ°ÐºÐ¾ Ð·ÐµÐ¼Ñ˜Ð°Ñ‚Ð° Ñ˜Ð° Ð¿Ð¾Ð³Ð¾Ð´Ð¸Ñ˜Ð° Ð½Ð°Ñ˜Ð³Ð¾Ð»ÐµÐ¼Ð¸Ñ‚Ðµ Ð²Ñ€Ð½ÐµÐ¶Ð¸ Ð¸ Ð¿Ð¾Ð¿Ð»Ð°Ð²Ð¸ Ð²Ð¾ Ð¿Ð¾ÑÐ»ÐµÐ´Ð½Ð¸Ñ‚Ðµ 120 Ð³Ð¾Ð´Ð¸Ð½Ð¸. Ð¡Ð¿Ð¾Ñ€ÐµÐ´ Ð½ÐµÐ¾Ñ„Ð¸Ñ†Ð¸Ñ˜Ð°Ð»Ð½Ð¸Ñ‚Ðµ Ð¸Ð½Ñ„Ð¾Ñ€Ð¼Ð°Ñ†Ð¸Ð¸ Ð·Ð°Ð³Ð¸Ð½Ð°Ð»Ðµ ÑˆÐµÑÑ‚ Ð»Ð¸Ñ†Ð°, Ð° Ð¸Ð»Ñ˜Ð°Ð´Ð½Ð¸Ñ†Ð¸ Ð¼Ð¾Ñ€Ð°Ð»Ðµ Ð´Ð° Ð³Ð¸ Ð½Ð°Ð¿ÑƒÑˆÑ‚Ð°Ñ‚ ÑÐ²Ð¾Ð¸Ñ‚Ðµ Ð´Ð¾Ð¼Ð¾Ð²Ð¸, Ñ˜Ð°Ð²ÑƒÐ²Ð° Ð‘92.', '2014-05-16 13:09:18'),
(79, 'Ð‘Ð¸Ð±Ð»Ð¸ÑÐºÐ¸ Ð¿Ð¾Ñ‚Ð¾Ð¿ Ð²Ð¾ Ð¡Ñ€Ð±Ð¸Ñ˜Ð°, ÐµÐ²Ð°ÐºÑƒÐ¸Ñ€Ð°Ð½Ð¸ Ð½Ð°Ð´ 6.000 Ð»ÑƒÑ“Ðµ (Ð¤ÐžÐ¢Ðž+', 'Ð‘Ð¸ ÑÐ°ÐºÐ°Ð» Ð´Ð° Ð³Ð¸ Ð·Ð°Ð¼Ð¾Ð»Ð°Ð¼ Ð³Ñ€Ð°Ñ“Ð°Ð½Ð¸Ñ‚Ðµ, Ð±Ð¸Ð´ÐµÑ˜ÑœÐ¸ ÑÐ¸Ñ‚ÑƒÐ°Ñ†Ð¸Ñ˜Ð°Ñ‚Ð° Ðµ ÐºÑ€Ð¸Ñ‚Ð¸Ñ‡Ð½Ð°. Ð“Ð¸ Ð¼Ð¾Ð»Ð°Ð¼ Ð»ÑƒÑ“ÐµÑ‚Ð¾ Ð´Ð° Ð½Ðµ ÑÑ‚Ð¾Ñ˜Ð°Ñ‚ Ð½Ð° Ð¿Ð¾ÐºÑ€Ð¸Ð²Ð¸Ñ‚Ðµ Ð¸ Ð´Ð° Ð½Ðµ Ð¾Ð´Ð±Ð¸Ð²Ð°Ð°Ñ‚ Ð¿Ð¾Ð¼Ð¾Ñˆ. Ð“Ð¸ Ð¼Ð¾Ð»Ð°Ð¼ Ð»ÑƒÑ“ÐµÑ‚Ð¾ Ð´Ð° Ð½Ðµ Ð½Ñ Ð¿Ñ€Ð¸Ð½ÑƒÐ´ÑƒÐ²Ð°Ð°Ñ‚ Ð´Ð° ÑƒÐ¿Ð¾Ñ‚Ñ€ÐµÐ±Ð¸Ð¼Ðµ ÑÐ¸Ð»Ð°, Ð±Ð¸Ð´ÐµÑ˜ÑœÐ¸ ÑÐ°Ð¼Ð¾ ÑÐ°ÐºÐ°Ð¼Ðµ Ð´Ð° Ð³Ð¸ ÑÐ¿Ð°ÑÐ¸Ð¼Ðµ. Ð¢Ð°Ð¼Ñƒ ÑÐµ Ð¿Ñ€Ð¸Ð¿Ð°Ð´Ð½Ð¸Ñ†Ð¸Ñ‚Ðµ Ð½Ð° ÑÐ¿ÐµÑ†Ð¸Ñ˜Ð°Ð»Ð½Ð¸Ñ‚Ðµ Ð²Ð¾ÐµÐ½Ð¸ ÑÐ¸Ð»Ð¸, Ð½Ð° Ð–Ð°Ð½Ð´Ð°Ñ€Ð¼ÐµÑ€Ð¸Ñ˜Ð°Ñ‚Ð°, Ð° Ð¸ Ñ˜Ð°Ñ ÑœÐµ Ð±Ð¸Ð´Ð°Ð¼ Ñ‚Ð°Ð¼Ñƒ Ð·Ð° Ð½ÐµÐºÐ¾Ð»ÐºÑƒ Ñ‡Ð°ÑÐ°â€œ, Ð¿Ð¾Ñ€Ð°Ñ‡Ð°Ð» Ð’ÑƒÑ‡Ð¸Ñœ Ð²Ð¾ Ñ‚ÐµÐ»ÐµÑ„Ð¾Ð½ÑÐºÐ¾ Ñ˜Ð°Ð²ÑƒÐ²Ð°ÑšÐµ Ð²Ð¾ ÑƒÑ‚Ñ€Ð¸Ð½ÑÐºÐ°Ñ‚Ð° Ñ‚ÐµÐ»ÐµÐ²Ð¸Ð·Ð¸ÑÐºÐ° Ð¿Ñ€Ð¾Ð³Ñ€Ð°Ð¼Ð°.', '2014-05-16 13:10:09'),
(80, 'Ð˜ Ð¿Ð¾Ð½Ð°Ñ‚Ð°Ð¼Ñƒ ÐºÑ€Ð¸Ñ‚Ð¸Ñ‡Ð½Ð° ÑÐ¸Ñ‚ÑƒÐ°Ñ†Ð¸Ñ˜Ð°Ñ‚Ð° ÑÐ¾ Ð¿Ð¾Ð¿Ð»Ð°Ð²Ð¸Ñ‚Ðµ Ð²Ð¾ Ð¡Ñ€Ð±Ð¸Ñ˜Ð', 'ÐŸÐ¾Ð¼Ð¾Ñˆ Ð·Ð° Ð¡Ñ€Ð±Ð¸Ñ˜Ð° Ð¿Ð¾Ñ€Ð°Ð´Ð¸ Ð¿Ð¾Ð¿Ð»Ð°Ð²Ð¸Ñ‚Ðµ ÑƒÐ¿Ð°Ñ‚Ð¸Ñ˜Ð° Ð¾ÑÑƒÐ¼ Ð´Ñ€Ð¶Ð°Ð²Ð¸ Ñ‡Ð»ÐµÐ½ÐºÐ¸ Ð½Ð° EÐ²Ñ€Ð¾Ð¿ÑÐºÐ°Ñ‚Ð° ÑƒÐ½Ð¸Ñ˜Ð°, Ð ÑƒÑÐ¸Ñ˜Ð°, Ð¡ÐÐ”, Ð˜Ð·Ñ€Ð°ÐµÐ», Ð¥Ñ€Ð²Ð°Ñ‚ÑÐºÐ° Ð¸ ÐœÐ°ÐºÐµÐ´Ð¾Ð½Ð¸Ñ˜Ð°, Ð° Ð°ÐºÑ‚Ð¸Ð²Ð¸Ñ€Ð°Ð½Ð° Ðµ Ð¸ ÑÑ€Ð¿ÑÐºÐ°Ñ‚Ð° Ð´Ð¸Ñ˜Ð°ÑÐ¿Ð¾Ñ€Ð°, Ñ˜Ð°Ð²Ð¸ Ð¢Ð°Ð½Ñ˜ÑƒÐ³.<br />\r\n<br />\r\nÐ•Ð£ Ð³Ð¾ Ð°ÐºÑ‚Ð¸Ð²Ð¸Ñ€Ð° Ð¼ÐµÑ…Ð°Ð½Ð¸Ð·Ð¼Ð¾Ñ‚ Ð·Ð° Ð·Ð°ÑˆÑ‚Ð¸Ñ‚Ð° Ð¿Ð¾ Ð±Ð°Ñ€Ð°ÑšÐµ Ð¾Ð´ Ð¡Ñ€Ð±Ð¸Ñ˜Ð° Ð·Ð°Ñ€Ð°Ð´Ð¸ Ð¸ÑÐºÐ»ÑƒÑ‡Ð¸Ñ‚ÐµÐ»Ð½Ð¾ ÐºÑ€Ð¸Ñ‚Ð¸Ñ‡Ð½Ð°Ñ‚Ð° ÑÐ¾ÑÑ‚Ð¾Ñ˜Ð±Ð° ÑÐ¾ Ð¿Ð¾Ð¿Ð»Ð°Ð²Ð¸Ñ‚Ðµ Ð²Ð¾ Ð´Ñ€Ð¶Ð°Ð²Ð°Ñ‚Ð°, Ð° Ð²Ð¾ Ð¿Ñ€Ð² Ð¾Ð´Ð³Ð¾Ð²Ð¾Ñ€ Ñ€ÐµÐ°Ð³Ð¸Ñ€Ð°Ð° Ð¤Ñ€Ð°Ð½Ñ†Ð¸Ñ˜Ð°, Ð¡Ð»Ð¾Ð²ÐµÐ½Ð¸Ñ˜Ð°, Ð‘ÑƒÐ³Ð°Ñ€Ð¸Ñ˜Ð°, Ð“ÐµÑ€Ð¼Ð°Ð½Ð¸Ñ˜Ð°, Ð£Ð½Ð³Ð°Ñ€Ð¸Ñ˜Ð°, ÐÐ²ÑÑ‚Ñ€Ð¸Ñ˜Ð°, Ð§ÐµÑˆÐºÐ° Ð¸ Ð¥Ñ€Ð²Ð°Ñ‚ÑÐºÐ°.', '2014-05-17 10:05:51');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `page_id` int(12) NOT NULL AUTO_INCREMENT,
  `page_name` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`page_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `page_name`, `content`) VALUES
(2, 'News', ''),
(3, 'Gallery', ''),
(5, 'Products', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `active` tinyint(4) NOT NULL,
  `roles` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `active`, `roles`) VALUES
(9, 'Misha', 'vucicevic', 'mvucikevik@gmail.com', '64414eaf9e49a9f1220a0afed334a921', 1, 'admin'),
(10, 'Goran', 'goks', 'goks@rs.rs', '80f7d1c3805668bda7a3bf13abd085ee', 1, 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
