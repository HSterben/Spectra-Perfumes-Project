-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 17, 2024 at 07:37 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Spectra-Perfumes`
--
CREATE DATABASE IF NOT EXISTS `Spectra-Perfumes` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `Spectra-Perfumes`;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--
DROP TABLE IF EXISTS `invoice`;
CREATE TABLE `invoice` (
  `invoice_id` int(16) NOT NULL,
  `folder_id` int(16) NULL,
  `address_id` int(16) NOT NULL,
  `bookmark` boolean NOT NULL DEFAULT '0',
  `invoice_date` timestamp NOT NULL,
  `invoice_business_name` text NOT NULL,
  `invoice_project_num` int(16) NOT NULL,
  `invoice_title` varchar(256) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `return_quantity` int(16) NULL,
  `perfume_code` int(16) NOT NULL,
  `perfume_price` double NOT NULL,
  `note_text` varchar(256) NULL,
  `note_date` timestamp NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `folder`
--
DROP TABLE IF EXISTS `folder`;
CREATE TABLE `folder` (
  `folder_id` int(16) NOT NULL,
  `invoice_id` int(16) NOT NULL,
  `folder_name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--
DROP TABLE IF EXISTS `activity_log`;
CREATE TABLE `activity_log` (
  `activity_id` int(16) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `message` text(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `address`
--
DROP TABLE IF EXISTS `address`;
CREATE TABLE `address` (
  `address_id` int(16) NOT NULL,
  `invoice_id` int(16) NOT NULL,
  `country` varchar(64) NOT NULL,
  `region` varchar(64) NOT NULL,
  `city` varchar(128) NOT NULL,
  `street_name` varchar(128) NOT NULL,
  `building_number` int(8) NOT NULL,
  `postal_code` int(6) NOT NULL,
  `is_apartment` boolean NOT NULL,
  `apartment_number` int(16) NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_id`),
  ADD KEY `folder_id` (`folder_id`),
  ADD KEY `address_id` (`address_id`);

--
-- Indexes for table `folder`
--
ALTER TABLE `folder`
  ADD PRIMARY KEY (`folder_id`),
  ADD KEY `invoice_id` (`invoice_id`);

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`activity_id`);

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`address_id`),
  ADD KEY `invoice_id` (`invoice_id`);

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoice_id` int(16) NOT NULL AUTO_INCREMENT;

--
-- TRIGGER for table 'invoice' for 'invoice_project_num'
--
DELIMITER $$

  CREATE TRIGGER increment_invoice_project_num BEFORE INSERT ON invoice
FOR EACH ROW
BEGIN
  DECLARE new_project_num INT;

  -- Find the current maximum `invoice_project_num` and add 1
  SELECT COALESCE(MAX(invoice_project_num), 0) + 1 INTO new_project_num FROM invoice;

  -- Set the new project number
  SET NEW.invoice_project_num = new_project_num;
END$$

DELIMITER ;

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `address_id` int(16) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `folder`
--
ALTER TABLE `folder`
  MODIFY `folder_id` int(16) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `activity_id` int(16) NOT NULL AUTO_INCREMENT;

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_id_ibfk_1` FOREIGN KEY (`folder_id`) REFERENCES `folder` (`folder_id`),
  ADD CONSTRAINT `invoice_id_ibfk_2` FOREIGN KEY (`address_id`) REFERENCES `address` (`address_id`);


--
-- Constraints for table `folder`
--
ALTER TABLE `folder`
  ADD CONSTRAINT `folder_ibfk_1` FOREIGN KEY (`invoice_id`) REFERENCES `invoice` (`invoice_id`);

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `publication_comment_ibfk_1` FOREIGN KEY (`invoice_id`) REFERENCES `invoice` (`invoice_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
