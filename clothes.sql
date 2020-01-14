-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2019 at 08:23 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clothes`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Fname` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `situation` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Fname`, `Lname`, `situation`, `gender`, `address`, `phonenumber`, `Email`, `username`) VALUES
('Abdelrahman', 'sobhy', 'old', 'Male', 'Nasr City', '01017102408', 'abdosobhy1200@gmail.', 'abdo1200'),
('asmaa', 'mahmoud', 'old', 'famale', 'el saida zeinb', '0103289403', 'asmaa99@gmail.com', 'asmaa'),
('menna', 'emad', 'old', 'famale', 'el saida zeinb', '0107677867', 'menna20@gmail.com', 'menna');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `product` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `discount` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`product`, `price`, `name`, `Address`, `phone`, `status`, `discount`) VALUES
('dress', '1000', '', '', '', 'waiting', 'NO DISCOUNT'),
('dress', '1000', 'asmaa', 'el saida zeinb', '0103289403', 'waiting', 'NO DISCOUNT'),
('dress', '1000', 'Abdelrahman', 'Nasr City', '01017102408', 'waiting', 'NO DISCOUNT'),
('dress', '1000', 'asmaa', 'el saida zeinb', '0103289403', 'waiting', 'NO DISCOUNT'),
('dress', '1000', 'asmaa', 'el saida zeinb', '0103289403', 'waiting', 'NO DISCOUNT'),
('shoes', '900', 'asmaa', 'el saida zeinb', '0103289403', 'waiting', 'NO DISCOUNT'),
('t-shirt', '500', 'asmaa', 'el saida zeinb', '0103289403', 'waiting', 'NO DISCOUNT'),
('Jacket', '500', 'asmaa', 'el saida zeinb', '0103289403', 'waiting', 'NO DISCOUNT'),
('Shirt', '900', 'asmaa', 'el saida zeinb', '0103289403', 'waiting', 'NO DISCOUNT');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `position` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`username`, `password`, `position`) VALUES
('admin', '1111', 'admin'),
('asmaa3299', 'asmaa', ''),
('asmaa3299', 'asmaa', 'customer'),
('abdo1200', 'bebo1200', 'customer'),
('asmaa', '1111', 'customer'),
('menna', '1111', 'customer');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
