-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th2 10, 2025 lúc 12:08 PM
-- Phiên bản máy phục vụ: 8.3.0
-- Phiên bản PHP: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hocphanxahoihueic`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `accounts`
--

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `level` int NOT NULL,
  `class` varchar(50) DEFAULT NULL,
  `account_type` enum('student','teacher') NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ;

--
-- Đang đổ dữ liệu cho bảng `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `name`, `level`, `class`, `account_type`, `created_at`) VALUES
(1, 'test', '$2y$10$jp4RsF03pMI/WYNTW5fIgOEgBA/iXWkqMG8hvm4w/fBTy.2jQMiIW', 'test', 4, '', 'teacher', '2025-02-10 11:57:51'),
(2, 'admin', '$2y$10$YKsLVNmuT6kdSxRKN30V9urbmIFObos9zHR4bkVYkMYC3erZqDr.G', 'Nguyễn Lê Trần Minh', 1, '23TCTH12-B', 'student', '2025-02-10 11:58:15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `students_list`
--

DROP TABLE IF EXISTS `students_list`;
CREATE TABLE IF NOT EXISTS `students_list` (
  `code` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `class` varchar(50) NOT NULL,
  `youth_union_fees` tinyint NOT NULL,
  `status` tinyint NOT NULL,
  PRIMARY KEY (`code`)
) ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
