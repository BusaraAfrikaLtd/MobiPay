-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 05, 2013 at 05:15 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mobipay_two`
--
CREATE DATABASE IF NOT EXISTS `mobipay_two` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mobipay_two`;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `operator` varchar(30) NOT NULL COMMENT 'Mobile Money operator in a particular country.',
  `email` varchar(40) NOT NULL,
  `hashed_password` varchar(50) NOT NULL,
  `contact` varchar(40) NOT NULL,
  `mm_full_name` varchar(40) NOT NULL COMMENT 'The full name registered for mobile money.',
  `address` text NOT NULL,
  `mm_acc_num` varchar(50) DEFAULT NULL COMMENT 'Mobile money phone number of the user.',
  `varification_code` int(11) DEFAULT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `registered_date` datetime DEFAULT NULL,
  `last_update` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`customer_id`),
  KEY `customer_id` (`customer_id`,`firstname`,`lastname`,`email`,`mm_full_name`,`mm_acc_num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Stores all information related to online buyers.' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `merchants`
--

CREATE TABLE IF NOT EXISTS `merchants` (
  `merchant_id` int(11) NOT NULL AUTO_INCREMENT,
  `businesstype` varchar(50) NOT NULL,
  `webaddress` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mm_username` varchar(50) DEFAULT NULL COMMENT 'Mobile money user name.',
  `businessname` varchar(50) NOT NULL,
  `bank_account` varchar(50) DEFAULT NULL,
  `country` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `mm_acc_number` varchar(50) NOT NULL COMMENT 'Phone number used for mobile money.',
  `customer_id` varchar(11) NOT NULL,
  `verification_code` varchar(45) DEFAULT NULL,
  `verified` bit(1) DEFAULT b'0',
  PRIMARY KEY (`merchant_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE IF NOT EXISTS `partners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `code` varchar(10) DEFAULT NULL COMMENT 'This table stores the information about mobile money service providers. ',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `transactions_history`
--

CREATE TABLE IF NOT EXISTS `transactions_history` (
  `trans_id` int(11) NOT NULL AUTO_INCREMENT,
  `transaction_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Date a transaction processed.',
  `mm_owner` varchar(45) NOT NULL COMMENT 'Name of the owner of the transaction process.',
  `mm_number` varchar(45) NOT NULL COMMENT 'Mobile Money account used to process the transaction.',
  `merchants_name` varchar(45) NOT NULL COMMENT 'The name of the merchant where transaction were processed from.',
  `currency` varchar(10) NOT NULL COMMENT 'This is type of currency used to process transaction.',
  `currency_value` decimal(10,0) NOT NULL COMMENT 'This is amount of cost incured by the customer',
  `ip_address` varchar(45) NOT NULL COMMENT 'This is an IP-Address of the device used to process the transaction.',
  `mm_provider` varchar(45) NOT NULL COMMENT 'The name of mobile money provider.',
  PRIMARY KEY (`trans_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='These are all transactions processed by customer.' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `transctions`
--

CREATE TABLE IF NOT EXISTS `transctions` (
  `customers_customer_id` int(11) NOT NULL,
  `merchants_id` int(11) NOT NULL,
  PRIMARY KEY (`customers_customer_id`,`merchants_id`),
  KEY `fk_customers_has_merchants_merchants1_idx` (`merchants_id`),
  KEY `fk_customers_has_merchants_customers_idx` (`customers_customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transctions`
--
ALTER TABLE `transctions`
  ADD CONSTRAINT `fk_customers_has_merchants_customers` FOREIGN KEY (`customers_customer_id`) REFERENCES `customers` (`customer_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_customers_has_merchants_merchants1` FOREIGN KEY (`merchants_id`) REFERENCES `merchants` (`merchant_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
