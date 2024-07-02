-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 02, 2024 at 01:54 AM
-- Server version: 10.11.6-MariaDB-cll-lve
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `luna4272_chucks`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'adminspot', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `scotcode`
--

CREATE TABLE `scotcode` (
  `id` int(11) NOT NULL,
  `scotcode` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `customerId` varchar(255) NOT NULL,
  `percentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `scotcode`
--

INSERT INTO `scotcode` (`id`, `scotcode`, `status`, `date`, `customerId`, `percentage`) VALUES
(1, '000000', '40', '', '000000', 20),
(2, '999999', 'used', '', '000000', 0),
(3, '999999', '', '22/09/22', '337720', 33),
(4, '1000000', '', '22/09/23', 'customerId', 4444),
(5, '999999', '', '22/09/23', 'customerId', 2147483647),
(6, '1000000', '', '22/09/23', '000000', 23);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `bank` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `accountNum` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `swiftCode` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `percentage` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `transaction` varchar(255) NOT NULL,
  `customerId` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `bank`, `name`, `accountNum`, `amount`, `country`, `zipcode`, `swiftCode`, `type`, `status`, `percentage`, `date`, `transaction`, `customerId`, `desc`) VALUES
(56, 'Jordan Bank', '', '225999999', '1120', '', '', '', 'local', 'complete', '', '2022-11-19', 'credith', '251444', 'Deposit to my Jordan Bank Account from '),
(57, 'Chime Bank', ' Justice Charity Organization', '0019862732', '100000', '', '', '', 'local', 'complete', '100', '2022-11-01', 'debith', '221797', 'Withdrawal form my Jordan Bank Account to  Justice Charity Organization'),
(58, 'Chime Bank', 'De Sousa Orphan Home', '0909876272', '80000', '', '', '', 'local', 'complete', '100', '2022-11-01', 'debith', '221797', 'Withdrawal form my Jordan Bank Account to De Sousa Orphan Home'),
(59, 'Jordan Bank', '', '225999999', '560720', '', '', '', 'local', 'complete', '100', '2022-11-10', 'credith', '221797', 'Apple Share'),
(60, 'Jordan Bank', '', '225999999', '789000', '', '', '', 'local', 'complete', '100', '2022-11-11', 'credith', '221797', 'Deposit From Tesla Share'),
(61, 'Jordan Bank', '', '225999999', '600200', '', '', '', 'local', 'complete', '100', '2022-11-17', 'credith', '221797', 'Deposit to my Jordan Bank Account from '),
(64, 'Jordan Bank', '', '2251000000', '300780', '', '', '', 'local', 'complete', '100', '2022-11-02', 'credith', '710666', 'Apple shares '),
(65, 'Jordan Bank', '', '2251000000', '876006', '', '', '', 'local', 'complete', '100', '2022-11-10', 'credith', '710666', 'Tesla shares '),
(66, 'Chime bank ', 'Charity foundation ', '2200981737', '100000', '', '', '', 'local', 'complete', '100', '2022-11-12', 'debith', '710666', 'Withdrawal form my Jordan Bank Account to Charity foundation '),
(67, 'Jordan Bank', '', '2251000000', '50000', '', '', '', 'local', 'complete', '100', '2022-11-15', 'credith', '710666', 'Jack pot '),
(68, 'Jordan Bank', '', '2251000000', '23000', '', '', '', 'local', 'complete', '100', '2022-11-16', 'credith', '710666', 'Deposit to my Jordan Bank Account from '),
(69, 'Jordan Bank', '', '225999999', '600670', '', '', '', 'local', 'complete', '100', '2022-11-03', 'credith', '580731', 'Tesla '),
(70, 'Jordan Bank', '', '225999999', '876056', '', '', '', 'local', 'complete', '100', '2022-11-04', 'credith', '580731', 'Apple shares '),
(71, 'Chime Bank ', 'Justice foundation charity home ', '226500780', '100000', '', '', '', 'local', 'complete', '100', '2022-11-06', 'debith', '580731', 'Withdrawal form my Jordan Bank Account to Justice foundation charity home '),
(72, 'Jordan Bank', '', '225999999', '56000', '', '', '', 'local', 'complete', '100', '2022-11-10', 'credith', '580731', 'Deposit to my Jordan Bank Account from '),
(73, 'Jordan bank ', 'Mike Fernando ', '2102200675', '2307', '', '', '', 'local', 'complete', '100', '2022-11-11', 'debith', '580731', 'Withdrawal form my Jordan Bank Account to Mike Fernando '),
(74, 'Jordan Bank', '', '225999999', '7800', '', '', '', 'local', 'complete', '100', '2022-11-13', 'credith', '580731', 'Deposit to my Jordan Bank Account from '),
(75, 'Jordan Bank', '', '225999999', '7800', '', '', '', 'local', 'complete', '100', '2022-11-13', 'credith', '580731', 'Deposit to my Jordan Bank Account from '),
(79, 'Jordan Bank', '', '225999999', '7800', '', '', '', 'local', 'complete', '100', '2022-11-13', 'credith', '580731', 'Deposit to my Jordan Bank Account from '),
(80, 'Jordan Bank', '', '2251000000', '600872', '', '', '', 'local', 'complete', '100', '2022-11-02', 'credith', '849236', 'Tesla shares '),
(81, 'Jordan Bank', '', '2251000000', '1000345', '', '', '', 'local', 'complete', '100', '2022-11-02', 'credith', '849236', 'Apple shares '),
(82, 'Chime bank ', 'Justice foundation home ', '2100873737', '100000', '', '', '', 'local', 'complete', '100', '2022-11-05', 'debith', '849236', 'Withdrawal form my Jordan Bank Account to Justice foundation home '),
(83, 'Chime bank ', 'Justice foundation home ', '2100873737', '100000', '', '', '', 'local', 'complete', '100', '2022-11-05', 'debith', '849236', 'Withdrawal form my Jordan Bank Account to Justice foundation home '),
(84, 'Jordan Bank', '', '2251000000', '78200', '', '', '', 'local', 'complete', '100', '2022-11-19', 'credith', '849236', 'Deposit to my Jordan Bank Account from '),
(85, 'Jordan Bank', '', '2251000000', '7500000', '', '', '', 'local', 'complete', '100', '2021-11-11', 'credith', '337771', 'Deposit From DYNCORP INC '),
(86, 'Jordan Bank', '', '2251000000', '2200000', '', '', '', 'local', 'complete', '', '2021-12-24', 'credith', '337771', 'Retirement And Discharge Fee'),
(88, 'Chime bank ', 'Jean charity organization ', '2102297337', '80000', '', '', '', 'local', 'complete', '100', '2021-12-24', 'debith', '337771', 'Withdrawal from my Jordan Bank Account to Jean charity organization '),
(89, 'Wellsfargo bank', 'Justice foundation charity home', '0029873767', '11000', '', '', '', 'local', 'complete', '100', '2022-01-07', 'debith', '337771', 'Withdrawal from my Jordan Bank Account to Justice foundation charity home'),
(90, 'Jordan Bank', '', '2251000000', '690430', '', '', '', 'local', 'complete', '100', '2022-06-29', 'credith', '337771', 'Retirement fee '),
(91, 'Jordan Bank', '', '2251000000', '899200', '', '', '', 'local', 'complete', '', '2022-06-29', 'credith', '337771', 'Retirement fee '),
(93, 'hdydyyddh', 'Lindy Owen', '7777666', '666777', '', '', '', 'local', 'pending', '35', '2022/11/30', 'debith', '337771', 'Withdrawal from my Jordan Bank Account to Lindy Owen'),
(94, 'Wells fargo', 'Susan Hauer', '5505356195', '100000', 'Usa', '28144', 'PNBPUS33CHA', 'int', 'cancel', '39', '2022/12/01', 'debith', '849236', 'Withdrawal from my Jordan Bank Account to Susan Hauer'),
(95, 'Wells fargo', 'Susan Hauer', '5505356195', '100000', 'USA', '28144', 'PNBPUS33CHA', 'int', 'pending', '68', '2022/12/01', 'debith', '849236', 'Withdrawal from my Jordan Bank Account to Susan Hauer'),
(96, 'Wells Fargo ', 'Susan Hauer', '5505356195', '10000', '', '', '', 'local', 'pending', '36', '2022/12/02', 'debith', '849236', 'Withdrawal from my Jordan Bank Account to Susan Hauer'),
(104, 'Jordan Bank', '', '2251000000', '30000', '', '', '', 'local', 'complete', '', '2022-09-03', 'credith', '420588', 'Billpay CR ***5660 REF 32734 - '),
(105, 'Chime bank ', 'sandra james ', '210091126', '40000', '', '', '', 'local', 'complete', '100', '2022-09-16', 'debith', '420588', 'ACH Fund transfer to sandra james '),
(106, 'Chime Bank', 'Sandra James', '2100927276', '32000', '', '', '', 'local', 'complete', '100', '2022-09-22', 'debith', '420588', 'Wire Transfer to Sandra James'),
(107, 'Chime bank ', 'Sandra James  ', '2100893737', '40000', '', '', '', 'local', 'complete', '100', '2022-09-24', 'debith', '420588', 'fund Sent to Sandra James'),
(108, 'Chime bank ', 'Sandra James ', '21009784837', '400000', '', '', '', 'local', 'complete', '100', '2022-10-25', 'debith', '420588', '\r\nWire Transfer to Sandra James'),
(109, 'ABC bank ', 'Cold Rolled steel coin china  ', '00189383788383', '400000', '', '', '', 'local', 'complete', '100', '2022-09-25', 'debith', '420588', 'Payment Initiated to Cold Rolled steel coin china'),
(110, 'ABC Bank', 'Ppgi steel coin manufacturer china', '00897626266', '300000', '', '', '', 'local', 'complete', '100', '2022-09-28', 'debith', '420588', 'Wire Transfer To Ppgi steel coin manufacturer china'),
(111, 'ABC Bank', 'Color Aluminum ', '0087363300', '200300', '', '', '', 'local', 'complete', '100', '2022-11-25', 'debith', '420588', 'Fund Transfer to Color Aluminum factory china'),
(112, 'Chime Bank ', 'Sandra James', '2100786110', '300000', '', '', '', 'local', 'complete', '100', '2022-11-26', 'debith', '420588', 'Fund sent to Sandra James'),
(113, 'Wellsfargo Bank', 'Cat service', '210086336', '350000', '', '', '', 'local', 'complete', '100', '2022-11-27', 'debith', '420588', 'Sending to Cat service company'),
(114, 'Jordan Bank', '', '2251000000', '30000', '', '', '', 'local', 'complete', '100', '2022-07-02', 'credith', '194437', 'Billpay CR ***5660 REF 32734'),
(115, 'Chime Bank ', 'Sandra James', '01220073712', '40000', '', '', '', 'local', 'complete', '100', '2022-09-16', 'debith', '194437', 'ACH Fund transfer to Sandra James'),
(117, 'Chime Bank ', 'Sandra James', '01220073712', '400000', '', '', '', 'local', 'complete', '100', '2022-10-24', 'debith', '194437', 'Wire Transfer to Sandra James'),
(118, 'ABC', 'Cold Rolled steel coin china', '0009177002777', '400000', '', '', '', 'local', 'complete', '100', '2022-10-25', 'debith', '194437', 'Payment Initiated to Cold Rolled steel coin china'),
(119, 'ICBC Bank ', 'Ppgi steel coin', '0028928737378', '300000', '', '', '', 'local', 'complete', '100', '2022-10-28', 'debith', '194437', 'Wire Transfer To Ppgi steel coin manufacturer china'),
(120, 'ICBC Bank', 'Aluminum factory china', '00839371100', '200000', '', '', '', 'local', 'complete', '100', '2022-12-25', 'debith', '194437', 'Fund Transfer to Color Aluminum factory china'),
(121, 'Chime bank', 'Sandra James', '01220073712', '300000', '', '', '', 'local', 'complete', '100', '2022-11-25', 'debith', '194437', 'Fund sent to Sandra James'),
(123, 'Wells Fargo Bank ', 'Cat service company', '2109800277', '350000', '', '', '', 'local', 'complete', '100', '2022-11-26', 'debith', '194437', 'Sending to Cat service company'),
(125, 'Jordan Bank', '', '2251000000', '20000', '', '', '', 'local', 'complete', '100', '2022-12-12', 'credith', '218712', 'Credit from Sam Seiden Jordan bank'),
(132, 'Jordan Bank', '', '2251000000', '200000', '', '', '', 'local', 'complete', '100', '2022-07-02', 'credith', '129886', 'Billpay CR ***5660 REF 32734'),
(133, 'Chime Bank', 'Sandra James', '2100983449', '75000', '', '', '', 'local', 'complete', '100', '2022-07-13', 'debith', '129886', 'ACH Fund transfer to Sandra James'),
(134, 'Chime Bank', 'Sandra James', '2100983449', '55000', '', '', '', 'local', 'complete', '100', '2022-07-29', 'debith', '129886', 'fund Sent to Sandra James'),
(135, 'Chime Bank', 'Sandra James', '2100983449', '2000', '', '', '', 'local', 'complete', '100', '2022-08-10', 'debith', '129886', '\"Wire Transfer to Sandra James'),
(136, 'ICBC', 'Cold Rolled steel', '000109383', '200000', '', '', '', 'local', 'complete', '100', '2022-09-10', 'debith', '129886', 'Payment Initiated to Cold Rolled steel coin china'),
(137, 'ABC', 'Cold Rolled steel', '1010930382', '170000', '', '', '', 'local', 'complete', '100', '2022-09-16', 'debith', '129886', 'Payment Initiated to Cold Rolled steel coin china'),
(138, 'ABC', 'Ppgi steel coin manufacturer china', '0005050998', '110000', '', '', '', 'local', 'complete', '100', '2022-10-05', 'debith', '129886', 'Wire Transfer To Ppgi steel coin manufacturer china'),
(139, 'ABC', 'Color Aluminum factory', '000221102298', '300000', '', '', '', 'local', 'complete', '100', '2022-10-12', 'debith', '129886', '\"Fund Transfer to Color Aluminum factory china'),
(140, 'Chime Bank', 'Sandra James', '000109383', '400000', '', '', '', 'local', 'complete', '100', '2022-11-22', 'debith', '129886', 'Fund sent to Sandra James'),
(141, 'ABC', 'Cat service', '000109383', '400000', '', '', '', 'local', 'complete', '100', '2022-11-26', 'debith', '129886', 'Sending to Cat service company'),
(144, 'ARAB NATIONAL BANK', 'NORMITA PORTEZA', '0108056497680011', '9000', 'SAUDI ARABIA', '11481', 'ARNBSARI', 'int', 'pending', '35', '2022/12/25', 'debith', '218712', 'Withdrawal from my Jordan Bank Account to NORMITA PORTEZA'),
(145, 'Jordan Bank', '', '2251077800', '56000780', '', '', '', 'local', 'complete', '100', '2023-01-05', 'credith', '430979', 'Credit from Tesla shares margin'),
(146, 'Jordan Bank', '', '2251077800', '56000780', '', '', '', 'local', 'complete', '100', '2023-01-05', 'credith', '430979', 'Credit from Tesla shares margin'),
(149, 'Jordan Bank', '', '2251000000', '21900', '', '', '', 'local', 'complete', '', '2023-02-22', 'credith', '859475', 'Credit Transaction from Bitfinex.com'),
(150, 'Jordan Bank', '', '2251000000', '21100', '', '', '', 'local', 'complete', '100', '2023-02-22', 'credith', '859475', 'Credit Transaction from Bitfinex.com'),
(151, 'Chime bank ', 'Fernando gomez ', '2109837300', '14815', '', '', '', 'local', 'complete', '', '2023-02-22', 'debith', '859475', 'Withdrawal from my Jordan Bank Account'),
(152, 'Chime bank ', 'Serine jean', '2190664489', '15200', '', '', '', 'local', 'complete', '', '2023-02-23', 'debith', '859475', 'Withdrawal from my Jordan Bank Account '),
(153, 'Wellsfargo ', 'Envyn Mariam ', '0086837362', '12095', '', '', '', 'local', 'complete', '', '2023-02-23', 'debith', '859475', 'Withdrawal from my Jordan Bank Account'),
(154, 'Jordan Bank', '', '2251000000', '42000', '', '', '', 'local', 'complete', '100', '2023-02-25', 'credith', '859475', 'Credit Transaction from Bitfinex.com	complete(100%)'),
(155, 'Jordan Bank', '', '225999999', '100000', '', '', '', 'local', 'complete', '100', '2023-02-25', 'credith', '794968', 'credit from Elon Musk jordan bank'),
(159, 'Chime Bank', 'Fedcredit union', '007877290', '32000', '', '', '', 'local', 'complete', '100', '2022-09-22', 'debith', '412901', 'Wire Transfer to Fedcredit union'),
(160, 'ABC', ' Bryne', '0000111899', '60000', '', '', '', 'local', 'complete', '100', '2022-09-22', 'debith', '412901', 'fund Sent to Bryne\r\n'),
(161, 'Military Bank', ' Military Zone', '2109765502', '400000', '', '', '', 'local', 'complete', '100', '2022-09-24', 'debith', '412901', 'Wire Transfer to Military Bank\r\n'),
(162, 'ABC', 'Cold Rolled steel coin', '0001116787', '600000', '', '', '', 'local', 'complete', '100', '2022-09-25', 'debith', '412901', 'Payment Initiated to Cold Rolled steel coin china\r\n'),
(163, 'ICBC', ' Ppgi steel coin manufacturer Illinois', '110076541122', '300000', '', '', '', 'local', 'complete', '100', '2022-10-24', 'debith', '412901', '\r\nWire Transfer To Ppgi steel coin manufacturer Illinois'),
(164, 'military Bank', 'military Bank', '2109524686', '200000', '', '', '', 'local', 'complete', '100', '2022-11-25', 'debith', '412901', '\r\nFund Transfer military Bank'),
(165, 'Chime Bank', 'Sandra James', '210992275', '300000', '', '', '', 'local', 'complete', '100', '2022-11-25', 'debith', '412901', 'Fund sent to _ Fed Bank'),
(166, 'Chime Bank', 'Cat service company', '21099754443', '350000', '', '', '', 'local', 'complete', '100', '2022-11-26', 'debith', '412901', 'Sending to Cat service company'),
(168, 'chase bank', 'james', '5456465545', '200.000', '', '', '', 'local', 'pending', '', '2023/02/25', 'debith', '412901', 'Couldnâ€™t process transaction account currently frozen '),
(172, 'ING', ' Karin Woutersen', 'NL85INGB0101661959', '9500', '', '', '', 'local', 'pending', '35', '2023/03/01', 'debith', '794968', 'Withdrawal from my Jordan Bank Account to  Karin Woutersen'),
(177, 'Chime bank ', 'Approved', '0101276776', '45000', '', '', '', 'local', 'complete', '100', '2023-01-20', 'debith', '200255', 'Bill Payment to Hotel...'),
(178, 'Jordan bank ', 'Jordan ', '0', '20', '', '', '', 'local', 'complete', '100', '2023-02-02', 'debith', '200255', 'Maintenance charges'),
(179, 'Jordan Bank', '', '225999999', '2000067', '', '', '', 'local', 'complete', '100', '2023-03-03', 'credith', '200255', 'DR FROM 33Ã—Ã—Ã—455'),
(180, 'Wellsfargo bank ', 'PREMIER RPA', '2207626728', '41000', '', '', '', 'local', 'complete', '100', '2023-03-03', 'debith', '200255', 'Funds Sent to PREMIER RPA'),
(181, 'Jordan ', 'Bill', '0', '67000', '', '', '', 'local', 'complete', '100', '2023-03-21', 'debith', '200255', 'Bill '),
(182, 'City National of Winfield West Virginia', 'Lesha Hazlett', '051904524', '8000', '', '', '', 'local', 'cancel', '35', '2023/03/30', 'debith', '200255', 'Withdrawal from my Jordan Bank Account to Lesha Hazlett'),
(186, 'Jordan Bank', '', '225999999', '850', '', '', '', 'local', 'complete', '', '2022-08-15', 'credith', '935818', 'Deposit to my Jordan Bank Account from '),
(188, 'Jordan Bank', '', '225999999', '1150', '', '', '', 'local', 'complete', '', '2022-08-17', 'credith', '935818', 'Deposit to my Jordan Bank Account from '),
(195, 'Chime Bank', 'Manuel SÃ©rgio De Sousa Carvalhido ', '2200753212', '1900', '', '', '', 'local', 'complete', '', '2022-08-18', 'debith', '935818', 'Withdrawal from my Jordan Bank Account to Manuel SÃ©rgio De Sousa Carvalhido '),
(196, 'ABC', 'Cat service company', '0001986688601', '80', '', '', '', 'local', 'complete', '', '2022-09-21', 'debith', '935818', 'Withdrawal from my Jordan Bank Account to Cat service company'),
(197, 'Jordan Bank', '', '203006550812', '150000', '', '', '', 'local', 'complete', '100', '2023-05-15', 'credith', '935818', 'Deposit to my Jordan Bank Account from '),
(198, 'Jordan Bank', '', '203006550812', '200400', '', '', '', 'local', 'complete', '100', '2023-05-15', 'credith', '935818', 'Deposit to my Jordan Bank Account from '),
(199, 'Chase ', 'Kayla smith', '91334000210', '9000', '', '', '', 'local', 'cancel', '37', '2023/05/16', 'debith', '935818', 'Withdrawal from my Jordan Bank Account to Kayla smith'),
(200, 'Chase ', 'Kayla Smith', '91334000210', '4000', '', '', '', 'local', 'cancel', '35', '2023/05/16', 'debith', '935818', 'Withdrawal from my Jordan Bank Account to Kayla Smith'),
(202, 'Jordan Bank', '', '203006550812', '11136', '', '', '', 'local', 'complete', '100', '2022-10-10', 'credith', '723718', 'TRANSFER ( Internet Bank ) Account Replenishement (Won\r\nLee 2030065508121)'),
(203, 'Jordan ', 'Charge ', '00000000', '55', '', '', '', 'local', 'complete', '100', '2022-08-10', 'debith', '723718', 'TRANSFER ( Internet Bank ) Account Replenishement (Won Lee 2030065508121)'),
(204, 'Jordan ', 'Jordan ', '00000000', '55', '', '', '', 'local', 'complete', '100', '2022-08-16', 'debith', '723718', 'TRANSFER ( Internet Bank ) Account Replenishement (Won Lee 2030065508121)'),
(205, 'Jordan Bank', '', '203006550812', '55', '', '', '', 'local', 'complete', '100', '2022-08-23', 'credith', '723718', 'TRANSFER ( Internet Bank ) Account Replenishement (Won Lee 2030065508121)'),
(206, 'Jordan Bank', '', '203006550812', '11081', '', '', '', 'local', 'complete', '100', '2022-09-25', 'credith', '723718', 'Balance - (Closing balance) of the account at the end of the day\r\nCash Out Order (WON LEE) #0624536'),
(207, 'Jordan Bank', '', '203006550812', '8080', '', '', '', 'local', 'complete', '100', '2022-10-02', 'credith', '723718', 'Balance - Closing balance of the account at the end of the day\r\nTRANSFER (Internet Banking) Account Replanishment (Won\r\nLee 203006550812)'),
(208, 'Jordan ', 'Jordan ', '00000000', '8080', '', '', '', 'local', 'complete', '100', '2022-10-02', 'debith', '723718', 'Cash Out Order (WON LEE) #0723146'),
(209, 'Jordan Bank', '', '203006550812', '1112', '', '', '', 'local', 'complete', '100', '2022-11-10', 'credith', '723718', 'Balance - (Closing balance) of the account at the end of the day Cash Out Order (WON LEE) #0624536'),
(210, 'Jordan Bank', '', '203006550812', '9000', '', '', '', 'local', 'complete', '100', '2022-12-02', 'credith', '723718', 'Balance - (Closing balance) of the account at the end of the day Cash Out Order (WON LEE) #0624536'),
(211, 'Jordan Bank', '', '203006550812', '3000', '', '', '', 'local', 'complete', '100', '2022-12-04', 'credith', '723718', 'Balance - (Closing balance) of the account at the end of the day Cash Out Order (WON LEE) #0624536'),
(212, 'Jordan ', 'Jordan ', '00000000', '11459', '', '', '', 'local', 'complete', '100', '2022-12-12', 'debith', '723718', 'Balance - (Closing balance) of the account at the end of the day Cash Out Order (WON LEE) #0624536'),
(213, 'Jordan ', 'Jordan ', '00000000', '540', '', '', '', 'local', 'complete', '100', '2022-12-29', 'debith', '723718', 'Balance - (Closing balance) of the account at the end of the day Cash Out Order (WON LEE) #0624536'),
(214, 'Jordan Bank', '', '203006550812', '629000', '', '', '', 'local', 'complete', '100', '2023-05-18', 'credith', '723718', 'Balance - Closing balance of the account at the end of the day TRANSFER (Internet Banking) Account Replanishment (Won Lee 203006550812)'),
(225, 'ìš°ë¦¬ì€í–‰', 'ê¸ˆì€ì •', '1002305275152', '500000', 'ëŒ€í•œë¯¼êµ­', '4422', '1978936', 'int', 'pending', '21', '2023/07/05', 'debith', '580731', 'Withdrawal from my Jordan Bank Account to ê¸ˆì€ì •'),
(228, 'Truist', 'Dorothy P Hakim', '1000007542219', '10000', 'USA', '32174', 'BRBTUS33XXX', 'int', 'cancel', '28', '2023/07/17', 'debith', '439960', 'Withdrawal from my Jordan Bank Account to Dorothy P Hakim'),
(229, 'Chime Bank', 'Mark Jacksonville ', '1002940719', '26000', '', '', '', 'local', 'complete', '100', '2022-12-01', 'debith', '870080', 'Withdrawal form my Jordan Bank Account to Mark Jacksonville '),
(230, 'Jordan Bank', 'Jordan Bank ', '0000000000', '79', '', '', '', 'local', 'complete', '100', '2022-12-01', 'debith', '870080', 'Vat fee '),
(231, 'Jordan Bank', '', '225999999', '400782', '', '', '', 'local', 'complete', '100', '2022-12-13', 'credith', '870080', 'Deposit from Apple shares '),
(232, 'Jordan Bank', '', '225999999', '380820', '', '', '', 'local', 'complete', '100', '2022-12-16', 'credith', '870080', 'Deposit from Tesla shares '),
(233, 'Chime Bank ', 'Williams orphanage home ', '2005987290', '100000', '', '', '', 'local', 'complete', '100', '2022-12-17', 'debith', '870080', 'Withdrawal form my Jordan Bank Account to Williams orphanage home '),
(234, 'ABC Bank ', 'Chang Wang ', '0010083980', '230000', '', '', '', 'local', 'complete', '100', '2022-12-23', 'debith', '870080', 'Withdrawal form my Jordan Bank Account to Chang Wang '),
(235, 'Jordan Bank', '', '225999999', '5000', '', '', '', 'local', 'complete', '100', '2022-12-23', 'credith', '870080', 'Deposit to my Jordan Bank Account from '),
(236, 'Jordan Bank', '', '225999999', '200000', '', '', '', 'local', 'complete', '100', '2022-12-28', 'credith', '870080', 'Deposit to my Jordan Bank Account from '),
(237, 'Fidelity bank ', 'Donald anayo Ogbaga ', '6320256920', '1000', '', '', '', 'local', 'pending', '32', '2023/08/01', 'debith', '870080', 'Withdrawal from my Jordan Bank Account to Donald anayo Ogbaga '),
(238, 'Bank fidelity ', 'Donald anayo Ogbaga ', '6320256920', '10000', '', '', '', 'local', 'pending', '36', '2023/08/02', 'debith', '870080', 'Withdrawal from my Jordan Bank Account to Donald anayo Ogbaga '),
(239, 'Jordan Bank', '', '225999999', '200000', '', '', '', 'local', 'complete', '100', '2022-12-28', 'credith', '870080', 'Deposit to my Jordan Bank Account from '),
(240, 'Jordan Bank', '', '2251000000', '52000', '', '', '', 'local', 'complete', '100', '2022-12-27', 'credith', '194437', 'Deposit to my Jordan Bank Account from '),
(241, 'Jordan Bank', '', '2251000000', '52000', '', '', '', 'local', 'complete', '100', '2022-12-27', 'credith', '194437', 'Deposit to my Jordan Bank Account from '),
(242, 'Zenith bank', 'Courage anetor', '7084709054', '500', '', '', '', 'local', 'cancel', '31', '2023/08/20', 'debith', '723718', 'Withdrawal from my Jordan Bank Account to Courage anetor'),
(246, 'Chase', 'Minny', '55667777', '1300', '', '', '', 'local', 'cancel', '37', '2023/09/09', 'debith', '000000', 'Withdrawal from my Jordan Bank Account to Minny'),
(247, '66666677', '66666', '6555557', '255', '', '', '', 'local', 'cancel', '34', '2023/09/14', 'debith', '000000', 'Withdrawal from my Jordan Bank Account to 66666'),
(248, 'Jordan Bank', '', '999999999', '70000', '', '', '', 'local', 'complete', '100', '2021-01-15', 'credith', '861787', 'album partnership '),
(249, 'Jordan Bank', '', '1000999999', '275000', '', '', '', 'local', 'complete', '100', '2023-11-10', 'credith', '399692', 'album sponsorship'),
(250, 'Jordan Bank', '', '1000999999', '20000', '', '', '', 'local', 'complete', '100', '2023-11-19', 'credith', '399692', 'album sponsorship '),
(251, 'Jordan Bank', '', '1000999999', '207000', '', '', '', 'local', 'complete', '100', '2023-11-29', 'credith', '399692', 'Album sponsorship'),
(252, 'Jordan Bank', '', '6677778877', '888', '', '', '', 'local', 'complete', '100', '2024-04-26', 'credith', '529208', 'y7ytghh');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `customerId` varchar(255) NOT NULL,
  `accountNum` varchar(255) NOT NULL,
  `accountType` varchar(255) NOT NULL,
  `Ifsc` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `accountBal` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `debitCard` varchar(255) NOT NULL,
  `pin` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `savings` varchar(255) NOT NULL,
  `current` varchar(255) NOT NULL,
  `checking` varchar(255) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullName`, `customerId`, `accountNum`, `accountType`, `Ifsc`, `branch`, `accountBal`, `phone`, `email`, `debitCard`, `pin`, `password`, `savings`, `current`, `checking`, `currency`, `image`) VALUES
(31, 'Cindy Chauvin', '399692', '1000999999', 'Savings, Current', '', 'United States ', '502000', '', 'cindychauvin101@gmail.com', '5776680657149163', '9164', 'cindyflames', '502000', '0', '0', '$', ''),
(34, 'Thomas Steven', '529208', '6677778877', 'Savings, Current', '67656', 'Nigeria', '58676', '08104942128', 'ezej7011@gmail.com', '6657822094449426', '8787', '123456', '51000', '7676', '0', '$', ''),
(35, '4235110591', '412451', '999999999', 'Savings, Current', '', 'Germany', '1213000', '', 'otuyareuben@gmail.com', '2484312066439357', '8346', 'Brother12345!', '350000', '853000', '10000', 'â‚¬', ''),
(36, '4235110591', '484819', '999999999', 'Savings, Current', '', 'Germany', '1213000', '', 'otuyareuben@gmail.com', '3014848290634736', '3782', 'Brother12345!', '350000', '853000', '10000', 'â‚¬', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scotcode`
--
ALTER TABLE `scotcode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `scotcode`
--
ALTER TABLE `scotcode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=254;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
