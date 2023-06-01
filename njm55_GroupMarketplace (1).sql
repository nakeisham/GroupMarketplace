-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 01, 2023 at 12:04 AM
-- Server version: 5.7.42
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `njm55_GroupMarketplace`
--

DELIMITER $$
--
-- Procedures
--
$$

$$

$$

$$

$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `card_id` varchar(255) NOT NULL,
  `card_number` int(11) DEFAULT NULL,
  `sortcode` int(11) DEFAULT NULL,
  `cvv` int(11) DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  `cardholder_name` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `OrderLine`
--

CREATE TABLE `OrderLine` (
  `productid` varchar(255) NOT NULL,
  `qty` int(11) DEFAULT NULL,
  `productname` varchar(255) DEFAULT NULL,
  `order_id` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Ordertbl`
--

CREATE TABLE `Ordertbl` (
  `order_id` varchar(255) DEFAULT NULL,
  `dateorderplaced` varchar(255) DEFAULT NULL,
  `userid` varchar(255) DEFAULT NULL,
  `totalprice` int(11) DEFAULT NULL,
  `productqty` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productid` mediumint(9) NOT NULL,
  `productname` varchar(255) DEFAULT NULL,
  `productQty` bigint(64) DEFAULT NULL,
  `price` decimal(13,2) DEFAULT NULL,
  `productdesc` varchar(255) DEFAULT NULL,
  `sellerid` varchar(255) DEFAULT NULL,
  `sold` char(1) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productid`, `productname`, `productQty`, `price`, `productdesc`, `sellerid`, `sold`, `image`) VALUES
(1, 'Paisley Scarf Print Skirt', NULL, '17.95', 'Color:Red, Style:Boho Pattern Type:Tribal, Scarf Print, Material: 100% Polyester, Type:Womenswear', NULL, NULL, 'img/PaisleyScarfPrintSkirt.jpg'),
(2, 'Floral Print Cami Dress', NULL, '13.49', 'Color:Black, Style:Boho, Pattern Type:Floral Material:96% Polyester, 4% Elastane, Type:Womenswear', NULL, NULL, 'img/Floral Print Ruched Bust Split Thigh Cami Dress.jpg'),
(3, 'Hem Crop Tee', NULL, '7.49', 'Color:Multicolor, Style:Casual, Pattern Type:Graphic, Material:91% Polyester, 9% Elastane, Type:Womenswear', NULL, NULL, 'img/HemCropTee.jpg'),
(4, 'Cargo Parachute Trousers', NULL, '12.49', 'Color:Black, Style:Casual, Pattern Type:Plain, Material:100% Polyamide,Type:Menswear', NULL, NULL, 'img/CargoParachuteTrousers.jpg'),
(5, 'Coconut Tree Top', NULL, '6.49', 'Color:Mint Green, Style:Casual, Pattern Type:Tropical, Material:65% Polyester, 35% Viscose, Type:Menswear', NULL, NULL, 'img/Coconut Tree Top.jpg.jpg'),
(6, 'Denim Shorts', NULL, '7.49', 'Color:Light Wash, Style:Casual, Pattern Type:plain, Material:55% Cotton, 30% Polyester, 14% Viscose, 1% Elastane, Type:Menswear', NULL, NULL, 'img/DenimShorts.jpg'),
(7, 'Half Zip Flannelette Sweatshirt', NULL, '20.49', 'Color:purple, Style:Casual, Pattern Type:Graphic, Material:100% Polyester, Type:Menswear', NULL, NULL, 'img/HalfZipFlanneletteSweatshirt.jpg'),
(8, 'Pocket Patched Shirt & Trousers', NULL, '17.99', 'Color:Khaki, Style:Casual, Pattern Type:Plain, Material:Non-Stretch, Type:Menswear', NULL, NULL, 'img/PocketPatchedShirtTrousers.jpg'),
(9, 'Cam Mesh Skirt', NULL, '30.49', 'Color:Coffee Brown, Style:Elegant, Pattern Type:Contrast Mesh, Material:90% Viscose, 10% Elastane, Type:Womenswear', NULL, NULL, 'img/CamTopContrastMeshSkirt.jpg'),
(10, 'Little Nightmares', NULL, '9.95', 'A monster-filled dollhouse traps you inside; use light to navigate through the night, conceal and sneak to stay safe, and run for your life to find a way out.', NULL, NULL, 'img/littlenightmare.JPG'),
(11, 'Cerave Cleanser', NULL, '15.49', 'The CeraVe Hydrating cleanser was created in collaboration with dermatologists, and its mild, non-foaming gel composition gently cleanses the face while removing excess dirt and makeup. with hyaluronic acid to keep the moisture in the epidermis.', NULL, NULL, 'img/cerave.jpg'),
(12, 'Gloss Bomb Heat Universal Lip Luminzer + Plumber', NULL, '15.00', 'Hybrid lip gloss and plumper delivers a hint of tint and fuller-looking lips.', NULL, NULL, 'img/GLOSSBOMB .jpg'),
(13, 'Revolution 5D Whip Lift Mascara', NULL, '8.99', 'Introducing the 5D Whip Lift Mascara, Revolutionâ€™s best mascara yet for long, lifted lashes - no salon needed!', NULL, NULL, 'img/Mascara.jpg'),
(14, 'E.L.F. Halo Glow Liquid Filter 3 Light/Medium ', NULL, '13.99', 'What Is It: A Multi-Purpose, Liquid Glow Booster Infused With Skin-Loving Ingredients To Give Your Complexion A Soft-Focus Social Filter Effect Irl.', NULL, NULL, 'img/elfglow.jpg'),
(15, 'Urban Decay Robin Eisenberg Palette', NULL, '40.00', 'Urban Decay Naked x Robin Eisenberg Eyeshadow Palette Limited-edition vegan eyeshadow palette.', NULL, NULL, 'img/UrbanDecay.jpg'),
(16, 'Maybelline Hyper Precise Liquid Eyeliner Black', NULL, '4.99', 'Master flow with our exclusive ultra-thin 0.4mm brush tip applies continuous flow for smooth, even, perfected lines. No mess or excess. Master Intensity with our ink technology that keeps pigment saturated.Spring cap keeps the formula fresh.', NULL, NULL, 'img/MaybellineHyper.jpg'),
(17, 'Sony WH-1000XM4 Noise Cancelling Wireless Headphone', NULL, '220.99', '', NULL, NULL, 'img/sony-headphones.jpg'),
(18, 'Playstation 4 PRO Console 1TB', NULL, '219.99', '', NULL, NULL, 'img/pspro.jpg'),
(19, 'Canon EOS 4000D DSLR Camera and EF-S 18-55 mm f/3.5-5.6 III Lens', NULL, '300.99', '', NULL, NULL, 'img/CanonEOS.jpg'),
(20, 'SONY PlayStation 5 Digital Edition', NULL, '345.00', '', NULL, NULL, 'img/PlayStation5-Digital-Edition.jpg'),
(21, 'Echo Dot', NULL, '64.95', '', NULL, NULL, 'img/EchoDot.jpg'),
(22, 'POWEROWL AAA Rechargeable Batteries 16 Pack,', NULL, '7.99', '', NULL, NULL, 'img/POWEROWL-AAA-Rechargeabl- Batteries16Pack.jpg'),
(23, 'RCA 32 inch TV ', NULL, '89.99', '', NULL, NULL, 'img/RCA 32 inch TV.jpg'),
(24, 'Fire TV Stick 4K ', NULL, '59.99', '', NULL, NULL, 'img/Fire-TV-Stick-4K .jpg'),
(25, 'Toshiba 43 Inch Smart Fire TV', NULL, '239.99', '', NULL, NULL, 'img/Toshiba-43-Inch-Fire-TV.jpg'),
(26, 'Fire HD 8 Tablet', NULL, '89.99', '', NULL, NULL, 'img/Fire-HD-8-Tablet.jpg'),
(27, 'Smart Watch', NULL, '19.99', '', NULL, NULL, 'img/SmartWatch.jpg'),
(28, 'DAB/DAB+ & FM Radio', NULL, '31.99', '', NULL, NULL, 'img/DABDABFMRadio.jpg'),
(29, 'Anker Soundcore Speaker', NULL, '30.99', '', NULL, NULL, 'img/Anker.jpg'),
(30, 'Samsung Galaxy M13', NULL, '129.99', '', NULL, NULL, 'img/SamsungGalaxy.jpg'),
(31, 'Wall mirror', NULL, '20.99', '', NULL, NULL, 'img/wall-mirror.jpg'),
(32, 'Chessboard Print Duvet Cover Set', NULL, '25.99', '', NULL, NULL, 'img/Chessboard.jpg'),
(33, ' LED Strip Light With Remote Control', NULL, '24.99', '', NULL, NULL, 'img/LEDlights.jpg'),
(34, 'Remote Control Table Lamp', NULL, '25.00', 'Color:Multicolor,Charger Certification: CE, FCC', NULL, NULL, 'img/TableLamp.jpg'),
(35, 'Mini 7 Color Modes Led Humidifier', NULL, '10.99', 'Type:Humidifier Power Supply:Rechargeable Color:Dark Grey Batteries Included:No', NULL, NULL, 'img/Humidifier.jpg'),
(36, 'Multifunction Calculator', NULL, '7.99', 'Type:Calculator, Power Supply:Battery Powered (batteries included) Color:Pink Batteries Included:Yes', NULL, NULL, 'img/Calculator.jpg'),
(37, ' 12pcs/set Aluminum Crochet Needle', NULL, '7.99', 'Color:MulticolorMaterial:Aluminum', NULL, NULL, 'img/Crochet-Needle.jpg'),
(38, 'Heart Shaped Silicone Mold', NULL, '5.99', 'Color:Chocolate Brown Material:Silicone', NULL, NULL, 'img/Silicone.jpg'),
(39, 'Figure Shaped Plant Pot', NULL, '9.50', 'Color:White, Material:ABS', NULL, NULL, 'img/PlantPot.jpg'),
(40, ' Geometric Pattern Door Mat', NULL, '5.75', 'Color:Multicolor, Material:Polyester', NULL, NULL, 'img/DoorMat.jpg'),
(41, 'Clear Water Bottle', NULL, '5.99', 'Color:Clear, Material:Plastic', NULL, NULL, 'img/ClearWaterbottle.jpg'),
(42, 'Tea Storage Fruit Cup', NULL, '7.99', 'Color:Multicolor, Material:Plastic', NULL, NULL, 'img/Fruit-Cup.jpg'),
(43, 'Digital Food Measuring Thermometer', NULL, '5.59', 'Color:White. Material:Plastic, Charger Certification:FCC, CE.Batteries Included:Yes, Power Supply:Battery', NULL, NULL, 'img/Thermometer.jpg'),
(44, 'Everlast Medicine Ball', NULL, '20.99', 'Improve your exercise routine with this Everlast Medicine Ball. It has textured panels for better grip, a weighted design that will strengthen your core, and Everlast branding to finish the appearance.', NULL, NULL, 'img/MedicineBall .jpg'),
(45, 'Karrimor Running Glove Mens', NULL, '4.99', 'Karrimor Gloves are perfect for keeping your hands toasty because they are lightweight, moisture-wicking, and touch screen compatible. These gloves are perfect for a winter exercise because they feature the iconic Karrimor reflective branding.', NULL, NULL, 'img/Running-Glove.jpg'),
(46, 'adidas Linear Duffle 99', NULL, '13.00', '', NULL, NULL, 'img/Duffle-99.jpg'),
(47, ' Nike Miler Running Gloves Mens', NULL, '12.99', 'Karrimor Gloves are perfect for keeping your hands toasty because they are lightweight, moisture-wicking, and touch screen compatible. These gloves are perfect for a winter exercise because they feature the iconic Karrimor reflective branding.', NULL, NULL, 'img/Miler-Running-Gloves.jpg'),
(48, 'USA Pro Hand Weight', NULL, '3.50', 'The USA Pro Hand Weights, which have a soft ergonomic handle for additional comfort, are the ideal complement to your exercise classes and gym sessions. The USA Pro logo is on the side of this hand-held weight, giving it a fantastic appearance.', NULL, NULL, 'img/Hand-Weight.jpg'),
(49, 'USA Pro Training Tights Junior Girls', NULL, '13.00', 'The USA Pro training tights allow youngsters to exercise in flair. These pants are made with an elasticized waistband and have a close-fitting stretch finish that make them ideal for working out in. ', NULL, NULL, 'img/training-tights .jpg'),
(50, 'Berserk Deluxe Volume 1', NULL, '47.99', '', NULL, NULL, 'img/berserk.jpg'),
(51, 'Vagabond (VIZBIG Edition), Vol. 1', NULL, '15.99', '', NULL, NULL, 'img/Vagabond.jpg'),
(52, 'Black Paradox', NULL, '15.99', '', NULL, NULL, 'img/BlackParadox.jpg'),
(53, 'Demon Slayer Complete Box Set', NULL, '98.99', '', NULL, NULL, 'img/Demon Slayer .jpg'),
(54, 'Death Note Complete Box Set', NULL, '99.99', '', NULL, NULL, 'img/deathnote.jpg'),
(55, 'One-Punch Man, Vol. 1', NULL, '7.99', '', NULL, NULL, 'img/one-punch-man.jpg'),
(56, 'Sailor Moon Vol. 1', NULL, '7.99', '', NULL, NULL, 'img/salormoon.jpg'),
(57, 'My Hero Academia Box Set 1', NULL, '98.99', '', NULL, NULL, 'img/heroAcademia.jpg'),
(58, 'Spy x Family, Vol. 1', NULL, '7.99', '', NULL, NULL, 'img/spyfamily.jpg'),
(59, 'House of Flame and Shadow', NULL, '16.99', '', NULL, NULL, 'img/HousofFlame.jpg'),
(60, 'Bored of Lunch: The Healthy Air Fryer Book', NULL, '9.49', '', NULL, NULL, 'img/boredoflunch.jpg'),
(61, 'Chunky Sneakers', NULL, '22.99', '', NULL, NULL, 'img/ChunkySneakers.jpg'),
(62, 'Summer Heeled Sandals', NULL, '17.98', '', NULL, NULL, 'img/SummerHeeledSandals.jpg'),
(63, 'Mens Chelsea Boots', NULL, '25.99', 'Leather upper, Textile and synthetic upper. Twin elasticated gusset, Heel pull, Man made sole.', NULL, NULL, 'img/MensChelsea Boots.jpg'),
(64, 'Ultra Heeled Loafers', NULL, '28.00', '', NULL, NULL, 'img/Ultra-Heeled-Loafers.jpg'),
(65, 'Flatform Penny Loafers', NULL, '16.25', '', NULL, NULL, 'img/Flatform-Penny-Loafers.jpg'),
(66, 'Flatform Oxford Shoes', NULL, '10.50', '', NULL, NULL, 'img/FlatformOxfordShoes.jpg'),
(67, 'Sporty Sneakers', NULL, '26.40', '', NULL, NULL, 'img/SportySneakers.jpg'),
(68, 'Front Skate Shoes', NULL, '17.49', '', NULL, NULL, 'img/FrontSkateShoes.jpg'),
(69, 'Combat Boots', NULL, '27.50', '', NULL, NULL, 'img/CombatBoots.jpg'),
(70, 'Lace-up Front Oxfords Shoes', NULL, '18.00', '', NULL, NULL, 'img/Lace-up-Front-Oxfords-Shoes.jpg'),
(71, 'Buckle Decor Wedge Mary Janes', NULL, '29.25', '', NULL, NULL, 'img/Mary-Janes.jpg'),
(72, 'Men Star Pattern Skate shoes', NULL, '18.50', '', NULL, NULL, 'img/Skate-shoes.jpg'),
(73, 'New Balance black 327 trainers', NULL, '110.25', '', NULL, NULL, 'img/New-Balance.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `studentid` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `sellerid` varchar(255) DEFAULT NULL,
  `addressline1` varchar(255) DEFAULT NULL,
  `addressline2` varchar(255) DEFAULT NULL,
  `postcode` varchar(255) DEFAULT NULL,
  `totaltoken` int(255) DEFAULT NULL,
  `card_id` int(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `studentid`, `email`, `firstname`, `lastname`, `sellerid`, `addressline1`, `addressline2`, `postcode`, `totaltoken`, `card_id`) VALUES
(1, 'jumincat', '$2y$10$oaFGzqBkjOx27Cu5P0e4SuLs7FseS8SBeHMC94lZq6kJaF/5ieVwK', '12345', 'juminhan@gmail.com', 'jumin', 'han', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'oo303', 'lorry', '12345', 'oo@gamil.com', 'Onome', 'Ohwerhi', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'ka', '$2y$10$8bZEAEFXvJWJ3ErdpcluquK0lRYBXjA36YX5WmBNUonSljI.UJdxm', '2134432', 'ka@ahami.com', 'kajoriya', 'sivalingam', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'po20', '$2y$10$kktTEp4U5ied5GpPO4LHl.uqZq4P4GY5xBSiXeABkfB1tLPTrEv2a', '123456', 'san@gmail.com', 'poppy', 'sans', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'ha12', '$2y$10$lpt2Xz8LNkC9bdK5syby9.7xD64QEbxuwNncsrbdqfsxoZOxOfZty', '4321', 'harry@gmail.com', 'harry', 'owens', NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`card_id`);

--
-- Indexes for table `OrderLine`
--
ALTER TABLE `OrderLine`
  ADD PRIMARY KEY (`order_id`,`productid`);

--
-- Indexes for table `Ordertbl`
--
ALTER TABLE `Ordertbl`
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productid`),
  ADD KEY `sellerid` (`sellerid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `sellerid` (`sellerid`),
  ADD KEY `cardid` (`card_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productid` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
