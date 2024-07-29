-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2023 at 03:29 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pnc_facebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment`, `user_id`, `post_id`) VALUES
(1, 'Duis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa.', 60, 1),
(2, 'Vestibulum quam sapien, varius ut, blandit non, interdum in, ante.', 11, 10),
(3, 'Aenean auctor gravida sem.', 55, 1),
(4, 'Pellentesque eget nunc.', 6, 10),
(5, 'Integer tincidunt ante vel ipsum.', 56, 4),
(6, 'Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.', 7, 2),
(7, 'Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus.', 1, 8),
(8, 'Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante.', 73, 7),
(9, 'Suspendisse potenti.', 25, 3),
(10, 'Aenean auctor gravida sem.', 15, 10),
(11, 'Nullam sit amet turpis elementum ligula vehicula consequat.', 54, 1),
(12, 'Pellentesque ultrices mattis odio.', 17, 9),
(13, 'Maecenas ut massa quis augue luctus tincidunt.', 69, 2),
(14, 'Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci.', 29, 5),
(15, 'Proin interdum mauris non ligula pellentesque ultrices.', 20, 9),
(16, 'Maecenas tincidunt lacus at velit.', 61, 2),
(17, 'Maecenas rhoncus aliquam lacus.', 40, 6),
(18, 'Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc.', 64, 4),
(19, 'Aliquam quis turpis eget elit sodales scelerisque.', 54, 3),
(20, 'Morbi non lectus.', 2, 5),
(21, 'Nunc rhoncus dui vel sem.', 34, 1),
(22, 'Etiam justo.', 17, 5),
(23, 'Nunc nisl.', 46, 1),
(24, 'Integer ac leo.', 72, 10),
(25, 'Morbi non quam nec dui luctus rutrum.', 15, 4),
(26, 'Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci.', 23, 4),
(27, 'Vestibulum sed magna at nunc commodo placerat.', 18, 10),
(28, 'Donec vitae nisi.', 18, 5),
(29, 'Proin at turpis a pede posuere nonummy.', 35, 4),
(30, 'Phasellus in felis.', 60, 10),
(31, 'Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl.', 19, 8),
(32, 'Praesent blandit lacinia erat.', 5, 4),
(33, 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', 50, 8),
(34, 'Cras mi pede, malesuada in, imperdiet et, commodo vulputate, justo.', 55, 1),
(35, 'Nullam sit amet turpis elementum ligula vehicula consequat.', 64, 6),
(36, 'Cras non velit nec nisi vulputate nonummy.', 32, 10),
(37, 'Etiam vel augue.', 60, 4),
(38, 'Etiam faucibus cursus urna.', 9, 1),
(39, 'Vivamus vestibulum sagittis sapien.', 12, 3),
(40, 'Vestibulum quam sapien, varius ut, blandit non, interdum in, ante.', 19, 8),
(41, 'Nunc nisl.', 23, 8),
(42, 'In quis justo.', 51, 3),
(43, 'Etiam justo.', 66, 5),
(44, 'Maecenas ut massa quis augue luctus tincidunt.', 55, 6),
(45, 'Vestibulum rutrum rutrum neque.', 45, 9),
(46, 'Donec vitae nisi.', 51, 5),
(47, 'Donec ut mauris eget massa tempor convallis.', 33, 7),
(48, 'Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.', 57, 2),
(49, 'Donec vitae nisi.', 14, 10),
(50, 'Vestibulum sed magna at nunc commodo placerat.', 17, 3),
(51, 'Vestibulum sed magna at nunc commodo placerat.', 7, 6),
(52, 'Donec dapibus.', 50, 1),
(53, 'Aliquam non mauris.', 9, 1),
(54, 'Morbi vel lectus in quam fringilla rhoncus.', 43, 10),
(55, 'Nulla suscipit ligula in lacus.', 50, 8),
(56, 'Phasellus sit amet erat.', 22, 9),
(57, 'Pellentesque at nulla.', 10, 5),
(58, 'Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc.', 67, 2),
(59, 'Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.', 62, 10),
(60, 'Mauris ullamcorper purus sit amet nulla.', 40, 10),
(61, 'Donec dapibus.', 36, 6),
(62, 'Aenean sit amet justo.', 4, 10),
(63, 'Etiam vel augue.', 55, 4),
(64, 'Suspendisse potenti.', 30, 2),
(65, 'Nulla mollis molestie lorem.', 13, 9),
(66, 'Donec posuere metus vitae ipsum.', 69, 9),
(67, 'Pellentesque ultrices mattis odio.', 73, 9),
(68, 'In sagittis dui vel nisl.', 51, 3),
(69, 'Fusce posuere felis sed lacus.', 42, 7),
(70, 'Sed accumsan felis.', 43, 6),
(71, 'Nulla suscipit ligula in lacus.', 75, 6),
(72, 'Nullam porttitor lacus at turpis.', 73, 2),
(73, 'Pellentesque eget nunc.', 20, 4),
(74, 'Pellentesque eget nunc.', 37, 9),
(75, 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibus accumsan odio.', 17, 5),
(76, 'Fusce posuere felis sed lacus.', 67, 5),
(77, 'Duis aliquam convallis nunc.', 43, 6),
(78, 'Suspendisse potenti.', 5, 8),
(79, 'Morbi a ipsum.', 49, 4),
(80, 'Etiam justo.', 20, 7),
(81, 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', 56, 2),
(82, 'Sed accumsan felis.', 15, 2),
(83, 'Aenean sit amet justo.', 48, 3),
(84, 'Suspendisse accumsan tortor quis turpis.', 21, 6),
(85, 'Duis consequat dui nec nisi volutpat eleifend.', 75, 6),
(86, 'Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros.', 66, 6),
(87, 'Duis ac nibh.', 10, 1),
(88, 'Nulla justo.', 12, 4),
(89, 'Duis ac nibh.', 49, 1),
(90, 'Integer ac leo.', 54, 7),
(91, 'Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros.', 9, 7),
(92, 'Aenean lectus.', 31, 7),
(93, 'Suspendisse potenti.', 11, 4),
(94, 'Mauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis.', 73, 8),
(95, 'Maecenas tincidunt lacus at velit.', 24, 5),
(96, 'Nullam varius.', 22, 8),
(97, 'Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci.', 63, 3),
(98, 'Fusce posuere felis sed lacus.', 52, 1),
(99, 'Mauris sit amet eros.', 70, 1),
(100, 'In quis justo.', 66, 3);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `user_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`user_id`, `post_id`) VALUES
(73, 9),
(63, 6),
(39, 5),
(44, 7),
(19, 5),
(75, 10),
(67, 2),
(59, 8),
(4, 5),
(22, 3),
(19, 4),
(60, 5),
(43, 6),
(64, 2),
(58, 5),
(31, 10),
(71, 1),
(63, 5),
(5, 6),
(68, 2),
(35, 8),
(51, 7),
(67, 6),
(71, 8),
(40, 7),
(74, 9),
(64, 5),
(10, 10),
(3, 2),
(75, 3),
(5, 10),
(72, 2),
(40, 8),
(51, 9),
(31, 7),
(43, 3),
(48, 9),
(21, 1),
(54, 9),
(72, 10),
(38, 5),
(34, 8),
(68, 8),
(38, 1),
(8, 9),
(74, 10),
(7, 7),
(61, 9),
(73, 6),
(51, 3),
(5, 6),
(60, 10),
(71, 6),
(15, 7),
(20, 6),
(38, 5),
(56, 5),
(9, 3),
(11, 2),
(66, 5),
(14, 7),
(54, 2),
(13, 6),
(5, 8),
(3, 7),
(53, 5),
(3, 6),
(4, 6),
(25, 2),
(65, 1),
(43, 8),
(26, 10),
(8, 8),
(37, 5),
(45, 3),
(32, 2),
(26, 1),
(9, 2),
(61, 1),
(35, 3),
(10, 2),
(72, 7),
(26, 3),
(39, 7),
(23, 5),
(71, 7),
(38, 1),
(55, 3),
(41, 4),
(55, 1),
(58, 10),
(22, 4),
(42, 9),
(26, 7),
(47, 10),
(58, 10),
(14, 3),
(52, 3),
(51, 9),
(2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `title`, `description`, `user_id`) VALUES
(1, 'Praesent blandit lacinia erat.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 1),
(2, 'Suspendisse potenti.', 'Nunc purus.', 2),
(3, 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', 'Duis at velit eu est congue elementum. In hac habitasse platea dictumst. Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante.', 1),
(4, 'Pellentesque eget nunc.', 'Ut at dolor quis odio consequat varius. Integer ac leo. Pellentesque ultrices mattis odio.', 4),
(5, 'Morbi ut odio.', 'Suspendisse accumsan tortor quis turpis. Sed ante.', 5),
(6, 'Etiam justo.', 'In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem. Integer tincidunt ante vel ipsum.', 1),
(7, 'Vivamus in felis eu sapien cursus vestibulum.', 'Morbi porttitor lorem id ligula. Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem.', 7),
(8, 'Morbi quis tortor id nulla ultrices aliquet.', 'In sagittis dui vel nisl. Duis ac nibh. Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus.', 8),
(9, 'Nunc purus.', 'Quisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est.', 1),
(10, 'Fusce posuere felis sed lacus.', 'Nullam molestie nibh in lectus. Pellentesque at nulla.', 10);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'Crosby Paniman', 'cpaniman0@paypal.com', 'YXSvecCLWl5'),
(2, 'Antone Cappell', 'acappell1@mozilla.org', '1dGJAdJ8EJ'),
(3, 'Ramonda McCully', 'rmccully2@nyu.edu', 'Nskbvudm4l'),
(4, 'Bernette Mangam', 'bmangam3@disqus.com', 'AEu6WuscB8n'),
(5, 'Eward Moreinis', 'emoreinis4@nyu.edu', 'uHbCOLQi9u'),
(6, 'Tess Mulleary', 'tmulleary5@addthis.com', 'dxdhwpc5'),
(7, 'Neal Littrick', 'nlittrick6@livejournal.com', 'gQYcvYi2'),
(8, 'Anetta Bizzey', 'abizzey7@wunderground.com', '3oz4sCEbLe'),
(9, 'Marcy Brosh', 'mbrosh8@discovery.com', 'xwcabJ'),
(10, 'Erinn Callum', 'ecallum9@gizmodo.com', 'tdJGWfVz'),
(11, 'Dallas Loftus', 'dloftusa@tumblr.com', 'lPBGycvgLv'),
(12, 'Brenna Durling', 'bdurlingb@statcounter.com', 'S7vlBuI'),
(13, 'Bianka Graysmark', 'bgraysmarkc@godaddy.com', 'EPUV6ol1iSV'),
(14, 'Herold Bernon', 'hbernond@scribd.com', 'B0hH6bPdvIx'),
(15, 'Annmaria Phillput', 'aphillpute@webmd.com', '69MzSHEQRs'),
(16, 'Arvin Gorse', 'agorsef@house.gov', 'spH4Cf2z'),
(17, 'Ody Dicke', 'odickeg@hatena.ne.jp', 'qB1Had5m2y'),
(18, 'Tam Reape', 'treapeh@feedburner.com', 'De92u5EM7Vgh'),
(19, 'Dacey Whewill', 'dwhewilli@yelp.com', 'ssInMdA9HcV'),
(20, 'Ericka Hammerberger', 'ehammerbergerj@mit.edu', '40znnu8GUJo'),
(21, 'Zeke Kidder', 'zkidderk@lycos.com', 'qj5hyTx'),
(22, 'Lynn Philo', 'lphilol@taobao.com', 'HcaU6zGpQNy'),
(23, 'Ediva Thursfield', 'ethursfieldm@prnewswire.com', 'aEw1YZtK4Y'),
(24, 'Dulciana Loyns', 'dloynsn@myspace.com', 'cY2oamH'),
(25, 'Joli Dunsford', 'jdunsfordo@columbia.edu', 'Plq5lKLqZ'),
(26, 'Tammie Ledbetter', 'tledbetterp@oracle.com', 'EJPRKhI'),
(27, 'Arliene Ripley', 'aripleyq@surveymonkey.com', 'Q3MXw0l'),
(28, 'Orbadiah Perring', 'operringr@slashdot.org', '2JLVCvW94'),
(29, 'Sollie Kerwood', 'skerwoods@springer.com', 'iSS5jcuRBk'),
(30, 'Arlette Wyche', 'awychet@cocolog-nifty.com', 'zNU5csi8'),
(31, 'Taffy Tander', 'ttanderu@walmart.com', 'IDafPLO8ygf'),
(32, 'Dre Dudleston', 'ddudlestonv@taobao.com', 'fykqu99syQwf'),
(33, 'Katerina Walkden', 'kwalkdenw@ycombinator.com', 'QxUqKeo'),
(34, 'Thedric Walker', 'twalkerx@irs.gov', 'cettwMTiD9G1'),
(35, 'Byrom Volks', 'bvolksy@yale.edu', 'fuLMPUqqYwC'),
(36, 'Mavra Shafier', 'mshafierz@google.cn', 'wxxtW71sy2'),
(37, 'Rubie Brugger', 'rbrugger10@nationalgeographic.com', 'fCIi54'),
(38, 'Ruthy Goodley', 'rgoodley11@ovh.net', 'ro5MOQ65Vz'),
(39, 'Carlee Caroll', 'ccaroll12@youku.com', 'xlWOba'),
(40, 'Sloan Claughton', 'sclaughton13@usgs.gov', '9pvUJIvEUV'),
(41, 'Conn Lagen', 'clagen14@vinaora.com', 'sKG0fzhTIt'),
(42, 'Robinett Juschke', 'rjuschke15@pinterest.com', '5PohLmOiRX'),
(43, 'Dave Lepper', 'dlepper16@wunderground.com', 'DJAOvM'),
(44, 'Nananne Elder', 'nelder17@hhs.gov', 'IslkMh3'),
(45, 'Hannis Loalday', 'hloalday18@amazon.co.uk', 'oslvy5jPQMP'),
(46, 'Lazarus Blackham', 'lblackham19@smugmug.com', 'N91zT1Z'),
(47, 'Bartolomeo Rasor', 'brasor1a@geocities.com', 'qzSPYdMo'),
(48, 'Christean Childes', 'cchildes1b@constantcontact.com', 'YQIkBx2Fx'),
(49, 'Kiah Penhallurick', 'kpenhallurick1c@shutterfly.com', 'wxXj6a0L'),
(50, 'Emilee Krates', 'ekrates1d@fotki.com', '7uAPrDl'),
(51, 'Mar Niess', 'mniess1e@umich.edu', 's0nmvSS9RQNR'),
(52, 'Ingunna Glazzard', 'iglazzard1f@jimdo.com', 'r2xBzW'),
(53, 'Myrta Steanson', 'msteanson1g@washingtonpost.com', 'KvzAaJLPN86f'),
(54, 'Kassia Lyfield', 'klyfield1h@nih.gov', 'fUqhjlNOG0xr'),
(55, 'Morna Domenicone', 'mdomenicone1i@umich.edu', 'w1RY8V'),
(56, 'Aarika Doogue', 'adoogue1j@europa.eu', 'dDWL4IX'),
(57, 'Trudey Weerdenburg', 'tweerdenburg1k@purevolume.com', '6VhTLW'),
(58, 'Chryste Kehri', 'ckehri1l@ustream.tv', 'bs58QKHs'),
(59, 'Madelyn Jovanovic', 'mjovanovic1m@jalbum.net', '6W3ou0Ws'),
(60, 'Ramsey Rame', 'rrame1n@github.com', 'l8vSfVh1'),
(61, 'Ingeborg Cahan', 'icahan1o@ca.gov', 'qx35KqPtDUcz'),
(62, 'Loleta Geldeford', 'lgeldeford1p@omniture.com', 'EMZzt6qEo'),
(63, 'Quintina Furby', 'qfurby1q@nifty.com', 'r20tLYwP3K'),
(64, 'Mommy Isaaksohn', 'misaaksohn1r@mediafire.com', 'etH8TLvK'),
(65, 'Sherlock Carlyon', 'scarlyon1s@google.ca', 'SdE8feRq1TZW'),
(66, 'Galen Watchorn', 'gwatchorn1t@baidu.com', 'Yncya1kzgjw'),
(67, 'Lane Pipe', 'lpipe1u@dmoz.org', 'xOdjei'),
(68, 'Maureen Dowears', 'mdowears1v@bigcartel.com', 'eieglCfFbBXf'),
(69, 'Philis Dreigher', 'pdreigher1w@cnet.com', 'rsCCd0V3qffd'),
(70, 'Sosanna Sumption', 'ssumption1x@altervista.org', 'aIARA0'),
(71, 'Jarib Belford', 'jbelford1y@newsvine.com', 'om0idHfCJzv'),
(72, 'Fredrick Francey', 'ffrancey1z@linkedin.com', 'gwmJRkf3Ra'),
(73, 'Brennen Trahar', 'btrahar20@nhs.uk', 'YTl09HVZ0sPU'),
(74, 'Alis Golt', 'agolt21@indiegogo.com', 'oLiWeQSq'),
(75, 'Mallory Cicero', 'mcicero22@ted.com', 'ujQeBgFWf9Xo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`);

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
