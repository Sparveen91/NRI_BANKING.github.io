-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 01, 2021 at 06:10 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nri`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatbot_hints`
--

DROP TABLE IF EXISTS `chatbot_hints`;
CREATE TABLE IF NOT EXISTS `chatbot_hints` (
  `id` int(11) NOT NULL,
  `question` varchar(250) NOT NULL,
  `reply` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatbot_hints`
--

INSERT INTO `chatbot_hints` (`id`, `question`, `reply`) VALUES
(1, 'HI||Hello||Hola', 'Hello, how are you.'),
(2, 'How are you', 'Good to see you again!'),
(3, 'what is your name||whats your name', 'My name is Vishal Bot'),
(4, 'what should I call you', 'You can call me Vishal Bot'),
(5, 'Where are your from', 'I m from India'),
(6, 'Bye||See you later||Have a Good Day', 'Sad to see you are going. Have a nice day'),
(7, 'give me some information about nri banking', 'This is bank account opening websitevfor nri\'s'),
(8, 'how many banks that offer nri banking', 'AXIS BANK, BANK OF BARODA ,STATE BANK OF INDIA  , HDFC, YES BANK, CITI BANK, KOTAK MAHENDRA BANK.\r\n\r'),
(9, 'i am fine || i am good', 'how can i help you.'),
(10, 'tell me the  list of document required to open nri  bank account ', 'GO TO THE APPLY PAGE AND SEE.'),
(11, 'thanks|| thankyou|| thanks to help me', 'okk ,welcome always visit this website and use me.'),
(12, 'documents required to open bank account in india', '(a) Proof of identity (any of the following)\r\n(i) Passport.\r\n(ii) Voter ID card\r\n(iii) PAN Card\r\n(b) Proof of current address (any of the following)\r\n(i) Credit Card Statement\r\n(ii) bank account statement'),
(12, 'documents required to open bank account in india', '(a) Proof of identity (any of the following)\r\n(i) Passport.\r\n(ii) Voter ID card\r\n(iii) PAN Card\r\n(b) Proof of current address (any of the following)\r\n(i) Credit Card Statement.\r\n(ii) Bank account statement'),
(13, 'which is the best bank in india', 'here are some of the trusted banks in india:\r\n1 state bank of india\r\n2 axis bank of india\r\n3 ICICI bank of india\r\n4 hdfc bank of india\r\n5 bank of baroda'),
(14, 'can i open a bank account without using passport', 'soory! No you cant passport is necessary'),
(15, 'do i have to pay for checks or replacement cards?||Do i have to pay for checks or replacement cards?', 'At many banks your first book of checks is free, but you’ll likely pay for additional ones.\r\nSome banks also charge you to replace lost or stolen debit cards.'),
(16, 'what happens if i try to withdraw more money then i have in my account?', 'Generally you will be charged a fee. Some banks prevent you from overdrafting when swiping your debit card and may let you request that all transactions are declined when your account doesn’t contain enough funds.'),
(17, 'what is the interest rate offered by the bank?\r\n', 'Banks in India offer interests at a minimum rate of 3.5% on savings accounts.\r\nmany banks offer interests at a rate of up to 7% on savings account. '),
(18, 'are there any reward programs and exclusive deals offered with the account?\r\n\r\n', 'Many banks offer reward points when transactions are carried out digitally through debit or credit cards, internet banking or via the mobile app. These points can be redeemed in the form of cash discounts or used to avail exclusive offers.'),
(19, 'how much money can indian residents can transfer to foreign countries?', 'Indian residents are allowed to transfer up to $250,000 per year for purposes such as investment in foreign stocks or funds, education, maintenance of relatives and tourism.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
