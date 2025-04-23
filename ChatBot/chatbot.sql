-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2025 at 08:38 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatbot`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `fromUser` varchar(15) NOT NULL,
  `toUser` varchar(15) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`fromUser`, `toUser`, `message`) VALUES
('Archi', 'Bhavya', 'hello'),
('Archi', 'Bhavya', 'hello'),
('Archi', 'Bhavya', 'How Are you'),
('Bhavya', 'Archi', 'i am fine'),
('Bhavya', 'Archi', 'okay'),
('Bhavya', 'Archi', 'i wanna laptop....'),
('Archi', 'Bhavya', 'okay, for how many days you bring it'),
('Bhavya', 'Archi', '2-3 days only'),
('Archi', 'Bhavya', 'okay'),
('Bhavya', 'Archi', 'Thank You'),
('Archi', 'Bhavya', 'youre Welcome...'),
('', '', 'give me in 3-4 days'),
('Archi', 'Bhavya', 'give me in 3-4 days'),
('Bhavya', 'Archi', 'please'),
('Bhavya', 'Archi', 'please'),
('Archi', 'Bhavya', 'okok'),
('Bhavya', 'Archi', 'thank you'),
('Bhavya', 'Archi', 'most most'),
('Archi', 'Bhavya', 'no tension just okay '),
('Bhavya', 'Archi', 'most most'),
('Archi', 'Bhavya', 'ya ya'),
('Bhavya', 'Archi', ''),
('Archi', 'Bhavya', ''),
('Bhavya', 'Archi', ''),
('Bhavya', 'Archi', 'ready'),
('Archi', 'Bhavya', 'ya ready'),
('Archi', 'Bhavya', 'okay good'),
('Archi', 'Bhavya', 'this is very useful'),
('Bhavya', 'Archi', 'ya i know'),
('Archi', 'Bhavya', '2'),
('Bhavya', 'Archi', 'ni'),
('Archi', 'Bhavya', 'hmm'),
('Bhavya', 'Archi', 'okay'),
('Archi', 'Bhavya', 'good'),
('Bhavya', 'Archi', 'hey'),
('Bhavya', 'Archi', 'hmm'),
('Archi', 'Bhavya', 'yes please speck'),
('Bhavya', 'Archi', 'here i m work'),
('Archi', 'Bhavya', 'what you doing now'),
('Bhavya', 'Archi', 'good'),
('Bhavya', 'Archi', 'hellooo'),
('Archi', 'Bhavya', 'hey'),
('Archi', 'Bhavya', 'what happen'),
('Bhavya', 'Archi', 'nothing just i want to your laptop additionally 2 3 days'),
('Bhavya', 'Archi', 'please'),
('Archi', 'Bhavya', 'ohay'),
('Bhavya', 'Archi', 'no tension'),
('Bhavya', 'Archi', 'no tension just okay'),
('Bhavya', 'Archi', 'vcgx dbc'),
('Archi', 'Bhavya', 'heyyyy'),
('Bhavya', 'Archi', 'how are you'),
('Archi', 'Bhavya', 'i am fine'),
('Archi', 'Bhavya', 'i am fine'),
('Archi', 'Bhavya', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `uname` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `uname`) VALUES
(1, 'Archi'),
(2, 'Bhavya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
