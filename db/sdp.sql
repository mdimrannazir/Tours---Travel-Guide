-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2023 at 09:08 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdp`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `activityid` int(50) NOT NULL,
  `placeid` int(50) NOT NULL,
  `activitytitle` varchar(100) NOT NULL,
  `activitydesc` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`activityid`, `placeid`, `activitytitle`, `activitydesc`) VALUES
(10, 8, 'Inani Beach', 'nani beach is a well-known place in Cox’s Bazar. The Inani beach is a coral beach with sharp stones.\r\n\r\nPathorkhani is located in Inani Beach, a famous attraction where tourists gather around it and take snapshots by sitting on it.\r\n\r\nAlso the sea view youll get in the Inani is unlike any other spot in Coxs bazar. For a perfect beach view stay at Inani you can choose Dera Resort & Spa Coxs Bazars five star facility.'),
(11, 8, 'Marine Drive', 'The longest marine drive in the world is Coxs Bazar–Teknaf marine drive which is about 80 kilometers long. You can ride the Chander Gari from Coxs Bazar to Teknaf. You can also go to Saint Martin Island from there.'),
(13, 9, 'Tiger Point Sundarban', ' Kachikhali is more often called as tiger point. This place is best for wild tracking.'),
(14, 9, 'Jamtola Beach', 'Jamtola Sea beach sundarban is another magnificent tourist spot where tourist will enjoy the sunset and sur rise.');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `foodid` int(50) NOT NULL,
  `placeid` int(50) NOT NULL,
  `foodtitle` varchar(50) NOT NULL,
  `fooddesc` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`foodid`, `placeid`, `foodtitle`, `fooddesc`) VALUES
(8, 8, 'Mermaid Cafe', 'Mermaid Cafe is a perfect restaurant for a romantic date with your partner. They have an amazing ambiance. They serve quality food. The beautiful decoration and beach view location are more than enough to make you feel good.'),
(9, 8, 'Salt Bistro and Cafe', 'The salt bistro restaurant is well known for its ambiance. It is well decorated. The food is very tasty. It could be a very good destination for friend’s hangout.'),
(10, 9, '1 Bite Restaurant and Banquet ', '1 bite restaurant and banquet Everything was nice there, I had dinner last week night and it was one of the best food I ever had. As the weather was too cold and it was night time when I went there. I was looking for food as my partner was out of town and food was not cooked at home. So when I went there I found that they serve the many type of dosas and I chose Masala dosa. And it tasted awesome. Also they served the sambhar for many times without asking and this is the thing which I liked most .'),
(11, 9, 'Sundarban Restaurant ', 'This is a restaurant with availability of local food items. Both chicken tikka kabab (koila) and chicken grill kabab is available with special Nan rooti. In the morning they have tundur rooti and porata with Dal, bhaji, chicken soup, nehari etc. Overall service is good');

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `placeid` int(50) NOT NULL,
  `placetitle` varchar(100) NOT NULL,
  `placedesc` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`placeid`, `placetitle`, `placedesc`) VALUES
(8, 'Cox Bazar', 'Coxs Bazar is a town on the southeast coast of Bangladesh. It’s known for its very long, sandy beachfront, stretching from Sea Beach in the north to Kolatoli Beach in the south. Aggameda Khyang monastery is home to bronze statues and centuries-old Buddhist manuscripts. South of town, the tropical rainforest of Himchari National Park has waterfalls and many birds. North, sea turtles breed on nearby Sonadia Island'),
(9, 'Sundarban', 'Sundarbans is a mangrove area in the delta formed by the confluence of the Padma, Brahmaputra and Meghna Rivers in the Bay of Bengal. Sundarban Reserve Forest of Bangladesh is the largest mangrove forest in the world.');

-- --------------------------------------------------------

--
-- Table structure for table `stay`
--

CREATE TABLE `stay` (
  `stayid` int(50) NOT NULL,
  `placeid` int(50) NOT NULL,
  `staytitle` varchar(100) NOT NULL,
  `staydesc` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stay`
--

INSERT INTO `stay` (`stayid`, `placeid`, `staytitle`, `staydesc`) VALUES
(11, 8, 'Hotel Sea Shine', 'Situated in Coxs Bazar, 400 metres from Coxs Bazar Sea Beach, Hotel Sea Shine features accommodation with free WiFi and free private parking. At the hotel, rooms have a balcony with a city view. '),
(12, 8, 'Long Beach Hotel ', 'Offering an indoor pool, a fitness centre and a spa and wellness centre, Long Beach Hotel is located 3.3 km from the Coxs Bazar Airport and Local Bus Station. good hotel to stay . nice atmosphere . well behaved staff. food should be more tasty. nice bed.'),
(13, 9, 'ROYAL SUNDARBAN', 'Location of the Hotel is Satjelia View On Map (Jharkhali coastal, 2nd scheme, PS BasantiSouth 24 Parganas Pin - 743312 ). Top Facilities of this Hotel are Air Conditioning & Room Service & Power Backup.'),
(14, 9, 'Sundarban Gateway Resort', 'Full Address of property is Vill : Dulki, Pakhiralaya, PS: Gosaba, South 24 Parganas View On Map This Hotel have 2.6 Out of 5 Rating where 3.7/5 for Location & 3.4/5 for Hospitality & 3.3/5 for Room . Key amenities of this property are Lounge & Outdoor Sports & Boat Ride.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `sno` int(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `uid` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`sno`, `fullname`, `uid`, `email`, `password`, `date`) VALUES
(8, 'Afsana Hash Password', 111, 'afs@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2023-03-21 17:33:30'),
(9, 'MD. Imran Nazir', 248, 'imrannazir1.in@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2023-03-21 17:59:40'),
(10, 'Afsana Akter', 295, 'afsanaakter@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2023-03-21 18:00:15'),
(11, 'Ibrahim Kholil', 222, 'ibrahim@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2023-03-21 22:52:34'),
(12, 'Mohammad Hasibul Islam', 333, 'hasib@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2023-03-21 22:53:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`activityid`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`foodid`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`placeid`);

--
-- Indexes for table `stay`
--
ALTER TABLE `stay`
  ADD PRIMARY KEY (`stayid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `activityid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `foodid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `placeid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `stay`
--
ALTER TABLE `stay`
  MODIFY `stayid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `sno` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
