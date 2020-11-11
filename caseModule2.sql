-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 11, 2020 at 09:49 AM
-- Server version: 8.0.22
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `caseModule2`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int NOT NULL,
  `image` varchar(500) DEFAULT NULL,
  `productName` varchar(255) DEFAULT NULL,
  `productType_id` int NOT NULL,
  `statusProduct` varchar(255) DEFAULT NULL,
  `price` int DEFAULT NULL,
  `quantityStock` int DEFAULT NULL,
  `warehouseDate` date DEFAULT NULL,
  `warehouse_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `image`, `productName`, `productType_id`, `statusProduct`, `price`, `quantityStock`, `warehouseDate`, `warehouse_id`) VALUES
(1, 'uploads/Invertocat_2.0_Hoodie_Mock_GithubShop-1_1024x1024.jpg', 'Black Hoodie', 3, 'New', 120, 19, '2020-10-11', 1),
(3, 'uploads/719CalwMtfL.jpg', 'IT', 1, 'Old', 299, 20, '2019-08-01', 1),
(7, 'uploads/download.jpeg', 'Gucci Bag', 3, 'New', 9999, 10, '2020-10-11', 1),
(8, 'uploads/81uQocUlNcL.jpg', 'The Green Mile', 1, 'Old', 23, 12, '2018-02-02', 2),
(9, 'uploads/img_1580015867202_1580279206551_1dcf44e0fa4f426db58d8ea263f44a3b_master.jpg', 'Supreme Tee', 3, 'New', 900, 10, '2020-02-11', 2);

-- --------------------------------------------------------

--
-- Table structure for table `productTypes`
--

CREATE TABLE `productTypes` (
  `productType_id` int NOT NULL,
  `productType` varchar(255) DEFAULT NULL,
  `textDiscription` varchar(4000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `productTypes`
--

INSERT INTO `productTypes` (`productType_id`, `productType`, `textDiscription`) VALUES
(1, 'Book', 'A book is a medium for recording information in the form of writing or images, typically composed of many pages (made of papyrus, parchment, vellum, or paper) bound together and protected by a cover.[1] The technical term for this physical arrangement is codex (plural, codices). In the history of hand-held physical supports for extended written compositions or records, the codex replaces its predecessor, the scroll. A single sheet in a codex is a leaf and each side of a leaf is a page.'),
(3, 'Clothes', 'Clothes (also known as clothes, apparel and attire) is items worn on the body. Clothing is typically made of fabrics or textiles but over time has included garments made from animal skin or other thin sheets of materials put together. The wearing of clothing is mostly restricted to human beings and is a feature of all human societies. The amount and type of clothing worn depends on gender, body type, social, and geographic considerations.');

-- --------------------------------------------------------

--
-- Table structure for table `warehouses`
--

CREATE TABLE `warehouses` (
  `warehouse_id` int NOT NULL,
  `warehouseName` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `warehouses`
--

INSERT INTO `warehouses` (`warehouse_id`, `warehouseName`, `address`, `city`, `country`) VALUES
(1, 'Amazon', 'Seattlee', 'Washington', 'America'),
(2, 'VietHung', '21 Jump Street', 'New York', 'America');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `productType_id` (`productType_id`),
  ADD KEY `warehouse_id` (`warehouse_id`);

--
-- Indexes for table `productTypes`
--
ALTER TABLE `productTypes`
  ADD PRIMARY KEY (`productType_id`);

--
-- Indexes for table `warehouses`
--
ALTER TABLE `warehouses`
  ADD PRIMARY KEY (`warehouse_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `productTypes`
--
ALTER TABLE `productTypes`
  MODIFY `productType_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `warehouses`
--
ALTER TABLE `warehouses`
  MODIFY `warehouse_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`productType_id`) REFERENCES `productTypes` (`productType_id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`warehouse_id`) REFERENCES `warehouses` (`warehouse_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
