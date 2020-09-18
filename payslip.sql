-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2020 at 07:33 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payslip`
--

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `position` varchar(20) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `period` varchar(20) NOT NULL,
  `NoDays` varchar(20) NOT NULL,
  `rate` varchar(20) NOT NULL,
  `absences` varchar(20) NOT NULL,
  `allowance` varchar(20) NOT NULL,
  `holiday` varchar(20) NOT NULL,
  `overtime` varchar(20) NOT NULL,
  `adjustments` varchar(20) NOT NULL,
  `lates` varchar(20) NOT NULL,
  `grosspay` varchar(20) NOT NULL,
  `tax` varchar(20) NOT NULL,
  `sss` varchar(20) NOT NULL,
  `philhealth` varchar(20) NOT NULL,
  `pagibig` varchar(20) NOT NULL,
  `advances` varchar(20) NOT NULL,
  `uniform` varchar(20) NOT NULL,
  `canteen` varchar(20) NOT NULL,
  `deduction` varchar(20) NOT NULL,
  `netpay` varchar(20) NOT NULL,
  `date` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`id`, `name`, `position`, `dept`, `period`, `NoDays`, `rate`, `absences`, `allowance`, `holiday`, `overtime`, `adjustments`, `lates`, `grosspay`, `tax`, `sss`, `philhealth`, `pagibig`, `advances`, `uniform`, `canteen`, `deduction`, `netpay`, `date`) VALUES
('dwaq', 'jhon', 'encoder', 'us odc', 'Weekly', '10', '67', '0', '50', '0', '0', '0', '0', '5410', '0', '0', '0', '100', '0', '0', '0', '100', '5310', '02/18/2020'),
('1039134266174910', ' koko', 'PROGRAMMER', 'IT DEPT', 'Weekly', '10', '87', '0', '0', '0', '0', '0', '0', '6960', '0', '0', '0', '0', '0', '0', '0', '0', '6960', '02/18/2020'),
('1039134266174910', ' koko', 'PROGRAMMER', 'IT DEPT', 'Weekly', '10', '87', '0', '0', '0', '0', '0', '60', '6900', '0', '0', '0', '0', '0', '0', '0', '0', '6900', '02/18/2020'),
('po', 'po', 'po', 'pop', 'Weekly', '10', '80', '0', '0', '0', '0', '0', '0', '6400', '0', '0', '0', '0', '0', '0', '0', '0', '6400', '02/18/2020'),
('12345', 'JHON M', 'it', 'hr', 'Weekly', '10', '90', '90', '0', '0', '0', '0', '0', '7200', '0', '0', '100', '0', '0', '0', '0', '100', '7100', '02/19/2020'),
('12345', 'JHON M', 'it', 'hr', 'Weekly', '10', '90', '90', '0', '0', '0', '0', '0', '7200', '0', '0', '100', '0', '0', '0', '0', '100', '7100', '02/19/2020'),
('09195709594', ' reb', 'PROGRAMMER', 'IT DEPT', '2nd Week', '1.5', '80', '0', '1000', '0', '0', '0', '0', '1960', '0', '0', '0', '0', '0', '500', '150', '650', '1310', '02/19/2020'),
('wew35', ' marmar', 'PROGRAMMER', 'IT DEPT', 'Weekly', '1250', '500', '0', '100', '8', '6', '2', '2', '5007100', '50', '50', '50', '50', '20', '1000', '500', '1720', '5005380', '02/19/2020'),
('202020202011', 'michael', 'it', 'hr', 'Weekly', '112.5', '90', '0', '0', '0', '0', '0', '0', '81000', '0', '0', '0', '0', '0', '0', '0', '0', '81000', '02/19/2020'),
('op', 'op', 'op', 'opo', 'Weekly', '0', '0', '0', '0', '0', '1000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '02/19/2020'),
('POP', 'OPO', 'PO', 'PO', 'Weekly', '10', '80', '0', '0', '0', '0', '0', '0', '6400', '0', '0', '0', '0', '0', '0', '00', '0', '6400', '02/19/2020'),
('POPOP', 'OPO', 'PO', 'PO', 'Weekly', '10000', '880000', '0', '0', '0', '0', '0', '0', '70400000000', '0', '0', '0', '0', '0', '00', '00', '0', '70400000000', '02/19/2020'),
('OPOP', 'OP', 'OPO', 'PO', 'Weekly', '12.375', '90', '0', '0', '0', '1', '0', '00', '9000', '0', '0', '0', '0', '0', '0', '00', '0', '9000', '02/19/2020'),
('opopop', 'ipi', 'opip', 'ip', 'Weekly', '10', '97', '0', '0', '0', '10', '0', '0', '8730', '0', '0', '0', '0', '0', '00', '0', '0', '8730', '02/19/2020'),
('KOP', 'KO', 'KOK', 'OK', 'Weekly', '11.25', '90', '00', '0', '0', '100', '0', '0', '17100', '0', '0', '0', '0', '0', '0', '0', '0', '17100', '02/19/2020');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
