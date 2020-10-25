-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 25, 2020 at 09:35 PM
-- Server version: 5.7.31-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.7

-- --------------------------------------------------------

--
-- Table structure for table `gebruikers`
--

CREATE TABLE `gebruikers` (
  `id` int(11) NOT NULL,
  `gebruikersnaam` varchar(50) NOT NULL,
  `wachtwoord` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gebruikers`
--

INSERT INTO `gebruikers` (`id`, `gebruikersnaam`, `wachtwoord`, `created_at`, `updated_at`) VALUES
(1, 'Stephan Hoeksema', '$2y$10$QYtsb.fHcNVJfhU57cSFAuJtwYm497j.dvqa03xoBbJFvXslyR6AO', '2020-10-25 21:31:46', '2020-10-25 21:31:46'),
(2, 'Rudy Borgstede', '$2y$10$47RhUHfhDhiZ412aiq7KPup/76opB7qmSyix8cMIBZ1tmsrlKdVHy', '2020-10-25 21:34:24', '2020-10-25 21:34:24');

-- --------------------------------------------------------
--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `videoID` int(11) NOT NULL,
  `naam_video` varchar(255) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `videobeschrijving` longtext,
  `video` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`videoID`, `naam_video`, `image`, `videobeschrijving`, `video`) VALUES
(1, 'start html', 'https://i.ytimg.com/vi/9gTw2EDkaDQ/hqdefault.jpg?sqp=-oaymwEZCNACELwBSFXyq4qpAwsIARUAAIhCGAFwAQ==&rs=AOn4CLBuJSYQJHSJjitEOKP6rTRKc1lj6w', '<h1>Quick rundown of the course<br></h1>\r\n<ul style=\"font-size: 20px;\">\r\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\r\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>\r\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\r\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\r\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\r\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\r\n		\r\n</ul>', 'https://www.youtube.com/embed/1Rs2ND1ryYc'),
(2, 'start css', 'https://i.ytimg.com/vi/1Rs2ND1ryYc/hqdefault.jpg?sqp=-oaymwEZCNACELwBSFXyq4qpAwsIARUAAIhCGAFwAQ==&rs=AOn4CLA3PC_Tcv82ZGWVwW2UseYtt2d6lA', '<h1>css Quick rundown of the course</h1>\n<br>\n<ul style=\"font-size: 20px;\">\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n		\n</ul>', 'https://www.youtube.com/embed/1Rs2ND1ryYc'),
(3, 'html&css full course', 'https://i.ytimg.com/vi/UB1O30fR-EE/hqdefault.jpg?sqp=-oaymwEZCNACELwBSFXyq4qpAwsIARUAAIhCGAFwAQ==&rs=AOn4CLAfubHVsEt9C15PTXXR8TQhT1nOgg', '<h1>html & css Quick rundown of the course</h1>\n<br>\n<ul style=\"font-size: 20px;\">\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n		\n</ul>', 'https://www.youtube.com/embed/UB1O30fR-EE'),
(4, 'php intro', 'https://i.ytimg.com/vi/Anz0ArcQ5kI/hqdefault.jpg?sqp=-oaymwEZCNACELwBSFXyq4qpAwsIARUAAIhCGAFwAQ==&rs=AOn4CLA3WFVo2EiAdaoMx7sQmC8N9Y4S-Q', '<h1>php Quick rundown of the course</h1>\n<br>\n<ul style=\"font-size: 20px;\">\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n		\n</ul>', 'https://www.youtube.com/embed/Anz0ArcQ5kI'),
(5, 'php syntax', 'https://i.ytimg.com/vi/U10yvfIStx8/hqdefault.jpg?sqp=-oaymwEZCNACELwBSFXyq4qpAwsIARUAAIhCGAFwAQ==&rs=AOn4CLBJOOubzBGJVKM6fv5hWsQp7XEGlw', '<h1>php syntax Quick rundown of the course</h1>\n<br>\n<ul style=\"font-size: 20px;\">\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n		\n</ul>', 'https://www.youtube.com/embed/U10yvfIStx8\"'),
(6, 'php full course', 'https://i.ytimg.com/vi/OK_JCtrrv-c/hqdefault.jpg?sqp=-oaymwEZCNACELwBSFXyq4qpAwsIARUAAIhCGAFwAQ==&rs=AOn4CLBaBrtaxkpLhXxVBHE9e70I0saBSA', '<h1> php full course Quick rundown of the course</h1>\n<br>\n<ul style=\"font-size: 20px;\">\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n		\n</ul>', 'https://www.youtube.com/embed/OK_JCtrrv-c'),
(7, 'js intro', 'https://i.ytimg.com/vi/2nZiB1JItbY/hqdefault.jpg?sqp=-oaymwEZCNACELwBSFXyq4qpAwsIARUAAIhCGAFwAQ==&rs=AOn4CLCcets78UnqJZTiHQz0ndEJ3ILUXA', '<h1>js intro Quick rundown of the course</h1>\n<br>\n<ul style=\"font-size: 20px;\">\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n		\n</ul>', 'https://www.youtube.com/embed/2nZiB1JItbY'),
(8, 'js syntax', 'https://i.ytimg.com/vi/KXxXr0RxGDE/hqdefault.jpg?sqp=-oaymwEZCNACELwBSFXyq4qpAwsIARUAAIhCGAFwAQ==&rs=AOn4CLDQgb7JgDZmvWzVawfqrt5A7x9fNw', '<h1>js syntax Quick rundown of the course</h1>\n<br>\n<ul style=\"font-size: 20px;\">\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n		\n</ul>', 'https://www.youtube.com/embed/KXxXr0RxGDE'),
(9, 'js full course', 'https://i.ytimg.com/vi/PkZNo7MFNFg/hqdefault.jpg?sqp=-oaymwEZCNACELwBSFXyq4qpAwsIARUAAIhCGAFwAQ==&rs=AOn4CLDQC1NHvPzQPsU4sSerW-Y6PUUa_w', '<h1>js syntax Quick rundown of the course</h1>\n<br>\n<ul style=\"font-size: 20px;\">\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n	<li>lorem ipsum lorem ipsum lorem ipsum</li>	\n		\n</ul>', 'https://www.youtube.com/embed/PkZNo7MFNFg'),
(12, 'Ruby Programming | In One Video', 'https://i.ytimg.com/vi/8wZ2ZD--VTk/hq720.jpg?sqp=-oaymwEXCNAFEJQDSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLCfRaOffEd3knL6a2ijKgtOEWTwAg', '<p>Lorem ipsum</p>', 'https://www.youtube.com/embed/8wZ2ZD');

-- --------------------------------------------------------

--
-- Table structure for table `watch`
--

CREATE TABLE `watch` (
  `id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gebruikers`
--
ALTER TABLE `gebruikers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `gebruikersnaam` (`gebruikersnaam`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`videoID`);

--
-- Indexes for table `watch`
--
ALTER TABLE `watch`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for table `gebruikers`
--
ALTER TABLE `gebruikers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `videoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
-- AUTO_INCREMENT for table `watch`
--
ALTER TABLE `watch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
