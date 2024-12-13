-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2022 at 02:39 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hfdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(3) NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin1', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(3) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(25) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `owner_id` int(3) NOT NULL,
  `user_id` int(3) NOT NULL,
  `owner_firstname` varchar(20) CHARACTER SET latin1 NOT NULL,
  `owner_lastname` varchar(20) CHARACTER SET latin1 NOT NULL,
  `password` varchar(32) CHARACTER SET latin1 NOT NULL,
  `owner_email` varchar(30) CHARACTER SET latin1 NOT NULL,
  `owner_contact_no` varchar(13) CHARACTER SET latin1 NOT NULL,
  `hostel_id` int(3) NOT NULL,
  `hostel_title` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`owner_id`, `user_id`, `owner_firstname`, `owner_lastname`, `password`, `owner_email`, `owner_contact_no`, `hostel_id`, `hostel_title`, `date`) VALUES
(22, 0, 'Ravirajsinh', 'Parmar', '@raviraj', '196330307067.ravirajsinh.parma', '7624087879', 0, '', '2022-05-11 09:40:31'),
(23, 0, 'Ronak', 'Ahir', '@ronak', '196330307001.ronak.ahir@gmail.', '7016767551', 0, '', '2022-05-11 09:48:33'),
(24, 0, 'Gopal', 'Vasani', '@vasani', '196330307141.vasani.vrajgopal@', '9427406555', 0, '', '2022-05-11 09:50:22'),
(25, 22, 'Madhav', 'Katariya', '@madhav', 'madhav2000katariya@gmail.com', '9537273803', 140, 'The Vardhman Hostel', '2022-05-11 10:04:06'),
(26, 23, 'Tilak', 'Mistry', '@tilak', 'tilakmistry141@gmail.com', '9879336498', 142, 'Friends Hostel', '2022-05-11 10:14:27');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `hostel_id` int(11) NOT NULL,
  `user_id` int(3) NOT NULL,
  `owner_id` int(3) NOT NULL,
  `title` varchar(255) NOT NULL,
  `o_name` varchar(30) NOT NULL,
  `p_no` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `price` varchar(11) NOT NULL,
  `address` text NOT NULL,
  `description` varchar(300) NOT NULL,
  `file` varchar(50) NOT NULL,
  `no_rooms` int(10) NOT NULL,
  `property_type` varchar(20) NOT NULL,
  `wifi` varchar(10) NOT NULL,
  `laundry` varchar(10) NOT NULL,
  `parking` varchar(10) NOT NULL,
  `ac_rooms` varchar(10) NOT NULL,
  `kitchen` varchar(10) NOT NULL,
  `hot_water` varchar(10) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`hostel_id`, `user_id`, `owner_id`, `title`, `o_name`, `p_no`, `email`, `price`, `address`, `description`, `file`, `no_rooms`, `property_type`, `wifi`, `laundry`, `parking`, `ac_rooms`, `kitchen`, `hot_water`, `date`) VALUES
