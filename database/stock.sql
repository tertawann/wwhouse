-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db:3306
-- Generation Time: Apr 28, 2024 at 07:01 AM
-- Server version: 8.3.0
-- PHP Version: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wwhouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` bigint NOT NULL,
  `code` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `quantity` int NOT NULL,
  `cost` decimal(10,2) NOT NULL DEFAULT '0.00',
  `sale_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `brandId` bigint NOT NULL,
  `userId` bigint NOT NULL,
  `update_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `insert_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `delete_status` tinyint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `code`, `product_name`, `size`, `quantity`, `cost`, `sale_price`, `brandId`, `userId`, `update_datetime`, `insert_datetime`, `delete_status`) VALUES
(1, 'JD001', 'Jordan 1 Black', '40 Eur', 5, 2500.00, 3000.00, 1, 1, '2024-02-01 08:29:39', '2024-02-01 08:29:39', 0),
(2, 'DUNK002', 'Dunk Low Panda', '40 Eur', 5, 1500.00, 4500.00, 2, 1, '2024-02-01 08:36:08', '2024-02-01 08:36:08', 0),
(3, '003', 'Dunk Low Panda', '40 Eur', 5, 5.00, 5.00, 1, 1, '2024-02-03 17:55:42', '2024-02-03 17:55:42', 0),
(4, '66', 'Dunk Low Panda', '40 Eur', 5, 5.00, 5.00, 1, 1, '2024-02-03 17:57:55', '2024-02-03 17:57:55', 0),
(5, '99', 'Dunk Low Panda', '40', 5, 5.00, 5.00, 1, 1, '2024-02-03 17:58:47', '2024-02-03 17:58:47', 0),
(7, 'new item', 'dl panda', '40 eur', 5, 5.00, 5.00, 1, 1, '2024-02-03 18:59:53', '2024-02-03 18:59:53', 0),
(8, 'fplwel', 'Dunk Low Panda', '44 eur', 5, 2000.00, 3000.00, 1, 1, '2024-04-25 15:36:22', '2024-04-25 15:36:22', 0),
(9, 'LABUBU', 'LABUBU', 'Small', 3, 1500.00, 1890.00, 1, 1, '2024-04-28 05:25:49', '2024-04-28 05:25:49', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
