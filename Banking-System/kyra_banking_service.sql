-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2020 at 07:01 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kyra_banking_service`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_name` text NOT NULL,
  `customer_email` text NOT NULL,
  `current_balance` int(11) NOT NULL,
  `customer_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `current_balance`, `customer_image`) VALUES
(1, 'Aaradhya Gupta', 'aaradhyagupta@gmail.com', 6542, 'aaradhyagupta.png'),
(2, 'Alisha Dubey', 'alishadubey@gmail.com', 2455, 'alishadubey.png'),
(3, 'Amoli Jain', 'amolijain@gmail.com', 4568, 'amolijain.png'),
(4, 'Ananya Jain', 'ananyajain@gmail.com', 1235, 'ananyajain.png'),
(5, 'Anushka Porwal', 'anushkaporwal@gmail.com', 2679, 'anushkaporwal.png'),
(6, 'Drishti Sharma', 'drishtisharma@gmail.com', 5269, 'drishtisharma.png'),
(7, 'Ishita Verma', 'ishitaverma@gmail.com', 2568, 'ishitasharma.png'),
(8, 'Saloni Kaithwas', 'salonikaithwas@gmail.com', 8256, 'salonikaithwas.png'),
(9, 'Mahima Vyas', 'mahimavyas@gmail.com', 3659, 'mahimavyas.png'),
(10, 'Deepali Sethia', 'deepalisethiya@gmail.com', 1526, 'deepalisethia.png');

-- --------------------------------------------------------

--
-- Table structure for table `transfers`
--

CREATE TABLE `transfers` (
  `transfer_date` text NOT NULL,
  `from_acc` int(11) NOT NULL,
  `from_acc_name` text NOT NULL,
  `to_acc` int(11) NOT NULL,
  `transfer_amt` int(11) NOT NULL,
  `transfer_msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfers`
--

INSERT INTO `transfers` (`transfer_date`, `from_acc`, `from_acc_name`, `to_acc`, `transfer_amt`, `transfer_msg`) VALUES
('04-11-2020 15:02:21 pm', 8, 'Saloni Kaithwas', 2, 1000, 'your fees'),
('05-11-2020 06:08:45 am', 5, 'Anushka Porwal', 2, 1000, 'your payment');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
