-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 08, 2020 at 09:07 PM
-- Server version: 5.6.49-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jingweiwu_wnm608`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `material` varchar(32) NOT NULL,
  `color` varchar(32) NOT NULL,
  `dimensions` varchar(32) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) NOT NULL,
  `description` text NOT NULL,
  `date-create` datetime NOT NULL,
  `date-modify` datetime NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `material`, `color`, `dimensions`, `price`, `category`, `description`, `date-create`, `date-modify`, `thumbnail`, `images`) VALUES
(1, 'Retrostar Chair', 'Velvet, beech wood', 'Lemon', '80 × 81 × 62 (W×H×D)', 500.00, 'Chair', 'The sloped back and steel suspension make this chair a comfortable and sturdy choice. ', '2020-11-08 18:32:19', '2020-11-08 18:32:19', 'retrostar_chair_thumb.jpg', 'retrostar_chair_1.jpg,retrostar_chair_2,retrostar_chair_3.jpg.jpg'),
(2, 'Natural First Table', 'Birch plywood, clear lacquer', 'Wood', 'L 170 / W 85 / H 73', 800.00, 'Table', 'Inspired by truss structures in engineering, the First Table boasts a complex, intricate design. Its light silhouette and classic wood composition allow it to blend easily into any interior. The seemingly complex construction is in fact very easy and quick to assemble.', '2020-11-08 18:37:50', '2020-11-08 18:37:50', 'natural_first_table_thumb.jpg', 'natural_first_table_1.jpg,table_natural_first_table_2.jpg,table_natural_first_table_3.jpg'),
(3, 'Natural 4th Armchair', 'Plywood, solid wood', 'White', '52L/52W/76H', 410.00, 'Chair', 'Surprising yet subtle, it embodies the aesthetics of simplicity and sophistication. Its distinctive silhouette, inspired by the rhythm of Japanese pagodas, creates a pleasing ergonomic experience and provides a beautiful, luxurious accessory for the modern home.', '2020-11-08 18:53:10', '2020-11-08 18:53:10', 'armchair_thumb.jpg', 'armchair_1.jpg,armchair_2.jpg'),
(4, 'Navy Blue Retrostar Lounge Chair', 'Velvet, beech & plywood', 'Navy blue', '62 × 101 × 82 (W×H×D)', 500.00, 'Chair', 'The Retrostar Lounge Chair in velvet offers great comfort with its generously padded, slightly curved seat and back, which has a steel suspension.', '2020-11-08 19:01:06', '2020-11-08 19:01:06', 'retrostar_lounge_thumb.jpg', 'retrostar_lounge_1.jpg,retrostar_lounge_2.jpg,retrostar_lounge_3.jpg'),
(5, 'Retrostar Lounge Rocker Classic', 'Velvet,beech & plywood', 'Grey', '62 × 95 × 120 (W×H×D)', 550.00, 'Chair', 'With its generously padded, slightly curved seat and back, which has a steel suspension, it offers optimum comfort. In a visually attractive contrast are the slim, tapered armrests. These are made of solid beech wood in elaborate craftsmanship.', '2020-11-08 19:07:56', '2020-11-08 19:07:56', 'retrostar_rocker_thumb.jpg', 'retrostar_rocker_1.jpg,retrostar_rocker_2.jpg,retrostar_rocker_3.jpg'),
(6, 'Hunter Green Cube Bench', 'PUR foam,beech & plywood', 'Green', '80 × 81 × 62 (W×H×D)', 450.00, 'Table', 'Its slim steel frame is powder coated in copper, making it durable as well as impactful. ', '2020-11-08 20:15:34', '2020-11-08 20:15:34', 'cube_bench_thumb.jpg', 'cube_bench_1.jpg,cube_bench_2.jpg,cube_bench_3.jpg,'),
(7, 'Walnut Loveseat Mid Sofa\r\n', 'Walnut, mottled Fabric', 'Gray/Walnut', '160 x 70 x 74(LxDxH)', 3200.00, 'Sofa', 'Vintage-inspired, Danish in style, and the product of a collective of design talent: Lebanon’s Kann Design is a studio with soul. ', '2020-11-08 20:27:24', '2020-11-08 20:27:24', 'walnut_sofa_thumb.jpg', 'walnut_sofa_1.jpg,walnut_sofa_2.jpg,walnut_sofa_3.jpg'),
(8, 'Horizontal Rectangle Pendant Light', 'Concrete', 'Graphite grey', '56 x 14 x 14 cm', 480.00, 'Lighting', 'The Horizontal Rectangle Pendant Light is an angular, rectangle-shaped light with inner gilding.', '2020-11-08 20:31:22', '2020-11-08 20:31:22', 'pendant_light_thumb.jpg', 'pendant_light_1.jpg,pendant_light_2.jpg'),
(9, 'Walnut Treasure Coffee Table', 'Walnut/Maple, Polyrey, Steel', 'Dark brown', 'L 160 x D 80 x H 50 cm', 1540.00, 'Table', 'The Treasure Coffee Table is a mid-century style nested coffee table. It has a vintage look with its rounded table top and straight metal legs. ', '2020-11-08 20:36:31', '2020-11-08 20:36:31', 'coffee_table_thumb.jpg', 'coffee_table_1.jpg,coffee_table_2.jpg'),
(10, 'Linen 3 Seater Sofa', 'Memory foam,wood', 'Grey', 'H 83 x W 205 x D 85', 1400.00, 'Sofa', 'Linen 3 Seater Sofa is an angular, modern sofa in linen.', '2020-11-08 20:42:09', '2020-11-08 20:42:09', 'linen_sofa_thumb.jpg', 'linen_sofa_1.jpg,linen_sofa_2.jpg'),
(11, 'Pritchard Sofa', 'Teak Structure, Wool Fabric', 'Blue', ' L 160 x D 70 x H 70 cm', 3000.00, 'Sofa', 'The Pritchard Sofa is a clean-lined padded bench with teak legs.', '2020-11-08 20:47:02', '2020-11-08 20:47:02', 'pritchard_thumb.jpg', 'pritchard_1.jpg,pritchard_2.jpg,pritchard_3.jpg'),
(12, 'Arc Lamp', 'Aluminium', 'white', '10 cm x 45 cm', 400.00, 'Lighting', 'Composed of three different forms and inspired by the rustic aesthetic of classic industrial lights, this collection offers a minimal, graphic look and infuses classic shapes with a new modernity.', '2020-11-08 20:53:32', '2020-11-08 20:53:32', 'arc_lamp_thumb.jpg', 'arc_lamp_1.jpg,arc_lamp_2.jpg,arc_lamp_3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
