-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2018 at 04:56 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `commentbox`
--

CREATE TABLE `commentbox` (
  `username` varchar(66) DEFAULT NULL,
  `comments` text NOT NULL,
  `date` datetime NOT NULL,
  `id` int(11) DEFAULT NULL,
  `add_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `myadd`
--

CREATE TABLE `myadd` (
  `ad_id` int(11) NOT NULL,
  `title` text,
  `price` int(11) DEFAULT NULL,
  `address` varchar(222) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `image` varchar(66) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `catagory` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `myadd`
--

INSERT INTO `myadd` (`ad_id`, `title`, `price`, `address`, `phone`, `image`, `user_id`, `date`, `catagory`) VALUES
(11, 'Web development is a broad term for the work involved in developing a web site for the Internet (World Wide Web) or an intranet (a private network). Web development can range from developing the simplest static single page of plain text to the most complex web-based internet applications (or just \'web apps\') electronic businesses, and social network services. A more comprehensive list of tasks to which web development commonly refers, may include web engineering, web design, web content development, client liaison, client-side/server-side scripting, web server and network security configuration, and e-commerce development. Among web professionals, \"web development\" usually refers to the main non-design aspects of building web sites: writing markup and coding. Most recently Web development has come to mean the creation of content management systems or CMS. ', 221, 'zia hall,room no 112', '01578888888', 'Images/datacommunicationsandnetworking4.jpg', 35, '2018-07-20 02:53:01', 'books'),
(12, 'Web development is a broad term for the work involved in developing a web site for the Internet (World Wide Web) or an intranet (a private network). Web development can range from developing the simplest static single page of plain text to the most complex web-based internet applications (or just \'web apps\') electronic businesses, and social network services. A more comprehensive list of tasks to which web development commonly refers, may include web engineering, web design, web content development, client liaison, client-side/server-side scripting, web server and network security configuration, and e-commerce development. Among web professionals, \"web development\" usually refers to the main non-design aspects of building web sites: writing markup and coding. Most recently Web development has come to mean the creation of content management systems or CMS. ', 121, 'zia hall,room no 112', '01578888888', 'Images/th.jfif', 35, '2018-07-20 02:57:24', 'musical'),
(16, 'Keeping a web server safe from intrusion is often called Server Port Hardening. Many technologies come into play to keep information on the internet safe when it is transmitted from one location to another. For instance TLS certificates (or \"SSL certificates\") are issued by certificate authorities to help prevent internet fraud. Many developers often employ different forms of encryption when transmitting and storing sensitive information. A basic understanding of information technology security concerns is often part of a web developer\'s knowledge.', 123, 'zia hall,room no 112', '00339869284', 'Images/old-bicycle-1310617550m7p.jpg', 35, '2018-07-20 15:11:23', 'others'),
(18, 'the commercialization of the web, web development has been a growing industry. The growth of this industry is being driven by businesses wishing to use their website to sell products and services to customers.[1] There is open source software for web development like BerkeleyDB, GlassFish, LAMP (Linux, Apache, MySQL, PHP) stack and Perl/Plack. This has kept the cost of learning web development to a minimum. Another contributing factor to the growth of the industry has been the rise of easy-to-use WYSIWYG web-development software, such as Adobe Dreamweaver, BlueGriffon and Microsoft Visual Studio. Knowledge of HyperText Markup Language (HTML) or of programming languages is still required to use such software, but the basics can be learned and implemented quickly with the help of help files, technical books, internet tutorials, or face-to-face trainin', 1322, 'zia hall,room no 312', '01578888888', 'Images/eee.jfif', 35, '2018-07-20 18:15:44', 'eee'),
(19, 'the commercialization of the web, web development has been a growing industry. The growth of this industry is being driven by businesses wishing to use their website to sell products and services to customers.[1] There is open source software for web development like BerkeleyDB, GlassFish, LAMP (Linux, Apache, MySQL, PHP) stack and Perl/Plack. This has kept the cost of learning web development to a minimum. Another contributing factor to the growth of the industry has been the rise of easy-to-use WYSIWYG web-development software, such as Adobe Dreamweaver, BlueGriffon and Microsoft Visual Studio. Knowledge of HyperText Markup Language (HTML) or of programming languages is still required to use such software, but the basics can be learned and implemented quickly with the help of help files, technical books, internet tutorials, or face-to-face trainin', 454, 'zia hall,room no 112', '01578888888', 'Images/ff.jfif', 35, '2018-07-20 18:17:24', 'furniture'),
(21, 'the commercialization of the web, web development has been a growing industry. The growth of this industry is being driven by businesses wishing to use their website to sell products and services to customers.[1] There is open source software for web development like BerkeleyDB, GlassFish, LAMP (Linux, Apache, MySQL, PHP) stack and Perl/Plack. This has kept the cost of learning web development to a minimum. Another contributing factor to the growth of the industry has been the rise of easy-to-use WYSIWYG web-development software, such as Adobe Dreamweaver, BlueGriffon and Microsoft Visual Studio. Knowledge of HyperText Markup Language (HTML) or of programming languages is still required to use such software, but the basics can be learned and implemented quickly with the help of help files, technical books, internet tutorials, or face-to-face trainin', 232, 'zia hall,room no 112', '01578888888', 'Images/th(2).jfif', 35, '2018-07-20 18:18:33', 'tickets'),
(24, 'Web development is a broad term for the work involved in developing a web site for the Internet (World Wide Web) or an intranet (a private network). Web development can range from developing the simplest static single page of plain text to the most complex web-based internet applications (or just \'web apps\') electronic businesses, and social network services. A more comprehensive list of tasks to which web development commonly refers, may include web engineering, web design, web content development, client liaison, client-side/server-side scripting, web server and network security configuration, and e-commerce development. Among web professionals, \"web development\" usually refers to the main non-design aspects of building web sites: writing markup and coding. Most recently Web development has come to mean the creation of content management systems or CMS. ', 232, 'zia hal;101', '01762889862', 'Images/book1.jpg', 47, '2018-10-06 23:41:46', 'books'),
(25, 'product details', 122, 'Selim  hal;113', '017XXXXXXX', 'Images/book2.jpg', 48, '2018-10-08 18:41:29', 'books');

-- --------------------------------------------------------

--
-- Table structure for table `others`
--

CREATE TABLE `others` (
  `ad_id` int(11) NOT NULL,
  `title` varchar(444) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `address` varchar(222) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `image` varchar(66) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `others`
--

INSERT INTO `others` (`ad_id`, `title`, `price`, `address`, `phone`, `image`, `user_id`, `date`) VALUES
(1, 'this is book', 454, 'ziaa hall', '01762889862', 'Images/eeeeeeeeeeee.jpg', 0, '0000-00-00 00:00:00'),
(2, 'others', 2233, 'my god', '323444444444', 'Images/id.jpg', 24, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `id` int(11) NOT NULL,
  `name` varchar(44) DEFAULT NULL,
  `password1` varchar(66) DEFAULT NULL,
  `password2` varchar(66) DEFAULT NULL,
  `email` varchar(44) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`id`, `name`, `password1`, `password2`, `email`) VALUES
(45, 'hgf', '789456', '789456', 'hasnat@gmaail.com'),
(46, 'sasas', '789456', '789456', 'hasnat@gmail.com'),
(47, 'project ', 'project33', 'project33', 'project@gmail.com'),
(48, 'Rubel Hasan', '123456789', '123456789', 'rubel@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `myadd`
--
ALTER TABLE `myadd`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `others`
--
ALTER TABLE `others`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `myadd`
--
ALTER TABLE `myadd`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `others`
--
ALTER TABLE `others`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