(140, 22, 0, 'The Vardhman Hostel', 'Madhav', '9537273803', 'madhav2000katariya@gmail.com', '12000', 'Near India colony, Bopal, Ahmedabad, Gujarat 382481, India', 'this hostel offers various modern amenities for your comfort, such as Wi-Fi, etc. This hostel has triple occupancy types. This hostel is nearby major commercial and educational hubs. Please contact the seller to book this fast-selling high demand hostel stay.', 'dwarikadhish.jpg', 8, 'Girls', 'Available', 'Available', 'Available', 'AC Rooms', 'Available', 'Available', '2022-05-11 10:04:06'),
(141, 23, 0, 'Friends Hostel', 'Tilak', '9879336498', 'tilakmistry141@gmail.com', '15000', 'Near Tejas Schoool, Bopal, Ahmedabad, Gujarat 382481, India', 'this hostel offers various modern amenities for your comfort, such as Wi-Fi, etc. This hostel has triple occupancy types. This hostel is nearby major commercial and educational hubs. Please contact the seller to book this fast-selling high demand hostel to stay.', '03.png', 15, 'Boys/Girls Both', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', '2022-05-11 10:14:28'),
(142, 0, 22, 'Cristal Hostel', 'Ravirajsinh', '7016767551', '196330307067.ravirajsinh.parmar@gmail.com', '15000', 'Near nandeshvar mahadev tempal, Bopal, Ahmedabad, Gujarat 382481, India', 'this hostel offers various modern amenities for your comfort, such as Wi-Fi, etc. This hostel has triple occupancy types. This hostel is nearby major commercial and educational hubs. Please contact the seller to book this fast-selling high demand hostel to stay.', 'jay mataji.jpg', 10, 'Boys', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', '2022-05-11 10:14:28'),
(143, 0, 23, 'Navkar Hostel', 'Ronak', '7623087879', '196330307001.ronak.ahir@gmail.com', '13000', 'Near TRP mall, Bopal, Ahmedabad, Gujarat 382481, India', 'this hostel offers various modern amenities for your comfort, such as Wi-Fi, etc. This hostel has triple occupancy types. This hostel is nearby major commercial and educational hubs. Please contact the seller to book this fast-selling high demand hostel to stay.', 'girls.jpg', 12, 'Girls', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', '2022-05-11 10:14:28'),
(144, 0, 24, 'Positive aura Hostel', 'Gopal', '9427406555', '196330307141.vasani.vrajgopal@gmail.com', '8500', 'Near bhavya park, Bopal, Ahmedabad, Gujarat 382481, India', 'this hostel offers various modern amenities for your comfort, such as Wi-Fi, etc. This hostel has triple occupancy types. This hostel is nearby major commercial and educational hubs. Please contact the seller to book this fast-selling high demand hostel to stay.', 'image.jpg', 8, 'Girls', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', '2022-05-11 10:14:28');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(3) NOT NULL,
  `user_firstname` varchar(20) CHARACTER SET latin1 NOT NULL,
  `user_lastname` varchar(20) CHARACTER SET latin1 NOT NULL,
  `password` varchar(32) CHARACTER SET latin1 NOT NULL,
  `user_email` varchar(30) CHARACTER SET latin1 NOT NULL,
  `user_contact_no` varchar(13) CHARACTER SET latin1 NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_firstname`, `user_lastname`, `password`, `user_email`, `user_contact_no`, `date`) VALUES
(19, 'Ravirajsinh', 'Parmar', '@raviraj', 'ravirajsinh1116@gmail.com', '7623087879', '2022-05-11 09:32:19'),
(20, 'Ronak ', 'Ahir', '@ronak', 'ahir.ronak.b@gmail.com', '7016767551', '2022-05-11 09:33:44'),
(21, 'Vrajgopal', 'Vasani', '@vasani', 'vgvasani2000@gmail.com', '9427406555', '2022-05-11 09:34:33'),
(22, 'Madhav', 'Katariya', '@madhav', 'madhav2000katariya@gmail.com', '9537273803', '2022-05-11 09:36:10'),
(23, 'Tilak', 'Mistry', '@tilak', 'tilakmistry141@gmail.com', '9879336498', '2022-05-11 09:37:08');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` int(3) NOT NULL,
  `user_id` int(3) NOT NULL,
  `owner_id` int(3) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `owner_email` varchar(30) NOT NULL,
  `title` varchar(20) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `visit_req`
--

CREATE TABLE `visit_req` (
  `visit_id` int(3) NOT NULL,
  `user_id` int(3) NOT NULL,
  `owner_id` int(3) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_contact_no` int(15) NOT NULL,
  `owner_email` varchar(30) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`owner_id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`hostel_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`user_email`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visit_req`
--
ALTER TABLE `visit_req`
  ADD PRIMARY KEY (`visit_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `owner_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `hostel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visit_req`
--
ALTER TABLE `visit_req`
  MODIFY `visit_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
