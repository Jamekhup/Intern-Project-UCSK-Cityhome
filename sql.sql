-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 09, 2021 at 09:17 AM
-- Server version: 5.6.41-84.1
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myanmarw_muanyg`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `role`) VALUES
(9, 'City Home', 'cityhomeproperty.mm@gmail.com', 'c3ca6e4b9bc6117b16ec9ab2452bbefe', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(20) NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(27, 'Industrial Zone and Warehouse'),
(28, 'Land'),
(29, 'Shop and Store'),
(30, 'Apartment'),
(31, 'Condo'),
(32, 'Private House');

-- --------------------------------------------------------

--
-- Table structure for table `for_rent`
--

CREATE TABLE `for_rent` (
  `id` int(20) NOT NULL,
  `address` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `township` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `room` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `feet` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `img1` text COLLATE utf8_unicode_ci NOT NULL,
  `img2` text COLLATE utf8_unicode_ci NOT NULL,
  `img3` text COLLATE utf8_unicode_ci NOT NULL,
  `img4` text COLLATE utf8_unicode_ci NOT NULL,
  `img5` text COLLATE utf8_unicode_ci NOT NULL,
  `img6` text COLLATE utf8_unicode_ci NOT NULL,
  `img7` text COLLATE utf8_unicode_ci NOT NULL,
  `img8` text COLLATE utf8_unicode_ci NOT NULL,
  `img9` text COLLATE utf8_unicode_ci NOT NULL,
  `img10` text COLLATE utf8_unicode_ci NOT NULL,
  `img11` text COLLATE utf8_unicode_ci NOT NULL,
  `img12` text COLLATE utf8_unicode_ci NOT NULL,
  `img13` text COLLATE utf8_unicode_ci NOT NULL,
  `img14` text COLLATE utf8_unicode_ci NOT NULL,
  `img15` text COLLATE utf8_unicode_ci NOT NULL,
  `img16` text COLLATE utf8_unicode_ci NOT NULL,
  `img17` text COLLATE utf8_unicode_ci NOT NULL,
  `img18` text COLLATE utf8_unicode_ci NOT NULL,
  `img19` text COLLATE utf8_unicode_ci NOT NULL,
  `img20` text COLLATE utf8_unicode_ci NOT NULL,
  `category_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sold` int(2) NOT NULL DEFAULT '0',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `for_rent`
--

INSERT INTO `for_rent` (`id`, `address`, `township`, `price`, `room`, `feet`, `description`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `img8`, `img9`, `img10`, `img11`, `img12`, `img13`, `img14`, `img15`, `img16`, `img17`, `img18`, `img19`, `img20`, `category_name`, `sold`, `created`, `updated`) VALUES
(12, 'ဗဟန်း၊ ရွှေတောင်ကြားလမ်းရှိ 3 RC လုံးချင်းအိမ် ငှား မည်', 'Bahan', ' USD 6500 per month', '5 Master Bedroom, 2 Single Bedroom, Maid room, Driver room', 'မြေအကျယ် - 90*70/  အိမ်အကျယ် - 9,000 sq-ft', 'C 115\r\n\r\nဗဟန်း၊ ရွှေတောင်ကြားလမ်းရှိ 3 RC လုံးချင်းအိမ် ရောင်းမည်\r\n\r\nမြေအကျယ် - 90*70\r\nအိမ်အကျယ် - 9,000 sqft\r\n\r\n5 Master Bedroom, 2 Single Bedroom, Maid room, Driver room, Dry kitchen & wet kitchen\r\n6 car parking, Water heater, Garage\r\nAircon ...\r\n\r\nFor Rent : USD 6500 per month\r\nFor Sell : သိန်း 25,000\r\n\r\nFor more info: message or 09409789556/409789515\r\nCity Home Property Co.,Ltd', '1_1601717863.jpg', '2_1601717863.jpg', '3_1601717863.jpg', '4_1601717863.jpg', '5_1601717863.jpg', '6_1601717863.jpg', '_1601717863.', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Private House', 0, '2020-10-03 09:37:43', '2020-10-03 09:37:43'),
(23, 'Pyay Garden Residence Condo ', 'Yankin', 'USD 2100 per months ', '3 Bedroom ', '1200sqft', 'Semi-Luxury Condo for Rent ( @ Pyay Garden )\r\nWe have Semi-Luxury Condo flat for Rent \r\nlocated in the heart of Yangon, Pyay Garden Residence, between U Wisara Road and Pyay Road, next to Hanthawaddy roundabout.\r\nspacious 3 bedroom Shwedagon Pagoda view, Swimming Pool, \r\nGym, Lift, \r\nGenerator, \r\nCommon Outdoor areas, \r\nAllocated Car Parking and 24/7 Security in a private complex.\r\nKey features:\r\n- Fully furnished 3 Bedrooms (1 Double & 2 Single rooms)\r\n- Master Bedroom (Shwedagon Pagoda view) with attached Bathroom\r\n- Store / Maid room\r\n- 3 Toilets in total (1 in Master, 1 for Common and 1 for Maid)\r\n- Large Living room and Dinning room\r\n- About 1200sqft\r\n- 10th Floor with Shwedagon Pagoda view\r\n- Newly fitted Modern Kitchen with built in Oven\r\n- Big side by side Refrigerator\r\n- Washing Machine\r\n- 58\'\' HD TV\r\n- Water Heater (in Master and Common bathroom)\r\n- 5 Aircons \r\n- Allocated Car Parking and Guest Parking\r\n- Swimming Pool\r\nPricing:\r\nOption-1\r\nUS$ 1,850 per month (Without Bills & Maintenance Services)\r\nOption-2\r\nUS$ 2,100 per month (Including all Bills - Electric, Water, Wi-Fi, Maintenance Services)\r\n* Minimum 6 months contract, available now.\r\nHave to pay agent fees \r\n\r\nfor more info: 09409789556 / 09409789515\r\nCity Home Property', '1_1608642593.jpg', '2_1608642593.jpg', '3_1608642593.jpg', '4_1608642593.jpg', '5_1608642593.jpg', '6_1608642593.jpg', '7_1608642593.jpg', '8_1608642593.jpg', '9_1608642593.jpg', '0_1608642593.jpg', '00_1608642593.jpg', '000_1608642593.jpg', '_1608642593.', '_1608642593.', '_1608642593.', '_1608642593.', '_1608642593.', '_1608642593.', '_1608642593.', '_1608642593.', 'Condo', 0, '2020-12-22 13:09:53', '2020-12-22 13:09:53'),
(24, 'Pyay Garden Residence Condo ', 'Yankin', 'USD 2100 per months ', '3 Bedroom ', '1200sqft', 'Semi-Luxury Condo for Rent ( @ Pyay Garden )\r\nWe have Semi-Luxury Condo flat for Rent \r\nlocated in the heart of Yangon, Pyay Garden Residence, between U Wisara Road and Pyay Road, next to Hanthawaddy roundabout.\r\nspacious 3 bedroom Shwedagon Pagoda view, Swimming Pool, \r\nGym, Lift, \r\nGenerator, \r\nCommon Outdoor areas, \r\nAllocated Car Parking and 24/7 Security in a private complex.\r\nKey features:\r\n- Fully furnished 3 Bedrooms (1 Double & 2 Single rooms)\r\n- Master Bedroom (Shwedagon Pagoda view) with attached Bathroom\r\n- Store / Maid room\r\n- 3 Toilets in total (1 in Master, 1 for Common and 1 for Maid)\r\n- Large Living room and Dinning room\r\n- About 1200sqft\r\n- 10th Floor with Shwedagon Pagoda view\r\n- Newly fitted Modern Kitchen with built in Oven\r\n- Big side by side Refrigerator\r\n- Washing Machine\r\n- 58\'\' HD TV\r\n- Water Heater (in Master and Common bathroom)\r\n- 5 Aircons \r\n- Allocated Car Parking and Guest Parking\r\n- Swimming Pool\r\nPricing:\r\nOption-1\r\nUS$ 1,850 per month (Without Bills & Maintenance Services)\r\nOption-2\r\nUS$ 2,100 per month (Including all Bills - Electric, Water, Wi-Fi, Maintenance Services)\r\n* Minimum 6 months contract, available now.\r\n\r\nfor more info: 09409789556 / 09409789515\r\nCity Home Property', '1_1608695350.jpg', '2_1608695350.jpg', '3_1608695350.jpg', '4_1608695350.jpg', '5_1608695350.jpg', '6_1608695350.jpg', '7_1608695350.jpg', '8_1608695350.jpg', '9_1608695350.jpg', '10_1608695350.jpg', '11_1608695350.jpg', '_1608695350.', '_1608695350.', '_1608695350.', '_1608695350.', '_1608695350.', '_1608695350.', '_1608695350.', '_1608695350.', '_1608695350.', 'Condo', 0, '2020-12-23 03:49:10', '2020-12-23 03:49:10'),
(25, 'The Central Condo for rent', 'Yankin', 'USD 1900 per month ', '1 MBR , 1BR', '1171 sqft', 'The Central Condo for rent\r\n  Tower 2\r\n  5th floor\r\n  1171 square feet\r\n1MBR, 1 BR \r\n  In the content you:\r\n  1.  TV\r\n  2.  Refrigerator\r\n  3.  Washing machine\r\n  4.  Sofa settee\r\n  5.  coffee table\r\n  6.  Lease (10 months)\r\n  7.  Bedding\r\n  8.  blanket\r\n  9.  Pillow\r\n  10.  Follow\r\n  11.  4 air conditioners (per room)\r\n  12.  Medicine table  To insert\r\n  13.  A plate\r\n  15.  Decorative vases\r\n  16.  Painting\r\n  17.  swimming pool\r\n  18.  Gym\r\n  19.  Electricity is available 24 hours a day\r\n  20.  UPS system\r\n  ready to move in ', '1_1608695679.jpg', '2_1608695679.jpg', '3_1608695679.jpg', '4_1608695679.jpg', '5_1608695679.jpg', '6_1608695679.jpg', '7_1608695679.jpg', '8_1608695679.jpg', '9_1608695679.jpg', '10_1608695679.jpg', '_1608695679.', '_1608695679.', '_1608695679.', '_1608695679.', '_1608695679.', '_1608695679.', '_1608695679.', '_1608695679.', '_1608695679.', '_1608695679.', 'Condo', 0, '2020-12-23 03:54:39', '2020-12-23 03:54:39'),
(26, 'Thu Wunna Paw San Mwe Road', 'Thingangyun', '10 Lakhs ( Negotiable ) ', ' 1MBR 2BR', ' 1460sq ft', 'For sale / rent\r\n\r\nThu Wunna Paw San Mwe Road\r\nCondo for rent\r\n 1460sq ft\r\n 1MBR 2BR\r\n 3 floors\r\n For sale: 1750 lakhs\r\n Rent: 10 Lakhs Negotiable\r\n\r\nfor more info: 09409789556 / 09409789515\r\ninfo@cityhomeproperty.com\r\nwww.cityhomeproperty.com \r\nCity Home Property Co.,Ltd \r\n#Real Estate In Yangon Myanmar ( Private House for Sell )', '1_1608696896.jpg', '2_1608696896.jpg', '3_1608696896.jpg', '4_1608696896.jpg', '5_1608696896.jpg', '6_1608696896.jpg', '7_1608696896.jpg', '8_1608696896.jpg', '_1608696896.', '_1608696896.', '_1608696896.', '_1608696896.', '_1608696896.', '_1608696896.', '_1608696896.', '_1608696896.', '_1608696896.', '_1608696896.', '_1608696896.', '_1608696896.', 'Condo', 0, '2020-12-23 04:14:56', '2020-12-23 04:14:56'),
(27, ' Mya Kan Thar ', 'Hlaing', '19 Lakhs (negotiable)', ' 5 Master Bedroom', '4200 sqft ', 'House for rent\r\n Mya Kan Thar, Hlaing Township\r\n Fence area: 60 * 70\r\n Building size: 38 * 50 New building\r\n 5 Master Bedroom\r\n 8 AC\r\n 6 car parking\r\n For Rent: 19 Lakhs (negotiable)\r\n\r\nfor more info: 09409789556 / 09409789515\r\ninfo@cityhomeproperty.com\r\nwww.cityhomeproperty.com \r\nCity Home Property Co.,Ltd \r\n#Real Estate In Yangon Myanmar ( Private House for Rent)', '1_1608697780.jpg', '2_1608697780.jpg', '3_1608697780.jpg', '4_1608697780.jpg', '5_1608697780.jpg', '6_1608697780.jpg', '7_1608697780.jpg', '8_1608697780.jpg', '_1608697780.', '_1608697780.', '_1608697780.', '_1608697780.', '_1608697780.', '_1608697780.', '_1608697780.', '_1608697780.', '_1608697780.', '_1608697780.', '_1608697780.', '_1608697780.', 'Private House', 0, '2020-12-23 04:29:40', '2020-12-23 04:29:40'),
(28, ' Thaketa Industrial Zone for rent', 'Thaketa', '70 Lakhs ( Negotiable ) ', 'Total 30 rooms', 'Land size 170\\\'100 \\\'   3RC feet 100 \\\'60\\\'', 'Very convenient place for rent for Head Office\r\n Thaketa Industrial Zone for rent\r\n Land size 170\'100 \'\r\n 3RC feet 100 \'60\'\r\n There is a power meter and the room has 10 rooms per floor\r\n 1 st floor 10 rooms\r\n 2nd floor 10 rooms\r\n 3rd floor 10 rooms\r\n Total 30 rooms\r\n There is a gender toilet on each floor\r\n Room sizes are 10\'20 \'/ 20\'30\' / 30\'40\r\n Very convenient for companies who want to do office / head office\r\n Monthly rent: 70Lakhs\r\n Special price negotiation \r\n\r\nfor more info: 09409789556 / 09409789515\r\ninfo@cityhomeproperty.com\r\nwww.cityhomeproperty.com \r\nCity Home Property Co.,Ltd \r\n#Real Estate In Yangon Myanmar ( Industrial zone and warehouse for rent / Office Building )', '1_1608698015.jpg', '2_1608698015.jpg', '3_1608698015.jpg', '4_1608698015.jpg', '5_1608698015.jpg', '6_1608698015.jpg', '7_1608698015.jpg', '8_1608698015.jpg', '9_1608698015.jpg', '_1608698015.', '_1608698015.', '_1608698015.', '_1608698015.', '_1608698015.', '_1608698015.', '_1608698015.', '_1608698015.', '_1608698015.', '_1608698015.', '_1608698015.', 'Industrial Zone and Warehouse', 0, '2020-12-23 04:33:35', '2020-12-23 04:33:35'),
(29, 'Sanchaung', 'Sanchaung', 'USD 7000 ', '24 MBR + ', '11,250 sqft', 'Quickly rent a 9-storey \r\n8 story + Penthouse for rent \r\nIt’s suitable to open company, school, training center, office\r\nOffice , school, Advanced clinic\r\n\r\nDesigned and built by NEW ZELAND ARCHITECT\r\nTake the elevator for 10 people\r\nThere are 3 master rooms on each floor. \r\nTo To toilet is used\r\nSpacious living room\r\nThere is a fence\r\nThe floor in each room is designed to suit the tenant\r\nAll rooms on each floor are well lit and well ventilated\r\nYou can see the Shwedagon Pagoda directly\r\n RIVER VIEW and Yangon\r\n Condo on Sanchaung Zeyarwaddy Central Road\r\nEach room has 1250 sqft\r\nTotal building: 11,250 sqft\r\nHeight 17 ’\r\nElevator included\r\nEach room has 3 Master Bedroom\r\nYou can choose your favorite sale for living room parquet.\r\nClose to Sanchaung Night Market and 5 minutes walk to Gwa Market\r\nThere is AYA Bank\r\n Whole building for rent: $ 7,000 per month\r\n (negotiable)\r\n\r\nfor more info: 09409789556 / 09409789515\r\ninfo@cityhomeproperty.com\r\nwww.cityhomeproperty.com \r\nCity Home Property Co.,Ltd \r\n#Real Estate In Yangon Myanmar ( Private Building for rent  )\r\n\r\nNote: we use another photo ', '130056185_205414581075250_6219873659682706413_n_1608698931.jpg', '130056185_205414581075250_6219873659682706413_n_1608698931.jpg', '130056185_205414581075250_6219873659682706413_n_1608698931.jpg', '_1608698931.', '_1608698931.', '_1608698931.', '_1608698931.', '_1608698931.', '_1608698931.', '_1608698931.', '_1608698931.', '_1608698931.', '_1608698931.', '_1608698931.', '_1608698931.', '_1608698931.', '_1608698931.', '_1608698931.', '_1608698931.', '_1608698931.', 'Condo', 0, '2020-12-23 04:48:51', '2020-12-23 04:48:51'),
(30, 'MiaungMya Street Sanchaung ', 'Sanchaung', 'USD 650 ', '1 MBR , 1BR', '750 sqft', 'For Rent \r\nSanchaung Township \r\nစမ်းချောင်း မြောင်းမြလမ်း \r\n3th floor \r\n1 MBR , 1BR\r\nfully furnished \r\nRental fees : $ 650 per month \r\n\r\nfor more info: 09409789556 / 09409789515\r\ninfo@cityhomeproperty.com\r\nwww.cityhomeproperty.com \r\nCity Home Property Co.,Ltd \r\n#Real Estate In Yangon Myanmar ( Condo for rent in sanchaung ) ', '1_1608699591.jpg', '2_1608699591.jpg', '3_1608699591.jpg', '4_1608699591.jpg', '5_1608699591.jpg', '_1608699591.', '_1608699591.', '_1608699591.', '_1608699591.', '_1608699591.', '_1608699591.', '_1608699591.', '_1608699591.', '_1608699591.', '_1608699591.', '_1608699591.', '_1608699591.', '_1608699591.', '_1608699591.', '_1608699591.', 'Condo', 0, '2020-12-23 04:59:51', '2020-12-23 04:59:51');

-- --------------------------------------------------------

--
-- Table structure for table `for_sale`
--

CREATE TABLE `for_sale` (
  `id` int(20) NOT NULL,
  `address` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `township` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `room` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `feet` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `img1` text COLLATE utf8_unicode_ci NOT NULL,
  `img2` text COLLATE utf8_unicode_ci NOT NULL,
  `img3` text COLLATE utf8_unicode_ci NOT NULL,
  `img4` text COLLATE utf8_unicode_ci NOT NULL,
  `img5` text COLLATE utf8_unicode_ci NOT NULL,
  `img6` text COLLATE utf8_unicode_ci NOT NULL,
  `img7` text COLLATE utf8_unicode_ci NOT NULL,
  `img8` text COLLATE utf8_unicode_ci NOT NULL,
  `img9` text COLLATE utf8_unicode_ci NOT NULL,
  `img10` text COLLATE utf8_unicode_ci NOT NULL,
  `img11` text COLLATE utf8_unicode_ci NOT NULL,
  `img12` text COLLATE utf8_unicode_ci NOT NULL,
  `img13` text COLLATE utf8_unicode_ci NOT NULL,
  `img14` text COLLATE utf8_unicode_ci NOT NULL,
  `img15` text COLLATE utf8_unicode_ci NOT NULL,
  `img16` text COLLATE utf8_unicode_ci NOT NULL,
  `img17` text COLLATE utf8_unicode_ci NOT NULL,
  `img18` text COLLATE utf8_unicode_ci NOT NULL,
  `img19` text COLLATE utf8_unicode_ci NOT NULL,
  `img20` text COLLATE utf8_unicode_ci NOT NULL,
  `category_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sold` int(2) NOT NULL DEFAULT '0',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `for_sale`
--

INSERT INTO `for_sale` (`id`, `address`, `township`, `price`, `room`, `feet`, `description`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `img8`, `img9`, `img10`, `img11`, `img12`, `img13`, `img14`, `img15`, `img16`, `img17`, `img18`, `img19`, `img20`, `category_name`, `sold`, `created`, `updated`) VALUES
(51, 'Green Inya 2 ကမ္ဘာအေး Micasa အနီးရှိ ကွန်ဒိုရောင်းမည်', 'Yankin', '2600 lakhs', '1 Master Bedroom and 2 Bedroom', '1375sqft & 1st floor ', 'C 118\r\n\r\nGreen Inya 2 ကမ္ဘာအေး Micasa အနီးရှိ ကွန်ဒိုရောင်းမည်\r\n\r\n1st floor\r\n1375sqft\r\n1 Master Bedroom and 2 Bedroom\r\n\r\nWater heater, Aircon, Refrigerator, Backup generator, Lift , Gym, Spacious Car parking, CCTV, Internet, Skynet, Fully Decorated\r\n\r\nFor Sell : သိန်း 2600\r\n\r\nFor more info: message or 09409789556/409789515\r\nCity Home Property Co.,Ltd', '1_1601716725.jpg', '2_1601716725.jpg', '3_1601716725.jpg', '4_1601716725.jpg', '5_1601716725.jpg', '6_1601716725.jpg', '_1601716725.', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Condo', 0, '2020-10-03 09:18:45', '2020-10-03 09:18:45'),
(52, 'ဗဟန်း ကမ္ဘောဇ လမ်းရှိ 3 RC လုံးချင်းအိမ် ရောင်းမည် / ကမ္ဘောဇလမ်း ၁', 'Bahan', 'သိန်း ၅၀,၀၀၀', 'Master Bedroom 6 ၊ Single bedroom 3', 'မြေအကျယ် - 130*130 အိမ်အကျယ် - 18,000 sq-ft', 'C 114\r\n\r\nဗဟန်း ကမ္ဘောဇ လမ်းရှိ 3 RC လုံးချင်းအိမ် ရောင်းမည်\r\n\r\nကမ္ဘောဇလမ်း ၁\r\n\r\nမြေအကျယ် - 130*130\r\nအိမ်အကျယ် - 18,000 sq-ft\r\n\r\nMaster Bedroom 6 ၊ Single bedroom 3\r\nAircon, Large Roof top Balcony and Mini Bar, Dry Kitchen & Wet Kitchen\r\n\r\n10 Car parking\r\nWater heater, Backup Generator\r\n\r\nFor Rent : USD 10,000 per month\r\nFor Sell : သိန်း ၅၀,၀၀၀\r\n\r\nFor more info: message or 09409789556/409789515\r\nCity Home Property Co.,Ltd\r\n\r\n', '10_1601716874.jpg', '11_1601716874.jpg', '12_1601716874.jpg', '13_1601716874.jpg', '15_1601716874.jpg', '16_1601716874.jpg', '_1601716874.', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Private House', 0, '2020-10-03 09:21:14', '2020-10-03 09:21:14'),
(53, 'ဗဟန်း၊ ရွှေတောင်ကြားလမ်းရှိ 3 RC လုံးချင်းအိမ် ရောင်းမည်', 'Bahan', 'သိန်း 25,000', '5 Master Bedroom, 2 Single Bedroom, Maid room, Driver room', 'မြေအကျယ် - 90*70/  အိမ်အကျယ် - 9,000 sq-ft', 'C 115\r\n\r\nဗဟန်း၊ ရွှေတောင်ကြားလမ်းရှိ 3 RC လုံးချင်းအိမ် ရောင်းမည်\r\n\r\nမြေအကျယ် - 90*70\r\nအိမ်အကျယ် - 9,000 sqft\r\n\r\n5 Master Bedroom, 2 Single Bedroom, Maid room, Driver room, Dry kitchen & wet kitchen\r\n6 car parking, Water heater, Garage\r\nAircon ...\r\n\r\nFor Rent : USD 6500 per month\r\nFor Sell : သိန်း 25,000\r\n\r\nFor more info: message or 09409789556/409789515\r\nCity Home Property Co.,Ltd\r\n\r\n', '1_1601716966.jpg', '2_1601716966.jpg', '3_1601716966.jpg', '4_1601716966.jpg', '5_1601716966.jpg', '6_1601716966.jpg', '_1601716966.', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Private House', 0, '2020-10-03 09:22:46', '2020-10-03 09:22:46'),
(54, 'Yankin Kanbae Towe ', 'Yankin', 'about 3,000 lakhs ( Negotiable prices )', ' one, tow, three ', ' Sqft 438  မှ 1120 Sqft', '50% down payment ကျန်တာကို ၂ နှစ် အတိုးမဲ့အရစ်ကျစနစ်နဲ့ ယခုပဲအခန်းအမြန်ရွေးလိုက်ပါ။ \r\nသွားလာရ လွယ်ကူပြီး ရန်ကုန်မြို့၏ အချက်အချာကျ စီးပွားရေးဇုန်တစ်ခုဖြစ်တဲ့ ရန်ကင်းမြ်ို့နယ်တွင် ၉၀% ပြီးစီးနေပြီးဖြစ်သော မကြာခင်အခန်းအပ်နှံ့ တော့မည့် Full Facilities Smart Condo ဖြစ်တဲ့ Kanbae Towers Condo Project ဖြင့်မိတ်ဆက်ပါရစေ ။ \r\nပိုင်ဆိုင်မူခိုင်မာပြီး ရာသက်ပန် လက်ဆင့်ကမ်းပိုင်ဆိုင် နိုင်မည့် 60 years Grant Land (၂•၂၀၉)ဧကပေါ်တွင်တည်ဆောက်ထားပါသည်။\r\nနေရာကတော့ ရန်ကင်းမြို့နယ်ရှိ ကံဘဲ့ဘူတာရုံလမ်း ပေါ်တွင်တည်ဆောက်ထားပြီး ကမ္ဘာအေးဘုရားလမ်း နှင့် ဝေဇယန္တာ အဓိက မိန်းလမ်းမကြီးနှစ်ခုအလယ်တွင်တည်ဆောက်ထားပြီး အချက်အချာ ကျလှပါသည်။ \r\n​အဆောက်အဦးများ ၂၅ ထပ်အမြင့်ရှိသည့် Towers (၃) လုံးနှင့် ၂၁ထပ် အမြင့်ရှိသော Towers (၁) လုံးပါ၀င်သော Residence အမျိုးအစား Smart Condo ဖြစ်ပါသည်။\r\n1bedroom ,2bedroom,3bedroom အမျိုးအစားများဖြင့်ဖွဲ့စည်းထားသော Sqft 438  မှ 1120 Sqft အထိအကျယ်အဝန်းရှိသော အခန်းများကိုစိတ်ကြိုက်ရွေးချယ်ဝယ်ယူနိုင်ပါသည်။\r\n♻️ ပါဝင်သည့်အရာများအနေနဲ့ ♻️\r\n❇️Project Facilities❇️\r\n✔️Swimming Pool\r\n✔️Gym\r\n✔️Man Made Garden\r\n✔️Public Area Maintenance Service & Cleaning Service\r\n✔️Water Purification System တို့ထည့်သွင်းပေးထားပါသည်။\r\n ❇️Room Assessaries❇️\r\n✔️Main Door - မီးလောင်ဒဏ်ခံနိုင်သော လက်ဗွေ(သို့မဟုတ်)သော့ဖြင့် အဖွင့်အပိတ်ပြုလုပ်နိုင်သော Smart System သုံး တံခါးအမျိုးအစားပါရှိပါသည်။\r\n✔️ဧည့်ခန်း​- CCTV , Aircon , နှစ်ပေပတ်လည်ကြွေပြားကြမ်းခင်းထားပါသည်။\r\n✔️အိပ်ခန်း ​​- Compound wood ပါကေးကြမ်းခင်း, Aircon များတပ်ဆင်ထားပြီး သပ်ရပ်သေသလှပါသည်။  \r\n✔️မီးဖိုချောင်​ -  အပေါ် အောက် မီးဖိုချောင်သုံးဗီဒို ,လျှပ်စက်မီးဖို, ဘေစင်, အညှော်စုပ်စက်, Non-slip type ကြွေပြားခင်းပေးထားပြီးနံရံတွင် မျက်နှာကျက်အထိကြွေပြားတပ်ဆင်ပေးထားတဲ့အတွက် လုံခြုံမူကို အဓိကထားပါသည်။ \r\n✔️ရေချိုးခန်း​ - ဘေစင်,Stand Shower , ဘိုထိုင် ,Non-slip type ကြွေပြားကြမ်းခင်း ခင်းပေးထားပြီး အခန်းပတ်လည်တွင်ကြွေပြားတပ်ဆင်ပေးထားပြီး ပစ္စည်းအကောင်းစားများသာ သုံးထားပါသည်။ \r\n ❇️Security System အနေနဲ့❇️\r\n', '1_1603693041.jpg', '10_1603693041.jpg', '9_1603693041.jpg', '8_1603693041.jpg', '6_1603693041.jpg', '7_1603693041.jpg', '3_1603693041.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Condo', 0, '2020-10-26 06:17:21', '2020-10-26 06:17:21'),
(69, 'Ayar Chan Tha Condo for rent / Sell ', 'New Dagon East', '900 Lakhs ( Negotiable )  ', '1 MBR , 1BR', '600 sqft', 'Ayar Chan Tha Condo for rent / Sell \r\n600 sqft, \r\n9th floor, coner room \r\n1 Master bedroom, 1 single bedroom \r\nCar parking, Swimming pool, Gym \r\nAyar Wun Road Dagon Sate Kan Township \r\nFor rent : 5 Lakhs  per month \r\nFor Sell : 900 Lakhs ( Negotiable ) \r\nHave to pay agent fees \r\n09409789556 / 09409789515 \r\nCity Home Property', '1_1608642314.jpg', '2_1608642314.jpg', '3_1608642314.jpg', '4_1608642314.jpg', '5_1608642314.jpg', '6_1608642314.jpg', '7_1608642314.jpg', '8_1608642314.jpg', '_1608642314.', '_1608642314.', '_1608642314.', '_1608642314.', '_1608642314.', '_1608642314.', '_1608642314.', '_1608642314.', '_1608642314.', '_1608642314.', '_1608642314.', '_1608642314.', 'Condo', 0, '2020-12-22 13:05:14', '2020-12-22 13:05:14'),
(70, 'North Okkalapa Thudhamma Road', 'North Okkalapa', '12000 Lakhs ( Negotiable ) ', '', '2560 sqft', '4.5 RC House for sale\r\n It is located on North Okkalapa Thudhamma Road\r\n Land size: 32\'80 \'\r\n House width 30.50 feet\r\n 4.5RC\r\n There is another 30 feet land \r\n Large front parking\r\n Grant land\r\n Turn east\r\n House term 5 years\r\n Sale: 12,000 Lakhs (Negotiable)\r\n Will it be used for the head office or for school training?  What a wonderful place to be!\r\n 09409789556/09409789515', '1_1608642780.jpg', '2_1608642780.jpg', '3_1608642780.jpg', '4_1608642780.jpg', '5_1608642780.jpg', '6_1608642780.jpg', '7_1608642780.jpg', '8_1608642780.jpg', '9_1608642780.jpg', '_1608642780.', '_1608642780.', '_1608642780.', '_1608642780.', '_1608642780.', '_1608642780.', '_1608642780.', '_1608642780.', '_1608642780.', '_1608642780.', '_1608642780.', 'Private House', 0, '2020-12-22 13:13:00', '2020-12-22 13:13:00'),
(71, 'On South Okkalapa Parami Road', 'South Okkalapa', '6500 Lakhs ( Negotiable )', '1 Master Bedroom and 2 Bedroom', '1200sqft', 'On South Okkalapa Parami Road\r\n 2 RC house\r\n Land size: 20\'60 \'\r\n Owner name\r\n 1 master bedroom 2 bedroom\r\n There will be two meters\r\n 15\'18 \'feet indoor shoe store is currently open.\r\n This is a good place to rent a restaurant / phone shop / pharmacy / bank ...\r\n Price for sale: 6500 lakhs\r\n Rental price: 30 lakhs per month (5 years and above)\r\n\r\n for more info: 09409789556/09409789515\r\nCity Home Property ', '1_1608695494.jpg', '2_1608695494.jpg', '_1608695494.', '_1608695494.', '_1608695494.', '_1608695494.', '_1608695494.', '_1608695494.', '_1608695494.', '_1608695494.', '_1608695494.', '_1608695494.', '_1608695494.', '_1608695494.', '_1608695494.', '_1608695494.', '_1608695494.', '_1608695494.', '_1608695494.', '_1608695494.', 'Private House', 0, '2020-12-23 03:51:34', '2020-12-23 03:51:34'),
(72, 'Mayangone Township (7 miles) Kone Myint Yeik Thar Street', 'Mayangon', '10000 Lakhs ( Negotiable ) ', ' 4MBR, 1SBR, 5 Bathrooms', '2800 sqft', 'For sale\r\nMayangone Township (7 miles) Kone Myint Yeik Thar Street\r\n 2.5 RC\r\n You will have your private way\r\n Land size 40 \'× 70\' (2800 sq-ft)\r\n 4MBR, 1SBR, 5 Bathrooms\r\n Fully furnished and ready to live.\r\n ', '1_1608695900.jpg', '2_1608695900.jpg', '4_1608695900.jpg', '5_1608695900.jpg', '6_1608695900.jpg', '7_1608695900.jpg', '8_1608695900.jpg', '9_1608695900.jpg', '10_1608695900.jpg', '11_1608695900.jpg', '12_1608695900.jpg', '3_1608695900.jpg', '_1608695900.', '_1608695900.', '_1608695900.', '_1608695900.', '_1608695900.', '_1608695900.', '_1608695900.', '_1608695900.', 'Private House', 0, '2020-12-23 03:58:20', '2020-12-23 03:58:20'),
(73, ' Pyay Thar Yar Road', 'Yankin', '16500 Lakhs ( Negotiable ) ', ' 4Master bedroom', '4767 sqft', 'New 3 storey house for sale in Pyay Thar Yar Road\r\n Land 40x67\r\n House 4767 sqft\r\n House (34x48)\r\n New 3 storey building\r\n Grant Land \r\n 4Master bedroom\r\n 2living room\r\n 1dining room\r\n 1prayer room\r\n 1dry kitchen\r\n 1Wet kitchen\r\n 1study room\r\n 1Mate room\r\n 1Driver room\r\n Price: 16500 Lakhs ( Negotiable ) \r\n If you are interested, you can request for more picture.\r\n\r\nfor more info: 09409789556 / 09409789515\r\ninfo@cityhomeproperty.com\r\nwww.cityhomeproperty.com \r\nCity Home Property Co.,Ltd \r\n#Real Estate In Yangon Myanmar ( Private House for Sell ) ', '1_1608696189.jpg', '2_1608696189.jpg', '3_1608696189.jpg', '4_1608696189.jpg', '5_1608696189.jpg', '6_1608696189.jpg', '_1608696189.', '_1608696189.', '_1608696189.', '_1608696189.', '_1608696189.', '_1608696189.', '_1608696189.', '_1608696189.', '_1608696189.', '_1608696189.', '_1608696189.', '_1608696189.', '_1608696189.', '_1608696189.', 'Private House', 0, '2020-12-23 04:03:09', '2020-12-23 04:03:09'),
(74, 'Golden City Condo for Sale', 'Yankin', '4700 Lakhs ( negotiable ) ', ' (3 bedroom + 1 maid room)', '1500 sqft', 'Golden City Condo for Sale\r\n 1500 sqft , Building 7\r\n 27th floor\r\n (3 bedroom + 1 maid room)\r\n Gym, Swimming pool All free Shwedagon Pagoda view.\r\n This is a new near swimming pool building.\r\n (Fully furniture included)\r\n Sell: 4700 Lakhs ( negotiable ) \r\n\r\nfor more info: 09409789556 / 09409789515\r\ninfo@cityhomeproperty.com\r\nwww.cityhomeproperty.com \r\nCity Home Property Co.,Ltd \r\n#Real Estate In Yangon Myanmar ( Luxury condo for Sell )', '1_1608696454.jpg', '2_1608696454.jpg', '3_1608696454.jpg', '4_1608696454.jpg', '5_1608696454.jpg', '6_1608696454.jpg', '7_1608696454.jpg', '8_1608696454.jpg', '9_1608696454.jpg', '10_1608696454.jpg', '11_1608696454.jpg', '12_1608696454.jpg', '_1608696454.', '_1608696454.', '_1608696454.', '_1608696454.', '_1608696454.', '_1608696454.', '_1608696454.', '_1608696454.', 'Condo', 0, '2020-12-23 04:07:34', '2020-12-23 04:07:34'),
(75, 'Pazundaung 51 upper street Mini Condo for sell ', 'Pazundaung', '2000 Lakhs ( Negotiable ) ', '1 Master Bedroom and 1 Office room ', '1914 sqft ', 'ပုဇွန်တောင်မြို့နယ် မီနီကွန်ဒိုအရောင်း\r\n', '1_1608697210.jpg', '2_1608697210.jpg', '3_1608697210.jpg', '4_1608697210.jpg', '5_1608697210.jpg', '6_1608697210.jpg', '7_1608697210.jpg', '8_1608697210.jpg', '9_1608697210.jpg', '10_1608697210.jpg', '11_1608697210.jpg', '12_1608697210.jpg', '13_1608697210.jpg', '14_1608697210.jpg', '_1608697210.', '_1608697210.', '_1608697210.', '_1608697210.', '_1608697210.', '_1608697210.', 'Condo', 0, '2020-12-23 04:20:10', '2020-12-23 04:20:10'),
(76, 'ကျွန်းတောလမ်းသွယ်', 'Sanchaung', '3995 Lakhs ( Negotiable ) ', '1 Master Bedroom and 2 Bedroom', '1250 sqft', 'စမ်းချောင်းမြို့နယ် \r\nကျွန်းတောလမ်းသွယ်\r\n25\'x50\' မြေကျယ်\r\n23\'x45\' အိမ်ကျယ်\r\n1MBR , 2 BR, 1 Ph, 2 Aircon \r\nRC 2.5 တိုက်သက်တမ်း ၅နှစ်ကျော်\r\nဘိုးဘွားပိုင်(အမည်ပေါက်)\r\nTime City-Junction Squareနီး\r\nကိုယ်ပိုင်အဝီစိ,ရေမော်တာ\r\nရောင်း : သိန်း ၃၉၉၅ ညှို့နှိုင်း \r\n\r\nfor more info: 09409789556 / 09409789515\r\ninfo@cityhomeproperty.com\r\nwww.cityhomeproperty.com \r\nCity Home Property Co.,Ltd \r\n#Real Estate In Yangon Myanmar ( Private House for Sell )', '1_1608699816.jpg', '2_1608699816.jpg', '3_1608699816.jpg', '4_1608699816.jpg', '5_1608699816.jpg', '6_1608699816.jpg', '7_1608699816.jpg', '8_1608699816.jpg', '9_1608699816.jpg', '00_1608699816.jpg', '01_1608699816.jpg', '12_1608699816.jpg', '13_1608699816.jpg', '14_1608699816.jpg', '_1608699816.', '_1608699816.', '_1608699816.', '_1608699816.', '_1608699816.', '_1608699816.', 'Private House', 0, '2020-12-23 05:03:37', '2020-12-23 05:03:37'),
(77, 'Emerald Bay Condo ', 'Thaketa', '1 sfqt 190- $230 ', '3 MBR , 1 BR ', '1535  sqft', 'အားလုံးပဲ မင်္ဂလာအပေါင်းနဲ့ ပြည့်စုံကြပါစေ ', '1_1608700410.jpg', '2_1608700410.jpg', '3_1608700410.jpg', '4_1608700410.jpg', '5_1608700410.jpg', '6_1608700410.jpg', '7_1608700410.jpg', '8_1608700410.jpg', '9_1608700410.jpg', '10_1608700410.jpg', '11_1608700410.jpg', '12_1608700410.jpg', '_1608700410.', '_1608700410.', '_1608700410.', '_1608700410.', '_1608700410.', '_1608700410.', '_1608700410.', '_1608700410.', 'Condo', 0, '2020-12-23 05:13:30', '2020-12-23 05:13:30'),
(78, 'မြောက်ဥက္ကလာ သုတမာလမ်းမကြီးအနီးရှိ လုံးချင်းတိုက်သစ်လေးအမြန်ရောင်းပါမည် ', 'North Okkalapa', '3000 Lakhs ( Negotiable ) ', '2 Master bedroom, Study room, 2 single room', '1200sqft', 'မြောက်ဥက္ကလာ သုတမာလမ်းမကြီးအနီးရှိ လုံးချင်းတိုက်သစ်လေးအမြန်ရောင်းပါမည် \r\n၂၀\'၆၀\' မြေ\r\nဂရမ်အမည်ပေါက်၊ အရှုပ်ရှင်းလုံးဝကင်းသည် \r\n၁၈\' ၅၄\' အိမ်အကျယ် \r\nGym ခန်းနှင့် Penthouse အပါဆို ၄ ထပ်တိုက်သစ်ဖြစ်ပါတယ် ... အိမ်ရှေ့ ကားပါကင် နေရာ ရှိပါမယ်။ \r\n2 Master bedroom, Study room, 2 single room, ဘုရားခန်းကျယ် များပါရှိပြီး ဧည့်ခန်းကျယ်ကျယ်လေးနဲ့ နေလို့ထိုင်လို့အရမ်းကောင်းပါတယ် .... ဧည့်ခန်းပေါ်အမြင့် ၁၇\' ပေ ရှိတော့ နေဘယ်လောက်ပူပူဧည့်ခန်းကတော့ အေးစိမ့်နေတုန်းပဲနော်။ \r\nခြေလှမ်း ၂၀ ခန့်သာလျှောက်လိုက်တာနဲ့ လမ်းမကြီးကိုရောက်သွားမယ် ... သွားလာရလွယ်ကူပြီး ရပ်ကွက်သန့် လူသန့်နေထိုင်ရာ အရပ်ဖြစ်ပါတယ် ။ \r\n\r\nတိုက်သက်တမ်း ၇ လ ခန့်သာ ရှိပါသည်။ \r\nငလျှင်ဒဏ်ကို ကြန့်ကြန့်ခံနိုင်ဖို့ရန်အတွက် foundation 10 ပေ ( တစ်ခန်းစာ ) အကုန်ကျခံပြီးဆောက်ထားပါသည်။ အိမ်တွင်းပစ္စည်းများ အကောင်းစားသာ သုံးထားပါသည်။ \r\n\r\nCCTV 8 လုံးတပ်ဆင်ထားသောကြောင့် လုံခြုံမှုပိုစိတ်ချရတာပေါ့... Gym အခန်းလေးရှိတဲ့အတွက် အပြင်သွား ငွေကုန် အချိန်ကုန်ခံပြီးကစားစရာမလိုပဲ ကိုယ့်အိမ်မှာ အချိန်ရတာနဲ့ ဘယ်အချိန်ကစားကစား အေးဆေးပါနော် .... \r\nဘာလို့ဈေးအရမ်းတန်တာလဲလို့ မမေးပါနဲ့နော် ပိုင်ရှင် နှိုင်ငံခြားကို သမီးကျောင်းကိစ္စနဲ့ ကာလကြာတစ်ခု သွားနေပေးရမှာမို့လို့ အများကြီးခေါ်ထားပြီး အချိန်ကုန်ခံ ထပ်ခါထပ်ခါဈေးညှို့ရမှာထက် ဖြစ်နိုင်မည့်ဈေးတန်းတစ်ခုကိုသာ သတ်မှတ်ပေးထားတာပါ ။ \r\nသိန်း : ၃၀၀၀ ( ညှို့နှိုင်း ) \r\n\r\nကယ် ... အိမ်လေးကတော့ ready ဖြစ်နေပြီ ဘယ်အချိန်ကြည့်ချင်တယ်ဆိုတာကိုသာပြောပါနော် ... ပေးရတဲ့ဈေးထက်စာရင် စိတ်ကျေနပ်မှုလုံးဝ ရ စေရမယ် ... \r\n\r\nfor more info: 09409789556 / 09409789515\r\ninfo@cityhomeproperty.com\r\nwww.cityhomeproperty.com \r\nCity Home Property Co.,Ltd \r\n#Real Estate In Yangon Myanmar ( Private House for Sell )', '1_1608700645.jpg', '2_1608700645.jpg', '3_1608700645.jpg', '4_1608700645.jpg', '6_1608700645.jpg', '7_1608700645.jpg', '8_1608700645.jpg', '9_1608700645.jpg', '10_1608700645.jpg', '_1608700645.', '_1608700645.', '_1608700645.', '_1608700645.', '_1608700645.', '_1608700645.', '_1608700645.', '_1608700645.', '_1608700645.', '_1608700645.', '_1608700645.', 'Private House', 0, '2020-12-23 05:17:25', '2020-12-23 05:17:25'),
(79, 'သာကေတမြို့နယ်၊ ရွှေသ​ပြေရိပ်မွန်', 'Thaketa', '4900 Lakhs ( Negotiable ) ', '3 MBR , 1 BR ', '3600 sqft ', 'လူကြီးမင်းတို့ စိတ်ငြိမ်ပြီးအေးချမ်းစွာနေဖို့ ဈေးတန်လုံးချင်း ရှာနေပါသလား ? \r\nသာကေတမြို့နယ်၊ ဈေးတန် လုံးချင်း အမြန်ရောင်းမည် \r\nမြေအကျယ် (၆၀ ပေ) ပတ်လည်\r\n✔️ ရွှေသပြေရိပ်မွန် အိမ်ယာ ( ၁ ) \r\n✔️နှစ် (၆၀) ဂရံ အမည်ပေါက်\r\n✔️RC (၂) တိုက်\r\n✔️MB (၃) ခန်း\r\n✔️Single (၁) ခန်း\r\n✔️အပေါ်ကျွန်းပါကေး \r\n✔️ကျွန်းလှေကား ကျွန်းလက်ရန်း\r\n✔️အပေါ် အောက် ဧည့်ခန်း (၂) ခန်း\r\n✔️ရေချိုးခန်း အိမ်သာ (၄) လုံး အားလုံး ဗိုလ်ထိုင်\r\n✔️Samsung Air Con Split Type (၄) လုံး\r\n✔️ခြင်လုံဇကာ ၊ Sun Shade တပ်ပြီး \r\n✔️အိမ်ဖော် mate room သီးသန့် နဲ့ အိမ်သာ သီးသန့်\r\nခြံကျယ် ရှေ့မြေ ဘေးမြေ ကျန်\r\n✔️တိတ်ဆိတ်ပြီး မီးမပျက် ရေမပျက်ပါ၊ ရေ (၂)မျိုး ချိုးဖြူ နဲ့ အဝီစိ (၂) မျိူးပါ။\r\n✔️ ခြံထဲကား ၃ စီး ရပ်လို့ရ\r\n', '1_1608989787.jpg', '2_1608989787.jpg', '3_1608989787.jpg', '4_1608989787.jpg', '5_1608989787.jpg', '6_1608989787.jpg', '7_1608989787.jpg', '_1608989787.', '_1608989787.', '_1608989787.', '_1608989787.', '_1608989787.', '_1608989787.', '_1608989787.', '_1608989787.', '_1608989787.', '_1608989787.', '_1608989787.', '_1608989787.', '_1608989787.', 'Private House', 0, '2020-12-26 13:36:27', '2020-12-26 13:36:27'),
(80, 'Hledan Nawarat Condo For Sale', 'Kamayut', ' 2300 Lakhs (Negotiable)', '1 MBR, 2 BR ', '1171 sqft', 'Nawarat Condo For Sale❗️\r\n(Fully decorated..fully furnished)\r\n3 Bedrooms at Hledan,Kamaryut!\r\nLiving area 1170 sqft\r\n1 Master Bedroom\r\n2 single bedrooms\r\n1 maid room\r\n6th floor \r\nKitchen area \r\nBath Room& WC (2 )\r\n(Smart Toilet Auto Washing Machine)\r\nAircon (5) \r\nCCTV (4)\r\nAll Loose Furniture included\r\n❗️For sale 2300 Lakhs (Negotiable)\r\nInstallment payment available \r\nFacilities \r\nAdult/Baby Swimming Pool \r\nGym\r\nCar Parking (Basement, Infront/around Building)\r\n24 hrs (Security Service, Backup Generator)\r\n24 hr Card System Lift Service (2) Units.\r\nWater Heater & Cooler,\r\nSky Net DTH & MyanmarNet Wifi\r\nClose to\r\n-လှည်းတန်း စံရိပ်ငြိမ် Gamone Pwint\r\n-PISM International School\r\n-NELC International Preschool\r\n-Hledan Wet Market\r\n-Junction Square & Time City\r\n-Hledan Sein Gay Har \r\n-Thukha kabar Hospital\r\n-Pro Mart (Korea-Japan Mart)\r\n-Orange City Mart\r\n- Active Gym, Delta Fitness \r\n❤ဒီ အခန်းကို ပိုင်ရှင်ကိုယ်တိုင် အမြတ်တနိုး \r\nတန်ဖိုးထားပြီး ရှယ် ပြင်ထားတဲ့ အိမ်​လေးမို့ \r\n၀ယ်သူ မိတ်​ဆွေလဲ စိတ်ချမ်းသာစွာ ​နေထိုင်နိုင်ရမယ့်\r\nနေရာ​လေးဖြစ်ပါမယ်... \r\nန၀ရတ် ကွန်ဒို၏ တည်​နေရာသည် \r\nလမ်းပန်းဆက်သွယ်​ရေး အတွက် က​လေး​များရဲ့ \r\nပညာ​ရေးအတွက်​​ရော အလွန် အဆင်​ပြေပါတယ်... \r\nလမ်းမကြီး​ပေါ် မဟုတ်​​တော့..\r\nကား ဆူညံသံမရှိပဲ...လူကြီးမင်းအနေဖြင့်\r\nတိတ်ဆိတ်ငြိမ်သက်ပြီး အေးချမ်းစွာ \r\nနေထိုင်လို့ ရပါမယ်ဗျ ... \r\nHello ... လိုက်တော့နော် \r\n\r\nfor more info: 09409789556 / 09409789515\r\ninfo@cityhomeproperty.com\r\nwww.cityhomeproperty.com \r\nCity Home Property Co.,Ltd \r\n#Real Estate In Yangon Myanmar ( Private House for Sell )\r\n', '1_1608989948.jpg', '2_1608989948.jpg', '3_1608989948.jpg', '4_1608989948.jpg', '5_1608989948.jpg', '6_1608989948.jpg', '7_1608989948.jpg', '_1608989948.', '_1608989948.', '_1608989948.', '_1608989948.', '_1608989948.', '_1608989948.', '_1608989948.', '_1608989948.', '_1608989948.', '_1608989948.', '_1608989948.', '_1608989948.', '_1608989948.', 'Condo', 0, '2020-12-26 13:39:08', '2020-12-26 13:39:08'),
(81, 'သာကေတ ရတနာလမ်းမမေးတင်', 'Thaketa', '15000 Lakhs ( Negotiable ) ', '6 bedroom ', '18000 sqft ', 'စီးပွါးရေးလုပ်ရန် နေရာကောင်း လမ်းမမေးတင်ဂိုဒေါင် / မြေကွက် ရောင်းငှါးများ နဲ့ မိတ်ဆက်ပါရစေ \r\nလမ်းမမေးတင်မှာ ဂျပန် style 18000 sqft ဂိုဒေါင်းကြီးကို တစ်ပေပတ်လည် ၈၄,၀၀၀ ကျပ်နဲ့ အမြန်ရောင်းမည် \r\nသာကေတ ရတနာလမ်းမမေးတင်\r\nရှေ့ ၁၈၀\'  နောက် ၁၀၀\' မြေပေါ်မှာ ဂျပန် style ဂိုဒေါင်အပြည့်ဆောက်ထားပါသည်။ \r\nဘေးမှာ ၃ထပ်တိုက် ၂ လုံးရှိပြီး အနောက်မှာ ၁ထပ်တိုက်ရှိပါသည် ... အလယ်မှာ ကျယ်ဝန်းသော ၂ ထပ်ဂိုဒေါင်ထပ်ရှိပါအုန်းမည်။ အားလုံးတစ်ဆက်ထဲဆောက်ထားပါသည်။ \r\nအတွင်းပိုင်းအားလုံး အဆင့်မြင့် ကွန်ကရစ် ခင်းကျင်းထားပြီး လက်ရှိ လုပ်ငန်းကြီး လုပ်နေပါသည်။ \r\nတွဲကားကြီးများ သွားလာ လို့အဆင်ပြေသည့်အပြင် ရေမီး အရမ်းကောင်းပါသည်။ \r\n315 KVA  ၂ လုံးပါမည် ၊ မီးစက်တစ်လုံးလည်းရှိပါသေးသည်။ Aircon များ ပါရှိပြီး ပစ္စည်းတွေကို လိုရင်ထည့်ပေးနိုင်သည်။ \r\nဂရန်အမည်ပေါက်ပြီး အရှုပ်ရှင်းလုံးဝကင်းပါသည်။ \r\nရောင်းဈေး : သိန်း ၁၅၀၀၀ (ညှို့နှိုင်း)\r\nအငှါး တစ်လ : သိန်း ၁၅၀ ( ညှို့နှိုင်း )\r\n-------------------\r\nသာကေတ ရတနာလမ်းမမေးတင် ဂိုဒေါင်အသစ်စက်စက်ကလေး အမြန်ငှါးမည်\r\nပေ ၁၀၀ ပတ်လည် မြေပေါ်မှာ ဂိုဒေါင် အပြည့်နီးပါး ဆောက်ထားသည် ။  တစ်ခြမ်း ထပ်ခိုးပါမည်။ \r\nသန့်စင်ခန်း : ၅ ခု ရှိပါသည်။ \r\nရေမီး အစုံရပါမည်။ ပါဝါမီတာ နှင့် Transformer မရှိပါ။\r\nတွဲကားကြီးများ ဝင်ထွက်ပြုလုပ်နိုင်သည်။ \r\nအငှါး တစ်လ : သိန်း ၆၀ \r\n----------------------\r\nသာကေတ ရတနာလမ်းမမေးတင် ရတနာ အဆင့်မြင့်အိမ်ယာ ၁ နားရှိ ၂ ထပ်လုံးချင်း အမြန် ငှါးမည်\r\nနေရာကောင်းမွန်ပြီး ခြံထဲ စားပင်တွေစိုက်ပျိုးထားပါသည် ။  ဘေးမှာ အလုပ်သမားနေဖို့ တိုက်ကလေးထပ်ရှိပါသည်။ \r\nတစ်လ : ၁၈ သိန်း ညှို့နှိုင်း \r\n\r\nfor more info: 09409789556 / 09409789515\r\ninfo@cityhomeproperty.com\r\nwww.cityhomeproperty.com \r\nCity Home Property Co.,Ltd \r\n#Real Estate In Yangon Myanmar ( Private House for Sell )\r\n', '0_1608990176.jpg', '0_1608990176.jpg', '_1608990176.', '_1608990176.', '_1608990176.', '_1608990176.', '_1608990176.', '_1608990176.', '_1608990176.', '_1608990176.', '_1608990176.', '_1608990176.', '_1608990176.', '_1608990176.', '_1608990176.', '_1608990176.', '_1608990176.', '_1608990176.', '_1608990176.', '_1608990176.', 'Industrial Zone and Warehouse', 0, '2020-12-26 13:42:56', '2020-12-26 13:42:56'),
(82, 'ရတနာလမ်း mini condo', 'Sanchaung', '1450 Laks ( Negotiable ) ', '1 Master 2 single ', '1768 sqft ', 'မြေနီကုန်း ရတနာလမ်း mini condo အမြန်ရောင်းမည်\r\nCity Mart အနီး မြေနီဂုံးတံတားနဲ့ နီးပါသည် \r\n34\'52\' \r\n1 Master 2 single \r\n8 floor \r\nAircon 4 \r\nWater heater 2 \r\nFully furnished \r\nရောင်း : ၁၄၅၀ ပါးပါးလျှော့\r\n\r\nfor more info: 09409789556 / 09409789515\r\ninfo@cityhomeproperty.com\r\nwww.cityhomeproperty.com \r\nCity Home Property Co.,Ltd \r\n#Real Estate In Yangon Myanmar ( Private House for Sell )', '1_1608990475.jpg', '2_1608990475.jpg', '3_1608990475.jpg', '4_1608990475.jpg', '5_1608990475.jpg', '_1608990475.', '_1608990475.', '_1608990475.', '_1608990475.', '_1608990475.', '_1608990475.', '_1608990475.', '_1608990475.', '_1608990475.', '_1608990475.', '_1608990475.', '_1608990475.', '_1608990475.', '_1608990475.', '_1608990475.', 'Condo', 0, '2020-12-26 13:47:55', '2020-12-26 13:47:55'),
(83, 'သာကေတမြို့နယ်၊ ရွှေသ​ပြေရိပ်မွန်', 'Thaketa', '3900 Lakhs (Negotiable)', '3 MBR , 1 BR ', '3600 sqft ', 'လူကြီးမင်းတို့ စိတ်ငြိမ်ပြီးအေးချမ်းစွာနေဖို့ ဈေးတန်လုံးချင်း ရှာနေပါသလား ? \r\nသာကေတမြို့နယ်၊ ဈေးတန် လုံးချင်း အမြန်ရောင်းမည် \r\nမြေအကျယ် (၆၀ ပေ) ပတ်လည်\r\n✔️ ရွှေသပြေရိပ်မွန် အိမ်ယာ ( ၁ ) \r\n✔️နှစ် (၆၀) ဂရံ အမည်ပေါက်\r\n✔️RC (၂) တိုက်\r\n✔️MB (၃) ခန်း\r\n✔️Single (၁) ခန်း\r\n✔️အပေါ်ကျွန်းပါကေး \r\n✔️ကျွန်းလှေကား ကျွန်းလက်ရန်း\r\n✔️အပေါ် အောက် ဧည့်ခန်း (၂) ခန်း\r\n✔️ရေချိုးခန်း အိမ်သာ (၄) လုံး အားလုံး ဗိုလ်ထိုင်\r\n✔️Samsung Air Con Split Type (၄) လုံး\r\n✔️ခြင်လုံဇကာ ၊ Sun Shade တပ်ပြီး \r\n✔️အိမ်ဖော် mate room သီးသန့် နဲ့ အိမ်သာ သီးသန့်\r\nခြံကျယ် ရှေ့မြေ ဘေးမြေ ကျန်\r\n✔️တိတ်ဆိတ်ပြီး မီးမပျက် ရေမပျက်ပါ၊ ရေ (၂)မျိုး ချိုးဖြူ နဲ့ အဝီစိ (၂) မျိူးပါ။\r\n✔️ ခြံထဲကား ၃ စီး ရပ်လို့ရ\r\n', '11_1609948339.jpg', '12_1609948339.jpg', '13_1609948339.jpg', '14_1609948339.jpg', '15_1609948339.jpg', '16_1609948339.jpg', '17_1609948339.jpg', '_1609948339.', '_1609948339.', '_1609948339.', '_1609948339.', '_1609948339.', '_1609948339.', '_1609948339.', '_1609948339.', '_1609948339.', '_1609948339.', '_1609948339.', '_1609948339.', '_1609948339.', 'Private House', 0, '2021-01-06 15:52:19', '2021-01-06 15:52:19'),
(84, 'တောင်ဥက္ကလာ  သံသုမာလမ်းမပေါ် ကြီးပွားရေးရပ်ကွက်', 'South Okkalapa', '4000 Lakhs ( Negotiable ) ', '2 MBR ', '1919 sqft', 'တောင်ဥက္ကလာ Shop house ရောင်းမည် \r\nသံသုမာလမ်းမပေါ် ကြီးပွားရေးရပ်ကွက် \r\nအထင်ကရလဘ္ဘရည်ဆိုင်နား \r\nသွားလာရ လွယ်ကူပြီး အိမ်တွင်း စီးပွားလုပ်လို့ရပါသည်\r\nCompany ရုံးခန်းများအတွက်လည်း အရမ်းအဆင်ပြေပါသည်\r\nပတ်ဝန်းကျင်သန့်ပြီးအိမ်လည်း အလွန်သန့်ပါသည် \r\nမြေအကျယ် - ၁၉\' ၁၀၁\' ( မြေပို ၂၃\' လောက်ထပ်ပါသေးသည် ) \r\nအိမ်အကျယ် - ၁၉\' ၆၅\' ( 1235 sqft ) \r\n2 big master bedroom and store room \r\n4 bathroom and 4 toilet \r\n5 Aircon \r\n12 CCTV \r\n25 KVA ( ပါဝါမြင်းကောင်ရေ ၃၀ အား လုပ်ငန်းသုံးလို့ရ )\r\nတစ်အိမ်လုံးကြွေပြားအကောင်းစားကပ်ထားသည် \r\nကြမ်းခင်းကို ပါကေး အသုံးပြုထားပါသည် \r\nဂျိုးဖြူရေ \r\nထမင်းစားခန်းနှင့် မီးဖိုခန်း သပ်သပ်စီ ရှိသည် \r\nအိမ်အနောက်ဘက် မှာ ရေချိုးခန်း အိမ်သာ ပါသည်\r\nကားပါကင် ၄ စီးစာ ရသည် \r\nဂရမ်အမည်ပေါက် အရှုပ်ရှင်းကင်း \r\nရောင်း : သိန်း ၄၀၀၀ ( ညှို့ နှိုင်း ) \r\nfor more info: 09409789556 / 09409789515\r\ninfo@cityhomeproperty.com\r\nwww.cityhomeproperty.com \r\nCity Home Property Co.,Ltd \r\n#Real Estate In Yangon Myanmar ( Private House for Sell )', '1_1609948518.jpg', '2_1609948518.jpg', '3_1609948518.jpg', '4_1609948518.jpg', '5_1609948518.jpg', '6_1609948518.jpg', '_1609948518.', '_1609948518.', '_1609948518.', '_1609948518.', '_1609948518.', '_1609948518.', '_1609948518.', '_1609948518.', '_1609948518.', '_1609948518.', '_1609948518.', '_1609948518.', '_1609948518.', '_1609948518.', 'Shop and Store', 0, '2021-01-06 15:55:18', '2021-01-06 15:55:18'),
(85, 'Delta Plaza Condo for sell ', 'Yankin', '2350 Lakhs ( Negotiable ) ', '2 MBR , 1 BR ', '1500 sqft', 'Delta Plaza Condo for sell \r\n3 Bedrooms\r\nပေ ၃၀’ x ပေ ၅၀’ ( 1500 sqft ) \r\nMaster bedroom ၂ ခန်း\r\nSingle bedroom ၁ ခန်း\r\nဘုရားခန်း\r\nဧည့်ခန်း\r\nထမင်းစားခန်း\r\nမီးဖိုချောင် တစ်ခန်း\r\nAircon ၅ လုံး\r\nမီးအားမြှင့်စက် ၁ လုံး\r\nလိုင်းဖုံး ၁ လုံး\r\nFTTH Internet ၁ စုံ\r\nကုတင် ၃ လုံး\r\nထမင်းစား စားပွဲ ၁ စုံ ကုလားထိုင် ၆ လုံးပါ\r\nကျွန်းပါကေး ၊ ကျွန်းတံခါး ၊ ကျွန်း ကုတင် ၊ ကျွန်း ထမင်းစားပွဲနှင့် ကုလားထိုင် ၊ ကျွန်းဘုရားစင်အကြီးစား၊ ကျွန်းဘီဒို ၊ ကျွန်း ဧည့်ခန်း show case များ \r\nအပြည့်အစုံ ပါဝင်ပါသည်။\r\nအသင့်တက်နေနိုင်ပါတယ်။\r\nကားပါကင်ပါပါတယ်\r\nDelta plaza အရှေ့ဆုံးက တိုက်ပါ\r\nရွှေဂုံတိုင်လမ်းမကြီးပေါ်မှာရှိပြီး သွားရလာရ အရမ်းကောင်းပါသည် ။ \r\nမြို့ထဲကို ၁၀ မိနစ်၊ လေဆိပ်ကို ၂၀ မိနစ် ၊ Ocean Super market ကို ၃ မိနစ်၊ ရွှေတိဂုံဘုရားကို ၅ မိနစ် ၊ Myanmar Plaza ကို ၅ မိနစ် ဆိုရောက်ပါပြီ, KBN bank နဲ့လည်း နီးပါသည်\r\nအရောင်း- ၂၃၅၀ သိန်း ( ညှို့နှိုင်း ) \r\nfor more info: 09409789556 / 09409789515\r\ninfo@cityhomeproperty.com\r\nwww.cityhomeproperty.com \r\nCity Home Property Co.,Ltd \r\n#Real Estate In Yangon Myanmar ( Delta Plaza Condo for Sell )\r\n', '3_1609948703.jpg', '4_1609948703.jpg', '5_1609948703.jpg', '6_1609948703.jpg', '7_1609948703.jpg', '0_1609948703.jpg', '00_1609948703.jpg', '_1609948703.', '_1609948703.', '_1609948703.', '_1609948703.', '_1609948703.', '_1609948703.', '_1609948703.', '_1609948703.', '_1609948703.', '_1609948703.', '_1609948703.', '_1609948703.', '_1609948703.', 'Condo', 0, '2021-01-06 15:58:23', '2021-01-06 15:58:23'),
(86, 'မြောက်ဥက္ကလာ သီရိကန်သာအဆင့်မြင့်အိမ်ရာ အနီး ', 'North Okkalapa', '3500 Lakhs ( Negotiable ) ', '', '7210 sqft ', 'မြေကွက်ဈေးတန် အမြန်ရောင်းမည် \r\nမြေကွက်အကျယ် ၁၀၃’ ၇၀’\r\nနေရာ မြောက်ဥက္ကလာ သီရိကန်သာအဆင့်မြင့်အိမ်ရာ\r\nအနီး \r\nJCGV ရုပ်ရှင်ရုံအနီး \r\nအာကာလမ်း\r\nဂရမ်အမည်ပေါက် \r\nရောင်းဈေး : သန်း ၃၅၀၀ ( ညှို့နှိုင်း ) \r\n (2RCသိန်း၂ထောင်ပတ်လည်/ကွန်ဒိုသိန်း၁၅၀၀ပတ်လည်နဲ့အလိုက်ယူပြီးလည်းလဲချင်လျှင် ရပါတယ် ) \r\nfor more info: 09409789556 / 09409789515\r\ninfo@cityhomeproperty.com\r\nwww.cityhomeproperty.com \r\nCity Home Property Co.,Ltd \r\n#Real Estate In Yangon Myanmar ( Land for Sell )', '1_1609948909.jpg', '2_1609948909.jpg', '1_1609948909.jpg', '2_1609948909.jpg', '1_1609948909.jpg', '_1609948909.', '_1609948909.', '_1609948909.', '_1609948909.', '_1609948909.', '_1609948909.', '_1609948909.', '_1609948909.', '_1609948909.', '_1609948909.', '_1609948909.', '_1609948909.', '_1609948909.', '_1609948909.', '_1609948909.', 'Land', 0, '2021-01-06 16:01:49', '2021-01-06 16:01:49'),
(87, 'ရန်ကင်း မြို့ ကမ္ဘာအေးဘုရား  The Central Luxury Condo ', 'Yankin', '4000 Lakhs + ', '1 BR , 2 BR , 3 BR ', '869 sqft , 1160 sqft , 1126 sqft , 1286 sqft , 188', 'အားလုံးမင်္ဂလာအပေါင်းနဲ့ပြည့်စုံပါစေ ', '1_1609949170.jpg', '2_1609949170.jpg', '3_1609949170.jpg', '4_1609949170.jpg', '5_1609949170.jpg', '6_1609949170.jpg', '7_1609949170.jpg', '_1609949170.', '_1609949170.', '_1609949170.', '_1609949170.', '_1609949170.', '_1609949170.', '_1609949170.', '_1609949170.', '_1609949170.', '_1609949170.', '_1609949170.', '_1609949170.', '_1609949170.', 'Condo', 0, '2021-01-06 16:06:10', '2021-01-06 16:06:10'),
(88, 'ရန်ကင်း မြို့ ကမ္ဘာအေးဘုရား  The Central Luxury Condo ', 'Yankin', '2,000,000 $ + ', '1 ', '2000sqft + ', 'တစ်နေ့တစ်နေ့ ထောင်သောင်းမကလူတွေသွားလာနေတဲ့နေရာ  ➡️ \r\n✔️လူကြီးမင်းတို့အနေနဲ့ The Central Luxury Condo လိုမျိုးမှာ Retail Shop နှင့် ကျန်တဲ့ Shop ( ဆိုင်ခန်း ) တွေထဲမှာ ကိုယ့်ပစ္စည်းကို ထုပ်ရောင်းမယ်ဆိုရင် တစ်နေ့တစ်နေ့သွားလာနေတဲ့ ထောင်သောင်းမက လူတွေဆီကို အလွယ်တကူ ချက်ချင်းရောက်ရင် လူသိများတဲ့ နာမည်တစ်ခုက သူ့အလိုလို ရလာပါလိမ့်မယ် .... \r\n✔️အသိမိတ်ဆွေတွေဖြစ်ဖြစ် ၊ ပတ်ဝန်းကျင်ကလူဖြစ်ဖြစ် ဒီလိုနေရာမျိုးမှာ ကိုယ်က ဆိုင်ခန်းဖွင့်ထားရင် လမ်းညွှန်ရလွယ်ကူသလို အားလုံးရဲ့အထင်ကြီးလေးစားမှုကို အလွယ်တကူရနိုင်ပါလိမ့်မယ် .... \r\n✔️ဆိုင်ခန်း ၄ ခုလောက်ပဲကျန်နေတော့ လူကြီးမင်းအနေနဲ့ ဘယ်လိုစဉ်းစားမလဲတော့ မသိပေမဲ့ ကျွန်တော့်အနေနဲ့ကြတော့ The Central Luxury Condo Shop House မှာ ကိုယ့်ဆိုင်ရှိနေရင် ကိုယ့်ပစ္စည်းမရောင်းရမှာတော့လုံးဝမပူတော့ဘူး .... ဘာဖြစ်လို့လဲဆိုတော့ ကိုယ့်ပစ္စည်းကို ၂၀၂၁ နှစ်သစ်မှာ အကြံစည်သစ် ၊ အတွေးအိုင်ဒီယာသစ် နှင့် နည်းဗျူဟာအသစ်တွေစုပေါင်းလိုက်ပြီးတော့ လူကြီး ၊ လူငယ် ၊ လူပျို ၊ အပျို အားလုံးရဲ့ စိတ်ကိုဖမ်းယူနိုင်မယ်ဆိုရင်တော့ cashier ဝန်ထမ်းသာများများကြိုရှာထားပါလို့ပြောပါရစေ .... \r\n✔️ဆိုင်ခန်းများကို စိတ်ဝင်စားမူရှိပါက ဆက်သွယ်မြေမြန်နိုင်ပါသည် ။ \r\n✔️ ချက်ချင်းတက်နေလို့ရတဲ့ Luxury Condo ရရှိနိုင်သလို ကြိုပွိုင့်ဖြစ်ဝယ်ယူရရှိနိုင်သော အခန်းတစ်ချို့ ရှိပါသေးသည် ။ \r\n✔️ Inya view , Garden view , City view , Landscape view , Kanbae view .... အစရှိသော ရှု့ခင်းများကို ပန်းချီကားသဖွယ်ရှုမဝ တဲ့နေရာလေးမှာ အခန်းဝယ်ဖို့ အမြန်စုံစမ်းလိုက်ပါ ...  \r\nfor more info: 09409789556 / 09409789515\r\ninfo@cityhomeproperty.com\r\nwww.cityhomeproperty.com \r\nCity Home Property Co.,Ltd \r\n#Real Estate In Yangon Myanmar ( Retail Shop , Shop house for Sell )', '1_1609949294.jpg', '99_1609949294.jpg', '1_1609949294.jpg', '99_1609949294.jpg', '_1609949294.', '_1609949294.', '_1609949294.', '_1609949294.', '_1609949294.', '_1609949294.', '_1609949294.', '_1609949294.', '_1609949294.', '_1609949294.', '_1609949294.', '_1609949294.', '_1609949294.', '_1609949294.', '_1609949294.', '_1609949294.', 'Shop and Store', 0, '2021-01-06 16:08:14', '2021-01-06 16:08:14');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(20) NOT NULL,
  `address` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `township` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `room` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `feet` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `sold` int(2) NOT NULL DEFAULT '0',
  `img1` text COLLATE utf8_unicode_ci NOT NULL,
  `img2` text COLLATE utf8_unicode_ci NOT NULL,
  `img3` text COLLATE utf8_unicode_ci NOT NULL,
  `img4` text COLLATE utf8_unicode_ci NOT NULL,
  `img5` text COLLATE utf8_unicode_ci NOT NULL,
  `img6` text COLLATE utf8_unicode_ci NOT NULL,
  `img7` text COLLATE utf8_unicode_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `for_rent`
--
ALTER TABLE `for_rent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `for_sale`
--
ALTER TABLE `for_sale`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `for_rent`
--
ALTER TABLE `for_rent`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `for_sale`
--
ALTER TABLE `for_sale`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
