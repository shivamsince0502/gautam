-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2022 at 10:03 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `puttam_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `name`, `role`, `password`, `created_at`, `updated_at`, `deleted_at`, `status`) VALUES
(1, 'admin', 'Rajesh Kumar', 'Website Admin', 'e10adc3949ba59abbe56e057f20f883e', '2022-07-29 06:56:35', NULL, NULL, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `vanue` varchar(100) NOT NULL,
  `event_day_start` date NOT NULL,
  `event_day_end` date NOT NULL,
  `massage` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`id`, `name`, `date`, `user_id`, `vendor_id`, `location_id`, `vanue`, `event_day_start`, `event_day_end`, `massage`, `created_at`, `updated_at`, `deleted_at`, `status`) VALUES
(1, 'ajay', '2022-08-11 06:33:17', 0, 0, 0, 'hazaribagh', '2022-08-12', '2022-08-13', 'ASD', '2022-08-11 06:33:17', NULL, NULL, 'Active'),
(2, 'amit shaw', '2022-08-11 06:34:58', 0, 0, 0, 'ranchi', '2022-08-26', '2022-08-28', 'q2wew', '2022-08-11 06:34:58', NULL, NULL, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `msg` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `Status` varchar(100) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `fname`, `lname`, `email`, `phone`, `msg`, `created_at`, `updated_at`, `deleted_at`, `Status`) VALUES
(1, '', '', '', '', 'ghjkl;', '2022-08-11 07:00:59', NULL, NULL, 'Active'),
(2, '', '', '', '123456789', 'derfghjkl', '2022-08-11 07:05:03', NULL, NULL, 'Active'),
(3, '', '', '', '78903456', 'sdfghjk', '2022-08-11 07:09:10', NULL, NULL, 'Active'),
(4, 'amit', 'gupta', 'amitk7879@gmail.com', '7004788211', 'hello this is amit', '2022-08-11 07:11:08', NULL, NULL, 'Active'),
(5, 'amar', 'deep', 'amar@gmail.com', '4567890', 'hello', '2022-08-11 07:12:44', NULL, NULL, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_location`
--

CREATE TABLE `tbl_location` (
  `id` int(11) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_location`
--

INSERT INTO `tbl_location` (`id`, `state`, `city`, `created_at`, `updated_at`, `deleted_at`, `status`) VALUES
(1, 'Jhankhand', 'djsfd', '2022-08-05 11:20:24', '2022-08-05 11:20:36', '2022-08-05 11:20:40', 'Active'),
(2, 'Jharkhand', 'Dhanbad', '2022-08-11 07:56:38', NULL, NULL, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package`
--

CREATE TABLE `tbl_package` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `img_url` varchar(300) NOT NULL,
  `rate` varchar(100) NOT NULL,
  `discount` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service_area`
--

CREATE TABLE `tbl_service_area` (
  `id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_setting`
--

CREATE TABLE `tbl_setting` (
  `id` int(11) NOT NULL,
  `org_name` varchar(100) NOT NULL,
  `legal_name` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone1` varchar(100) NOT NULL,
  `phone2` varchar(100) NOT NULL,
  `powered_by` varchar(100) NOT NULL,
  `powered_url` varchar(50) NOT NULL,
  `year` varchar(10) NOT NULL,
  `color_theme_primary` varchar(10) NOT NULL,
  `color_theme_secondary` varchar(10) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_setting`
--

INSERT INTO `tbl_setting` (`id`, `org_name`, `legal_name`, `website`, `email`, `phone1`, `phone2`, `powered_by`, `powered_url`, `year`, `color_theme_primary`, `color_theme_secondary`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Puttam', 'Puttam', '', 'info@puttam.com', '1234567890', '', 'eshuzo', 'https://www.eshuzo.com', '2022', '', '', 'active', '2022-08-01 12:53:55', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `email`, `mobile`, `password`, `created_at`, `updated_at`, `deleted_at`, `status`) VALUES
(1, 'Amit', 'amit@gmail.com', '79076655432', '0cb1eb413b8f7cee17701a37a1d74dc3', '2022-08-05 11:26:54', NULL, NULL, 'Active'),
(2, 'amit kumar', 'amitk7879@gmail.com', '7004788211', '123456', '2022-08-06 07:43:51', NULL, NULL, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vender_request`
--

CREATE TABLE `tbl_vender_request` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `name` varchar(100) NOT NULL,
  `mobile` varchar(78) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` varchar(12) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vendor`
--

CREATE TABLE `tbl_vendor` (
  `id` int(11) NOT NULL,
  `v_code` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `photo_url` varchar(300) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `role` varchar(12) NOT NULL DEFAULT 'Vendor',
  `password` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_vendor`
--

INSERT INTO `tbl_vendor` (`id`, `v_code`, `name`, `photo_url`, `email`, `mobile`, `role`, `password`, `created_at`, `updated_at`, `deleted_at`, `status`) VALUES
(1, '$v_code', '$name', '$photo_url', '$email', '$mobile', 'Vendor', '$password', '2022-08-05 10:49:26', NULL, '2022-08-05 10:57:59', 'Active'),
(2, '12', 'dsfk;d', './photo_url/d3d55956037d7a15096a7a4cd291e383.jpeg', 'dsflkfd', 'dsf;;fmds', 'Vendor', 'dfkl', '2022-08-05 10:54:47', NULL, '2022-08-05 10:57:58', 'Active'),
(3, 'dsfkljkl', 'dsfk;m', './photo_url/bc77c7920921bee4fdd323719ae345f7.jpeg', 'sdklfmksdf;;', 'dsk', 'Vendor', '1212', '2022-08-05 11:00:46', NULL, NULL, 'Active'),
(4, '12', 'Rajesh ', 'jldkjdklsjakldj', 'admin', '79076655432', 'Vendor', 'e10adc3949ba59abbe56e057f20f883e', '2022-08-05 11:50:08', NULL, NULL, 'Active'),
(5, '17', 'Amit', 'dmfmnfdmdsklfdfksl', 'amit@gmail.com', '878797775', 'Vendor', 'e10adc3949ba59abbe56e057f20f883e', '2022-08-05 11:59:10', NULL, '2022-08-11 07:56:52', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_location`
--
ALTER TABLE `tbl_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_package`
--
ALTER TABLE `tbl_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_service_area`
--
ALTER TABLE `tbl_service_area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_setting`
--
ALTER TABLE `tbl_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_vender_request`
--
ALTER TABLE `tbl_vender_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_vendor`
--
ALTER TABLE `tbl_vendor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_location`
--
ALTER TABLE `tbl_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_package`
--
ALTER TABLE `tbl_package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_service_area`
--
ALTER TABLE `tbl_service_area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_setting`
--
ALTER TABLE `tbl_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_vender_request`
--
ALTER TABLE `tbl_vender_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_vendor`
--
ALTER TABLE `tbl_vendor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
