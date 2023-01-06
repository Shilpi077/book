-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2022 at 02:38 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `taskdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `reg` (
  `ID` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `TaskDetail` varchar(2000) NOT NULL,
  `TaskType` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tasks`
--

INSERT INTO `reg` (`ID`, `UserId`, `TaskDetail`, `TaskType`) VALUES
(5, 4, 'Test task', 'Done'),
(6, 3, 'test task rrrr', 'Panding'),
(7, 11, 'test task HELLO SHILPI GD MORNING', 'Done');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `coffee` (
  `Id` int(3) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `name`, `email`, `phone`) VALUES
(1, 'SHILPI ', 'SHILPIVE9560@GMAIL.com', '09773682003'),
(2, 'SHILPI  bn', 'SHILPIVE9560@GMAIL.com', '09773682003'),
(3, 'SHILPI  bn', 'SHILPIVE9560@GMAIL.com', '09773682003'),
(4, 'SHILPI  b', 'SHIPIVE9560@GMAIL.com', '773682003'),
(5, 'SHILPI KUMARI', 'SHILPIVERMA9560@GMAIL.COM', '999969368200'),
(6, 'SHILPI KUMARI', 'SHILPIVERMA9560@GMAIL.COM', '999969368200'),
(7, 'SHILPI KUMARI', 'SHILPIVERMA9560@GMAIL.COM', '9693682003'),
(8, 'SHILPI KUMARI', 'SHILPIVERMA9560@GMAIL.COM', '9693682'),
(9, 'test', 'a@b.com', '9099'),
(10, 'SHILPI KUMARI', 'SHILPIVERMA9560@GMAIL.COM', '9693682003'),
(11, 'SHILPI SHRIVASTAV', 'SHILPI7@GMAIL.COM', '8693682003'),
(12, 'SANDHYA', 'SHILPI@GMAIL.COM', '6667778889');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;
