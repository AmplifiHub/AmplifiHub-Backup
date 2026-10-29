-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 24, 2019 at 04:16 PM
-- Server version: 5.7.27-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amplifih_amplifihub`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `bank_code` text NOT NULL,
  `account_name` varchar(100) NOT NULL,
  `account_number` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `user_id`, `bank_name`, `bank_code`, `account_name`, `account_number`, `created`, `modified`) VALUES
(1, 8, 'GTB', '', 'Kehinde Ken Afolabi', '0138664274', '2018-05-16 23:09:14', '2018-05-16 23:09:14'),
(2, 20, 'United Bank Of Africa UBA', '', 'Joseph Akpan', '2068079327', '2018-05-19 12:19:19', '2018-05-19 12:19:19'),
(3, 22, 'Access bank', '', 'Tasieobi Tobi Ndubuisi', '0009294017', '2018-05-19 14:15:27', '2018-05-19 14:15:27'),
(4, 36, 'skyebank', '', 'emeka shadrach orji', '1040581446', '2018-05-24 23:51:05', '2018-05-24 23:51:05'),
(5, 46, 'Zenith Bank ', '', 'Tenimu Zakari ', '2007344198 ', '2018-05-26 19:09:51', '2018-05-26 19:09:51'),
(6, 46, 'Zenith Bank ', '', 'Tenimu Zakari ', '2007344198 ', '2018-06-03 05:13:18', '2018-06-03 05:13:18'),
(7, 59, 'stanbic ibtc', '', 'temidayo makinde daniel', '0012957793', '2018-06-05 00:12:07', '2018-06-05 00:12:07'),
(8, 15, 'Diamond bank', '', 'Onebunne kingsley kene', '0010166584', '2018-06-09 16:34:18', '2018-06-09 16:34:18'),
(9, 20, 'United Bank of Africa ', '', 'Joseph Akpan ', '2068079327', '2018-07-17 05:22:28', '2018-07-17 05:22:28'),
(10, 86, 'Zenith Bank Plc', '', 'John Charles', '2008795584', '2018-07-19 10:58:04', '2018-07-19 10:58:04'),
(11, 92, 'Wema bank', '', 'Abdulquddusdembo', '0233202600', '2018-07-22 15:19:46', '2018-07-22 15:19:46'),
(12, 93, 'Guaranty Trust Bank', '', 'TARGEMA CHARLES', '0161556988', '2018-07-22 16:18:41', '2018-07-22 16:18:41'),
(13, 99, 'Diamond Bank', '', 'Abe Abiodun Samuel', '0056932345', '2018-07-25 13:40:40', '2018-07-25 13:40:40'),
(14, 117, 'first city monument bank', '', 'awodele moyosola joseph', '4304064017', '2018-08-19 19:36:51', '2018-08-19 19:36:51'),
(15, 117, 'FCMB', '', 'Awodele moyosola joseph', '4304064017', '2018-08-29 23:49:16', '2018-08-29 23:49:16'),
(16, 133, 'Guarantee trust bank', '', 'Okpeku jackson', '0221794221', '2018-09-06 11:55:24', '2018-09-06 11:55:24'),
(17, 134, 'FIRST BANK', '', 'TARFA BITRUS ISHAKU', '3080070288', '2018-09-22 10:54:36', '2018-09-22 10:55:52'),
(18, 153, 'UBA', '', 'CHUKWUNEKE CHUKWUMA', '2064831659', '2018-09-28 19:23:06', '2018-09-28 19:23:06'),
(19, 138, 'GT Bank', '', 'Olanrewaju Lanre Olajimi', '0125316726', '2018-10-15 12:27:26', '2018-10-15 12:27:26'),
(20, 166, 'Access Bank Plc', '', 'Oganezi Kelechi', '0006136321', '2018-10-15 12:48:59', '2018-10-15 12:48:59'),
(21, 175, 'Heritage Bank ', '', 'Joseph Assamudo ', '1500477946', '2018-10-17 06:35:17', '2018-10-17 06:35:17'),
(22, 199, 'First Bank nig', '', 'Soliu Abdulazeez Abiodun', '3080514698', '2018-10-17 12:29:35', '2018-10-17 12:29:35'),
(23, 239, 'Gtbank', '', 'Ajibola Kazeem Olabanji', '0035914580', '2018-10-18 13:16:28', '2018-10-18 13:16:28'),
(24, 247, 'first bank', '', 'inyang hope udok', '3109922473', '2018-10-18 20:27:51', '2018-10-18 20:27:51'),
(25, 252, 'Diamond bank', '', 'Idris aliyu Usman', '0040437047', '2018-10-19 08:53:32', '2018-10-19 08:53:32'),
(26, 274, 'UBA', '', 'Fesou Preye ', '2082591542', '2018-10-19 22:55:56', '2018-10-19 22:55:56'),
(27, 286, 'GTbank', '', 'Abdulsalam Musiliyu', '0115070146', '2018-10-20 10:11:34', '2018-10-20 10:11:34'),
(29, 82, 'Zenith', '', 'Edidiong Mbakara ', '2100041367', '2018-10-30 11:37:36', '2018-10-30 11:37:36'),
(30, 325, 'Guaranty Trust bank', '', 'Chims umasom ele', '0172814738', '2018-11-29 13:49:50', '2018-11-29 13:49:50'),
(31, 331, 'First bank Nigeria ', '', 'Lawrence gbolahan Alexander ', '3109103238', '2018-12-12 00:17:15', '2018-12-12 00:17:15'),
(32, 334, 'Guarantee trust bank', '', 'Samuel Chongkon', '0255980732', '2018-12-18 07:35:55', '2018-12-18 07:35:55'),
(35, 368, 'Stanbic ibtc', '', 'Edwin ovoukerie Anthony Ogude', '0020686856', '2019-01-02 10:57:16', '2019-01-02 10:57:16'),
(37, 26, 'UBA', '', 'joseph toyosi Oluwapelumi', '2082730415', '2019-01-09 13:15:10', '2019-01-09 13:15:10'),
(38, 379, 'Polaris', '', 'Ogunmola Oluwatimilehin Bright', '3028260026', '2019-01-12 15:04:23', '2019-01-12 15:04:23'),
(39, 390, 'UBA', '', 'Kris Jesse chukumela', '2061068180', '2019-01-19 16:05:06', '2019-01-19 16:05:06'),
(41, 382, 'Diamond Bank', '', 'Ebenezer Adole', '0087006178', '2019-01-25 15:37:09', '2019-01-25 15:37:09'),
(42, 421, 'Wema bank', '', 'Toluwalase Olufemi Phillips', '0231942265', '2019-01-26 14:16:11', '2019-01-26 14:16:11'),
(43, 442, 'Uba', '', 'Ogbeche Clement ogbeche', '2081678794', '2019-02-05 07:03:34', '2019-02-05 07:03:34'),
(44, 452, 'GT', '', 'Emmanuel Ogbian ', '0113449445', '2019-02-11 05:23:40', '2019-02-11 05:23:40'),
(45, 455, 'Zenith Bank ', '', 'Ahmed Onorooiza Bashir ', '2208684796', '2019-02-13 00:23:32', '2019-02-13 00:23:32'),
(49, 523, 'first bank', '', 'ibe uchechukwu', '3120817479', '2019-03-01 07:59:53', '2019-03-01 07:59:53'),
(50, 524, 'GTB', '', 'Kanu Gideon', '0449882273', '2019-03-01 22:10:41', '2019-03-01 22:10:41'),
(51, 542, 'Guaranty Trust Bank', '', 'Bada AbdulFatai Ishola', '0212497394', '2019-03-03 03:09:33', '2019-03-03 03:09:33'),
(52, 567, 'UBA', '', 'Garba Amos ', '2099125198', '2019-03-05 09:23:28', '2019-03-05 09:23:28'),
(53, 593, 'Fidelity', '', 'Verve', '6040103809', '2019-03-08 23:15:37', '2019-03-08 23:15:37'),
(54, 543, 'Access Bank', '', 'Zion Joshua Adebisi', '0734726124', '2019-03-10 23:53:37', '2019-03-10 23:53:37'),
(55, 91, 'Sterling Bank', '', 'Smart Chukwuma Echefu', '0068745889', '2019-03-15 21:17:53', '2019-03-15 21:17:53'),
(56, 91, 'United Bank of Africa', '', 'Ebube Samuel Smart-Echefu', '2116085368', '2019-03-15 21:24:24', '2019-03-15 21:24:24'),
(57, 490, 'Eco Bank ', '', 'Damilola Alonge', '4131082547', '2019-03-21 15:51:24', '2019-03-21 15:51:24'),
(58, 636, 'UBA', '', 'Nwulu Smart', '2069541724', '2019-03-22 08:38:05', '2019-03-22 08:38:05'),
(59, 660, 'GT BANK', '', 'JOHN CHIDI ', '0429900337', '2019-04-19 10:33:56', '2019-04-19 10:33:56'),
(60, 134, 'ACCESS BANK', '', 'ISHAKU TARFA BITRUS', '0689707557', '2019-04-30 00:22:51', '2019-04-30 00:22:51'),
(61, 729, 'Guarantee trust bank GTB', '', 'Olaitan onifade', '0049858832', '2019-05-22 17:44:54', '2019-05-22 17:44:54'),
(62, 729, 'Access bank', '', 'Olaitan onifade', '0773495599', '2019-05-22 17:51:28', '2019-05-22 17:52:28'),
(64, 151, 'Access ', '', 'Oseata actur Stanley', '0036683760', '2019-05-27 01:30:33', '2019-05-27 01:30:33'),
(65, 88, 'Wema bank', '', 'Edevbie David Okeoghene', '0233236599', '2019-06-25 13:28:10', '2019-06-25 13:28:10'),
(66, 36, 'polarisbank', '', 'emeka shadrach', '1040581446', '2019-07-06 21:07:49', '2019-07-06 21:07:49'),
(67, 730, 'UBA', '', 'ODERINDE IFEDAPO OREOLUWA', '2122023251', '2019-07-11 07:33:40', '2019-07-11 07:33:40'),
(68, 856, 'Diamond(Access)Bank', '', 'Kenechukwu Ezeofor Joseph ', '0059821600', '2019-08-26 03:29:48', '2019-08-26 03:29:48'),
(70, 860, 'UBA', '', 'Christian Asafoh', '01528926501552', '2019-08-27 18:51:37', '2019-08-27 18:51:37'),
(72, 876, 'diamond bank', '', 'Ogene David Owolabi', '0091261815', '2019-09-04 10:24:58', '2019-09-04 10:24:58'),
(108, 9, 'UBL', '0002', 'UBL', 'jhg786789', '2019-09-18 17:51:46', '2019-09-18 17:51:46'),
(109, 2, 'Gtbank ', 'Gtbinla', 'Ejikemuwa Odoh ', '1234567000', '2019-09-18 18:19:20', '2019-09-18 18:19:20');

-- --------------------------------------------------------

--
-- Table structure for table `artistes`
--

CREATE TABLE `artistes` (
  `id` int(11) NOT NULL,
  `top_artistes` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL,
  `artiste_name` varchar(100) NOT NULL,
  `genre` int(11) NOT NULL,
  `song_title` varchar(100) NOT NULL,
  `artiste_song` varchar(100) NOT NULL,
  `song_path` varchar(100) NOT NULL,
  `song_size` varchar(100) NOT NULL,
  `song_type` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artistes`
--

INSERT INTO `artistes` (`id`, `top_artistes`, `user_id`, `artiste_name`, `genre`, `song_title`, `artiste_song`, `song_path`, `song_size`, `song_type`, `created`, `modified`) VALUES
(1, 1, 22, 'JbArmy', 16, 'me crown', 'c334d803cc81618075fe259ff2d48d95_1548500421.mp3', 'webroot/files/Artistes/artiste_song/', '4084778', 'audio/mp3', '2018-05-21 12:19:27', '2019-01-17 19:06:59'),
(2, 1, 3, 'iiFlowz', 12, 'Young Nigga', 'youngnigga-1.1527327092.mp3', 'webroot/files/Artistes/artiste_song/', '3807596', 'audio/mp3', '2018-05-26 09:31:31', '2019-01-17 19:17:17'),
(3, 0, 59, 'Checkmate', 6, 'Pull up', 'd5918e3fa09b134c13dcc82f4a84e661_1548500518.mp3', 'webroot/files/Artistes/artiste_song/', '4763076', 'audio/mp3', '2018-06-05 00:03:57', '2018-06-05 00:03:57'),
(4, 0, 2, 'SonarMixes', 18, 'If I', '62ebae871f3eb7f16b04dc90cbd09515_1548500558.mp3', 'Artistes/artiste_song', '865245', 'audio/mp3', '2018-07-09 14:26:01', '2019-01-25 17:53:32'),
(5, 0, 146, 'eMBee ozurumba', 27, 'No excuses', 'embee.1537551088.mp3', 'webroot/files/Artistes/artiste_song/', '9021547', 'audio/mp3', '2018-09-21 17:31:28', '2018-09-21 17:31:28'),
(6, 0, 422, 'Jhay', 11, 'Manage ', '9617b7f011d345da1f9c1a6fcb65545b_1548622568.mp3', 'Artistes/artiste_song', '3181122', 'audio/mp3', '2019-01-27 21:49:01', '2019-01-27 21:56:08'),
(7, 0, 410, 'D\'KING ', 6, 'Your matter', '5503a205af107bd3595d702e95f64dd6_1551212487.mp3', 'Artistes/artiste_song', '4748854', 'audio/mp3', '2019-02-26 21:21:27', '2019-02-26 21:21:27'),
(8, 0, 418, 'Oto', 29, 'Flee', 'bca7961c88636108e8dd66c9c6271292_1551691773.mp3', 'Artistes/artiste_song', '4567500', 'audio/mp3', '2019-03-04 10:29:32', '2019-03-04 10:29:32');

-- --------------------------------------------------------

--
-- Table structure for table `artistesrequesters`
--

CREATE TABLE `artistesrequesters` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `artiste_id` int(11) NOT NULL,
  `orderid` varchar(100) NOT NULL,
  `job_description` varchar(100) NOT NULL,
  `duration` varchar(11) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `name_of_event` varchar(100) DEFAULT NULL,
  `event_date` varchar(10) DEFAULT NULL,
  `name_of_venue` varchar(100) DEFAULT NULL,
  `address_one` varchar(100) DEFAULT NULL,
  `event_city` varchar(100) DEFAULT NULL,
  `event_state` varchar(100) DEFAULT NULL,
  `event_country` varchar(100) DEFAULT NULL,
  `phone_number` varchar(14) DEFAULT NULL,
  `event_attire` varchar(100) DEFAULT NULL,
  `performance_time` varchar(10) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artistesrequesters`
--

INSERT INTO `artistesrequesters` (`id`, `user_id`, `artiste_id`, `orderid`, `job_description`, `duration`, `status`, `name_of_event`, `event_date`, `name_of_venue`, `address_one`, `event_city`, `event_state`, `event_country`, `phone_number`, `event_attire`, `performance_time`, `created`, `modified`) VALUES
(1, 2, 9, 'art1533856771', 'Music performance', '1hr', 'pending', 'That name', '08/31/2018', 'My house', 'You know', 'That side', 'Lagos', 'Naija', '090998900998', 'Anyhow', '3pm', '2018-08-09 23:19:30', '2018-08-09 23:19:30'),
(2, 2, 9, 'art1533857088', 'Guest Speaker', '1hr', 'pending', 'That name', '08/15/2018', 'My house', 'You know', 'That side', 'Lagos', 'Naija', '090998900998', 'Anyhow', '3pm', '2018-08-09 23:24:48', '2018-08-09 23:24:48'),
(3, 9, 2, 'art1536226884', 'Guest Speaker', 'Fgsfdft', 'pending', 'Dtsffhfgs', '09/22/2018', 'Dhdjddahg tss', 'Sfsgdgd fsgsf fsgsf dtdr', 'Sdstknf', 'Xgdtkhss', 'Dgdhfsa', '453424422', 'Sgsgfas', 'Wrsrfytf', '2018-09-06 09:41:23', '2018-09-06 09:41:23'),
(4, 9, 2, 'art1537960307', 'Music performance', '19', 'pending', 'testing', '10/02/2018', 'testing', 'testing', 'testing', 'testing', 'testing', '98483888', 'testing', '2pm', '2018-09-26 11:11:47', '2018-09-26 11:11:47'),
(5, 9, 2, 'art1538018929', 'Music performance', '99', 'pending', 'Testing', '08/08/2019', 'Testing', 'testing', 'testing', 'Testing', 'Testing', '09932920993', 'Testing', '9', '2018-09-27 03:28:49', '2018-09-27 03:28:49');

-- --------------------------------------------------------

--
-- Table structure for table `bankbalances`
--

CREATE TABLE `bankbalances` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `balance` int(100) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bankbalances`
--

INSERT INTO `bankbalances` (`id`, `user_id`, `balance`, `created`, `modified`) VALUES
(1, 15, 0, '2018-08-08 20:38:29', '2018-08-08 20:39:24'),
(2, 133, 0, '2019-01-22 00:42:51', '2019-01-25 21:26:10'),
(3, 2, 2622770, '2019-01-22 17:45:33', '2019-09-17 13:10:59'),
(4, 8, 0, '2019-02-10 04:13:07', '2019-02-21 12:34:40'),
(5, 106, 10000, '2019-02-18 21:13:27', '2019-04-05 03:04:04'),
(6, 36, 49901, '2019-02-20 08:01:51', '2019-07-11 12:06:52'),
(7, 490, 0, '2019-03-20 17:35:57', '2019-03-21 15:51:53'),
(8, 730, 1000, '2019-06-09 16:07:43', '2019-07-11 00:36:35');

-- --------------------------------------------------------

--
-- Table structure for table `beatstopromote`
--

CREATE TABLE `beatstopromote` (
  `id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `days` int(11) NOT NULL,
  `fee` int(11) NOT NULL,
  `amount_paid` int(11) DEFAULT NULL,
  `tnx_reference` varchar(255) DEFAULT NULL,
  `start_date` varchar(255) DEFAULT NULL,
  `end_date` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beatstopromote`
--

INSERT INTO `beatstopromote` (`id`, `store_id`, `status`, `days`, `fee`, `amount_paid`, `tnx_reference`, `start_date`, `end_date`, `created`, `modified`) VALUES
(1, 11, 'No payment yet', 5, 25000, NULL, NULL, NULL, NULL, '2018-11-15 08:15:37', '2018-11-15 08:15:37'),
(2, 96, 'No payment yet', 3000, 15000000, NULL, NULL, NULL, NULL, '2018-12-09 22:31:26', '2018-12-09 22:31:26'),
(3, 96, 'No payment yet', 1, 5000, NULL, NULL, NULL, NULL, '2018-12-09 22:32:21', '2018-12-09 22:32:21'),
(4, 111, 'No payment yet', 15, 75000, NULL, NULL, NULL, NULL, '2019-01-12 15:51:36', '2019-01-12 15:51:36'),
(5, 127, 'No payment yet', 1, 5000, NULL, NULL, NULL, NULL, '2019-01-25 18:58:56', '2019-01-25 18:58:56'),
(6, 137, 'No payment yet', 1, 5000, NULL, NULL, NULL, NULL, '2019-02-26 20:42:35', '2019-02-26 20:42:35'),
(7, 151, 'No payment yet', 5, 25000, NULL, NULL, NULL, NULL, '2019-02-27 13:55:45', '2019-02-27 13:55:45'),
(8, 176, 'No payment yet', 5, 25000, NULL, NULL, NULL, NULL, '2019-03-17 16:43:52', '2019-03-17 16:43:52'),
(9, 197, 'No payment yet', 2, 10000, NULL, NULL, NULL, NULL, '2019-08-26 01:51:06', '2019-08-26 01:51:06'),
(10, 188, 'No payment yet', 90, 450000, NULL, NULL, NULL, NULL, '2019-08-26 01:51:36', '2019-08-26 01:51:36'),
(11, 138, 'No payment yet', 5, 25000, NULL, NULL, NULL, NULL, '2019-09-01 12:23:04', '2019-09-01 12:23:04'),
(12, 13, 'No payment yet', 5, 2500, NULL, NULL, NULL, NULL, '2019-09-01 12:26:54', '2019-09-01 12:26:54'),
(13, 133, 'No payment yet', 10, 5000, NULL, NULL, NULL, NULL, '2019-09-01 12:29:12', '2019-09-01 12:29:12');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `trans_ref` varchar(200) NOT NULL,
  `beat_id` int(10) UNSIGNED NOT NULL,
  `beat_type` varchar(200) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `beat_name` varchar(255) NOT NULL,
  `amount` varchar(100) DEFAULT NULL,
  `status` enum('paid','unpaid') NOT NULL DEFAULT 'unpaid',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `trans_ref`, `beat_id`, `beat_type`, `buyer_id`, `seller_id`, `beat_name`, `amount`, `status`, `created`, `modified`) VALUES
(1, 'beatstore-151892809', 5, 'lease', 2, 0, '', NULL, 'unpaid', '2018-05-17 17:02:55', '2018-05-17 17:02:55'),
(4, 'beatstore-389706771', 7, 'premium', 2, 0, '', NULL, 'unpaid', '2018-05-19 11:01:38', '2018-05-19 11:01:38'),
(11, 'beatstore-648736942', 1, 'lease', 2, 0, '', NULL, 'unpaid', '2018-05-21 10:12:19', '2018-05-21 10:12:19'),
(13, 'beatstore-648736942', 1, 'lease', 2, 0, '', NULL, 'unpaid', '2018-05-21 10:12:26', '2018-05-21 10:12:26'),
(16, 'beatstore-486085699', 1, 'lease', 2, 0, '', NULL, 'unpaid', '2018-05-23 12:51:04', '2018-05-23 12:51:04'),
(17, 'beatstore-486085699', 1, 'lease', 2, 0, '', NULL, 'unpaid', '2018-05-23 12:51:04', '2018-05-23 12:51:04'),
(18, 'beatstore-486085699', 1, 'lease', 2, 0, '', NULL, 'unpaid', '2018-05-23 12:52:21', '2018-05-23 12:52:21'),
(19, 'beatstore-527872173', 1, 'lease', 48, 0, '', NULL, 'unpaid', '2018-06-02 12:29:43', '2018-06-02 12:29:43'),
(21, 'beatstore-120189421', 1, 'lease', 69, 0, '', NULL, 'unpaid', '2018-06-15 19:13:14', '2018-06-15 19:13:14'),
(22, 'beatstore-867522422', 1, 'lease', 2, 0, '', NULL, 'unpaid', '2018-06-18 07:11:07', '2018-06-18 07:11:07'),
(24, 'beatstore-867522422', 8, 'premium', 2, 0, '', NULL, 'unpaid', '2018-06-18 07:11:07', '2018-06-18 07:11:07'),
(25, 'beatstore-867522422', 8, 'premium', 2, 0, '', NULL, 'unpaid', '2018-06-18 07:11:07', '2018-06-18 07:11:07'),
(26, 'beatstore-867522422', 8, 'premium', 2, 0, '', NULL, 'unpaid', '2018-06-18 07:11:07', '2018-06-18 07:11:07'),
(27, 'beatstore-867522422', 8, 'premium', 2, 0, '', NULL, 'unpaid', '2018-06-18 07:11:07', '2018-06-18 07:11:07'),
(28, 'beatstore-867522422', 8, 'premium', 2, 0, '', NULL, 'unpaid', '2018-06-18 07:11:07', '2018-06-18 07:11:07'),
(29, 'beatstore-867522422', 8, 'premium', 2, 0, '', NULL, 'unpaid', '2018-06-18 07:11:07', '2018-06-18 07:11:07'),
(30, 'beatstore-867522422', 8, 'premium', 2, 0, '', NULL, 'unpaid', '2018-06-18 07:11:07', '2018-06-18 07:11:07'),
(31, 'beatstore-867522422', 8, 'premium', 2, 0, '', NULL, 'unpaid', '2018-06-18 07:11:07', '2018-06-18 07:11:07'),
(32, 'beatstore-867522422', 8, 'premium', 2, 0, '', NULL, 'unpaid', '2018-06-18 07:11:07', '2018-06-18 07:11:07'),
(33, 'beatstore-867522422', 8, 'premium', 2, 0, '', NULL, 'unpaid', '2018-06-18 07:11:13', '2018-06-18 07:11:13'),
(34, 'beatstore-867522422', 8, 'premium', 2, 0, '', NULL, 'unpaid', '2018-06-18 07:11:13', '2018-06-18 07:11:13'),
(35, 'beatstore-867522422', 8, 'premium', 2, 0, '', NULL, 'unpaid', '2018-06-18 07:11:13', '2018-06-18 07:11:13'),
(36, 'beatstore-867522422', 8, 'premium', 2, 0, '', NULL, 'unpaid', '2018-06-18 07:11:13', '2018-06-18 07:11:13'),
(37, 'beatstore-867522422', 8, 'premium', 2, 0, '', NULL, 'unpaid', '2018-06-18 07:11:13', '2018-06-18 07:11:13'),
(38, 'beatstore-867522422', 8, 'premium', 2, 0, '', NULL, 'unpaid', '2018-06-18 07:11:13', '2018-06-18 07:11:13'),
(39, 'beatstore-867522422', 8, 'premium', 2, 0, '', NULL, 'unpaid', '2018-06-18 07:11:13', '2018-06-18 07:11:13'),
(40, 'beatstore-867522422', 8, 'premium', 2, 0, '', NULL, 'unpaid', '2018-06-18 07:11:13', '2018-06-18 07:11:13'),
(41, 'beatstore-867522422', 8, 'premium', 2, 0, '', NULL, 'unpaid', '2018-06-18 07:11:13', '2018-06-18 07:11:13'),
(42, 'beatstore-867522422', 8, 'premium', 2, 0, '', NULL, 'unpaid', '2018-06-18 07:11:13', '2018-06-18 07:11:13'),
(43, 'beatstore-927654797', 1, 'lease', 2, 0, '', NULL, 'unpaid', '2018-06-19 14:08:40', '2018-06-19 14:08:40'),
(44, 'beatstore-378346220', 1, 'lease', 2, 0, '', NULL, 'unpaid', '2018-06-19 14:53:33', '2018-06-19 14:53:33'),
(92, 'beatstore-533170620', 1, 'lease', 8, 0, '', NULL, 'unpaid', '2018-06-19 23:43:56', '2018-06-19 23:43:56'),
(93, 'beatstore-533170620', 1, 'lease', 8, 0, '', NULL, 'unpaid', '2018-06-19 23:43:56', '2018-06-19 23:43:56'),
(94, 'beatstore-533170620', 1, 'lease', 8, 0, '', NULL, 'unpaid', '2018-06-19 23:43:56', '2018-06-19 23:43:56'),
(95, 'beatstore-533170620', 1, 'lease', 8, 0, '', NULL, 'unpaid', '2018-06-19 23:43:56', '2018-06-19 23:43:56'),
(96, 'beatstore-533170620', 1, 'lease', 8, 0, '', NULL, 'unpaid', '2018-06-19 23:43:56', '2018-06-19 23:43:56'),
(97, 'beatstore-533170620', 1, 'lease', 8, 0, '', NULL, 'unpaid', '2018-06-19 23:43:56', '2018-06-19 23:43:56'),
(98, 'beatstore-533170620', 1, 'lease', 8, 0, '', NULL, 'unpaid', '2018-06-19 23:43:56', '2018-06-19 23:43:56'),
(99, 'beatstore-533170620', 1, 'lease', 8, 0, '', NULL, 'unpaid', '2018-06-19 23:43:56', '2018-06-19 23:43:56'),
(100, 'beatstore-533170620', 1, 'lease', 8, 0, '', NULL, 'unpaid', '2018-06-19 23:43:56', '2018-06-19 23:43:56'),
(101, 'beatstore-533170620', 1, 'lease', 8, 0, '', NULL, 'unpaid', '2018-06-19 23:43:56', '2018-06-19 23:43:56'),
(102, 'beatstore-533170620', 1, 'lease', 8, 0, '', NULL, 'unpaid', '2018-06-19 23:43:56', '2018-06-19 23:43:56'),
(103, 'beatstore-533170620', 1, 'lease', 8, 0, '', NULL, 'unpaid', '2018-06-19 23:43:56', '2018-06-19 23:43:56'),
(104, 'beatstore-533170620', 1, 'lease', 8, 0, '', NULL, 'unpaid', '2018-06-19 23:43:56', '2018-06-19 23:43:56'),
(106, 'beatstore-572934520', 1, 'lease', 2, 0, '', NULL, 'unpaid', '2018-06-22 14:41:53', '2018-06-22 14:41:53'),
(107, 'beatstore-185674816', 1, 'lease', 1, 0, '', NULL, 'unpaid', '2018-06-26 13:15:37', '2018-06-26 13:15:37'),
(109, 'beatstore-185674816', 1, 'lease', 1, 0, '', NULL, 'unpaid', '2018-06-26 13:57:47', '2018-06-26 13:57:47'),
(116, 'beatstore-185674816', 8, 'premium', 1, 0, '', NULL, 'unpaid', '2018-06-26 13:57:47', '2018-06-26 13:57:47'),
(117, 'beatstore-185674816', 1, 'lease', 1, 0, '', NULL, 'unpaid', '2018-06-26 13:57:52', '2018-06-26 13:57:52'),
(123, 'beatstore-185674816', 8, 'premium', 1, 0, '', NULL, 'unpaid', '2018-06-26 13:57:52', '2018-06-26 13:57:52'),
(124, 'beatstore-185674816', 1, 'lease', 1, 0, '', NULL, 'unpaid', '2018-06-26 13:58:02', '2018-06-26 13:58:02'),
(130, 'beatstore-185674816', 1, 'lease', 1, 0, '', NULL, 'unpaid', '2018-06-26 13:58:13', '2018-06-26 13:58:13'),
(136, 'beatstore-185674816', 1, 'lease', 1, 0, '', NULL, 'unpaid', '2018-06-26 13:58:18', '2018-06-26 13:58:18'),
(141, 'beatstore-185674816', 1, 'lease', 1, 0, '', NULL, 'unpaid', '2018-06-26 13:58:24', '2018-06-26 13:58:24'),
(145, 'beatstore-522988631', 1, 'lease', 2, 0, '', NULL, 'unpaid', '2018-06-26 19:11:35', '2018-06-26 19:11:35'),
(147, 'beatstore-522988631', 8, 'premium', 2, 0, '', NULL, 'unpaid', '2018-06-26 19:11:35', '2018-06-26 19:11:35'),
(151, 'beatstore-522988631', 1, 'lease', 2, 0, '', NULL, 'unpaid', '2018-06-26 19:12:37', '2018-06-26 19:12:37'),
(152, 'beatstore-522988631', 2, 'premium', 2, 0, '', NULL, 'unpaid', '2018-06-26 19:12:37', '2018-06-26 19:12:37'),
(153, 'beatstore-522988631', 8, 'premium', 2, 0, '', NULL, 'unpaid', '2018-06-26 19:12:37', '2018-06-26 19:12:37'),
(157, 'beatstore-522988631', 1, 'lease', 2, 0, '', NULL, 'unpaid', '2018-06-26 19:12:55', '2018-06-26 19:12:55'),
(158, 'beatstore-522988631', 2, 'premium', 2, 0, '', NULL, 'unpaid', '2018-06-26 19:12:55', '2018-06-26 19:12:55'),
(159, 'beatstore-522988631', 8, 'premium', 2, 0, '', NULL, 'unpaid', '2018-06-26 19:12:55', '2018-06-26 19:12:55'),
(162, 'beatstore-522988631', 2, 'premium', 2, 0, '', NULL, 'unpaid', '2018-06-26 19:12:58', '2018-06-26 19:12:58'),
(163, 'beatstore-522988631', 8, 'premium', 2, 0, '', NULL, 'unpaid', '2018-06-26 19:12:58', '2018-06-26 19:12:58'),
(166, 'beatstore-959627564', 2, 'premium', 2, 0, '', NULL, 'unpaid', '2018-06-27 00:48:15', '2018-06-27 00:48:15'),
(171, 'beatstore-249004794', 4, 'lease', 8, 0, '', NULL, 'unpaid', '2018-07-05 16:07:48', '2018-07-05 16:07:48'),
(175, 'beatstore-323898635', 49, 'lease', 2, 0, '', NULL, 'unpaid', '2018-07-07 07:09:40', '2018-07-07 07:09:40'),
(179, 'beatstore-323898635', 49, 'lease', 2, 0, '', NULL, 'unpaid', '2018-07-07 07:35:13', '2018-07-07 07:35:13'),
(180, 'beatstore-74793102', 12, 'lease', 2, 0, '', NULL, 'unpaid', '2018-07-07 21:48:30', '2018-07-07 21:48:30'),
(181, 'beatstore-74793102', 11, 'lease', 2, 0, '', NULL, 'unpaid', '2018-07-07 21:48:30', '2018-07-07 21:48:30'),
(182, 'beatstore-919501592', 8, 'premium', 2, 0, '', NULL, 'unpaid', '2018-07-09 15:56:27', '2018-07-09 15:56:27'),
(184, 'beatstore-852836949', 1, 'premium', 1, 0, '', NULL, 'unpaid', '2018-07-28 19:11:08', '2018-07-28 19:11:08'),
(185, 'beatstore-852836949', 1, 'premium', 1, 0, '', NULL, 'unpaid', '2018-07-28 19:11:44', '2018-07-28 19:11:44'),
(186, 'beatstore-285040488', 58, 'lease', 15, 0, '', NULL, 'unpaid', '2018-07-30 11:33:04', '2018-07-30 11:33:04'),
(187, 'beatstore-285040488', 58, 'lease', 15, 0, '', NULL, 'unpaid', '2018-07-30 11:34:25', '2018-07-30 11:34:25'),
(188, 'beatstore-285040488', 58, 'lease', 15, 0, '', NULL, 'unpaid', '2018-07-30 11:34:46', '2018-07-30 11:34:46'),
(189, 'beatstore-285040488', 58, 'lease', 15, 0, '', NULL, 'unpaid', '2018-07-30 11:52:28', '2018-07-30 11:52:28'),
(206, 'beatstore-839247073', 72, 'lease', 108, 0, '', NULL, 'unpaid', '2018-08-08 20:29:52', '2018-08-08 20:29:52'),
(213, 'beatstore-214422296', 69, 'lease', 108, 0, '', '5000', 'paid', '2018-08-08 20:36:30', '2018-08-08 20:36:30'),
(214, 'beatstore-214422296', 69, 'lease', 108, 0, '', '5000', 'paid', '2018-08-08 20:36:36', '2018-08-08 20:36:36'),
(215, 'beatstore-20385385', 13, 'premium', 1, 0, '', NULL, 'unpaid', '2018-08-09 22:43:14', '2018-08-09 22:43:14'),
(216, 'beatstore-20385385', 12, 'lease', 1, 0, '', NULL, 'unpaid', '2018-08-09 22:43:14', '2018-08-09 22:43:14'),
(220, 'beatstore-290680776', 84, 'lease', 1, 0, '', NULL, 'unpaid', '2018-09-12 11:19:31', '2018-09-12 11:19:31'),
(245, 'beatstore-387388404', 58, 'exclusive', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:25:42', '2018-09-23 13:25:42'),
(246, 'beatstore-387388404', 58, 'exclusive', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:25:42', '2018-09-23 13:25:42'),
(247, 'beatstore-387388404', 58, 'premium', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:25:42', '2018-09-23 13:25:42'),
(248, 'beatstore-387388404', 58, 'premium', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:25:42', '2018-09-23 13:25:42'),
(249, 'beatstore-387388404', 58, 'premium', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:25:42', '2018-09-23 13:25:42'),
(250, 'beatstore-387388404', 58, 'premium', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:25:42', '2018-09-23 13:25:42'),
(253, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:25:42', '2018-09-23 13:25:42'),
(254, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:25:42', '2018-09-23 13:25:42'),
(255, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:25:42', '2018-09-23 13:25:42'),
(257, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:25:42', '2018-09-23 13:25:42'),
(259, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:25:42', '2018-09-23 13:25:42'),
(260, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:25:42', '2018-09-23 13:25:42'),
(261, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:25:42', '2018-09-23 13:25:42'),
(262, 'beatstore-387388404', 91, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:25:42', '2018-09-23 13:25:42'),
(263, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:25:42', '2018-09-23 13:25:42'),
(264, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:25:42', '2018-09-23 13:25:42'),
(265, 'beatstore-387388404', 92, 'premium', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:25:42', '2018-09-23 13:25:42'),
(266, 'beatstore-387388404', 58, 'exclusive', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:23', '2018-09-23 13:28:23'),
(267, 'beatstore-387388404', 58, 'exclusive', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:24', '2018-09-23 13:28:24'),
(268, 'beatstore-387388404', 58, 'premium', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:24', '2018-09-23 13:28:24'),
(269, 'beatstore-387388404', 58, 'premium', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:24', '2018-09-23 13:28:24'),
(270, 'beatstore-387388404', 58, 'premium', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:24', '2018-09-23 13:28:24'),
(271, 'beatstore-387388404', 58, 'premium', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:24', '2018-09-23 13:28:24'),
(272, 'beatstore-387388404', 92, 'premium', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:24', '2018-09-23 13:28:24'),
(273, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:24', '2018-09-23 13:28:24'),
(274, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:24', '2018-09-23 13:28:24'),
(275, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:24', '2018-09-23 13:28:24'),
(276, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:24', '2018-09-23 13:28:24'),
(277, 'beatstore-387388404', 92, 'premium', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:24', '2018-09-23 13:28:24'),
(278, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:24', '2018-09-23 13:28:24'),
(279, 'beatstore-387388404', 91, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:24', '2018-09-23 13:28:24'),
(280, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:24', '2018-09-23 13:28:24'),
(281, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:24', '2018-09-23 13:28:24'),
(282, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:24', '2018-09-23 13:28:24'),
(283, 'beatstore-387388404', 91, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:24', '2018-09-23 13:28:24'),
(284, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:24', '2018-09-23 13:28:24'),
(285, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:24', '2018-09-23 13:28:24'),
(286, 'beatstore-387388404', 92, 'premium', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:24', '2018-09-23 13:28:24'),
(287, 'beatstore-387388404', 58, 'exclusive', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:39', '2018-09-23 13:28:39'),
(288, 'beatstore-387388404', 58, 'exclusive', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:39', '2018-09-23 13:28:39'),
(289, 'beatstore-387388404', 58, 'premium', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:39', '2018-09-23 13:28:39'),
(290, 'beatstore-387388404', 58, 'premium', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:39', '2018-09-23 13:28:39'),
(291, 'beatstore-387388404', 58, 'premium', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:39', '2018-09-23 13:28:39'),
(292, 'beatstore-387388404', 58, 'premium', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:39', '2018-09-23 13:28:39'),
(293, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:39', '2018-09-23 13:28:39'),
(294, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:39', '2018-09-23 13:28:39'),
(295, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:39', '2018-09-23 13:28:39'),
(296, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:39', '2018-09-23 13:28:39'),
(297, 'beatstore-387388404', 92, 'premium', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:39', '2018-09-23 13:28:39'),
(298, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:39', '2018-09-23 13:28:39'),
(299, 'beatstore-387388404', 91, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:39', '2018-09-23 13:28:39'),
(300, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:39', '2018-09-23 13:28:39'),
(301, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:39', '2018-09-23 13:28:39'),
(302, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:39', '2018-09-23 13:28:39'),
(303, 'beatstore-387388404', 91, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:39', '2018-09-23 13:28:39'),
(304, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:39', '2018-09-23 13:28:39'),
(305, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:39', '2018-09-23 13:28:39'),
(306, 'beatstore-387388404', 92, 'premium', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:39', '2018-09-23 13:28:39'),
(307, 'beatstore-387388404', 58, 'exclusive', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:47', '2018-09-23 13:28:47'),
(308, 'beatstore-387388404', 58, 'premium', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:47', '2018-09-23 13:28:47'),
(309, 'beatstore-387388404', 58, 'premium', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:47', '2018-09-23 13:28:47'),
(310, 'beatstore-387388404', 58, 'premium', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:47', '2018-09-23 13:28:47'),
(311, 'beatstore-387388404', 58, 'premium', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:47', '2018-09-23 13:28:47'),
(312, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:47', '2018-09-23 13:28:47'),
(313, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:47', '2018-09-23 13:28:47'),
(314, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:48', '2018-09-23 13:28:48'),
(315, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:48', '2018-09-23 13:28:48'),
(316, 'beatstore-387388404', 92, 'premium', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:48', '2018-09-23 13:28:48'),
(317, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:48', '2018-09-23 13:28:48'),
(318, 'beatstore-387388404', 91, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:48', '2018-09-23 13:28:48'),
(319, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:48', '2018-09-23 13:28:48'),
(320, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:48', '2018-09-23 13:28:48'),
(321, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:48', '2018-09-23 13:28:48'),
(322, 'beatstore-387388404', 91, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:48', '2018-09-23 13:28:48'),
(323, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:48', '2018-09-23 13:28:48'),
(324, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:48', '2018-09-23 13:28:48'),
(325, 'beatstore-387388404', 92, 'premium', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:48', '2018-09-23 13:28:48'),
(326, 'beatstore-387388404', 58, 'exclusive', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:56', '2018-09-23 13:28:56'),
(327, 'beatstore-387388404', 58, 'premium', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:56', '2018-09-23 13:28:56'),
(328, 'beatstore-387388404', 58, 'premium', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:56', '2018-09-23 13:28:56'),
(329, 'beatstore-387388404', 58, 'premium', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:56', '2018-09-23 13:28:56'),
(330, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:56', '2018-09-23 13:28:56'),
(331, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:56', '2018-09-23 13:28:56'),
(332, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:56', '2018-09-23 13:28:56'),
(333, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:56', '2018-09-23 13:28:56'),
(334, 'beatstore-387388404', 92, 'premium', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:56', '2018-09-23 13:28:56'),
(335, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:56', '2018-09-23 13:28:56'),
(336, 'beatstore-387388404', 91, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:56', '2018-09-23 13:28:56'),
(337, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:56', '2018-09-23 13:28:56'),
(338, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:56', '2018-09-23 13:28:56'),
(339, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:56', '2018-09-23 13:28:56'),
(340, 'beatstore-387388404', 91, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:56', '2018-09-23 13:28:56'),
(341, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:56', '2018-09-23 13:28:56'),
(342, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:56', '2018-09-23 13:28:56'),
(343, 'beatstore-387388404', 92, 'premium', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:28:56', '2018-09-23 13:28:56'),
(344, 'beatstore-387388404', 58, 'exclusive', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:02', '2018-09-23 13:29:02'),
(345, 'beatstore-387388404', 58, 'premium', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:02', '2018-09-23 13:29:02'),
(346, 'beatstore-387388404', 58, 'premium', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:02', '2018-09-23 13:29:02'),
(347, 'beatstore-387388404', 58, 'premium', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:02', '2018-09-23 13:29:02'),
(348, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:02', '2018-09-23 13:29:02'),
(349, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:02', '2018-09-23 13:29:02'),
(350, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:02', '2018-09-23 13:29:02'),
(351, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:02', '2018-09-23 13:29:02'),
(352, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:02', '2018-09-23 13:29:02'),
(353, 'beatstore-387388404', 91, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:02', '2018-09-23 13:29:02'),
(354, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:02', '2018-09-23 13:29:02'),
(355, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:02', '2018-09-23 13:29:02'),
(356, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:02', '2018-09-23 13:29:02'),
(357, 'beatstore-387388404', 91, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:02', '2018-09-23 13:29:02'),
(358, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:02', '2018-09-23 13:29:02'),
(359, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:02', '2018-09-23 13:29:02'),
(360, 'beatstore-387388404', 92, 'premium', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:02', '2018-09-23 13:29:02'),
(361, 'beatstore-387388404', 58, 'exclusive', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:08', '2018-09-23 13:29:08'),
(362, 'beatstore-387388404', 58, 'premium', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:08', '2018-09-23 13:29:08'),
(363, 'beatstore-387388404', 58, 'premium', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:08', '2018-09-23 13:29:08'),
(364, 'beatstore-387388404', 58, 'premium', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:08', '2018-09-23 13:29:08'),
(365, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:08', '2018-09-23 13:29:08'),
(366, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:08', '2018-09-23 13:29:08'),
(367, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:08', '2018-09-23 13:29:08'),
(368, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:08', '2018-09-23 13:29:08'),
(369, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:08', '2018-09-23 13:29:08'),
(370, 'beatstore-387388404', 91, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:08', '2018-09-23 13:29:08'),
(371, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:08', '2018-09-23 13:29:08'),
(372, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:08', '2018-09-23 13:29:08'),
(373, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:08', '2018-09-23 13:29:08'),
(374, 'beatstore-387388404', 91, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:08', '2018-09-23 13:29:08'),
(375, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:08', '2018-09-23 13:29:08'),
(376, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:08', '2018-09-23 13:29:08'),
(377, 'beatstore-387388404', 58, 'exclusive', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:14', '2018-09-23 13:29:14'),
(378, 'beatstore-387388404', 58, 'premium', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:14', '2018-09-23 13:29:14'),
(379, 'beatstore-387388404', 58, 'premium', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:14', '2018-09-23 13:29:14'),
(380, 'beatstore-387388404', 58, 'premium', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:14', '2018-09-23 13:29:14'),
(381, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:14', '2018-09-23 13:29:14'),
(382, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:14', '2018-09-23 13:29:14'),
(383, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:14', '2018-09-23 13:29:14'),
(384, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:14', '2018-09-23 13:29:14'),
(385, 'beatstore-387388404', 91, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:14', '2018-09-23 13:29:14'),
(386, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:14', '2018-09-23 13:29:14'),
(387, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:14', '2018-09-23 13:29:14'),
(388, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:14', '2018-09-23 13:29:14'),
(389, 'beatstore-387388404', 91, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:14', '2018-09-23 13:29:14'),
(390, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:14', '2018-09-23 13:29:14'),
(391, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:14', '2018-09-23 13:29:14'),
(392, 'beatstore-387388404', 58, 'exclusive', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:17', '2018-09-23 13:29:17'),
(393, 'beatstore-387388404', 58, 'premium', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:17', '2018-09-23 13:29:17'),
(394, 'beatstore-387388404', 58, 'premium', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:17', '2018-09-23 13:29:17'),
(395, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:17', '2018-09-23 13:29:17'),
(396, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:17', '2018-09-23 13:29:17'),
(397, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:17', '2018-09-23 13:29:17'),
(398, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:17', '2018-09-23 13:29:17'),
(399, 'beatstore-387388404', 91, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:17', '2018-09-23 13:29:17'),
(400, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:17', '2018-09-23 13:29:17'),
(401, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:17', '2018-09-23 13:29:17'),
(402, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:17', '2018-09-23 13:29:17'),
(403, 'beatstore-387388404', 91, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:17', '2018-09-23 13:29:17'),
(404, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:17', '2018-09-23 13:29:17'),
(405, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:17', '2018-09-23 13:29:17'),
(406, 'beatstore-387388404', 58, 'exclusive', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:20', '2018-09-23 13:29:20'),
(407, 'beatstore-387388404', 58, 'premium', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:20', '2018-09-23 13:29:20'),
(408, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:20', '2018-09-23 13:29:20'),
(409, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:20', '2018-09-23 13:29:20'),
(410, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:20', '2018-09-23 13:29:20'),
(411, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:20', '2018-09-23 13:29:20'),
(412, 'beatstore-387388404', 91, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:20', '2018-09-23 13:29:20'),
(413, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:20', '2018-09-23 13:29:20'),
(414, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:20', '2018-09-23 13:29:20'),
(415, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:20', '2018-09-23 13:29:20'),
(416, 'beatstore-387388404', 91, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:20', '2018-09-23 13:29:20'),
(417, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:20', '2018-09-23 13:29:20'),
(418, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:20', '2018-09-23 13:29:20'),
(419, 'beatstore-387388404', 58, 'exclusive', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:23', '2018-09-23 13:29:23'),
(420, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:23', '2018-09-23 13:29:23'),
(421, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:23', '2018-09-23 13:29:23'),
(422, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:23', '2018-09-23 13:29:23'),
(423, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:23', '2018-09-23 13:29:23'),
(424, 'beatstore-387388404', 91, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:23', '2018-09-23 13:29:23'),
(425, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:23', '2018-09-23 13:29:23'),
(426, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:23', '2018-09-23 13:29:23'),
(427, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:23', '2018-09-23 13:29:23'),
(428, 'beatstore-387388404', 91, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:23', '2018-09-23 13:29:23'),
(429, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:23', '2018-09-23 13:29:23'),
(430, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:23', '2018-09-23 13:29:23'),
(431, 'beatstore-387388404', 58, 'exclusive', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:26', '2018-09-23 13:29:26'),
(432, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:26', '2018-09-23 13:29:26'),
(433, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:26', '2018-09-23 13:29:26'),
(434, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:26', '2018-09-23 13:29:26'),
(435, 'beatstore-387388404', 91, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:26', '2018-09-23 13:29:26'),
(436, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:26', '2018-09-23 13:29:26'),
(437, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:26', '2018-09-23 13:29:26'),
(438, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:26', '2018-09-23 13:29:26'),
(439, 'beatstore-387388404', 91, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:26', '2018-09-23 13:29:26'),
(440, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:26', '2018-09-23 13:29:26'),
(441, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:26', '2018-09-23 13:29:26'),
(442, 'beatstore-387388404', 58, 'exclusive', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:30', '2018-09-23 13:29:30'),
(443, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:30', '2018-09-23 13:29:30'),
(444, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:30', '2018-09-23 13:29:30'),
(445, 'beatstore-387388404', 91, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:30', '2018-09-23 13:29:30'),
(446, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:30', '2018-09-23 13:29:30'),
(447, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:30', '2018-09-23 13:29:30'),
(448, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:30', '2018-09-23 13:29:30'),
(449, 'beatstore-387388404', 91, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:30', '2018-09-23 13:29:30'),
(450, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:30', '2018-09-23 13:29:30'),
(451, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:30', '2018-09-23 13:29:30'),
(452, 'beatstore-387388404', 58, 'exclusive', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:33', '2018-09-23 13:29:33'),
(453, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:33', '2018-09-23 13:29:33'),
(454, 'beatstore-387388404', 91, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:33', '2018-09-23 13:29:33'),
(455, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:33', '2018-09-23 13:29:33'),
(456, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:33', '2018-09-23 13:29:33'),
(457, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:33', '2018-09-23 13:29:33'),
(458, 'beatstore-387388404', 91, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:33', '2018-09-23 13:29:33'),
(459, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:33', '2018-09-23 13:29:33'),
(460, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:33', '2018-09-23 13:29:33'),
(461, 'beatstore-387388404', 58, 'exclusive', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:36', '2018-09-23 13:29:36'),
(462, 'beatstore-387388404', 91, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:36', '2018-09-23 13:29:36'),
(463, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:36', '2018-09-23 13:29:36'),
(464, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:36', '2018-09-23 13:29:36'),
(465, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:36', '2018-09-23 13:29:36'),
(466, 'beatstore-387388404', 91, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:36', '2018-09-23 13:29:36'),
(467, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:36', '2018-09-23 13:29:36'),
(468, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:36', '2018-09-23 13:29:36'),
(469, 'beatstore-387388404', 58, 'exclusive', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:39', '2018-09-23 13:29:39'),
(470, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:39', '2018-09-23 13:29:39'),
(471, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:39', '2018-09-23 13:29:39'),
(472, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:39', '2018-09-23 13:29:39'),
(473, 'beatstore-387388404', 91, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:39', '2018-09-23 13:29:39'),
(474, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:39', '2018-09-23 13:29:39'),
(475, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:39', '2018-09-23 13:29:39'),
(476, 'beatstore-387388404', 58, 'exclusive', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:43', '2018-09-23 13:29:43'),
(477, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:43', '2018-09-23 13:29:43'),
(478, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:43', '2018-09-23 13:29:43'),
(479, 'beatstore-387388404', 91, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:43', '2018-09-23 13:29:43'),
(480, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:43', '2018-09-23 13:29:43'),
(481, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:43', '2018-09-23 13:29:43'),
(482, 'beatstore-387388404', 58, 'exclusive', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:47', '2018-09-23 13:29:47'),
(483, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:47', '2018-09-23 13:29:47'),
(484, 'beatstore-387388404', 91, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:47', '2018-09-23 13:29:47'),
(485, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:47', '2018-09-23 13:29:47'),
(486, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:47', '2018-09-23 13:29:47'),
(487, 'beatstore-387388404', 58, 'exclusive', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:51', '2018-09-23 13:29:51'),
(488, 'beatstore-387388404', 91, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:51', '2018-09-23 13:29:51'),
(489, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:51', '2018-09-23 13:29:51'),
(490, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:51', '2018-09-23 13:29:51'),
(491, 'beatstore-387388404', 58, 'exclusive', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:55', '2018-09-23 13:29:55'),
(492, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:55', '2018-09-23 13:29:55'),
(493, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:55', '2018-09-23 13:29:55'),
(494, 'beatstore-387388404', 58, 'exclusive', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:58', '2018-09-23 13:29:58'),
(495, 'beatstore-387388404', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:29:58', '2018-09-23 13:29:58'),
(496, 'beatstore-387388404', 58, 'exclusive', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:30:02', '2018-09-23 13:30:02'),
(497, 'beatstore-387388404', 58, 'exclusive', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:31:08', '2018-09-23 13:31:08'),
(498, 'beatstore-387388404', 58, 'exclusive', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:31:19', '2018-09-23 13:31:19'),
(499, 'beatstore-869803328', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:31:19', '2018-09-23 13:31:19'),
(500, 'beatstore-387388404', 58, 'exclusive', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:31:37', '2018-09-23 13:31:37'),
(501, 'beatstore-869803328', 92, 'lease', 134, 0, '', NULL, 'unpaid', '2018-09-23 13:31:37', '2018-09-23 13:31:37'),
(502, 'beatstore-861359073', 93, 'premium', 1, 0, '', NULL, 'unpaid', '2018-09-29 11:21:02', '2018-09-29 11:21:02'),
(503, 'beatstore-861359073', 93, 'premium', 1, 0, '', NULL, 'unpaid', '2018-09-29 11:21:02', '2018-09-29 11:21:02'),
(682, 'beatstore-705456701', 94, 'exclusive', 154, 0, '', NULL, 'unpaid', '2018-09-30 19:07:52', '2018-09-30 19:07:52'),
(684, 'beatstore-828457884', 84, 'lease', 2, 0, '', NULL, 'unpaid', '2018-10-07 16:02:23', '2018-10-07 16:02:23'),
(685, 'beatstore-798309945', 94, 'exclusive', 162, 0, '', NULL, 'unpaid', '2018-10-09 03:13:01', '2018-10-09 03:13:01'),
(686, 'beatstore-798309945', 94, 'exclusive', 162, 0, '', NULL, 'unpaid', '2018-10-09 03:13:01', '2018-10-09 03:13:01'),
(687, 'beatstore-798309945', 94, 'exclusive', 162, 0, '', NULL, 'unpaid', '2018-10-09 03:13:01', '2018-10-09 03:13:01'),
(688, 'beatstore-798309945', 94, 'exclusive', 162, 0, '', NULL, 'unpaid', '2018-10-09 03:13:25', '2018-10-09 03:13:25'),
(689, 'beatstore-798309945', 94, 'exclusive', 162, 0, '', NULL, 'unpaid', '2018-10-09 03:13:25', '2018-10-09 03:13:25'),
(690, 'beatstore-798309945', 94, 'exclusive', 162, 0, '', NULL, 'unpaid', '2018-10-09 03:13:30', '2018-10-09 03:13:30'),
(691, 'beatstore-798309945', 94, 'exclusive', 162, 0, '', NULL, 'unpaid', '2018-10-09 03:16:27', '2018-10-09 03:16:27'),
(692, 'beatstore-798309945', 94, 'exclusive', 162, 0, '', NULL, 'unpaid', '2018-10-09 05:03:25', '2018-10-09 05:03:25'),
(694, 'beatstore-799601173', 11, 'premium', 2, 0, '', NULL, 'unpaid', '2018-10-14 13:16:37', '2018-10-14 13:16:37'),
(704, 'beatstore-661669591', 95, 'lease', 239, 0, '', NULL, 'unpaid', '2018-10-18 13:43:42', '2018-10-18 13:43:42'),
(705, 'beatstore-661669591', 95, 'lease', 239, 0, '', NULL, 'unpaid', '2018-10-18 13:43:42', '2018-10-18 13:43:42'),
(706, 'beatstore-661669591', 97, 'lease', 239, 0, '', NULL, 'unpaid', '2018-10-18 13:43:53', '2018-10-18 13:43:53'),
(707, 'beatstore-661669591', 97, 'lease', 239, 0, '', NULL, 'unpaid', '2018-10-18 13:43:53', '2018-10-18 13:43:53'),
(708, 'beatstore-661669591', 95, 'lease', 239, 0, '', NULL, 'unpaid', '2018-10-18 13:43:53', '2018-10-18 13:43:53'),
(709, 'beatstore-661669591', 95, 'lease', 239, 0, '', NULL, 'unpaid', '2018-10-18 13:43:53', '2018-10-18 13:43:53'),
(710, 'beatstore-661669591', 97, 'lease', 239, 0, '', NULL, 'unpaid', '2018-10-18 13:44:02', '2018-10-18 13:44:02'),
(711, 'beatstore-661669591', 97, 'lease', 239, 0, '', NULL, 'unpaid', '2018-10-18 13:44:02', '2018-10-18 13:44:02'),
(712, 'beatstore-661669591', 95, 'lease', 239, 0, '', NULL, 'unpaid', '2018-10-18 13:44:02', '2018-10-18 13:44:02'),
(713, 'beatstore-661669591', 97, 'lease', 239, 0, '', NULL, 'unpaid', '2018-10-18 13:44:22', '2018-10-18 13:44:22'),
(714, 'beatstore-661669591', 97, 'lease', 239, 0, '', NULL, 'unpaid', '2018-10-18 13:44:22', '2018-10-18 13:44:22'),
(715, 'beatstore-661669591', 97, 'lease', 239, 0, '', NULL, 'unpaid', '2018-10-18 13:44:30', '2018-10-18 13:44:30'),
(717, 'beatstore-958883050', 92, 'premium', 260, 0, '', NULL, 'unpaid', '2018-10-19 13:41:29', '2018-10-19 13:41:29'),
(718, 'beatstore-958883050', 92, 'premium', 260, 0, '', NULL, 'unpaid', '2018-10-19 13:41:29', '2018-10-19 13:41:29'),
(719, 'beatstore-958883050', 92, 'premium', 260, 0, '', NULL, 'unpaid', '2018-10-19 13:41:29', '2018-10-19 13:41:29'),
(720, 'beatstore-958883050', 92, 'premium', 260, 0, '', NULL, 'unpaid', '2018-10-19 13:41:46', '2018-10-19 13:41:46'),
(721, 'beatstore-958883050', 92, 'premium', 260, 0, '', NULL, 'unpaid', '2018-10-19 13:41:46', '2018-10-19 13:41:46'),
(722, 'beatstore-958883050', 92, 'premium', 260, 0, '', NULL, 'unpaid', '2018-10-19 13:41:52', '2018-10-19 13:41:52'),
(723, 'beatstore-708613228', 92, 'premium', 260, 0, '', NULL, 'unpaid', '2018-10-19 13:52:08', '2018-10-19 13:52:08'),
(724, 'beatstore-326231200', 1, 'premium', 2, 0, '', NULL, 'unpaid', '2018-10-20 13:29:10', '2018-10-20 13:29:10'),
(725, 'beatstore-326231200', 1, 'premium', 2, 0, '', NULL, 'unpaid', '2018-10-20 13:29:10', '2018-10-20 13:29:10'),
(726, 'beatstore-326231200', 97, 'lease', 2, 0, '', NULL, 'unpaid', '2018-10-20 13:29:10', '2018-10-20 13:29:10'),
(727, 'beatstore-308880238', 97, 'lease', 2, 0, '', NULL, 'unpaid', '2018-10-20 22:09:28', '2018-10-20 22:09:28'),
(729, 'beatstore-813772743', 1, 'premium', 1, 0, '', NULL, 'unpaid', '2018-10-22 01:47:43', '2018-10-22 01:47:43'),
(730, 'beatstore-813772743', 83, 'lease', 1, 0, '', NULL, 'unpaid', '2018-10-22 01:48:22', '2018-10-22 01:48:22'),
(731, 'beatstore-813772743', 1, 'premium', 1, 0, '', NULL, 'unpaid', '2018-10-22 01:48:22', '2018-10-22 01:48:22'),
(732, 'beatstore-909415134', 94, 'lease', 2, 0, '', NULL, 'unpaid', '2018-10-23 12:27:09', '2018-10-23 12:27:09'),
(733, 'beatstore-909415134', 94, 'lease', 2, 0, '', NULL, 'unpaid', '2018-10-23 12:27:30', '2018-10-23 12:27:30'),
(735, 'beatstore-245983665', 95, 'lease', 134, 0, '', NULL, 'unpaid', '2018-10-23 19:24:31', '2018-10-23 19:24:31'),
(736, 'beatstore-245983665', 96, 'lease', 134, 0, '', NULL, 'unpaid', '2018-10-23 19:24:49', '2018-10-23 19:24:49'),
(737, 'beatstore-245983665', 95, 'lease', 134, 0, '', NULL, 'unpaid', '2018-10-23 19:24:49', '2018-10-23 19:24:49'),
(738, 'beatstore-245983665', 96, 'lease', 134, 0, '', NULL, 'unpaid', '2018-10-23 19:29:31', '2018-10-23 19:29:31'),
(739, 'beatstore-245983665', 95, 'lease', 134, 0, '', NULL, 'unpaid', '2018-10-23 19:29:31', '2018-10-23 19:29:31'),
(740, 'beatstore-245983665', 97, 'lease', 134, 0, '', NULL, 'unpaid', '2018-10-23 19:29:31', '2018-10-23 19:29:31'),
(741, 'beatstore-245983665', 96, 'lease', 134, 0, '', NULL, 'unpaid', '2018-10-23 19:29:38', '2018-10-23 19:29:38'),
(742, 'beatstore-245983665', 95, 'lease', 134, 0, '', NULL, 'unpaid', '2018-10-23 19:29:38', '2018-10-23 19:29:38'),
(743, 'beatstore-245983665', 96, 'lease', 134, 0, '', NULL, 'unpaid', '2018-10-23 19:29:39', '2018-10-23 19:29:39'),
(744, 'beatstore-170332411', 59, 'exclusive', 298, 0, '', NULL, 'unpaid', '2018-10-29 18:16:40', '2018-10-29 18:16:40'),
(745, 'beatstore-960603146', 59, 'premium', 298, 0, '', NULL, 'unpaid', '2018-10-30 04:56:45', '2018-10-30 04:56:45'),
(746, 'beatstore-592461973', 5, 'lease', 2, 0, '', NULL, 'unpaid', '2018-10-31 20:34:01', '2018-10-31 20:34:01'),
(749, 'beatstore-656429594', 62, 'lease', 300, 0, '', NULL, 'unpaid', '2018-11-01 07:01:51', '2018-11-01 07:01:51'),
(750, 'beatstore-656429594', 62, 'lease', 300, 0, '', NULL, 'unpaid', '2018-11-01 07:01:51', '2018-11-01 07:01:51'),
(752, 'beatstore-656429594', 62, 'lease', 300, 0, '', NULL, 'unpaid', '2018-11-01 07:02:07', '2018-11-01 07:02:07'),
(753, 'beatstore-656429594', 62, 'lease', 300, 0, '', NULL, 'unpaid', '2018-11-01 07:02:07', '2018-11-01 07:02:07'),
(754, 'beatstore-656429594', 62, 'lease', 300, 0, '', NULL, 'unpaid', '2018-11-01 07:02:07', '2018-11-01 07:02:07'),
(755, 'beatstore-656429594', 62, 'exclusive', 300, 0, '', NULL, 'unpaid', '2018-11-01 07:02:07', '2018-11-01 07:02:07'),
(756, 'beatstore-656429594', 62, 'lease', 300, 0, '', NULL, 'unpaid', '2018-11-01 07:02:11', '2018-11-01 07:02:11'),
(757, 'beatstore-656429594', 62, 'lease', 300, 0, '', NULL, 'unpaid', '2018-11-01 07:02:11', '2018-11-01 07:02:11'),
(758, 'beatstore-656429594', 62, 'lease', 300, 0, '', NULL, 'unpaid', '2018-11-01 07:02:11', '2018-11-01 07:02:11'),
(759, 'beatstore-656429594', 62, 'lease', 300, 0, '', NULL, 'unpaid', '2018-11-01 07:02:14', '2018-11-01 07:02:14'),
(760, 'beatstore-656429594', 62, 'lease', 300, 0, '', NULL, 'unpaid', '2018-11-01 07:02:14', '2018-11-01 07:02:14'),
(761, 'beatstore-656429594', 62, 'lease', 300, 0, '', NULL, 'unpaid', '2018-11-01 07:02:24', '2018-11-01 07:02:24'),
(762, 'beatstore-656429594', 62, 'lease', 300, 0, '', NULL, 'unpaid', '2018-11-01 07:03:45', '2018-11-01 07:03:45'),
(763, 'beatstore-656429594', 62, 'lease', 300, 0, '', NULL, 'unpaid', '2018-11-01 07:05:06', '2018-11-01 07:05:06'),
(764, 'beatstore-656429594', 62, 'lease', 300, 0, '', NULL, 'unpaid', '2018-11-01 07:05:13', '2018-11-01 07:05:13'),
(765, 'beatstore-656429594', 62, 'lease', 300, 0, '', NULL, 'unpaid', '2018-11-01 07:05:16', '2018-11-01 07:05:16'),
(770, 'beatstore-758487284', 94, 'exclusive', 1, 0, '', NULL, 'unpaid', '2018-11-02 16:22:06', '2018-11-02 16:22:06'),
(771, 'beatstore-553080431', 92, 'lease', 1, 0, '', NULL, 'unpaid', '2018-11-02 18:44:05', '2018-11-02 18:44:05'),
(772, 'beatstore-553080431', 12, 'premium', 1, 0, '', NULL, 'unpaid', '2018-11-02 18:44:05', '2018-11-02 18:44:05'),
(773, 'beatstore-553080431', 8, 'premium', 1, 0, '', NULL, 'unpaid', '2018-11-02 18:44:05', '2018-11-02 18:44:05'),
(774, 'beatstore-988207551', 97, 'lease', 2, 0, '', NULL, 'unpaid', '2018-11-02 23:13:31', '2018-11-02 23:13:31'),
(775, 'beatstore-988207551', 97, 'lease', 2, 0, '', NULL, 'unpaid', '2018-11-02 23:24:27', '2018-11-02 23:24:27'),
(776, 'beatstore-988207551', 1, 'premium', 2, 0, '', NULL, 'unpaid', '2018-11-02 23:24:27', '2018-11-02 23:24:27'),
(777, 'beatstore-988207551', 1, 'premium', 2, 0, '', NULL, 'unpaid', '2018-11-02 23:24:34', '2018-11-02 23:24:34'),
(778, 'beatstore-88961233', 97, 'lease', 1, 0, '', NULL, 'unpaid', '2018-11-04 17:40:06', '2018-11-04 17:40:06'),
(779, 'beatstore-88961233', 94, 'premium', 1, 0, '', NULL, 'unpaid', '2018-11-04 17:40:06', '2018-11-04 17:40:06'),
(780, 'beatstore-275633274', 82, 'lease', 313, 0, '', NULL, 'unpaid', '2018-11-12 11:08:18', '2018-11-12 11:08:18'),
(781, 'beatstore-275633274', 82, 'lease', 313, 0, '', NULL, 'unpaid', '2018-11-12 11:09:20', '2018-11-12 11:09:20'),
(782, 'beatstore-275633274', 82, 'lease', 313, 0, '', NULL, 'unpaid', '2018-11-12 11:10:19', '2018-11-12 11:10:19'),
(783, 'beatstore-275633274', 82, 'lease', 313, 0, '', NULL, 'unpaid', '2018-11-12 11:10:25', '2018-11-12 11:10:25'),
(784, 'beatstore-254328973', 17, 'lease', 323, 0, '', NULL, 'unpaid', '2018-11-23 12:13:27', '2018-11-23 12:13:27'),
(785, 'beatstore-93913404', 96, 'premium', 2, 0, '', NULL, 'unpaid', '2018-12-02 11:58:12', '2018-12-02 11:58:12'),
(787, 'beatstore-819822400', 59, 'lease', 333, 0, '', NULL, 'unpaid', '2018-12-14 17:08:20', '2018-12-14 17:08:20'),
(788, 'beatstore-819822400', 59, 'lease', 333, 0, '', NULL, 'unpaid', '2018-12-14 17:08:20', '2018-12-14 17:08:20'),
(789, 'beatstore-819822400', 59, 'lease', 333, 0, '', NULL, 'unpaid', '2018-12-14 17:08:25', '2018-12-14 17:08:25'),
(790, 'beatstore-819822400', 59, 'lease', 333, 0, '', NULL, 'unpaid', '2018-12-14 17:08:25', '2018-12-14 17:08:25'),
(791, 'beatstore-819822400', 59, 'lease', 333, 0, '', NULL, 'unpaid', '2018-12-14 17:08:29', '2018-12-14 17:08:29'),
(792, 'beatstore-819822400', 59, 'lease', 333, 0, '', NULL, 'unpaid', '2018-12-14 17:09:58', '2018-12-14 17:09:58'),
(793, 'beatstore-850561424', 97, 'lease', 353, 0, '', NULL, 'unpaid', '2018-12-23 00:03:58', '2018-12-23 00:03:58'),
(794, 'beatstore-850561424', 97, 'lease', 353, 0, '', NULL, 'unpaid', '2018-12-23 00:06:28', '2018-12-23 00:06:28'),
(795, 'beatstore-370932311', 97, 'lease', 353, 0, '', NULL, 'unpaid', '2018-12-23 02:12:58', '2018-12-23 02:12:58'),
(796, 'beatstore-783919011', 92, 'lease', 354, 0, '', NULL, 'unpaid', '2018-12-24 13:53:27', '2018-12-24 13:53:27'),
(797, 'beatstore-895869101', 94, 'lease', 369, 0, '', NULL, 'unpaid', '2019-01-03 01:18:22', '2019-01-03 01:18:22'),
(798, 'beatstore-895869101', 92, 'lease', 369, 0, '', NULL, 'unpaid', '2019-01-03 01:18:22', '2019-01-03 01:18:22');
INSERT INTO `carts` (`id`, `trans_ref`, `beat_id`, `beat_type`, `buyer_id`, `seller_id`, `beat_name`, `amount`, `status`, `created`, `modified`) VALUES
(799, 'beatstore-208467087', 97, 'lease', 354, 0, '', NULL, 'unpaid', '2019-01-07 16:27:11', '2019-01-07 16:27:11'),
(807, 'beatstore-860751432', 104, 'lease', 375, 0, '', NULL, 'unpaid', '2019-01-08 09:50:11', '2019-01-08 09:50:11'),
(808, 'beatstore-860751432', 104, 'premium', 375, 0, '', NULL, 'unpaid', '2019-01-08 09:50:11', '2019-01-08 09:50:11'),
(809, 'beatstore-860751432', 104, 'lease', 375, 0, '', NULL, 'unpaid', '2019-01-08 09:50:25', '2019-01-08 09:50:25'),
(810, 'beatstore-860751432', 104, 'premium', 375, 0, '', NULL, 'unpaid', '2019-01-08 09:50:25', '2019-01-08 09:50:25'),
(828, 'beatstore-764747257', 104, 'premium', 2, 0, '', NULL, 'unpaid', '2019-01-11 10:20:30', '2019-01-11 10:20:30'),
(830, 'beatstore-620797810', 4, 'premium', 380, 0, '', NULL, 'unpaid', '2019-01-13 04:13:15', '2019-01-13 04:13:15'),
(831, 'beatstore-620797810', 4, 'premium', 380, 0, '', NULL, 'unpaid', '2019-01-13 04:13:49', '2019-01-13 04:13:49'),
(832, 'beatstore-620797810', 4, 'premium', 380, 0, '', NULL, 'unpaid', '2019-01-13 04:16:23', '2019-01-13 04:16:23'),
(833, 'beatstore-620797810', 4, 'premium', 380, 0, '', NULL, 'unpaid', '2019-01-13 04:24:52', '2019-01-13 04:24:52'),
(834, 'beatstore-620797810', 83, 'lease', 380, 0, '', NULL, 'unpaid', '2019-01-13 04:24:52', '2019-01-13 04:24:52'),
(835, 'beatstore-620797810', 83, 'lease', 380, 0, '', NULL, 'unpaid', '2019-01-13 04:25:04', '2019-01-13 04:25:04'),
(836, 'beatstore-620797810', 83, 'lease', 380, 0, '', NULL, 'unpaid', '2019-01-13 04:25:53', '2019-01-13 04:25:53'),
(837, 'beatstore-620797810', 83, 'lease', 380, 0, '', NULL, 'unpaid', '2019-01-13 04:25:54', '2019-01-13 04:25:54'),
(838, 'beatstore-620797810', 83, 'lease', 380, 0, '', NULL, 'unpaid', '2019-01-13 04:31:55', '2019-01-13 04:31:55'),
(839, 'beatstore-450246571', 4, 'lease', 15, 0, '', NULL, 'unpaid', '2019-01-13 14:42:26', '2019-01-13 14:42:26'),
(840, 'beatstore-384018371', 83, 'premium', 380, 0, '', NULL, 'unpaid', '2019-01-14 23:17:54', '2019-01-14 23:17:54'),
(841, 'beatstore-631083048', 1, 'premium', 2, 0, '', NULL, 'unpaid', '2019-01-15 13:07:06', '2019-01-15 13:07:06'),
(845, 'beatstore-220142993', 83, 'premium', 380, 0, '', NULL, 'unpaid', '2019-01-18 01:55:55', '2019-01-18 01:55:55'),
(846, 'beatstore-220142993', 83, 'premium', 380, 0, '', NULL, 'unpaid', '2019-01-18 02:03:54', '2019-01-18 02:03:54'),
(847, 'beatstore-220142993', 83, 'premium', 380, 0, '', NULL, 'unpaid', '2019-01-18 02:04:01', '2019-01-18 02:04:01'),
(848, 'beatstore-220142993', 83, 'premium', 380, 0, '', NULL, 'unpaid', '2019-01-18 02:04:06', '2019-01-18 02:04:06'),
(849, 'beatstore-220142993', 83, 'premium', 380, 0, '', NULL, 'unpaid', '2019-01-18 02:22:37', '2019-01-18 02:22:37'),
(850, 'beatstore-220142993', 83, 'premium', 380, 0, '', NULL, 'unpaid', '2019-01-18 02:22:40', '2019-01-18 02:22:40'),
(851, 'beatstore-220142993', 83, 'premium', 380, 0, '', NULL, 'unpaid', '2019-01-18 02:22:44', '2019-01-18 02:22:44'),
(852, 'beatstore-220142993', 83, 'premium', 380, 0, '', NULL, 'unpaid', '2019-01-18 02:23:11', '2019-01-18 02:23:11'),
(853, 'beatstore-220142993', 83, 'premium', 380, 0, '', NULL, 'unpaid', '2019-01-18 02:23:11', '2019-01-18 02:23:11'),
(854, 'beatstore-220142993', 83, 'premium', 380, 0, '', NULL, 'unpaid', '2019-01-18 02:23:13', '2019-01-18 02:23:13'),
(855, 'beatstore-220142993', 83, 'premium', 380, 0, '', NULL, 'unpaid', '2019-01-18 02:23:14', '2019-01-18 02:23:14'),
(856, 'beatstore-220142993', 83, 'premium', 380, 0, '', NULL, 'unpaid', '2019-01-18 02:23:15', '2019-01-18 02:23:15'),
(857, 'beatstore-220142993', 83, 'premium', 380, 0, '', NULL, 'unpaid', '2019-01-18 02:23:16', '2019-01-18 02:23:16'),
(858, 'beatstore-220142993', 83, 'premium', 380, 0, '', NULL, 'unpaid', '2019-01-18 02:23:17', '2019-01-18 02:23:17'),
(859, 'beatstore-220142993', 83, 'premium', 380, 0, '', NULL, 'unpaid', '2019-01-18 02:23:40', '2019-01-18 02:23:40'),
(860, 'beatstore-220142993', 83, 'premium', 380, 0, '', NULL, 'unpaid', '2019-01-18 02:23:40', '2019-01-18 02:23:40'),
(861, 'beatstore-220142993', 83, 'premium', 380, 0, '', NULL, 'unpaid', '2019-01-18 02:23:46', '2019-01-18 02:23:46'),
(862, 'beatstore-220142993', 83, 'premium', 380, 0, '', NULL, 'unpaid', '2019-01-18 02:27:50', '2019-01-18 02:27:50'),
(863, 'beatstore-220142993', 83, 'premium', 380, 0, '', NULL, 'unpaid', '2019-01-18 02:27:55', '2019-01-18 02:27:55'),
(864, 'beatstore-220142993', 83, 'premium', 380, 0, '', NULL, 'unpaid', '2019-01-18 02:28:11', '2019-01-18 02:28:11'),
(865, 'beatstore-685181974', 83, 'premium', 380, 0, '', NULL, 'unpaid', '2019-01-18 12:26:57', '2019-01-18 12:26:57'),
(866, 'beatstore-348936514', 113, 'lease', 1, 0, '', NULL, 'unpaid', '2019-01-19 19:26:29', '2019-01-19 19:26:29'),
(867, 'beatstore-607089864', 1, 'lease', 391, 0, '', NULL, 'unpaid', '2019-01-20 16:26:51', '2019-01-20 16:26:51'),
(868, 'beatstore-856074310', 1, 'lease', 1, 0, '', NULL, 'unpaid', '2019-01-20 17:18:59', '2019-01-20 17:18:59'),
(870, 'beatstore-569903201', 83, 'premium', 380, 0, '', '7000', 'paid', '2019-01-22 00:29:23', '2019-01-22 00:29:23'),
(871, 'beatstore-733338791', 1, 'premium', 380, 0, '', NULL, 'unpaid', '2019-01-22 01:21:52', '2019-01-22 01:21:52'),
(872, 'beatstore-733338791', 1, 'premium', 380, 0, '', NULL, 'unpaid', '2019-01-22 01:21:52', '2019-01-22 01:21:52'),
(873, 'beatstore-449937469', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-22 16:59:31', '2019-01-22 16:59:31'),
(874, 'beatstore-449937469', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-22 17:11:13', '2019-01-22 17:11:13'),
(875, 'beatstore-449937469', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-22 17:11:44', '2019-01-22 17:11:44'),
(876, 'beatstore-321681962', 2, 'premium', 409, 0, '', NULL, 'unpaid', '2019-01-22 17:43:46', '2019-01-22 17:43:46'),
(877, 'beatstore-556058977', 11, 'lease', 9, 0, '', '5000', 'paid', '2019-01-22 17:44:24', '2019-01-22 17:44:24'),
(878, 'beatstore-556058977', 11, 'lease', 9, 0, '', '5000', 'paid', '2019-01-22 17:44:46', '2019-01-22 17:44:46'),
(879, 'beatstore-450904197', 2, 'premium', 409, 0, '', NULL, 'unpaid', '2019-01-22 18:31:13', '2019-01-22 18:31:13'),
(880, 'beatstore-450904197', 2, 'premium', 409, 0, '', NULL, 'unpaid', '2019-01-22 18:33:27', '2019-01-22 18:33:27'),
(881, 'beatstore-450904197', 2, 'premium', 409, 0, '', NULL, 'unpaid', '2019-01-22 18:36:32', '2019-01-22 18:36:32'),
(882, 'beatstore-450904197', 2, 'premium', 409, 0, '', NULL, 'unpaid', '2019-01-22 18:44:39', '2019-01-22 18:44:39'),
(883, 'beatstore-450904197', 2, 'premium', 409, 0, '', NULL, 'unpaid', '2019-01-22 18:45:10', '2019-01-22 18:45:10'),
(884, 'beatstore-450904197', 2, 'premium', 409, 0, '', NULL, 'unpaid', '2019-01-22 18:45:31', '2019-01-22 18:45:31'),
(885, 'beatstore-450904197', 2, 'premium', 409, 0, '', NULL, 'unpaid', '2019-01-22 18:47:24', '2019-01-22 18:47:24'),
(886, 'beatstore-450904197', 2, 'premium', 409, 0, '', NULL, 'unpaid', '2019-01-22 18:51:37', '2019-01-22 18:51:37'),
(887, 'beatstore-450904197', 2, 'premium', 409, 0, '', NULL, 'unpaid', '2019-01-22 19:02:13', '2019-01-22 19:02:13'),
(888, 'beatstore-530046554', 15, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-22 19:06:40', '2019-01-22 19:06:40'),
(889, 'beatstore-530046554', 15, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-22 19:08:41', '2019-01-22 19:08:41'),
(890, 'beatstore-530046554', 15, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-22 19:18:43', '2019-01-22 19:18:43'),
(891, 'beatstore-530046554', 15, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-22 19:18:47', '2019-01-22 19:18:47'),
(892, 'beatstore-690068207', 2, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-22 20:51:41', '2019-01-22 20:51:41'),
(893, 'beatstore-690068207', 2, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-22 20:51:41', '2019-01-22 20:51:41'),
(894, 'beatstore-898252474', 11, 'premium', 9, 0, '', '7000', 'paid', '2019-01-22 23:34:03', '2019-01-22 23:34:03'),
(895, 'beatstore-783846369', 1, 'lease', 414, 0, '', NULL, 'unpaid', '2019-01-23 07:34:38', '2019-01-23 07:34:38'),
(906, 'beatstore-345281868', 2, 'premium', 409, 0, '', NULL, 'unpaid', '2019-01-23 18:43:41', '2019-01-23 18:43:41'),
(907, 'beatstore-345281868', 2, 'premium', 409, 0, '', NULL, 'unpaid', '2019-01-23 18:43:42', '2019-01-23 18:43:42'),
(908, 'beatstore-345281868', 2, 'premium', 409, 0, '', NULL, 'unpaid', '2019-01-23 18:44:36', '2019-01-23 18:44:36'),
(909, 'beatstore-345281868', 2, 'premium', 409, 0, '', NULL, 'unpaid', '2019-01-23 18:44:42', '2019-01-23 18:44:42'),
(910, 'beatstore-137225143', 1, 'premium', 409, 0, '', NULL, 'unpaid', '2019-01-23 19:52:16', '2019-01-23 19:52:16'),
(911, 'beatstore-137225143', 1, 'premium', 409, 0, '', NULL, 'unpaid', '2019-01-23 19:53:31', '2019-01-23 19:53:31'),
(912, 'beatstore-137225143', 1, 'premium', 409, 0, '', NULL, 'unpaid', '2019-01-23 19:54:03', '2019-01-23 19:54:03'),
(913, 'beatstore-137225143', 1, 'premium', 409, 0, '', NULL, 'unpaid', '2019-01-23 19:54:50', '2019-01-23 19:54:50'),
(920, 'beatstore-339131787', 14, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-23 20:32:46', '2019-01-23 20:32:46'),
(921, 'beatstore-339131787', 14, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-23 20:33:38', '2019-01-23 20:33:38'),
(922, 'beatstore-339131787', 14, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-23 20:34:02', '2019-01-23 20:34:02'),
(923, 'beatstore-339131787', 14, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-23 20:34:25', '2019-01-23 20:34:25'),
(924, 'beatstore-339131787', 14, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-23 20:34:37', '2019-01-23 20:34:37'),
(925, 'beatstore-339131787', 14, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-23 20:37:04', '2019-01-23 20:37:04'),
(926, 'beatstore-339131787', 14, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-23 20:37:10', '2019-01-23 20:37:10'),
(927, 'beatstore-339131787', 14, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-23 20:47:36', '2019-01-23 20:47:36'),
(928, 'beatstore-339131787', 14, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-23 20:48:24', '2019-01-23 20:48:24'),
(929, 'beatstore-339131787', 14, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-23 20:49:04', '2019-01-23 20:49:04'),
(930, 'beatstore-339131787', 14, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-23 20:50:46', '2019-01-23 20:50:46'),
(931, 'beatstore-339131787', 14, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-23 20:53:23', '2019-01-23 20:53:23'),
(932, 'beatstore-55495377', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-23 20:55:14', '2019-01-23 20:55:14'),
(933, 'beatstore-339131787', 14, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-23 20:59:44', '2019-01-23 20:59:44'),
(934, 'beatstore-339131787', 14, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-23 21:10:22', '2019-01-23 21:10:22'),
(935, 'beatstore-339131787', 14, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-23 21:11:47', '2019-01-23 21:11:47'),
(936, 'beatstore-339131787', 14, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-23 21:12:09', '2019-01-23 21:12:09'),
(937, 'beatstore-339131787', 14, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-23 21:12:23', '2019-01-23 21:12:23'),
(938, 'beatstore-339131787', 14, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-23 21:13:03', '2019-01-23 21:13:03'),
(939, 'beatstore-339131787', 14, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-23 21:14:02', '2019-01-23 21:14:02'),
(940, 'beatstore-339131787', 14, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-23 21:15:45', '2019-01-23 21:15:45'),
(941, 'beatstore-339131787', 14, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-23 21:15:50', '2019-01-23 21:15:50'),
(942, 'beatstore-339131787', 14, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-23 21:16:34', '2019-01-23 21:16:34'),
(943, 'beatstore-339131787', 14, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-23 21:16:37', '2019-01-23 21:16:37'),
(944, 'beatstore-339131787', 14, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-23 21:17:26', '2019-01-23 21:17:26'),
(945, 'beatstore-339131787', 14, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-23 21:18:43', '2019-01-23 21:18:43'),
(946, 'beatstore-339131787', 14, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-23 21:19:51', '2019-01-23 21:19:51'),
(947, 'beatstore-339131787', 14, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-23 21:25:50', '2019-01-23 21:25:50'),
(948, 'beatstore-339131787', 14, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-23 21:26:44', '2019-01-23 21:26:44'),
(949, 'beatstore-339131787', 14, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-23 21:29:18', '2019-01-23 21:29:18'),
(950, 'beatstore-339131787', 14, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-23 21:31:07', '2019-01-23 21:31:07'),
(951, 'beatstore-339131787', 14, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-23 21:31:54', '2019-01-23 21:31:54'),
(952, 'beatstore-339131787', 14, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-23 21:32:43', '2019-01-23 21:32:43'),
(953, 'beatstore-339131787', 14, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-23 21:33:17', '2019-01-23 21:33:17'),
(954, 'beatstore-339131787', 14, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-23 21:34:27', '2019-01-23 21:34:27'),
(955, 'beatstore-339131787', 14, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-23 21:38:35', '2019-01-23 21:38:35'),
(956, 'beatstore-339131787', 14, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-23 21:40:32', '2019-01-23 21:40:32'),
(957, 'beatstore-339131787', 14, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-23 21:46:51', '2019-01-23 21:46:51'),
(958, 'beatstore-339131787', 14, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-23 21:50:56', '2019-01-23 21:50:56'),
(959, 'beatstore-339131787', 14, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-23 21:53:37', '2019-01-23 21:53:37'),
(960, 'beatstore-339131787', 14, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-23 21:54:37', '2019-01-23 21:54:37'),
(961, 'beatstore-339131787', 14, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-23 22:11:34', '2019-01-23 22:11:34'),
(962, 'beatstore-501710004', 1, 'lease', 414, 0, '', NULL, 'unpaid', '2019-01-24 15:27:06', '2019-01-24 15:27:06'),
(963, 'beatstore-501710004', 1, 'lease', 414, 0, '', NULL, 'unpaid', '2019-01-24 15:28:10', '2019-01-24 15:28:10'),
(964, 'beatstore-501710004', 1, 'lease', 414, 0, '', NULL, 'unpaid', '2019-01-24 15:44:15', '2019-01-24 15:44:15'),
(965, 'beatstore-501710004', 1, 'lease', 414, 0, '', NULL, 'unpaid', '2019-01-24 15:48:21', '2019-01-24 15:48:21'),
(966, 'beatstore-135707358', 1, 'lease', 414, 0, '', NULL, 'unpaid', '2019-01-24 18:33:03', '2019-01-24 18:33:03'),
(967, 'beatstore-980072825', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-24 18:36:25', '2019-01-24 18:36:25'),
(968, 'beatstore-980072825', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-24 18:37:03', '2019-01-24 18:37:03'),
(969, 'beatstore-980072825', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-24 18:45:05', '2019-01-24 18:45:05'),
(970, 'beatstore-980072825', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-24 18:54:15', '2019-01-24 18:54:15'),
(971, 'beatstore-980072825', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-24 18:55:58', '2019-01-24 18:55:58'),
(972, 'beatstore-980072825', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-24 18:58:09', '2019-01-24 18:58:09'),
(973, 'beatstore-980072825', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-24 19:01:29', '2019-01-24 19:01:29'),
(974, 'beatstore-867065683', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-24 19:38:17', '2019-01-24 19:38:17'),
(975, 'beatstore-867065683', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-24 19:40:19', '2019-01-24 19:40:19'),
(976, 'beatstore-867065683', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-24 19:43:28', '2019-01-24 19:43:28'),
(977, 'beatstore-867065683', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-24 19:43:56', '2019-01-24 19:43:56'),
(978, 'beatstore-867065683', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-24 19:44:25', '2019-01-24 19:44:25'),
(979, 'beatstore-867065683', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-24 19:45:43', '2019-01-24 19:45:43'),
(980, 'beatstore-867065683', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-24 19:47:27', '2019-01-24 19:47:27'),
(981, 'beatstore-867065683', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-24 19:48:25', '2019-01-24 19:48:25'),
(982, 'beatstore-867065683', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-24 19:49:16', '2019-01-24 19:49:16'),
(983, 'beatstore-867065683', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-24 19:49:56', '2019-01-24 19:49:56'),
(984, 'beatstore-867065683', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-24 19:53:30', '2019-01-24 19:53:30'),
(985, 'beatstore-867065683', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-24 20:02:02', '2019-01-24 20:02:02'),
(986, 'beatstore-867065683', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-24 20:04:53', '2019-01-24 20:04:53'),
(987, 'beatstore-867065683', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-24 20:07:51', '2019-01-24 20:07:51'),
(988, 'beatstore-867065683', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-24 20:09:22', '2019-01-24 20:09:22'),
(989, 'beatstore-867065683', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-24 20:12:19', '2019-01-24 20:12:19'),
(990, 'beatstore-867065683', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-24 20:14:20', '2019-01-24 20:14:20'),
(991, 'beatstore-867065683', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-24 20:17:56', '2019-01-24 20:17:56'),
(992, 'beatstore-867065683', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-24 20:19:34', '2019-01-24 20:19:34'),
(993, 'beatstore-867065683', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-24 20:25:25', '2019-01-24 20:25:25'),
(994, 'beatstore-867065683', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-24 20:29:25', '2019-01-24 20:29:25'),
(995, 'beatstore-867065683', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-24 20:29:25', '2019-01-24 20:29:25'),
(996, 'beatstore-867065683', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-24 20:29:33', '2019-01-24 20:29:33'),
(997, 'beatstore-867065683', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-24 20:45:22', '2019-01-24 20:45:22'),
(998, 'beatstore-867065683', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-24 20:45:33', '2019-01-24 20:45:33'),
(999, 'beatstore-867065683', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-24 20:46:16', '2019-01-24 20:46:16'),
(1000, 'beatstore-867065683', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-24 20:46:27', '2019-01-24 20:46:27'),
(1001, 'beatstore-867065683', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-24 20:46:31', '2019-01-24 20:46:31'),
(1002, 'beatstore-867065683', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-24 20:49:50', '2019-01-24 20:49:50'),
(1003, 'beatstore-867065683', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-24 20:54:12', '2019-01-24 20:54:12'),
(1004, 'beatstore-867065683', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-24 21:01:39', '2019-01-24 21:01:39'),
(1005, 'beatstore-867065683', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-24 21:13:46', '2019-01-24 21:13:46'),
(1006, 'beatstore-867065683', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-24 21:16:55', '2019-01-24 21:16:55'),
(1007, 'beatstore-867065683', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-24 21:19:54', '2019-01-24 21:19:54'),
(1008, 'beatstore-867065683', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-24 21:24:55', '2019-01-24 21:24:55'),
(1009, 'beatstore-180943695', 1, 'premium', 9, 0, '', NULL, 'unpaid', '2019-01-24 21:26:08', '2019-01-24 21:26:08'),
(1010, 'beatstore-867065683', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-24 21:31:04', '2019-01-24 21:31:04'),
(1011, 'beatstore-867065683', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-24 21:33:26', '2019-01-24 21:33:26'),
(1012, 'beatstore-867065683', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-24 21:34:36', '2019-01-24 21:34:36'),
(1013, 'beatstore-867065683', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-24 21:37:37', '2019-01-24 21:37:37'),
(1014, 'beatstore-867065683', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-24 21:39:28', '2019-01-24 21:39:28'),
(1015, 'beatstore-867065683', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-24 21:40:51', '2019-01-24 21:40:51'),
(1016, 'beatstore-867065683', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-24 21:42:55', '2019-01-24 21:42:55'),
(1017, 'beatstore-867065683', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-24 21:43:25', '2019-01-24 21:43:25'),
(1018, 'beatstore-867065683', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-24 21:44:19', '2019-01-24 21:44:19'),
(1023, 'beatstore-815711201', 1, 'lease', 420, 0, '', NULL, 'unpaid', '2019-01-25 07:01:08', '2019-01-25 07:01:08'),
(1024, 'beatstore-123919061', 1, 'lease', 414, 0, '', NULL, 'unpaid', '2019-01-25 09:05:26', '2019-01-25 09:05:26'),
(1025, 'beatstore-123919061', 1, 'lease', 414, 0, '', NULL, 'unpaid', '2019-01-25 09:10:48', '2019-01-25 09:10:48'),
(1026, 'beatstore-123919061', 1, 'lease', 414, 0, '', NULL, 'unpaid', '2019-01-25 09:13:14', '2019-01-25 09:13:14'),
(1027, 'beatstore-123919061', 1, 'lease', 414, 0, '', NULL, 'unpaid', '2019-01-25 09:14:58', '2019-01-25 09:14:58'),
(1028, 'beatstore-123919061', 1, 'lease', 414, 0, '', NULL, 'unpaid', '2019-01-25 09:16:18', '2019-01-25 09:16:18'),
(1029, 'beatstore-123919061', 1, 'lease', 414, 0, '', NULL, 'unpaid', '2019-01-25 09:21:04', '2019-01-25 09:21:04'),
(1030, 'beatstore-123919061', 1, 'lease', 414, 0, '', NULL, 'unpaid', '2019-01-25 09:25:16', '2019-01-25 09:25:16'),
(1031, 'beatstore-123919061', 1, 'lease', 414, 0, '', NULL, 'unpaid', '2019-01-25 09:26:08', '2019-01-25 09:26:08'),
(1032, 'beatstore-123919061', 1, 'lease', 414, 0, '', NULL, 'unpaid', '2019-01-25 09:28:12', '2019-01-25 09:28:12'),
(1033, 'beatstore-123919061', 1, 'lease', 414, 0, '', NULL, 'unpaid', '2019-01-25 09:28:58', '2019-01-25 09:28:58'),
(1034, 'beatstore-123919061', 1, 'lease', 414, 0, '', NULL, 'unpaid', '2019-01-25 09:30:13', '2019-01-25 09:30:13'),
(1035, 'beatstore-123919061', 1, 'lease', 414, 0, '', NULL, 'unpaid', '2019-01-25 09:30:38', '2019-01-25 09:30:38'),
(1036, 'beatstore-123919061', 1, 'lease', 414, 0, '', NULL, 'unpaid', '2019-01-25 09:31:35', '2019-01-25 09:31:35'),
(1037, 'beatstore-123919061', 1, 'lease', 414, 0, '', NULL, 'unpaid', '2019-01-25 09:33:15', '2019-01-25 09:33:15'),
(1038, 'beatstore-123919061', 1, 'lease', 414, 0, '', NULL, 'unpaid', '2019-01-25 09:34:45', '2019-01-25 09:34:45'),
(1039, 'beatstore-123919061', 1, 'lease', 414, 0, '', NULL, 'unpaid', '2019-01-25 09:35:29', '2019-01-25 09:35:29'),
(1040, 'beatstore-300247766', 4, 'premium', 1, 0, '', NULL, 'unpaid', '2019-01-25 14:31:03', '2019-01-25 14:31:03'),
(1041, 'beatstore-90343081', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-25 18:31:20', '2019-01-25 18:31:20'),
(1042, 'beatstore-90343081', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-25 18:51:33', '2019-01-25 18:51:33'),
(1043, 'beatstore-90343081', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-25 18:51:40', '2019-01-25 18:51:40'),
(1044, 'beatstore-90343081', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-25 18:52:53', '2019-01-25 18:52:53'),
(1045, 'beatstore-90343081', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-25 18:53:45', '2019-01-25 18:53:45'),
(1046, 'beatstore-90343081', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-25 18:56:41', '2019-01-25 18:56:41'),
(1047, 'beatstore-90343081', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-25 18:58:20', '2019-01-25 18:58:20'),
(1048, 'beatstore-90343081', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-25 19:00:48', '2019-01-25 19:00:48'),
(1049, 'beatstore-90343081', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-25 19:15:02', '2019-01-25 19:15:02'),
(1050, 'beatstore-439436560', 4, 'premium', 409, 0, '', NULL, 'unpaid', '2019-01-25 20:03:10', '2019-01-25 20:03:10'),
(1051, 'beatstore-439436560', 4, 'premium', 409, 0, '', NULL, 'unpaid', '2019-01-25 20:04:49', '2019-01-25 20:04:49'),
(1052, 'beatstore-368341490', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-26 05:12:38', '2019-01-26 05:12:38'),
(1053, 'beatstore-368341490', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-26 05:13:15', '2019-01-26 05:13:15'),
(1054, 'beatstore-368341490', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-26 05:18:30', '2019-01-26 05:18:30'),
(1055, 'beatstore-368341490', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-26 05:19:24', '2019-01-26 05:19:24'),
(1056, 'beatstore-368341490', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-26 05:19:55', '2019-01-26 05:19:55'),
(1057, 'beatstore-368341490', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-26 05:20:24', '2019-01-26 05:20:24'),
(1058, 'beatstore-368341490', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-26 05:21:47', '2019-01-26 05:21:47'),
(1059, 'beatstore-368341490', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-26 05:27:01', '2019-01-26 05:27:01'),
(1060, 'beatstore-368341490', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-26 05:27:27', '2019-01-26 05:27:27'),
(1061, 'beatstore-368341490', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-26 05:28:11', '2019-01-26 05:28:11'),
(1062, 'beatstore-368341490', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-26 05:29:57', '2019-01-26 05:29:57'),
(1063, 'beatstore-368341490', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-26 05:31:02', '2019-01-26 05:31:02'),
(1064, 'beatstore-368341490', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-26 05:32:40', '2019-01-26 05:32:40'),
(1065, 'beatstore-368341490', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-26 05:35:34', '2019-01-26 05:35:34'),
(1066, 'beatstore-368341490', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-26 05:36:58', '2019-01-26 05:36:58'),
(1067, 'beatstore-368341490', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-26 05:37:00', '2019-01-26 05:37:00'),
(1068, 'beatstore-368341490', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-26 05:39:51', '2019-01-26 05:39:51'),
(1069, 'beatstore-368341490', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-26 05:44:16', '2019-01-26 05:44:16'),
(1070, 'beatstore-126599201', 1, 'lease', 414, 0, '', NULL, 'unpaid', '2019-01-26 05:44:17', '2019-01-26 05:44:17'),
(1071, 'beatstore-368341490', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-26 05:44:18', '2019-01-26 05:44:18'),
(1072, 'beatstore-368341490', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-26 05:45:18', '2019-01-26 05:45:18'),
(1073, 'beatstore-368341490', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-26 05:45:20', '2019-01-26 05:45:20'),
(1074, 'beatstore-368341490', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-26 05:46:09', '2019-01-26 05:46:09'),
(1075, 'beatstore-126599201', 1, 'lease', 414, 0, '', NULL, 'unpaid', '2019-01-26 05:47:50', '2019-01-26 05:47:50'),
(1076, 'beatstore-368341490', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-26 06:00:58', '2019-01-26 06:00:58'),
(1077, 'beatstore-368341490', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-26 06:07:09', '2019-01-26 06:07:09'),
(1078, 'beatstore-368341490', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-26 06:11:50', '2019-01-26 06:11:50'),
(1079, 'beatstore-368341490', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-26 06:12:51', '2019-01-26 06:12:51'),
(1080, 'beatstore-368341490', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-26 06:15:24', '2019-01-26 06:15:24'),
(1081, 'beatstore-368341490', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-26 06:17:43', '2019-01-26 06:17:43'),
(1082, 'beatstore-368341490', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-26 06:20:17', '2019-01-26 06:20:17'),
(1083, 'beatstore-368341490', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-26 06:20:49', '2019-01-26 06:20:49'),
(1084, 'beatstore-368341490', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-26 06:21:04', '2019-01-26 06:21:04'),
(1085, 'beatstore-5701173', 1, 'lease', 414, 0, '', NULL, 'unpaid', '2019-01-26 06:31:05', '2019-01-26 06:31:05'),
(1086, 'beatstore-5701173', 1, 'lease', 414, 0, '', NULL, 'unpaid', '2019-01-26 06:34:01', '2019-01-26 06:34:01'),
(1087, 'beatstore-809224518', 1, 'lease', 2, 0, '', NULL, 'unpaid', '2019-01-26 07:48:07', '2019-01-26 07:48:07'),
(1088, 'beatstore-7672356', 1, 'lease', 9, 0, '', NULL, 'unpaid', '2019-01-26 07:49:24', '2019-01-26 07:49:24'),
(1089, 'beatstore-7672356', 1, 'lease', 9, 0, '', NULL, 'unpaid', '2019-01-26 07:51:15', '2019-01-26 07:51:15'),
(1090, 'beatstore-72931244', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-26 16:38:29', '2019-01-26 16:38:29'),
(1091, 'beatstore-776382436', 14, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-26 17:41:31', '2019-01-26 17:41:31'),
(1092, 'beatstore-181491375', 92, 'lease', 8, 0, '', NULL, 'unpaid', '2019-01-26 18:19:39', '2019-01-26 18:19:39'),
(1093, 'beatstore-181491375', 92, 'lease', 8, 0, '', NULL, 'unpaid', '2019-01-26 18:20:50', '2019-01-26 18:20:50'),
(1094, 'beatstore-181491375', 92, 'lease', 8, 0, '', NULL, 'unpaid', '2019-01-26 18:22:58', '2019-01-26 18:22:58'),
(1096, 'beatstore-170125748', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 07:54:51', '2019-01-27 07:54:51'),
(1097, 'beatstore-170125748', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 08:02:59', '2019-01-27 08:02:59'),
(1098, 'beatstore-170125748', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 08:03:01', '2019-01-27 08:03:01'),
(1099, 'beatstore-170125748', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 08:06:02', '2019-01-27 08:06:02'),
(1100, 'beatstore-170125748', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 08:10:29', '2019-01-27 08:10:29'),
(1101, 'beatstore-170125748', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 08:10:44', '2019-01-27 08:10:44'),
(1102, 'beatstore-170125748', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 08:12:46', '2019-01-27 08:12:46'),
(1103, 'beatstore-170125748', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 08:13:16', '2019-01-27 08:13:16'),
(1104, 'beatstore-170125748', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 08:14:57', '2019-01-27 08:14:57'),
(1105, 'beatstore-170125748', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 08:15:03', '2019-01-27 08:15:03'),
(1106, 'beatstore-170125748', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 08:20:16', '2019-01-27 08:20:16'),
(1107, 'beatstore-170125748', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 08:20:49', '2019-01-27 08:20:49'),
(1108, 'beatstore-170125748', 2, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 08:20:49', '2019-01-27 08:20:49'),
(1109, 'beatstore-170125748', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 08:21:02', '2019-01-27 08:21:02'),
(1110, 'beatstore-170125748', 2, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 08:21:02', '2019-01-27 08:21:02'),
(1111, 'beatstore-170125748', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 08:41:43', '2019-01-27 08:41:43'),
(1112, 'beatstore-170125748', 2, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 08:41:43', '2019-01-27 08:41:43'),
(1113, 'beatstore-170125748', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 08:57:12', '2019-01-27 08:57:12'),
(1114, 'beatstore-170125748', 2, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 08:57:12', '2019-01-27 08:57:12'),
(1115, 'beatstore-170125748', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 08:57:17', '2019-01-27 08:57:17'),
(1116, 'beatstore-170125748', 2, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 08:57:17', '2019-01-27 08:57:17'),
(1117, 'beatstore-170125748', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 09:07:41', '2019-01-27 09:07:41'),
(1118, 'beatstore-170125748', 2, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 09:07:41', '2019-01-27 09:07:41'),
(1119, 'beatstore-170125748', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 09:10:28', '2019-01-27 09:10:28'),
(1120, 'beatstore-170125748', 2, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 09:10:28', '2019-01-27 09:10:28'),
(1121, 'beatstore-170125748', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 09:15:53', '2019-01-27 09:15:53'),
(1122, 'beatstore-170125748', 2, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 09:15:53', '2019-01-27 09:15:53'),
(1123, 'beatstore-170125748', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 09:16:18', '2019-01-27 09:16:18'),
(1124, 'beatstore-170125748', 2, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 09:16:18', '2019-01-27 09:16:18'),
(1125, 'beatstore-170125748', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 09:18:19', '2019-01-27 09:18:19'),
(1126, 'beatstore-170125748', 2, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 09:18:19', '2019-01-27 09:18:19'),
(1127, 'beatstore-170125748', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 09:26:41', '2019-01-27 09:26:41'),
(1128, 'beatstore-170125748', 2, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 09:26:41', '2019-01-27 09:26:41'),
(1129, 'beatstore-170125748', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 09:26:45', '2019-01-27 09:26:45'),
(1130, 'beatstore-170125748', 2, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 09:26:45', '2019-01-27 09:26:45'),
(1131, 'beatstore-170125748', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 09:31:23', '2019-01-27 09:31:23'),
(1132, 'beatstore-170125748', 2, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 09:31:23', '2019-01-27 09:31:23'),
(1133, 'beatstore-170125748', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 09:46:50', '2019-01-27 09:46:50'),
(1134, 'beatstore-170125748', 2, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 09:46:50', '2019-01-27 09:46:50'),
(1135, 'beatstore-170125748', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 10:22:10', '2019-01-27 10:22:10'),
(1136, 'beatstore-170125748', 2, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 10:22:10', '2019-01-27 10:22:10'),
(1137, 'beatstore-170125748', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 10:22:13', '2019-01-27 10:22:13'),
(1138, 'beatstore-170125748', 2, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 10:22:13', '2019-01-27 10:22:13'),
(1139, 'beatstore-170125748', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 10:36:50', '2019-01-27 10:36:50'),
(1140, 'beatstore-170125748', 2, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 10:36:50', '2019-01-27 10:36:50'),
(1141, 'beatstore-170125748', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 10:39:46', '2019-01-27 10:39:46'),
(1142, 'beatstore-170125748', 2, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 10:39:46', '2019-01-27 10:39:46'),
(1143, 'beatstore-170125748', 1, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 11:00:31', '2019-01-27 11:00:31'),
(1144, 'beatstore-170125748', 2, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 11:00:31', '2019-01-27 11:00:31'),
(1178, 'beatstore-281543524', 1, 'premium', 409, 0, '', NULL, 'unpaid', '2019-01-27 14:38:49', '2019-01-27 14:38:49'),
(1179, 'beatstore-281543524', 14, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 14:38:49', '2019-01-27 14:38:49'),
(1180, 'beatstore-281543524', 15, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 14:38:49', '2019-01-27 14:38:49'),
(1181, 'beatstore-281543524', 1, 'premium', 409, 0, '', NULL, 'unpaid', '2019-01-27 14:39:21', '2019-01-27 14:39:21'),
(1182, 'beatstore-281543524', 14, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 14:39:21', '2019-01-27 14:39:21'),
(1183, 'beatstore-281543524', 15, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 14:39:21', '2019-01-27 14:39:21'),
(1184, 'beatstore-281543524', 1, 'premium', 409, 0, '', NULL, 'unpaid', '2019-01-27 14:40:10', '2019-01-27 14:40:10'),
(1185, 'beatstore-281543524', 14, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 14:40:10', '2019-01-27 14:40:10'),
(1186, 'beatstore-281543524', 15, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 14:40:10', '2019-01-27 14:40:10'),
(1187, 'beatstore-281543524', 1, 'premium', 409, 0, '', NULL, 'unpaid', '2019-01-27 15:41:18', '2019-01-27 15:41:18'),
(1188, 'beatstore-281543524', 14, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 15:41:18', '2019-01-27 15:41:18'),
(1189, 'beatstore-281543524', 15, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 15:41:18', '2019-01-27 15:41:18'),
(1190, 'beatstore-281543524', 1, 'premium', 409, 0, '', NULL, 'unpaid', '2019-01-27 15:41:27', '2019-01-27 15:41:27'),
(1191, 'beatstore-281543524', 14, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 15:41:27', '2019-01-27 15:41:27'),
(1192, 'beatstore-281543524', 15, 'lease', 409, 0, '', NULL, 'unpaid', '2019-01-27 15:41:27', '2019-01-27 15:41:27'),
(1193, 'beatstore-390619139', 111, 'lease', 2, 0, '', NULL, 'unpaid', '2019-01-27 17:20:52', '2019-01-27 17:20:52'),
(1194, 'beatstore-390619139', 113, 'lease', 2, 0, '', NULL, 'unpaid', '2019-01-27 17:20:52', '2019-01-27 17:20:52'),
(1195, 'beatstore-805670577', 2, 'lease', 380, 0, '', NULL, 'unpaid', '2019-01-27 20:06:37', '2019-01-27 20:06:37'),
(1196, 'beatstore-793093791', 4, 'lease', 2, 0, '', NULL, 'unpaid', '2019-01-27 22:40:56', '2019-01-27 22:40:56'),
(1197, 'beatstore-994767458', 15, 'lease', 425, 0, '', NULL, 'unpaid', '2019-01-30 17:53:33', '2019-01-30 17:53:33'),
(1198, 'beatstore-182431314', 15, 'lease', 425, 0, '', NULL, 'unpaid', '2019-01-30 17:57:04', '2019-01-30 17:57:04'),
(1199, 'beatstore-182431314', 15, 'lease', 425, 0, '', NULL, 'unpaid', '2019-01-30 17:57:39', '2019-01-30 17:57:39'),
(1200, 'beatstore-182431314', 15, 'lease', 425, 0, '', NULL, 'unpaid', '2019-01-30 18:29:18', '2019-01-30 18:29:18'),
(1201, 'beatstore-182431314', 15, 'lease', 425, 0, '', NULL, 'unpaid', '2019-01-30 18:29:33', '2019-01-30 18:29:33'),
(1202, 'beatstore-65487576', 2, 'lease', 403, 0, '', NULL, 'unpaid', '2019-01-31 18:43:42', '2019-01-31 18:43:42'),
(1203, 'beatstore-65487576', 2, 'lease', 403, 0, '', NULL, 'unpaid', '2019-01-31 18:44:51', '2019-01-31 18:44:51'),
(1204, 'beatstore-108054369', 1, 'premium', 427, 0, '', NULL, 'unpaid', '2019-01-31 21:39:47', '2019-01-31 21:39:47'),
(1205, 'beatstore-620780411', 15, 'lease', 390, 0, '', NULL, 'unpaid', '2019-02-01 16:42:37', '2019-02-01 16:42:37'),
(1206, 'beatstore-620780411', 15, 'lease', 390, 0, '', NULL, 'unpaid', '2019-02-01 16:45:09', '2019-02-01 16:45:09'),
(1207, 'beatstore-453434610', 1, 'premium', 2, 0, '', NULL, 'unpaid', '2019-02-02 11:24:40', '2019-02-02 11:24:40'),
(1208, 'beatstore-453434610', 1, 'lease', 2, 0, '', NULL, 'unpaid', '2019-02-02 11:24:40', '2019-02-02 11:24:40'),
(1209, 'beatstore-453434610', 1, 'premium', 2, 0, '', NULL, 'unpaid', '2019-02-02 11:24:40', '2019-02-02 11:24:40'),
(1210, 'beatstore-453434610', 1, 'premium', 2, 0, '', NULL, 'unpaid', '2019-02-02 11:24:40', '2019-02-02 11:24:40'),
(1211, 'beatstore-453434610', 1, 'premium', 2, 0, '', NULL, 'unpaid', '2019-02-02 11:24:40', '2019-02-02 11:24:40'),
(1212, 'beatstore-453434610', 1, 'premium', 2, 0, '', NULL, 'unpaid', '2019-02-02 11:26:44', '2019-02-02 11:26:44'),
(1213, 'beatstore-453434610', 1, 'lease', 2, 0, '', NULL, 'unpaid', '2019-02-02 11:26:44', '2019-02-02 11:26:44'),
(1214, 'beatstore-453434610', 1, 'premium', 2, 0, '', NULL, 'unpaid', '2019-02-02 11:26:44', '2019-02-02 11:26:44'),
(1215, 'beatstore-453434610', 1, 'premium', 2, 0, '', NULL, 'unpaid', '2019-02-02 11:26:44', '2019-02-02 11:26:44'),
(1216, 'beatstore-453434610', 1, 'premium', 2, 0, '', NULL, 'unpaid', '2019-02-02 11:26:44', '2019-02-02 11:26:44'),
(1219, 'beatstore-126954148', 127, 'lease', 2, 0, '', NULL, 'unpaid', '2019-02-07 17:01:15', '2019-02-07 17:01:15'),
(1220, 'beatstore-126954148', 127, 'lease', 2, 0, '', NULL, 'unpaid', '2019-02-07 17:02:01', '2019-02-07 17:02:01'),
(1221, 'beatstore-27943563', 2, 'premium', 2, 0, '', NULL, 'unpaid', '2019-02-07 17:26:08', '2019-02-07 17:26:08'),
(1222, 'beatstore-27943563', 2, 'premium', 2, 0, '', NULL, 'unpaid', '2019-02-07 17:27:27', '2019-02-07 17:27:27'),
(1223, 'beatstore-931042642', 14, 'lease', 2, 0, '', NULL, 'unpaid', '2019-02-07 17:30:04', '2019-02-07 17:30:04'),
(1226, 'beatstore-875657712', 13, 'premium', 2, 0, '', NULL, 'unpaid', '2019-02-09 13:13:13', '2019-02-09 13:13:13'),
(1227, 'beatstore-875657712', 13, 'premium', 2, 0, '', NULL, 'unpaid', '2019-02-09 13:13:13', '2019-02-09 13:13:13'),
(1228, 'beatstore-875657712', 13, 'premium', 2, 0, '', NULL, 'unpaid', '2019-02-09 13:13:13', '2019-02-09 13:13:13'),
(1229, 'beatstore-875657712', 13, 'lease', 2, 0, '', NULL, 'unpaid', '2019-02-09 13:13:13', '2019-02-09 13:13:13'),
(1230, 'beatstore-875657712', 13, 'lease', 2, 0, '', NULL, 'unpaid', '2019-02-09 13:13:13', '2019-02-09 13:13:13'),
(1231, 'beatstore-875657712', 13, 'premium', 2, 0, '', NULL, 'unpaid', '2019-02-09 13:13:19', '2019-02-09 13:13:19'),
(1232, 'beatstore-875657712', 13, 'premium', 2, 0, '', NULL, 'unpaid', '2019-02-09 13:13:19', '2019-02-09 13:13:19'),
(1233, 'beatstore-875657712', 13, 'premium', 2, 0, '', NULL, 'unpaid', '2019-02-09 13:13:19', '2019-02-09 13:13:19'),
(1234, 'beatstore-875657712', 13, 'lease', 2, 0, '', NULL, 'unpaid', '2019-02-09 13:13:19', '2019-02-09 13:13:19'),
(1235, 'beatstore-875657712', 13, 'lease', 2, 0, '', NULL, 'unpaid', '2019-02-09 13:13:19', '2019-02-09 13:13:19'),
(1236, 'beatstore-493382582', 14, 'lease', 449, 0, '', NULL, 'unpaid', '2019-02-09 18:33:15', '2019-02-09 18:33:15'),
(1237, 'beatstore-493382582', 14, 'lease', 449, 0, '', NULL, 'unpaid', '2019-02-09 18:33:15', '2019-02-09 18:33:15'),
(1238, 'beatstore-493382582', 14, 'lease', 449, 0, '', NULL, 'unpaid', '2019-02-09 18:34:14', '2019-02-09 18:34:14'),
(1239, 'beatstore-493382582', 14, 'lease', 449, 0, '', NULL, 'unpaid', '2019-02-09 18:48:44', '2019-02-09 18:48:44'),
(1240, 'beatstore-90021407', 14, 'lease', 449, 0, '', NULL, 'unpaid', '2019-02-09 18:48:45', '2019-02-09 18:48:45'),
(1241, 'beatstore-90021407', 14, 'lease', 449, 0, '', NULL, 'unpaid', '2019-02-09 18:49:12', '2019-02-09 18:49:12'),
(1242, 'beatstore-90021407', 14, 'lease', 449, 0, '', NULL, 'unpaid', '2019-02-09 18:49:54', '2019-02-09 18:49:54'),
(1243, 'beatstore-90021407', 14, 'lease', 449, 0, '', NULL, 'unpaid', '2019-02-09 18:50:35', '2019-02-09 18:50:35'),
(1244, 'beatstore-568644897', 14, 'lease', 449, 0, '', NULL, 'unpaid', '2019-02-09 18:50:35', '2019-02-09 18:50:35'),
(1245, 'beatstore-90021407', 14, 'lease', 449, 0, '', NULL, 'unpaid', '2019-02-09 18:52:21', '2019-02-09 18:52:21'),
(1246, 'beatstore-568644897', 14, 'lease', 449, 0, '', NULL, 'unpaid', '2019-02-09 18:52:21', '2019-02-09 18:52:21'),
(1247, 'beatstore-90021407', 14, 'lease', 449, 0, '', NULL, 'unpaid', '2019-02-09 18:55:18', '2019-02-09 18:55:18'),
(1248, 'beatstore-568644897', 14, 'lease', 449, 0, '', NULL, 'unpaid', '2019-02-09 18:55:18', '2019-02-09 18:55:18'),
(1249, 'beatstore-90021407', 14, 'lease', 449, 0, '', NULL, 'unpaid', '2019-02-09 18:55:20', '2019-02-09 18:55:20'),
(1250, 'beatstore-568644897', 14, 'lease', 449, 0, '', NULL, 'unpaid', '2019-02-09 18:55:20', '2019-02-09 18:55:20'),
(1251, 'beatstore-568644897', 14, 'lease', 449, 0, '', NULL, 'unpaid', '2019-02-09 18:55:27', '2019-02-09 18:55:27'),
(1252, 'beatstore-350431331', 14, 'lease', 449, 0, '', NULL, 'unpaid', '2019-02-09 18:56:21', '2019-02-09 18:56:21'),
(1260, 'beatstore-336581305', 13, 'premium', 2, 0, '', NULL, 'unpaid', '2019-02-10 15:27:30', '2019-02-10 15:27:30'),
(1267, 'beatstore-336581305', 13, 'premium', 2, 0, '', NULL, 'unpaid', '2019-02-10 15:37:01', '2019-02-10 15:37:01'),
(1274, 'beatstore-336581305', 13, 'premium', 2, 0, '', NULL, 'unpaid', '2019-02-10 15:37:14', '2019-02-10 15:37:14'),
(1277, 'beatstore-596104421', 1, 'lease', 9, 0, '', '10', 'paid', '2019-02-11 14:53:38', '2019-02-11 14:53:38'),
(1278, 'beatstore-742862879', 1, 'premium', 2, 0, '', NULL, 'unpaid', '2019-02-12 10:04:22', '2019-02-12 10:04:22'),
(1279, 'beatstore-742862879', 1, 'lease', 2, 0, '', NULL, 'unpaid', '2019-02-12 10:04:22', '2019-02-12 10:04:22'),
(1280, 'beatstore-742862879', 1, 'lease', 2, 0, '', NULL, 'unpaid', '2019-02-12 10:04:30', '2019-02-12 10:04:30'),
(1281, 'beatstore-742862879', 1, 'lease', 2, 0, '', NULL, 'unpaid', '2019-02-12 10:05:39', '2019-02-12 10:05:39'),
(1282, 'beatstore-742862879', 1, 'lease', 2, 0, '', NULL, 'unpaid', '2019-02-12 10:09:32', '2019-02-12 10:09:32'),
(1283, 'beatstore-364637245', 1, 'lease', 9, 0, '', NULL, 'unpaid', '2019-02-12 12:58:45', '2019-02-12 12:58:45'),
(1284, 'beatstore-364637245', 1, 'lease', 9, 0, '', NULL, 'unpaid', '2019-02-12 13:03:19', '2019-02-12 13:03:19'),
(1285, 'beatstore-364637245', 1, 'lease', 9, 0, '', NULL, 'unpaid', '2019-02-12 13:26:55', '2019-02-12 13:26:55'),
(1286, 'beatstore-327110709', 15, 'lease', 455, 0, '', NULL, 'unpaid', '2019-02-13 00:32:58', '2019-02-13 00:32:58'),
(1287, 'beatstore-327110709', 15, 'lease', 455, 0, '', NULL, 'unpaid', '2019-02-13 00:33:52', '2019-02-13 00:33:52'),
(1288, 'beatstore-422068407', 1, 'lease', 2, 0, '', NULL, 'unpaid', '2019-02-13 20:47:22', '2019-02-13 20:47:22'),
(1289, 'beatstore-636135305', 1, 'lease', 2, 0, '', NULL, 'unpaid', '2019-02-14 14:11:42', '2019-02-14 14:11:42'),
(1290, 'beatstore-727382568', 1, 'lease', 1, 0, '', NULL, 'unpaid', '2019-02-14 20:06:52', '2019-02-14 20:06:52'),
(1291, 'beatstore-727382568', 1, 'lease', 1, 0, '', NULL, 'unpaid', '2019-02-14 20:07:27', '2019-02-14 20:07:27'),
(1292, 'beatstore-828931658', 14, 'lease', 467, 0, '', NULL, 'unpaid', '2019-02-15 13:00:08', '2019-02-15 13:00:08'),
(1293, 'beatstore-828931658', 14, 'lease', 467, 0, '', NULL, 'unpaid', '2019-02-15 13:00:52', '2019-02-15 13:00:52'),
(1294, 'beatstore-828931658', 14, 'lease', 467, 0, '', NULL, 'unpaid', '2019-02-15 13:07:56', '2019-02-15 13:07:56'),
(1295, 'beatstore-52894016', 1, 'lease', 2, 0, '', '10', 'unpaid', '2019-02-17 10:21:25', '2019-02-17 10:21:25'),
(1296, 'beatstore-201770718', 1, 'lease', 2, 0, '', '10', 'unpaid', '2019-02-17 10:33:06', '2019-02-17 10:36:07'),
(1297, 'beatstore-672367544', 1, 'premium', 2, 0, '', '9000', 'unpaid', '2019-02-17 10:43:45', '2019-02-17 10:43:45'),
(1298, 'beatstore-343551123', 1, 'premium', 2, 0, '', '9000', 'paid', '2019-02-17 13:39:40', '2019-02-17 13:39:40'),
(1299, 'beatstore-980437435', 8, 'premium', 2, 0, '', '15000', 'paid', '2019-02-17 13:43:32', '2019-02-17 13:43:32'),
(1300, 'beatstore-306060299', 1, 'premium', 2, 0, '', '9000', 'paid', '2019-02-17 13:48:02', '2019-02-17 13:48:02'),
(1301, 'beatstore-680617086', 1, 'premium', 2, 0, '', '9000', 'paid', '2019-02-17 13:51:13', '2019-02-17 13:51:13'),
(1303, 'beatstore-475136530', 1, 'lease', 2, 0, '', '10', 'paid', '2019-02-17 13:57:26', '2019-02-17 13:57:26'),
(1304, 'beatstore-130048451', 1, 'premium', 2, 0, '', '9000', 'paid', '2019-02-17 14:15:41', '2019-02-17 14:37:33'),
(1305, 'beatstore-109837408', 8, 'premium', 2, 0, '', '15000', 'paid', '2019-02-17 14:39:09', '2019-02-17 14:39:09'),
(1307, 'beatstore-227570398', 73, 'lease', 2, 0, '', '10000', 'paid', '2019-02-18 21:13:03', '2019-02-18 21:13:03'),
(1308, 'beatstore-475118993', 73, 'lease', 2, 0, '', '10000', 'paid', '2019-02-18 21:15:28', '2019-02-18 21:15:28'),
(1309, 'beatstore-695867265', 1, 'premium', 2, 0, '', '9000', 'paid', '2019-02-18 21:17:09', '2019-02-18 21:20:05'),
(1310, 'beatstore-695867265', 8, 'lease', 2, 0, '', '7000', 'paid', '2019-02-18 21:20:05', '2019-02-18 21:20:06'),
(1311, 'beatstore-986878864', 8, 'premium', 2, 0, '', '15000', 'paid', '2019-02-19 06:03:07', '2019-02-19 06:03:07'),
(1312, 'beatstore-677563881', 8, 'premium', 2, 0, '', '15000', 'paid', '2019-02-19 06:13:05', '2019-02-19 06:13:05'),
(1313, 'beatstore-921360120', 8, 'premium', 2, 0, '', '15000', 'paid', '2019-02-19 06:18:40', '2019-02-19 06:18:40'),
(1314, 'beatstore-244620740', 8, 'premium', 2, 0, '', '15000', 'paid', '2019-02-19 06:24:24', '2019-02-19 06:24:24'),
(1315, 'beatstore-949438874', 8, 'premium', 2, 0, '', '15000', 'paid', '2019-02-19 06:30:36', '2019-02-19 06:30:36'),
(1316, 'beatstore-417385470', 1, 'premium', 2, 0, '', '9000', 'paid', '2019-02-20 07:15:28', '2019-02-20 07:15:28'),
(1317, 'beatstore-25069981', 8, 'lease', 2, 0, '', '7000', 'paid', '2019-02-20 07:27:16', '2019-02-20 07:27:16'),
(1319, 'beatstore-120174231', 1, 'lease', 1, 0, '', '10', 'unpaid', '2019-02-20 07:55:26', '2019-02-20 07:56:10'),
(1320, 'beatstore-176879592', 8, 'premium', 2, 0, '', '15000', 'paid', '2019-02-20 07:55:39', '2019-02-20 07:55:39'),
(1321, 'beatstore-571571046', 8, 'premium', 2, 0, '', '15000', 'paid', '2019-02-20 07:58:50', '2019-02-20 07:58:50'),
(1322, 'beatstore-855765109', 14, 'lease', 2, 0, '', '30000', 'paid', '2019-02-20 08:01:18', '2019-02-20 08:01:18'),
(1323, 'beatstore-440188541', 8, 'premium', 2, 0, '', '15000', 'paid', '2019-02-20 09:41:01', '2019-02-20 09:41:01'),
(1324, 'beatstore-456517690', 8, 'premium', 2, 0, '', '15000', 'paid', '2019-02-20 09:44:48', '2019-02-20 09:47:46'),
(1327, 'beatstore-990004148', 1, 'lease', 9, 0, '', '10', 'paid', '2019-02-20 11:08:40', '2019-02-20 11:08:40'),
(1328, 'beatstore-582121728', 1, 'lease', 9, 0, '', '10', 'paid', '2019-02-20 11:16:29', '2019-02-20 11:16:29'),
(1329, 'beatstore-546079929', 8, 'lease', 2, 0, '', '7000', 'paid', '2019-02-20 11:41:40', '2019-02-20 11:41:40'),
(1331, 'beatstore-290779622', 1, 'lease', 9, 0, '', '10', 'paid', '2019-02-20 11:58:55', '2019-02-20 11:58:55'),
(1332, 'beatstore-866550388', 8, 'lease', 2, 0, '', '7000', 'unpaid', '2019-02-20 12:54:11', '2019-02-20 13:17:16'),
(1333, 'beatstore-620842965', 1, 'lease', 9, 0, '', '10', 'paid', '2019-02-21 21:11:57', '2019-02-21 21:11:57'),
(1335, 'beatstore-63071856', 4, 'lease', 9, 0, '', '6000', 'paid', '2019-02-22 10:32:50', '2019-02-22 10:32:51'),
(1336, 'beatstore-237313506', 8, 'premium', 9, 0, '', '15000', 'paid', '2019-02-22 11:03:40', '2019-02-22 11:03:40'),
(1337, 'beatstore-782036460', 8, 'premium', 9, 0, '', '15000', 'paid', '2019-02-22 11:15:04', '2019-02-22 11:15:04'),
(1338, 'beatstore-653572800', 2, 'lease', 455, 0, '', '5000', 'unpaid', '2019-02-24 13:40:48', '2019-02-24 13:41:19'),
(1339, 'beatstore-683510464', 1, 'lease', 9, 0, '', '10', 'unpaid', '2019-02-25 22:10:06', '2019-02-25 22:10:06'),
(1341, 'beatstore-512781529', 4, 'lease', 486, 0, '', '6000', 'unpaid', '2019-02-26 22:08:30', '2019-02-26 22:10:04'),
(1342, 'beatstore-544161801', 14, 'lease', 492, 0, '', '30000', 'unpaid', '2019-02-27 06:11:59', '2019-02-27 06:13:32'),
(1345, 'beatstore-267212947', 150, 'lease', 499, 0, '', '12000', 'unpaid', '2019-02-27 18:37:44', '2019-02-27 18:39:13'),
(1349, 'beatstore-637723219', 12, 'premium', 2, 0, '', '15000', 'unpaid', '2019-02-28 20:55:47', '2019-02-28 20:55:47'),
(1350, 'beatstore-637723219', 12, 'lease', 2, 0, '', '7000', 'unpaid', '2019-02-28 20:55:47', '2019-02-28 20:55:47'),
(1351, 'beatstore-637723219', 7, 'premium', 2, 0, '', '15000', 'unpaid', '2019-02-28 20:55:47', '2019-02-28 20:55:47'),
(1352, 'beatstore-87909090', 154, 'lease', 2, 0, '', '5000', 'unpaid', '2019-03-02 09:11:49', '2019-03-02 09:11:50');
INSERT INTO `carts` (`id`, `trans_ref`, `beat_id`, `beat_type`, `buyer_id`, `seller_id`, `beat_name`, `amount`, `status`, `created`, `modified`) VALUES
(1353, 'beatstore-957662538', 13, 'lease', 2, 0, '', '7000', 'unpaid', '2019-03-03 16:32:31', '2019-03-03 16:32:31'),
(1355, 'beatstore-957662538', 13, 'premium', 2, 0, '', '15000', 'unpaid', '2019-03-03 16:32:31', '2019-03-03 16:32:31'),
(1357, 'beatstore-94687378', 8, 'premium', 9, 0, '', '15000', 'unpaid', '2019-03-10 19:31:38', '2019-03-10 19:49:03'),
(1358, 'beatstore-976113336', 1, 'lease', 1, 0, '', '10', 'unpaid', '2019-03-10 19:31:39', '2019-03-10 19:32:16'),
(1359, 'beatstore-14251048', 1, 'lease', 9, 0, '', '10', 'unpaid', '2019-03-10 19:51:41', '2019-03-10 19:51:41'),
(1360, 'beatstore-766070238', 2, 'lease', 9, 0, '', '5000', 'unpaid', '2019-03-10 19:59:46', '2019-03-10 20:09:24'),
(1361, 'beatstore-766070238', 2, 'lease', 9, 0, '', '60000', 'unpaid', '2019-03-10 19:59:46', '2019-03-10 20:09:24'),
(1362, 'beatstore-766070238', 2, 'premium', 9, 0, '', '10000', 'unpaid', '2019-03-10 19:59:46', '2019-03-10 20:09:24'),
(1363, 'beatstore-318667718', 1, 'lease', 9, 0, '', '10', 'unpaid', '2019-03-10 20:50:36', '2019-03-10 20:50:36'),
(1365, 'beatstore-269875646', 4, 'lease', 499, 0, '', '6000', 'unpaid', '2019-03-10 21:37:49', '2019-03-10 21:42:43'),
(1368, 'beatstore-84318753', 8, 'lease', 15, 0, '', '7000', 'unpaid', '2019-03-11 06:12:08', '2019-03-11 06:12:08'),
(1369, 'beatstore-301917361', 1, 'lease', 543, 0, '', '10', 'unpaid', '2019-03-11 07:38:00', '2019-03-11 07:38:00'),
(1370, 'beatstore-953314328', 1, 'lease', 9, 0, '', '10', 'paid', '2019-03-11 10:02:05', '2019-03-11 10:02:05'),
(1373, 'beatstore-811200336', 179, 'premium', 325, 0, '', '9000', 'unpaid', '2019-03-17 17:31:50', '2019-03-17 17:31:50'),
(1375, 'beatstore-960505374', 14, 'lease', 643, 0, '', '10000', 'paid', '2019-03-29 00:41:05', '2019-03-29 00:41:39'),
(1376, 'beatstore-424548629', 175, 'premium', 1, 0, '', '9000', 'unpaid', '2019-03-29 14:45:08', '2019-03-29 14:45:08'),
(1377, 'beatstore-318249058', 73, 'lease', 647, 0, '', '10000', 'unpaid', '2019-04-04 04:03:24', '2019-04-04 04:03:24'),
(1378, 'beatstore-903169493', 73, 'lease', 647, 0, '', '10000', 'paid', '2019-04-05 03:03:05', '2019-04-05 03:03:05'),
(1379, 'beatstore-265576853', 14, 'lease', 492, 0, '', '30000', 'paid', '2019-04-13 05:14:52', '2019-04-13 05:14:52'),
(1380, 'beatstore-235575922', 180, 'lease', 579, 0, '', '0', 'unpaid', '2019-04-18 02:48:10', '2019-04-18 02:48:49'),
(1381, 'beatstore-235575922', 32, 'lease', 579, 0, '', '6000', 'unpaid', '2019-04-18 02:48:10', '2019-04-18 02:48:49'),
(1382, 'beatstore-354754630', 14, 'lease', 660, 0, '', '10000', 'unpaid', '2019-04-19 10:38:10', '2019-04-19 10:38:10'),
(1383, 'beatstore-379937749', 178, 'lease', 134, 0, '', '0', 'unpaid', '2019-04-27 01:16:57', '2019-04-27 01:16:57'),
(1384, 'beatstore-67220770', 1, 'premium', 134, 0, '', '9000', 'unpaid', '2019-04-27 01:19:21', '2019-04-27 01:23:23'),
(1385, 'beatstore-952853498', 160, 'premium', 2, 0, '', '7000', 'unpaid', '2019-05-01 14:09:17', '2019-05-01 14:09:17'),
(1386, 'beatstore-811486696', 1, 'lease', 543, 0, '', '5000', 'unpaid', '2019-05-18 23:18:33', '2019-05-18 23:19:21'),
(1387, 'beatstore-583126593', 4, 'lease', 729, 0, '', '6000', 'unpaid', '2019-05-22 17:54:57', '2019-05-22 18:01:11'),
(1388, 'beatstore-727637404', 194, 'lease', 757, 0, '', '200', 'paid', '2019-06-09 16:04:27', '2019-06-09 16:04:27'),
(1389, 'beatstore-968003904', 198, 'lease', 2, 0, '', '5000', 'unpaid', '2019-06-10 20:48:14', '2019-06-10 20:48:14'),
(1390, 'beatstore-575110822', 199, 'lease', 730, 0, '', '5000', 'unpaid', '2019-06-11 16:27:01', '2019-06-11 16:31:06'),
(1391, 'beatstore-709009495', 195, 'lease', 763, 0, '', '5000', 'unpaid', '2019-06-15 22:28:06', '2019-06-15 22:28:06'),
(1393, 'beatstore-992815546', 194, 'lease', 763, 0, '', '0', 'unpaid', '2019-06-19 18:46:11', '2019-06-19 18:48:49'),
(1395, 'beatstore-730431664', 14, 'lease', 767, 0, '', '10000', 'paid', '2019-06-27 10:03:58', '2019-06-27 10:03:58'),
(1397, 'beatstore-788002043', 186, 'lease', 782, 0, '', '0', 'paid', '2019-07-19 22:45:01', '2019-07-19 22:45:01'),
(1398, 'beatstore-18710592', 1, 'premium', 795, 0, '', '9000', 'unpaid', '2019-07-29 02:48:24', '2019-07-29 02:58:25'),
(1399, 'beatstore-137667630', 14, 'lease', 1, 0, '', '30000', 'unpaid', '2019-08-14 01:23:23', '2019-08-14 01:29:17'),
(1400, 'beatstore-947707415', 7, 'lease', 2, 0, '', '7000', 'unpaid', '2019-08-14 01:30:23', '2019-08-14 01:30:23'),
(1401, 'beatstore-628269789', 11, 'lease', 2, 0, '', '5000', 'unpaid', '2019-08-26 11:55:57', '2019-08-26 11:56:11'),
(1402, 'beatstore-628269789', 11, 'premium', 2, 0, '', '7000', 'unpaid', '2019-08-26 11:55:58', '2019-08-26 11:56:11'),
(1403, 'beatstore-773364244', 213, 'lease', 2, 0, '', '5000', 'unpaid', '2019-08-26 13:28:51', '2019-08-26 13:28:51'),
(1405, 'beatstore-826827635', 91, 'lease', 134, 0, '', '6000', 'unpaid', '2019-08-27 00:25:08', '2019-08-27 00:27:45'),
(1406, 'beatstore-434862449', 4, 'lease', 860, 0, '', '6000', 'unpaid', '2019-08-27 18:56:51', '2019-08-27 18:56:57'),
(1407, 'beatstore-320662543', 1, 'premium', 1, 0, '', '9000', 'unpaid', '2019-08-30 01:19:48', '2019-08-30 01:55:27'),
(1408, 'beatstore-320662543', 1, 'lease', 1, 0, '', '5000', 'unpaid', '2019-08-30 01:19:48', '2019-08-30 01:55:27'),
(1409, 'beatstore-170938405', 1, 'premium', 2, 0, '', '9000', 'unpaid', '2019-08-30 01:56:13', '2019-08-30 01:56:54'),
(1410, 'beatstore-170938405', 83, 'premium', 2, 0, '', '7000', 'unpaid', '2019-08-30 01:56:54', '2019-08-30 01:56:54'),
(1411, 'beatstore-170938405', 15, 'lease', 2, 0, '', '25000', 'unpaid', '2019-08-30 01:56:54', '2019-08-30 01:56:54'),
(1412, 'beatstore-561310733', 105, 'premium', 2, 0, '', '15000', 'unpaid', '2019-08-31 23:07:33', '2019-08-31 23:13:35'),
(1413, 'beatstore-561310733', 2, 'premium', 2, 0, '', '10000', 'unpaid', '2019-08-31 23:07:33', '2019-08-31 23:13:35'),
(1414, 'beatstore-717096581', 1, 'lease', 1, 0, '', '5000', 'unpaid', '2019-09-06 14:04:54', '2019-09-06 15:34:30'),
(1415, 'beatstore-717096581', 2, 'lease', 1, 0, '', '60000', 'unpaid', '2019-09-06 14:09:43', '2019-09-06 15:34:30'),
(1416, 'beatstore-717096581', 2, 'lease', 1, 0, '', '5000', 'unpaid', '2019-09-06 14:09:43', '2019-09-06 15:34:30'),
(1417, 'beatstore-315783321', 4, 'lease', 1, 0, '', '6000', 'unpaid', '2019-09-06 17:16:14', '2019-09-06 18:51:37'),
(1418, 'beatstore-548577188', 105, 'lease', 1, 0, '', '9000', 'unpaid', '2019-09-06 17:53:58', '2019-09-06 17:53:58'),
(1420, 'beatstore-865056292', 215, 'lease', 1, 0, '', '6000', 'unpaid', '2019-09-08 18:56:01', '2019-09-08 18:56:01'),
(1421, 'beatstore-865056292', 7, 'premium', 1, 0, '', '15000', 'unpaid', '2019-09-08 18:56:01', '2019-09-08 18:56:01'),
(1422, 'beatstore-769778653', 105, 'lease', 902, 0, '', '9000', 'unpaid', '2019-09-09 08:11:04', '2019-09-09 08:11:05'),
(1423, 'beatstore-23901051', 83, 'lease', 2, 0, '', '5000', 'unpaid', '2019-09-09 09:48:28', '2019-09-09 09:49:30'),
(1424, 'beatstore-340084318', 12, 'premium', 2, 0, '', '15000', 'unpaid', '2019-09-09 21:34:06', '2019-09-09 21:34:06'),
(1425, 'beatstore-740257755', 83, 'lease', 2, 0, '', '5000', 'unpaid', '2019-09-12 05:17:09', '2019-09-12 05:19:01'),
(1426, 'beatstore-609616350', 211, 'lease', 9, 0, '', '5000', 'unpaid', '2019-09-12 10:31:05', '2019-09-12 10:36:16'),
(1427, 'beatstore-382939349', 11, 'lease', 9, 0, '', '5000', 'unpaid', '2019-09-13 19:01:23', '2019-09-13 19:04:25'),
(1428, 'beatstore-666153816', 14, 'lease', 1, 0, '', '10000', 'unpaid', '2019-09-16 11:31:46', '2019-09-16 11:32:06'),
(1429, 'beatstore-666153816', 14, 'lease', 1, 0, '', '30000', 'unpaid', '2019-09-16 11:31:46', '2019-09-16 11:32:06'),
(1430, 'beatstore-994327877', 1, 'lease', 9, 0, '', '5000', 'unpaid', '2019-09-16 14:29:20', '2019-09-16 14:29:20'),
(1431, 'beatstore-656438562', 1, 'lease', 9, 0, '', '100', 'paid', '2019-09-16 15:48:46', '2019-09-16 15:48:46'),
(1432, 'beatstore-733491353', 1, 'lease', 9, 0, '', '100', 'unpaid', '2019-09-16 15:56:45', '2019-09-16 16:07:21'),
(1433, 'beatstore-841545229', 11, 'lease', 9, 0, '', '5000', 'unpaid', '2019-09-17 07:46:07', '2019-09-17 07:46:07'),
(1434, 'beatstore-713761549', 1, 'lease', 9, 2, '', '100', 'paid', '2019-09-17 08:41:04', '2019-09-17 08:41:04'),
(1435, 'beatstore-751144995', 1, 'lease', 9, 9, '', '100', 'unpaid', '2019-09-17 08:55:34', '2019-09-17 08:55:34'),
(1436, 'beatstore-74583156', 83, 'lease', 9, 0, '', '5000', 'unpaid', '2019-09-17 12:25:39', '2019-09-17 12:25:39'),
(1437, 'beatstore-233221625', 1, 'lease', 9, 9, 'Love Life', '100', 'paid', '2019-09-17 12:30:04', '2019-09-17 12:30:04'),
(1438, 'beatstore-441890931', 1, 'lease', 9, 9, 'Love Life', '100', 'paid', '2019-09-17 12:48:14', '2019-09-17 12:48:14'),
(1439, 'beatstore-794366103', 1, 'lease', 9, 2, 'Naija Loving', '100', 'paid', '2019-09-17 16:02:26', '2019-09-17 16:03:31'),
(1440, 'beatstore-63893416', 214, 'lease', 134, 0, '', '0', 'unpaid', '2019-09-17 21:34:44', '2019-09-17 21:34:44'),
(1441, 'beatstore-462973612', 14, 'lease', 942, 0, '', '10000', 'unpaid', '2019-09-18 07:01:10', '2019-09-18 07:01:10'),
(1442, 'beatstore-342223616', 1, 'lease', 9, 0, '', '100', 'unpaid', '2019-09-18 15:04:12', '2019-09-18 15:08:18'),
(1443, 'beatstore-789247392', 7, 'lease', 9, 0, '', '7000', 'unpaid', '2019-09-18 15:24:04', '2019-09-18 15:24:04'),
(1444, 'beatstore-350601573', 7, 'lease', 2, 0, '', '7000', 'unpaid', '2019-09-19 14:39:29', '2019-09-19 14:39:29'),
(1445, 'beatstore-835701741', 11, 'lease', 9, 0, '', '5000', 'unpaid', '2019-09-20 04:50:56', '2019-09-20 04:50:56'),
(1446, 'beatstore-360698915', 11, 'lease', 9, 0, '', '5000', 'unpaid', '2019-09-20 05:04:08', '2019-09-20 05:04:08'),
(1447, 'beatstore-930239562', 1, 'lease', 9, 0, '', '100', 'unpaid', '2019-09-20 13:09:14', '2019-09-20 13:12:36'),
(1448, 'beatstore-198579806', 2, 'lease', 9, 0, '', '5000', 'unpaid', '2019-09-20 13:20:46', '2019-09-20 13:20:46'),
(1449, 'beatstore-717068828', 2, 'lease', 2, 0, '', '5000', 'unpaid', '2019-09-21 21:37:02', '2019-09-21 21:46:28');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `commentee_id` int(11) NOT NULL,
  `commenter_id` int(11) NOT NULL,
  `type` varchar(10) NOT NULL,
  `comment` text NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `commentee_id`, `commenter_id`, `type`, `comment`, `created`, `modified`) VALUES
(1, 2, 9, 'mm', 'He\'s very good at mixing music', '2018-05-17', '2018-05-17'),
(2, 2, 9, 'mm', 'I\'d work with him anytime, any day ', '2018-05-17', '2018-05-17'),
(3, 3, 95, 'ac', 'I want to booking for beat', '2018-07-24', '2018-07-24'),
(4, 2, 2, 'ac', 'Cool', '2018-09-27', '2018-09-27'),
(5, 2, 2, 'ac', 'test', '2019-01-15', '2019-01-15'),
(6, 2, 2, 'ac', 'sadasd', '2019-01-15', '2019-01-15'),
(7, 2, 1, 'ac', 'I like his mixes', '2019-01-17', '2019-01-17'),
(8, 2, 2, 'vd', 'Really cool videos', '2019-01-18', '2019-01-18'),
(9, 2, 2, 'ac', 'good mixer', '2019-09-08', '2019-09-08');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` int(11) NOT NULL,
  `plaintiff_id` int(11) NOT NULL,
  `accused_id` int(11) NOT NULL,
  `type` varchar(10) NOT NULL,
  `rant` text NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `plaintiff_id`, `accused_id`, `type`, `rant`, `created`, `modified`) VALUES
(1, 2, 2, 'ac', 'test', '2019-01-15', '2019-01-15'),
(2, 2, 2, 'ac', 'cxxcxb', '2019-01-15', '2019-01-15');

-- --------------------------------------------------------

--
-- Table structure for table `contract`
--

CREATE TABLE `contract` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `beat_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contract`
--

INSERT INTO `contract` (`id`, `name`, `description`, `buyer_id`, `seller_id`, `beat_id`, `payment_id`, `date`) VALUES
(1, 'Love Life', '<div class=\'exclusive\'>\n			\n			<h2>Licence Agreement</h2>\n			<h2>(EXCLUSIVE RIGHTS)</h2>\n			<h2>Sound Recording/BEATS</h2>\n			\n			<p style=\'color:black;\'>THIS LICENCE AGREEMENT is made on 02:11:02 Feb 20, 2019 PST (\'Effective \nDate\') by and between <mark> Mikeman </mark> Check (hereinafter referred to as the \'Licensee\') also, if applicable, \nprofessionally known as <mark>Mike Check</mark>, whose principle address is <mark></mark>, and <mark>Ejike</mark> Odoh (hereinafter referred to as the \'Licensor\') also, if \napplicable, professionally known as Ejikemuwa, whose principle address is No 1 Olufowobi Street, Lawanson. Licensor warrants that it controls the mechanical \nrights in and to the copyrighted musical works entitled <mark>Love Life</mark> (\'Composition\') as of and \nprior to the date first written above. The Composition, including the music thereof, was \ncomposed by <mark>Ejikemuwa Odoh</mark> (\'Songwriter\') managed under the Licensor. </p>\n\n	<span style=\'color:#dfa844;\'><b>Master Use: </b></span><span style=\'color:black;\'> The Licensor hereby grants to License an exclusive license (this \'License\') to \n	record vocal synchronization to the Composition partly or in its entirety and substantially in its \n	original form (\'Master Recording\'). </span>\n	<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Mechanical Rights: </b></span><span style=\'color:black;\'>The Licensor hereby grants to Licensee an exclusive license to use Master \nRecording in the reproduction, duplication, manufacture, and distribution of phonograph records,\ncassette tapes, compact disk, digital downloads, other miscellaneous audio and digital \nrecordings, and any lifts and versions thereof (collectively, the \'Recordings\', and individually, a \n\'Recordings\') worldwide for unlimited copies of such Recordings or any combination of such \nRecordings, condition upon the payment to the Licensor a sum of <mark>? 0.03 Nigerian Naira</mark>, \nreceipt of which is confirmed.  </span>\n<br>\n\n\n	<br>\n	<span style=\'color:#dfa844;\'><b>Performance Rights: </b></span><span style=\'color:black;\'>The Licensor here by grants to Licensee an exclusive license to use the \nMaster Recording in unlimited for-profit performances, shows, or concerts.   </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Broadcast Rights: </b></span><span style=\'color:black;\'>The Licensor hereby grants to Licensee an exclusive licence to broadcast or \nair the Master Recording in unlimited amounts of radio stations. </span>\n\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Credit: </b></span><span style=\'color:black;\'>Licensee shall acknowledge the original authorship of the Composition appropriately \nand reasonably in all media and performance formats under the name <mark>\'Ejikemuwa\'</mark> in writing \nwhere possible and vocally otherwise.  </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Consideration: </b></span><span style=\'color:black;\'>In consideration for the rights granted under this agreement, Licensee shall pay \nto licensor the sum of <mark>?100,000 Nigerian Naira</mark> and other good and valuable consideration, \npayable to <mark>\'Ejikemuwa Odoh\'</mark>, receipt of which is hereby acknowledged. If the Licensee fails to \naccount to the Licensor, timely complete the payments provided for hereunder, or perform its \nother obligations hereunder, including having insufficient bank balance, the licensor shall have \nthe right to terminate License upon written notice to the Licensee. Such termination shall render \nthe recording, manufacture and/or distribution of Recordings for which monies have not been \npaid subject to and actionable infringements under applicable law, including, without limitation, \nthe <mark>Nigerian</mark> Copyright Act, as amended. </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Delivery: </b></span><span style=\'color:black;\'>The Composition shall be delivered via The AmplifiHub platform and email to an \nemail address that Licensee provided when making their payment to Licensor. Licensee shall \nreceive an email containing an attachment or link from which they can download the \nComposition. </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Indemnification: </b></span><span style=\'color:black;\'>Accordingly, Licensee agrees to indemnify and hold Licensor harmless from \nand against any and all claims, losses, damages, costs, expenses, including, without limitation, \nreasonable attorney\'s fees, arising of or resulting from a claimed breach of any of Licensee\'s \nrepresentations, warranties or agreements hereunder.  </span>\n\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Audio Samples: </b></span><span style=\'color:black;\'>3rd party sample clearance is the responsibility of the Licensee. </span>\n\n	\n	<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Miscellaneous: </b></span><span style=\'color:black;\'>This license is non-transferable and is limited to the Composition specified \nabove, constitutes the entire agreement between the Licensor and the Licensee relating to the \nComposition, and shall be binding upon both the Licensor and the Licensee and their respective \nsuccessors, assigns, and legal representatives.  </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Governing Law: </b></span><span style=\'color:black;\'>This License is governed by and shall be construed under the law of the State \nof <mark>CA, United States</mark>, without regard to the conflicts of laws principles thereof.  </span>\n\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Publishing.: </b></span><br><span style=\'color:black;\'><mark>Mikeman &nbsp; Check</mark>, owns 80% of publishing rights. \n<br><mark>Ejike &nbsp; Odoh</mark>, owns 20% of publishing rights.\n<br><br>\nFinished audio recording by Licensee of audio release can distribute to music supervisors for \nconsideration of synchronization licensing. Only the recording artist or recording company can \nmonetize with this license. This is not a synchronization license for music supervisors of the TV, \nFilm and Video game industry. \n<br><br>\nTHE PARTIES HAVE DULY EXECUTED THIS AGREEMENT on the date first written \nabove. <br><br>\n\n  </span>\n  \n  <p  style=\'color:#dfa844;\'>Licensor:</p>\n<br>\n<span >______________________________________________ </span> Date: <span>_______________. </span> 20______<br>\n<br>\n<br>\n  <span  style=\'color:black;\'>Ejikemuwa Odoh - Producer <br>\nAuthorized Signing Officer </span>\n  <br><br>\n \n \n  <p  style=\'color:#dfa844;\'>Licensee:</p>\n<br>\n<span >______________________________________________ </span> Date: <span>_______________. </span> 20______<br>\n<br>\n<br>\n  <span  style=\'color:black;\'>Ejikemuwa Odoh - Producer <br>\nAuthorized Signing Officer </span>\n \n\n\n\n\n		</div>\n		', 9, 9, 1, 1, '2019-09-16 13:57:23'),
(2, 'Love Life', '<div class=\'exclusive\'>\n			\n			<h2>Licence Agreement</h2>\n			<h2>(EXCLUSIVE RIGHTS)</h2>\n			<h2>Sound Recording/BEATS</h2>\n			\n			<p style=\'color:black;\'>THIS LICENCE AGREEMENT is made on 12:13:21 Feb 21, 2019 PST (\'Effective \nDate\') by and between <mark> Mikeman </mark> Check (hereinafter referred to as the \'Licensee\') also, if applicable, \nprofessionally known as <mark>Mike Check</mark>, whose principle address is <mark></mark>, and <mark>Ejike</mark> Odoh (hereinafter referred to as the \'Licensor\') also, if \napplicable, professionally known as Ejikemuwa, whose principle address is No 1 Olufowobi Street, Lawanson. Licensor warrants that it controls the mechanical \nrights in and to the copyrighted musical works entitled <mark>Love Life</mark> (\'Composition\') as of and \nprior to the date first written above. The Composition, including the music thereof, was \ncomposed by <mark>Ejikemuwa Odoh</mark> (\'Songwriter\') managed under the Licensor. </p>\n\n	<span style=\'color:#dfa844;\'><b>Master Use: </b></span><span style=\'color:black;\'> The Licensor hereby grants to License an exclusive license (this \'License\') to \n	record vocal synchronization to the Composition partly or in its entirety and substantially in its \n	original form (\'Master Recording\'). </span>\n	<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Mechanical Rights: </b></span><span style=\'color:black;\'>The Licensor hereby grants to Licensee an exclusive license to use Master \nRecording in the reproduction, duplication, manufacture, and distribution of phonograph records,\ncassette tapes, compact disk, digital downloads, other miscellaneous audio and digital \nrecordings, and any lifts and versions thereof (collectively, the \'Recordings\', and individually, a \n\'Recordings\') worldwide for unlimited copies of such Recordings or any combination of such \nRecordings, condition upon the payment to the Licensor a sum of <mark>? 0.03 Nigerian Naira</mark>, \nreceipt of which is confirmed.  </span>\n<br>\n\n\n	<br>\n	<span style=\'color:#dfa844;\'><b>Performance Rights: </b></span><span style=\'color:black;\'>The Licensor here by grants to Licensee an exclusive license to use the \nMaster Recording in unlimited for-profit performances, shows, or concerts.   </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Broadcast Rights: </b></span><span style=\'color:black;\'>The Licensor hereby grants to Licensee an exclusive licence to broadcast or \nair the Master Recording in unlimited amounts of radio stations. </span>\n\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Credit: </b></span><span style=\'color:black;\'>Licensee shall acknowledge the original authorship of the Composition appropriately \nand reasonably in all media and performance formats under the name <mark>\'Ejikemuwa\'</mark> in writing \nwhere possible and vocally otherwise.  </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Consideration: </b></span><span style=\'color:black;\'>In consideration for the rights granted under this agreement, Licensee shall pay \nto licensor the sum of <mark>?100,000 Nigerian Naira</mark> and other good and valuable consideration, \npayable to <mark>\'Ejikemuwa Odoh\'</mark>, receipt of which is hereby acknowledged. If the Licensee fails to \naccount to the Licensor, timely complete the payments provided for hereunder, or perform its \nother obligations hereunder, including having insufficient bank balance, the licensor shall have \nthe right to terminate License upon written notice to the Licensee. Such termination shall render \nthe recording, manufacture and/or distribution of Recordings for which monies have not been \npaid subject to and actionable infringements under applicable law, including, without limitation, \nthe <mark>Nigerian</mark> Copyright Act, as amended. </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Delivery: </b></span><span style=\'color:black;\'>The Composition shall be delivered via The AmplifiHub platform and email to an \nemail address that Licensee provided when making their payment to Licensor. Licensee shall \nreceive an email containing an attachment or link from which they can download the \nComposition. </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Indemnification: </b></span><span style=\'color:black;\'>Accordingly, Licensee agrees to indemnify and hold Licensor harmless from \nand against any and all claims, losses, damages, costs, expenses, including, without limitation, \nreasonable attorney\'s fees, arising of or resulting from a claimed breach of any of Licensee\'s \nrepresentations, warranties or agreements hereunder.  </span>\n\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Audio Samples: </b></span><span style=\'color:black;\'>3rd party sample clearance is the responsibility of the Licensee. </span>\n\n	\n	<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Miscellaneous: </b></span><span style=\'color:black;\'>This license is non-transferable and is limited to the Composition specified \nabove, constitutes the entire agreement between the Licensor and the Licensee relating to the \nComposition, and shall be binding upon both the Licensor and the Licensee and their respective \nsuccessors, assigns, and legal representatives.  </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Governing Law: </b></span><span style=\'color:black;\'>This License is governed by and shall be construed under the law of the State \nof <mark>CA, United States</mark>, without regard to the conflicts of laws principles thereof.  </span>\n\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Publishing.: </b></span><br><span style=\'color:black;\'><mark>Mikeman &nbsp; Check</mark>, owns 80% of publishing rights. \n<br><mark>Ejike &nbsp; Odoh</mark>, owns 20% of publishing rights.\n<br><br>\nFinished audio recording by Licensee of audio release can distribute to music supervisors for \nconsideration of synchronization licensing. Only the recording artist or recording company can \nmonetize with this license. This is not a synchronization license for music supervisors of the TV, \nFilm and Video game industry. \n<br><br>\nTHE PARTIES HAVE DULY EXECUTED THIS AGREEMENT on the date first written \nabove. <br><br>\n\n  </span>\n  \n  <p  style=\'color:#dfa844;\'>Licensor:</p>\n<br>\n<span >______________________________________________ </span> Date: <span>_______________. </span> 20______<br>\n<br>\n<br>\n  <span  style=\'color:black;\'>Ejikemuwa Odoh - Producer <br>\nAuthorized Signing Officer </span>\n  <br><br>\n \n \n  <p  style=\'color:#dfa844;\'>Licensee:</p>\n<br>\n<span >______________________________________________ </span> Date: <span>_______________. </span> 20______<br>\n<br>\n<br>\n  <span  style=\'color:black;\'>Ejikemuwa Odoh - Producer <br>\nAuthorized Signing Officer </span>\n \n\n\n\n\n		</div>\n		', 9, 2, 1, 0, '2019-09-16 13:57:23'),
(3, 'Dancia', '<div class=\'exclusive\'>\n			\n			<h2>Licence Agreement</h2>\n			<h2>(EXCLUSIVE RIGHTS)</h2>\n			<h2>Sound Recording/BEATS</h2>\n			\n			<p style=\'color:black;\'>THIS LICENCE AGREEMENT is made on 12:10:46 Feb 18, 2019 PST (\'Effective \nDate\') by and between <mark> Ejike </mark> Odoh (hereinafter referred to as the \'Licensee\') also, if applicable, \nprofessionally known as <mark>Ejikemuwa</mark>, whose principle address is <mark>No 1 Olufowobi Street, Lawanson</mark>, and <mark>Ejike</mark> Odoh (hereinafter referred to as the \'Licensor\') also, if \napplicable, professionally known as Ejikemuwa, whose principle address is No 1 Olufowobi Street, Lawanson. Licensor warrants that it controls the mechanical \nrights in and to the copyrighted musical works entitled <mark>Dancia</mark> (\'Composition\') as of and \nprior to the date first written above. The Composition, including the music thereof, was \ncomposed by <mark>Ejikemuwa Odoh</mark> (\'Songwriter\') managed under the Licensor. </p>\n\n	<span style=\'color:#dfa844;\'><b>Master Use: </b></span><span style=\'color:black;\'> The Licensor hereby grants to License an exclusive license (this \'License\') to \n	record vocal synchronization to the Composition partly or in its entirety and substantially in its \n	original form (\'Master Recording\'). </span>\n	<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Mechanical Rights: </b></span><span style=\'color:black;\'>The Licensor hereby grants to Licensee an exclusive license to use Master \nRecording in the reproduction, duplication, manufacture, and distribution of phonograph records,\ncassette tapes, compact disk, digital downloads, other miscellaneous audio and digital \nrecordings, and any lifts and versions thereof (collectively, the \'Recordings\', and individually, a \n\'Recordings\') worldwide for unlimited copies of such Recordings or any combination of such \nRecordings, condition upon the payment to the Licensor a sum of <mark>? 19.07 Nigerian Naira</mark>, \nreceipt of which is confirmed.  </span>\n<br>\n\n\n	<br>\n	<span style=\'color:#dfa844;\'><b>Performance Rights: </b></span><span style=\'color:black;\'>The Licensor here by grants to Licensee an exclusive license to use the \nMaster Recording in unlimited for-profit performances, shows, or concerts.   </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Broadcast Rights: </b></span><span style=\'color:black;\'>The Licensor hereby grants to Licensee an exclusive licence to broadcast or \nair the Master Recording in unlimited amounts of radio stations. </span>\n\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Credit: </b></span><span style=\'color:black;\'>Licensee shall acknowledge the original authorship of the Composition appropriately \nand reasonably in all media and performance formats under the name <mark>\'Ejikemuwa\'</mark> in writing \nwhere possible and vocally otherwise.  </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Consideration: </b></span><span style=\'color:black;\'>In consideration for the rights granted under this agreement, Licensee shall pay \nto licensor the sum of <mark>?100,000 Nigerian Naira</mark> and other good and valuable consideration, \npayable to <mark>\'Ejikemuwa Odoh\'</mark>, receipt of which is hereby acknowledged. If the Licensee fails to \naccount to the Licensor, timely complete the payments provided for hereunder, or perform its \nother obligations hereunder, including having insufficient bank balance, the licensor shall have \nthe right to terminate License upon written notice to the Licensee. Such termination shall render \nthe recording, manufacture and/or distribution of Recordings for which monies have not been \npaid subject to and actionable infringements under applicable law, including, without limitation, \nthe <mark>Nigerian</mark> Copyright Act, as amended. </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Delivery: </b></span><span style=\'color:black;\'>The Composition shall be delivered via The AmplifiHub platform and email to an \nemail address that Licensee provided when making their payment to Licensor. Licensee shall \nreceive an email containing an attachment or link from which they can download the \nComposition. </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Indemnification: </b></span><span style=\'color:black;\'>Accordingly, Licensee agrees to indemnify and hold Licensor harmless from \nand against any and all claims, losses, damages, costs, expenses, including, without limitation, \nreasonable attorney\'s fees, arising of or resulting from a claimed breach of any of Licensee\'s \nrepresentations, warranties or agreements hereunder.  </span>\n\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Audio Samples: </b></span><span style=\'color:black;\'>3rd party sample clearance is the responsibility of the Licensee. </span>\n\n	\n	<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Miscellaneous: </b></span><span style=\'color:black;\'>This license is non-transferable and is limited to the Composition specified \nabove, constitutes the entire agreement between the Licensor and the Licensee relating to the \nComposition, and shall be binding upon both the Licensor and the Licensee and their respective \nsuccessors, assigns, and legal representatives.  </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Governing Law: </b></span><span style=\'color:black;\'>This License is governed by and shall be construed under the law of the State \nof <mark>CA, United States</mark>, without regard to the conflicts of laws principles thereof.  </span>\n\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Publishing.: </b></span><br><span style=\'color:black;\'><mark>Ejike &nbsp; Odoh</mark>, owns 80% of publishing rights. \n<br><mark>Ejike &nbsp; Odoh</mark>, owns 20% of publishing rights.\n<br><br>\nFinished audio recording by Licensee of audio release can distribute to music supervisors for \nconsideration of synchronization licensing. Only the recording artist or recording company can \nmonetize with this license. This is not a synchronization license for music supervisors of the TV, \nFilm and Video game industry. \n<br><br>\nTHE PARTIES HAVE DULY EXECUTED THIS AGREEMENT on the date first written \nabove. <br><br>\n\n  </span>\n  \n  <p  style=\'color:#dfa844;\'>Licensor:</p>\n<br>\n<span >______________________________________________ </span> Date: <span>_______________. </span> 20______<br>\n<br>\n<br>\n  <span  style=\'color:black;\'>Ejikemuwa Odoh - Producer <br>\nAuthorized Signing Officer </span>\n  <br><br>\n \n \n  <p  style=\'color:#dfa844;\'>Licensee:</p>\n<br>\n<span >______________________________________________ </span> Date: <span>_______________. </span> 20______<br>\n<br>\n<br>\n  <span  style=\'color:black;\'>Ejikemuwa Odoh - Producer <br>\nAuthorized Signing Officer </span>\n \n\n\n\n\n		</div>\n		', 2, 9, 8, 0, '2019-09-16 13:57:23'),
(4, 'Dancia', '<div class=\'exclusive\'>\n			\n			<h2>Licence Agreement</h2>\n			<h2>(EXCLUSIVE RIGHTS)</h2>\n			<h2>Sound Recording/BEATS</h2>\n			\n			<p style=\'color:black;\'>THIS LICENCE AGREEMENT is made on 21:30:52 Feb 18, 2019 PST (\'Effective \nDate\') by and between <mark> Ejike </mark> Odoh (hereinafter referred to as the \'Licensee\') also, if applicable, \nprofessionally known as <mark>Ejikemuwa</mark>, whose principle address is <mark>No 1 Olufowobi Street, Lawanson</mark>, and <mark>Ejike</mark> Odoh (hereinafter referred to as the \'Licensor\') also, if \napplicable, professionally known as Ejikemuwa, whose principle address is No 1 Olufowobi Street, Lawanson. Licensor warrants that it controls the mechanical \nrights in and to the copyrighted musical works entitled <mark>Dancia</mark> (\'Composition\') as of and \nprior to the date first written above. The Composition, including the music thereof, was \ncomposed by <mark>Ejikemuwa Odoh</mark> (\'Songwriter\') managed under the Licensor. </p>\n\n	<span style=\'color:#dfa844;\'><b>Master Use: </b></span><span style=\'color:black;\'> The Licensor hereby grants to License an exclusive license (this \'License\') to \n	record vocal synchronization to the Composition partly or in its entirety and substantially in its \n	original form (\'Master Recording\'). </span>\n	<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Mechanical Rights: </b></span><span style=\'color:black;\'>The Licensor hereby grants to Licensee an exclusive license to use Master \nRecording in the reproduction, duplication, manufacture, and distribution of phonograph records,\ncassette tapes, compact disk, digital downloads, other miscellaneous audio and digital \nrecordings, and any lifts and versions thereof (collectively, the \'Recordings\', and individually, a \n\'Recordings\') worldwide for unlimited copies of such Recordings or any combination of such \nRecordings, condition upon the payment to the Licensor a sum of <mark>? 40.87 Nigerian Naira</mark>, \nreceipt of which is confirmed.  </span>\n<br>\n\n\n	<br>\n	<span style=\'color:#dfa844;\'><b>Performance Rights: </b></span><span style=\'color:black;\'>The Licensor here by grants to Licensee an exclusive license to use the \nMaster Recording in unlimited for-profit performances, shows, or concerts.   </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Broadcast Rights: </b></span><span style=\'color:black;\'>The Licensor hereby grants to Licensee an exclusive licence to broadcast or \nair the Master Recording in unlimited amounts of radio stations. </span>\n\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Credit: </b></span><span style=\'color:black;\'>Licensee shall acknowledge the original authorship of the Composition appropriately \nand reasonably in all media and performance formats under the name <mark>\'Ejikemuwa\'</mark> in writing \nwhere possible and vocally otherwise.  </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Consideration: </b></span><span style=\'color:black;\'>In consideration for the rights granted under this agreement, Licensee shall pay \nto licensor the sum of <mark>?100,000 Nigerian Naira</mark> and other good and valuable consideration, \npayable to <mark>\'Ejikemuwa Odoh\'</mark>, receipt of which is hereby acknowledged. If the Licensee fails to \naccount to the Licensor, timely complete the payments provided for hereunder, or perform its \nother obligations hereunder, including having insufficient bank balance, the licensor shall have \nthe right to terminate License upon written notice to the Licensee. Such termination shall render \nthe recording, manufacture and/or distribution of Recordings for which monies have not been \npaid subject to and actionable infringements under applicable law, including, without limitation, \nthe <mark>Nigerian</mark> Copyright Act, as amended. </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Delivery: </b></span><span style=\'color:black;\'>The Composition shall be delivered via The AmplifiHub platform and email to an \nemail address that Licensee provided when making their payment to Licensor. Licensee shall \nreceive an email containing an attachment or link from which they can download the \nComposition. </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Indemnification: </b></span><span style=\'color:black;\'>Accordingly, Licensee agrees to indemnify and hold Licensor harmless from \nand against any and all claims, losses, damages, costs, expenses, including, without limitation, \nreasonable attorney\'s fees, arising of or resulting from a claimed breach of any of Licensee\'s \nrepresentations, warranties or agreements hereunder.  </span>\n\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Audio Samples: </b></span><span style=\'color:black;\'>3rd party sample clearance is the responsibility of the Licensee. </span>\n\n	\n	<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Miscellaneous: </b></span><span style=\'color:black;\'>This license is non-transferable and is limited to the Composition specified \nabove, constitutes the entire agreement between the Licensor and the Licensee relating to the \nComposition, and shall be binding upon both the Licensor and the Licensee and their respective \nsuccessors, assigns, and legal representatives.  </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Governing Law: </b></span><span style=\'color:black;\'>This License is governed by and shall be construed under the law of the State \nof <mark>CA, United States</mark>, without regard to the conflicts of laws principles thereof.  </span>\n\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Publishing.: </b></span><br><span style=\'color:black;\'><mark>Ejike &nbsp; Odoh</mark>, owns 80% of publishing rights. \n<br><mark>Ejike &nbsp; Odoh</mark>, owns 20% of publishing rights.\n<br><br>\nFinished audio recording by Licensee of audio release can distribute to music supervisors for \nconsideration of synchronization licensing. Only the recording artist or recording company can \nmonetize with this license. This is not a synchronization license for music supervisors of the TV, \nFilm and Video game industry. \n<br><br>\nTHE PARTIES HAVE DULY EXECUTED THIS AGREEMENT on the date first written \nabove. <br><br>\n\n  </span>\n  \n  <p  style=\'color:#dfa844;\'>Licensor:</p>\n<br>\n<span >______________________________________________ </span> Date: <span>_______________. </span> 20______<br>\n<br>\n<br>\n  <span  style=\'color:black;\'>Ejikemuwa Odoh - Producer <br>\nAuthorized Signing Officer </span>\n  <br><br>\n \n \n  <p  style=\'color:#dfa844;\'>Licensee:</p>\n<br>\n<span >______________________________________________ </span> Date: <span>_______________. </span> 20______<br>\n<br>\n<br>\n  <span  style=\'color:black;\'>Ejikemuwa Odoh - Producer <br>\nAuthorized Signing Officer </span>\n \n\n\n\n\n		</div>\n		', 2, 2, 8, 0, '2019-09-16 13:57:23'),
(5, 'Love Life', '<div class=\'exclusive\'>\n			\n			<h2>Licence Agreement</h2>\n			<h2>(EXCLUSIVE RIGHTS)</h2>\n			<h2>Sound Recording/BEATS</h2>\n			\n			<p style=\'color:black;\'>THIS LICENCE AGREEMENT is made on 12:17:40 Feb 18, 2019 PST (\'Effective \nDate\') by and between <mark> Ejike </mark> Odoh (hereinafter referred to as the \'Licensee\') also, if applicable, \nprofessionally known as <mark>Ejikemuwa</mark>, whose principle address is <mark>No 1 Olufowobi Street, Lawanson</mark>, and <mark>Ejike</mark> Odoh (hereinafter referred to as the \'Licensor\') also, if \napplicable, professionally known as Ejikemuwa, whose principle address is No 1 Olufowobi Street, Lawanson. Licensor warrants that it controls the mechanical \nrights in and to the copyrighted musical works entitled <mark>Love Life</mark> (\'Composition\') as of and \nprior to the date first written above. The Composition, including the music thereof, was \ncomposed by <mark>Ejikemuwa Odoh</mark> (\'Songwriter\') managed under the Licensor. </p>\n\n	<span style=\'color:#dfa844;\'><b>Master Use: </b></span><span style=\'color:black;\'> The Licensor hereby grants to License an exclusive license (this \'License\') to \n	record vocal synchronization to the Composition partly or in its entirety and substantially in its \n	original form (\'Master Recording\'). </span>\n	<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Mechanical Rights: </b></span><span style=\'color:black;\'>The Licensor hereby grants to Licensee an exclusive license to use Master \nRecording in the reproduction, duplication, manufacture, and distribution of phonograph records,\ncassette tapes, compact disk, digital downloads, other miscellaneous audio and digital \nrecordings, and any lifts and versions thereof (collectively, the \'Recordings\', and individually, a \n\'Recordings\') worldwide for unlimited copies of such Recordings or any combination of such \nRecordings, condition upon the payment to the Licensor a sum of <mark>? 24.52 Nigerian Naira</mark>, \nreceipt of which is confirmed.  </span>\n<br>\n\n\n	<br>\n	<span style=\'color:#dfa844;\'><b>Performance Rights: </b></span><span style=\'color:black;\'>The Licensor here by grants to Licensee an exclusive license to use the \nMaster Recording in unlimited for-profit performances, shows, or concerts.   </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Broadcast Rights: </b></span><span style=\'color:black;\'>The Licensor hereby grants to Licensee an exclusive licence to broadcast or \nair the Master Recording in unlimited amounts of radio stations. </span>\n\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Credit: </b></span><span style=\'color:black;\'>Licensee shall acknowledge the original authorship of the Composition appropriately \nand reasonably in all media and performance formats under the name <mark>\'Ejikemuwa\'</mark> in writing \nwhere possible and vocally otherwise.  </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Consideration: </b></span><span style=\'color:black;\'>In consideration for the rights granted under this agreement, Licensee shall pay \nto licensor the sum of <mark>?100,000 Nigerian Naira</mark> and other good and valuable consideration, \npayable to <mark>\'Ejikemuwa Odoh\'</mark>, receipt of which is hereby acknowledged. If the Licensee fails to \naccount to the Licensor, timely complete the payments provided for hereunder, or perform its \nother obligations hereunder, including having insufficient bank balance, the licensor shall have \nthe right to terminate License upon written notice to the Licensee. Such termination shall render \nthe recording, manufacture and/or distribution of Recordings for which monies have not been \npaid subject to and actionable infringements under applicable law, including, without limitation, \nthe <mark>Nigerian</mark> Copyright Act, as amended. </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Delivery: </b></span><span style=\'color:black;\'>The Composition shall be delivered via The AmplifiHub platform and email to an \nemail address that Licensee provided when making their payment to Licensor. Licensee shall \nreceive an email containing an attachment or link from which they can download the \nComposition. </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Indemnification: </b></span><span style=\'color:black;\'>Accordingly, Licensee agrees to indemnify and hold Licensor harmless from \nand against any and all claims, losses, damages, costs, expenses, including, without limitation, \nreasonable attorney\'s fees, arising of or resulting from a claimed breach of any of Licensee\'s \nrepresentations, warranties or agreements hereunder.  </span>\n\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Audio Samples: </b></span><span style=\'color:black;\'>3rd party sample clearance is the responsibility of the Licensee. </span>\n\n	\n	<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Miscellaneous: </b></span><span style=\'color:black;\'>This license is non-transferable and is limited to the Composition specified \nabove, constitutes the entire agreement between the Licensor and the Licensee relating to the \nComposition, and shall be binding upon both the Licensor and the Licensee and their respective \nsuccessors, assigns, and legal representatives.  </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Governing Law: </b></span><span style=\'color:black;\'>This License is governed by and shall be construed under the law of the State \nof <mark>CA, United States</mark>, without regard to the conflicts of laws principles thereof.  </span>\n\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Publishing.: </b></span><br><span style=\'color:black;\'><mark>Ejike &nbsp; Odoh</mark>, owns 80% of publishing rights. \n<br><mark>Ejike &nbsp; Odoh</mark>, owns 20% of publishing rights.\n<br><br>\nFinished audio recording by Licensee of audio release can distribute to music supervisors for \nconsideration of synchronization licensing. Only the recording artist or recording company can \nmonetize with this license. This is not a synchronization license for music supervisors of the TV, \nFilm and Video game industry. \n<br><br>\nTHE PARTIES HAVE DULY EXECUTED THIS AGREEMENT on the date first written \nabove. <br><br>\n\n  </span>\n  \n  <p  style=\'color:#dfa844;\'>Licensor:</p>\n<br>\n<span >______________________________________________ </span> Date: <span>_______________. </span> 20______<br>\n<br>\n<br>\n  <span  style=\'color:black;\'>Ejikemuwa Odoh - Producer <br>\nAuthorized Signing Officer </span>\n  <br><br>\n \n \n  <p  style=\'color:#dfa844;\'>Licensee:</p>\n<br>\n<span >______________________________________________ </span> Date: <span>_______________. </span> 20______<br>\n<br>\n<br>\n  <span  style=\'color:black;\'>Ejikemuwa Odoh - Producer <br>\nAuthorized Signing Officer </span>\n \n\n\n\n\n		</div>\n		', 2, 2, 1, 0, '2019-09-16 13:57:23'),
(6, 'Dancia', '<div class=\'exclusive\'>\n			\n			<h2>Licence Agreement</h2>\n			<h2>(EXCLUSIVE RIGHTS)</h2>\n			<h2>Sound Recording/BEATS</h2>\n			\n			<p style=\'color:black;\'>THIS LICENCE AGREEMENT is made on 21:24:45 Feb 18, 2019 PST (\'Effective \nDate\') by and between <mark>  </mark>  (hereinafter referred to as the \'Licensee\') also, if applicable, \nprofessionally known as <mark>AmpAdmin</mark>, whose principle address is <mark></mark>, and <mark>Ejike</mark> Odoh (hereinafter referred to as the \'Licensor\') also, if \napplicable, professionally known as Ejikemuwa, whose principle address is No 1 Olufowobi Street, Lawanson. Licensor warrants that it controls the mechanical \nrights in and to the copyrighted musical works entitled <mark>Dancia</mark> (\'Composition\') as of and \nprior to the date first written above. The Composition, including the music thereof, was \ncomposed by <mark>Ejikemuwa Odoh</mark> (\'Songwriter\') managed under the Licensor. </p>\n\n	<span style=\'color:#dfa844;\'><b>Master Use: </b></span><span style=\'color:black;\'> The Licensor hereby grants to License an exclusive license (this \'License\') to \n	record vocal synchronization to the Composition partly or in its entirety and substantially in its \n	original form (\'Master Recording\'). </span>\n	<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Mechanical Rights: </b></span><span style=\'color:black;\'>The Licensor hereby grants to Licensee an exclusive license to use Master \nRecording in the reproduction, duplication, manufacture, and distribution of phonograph records,\ncassette tapes, compact disk, digital downloads, other miscellaneous audio and digital \nrecordings, and any lifts and versions thereof (collectively, the \'Recordings\', and individually, a \n\'Recordings\') worldwide for unlimited copies of such Recordings or any combination of such \nRecordings, condition upon the payment to the Licensor a sum of <mark>? 40.87 Nigerian Naira</mark>, \nreceipt of which is confirmed.  </span>\n<br>\n\n\n	<br>\n	<span style=\'color:#dfa844;\'><b>Performance Rights: </b></span><span style=\'color:black;\'>The Licensor here by grants to Licensee an exclusive license to use the \nMaster Recording in unlimited for-profit performances, shows, or concerts.   </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Broadcast Rights: </b></span><span style=\'color:black;\'>The Licensor hereby grants to Licensee an exclusive licence to broadcast or \nair the Master Recording in unlimited amounts of radio stations. </span>\n\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Credit: </b></span><span style=\'color:black;\'>Licensee shall acknowledge the original authorship of the Composition appropriately \nand reasonably in all media and performance formats under the name <mark>\'Ejikemuwa\'</mark> in writing \nwhere possible and vocally otherwise.  </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Consideration: </b></span><span style=\'color:black;\'>In consideration for the rights granted under this agreement, Licensee shall pay \nto licensor the sum of <mark>?100,000 Nigerian Naira</mark> and other good and valuable consideration, \npayable to <mark>\'Ejikemuwa Odoh\'</mark>, receipt of which is hereby acknowledged. If the Licensee fails to \naccount to the Licensor, timely complete the payments provided for hereunder, or perform its \nother obligations hereunder, including having insufficient bank balance, the licensor shall have \nthe right to terminate License upon written notice to the Licensee. Such termination shall render \nthe recording, manufacture and/or distribution of Recordings for which monies have not been \npaid subject to and actionable infringements under applicable law, including, without limitation, \nthe <mark>Nigerian</mark> Copyright Act, as amended. </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Delivery: </b></span><span style=\'color:black;\'>The Composition shall be delivered via The AmplifiHub platform and email to an \nemail address that Licensee provided when making their payment to Licensor. Licensee shall \nreceive an email containing an attachment or link from which they can download the \nComposition. </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Indemnification: </b></span><span style=\'color:black;\'>Accordingly, Licensee agrees to indemnify and hold Licensor harmless from \nand against any and all claims, losses, damages, costs, expenses, including, without limitation, \nreasonable attorney\'s fees, arising of or resulting from a claimed breach of any of Licensee\'s \nrepresentations, warranties or agreements hereunder.  </span>\n\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Audio Samples: </b></span><span style=\'color:black;\'>3rd party sample clearance is the responsibility of the Licensee. </span>\n\n	\n	<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Miscellaneous: </b></span><span style=\'color:black;\'>This license is non-transferable and is limited to the Composition specified \nabove, constitutes the entire agreement between the Licensor and the Licensee relating to the \nComposition, and shall be binding upon both the Licensor and the Licensee and their respective \nsuccessors, assigns, and legal representatives.  </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Governing Law: </b></span><span style=\'color:black;\'>This License is governed by and shall be construed under the law of the State \nof <mark>CA, United States</mark>, without regard to the conflicts of laws principles thereof.  </span>\n\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Publishing.: </b></span><br><span style=\'color:black;\'><mark> &nbsp; </mark>, owns 80% of publishing rights. \n<br><mark>Ejike &nbsp; Odoh</mark>, owns 20% of publishing rights.\n<br><br>\nFinished audio recording by Licensee of audio release can distribute to music supervisors for \nconsideration of synchronization licensing. Only the recording artist or recording company can \nmonetize with this license. This is not a synchronization license for music supervisors of the TV, \nFilm and Video game industry. \n<br><br>\nTHE PARTIES HAVE DULY EXECUTED THIS AGREEMENT on the date first written \nabove. <br><br>\n\n  </span>\n  \n  <p  style=\'color:#dfa844;\'>Licensor:</p>\n<br>\n<span >______________________________________________ </span> Date: <span>_______________. </span> 20______<br>\n<br>\n<br>\n  <span  style=\'color:black;\'>Ejikemuwa Odoh - Producer <br>\nAuthorized Signing Officer </span>\n  <br><br>\n \n \n  <p  style=\'color:#dfa844;\'>Licensee:</p>\n<br>\n<span >______________________________________________ </span> Date: <span>_______________. </span> 20______<br>\n<br>\n<br>\n  <span  style=\'color:black;\'>Ejikemuwa Odoh - Producer <br>\nAuthorized Signing Officer </span>\n \n\n\n\n\n		</div>\n		', 1, 2, 8, 0, '2019-09-16 13:57:23'),
(7, 'Dancia', '<div class=\'exclusive\'>\n			\n			<h2>Licence Agreement</h2>\n			<h2>(EXCLUSIVE RIGHTS)</h2>\n			<h2>Sound Recording/BEATS</h2>\n			\n			<p style=\'color:black;\'>THIS LICENCE AGREEMENT is made on 02:04:16 Feb 22, 2019 PST (\'Effective \nDate\') by and between <mark> Mikeman </mark> Check (hereinafter referred to as the \'Licensee\') also, if applicable, \nprofessionally known as <mark>Mike Check</mark>, whose principle address is <mark></mark>, and <mark>Ejike</mark> Odoh (hereinafter referred to as the \'Licensor\') also, if \napplicable, professionally known as Ejikemuwa, whose principle address is No 1 Olufowobi Street, Lawanson. Licensor warrants that it controls the mechanical \nrights in and to the copyrighted musical works entitled <mark>Dancia</mark> (\'Composition\') as of and \nprior to the date first written above. The Composition, including the music thereof, was \ncomposed by <mark>Ejikemuwa Odoh</mark> (\'Songwriter\') managed under the Licensor. </p>\n\n	<span style=\'color:#dfa844;\'><b>Master Use: </b></span><span style=\'color:black;\'> The Licensor hereby grants to License an exclusive license (this \'License\') to \n	record vocal synchronization to the Composition partly or in its entirety and substantially in its \n	original form (\'Master Recording\'). </span>\n	<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Mechanical Rights: </b></span><span style=\'color:black;\'>The Licensor hereby grants to Licensee an exclusive license to use Master \nRecording in the reproduction, duplication, manufacture, and distribution of phonograph records,\ncassette tapes, compact disk, digital downloads, other miscellaneous audio and digital \nrecordings, and any lifts and versions thereof (collectively, the \'Recordings\', and individually, a \n\'Recordings\') worldwide for unlimited copies of such Recordings or any combination of such \nRecordings, condition upon the payment to the Licensor a sum of <mark>? 40.87 Nigerian Naira</mark>, \nreceipt of which is confirmed.  </span>\n<br>\n\n\n	<br>\n	<span style=\'color:#dfa844;\'><b>Performance Rights: </b></span><span style=\'color:black;\'>The Licensor here by grants to Licensee an exclusive license to use the \nMaster Recording in unlimited for-profit performances, shows, or concerts.   </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Broadcast Rights: </b></span><span style=\'color:black;\'>The Licensor hereby grants to Licensee an exclusive licence to broadcast or \nair the Master Recording in unlimited amounts of radio stations. </span>\n\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Credit: </b></span><span style=\'color:black;\'>Licensee shall acknowledge the original authorship of the Composition appropriately \nand reasonably in all media and performance formats under the name <mark>\'Ejikemuwa\'</mark> in writing \nwhere possible and vocally otherwise.  </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Consideration: </b></span><span style=\'color:black;\'>In consideration for the rights granted under this agreement, Licensee shall pay \nto licensor the sum of <mark>?100,000 Nigerian Naira</mark> and other good and valuable consideration, \npayable to <mark>\'Ejikemuwa Odoh\'</mark>, receipt of which is hereby acknowledged. If the Licensee fails to \naccount to the Licensor, timely complete the payments provided for hereunder, or perform its \nother obligations hereunder, including having insufficient bank balance, the licensor shall have \nthe right to terminate License upon written notice to the Licensee. Such termination shall render \nthe recording, manufacture and/or distribution of Recordings for which monies have not been \npaid subject to and actionable infringements under applicable law, including, without limitation, \nthe <mark>Nigerian</mark> Copyright Act, as amended. </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Delivery: </b></span><span style=\'color:black;\'>The Composition shall be delivered via The AmplifiHub platform and email to an \nemail address that Licensee provided when making their payment to Licensor. Licensee shall \nreceive an email containing an attachment or link from which they can download the \nComposition. </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Indemnification: </b></span><span style=\'color:black;\'>Accordingly, Licensee agrees to indemnify and hold Licensor harmless from \nand against any and all claims, losses, damages, costs, expenses, including, without limitation, \nreasonable attorney\'s fees, arising of or resulting from a claimed breach of any of Licensee\'s \nrepresentations, warranties or agreements hereunder.  </span>\n\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Audio Samples: </b></span><span style=\'color:black;\'>3rd party sample clearance is the responsibility of the Licensee. </span>\n\n	\n	<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Miscellaneous: </b></span><span style=\'color:black;\'>This license is non-transferable and is limited to the Composition specified \nabove, constitutes the entire agreement between the Licensor and the Licensee relating to the \nComposition, and shall be binding upon both the Licensor and the Licensee and their respective \nsuccessors, assigns, and legal representatives.  </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Governing Law: </b></span><span style=\'color:black;\'>This License is governed by and shall be construed under the law of the State \nof <mark>CA, United States</mark>, without regard to the conflicts of laws principles thereof.  </span>\n\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Publishing.: </b></span><br><span style=\'color:black;\'><mark>Mikeman &nbsp; Check</mark>, owns 80% of publishing rights. \n<br><mark>Ejike &nbsp; Odoh</mark>, owns 20% of publishing rights.\n<br><br>\nFinished audio recording by Licensee of audio release can distribute to music supervisors for \nconsideration of synchronization licensing. Only the recording artist or recording company can \nmonetize with this license. This is not a synchronization license for music supervisors of the TV, \nFilm and Video game industry. \n<br><br>\nTHE PARTIES HAVE DULY EXECUTED THIS AGREEMENT on the date first written \nabove. <br><br>\n\n  </span>\n  \n  <p  style=\'color:#dfa844;\'>Licensor:</p>\n<br>\n<span >______________________________________________ </span> Date: <span>_______________. </span> 20______<br>\n<br>\n<br>\n  <span  style=\'color:black;\'>Ejikemuwa Odoh - Producer <br>\nAuthorized Signing Officer </span>\n  <br><br>\n \n \n  <p  style=\'color:#dfa844;\'>Licensee:</p>\n<br>\n<span >______________________________________________ </span> Date: <span>_______________. </span> 20______<br>\n<br>\n<br>\n  <span  style=\'color:black;\'>Ejikemuwa Odoh - Producer <br>\nAuthorized Signing Officer </span>\n \n\n\n\n\n		</div>\n		', 9, 9, 8, 28, '2019-09-16 13:09:15');
INSERT INTO `contract` (`id`, `name`, `description`, `buyer_id`, `seller_id`, `beat_id`, `payment_id`, `date`) VALUES
(8, 'How We Do', '<div class=\'exclusive\'>\n			\n			<h2>Licence Agreement</h2>\n			<h2>(EXCLUSIVE RIGHTS)</h2>\n			<h2>Sound Recording/BEATS</h2>\n			\n			<p style=\'color:black;\'>THIS LICENCE AGREEMENT is made on 01:33:34 Feb 22, 2019 PST (\'Effective \nDate\') by and between <mark> Mikeman </mark> Check (hereinafter referred to as the \'Licensee\') also, if applicable, \nprofessionally known as <mark>Mike Check</mark>, whose principle address is <mark></mark>, and <mark>Ejike</mark> Odoh (hereinafter referred to as the \'Licensor\') also, if \napplicable, professionally known as Ejikemuwa, whose principle address is No 1 Olufowobi Street, Lawanson. Licensor warrants that it controls the mechanical \nrights in and to the copyrighted musical works entitled <mark>How We Do</mark> (\'Composition\') as of and \nprior to the date first written above. The Composition, including the music thereof, was \ncomposed by <mark>Ejikemuwa Odoh</mark> (\'Songwriter\') managed under the Licensor. </p>\n\n	<span style=\'color:#dfa844;\'><b>Master Use: </b></span><span style=\'color:black;\'> The Licensor hereby grants to License an exclusive license (this \'License\') to \n	record vocal synchronization to the Composition partly or in its entirety and substantially in its \n	original form (\'Master Recording\'). </span>\n	<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Mechanical Rights: </b></span><span style=\'color:black;\'>The Licensor hereby grants to Licensee an exclusive license to use Master \nRecording in the reproduction, duplication, manufacture, and distribution of phonograph records,\ncassette tapes, compact disk, digital downloads, other miscellaneous audio and digital \nrecordings, and any lifts and versions thereof (collectively, the \'Recordings\', and individually, a \n\'Recordings\') worldwide for unlimited copies of such Recordings or any combination of such \nRecordings, condition upon the payment to the Licensor a sum of <mark>? 16.35 Nigerian Naira</mark>, \nreceipt of which is confirmed.  </span>\n<br>\n\n\n	<br>\n	<span style=\'color:#dfa844;\'><b>Performance Rights: </b></span><span style=\'color:black;\'>The Licensor here by grants to Licensee an exclusive license to use the \nMaster Recording in unlimited for-profit performances, shows, or concerts.   </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Broadcast Rights: </b></span><span style=\'color:black;\'>The Licensor hereby grants to Licensee an exclusive licence to broadcast or \nair the Master Recording in unlimited amounts of radio stations. </span>\n\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Credit: </b></span><span style=\'color:black;\'>Licensee shall acknowledge the original authorship of the Composition appropriately \nand reasonably in all media and performance formats under the name <mark>\'Ejikemuwa\'</mark> in writing \nwhere possible and vocally otherwise.  </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Consideration: </b></span><span style=\'color:black;\'>In consideration for the rights granted under this agreement, Licensee shall pay \nto licensor the sum of <mark>?100,000 Nigerian Naira</mark> and other good and valuable consideration, \npayable to <mark>\'Ejikemuwa Odoh\'</mark>, receipt of which is hereby acknowledged. If the Licensee fails to \naccount to the Licensor, timely complete the payments provided for hereunder, or perform its \nother obligations hereunder, including having insufficient bank balance, the licensor shall have \nthe right to terminate License upon written notice to the Licensee. Such termination shall render \nthe recording, manufacture and/or distribution of Recordings for which monies have not been \npaid subject to and actionable infringements under applicable law, including, without limitation, \nthe <mark>Nigerian</mark> Copyright Act, as amended. </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Delivery: </b></span><span style=\'color:black;\'>The Composition shall be delivered via The AmplifiHub platform and email to an \nemail address that Licensee provided when making their payment to Licensor. Licensee shall \nreceive an email containing an attachment or link from which they can download the \nComposition. </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Indemnification: </b></span><span style=\'color:black;\'>Accordingly, Licensee agrees to indemnify and hold Licensor harmless from \nand against any and all claims, losses, damages, costs, expenses, including, without limitation, \nreasonable attorney\'s fees, arising of or resulting from a claimed breach of any of Licensee\'s \nrepresentations, warranties or agreements hereunder.  </span>\n\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Audio Samples: </b></span><span style=\'color:black;\'>3rd party sample clearance is the responsibility of the Licensee. </span>\n\n	\n	<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Miscellaneous: </b></span><span style=\'color:black;\'>This license is non-transferable and is limited to the Composition specified \nabove, constitutes the entire agreement between the Licensor and the Licensee relating to the \nComposition, and shall be binding upon both the Licensor and the Licensee and their respective \nsuccessors, assigns, and legal representatives.  </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Governing Law: </b></span><span style=\'color:black;\'>This License is governed by and shall be construed under the law of the State \nof <mark>CA, United States</mark>, without regard to the conflicts of laws principles thereof.  </span>\n\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Publishing.: </b></span><br><span style=\'color:black;\'><mark>Mikeman &nbsp; Check</mark>, owns 80% of publishing rights. \n<br><mark>Ejike &nbsp; Odoh</mark>, owns 20% of publishing rights.\n<br><br>\nFinished audio recording by Licensee of audio release can distribute to music supervisors for \nconsideration of synchronization licensing. Only the recording artist or recording company can \nmonetize with this license. This is not a synchronization license for music supervisors of the TV, \nFilm and Video game industry. \n<br><br>\nTHE PARTIES HAVE DULY EXECUTED THIS AGREEMENT on the date first written \nabove. <br><br>\n\n  </span>\n  \n  <p  style=\'color:#dfa844;\'>Licensor:</p>\n<br>\n<span >______________________________________________ </span> Date: <span>_______________. </span> 20______<br>\n<br>\n<br>\n  <span  style=\'color:black;\'>Ejikemuwa Odoh - Producer <br>\nAuthorized Signing Officer </span>\n  <br><br>\n \n \n  <p  style=\'color:#dfa844;\'>Licensee:</p>\n<br>\n<span >______________________________________________ </span> Date: <span>_______________. </span> 20______<br>\n<br>\n<br>\n  <span  style=\'color:black;\'>Ejikemuwa Odoh - Producer <br>\nAuthorized Signing Officer </span>\n \n\n\n\n\n		</div>\n		', 9, 2, 4, 27, '2019-09-16 13:11:41'),
(9, 'Dancia', '<div class=\'exclusive\'>\n			\n			<h2>Licence Agreement</h2>\n			<h2>(EXCLUSIVE RIGHTS)</h2>\n			<h2>Sound Recording/BEATS</h2>\n			\n			<p style=\'color:black;\'>THIS LICENCE AGREEMENT is made on 02:04:16 Feb 22, 2019 PST (\'Effective \nDate\') by and between <mark> Mikeman </mark> Check (hereinafter referred to as the \'Licensee\') also, if applicable, \nprofessionally known as <mark>Mike Check</mark>, whose principle address is <mark></mark>, and <mark>Ejike</mark> Odoh (hereinafter referred to as the \'Licensor\') also, if \napplicable, professionally known as Ejikemuwa, whose principle address is No 1 Olufowobi Street, Lawanson. Licensor warrants that it controls the mechanical \nrights in and to the copyrighted musical works entitled <mark>Dancia</mark> (\'Composition\') as of and \nprior to the date first written above. The Composition, including the music thereof, was \ncomposed by <mark>Ejikemuwa Odoh</mark> (\'Songwriter\') managed under the Licensor. </p>\n\n	<span style=\'color:#dfa844;\'><b>Master Use: </b></span><span style=\'color:black;\'> The Licensor hereby grants to License an exclusive license (this \'License\') to \n	record vocal synchronization to the Composition partly or in its entirety and substantially in its \n	original form (\'Master Recording\'). </span>\n	<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Mechanical Rights: </b></span><span style=\'color:black;\'>The Licensor hereby grants to Licensee an exclusive license to use Master \nRecording in the reproduction, duplication, manufacture, and distribution of phonograph records,\ncassette tapes, compact disk, digital downloads, other miscellaneous audio and digital \nrecordings, and any lifts and versions thereof (collectively, the \'Recordings\', and individually, a \n\'Recordings\') worldwide for unlimited copies of such Recordings or any combination of such \nRecordings, condition upon the payment to the Licensor a sum of <mark>? 40.87 Nigerian Naira</mark>, \nreceipt of which is confirmed.  </span>\n<br>\n\n\n	<br>\n	<span style=\'color:#dfa844;\'><b>Performance Rights: </b></span><span style=\'color:black;\'>The Licensor here by grants to Licensee an exclusive license to use the \nMaster Recording in unlimited for-profit performances, shows, or concerts.   </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Broadcast Rights: </b></span><span style=\'color:black;\'>The Licensor hereby grants to Licensee an exclusive licence to broadcast or \nair the Master Recording in unlimited amounts of radio stations. </span>\n\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Credit: </b></span><span style=\'color:black;\'>Licensee shall acknowledge the original authorship of the Composition appropriately \nand reasonably in all media and performance formats under the name <mark>\'Ejikemuwa\'</mark> in writing \nwhere possible and vocally otherwise.  </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Consideration: </b></span><span style=\'color:black;\'>In consideration for the rights granted under this agreement, Licensee shall pay \nto licensor the sum of <mark>?100,000 Nigerian Naira</mark> and other good and valuable consideration, \npayable to <mark>\'Ejikemuwa Odoh\'</mark>, receipt of which is hereby acknowledged. If the Licensee fails to \naccount to the Licensor, timely complete the payments provided for hereunder, or perform its \nother obligations hereunder, including having insufficient bank balance, the licensor shall have \nthe right to terminate License upon written notice to the Licensee. Such termination shall render \nthe recording, manufacture and/or distribution of Recordings for which monies have not been \npaid subject to and actionable infringements under applicable law, including, without limitation, \nthe <mark>Nigerian</mark> Copyright Act, as amended. </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Delivery: </b></span><span style=\'color:black;\'>The Composition shall be delivered via The AmplifiHub platform and email to an \nemail address that Licensee provided when making their payment to Licensor. Licensee shall \nreceive an email containing an attachment or link from which they can download the \nComposition. </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Indemnification: </b></span><span style=\'color:black;\'>Accordingly, Licensee agrees to indemnify and hold Licensor harmless from \nand against any and all claims, losses, damages, costs, expenses, including, without limitation, \nreasonable attorney\'s fees, arising of or resulting from a claimed breach of any of Licensee\'s \nrepresentations, warranties or agreements hereunder.  </span>\n\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Audio Samples: </b></span><span style=\'color:black;\'>3rd party sample clearance is the responsibility of the Licensee. </span>\n\n	\n	<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Miscellaneous: </b></span><span style=\'color:black;\'>This license is non-transferable and is limited to the Composition specified \nabove, constitutes the entire agreement between the Licensor and the Licensee relating to the \nComposition, and shall be binding upon both the Licensor and the Licensee and their respective \nsuccessors, assigns, and legal representatives.  </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Governing Law: </b></span><span style=\'color:black;\'>This License is governed by and shall be construed under the law of the State \nof <mark>CA, United States</mark>, without regard to the conflicts of laws principles thereof.  </span>\n\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Publishing.: </b></span><br><span style=\'color:black;\'><mark>Mikeman &nbsp; Check</mark>, owns 80% of publishing rights. \n<br><mark>Ejike &nbsp; Odoh</mark>, owns 20% of publishing rights.\n<br><br>\nFinished audio recording by Licensee of audio release can distribute to music supervisors for \nconsideration of synchronization licensing. Only the recording artist or recording company can \nmonetize with this license. This is not a synchronization license for music supervisors of the TV, \nFilm and Video game industry. \n<br><br>\nTHE PARTIES HAVE DULY EXECUTED THIS AGREEMENT on the date first written \nabove. <br><br>\n\n  </span>\n  \n  <p  style=\'color:#dfa844;\'>Licensor:</p>\n<br>\n<span >______________________________________________ </span> Date: <span>_______________. </span> 20______<br>\n<br>\n<br>\n  <span  style=\'color:black;\'>Ejikemuwa Odoh - Producer <br>\nAuthorized Signing Officer </span>\n  <br><br>\n \n \n  <p  style=\'color:#dfa844;\'>Licensee:</p>\n<br>\n<span >______________________________________________ </span> Date: <span>_______________. </span> 20______<br>\n<br>\n<br>\n  <span  style=\'color:black;\'>Ejikemuwa Odoh - Producer <br>\nAuthorized Signing Officer </span>\n \n\n\n\n\n		</div>\n		', 9, 2, 8, 28, '2019-09-16 13:12:34'),
(10, 'Dancia', '<div class=\'exclusive\'>\n			\n			<h2>Licence Agreement</h2>\n			<h2>(EXCLUSIVE RIGHTS)</h2>\n			<h2>Sound Recording/BEATS</h2>\n			\n			<p style=\'color:black;\'>THIS LICENCE AGREEMENT is made on 21:24:45 Feb 18, 2019 PST (\'Effective \nDate\') by and between <mark> Mikeman </mark> Check (hereinafter referred to as the \'Licensee\') also, if applicable, \nprofessionally known as <mark>Mike Check</mark>, whose principle address is <mark></mark>, and <mark>Ejike</mark> Odoh (hereinafter referred to as the \'Licensor\') also, if \napplicable, professionally known as Ejikemuwa, whose principle address is No 1 Olufowobi Street, Lawanson. Licensor warrants that it controls the mechanical \nrights in and to the copyrighted musical works entitled <mark>Dancia</mark> (\'Composition\') as of and \nprior to the date first written above. The Composition, including the music thereof, was \ncomposed by <mark>Ejikemuwa Odoh</mark> (\'Songwriter\') managed under the Licensor. </p>\n\n	<span style=\'color:#dfa844;\'><b>Master Use: </b></span><span style=\'color:black;\'> The Licensor hereby grants to License an exclusive license (this \'License\') to \n	record vocal synchronization to the Composition partly or in its entirety and substantially in its \n	original form (\'Master Recording\'). </span>\n	<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Mechanical Rights: </b></span><span style=\'color:black;\'>The Licensor hereby grants to Licensee an exclusive license to use Master \nRecording in the reproduction, duplication, manufacture, and distribution of phonograph records,\ncassette tapes, compact disk, digital downloads, other miscellaneous audio and digital \nrecordings, and any lifts and versions thereof (collectively, the \'Recordings\', and individually, a \n\'Recordings\') worldwide for unlimited copies of such Recordings or any combination of such \nRecordings, condition upon the payment to the Licensor a sum of <mark>? 40.87 Nigerian Naira</mark>, \nreceipt of which is confirmed.  </span>\n<br>\n\n\n	<br>\n	<span style=\'color:#dfa844;\'><b>Performance Rights: </b></span><span style=\'color:black;\'>The Licensor here by grants to Licensee an exclusive license to use the \nMaster Recording in unlimited for-profit performances, shows, or concerts.   </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Broadcast Rights: </b></span><span style=\'color:black;\'>The Licensor hereby grants to Licensee an exclusive licence to broadcast or \nair the Master Recording in unlimited amounts of radio stations. </span>\n\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Credit: </b></span><span style=\'color:black;\'>Licensee shall acknowledge the original authorship of the Composition appropriately \nand reasonably in all media and performance formats under the name <mark>\'Ejikemuwa\'</mark> in writing \nwhere possible and vocally otherwise.  </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Consideration: </b></span><span style=\'color:black;\'>In consideration for the rights granted under this agreement, Licensee shall pay \nto licensor the sum of <mark>?100,000 Nigerian Naira</mark> and other good and valuable consideration, \npayable to <mark>\'Ejikemuwa Odoh\'</mark>, receipt of which is hereby acknowledged. If the Licensee fails to \naccount to the Licensor, timely complete the payments provided for hereunder, or perform its \nother obligations hereunder, including having insufficient bank balance, the licensor shall have \nthe right to terminate License upon written notice to the Licensee. Such termination shall render \nthe recording, manufacture and/or distribution of Recordings for which monies have not been \npaid subject to and actionable infringements under applicable law, including, without limitation, \nthe <mark>Nigerian</mark> Copyright Act, as amended. </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Delivery: </b></span><span style=\'color:black;\'>The Composition shall be delivered via The AmplifiHub platform and email to an \nemail address that Licensee provided when making their payment to Licensor. Licensee shall \nreceive an email containing an attachment or link from which they can download the \nComposition. </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Indemnification: </b></span><span style=\'color:black;\'>Accordingly, Licensee agrees to indemnify and hold Licensor harmless from \nand against any and all claims, losses, damages, costs, expenses, including, without limitation, \nreasonable attorney\'s fees, arising of or resulting from a claimed breach of any of Licensee\'s \nrepresentations, warranties or agreements hereunder.  </span>\n\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Audio Samples: </b></span><span style=\'color:black;\'>3rd party sample clearance is the responsibility of the Licensee. </span>\n\n	\n	<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Miscellaneous: </b></span><span style=\'color:black;\'>This license is non-transferable and is limited to the Composition specified \nabove, constitutes the entire agreement between the Licensor and the Licensee relating to the \nComposition, and shall be binding upon both the Licensor and the Licensee and their respective \nsuccessors, assigns, and legal representatives.  </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Governing Law: </b></span><span style=\'color:black;\'>This License is governed by and shall be construed under the law of the State \nof <mark>CA, United States</mark>, without regard to the conflicts of laws principles thereof.  </span>\n\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Publishing.: </b></span><br><span style=\'color:black;\'><mark>Mikeman &nbsp; Check</mark>, owns 80% of publishing rights. \n<br><mark>Ejike &nbsp; Odoh</mark>, owns 20% of publishing rights.\n<br><br>\nFinished audio recording by Licensee of audio release can distribute to music supervisors for \nconsideration of synchronization licensing. Only the recording artist or recording company can \nmonetize with this license. This is not a synchronization license for music supervisors of the TV, \nFilm and Video game industry. \n<br><br>\nTHE PARTIES HAVE DULY EXECUTED THIS AGREEMENT on the date first written \nabove. <br><br>\n\n  </span>\n  \n  <p  style=\'color:#dfa844;\'>Licensor:</p>\n<br>\n<span >______________________________________________ </span> Date: <span>_______________. </span> 20______<br>\n<br>\n<br>\n  <span  style=\'color:black;\'>Ejikemuwa Odoh - Producer <br>\nAuthorized Signing Officer </span>\n  <br><br>\n \n \n  <p  style=\'color:#dfa844;\'>Licensee:</p>\n<br>\n<span >______________________________________________ </span> Date: <span>_______________. </span> 20______<br>\n<br>\n<br>\n  <span  style=\'color:black;\'>Ejikemuwa Odoh - Producer <br>\nAuthorized Signing Officer </span>\n \n\n\n\n\n		</div>\n		', 9, 2, 8, 9, '2019-09-16 16:32:43'),
(11, 'Dancia', '<div class=\'exclusive\'>\n			\n			<h2>Licence Agreement</h2>\n			<h2>(EXCLUSIVE RIGHTS)</h2>\n			<h2>Sound Recording/BEATS</h2>\n			\n			<p style=\'color:black;\'>THIS LICENCE AGREEMENT is made on 21:24:45 Feb 18, 2019 PST (\'Effective \nDate\') by and between <mark> Mikeman </mark> Check (hereinafter referred to as the \'Licensee\') also, if applicable, \nprofessionally known as <mark>Mike Check</mark>, whose principle address is <mark></mark>, and <mark>Ejike</mark> Odoh (hereinafter referred to as the \'Licensor\') also, if \napplicable, professionally known as Ejikemuwa, whose principle address is No 1 Olufowobi Street, Lawanson. Licensor warrants that it controls the mechanical \nrights in and to the copyrighted musical works entitled <mark>Dancia</mark> (\'Composition\') as of and \nprior to the date first written above. The Composition, including the music thereof, was \ncomposed by <mark>Ejikemuwa Odoh</mark> (\'Songwriter\') managed under the Licensor. </p>\n\n	<span style=\'color:#dfa844;\'><b>Master Use: </b></span><span style=\'color:black;\'> The Licensor hereby grants to License an exclusive license (this \'License\') to \n	record vocal synchronization to the Composition partly or in its entirety and substantially in its \n	original form (\'Master Recording\'). </span>\n	<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Mechanical Rights: </b></span><span style=\'color:black;\'>The Licensor hereby grants to Licensee an exclusive license to use Master \nRecording in the reproduction, duplication, manufacture, and distribution of phonograph records,\ncassette tapes, compact disk, digital downloads, other miscellaneous audio and digital \nrecordings, and any lifts and versions thereof (collectively, the \'Recordings\', and individually, a \n\'Recordings\') worldwide for unlimited copies of such Recordings or any combination of such \nRecordings, condition upon the payment to the Licensor a sum of <mark>? 40.87 Nigerian Naira</mark>, \nreceipt of which is confirmed.  </span>\n<br>\n\n\n	<br>\n	<span style=\'color:#dfa844;\'><b>Performance Rights: </b></span><span style=\'color:black;\'>The Licensor here by grants to Licensee an exclusive license to use the \nMaster Recording in unlimited for-profit performances, shows, or concerts.   </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Broadcast Rights: </b></span><span style=\'color:black;\'>The Licensor hereby grants to Licensee an exclusive licence to broadcast or \nair the Master Recording in unlimited amounts of radio stations. </span>\n\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Credit: </b></span><span style=\'color:black;\'>Licensee shall acknowledge the original authorship of the Composition appropriately \nand reasonably in all media and performance formats under the name <mark>\'Ejikemuwa\'</mark> in writing \nwhere possible and vocally otherwise.  </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Consideration: </b></span><span style=\'color:black;\'>In consideration for the rights granted under this agreement, Licensee shall pay \nto licensor the sum of <mark>?100,000 Nigerian Naira</mark> and other good and valuable consideration, \npayable to <mark>\'Ejikemuwa Odoh\'</mark>, receipt of which is hereby acknowledged. If the Licensee fails to \naccount to the Licensor, timely complete the payments provided for hereunder, or perform its \nother obligations hereunder, including having insufficient bank balance, the licensor shall have \nthe right to terminate License upon written notice to the Licensee. Such termination shall render \nthe recording, manufacture and/or distribution of Recordings for which monies have not been \npaid subject to and actionable infringements under applicable law, including, without limitation, \nthe <mark>Nigerian</mark> Copyright Act, as amended. </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Delivery: </b></span><span style=\'color:black;\'>The Composition shall be delivered via The AmplifiHub platform and email to an \nemail address that Licensee provided when making their payment to Licensor. Licensee shall \nreceive an email containing an attachment or link from which they can download the \nComposition. </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Indemnification: </b></span><span style=\'color:black;\'>Accordingly, Licensee agrees to indemnify and hold Licensor harmless from \nand against any and all claims, losses, damages, costs, expenses, including, without limitation, \nreasonable attorney\'s fees, arising of or resulting from a claimed breach of any of Licensee\'s \nrepresentations, warranties or agreements hereunder.  </span>\n\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Audio Samples: </b></span><span style=\'color:black;\'>3rd party sample clearance is the responsibility of the Licensee. </span>\n\n	\n	<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Miscellaneous: </b></span><span style=\'color:black;\'>This license is non-transferable and is limited to the Composition specified \nabove, constitutes the entire agreement between the Licensor and the Licensee relating to the \nComposition, and shall be binding upon both the Licensor and the Licensee and their respective \nsuccessors, assigns, and legal representatives.  </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Governing Law: </b></span><span style=\'color:black;\'>This License is governed by and shall be construed under the law of the State \nof <mark>CA, United States</mark>, without regard to the conflicts of laws principles thereof.  </span>\n\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Publishing.: </b></span><br><span style=\'color:black;\'><mark>Mikeman &nbsp; Check</mark>, owns 80% of publishing rights. \n<br><mark>Ejike &nbsp; Odoh</mark>, owns 20% of publishing rights.\n<br><br>\nFinished audio recording by Licensee of audio release can distribute to music supervisors for \nconsideration of synchronization licensing. Only the recording artist or recording company can \nmonetize with this license. This is not a synchronization license for music supervisors of the TV, \nFilm and Video game industry. \n<br><br>\nTHE PARTIES HAVE DULY EXECUTED THIS AGREEMENT on the date first written \nabove. <br><br>\n\n  </span>\n  \n  <p  style=\'color:#dfa844;\'>Licensor:</p>\n<br>\n<span >______________________________________________ </span> Date: <span>_______________. </span> 20______<br>\n<br>\n<br>\n  <span  style=\'color:black;\'>Ejikemuwa Odoh - Producer <br>\nAuthorized Signing Officer </span>\n  <br><br>\n \n \n  <p  style=\'color:#dfa844;\'>Licensee:</p>\n<br>\n<span >______________________________________________ </span> Date: <span>_______________. </span> 20______<br>\n<br>\n<br>\n  <span  style=\'color:black;\'>Ejikemuwa Odoh - Producer <br>\nAuthorized Signing Officer </span>\n \n\n\n\n\n		</div>\n		', 9, 2, 8, 9, '2019-09-16 16:48:45'),
(12, 'Dancia', '<div class=\'exclusive\'>\n			\n			<h2>Licence Agreement</h2>\n			<h2>(EXCLUSIVE RIGHTS)</h2>\n			<h2>Sound Recording/BEATS</h2>\n			\n			<p style=\'color:black;\'>THIS LICENCE AGREEMENT is made on 21:24:45 Feb 18, 2019 PST (\'Effective \nDate\') by and between <mark> Mikeman </mark> Check (hereinafter referred to as the \'Licensee\') also, if applicable, \nprofessionally known as <mark>Mike Check</mark>, whose principle address is <mark></mark>, and <mark>Ejike</mark> Odoh (hereinafter referred to as the \'Licensor\') also, if \napplicable, professionally known as Ejikemuwa, whose principle address is No 1 Olufowobi Street, Lawanson. Licensor warrants that it controls the mechanical \nrights in and to the copyrighted musical works entitled <mark>Dancia</mark> (\'Composition\') as of and \nprior to the date first written above. The Composition, including the music thereof, was \ncomposed by <mark>Ejikemuwa Odoh</mark> (\'Songwriter\') managed under the Licensor. </p>\n\n	<span style=\'color:#dfa844;\'><b>Master Use: </b></span><span style=\'color:black;\'> The Licensor hereby grants to License an exclusive license (this \'License\') to \n	record vocal synchronization to the Composition partly or in its entirety and substantially in its \n	original form (\'Master Recording\'). </span>\n	<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Mechanical Rights: </b></span><span style=\'color:black;\'>The Licensor hereby grants to Licensee an exclusive license to use Master \nRecording in the reproduction, duplication, manufacture, and distribution of phonograph records,\ncassette tapes, compact disk, digital downloads, other miscellaneous audio and digital \nrecordings, and any lifts and versions thereof (collectively, the \'Recordings\', and individually, a \n\'Recordings\') worldwide for unlimited copies of such Recordings or any combination of such \nRecordings, condition upon the payment to the Licensor a sum of <mark>? 40.87 Nigerian Naira</mark>, \nreceipt of which is confirmed.  </span>\n<br>\n\n\n	<br>\n	<span style=\'color:#dfa844;\'><b>Performance Rights: </b></span><span style=\'color:black;\'>The Licensor here by grants to Licensee an exclusive license to use the \nMaster Recording in unlimited for-profit performances, shows, or concerts.   </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Broadcast Rights: </b></span><span style=\'color:black;\'>The Licensor hereby grants to Licensee an exclusive licence to broadcast or \nair the Master Recording in unlimited amounts of radio stations. </span>\n\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Credit: </b></span><span style=\'color:black;\'>Licensee shall acknowledge the original authorship of the Composition appropriately \nand reasonably in all media and performance formats under the name <mark>\'Ejikemuwa\'</mark> in writing \nwhere possible and vocally otherwise.  </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Consideration: </b></span><span style=\'color:black;\'>In consideration for the rights granted under this agreement, Licensee shall pay \nto licensor the sum of <mark>?100,000 Nigerian Naira</mark> and other good and valuable consideration, \npayable to <mark>\'Ejikemuwa Odoh\'</mark>, receipt of which is hereby acknowledged. If the Licensee fails to \naccount to the Licensor, timely complete the payments provided for hereunder, or perform its \nother obligations hereunder, including having insufficient bank balance, the licensor shall have \nthe right to terminate License upon written notice to the Licensee. Such termination shall render \nthe recording, manufacture and/or distribution of Recordings for which monies have not been \npaid subject to and actionable infringements under applicable law, including, without limitation, \nthe <mark>Nigerian</mark> Copyright Act, as amended. </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Delivery: </b></span><span style=\'color:black;\'>The Composition shall be delivered via The AmplifiHub platform and email to an \nemail address that Licensee provided when making their payment to Licensor. Licensee shall \nreceive an email containing an attachment or link from which they can download the \nComposition. </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Indemnification: </b></span><span style=\'color:black;\'>Accordingly, Licensee agrees to indemnify and hold Licensor harmless from \nand against any and all claims, losses, damages, costs, expenses, including, without limitation, \nreasonable attorney\'s fees, arising of or resulting from a claimed breach of any of Licensee\'s \nrepresentations, warranties or agreements hereunder.  </span>\n\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Audio Samples: </b></span><span style=\'color:black;\'>3rd party sample clearance is the responsibility of the Licensee. </span>\n\n	\n	<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Miscellaneous: </b></span><span style=\'color:black;\'>This license is non-transferable and is limited to the Composition specified \nabove, constitutes the entire agreement between the Licensor and the Licensee relating to the \nComposition, and shall be binding upon both the Licensor and the Licensee and their respective \nsuccessors, assigns, and legal representatives.  </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Governing Law: </b></span><span style=\'color:black;\'>This License is governed by and shall be construed under the law of the State \nof <mark>CA, United States</mark>, without regard to the conflicts of laws principles thereof.  </span>\n\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Publishing.: </b></span><br><span style=\'color:black;\'><mark>Mikeman &nbsp; Check</mark>, owns 80% of publishing rights. \n<br><mark>Ejike &nbsp; Odoh</mark>, owns 20% of publishing rights.\n<br><br>\nFinished audio recording by Licensee of audio release can distribute to music supervisors for \nconsideration of synchronization licensing. Only the recording artist or recording company can \nmonetize with this license. This is not a synchronization license for music supervisors of the TV, \nFilm and Video game industry. \n<br><br>\nTHE PARTIES HAVE DULY EXECUTED THIS AGREEMENT on the date first written \nabove. <br><br>\n\n  </span>\n  \n  <p  style=\'color:#dfa844;\'>Licensor:</p>\n<br>\n<span >______________________________________________ </span> Date: <span>_______________. </span> 20______<br>\n<br>\n<br>\n  <span  style=\'color:black;\'>Ejikemuwa Odoh - Producer <br>\nAuthorized Signing Officer </span>\n  <br><br>\n \n \n  <p  style=\'color:#dfa844;\'>Licensee:</p>\n<br>\n<span >______________________________________________ </span> Date: <span>_______________. </span> 20______<br>\n<br>\n<br>\n  <span  style=\'color:black;\'>Ejikemuwa Odoh - Producer <br>\nAuthorized Signing Officer </span>\n \n\n\n\n\n		</div>\n		', 9, 2, 8, 9, '2019-09-16 16:48:46'),
(13, 'Rainman', '<div class=\'exclusive\'>\n			\n			<h2>Licence Agreement</h2>\n			<h2>(EXCLUSIVE RIGHTS)</h2>\n			<h2>Sound Recording/BEATS</h2>\n			\n			<p style=\'color:black;\'>THIS LICENCE AGREEMENT is made on 12:13:19 Feb 18, 2019 PST (\'Effective \nDate\') by and between <mark> Ejike </mark> Odoh (hereinafter referred to as the \'Licensee\') also, if applicable, \nprofessionally known as <mark>Ejikemuwa</mark>, whose principle address is <mark>No 1 Olufowobi Street, Lawanson</mark>, and <mark>Babasola</mark> Davies (hereinafter referred to as the \'Licensor\') also, if \napplicable, professionally known as , whose principle address is . Licensor warrants that it controls the mechanical \nrights in and to the copyrighted musical works entitled <mark>Rainman</mark> (\'Composition\') as of and \nprior to the date first written above. The Composition, including the music thereof, was \ncomposed by <mark>Ejikemuwa Odoh</mark> (\'Songwriter\') managed under the Licensor. </p>\n\n	<span style=\'color:#dfa844;\'><b>Master Use: </b></span><span style=\'color:black;\'> The Licensor hereby grants to License an exclusive license (this \'License\') to \n	record vocal synchronization to the Composition partly or in its entirety and substantially in its \n	original form (\'Master Recording\'). </span>\n	<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Mechanical Rights: </b></span><span style=\'color:black;\'>The Licensor hereby grants to Licensee an exclusive license to use Master \nRecording in the reproduction, duplication, manufacture, and distribution of phonograph records,\ncassette tapes, compact disk, digital downloads, other miscellaneous audio and digital \nrecordings, and any lifts and versions thereof (collectively, the \'Recordings\', and individually, a \n\'Recordings\') worldwide for unlimited copies of such Recordings or any combination of such \nRecordings, condition upon the payment to the Licensor a sum of <mark>? 27.25 Nigerian Naira</mark>, \nreceipt of which is confirmed.  </span>\n<br>\n\n\n	<br>\n	<span style=\'color:#dfa844;\'><b>Performance Rights: </b></span><span style=\'color:black;\'>The Licensor here by grants to Licensee an exclusive license to use the \nMaster Recording in unlimited for-profit performances, shows, or concerts.   </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Broadcast Rights: </b></span><span style=\'color:black;\'>The Licensor hereby grants to Licensee an exclusive licence to broadcast or \nair the Master Recording in unlimited amounts of radio stations. </span>\n\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Credit: </b></span><span style=\'color:black;\'>Licensee shall acknowledge the original authorship of the Composition appropriately \nand reasonably in all media and performance formats under the name <mark>\'\'</mark> in writing \nwhere possible and vocally otherwise.  </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Consideration: </b></span><span style=\'color:black;\'>In consideration for the rights granted under this agreement, Licensee shall pay \nto licensor the sum of <mark>?100,000 Nigerian Naira</mark> and other good and valuable consideration, \npayable to <mark>\'Ejikemuwa Odoh\'</mark>, receipt of which is hereby acknowledged. If the Licensee fails to \naccount to the Licensor, timely complete the payments provided for hereunder, or perform its \nother obligations hereunder, including having insufficient bank balance, the licensor shall have \nthe right to terminate License upon written notice to the Licensee. Such termination shall render \nthe recording, manufacture and/or distribution of Recordings for which monies have not been \npaid subject to and actionable infringements under applicable law, including, without limitation, \nthe <mark>Nigerian</mark> Copyright Act, as amended. </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Delivery: </b></span><span style=\'color:black;\'>The Composition shall be delivered via The AmplifiHub platform and email to an \nemail address that Licensee provided when making their payment to Licensor. Licensee shall \nreceive an email containing an attachment or link from which they can download the \nComposition. </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Indemnification: </b></span><span style=\'color:black;\'>Accordingly, Licensee agrees to indemnify and hold Licensor harmless from \nand against any and all claims, losses, damages, costs, expenses, including, without limitation, \nreasonable attorney\'s fees, arising of or resulting from a claimed breach of any of Licensee\'s \nrepresentations, warranties or agreements hereunder.  </span>\n\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Audio Samples: </b></span><span style=\'color:black;\'>3rd party sample clearance is the responsibility of the Licensee. </span>\n\n	\n	<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Miscellaneous: </b></span><span style=\'color:black;\'>This license is non-transferable and is limited to the Composition specified \nabove, constitutes the entire agreement between the Licensor and the Licensee relating to the \nComposition, and shall be binding upon both the Licensor and the Licensee and their respective \nsuccessors, assigns, and legal representatives.  </span>\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Governing Law: </b></span><span style=\'color:black;\'>This License is governed by and shall be construed under the law of the State \nof <mark>CA, United States</mark>, without regard to the conflicts of laws principles thereof.  </span>\n\n\n<br>\n	<br>\n	<span style=\'color:#dfa844;\'><b>Publishing.: </b></span><br><span style=\'color:black;\'><mark>Ejike &nbsp; Odoh</mark>, owns 80% of publishing rights. \n<br><mark>Babasola &nbsp; Davies</mark>, owns 20% of publishing rights.\n<br><br>\nFinished audio recording by Licensee of audio release can distribute to music supervisors for \nconsideration of synchronization licensing. Only the recording artist or recording company can \nmonetize with this license. This is not a synchronization license for music supervisors of the TV, \nFilm and Video game industry. \n<br><br>\nTHE PARTIES HAVE DULY EXECUTED THIS AGREEMENT on the date first written \nabove. <br><br>\n\n  </span>\n  \n  <p  style=\'color:#dfa844;\'>Licensor:</p>\n<br>\n<span >______________________________________________ </span> Date: <span>_______________. </span> 20______<br>\n<br>\n<br>\n  <span  style=\'color:black;\'>Ejikemuwa Odoh - Producer <br>\nAuthorized Signing Officer </span>\n  <br><br>\n \n \n  <p  style=\'color:#dfa844;\'>Licensee:</p>\n<br>\n<span >______________________________________________ </span> Date: <span>_______________. </span> 20______<br>\n<br>\n<br>\n  <span  style=\'color:black;\'>Ejikemuwa Odoh - Producer <br>\nAuthorized Signing Officer </span>\n \n\n\n\n\n		</div>\n		', 2, 106, 73, 2, '2019-09-16 16:51:52');

-- --------------------------------------------------------

--
-- Table structure for table `directorequests`
--

CREATE TABLE `directorequests` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `director_id` int(11) NOT NULL,
  `orderid` varchar(100) NOT NULL,
  `video_type` text NOT NULL,
  `brief` text NOT NULL,
  `status` varchar(100) NOT NULL,
  `deadline` date NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `directorequests`
--

INSERT INTO `directorequests` (`id`, `user_id`, `director_id`, `orderid`, `video_type`, `brief`, `status`, `deadline`, `created`, `modified`) VALUES
(12, 2, 2, 'dtr1547982057', 'test', 'test', 'pending', '2019-01-20', '2019-01-20 12:00:57', '2019-01-20 12:00:57'),
(13, 9, 2, 'dtr1547984493', 'Fgdhc', 'Fgdhchv', 'pending', '2019-01-22', '2019-01-20 12:41:32', '2019-01-20 12:41:32');

-- --------------------------------------------------------

--
-- Table structure for table `directors`
--

CREATE TABLE `directors` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `featured` int(11) NOT NULL DEFAULT '0',
  `videos_url` varchar(1000) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `directors`
--

INSERT INTO `directors` (`id`, `user_id`, `featured`, `videos_url`, `created`, `modified`) VALUES
(1, 2, 1, '[\"https://www.youtube.com/embed/UMaRN5WFa84\"]', '2018-05-25 10:00:51', '2019-01-17 19:48:28'),
(2, 74, 1, '[\"https:\\/\\/drive.google.com\\/folderview?id=1hOMTdGRjaiD_k43B_HrLoMLaU_1kGP4w\"]', '2018-07-01 07:28:54', '2019-01-18 19:59:27');

-- --------------------------------------------------------

--
-- Table structure for table `email_templates`
--

CREATE TABLE `email_templates` (
  `id` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `group` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `template_text` text,
  `keywords` text,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `email_templates`
--

INSERT INTO `email_templates` (`id`, `description`, `subject`, `group`, `slug`, `template_text`, `keywords`, `created`, `modified`) VALUES
(1, 'Beat Buyers', 'Beat Purchase Notification - AmplifiHub', NULL, 'beat-buyer', '<table class=\"wrapper\" style=\"border-collapse: collapse;table-layout: fixed;min-width: 320px;width: 100%;background-color: #fff;\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\"><tbody><tr><td> <div role=\"banner\"> <div class=\"preheader\" style=\"Margin: 0 auto;max-width: 560px;min-width: 280px; width: 280px;width: calc(28000% - 167440px);\"> <div style=\"border-collapse: collapse;display: table;width: 100%;\"> <div class=\"snippet\" style=\"display: table-cell;Float: left;font-size: 12px;line-height: 19px;max-width: 280px;min-width: 140px; width: 140px;width: calc(14000% - 78120px);padding: 10px 0 5px 0;color: #adb3b9;font-family: sans-serif;\"> </div><div class=\"webversion\" style=\"display: table-cell;Float: left;font-size: 12px;line-height: 19px;max-width: 280px;min-width: 139px; width: 139px;width: calc(14100% - 78680px);padding: 10px 0 5px 0;text-align: right;color: #adb3b9;font-family: sans-serif;\"> </div></div></div><div class=\"header\" style=\"Margin: 0 auto;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);\" id=\"emb-email-header-container\"> <div class=\"logo emb-logo-margin-box\" style=\"font-size: 26px;line-height: 32px;Margin-top: 6px;Margin-bottom: 20px;color: #c3ced9;font-family: Roboto,Tahoma,sans-serif;Margin-left: 20px;Margin-right: 20px;\" align=\"center\"> <div class=\"logo-center\" align=\"center\" id=\"emb-email-header\"><img style=\"display: block;height: auto;width: 100%;border: 0;max-width: 300px;\" src=\"https://amplifihub.com/img/logo/amplifihubbloglogo.png\" alt=\"\" width=\"300\"></div></div></div></div><div role=\"section\"> <div style=\"background-color: #75c5f0;\"> <div class=\"layout three-col\" style=\"Margin: 0 auto;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;\"> <div class=\"layout__inner\" style=\"border-collapse: collapse;display: table;width: 100%;\"> <div class=\"column\" style=\"Float: left;max-width: 320px;min-width: 200px; width: 320px;width: calc(72200px - 12000%);text-align: left;color: #8e959c;font-size: 14px;line-height: 21px;font-family: sans-serif;\"> <div style=\"Margin-left: 20px;Margin-right: 20px;\"> <div style=\"mso-line-height-rule: exactly;line-height: 10px;font-size: 1px;\">&nbsp;</div></div></div><div class=\"column\" style=\"Float: left;max-width: 320px;min-width: 200px; width: 320px;width: calc(72200px - 12000%);text-align: left;color: #8e959c;font-size: 14px;line-height: 21px;font-family: sans-serif;\"> <div style=\"Margin-left: 20px;Margin-right: 20px;\"> <div style=\"mso-line-height-rule: exactly;line-height: 10px;font-size: 1px;\">&nbsp;</div></div></div><div class=\"column\" style=\"Float: left;max-width: 320px;min-width: 200px; width: 320px;width: calc(72200px - 12000%);text-align: left;color: #8e959c;font-size: 14px;line-height: 21px;font-family: sans-serif;\"> <div style=\"Margin-left: 20px;Margin-right: 20px;\"> <div style=\"mso-line-height-rule: exactly;line-height: 10px;font-size: 1px;\">&nbsp;</div></div></div></div></div></div><div style=\"background-color: #e30d40;\"> <div class=\"layout one-col\" style=\"Margin: 0 auto;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;\"> <div class=\"layout__inner\" style=\"border-collapse: collapse;display: table;width: 100%;\"> <div class=\"column\" style=\"max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);text-align: left;color: #8e959c;font-size: 14px;line-height: 21px;font-family: sans-serif;\"> <div style=\"Margin-left: 20px;Margin-right: 20px;\"> <div style=\"mso-line-height-rule: exactly;line-height: 10px;font-size: 1px;\">&nbsp;</div></div></div></div></div></div><div style=\"background-color: #262626;\"> <div class=\"layout one-col\" style=\"Margin: 0 auto;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;\"> <div class=\"layout__inner\" style=\"border-collapse: collapse;display: table;width: 100%;\"> <div class=\"column\" style=\"max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);text-align: left;color: #8e959c;font-size: 14px;line-height: 21px;font-family: sans-serif;\"> <div style=\"Margin-left: 20px;Margin-right: 20px;\"> <div style=\"mso-line-height-rule: exactly;line-height: 43px;font-size: 1px;\">&nbsp;</div></div><div style=\"Margin-left: 20px;Margin-right: 20px;\"> <div style=\"mso-line-height-rule: exactly;mso-text-raise: 4px;\"> <h1 class=\"size-64\" style=\"Margin-top: 0;Margin-bottom: 20px;font-style: normal;font-weight: normal;color: #000;font-size: 44px;line-height: 50px;font-family: avenir,sans-serif;text-align: center;\" lang=\"x-size-64\"><span class=\"font-avenir\"><span style=\"color:#ffffff\"><strong>You just </strong></span><span style=\"color:#e30d40\"><strong>purchased a beat!</strong></span><br><span style=\"color:#ffffff\"><strong>Congratulations! </strong></span></span></h1> </div></div><div style=\"Margin-left: 20px;Margin-right: 20px;\"> <div style=\"mso-line-height-rule: exactly;line-height: 20px;font-size: 1px;\">&nbsp;</div></div><div style=\"Margin-left: 20px;Margin-right: 20px;\"> <div style=\"mso-line-height-rule: exactly;line-height: 5px;font-size: 1px;\">&nbsp;</div></div></div></div></div></div><div style=\"mso-line-height-rule: exactly;line-height: 15px;font-size: 15px;\">&nbsp;</div><div class=\"layout one-col fixed-width\" style=\"Margin: 0 auto;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;\"> <div class=\"layout__inner\" style=\"border-collapse: collapse;display: table;width: 100%;background-color: #ffffff;\"> <div class=\"column\" style=\"text-align: left;color: #8e959c;font-size: 14px;line-height: 21px;font-family: sans-serif;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);\"> <div style=\"Margin-left: 20px;Margin-right: 20px;\"> <div style=\"mso-line-height-rule: exactly;mso-text-raise: 4px;\"> <p class=\"size-17\" style=\"Margin-top: 0;Margin-bottom: 0;font-size: 17px;line-height: 26px;\" lang=\"x-size-17\"><span style=\"color:#5c5c5c\">Hey there {BUYER_NAME},<br>You just successfully purchased a beat from {PRODUCER_NAME}.<span style=\"color:#df0d3b\"> <a style=\"text-decoration: underline;transition: opacity 0.1s ease-in;color: #18527c;\" href=\"http://trk12.benchurl.com/c/l?u=871456B&amp;e=DD7BF5&amp;c=EC0B1&amp;t=1&amp;l=16FE7FA4&amp;email=iiSElYPKv%2FXQD5KJmsA3v8AZeYvkIc61&amp;seq=1\"><span style=\"color:#df0d3b\">Login now</span></a></span> to see the transaction and probably purchase more beats!</span></p></div></div></div></div></div><div style=\"mso-line-height-rule: exactly;line-height: 20px;font-size: 20px;\">&nbsp;</div><div style=\"background-color: #e30d40;\"> <div class=\"layout one-col\" style=\"Margin: 0 auto;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;\"> <div class=\"layout__inner\" style=\"border-collapse: collapse;display: table;width: 100%;\"> <div class=\"column\" style=\"max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);text-align: left;color: #8e959c;font-size: 14px;line-height: 21px;font-family: sans-serif;\"> <div style=\"Margin-left: 20px;Margin-right: 20px;\"> <div style=\"mso-line-height-rule: exactly;line-height: 10px;font-size: 1px;\">&nbsp;</div></div></div></div></div></div><div style=\"background-color: #75c5f0;\"> <div class=\"layout one-col\" style=\"Margin: 0 auto;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;\"> <div class=\"layout__inner\" style=\"border-collapse: collapse;display: table;width: 100%;\"> <div class=\"column\" style=\"max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);text-align: left;color: #8e959c;font-size: 14px;line-height: 21px;font-family: sans-serif;\"> <div style=\"Margin-left: 20px;Margin-right: 20px;\"> <div style=\"mso-line-height-rule: exactly;line-height: 15px;font-size: 1px;\">&nbsp;</div></div><div style=\"Margin-left: 20px;Margin-right: 20px;\"> <div class=\"btn btn--flat btn--medium\" style=\"Margin-bottom: 20px;text-align: center;\"><!--[if !mso]--><a style=\"border-radius: 4px;display: inline-block;font-size: 12px;font-weight: bold;line-height: 22px;padding: 10px 20px;text-align: center;text-decoration: none !important;transition: opacity 0.1s ease-in;color: #fff !important;background-color: #e30d40;font-family: sans-serif;\" href=\"https://amplifihub.com/login\">Login Now</a><!--[endif]--> </div></div><div style=\"Margin-left: 20px;Margin-right: 20px;\"> <div style=\"mso-line-height-rule: exactly;line-height: 1px;font-size: 1px;\">&nbsp;</div></div></div></div></div></div><div style=\"mso-line-height-rule: exactly;line-height: 20px;font-size: 20px;\">&nbsp;</div><div style=\"mso-line-height-rule: exactly;\" role=\"contentinfo\"> <div class=\"layout email-footer\" style=\"Margin: 0 auto;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;\"> <div class=\"layout__inner\" style=\"border-collapse: collapse;display: table;width: 100%;\"> <div class=\"column wide\" style=\"text-align: left;font-size: 12px;line-height: 19px;color: #adb3b9;font-family: sans-serif;Float: left;max-width: 400px;min-width: 320px; width: 320px;width: calc(8000% - 47600px);\"> <div style=\"Margin-left: 20px;Margin-right: 20px;Margin-top: 10px;Margin-bottom: 10px;\"> <table class=\"email-footer__links emb-web-links\" style=\"border-collapse: collapse;table-layout: fixed;\" role=\"presentation\"><tbody><tr role=\"navigation\"> <td class=\"emb-web-links\" style=\"padding: 0;width: 26px;\"><a style=\"text-decoration: underline;transition: opacity 0.1s ease-in;color: #adb3b9;\" href=\"facebook.com/amplifihub\"><img style=\"border: 0;\" src=\"https://i2.createsend1.com/static/eb/master/13-the-blueprint-3/images/facebook.png\" width=\"26\" height=\"26\" alt=\"Facebook\"></a></td><td class=\"emb-web-links\" style=\"padding: 0 0 0 3px;width: 26px;\"><a style=\"text-decoration: underline;transition: opacity 0.1s ease-in;color: #adb3b9;\" href=\"twitter.com/amplifihub\"><img style=\"border: 0;\" src=\"https://i3.createsend1.com/static/eb/master/13-the-blueprint-3/images/twitter.png\" width=\"26\" height=\"26\" alt=\"Twitter\"></a></td><td class=\"emb-web-links\" style=\"padding: 0 0 0 3px;width: 26px;\"><a style=\"text-decoration: underline;transition: opacity 0.1s ease-in;color: #adb3b9;\" href=\"instagram.com/amplifihub\"><img style=\"border: 0;\" src=\"https://i5.createsend1.com/static/eb/master/13-the-blueprint-3/images/instagram.png\" width=\"26\" height=\"26\" alt=\"Instagram\"></a></td><td class=\"emb-web-links\" style=\"padding: 0 0 0 3px;width: 26px;\"><a style=\"text-decoration: underline;transition: opacity 0.1s ease-in;color: #adb3b9;\" href=\"amplifihub.com\"><img style=\"border: 0;\" src=\"https://i7.createsend1.com/static/eb/master/13-the-blueprint-3/images/website.png\" width=\"26\" height=\"26\" alt=\"Website\"></a></td></tr></tbody></table> <div style=\"font-size: 12px;line-height: 19px;Margin-top: 20px;\"> <div>AmplifiHub<br>1, Olufowobi Str, Lawanson,<br>Surulere, Lagos,<br>Nigeria</div></div><div style=\"font-size: 12px;line-height: 19px;Margin-top: 18px;\"> <div>You are receiving this email because of your relationship with AmplifiHub.</div></div></div></div><div class=\"column narrow\" style=\"text-align: left;font-size: 12px;line-height: 19px;color: #adb3b9;font-family: sans-serif;Float: left;max-width: 320px;min-width: 200px; width: 320px;width: calc(72200px - 12000%);\"> <div style=\"Margin-left: 20px;Margin-right: 20px;Margin-top: 10px;Margin-bottom: 10px;\"> <div class=\"footer__share-button\"> <div style=\"Margin-bottom: 6px;mso-line-height-rule: exactly;\"> <fblike style=\"border-radius: 2px;color: #ffffff;display: inline-block;font-size: 11px;font-weight: bold;line-height: 19px;text-align: left;text-decoration: none;border-style: solid;border-width: 4px 7px 3px 4px;mso-border-width-alt: 4px 8px 8px 8px;background-color: gray;border-color: gray;mso-border-color-alt: gray;\" likeurl=\"facebook.com/amplifihub\"> &nbsp;<img style=\"border: 0;display: inline-block;margin-right: 2px;vertical-align: -3px;\" src=\"https://i9.createsend1.com/static/eb/master/13-the-blueprint-3/images/fblike-icon@2x.png\" width=\"16\" height=\"16\" border=\"0\" alt=\"\"> <span style=\"font-size: 11px;mso-text-raise: 3px;\">Like&nbsp;</span> </fblike> </div><div style=\"Margin-bottom: 6px;mso-line-height-rule: exactly;\"> <tweet style=\"border-radius: 2px;color: #ffffff;display: inline-block;font-size: 11px;font-weight: bold;line-height: 19px;text-align: left;text-decoration: none;border-style: solid;border-width: 4px 7px 3px 4px;mso-border-width-alt: 4px 8px 8px 8px;background-color: gray;border-color: gray;mso-border-color-alt: gray;\"> &nbsp;<img style=\"border: 0;display: inline-block;margin-right: 2px;vertical-align: -3px;\" src=\"https://i10.createsend1.com/static/eb/master/13-the-blueprint-3/images/tweet-icon@2x.png\" width=\"16\" height=\"16\" border=\"0\" alt=\"\"> <span style=\"font-size: 11px;mso-text-raise: 3px;\">Tweet&nbsp;</span> </tweet> </div></div></div></div></div></div><div class=\"layout one-col email-footer\" style=\"Margin: 0 auto;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;\"> <div class=\"layout__inner\" style=\"border-collapse: collapse;display: table;width: 100%;\"> <div class=\"column\" style=\"text-align: left;font-size: 12px;line-height: 19px;color: #adb3b9;font-family: sans-serif;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);\"> <div style=\"Margin-left: 20px;Margin-right: 20px;Margin-top: 10px;Margin-bottom: 10px;\"> <div style=\"font-size: 12px;line-height: 19px;\"> <span><preferences style=\"text-decoration: underline;\" lang=\"en\">Preferences</preferences>&nbsp;&nbsp;|&nbsp;&nbsp;</span><unsubscribe style=\"text-decoration: underline;\">Unsubscribe</unsubscribe> </div></div></div></div></div></div><div style=\"mso-line-height-rule: exactly;line-height: 40px;font-size: 40px;\">&nbsp;</div></div></td></tr></tbody></table>', 'a:2:{s:15:\"{PRODUCER_NAME}\";s:18:\"Name of a Producer\";s:12:\"{BUYER_NAME}\";s:15:\"Name of a buyer\";}', '2019-02-17 18:50:58', '2019-02-22 10:12:19'),
(2, 'Beat Sellers', 'Beat Sale Notification - AmplifiHub', NULL, 'beat-seller', '<table class=\"wrapper\" style=\"border-collapse: collapse;table-layout: fixed;min-width: 320px;width: 100%;background-color: #fff;\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\"><tbody><tr><td> <div role=\"banner\"> <div class=\"preheader\" style=\"Margin: 0 auto;max-width: 560px;min-width: 280px; width: 280px;width: calc(28000% - 167440px);\"> <div style=\"border-collapse: collapse;display: table;width: 100%;\"> <div class=\"snippet\" style=\"display: table-cell;Float: left;font-size: 12px;line-height: 19px;max-width: 280px;min-width: 140px; width: 140px;width: calc(14000% - 78120px);padding: 10px 0 5px 0;color: #adb3b9;font-family: sans-serif;\"> </div><div class=\"webversion\" style=\"display: table-cell;Float: left;font-size: 12px;line-height: 19px;max-width: 280px;min-width: 139px; width: 139px;width: calc(14100% - 78680px);padding: 10px 0 5px 0;text-align: right;color: #adb3b9;font-family: sans-serif;\"> </div></div></div><div class=\"header\" style=\"Margin: 0 auto;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);\" id=\"emb-email-header-container\"> <div class=\"logo emb-logo-margin-box\" style=\"font-size: 26px;line-height: 32px;Margin-top: 6px;Margin-bottom: 20px;color: #c3ced9;font-family: Roboto,Tahoma,sans-serif;Margin-left: 20px;Margin-right: 20px;\" align=\"center\"> <div class=\"logo-center\" align=\"center\" id=\"emb-email-header\"><img style=\"display: block;height: auto;width: 100%;border: 0;max-width: 300px;\" src=\"https://amplifihub.com/img/logo/amplifihubbloglogo.png\" alt=\"\" width=\"300\"></div></div></div></div><div role=\"section\"> <div style=\"background-color: #75c5f0;\"> <div class=\"layout three-col\" style=\"Margin: 0 auto;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;\"> <div class=\"layout__inner\" style=\"border-collapse: collapse;display: table;width: 100%;\"> <div class=\"column\" style=\"Float: left;max-width: 320px;min-width: 200px; width: 320px;width: calc(72200px - 12000%);text-align: left;color: #8e959c;font-size: 14px;line-height: 21px;font-family: sans-serif;\"> <div style=\"Margin-left: 20px;Margin-right: 20px;\"> <div style=\"mso-line-height-rule: exactly;line-height: 10px;font-size: 1px;\">&nbsp;</div></div></div><div class=\"column\" style=\"Float: left;max-width: 320px;min-width: 200px; width: 320px;width: calc(72200px - 12000%);text-align: left;color: #8e959c;font-size: 14px;line-height: 21px;font-family: sans-serif;\"> <div style=\"Margin-left: 20px;Margin-right: 20px;\"> <div style=\"mso-line-height-rule: exactly;line-height: 10px;font-size: 1px;\">&nbsp;</div></div></div><div class=\"column\" style=\"Float: left;max-width: 320px;min-width: 200px; width: 320px;width: calc(72200px - 12000%);text-align: left;color: #8e959c;font-size: 14px;line-height: 21px;font-family: sans-serif;\"> <div style=\"Margin-left: 20px;Margin-right: 20px;\"> <div style=\"mso-line-height-rule: exactly;line-height: 10px;font-size: 1px;\">&nbsp;</div></div></div></div></div></div><div style=\"background-color: #e30d40;\"> <div class=\"layout one-col\" style=\"Margin: 0 auto;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;\"> <div class=\"layout__inner\" style=\"border-collapse: collapse;display: table;width: 100%;\"> <div class=\"column\" style=\"max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);text-align: left;color: #8e959c;font-size: 14px;line-height: 21px;font-family: sans-serif;\"> <div style=\"Margin-left: 20px;Margin-right: 20px;\"> <div style=\"mso-line-height-rule: exactly;line-height: 10px;font-size: 1px;\">&nbsp;</div></div></div></div></div></div><div style=\"background-color: #262626;\"> <div class=\"layout one-col\" style=\"Margin: 0 auto;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;\"> <div class=\"layout__inner\" style=\"border-collapse: collapse;display: table;width: 100%;\"> <div class=\"column\" style=\"max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);text-align: left;color: #8e959c;font-size: 14px;line-height: 21px;font-family: sans-serif;\"> <div style=\"Margin-left: 20px;Margin-right: 20px;\"> <div style=\"mso-line-height-rule: exactly;line-height: 43px;font-size: 1px;\">&nbsp;</div></div><div style=\"Margin-left: 20px;Margin-right: 20px;\"> <div style=\"mso-line-height-rule: exactly;mso-text-raise: 4px;\"> <h1 class=\"size-64\" style=\"Margin-top: 0;Margin-bottom: 20px;font-style: normal;font-weight: normal;color: #000;font-size: 44px;line-height: 50px;font-family: avenir,sans-serif;text-align: center;\" lang=\"x-size-64\"><span class=\"font-avenir\"><span style=\"color:#ffffff\"><strong>You just </strong></span><span style=\"color:#e30d40\"><strong>sold a beat!</strong></span><br><span style=\"color:#ffffff\"><strong>Congratulations! </strong></span></span></h1> </div></div><div style=\"Margin-left: 20px;Margin-right: 20px;\"> <div style=\"mso-line-height-rule: exactly;line-height: 20px;font-size: 1px;\">&nbsp;</div></div><div style=\"Margin-left: 20px;Margin-right: 20px;\"> <div style=\"mso-line-height-rule: exactly;line-height: 5px;font-size: 1px;\">&nbsp;</div></div></div></div></div></div><div style=\"mso-line-height-rule: exactly;line-height: 15px;font-size: 15px;\">&nbsp;</div><div class=\"layout one-col fixed-width\" style=\"Margin: 0 auto;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;\"> <div class=\"layout__inner\" style=\"border-collapse: collapse;display: table;width: 100%;background-color: #ffffff;\"> <div class=\"column\" style=\"text-align: left;color: #8e959c;font-size: 14px;line-height: 21px;font-family: sans-serif;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);\"> <div style=\"Margin-left: 20px;Margin-right: 20px;\"> <div style=\"mso-line-height-rule: exactly;mso-text-raise: 4px;\"> <p class=\"size-17\" style=\"Margin-top: 0;Margin-bottom: 0;font-size: 17px;line-height: 26px;\" lang=\"x-size-17\"><span style=\"color:#5c5c5c\">Hey there {PRODUCER_NAME},<br>You just successfully sold a beat to {BUYER_NAME}. <span style=\"color:#df0d3b\"> <a style=\"text-decoration: underline;transition: opacity 0.1s ease-in;color: #18527c;\" href=\"http://trk12.benchurl.com/c/l?u=871456B&amp;e=DD7BF5&amp;c=EC0B1&amp;t=1&amp;l=16FE7FA4&amp;email=iiSElYPKv%2FXQD5KJmsA3v8AZeYvkIc61&amp;seq=1\"><span style=\"color:#df0d3b\">Login now</span></a></span> to see the transaction and upload more beats!</span></p></div></div></div></div></div><div style=\"mso-line-height-rule: exactly;line-height: 20px;font-size: 20px;\">&nbsp;</div><div style=\"background-color: #e30d40;\"> <div class=\"layout one-col\" style=\"Margin: 0 auto;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;\"> <div class=\"layout__inner\" style=\"border-collapse: collapse;display: table;width: 100%;\"> <div class=\"column\" style=\"max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);text-align: left;color: #8e959c;font-size: 14px;line-height: 21px;font-family: sans-serif;\"> <div style=\"Margin-left: 20px;Margin-right: 20px;\"> <div style=\"mso-line-height-rule: exactly;line-height: 10px;font-size: 1px;\">&nbsp;</div></div></div></div></div></div><div style=\"background-color: #75c5f0;\"> <div class=\"layout one-col\" style=\"Margin: 0 auto;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;\"> <div class=\"layout__inner\" style=\"border-collapse: collapse;display: table;width: 100%;\"> <div class=\"column\" style=\"max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);text-align: left;color: #8e959c;font-size: 14px;line-height: 21px;font-family: sans-serif;\"> <div style=\"Margin-left: 20px;Margin-right: 20px;\"> <div style=\"mso-line-height-rule: exactly;line-height: 15px;font-size: 1px;\">&nbsp;</div></div><div style=\"Margin-left: 20px;Margin-right: 20px;\"> <div class=\"btn btn--flat btn--medium\" style=\"Margin-bottom: 20px;text-align: center;\"> <a style=\"border-radius: 4px;display: inline-block;font-size: 12px;font-weight: bold;line-height: 22px;padding: 10px 20px;text-align: center;text-decoration: none !important;transition: opacity 0.1s ease-in;color: #fff !important;background-color: #e30d40;font-family: sans-serif;\" href=\"https://amplifihub.com/login\">Login Now</a> </div></div><div style=\"Margin-left: 20px;Margin-right: 20px;\"> <div style=\"mso-line-height-rule: exactly;line-height: 1px;font-size: 1px;\">&nbsp;</div></div></div></div></div></div><div style=\"mso-line-height-rule: exactly;line-height: 20px;font-size: 20px;\">&nbsp;</div><div style=\"mso-line-height-rule: exactly;\" role=\"contentinfo\"> <div class=\"layout email-footer\" style=\"Margin: 0 auto;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;\"> <div class=\"layout__inner\" style=\"border-collapse: collapse;display: table;width: 100%;\"> <div class=\"column wide\" style=\"text-align: left;font-size: 12px;line-height: 19px;color: #adb3b9;font-family: sans-serif;Float: left;max-width: 400px;min-width: 320px; width: 320px;width: calc(8000% - 47600px);\"> <div style=\"Margin-left: 20px;Margin-right: 20px;Margin-top: 10px;Margin-bottom: 10px;\"> <table class=\"email-footer__links emb-web-links\" style=\"border-collapse: collapse;table-layout: fixed;\" role=\"presentation\"><tbody><tr role=\"navigation\"> <td class=\"emb-web-links\" style=\"padding: 0;width: 26px;\"><a style=\"text-decoration: underline;transition: opacity 0.1s ease-in;color: #adb3b9;\" href=\"facebook.com/amplifihub\"><img style=\"border: 0;\" src=\"https://i2.createsend1.com/static/eb/master/13-the-blueprint-3/images/facebook.png\" width=\"26\" height=\"26\" alt=\"Facebook\"></a></td><td class=\"emb-web-links\" style=\"padding: 0 0 0 3px;width: 26px;\"><a style=\"text-decoration: underline;transition: opacity 0.1s ease-in;color: #adb3b9;\" href=\"twitter.com/amplifihub\"><img style=\"border: 0;\" src=\"https://i3.createsend1.com/static/eb/master/13-the-blueprint-3/images/twitter.png\" width=\"26\" height=\"26\" alt=\"Twitter\"></a></td><td class=\"emb-web-links\" style=\"padding: 0 0 0 3px;width: 26px;\"><a style=\"text-decoration: underline;transition: opacity 0.1s ease-in;color: #adb3b9;\" href=\"instagram.com/amplifihub\"><img style=\"border: 0;\" src=\"https://i5.createsend1.com/static/eb/master/13-the-blueprint-3/images/instagram.png\" width=\"26\" height=\"26\" alt=\"Instagram\"></a></td><td class=\"emb-web-links\" style=\"padding: 0 0 0 3px;width: 26px;\"><a style=\"text-decoration: underline;transition: opacity 0.1s ease-in;color: #adb3b9;\" href=\"amplifihub.com\"><img style=\"border: 0;\" src=\"https://i7.createsend1.com/static/eb/master/13-the-blueprint-3/images/website.png\" width=\"26\" height=\"26\" alt=\"Website\"></a></td></tr></tbody></table> <div style=\"font-size: 12px;line-height: 19px;Margin-top: 20px;\"> <div>AmplifiHub<br>1, Olufowobi Str, Lawanson,<br>Surulere, Lagos,<br>Nigeria</div></div><div style=\"font-size: 12px;line-height: 19px;Margin-top: 18px;\"> <div>You are receiving this email because of your relationship with AmplifiHub.</div></div></div></div><div class=\"column narrow\" style=\"text-align: left;font-size: 12px;line-height: 19px;color: #adb3b9;font-family: sans-serif;Float: left;max-width: 320px;min-width: 200px; width: 320px;width: calc(72200px - 12000%);\"> <div style=\"Margin-left: 20px;Margin-right: 20px;Margin-top: 10px;Margin-bottom: 10px;\"> <div class=\"footer__share-button\"> <div style=\"Margin-bottom: 6px;mso-line-height-rule: exactly;\"> <fblike style=\"border-radius: 2px;color: #ffffff;display: inline-block;font-size: 11px;font-weight: bold;line-height: 19px;text-align: left;text-decoration: none;border-style: solid;border-width: 4px 7px 3px 4px;mso-border-width-alt: 4px 8px 8px 8px;background-color: gray;border-color: gray;mso-border-color-alt: gray;\" likeurl=\"facebook.com/amplifihub\"> &nbsp;<img style=\"border: 0;display: inline-block;margin-right: 2px;vertical-align: -3px;\" src=\"https://i9.createsend1.com/static/eb/master/13-the-blueprint-3/images/fblike-icon@2x.png\" width=\"16\" height=\"16\" border=\"0\" alt=\"\"> <span style=\"font-size: 11px;mso-text-raise: 3px;\">Like&nbsp;</span> </fblike> </div><div style=\"Margin-bottom: 6px;mso-line-height-rule: exactly;\"> <tweet style=\"border-radius: 2px;color: #ffffff;display: inline-block;font-size: 11px;font-weight: bold;line-height: 19px;text-align: left;text-decoration: none;border-style: solid;border-width: 4px 7px 3px 4px;mso-border-width-alt: 4px 8px 8px 8px;background-color: gray;border-color: gray;mso-border-color-alt: gray;\"> &nbsp;<img style=\"border: 0;display: inline-block;margin-right: 2px;vertical-align: -3px;\" src=\"https://i10.createsend1.com/static/eb/master/13-the-blueprint-3/images/tweet-icon@2x.png\" width=\"16\" height=\"16\" border=\"0\" alt=\"\"> <span style=\"font-size: 11px;mso-text-raise: 3px;\">Tweet&nbsp;</span> </tweet> </div></div></div></div></div></div><div class=\"layout one-col email-footer\" style=\"Margin: 0 auto;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;\"> <div class=\"layout__inner\" style=\"border-collapse: collapse;display: table;width: 100%;\"> <div class=\"column\" style=\"text-align: left;font-size: 12px;line-height: 19px;color: #adb3b9;font-family: sans-serif;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);\"> <div style=\"Margin-left: 20px;Margin-right: 20px;Margin-top: 10px;Margin-bottom: 10px;\"> <div style=\"font-size: 12px;line-height: 19px;\"> <span><preferences style=\"text-decoration: underline;\" lang=\"en\">Preferences</preferences>&nbsp;&nbsp;|&nbsp;&nbsp;</span><unsubscribe style=\"text-decoration: underline;\">Unsubscribe</unsubscribe> </div></div></div></div></div></div><div style=\"mso-line-height-rule: exactly;line-height: 40px;font-size: 40px;\">&nbsp;</div></div></td></tr></tbody></table>', 'a:2:{s:15:\"{PRODUCER_NAME}\";s:18:\"Name of a Producer\";s:12:\"{BUYER_NAME}\";s:15:\"Name of a buyer\";}', '2019-02-17 18:50:58', '2019-02-22 10:13:04');

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` int(10) NOT NULL,
  `genre` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `genre`, `created`, `modified`) VALUES
(6, 'Afrobeat', '2018-05-12 07:20:35', '2018-05-12 07:20:35'),
(7, 'Highlife', '2018-05-12 07:20:59', '2018-05-12 07:20:59'),
(8, 'Alkayida', '2018-05-12 07:21:15', '2018-05-12 07:21:15'),
(9, 'House Music', '2018-05-12 07:21:42', '2018-05-12 07:21:42'),
(10, 'Afrosoul', '2018-05-12 07:21:56', '2018-05-12 07:21:56'),
(11, 'Afropop', '2018-05-12 07:22:07', '2018-05-12 07:22:07'),
(12, 'Afrotrap', '2018-05-12 07:22:26', '2018-05-12 07:22:26'),
(13, 'Afrohiphop', '2018-05-12 07:22:41', '2018-05-12 07:22:41'),
(14, 'Galala', '2018-05-12 07:23:10', '2018-05-12 07:23:10'),
(15, 'Dancehall', '2018-05-12 07:23:22', '2018-05-12 07:23:22'),
(16, 'Reggae', '2018-05-12 07:23:33', '2018-05-12 07:23:33'),
(17, 'Juju', '2018-05-12 07:23:53', '2018-05-12 07:23:53'),
(18, 'Fuji', '2018-05-12 07:24:32', '2018-05-12 07:24:32'),
(19, 'Apala', '2018-05-12 07:25:21', '2018-05-12 07:25:21'),
(20, 'Gospel', '2018-05-12 07:25:32', '2018-05-12 07:25:32'),
(21, 'Azonto', '2018-05-12 07:26:07', '2018-05-12 07:26:07'),
(22, 'Kpanlogo', '2018-05-12 07:26:25', '2018-05-12 07:26:25'),
(23, 'Hiplife', '2018-05-12 07:26:34', '2018-05-12 07:26:34'),
(24, 'Burger-highlife', '2018-05-12 07:26:57', '2018-05-12 07:26:57'),
(25, 'Makossa', '2018-05-12 07:29:24', '2018-05-12 07:29:24'),
(26, 'Grime', '2018-06-11 20:45:27', '2018-06-11 20:45:27'),
(27, 'Hip Hop', '2018-06-11 20:47:21', '2018-06-11 20:47:21'),
(28, 'R&B', '2018-06-11 20:49:04', '2018-06-11 20:49:04'),
(29, 'Rap', '2018-06-11 20:49:11', '2018-06-11 20:49:11'),
(30, 'Trap', '2018-06-11 20:49:45', '2018-06-11 20:49:45'),
(31, 'Pop', '2018-06-11 20:50:19', '2018-06-11 20:50:19'),
(32, 'New School', '2018-06-11 20:50:29', '2018-06-11 20:50:29');

-- --------------------------------------------------------

--
-- Table structure for table `home_youtube_video`
--

CREATE TABLE `home_youtube_video` (
  `id` int(11) NOT NULL,
  `videolink` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_youtube_video`
--

INSERT INTO `home_youtube_video` (`id`, `videolink`) VALUES
(1, 'https://www.youtube.com/embed/8dLkrDUGNbU');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `liker_id` int(11) NOT NULL,
  `type` varchar(4) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `liker_id`, `type`, `created`, `modified`) VALUES
(1, 1, 2, 'mm', '2018-05-17 13:12:07', '2018-05-17 13:12:07'),
(2, 9, 2, 'mm', '2018-05-17 13:12:36', '2018-05-17 13:12:36'),
(3, 9, 2, 'mm', '2018-05-17 13:12:56', '2018-05-17 13:12:56'),
(4, 1, 2, 'ac', '2019-01-17 19:48:32', '2019-01-17 19:48:32');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `orderid` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `messager_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `service` varchar(20) NOT NULL,
  `status` enum('read','unread') NOT NULL DEFAULT 'unread',
  `created` datetime NOT NULL,
  `modified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `orderid`, `user_id`, `messager_id`, `message`, `service`, `status`, `created`, `modified`) VALUES
(1, 'art1538018929', 2, 9, 'Artist Service Order placement', 'Artistesrequesters', 'read', '2018-09-27 03:28:49', '2018-09-27'),
(2, 'art1538018929', 9, 2, 'Cool', 'Artistesrequesters', 'read', '2018-09-27 03:29:37', '2018-09-27'),
(3, 'art1538018929', 9, 9, 'cool', 'Artistesrequesters', 'read', '2018-09-27 03:30:18', '2018-09-27'),
(4, 'art1538018929', 9, 2, 'Check ', 'Artistesrequesters', 'read', '2018-09-27 09:22:26', '2018-09-27'),
(5, 'art1538018929', 9, 2, 'cool', 'Artistesrequesters', 'read', '2018-09-27 10:21:07', '2018-09-27'),
(6, 'art1538018929', 9, 2, 'cool', 'Artistesrequesters', 'read', '2018-09-27 10:28:34', '2018-09-27'),
(7, 'art1538018929', 9, 2, 'cool', 'Artistesrequesters', 'read', '2018-09-27 10:41:04', '2018-09-27'),
(8, 'art1538018929', 9, 2, 'cool', 'Artistesrequesters', 'read', '2018-09-27 10:54:16', '2018-09-27'),
(9, 'art1538018929', 9, 2, 'cool', 'Artistesrequesters', 'read', '2018-09-27 10:56:35', '2018-09-27'),
(10, 'art1538018929', 9, 2, 'cool', 'Artistesrequesters', 'read', '2018-09-27 10:58:49', '2018-09-27'),
(11, 'art1538018929', 9, 2, 'cool', 'Artistesrequesters', 'read', '2018-09-27 11:00:22', '2018-09-27'),
(13, 'art1538018929', 2, 9, 'cool', 'Artistesrequesters', 'read', '2018-09-27 12:23:05', '2018-09-27'),
(14, 'art1538018929', 9, 2, 'okay', 'Artistesrequesters', 'read', '2018-09-27 12:26:31', '2018-09-27'),
(15, 'art1538018929', 2, 9, 'cool', 'Artistesrequesters', 'read', '2018-09-27 12:27:35', '2018-09-27'),
(16, 'swr1538117909', 2, 9, 'Song Writer Service Order placement', 'Swriterequests', 'read', '2018-09-28 06:58:28', '2018-09-28'),
(17, 'swr1538117909', 9, 2, 'cool', 'Swriterequests', 'read', '2018-09-28 07:01:10', '2018-09-28'),
(18, 'swr1538117909', 9, 2, 'cool 2', 'Swriterequests', 'read', '2018-09-28 08:04:22', '2018-09-28'),
(19, 'swr1540075318', 2, 9, 'Song Writer Service Order placement', 'Swriterequests', 'read', '2018-10-20 23:41:58', '2018-10-20'),
(20, 'swr1540075318', 9, 2, 'OKAY RECEIVED', 'Swriterequests', 'read', '2018-10-20 23:42:37', '2018-10-20'),
(21, 'swr1540075318', 9, 2, 'OKAY RECEIVED', 'Swriterequests', 'read', '2018-10-20 23:42:44', '2018-10-20'),
(22, 'swr1540075318', 9, 9, 'aii.. waiting', 'Swriterequests', 'read', '2018-10-20 23:43:34', '2018-10-20'),
(23, 'swr1538117909', 9, 2, 'Okay ', 'Swriterequests', 'read', '2018-10-21 01:37:14', '2018-10-21'),
(24, 'swr1540075318', 9, 2, 'Aii nau ', 'Swriterequests', 'read', '2018-10-21 01:38:10', '2018-10-21'),
(25, 'swr1540648006', 2, 295, 'Song Writer Service Order placement', 'Swriterequests', 'read', '2018-10-27 14:46:46', '2018-10-27'),
(26, 'swr1540648006', 295, 2, 'Okay, how soon do you want it done?', 'Swriterequests', 'read', '2018-10-31 23:56:16', '2018-10-31'),
(27, 'swr1540648006', 295, 2, 'Okay, how soon do you want it done?', 'Swriterequests', 'read', '2018-10-31 23:56:16', '2018-10-31'),
(28, 'art1533856771', 9, 2, 'Okay', 'Artistesrequesters', 'read', '2018-11-18 23:57:58', '2018-11-18'),
(29, 'mmr1526562391', 9, 2, 'Yes ', 'Mmrequesters', 'read', '2019-01-08 18:47:48', '2019-01-08'),
(30, 'mmr1526562391', 9, 2, 'Chat', 'Mmrequesters', 'read', '2019-01-08 18:47:58', '2019-01-08'),
(31, 'mmr1526562391', 9, 2, 'chat', 'Mmrequesters', 'read', '2019-01-08 18:56:57', '2019-01-08'),
(32, 'mmr1526562391', 9, 2, 'chat', 'Mmrequesters', 'read', '2019-01-08 18:56:59', '2019-01-08'),
(33, 'mmr1526562391', 9, 2, 'chat', 'Mmrequesters', 'read', '2019-01-08 18:57:17', '2019-01-08'),
(34, 'mmr1526562391', 9, 2, 'NO', 'Mmrequesters', 'read', '2019-01-08 18:58:09', '2019-01-08'),
(35, 'swr1547251094', 2, 9, 'Song Writer Service Order placement', 'Swriterequests', 'read', '2019-01-12 00:58:14', '2019-01-12'),
(36, 'swr1547251094', 9, 2, 'okay', 'Swriterequests', 'read', '2019-01-14 01:05:55', '2019-01-14'),
(37, 'mmr1536048849', 9, 2, 'JHJGJHKI', 'Mmrequesters', 'read', '2019-01-17 15:52:12', '2019-01-17'),
(38, 'dtr1547982057', 2, 2, 'Director Service Order placement', 'Directorequests', 'read', '2019-01-20 12:00:57', '2019-01-20'),
(39, 'dtr1547984493', 2, 9, 'Director Service Order placement', 'Directorequests', 'read', '2019-01-20 12:41:32', '2019-01-20'),
(40, 'dtr1547984493', 2, 2, 'Nice', 'Directorequests', 'read', '2019-01-20 12:44:19', '2019-01-20'),
(41, 'dtr1547984493', 2, 2, 'Okay, ', 'Directorequests', 'read', '2019-01-20 18:00:18', '2019-01-20'),
(42, 'dtr1547984493', 2, 2, 'Yes', 'Directorequests', 'read', '2019-08-14 01:32:48', '2019-08-14'),
(43, 'dtr1547984493', 2, 2, 'Hello', 'Directorequests', 'read', '2019-08-20 17:35:13', '2019-08-20'),
(44, 'dtr1547984493', 2, 2, 'Hello, How are you?', 'Directorequests', 'read', '2019-08-20 17:45:03', '2019-08-20'),
(45, 'dtr1547984493', 2, 2, 'Hello How are you?', 'Directorequests', 'read', '2019-08-21 08:24:11', '2019-08-21'),
(46, 'dtr1547984493', 2, 2, 'Hello How are you?', 'Directorequests', 'read', '2019-08-21 08:26:09', '2019-08-21'),
(47, 'dtr1547984493', 2, 2, 'Hellow Wordl', 'Directorequests', 'read', '2019-08-21 08:26:42', '2019-08-21'),
(48, 'dtr1547984493', 2, 2, 'Hello World', 'Directorequests', 'read', '2019-08-21 08:29:35', '2019-08-21'),
(49, 'dtr1547984493', 2, 2, '\'s working?', 'Directorequests', 'read', '2019-08-21 08:30:04', '2019-08-21'),
(50, 'dtr1547984493', 2, 2, 'Now working fine?', 'Directorequests', 'read', '2019-08-21 08:30:11', '2019-08-21'),
(51, 'dtr1547984493', 2, 2, 'Hey', 'Directorequests', 'read', '2019-08-21 08:43:01', '2019-08-21'),
(52, 'dtr1547984493', 2, 2, 'Hey!', 'Directorequests', 'read', '2019-08-22 22:15:58', '2019-08-22'),
(53, 'dtr1547984493', 2, 2, 'it\'s working or not?', 'Directorequests', 'read', '2019-08-22 22:16:42', '2019-08-22'),
(54, 'dtr1547984493', 2, 2, '???', 'Directorequests', 'read', '2019-08-22 22:21:51', '2019-08-22'),
(55, 'dtr1547984493', 2, 2, '??', 'Directorequests', 'read', '2019-08-22 22:22:20', '2019-08-22'),
(56, 'dtr1547984493', 2, 2, 'asdf', 'Directorequests', 'read', '2019-08-22 22:22:50', '2019-08-22'),
(57, 'dtr1547984493', 2, 2, 'Hello', 'Directorequests', 'read', '2019-08-24 18:58:04', '2019-08-24'),
(58, 'dtr1547984493', 2, 2, '??', 'Directorequests', 'read', '2019-08-24 18:59:02', '2019-08-24'),
(59, 'dtr1547984493', 2, 2, '?', 'Directorequests', 'read', '2019-08-24 19:01:47', '2019-08-24'),
(60, 'dtr1547984493', 2, 2, '?', 'Directorequests', 'read', '2019-08-24 19:02:01', '2019-08-24'),
(61, 'dtr1547984493', 2, 2, '??', 'Directorequests', 'read', '2019-08-24 19:11:39', '2019-08-24'),
(62, 'dtr1547984493', 2, 2, '?', 'Directorequests', 'read', '2019-08-24 19:16:00', '2019-08-24'),
(63, 'dtr1547984493', 2, 2, '?', 'Directorequests', 'read', '2019-08-24 19:19:31', '2019-08-24'),
(64, 'dtr1547984493', 2, 2, '?', 'Directorequests', 'read', '2019-08-24 19:21:11', '2019-08-24'),
(65, 'dtr1547984493', 2, 2, '???', 'Directorequests', 'read', '2019-08-24 19:21:29', '2019-08-24'),
(66, 'dtr1547984493', 2, 2, '??', 'Directorequests', 'read', '2019-08-24 19:23:51', '2019-08-24'),
(67, 'dtr1547984493', 2, 2, 'adf', 'Directorequests', 'read', '2019-08-24 19:24:05', '2019-08-24'),
(68, 'dtr1547984493', 2, 2, '??', 'Directorequests', 'read', '2019-08-24 19:26:04', '2019-08-24'),
(69, 'dtr1547984493', 2, 2, '???', 'Directorequests', 'read', '2019-08-24 19:31:29', '2019-08-24'),
(70, 'dtr1547984493', 2, 2, 'working now or not?', 'Directorequests', 'read', '2019-08-24 19:32:15', '2019-08-24'),
(71, 'dtr1547984493', 2, 2, 'Hey', 'Directorequests', 'read', '2019-08-31 23:48:09', '2019-08-31'),
(72, 'dtr1547984493', 2, 2, 'jimasun', 'Directorequests', 'read', '2019-09-02 18:39:37', '2019-09-02'),
(73, 'mmr1534033244', 9, 2, 'okay', 'Mmrequesters', 'read', '2019-09-09 21:55:25', '2019-09-09'),
(74, 'mmr1533857136', 9, 9, 'hi', 'Mmrequesters', 'read', '2019-09-18 16:11:04', '2019-09-18'),
(75, 'mmr1533857136', 9, 9, 'hkhkf\nkjhkf\njkljf\nkljf;l\njlfkr\nfljf\n;lfkr\nl;kfr\n;k;lfr\n;lk;lfr\n\n', 'Mmrequesters', 'read', '2019-09-18 16:14:21', '2019-09-18'),
(76, 'mmr1533857136', 9, 9, 'hkjh', 'Mmrequesters', 'read', '2019-09-18 16:14:28', '2019-09-18'),
(77, 'mmr1533857136', 9, 9, 'hjkhd', 'Mmrequesters', 'read', '2019-09-18 16:14:35', '2019-09-18'),
(78, 'mmr1533857136', 9, 9, 'hi', 'Mmrequesters', 'read', '2019-09-18 18:10:32', '2019-09-18'),
(79, 'mmr1533857136', 9, 9, 'ok', 'Mmrequesters', 'read', '2019-09-18 18:10:42', '2019-09-18'),
(80, 'mmr1568866487', 1, 9, 'hi', 'Mmrequesters', 'unread', '2019-09-19 05:23:55', '2019-09-19');

-- --------------------------------------------------------

--
-- Table structure for table `mixmasterings`
--

CREATE TABLE `mixmasterings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `featured` int(11) DEFAULT '0',
  `genre` int(11) NOT NULL,
  `original` varchar(255) NOT NULL,
  `original_dir` varchar(255) NOT NULL,
  `original_size` varchar(255) NOT NULL,
  `original_type` varchar(255) NOT NULL,
  `after` varchar(255) DEFAULT NULL,
  `after_dir` varchar(255) NOT NULL,
  `after_size` varchar(255) NOT NULL,
  `after_type` varchar(255) NOT NULL,
  `work_status` set('in progress','finished') DEFAULT NULL,
  `payment_status` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `promoted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mixmasterings`
--

INSERT INTO `mixmasterings` (`id`, `user_id`, `featured`, `genre`, `original`, `original_dir`, `original_size`, `original_type`, `after`, `after_dir`, `after_size`, `after_type`, `work_status`, `payment_status`, `created`, `modified`, `promoted`) VALUES
(1, 2, 1, 6, 'bcebf4f1d1f00729522ba7eb0ed3ac26_1548500739.mp3', 'webroot/files/Mixmasterings/original/', '7474626', 'audio/mp3', '8102542ed8edc5361ed9ab7ae968257e_1548500941.mp3', 'webroot/files/Mixmasterings/after/', '7474626', 'audio/mp3', 'in progress', 'unpaid', '2018-05-17 12:14:10', '2019-01-17 19:43:16', 0),
(2, 36, 1, 6, '74be57bc55d8aaa96e01cb341894de53_1548500796.mp3', 'webroot/files/Mixmasterings/original/', '4073973', 'audio/mp3', 'bfc7154d7e105f36a0aeaff318a41088_1548500970.mp3', 'webroot/files/Mixmasterings/after/', '4092421', 'audio/mp3', 'in progress', 'unpaid', '2018-05-24 23:58:01', '2019-01-18 19:59:39', 0),
(3, 117, 0, 29, '4e9ff564bacbc08cffc0001cef5d87ee_1548500827.mp3', 'webroot/files/Mixmasterings/original/', '4320047', 'audio/mpeg', 'r.1536623934.mp3', 'webroot/files/Mixmasterings/after/', '4320047', 'audio/mpeg', 'in progress', 'unpaid', '2018-09-10 23:58:47', '2018-09-10 23:58:47', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mmrequesters`
--

CREATE TABLE `mmrequesters` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `requester_id` int(11) NOT NULL,
  `orderid` varchar(100) NOT NULL,
  `artist_band_name` varchar(255) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `song_description` text NOT NULL,
  `service_request` varchar(255) NOT NULL,
  `download_link` text NOT NULL,
  `deadline` date NOT NULL,
  `status` enum('pending','delivered') NOT NULL DEFAULT 'pending',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mmrequesters`
--

INSERT INTO `mmrequesters` (`id`, `user_id`, `requester_id`, `orderid`, `artist_band_name`, `project_name`, `song_description`, `service_request`, `download_link`, `deadline`, `status`, `created`, `modified`) VALUES
(1, 2, 9, 'mmr1526562391', 'Mike', 'A new one', 'Love dies\r\nNever say never\r\nTrue love', 'mixing and mastering', 'Test.com/xxx\r\nTest3.com/vvc\r\nTest2.com/bbc', '2018-05-31', 'pending', '2018-05-17 13:06:36', '2018-05-17 13:06:36'),
(2, 2, 9, 'mmr1533857136', 'Mike Ohke', 'Love Birds', 'knjnklnk;ln;n', 'album mixing', 'mjbjnlknklnlk', '2018-08-17', 'pending', '2018-08-09 23:25:36', '2018-08-09 23:25:36'),
(3, 2, 9, 'mmr1534033244', 'Us guys', 'We will achieve ', 'Dgdgxhzg\r\nGdtsgshdy\r\nHdgdhdhfg', 'mixing and mastering', 'Dfdgdf\r\nFgdgdgdf\r\nDgdgdgdg', '2018-08-25', 'pending', '2018-08-12 00:20:43', '2018-08-12 00:20:43'),
(4, 2, 9, 'mmr1536048849', 'Us guys new', 'We will achieve test', 'Hwgshshshs\r\nHshgshsgsg\r\nHahhahahssh\r\nHshshhhd', 'album mixing and mastering', 'Hsgshshshsh\r\nHahahahhahaahsh\r\nJahhshshshshshhgd', '2018-09-29', 'pending', '2018-09-04 08:14:09', '2018-09-04 08:14:09'),
(5, 2, 9, 'mmr1536226108', 'Kdfarwysj', 'Dhsjchsjbj', 'Dgshshdga\r\nGgsgghieadhiwyy', 'album mixing and mastering', 'Fahd hdgadg\r\nGfffsgfjh\r\nHdgdhdhfg sd', '2018-09-22', 'pending', '2018-09-06 09:28:28', '2018-09-06 09:28:28'),
(8, 2, 9, 'mmr1568880147', 'Me seeks', 'Rick and Morty', 'Fusyshv. Gadget dd', 'mixing and mastering', 'Turgdhff', '2019-09-29', 'pending', '2019-09-19 09:02:27', '2019-09-19 09:02:27'),
(9, 2, 1, 'mmr1568887487', 'sonar', 'sonar', 'dr4', 'mixing', '3fr', '2019-09-19', 'pending', '2019-09-19 11:04:47', '2019-09-19 11:04:47'),
(10, 2, 1, 'mmr1568887945', 'sonar', 'sonar', '123', 'mixing', '123', '2019-09-19', 'pending', '2019-09-19 11:12:24', '2019-09-19 11:12:24'),
(11, 2, 1, 'mmr1568888117', 'sonar', 'sonar', 'd3e', 'mixing', 'd3e', '2019-09-19', 'pending', '2019-09-19 11:15:17', '2019-09-19 11:15:17'),
(12, 2, 1, 'mmr1568888271', 'sonar', 'sonar', 'wq', 'mixing', 'qw', '2019-09-19', 'pending', '2019-09-19 11:17:50', '2019-09-19 11:17:50'),
(13, 2, 1, 'mmr1568888474', 'sonar', 'sonar', 'r5r', 'mixing', '5r', '2019-09-19', 'pending', '2019-09-19 11:21:13', '2019-09-19 11:21:13'),
(14, 2, 1, 'mmr1568888775', 'sonar', 'sonar', 'ftr', 'mixing', 'fr4f', '2019-09-19', 'pending', '2019-09-19 11:26:14', '2019-09-19 11:26:14'),
(15, 2, 1, 'mmr1568899168', 'sonar', 'sonar', '12', 'mixing', '12', '2019-09-19', 'pending', '2019-09-19 14:19:28', '2019-09-19 14:19:28'),
(16, 2, 9, 'mmr1568899279', 'sonar', 'sonar', '12', 'mixing', '12', '2019-09-19', 'pending', '2019-09-19 14:21:18', '2019-09-19 14:21:18'),
(17, 2, 9, 'mmr1568899473', 'sonar', 'sonar', '12', 'mixing', '12', '2019-09-19', 'pending', '2019-09-19 14:24:33', '2019-09-19 14:24:33'),
(18, 2, 9, 'mmr1568899499', 'sonar', 'sonar', '12', 'mixing', '12', '2019-09-19', 'pending', '2019-09-19 14:24:59', '2019-09-19 14:24:59'),
(19, 2, 9, 'mmr1568899543', 'sonar', 'sonar', '12', 'mixing', '12', '2019-09-19', 'pending', '2019-09-19 14:25:42', '2019-09-19 14:25:42'),
(20, 2, 9, 'mmr1568899653', 'sonar', 'sonar', '12', 'mixing', '12', '2019-09-19', 'pending', '2019-09-19 14:27:32', '2019-09-19 14:27:32'),
(21, 2, 9, 'mmr1568899683', 'sonar', 'sonar', '12', 'mixing', '12', '2019-09-19', 'pending', '2019-09-19 14:28:02', '2019-09-19 14:28:02');

-- --------------------------------------------------------

--
-- Table structure for table `muffin_tokenize_phinxlog`
--

CREATE TABLE `muffin_tokenize_phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `breakpoint` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `page_banner`
--

CREATE TABLE `page_banner` (
  `id` int(11) NOT NULL,
  `header_text` text,
  `status` int(11) NOT NULL DEFAULT '1',
  `page` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_banner`
--

INSERT INTO `page_banner` (`id`, `header_text`, `status`, `page`, `file_name`, `created`, `modified`) VALUES
(1, 'YOUR ONE STOP HUB FOR AFRICAN BEATS AND AFRICAN MUSIC MAKERS', 0, 6, '', '2019-01-13 03:51:06', '2019-01-17 18:04:34'),
(4, 'YOUR ONE STOP HUB FOR AFRICAN BEATS AND AFRICAN MUSIC MAKERS', 1, 3, '15479697071547969708.jpg', '2019-01-13 07:09:44', '2019-01-20 08:35:07'),
(10, 'YOUR ONE STOP HUB FOR AFRICAN BEATS AND AFRICAN MUSIC MAKERS', 1, 4, '15479696301547969631.jpg', '2019-01-13 07:22:34', '2019-01-20 08:33:50'),
(11, 'YOUR ONE STOP HUB FOR AFRICAN BEATS AND AFRICAN MUSIC MAKERS', 0, 6, '15473757271547375728.jpg', '2019-01-13 07:26:35', '2019-01-13 11:35:27'),
(12, 'YOUR ONE STOP HUB FOR AFRICAN BEATS AND AFRICAN MUSIC MAKERS', 0, 2, '15476586521547658653.jpg', '2019-01-16 18:10:52', '2019-01-16 18:10:52'),
(13, 'YOUR ONE STOP HUB FOR AFRICAN BEATS AND AFRICAN MUSIC MAKERS', 1, 2, '9a74c40511e194b6571ef1228357e112_1565927715.gif', '2019-01-16 18:10:53', '2019-08-16 04:55:15'),
(16, '', 0, 5, '', NULL, NULL),
(17, '', 1, 6, '15479695511547969551.png', NULL, '2019-01-20 08:32:31'),
(18, '', 1, 5, '15479695291547969529.png', NULL, '2019-01-20 08:32:09'),
(19, 'The No. 1 Marketplace For Africans To Buy and Sell African Beats!', 1, 1, '21c1a40aa973f8554ecab9cfec2ce086_1565915995.gif', '2019-08-16 01:22:12', '2019-08-16 01:39:55');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `txn_id` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `currency_code` varchar(255) DEFAULT NULL,
  `payment_status` varchar(255) DEFAULT NULL,
  `other` longtext,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `licence_type` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `user_id`, `txn_id`, `amount`, `currency_code`, `payment_status`, `other`, `created`, `modified`, `licence_type`) VALUES
(1, '2', '1WF71224XJ9258155', 'USD', '19.07', 'Completed', '{\"mc_gross\":\"19.07\",\"protection_eligibility\":\"Eligible\",\"address_status\":\"confirmed\",\"payer_id\":\"7AX7ABGBZAYLN\",\"address_street\":\"1 Main St\",\"payment_date\":\"12:10:46 Feb 18, 2019 PST\",\"payment_status\":\"Completed\",\"charset\":\"windows-1252\",\"address_zip\":\"95131\",\"first_name\":\"Vishal\",\"mc_fee\":\"0.85\",\"address_country_code\":\"US\",\"address_name\":\"Vishal Patel\",\"notify_version\":\"3.9\",\"custom\":\"2\",\"payer_status\":\"verified\",\"business\":\"hallu2995@gmail.com\",\"address_country\":\"United States\",\"address_city\":\"San Jose\",\"quantity\":\"1\",\"verify_sign\":\"AoHFC-9zjdPh36HLvoHhi5X3ybNkAZocPf7E39NIG.Dk1gRH3CWV.cxh\",\"payer_email\":\"vishal29051995@gmail.com\",\"txn_id\":\"1WF71224XJ9258155\",\"payment_type\":\"instant\",\"last_name\":\"Patel\",\"address_state\":\"CA\",\"receiver_email\":\"hallu2995@gmail.com\",\"payment_fee\":\"0.85\",\"shipping_discount\":\"0.00\",\"insurance_amount\":\"0.00\",\"receiver_id\":\"4RBHT2X4Q9QJA\",\"txn_type\":\"web_accept\",\"item_name\":\"Dancia\",\"discount\":\"0.00\",\"mc_currency\":\"USD\",\"item_number\":\"beatstore-885185652\",\"residence_country\":\"US\",\"test_ipn\":\"1\",\"shipping_method\":\"Default\",\"transaction_subject\":\"\",\"payment_gross\":\"19.07\",\"ipn_track_id\":\"c41bdb1278851\"}', '2019-02-18 21:10:56', '2019-02-18 21:10:56', ''),
(2, '2', '7EJ17321MA482133X', 'USD', '27.25', 'Completed', '{\"mc_gross\":\"27.25\",\"protection_eligibility\":\"Eligible\",\"address_status\":\"confirmed\",\"payer_id\":\"7AX7ABGBZAYLN\",\"address_street\":\"1 Main St\",\"payment_date\":\"12:13:19 Feb 18, 2019 PST\",\"payment_status\":\"Completed\",\"charset\":\"windows-1252\",\"address_zip\":\"95131\",\"first_name\":\"Vishal\",\"mc_fee\":\"1.09\",\"address_country_code\":\"US\",\"address_name\":\"Vishal Patel\",\"notify_version\":\"3.9\",\"custom\":\"2\",\"payer_status\":\"verified\",\"business\":\"hallu2995@gmail.com\",\"address_country\":\"United States\",\"address_city\":\"San Jose\",\"quantity\":\"1\",\"verify_sign\":\"ACgbUQ4KUcPxYpf1pbKiPAU-6IkvAupyfkLnDnr8cfDDaV4MmxHyZJm8\",\"payer_email\":\"vishal29051995@gmail.com\",\"txn_id\":\"7EJ17321MA482133X\",\"payment_type\":\"instant\",\"last_name\":\"Patel\",\"address_state\":\"CA\",\"receiver_email\":\"hallu2995@gmail.com\",\"payment_fee\":\"1.09\",\"shipping_discount\":\"0.00\",\"insurance_amount\":\"0.00\",\"receiver_id\":\"4RBHT2X4Q9QJA\",\"txn_type\":\"web_accept\",\"item_name\":\"Rainman\",\"discount\":\"0.00\",\"mc_currency\":\"USD\",\"item_number\":\"beatstore-227570398\",\"residence_country\":\"US\",\"test_ipn\":\"1\",\"shipping_method\":\"Default\",\"transaction_subject\":\"\",\"payment_gross\":\"27.25\",\"ipn_track_id\":\"1ffef8062ce77\"}', '2019-02-18 21:13:27', '2019-02-18 21:13:27', ''),
(3, '2', '6B808928A7734390L', 'USD', '27.25', 'Completed', '{\"mc_gross\":\"27.25\",\"protection_eligibility\":\"Eligible\",\"address_status\":\"confirmed\",\"payer_id\":\"7AX7ABGBZAYLN\",\"address_street\":\"1 Main St\",\"payment_date\":\"12:15:45 Feb 18, 2019 PST\",\"payment_status\":\"Completed\",\"charset\":\"windows-1252\",\"address_zip\":\"95131\",\"first_name\":\"Vishal\",\"mc_fee\":\"1.09\",\"address_country_code\":\"US\",\"address_name\":\"Vishal Patel\",\"notify_version\":\"3.9\",\"custom\":\"2\",\"payer_status\":\"verified\",\"business\":\"hallu2995@gmail.com\",\"address_country\":\"United States\",\"address_city\":\"San Jose\",\"quantity\":\"1\",\"verify_sign\":\"ALBh0zV2lr05r.ZAJtbzsPOgBma9AdiYISy9tq.FOHkYLTpMY3y3B-Do\",\"payer_email\":\"vishal29051995@gmail.com\",\"txn_id\":\"6B808928A7734390L\",\"payment_type\":\"instant\",\"last_name\":\"Patel\",\"address_state\":\"CA\",\"receiver_email\":\"hallu2995@gmail.com\",\"payment_fee\":\"1.09\",\"shipping_discount\":\"0.00\",\"insurance_amount\":\"0.00\",\"receiver_id\":\"4RBHT2X4Q9QJA\",\"txn_type\":\"web_accept\",\"item_name\":\"Rainman\",\"discount\":\"0.00\",\"mc_currency\":\"USD\",\"item_number\":\"beatstore-475118993\",\"residence_country\":\"US\",\"test_ipn\":\"1\",\"shipping_method\":\"Default\",\"transaction_subject\":\"\",\"payment_gross\":\"27.25\",\"ipn_track_id\":\"e66e43bb784a1\"}', '2019-02-18 21:15:57', '2019-02-18 21:59:39', ''),
(4, '2', '2LL44910R3071503D', 'USD', '24.52', 'Completed', '{\"mc_gross\":\"24.52\",\"protection_eligibility\":\"Eligible\",\"address_status\":\"confirmed\",\"payer_id\":\"7AX7ABGBZAYLN\",\"address_street\":\"1 Main St\",\"payment_date\":\"12:17:40 Feb 18, 2019 PST\",\"payment_status\":\"Completed\",\"charset\":\"windows-1252\",\"address_zip\":\"95131\",\"first_name\":\"Vishal\",\"mc_fee\":\"1.01\",\"address_country_code\":\"US\",\"address_name\":\"Vishal Patel\",\"notify_version\":\"3.9\",\"custom\":\"2\",\"payer_status\":\"verified\",\"business\":\"hallu2995@gmail.com\",\"address_country\":\"United States\",\"address_city\":\"San Jose\",\"quantity\":\"1\",\"verify_sign\":\"AXf506cFR2vK2kST6-qC.lde3w-fAuBNBW6h8tGP0ZQyWonusnT6FZJ7\",\"payer_email\":\"vishal29051995@gmail.com\",\"txn_id\":\"2LL44910R3071503D\",\"payment_type\":\"instant\",\"last_name\":\"Patel\",\"address_state\":\"CA\",\"receiver_email\":\"hallu2995@gmail.com\",\"payment_fee\":\"1.01\",\"shipping_discount\":\"0.00\",\"insurance_amount\":\"0.00\",\"receiver_id\":\"4RBHT2X4Q9QJA\",\"txn_type\":\"web_accept\",\"item_name\":\"Love Life\",\"discount\":\"0.00\",\"mc_currency\":\"USD\",\"item_number\":\"beatstore-695867265\",\"residence_country\":\"US\",\"test_ipn\":\"1\",\"shipping_method\":\"Default\",\"transaction_subject\":\"\",\"payment_gross\":\"24.52\",\"ipn_track_id\":\"7900af185cf7e\"}', '2019-02-18 21:17:49', '2019-02-18 22:02:10', ''),
(5, '2', '4AJ26112DV631535A', 'USD', '43.60', 'Completed', '{\"mc_gross\":\"43.60\",\"protection_eligibility\":\"Eligible\",\"address_status\":\"confirmed\",\"payer_id\":\"7AX7ABGBZAYLN\",\"address_street\":\"1 Main St\",\"payment_date\":\"12:20:30 Feb 18, 2019 PST\",\"payment_status\":\"Completed\",\"charset\":\"windows-1252\",\"address_zip\":\"95131\",\"first_name\":\"Vishal\",\"mc_fee\":\"1.56\",\"address_country_code\":\"US\",\"address_name\":\"Vishal Patel\",\"notify_version\":\"3.9\",\"custom\":\"2\",\"payer_status\":\"verified\",\"business\":\"hallu2995@gmail.com\",\"address_country\":\"United States\",\"address_city\":\"San Jose\",\"quantity\":\"1\",\"verify_sign\":\"A7tv2TrduDX5re01oD6fZ11bohnFAb8Wj4.LJb4Tse9NhVg.30B89o2U\",\"payer_email\":\"vishal29051995@gmail.com\",\"txn_id\":\"4AJ26112DV631535A\",\"payment_type\":\"instant\",\"last_name\":\"Patel\",\"address_state\":\"CA\",\"receiver_email\":\"hallu2995@gmail.com\",\"payment_fee\":\"1.56\",\"shipping_discount\":\"0.00\",\"insurance_amount\":\"0.00\",\"receiver_id\":\"4RBHT2X4Q9QJA\",\"txn_type\":\"web_accept\",\"item_name\":\"Love Life,Dancia\",\"discount\":\"0.00\",\"mc_currency\":\"USD\",\"item_number\":\"beatstore-695867265\",\"residence_country\":\"US\",\"test_ipn\":\"1\",\"shipping_method\":\"Default\",\"transaction_subject\":\"\",\"payment_gross\":\"43.60\",\"ipn_track_id\":\"d06c1bfe56d8b\"}', '2019-02-18 21:20:39', '2019-02-18 22:04:52', ''),
(6, '2', '1MP90701VU1601419', 'USD', '40.87', 'Completed', '{\"mc_gross\":\"40.87\",\"protection_eligibility\":\"Eligible\",\"address_status\":\"confirmed\",\"payer_id\":\"7AX7ABGBZAYLN\",\"address_street\":\"1 Main St\",\"payment_date\":\"21:03:33 Feb 18, 2019 PST\",\"payment_status\":\"Completed\",\"charset\":\"windows-1252\",\"address_zip\":\"95131\",\"first_name\":\"Vishal\",\"mc_fee\":\"1.49\",\"address_country_code\":\"US\",\"address_name\":\"Vishal Patel\",\"notify_version\":\"3.9\",\"custom\":\"2\",\"payer_status\":\"verified\",\"business\":\"hallu2995@gmail.com\",\"address_country\":\"United States\",\"address_city\":\"San Jose\",\"quantity\":\"1\",\"verify_sign\":\"A2S1fniRGsoquzRDbs4f5rc383f8AbBu-X6KuQuO9N6nXQyb53MT-LQX\",\"payer_email\":\"vishal29051995@gmail.com\",\"txn_id\":\"1MP90701VU1601419\",\"payment_type\":\"instant\",\"last_name\":\"Patel\",\"address_state\":\"CA\",\"receiver_email\":\"hallu2995@gmail.com\",\"payment_fee\":\"1.49\",\"shipping_discount\":\"0.00\",\"insurance_amount\":\"0.00\",\"receiver_id\":\"4RBHT2X4Q9QJA\",\"txn_type\":\"web_accept\",\"item_name\":\"Dancia\",\"discount\":\"0.00\",\"mc_currency\":\"USD\",\"item_number\":\"beatstore-986878864\",\"residence_country\":\"US\",\"test_ipn\":\"1\",\"shipping_method\":\"Default\",\"transaction_subject\":\"\",\"payment_gross\":\"40.87\",\"ipn_track_id\":\"5a15c22746f8c\"}', '2019-02-19 06:03:45', '2019-02-19 06:25:28', ''),
(7, '2', '7MX78815LM3957932', 'USD', '40.87', 'Completed', '{\"mc_gross\":\"40.87\",\"protection_eligibility\":\"Eligible\",\"address_status\":\"confirmed\",\"payer_id\":\"7AX7ABGBZAYLN\",\"address_street\":\"1 Main St\",\"payment_date\":\"21:13:26 Feb 18, 2019 PST\",\"payment_status\":\"Completed\",\"charset\":\"windows-1252\",\"address_zip\":\"95131\",\"first_name\":\"Vishal\",\"mc_fee\":\"1.49\",\"address_country_code\":\"US\",\"address_name\":\"Vishal Patel\",\"notify_version\":\"3.9\",\"custom\":\"2\",\"payer_status\":\"verified\",\"business\":\"hallu2995@gmail.com\",\"address_country\":\"United States\",\"address_city\":\"San Jose\",\"quantity\":\"1\",\"verify_sign\":\"Ablsp0.lRnl2z540q03W.Y1NGuBQAoSCuuEufdK47jmJdCJXYUHsxHyO\",\"payer_email\":\"vishal29051995@gmail.com\",\"txn_id\":\"7MX78815LM3957932\",\"payment_type\":\"instant\",\"last_name\":\"Patel\",\"address_state\":\"CA\",\"receiver_email\":\"hallu2995@gmail.com\",\"payment_fee\":\"1.49\",\"shipping_discount\":\"0.00\",\"insurance_amount\":\"0.00\",\"receiver_id\":\"4RBHT2X4Q9QJA\",\"txn_type\":\"web_accept\",\"item_name\":\"Dancia\",\"discount\":\"0.00\",\"mc_currency\":\"USD\",\"item_number\":\"beatstore-677563881\",\"residence_country\":\"US\",\"test_ipn\":\"1\",\"shipping_method\":\"Default\",\"transaction_subject\":\"\",\"payment_gross\":\"40.87\",\"ipn_track_id\":\"4878b1a032e1e\"}', '2019-02-19 06:13:35', '2019-02-19 06:19:21', ''),
(8, '2', '6731889183681250W', 'USD', '40.87', 'Completed', '{\"mc_gross\":\"40.87\",\"protection_eligibility\":\"Eligible\",\"address_status\":\"confirmed\",\"payer_id\":\"7AX7ABGBZAYLN\",\"address_street\":\"1 Main St\",\"payment_date\":\"21:19:04 Feb 18, 2019 PST\",\"payment_status\":\"Completed\",\"charset\":\"windows-1252\",\"address_zip\":\"95131\",\"first_name\":\"Vishal\",\"mc_fee\":\"1.49\",\"address_country_code\":\"US\",\"address_name\":\"Vishal Patel\",\"notify_version\":\"3.9\",\"custom\":\"2\",\"payer_status\":\"verified\",\"business\":\"hallu2995@gmail.com\",\"address_country\":\"United States\",\"address_city\":\"San Jose\",\"quantity\":\"1\",\"verify_sign\":\"A9mR-wx6UpIKvTf0FoIWqPz2rpCaAHyDIIOYXKX0CaD6yvb0sDIQzF5A\",\"payer_email\":\"vishal29051995@gmail.com\",\"txn_id\":\"6731889183681250W\",\"payment_type\":\"instant\",\"last_name\":\"Patel\",\"address_state\":\"CA\",\"receiver_email\":\"hallu2995@gmail.com\",\"payment_fee\":\"1.49\",\"shipping_discount\":\"0.00\",\"insurance_amount\":\"0.00\",\"receiver_id\":\"4RBHT2X4Q9QJA\",\"txn_type\":\"web_accept\",\"item_name\":\"Dancia\",\"discount\":\"0.00\",\"mc_currency\":\"USD\",\"item_number\":\"beatstore-921360120\",\"residence_country\":\"US\",\"test_ipn\":\"1\",\"shipping_method\":\"Default\",\"transaction_subject\":\"\",\"payment_gross\":\"40.87\",\"ipn_track_id\":\"4eecf2fdb6294\"}', '2019-02-19 06:19:15', '2019-02-19 06:19:15', ''),
(9, '2', '94843277CG203335A', 'USD', '40.87', 'Completed', '{\"mc_gross\":\"40.87\",\"protection_eligibility\":\"Eligible\",\"address_status\":\"confirmed\",\"payer_id\":\"7AX7ABGBZAYLN\",\"address_street\":\"1 Main St\",\"payment_date\":\"21:24:45 Feb 18, 2019 PST\",\"payment_status\":\"Completed\",\"charset\":\"windows-1252\",\"address_zip\":\"95131\",\"first_name\":\"Vishal\",\"mc_fee\":\"1.49\",\"address_country_code\":\"US\",\"address_name\":\"Vishal Patel\",\"notify_version\":\"3.9\",\"custom\":\"2\",\"payer_status\":\"verified\",\"business\":\"hallu2995@gmail.com\",\"address_country\":\"United States\",\"address_city\":\"San Jose\",\"quantity\":\"1\",\"verify_sign\":\"AKzaD7UBp7FOkG.-3hMfmm437PmUAEAMEH26qvDpKkTwbetjf-ljBOhw\",\"payer_email\":\"vishal29051995@gmail.com\",\"txn_id\":\"94843277CG203335A\",\"payment_type\":\"instant\",\"last_name\":\"Patel\",\"address_state\":\"CA\",\"receiver_email\":\"hallu2995@gmail.com\",\"payment_fee\":\"1.49\",\"shipping_discount\":\"0.00\",\"insurance_amount\":\"0.00\",\"receiver_id\":\"4RBHT2X4Q9QJA\",\"txn_type\":\"web_accept\",\"item_name\":\"Dancia\",\"discount\":\"0.00\",\"mc_currency\":\"USD\",\"item_number\":\"beatstore-244620740\",\"residence_country\":\"US\",\"test_ipn\":\"1\",\"shipping_method\":\"Default\",\"transaction_subject\":\"\",\"payment_gross\":\"40.87\",\"ipn_track_id\":\"792b9105eabee\"}', '2019-02-19 06:24:56', '2019-02-19 06:24:56', ''),
(10, '2', '1WY405172J8717729', 'USD', '40.87', 'Completed', '{\"mc_gross\":\"40.87\",\"protection_eligibility\":\"Eligible\",\"address_status\":\"confirmed\",\"payer_id\":\"7AX7ABGBZAYLN\",\"address_street\":\"1 Main St\",\"payment_date\":\"21:30:52 Feb 18, 2019 PST\",\"payment_status\":\"Completed\",\"charset\":\"windows-1252\",\"address_zip\":\"95131\",\"first_name\":\"Vishal\",\"mc_fee\":\"1.49\",\"address_country_code\":\"US\",\"address_name\":\"Vishal Patel\",\"notify_version\":\"3.9\",\"custom\":\"2\",\"payer_status\":\"verified\",\"business\":\"hallu2995@gmail.com\",\"address_country\":\"United States\",\"address_city\":\"San Jose\",\"quantity\":\"1\",\"verify_sign\":\"AwAt1-My7lkO4u8mt6h.T7LLtwDCA3G89RWYpPK3v7FcYGPAKzCJvsdq\",\"payer_email\":\"vishal29051995@gmail.com\",\"txn_id\":\"1WY405172J8717729\",\"payment_type\":\"instant\",\"last_name\":\"Patel\",\"address_state\":\"CA\",\"receiver_email\":\"hallu2995@gmail.com\",\"payment_fee\":\"1.49\",\"shipping_discount\":\"0.00\",\"insurance_amount\":\"0.00\",\"receiver_id\":\"4RBHT2X4Q9QJA\",\"txn_type\":\"web_accept\",\"item_name\":\"Dancia\",\"discount\":\"0.00\",\"mc_currency\":\"USD\",\"item_number\":\"beatstore-949438874\",\"residence_country\":\"US\",\"test_ipn\":\"1\",\"shipping_method\":\"Default\",\"transaction_subject\":\"\",\"payment_gross\":\"40.87\",\"ipn_track_id\":\"e3776e5b6e167\"}', '2019-02-19 06:31:03', '2019-02-19 06:31:03', ''),
(11, '2', '5H280422EF568520A', 'USD', '24.52', 'Completed', '{\"mc_gross\":\"24.52\",\"protection_eligibility\":\"Eligible\",\"address_status\":\"confirmed\",\"payer_id\":\"7AX7ABGBZAYLN\",\"address_street\":\"1 Main St\",\"payment_date\":\"22:16:12 Feb 19, 2019 PST\",\"payment_status\":\"Completed\",\"charset\":\"windows-1252\",\"address_zip\":\"95131\",\"first_name\":\"Vishal\",\"mc_fee\":\"1.01\",\"address_country_code\":\"US\",\"address_name\":\"Vishal Patel\",\"notify_version\":\"3.9\",\"custom\":\"2\",\"payer_status\":\"verified\",\"business\":\"hallu2995@gmail.com\",\"address_country\":\"United States\",\"address_city\":\"San Jose\",\"quantity\":\"1\",\"verify_sign\":\"Anp6FYsTiu25aR0NYrmne7rT0vriARSSn3gY6we5kRMYa95iIKZEZwBv\",\"payer_email\":\"vishal29051995@gmail.com\",\"txn_id\":\"5H280422EF568520A\",\"payment_type\":\"instant\",\"last_name\":\"Patel\",\"address_state\":\"CA\",\"receiver_email\":\"hallu2995@gmail.com\",\"payment_fee\":\"1.01\",\"shipping_discount\":\"0.00\",\"insurance_amount\":\"0.00\",\"receiver_id\":\"4RBHT2X4Q9QJA\",\"txn_type\":\"web_accept\",\"item_name\":\"Love Life\",\"discount\":\"0.00\",\"mc_currency\":\"USD\",\"item_number\":\"beatstore-417385470\",\"residence_country\":\"US\",\"test_ipn\":\"1\",\"shipping_method\":\"Default\",\"transaction_subject\":\"\",\"payment_gross\":\"24.52\",\"ipn_track_id\":\"89b65eb1ce7d\"}', '2019-02-20 07:16:26', '2019-02-20 07:16:26', ''),
(12, '2', '3LW5533733100135X', 'USD', '19.07', 'Completed', '{\"mc_gross\":\"19.07\",\"protection_eligibility\":\"Eligible\",\"address_status\":\"confirmed\",\"payer_id\":\"7AX7ABGBZAYLN\",\"address_street\":\"1 Main St\",\"payment_date\":\"22:27:33 Feb 19, 2019 PST\",\"payment_status\":\"Completed\",\"charset\":\"windows-1252\",\"address_zip\":\"95131\",\"first_name\":\"Vishal\",\"mc_fee\":\"0.85\",\"address_country_code\":\"US\",\"address_name\":\"Vishal Patel\",\"notify_version\":\"3.9\",\"custom\":\"2\",\"payer_status\":\"verified\",\"business\":\"hallu2995@gmail.com\",\"address_country\":\"United States\",\"address_city\":\"San Jose\",\"quantity\":\"1\",\"verify_sign\":\"AANhSLziHCMAB4v.LHz6a-K9b4zDAFTxQe1mSqJIaJWQy19LOMX0N8Ra\",\"payer_email\":\"vishal29051995@gmail.com\",\"txn_id\":\"3LW5533733100135X\",\"payment_type\":\"instant\",\"last_name\":\"Patel\",\"address_state\":\"CA\",\"receiver_email\":\"hallu2995@gmail.com\",\"payment_fee\":\"0.85\",\"shipping_discount\":\"0.00\",\"insurance_amount\":\"0.00\",\"receiver_id\":\"4RBHT2X4Q9QJA\",\"txn_type\":\"web_accept\",\"item_name\":\"Dancia\",\"discount\":\"0.00\",\"mc_currency\":\"USD\",\"item_number\":\"beatstore-25069981\",\"residence_country\":\"US\",\"test_ipn\":\"1\",\"shipping_method\":\"Default\",\"transaction_subject\":\"\",\"payment_gross\":\"19.07\",\"ipn_track_id\":\"265cc5b03cee3\"}', '2019-02-20 07:27:40', '2019-02-20 07:27:40', ''),
(13, '2', '7ST79771LT4299127', 'USD', '19.07', 'Completed', '{\"mc_gross\":\"19.07\",\"protection_eligibility\":\"Eligible\",\"address_status\":\"confirmed\",\"payer_id\":\"7AX7ABGBZAYLN\",\"address_street\":\"1 Main St\",\"payment_date\":\"22:33:46 Feb 19, 2019 PST\",\"payment_status\":\"Completed\",\"charset\":\"windows-1252\",\"address_zip\":\"95131\",\"first_name\":\"Vishal\",\"mc_fee\":\"0.85\",\"address_country_code\":\"US\",\"address_name\":\"Vishal Patel\",\"notify_version\":\"3.9\",\"custom\":\"2\",\"payer_status\":\"verified\",\"business\":\"hallu2995@gmail.com\",\"address_country\":\"United States\",\"address_city\":\"San Jose\",\"quantity\":\"1\",\"verify_sign\":\"AV3m7GcX70KBeJNpYS.LzLvYoz1kAGPdg6R3Y4irLcq.tgTB5BemaipX\",\"payer_email\":\"vishal29051995@gmail.com\",\"txn_id\":\"7ST79771LT4299127\",\"payment_type\":\"instant\",\"last_name\":\"Patel\",\"address_state\":\"CA\",\"receiver_email\":\"hallu2995@gmail.com\",\"payment_fee\":\"0.85\",\"shipping_discount\":\"0.00\",\"insurance_amount\":\"0.00\",\"receiver_id\":\"4RBHT2X4Q9QJA\",\"txn_type\":\"web_accept\",\"item_name\":\"daa\",\"discount\":\"0.00\",\"mc_currency\":\"USD\",\"item_number\":\"beatstore-705067323\",\"residence_country\":\"US\",\"test_ipn\":\"1\",\"shipping_method\":\"Default\",\"transaction_subject\":\"\",\"payment_gross\":\"19.07\",\"ipn_track_id\":\"e0bc5083a68d6\"}', '2019-02-20 07:33:56', '2019-02-20 07:33:56', ''),
(14, '2', '59M99144XC698040C', 'USD', '40.87', 'Completed', '{\"mc_gross\":\"40.87\",\"protection_eligibility\":\"Eligible\",\"address_status\":\"confirmed\",\"payer_id\":\"7AX7ABGBZAYLN\",\"address_street\":\"1 Main St\",\"payment_date\":\"22:56:06 Feb 19, 2019 PST\",\"payment_status\":\"Completed\",\"charset\":\"windows-1252\",\"address_zip\":\"95131\",\"first_name\":\"Vishal\",\"mc_fee\":\"1.49\",\"address_country_code\":\"US\",\"address_name\":\"Vishal Patel\",\"notify_version\":\"3.9\",\"custom\":\"2\",\"payer_status\":\"verified\",\"business\":\"hallu2995@gmail.com\",\"address_country\":\"United States\",\"address_city\":\"San Jose\",\"quantity\":\"1\",\"verify_sign\":\"AwA846ddE7oa-XTuN0RueBub.6laAV3QrV6St19jMqprks0P4oCSQn7Q\",\"payer_email\":\"vishal29051995@gmail.com\",\"txn_id\":\"59M99144XC698040C\",\"payment_type\":\"instant\",\"last_name\":\"Patel\",\"address_state\":\"CA\",\"receiver_email\":\"hallu2995@gmail.com\",\"payment_fee\":\"1.49\",\"shipping_discount\":\"0.00\",\"insurance_amount\":\"0.00\",\"receiver_id\":\"4RBHT2X4Q9QJA\",\"txn_type\":\"web_accept\",\"item_name\":\"Dancia\",\"discount\":\"0.00\",\"mc_currency\":\"USD\",\"item_number\":\"beatstore-176879592\",\"residence_country\":\"US\",\"test_ipn\":\"1\",\"shipping_method\":\"Default\",\"transaction_subject\":\"\",\"payment_gross\":\"40.87\",\"ipn_track_id\":\"d8b8179753f65\"}', '2019-02-20 07:56:16', '2019-02-20 07:59:14', ''),
(15, '2', '7UX76818TG156903N', 'USD', '40.87', 'Completed', '{\"mc_gross\":\"40.87\",\"protection_eligibility\":\"Eligible\",\"address_status\":\"confirmed\",\"payer_id\":\"7AX7ABGBZAYLN\",\"address_street\":\"1 Main St\",\"payment_date\":\"22:59:14 Feb 19, 2019 PST\",\"payment_status\":\"Completed\",\"charset\":\"windows-1252\",\"address_zip\":\"95131\",\"first_name\":\"Vishal\",\"mc_fee\":\"1.49\",\"address_country_code\":\"US\",\"address_name\":\"Vishal Patel\",\"notify_version\":\"3.9\",\"custom\":\"2\",\"payer_status\":\"verified\",\"business\":\"hallu2995@gmail.com\",\"address_country\":\"United States\",\"address_city\":\"San Jose\",\"quantity\":\"1\",\"verify_sign\":\"ASF70zltkxECKkEhGr2c-kpo7VzaA58BaXSNOM4jcB8opRvCPdi6XKDP\",\"payer_email\":\"vishal29051995@gmail.com\",\"txn_id\":\"7UX76818TG156903N\",\"payment_type\":\"instant\",\"last_name\":\"Patel\",\"address_state\":\"CA\",\"receiver_email\":\"hallu2995@gmail.com\",\"payment_fee\":\"1.49\",\"shipping_discount\":\"0.00\",\"insurance_amount\":\"0.00\",\"receiver_id\":\"4RBHT2X4Q9QJA\",\"txn_type\":\"web_accept\",\"item_name\":\"Dancia\",\"discount\":\"0.00\",\"mc_currency\":\"USD\",\"item_number\":\"beatstore-571571046\",\"residence_country\":\"US\",\"test_ipn\":\"1\",\"shipping_method\":\"Default\",\"transaction_subject\":\"\",\"payment_gross\":\"40.87\",\"ipn_track_id\":\"3a06818ad4795\"}', '2019-02-20 07:59:26', '2019-02-20 07:59:26', ''),
(16, '2', '5XY62300V7765310A', 'USD', '81.74', 'Completed', '{\"mc_gross\":\"81.74\",\"protection_eligibility\":\"Eligible\",\"address_status\":\"confirmed\",\"payer_id\":\"7AX7ABGBZAYLN\",\"address_street\":\"1 Main St\",\"payment_date\":\"23:01:42 Feb 19, 2019 PST\",\"payment_status\":\"Completed\",\"charset\":\"windows-1252\",\"address_zip\":\"95131\",\"first_name\":\"Vishal\",\"mc_fee\":\"2.67\",\"address_country_code\":\"US\",\"address_name\":\"Vishal Patel\",\"notify_version\":\"3.9\",\"custom\":\"2\",\"payer_status\":\"verified\",\"business\":\"hallu2995@gmail.com\",\"address_country\":\"United States\",\"address_city\":\"San Jose\",\"quantity\":\"1\",\"verify_sign\":\"AsLDJ9.m4EOvt0m4bLCC4ceU1Ir9AEj2ulE8h4Hm6W7gHZYSfmbGmc3I\",\"payer_email\":\"vishal29051995@gmail.com\",\"txn_id\":\"5XY62300V7765310A\",\"payment_type\":\"instant\",\"last_name\":\"Patel\",\"address_state\":\"CA\",\"receiver_email\":\"hallu2995@gmail.com\",\"payment_fee\":\"2.67\",\"shipping_discount\":\"0.00\",\"insurance_amount\":\"0.00\",\"receiver_id\":\"4RBHT2X4Q9QJA\",\"txn_type\":\"web_accept\",\"item_name\":\"ODYSSSEY\",\"discount\":\"0.00\",\"mc_currency\":\"USD\",\"item_number\":\"beatstore-855765109\",\"residence_country\":\"US\",\"test_ipn\":\"1\",\"shipping_method\":\"Default\",\"transaction_subject\":\"\",\"payment_gross\":\"81.74\",\"ipn_track_id\":\"b62dbe8ba2959\"}', '2019-02-20 08:01:51', '2019-02-20 08:01:51', ''),
(17, '2', '3UW60132XU664502L', 'USD', '40.87', 'Completed', '{\"mc_gross\":\"40.87\",\"protection_eligibility\":\"Eligible\",\"address_status\":\"confirmed\",\"payer_id\":\"7AX7ABGBZAYLN\",\"address_street\":\"1 Main St\",\"payment_date\":\"00:41:36 Feb 20, 2019 PST\",\"payment_status\":\"Completed\",\"charset\":\"windows-1252\",\"address_zip\":\"95131\",\"first_name\":\"Vishal\",\"mc_fee\":\"1.49\",\"address_country_code\":\"US\",\"address_name\":\"Vishal Patel\",\"notify_version\":\"3.9\",\"custom\":\"2\",\"payer_status\":\"verified\",\"business\":\"hallu2995@gmail.com\",\"address_country\":\"United States\",\"address_city\":\"San Jose\",\"quantity\":\"1\",\"verify_sign\":\"AhKjPyUAFwaeM5vZHwjU.0caZhHtAJ3RdP62StPiASnnMs9jnVCCiy4B\",\"payer_email\":\"vishal29051995@gmail.com\",\"txn_id\":\"3UW60132XU664502L\",\"payment_type\":\"instant\",\"last_name\":\"Patel\",\"address_state\":\"CA\",\"receiver_email\":\"hallu2995@gmail.com\",\"payment_fee\":\"1.49\",\"shipping_discount\":\"0.00\",\"insurance_amount\":\"0.00\",\"receiver_id\":\"4RBHT2X4Q9QJA\",\"txn_type\":\"web_accept\",\"item_name\":\"Dancia\",\"discount\":\"0.00\",\"mc_currency\":\"USD\",\"item_number\":\"beatstore-440188541\",\"residence_country\":\"US\",\"test_ipn\":\"1\",\"shipping_method\":\"Default\",\"transaction_subject\":\"\",\"payment_gross\":\"40.87\",\"ipn_track_id\":\"ea541b2258374\"}', '2019-02-20 09:41:47', '2019-02-20 09:41:47', ''),
(18, '2', '2CU29939AW938654H', 'USD', '40.87', 'Completed', '{\"mc_gross\":\"40.87\",\"protection_eligibility\":\"Eligible\",\"address_status\":\"confirmed\",\"payer_id\":\"7AX7ABGBZAYLN\",\"address_street\":\"1 Main St\",\"payment_date\":\"00:45:11 Feb 20, 2019 PST\",\"payment_status\":\"Completed\",\"charset\":\"windows-1252\",\"address_zip\":\"95131\",\"first_name\":\"Vishal\",\"mc_fee\":\"1.49\",\"address_country_code\":\"US\",\"address_name\":\"Vishal Patel\",\"notify_version\":\"3.9\",\"custom\":\"2\",\"payer_status\":\"verified\",\"business\":\"hallu2995@gmail.com\",\"address_country\":\"United States\",\"address_city\":\"San Jose\",\"quantity\":\"1\",\"verify_sign\":\"A2AR8OzvzfOCUD-RB1.zxE-e5S0-AQ8DD5.cD.Jqc0YzzLqcrLoecHMy\",\"payer_email\":\"vishal29051995@gmail.com\",\"txn_id\":\"2CU29939AW938654H\",\"payment_type\":\"instant\",\"last_name\":\"Patel\",\"address_state\":\"CA\",\"receiver_email\":\"hallu2995@gmail.com\",\"payment_fee\":\"1.49\",\"shipping_discount\":\"0.00\",\"insurance_amount\":\"0.00\",\"receiver_id\":\"4RBHT2X4Q9QJA\",\"txn_type\":\"web_accept\",\"item_name\":\"Dancia\",\"discount\":\"0.00\",\"mc_currency\":\"USD\",\"item_number\":\"beatstore-456517690\",\"residence_country\":\"US\",\"test_ipn\":\"1\",\"shipping_method\":\"Default\",\"transaction_subject\":\"\",\"payment_gross\":\"40.87\",\"ipn_track_id\":\"4caf07ee455d8\"}', '2019-02-20 09:45:19', '2019-02-20 09:45:19', ''),
(19, '2', '1R831742JJ064605G', 'USD', '40.87', 'Completed', '{\"mc_gross\":\"40.87\",\"protection_eligibility\":\"Eligible\",\"address_status\":\"confirmed\",\"payer_id\":\"7AX7ABGBZAYLN\",\"address_street\":\"1 Main St\",\"payment_date\":\"00:46:31 Feb 20, 2019 PST\",\"payment_status\":\"Completed\",\"charset\":\"windows-1252\",\"address_zip\":\"95131\",\"first_name\":\"Vishal\",\"mc_fee\":\"1.49\",\"address_country_code\":\"US\",\"address_name\":\"Vishal Patel\",\"notify_version\":\"3.9\",\"custom\":\"2\",\"payer_status\":\"verified\",\"business\":\"hallu2995@gmail.com\",\"address_country\":\"United States\",\"address_city\":\"San Jose\",\"quantity\":\"1\",\"verify_sign\":\"AUanW7UeJA6wPh96Sgc3QKyE0xNuAMV9h9pUCZotRVyCGCLAe3hmnM8Z\",\"payer_email\":\"vishal29051995@gmail.com\",\"txn_id\":\"1R831742JJ064605G\",\"payment_type\":\"instant\",\"last_name\":\"Patel\",\"address_state\":\"CA\",\"receiver_email\":\"hallu2995@gmail.com\",\"payment_fee\":\"1.49\",\"shipping_discount\":\"0.00\",\"insurance_amount\":\"0.00\",\"receiver_id\":\"4RBHT2X4Q9QJA\",\"txn_type\":\"web_accept\",\"item_name\":\"Dancia\",\"discount\":\"0.00\",\"mc_currency\":\"USD\",\"item_number\":\"beatstore-456517690\",\"residence_country\":\"US\",\"test_ipn\":\"1\",\"shipping_method\":\"Default\",\"transaction_subject\":\"\",\"payment_gross\":\"40.87\",\"ipn_track_id\":\"ffb70bc9776d3\"}', '2019-02-20 09:46:41', '2019-02-20 09:46:41', ''),
(20, '2', '77H36100UP122623F', 'USD', '40.87', 'Completed', '{\"mc_gross\":\"40.87\",\"protection_eligibility\":\"Eligible\",\"address_status\":\"confirmed\",\"payer_id\":\"7AX7ABGBZAYLN\",\"address_street\":\"1 Main St\",\"payment_date\":\"00:48:02 Feb 20, 2019 PST\",\"payment_status\":\"Completed\",\"charset\":\"windows-1252\",\"address_zip\":\"95131\",\"first_name\":\"Vishal\",\"mc_fee\":\"1.49\",\"address_country_code\":\"US\",\"address_name\":\"Vishal Patel\",\"notify_version\":\"3.9\",\"custom\":\"2\",\"payer_status\":\"verified\",\"business\":\"hallu2995@gmail.com\",\"address_country\":\"United States\",\"address_city\":\"San Jose\",\"quantity\":\"1\",\"verify_sign\":\"AjrRH.KE40NaQ1W.aTeZXmVIcY6-AVspDHtpCnmJEHO1.LLgDIILIKmy\",\"payer_email\":\"vishal29051995@gmail.com\",\"txn_id\":\"77H36100UP122623F\",\"payment_type\":\"instant\",\"last_name\":\"Patel\",\"address_state\":\"CA\",\"receiver_email\":\"hallu2995@gmail.com\",\"payment_fee\":\"1.49\",\"shipping_discount\":\"0.00\",\"insurance_amount\":\"0.00\",\"receiver_id\":\"4RBHT2X4Q9QJA\",\"txn_type\":\"web_accept\",\"item_name\":\"Dancia\",\"discount\":\"0.00\",\"mc_currency\":\"USD\",\"item_number\":\"beatstore-456517690\",\"residence_country\":\"US\",\"test_ipn\":\"1\",\"shipping_method\":\"Default\",\"transaction_subject\":\"\",\"payment_gross\":\"40.87\",\"ipn_track_id\":\"ea5f8d4ec29f\"}', '2019-02-20 09:48:14', '2019-02-20 09:48:14', ''),
(21, '2', '5WP63395TR541070M', 'USD', '19.07', 'Completed', '{\"mc_gross\":\"19.07\",\"protection_eligibility\":\"Eligible\",\"address_status\":\"confirmed\",\"payer_id\":\"7AX7ABGBZAYLN\",\"address_street\":\"1 Main St\",\"payment_date\":\"00:49:06 Feb 20, 2019 PST\",\"payment_status\":\"Completed\",\"charset\":\"windows-1252\",\"address_zip\":\"95131\",\"first_name\":\"Vishal\",\"mc_fee\":\"0.85\",\"address_country_code\":\"US\",\"address_name\":\"Vishal Patel\",\"notify_version\":\"3.9\",\"custom\":\"2\",\"payer_status\":\"verified\",\"business\":\"hallu2995@gmail.com\",\"address_country\":\"United States\",\"address_city\":\"San Jose\",\"quantity\":\"1\",\"verify_sign\":\"AFcDZYj88fqGxr8zEfOTQfUqeSZmANQZdPfKXPjcK3yoS5DLrJ4yd2z-\",\"payer_email\":\"vishal29051995@gmail.com\",\"txn_id\":\"5WP63395TR541070M\",\"payment_type\":\"instant\",\"last_name\":\"Patel\",\"address_state\":\"CA\",\"receiver_email\":\"hallu2995@gmail.com\",\"payment_fee\":\"0.85\",\"shipping_discount\":\"0.00\",\"insurance_amount\":\"0.00\",\"receiver_id\":\"4RBHT2X4Q9QJA\",\"txn_type\":\"web_accept\",\"item_name\":\"daa\",\"discount\":\"0.00\",\"mc_currency\":\"USD\",\"item_number\":\"beatstore-437452875\",\"residence_country\":\"US\",\"test_ipn\":\"1\",\"shipping_method\":\"Default\",\"transaction_subject\":\"\",\"payment_gross\":\"19.07\",\"ipn_track_id\":\"29523cfede0bf\"}', '2019-02-20 09:49:14', '2019-02-20 09:49:14', ''),
(22, '2', '6N692721RX2616946', 'USD', '151.38', 'Completed', '{\"mc_gross\":\"151.38\",\"protection_eligibility\":\"Eligible\",\"address_status\":\"confirmed\",\"payer_id\":\"7AX7ABGBZAYLN\",\"address_street\":\"1 Main St\",\"payment_date\":\"00:51:14 Feb 20, 2019 PST\",\"payment_status\":\"Completed\",\"charset\":\"windows-1252\",\"address_zip\":\"95131\",\"first_name\":\"Vishal\",\"mc_fee\":\"4.69\",\"address_country_code\":\"US\",\"address_name\":\"Vishal Patel\",\"notify_version\":\"3.9\",\"custom\":\"2\",\"payer_status\":\"verified\",\"business\":\"hallu2995@gmail.com\",\"address_country\":\"United States\",\"address_city\":\"San Jose\",\"quantity\":\"1\",\"verify_sign\":\"A7UMedn1BfBoD5MMUf9mkg5VRRWMAsiVbEGf00.pX0-flLSHxaURYmJ2\",\"payer_email\":\"vishal29051995@gmail.com\",\"txn_id\":\"6N692721RX2616946\",\"payment_type\":\"instant\",\"last_name\":\"Patel\",\"address_state\":\"CA\",\"receiver_email\":\"hallu2995@gmail.com\",\"payment_fee\":\"4.69\",\"shipping_discount\":\"0.00\",\"insurance_amount\":\"0.00\",\"receiver_id\":\"4RBHT2X4Q9QJA\",\"txn_type\":\"web_accept\",\"item_name\":\"test\",\"discount\":\"0.00\",\"mc_currency\":\"USD\",\"item_number\":\"beatstore-330199284\",\"residence_country\":\"US\",\"test_ipn\":\"1\",\"shipping_method\":\"Default\",\"transaction_subject\":\"\",\"payment_gross\":\"151.38\",\"ipn_track_id\":\"b78e08f92c200\"}', '2019-02-20 09:51:23', '2019-02-20 09:51:23', ''),
(23, '9', '5P042285LH885853T', 'USD', '0.03', 'Completed', '{\"mc_gross\":\"0.03\",\"protection_eligibility\":\"Eligible\",\"address_status\":\"confirmed\",\"payer_id\":\"7AX7ABGBZAYLN\",\"address_street\":\"1 Main St\",\"payment_date\":\"02:11:02 Feb 20, 2019 PST\",\"payment_status\":\"Completed\",\"charset\":\"windows-1252\",\"address_zip\":\"95131\",\"first_name\":\"Vishal\",\"mc_fee\":\"0.03\",\"address_country_code\":\"US\",\"address_name\":\"Vishal Patel\",\"notify_version\":\"3.9\",\"custom\":\"9\",\"payer_status\":\"verified\",\"business\":\"hallu2995@gmail.com\",\"address_country\":\"United States\",\"address_city\":\"San Jose\",\"quantity\":\"1\",\"verify_sign\":\"A..rV4uy0QGs7YboHm7W.qssQI8bA-H4lXHZdw.BegkseV1j4hpQ0DPW\",\"payer_email\":\"vishal29051995@gmail.com\",\"txn_id\":\"5P042285LH885853T\",\"payment_type\":\"instant\",\"last_name\":\"Patel\",\"address_state\":\"CA\",\"receiver_email\":\"hallu2995@gmail.com\",\"payment_fee\":\"0.03\",\"shipping_discount\":\"0.00\",\"insurance_amount\":\"0.00\",\"receiver_id\":\"4RBHT2X4Q9QJA\",\"txn_type\":\"web_accept\",\"item_name\":\"Love Life\",\"discount\":\"0.00\",\"mc_currency\":\"USD\",\"item_number\":\"beatstore-990004148\",\"residence_country\":\"US\",\"test_ipn\":\"1\",\"shipping_method\":\"Default\",\"transaction_subject\":\"\",\"payment_gross\":\"0.03\",\"ipn_track_id\":\"b71d42e4840de\"}', '2019-02-20 11:11:11', '2019-02-20 11:54:16', ''),
(24, '2', '4MY680991Y6947404', 'USD', '19.07', 'Completed', '{\"mc_gross\":\"19.07\",\"protection_eligibility\":\"Eligible\",\"address_status\":\"confirmed\",\"payer_id\":\"7AX7ABGBZAYLN\",\"address_street\":\"1 Main St\",\"payment_date\":\"02:42:07 Feb 20, 2019 PST\",\"payment_status\":\"Completed\",\"charset\":\"windows-1252\",\"address_zip\":\"95131\",\"first_name\":\"Vishal\",\"mc_fee\":\"0.85\",\"address_country_code\":\"US\",\"address_name\":\"Vishal Patel\",\"notify_version\":\"3.9\",\"custom\":\"2\",\"payer_status\":\"verified\",\"business\":\"hallu2995@gmail.com\",\"address_country\":\"United States\",\"address_city\":\"San Jose\",\"quantity\":\"1\",\"verify_sign\":\"Azm5iRwPAcQUbPmB3Jwr9rC9rmHJADPzpdjZxMMUtR95Z9fzRAjRBtXJ\",\"payer_email\":\"vishal29051995@gmail.com\",\"txn_id\":\"4MY680991Y6947404\",\"payment_type\":\"instant\",\"last_name\":\"Patel\",\"address_state\":\"CA\",\"receiver_email\":\"hallu2995@gmail.com\",\"payment_fee\":\"0.85\",\"shipping_discount\":\"0.00\",\"insurance_amount\":\"0.00\",\"receiver_id\":\"4RBHT2X4Q9QJA\",\"txn_type\":\"web_accept\",\"item_name\":\"Dancia\",\"discount\":\"0.00\",\"mc_currency\":\"USD\",\"item_number\":\"beatstore-546079929\",\"residence_country\":\"US\",\"test_ipn\":\"1\",\"shipping_method\":\"Default\",\"transaction_subject\":\"\",\"payment_gross\":\"19.07\",\"ipn_track_id\":\"af29cce27d2f\"}', '2019-02-20 11:42:15', '2019-02-20 11:47:45', ''),
(25, '2', '2P661119HV188072H', 'USD', '108.99', 'Completed', '{\"mc_gross\":\"108.99\",\"protection_eligibility\":\"Eligible\",\"address_status\":\"confirmed\",\"payer_id\":\"7AX7ABGBZAYLN\",\"address_street\":\"1 Main St\",\"payment_date\":\"02:46:14 Feb 20, 2019 PST\",\"payment_status\":\"Completed\",\"charset\":\"windows-1252\",\"address_zip\":\"95131\",\"first_name\":\"Vishal\",\"mc_fee\":\"3.46\",\"address_country_code\":\"US\",\"address_name\":\"Vishal Patel\",\"notify_version\":\"3.9\",\"custom\":\"2\",\"payer_status\":\"verified\",\"business\":\"hallu2995@gmail.com\",\"address_country\":\"United States\",\"address_city\":\"San Jose\",\"quantity\":\"1\",\"verify_sign\":\"A7QQrEkquDbSg52pWKYXyAxP2oQjA8FlmehxecxodciknE3ZGFaf.7gY\",\"payer_email\":\"vishal29051995@gmail.com\",\"txn_id\":\"2P661119HV188072H\",\"payment_type\":\"instant\",\"last_name\":\"Patel\",\"address_state\":\"CA\",\"receiver_email\":\"hallu2995@gmail.com\",\"payment_fee\":\"3.46\",\"shipping_discount\":\"0.00\",\"insurance_amount\":\"0.00\",\"receiver_id\":\"4RBHT2X4Q9QJA\",\"txn_type\":\"web_accept\",\"item_name\":\"daa\",\"discount\":\"0.00\",\"mc_currency\":\"USD\",\"item_number\":\"beatstore-863107029\",\"residence_country\":\"US\",\"test_ipn\":\"1\",\"shipping_method\":\"Default\",\"transaction_subject\":\"\",\"payment_gross\":\"108.99\",\"ipn_track_id\":\"dfdcb9b04aea7\"}', '2019-02-20 11:46:27', '2019-02-20 11:46:27', ''),
(26, '9', '7ER802234A144512B', 'USD', '0.03', 'Completed', '{\"mc_gross\":\"0.03\",\"protection_eligibility\":\"Eligible\",\"address_status\":\"confirmed\",\"payer_id\":\"7AX7ABGBZAYLN\",\"address_street\":\"1 Main St\",\"payment_date\":\"12:13:21 Feb 21, 2019 PST\",\"payment_status\":\"Completed\",\"charset\":\"windows-1252\",\"address_zip\":\"95131\",\"first_name\":\"Vishal\",\"mc_fee\":\"0.03\",\"address_country_code\":\"US\",\"address_name\":\"Vishal Patel\",\"notify_version\":\"3.9\",\"custom\":\"9\",\"payer_status\":\"verified\",\"business\":\"hallu2995@gmail.com\",\"address_country\":\"United States\",\"address_city\":\"San Jose\",\"quantity\":\"1\",\"verify_sign\":\"A7tv2TrduDX5re01oD6fZ11bohnFAJIVEez.zWUhhd8w.UDbgF5Vp4GW\",\"payer_email\":\"vishal29051995@gmail.com\",\"txn_id\":\"7ER802234A144512B\",\"payment_type\":\"instant\",\"last_name\":\"Patel\",\"address_state\":\"CA\",\"receiver_email\":\"hallu2995@gmail.com\",\"payment_fee\":\"0.03\",\"shipping_discount\":\"0.00\",\"insurance_amount\":\"0.00\",\"receiver_id\":\"4RBHT2X4Q9QJA\",\"txn_type\":\"web_accept\",\"item_name\":\"Love Life\",\"discount\":\"0.00\",\"mc_currency\":\"USD\",\"item_number\":\"beatstore-620842965\",\"residence_country\":\"US\",\"test_ipn\":\"1\",\"shipping_method\":\"Default\",\"transaction_subject\":\"\",\"payment_gross\":\"0.03\",\"ipn_track_id\":\"70ded5b81cd76\"}', '2019-02-21 21:13:32', '2019-02-21 21:13:32', ''),
(27, '9', '8WR89008G75929636', 'USD', '16.35', 'Completed', '{\"mc_gross\":\"16.35\",\"protection_eligibility\":\"Eligible\",\"address_status\":\"confirmed\",\"payer_id\":\"7AX7ABGBZAYLN\",\"address_street\":\"1 Main St\",\"payment_date\":\"01:33:34 Feb 22, 2019 PST\",\"payment_status\":\"Completed\",\"charset\":\"windows-1252\",\"address_zip\":\"95131\",\"first_name\":\"Vishal\",\"mc_fee\":\"0.77\",\"address_country_code\":\"US\",\"address_name\":\"Vishal Patel\",\"notify_version\":\"3.9\",\"custom\":\"9\",\"payer_status\":\"verified\",\"business\":\"hallu2995@gmail.com\",\"address_country\":\"United States\",\"address_city\":\"San Jose\",\"quantity\":\"1\",\"verify_sign\":\"AU-AB2KXR5wIxvu9h9T0O48ql8G7A10JJ3n5gqGPrzw4WwqzJAmmtg1v\",\"payer_email\":\"vishal29051995@gmail.com\",\"txn_id\":\"8WR89008G75929636\",\"payment_type\":\"instant\",\"last_name\":\"Patel\",\"address_state\":\"CA\",\"receiver_email\":\"hallu2995@gmail.com\",\"payment_fee\":\"0.77\",\"shipping_discount\":\"0.00\",\"insurance_amount\":\"0.00\",\"receiver_id\":\"4RBHT2X4Q9QJA\",\"txn_type\":\"web_accept\",\"item_name\":\"How We Do\",\"discount\":\"0.00\",\"mc_currency\":\"USD\",\"item_number\":\"beatstore-63071856\",\"residence_country\":\"US\",\"test_ipn\":\"1\",\"shipping_method\":\"Default\",\"transaction_subject\":\"\",\"payment_gross\":\"16.35\",\"ipn_track_id\":\"fbe9d01f9ca43\"}', '2019-02-22 10:33:45', '2019-02-22 10:33:45', ''),
(28, '9', '60U33788V2090371G', 'USD', '40.87', 'Completed', '{\"mc_gross\":\"40.87\",\"protection_eligibility\":\"Eligible\",\"address_status\":\"confirmed\",\"payer_id\":\"7AX7ABGBZAYLN\",\"address_street\":\"1 Main St\",\"payment_date\":\"02:04:16 Feb 22, 2019 PST\",\"payment_status\":\"Completed\",\"charset\":\"windows-1252\",\"address_zip\":\"95131\",\"first_name\":\"Vishal\",\"mc_fee\":\"1.49\",\"address_country_code\":\"US\",\"address_name\":\"Vishal Patel\",\"notify_version\":\"3.9\",\"custom\":\"9\",\"payer_status\":\"verified\",\"business\":\"hallu2995@gmail.com\",\"address_country\":\"United States\",\"address_city\":\"San Jose\",\"quantity\":\"1\",\"verify_sign\":\"A3TdzKO-zPSXR4KOxdGvaefGgP2vAw0HlGpTxS9eD8qRV.A.tJuje8CD\",\"payer_email\":\"vishal29051995@gmail.com\",\"txn_id\":\"60U33788V2090371G\",\"payment_type\":\"instant\",\"last_name\":\"Patel\",\"address_state\":\"CA\",\"receiver_email\":\"hallu2995@gmail.com\",\"payment_fee\":\"1.49\",\"shipping_discount\":\"0.00\",\"insurance_amount\":\"0.00\",\"receiver_id\":\"4RBHT2X4Q9QJA\",\"txn_type\":\"web_accept\",\"item_name\":\"Dancia\",\"discount\":\"0.00\",\"mc_currency\":\"USD\",\"item_number\":\"beatstore-237313506\",\"residence_country\":\"US\",\"test_ipn\":\"1\",\"shipping_method\":\"Default\",\"transaction_subject\":\"\",\"payment_gross\":\"40.87\",\"ipn_track_id\":\"caf29b081cf\"}', '2019-02-22 11:04:26', '2019-02-22 11:04:26', ''),
(29, '9', '26Y765473J998932M', 'USD', '40.87', 'Completed', '{\"mc_gross\":\"40.87\",\"protection_eligibility\":\"Eligible\",\"address_status\":\"confirmed\",\"payer_id\":\"7AX7ABGBZAYLN\",\"address_street\":\"1 Main St\",\"payment_date\":\"02:15:21 Feb 22, 2019 PST\",\"payment_status\":\"Completed\",\"charset\":\"windows-1252\",\"address_zip\":\"95131\",\"first_name\":\"Vishal\",\"mc_fee\":\"1.49\",\"address_country_code\":\"US\",\"address_name\":\"Vishal Patel\",\"notify_version\":\"3.9\",\"custom\":\"9\",\"payer_status\":\"verified\",\"business\":\"hallu2995@gmail.com\",\"address_country\":\"United States\",\"address_city\":\"San Jose\",\"quantity\":\"1\",\"verify_sign\":\"AU8yrwc-zM-s4kyAGaC59G7P-7CRAXwACaaN33YrC-QenyC5wikkBo0P\",\"payer_email\":\"vishal29051995@gmail.com\",\"txn_id\":\"26Y765473J998932M\",\"payment_type\":\"instant\",\"last_name\":\"Patel\",\"address_state\":\"CA\",\"receiver_email\":\"hallu2995@gmail.com\",\"payment_fee\":\"1.49\",\"shipping_discount\":\"0.00\",\"insurance_amount\":\"0.00\",\"receiver_id\":\"4RBHT2X4Q9QJA\",\"txn_type\":\"web_accept\",\"item_name\":\"Dancia\",\"discount\":\"0.00\",\"mc_currency\":\"USD\",\"item_number\":\"beatstore-782036460\",\"residence_country\":\"US\",\"test_ipn\":\"1\",\"shipping_method\":\"Default\",\"transaction_subject\":\"\",\"payment_gross\":\"40.87\",\"ipn_track_id\":\"c88f3d2c943ad\"}', '2019-02-22 11:15:32', '2019-02-22 11:15:32', ''),
(30, '9', '4FV845972U8680501', 'USD', '0.03', 'Completed', '{\"mc_gross\":\"0.03\",\"protection_eligibility\":\"Eligible\",\"address_status\":\"confirmed\",\"payer_id\":\"FM9EESPBC2H8U\",\"address_street\":\"No 1 Olufowobi Street, Lawanson\",\"payment_date\":\"02:03:02 Mar 11, 2019 PDT\",\"payment_status\":\"Completed\",\"charset\":\"windows-1252\",\"address_zip\":\"234001\",\"first_name\":\"Ejike\",\"mc_fee\":\"0.03\",\"address_country_code\":\"NG\",\"address_name\":\"Ejike Odoh\",\"notify_version\":\"3.9\",\"custom\":\"9\",\"payer_status\":\"verified\",\"business\":\"louis@amplifihub.com\",\"address_country\":\"Nigeria\",\"address_city\":\"Surulere\",\"quantity\":\"1\",\"verify_sign\":\"AvryybklrruQCv7dhIcvdKqpSOlbA.UVuZqvAYY1EoBDsH0fkC4LjG6F\",\"payer_email\":\"effkhayyondbeat@gmail.com\",\"txn_id\":\"4FV845972U8680501\",\"payment_type\":\"instant\",\"last_name\":\"Odoh\",\"address_state\":\"Lagos\",\"receiver_email\":\"louis@amplifihub.com\",\"payment_fee\":\"0.03\",\"shipping_discount\":\"0.00\",\"insurance_amount\":\"0.00\",\"receiver_id\":\"F3H439V3BJHCY\",\"txn_type\":\"web_accept\",\"item_name\":\"Love Life\",\"discount\":\"0.00\",\"mc_currency\":\"USD\",\"item_number\":\"beatstore-953314328\",\"residence_country\":\"NG\",\"shipping_method\":\"Default\",\"transaction_subject\":\"\",\"payment_gross\":\"0.03\",\"ipn_track_id\":\"9ecdb33e500fa\"}', '2019-03-11 10:03:17', '2019-03-11 10:03:17', ''),
(31, '', '6MP25333U8858534V', 'USD', '23.00', 'Completed', '{\"mc_gross\":\"23.00\",\"protection_eligibility\":\"Eligible\",\"address_status\":\"unconfirmed\",\"payer_id\":\"FM9EESPBC2H8U\",\"address_street\":\"No 1 Olufowobi Street, Lawanson\",\"payment_date\":\"04:03:41 Mar 18, 2019 PDT\",\"payment_status\":\"Completed\",\"charset\":\"windows-1252\",\"address_zip\":\"00234\",\"first_name\":\"Ejike\",\"mc_fee\":\"1.20\",\"address_country_code\":\"NG\",\"address_name\":\"Ejike Odoh\",\"notify_version\":\"3.9\",\"payer_status\":\"verified\",\"business\":\"louis@amplifihub.com\",\"address_country\":\"Nigeria\",\"address_city\":\"Surulere\",\"verify_sign\":\"ACvZdhqV2SqDOVs0rEhxS.Vyim90Aia1sPbfmSGsEOnCFK766e6wKhbS\",\"payer_email\":\"effkhayyondbeat@gmail.com\",\"memo\":\"For fiverr gig purchase\",\"txn_id\":\"6MP25333U8858534V\",\"payment_type\":\"instant\",\"last_name\":\"Odoh\",\"address_state\":\"Lagos\",\"receiver_email\":\"louis@amplifihub.com\",\"payment_fee\":\"1.20\",\"receiver_id\":\"F3H439V3BJHCY\",\"txn_type\":\"send_money\",\"mc_currency\":\"USD\",\"residence_country\":\"NG\",\"transaction_subject\":\"\",\"payment_gross\":\"23.00\",\"ipn_track_id\":\"bd2e537accef2\"}', '2019-03-18 12:03:52', '2019-03-18 12:03:52', ''),
(32, '', '0FJ30302N79863606', 'USD', '5.00', 'Completed', '{\"mc_gross\":\"5.00\",\"protection_eligibility\":\"Eligible\",\"address_status\":\"unconfirmed\",\"payer_id\":\"FM9EESPBC2H8U\",\"address_street\":\"No 1 Olufowobi Street, Lawanson\",\"payment_date\":\"04:27:56 Mar 18, 2019 PDT\",\"payment_status\":\"Completed\",\"charset\":\"windows-1252\",\"address_zip\":\"00234\",\"first_name\":\"Ejike\",\"mc_fee\":\"0.50\",\"address_country_code\":\"NG\",\"address_name\":\"Ejike Odoh\",\"notify_version\":\"3.9\",\"payer_status\":\"verified\",\"business\":\"louis@amplifihub.com\",\"address_country\":\"Nigeria\",\"address_city\":\"Surulere\",\"verify_sign\":\"AhZDWzJzu7WgIdxbPCnOKmB8uPwRA-HiK6aReLpGKbveWBaaLMeU1idP\",\"payer_email\":\"effkhayyondbeat@gmail.com\",\"txn_id\":\"0FJ30302N79863606\",\"payment_type\":\"instant\",\"last_name\":\"Odoh\",\"address_state\":\"Lagos\",\"receiver_email\":\"louis@amplifihub.com\",\"payment_fee\":\"0.50\",\"receiver_id\":\"F3H439V3BJHCY\",\"txn_type\":\"send_money\",\"mc_currency\":\"USD\",\"residence_country\":\"NG\",\"transaction_subject\":\"\",\"payment_gross\":\"5.00\",\"ipn_track_id\":\"e6a0d387b280\"}', '2019-03-18 12:28:07', '2019-03-18 12:28:07', ''),
(33, '633', '6LE88135A81468606', 'USD', '40.87', 'Completed', '{\"mc_gross\":\"40.87\",\"protection_eligibility\":\"Eligible\",\"address_status\":\"confirmed\",\"payer_id\":\"F727S2H8WUNH4\",\"address_street\":\"44 Border St, 505\",\"payment_date\":\"09:35:45 Mar 20, 2019 PDT\",\"payment_status\":\"Completed\",\"charset\":\"windows-1252\",\"address_zip\":\"02128\",\"first_name\":\"Masimba\",\"mc_fee\":\"1.89\",\"address_country_code\":\"US\",\"address_name\":\"MASIMBA DZANYA\",\"notify_version\":\"3.9\",\"custom\":\"633\",\"payer_status\":\"unverified\",\"business\":\"louis@amplifihub.com\",\"address_country\":\"United States\",\"address_city\":\"Boston\",\"quantity\":\"1\",\"verify_sign\":\"A8I-n2NE8rlylMnfiHfV0mxZHVRtAeDbp174RPT4KsKsyYi06QO4T3c-\",\"payer_email\":\"masimba15@gmail.com\",\"txn_id\":\"6LE88135A81468606\",\"payment_type\":\"instant\",\"last_name\":\"Dzanya\",\"address_state\":\"MA\",\"receiver_email\":\"louis@amplifihub.com\",\"payment_fee\":\"1.89\",\"shipping_discount\":\"0.00\",\"insurance_amount\":\"0.00\",\"receiver_id\":\"F3H439V3BJHCY\",\"txn_type\":\"web_accept\",\"item_name\":\"African Move\",\"discount\":\"0.00\",\"mc_currency\":\"USD\",\"item_number\":\"beatstore-244034200\",\"residence_country\":\"US\",\"shipping_method\":\"Default\",\"transaction_subject\":\"\",\"payment_gross\":\"40.87\",\"ipn_track_id\":\"4258ceef7217e\"}', '2019-03-20 17:35:57', '2019-03-20 17:35:57', ''),
(34, '', '8LX45100B37853407', 'USD', '14.00', 'Completed', '{\"mc_gross\":\"14.00\",\"protection_eligibility\":\"Eligible\",\"address_status\":\"unconfirmed\",\"payer_id\":\"FM9EESPBC2H8U\",\"address_street\":\"No 1 Olufowobi Street, Lawanson\",\"payment_date\":\"16:48:51 Mar 27, 2019 PDT\",\"payment_status\":\"Completed\",\"charset\":\"windows-1252\",\"address_zip\":\"00234\",\"first_name\":\"Ejike\",\"mc_fee\":\"0.85\",\"address_country_code\":\"NG\",\"address_name\":\"Ejike Odoh\",\"notify_version\":\"3.9\",\"payer_status\":\"verified\",\"business\":\"louis@amplifihub.com\",\"address_country\":\"Nigeria\",\"address_city\":\"Surulere\",\"verify_sign\":\"AO8AZXM1PwgejSg7A5.a6ehCwVkDA6MLfK.cqtfsyaTmRdRPww2TNNBv\",\"payer_email\":\"effkhayyondbeat@gmail.com\",\"txn_id\":\"8LX45100B37853407\",\"payment_type\":\"instant\",\"last_name\":\"Odoh\",\"address_state\":\"Lagos\",\"receiver_email\":\"louis@amplifihub.com\",\"payment_fee\":\"0.85\",\"receiver_id\":\"F3H439V3BJHCY\",\"txn_type\":\"send_money\",\"mc_currency\":\"USD\",\"residence_country\":\"NG\",\"transaction_subject\":\"\",\"payment_gross\":\"14.00\",\"ipn_track_id\":\"6a0582d977a84\"}', '2019-03-28 00:49:01', '2019-03-28 00:49:01', ''),
(35, '', '48G26746N8604042T', 'USD', '3.00', 'Completed', '{\"mc_gross\":\"3.00\",\"protection_eligibility\":\"Eligible\",\"address_status\":\"unconfirmed\",\"payer_id\":\"FM9EESPBC2H8U\",\"address_street\":\"No 1 Olufowobi Street, Lawanson\",\"payment_date\":\"16:50:25 Mar 27, 2019 PDT\",\"payment_status\":\"Completed\",\"charset\":\"windows-1252\",\"address_zip\":\"00234\",\"first_name\":\"Ejike\",\"mc_fee\":\"0.42\",\"address_country_code\":\"NG\",\"address_name\":\"Ejike Odoh\",\"notify_version\":\"3.9\",\"payer_status\":\"verified\",\"business\":\"louis@amplifihub.com\",\"address_country\":\"Nigeria\",\"address_city\":\"Surulere\",\"verify_sign\":\"ACFrzFDPA5dHy0dH4.cfncPiaFsEAPX3yqznfyz8wKZZF9Qrhi9zthAz\",\"payer_email\":\"effkhayyondbeat@gmail.com\",\"txn_id\":\"48G26746N8604042T\",\"payment_type\":\"instant\",\"last_name\":\"Odoh\",\"address_state\":\"Lagos\",\"receiver_email\":\"louis@amplifihub.com\",\"payment_fee\":\"0.42\",\"receiver_id\":\"F3H439V3BJHCY\",\"txn_type\":\"send_money\",\"mc_currency\":\"USD\",\"residence_country\":\"NG\",\"transaction_subject\":\"\",\"payment_gross\":\"3.00\",\"ipn_track_id\":\"3b39e349b96b5\"}', '2019-03-28 00:50:33', '2019-03-28 00:50:33', '');
INSERT INTO `payments` (`id`, `user_id`, `txn_id`, `amount`, `currency_code`, `payment_status`, `other`, `created`, `modified`, `licence_type`) VALUES
(36, '643', '04691302J28975618', 'USD', '27.25', 'Completed', '{\"mc_gross\":\"27.25\",\"protection_eligibility\":\"Eligible\",\"address_status\":\"confirmed\",\"payer_id\":\"X9QZ8XN5XVFXU\",\"address_street\":\"8406 Ash Garden Court\",\"payment_date\":\"16:50:02 Mar 28, 2019 PDT\",\"payment_status\":\"Completed\",\"charset\":\"windows-1252\",\"address_zip\":\"77083\",\"first_name\":\"Oge\",\"mc_fee\":\"1.36\",\"address_country_code\":\"US\",\"address_name\":\"Oge odogwu\",\"notify_version\":\"3.9\",\"custom\":\"643\",\"payer_status\":\"unverified\",\"business\":\"louis@amplifihub.com\",\"address_country\":\"United States\",\"address_city\":\"Houston\",\"quantity\":\"1\",\"verify_sign\":\"AXP4O3cIrSBVMs0w0oHn.hmn.PnoAheryJJL29x4VXb5sQ1pupm9wlQ2\",\"payer_email\":\"ogepresh99@gmail.com\",\"txn_id\":\"04691302J28975618\",\"payment_type\":\"instant\",\"last_name\":\"odogwu\",\"address_state\":\"TX\",\"receiver_email\":\"louis@amplifihub.com\",\"payment_fee\":\"1.36\",\"shipping_discount\":\"0.00\",\"insurance_amount\":\"0.00\",\"receiver_id\":\"F3H439V3BJHCY\",\"txn_type\":\"web_accept\",\"item_name\":\"ODYSSSEY\",\"discount\":\"0.00\",\"mc_currency\":\"USD\",\"item_number\":\"beatstore-960505374\",\"residence_country\":\"US\",\"shipping_method\":\"Default\",\"transaction_subject\":\"\",\"payment_gross\":\"27.25\",\"ipn_track_id\":\"34691a811af7a\"}', '2019-03-29 00:50:12', '2019-03-29 00:50:12', ''),
(37, '647', '20J93431PA385051Y', 'USD', '27.25', 'Completed', '{\"mc_gross\":\"27.25\",\"protection_eligibility\":\"Eligible\",\"address_status\":\"confirmed\",\"payer_id\":\"NCV4GNJSZL64N\",\"address_street\":\"415 E Grace Street\\r\\n502\",\"payment_date\":\"19:03:54 Apr 04, 2019 PDT\",\"payment_status\":\"Completed\",\"charset\":\"windows-1252\",\"address_zip\":\"23219\",\"first_name\":\"POMETSEY\",\"mc_fee\":\"1.36\",\"address_country_code\":\"US\",\"address_name\":\"Pometsey Emmanuel\",\"notify_version\":\"3.9\",\"custom\":\"647\",\"payer_status\":\"unverified\",\"business\":\"louis@amplifihub.com\",\"address_country\":\"United States\",\"address_city\":\"Richmond\",\"quantity\":\"1\",\"verify_sign\":\"A6TvbBT0y-4zNgxB6lPrfFdQ24Y0AuoT7WyMgWAV1CP0JXFuZdIc3KCi\",\"payer_email\":\"elifinest@gmail.com\",\"txn_id\":\"20J93431PA385051Y\",\"payment_type\":\"instant\",\"payer_business_name\":\"Jadu and Company\",\"last_name\":\"POMETSEY\",\"address_state\":\"VA\",\"receiver_email\":\"louis@amplifihub.com\",\"payment_fee\":\"1.36\",\"shipping_discount\":\"0.00\",\"insurance_amount\":\"0.00\",\"receiver_id\":\"F3H439V3BJHCY\",\"txn_type\":\"web_accept\",\"item_name\":\"Rainman\",\"discount\":\"0.00\",\"mc_currency\":\"USD\",\"item_number\":\"beatstore-903169493\",\"residence_country\":\"US\",\"shipping_method\":\"Default\",\"transaction_subject\":\"\",\"payment_gross\":\"27.25\",\"ipn_track_id\":\"2b6519f36f4c8\"}', '2019-04-05 03:04:04', '2019-04-05 03:04:04', ''),
(38, '492', '1DA75324HA4867835', '', '', '', '{\"txn_type\":\"new_case\",\"payment_date\":\"21:15:50 Apr 12, 2019 PDT\",\"case_id\":\"PP-D-28535613\",\"case_type\":\"complaint\",\"business\":\"louis@amplifihub.com\",\"verify_sign\":\"AGG6m.GJ5xjGkCqg9utf12XDTrSFA8yVdbHVGHoxucG.s5veYKCWdMNz\",\"payer_email\":\"kerestephane@gmail.com\",\"txn_id\":\"1DA75324HA4867835\",\"case_creation_date\":\"21:30:12 Apr 12, 2019 PDT\",\"receiver_email\":\"louis@amplifihub.com\",\"payer_id\":\"N7SCW6TZYHZWC\",\"receiver_id\":\"F3H439V3BJHCY\",\"reason_code\":\"unauthorized_claim\",\"custom\":\"492\",\"charset\":\"windows-1252\",\"notify_version\":\"3.9\",\"ipn_track_id\":\"6d833ce1d921a\"}', '2019-04-13 05:15:58', '2019-04-13 05:31:14', ''),
(39, '492', '5KM97086LT759125P', 'USD', '78.25', 'Canceled_Reversal', '{\"mc_gross\":\"78.25\",\"protection_eligibility\":\"Eligible\",\"payer_id\":\"N7SCW6TZYHZWC\",\"address_street\":\"11339 Lippelman Road\\r\\n317\",\"payment_date\":\"21:30:36 Apr 12, 2019 PDT\",\"payment_status\":\"Canceled_Reversal\",\"charset\":\"windows-1252\",\"address_zip\":\"45246\",\"first_name\":\"Wendyam\",\"mc_fee\":\"3.49\",\"address_country_code\":\"US\",\"address_name\":\"L\'Amoureux docile\",\"notify_version\":\"3.9\",\"reason_code\":\"other\",\"custom\":\"492\",\"business\":\"louis@amplifihub.com\",\"address_country\":\"United States\",\"address_city\":\"Cincinnati\",\"verify_sign\":\"A1mBBaPI0wXtJi1S4dsfiKCTQsHjAqwPkgr5gmFs9YReqyg4Z35pmamR\",\"payer_email\":\"kerestephane@gmail.com\",\"parent_txn_id\":\"1DA75324HA4867835\",\"txn_id\":\"5KM97086LT759125P\",\"payment_type\":\"instant\",\"payer_business_name\":\"L\'Amoureux docile\",\"last_name\":\"Kere\",\"address_state\":\"OH\",\"receiver_email\":\"louis@amplifihub.com\",\"payment_fee\":\"3.49\",\"shipping_discount\":\"0.00\",\"receiver_id\":\"F3H439V3BJHCY\",\"insurance_amount\":\"0.00\",\"item_name\":\"ODYSSSEY\",\"discount\":\"0.00\",\"mc_currency\":\"USD\",\"item_number\":\"beatstore-265576853\",\"residence_country\":\"US\",\"handling_amount\":\"0.00\",\"shipping_method\":\"Default\",\"transaction_subject\":\"\",\"payment_gross\":\"78.25\",\"shipping\":\"0.00\",\"ipn_track_id\":\"5e86bec03601d\"}', '2019-04-13 05:30:47', '2019-04-13 09:30:33', ''),
(40, '767', '0JM02661PK116282H', 'USD', '27.25', 'Completed', '{\"mc_gross\":\"27.25\",\"protection_eligibility\":\"Eligible\",\"address_status\":\"confirmed\",\"payer_id\":\"F78Z7NQ6P8YA6\",\"address_street\":\"93 Mullaharlin Park Dundalk\\r\\nDublin Road\",\"payment_date\":\"02:10:26 Jun 27, 2019 PDT\",\"payment_status\":\"Completed\",\"charset\":\"windows-1252\",\"address_zip\":\"A91RKP7\",\"first_name\":\"Eghosa Harrison\",\"mc_fee\":\"1.36\",\"address_country_code\":\"IE\",\"address_name\":\"Harrison Eghosa Igharo\",\"notify_version\":\"3.9\",\"custom\":\"767\",\"payer_status\":\"verified\",\"business\":\"louis@amplifihub.com\",\"address_country\":\"Ireland\",\"address_city\":\"Dundalk\",\"quantity\":\"1\",\"verify_sign\":\"A4tzfZo57MB7JnNpI7b-lOTAqr.YAiLa5JYPFTMnAhsJDXS-QP9FAdBL\",\"payer_email\":\"eghosaharrison@gmail.com\",\"txn_id\":\"0JM02661PK116282H\",\"payment_type\":\"instant\",\"last_name\":\"Igharo\",\"address_state\":\"93 Mullaharlin Park Dundalk, Dublin Road\",\"receiver_email\":\"louis@amplifihub.com\",\"payment_fee\":\"1.36\",\"shipping_discount\":\"0.00\",\"insurance_amount\":\"0.00\",\"receiver_id\":\"F3H439V3BJHCY\",\"txn_type\":\"web_accept\",\"item_name\":\"ODYSSSEY\",\"discount\":\"0.00\",\"mc_currency\":\"USD\",\"item_number\":\"beatstore-730431664\",\"residence_country\":\"IE\",\"shipping_method\":\"Default\",\"transaction_subject\":\"\",\"payment_gross\":\"27.25\",\"ipn_track_id\":\"273f1907accb\"}', '2019-06-27 10:10:39', '2019-06-27 10:10:39', ''),
(41, '763', '3EY67365A93646717', 'USD', '13.62', 'Completed', '{\"mc_gross\":\"13.62\",\"protection_eligibility\":\"Eligible\",\"address_status\":\"confirmed\",\"payer_id\":\"9S3YQCFL88J68\",\"address_street\":\"2509 Sweeney Ln\",\"payment_date\":\"09:38:27 Jul 04, 2019 PDT\",\"payment_status\":\"Completed\",\"charset\":\"windows-1252\",\"address_zip\":\"78723\",\"first_name\":\"Ronnie\",\"mc_fee\":\"0.83\",\"address_country_code\":\"US\",\"address_name\":\"Ronnie Lewis\",\"notify_version\":\"3.9\",\"custom\":\"763\",\"payer_status\":\"unverified\",\"business\":\"louis@amplifihub.com\",\"address_country\":\"United States\",\"address_city\":\"AUSTIN\",\"quantity\":\"1\",\"verify_sign\":\"ADbzPamraUW7CmuQWSW7ydDUB2oPAbi87F9fvKrGuT4AiidLq5iw5f1p\",\"payer_email\":\"ronnielewis2285@gmail.com\",\"txn_id\":\"3EY67365A93646717\",\"payment_type\":\"instant\",\"last_name\":\"Lewis\",\"address_state\":\"TX\",\"receiver_email\":\"louis@amplifihub.com\",\"payment_fee\":\"0.83\",\"shipping_discount\":\"0.00\",\"insurance_amount\":\"0.00\",\"receiver_id\":\"F3H439V3BJHCY\",\"txn_type\":\"web_accept\",\"item_name\":\"Chandler\",\"discount\":\"0.00\",\"mc_currency\":\"USD\",\"item_number\":\"beatstore-631721211\",\"residence_country\":\"US\",\"shipping_method\":\"Default\",\"transaction_subject\":\"\",\"payment_gross\":\"13.62\",\"ipn_track_id\":\"d749c5202e80e\"}', '2019-07-04 17:38:41', '2019-07-04 17:38:41', ''),
(42, '782', '0WK59839HU570174Y', 'USD', '1.00', 'Completed', '{\"mc_gross\":\"1.00\",\"protection_eligibility\":\"Eligible\",\"address_status\":\"confirmed\",\"payer_id\":\"ZLCZ5BH567YQE\",\"address_street\":\"FLAT 46\\r\\nBLOCK 6 CLANNY HOUSE PEACOCK STREET WEST\",\"payment_date\":\"14:46:27 Jul 19, 2019 PDT\",\"payment_status\":\"Completed\",\"charset\":\"windows-1252\",\"address_zip\":\"SR46US\",\"first_name\":\"Sunday\",\"mc_fee\":\"0.34\",\"address_country_code\":\"GB\",\"address_name\":\"Sunday Biggs\",\"notify_version\":\"3.9\",\"custom\":\"782\",\"payer_status\":\"verified\",\"business\":\"louis@amplifihub.com\",\"address_country\":\"United Kingdom\",\"address_city\":\"Sunderland\",\"quantity\":\"1\",\"verify_sign\":\"AIls.0ayavTd.bLosRxHvtPQWk8-A5hgB0Xt5uyMv0YcdG-mMK2qg-y1\",\"payer_email\":\"jenrids123@gmail.com\",\"txn_id\":\"0WK59839HU570174Y\",\"payment_type\":\"instant\",\"last_name\":\"Biggs\",\"address_state\":\"\",\"receiver_email\":\"louis@amplifihub.com\",\"payment_fee\":\"0.34\",\"shipping_discount\":\"0.00\",\"insurance_amount\":\"0.00\",\"receiver_id\":\"F3H439V3BJHCY\",\"txn_type\":\"web_accept\",\"item_name\":\"Uplifted\",\"discount\":\"0.00\",\"mc_currency\":\"USD\",\"item_number\":\"beatstore-788002043\",\"residence_country\":\"GB\",\"shipping_method\":\"Default\",\"transaction_subject\":\"\",\"payment_gross\":\"1.00\",\"ipn_track_id\":\"ae96d82a74055\"}', '2019-07-19 22:46:35', '2019-07-19 22:46:35', ''),
(43, '', '2EA76943L6577840J', 'USD', '276.00', 'Completed', '{\"transaction_subject\":\"\",\"txn_type\":\"web_accept\",\"payment_date\":\"11:49:35 Jul 24, 2019 PDT\",\"last_name\":\"Gilad\",\"residence_country\":\"US\",\"item_name\":\"\",\"payment_gross\":\"276.00\",\"mc_currency\":\"USD\",\"business\":\"louis@amplifihub.com\",\"payment_type\":\"instant\",\"protection_eligibility\":\"Eligible\",\"verify_sign\":\"AdkwsuLlWpQ-yZRZjl.W9J6jbvvYA.MDcbnM-sj50NzK4yEsd2klktnK\",\"payer_status\":\"verified\",\"tax\":\"0.00\",\"payer_email\":\"shachar@soundbetter.com\",\"txn_id\":\"2EA76943L6577840J\",\"quantity\":\"0\",\"receiver_email\":\"louis@amplifihub.com\",\"first_name\":\"Shachar\",\"payer_id\":\"U53M2HDCJRLLE\",\"receiver_id\":\"F3H439V3BJHCY\",\"memo\":\"Job #243442. Client Yuki - Provider SonarMixes\",\"item_number\":\"\",\"payer_business_name\":\"SoundBetter, Inc.\",\"payment_status\":\"Completed\",\"mc_gross\":\"276.00\",\"custom\":\"\",\"charset\":\"windows-1252\",\"notify_version\":\"3.9\",\"ipn_track_id\":\"bffa9d3789835\"}', '2019-07-24 19:49:44', '2019-07-24 19:49:44', '');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `amount` int(50) DEFAULT NULL,
  `status` varchar(200) NOT NULL,
  `message` varchar(255) NOT NULL,
  `plan_code` varchar(255) NOT NULL,
  `created` varchar(255) DEFAULT NULL,
  `modified` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `name`, `amount`, `status`, `message`, `plan_code`, `created`, `modified`) VALUES
(20, 'Producer Silver', 500, '1', 'Plan created', 'PLN_x4pycaeyn4hp7lo', '2018-01-05T12:22:06.494Z', '2018-01-05T12:22:06.494Z'),
(21, 'Producer Gold', 1000, '1', 'Plan created', 'PLN_1aolpmm4rlzsv19', '2018-01-05T12:31:05.984Z', '2018-01-05T12:31:05.984Z'),
(22, 'Producer Platinum', 5000, '1', 'Plan created', 'PLN_59gb0gsmu5ace70', '2018-01-05T12:32:44.684Z', '2018-01-05T12:32:44.684Z'),
(23, 'Song Writer', 500, '1', 'Plan created', 'PLN_hmvrbggaw811fzb', '2018-01-05T12:46:44.410Z', '2018-01-05T12:46:44.410Z'),
(24, 'Video Director', 500, '1', 'Plan created', 'PLN_1zavvhynnox5s8n', '2018-01-05T12:47:15.607Z', '2018-01-05T12:47:15.607Z'),
(25, 'Artist', 500, '1', 'Plan created', 'PLN_eatcvjb7yrenzej', '2018-01-05T12:48:53.425Z', '2018-01-05T12:48:53.425Z');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rater` int(11) NOT NULL,
  `rating` int(3) NOT NULL,
  `type` varchar(4) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `user_id`, `rater`, `rating`, `type`, `created`, `modified`) VALUES
(1, 2, 2, 5, 'mm', '2018-05-17 12:17:32', '2018-05-17 12:17:32'),
(2, 2, 9, 5, 'mm', '2018-05-17 13:03:19', '2018-05-17 13:03:19'),
(3, 22, 22, 5, 'ac', '2018-05-21 12:25:55', '2018-05-21 12:25:55'),
(4, 22, 1, 5, 'ac', '2018-05-24 22:25:59', '2018-05-24 22:25:59'),
(5, 3, 3, 3, 'ac', '2018-05-26 09:35:26', '2018-05-26 09:35:26'),
(6, 59, 56, 5, 'ac', '2018-06-05 00:11:30', '2018-06-05 00:11:30'),
(7, 2, 1, 5, 'mm', '2018-08-09 19:44:20', '2018-08-09 19:44:20'),
(8, 2, 9, 5, 'ac', '2018-08-09 23:18:05', '2018-08-09 23:18:05'),
(9, 74, 162, 5, 'vd', '2018-10-09 05:05:34', '2018-10-09 05:05:34'),
(10, 2, 162, 1, 'ac', '2018-11-10 02:56:40', '2018-11-10 02:56:40'),
(11, 74, 354, 2, 'vd', '2018-12-24 13:54:19', '2018-12-24 13:54:19'),
(12, 3, 354, 5, 'ac', '2019-01-07 16:23:15', '2019-01-07 16:23:15'),
(13, 3, 2, 5, 'ac', '2019-01-16 08:36:25', '2019-01-16 08:36:25'),
(14, 86, 2, 5, 'ac', '2019-01-16 16:51:23', '2019-01-16 16:51:23'),
(15, 4, 2, 5, 'ac', '2019-01-17 19:27:35', '2019-01-17 19:27:35'),
(16, 2, 1, 4, 'vd', '2019-01-17 19:51:01', '2019-01-17 19:51:01'),
(17, 2, 1, 5, 'ac', '2019-01-17 22:59:56', '2019-01-17 22:59:56'),
(18, 2, 2, 5, 'ac', '2019-01-18 00:04:32', '2019-01-18 00:04:32'),
(19, 1, 2, 5, 'ac', '2019-01-19 20:29:24', '2019-01-19 20:29:24'),
(21, 2, 408, 5, 'ac', '2019-01-22 23:59:03', '2019-01-22 23:59:03'),
(22, 74, 420, 5, 'vd', '2019-01-25 07:05:24', '2019-01-25 07:05:24'),
(26, 2, 409, 5, 'ac', '2019-01-28 18:36:43', '2019-01-28 18:36:43'),
(27, 8, 418, 5, 'ac', '2019-03-04 10:31:03', '2019-03-04 10:31:03');

-- --------------------------------------------------------

--
-- Table structure for table `referrals`
--

CREATE TABLE `referrals` (
  `id` int(11) NOT NULL,
  `referral_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `referrals`
--

INSERT INTO `referrals` (`id`, `referral_id`, `user_id`, `created`, `modified`) VALUES
(1, 2, 161, '2018-10-06 17:51:07', '2018-10-06 17:51:07'),
(2, 2, 395, '2019-01-20 10:17:19', '2019-01-20 10:17:19'),
(3, 2, 403, '2019-01-20 10:55:57', '2019-01-20 10:55:57'),
(4, 9, 404, '2019-01-20 13:28:48', '2019-01-20 13:28:48'),
(5, 9, 405, '2019-01-20 13:33:03', '2019-01-20 13:33:03'),
(6, 2, 408, '2019-01-20 16:30:37', '2019-01-20 16:30:37'),
(7, 149, 498, '2019-02-27 18:20:33', '2019-02-27 18:20:33'),
(8, 149, 500, '2019-02-27 19:46:09', '2019-02-27 19:46:09'),
(9, 149, 503, '2019-02-27 21:16:17', '2019-02-27 21:16:17'),
(10, 149, 504, '2019-02-27 21:30:51', '2019-02-27 21:30:51'),
(11, 149, 505, '2019-02-27 21:30:56', '2019-02-27 21:30:56'),
(12, 149, 506, '2019-02-27 21:38:52', '2019-02-27 21:38:52'),
(13, 149, 507, '2019-02-28 03:54:18', '2019-02-28 03:54:18'),
(14, 149, 619, '2019-03-14 07:00:58', '2019-03-14 07:00:58'),
(15, 149, 628, '2019-03-19 08:33:36', '2019-03-19 08:33:36');

-- --------------------------------------------------------

--
-- Table structure for table `songwriters`
--

CREATE TABLE `songwriters` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `featured` int(11) NOT NULL DEFAULT '0',
  `sample_song` varchar(500) NOT NULL,
  `sample_song_dir` varchar(50) NOT NULL,
  `sample_song_type` varchar(50) NOT NULL,
  `sample_song_size` varchar(50) NOT NULL,
  `extra_services` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `songwriters`
--

INSERT INTO `songwriters` (`id`, `user_id`, `featured`, `sample_song`, `sample_song_dir`, `sample_song_type`, `sample_song_size`, `extra_services`, `created`, `modified`) VALUES
(1, 2, 1, 'c2891e22378c1ba64a713936cb5ca814_1548501209.mp3', 'webroot/files/Songwriters/sample_song/', 'audio/mp3', '7474626', 'I will write some pro stuff for you Yes!', '2018-07-18 17:16:51', '2019-01-17 19:30:27'),
(2, 86, 1, 'fading2017-12-27(1).1532002916.mp3', 'webroot/files/Songwriters/sample_song/', 'audio/mp3', '662256', 'back-up Singing, Jingles, song writing etc', '2018-07-19 10:59:54', '2019-01-18 19:59:45'),
(3, 9, 0, '35a5a0a60740231281c742eadcedce6d_1548501262.mp3', 'webroot/files/Songwriters/sample_song/', 'audio/mpeg', '5024543', 'I will professionally make your sound', '2018-08-09 23:16:37', '2018-08-09 23:16:37');

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `id` int(10) UNSIGNED NOT NULL,
  `trending` int(11) NOT NULL DEFAULT '0',
  `play_count` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `music_genre` int(10) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `bpm` int(10) NOT NULL,
  `length` int(10) NOT NULL,
  `lease_price` varchar(50) DEFAULT NULL,
  `premium_price` varchar(200) DEFAULT NULL,
  `exclusive_price` varchar(200) DEFAULT NULL,
  `sample_name` varchar(255) NOT NULL,
  `sample_path` varchar(255) NOT NULL,
  `sample_size` varchar(255) NOT NULL,
  `sample_type` varchar(255) NOT NULL,
  `lease_name` varchar(255) DEFAULT NULL,
  `lease_path` varchar(255) DEFAULT NULL,
  `lease_size` int(11) DEFAULT NULL,
  `lease_type` varchar(255) DEFAULT NULL,
  `lease_access` tinyint(1) DEFAULT NULL,
  `premium_name` varchar(200) DEFAULT NULL,
  `premium_path` varchar(200) DEFAULT NULL,
  `premium_size` varchar(200) DEFAULT NULL,
  `premium_type` varchar(200) DEFAULT NULL,
  `exclusive_name` varchar(200) DEFAULT NULL,
  `exclusive_path` varchar(200) DEFAULT NULL,
  `exclusive_size` varchar(200) DEFAULT NULL,
  `exclusive_type` varchar(200) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `watermark` varchar(255) DEFAULT NULL,
  `promoted` enum('yes','disabled') DEFAULT 'disabled',
  `tnx_reference` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `trending`, `play_count`, `user_id`, `cover`, `music_genre`, `name`, `bpm`, `length`, `lease_price`, `premium_price`, `exclusive_price`, `sample_name`, `sample_path`, `sample_size`, `sample_type`, `lease_name`, `lease_path`, `lease_size`, `lease_type`, `lease_access`, `premium_name`, `premium_path`, `premium_size`, `premium_type`, `exclusive_name`, `exclusive_path`, `exclusive_size`, `exclusive_type`, `created`, `modified`, `discount`, `watermark`, `promoted`, `tnx_reference`) VALUES
(1, 0, 3871, 2, 'adekunle.1535531690.jpg', 6, 'Love Life', 114, 2, '5000', '9000', '', '03b6792b97efe6aeedcf8dbf97bb5903_1552857313.mp3', 'Stores/sample_name', '1874424', 'audio/mpeg', '156smp.1526557483.mp3', 'webroot/files/Stores/lease_name/', 1874424, 'audio/mp3', 0, '156smp.mp3', 'webroot/files/Stores/premium_name/', '1874424', 'audio/mp3', NULL, NULL, NULL, NULL, '2018-05-17 11:44:43', '2019-09-21 21:56:20', NULL, NULL, 'yes', 'membership-265993148'),
(2, 0, 1381, 2, 'timaya-e1466701691669.1535531726.jpg', 15, 'Dance Go!', 125, 2, '5000', '10000', '60000', 'e83eff19ef46797a87b1da3afc49b2e6_1552857433.mp3', 'Stores/sample_name', '1912860', 'audio/mpeg', '207smp.1526557866.mp3', 'webroot/files/Stores/lease_name/', 1912860, 'audio/mp3', 0, '207smp.mp3', 'webroot/files/Stores/premium_name/', '1912860', 'audio/mp3', 'e83bd56ab2c5d05b0f1b298afa252905_1548509573.wav', 'webroot/files/Stores/exclusive_name/', '40026910', 'audio/wav', '2018-05-17 11:51:05', '2019-03-17 22:17:13', NULL, NULL, 'yes', 'membership-265993148'),
(4, 0, 1071, 2, 'dremo.1535531850.jpg', 8, 'How We Do', 114, 3, '6000', '10000', '', 'da1b48701afe40476099dc197f7bfa8b_1552857503.mp3', 'Stores/sample_name', '1670234', 'audio/mpeg', '225smp.1526558297.mp3', 'webroot/files/Stores/lease_name/', 1670234, 'audio/mp3', 0, '225smp.mp3', 'webroot/files/Stores/premium_name/', '1670234', 'audio/mp3', NULL, NULL, NULL, NULL, '2018-05-17 11:58:16', '2019-03-17 22:18:23', NULL, NULL, 'yes', 'membership-265993148'),
(5, 0, 25, 2, '5ca776dd53b050ad7180fce67080feb5_1548502980.jpg', 16, 'Bad Guy', 105, 2, '6000', '10000', '', 'f81b2040bce141d7bcf39fc8af6fc81d_1552857567.mp3', 'Stores/sample_name', '1809849', 'audio/mpeg', '165smp.1526558463.mp3', 'webroot/files/Stores/lease_name/', 1809849, 'audio/mp3', 0, '165smp.mp3', 'webroot/files/Stores/premium_name/', '1809849', 'audio/mp3', NULL, NULL, NULL, NULL, '2018-05-17 12:01:03', '2019-03-17 22:19:27', NULL, NULL, '', 'membership-265993148'),
(7, 0, 80, 2, 'davido-rehearsal-10-740x431.1535531999.jpg', 11, 'Good Guy', 110, 3, '7000', '15000', '', '8d31a7de31893ecb9574075bb715f167_1552858089.mp3', 'Stores/sample_name', '2123511', 'audio/mpeg', '190smp.1526559624.mp3', 'webroot/files/Stores/lease_name/', 2123511, 'audio/mpeg', 0, '190smp.mp3', 'webroot/files/Stores/premium_name/', '2123511', 'audio/mpeg', NULL, NULL, NULL, NULL, '2018-05-17 12:20:23', '2019-08-14 00:07:27', NULL, NULL, 'yes', 'membership-265993148'),
(8, 0, 1222, 2, 'femi.1535532040.jpg', 6, 'Dancia', 117, 2, '7000', '15000', '', '35ef9e240f628dfcada014fcb84d0190_1552857981.mp3', 'Stores/sample_name', '2193101', 'audio/mpeg', '194smp.1526559788.mp3', 'webroot/files/Stores/lease_name/', 2193101, 'audio/mpeg', 0, '194smp.mp3', 'webroot/files/Stores/premium_name/', '2193101', 'audio/mpeg', NULL, NULL, NULL, NULL, '2018-05-17 12:23:07', '2019-03-17 22:26:21', NULL, NULL, 'disabled', 'membership-265993148'),
(11, 0, 83, 2, 'kiss-daniel.1535532100.jpg', 7, 'Naija Loving', 115, 3, '5000', '7000', '', '8703572e8dcadda15dd601370eece162_1552857715.mp3', 'Stores/sample_name', '1692177', 'audio/mpeg', '235smp.1526560400.mp3', 'webroot/files/Stores/lease_name/', 1692177, 'audio/mpeg', 0, '235smp.mp3', 'webroot/files/Stores/premium_name/', '1692177', 'audio/mpeg', NULL, NULL, NULL, NULL, '2018-05-17 12:33:19', '2019-08-12 23:23:24', NULL, NULL, 'yes', 'membership-265993148'),
(12, 0, 29, 2, 'lil-kesh.1535532115.jpg', 11, 'Just Do', 118, 2, '7000', '15000', '', 'c2ea80b994acb64a5aaedc87e9d6609a_1552857645.mp3', 'Stores/sample_name', '1809415', 'audio/mpeg', '189smp.1526560668.mp3', 'webroot/files/Stores/lease_name/', 1809415, 'audio/mpeg', 0, '189smp.mp3', 'webroot/files/Stores/premium_name/', '1809415', 'audio/mpeg', NULL, NULL, NULL, NULL, '2018-05-17 12:37:47', '2019-03-17 22:20:45', NULL, NULL, '', 'membership-265993148'),
(13, 0, 14, 2, 'femi.1535532301.jpg', 14, 'Old School Galala', 110, 3, '7000', '15000', '', '4439d0d263a5486dcfc2d8d9af33c9df_1552858183.mp3', 'Stores/sample_name', '1708478', 'audio/mpeg', '247smp.1526560953.mp3', 'webroot/files/Stores/lease_name/', 1708478, 'audio/mpeg', 0, '247smp.mp3', 'webroot/files/Stores/premium_name/', '1708478', 'audio/mpeg', NULL, NULL, NULL, NULL, '2018-05-17 12:42:33', '2019-03-17 22:29:43', NULL, NULL, 'disabled', 'membership-265993148'),
(14, 1, 1949, 36, 'odyssey.1527244574.jpg', 11, 'ODYSSSEY', 103, 3, '10000', '', '30000', '44585f512c11550d1ebb481d70a49ed7_1552859287.mp3', 'Stores/sample_name', '3793050', 'audio/mpeg', 'f3674706975b8be1647c0ae663524d1c_1548505519.mp3', 'webroot/files/Stores/lease_name/', 3793050, 'audio/mp3', 0, NULL, NULL, NULL, NULL, '7b1666fa3668e83f607d1b32acb29640_1548509074.wav', 'webroot/files/Stores/exclusive_name/', '33444430', 'audio/wav', '2018-05-25 10:35:43', '2019-09-08 23:04:04', NULL, NULL, 'yes', 'membership-605018386'),
(15, 0, 1245, 36, '2accc1ee97d8409a763d282e958213ea_1548503111.jpg', 11, 'KRYPT', 103, 5, '10000', '', '25000', 'b3275ed405297f9518d9420f3d7c3d30_1552859154.mp3', 'Stores/sample_name', '6199450', 'audio/mpeg', 'a73b964f385ad8f74f47ba115f3d1fb2_1548505564.mp3', 'webroot/files/Stores/lease_name/', 6199450, 'audio/mp3', 0, NULL, NULL, NULL, NULL, 'c97f1f1e8c22be866be6732e51b1bdf3_1548509192.wav', 'webroot/files/Stores/exclusive_name/', '54729726', 'audio/wav', '2018-05-25 11:21:24', '2019-03-17 22:45:54', NULL, NULL, 'yes', 'membership-605018386'),
(16, 0, 28, 46, 'fb_img_1524161564004.1527935450.jpg', 11, 'Monkey swing ', 120, 3, '6000', '', '', 'cfa5ea869dc98e103c08799517f4d066_1552860621.mp3', 'Stores/sample_name', '5887339', 'audio/mpeg', '7ceffc0c4ca0248bfb7e44aeae8fcaf9_1548505596.mp3', 'webroot/files/Stores/lease_name/', 5887339, 'audio/mp3', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-06-02 10:30:47', '2019-03-17 23:10:21', NULL, NULL, '', 'membership-809344488'),
(17, 0, 29, 46, 'fb_img_1527361116951.1527937867.jpg', 10, 'Monkey Junk', 92, 3, '6000', '', '', '8826a7d1191611dc87098105e06644a6_1552860749.mp3', 'Stores/sample_name', '5929760', 'audio/mpeg', '852ab0ce512b0f5aef92e9b808e06190_1548505622.mp3', 'webroot/files/Stores/lease_name/', 5929760, 'audio/mp3', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-06-02 11:11:01', '2019-03-17 23:12:29', NULL, NULL, '', 'membership-809344488'),
(29, 0, 12, 15, 'img-20180524-wa0003_1.1528565008.jpg', 13, 'Its nothing', 110, 3, '6000', '', '', 'be55488a42529cc3552c9c2f53351116_1548508235.mp3', 'webroot/files/Stores/sample_name/', '541744', 'application/octet-stream', 'db7d2318159f4d37101a69c18906cee1_1548506166.mp3', 'webroot/files/Stores/lease_name/', 3257773, 'application/octet-stream', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-06-09 17:23:25', '2018-08-09 13:01:01', NULL, NULL, 'disabled', 'membership-865309221'),
(32, 0, 47, 46, 'fb_img_1524161564004.1528673032.jpg', 11, 'Monkey Beat ONDOT ', 116, 3, '6000', '', '', '320fcf9f702d76779d35dc7a50204ba8_1552861566.mp3', 'Stores/sample_name', '6106036', 'audio/mpeg', '8ec091079d6431c2449760b777d6167a_1548506239.mp3', 'webroot/files/Stores/lease_name/', 6106036, 'audio/mp3', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-06-10 23:23:45', '2019-03-17 23:26:06', NULL, NULL, '', 'membership-809344488'),
(49, 0, 38, 46, 'img-20180311-wa0008.1530332784.jpg', 6, 'Monkey Beat AfricaAfro ', 107, 3, '6000', '', '', '9c403b3d4fb7ca045bcd72f3889c1b01_1552861279.mp3', 'Stores/sample_name', '2931217', 'audio/mpeg', 'b14918a033744208f8f957b95f8ea634_1548506468.mp3', 'webroot/files/Stores/lease_name/', 2931217, 'audio/mp3', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-06-30 04:26:22', '2019-03-17 23:21:19', NULL, NULL, '', 'membership-809344488'),
(52, 0, 17, 92, '76562dae6312cf16a3bbd8377ae40c4c_1548503211.jpg', 30, 'Slow Attacks', 128, 226, '6000', '', '12000', '0417dbae58b0e53dd32fba089ae84c98_1548507914.mp3', 'webroot/files/Stores/sample_name/', '506275', 'audio/mp3', '78c327d55560ded7d39f5a3c20cdae3f_1548506495.mp3', 'webroot/files/Stores/lease_name/', 3605024, 'audio/mp3', 0, NULL, NULL, NULL, NULL, 'ede20eea4ff5cfc31ae9973b58d49e76_1548509037.wav', 'webroot/files/Stores/exclusive_name/', '39735036', 'audio/wav', '2018-07-22 18:04:16', '2018-07-22 18:04:16', NULL, NULL, 'disabled', 'manual-membership'),
(53, 0, 13, 92, '2af40c18a97f3da6ea8bd3ac8028bca6_1548503284.jpg', 30, 'Slow Attacks', 128, 226, '6000', '', '12000', '0417dbae58b0e53dd32fba089ae84c98_1548507914.mp3', 'webroot/files/Stores/sample_name/', '506275', 'audio/mp3', 'bfd8b3da369fcf3dc7107d69305bd16c_1548506518.mp3', 'webroot/files/Stores/lease_name/', 3605024, 'audio/mp3', 0, NULL, NULL, NULL, NULL, 'ede20eea4ff5cfc31ae9973b58d49e76_1548509037.wav', 'webroot/files/Stores/exclusive_name/', '39735036', 'audio/wav', '2018-07-22 18:45:24', '2018-07-22 18:45:24', NULL, NULL, 'disabled', 'manual-membership'),
(56, 0, 6, 93, 'bde0911cfd81258e4fade1760dd8551f_1548503355.jpg', 30, 'Sly Guy', 155, 247, '7000', '', '0', '7f373d88a99e8d7ce21ecafe83757176_1548507888.mp3', 'webroot/files/Stores/sample_name/', '2362584', 'audio/mpeg', '967311ee7a4f1ed4bbad76b1e95a708d_1548506546.mp3', 'webroot/files/Stores/lease_name/', 4956034, 'audio/mpeg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-07-25 13:22:44', '2018-07-25 13:44:50', NULL, NULL, 'disabled', 'membership-310098306'),
(58, 0, 91, 82, 'annabelle-doll.1532680315.jpg', 30, 'Annabelle', 105, 220, '5000', '10000', '0', 'Annabelle.mp3', 'webroot/files/Stores/sample_name/', '4402856', 'audio/mpeg', 'annabelle.1532680310.mp3', 'webroot/files/Stores/lease_name/', 4402856, 'audio/mpeg', 0, 'Annabelle.mp3', 'webroot/files/Stores/premium_name/', '4402856', 'audio/mpeg', NULL, NULL, NULL, NULL, '2018-07-27 08:31:49', '2019-08-12 23:25:03', NULL, NULL, 'yes', 'manual-membership'),
(59, 0, 68, 82, 'img-20170923-wa0001.1532681456.jpg', 6, 'Miles Away', 105, 223, '5000', '10000', '20000', 'a8ef039f027ccd76fe05d965a84e6c5c_1548508134.mp3', 'webroot/files/Stores/sample_name/', '8546393', 'audio/mpeg', 'cb5d5244e628ad6181faa46b43e2a676_1548506595.mp3', 'webroot/files/Stores/lease_name/', 8546393, 'audio/mpeg', 0, '5d36fe945dd790560e9629ce15cbf640_1548509760.mp3', 'webroot/files/Stores/premium_name/', '8546393', 'audio/mpeg', '46129cedea494715d59902383db7bd25_1548509174.wav', 'webroot/files/Stores/exclusive_name/', '37681536', 'application/octet-stream', '2018-07-27 08:50:35', '2018-10-29 23:32:16', NULL, NULL, 'disabled', 'manual-membership'),
(61, 0, 48, 99, '89266aa65c2193e4056e3e31608e70c1_1548512498.jpg', 30, 'Trap Afro BurnaBoy / wizkid type', 140, 65, '20000', '', '0', '5e712817ce75967f35aa1b6f9540f42c_1548507673.mp3', 'webroot/files/Stores/sample_name/', '1564909', 'audio/mp3', 'd80fb89f4bcebb29181f14b8f53cf9f0_1548506620.mp3', 'webroot/files/Stores/lease_name/', 1564909, 'audio/mp3', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-07-28 22:25:27', '2019-01-26 15:21:38', NULL, NULL, '', 'manual-membership'),
(62, 0, 17, 15, 'img-20180524-wa0007_1.1533019040.jpg', 11, 'All nilot', 110, 192, '5000', '', '0', 'a8bdadbfb0a724574f6af5e22c5227dd_1548508616.mp3', 'webroot/files/Stores/sample_name/', '3170837', 'application/octet-stream', 'fe7396a4aba30ff188e9ef819a8d1804_1548506648.mp3', 'webroot/files/Stores/lease_name/', 3170837, 'application/octet-stream', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-07-31 06:37:12', '2018-07-31 06:37:12', NULL, NULL, 'disabled', 'membership-865309221'),
(69, 0, 8, 15, 'img-20180524-wa0007_1.1533200801.jpg', 6, 'Low', 107, 223, '5000', '', '0', '8120faf6ea0e867f4ee431dc967afd88_1548508185.mp3', 'webroot/files/Stores/sample_name/', '3760128', 'application/octet-stream', '0f280f6457a8760e3a3b45507bb87113_1548506784.mp3', 'webroot/files/Stores/lease_name/', 3760128, 'application/octet-stream', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-02 09:06:34', '2018-08-02 09:06:34', NULL, NULL, 'disabled', 'membership-865309221'),
(72, 0, 8, 15, 'img-20180524-wa0007_1.1533508415.jpg', 30, 'Uber', 160, 265, '7000', '', '0', '971cac85f7da65d668edfee8bd396f7d_1548507650.mp3', 'webroot/files/Stores/sample_name/', '455226', 'application/octet-stream', '2d285780f25d2c9ce851ec940ea7b867_1548506805.mp3', 'webroot/files/Stores/lease_name/', 4255311, 'application/octet-stream', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-05 22:33:33', '2018-08-09 13:11:19', NULL, NULL, 'disabled', 'membership-865309221'),
(73, 1, 1019, 106, 'anto8734.1533744699.jpg', 6, 'Rainman', 95, 161, '10000', '10000', '10000', 'rainmanZ.mp3', 'webroot/files/Stores/sample_name/', '3269555', 'audio/mp3', 'rainmanz.1533744692.mp3', 'webroot/files/Stores/lease_name/', 3269555, 'audio/mp3', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-08 16:11:32', '2019-01-20 08:48:31', NULL, NULL, 'disabled', 'manual-membership'),
(74, 0, 78, 106, 'anto8734.1533746359.jpg', 10, 'Tonight', 91, 168, '10000', '10000', '10000', '9aec8be5cce3aebd4602efedf944d92a_1548508387.mp3', 'webroot/files/Stores/sample_name/', '3506224', 'audio/mp3', '20395260a16264b580c679634b2eb351_1548506845.mp3', 'webroot/files/Stores/lease_name/', 3506224, 'audio/mp3', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-08 16:24:01', '2018-08-08 16:39:19', NULL, NULL, 'disabled', 'manual-membership'),
(75, 0, 14, 106, 'anto8734.1533746447.jpg', 30, 'Zone Out', 160, 191, '15000', '15000', '15000', 'ZoneOuT.mp3', 'webroot/files/Stores/sample_name/', '3841115', 'audio/mp3', 'zoneout.1533745646.mp3', 'webroot/files/Stores/lease_name/', 3841115, 'audio/mp3', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-08 16:27:25', '2018-08-08 16:40:47', NULL, NULL, 'disabled', 'manual-membership'),
(76, 0, 57, 106, 'anto8734.1533842649.jpg', 12, 'Hope', 148, 207, '15000', '15000', '15000', 'Hope.mp3', 'webroot/files/Stores/sample_name/', '4188021', 'audio/mp3', 'hope.1533842638.mp3', 'webroot/files/Stores/lease_name/', 4188021, 'audio/mp3', 0, 'Hope.mp3', 'webroot/files/Stores/premium_name/', '4188021', 'audio/mp3', NULL, NULL, NULL, NULL, '2018-08-09 19:23:58', '2018-08-09 19:23:58', NULL, NULL, 'disabled', 'manual-membership'),
(81, 0, 65, 133, 'y1.1536275452.jpg', 10, 'Open Season', 100, 1, '10000', '', '10000', 'OPEN.mp3', 'webroot/files/Stores/sample_name/', '1404143', 'audio/mp3', 'open.1536275452.mp3', 'webroot/files/Stores/lease_name/', 1404143, 'audio/mp3', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-06 23:10:51', '2018-09-06 23:10:51', NULL, NULL, 'disabled', 'membership-29436692'),
(82, 0, 39, 133, 'untitled-1.1536276491.jpg', 30, 'Mr. Sawicki', 89, 3, '10000', '', '0', '5925c499b28b983304b6bda723646dd6_1548508215.mp3', 'webroot/files/Stores/sample_name/', '4792792', 'audio/mp3', '7a8deb01d863c658d253f2025675199d_1548506943.mp3', 'webroot/files/Stores/lease_name/', 4792792, 'audio/mp3', 0, '8e0d06ab4fd0ae205f68d0511025c922_1548509782.mp3', 'webroot/files/Stores/premium_name/', '4792792', 'audio/mp3', NULL, NULL, NULL, NULL, '2018-09-06 23:27:56', '2018-09-06 23:27:56', NULL, NULL, 'disabled', 'membership-29436692'),
(83, 1, 107, 133, 'js.1536277810.jpg', 27, 'its a Cole World', 90, 1, '5000', '7000', '0', 'cole.mp3', 'webroot/files/Stores/sample_name/', '1715731', 'audio/mp3', 'cole.1536276837.mp3', 'webroot/files/Stores/lease_name/', 1715731, 'audio/mp3', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-06 23:33:57', '2019-08-12 23:27:15', NULL, NULL, 'yes', 'membership-29436692'),
(84, 0, 109, 133, 'stradivari_stradivarius_violins-recovered.1536277851.jpg', 11, 'Internet Money', 120, 3, '10000', '', '0', 'IM.mp3', 'webroot/files/Stores/sample_name/', '4354160', 'audio/mp3', 'im.1536277276.mp3', 'webroot/files/Stores/lease_name/', 4354160, 'audio/mp3', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-06 23:41:15', '2018-09-06 23:50:50', NULL, NULL, 'disabled', 'membership-29436692'),
(91, 0, 79, 134, 'music____by_lettie.1537706906.png', 30, 'Instant', 130, 139, '6000', '', '', 'Instant_4sample.mp3', 'webroot/files/Stores/sample_name/', '2529141', 'audio/mp3', 'instant_3.1537706902.mp3', 'webroot/files/Stores/lease_name/', 3342907, 'audio/mp3', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-23 12:48:21', '2018-09-30 23:37:49', NULL, NULL, 'disabled', 'membership-550786279'),
(92, 0, 101, 103, 'kiss-daniel.1540076034.jpg', 6, 'Modern afropop', 92, 198, '5000', '10000', '0', '233866db9ae6720bf61d952c284b7fe2_1548508114.mp3', 'webroot/files/Stores/sample_name/', '2453490', 'audio/mp3', 'f037ea18f851757e0ff7caedc56fb205_1548506986.mp3', 'webroot/files/Stores/lease_name/', 7929800, 'audio/mp3', 0, '42746769c681b9df82ec214a5a96ebd0_1548509727.mp3', 'webroot/files/Stores/premium_name/', '7929800', 'audio/mp3', NULL, NULL, NULL, NULL, '2018-09-23 13:20:28', '2018-10-20 23:53:54', NULL, NULL, '', 'manual-membership'),
(93, 0, 88, 151, 'artworks-000284032460-7luloh-t500x500.1538088523.jpg', 30, 'Kylebeat type hippop trap', 148, 4, '10000', '20000', '40000', '866112716c815bd9c701296908730239_1548508257.mp3', 'webroot/files/Stores/sample_name/', '1596742', 'audio/mp3', 'a1b6340b8a433fcefb7f4f9baa87dbea_1548507018.mp3', 'webroot/files/Stores/lease_name/', 5216326, 'audio/mp3', 0, 'e96048aaedc38026f65375b1e72b06a2_1548509809.wav', 'webroot/files/Stores/premium_name/', '62585446', 'audio/wav', '18c207c9672493384f35e50e963593b2_1548509243.wav', 'webroot/files/Stores/exclusive_name/', '62585446', 'audio/wav', '2018-09-27 23:47:45', '2018-09-28 00:01:46', NULL, NULL, 'disabled', 'membership-525428192'),
(94, 0, 101, 151, 'artworks-000284032460-7luloh-t500x500.1538118296.jpg', 6, 'Afro Amaka type of beat', 106, 4, '10000', '20000', '40000', '4e292e55b07e97e017f8e355faa186f0_1548508571.mp3', 'webroot/files/Stores/sample_name/', '1808710', 'audio/mp3', 'ama.1538118227.mp3', 'webroot/files/Stores/lease_name/', 5693254, 'audio/mp3', 0, 'ama.wav', 'webroot/files/Stores/premium_name/', '68306782', 'audio/wav', NULL, NULL, NULL, NULL, '2018-09-28 08:03:46', '2018-09-28 08:03:46', NULL, NULL, 'disabled', 'membership-525428192'),
(95, 0, 77, 134, 'music____by_lettie.1538344670.png', 30, 'BIOMES', 130, 136, '8000', '10000', '20000', 'BIOMES_3_Sample.mp3', 'webroot/files/Stores/sample_name/', '3292752', 'audio/mp3', 'biomes_3_sample.1538344666.mp3', 'webroot/files/Stores/lease_name/', 3292752, 'audio/mp3', 0, 'BIOMES.wav', 'webroot/files/Stores/premium_name/', '24282286', 'audio/wav', 'BIOMES_3_Sample.wav', 'webroot/files/Stores/exclusive_name/', '24340802', 'audio/wav', '2018-09-30 22:57:45', '2018-09-30 23:23:33', NULL, NULL, 'disabled', 'membership-550786279'),
(96, 0, 55, 134, 'music____by_lettie.1538948354.png', 30, 'MANIAC', 151, 164, '10000', '15000', '20000', 'LOOPMAINIAC.mp3', 'webroot/files/Stores/sample_name/', '3934110', 'audio/mp3', 'loopmainiac.1538948348.mp3', 'webroot/files/Stores/lease_name/', 3934110, 'audio/mp3', 0, 'LOOPMAINIAC.mp3', 'webroot/files/Stores/premium_name/', '3934110', 'audio/mp3', 'LOOPMAINIAC.wav', 'webroot/files/Stores/exclusive_name/', '29006846', 'audio/wav', '2018-10-07 22:39:08', '2018-10-07 22:56:03', NULL, NULL, 'disabled', 'membership-550786279'),
(97, 0, 101, 239, 'piclabstudio_10-18-12.1539866158.jpg', 15, 'Shakushaku type beat', 127, 3, '10000', '', '0', 'd5bda6e54023deaf50b251c31daf8e17_1548508026.mp3', 'webroot/files/Stores/sample_name/', '1538924', 'audio/mp3', 'ebca529decbd04924895ceffe0c63612_1548507051.mp3', 'webroot/files/Stores/lease_name/', 3901732, 'audio/mp3', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-10-18 13:35:54', '2018-10-18 13:35:54', NULL, NULL, 'disabled', 'membership-461217746'),
(104, 0, 93, 70, 'wp-image-606006962.1542919473.jpg', 32, 'WAVE', 100, 3, '7000', '7000', '0', 'b7ab16b7ac3b0a2f067514b9992e19e3_1548507614.mp3', 'webroot/files/Stores/sample_name/', '1297030', 'audio/mpeg', '03e4df1918970ac99c515d4113ad112e_1548507102.mp3', 'webroot/files/Stores/lease_name/', 4046470, 'audio/mpeg', NULL, 'db6c3cbd09b249726a7626928267e614_1548509678.mp3', 'webroot/files/Stores/premium_name/', '4046470', 'audio/mpeg', NULL, NULL, NULL, NULL, '2018-11-22 21:44:23', '2018-11-22 21:44:23', NULL, NULL, 'disabled', 'membership-312289640'),
(105, 0, 214, 26, '96e886a5544e018a43575f05c554b53d_1548512334.jpg', 12, 'Bad Vibe', 125, 3, '9000', '15000', '20000', '078770d80ff97974e15b30776f688641_1548508644.mp3', 'webroot/files/Stores/sample_name/', '3804106', 'audio/mp3', '04.1547026094.mp3', 'webroot/files/Stores/lease_name/', 3804106, 'audio/mp3', NULL, '16644d1c6753135a6929b91288f31d25_1548509836.wav', 'webroot/files/Stores/premium_name/', '33541832', 'audio/wav', '28b7f37dcca9bcf1b9101a63a7ee2f97_1548509551.wav', 'webroot/files/Stores/exclusive_name/', '33541832', 'audio/wav', '2019-01-09 10:28:14', '2019-08-14 00:07:20', NULL, NULL, 'yes', 'manual-membership'),
(109, 0, 96, 26, '615d7d3d3fb4fbf465927d7209041b95_1548503718.jpg', 30, 'Rich Gang (El Chapo) prod.12 Beatz', 100, 3, '6000', '', '0', 'e11932446f238a892a926ebb051f7425_1548508368.mp3', 'webroot/files/Stores/sample_name/', '5434584', 'audio/mp3', '722ed58c7fac829a51a8b30a9a3c2d4d_1548507140.mp3', 'webroot/files/Stores/lease_name/', 5434584, 'audio/mp3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-09 13:11:59', '2019-01-09 13:11:59', NULL, NULL, 'disabled', 'manual-membership'),
(110, 0, 125, 26, 'c52bd948266e9bcd05d6049f77d50ca3_1548503769.jpg', 30, 'Chill wit me Prod. 12 Beatz', 105, 3, '7500', '', '0', 'c470889df8be051e594fc9b3c59d538e_1548508413.mp3', 'webroot/files/Stores/sample_name/', '6040624', 'audio/mp3', '8ccfb417b5f691ef197daa76f8e2954e_1548507160.mp3', 'webroot/files/Stores/lease_name/', 6040624, 'audio/mp3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-10 22:23:05', '2019-01-10 22:23:05', NULL, NULL, 'disabled', 'manual-membership'),
(111, 0, 43, 379, 'd0cd16b5f827bf5ab4b530b6b68d572d_1548503842.jpeg', 30, 'Best Dark Trap', 130, 2413, '5000', '', '0', '00a0af01120160278d3e48fc5743dfab_1548508499.mp3', 'webroot/files/Stores/sample_name/', '930942', 'audio/mp3', '4519980ef0594ae4b9c91fdf1828c710_1548507199.mp3', 'webroot/files/Stores/lease_name/', 4062292, 'audio/mp3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-12 15:45:31', '2019-01-12 15:45:31', NULL, NULL, 'disabled', 'membership-935084569'),
(112, 0, 384, 26, 'a106d808bad47bad6abd214283d5ac25_1548505242.jpg', 11, 'Angelina - Burna Boy type beat', 125, 3, '10000', '', '0', 'a27fab5610bcea367ed6e46d433a022b_1548508449.mp3', 'webroot/files/Stores/sample_name/', '8190883', 'audio/mp3', 'f7991ca2a1aa89632d9e82ca9ea77844_1548507226.mp3', 'webroot/files/Stores/lease_name/', 8190883, 'audio/mp3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-13 22:17:24', '2019-01-13 22:17:24', NULL, NULL, 'disabled', 'manual-membership'),
(113, 0, 74, 379, 'photo_1547490065648.1547645951.png', 11, 'Afro instrumental beat ', 108, 2424, '5000', '', '0', '737ff0caa116178c2534c24d0acffe6b_1548508520.mp3', 'webroot/files/Stores/sample_name/', '355857', 'audio/mp3', '5a65e8c902a2e39c9bcbf87f9b4ad928_1548507251.mp3', 'webroot/files/Stores/lease_name/', 1587008, 'audio/mp3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-16 14:39:10', '2019-01-16 14:39:10', NULL, NULL, 'disabled', 'membership-935084569'),
(127, 0, 31, 382, 'b5eba01431f211c6fb49f229e4b1c471_1549480846.jpg', 30, 'CHECKPOINT', 95, 139, '16000', '', '', '1ae8e9faa6b998673617651784120595_1548512149.mp3', 'Stores/sample_name', '3360373', 'audio/mpeg', '1a0e2d77277522c882eb2645cf29d706_1548512140.mp3', 'Stores/lease_name', 3360373, 'audio/mpeg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-25 15:42:21', '2019-02-06 20:23:27', NULL, NULL, '', 'membership-826962469'),
(129, 0, 256, 26, 'amplifihub-sq.1548446362.jpg', 10, 'Peng ting prod. 12 Beatz', 100, 3, '10000', '', '0', 'Peng thing.mp3', 'webroot/files/Stores/sample_name/', '8222563', 'audio/mp3', '15d880f1fc44d308dcf9e990aa3c93d5_1548511508.mp3', 'webroot/files/Stores/lease_name/', 8222563, 'audio/mp3', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-25 18:20:25', '2019-01-25 20:59:22', NULL, NULL, '', 'manual-membership'),
(131, 0, 226, 379, 'photo_1547954618353.1548494510.png', 11, '\"Nu Cumbia\"', 96, 2424, '5000', '', '0', 'AudioCutter_Nu Cumbia Afropop instrumental beat .mp3', 'webroot/files/Stores/sample_name/', '653732', 'audio/mp3', '5bedf199176a8dabd6b0ec7bbc4fd280_1548511374.mp3', 'webroot/files/Stores/lease_name/', 1060327, 'audio/mp3', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-26 10:16:49', '2019-01-26 10:30:56', NULL, NULL, 'disabled', 'membership-935084569'),
(133, 0, 258, 2, '17cf438ac772e1d3487fdff38701b9a4_1548618171.jpg', 7, 'Money Sweet', 116, 3, '', '', '0', 'c511ded20958044365269ccb45e87362_1548618166.mp3', 'Stores/sample_name', '1642649', 'audio/mpeg', 'ca77a28f02deb8017d71a67867cbe67e_1548618157.mp3', 'Stores/lease_name', 4421869, 'audio/mpeg', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-27 20:42:37', '2019-09-07 11:23:48', NULL, NULL, 'disabled', 'membership-767831156'),
(134, 0, 351, 2, '77c562a030f43233c6131b1217d64e1c_1548618431.jpg', 15, 'Get Down Low (Timaya Type Beat)', 140, 4, '', '', '0', '65f63f978da6ea5d4e1b4c366091eb51_1548618426.mp3', 'Stores/sample_name', '1715374', 'audio/mpeg', '2afea8fc9f3d6abc42c7bdc00e24e95b_1548618416.mp3', 'Stores/lease_name', 4439423, 'audio/mpeg', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-27 20:46:56', '2019-01-27 20:46:56', NULL, NULL, 'disabled', 'membership-767831156'),
(135, 0, 320, 2, '17664d80a19daf3534a9db1fc1217c28_1548618754.jpg', 15, 'Whine Fi mi', 140, 3, '', '', '0', '68aece77387307577da314c6120417c0_1548618750.mp3', 'Stores/sample_name', '1541085', 'audio/mpeg', '6821c9fe1ae3493d81aa04b531f1c0d9_1548618740.mp3', 'Stores/lease_name', 4887057, 'audio/mpeg', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-27 20:52:20', '2019-01-27 20:52:20', NULL, NULL, 'disabled', 'membership-767831156'),
(137, 0, 350, 2, 'f4966d9537425dc7f218ea206bcd917b_1548619295.jpg', 31, 'Oya Shayo!', 123, 4, '', '', '0', '32c6f8e6f011082528f1767ec0dda6a0_1548619291.mp3', 'Stores/sample_name', '1441402', 'audio/mpeg', '4ea2ebabdfc9929ff9fa7908755fae72_1548619281.mp3', 'Stores/lease_name', 5303972, 'audio/mpeg', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-27 21:01:21', '2019-01-27 21:01:21', NULL, NULL, 'disabled', 'membership-767831156'),
(138, 0, 440, 2, '629a9178c08478f5b5f158fc21cb7346_1548619554.jpg', 8, 'Reekado Banks Problem Type', 112, 3, '', '', '0', '4aff03d153e24337d341cb2ebd4a5a13_1548619549.mp3', 'Stores/sample_name', '1741079', 'audio/mpeg', 'b33d84d11396bb9e6d2bff791e9065e0_1548619539.mp3', 'Stores/lease_name', 5000533, 'audio/mpeg', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-27 21:05:39', '2019-01-27 21:05:39', NULL, NULL, 'disabled', 'membership-767831156'),
(139, 0, 295, 2, 'd872887062f1d5674383331b4a6a33d6_1548619893.jpg', 11, '(Remake) Romantic By korede bello', 115, 3, '', '', '0', 'dba277a588123d18ad045927b73e20d6_1548619889.mp3', 'Stores/sample_name', '1569297', 'audio/mpeg', '06eed1b4e1a83a11c986586e254fbc57_1548619878.mp3', 'Stores/lease_name', 5652550, 'audio/mpeg', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-27 21:11:18', '2019-01-27 21:11:18', NULL, NULL, 'disabled', 'membership-767831156'),
(140, 0, 334, 2, '29bc17a9f3b95ee71903127919ab0e39_1548620193.jpg', 16, '(Remake) Davido Gbagbe Oshi', 106, 4, '', '', '0', '3fc238fabd9eea6f9d1b45a5ed53f008_1548620189.mp3', 'Stores/sample_name', '1290936', 'audio/mpeg', '47cc6136e52e96178c40671de7cf0af5_1548620178.mp3', 'Stores/lease_name', 5049434, 'audio/mpeg', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-27 21:16:18', '2019-01-27 21:16:18', NULL, NULL, 'disabled', 'membership-767831156'),
(142, 0, 279, 8, 'd4db7efcce91655cd9e19c2294505777_1550057554.jpg', 30, 'Hard Trap', 155, 516, '', '', '0', '9e4bc62855b3bdf893c3eac4f608fcdd_1550057480.mp3', 'Stores/sample_name', '9089555', 'audio/mp3', '9e292e8f83db42bf06211c67187a4df4_1550057459.mp3', 'Stores/lease_name', 9089555, 'audio/mp3', 1, NULL, NULL, NULL, NULL, '101076bc26ef97d9eda5fef2ed73e1e4_1550057508.wav', 'Stores/exclusive_name', '55715488', 'audio/wav', '2019-02-13 12:30:59', '2019-02-13 12:30:59', NULL, NULL, 'disabled', 'membership-131498954'),
(149, 0, 77, 452, NULL, 11, 'DR 10', 102, 225, '10000', '10000', '70000', '0b01a43c87077675c5f87a21f9c4392f_1550215730.mp3', 'Stores/sample_name', '2260184', 'audio/mp3', 'b89478c68eb0a8f7fd413268260eba1d_1550215711.mp3', 'Stores/lease_name', 9178453, 'audio/mp3', 0, '7dae815fe25952c0d97a1dcb009d0f1f_1550215736.mp3', 'Stores/premium_name', '9178453', 'audio/mp3', '770a88fbe398c4f48dd1ebdea387edc6_1550215759.wav', 'Stores/exclusive_name', '80936618', 'audio/wav', '2019-02-15 08:28:31', '2019-02-15 08:28:31', NULL, NULL, 'disabled', 'membership-266964053'),
(150, 0, 81, 149, '8909449cac02bb657ac8992cbda56324_1551182705.jpg', 6, 'Drawn To You', 98, 180, '7000', '', '0', 'bb951b17e34a90bc0cc9e11225cddb2f_1551341476.mp3', 'Stores/sample_name', '4256914', 'audio/mp3', '1918eb16f1167e5c32865bee4100b797_1551341466.mp3', 'Stores/lease_name', 4256914, 'audio/mp3', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-02-26 13:04:47', '2019-02-28 09:11:05', NULL, NULL, 'disabled', 'membership-158863604'),
(152, 0, 138, 149, '5602bdc074e7f3d5cb1b6fe451ea6cbf_1551338015.jpg', 9, 'Closer', 120, 240, '10000', '', '0', '28ade5c6731d9b4c3def3af4d381c5c2_1551341756.mp3', 'Stores/sample_name', '6093845', 'audio/mp3', '6395b2c5963f6052484accc45401d95e_1551341743.mp3', 'Stores/lease_name', 6093845, 'audio/mp3', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-02-28 08:13:10', '2019-02-28 09:15:43', NULL, NULL, 'disabled', 'membership-158863604'),
(153, 0, 54, 519, 'dd3ea707b94eba13ca8296277d5225a2_1551498004.jpg', 27, 'Drop', 155, 196, '5000', '7000', '0', 'ec2fb9c3ecdcac5e835e8ac4de5ba7b4_1551497987.mp3', 'Stores/sample_name', '3936672', 'audio/mpeg', 'f39cfb9664f37c73d1ecbc8adcb98eed_1551497978.mp3', 'Stores/lease_name', 3936672, 'audio/mpeg', 0, '65a09e472bbfad4cc1a73cb133e0b2e4_1551497996.mp3', 'Stores/premium_name', '3936672', 'audio/mpeg', NULL, NULL, NULL, NULL, '2019-03-02 04:39:38', '2019-03-02 04:39:38', NULL, NULL, 'disabled', 'membership-413256245'),
(154, 0, 89, 519, '7934143abc89a0d1e90f4c80793484d3_1551498582.jpg', 27, 'Drop', 155, 196, '5000', '7000', '0', 'c7497e5678d41e4fa08aa30292c6825d_1551498565.mp3', 'Stores/sample_name', '3936672', 'audio/mpeg', 'c8bf896e5bcaf0fefb7e3431330e4a75_1551498556.mp3', 'Stores/lease_name', 3936672, 'audio/mpeg', 0, '7c3bc2641d786efb4e8fc9ab7a1b2fb2_1551498574.mp3', 'Stores/premium_name', '3936672', 'audio/mpeg', NULL, NULL, NULL, NULL, '2019-03-02 04:49:16', '2019-03-02 04:49:16', NULL, NULL, 'disabled', 'membership-413256245'),
(155, 0, 126, 519, 'b30de7cf22b61f40a0709162030ea1a3_1551950865.jpg', 6, 'Fire', 105, 185, '5000', '7000', '10000', 'f2bd9f0aa791865f519893f658dfe14f_1551950827.mp3', 'Stores/sample_name', '3714962', 'audio/mpeg', '361fe22c81a4e7f43de0fcfa9f1ebe65_1551950817.mp3', 'Stores/lease_name', 3714962, 'audio/mpeg', 0, '82c4bae39d4be45da7693db6e90eec24_1551950835.mp3', 'Stores/premium_name', '3714962', 'audio/mpeg', 'e8d21cf1180ef4bc48bf2bfe2ca1cd91_1551950843.wav', 'Stores/exclusive_name', '32650978', 'audio/wav', '2019-03-07 10:26:57', '2019-03-07 10:26:57', NULL, NULL, 'disabled', 'membership-413256245'),
(156, 0, 199, 543, 'ed4e1cf5e95ca781fd72834f5d62091f_1552256364.png', 15, 'Belinda (Prod. Zion Beatz)', 100, 180, '7000', '10000', '40000', '9731cdf63374f69f6e275aeb91166252_1552256348.mp3', 'Stores/sample_name', '3631613', 'audio/mpeg', 'c4e595c7f01569ca0d874918d412af4a_1552256338.mp3', 'Stores/lease_name', 3631613, 'audio/mpeg', 0, 'edbf8356c74f2518b772704dc9ad23cd_1552256356.mp3', 'Stores/premium_name', '3631613', 'audio/mpeg', NULL, NULL, NULL, NULL, '2019-03-10 23:18:58', '2019-03-11 00:49:59', NULL, NULL, 'disabled', 'manual-membership'),
(157, 0, 173, 543, 'fafb6abba1f837a3e75526cf879f84e4_1552259812.png', 15, 'Believe (Prod. Zion Beatz)', 101, 187, '7000', '10000', '40000', 'd1ac4719e0bf453b6823327ed64c3863_1552259796.mp3', 'Stores/sample_name', '3993148', 'audio/mpeg', 'e95751d46cb7f211a3b492a51a6cf288_1552259787.mp3', 'Stores/lease_name', 3993148, 'audio/mpeg', 0, 'a87e21a031d9958ae8a148f13c4b5fd0_1552259804.mp3', 'Stores/premium_name', '3993148', 'audio/mpeg', NULL, NULL, NULL, NULL, '2019-03-11 00:16:27', '2019-03-11 00:16:27', NULL, NULL, 'disabled', 'manual-membership'),
(158, 0, 167, 543, '604aa55e4532ba18013eedd43d64cf91_1552261846.jpg', 6, 'Paulina (Prod. Zion Beatz)', 101, 240, '7000', '10000', '40000', '019ded5112837a15f5a96d8f50a043cb_1552261828.mp3', 'Stores/sample_name', '4705246', 'audio/mpeg', '812f15fdd48a2d7d9c01f2fd9b3e5f0c_1552261819.mp3', 'Stores/lease_name', 4705246, 'audio/mpeg', 0, 'e0d0910b5b39c5e30efe1a4fd37b722b_1552261837.mp3', 'Stores/premium_name', '4705246', 'audio/mpeg', NULL, NULL, NULL, NULL, '2019-03-11 00:50:19', '2019-03-11 00:50:19', NULL, NULL, 'disabled', 'manual-membership'),
(160, 0, 181, 543, '922e9e8e0cd7a0d8678c4ccd9efa09b6_1552287213.jpg', 6, 'Stare (Prod. Zion Beatz)', 103, 184, '5000', '7000', '30000', '22c48c7c93bd7b5111a88ade305e8de6_1552287198.mp3', 'Stores/sample_name', '3682813', 'audio/mpeg', '6911968e5cda8b99bf5e1601c5694fba_1552287188.mp3', 'Stores/lease_name', 3682813, 'audio/mpeg', 0, 'ecb7f63b35e7d6ff29bec76c46777f5b_1552287206.mp3', 'Stores/premium_name', '3682813', 'audio/mpeg', NULL, NULL, NULL, NULL, '2019-03-11 07:53:08', '2019-03-11 07:53:08', NULL, NULL, 'disabled', 'manual-membership'),
(166, 0, 399, 543, '19f1b6f979e0550e3c337b346209d4aa_1552340332.png', 10, 'Spiritual (Prod. Zion Beatz)', 100, 177, '7000', '12000', '60000', 'd39bdebc7cbff0fd1a2af0fd7c6281c8_1552340157.mp3', 'Stores/sample_name', '3553246', 'audio/mpeg', 'b7c03625907e13799cdd0fba6503771d_1552340149.mp3', 'Stores/lease_name', 3553246, 'audio/mpeg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-11 22:35:49', '2019-03-11 22:39:40', NULL, NULL, 'disabled', 'manual-membership'),
(167, 0, 305, 543, '1875060b6c4caefd6c5df64cd18d2d2b_1552340662.png', 16, 'Confusion (Prod. Zion Beatz)', 94, 190, '7000', '10000', '40000', '62dc04fdb5a3e1f8c2e8ed0ded8c8109_1552340654.mp3', 'Stores/sample_name', '3812379', 'audio/mpeg', 'd9d3c7defb32e21e6b486017474376fd_1552340645.mp3', 'Stores/lease_name', 3812379, 'audio/mpeg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-11 22:44:05', '2019-03-11 22:44:05', NULL, NULL, 'disabled', 'manual-membership'),
(168, 0, 284, 543, '47774f6135de42b21259fb544e977235_1552342449.png', 11, 'Stay With Me (Prod. Zion Beatz)', 94, 270, '5000', '7000', '40000', '9e5abd9f3a89b8037bcb06b64cd40d2e_1552341268.mp3', 'Stores/sample_name', '5462796', 'audio/mpeg', '74c522e50e97af42c35384f77ab4e547_1552341256.mp3', 'Stores/lease_name', 5462796, 'audio/mpeg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-11 22:54:16', '2019-03-11 23:14:09', NULL, NULL, 'disabled', 'manual-membership'),
(169, 0, 269, 543, '11499c9fc13d98a53819df1a563e6db7_1552342383.png', 15, 'Balance (Prod. Zion Beatz)', 94, 192, '7000', '15000', '60000', 'a3675dedfa816c4f854e311abf1fb3fe_1552347381.mp3', 'Stores/sample_name', '4467007', 'audio/mpeg', '74aef0d6afc05ffdbc164f24b1efb789_1552347371.mp3', 'Stores/lease_name', 4467007, 'audio/mpeg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-11 23:12:44', '2019-03-12 00:36:11', NULL, NULL, 'disabled', 'manual-membership'),
(170, 0, 338, 543, '881b32d40d63f3f52ab438b716b10f7c_1552342952.png', 15, 'Kitty (Prod. Zion Beatz)', 108, 164, '7000', '15000', '60000', 'd636f2d11377ba9b9a88865405ecd048_1552347876.mp3', 'Stores/sample_name', '3289931', 'audio/mpeg', '278d140212466c4fd50a275bfec8ef77_1552347867.mp3', 'Stores/lease_name', 3289931, 'audio/mpeg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-11 23:22:18', '2019-03-12 00:44:27', NULL, NULL, 'disabled', 'manual-membership'),
(172, 0, 217, 15, '154d43882038511b1ad30ede507dded1_1552467963.jpg', 6, 'light up', 106, 194, '10000', '', '0', '70d2156089180e93a708d81aed9918af_1552467948.yes o tagged', 'Stores/sample_name', '7790829', 'application/octet-stream', 'b4eafcd8dd0e423a48610ac82a2ab182_1552467932.yes o106t', 'Stores/lease_name', 7790829, 'application/octet-stream', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-13 10:05:32', '2019-03-13 10:05:32', NULL, NULL, 'disabled', 'membership-865309221'),
(173, 0, 150, 15, 'dfa64286c33f3a48fe53a71d850b62bf_1552474759.jpg', 6, 'private party', 106, 181, '10000', '', '0', 'c8b00573c3b0ae49b5dc62483dab8e87_1552474746.so eazi tagged', 'Stores/sample_name', '7247482', 'application/octet-stream', '14c27ea64256d45d310c3443c8e549bb_1552474732.so eazi106t', 'Stores/lease_name', 7247482, 'application/octet-stream', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-13 11:58:52', '2019-03-13 11:58:52', NULL, NULL, 'disabled', 'membership-865309221'),
(175, 0, 85, 325, '3852ae91a54f9d87241a5d1fc82deb0d_1552831672.jpg', 13, 'Crazy Love', 100, 4, '8000', '9000', '0', '0ec19c0744e86e9442da0f0465e0f4c3_1552831650.mp3', 'Stores/sample_name', '5185510', 'audio/mp3', '5cd56f9f60504ba409f65c8ac0d4bd94_1552831638.mp3', 'Stores/lease_name', 5338059, 'audio/mp3', 0, 'b96dca12199f7e8fb6f197d2c3428e6b_1552831661.mp3', 'Stores/premium_name', '5338059', 'audio/mp3', NULL, NULL, NULL, NULL, '2019-03-17 15:07:18', '2019-03-17 15:07:18', NULL, NULL, 'disabled', 'membership-204818833'),
(176, 0, 111, 325, '84965a99eb05557ce6bc62002850c6f0_1552832289.jpg', 10, 'Dhurty wyne', 96, 3, '8000', '10000', '0', 'e3665509d6d094907166d4cdb90bb714_1552832272.mp3', 'Stores/sample_name', '3983109', 'audio/mp3', '41de388953423738be2e24c36919188d_1552832262.mp3', 'Stores/lease_name', 4219578, 'audio/mp3', 0, 'ac853f40c73c17c9ad5bac7b9ded0b59_1552832280.mp3', 'Stores/premium_name', '4219578', 'audio/mp3', NULL, NULL, NULL, NULL, '2019-03-17 15:17:42', '2019-03-17 15:17:42', NULL, NULL, 'disabled', 'membership-204818833'),
(177, 0, 193, 325, '5db553600472d3d1ae152c45c4c7bd80_1552833161.jpg', 7, 'Ghana Girls ', 102, 3, '', '', '0', '2a8909055ddf4db3abf70e17997b9e02_1552833153.mp3', 'Stores/sample_name', '4001350', 'audio/mp3', 'ea9c430aaad8a38d0d995d4776e37fc9_1552833143.mp3', 'Stores/lease_name', 4153900, 'audio/mp3', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-17 15:32:23', '2019-03-17 15:32:23', NULL, NULL, 'disabled', 'membership-204818833'),
(178, 0, 271, 325, '5fb6438074aa202734a1f514145485be_1552833755.jpg', 13, 'Dance', 132, 3, '', '', '0', 'bec20316de083fd498ddb33a3d5e78d1_1552833746.mp3', 'Stores/sample_name', '4094380', 'audio/mp3', '87f3cf0d196ee359bdbc15467a1a7436_1552833736.mp3', 'Stores/lease_name', 4094380, 'audio/mp3', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-17 15:42:16', '2019-03-17 15:42:16', NULL, NULL, 'disabled', 'membership-204818833'),
(179, 0, 221, 325, '048ef7f094319519f4703763e9f18563_1552835195.jpg', 32, 'No be my head o', 108, 3, '7000', '9000', '0', '9bf5e3f9b83cfde27342ce516c846647_1552835177.mp3', 'Stores/sample_name', '3941830', 'audio/mp3', 'c212d7eded8a9b8545e2654d7e0c75ad_1552835167.mp3', 'Stores/lease_name', 4094382, 'audio/mp3', 0, '53716813c24bd65578241ea8030470bc_1552835186.mp3', 'Stores/premium_name', '4094382', 'audio/mp3', NULL, NULL, NULL, NULL, '2019-03-17 16:06:07', '2019-03-17 16:06:07', NULL, NULL, 'disabled', 'membership-204818833'),
(180, 0, 289, 325, '4cd3ef97e46b284360d4a03594f41ee7_1552836621.jpg', 6, 'African woman', 98, 3, '10000', '10000', '0', 'e92c62f2a5c21f4d55c95d96d6fb57a4_1552836606.mp3', 'Stores/sample_name', '3726790', 'audio/mp3', '79b6269a26ecd8ac91fc154eda1f45a8_1552836597.mp3', 'Stores/lease_name', 3879333, 'audio/mp3', 0, 'cd848306340535fa80be3875aaf92028_1552836613.mp3', 'Stores/premium_name', '3879333', 'audio/mp3', NULL, NULL, NULL, NULL, '2019-03-17 16:29:57', '2019-03-17 16:29:57', NULL, NULL, 'disabled', 'membership-204818833'),
(181, 0, 254, 15, '18b299d43955c347bd6dea518eaa7abb_1552849059.jpg', 6, 'Melanin', 106, 191, '10000', '', '0', '7f92e77155fc70eeecfb3abaf827e711_1552849048.okay ma2tagged', 'Stores/sample_name', '5254861', 'application/octet-stream', 'fd5f29de32e48945119111163689ccb8_1552849032.okay ma2 106t', 'Stores/lease_name', 7609017, 'application/octet-stream', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-17 19:57:12', '2019-03-17 19:57:12', NULL, NULL, 'disabled', 'membership-865309221'),
(182, 0, 285, 15, '506a17e3d365f9cc8a8eaeb1f9895735_1553174971.jpg', 6, 'Smooth', 105, 219, '10000', '', '0', '51babff5e01774a38b8a372b6e206fd8_1553174954.moon tagged', 'Stores/sample_name', '8779302', 'application/octet-stream', 'cd84be8e0c304166cf8551a9b4dbc315_1553174937.moon105tnew', 'Stores/lease_name', 8779302, 'application/octet-stream', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-21 14:28:57', '2019-03-21 14:28:57', NULL, NULL, 'disabled', 'membership-865309221'),
(186, 0, 189, 15, '45f782d551160a6d468c0a0d0dc80f39_1553927378.jpg', 11, 'Uplifted', 107, 206, '10000', '', '0', '77970b3a11a06400c14d6ef406710d44_1553927348.slow wine tagged', 'Stores/sample_name', '8255808', 'application/octet-stream', 'e9c52381ad0b83c72c54f8ff84fe8ca7_1553927332.slow wine107tnew', 'Stores/lease_name', 8255808, 'application/octet-stream', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-30 07:28:52', '2019-03-30 07:28:52', NULL, NULL, 'disabled', 'membership-865309221'),
(187, 0, 244, 134, '58c237b115579c0a8310c5b7162e3dd1_1556586348.png', 30, 'CONTRAP', 72, 160, '8000', '10000', '25000', 'f585f19153bfde89aba6ee0515743492_1556585170.mp3', 'Stores/sample_name', '3841322', 'audio/mp3', '023c33ba7454339cd69e4ae7b7aeb1b9_1556584965.mp3', 'Stores/lease_name', 3841322, 'audio/mp3', 0, 'e74b1aac6fec2f958d2a63ac7dd42d35_1556584968.mp3', 'Stores/premium_name', '3841322', 'audio/mp3', '07215255a20f061acfcd9a65e9810474_1556584969.wav', 'Stores/exclusive_name', '28224146', 'audio/wav', '2019-04-30 01:42:45', '2019-04-30 02:05:48', NULL, NULL, 'disabled', 'membership-550786279'),
(188, 0, 171, 134, '330794510f4dc7a04e4ca1b2d33f2358_1557631100.png', 6, 'ASK ME', 110, 236, '10000', '15000', '30000', '0a26e6e8c27029ee736eb881579cfdda_1557630105.mp3', 'Stores/sample_name', '5682643', 'audio/mp3', '11b903d8268d988a66a6e2acc435bcd5_1557630104.mp3', 'Stores/lease_name', 5682643, 'audio/mp3', 0, '73d678bc1c9c5b9012c31cffdf2fe57c_1557630106.mp3', 'Stores/premium_name', '5682643', 'audio/mp3', '5d062795da01a524a13106b21bf6c088_1557630107.wav', 'Stores/exclusive_name', '41759838', 'audio/wav', '2019-05-12 04:01:44', '2019-05-12 04:18:20', NULL, NULL, 'disabled', 'membership-550786279'),
(189, 0, 163, 543, '66243a2138376ae64c3330c568d392f0_1558189587.jpg', 15, 'For Love (Prod. Zion Beatz)', 147, 251, '6999', '14999', '29999', '10e18f538d1ef6bbfedbc114e714bc22_1558189586.mp3', 'Stores/sample_name', '1764903', 'audio/mpeg', '6bbc94861acf2d01132c2eec1df48e62_1558189584.mp3', 'Stores/lease_name', 3429425, 'audio/mpeg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-05-18 15:26:24', '2019-05-18 15:26:24', NULL, NULL, 'disabled', 'manual-membership'),
(194, 0, 127, 730, '2bc24d725c1d21be69bb8ffccee5adcb_1559496595.jpg', 30, 'Lector', 150, 186, '10000', '', '0', '45754364b98d1bcc0a2067d17f761e01_1559496594.mp3', 'Stores/sample_name', '3780806', 'audio/mp3', '07bcab691409bd22d03f7e6236af2006_1559496592.mp3', 'Stores/lease_name', 3728788, 'audio/mp3', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-06-02 18:29:52', '2019-06-11 16:22:39', NULL, NULL, 'disabled', 'manual-membership'),
(195, 0, 104, 730, '7fa426739e179492982aa22f3e60c2cb_1559497315.jpg', 30, 'Tetris', 150, 156, '5000', '', '0', '55e4de920ed84259172e8c3d10713fb0_1559497315.mp3', 'Stores/sample_name', '3121703', 'audio/mp3', '476dda9589b77276f11a71d888b6f51b_1559497313.mp3', 'Stores/lease_name', 3121180, 'audio/mp3', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-06-02 18:41:53', '2019-06-02 18:41:53', NULL, NULL, 'disabled', 'manual-membership'),
(196, 0, 161, 134, 'b1b76cc9bf02ad2d8a5a0e8e13f5ec93_1559518720.jpeg', 6, 'GROOVY', 104, 180, '8000', '10000', '20000', '3fb998ccea284baef18d658745d5349d_1559517992.mp3', 'Stores/sample_name', '4330336', 'audio/mp3', '816c0cbb71a18ffec2fda64381693677_1559517991.mp3', 'Stores/lease_name', 4330336, 'audio/mp3', 0, '8c25ae85917c1a186ce349e4bd541e75_1559517993.mp3', 'Stores/premium_name', '4330336', 'audio/mp3', '59383631a4f3ecfcc0011503a0c1d9ff_1559517994.wav', 'Stores/exclusive_name', '31836954', 'audio/wav', '2019-06-03 00:26:31', '2019-06-03 00:38:40', NULL, NULL, 'disabled', 'membership-550786279'),
(197, 0, 149, 134, 'e806ded1e57793dfa78f40e8d56aba75_1559702876.jpeg', 6, 'JORO', 106, 168, '6000', '15000', '30000', 'fea8b08b7245b8da390a9794ea97a0e3_1559702147.mp3', 'Stores/sample_name', '4054483', 'audio/mp3', 'd1ee72d1d0e628e6dbbca471ab0541a6_1559702145.mp3', 'Stores/lease_name', 4054483, 'audio/mp3', 0, '3ccf1465c027fb7ffaad6e9eb7d5931f_1559702148.mp3', 'Stores/premium_name', '4054483', 'audio/mp3', 'eb60fbba0f8b873f4aacb6fdf5043d9a_1559702149.wav', 'Stores/exclusive_name', '29798850', 'audio/wav', '2019-06-05 03:35:45', '2019-06-05 03:47:55', NULL, NULL, 'disabled', 'membership-550786279'),
(198, 0, 113, 730, 'ec4fcb2d8207ceabf07edf13faaf3704_1559874955.jpg', 12, 'Chrysolite', 110, 206, '5000', '', '0', 'c8fbecbf19860e8002c0b26b1ccea503_1559874955.mp3', 'Stores/sample_name', '4968626', 'audio/mp3', '6f9e6e3dc3b3ed6ac231b0946095e676_1559874953.mp3', 'Stores/lease_name', 4968626, 'audio/mp3', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-06-07 03:35:53', '2019-06-07 03:35:53', NULL, NULL, 'disabled', 'manual-membership'),
(199, 0, 132, 134, '1f22e4e4fd27336661b1fc7ae922e603_1559997768.jpeg', 11, 'BANKU', 108, 271, '5000', '10000', '20000', '385cba6c711d1a66b76b07ae84c6b537_1559996573.mp3', 'Stores/sample_name', '6520233', 'audio/mp3', '2c99067fdd1b20f37c90c8faa04587d0_1559996567.mp3', 'Stores/lease_name', 6520233, 'audio/mp3', 0, 'd610e36d3e70b6a64b950ea736c96c7e_1559996576.mp3', 'Stores/premium_name', '6520233', 'audio/mp3', 'dffe6794374cbcda0588565f32468b93_1559996577.wav', 'Stores/exclusive_name', '47916022', 'audio/wav', '2019-06-08 13:22:47', '2019-06-08 13:42:47', NULL, NULL, 'disabled', 'membership-550786279'),
(201, 0, 57, 730, 'fdcaeae7bb8897de296cf6e65746e239_1562804784.jpg', 30, ' Dreadnought', 155, 187, '5000', '', '0', 'b900f0605be772b9c5a3c70f7aa5dc1d_1562804783.mp3', 'Stores/sample_name', '3756478', 'audio/mp3', '0ee2cba3fc38949d9497d44d172428d7_1562804781.mp3', 'Stores/lease_name', 3756478, 'audio/mp3', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-11 01:26:21', '2019-07-11 01:27:02', NULL, NULL, 'disabled', 'manual-membership'),
(202, 0, 75, 730, '5fc88e4cb162cd8fe465dc3b6cbf376b_1562974599.jpg', 27, 'Chrono', 150, 192, '7000', '', '0', '4b12daed970db7f4f0daa069c0d7b585_1562974599.mp3', 'Stores/sample_name', '3841115', 'audio/mp3', '6be7df5b8c74d41fa5ce424984ee288d_1562974597.mp3', 'Stores/lease_name', 3841115, 'audio/mp3', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-13 00:36:37', '2019-07-13 00:36:37', NULL, NULL, 'disabled', 'manual-membership'),
(203, 0, 42, 543, '4d294aae335dc99ee9ce8b71924c0e9b_1563584608.jpg', 26, 'Yogurte', 89, 242, '9000', '17000', '90000', 'd486f655005c4017738048c8dff31827_1563584604.mp3', 'Stores/sample_name', '4848396', 'audio/mpeg', '578d44ffcbba2cb83d00ab7f9b8e4a2e_1563584601.mp3', 'Stores/lease_name', 4848396, 'audio/mpeg', 0, '5876a312447175b7b50056b2eb6901df_1563584604.wav', 'Stores/premium_name', '64132234', 'audio/wav', NULL, NULL, NULL, NULL, '2019-07-20 02:03:21', '2019-07-20 02:07:32', NULL, NULL, 'disabled', 'manual-membership'),
(204, 0, 22, 730, '26c1764fda9ff1ab7108baa800ec7423_1564185371.jpg', 30, 'Shalltear', 96, 200, '5000', '7000', '0', 'aedda5b1a34580939c9bc916fb547062_1564185327.mp3', 'Stores/sample_name', '4001506', 'audio/mp3', 'ffa69b0eb9719e237568486dac8b18a9_1564185322.mp3', 'Stores/lease_name', 4001506, 'audio/mp3', 0, 'a93eef97ca4c37cca0fe2060fddc09e8_1564185333.wav', 'Stores/premium_name', '35283622', 'audio/wav', NULL, NULL, NULL, NULL, '2019-07-27 00:55:22', '2019-07-27 00:55:22', NULL, NULL, 'disabled', 'manual-membership'),
(205, 0, 72, 490, 'ba1d9e035d7b255017bbe44d3db96334_1564271260.png', 6, 'TANYAN', 109, 214, '10000', '15000', '25000', '4222a9ca72b8e3e741d32b1f35e609e0_1564271255.mp3', 'Stores/sample_name', '911744', 'audio/mp3', 'd1f5e4f4738c963f17c2470662fac6f7_1564271253.mp3', 'Stores/lease_name', 4272658, 'audio/mp3', 0, '2317405c518b11754a52871ea465eea0_1564271256.mp3', 'Stores/premium_name', '4272658', 'audio/mp3', 'fd282ca3ae68e24664b789052239d082_1564271257.wav', 'Stores/exclusive_name', '56513384', 'audio/wav', '2019-07-28 00:47:33', '2019-07-28 00:47:33', NULL, NULL, 'disabled', 'manual-membership'),
(206, 0, 32, 730, 'b3e1852e11d0ee5c1924cf36744294e1_1564446207.jpg', 29, 'Space', 120, 192, '5000', '', '0', '9c113c0707b0e8bd813fdfbbecc1d68d_1564446206.mp3', 'Stores/sample_name', '3841115', 'audio/mp3', '8a1c87562e06d5050724c9e1fa673f55_1564446204.mp3', 'Stores/lease_name', 3841115, 'audio/mp3', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-30 01:23:24', '2019-07-30 01:23:24', NULL, NULL, 'disabled', 'manual-membership');
INSERT INTO `stores` (`id`, `trending`, `play_count`, `user_id`, `cover`, `music_genre`, `name`, `bpm`, `length`, `lease_price`, `premium_price`, `exclusive_price`, `sample_name`, `sample_path`, `sample_size`, `sample_type`, `lease_name`, `lease_path`, `lease_size`, `lease_type`, `lease_access`, `premium_name`, `premium_path`, `premium_size`, `premium_type`, `exclusive_name`, `exclusive_path`, `exclusive_size`, `exclusive_type`, `created`, `modified`, `discount`, `watermark`, `promoted`, `tnx_reference`) VALUES
(207, 0, 32, 730, '117894b8c7dea830e01f37b4049eef6d_1564968273.png', 29, 'Kyoku', 150, 160, '5000', '', '0', '55a64b4999c36a61ab8da816f7ab9c70_1564968272.mp3', 'Stores/sample_name', '3201637', 'audio/mp3', '7a38b3f171fbd84ed570b7111a60274d_1564968268.mp3', 'Stores/lease_name', 3201115, 'audio/mp3', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-05 02:24:28', '2019-09-05 00:26:38', NULL, NULL, 'disabled', 'manual-membership'),
(210, 0, 61, 134, '692f19662c0f656573b247f316568c74_1565634658.jpeg', 6, 'AJURU', 113, 183, '', '8000', '10000', '54f86c46306768749b4912a9964e61a2_1565634655.mp3', 'Stores/sample_name', '4392403', 'audio/mp3', 'af904afb48ddee23e00115139a4fa428_1565634654.mp3', 'Stores/lease_name', 4392403, 'audio/mp3', 1, '5083d108d89c9b1788a06f8eee515804_1565634655.mp3', 'Stores/premium_name', '4392403', 'audio/mp3', 'd3563620f9efd130412a3fea07a9ce9a_1565634656.wav', 'Stores/exclusive_name', '32280954', 'audio/wav', '2019-08-12 19:30:54', '2019-08-12 19:30:54', NULL, NULL, 'disabled', 'membership-550786279'),
(211, 0, 39, 2, '998effd41dfe2008fd7ecc60ca674530_1566119616.jpg', 6, 'The Moment', 114, 3, '5000', '', '0', 'cac45db7ca2b91d9eb72033f09de222f_1566119615.mp3', 'Stores/sample_name', '1820073', 'audio/mpeg', 'c0e81d7f8bcb705f08978b5898111731_1566119614.mp3', 'Stores/lease_name', 1820073, 'audio/mpeg', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-18 10:13:34', '2019-09-07 12:46:12', NULL, NULL, 'disabled', 'membership-767831156'),
(212, 0, 16, 730, '79d03e19619d736e3857b3dc8687fe85_1566259832.jpg', 29, 'Gluttony', 140, 192, '5000', '', '0', 'e72e43d7cb04aea2c8cffa5909f6462b_1566259832.mp3', 'Stores/sample_name', '3852609', 'audio/mp3', '0ab89cfcd3a8be07e6b40da47c5e6dd9_1566259829.mp3', 'Stores/lease_name', 3852609, 'audio/mp3', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-20 01:10:29', '2019-08-20 01:10:29', NULL, NULL, 'disabled', 'manual-membership'),
(213, 0, 32, 730, '8ae9d2542344d8ffe2098275ed681aca_1566432729.jpg', 27, 'Chandler', 150, 157, '5000', '', '0', '18a6dbf1b4f9715f92082ab89c4329ff_1566432728.mp3', 'Stores/sample_name', '3143007', 'audio/mp3', '04bc252a7f562d24df64bb09b64b0498_1566432727.mp3', 'Stores/lease_name', 3137376, 'audio/mp3', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-22 01:12:07', '2019-08-22 01:12:07', NULL, NULL, 'disabled', 'manual-membership'),
(214, 0, 38, 134, '61e77115182ad32cf5cbc7f48cd92e3d_1566861184.jpeg', 6, 'Daydreamer', 107, 3, '', '', '0', '4e8287dc20cbb21ef9d9043b42a348c3_1566861183.mp3', 'Stores/sample_name', '5214946', 'audio/mp3', '78fa15c96e1f5bc97c5bf0a665baf346_1566861182.mp3', 'Stores/lease_name', 5214946, 'audio/mp3', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-27 00:13:02', '2019-08-27 00:13:02', NULL, NULL, 'disabled', 'membership-550786279'),
(215, 1, 70, 730, 'ddeff4133da998c491976305d030b572_1567640866.jpg', 27, 'WIng', 150, 201, '6000', '', '0', 'bb1b0ba2dd4d4c18cd97ddbcf20c307b_1567640865.mp3', 'Stores/sample_name', '4001507', 'audio/mp3', 'acc8a4237b9624ff0fda5888dce9a02c_1567640863.mp3', 'Stores/lease_name', 4001507, 'audio/mp3', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-05 00:47:43', '2019-09-08 23:05:19', NULL, NULL, 'disabled', 'manual-membership'),
(216, 0, 23, 730, '8c626b4cdbaefd20cf6eaad1379d4808_1567833882.png', 29, 'Bob', 150, 3, '5000', '', '0', 'a947cc292c3dfd1111fd42c63e58d871_1567833881.mp3', 'Stores/sample_name', '3491597', 'audio/mp3', '53254b9e492f8ed9c49427617aec5b8a_1567833879.mp3', 'Stores/lease_name', 3491597, 'audio/mp3', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-07 06:24:39', '2019-09-07 06:24:39', NULL, NULL, 'disabled', 'manual-membership'),
(217, 0, 15, 730, '14dcafe71186757c8b389abdd1c0df25_1568253127.jpg', 29, 'Argonaut', 150, 2, '5000', '', '0', '074f41fbee2f8bb05431b6b81791caeb_1568253126.mp3', 'Stores/sample_name', '3073637', 'audio/mp3', '8ab48afde22a470a1fc94d034a8b2f6f_1568253124.mp3', 'Stores/lease_name', 3073115, 'audio/mp3', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-12 02:52:04', '2019-09-12 02:52:04', NULL, NULL, 'disabled', 'manual-membership'),
(218, 0, 14, 730, 'd8567764b705a1b8883008955232b3fd_1568431535.png', 27, 'Belialuin', 150, 3, '5000', '', '0', '1878ad74622a70ff7c50a2c901475861_1568431534.mp3', 'Stores/sample_name', '3856788', 'audio/mp3', '12c9e4c62cf398cda9bce0dfb38e7285_1568431533.mp3', 'Stores/lease_name', 3856788, 'audio/mp3', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-14 04:25:33', '2019-09-14 04:25:33', NULL, NULL, 'disabled', 'manual-membership'),
(219, 0, 19, 730, 'c04143987c33224ab5f58d506b9f731c_1568591361.png', 30, 'Break', 144, 2, '5000', '', '0', 'c044161d0643bd86f8dd71f4e1e263de_1568591360.mp3', 'Stores/sample_name', '3235597', 'audio/mp3', '21972b842208abb2e088e1e5f416e0f8_1568591359.mp3', 'Stores/lease_name', 3235597, 'audio/mp3', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-16 00:49:19', '2019-09-16 00:49:19', NULL, NULL, 'disabled', 'manual-membership'),
(220, 0, 26, 902, '690d1639e0a72d74216f7d409df4971a_1568599667.png', 6, 'JORO', 96, 3, '6000', '', '0', '023ff5915c6b10b9d17a56d82f6d69a0_1568599666.mp3', 'Stores/sample_name', '6726704', 'audio/mp3', '10a74526b802e6c09d42997627de78bc_1568599665.mp3', 'Stores/lease_name', 6726704, 'audio/mp3', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-16 03:07:45', '2019-09-16 03:07:45', NULL, NULL, 'disabled', ''),
(221, 0, 51, 902, '407cb23e908f59a411619441b2848930_1568604217.png', 6, 'FELA IN ME', 95, 4, '6000', '', '0', '237f5845b5ee78bdc1da0b7a6b1c2732_1568604216.mp3', 'Stores/sample_name', '8781391', 'audio/mp3', 'abb93273ef3b77b64047c39a76cda40f_1568604214.mp3', 'Stores/lease_name', 8781391, 'audio/mp3', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-16 04:23:34', '2019-09-16 04:23:34', NULL, NULL, 'disabled', ''),
(222, 0, 15, 902, '36847efe71b042fed19794922c86e340_1568605465.png', 6, 'ONI RARA', 98, 3, '5000', '', '0', 'b523ad530fa4eb5caf0d0319f9ab7106_1568605464.mp3', 'Stores/sample_name', '4601277', 'audio/mp3', '7e7de8a500c0c372c0be54d61b99695e_1568605462.mp3', 'Stores/lease_name', 4601277, 'audio/mp3', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-16 04:44:22', '2019-09-16 04:44:22', NULL, NULL, 'disabled', ''),
(223, 0, 14, 902, 'bc982ba1b176eff721add875980a6f81_1568606000.png', 7, 'JAGABAN', 100, 3, '5000', '', '0', 'db57cf779447b8b155375b55158ef0a4_1568605999.mp3', 'Stores/sample_name', '3612805', 'audio/mp3', '536bd81cde6b1854ca9376643e8c57fe_1568605998.mp3', 'Stores/lease_name', 3612805, 'audio/mp3', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-16 04:53:18', '2019-09-21 21:56:29', NULL, NULL, 'disabled', ''),
(224, 0, 3, 730, '2cade94a5f1533dffa6023d480948520_1568859957.png', 30, 'Drill', 155, 2, '5000', '7000', '10000', '1e0ed1ec9da5057c1ef21d6a89826254_1568859956.mp3', 'Stores/sample_name', '3227644', 'audio/mp3', 'd712624fdabefa96bb4fec7adbe17964_1568859955.mp3', 'Stores/lease_name', 3222013, 'audio/mp3', 0, '767d4cb6e1e5774eee44c70d4c0ddbaf_1568860243.wav', 'Stores/premium_name', '28409826', 'audio/wav', '881f08dd0692cc28150ba63c267643b4_1568860892.wav', 'Stores/exclusive_name', '28409826', 'audio/wav', '2019-09-19 03:25:55', '2019-09-19 03:41:32', NULL, NULL, 'disabled', 'manual-membership'),
(225, 0, 0, 948, 'dd3d8a3214ff4370bbe6e998e05a3c82_1569238984.png', 20, 'test1', 4, 4, '5678', '7890', '67890', '97bdcd03a27b8fdf03679e530fa157fc_1569238983.mp3', 'Stores/sample_name', '5441139', 'audio/mp3', '7f507f026216b16f8fd642cfa72a792e_1569238981.mp3', 'Stores/lease_name', 5441139, 'audio/mp3', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-23 12:43:01', '2019-09-23 12:43:01', NULL, NULL, 'disabled', '');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` int(10) NOT NULL,
  `customer_id` varchar(255) DEFAULT NULL,
  `plan_id` varchar(255) DEFAULT NULL,
  `subscription_code` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `level_id` int(11) NOT NULL,
  `status` enum('active','disable') NOT NULL,
  `subscription_status` enum('active','disable') NOT NULL DEFAULT 'active',
  `tnx_reference` varchar(255) DEFAULT NULL,
  `created` date DEFAULT NULL,
  `expiry` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `customer_id`, `plan_id`, `subscription_code`, `user_id`, `level_id`, `status`, `subscription_status`, `tnx_reference`, `created`, `expiry`) VALUES
(1, 'CUS_qwe65wcevsv4rou', 'PLN_eatcvjb7yrenzej', 'SUB_tdedjvnf2pt3dk9', 2, 25, 'active', 'disable', 'membership-265993148', '2019-09-15', '2019-09-17'),
(2, 'CUS_5mkhyn240m9n353', 'PLN_1aolpmm4rlzsv19', NULL, 20, 22, 'active', 'active', 'membership-173407322', '2019-09-18', '2020-09-18'),
(3, 'CUS_1mosg4j17g316gh', 'PLN_eatcvjb7yrenzej', NULL, 22, 25, 'active', 'disable', 'membership-407750241', '2018-08-09', '2018-08-08'),
(4, 'CUS_qwe65wcevsv4rou', 'PLN_1zavvhynnox5s8n', 'SUB_6cu7n5osmgwspuk', 2, 24, 'active', 'disable', 'manual-membership', '2019-09-15', '2019-09-17'),
(5, 'CUS_qwe65wcevsv4rou', 'PLN_59gb0gsmu5ace70', NULL, 2, 22, 'active', 'disable', 'membership-767831156', '2019-09-23', '2019-09-22'),
(6, 'CUS_1mosg4j17g316gh', 'PLN_eatcvjb7yrenzej', NULL, 22, 25, 'active', 'disable', 'membership-738087441', '2018-10-09', '2019-10-09'),
(7, 'CUS_tj1capvbx8ftsqy', 'PLN_eatcvjb7yrenzej', 'SUB_nc8l0na4jcwiswj', 9, 25, 'active', 'disable', 'membership-386096272', '2018-06-26', '2019-06-26'),
(8, 'CUS_ve3p97z0eyht0ap', 'PLN_59gb0gsmu5ace70', 'SUB_uaqvn8fgxy91rj0', 36, 22, 'active', 'active', 'membership-605018386', '2019-08-17', '2020-08-17'),
(9, 'CUS_d1glnxgc90fx8ie', 'PLN_eatcvjb7yrenzej', 'SUB_lqbycx0ulh1x2fy', 3, 25, 'active', 'disable', 'membership-794678196', '2018-06-26', '2019-06-26'),
(10, 'CUS_k7llizpap0wiamq', 'PLN_eatcvjb7yrenzej', 'SUB_h94jrh5gyx1mq19', 38, 25, 'active', 'active', 'membership-281850676', '2018-07-07', '2019-07-07'),
(11, 'CUS_q5ciz2hy1dym1jh', 'PLN_x4pycaeyn4hp7lo', NULL, 46, 20, 'active', 'disable', 'membership-809344488', '2019-09-03', '2019-09-19'),
(12, 'CUS_2nd1fsvn4jjqr08', 'PLN_eatcvjb7yrenzej', NULL, 59, 25, 'active', 'disable', 'membership-609898097', '2018-10-09', '2019-10-09'),
(13, 'CUS_ao5qcl0uqmw7qtz', 'PLN_59gb0gsmu5ace70', 'SUB_u9qamec3m8acqgm', 8, 22, 'active', 'disable', 'membership-131498954', '2019-08-17', '2020-08-17'),
(14, 'CUS_lpdqr79v806dg3c', 'PLN_1aolpmm4rlzsv19', 'SUB_ejlhmvk1vf88oo6', 15, 21, 'active', 'disable', 'membership-865309221', '2019-08-17', '2019-09-03'),
(16, 'CUS_82m3hp7rt6gkeu9', 'PLN_x4pycaeyn4hp7lo', 'SUB_b307cb7igt6cax5', 69, 20, 'active', 'disable', 'membership-367685283', '2019-08-17', '2020-08-17'),
(17, 'CUS_7rb5a2qpxvrkz6k', 'PLN_x4pycaeyn4hp7lo', 'SUB_zkl1ypaj7eb3udp', 70, 20, 'active', 'disable', 'membership-312289640', '2018-11-22', '2019-11-22'),
(18, NULL, 'PLN_x4pycaeyn4hp7lo', NULL, 7, 20, 'active', 'disable', 'manual-membership', '2018-06-26', '2019-06-26'),
(19, NULL, 'PLN_1zavvhynnox5s8n', NULL, 74, 24, 'active', 'disable', 'manual-membership', '2018-06-30', '2019-06-30'),
(20, 'CUS_vpxn6kubefzua27', 'PLN_x4pycaeyn4hp7lo', NULL, 52, 20, 'active', 'disable', 'membership-626774923', '2019-03-10', '2020-03-10'),
(21, NULL, 'PLN_1zavvhynnox5s8n', NULL, 75, 24, 'active', 'disable', 'manual-membership', '2018-07-02', '2019-07-02'),
(22, NULL, 'PLN_hmvrbggaw811fzb', NULL, 2, 23, 'active', 'disable', 'manual-membership', '2019-09-15', '2019-09-17'),
(24, NULL, 'PLN_1aolpmm4rlzsv19', NULL, 82, 21, 'active', 'disable', 'manual-membership', '2019-08-17', '2020-08-17'),
(25, NULL, 'PLN_1aolpmm4rlzsv19', NULL, 83, 21, 'active', 'disable', 'manual-membership', '2019-08-17', '2020-08-17'),
(26, NULL, 'PLN_1aolpmm4rlzsv19', NULL, 84, 21, 'active', 'disable', 'manual-membership', '2018-07-12', '2019-07-12'),
(27, NULL, 'PLN_1aolpmm4rlzsv19', NULL, 85, 21, 'active', 'disable', 'manual-membership', '2019-08-17', '2020-08-17'),
(28, NULL, 'PLN_1aolpmm4rlzsv19', NULL, 87, 21, 'active', 'disable', 'manual-membership', '2019-08-17', '2020-08-17'),
(29, NULL, 'PLN_hmvrbggaw811fzb', NULL, 86, 23, 'active', 'disable', 'manual-membership', '2018-07-17', '2019-07-17'),
(30, NULL, 'PLN_hmvrbggaw811fzb', NULL, 9, 23, 'active', 'active', 'manual-membership', '2019-09-21', '2020-03-21'),
(31, NULL, 'PLN_1aolpmm4rlzsv19', NULL, 88, 21, 'active', 'disable', 'manual-membership', '2019-08-17', '2020-08-17'),
(32, NULL, 'PLN_hmvrbggaw811fzb', NULL, 89, 23, 'active', 'disable', 'manual-membership', '2018-07-19', '2019-07-19'),
(33, NULL, 'PLN_1aolpmm4rlzsv19', NULL, 90, 21, 'active', 'disable', 'manual-membership', '2019-08-17', '2020-08-17'),
(34, NULL, 'PLN_1aolpmm4rlzsv19', NULL, 91, 21, 'active', 'disable', 'manual-membership', '2019-08-17', '2020-08-17'),
(35, NULL, 'PLN_1aolpmm4rlzsv19', NULL, 92, 21, 'active', 'disable', 'manual-membership', '2019-08-17', '2020-08-17'),
(36, 'CUS_x3f5mobgm6d3q0j', 'PLN_x4pycaeyn4hp7lo', 'SUB_j54fp164xsbpqe0', 93, 20, 'active', 'disable', 'membership-310098306', '2019-03-10', '2020-03-10'),
(37, NULL, 'PLN_1aolpmm4rlzsv19', NULL, 92, 21, 'active', 'disable', 'manual-membership', '2018-07-22', '2019-07-22'),
(38, NULL, 'PLN_1aolpmm4rlzsv19', NULL, 94, 21, 'active', 'disable', 'manual-membership', '2019-08-17', '2020-08-17'),
(39, NULL, 'PLN_1aolpmm4rlzsv19', NULL, 96, 21, 'active', 'disable', 'manual-membership', '2019-08-17', '2020-08-17'),
(40, NULL, 'PLN_1aolpmm4rlzsv19', NULL, 100, 21, 'active', 'disable', 'manual-membership', '2018-07-24', '2018-10-08'),
(41, NULL, 'PLN_1aolpmm4rlzsv19', NULL, 95, 21, 'active', 'disable', 'manual-membership', '2019-08-17', '2020-08-17'),
(42, NULL, 'PLN_1aolpmm4rlzsv19', NULL, 103, 21, 'active', 'disable', 'manual-membership', '2019-08-17', '2020-08-17'),
(43, NULL, 'PLN_x4pycaeyn4hp7lo', NULL, 99, 20, 'active', 'disable', 'manual-membership', '2019-08-17', '2020-08-17'),
(44, NULL, 'PLN_x4pycaeyn4hp7lo', NULL, 106, 20, 'active', 'disable', 'manual-membership', '2019-08-17', '2020-08-17'),
(45, NULL, 'PLN_eatcvjb7yrenzej', NULL, 42, 25, 'active', 'disable', 'manual-membership', '2018-08-09', '2019-08-09'),
(46, NULL, 'PLN_eatcvjb7yrenzej', NULL, 47, 25, 'active', 'disable', 'manual-membership', '2018-08-09', '2019-08-09'),
(47, NULL, 'PLN_eatcvjb7yrenzej', NULL, 67, 25, 'active', 'disable', 'manual-membership', '2018-08-09', '2019-08-09'),
(48, 'CUS_tj1capvbx8ftsqy', 'PLN_x4pycaeyn4hp7lo', 'SUB_knd2kri86e5bi7b', 9, 20, 'active', 'active', 'membership-122257906', '2019-09-20', '2020-03-20'),
(49, 'CUS_042wmslyeheu2fw', 'PLN_1aolpmm4rlzsv19', NULL, 133, 21, 'active', 'disable', 'membership-29436692', '2019-03-10', '2020-03-10'),
(50, 'CUS_fbd76i95ubdjrt8', 'PLN_1aolpmm4rlzsv19', 'SUB_tr2dy6ovbam2o7k', 117, 21, 'active', 'active', 'membership-829034517', '2019-08-17', '2020-08-17'),
(51, 'CUS_yssgm2nowmp6cl1', 'PLN_eatcvjb7yrenzej', 'SUB_vx52wauvmirhl2q', 146, 25, 'active', 'active', 'membership-297341837', '2019-03-10', '2020-03-10'),
(52, 'CUS_n8qb65fafgzuk0j', 'PLN_1aolpmm4rlzsv19', 'SUB_0ll4ic3b29hga5t', 134, 21, 'active', 'active', 'membership-550786279', '2019-03-10', '2020-03-10'),
(53, 'CUS_lhk9nkh01nr3bc1', 'PLN_1aolpmm4rlzsv19', 'SUB_nvj0t4tmp9mfr9p', 151, 21, 'active', 'active', 'membership-525428192', '2019-08-17', '2020-08-17'),
(54, 'CUS_fdsb97z9yta70nf', 'PLN_x4pycaeyn4hp7lo', NULL, 239, 20, 'active', 'disable', 'membership-461217746', '2019-03-10', '2020-03-10'),
(55, 'CUS_s8pwjx38e0n37n1', 'PLN_eatcvjb7yrenzej', 'SUB_c7sfnq5b2yiodj0', 368, 25, 'active', 'active', 'membership-457057462', '2019-01-02', '2019-02-02'),
(56, 'CUS_s8pwjx38e0n37n1', 'PLN_x4pycaeyn4hp7lo', 'SUB_pw35f6f8ov7c3k2', 368, 20, 'active', 'active', 'membership-490955788', '2019-08-17', '2020-08-17'),
(57, NULL, 'PLN_59gb0gsmu5ace70', NULL, 26, 22, 'active', 'disable', 'manual-membership', '2019-01-09', '2020-01-09'),
(58, 'CUS_f629drjay3ry1ao', 'PLN_x4pycaeyn4hp7lo', 'SUB_cy3ufws9io3ec2s', 379, 20, 'active', 'active', 'membership-935084569', '2019-09-20', '2020-09-20'),
(59, NULL, 'PLN_eatcvjb7yrenzej', NULL, 393, 25, 'active', 'disable', 'manual-membership', '2019-01-19', '2020-01-19'),
(60, NULL, 'PLN_hmvrbggaw811fzb', NULL, 406, 23, 'active', 'disable', 'manual-membership', '2019-01-20', '2020-01-20'),
(61, NULL, 'PLN_hmvrbggaw811fzb', NULL, 408, 23, 'active', 'disable', 'manual-membership', '2019-01-20', '2020-01-20'),
(62, NULL, 'PLN_x4pycaeyn4hp7lo', NULL, 404, 20, 'active', 'disable', 'manual-membership', '2019-01-20', '2020-01-20'),
(63, NULL, 'PLN_eatcvjb7yrenzej', NULL, 411, 25, 'active', 'disable', 'manual-membership', '2019-01-21', '2020-01-21'),
(64, NULL, 'PLN_eatcvjb7yrenzej', NULL, 410, 25, 'active', 'disable', 'manual-membership', '2019-01-21', '2020-01-21'),
(65, 'CUS_uz5jkqy9kt0xvtp', 'PLN_x4pycaeyn4hp7lo', 'SUB_ahytx9rslbpewqi', 382, 20, 'active', 'active', 'membership-826962469', '2019-08-17', '2020-08-17'),
(66, NULL, 'PLN_eatcvjb7yrenzej', NULL, 421, 25, 'active', 'disable', 'manual-membership', '2019-01-26', '2020-01-26'),
(67, NULL, 'PLN_eatcvjb7yrenzej', NULL, 422, 25, 'active', 'disable', 'manual-membership', '2019-01-27', '2020-01-27'),
(68, NULL, 'PLN_eatcvjb7yrenzej', NULL, 423, 25, 'active', 'disable', 'manual-membership', '2019-01-28', '2020-01-28'),
(69, 'CUS_gaq52l6u9ezhc2c', 'PLN_x4pycaeyn4hp7lo', 'SUB_g3zluru3rsy00ew', 452, 20, 'active', 'active', 'membership-266964053', '2019-08-17', '2020-08-17'),
(70, NULL, 'PLN_eatcvjb7yrenzej', NULL, 469, 25, 'active', 'disable', 'manual-membership', '2019-02-15', '2020-02-15'),
(71, 'CUS_ocaca7v0onls7b6', 'PLN_x4pycaeyn4hp7lo', 'SUB_1skytyi576t7wjm', 149, 20, 'active', 'active', 'membership-158863604', '2019-08-17', '2020-08-17'),
(72, NULL, 'PLN_1aolpmm4rlzsv19', NULL, 490, 21, 'active', 'disable', 'manual-membership', '2019-02-27', '2020-02-27'),
(73, 'CUS_4msg1r3n1iogxa2', 'PLN_x4pycaeyn4hp7lo', 'SUB_ctnal58xcp65c5q', 519, 20, 'active', 'active', 'membership-413256245', '2019-08-17', '2020-08-17'),
(74, NULL, 'PLN_eatcvjb7yrenzej', NULL, 418, 25, 'active', 'disable', 'manual-membership', '2019-03-01', '2020-03-01'),
(75, 'CUS_ecqop7q1i9rcisv', 'PLN_x4pycaeyn4hp7lo', 'SUB_ecaag0wpve4315y', 524, 20, 'active', 'active', 'membership-266427055', '2019-08-17', '2020-08-17'),
(76, NULL, 'PLN_eatcvjb7yrenzej', NULL, 535, 25, 'active', 'disable', 'manual-membership', '2019-03-02', '2020-03-02'),
(77, 'CUS_36hoeoburppfg9b', 'PLN_1aolpmm4rlzsv19', 'SUB_bn61oa6hiuna89j', 567, 21, 'active', 'active', 'membership-251028113', '2019-08-17', '2020-08-17'),
(78, 'CUS_wqgrxrafpixo86b', 'PLN_x4pycaeyn4hp7lo', 'SUB_mtryl9rx69ylhnf', 325, 20, 'active', 'active', 'membership-204818833', '2019-08-17', '2020-08-17'),
(79, NULL, 'PLN_1aolpmm4rlzsv19', NULL, 543, 21, 'active', 'disable', 'manual-membership', '2019-03-10', '2020-03-10'),
(80, NULL, 'PLN_x4pycaeyn4hp7lo', NULL, 730, 20, 'active', 'active', 'manual-membership', '2019-09-16', '2020-09-16'),
(81, 'CUS_qwe65wcevsv4rou', 'PLN_x4pycaeyn4hp7lo', '', 2, 20, 'active', 'active', 'manual-membership', '2019-09-24', '2019-10-24'),
(82, NULL, 'PLN_1aolpmm4rlzsv19', NULL, 2, 21, 'active', 'disable', 'manual-membership', '2019-09-18', '2019-09-17'),
(83, NULL, 'PLN_x4pycaeyn4hp7lo', NULL, 902, 20, 'active', 'active', '', '2019-09-16', '2020-09-16'),
(84, NULL, 'PLN_1aolpmm4rlzsv19', NULL, 379, 21, 'active', 'active', '', '2019-09-20', '2020-09-20'),
(85, 'CUS_hxt6aq6v9p9j95k', 'PLN_x4pycaeyn4hp7lo', '', 948, 20, 'active', 'active', '', '2019-09-24', '2019-10-24'),
(86, NULL, 'PLN_1aolpmm4rlzsv19', NULL, 948, 21, 'active', 'disable', '', '2019-09-23', '2019-09-22'),
(87, NULL, 'PLN_59gb0gsmu5ace70', NULL, 948, 22, 'active', 'disable', '', '2019-09-23', '2019-09-22');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions_bkp`
--

CREATE TABLE `subscriptions_bkp` (
  `id` int(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `level_id` int(11) NOT NULL,
  `status` enum('active','disable') NOT NULL,
  `tnx_reference` varchar(255) NOT NULL,
  `created` date DEFAULT NULL,
  `expiry` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscriptions_bkp`
--

INSERT INTO `subscriptions_bkp` (`id`, `user_id`, `level_id`, `status`, `tnx_reference`, `created`, `expiry`) VALUES
(1, 2, 25, 'active', 'membership-265993148', '2018-06-26', '2019-06-26'),
(2, 20, 21, 'active', 'membership-173407322', '2018-06-26', '2019-06-26'),
(3, 22, 25, 'active', 'membership-407750241', '2018-08-09', '2018-08-08'),
(4, 2, 24, 'active', 'membership-212623163', '2019-01-19', '2020-01-19'),
(5, 2, 22, 'active', 'membership-767831156', '2019-02-12', '2020-02-12'),
(6, 22, 25, 'active', 'membership-738087441', '2018-10-09', '2019-10-09'),
(7, 9, 25, 'active', 'membership-386096272', '2018-06-26', '2019-06-26'),
(8, 36, 22, 'active', 'membership-605018386', '2018-06-26', '2019-04-17'),
(9, 3, 25, 'active', 'membership-794678196', '2018-07-07', '2019-10-18'),
(10, 38, 25, 'active', 'membership-281850676', '2018-07-07', '2019-07-07'),
(11, 46, 20, 'active', 'membership-809344488', '2019-03-10', '2020-03-10'),
(12, 59, 25, 'active', 'membership-609898097', '2018-10-09', '2019-10-09'),
(13, 8, 22, 'active', 'membership-131498954', '2018-07-07', '2019-07-07'),
(14, 15, 21, 'active', 'membership-865309221', '2019-03-11', '2020-03-11'),
(16, 69, 20, 'active', 'membership-367685283', '2018-08-09', '2019-08-09'),
(17, 70, 20, 'active', 'membership-312289640', '2018-11-22', '2019-11-22'),
(18, 7, 20, 'active', 'manual-membership', '2018-06-26', '2019-06-26'),
(19, 74, 24, 'active', 'manual-membership', '2018-06-30', '2019-06-30'),
(20, 52, 20, 'active', 'membership-626774923', '2019-03-10', '2020-03-10'),
(21, 75, 24, 'active', 'manual-membership', '2018-07-02', '2019-07-02'),
(22, 2, 23, 'active', 'manual-membership', '2019-02-20', '2020-02-20'),
(24, 82, 21, 'active', 'manual-membership', '2018-07-10', '2019-07-10'),
(25, 83, 21, 'active', 'manual-membership', '2018-07-10', '2019-07-10'),
(26, 84, 21, 'active', 'manual-membership', '2018-07-12', '2019-07-12'),
(27, 85, 21, 'active', 'manual-membership', '2018-07-17', '2019-07-17'),
(28, 87, 21, 'active', 'manual-membership', '2018-07-17', '2019-07-17'),
(29, 86, 23, 'active', 'manual-membership', '2018-07-17', '2019-07-17'),
(30, 9, 23, 'active', 'manual-membership', '2018-07-18', '2019-07-18'),
(31, 88, 21, 'active', 'manual-membership', '2018-07-19', '2019-07-19'),
(32, 89, 23, 'active', 'manual-membership', '2018-07-19', '2019-07-19'),
(33, 90, 21, 'active', 'manual-membership', '2018-07-21', '2019-07-21'),
(34, 91, 21, 'active', 'manual-membership', '2018-07-22', '2019-07-22'),
(35, 92, 21, 'active', 'manual-membership', '2018-07-22', '2018-07-21'),
(36, 93, 20, 'active', 'membership-310098306', '2019-03-10', '2020-03-10'),
(37, 92, 21, 'active', 'manual-membership', '2018-07-22', '2019-07-22'),
(38, 94, 21, 'active', 'manual-membership', '2018-07-23', '2019-07-23'),
(39, 96, 21, 'active', 'manual-membership', '2018-07-23', '2019-07-23'),
(40, 100, 21, 'active', 'manual-membership', '2018-07-24', '2018-10-08'),
(41, 95, 21, 'active', 'manual-membership', '2018-07-24', '2019-07-24'),
(42, 103, 21, 'active', 'manual-membership', '2018-07-26', '2019-07-26'),
(43, 99, 20, 'active', 'manual-membership', '2018-07-28', '2019-07-28'),
(44, 106, 20, 'active', 'manual-membership', '2018-08-08', '2019-08-08'),
(45, 42, 25, 'active', 'manual-membership', '2018-08-09', '2019-08-09'),
(46, 47, 25, 'active', 'manual-membership', '2018-08-09', '2019-08-09'),
(47, 67, 25, 'active', 'manual-membership', '2018-08-09', '2019-08-09'),
(48, 9, 20, 'active', 'membership-122257906', '2018-08-30', '2018-09-30'),
(49, 133, 21, 'active', 'membership-29436692', '2019-03-10', '2020-03-10'),
(50, 117, 21, 'active', 'membership-829034517', '2018-10-09', '2019-10-09'),
(51, 146, 25, 'active', 'membership-297341837', '2019-03-10', '2020-03-10'),
(52, 134, 21, 'active', 'membership-550786279', '2019-03-10', '2020-03-10'),
(53, 151, 21, 'active', 'membership-525428192', '2019-03-10', '2020-03-10'),
(54, 239, 20, 'active', 'membership-461217746', '2019-03-10', '2020-03-10'),
(55, 368, 25, 'active', 'membership-457057462', '2019-01-02', '2019-02-02'),
(56, 368, 20, 'active', 'membership-490955788', '2019-01-02', '2019-02-02'),
(57, 26, 22, 'active', 'manual-membership', '2019-01-09', '2020-01-09'),
(58, 379, 20, 'active', 'membership-935084569', '2019-03-10', '2020-03-10'),
(59, 393, 25, 'active', 'manual-membership', '2019-01-19', '2020-01-19'),
(60, 406, 23, 'active', 'manual-membership', '2019-01-20', '2020-01-20'),
(61, 408, 23, 'active', 'manual-membership', '2019-01-20', '2020-01-20'),
(62, 404, 20, 'active', 'manual-membership', '2019-01-20', '2020-01-20'),
(63, 411, 25, 'active', 'manual-membership', '2019-01-21', '2020-01-21'),
(64, 410, 25, 'active', 'manual-membership', '2019-01-21', '2020-01-21'),
(65, 382, 20, 'active', 'membership-826962469', '2019-01-25', '2019-02-25'),
(66, 421, 25, 'active', 'manual-membership', '2019-01-26', '2020-01-26'),
(67, 422, 25, 'active', 'manual-membership', '2019-01-27', '2020-01-27'),
(68, 423, 25, 'active', 'manual-membership', '2019-01-28', '2020-01-28'),
(69, 452, 20, 'active', 'membership-266964053', '2019-02-11', '2019-03-11'),
(70, 469, 25, 'active', 'manual-membership', '2019-02-15', '2020-02-15'),
(71, 149, 20, 'active', 'membership-158863604', '2019-02-25', '2019-03-25'),
(72, 490, 21, 'active', 'manual-membership', '2019-02-27', '2020-02-27'),
(73, 519, 20, 'active', 'membership-413256245', '2019-03-01', '2019-04-01'),
(74, 418, 25, 'active', 'manual-membership', '2019-03-01', '2020-03-01'),
(75, 524, 20, 'active', 'membership-266427055', '2019-03-01', '2019-04-01'),
(76, 535, 25, 'active', 'manual-membership', '2019-03-02', '2020-03-02'),
(77, 567, 21, 'active', 'membership-251028113', '2019-03-05', '2019-04-05'),
(78, 325, 20, 'active', 'membership-204818833', '2019-03-05', '2019-04-05'),
(79, 543, 21, 'active', 'manual-membership', '2019-03-10', '2020-03-10');

-- --------------------------------------------------------

--
-- Table structure for table `swriterequests`
--

CREATE TABLE `swriterequests` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `songwriter_id` int(11) NOT NULL,
  `song_title` varchar(100) NOT NULL,
  `job_description` varchar(400) DEFAULT NULL,
  `project` text NOT NULL,
  `reference_link` varchar(255) NOT NULL,
  `orderid` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `swriterequests`
--

INSERT INTO `swriterequests` (`id`, `user_id`, `songwriter_id`, `song_title`, `job_description`, `project`, `reference_link`, `orderid`, `status`, `created`, `modified`) VALUES
(1, 9, 2, 'Testing', 'Toplining/Songwriting, Vocal Features On Track', 'Just testing', 'https://www.w3schools.com/cssref/css3_pr_word-wrap.asp', 'swr1538117909', 'pending', '2018-09-28 06:58:28', '2018-09-28 06:58:28'),
(2, 9, 2, 'My Song', 'Toplining/Songwriting, Vocal Features On Track, Consultation/Strategy', 'kskslsla;laL;laa,aA A,ALAL;Al;al;aa;llalaa;aa;aa ALAL;ALALALALALALALA', 'jddkwkkw dkdkdkdkdkdkdkd', 'swr1540075318', 'pending', '2018-10-20 23:41:58', '2018-10-20 23:41:58'),
(3, 295, 2, 'My mother', 'Toplining/Songwriting, Vocal Features On Track', 'I have a beat I want you to help me topline and songrite with vocal  harmony', 'will send it later', 'swr1540648006', 'pending', '2018-10-27 14:46:46', '2018-10-27 14:46:46'),
(4, 9, 2, 'Yehsgsgs', 'Toplining/Songwriting, Vocal Features On Track, Consultation/Strategy', 'Hgsdhahshshababsh', 'Hshsjsnsjjaba', 'swr1547251094', 'pending', '2019-01-12 00:58:14', '2019-01-12 00:58:14');

-- --------------------------------------------------------

--
-- Table structure for table `tokenize_tokens`
--

CREATE TABLE `tokenize_tokens` (
  `id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `foreign_alias` varchar(255) NOT NULL,
  `foreign_table` varchar(255) NOT NULL,
  `foreign_key` varchar(255) NOT NULL,
  `foreign_data` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `expired` datetime NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tokenize_tokens`
--

INSERT INTO `tokenize_tokens` (`id`, `token`, `foreign_alias`, `foreign_table`, `foreign_key`, `foreign_data`, `status`, `expired`, `created`, `modified`) VALUES
(1, '291db0c83f6327fe197931e8f6382430', 'Users', 'users', '1', '{\"email\":\"admin@amplifihub.com\"}', 1, '2018-05-14 19:42:13', '2018-05-11 19:42:13', '2018-05-11 19:42:52'),
(2, '41161d20edef88f2c8b78336ef1174c6', 'Users', 'users', '2', '{\"email\":\"ejitexflow@yahoo.com\"}', 1, '2018-05-14 21:41:43', '2018-05-11 21:41:43', '2018-05-11 21:42:10'),
(3, 'ed35cb157d1a7ce55c9d3f96eb9bb98a', 'Users', 'users', '3', '{\"email\":\"iiflowzfiwonsoricruise@yahoo.com\"}', 1, '2018-05-15 08:19:23', '2018-05-12 08:19:23', '2018-05-13 02:02:19'),
(4, '8af9113e778fc6c9d8d1b4020e24b730', 'Users', 'users', '4', '{\"email\":\"achusimchuckyz@gmail.com\"}', 1, '2018-05-15 13:18:48', '2018-05-12 13:18:48', '2018-05-12 13:19:58'),
(7, 'b3c4f25999f3a7f3b2d70470b710d712', 'Users', 'users', '7', '{\"email\":\"cartomailing@gmail.com\"}', 1, '2018-05-18 09:58:44', '2018-05-15 09:58:44', '2018-05-15 10:03:21'),
(8, '21906a8cfe336e309050103e36e1597b', 'Users', 'users', '8', '{\"email\":\"udoggzbeat@gmail.com\"}', 1, '2018-05-18 19:58:19', '2018-05-15 19:58:19', '2018-05-15 19:58:41'),
(9, 'baab04341ad7d1ce774d1f3c4572fbc0', 'Users', 'users', '9', '{\"email\":\"effkhayyondbeat@gmail.com\"}', 1, '2018-05-18 21:25:06', '2018-05-15 21:25:06', '2018-05-15 21:25:32'),
(10, '9cb566210a298bf8e33b84e8476f7ba5', 'Users', 'users', '9', '{\"email\":\"effkhayyondbeat@gmail.com\"}', 1, '2018-05-18 21:27:36', '2018-05-15 21:27:36', '2018-05-15 21:28:04'),
(11, 'e24406e84941632babd064be748e677d', 'Users', 'users', '10', '{\"email\":\"seuncee@gmail.com\"}', 1, '2018-05-19 20:04:42', '2018-05-16 20:04:42', '2018-05-16 20:05:38'),
(12, '14c423c7335b31beaad7da0a6ce2afbf', 'Users', 'users', '11', '{\"email\":\"seuncee@gmail.com\"}', 0, '2018-05-19 20:05:05', '2018-05-16 20:05:05', '2018-05-16 20:05:05'),
(13, '16ea5b6d911075dddb5c0c32fce59fa1', 'Users', 'users', '10', '{\"email\":\"seuncee@gmail.com\"}', 1, '2018-05-19 20:06:31', '2018-05-16 20:06:31', '2018-05-16 20:07:20'),
(14, '58d103901679fda36ae494ec9b4fdb47', 'Users', 'users', '12', '{\"email\":\"Me@francisokaformbah.com\"}', 1, '2018-05-20 13:27:23', '2018-05-17 13:27:23', '2018-05-17 13:32:24'),
(15, 'f98f91598698485202f2ff4cb2b42661', 'Users', 'users', '13', '{\"email\":\"samuelkegites@gmail.com\"}', 1, '2018-05-20 15:56:53', '2018-05-17 15:56:53', '2018-05-17 15:58:32'),
(16, '25b4151170b8449892f0e8d7d55c1825', 'Users', 'users', '14', '{\"email\":\"maduabuchi5@gmail.com\"}', 1, '2018-05-20 21:30:53', '2018-05-17 21:30:53', '2018-05-17 21:31:21'),
(17, 'c4984e651cd915dfe9850c6a76d71666', 'Users', 'users', '15', '{\"email\":\"kingcoven@gmail.com\"}', 1, '2018-05-21 10:39:29', '2018-05-18 10:39:29', '2018-05-18 10:40:11'),
(18, '97ead008e1459f674f29fd9c764c78e2', 'Users', 'users', '16', '{\"email\":\"opeemix@gmail.com\"}', 1, '2018-05-22 08:13:36', '2018-05-19 08:13:36', '2018-05-19 08:15:15'),
(19, '8c5dd993670564745afd42d45cdcd8ca', 'Users', 'users', '17', '{\"email\":\"producawa@gmail.com\"}', 1, '2018-05-22 08:16:05', '2018-05-19 08:16:05', '2018-05-19 08:16:35'),
(20, '0a4e2d54ca4f7c8995113671e0326b16', 'Users', 'users', '18', '{\"email\":\"plumpybeatz@yahoo.com\"}', 1, '2018-05-22 08:36:12', '2018-05-19 08:36:12', '2018-05-19 08:45:12'),
(21, '28e63723253be8ea9e034bd1f1c2515f', 'Users', 'users', '19', '{\"email\":\"plumpybeatz@yahoo.com\"}', 1, '2018-05-22 08:42:37', '2018-05-19 08:42:37', '2018-05-19 09:01:01'),
(22, 'aaa27f965ae5442a4456e47930590ad1', 'Users', 'users', '20', '{\"email\":\"Jukeboxmusicafrica@gmail.com\"}', 1, '2018-05-22 09:30:01', '2018-05-19 09:30:01', '2018-05-19 12:06:58'),
(23, '22eebf8f3f3ea6afcaac1f9f170d4f73', 'Users', 'users', '21', '{\"email\":\"mchillsmc@gmail.com\"}', 1, '2018-05-22 10:13:39', '2018-05-19 10:13:39', '2018-05-19 10:14:25'),
(24, '04bc17a8b52af2fd19abe8b05f822ba8', 'Users', 'users', '22', '{\"email\":\"tobbyclark@gmail.com\"}', 1, '2018-05-22 14:00:02', '2018-05-19 14:00:02', '2018-05-19 14:00:51'),
(25, 'd4abb347c67aa93d50effec7eed87be0', 'Users', 'users', '23', '{\"email\":\"clarktobby@yahoo.com\"}', 0, '2018-05-22 14:18:48', '2018-05-19 14:18:48', '2018-05-19 14:18:48'),
(26, '10fcd77bfc27d9ce5008b744fc422b93', 'Users', 'users', '24', '{\"email\":\"nkeanyadic@yahoo.com\"}', 1, '2018-05-22 19:05:52', '2018-05-19 19:05:52', '2018-05-19 19:07:59'),
(27, '64cc3d481ddd0ddf1da7a354e1c080c9', 'Users', 'users', '25', '{\"email\":\"pelijbiz@gmail.com\"}', 1, '2018-05-22 21:59:50', '2018-05-19 21:59:50', '2018-05-19 22:02:39'),
(28, '417456a4c62fbc8608b47c68c6a7814c', 'Users', 'users', '26', '{\"email\":\"josephtoyosi2014@gmail.com\"}', 1, '2018-05-23 12:41:13', '2018-05-20 12:41:13', '2018-05-20 12:48:59'),
(29, 'abc8b4b71fdb117216a2262e58c59f0e', 'Users', 'users', '27', '{\"email\":\"foluglory@gmail.com\"}', 1, '2018-05-23 13:07:49', '2018-05-20 13:07:49', '2018-05-20 13:42:27'),
(30, '749e9df09468740aabbed43d0bc4b4e8', 'Users', 'users', '28', '{\"email\":\"hoodmusicnaija@gmial.com\"}', 1, '2018-05-23 20:05:02', '2018-05-20 20:05:02', '2018-05-20 20:24:30'),
(31, '57b11f6d55e1499652cd79a37790eb38', 'Users', 'users', '29', '{\"email\":\"beatzbymz@gmail.com\"}', 1, '2018-05-25 13:10:06', '2018-05-22 13:10:06', '2018-05-22 13:10:53'),
(32, '40fc842d35f78378ba655960068dbdc8', 'Users', 'users', '30', '{\"email\":\"taiyetayo081@gmail.com\"}', 1, '2018-05-26 07:59:10', '2018-05-23 07:59:10', '2018-05-23 08:02:48'),
(33, '9b06d3bbd70468fe563104e0c5ef69d0', 'Users', 'users', '31', '{\"email\":\"larrygonbeat2009@gmail.com\"}', 1, '2018-05-26 09:38:19', '2018-05-23 09:38:19', '2018-05-23 09:45:41'),
(34, '1b5d2befd55d2714762cc4817da51045', 'Users', 'users', '32', '{\"email\":\"phaatjoestino@yahoo.com\"}', 0, '2018-05-26 09:58:12', '2018-05-23 09:58:12', '2018-05-23 09:58:12'),
(36, '68e7a1b7406375fdacd9445e25cd822d', 'Users', 'users', '34', '{\"email\":\"Swergvic@gmail.com\"}', 1, '2018-05-27 12:10:34', '2018-05-24 12:10:34', '2018-05-24 12:11:47'),
(37, 'c9eb69c1f11663b61211d0ccb7100675', 'Users', 'users', '35', '{\"email\":\"terrestialbeats5@gmail.com\"}', 1, '2018-05-27 22:45:02', '2018-05-24 22:45:02', '2018-05-24 22:46:04'),
(38, '56f454fd99fe205a6a5673bbdf2b050a', 'Users', 'users', '36', '{\"email\":\"dxl5000@gmail.com\"}', 1, '2018-05-27 23:04:13', '2018-05-24 23:04:13', '2018-05-24 23:06:31'),
(39, 'cb2ed330da91a103b4ad744e0d55d705', 'Users', 'users', '37', '{\"email\":\"dannyekeh58@gmail.om\"}', 0, '2018-05-28 08:53:10', '2018-05-25 08:53:10', '2018-05-25 08:53:10'),
(40, '4bf691db045ee5444137e412be2f0753', 'Users', 'users', '38', '{\"email\":\"beyondif@yahoo.com\"}', 1, '2018-05-28 08:59:11', '2018-05-25 08:59:11', '2018-05-25 09:00:18'),
(41, '90dc41d2f1cfa0e11b8357b0d2ecfbb5', 'Users', 'users', '39', '{\"email\":\"beyondif@yahoo.com\"}', 0, '2018-05-28 08:59:35', '2018-05-25 08:59:35', '2018-05-25 08:59:35'),
(42, 'c54a053e9bbffaafe10a936e0994ce5b', 'Users', 'users', '40', '{\"email\":\"jaydokinho@gmail.com\"}', 1, '2018-05-28 10:54:48', '2018-05-25 10:54:48', '2018-05-25 10:55:21'),
(43, 'c269b51310d34ff5ddd45cca537d6ecf', 'Users', 'users', '41', '{\"email\":\"kingsleyoffice25@gmail.com\"}', 0, '2018-05-28 22:57:14', '2018-05-25 22:57:15', '2018-05-25 22:57:15'),
(44, '4d78a4a1e0aa9047f494f08f00f94c23', 'Users', 'users', '42', '{\"email\":\"swaggzmich@gmail.com\"}', 1, '2018-05-29 09:36:03', '2018-05-26 09:36:03', '2018-05-26 09:38:06'),
(45, 'd8591f4220d233956ad20944e80079dc', 'Users', 'users', '43', '{\"email\":\"swaggzmich@gmail.com\"}', 0, '2018-05-29 09:36:57', '2018-05-26 09:36:57', '2018-05-26 09:36:57'),
(46, 'c4c3af8fcffd7ae95296a849bb74d856', 'Users', 'users', '44', '{\"email\":\"hardewaleyprince16@gmail.com\"}', 1, '2018-05-29 11:32:29', '2018-05-26 11:32:29', '2018-05-26 11:37:55'),
(47, 'ca04900df9e0dffcd42b5ce349a739f3', 'Users', 'users', '45', '{\"email\":\"asomughasonia@yahoo.com\"}', 0, '2018-05-29 12:47:20', '2018-05-26 12:47:20', '2018-05-26 12:47:20'),
(48, '151258f0213be938dac7cbd74a6cfea8', 'Users', 'users', '46', '{\"email\":\"monkeybeat111@gmail.com\"}', 1, '2018-05-29 18:41:54', '2018-05-26 18:41:54', '2018-05-26 18:46:35'),
(49, '27fa0aab44d5d307d8147ad8591ac7af', 'Users', 'users', '46', '{\"email\":\"monkeybeat111@gmail.com\"}', 1, '2018-05-29 18:49:57', '2018-05-26 18:49:57', '2018-05-26 18:51:01'),
(50, '4385bbc0ee0aa5b4633138d88b5bcdd6', 'Users', 'users', '47', '{\"email\":\"dkdonkeke@gmail.com\"}', 1, '2018-06-02 11:54:23', '2018-05-30 11:54:23', '2018-05-30 11:55:21'),
(51, '5921e797eb5d85ce97dc6e2d1b939319', 'Users', 'users', '48', '{\"email\":\"freaksonar@gmail.com\"}', 1, '2018-06-04 17:27:28', '2018-06-01 17:27:28', '2018-06-01 17:28:11'),
(52, '10ab045b04989e580ade9cae1889cd32', 'Users', 'users', '49', '{\"email\":\"titantanios@gmail.com\"}', 0, '2018-06-05 12:32:33', '2018-06-02 12:32:33', '2018-06-02 12:32:33'),
(53, '6d8f807fc6c7cef730dda7ebf98c37df', 'Users', 'users', '50', '{\"email\":\"ganzlite@gmail.com\"}', 1, '2018-06-05 14:18:08', '2018-06-02 14:18:08', '2018-06-02 14:48:24'),
(54, 'ef1eb4aae50bd8f43c4ebb5d6721c1a8', 'Users', 'users', '51', '{\"email\":\"ganzlite@gmail.com\"}', 0, '2018-06-05 14:24:05', '2018-06-02 14:24:05', '2018-06-02 14:24:05'),
(55, '4da5ad2e8217ec658af8e61abb09865d', 'Users', 'users', '52', '{\"email\":\"officialogproduction@gmail.com\"}', 1, '2018-06-05 20:52:13', '2018-06-02 20:52:13', '2018-06-02 20:59:41'),
(56, 'e30f13eec10a4f5e2a7078a7329b0d75', 'Users', 'users', '53', '{\"email\":\"mbelumelvin@gmail.com\"}', 0, '2018-06-07 09:11:26', '2018-06-04 09:11:26', '2018-06-04 09:11:26'),
(57, 'd22bc4486cfe615fbe0a158c31b89e29', 'Users', 'users', '54', '{\"email\":\"mbelumelvin@gmail.com\"}', 1, '2018-06-07 09:18:02', '2018-06-04 09:18:02', '2018-06-04 09:19:04'),
(58, '66b7de64ffecfed4fa45f736f6306f76', 'Users', 'users', '55', '{\"email\":\"Jbricks147@gmail.com\"}', 1, '2018-06-07 09:29:27', '2018-06-04 09:29:27', '2018-06-04 09:34:29'),
(59, '3a2f5decec858e7df498f665dd0d106b', 'Users', 'users', '56', '{\"email\":\"Kayodekiki4@gmail.com\"}', 1, '2018-06-07 19:58:44', '2018-06-04 19:58:44', '2018-06-04 20:03:06'),
(60, 'cdf68b06402881a838bf3b380072771a', 'Users', 'users', '57', '{\"email\":\"godwinemmanuel286@gmail.com\"}', 1, '2018-06-07 20:36:35', '2018-06-04 20:36:35', '2018-06-04 21:02:09'),
(61, 'af49ae78f62bed6fee742ceb799c05d1', 'Users', 'users', '58', '{\"email\":\"ajibesinrichard@gmail.com\"}', 0, '2018-06-07 21:38:45', '2018-06-04 21:38:45', '2018-06-04 21:38:45'),
(62, 'fda2463173249261a3b7412867bad8cb', 'Users', 'users', '59', '{\"email\":\"tomidreazy@gmail.com\"}', 1, '2018-06-07 23:50:10', '2018-06-04 23:50:10', '2018-06-04 23:54:54'),
(63, 'cc38658f5a81a5d8277bd15074d1a78f', 'Users', 'users', '60', '{\"email\":\"tomidreazy@gmail.com\"}', 0, '2018-06-07 23:52:30', '2018-06-04 23:52:30', '2018-06-04 23:52:30'),
(64, 'f428b63f2acfb86d902be5a5186521af', 'Users', 'users', '61', '{\"email\":\"ratiog3@gmail.com\"}', 1, '2018-06-09 00:28:02', '2018-06-06 00:28:02', '2018-06-06 00:29:24'),
(65, 'a338f6e26183d8239a3caa2e04e3801c', 'Users', 'users', '62', '{\"email\":\"noikidavid@yahoo.com\"}', 1, '2018-06-09 08:53:02', '2018-06-06 08:53:03', '2018-06-06 08:53:31'),
(66, 'ee3e950da793dadcccc8035ec86c28bb', 'Users', 'users', '63', '{\"email\":\"olu0909898@gmail.com\"}', 1, '2018-06-11 03:48:10', '2018-06-08 03:48:10', '2018-06-10 01:13:05'),
(67, 'e091442932d6a780d801c8b169f72e34', 'Users', 'users', '64', '{\"email\":\"susanhephner@yandex.com\"}', 0, '2018-06-12 13:08:37', '2018-06-09 13:08:37', '2018-06-09 13:08:37'),
(68, 'fe6a85164466a7fc02dd39e33d634540', 'Users', 'users', '65', '{\"email\":\"obedeligwedire@gmail.com\"}', 1, '2018-06-12 13:09:23', '2018-06-09 13:09:23', '2018-06-09 13:10:37'),
(69, 'c2c843187be166aed467158816d1951a', 'Users', 'users', '66', '{\"email\":\"cherylmissy@yandex.com\"}', 1, '2018-06-12 13:10:53', '2018-06-09 13:10:53', '2018-06-09 13:11:11'),
(70, '068d20f5e7463f9184ee6f192368f9a7', 'Users', 'users', '67', '{\"email\":\"joevibanks@gmail.com\"}', 1, '2018-06-14 07:17:57', '2018-06-11 07:17:57', '2018-06-11 07:22:06'),
(72, '37c10a4925b4c0d62ebd3431793262ca', 'Users', 'users', '69', '{\"email\":\"Trilajackofalltrade@gmail.com\"}', 1, '2018-06-18 19:03:50', '2018-06-15 19:03:50', '2018-06-15 19:04:34'),
(73, 'e53a58be464d990eedda280d2b190d97', 'Users', 'users', '70', '{\"email\":\"rhymelineayomide5@gmail.com\"}', 1, '2018-06-24 08:20:04', '2018-06-21 08:20:04', '2018-06-21 08:20:54'),
(74, '393c4fcb770a7eadd52645ee228d8ad8', 'Users', 'users', '71', '{\"email\":\"davidsonbeatz@gmail.com\"}', 1, '2018-06-24 23:39:12', '2018-06-21 23:39:12', '2018-06-22 00:33:03'),
(75, '5a3fb967a178b7e03f7d4a74dab2eaf4', 'Users', 'users', '72', '{\"email\":\"davidsonbeatz@gmail.com\"}', 0, '2018-06-24 23:39:59', '2018-06-21 23:39:59', '2018-06-21 23:39:59'),
(76, '8c41d1dfbb2670632b6b9640183913e4', 'Users', 'users', '73', '{\"email\":\"oluawatobifidexfayoda@yahoo.com\"}', 0, '2018-07-02 14:29:23', '2018-06-29 14:29:23', '2018-06-29 14:29:23'),
(77, '9ace49abe2dda83c8158f95ff4865293', 'Users', 'users', '74', '{\"email\":\"oluawatobifidexfayoda@yahoo.com\"}', 1, '2018-07-03 16:27:35', '2018-06-30 16:27:35', '2018-06-30 16:35:12'),
(78, '7e7c21f36d74723b804ff8a816004713', 'Users', 'users', '75', '{\"email\":\"wecare@kennysoftstudios.com\"}', 1, '2018-07-04 20:49:46', '2018-07-01 20:49:46', '2018-07-01 20:51:32'),
(79, '4769a15ce8af31e79397b228c57f2e4c', 'Users', 'users', '76', '{\"email\":\"sleekyp7@gmail.com\"}', 1, '2018-07-07 11:40:53', '2018-07-04 11:40:53', '2018-07-04 11:41:31'),
(80, 'd6dd73bb4d7095ec6679c2e8a1e9a901', 'Users', 'users', '77', '{\"email\":\"oluwanifemiadebajo@gmail.com\"}', 0, '2018-07-07 11:41:31', '2018-07-04 11:41:31', '2018-07-04 11:41:31'),
(81, '9b2861f61e9460520edbf2c72aa1804a', 'Users', 'users', '78', '{\"email\":\"kolapillar@gmail.com\"}', 0, '2018-07-10 08:51:25', '2018-07-07 08:51:25', '2018-07-07 08:51:25'),
(82, '6245d6d940ee56cb457afdcd23115467', 'Users', 'users', '79', '{\"email\":\"mailoriginalbeatz@gmail.com\"}', 1, '2018-07-10 14:20:18', '2018-07-07 14:20:18', '2018-07-07 14:21:04'),
(83, 'c956843af068e8e993706388c77c16b8', 'Users', 'users', '80', '{\"email\":\"freaksonarstudios@gmail.com\"}', 1, '2018-07-10 21:50:19', '2018-07-07 21:50:19', '2018-07-07 21:51:57'),
(84, 'e69affdd8cc717893f509f5967696db4', 'Users', 'users', '81', '{\"email\":\"kolapillar@gmail.com\"}', 1, '2018-07-11 05:34:34', '2018-07-08 05:34:34', '2018-07-08 05:36:25'),
(85, '4696841aecd4b1179757f455565b70a2', 'Users', 'users', '82', '{\"email\":\"strykabeats@gmail.com\"}', 1, '2018-07-12 21:42:14', '2018-07-09 21:42:14', '2018-07-09 21:44:56'),
(86, '92d9a92eec4f56b9ca00da40aad84ba1', 'Users', 'users', '83', '{\"email\":\"Dopseudofia@gmail.com\"}', 1, '2018-07-13 10:38:42', '2018-07-10 10:38:42', '2018-07-10 10:39:50'),
(87, 'f2b7be800f371037554463766bbfbd1a', 'Users', 'users', '84', '{\"email\":\"wizeinthebeat@gmail.com\"}', 1, '2018-07-15 07:51:27', '2018-07-12 07:51:27', '2018-07-12 08:07:26'),
(88, '26815c5e6232be7ba5072ba1eec01db9', 'Users', 'users', '85', '{\"email\":\"slynfit_joe@yahoo.com\"}', 1, '2018-07-20 08:21:20', '2018-07-17 08:21:20', '2018-07-17 08:55:18'),
(89, '6949f1b612406aeb60019c3045dbd431', 'Users', 'users', '86', '{\"email\":\"charles.johndove@gmail.com\"}', 1, '2018-07-20 13:45:08', '2018-07-17 13:45:08', '2018-07-17 13:45:23'),
(90, '29435c3e04d38a6338afcbcb98b100d1', 'Users', 'users', '87', '{\"email\":\"kronikproducer@yahoo.com\"}', 1, '2018-07-20 18:47:03', '2018-07-17 18:47:03', '2018-07-17 18:48:02'),
(91, '27c0b9a9cf832a14f3a59c4ec7b5a3aa', 'Users', 'users', '88', '{\"email\":\"edevbiedavid0@gmail.com\"}', 1, '2018-07-22 04:28:45', '2018-07-19 04:28:45', '2018-07-19 04:29:16'),
(92, 'a96fc5518d70071a0ce89f711c3a6fbb', 'Users', 'users', '89', '{\"email\":\"etimjosephmichael@gmail.com\"}', 1, '2018-07-22 11:16:56', '2018-07-19 11:16:56', '2018-07-19 11:17:13'),
(93, '79f461b0c60caa6be270d6b6b4430b88', 'Users', 'users', '90', '{\"email\":\"saskymalimusic@gmail.com\"}', 1, '2018-07-24 12:05:23', '2018-07-21 12:05:23', '2018-07-21 12:06:57'),
(94, '5f1b534b7b9be4be28e5eaf6069e50a4', 'Users', 'users', '91', '{\"email\":\"kezzisamuel@gmail.com\"}', 1, '2018-07-24 23:40:33', '2018-07-21 23:40:33', '2018-07-21 23:49:24'),
(95, '596ea9114ecd0b8e6d0f7009ecce9d8f', 'Users', 'users', '92', '{\"email\":\"qobiddom@gmail.com\"}', 1, '2018-07-25 08:55:05', '2018-07-22 08:55:05', '2018-07-22 08:55:37'),
(96, '4d5b7072fb71e9091b04016cff7c6956', 'Users', 'users', '93', '{\"email\":\"tcflexbeats@gmail.com\"}', 1, '2018-07-25 16:03:16', '2018-07-22 16:03:16', '2018-07-22 16:05:21'),
(97, 'c94952c6123c233553c3876ba9bb1a0d', 'Users', 'users', '94', '{\"email\":\"guobadiaosagie77@gmail.com\"}', 1, '2018-07-25 21:10:38', '2018-07-22 21:10:38', '2018-07-22 21:11:40'),
(98, 'b0d5a897ecec98ae1dfaf41ead5e04bc', 'Users', 'users', '95', '{\"email\":\"ogundipeabayo2018@gmail.com\"}', 1, '2018-07-26 13:41:36', '2018-07-23 13:41:36', '2018-07-23 13:42:37'),
(99, '017efd1d0df64b5b1779d53c48afc01d', 'Users', 'users', '96', '{\"email\":\"endeetonebeatz224@gmail.com\"}', 1, '2018-07-26 16:47:33', '2018-07-23 16:47:33', '2018-07-23 16:48:11'),
(100, '76a4701f954e91c8a372bec43125d81a', 'Users', 'users', '97', '{\"email\":\"chillingschillings@gmail.com\"}', 1, '2018-07-26 20:38:43', '2018-07-23 20:38:43', '2018-07-23 20:39:21'),
(101, 'd519a6cb8fdc223850d4e2a3c4a5d44b', 'Users', 'users', '98', '{\"email\":\"Janemichael260@gmail.com\"}', 0, '2018-07-26 21:11:17', '2018-07-23 21:11:17', '2018-07-23 21:11:17'),
(102, '2ef40f9826b00c8ef0f605e2bb1da405', 'Users', 'users', '99', '{\"email\":\"thesuperstarproducer@gmail.com\"}', 1, '2018-07-26 21:54:23', '2018-07-23 21:54:23', '2018-07-25 11:47:28'),
(103, '9b264630e4ca5182c80a1b50a93501b9', 'Users', 'users', '100', '{\"email\":\"kkaycekeys@gmail.com\"}', 1, '2018-07-27 00:02:16', '2018-07-24 00:02:16', '2018-07-24 00:08:30'),
(104, 'ad9f55ec34e50079287e055aa7e9ca21', 'Users', 'users', '101', '{\"email\":\"ikponmwonba.isaac@gmail.com\"}', 1, '2018-07-27 13:39:19', '2018-07-24 13:39:19', '2018-07-24 15:24:05'),
(105, 'dc4490c73b6a65d4a4a30a14d149e8b4', 'Users', 'users', '102', '{\"email\":\"endyjeff@gmail.com\"}', 1, '2018-07-29 08:19:56', '2018-07-26 08:19:56', '2018-07-26 08:24:21'),
(106, '673f34b88cbdc07ecd9e7bc443bbc4c6', 'Users', 'users', '103', '{\"email\":\"Owoyelebeckley@yahoo.com\"}', 1, '2018-07-29 22:01:52', '2018-07-26 22:01:52', '2018-07-26 23:22:39'),
(107, '1071adc605879280adbaa75d550a0c69', 'Users', 'users', '104', '{\"email\":\"wols.ondbeat@gmail.com\"}', 1, '2018-08-07 16:10:55', '2018-08-04 16:10:55', '2018-08-04 16:12:14'),
(108, '01eaa545e2cbc823f56aa5a974aafe98', 'Users', 'users', '105', '{\"email\":\"babasoladavies@yahoo.com\"}', 0, '2018-08-08 20:10:16', '2018-08-05 20:10:16', '2018-08-05 20:10:16'),
(109, '0f22cb63abfe949fbe93524f782d3661', 'Users', 'users', '106', '{\"email\":\"babasoladavies@yahoo.com\"}', 1, '2018-08-08 20:14:50', '2018-08-05 20:14:50', '2018-08-05 20:19:39'),
(110, 'cc236fc9dcc532005dcc27cd182491cd', 'Users', 'users', '107', '{\"email\":\"babasoladavies@yahoo.com\"}', 0, '2018-08-08 20:19:12', '2018-08-05 20:19:12', '2018-08-05 20:19:12'),
(111, '79171695da82b9ab6238ac3809b28737', 'Users', 'users', '106', '{\"email\":\"babasoladavies@yahoo.com\"}', 1, '2018-08-11 15:33:07', '2018-08-08 15:33:07', '2018-08-08 15:34:08'),
(112, '7302ff72f7f717f037c0fe01ea99dc6d', 'Users', 'users', '108', '{\"email\":\"henry.onebunne@gmail.com\"}', 1, '2018-08-11 20:16:32', '2018-08-08 20:16:32', '2018-08-08 20:17:16'),
(113, 'cb82f5a287982293af7d7968fbeacaaa', 'Users', 'users', '109', '{\"email\":\"peterharrison258@yahoo.com\"}', 1, '2018-08-13 09:08:51', '2018-08-10 09:08:51', '2018-08-10 09:11:14'),
(114, '9143b3ee9d4e1a89d64a7f15e436c980', 'Users', 'users', '110', '{\"email\":\"adekunleayomide97@gmail.com\"}', 1, '2018-08-14 09:13:40', '2018-08-11 09:13:40', '2018-08-11 09:19:18'),
(117, 'f6a16cb60c7a59a791eb7ab4d549897d', 'Users', 'users', '113', '{\"email\":\"siizatv@gmail.com\"}', 1, '2018-08-17 08:36:44', '2018-08-14 08:36:44', '2018-08-14 08:37:43'),
(118, 'e48bddc3572adabc3f0ab7d6a64afd96', 'Users', 'users', '114', '{\"email\":\"Itzsamotee@gmail.com\"}', 1, '2018-08-17 10:12:35', '2018-08-14 10:12:35', '2018-08-14 10:13:04'),
(119, 'cb3eea18528a48aadebc60bf9ca1579e', 'Users', 'users', '115', '{\"email\":\"sheydrey@gmail.com\"}', 1, '2018-08-17 16:14:09', '2018-08-14 16:14:09', '2018-08-14 16:35:42'),
(122, '3ff6e39a33f11dc8b2eea69ce8715fcb', 'Users', 'users', '117', '{\"email\":\"rejoicebeat@yahoo.com\"}', 1, '2018-08-17 22:01:17', '2018-08-14 22:01:17', '2018-08-14 22:02:12'),
(123, '86d64ac8ebedf0f72854e1d522ef989a', 'Users', 'users', '118', '{\"email\":\"Odebiyi62@gmail.com\"}', 1, '2018-08-17 22:12:02', '2018-08-14 22:12:02', '2018-08-14 22:12:46'),
(124, 'e9691f7184b00c2fe6ec49f322d9c176', 'Users', 'users', '119', '{\"email\":\"denisinnocent27@yahoo.com\"}', 0, '2018-08-19 08:20:50', '2018-08-16 08:20:50', '2018-08-16 08:20:50'),
(125, '7a22229cf93172961a260a18d9228ec1', 'Users', 'users', '120', '{\"email\":\"jastrausexpress345@gmail.com\"}', 1, '2018-08-21 10:06:01', '2018-08-18 10:06:01', '2018-08-18 10:10:26'),
(126, '0e7fcadd462ec4e42b92012e2ba3a223', 'Users', 'users', '121', '{\"email\":\"jastrausexpress345@gmail.com\"}', 0, '2018-08-21 10:07:56', '2018-08-18 10:07:56', '2018-08-18 10:07:56'),
(127, 'aa2daeb977857903f33960cc28a93ec0', 'Users', 'users', '122', '{\"email\":\"iamemmashyne@gmail.com\"}', 1, '2018-08-27 18:06:25', '2018-08-24 18:06:25', '2018-08-24 20:10:20'),
(128, '8ec1e1eb2fa1b020d324fd3e9d74febe', 'Users', 'users', '123', '{\"email\":\"blazetejiri@gmail.com\"}', 1, '2018-08-29 20:44:35', '2018-08-26 20:44:35', '2018-08-26 20:45:36'),
(129, '0cec2c93d321cc00b10b5e9d619cf39a', 'Users', 'users', '124', '{\"email\":\"mrpacz.om71@gmail.com\"}', 1, '2018-08-29 23:31:32', '2018-08-26 23:31:32', '2018-08-26 23:32:41'),
(130, '5d5d2cbf96c0073f1a874e048afd8e79', 'Users', 'users', '125', '{\"email\":\"adewaleadeyinka2016@gmail.com\"}', 1, '2018-08-30 02:40:12', '2018-08-27 02:40:12', '2018-08-27 02:40:37'),
(131, 'f8e2b30d92377c1c183617a8b9ba4312', 'Users', 'users', '126', '{\"email\":\"yomiaba112@gmail.com\"}', 0, '2018-08-30 12:35:14', '2018-08-27 12:35:14', '2018-08-27 12:35:14'),
(132, 'b5e178b2b61575daab680ad68815bb09', 'Users', 'users', '127', '{\"email\":\"egejuruisidoreokechukwu@gmail.com\"}', 1, '2018-08-31 03:13:07', '2018-08-28 03:13:07', '2018-08-28 03:17:52'),
(133, '76f7e29c5635375e309688201576eccf', 'Users', 'users', '128', '{\"email\":\"egejuruisidoreokechukwu@gmail.com\"}', 0, '2018-08-31 03:15:26', '2018-08-28 03:15:26', '2018-08-28 03:15:26'),
(134, 'f10e983c542738ba638562175c868d3b', 'Users', 'users', '129', '{\"email\":\"babatee202@gmail.com\"}', 1, '2018-08-31 11:31:31', '2018-08-28 11:31:31', '2018-08-28 11:36:57'),
(135, '3e48ae960f7e7b33409d620ab745a1d8', 'Users', 'users', '130', '{\"email\":\"mularbands@gmail.com\"}', 1, '2018-09-01 01:28:15', '2018-08-29 01:28:15', '2018-08-29 01:29:02'),
(136, '1857fd93d130212440114561f2043e2d', 'Users', 'users', '131', '{\"email\":\"victorvilox1992@gmail.com\"}', 1, '2018-09-01 21:18:44', '2018-08-29 21:18:44', '2018-08-29 22:59:45'),
(137, 'f9bb14b9e2be2853852389304e7e302f', 'Users', 'users', '132', '{\"email\":\"ojekaleelijah@gmail.com\"}', 1, '2018-09-05 07:07:18', '2018-09-02 07:07:18', '2018-09-02 07:08:26'),
(138, 'af08a047d8c79f9deaf58c1d09950f40', 'Users', 'users', '133', '{\"email\":\"djokpeku@gmail.com\"}', 1, '2018-09-05 10:32:09', '2018-09-02 10:32:09', '2018-09-02 10:32:54'),
(139, '73ce8a12e416b9c5332fb73743f54719', 'Users', 'users', '134', '{\"email\":\"bitrustarfa@gmail.com\"}', 1, '2018-09-06 16:16:34', '2018-09-03 16:16:34', '2018-09-03 16:17:31'),
(140, 'fa7f6fe7c66720bc7517c358a94be30c', 'Users', 'users', '135', '{\"email\":\"bigfrozzbeat@mail.com\"}', 1, '2018-09-10 20:08:52', '2018-09-07 20:08:52', '2018-09-07 20:23:27'),
(141, '13f3cba2a55fa238ceca732e65edcb66', 'Users', 'users', '136', '{\"email\":\"bigfrozzbeat@mail.com\"}', 0, '2018-09-10 20:13:10', '2018-09-07 20:13:10', '2018-09-07 20:13:10'),
(142, '0f01f5519e338dc45266c7be69d04c75', 'Users', 'users', '137', '{\"email\":\"Oyewoletobiloba82@gmail.com\"}', 1, '2018-09-11 03:44:40', '2018-09-08 03:44:41', '2018-09-08 03:45:33'),
(143, 'adab894af0126d9e48286576d6909634', 'Users', 'users', '138', '{\"email\":\"larryexy@gmail.com\"}', 1, '2018-09-11 11:40:03', '2018-09-08 11:40:03', '2018-09-08 11:40:44'),
(144, 'ff4623396cdb09bb80d083bb13c4c37a', 'Users', 'users', '139', '{\"email\":\"kellyhandsome847@gmail.com\"}', 1, '2018-09-12 07:42:02', '2018-09-09 07:42:02', '2018-09-09 07:45:47'),
(145, 'ae1be53b12ce2b5eff080edcac5f32a3', 'Users', 'users', '139', '{\"email\":\"kellyhandsome847@gmail.com\"}', 0, '2018-09-12 07:49:27', '2018-09-09 07:49:27', '2018-09-09 07:49:27'),
(146, 'db1b48c780dc5b1af649fd60b301a2e3', 'Users', 'users', '139', '{\"email\":\"kellyhandsome847@gmail.com\"}', 1, '2018-09-12 07:50:33', '2018-09-09 07:50:33', '2018-09-09 07:52:54'),
(147, '2821244b18777f06991b3515f2613055', 'Users', 'users', '140', '{\"email\":\"nilegizmo@gmail.com\"}', 1, '2018-09-13 16:12:17', '2018-09-10 16:12:17', '2018-09-10 16:12:47'),
(148, '762919c0c8d8669845d9345438ec83c3', 'Users', 'users', '141', '{\"email\":\"robertlatwul@gmail.com\"}', 1, '2018-09-14 17:49:25', '2018-09-11 17:49:25', '2018-09-11 17:52:35'),
(149, '8b7c459763dcdb7f53b02fad7a8d4a4b', 'Users', 'users', '142', '{\"email\":\"nelokwaz@gmail.com\"}', 1, '2018-09-16 14:16:30', '2018-09-13 14:16:30', '2018-09-13 14:16:51'),
(150, 'dd937ff975b999a4df76993e8cb9f9d5', 'Users', 'users', '143', '{\"email\":\"nellyhr02@gmail.com\"}', 1, '2018-09-16 14:17:45', '2018-09-13 14:17:45', '2018-09-13 14:21:08'),
(151, '7a231f8e8e7b5ea7b6da36534d9dba57', 'Users', 'users', '144', '{\"email\":\"bebeowasu@yahoo.com\"}', 1, '2018-09-17 23:16:52', '2018-09-14 23:16:52', '2018-09-14 23:18:01'),
(152, 'dc5ac634398ca8bbb30e0b0b273a55b0', 'Users', 'users', '145', '{\"email\":\"e.dadoc88@gmail.com\"}', 1, '2018-09-24 00:27:29', '2018-09-21 00:27:29', '2018-09-21 00:30:01'),
(153, '084d8cb5a893a0567181eccce446a364', 'Users', 'users', '146', '{\"email\":\"abuchinnodim92@gmail.com\"}', 1, '2018-09-24 17:00:51', '2018-09-21 17:00:51', '2018-09-21 17:01:22'),
(154, 'eee7aefa108a727a24e01c62e8ca1620', 'Users', 'users', '147', '{\"email\":\"chukesmichael.cm@gmail.com\"}', 1, '2018-09-26 18:40:45', '2018-09-23 18:40:45', '2018-09-23 18:42:34'),
(155, '3f9c8b89258f9156b39cff4edd88880d', 'Users', 'users', '148', '{\"email\":\"uzoigwecollins10@gmail.com\"}', 1, '2018-09-28 05:32:05', '2018-09-25 05:32:05', '2018-09-25 05:33:08'),
(156, '2439329f3a87ccb4a24ea9c8549d1e88', 'Users', 'users', '149', '{\"email\":\"realpianointernational@gmail.com\"}', 1, '2018-09-28 06:34:12', '2018-09-25 06:34:12', '2018-09-25 06:35:25'),
(157, '07d14c437855fded60e23d874954b47f', 'Users', 'users', '150', '{\"email\":\"chapsynw@gmail.com\"}', 1, '2018-09-29 07:59:54', '2018-09-26 07:59:54', '2018-09-26 08:01:37'),
(158, '939b4ec763b9ed97e58419fa35e4984e', 'Users', 'users', '151', '{\"email\":\"anyekegbe80@gmail.com\"}', 1, '2018-09-29 10:40:45', '2018-09-26 10:40:45', '2018-09-26 10:43:47'),
(159, '2696598199a7ea7b453104ca3c101518', 'Users', 'users', '152', '{\"email\":\"allancarew@gmail.com\"}', 1, '2018-09-30 22:11:05', '2018-09-27 22:11:06', '2018-09-27 22:11:51'),
(160, '7378a66e766fa78066797e164f37df9e', 'Users', 'users', '153', '{\"email\":\"nekemaxi@gmail.com\"}', 1, '2018-10-01 19:11:24', '2018-09-28 19:11:25', '2018-09-28 19:11:43'),
(161, '3922f9fc4a9872be6e80c34a363bced0', 'Users', 'users', '154', '{\"email\":\"urbancentral5@gmail.com\"}', 1, '2018-10-03 19:01:08', '2018-09-30 19:01:08', '2018-09-30 19:01:33'),
(162, '0554a939accb0cfa987937a298aea6e1', 'Users', 'users', '155', '{\"email\":\"Marvelblizful@gmail.com\"}', 1, '2018-10-04 14:38:25', '2018-10-01 14:38:25', '2018-10-01 14:43:05'),
(163, '0e60fb6fb5b984131cb440cf0f5e2c3d', 'Users', 'users', '156', '{\"email\":\"62833nieves@compscorerric.xyz\"}', 0, '2018-10-06 12:42:16', '2018-10-03 12:42:16', '2018-10-03 12:42:16'),
(164, '0e5b4fd3a59d8f8e5e1a45af66762084', 'Users', 'users', '157', '{\"email\":\"29980zacharewicz@inaremar.xyz\"}', 0, '2018-10-06 19:43:20', '2018-10-03 19:43:20', '2018-10-03 19:43:20'),
(165, '62e0d83d4a70e9c5d339f0a4e94a6361', 'Users', 'users', '158', '{\"email\":\"64041rossum@antherdihen.xyz\"}', 0, '2018-10-06 23:55:10', '2018-10-03 23:55:10', '2018-10-03 23:55:10'),
(166, 'c868e642d897f8415a8456374bd363f8', 'Users', 'users', '159', '{\"email\":\"29362funderbunk@enercranyr.xyz\"}', 0, '2018-10-07 08:30:58', '2018-10-04 08:30:58', '2018-10-04 08:30:58'),
(167, '16f83d8c08b30939d61eca368a4d31d9', 'Users', 'users', '160', '{\"email\":\"unplugbeats@gmail.com\"}', 1, '2018-10-07 23:57:45', '2018-10-04 23:57:45', '2018-10-05 00:01:39'),
(169, '5bb79390dd0e5e20dbae9f36f9a4e4a3', 'Users', 'users', '162', '{\"email\":\"kreyol_man@hotmail.com\"}', 1, '2018-10-12 03:02:29', '2018-10-09 03:02:29', '2018-10-09 03:05:46'),
(170, '598d6eaa59daaf64b8e2b90d39a149b1', 'Users', 'users', '163', '{\"email\":\"chidimattyson@gmail.com\"}', 0, '2018-10-14 16:26:35', '2018-10-11 16:26:35', '2018-10-11 16:26:35'),
(171, 'dd2d517c4b885795eda81adc8227363f', 'Users', 'users', '164', '{\"email\":\"Chideraamaraihu@gmail.com\"}', 0, '2018-10-14 19:34:20', '2018-10-11 19:34:20', '2018-10-11 19:34:20'),
(172, '279a4ce9f936b50aeac2fc93d0555cad', 'Users', 'users', '165', '{\"email\":\"ogbonnanzube1999@gmail.com\"}', 1, '2018-10-16 16:50:28', '2018-10-13 16:50:28', '2018-10-13 16:52:47'),
(173, 'f3932537992d04016f973315c5ad7a0d', 'Users', 'users', '166', '{\"email\":\"Kayceyogan@yahoo.co.uk\"}', 1, '2018-10-18 09:37:14', '2018-10-15 09:37:14', '2018-10-15 09:43:37'),
(174, '0303d61272ca6975561c051c62e1b8f2', 'Users', 'users', '167', '{\"email\":\"iredumareojengbedeopeyemi@gmail.com\"}', 1, '2018-10-19 12:26:15', '2018-10-16 12:26:15', '2018-10-16 12:26:49'),
(175, 'd495f461e99c53ed2df866eac87ec023', 'Users', 'users', '168', '{\"email\":\"tdemola256@gmail.com\"}', 1, '2018-10-19 13:16:14', '2018-10-16 13:16:14', '2018-10-16 13:17:00'),
(176, '43bdc548272b9aac375f099950532057', 'Users', 'users', '169', '{\"email\":\"Jobjames487@gmail.com\"}', 0, '2018-10-19 15:07:16', '2018-10-16 15:07:16', '2018-10-16 15:07:16'),
(177, 'd28460915417be7f73617fde3d73438f', 'Users', 'users', '170', '{\"email\":\"ajayiisaac1995@gmail.com\"}', 0, '2018-10-19 15:42:24', '2018-10-16 15:42:24', '2018-10-16 15:42:24'),
(178, 'b857b3417b839ad011c49addd4059046', 'Users', 'users', '171', '{\"email\":\"kabunuyusuf2000@gmail.com\"}', 1, '2018-10-19 16:21:59', '2018-10-16 16:21:59', '2018-10-16 16:29:45'),
(179, 'a78e25964ce5e742cb22dc213a11afd8', 'Users', 'users', '172', '{\"email\":\"faithakpan2016@gmail.com\"}', 1, '2018-10-19 17:44:15', '2018-10-16 17:44:15', '2018-10-16 18:14:04'),
(180, 'bde2d1376221cf54fd21145e2d2541ac', 'Users', 'users', '173', '{\"email\":\"chidimmap796@gmail.com\"}', 1, '2018-10-19 19:05:50', '2018-10-16 19:05:50', '2018-10-16 19:40:44'),
(181, 'caefd56e4ef4f31ffb66fda7fb78b7dd', 'Users', 'users', '174', '{\"email\":\"kevelling12@gmail.com\"}', 0, '2018-10-19 19:10:49', '2018-10-16 19:10:49', '2018-10-16 19:10:49'),
(182, 'f403126329c4a2db2973ea3e1f16b772', 'Users', 'users', '175', '{\"email\":\"josephassamudo90@yahoo.com\"}', 1, '2018-10-19 19:16:52', '2018-10-16 19:16:52', '2018-10-16 19:27:58'),
(183, '4426ff43375fd9b432097462e746f54e', 'Users', 'users', '176', '{\"email\":\"owadove@gmail.com\"}', 1, '2018-10-19 19:54:44', '2018-10-16 19:54:44', '2018-10-16 19:59:58'),
(184, '9c17896971d809438e30dd1141674295', 'Users', 'users', '177', '{\"email\":\"pj617851@gmail.com\"}', 0, '2018-10-19 20:29:46', '2018-10-16 20:29:46', '2018-10-16 20:29:46'),
(185, 'de3eaef3e1bd13b3dd1d43ed9fad6495', 'Users', 'users', '178', '{\"email\":\"johnedeh03@gmail.com\"}', 0, '2018-10-19 20:37:06', '2018-10-16 20:37:06', '2018-10-16 20:37:06'),
(186, '72a8ec94505062d22480507ba935e3b1', 'Users', 'users', '179', '{\"email\":\"Calvindave17@gmail.com\"}', 1, '2018-10-19 20:43:41', '2018-10-16 20:43:41', '2018-10-16 20:48:14'),
(187, 'a4f83ec8979e73876b1db67c9d8b80dc', 'Users', 'users', '180', '{\"email\":\"dellgadotm@gmail.com\"}', 1, '2018-10-19 21:04:47', '2018-10-16 21:04:47', '2018-10-16 21:40:12'),
(188, 'c07fdd4076b5741b550de274421ed833', 'Users', 'users', '181', '{\"email\":\"dellgadotm@gmail.com\"}', 0, '2018-10-19 21:06:53', '2018-10-16 21:06:53', '2018-10-16 21:06:53'),
(189, '94444d38c8f69335af6398076014eea5', 'Users', 'users', '182', '{\"email\":\"iamoramma@gmail.com\"}', 1, '2018-10-19 21:07:15', '2018-10-16 21:07:15', '2018-10-16 21:11:28'),
(190, '17d4447ae2e7f3b04b5fd45ef89ca805', 'Users', 'users', '183', '{\"email\":\"decent4real5@gmail.com\"}', 1, '2018-10-19 21:17:11', '2018-10-16 21:17:11', '2018-10-16 21:21:07'),
(191, '8749e3952b20a00c709b48ba24a35f7b', 'Users', 'users', '184', '{\"email\":\"Nelsonhillary147@gmail.com\"}', 1, '2018-10-19 22:09:21', '2018-10-16 22:09:21', '2018-10-16 22:18:41'),
(192, '3029066d5020d86d3b67d7b95387d3fb', 'Users', 'users', '185', '{\"email\":\"olowo1805@gmail.com\"}', 1, '2018-10-19 23:29:07', '2018-10-16 23:29:07', '2018-10-17 08:20:12'),
(193, '4b46569f3daf0d200f13c5ab2946263d', 'Users', 'users', '186', '{\"email\":\"chudeekene@gmail.com\"}', 1, '2018-10-20 00:28:29', '2018-10-17 00:28:29', '2018-10-17 00:29:24'),
(194, '70fb607d1f5dd604b14be2d2941e3dcb', 'Users', 'users', '187', '{\"email\":\"Lilstaric@yahoomail.com\"}', 0, '2018-10-20 00:37:24', '2018-10-17 00:37:24', '2018-10-17 00:37:24'),
(195, 'c77a5393c6600bcdce881f70119d1250', 'Users', 'users', '188', '{\"email\":\"Joelprincewill2@gmail.com\"}', 1, '2018-10-20 01:55:28', '2018-10-17 01:55:28', '2018-10-17 02:30:03'),
(196, '5a1a719555ba50726f4bbdf8303416ec', 'Users', 'users', '189', '{\"email\":\"woricriuz@gmail.com\"}', 1, '2018-10-20 06:40:16', '2018-10-17 06:40:16', '2018-10-18 06:57:09'),
(197, 'f52dab298aadf8c98292ea8eee9aa230', 'Users', 'users', '190', '{\"email\":\"jonathanpolycarp66@gmail.com\"}', 1, '2018-10-20 06:56:41', '2018-10-17 06:56:41', '2018-10-17 06:58:00'),
(198, 'a83bbc73db6a5e598f8c2d4990c4ed2d', 'Users', 'users', '191', '{\"email\":\"auwalallo94@gmail.com\"}', 1, '2018-10-20 06:59:06', '2018-10-17 06:59:06', '2018-10-17 07:00:18'),
(199, '9635771fdf159e8a62c14684b4e88d3b', 'Users', 'users', '192', '{\"email\":\"omobolasikiru28@gmail.com\"}', 0, '2018-10-20 07:17:30', '2018-10-17 07:17:30', '2018-10-17 07:17:30'),
(200, '7e35706ab95ba116e0a72d33fad16651', 'Users', 'users', '193', '{\"email\":\"Babanlaomonla@gmail.com\"}', 0, '2018-10-20 07:59:12', '2018-10-17 07:59:12', '2018-10-17 07:59:12'),
(201, '4951b289bcbf4477785af0154c6dc5a1', 'Users', 'users', '194', '{\"email\":\"Kinurecords@gmail.com\"}', 0, '2018-10-20 08:41:47', '2018-10-17 08:41:47', '2018-10-17 08:41:47'),
(202, 'c6f157ab3a6cc55ce116b26bf71271f0', 'Users', 'users', '195', '{\"email\":\"Kinurecords@gmail.com\"}', 0, '2018-10-20 08:42:52', '2018-10-17 08:42:52', '2018-10-17 08:42:52'),
(203, '49d804308d880bf988e36d1f371905f5', 'Users', 'users', '196', '{\"email\":\"aliyuabdulphatai001@gmail.com\"}', 0, '2018-10-20 09:53:54', '2018-10-17 09:53:54', '2018-10-17 09:53:54'),
(204, '16302f8796f69771c084a989d30db295', 'Users', 'users', '197', '{\"email\":\"obiebuka17@gmail.com\"}', 1, '2018-10-20 11:34:19', '2018-10-17 11:34:19', '2018-10-17 11:34:50'),
(205, '5a18899c7bc56713b8ef666568666495', 'Users', 'users', '198', '{\"email\":\"jamesjohndrizzy@gmail.com\"}', 0, '2018-10-20 11:41:39', '2018-10-17 11:41:39', '2018-10-17 11:41:39'),
(206, '2b83c319c784bbd11971f48be93ebed2', 'Users', 'users', '199', '{\"email\":\"abdulazeezonilearo1@gmail.com\"}', 1, '2018-10-20 12:27:52', '2018-10-17 12:27:52', '2018-10-17 12:28:17'),
(207, '94f66d0390a89caf705d8dcff26b570a', 'Users', 'users', '200', '{\"email\":\"agbese6@gmail.com\"}', 1, '2018-10-20 14:34:00', '2018-10-17 14:34:00', '2018-10-17 14:34:37'),
(208, 'bf242f509f5b64d76b0222c3f1fd0291', 'Users', 'users', '201', '{\"email\":\"worduptraffic@gmail.com\"}', 1, '2018-10-20 14:37:28', '2018-10-17 14:37:28', '2018-10-17 14:38:03'),
(209, '6d2fb82ee0d74da622327efb0d63705c', 'Users', 'users', '200', '{\"email\":\"agbese6@gmail.com\"}', 1, '2018-10-20 14:37:36', '2018-10-17 14:37:36', '2018-10-17 14:38:34'),
(210, '6cf3808856d0c25f88a11acad111ac86', 'Users', 'users', '202', '{\"email\":\"iamjerryvic@gmail.com\"}', 1, '2018-10-20 15:15:46', '2018-10-17 15:15:46', '2018-10-17 15:16:58'),
(211, '472309ef1504865c2452f66385fb6bbd', 'Users', 'users', '203', '{\"email\":\"johnolusanwo10@gmail.com\"}', 1, '2018-10-20 15:17:40', '2018-10-17 15:17:40', '2018-10-17 15:18:19'),
(212, 'c5a8527ba50efd825a5dddd271c4d8a4', 'Users', 'users', '204', '{\"email\":\"alamieyeogo@gmail.com\"}', 0, '2018-10-20 15:56:18', '2018-10-17 15:56:18', '2018-10-17 15:56:18'),
(213, '3ee4e43a01bac0255393c9607a7b3487', 'Users', 'users', '205', '{\"email\":\"chinachi4real014@gmail.com\"}', 0, '2018-10-20 16:11:23', '2018-10-17 16:11:23', '2018-10-17 16:11:23'),
(214, '0493668dfe43e27b14625a6b6f70641e', 'Users', 'users', '206', '{\"email\":\"berlind276@email.com\"}', 0, '2018-10-20 16:20:12', '2018-10-17 16:20:12', '2018-10-17 16:20:12'),
(215, 'ee1e0603abdc4147d360c60bb0e05c1e', 'Users', 'users', '207', '{\"email\":\"berlind276@email.com\"}', 0, '2018-10-20 16:21:06', '2018-10-17 16:21:06', '2018-10-17 16:21:06'),
(216, 'e8094e98fb8ac0efdea04b87779590b3', 'Users', 'users', '208', '{\"email\":\"berlind276@email.com\"}', 0, '2018-10-20 16:22:02', '2018-10-17 16:22:02', '2018-10-17 16:22:02'),
(217, 'd2fd6eaf0e9b05a9372c591df53b1760', 'Users', 'users', '209', '{\"email\":\"rilwankolawole@gmail.com\"}', 1, '2018-10-20 17:00:06', '2018-10-17 17:00:06', '2018-10-17 17:01:02'),
(218, 'c6c928785102fecdcf971ee1f970f739', 'Users', 'users', '210', '{\"email\":\"easywaize@email.com\"}', 0, '2018-10-20 17:46:41', '2018-10-17 17:46:41', '2018-10-17 17:46:41'),
(219, '9f905f25e3b989abe03d65ef0c7cdcfc', 'Users', 'users', '211', '{\"email\":\"easywaize@email.com\"}', 0, '2018-10-20 17:48:09', '2018-10-17 17:48:09', '2018-10-17 17:48:09'),
(220, 'd8245a40f0ddbe97390ab6e52e14cdba', 'Users', 'users', '212', '{\"email\":\"Akinsanyarafiuakanji@gmail.com\"}', 0, '2018-10-20 19:57:03', '2018-10-17 19:57:03', '2018-10-17 19:57:03'),
(221, '8fc8608fdf8211a1f5d90fbf9c4110e9', 'Users', 'users', '213', '{\"email\":\"westinosamuel@gmail.com\"}', 0, '2018-10-20 20:18:01', '2018-10-17 20:18:01', '2018-10-17 20:18:01'),
(222, 'cd8cb52d95f0b0c358ba28b33b6712fd', 'Users', 'users', '214', '{\"email\":\"westinosamuel@gmail.com\"}', 1, '2018-10-20 20:18:55', '2018-10-17 20:18:55', '2018-10-17 20:22:09'),
(223, 'a30841aefc45efb3af1d4b05223bc582', 'Users', 'users', '215', '{\"email\":\"www.nurouche@gmail.com\"}', 0, '2018-10-20 20:31:55', '2018-10-17 20:31:55', '2018-10-17 20:31:55'),
(224, 'd1291396e52847c2717addd870cb0079', 'Users', 'users', '216', '{\"email\":\"simonbright211@gmail.com\"}', 0, '2018-10-20 20:38:25', '2018-10-17 20:38:25', '2018-10-17 20:38:25'),
(225, '61959ec7174d96e252f14c003b76aa3b', 'Users', 'users', '217', '{\"email\":\"doncoolnwamama@gmail.com\"}', 0, '2018-10-20 20:48:57', '2018-10-17 20:48:57', '2018-10-17 20:48:57'),
(226, '8d938883c4d169318724c72db88926be', 'Users', 'users', '218', '{\"email\":\"doncoolnwamama@gmail.com\"}', 0, '2018-10-20 20:54:55', '2018-10-17 20:54:55', '2018-10-17 20:54:55'),
(227, 'cc28924180708b68424145bc0aa81075', 'Users', 'users', '219', '{\"email\":\"doncoolnwamama@gmail.com\"}', 0, '2018-10-20 20:56:01', '2018-10-17 20:56:01', '2018-10-17 20:56:01'),
(228, '0e182d9287910f32926856460ad6b5d7', 'Users', 'users', '220', '{\"email\":\"doncoolnwamama@gmail.com\"}', 0, '2018-10-20 20:56:55', '2018-10-17 20:56:55', '2018-10-17 20:56:55'),
(229, 'ba15751840c0ed6ce4196540c38b2a09', 'Users', 'users', '221', '{\"email\":\"doncoolnwamama@gmail.com\"}', 0, '2018-10-20 20:58:01', '2018-10-17 20:58:01', '2018-10-17 20:58:01'),
(230, '1f41250b9392d10e364e6dcf2a47f9c0', 'Users', 'users', '222', '{\"email\":\"doncoolnwamama@gmail.com\"}', 0, '2018-10-20 20:58:51', '2018-10-17 20:58:51', '2018-10-17 20:58:51'),
(231, '2d4880ad5d2c32501b437dacfe0835f8', 'Users', 'users', '223', '{\"email\":\"Ndidiamakacynia97@yahoo.com\"}', 0, '2018-10-20 22:10:34', '2018-10-17 22:10:34', '2018-10-17 22:10:34'),
(232, '56948f05be478a22d38d2b64770da8c9', 'Users', 'users', '224', '{\"email\":\"yungflash411@gmail.com\"}', 1, '2018-10-20 22:26:11', '2018-10-17 22:26:11', '2018-10-17 23:27:10'),
(233, '2bf0b40e6cfbfda4ccac243548f0796b', 'Users', 'users', '225', '{\"email\":\"folarinroqeeb12@yahoo.com\"}', 0, '2018-10-20 23:12:24', '2018-10-17 23:12:24', '2018-10-17 23:12:24'),
(234, '43600930c5fba55212daad77cb6e959a', 'Users', 'users', '226', '{\"email\":\"ajogwu84@gmail.com\"}', 1, '2018-10-20 23:50:02', '2018-10-17 23:50:02', '2018-10-17 23:55:11'),
(235, 'd93bbfadcb9ca7df1000ed5e29ed3d1a', 'Users', 'users', '227', '{\"email\":\"jamesabdullahi2017@gmail.com\"}', 0, '2018-10-20 23:53:11', '2018-10-17 23:53:11', '2018-10-17 23:53:11'),
(236, '3621b278ef4abdfd7fde4e2518c0a3e6', 'Users', 'users', '228', '{\"email\":\"iamcooljaebbf@gmail.com\"}', 1, '2018-10-21 00:41:08', '2018-10-18 00:41:08', '2018-10-18 00:42:24'),
(237, '4a67299d6722dbc38cd4f698f65ce0a2', 'Users', 'users', '229', '{\"email\":\"jerrywine88@gmail.com\"}', 1, '2018-10-21 05:06:22', '2018-10-18 05:06:22', '2018-10-18 05:20:15'),
(238, '85270367df4f8c06fa4788722f1cd19c', 'Users', 'users', '230', '{\"email\":\"obichinonso989@gmail.com\"}', 1, '2018-10-21 07:13:16', '2018-10-18 07:13:16', '2018-10-18 17:08:46'),
(239, 'ad4bc3559711ff00f5bf77d61996c71e', 'Users', 'users', '231', '{\"email\":\"www.awulonuchristian404@gmail.com\"}', 0, '2018-10-21 08:55:05', '2018-10-18 08:55:05', '2018-10-18 08:55:05'),
(240, 'c755f157d73928910b1152ba23f3e2c8', 'Users', 'users', '232', '{\"email\":\"akeemayantokun30@gmail.com\"}', 0, '2018-10-21 09:08:27', '2018-10-18 09:08:27', '2018-10-18 09:08:27'),
(241, '1e3012b2cf5b2f14c1a183bbb47ac953', 'Users', 'users', '233', '{\"email\":\"Benjaminjames559@gmail.com\"}', 0, '2018-10-21 09:12:30', '2018-10-18 09:12:30', '2018-10-18 09:12:30'),
(242, '9f80a709e469ad3f3590a2a7d975308f', 'Users', 'users', '234', '{\"email\":\"danfrayozee@gmail.com\"}', 1, '2018-10-21 09:14:24', '2018-10-18 09:14:24', '2018-10-18 09:19:26'),
(243, '1450093db4aac722f4584d47c00a95a1', 'Users', 'users', '235', '{\"email\":\"adoalvin7@gmail.com\"}', 0, '2018-10-21 10:17:12', '2018-10-18 10:17:12', '2018-10-18 10:17:12'),
(244, '47c8872e2803a843a38042122d5f93b5', 'Users', 'users', '236', '{\"email\":\"ayodejiisrael28@gmail.Com\"}', 1, '2018-10-21 10:55:07', '2018-10-18 10:55:07', '2018-10-18 11:01:36'),
(245, 'b48feb24ed976e75fe9c897e4b445fae', 'Users', 'users', '237', '{\"email\":\"rukkygbens2@gmail.com\"}', 1, '2018-10-21 11:53:10', '2018-10-18 11:53:10', '2018-10-18 11:54:20'),
(246, 'ad0e667ce53f0818c5d7fd71bb4fab7e', 'Users', 'users', '238', '{\"email\":\"chibuzorjohn231@gmail.com\"}', 0, '2018-10-21 12:20:40', '2018-10-18 12:20:40', '2018-10-18 12:20:40'),
(247, 'd00026668ff47df0bdf1a6e6fadc9beb', 'Users', 'users', '239', '{\"email\":\"beerexbeat@gmail.com\"}', 1, '2018-10-21 12:51:34', '2018-10-18 12:51:34', '2018-10-18 12:52:04'),
(248, 'fb282b1b1535aee9925684f1169ad13a', 'Users', 'users', '240', '{\"email\":\"olapadequadriolatoyese@gmail.com\"}', 1, '2018-10-21 13:43:02', '2018-10-18 13:43:02', '2018-10-18 13:44:06'),
(249, 'a2469cb0473545b6dc2e5afba571ffae', 'Users', 'users', '241', '{\"email\":\"eprince188@gmail.com\"}', 1, '2018-10-21 13:55:33', '2018-10-18 13:55:33', '2018-10-18 14:03:01'),
(250, 'f79b8b62fc6756c84bcccb50b199c897', 'Users', 'users', '242', '{\"email\":\"vichordzezekiel402@gmail.com\"}', 1, '2018-10-21 15:37:19', '2018-10-18 15:37:19', '2018-10-18 15:39:38'),
(251, '1e6e6e6fdba16e5bda81f684ae966aba', 'Users', 'users', '243', '{\"email\":\"fridayonyema71@gmail.com\"}', 1, '2018-10-21 16:47:43', '2018-10-18 16:47:43', '2018-10-18 17:11:26'),
(252, 'f58501f83a54ebd6c5483be8ac34414d', 'Users', 'users', '244', '{\"email\":\"majestythankgod@gmail.com\"}', 0, '2018-10-21 17:36:08', '2018-10-18 17:36:08', '2018-10-18 17:36:08'),
(253, '9af7723110e8ac8d9643cb27659ed721', 'Users', 'users', '245', '{\"email\":\"Markinoman090@gmail.com\"}', 0, '2018-10-21 19:35:49', '2018-10-18 19:35:49', '2018-10-18 19:35:49'),
(254, '5452f2853506f44ccf96e4bb6618ceb6', 'Users', 'users', '246', '{\"email\":\"johnson15309@gmail.com\"}', 1, '2018-10-21 19:51:22', '2018-10-18 19:51:22', '2018-10-18 19:53:29'),
(255, 'c493f12c77571662cce44bfe5775e9ba', 'Users', 'users', '247', '{\"email\":\"hopezdj2018@gmail.com\"}', 1, '2018-10-21 20:03:18', '2018-10-18 20:03:18', '2018-10-18 20:08:39'),
(256, '312cc8ff1b7eb1800aececfef34dc755', 'Users', 'users', '248', '{\"email\":\"hopezdj2018@gmail.com\"}', 1, '2018-10-21 20:04:16', '2018-10-18 20:04:16', '2018-10-18 20:08:52'),
(257, '9b28c1ba9d3545d312ca92737f2e2f8e', 'Users', 'users', '249', '{\"email\":\"owelgane@gmail.com\"}', 1, '2018-10-21 21:41:38', '2018-10-18 21:41:38', '2018-10-18 21:43:09'),
(258, '3038b38eb12639849d0975e8bf8eaac4', 'Users', 'users', '250', '{\"email\":\"praisekeys8@gmail.com\"}', 1, '2018-10-22 00:20:51', '2018-10-19 00:20:51', '2018-10-19 00:22:50'),
(259, '8077628e590a27892204dbc7dc111e7f', 'Users', 'users', '251', '{\"email\":\"onuzuruprecious@gmail.com\"}', 0, '2018-10-22 00:47:40', '2018-10-19 00:47:40', '2018-10-19 00:47:40'),
(260, 'f60ed2d9f14d009c610c955952a574b8', 'Users', 'users', '252', '{\"email\":\"Idinbinta@gmail.com\"}', 1, '2018-10-22 00:53:59', '2018-10-19 00:53:59', '2018-10-19 01:13:47'),
(261, 'd03abc88596f377038aad19f81f1a794', 'Users', 'users', '252', '{\"email\":\"Idinbinta@gmail.com\"}', 1, '2018-10-22 01:15:37', '2018-10-19 01:15:37', '2018-10-19 01:16:21'),
(262, 'b270f00f1d821b791d070778bf72a02f', 'Users', 'users', '253', '{\"email\":\"samuelkayode156@gmail.com\"}', 1, '2018-10-22 10:15:59', '2018-10-19 10:15:59', '2018-10-19 10:18:16'),
(263, '12bb405f4d54e4202ac95582fb7c46f4', 'Users', 'users', '254', '{\"email\":\"tseeyolterverrapheal@gmail.com\"}', 0, '2018-10-22 10:17:06', '2018-10-19 10:17:06', '2018-10-19 10:17:06'),
(264, 'de57bd5f3e355940b0e26c2a602c4877', 'Users', 'users', '255', '{\"email\":\"deniselen45@gmail.com\"}', 0, '2018-10-22 10:54:33', '2018-10-19 10:54:33', '2018-10-19 10:54:33'),
(265, '26ae8e7ea94a03e43eccee3186dca04c', 'Users', 'users', '256', '{\"email\":\"deniselen45@gmail.com\"}', 0, '2018-10-22 10:55:10', '2018-10-19 10:55:10', '2018-10-19 10:55:10'),
(266, '33759ac79b7e60b8022b2fb2ae886f8d', 'Users', 'users', '257', '{\"email\":\"deniselen45@gmail.com\"}', 1, '2018-10-22 11:00:30', '2018-10-19 11:00:30', '2018-10-19 11:05:31'),
(267, '280fc23d05285157bd483fde95b573cf', 'Users', 'users', '258', '{\"email\":\"virtuesticks1@gmail.com\"}', 1, '2018-10-22 12:16:12', '2018-10-19 12:16:12', '2018-10-19 18:03:39'),
(268, '030db905f3676cdc8a9abe6a3c9bcb5f', 'Users', 'users', '259', '{\"email\":\"adelekesaheed493@gmail.com\"}', 0, '2018-10-22 12:38:40', '2018-10-19 12:38:40', '2018-10-19 12:38:40'),
(269, '38a471741584212dc2e6d0c29454165a', 'Users', 'users', '260', '{\"email\":\"machidice@gmail.com\"}', 1, '2018-10-22 13:25:51', '2018-10-19 13:25:51', '2018-10-19 13:36:12'),
(270, '74f3945f63b50aebe8eb5131352a89a3', 'Users', 'users', '261', '{\"email\":\"ibinabojack2@gmail.com\"}', 0, '2018-10-22 13:28:18', '2018-10-19 13:28:18', '2018-10-19 13:28:18'),
(271, '53939d0dbb0543e83a5fea281020a266', 'Users', 'users', '262', '{\"email\":\"ibinabojack2@gmail.com\"}', 0, '2018-10-22 13:30:06', '2018-10-19 13:30:06', '2018-10-19 13:30:06'),
(272, 'bc17c92a07ccd4f3e3ae2dcdfbd013b8', 'Users', 'users', '263', '{\"email\":\"mayorflinks0@gmail.com\"}', 1, '2018-10-22 13:59:05', '2018-10-19 13:59:05', '2018-10-19 14:06:12'),
(273, 'af52229e571f3c9063c57b2190f7774d', 'Users', 'users', '264', '{\"email\":\"mayorflinks0@gmail.com\"}', 0, '2018-10-22 14:00:03', '2018-10-19 14:00:03', '2018-10-19 14:00:03'),
(274, '62c8fa12ff6fe76989354478768ab8a9', 'Users', 'users', '265', '{\"email\":\"Machenry27@gmail.com\"}', 1, '2018-10-22 14:15:00', '2018-10-19 14:15:00', '2018-10-19 14:20:35'),
(275, '0ceb2f2d476aed0ad67391d7e194af4d', 'Users', 'users', '266', '{\"email\":\"petzycool8@gmail.com\"}', 0, '2018-10-22 15:12:35', '2018-10-19 15:12:35', '2018-10-19 15:12:35'),
(276, 'ffe86496fc02a1ef2e4dc9d4a3ec2e3a', 'Users', 'users', '267', '{\"email\":\"james22o3i@gmail.com\"}', 0, '2018-10-22 15:37:40', '2018-10-19 15:37:40', '2018-10-19 15:37:40'),
(277, '68544b39d495125371dbfe93d64ddeed', 'Users', 'users', '268', '{\"email\":\"james22o3i@gmail.com\"}', 1, '2018-10-22 15:41:37', '2018-10-19 15:41:37', '2018-10-19 15:47:47'),
(278, 'a5740cc0b6311386d44068981d05f3b2', 'Users', 'users', '269', '{\"email\":\"adebimpeadetayo7@gmail.com\"}', 1, '2018-10-22 15:47:01', '2018-10-19 15:47:01', '2018-10-19 15:53:15'),
(279, 'bf212825c558e409173c261dbe3930a6', 'Users', 'users', '270', '{\"email\":\"khafeedbala@gmail.com\"}', 1, '2018-10-22 17:37:58', '2018-10-19 17:37:58', '2018-10-20 13:10:13'),
(280, '75933a99162290efbbdd27bff37badbe', 'Users', 'users', '271', '{\"email\":\"virtuesticks1@gmail.com\"}', 0, '2018-10-22 17:49:10', '2018-10-19 17:49:10', '2018-10-19 17:49:10'),
(281, '0698c55294c99632ea5d7ec0336fbb9d', 'Users', 'users', '272', '{\"email\":\"Simplepaul50@gmail.com\"}', 1, '2018-10-22 17:51:31', '2018-10-19 17:51:31', '2018-10-19 17:56:08'),
(282, '05badbb390b266600a4e499dc8346a77', 'Users', 'users', '273', '{\"email\":\"pd328567@gmail.com\"}', 0, '2018-10-22 19:07:54', '2018-10-19 19:07:54', '2018-10-19 19:07:54'),
(283, '7d368f0e81b90f01bd337ed3c5dc5435', 'Users', 'users', '274', '{\"email\":\"Kingsleygold007@gmail.com\"}', 1, '2018-10-22 22:45:42', '2018-10-19 22:45:42', '2018-10-19 22:51:43'),
(284, 'ae401bb9651fd939c64f7ea20911de81', 'Users', 'users', '275', '{\"email\":\"kmcap1@gmail.com\"}', 1, '2018-10-22 22:57:37', '2018-10-19 22:57:37', '2018-10-20 00:25:56'),
(285, 'c7147550c02373641e67f00924cb520a', 'Users', 'users', '276', '{\"email\":\"scenicdedet@gmail.com\"}', 0, '2018-10-22 23:03:42', '2018-10-19 23:03:42', '2018-10-19 23:03:42');
INSERT INTO `tokenize_tokens` (`id`, `token`, `foreign_alias`, `foreign_table`, `foreign_key`, `foreign_data`, `status`, `expired`, `created`, `modified`) VALUES
(286, '121bcaa3a55db5f3a6620d81c8627f63', 'Users', 'users', '277', '{\"email\":\"michealseun44@gmail.com\"}', 0, '2018-10-22 23:38:15', '2018-10-19 23:38:15', '2018-10-19 23:38:15'),
(287, 'c077384a16130419b10a6fcb90696f7a', 'Users', 'users', '278', '{\"email\":\"michealseun44@gmail.com\"}', 0, '2018-10-22 23:40:06', '2018-10-19 23:40:06', '2018-10-19 23:40:06'),
(288, '7a9aba033821107cbf7cbfff8e0e6817', 'Users', 'users', '279', '{\"email\":\"flambsalem@gmail.com\"}', 0, '2018-10-23 06:25:36', '2018-10-20 06:25:36', '2018-10-20 06:25:36'),
(289, 'bb36951dfa939acb4d1a0a9e7a893a4e', 'Users', 'users', '280', '{\"email\":\"sadiqbukar33@gmail.com\"}', 1, '2018-10-23 06:38:14', '2018-10-20 06:38:14', '2018-10-20 08:31:26'),
(290, '6073fc4a3e41dbdadc5470304338507c', 'Users', 'users', '281', '{\"email\":\"austinefelix04@gmail.com\"}', 1, '2018-10-23 07:53:08', '2018-10-20 07:53:08', '2018-10-20 07:58:10'),
(291, 'f15220862553bbd3afbd3f6940e64bb1', 'Users', 'users', '282', '{\"email\":\"okuvitalis111@gmail.com\"}', 1, '2018-10-23 08:44:37', '2018-10-20 08:44:37', '2018-10-20 18:37:07'),
(292, '6d7ab9603b1acd6dff08a188659e6071', 'Users', 'users', '283', '{\"email\":\"confidenceayodele2015@gmail.com\"}', 0, '2018-10-23 08:47:24', '2018-10-20 08:47:24', '2018-10-20 08:47:24'),
(293, 'ed7b9b9348ec5d46b6d40da2496b4807', 'Users', 'users', '284', '{\"email\":\"confidenceayodele2015@gmail.com\"}', 0, '2018-10-23 08:48:24', '2018-10-20 08:48:24', '2018-10-20 08:48:24'),
(294, '8f4aefb1dcf466c6d99494e30a880366', 'Users', 'users', '285', '{\"email\":\"yasirmuhammad735@gmail.com\"}', 0, '2018-10-23 09:37:47', '2018-10-20 09:37:47', '2018-10-20 09:37:47'),
(295, 'a439741fa781021c8dcff4e7e6f77bf5', 'Users', 'users', '286', '{\"email\":\"sstephanie690@gmail.com\"}', 1, '2018-10-23 10:08:08', '2018-10-20 10:08:08', '2018-10-20 10:09:52'),
(296, '706ecc7f158777d5fbb3dc90e2cf88d4', 'Users', 'users', '287', '{\"email\":\"sstephanie690@gmail.com\"}', 0, '2018-10-23 10:09:06', '2018-10-20 10:09:06', '2018-10-20 10:09:06'),
(297, '6b233b6e9c267f54111946fb190e78c6', 'Users', 'users', '288', '{\"email\":\"psalmmyconcept@gmail.com\"}', 1, '2018-10-23 10:47:54', '2018-10-20 10:47:54', '2018-10-20 10:50:05'),
(298, 'c7c0e88eada72ba33114ab34eeb015f9', 'Users', 'users', '289', '{\"email\":\"akeemayantokun30@gmail.com\"}', 1, '2018-10-24 14:12:19', '2018-10-21 14:12:19', '2018-10-21 14:13:09'),
(299, 'a58e31649e8be987c47d12b996a5cf10', 'Users', 'users', '290', '{\"email\":\"somtochukwu41@yahoo.com\"}', 1, '2018-10-24 19:59:16', '2018-10-21 19:59:16', '2018-10-21 20:00:32'),
(300, '1a28d85a1790675ba0432eb246a05894', 'Users', 'users', '291', '{\"email\":\"coolj4ril20@yahoo.com\"}', 0, '2018-10-24 20:15:33', '2018-10-21 20:15:33', '2018-10-21 20:15:33'),
(301, '5bdfce9fe94a72a1e3d76a68ec0f7fe3', 'Users', 'users', '292', '{\"email\":\"kevelling12@gmail.com\"}', 1, '2018-10-25 06:43:01', '2018-10-22 06:43:01', '2018-10-22 06:43:21'),
(302, '56e1920b5e7d4ccfdd65546af499b230', 'Users', 'users', '293', '{\"email\":\"barakisrael100@gmail.com\"}', 1, '2018-10-25 19:18:06', '2018-10-22 19:18:06', '2018-10-22 19:18:42'),
(303, '7d4dacf1af03ecc0d5a34c8f884e0833', 'Users', 'users', '294', '{\"email\":\"dejikint@gmail.com\"}', 1, '2018-10-28 02:44:04', '2018-10-25 02:44:04', '2018-10-25 02:44:53'),
(304, '72a206a2a1ddf481b61b16e6132cc6eb', 'Users', 'users', '294', '{\"email\":\"only1gdspd@gmail.com\"}', 0, '2018-10-28 02:46:15', '2018-10-25 02:46:15', '2018-10-25 02:46:15'),
(305, '37ed566abefccce272c7e9300122f5b0', 'Users', 'users', '294', '{\"email\":\"only1gdspd@gmail.com\"}', 0, '2018-10-28 02:46:43', '2018-10-25 02:46:43', '2018-10-25 02:46:43'),
(306, 'c4c2d7a74e48054723697977056400f5', 'Users', 'users', '295', '{\"email\":\"stonemanuel3@gmail.com\"}', 1, '2018-10-30 14:40:03', '2018-10-27 14:40:03', '2018-10-27 14:40:33'),
(307, '5faf77d8e37b1e75c0d57494b17f6e15', 'Users', 'users', '296', '{\"email\":\"zezmo9@gmail.com\"}', 1, '2018-10-31 11:10:24', '2018-10-28 11:10:24', '2018-10-28 11:11:03'),
(308, 'd957bbbbe68a275610d51353e5011c9f', 'Users', 'users', '297', '{\"email\":\"nyasamusicpromoters@gmail.com\"}', 0, '2018-11-01 11:41:59', '2018-10-29 11:41:59', '2018-10-29 11:41:59'),
(309, 'c8bdb917f8f9e8dcf03d53fed62bddf3', 'Users', 'users', '298', '{\"email\":\"flyboymorgan@icloud.com\"}', 1, '2018-11-01 18:12:46', '2018-10-29 18:12:46', '2018-10-29 18:15:54'),
(310, 'adc97f41c02bf93b7c0d73c2673d71c7', 'Users', 'users', '299', '{\"email\":\"xamuel121@gmail.com\"}', 1, '2018-11-03 18:46:35', '2018-10-31 18:46:35', '2018-10-31 18:46:57'),
(311, 'fc6c90bac206f5d79bdac513d2c06ce1', 'Users', 'users', '300', '{\"email\":\"baddestfreeboy@gmail.com\"}', 1, '2018-11-04 07:00:51', '2018-11-01 07:00:51', '2018-11-01 07:01:27'),
(312, '64f635dc14feb228a6b3c649eca9c7c5', 'Users', 'users', '301', '{\"email\":\"27632bonner@centleadetai.xyz\"}', 0, '2018-11-06 02:00:50', '2018-11-03 02:00:50', '2018-11-03 02:00:50'),
(313, '1b89294a7c4fe8aa25bbe99167b276ea', 'Users', 'users', '302', '{\"email\":\"ohilere@gmail.com\"}', 1, '2018-11-08 07:35:25', '2018-11-05 07:35:25', '2018-11-05 07:35:49'),
(314, '450b7b3a8d9056450d87de395dc46c15', 'Users', 'users', '303', '{\"email\":\"efemena2580@yahoo.com\"}', 1, '2018-11-08 22:39:12', '2018-11-05 22:39:12', '2018-11-08 16:43:43'),
(315, '5e835b85da03cf9d85cd9ecbabd4dbac', 'Users', 'users', '304', '{\"email\":\"jayvoice_rapghost@yahoo.com\"}', 0, '2018-11-09 01:42:49', '2018-11-06 01:42:49', '2018-11-06 01:42:49'),
(316, '89d0cbce8f0d94f190d5d7b1d847ca84', 'Users', 'users', '305', '{\"email\":\"54647urbine@erexcolbart.xyz\"}', 1, '2018-11-09 11:31:09', '2018-11-06 11:31:09', '2018-11-06 11:49:24'),
(317, 'a32d0203cf34b064962afcc5775055ea', 'Users', 'users', '306', '{\"email\":\"mayorofcultures@gmail.com\"}', 1, '2018-11-10 14:16:51', '2018-11-07 14:16:51', '2018-11-07 14:18:33'),
(318, '6f82068d25991a96a0bd35dcad354ba8', 'Users', 'users', '307', '{\"email\":\"51677merganthaler@concetomou.xyz\"}', 1, '2018-11-10 22:40:24', '2018-11-07 22:40:24', '2018-11-07 22:51:51'),
(319, 'fd994da5da3838611362b164cd62f7a1', 'Users', 'users', '308', '{\"email\":\"itunujohnson90@gmail.com\"}', 1, '2018-11-11 08:16:33', '2018-11-08 08:16:33', '2018-11-08 08:17:54'),
(320, '6840f3779b26cf61ed0bf2bcd25ac13a', 'Users', 'users', '309', '{\"email\":\"promiseborn21@gilma.com\"}', 0, '2018-11-11 13:49:29', '2018-11-08 13:49:29', '2018-11-08 13:49:29'),
(321, '977e9bff8d0f94e03c0b236ce5d5783f', 'Users', 'users', '310', '{\"email\":\"dimitriitmf@gmail.com\"}', 1, '2018-11-11 18:57:43', '2018-11-08 18:57:43', '2018-11-08 18:58:20'),
(322, 'adc77fec21652fd9a8a1cea38b5903ff', 'Users', 'users', '311', '{\"email\":\"rakandwanaho3@gmail.com\"}', 1, '2018-11-12 23:18:20', '2018-11-09 23:18:20', '2018-11-09 23:18:39'),
(323, '6e9e8b4df45b11b7435232a760ea4206', 'Users', 'users', '312', '{\"email\":\"nuxonmesidor@faktoriatis.com\"}', 0, '2018-11-14 05:28:19', '2018-11-11 05:28:19', '2018-11-11 05:28:19'),
(324, '1686f23cd2f2050db2c5c07e558e41ae', 'Users', 'users', '313', '{\"email\":\"theknight99@gmail.com\"}', 1, '2018-11-15 11:05:45', '2018-11-12 11:05:45', '2018-11-12 11:06:16'),
(325, 'bfaee2bccd72347148e3aa0c9996d1b2', 'Users', 'users', '314', '{\"email\":\"2390needs@compscorerric.xyz\"}', 1, '2018-11-16 08:42:18', '2018-11-13 08:42:18', '2018-11-13 08:50:33'),
(326, 'f5acd448cef8917da4dd357989bb1494', 'Users', 'users', '315', '{\"email\":\"88087thatch@erexcolbart.xyz\"}', 1, '2018-11-17 11:26:47', '2018-11-14 11:26:47', '2018-11-14 12:10:04'),
(327, '8493805805ec936c0db9703f5f76ac95', 'Users', 'users', '316', '{\"email\":\"tseeyolterverrapheal@gmail.com\"}', 1, '2018-11-18 11:49:16', '2018-11-15 11:49:16', '2018-11-15 12:11:07'),
(328, 'd83ff71cc0352cc88c6e032f1d669c9c', 'Users', 'users', '317', '{\"email\":\"kenrywhite@gmail.com\"}', 1, '2018-11-21 13:55:10', '2018-11-18 13:55:10', '2018-11-18 13:55:55'),
(329, '7dc1abb3bdd3957d9b896df345a009eb', 'Users', 'users', '318', '{\"email\":\"Christianshaka7@gmail.com\"}', 0, '2018-11-21 18:36:49', '2018-11-18 18:36:49', '2018-11-18 18:36:49'),
(330, 'b8d272078026507cb56c2e092cba296a', 'Users', 'users', '319', '{\"email\":\"samharpermusic@gmail.com\"}', 1, '2018-11-23 17:25:56', '2018-11-20 17:25:56', '2018-11-20 17:26:20'),
(331, '684523853be4379d8ee1f2f737064dc6', 'Users', 'users', '320', '{\"email\":\"Emmanuelsmith110@yahoo.com\"}', 1, '2018-11-24 17:14:59', '2018-11-21 17:14:59', '2018-11-21 17:15:35'),
(332, '0e4735ccd4bf43e76d49a858c978ddd7', 'Users', 'users', '321', '{\"email\":\"Pelumialexpepe@gmail.com\"}', 1, '2018-11-25 15:11:52', '2018-11-22 15:11:52', '2018-11-22 15:12:32'),
(333, '8688904b63156a9e218b8df1d5dd070b', 'Users', 'users', '322', '{\"email\":\"dowwellnicole85@gmail.com\"}', 1, '2018-11-26 09:43:25', '2018-11-23 09:43:25', '2018-11-23 09:43:56'),
(334, 'ce6da38e0d222436bbb8725c69257582', 'Users', 'users', '323', '{\"email\":\"omadachijohn@gmail.com\"}', 1, '2018-11-26 12:10:24', '2018-11-23 12:10:24', '2018-11-23 12:10:45'),
(335, 'd78807a37ff8ebe87fdae8ed95e29234', 'Users', 'users', '324', '{\"email\":\"adesinafoluoni@rocketmail.com\"}', 1, '2018-11-26 21:40:56', '2018-11-23 21:40:56', '2018-11-23 21:42:15'),
(336, '533bf8583b553b9fe0d18980705a8c57', 'Users', 'users', '325', '{\"email\":\"chimsumasom@gmail.com\"}', 1, '2018-11-27 14:17:49', '2018-11-24 14:17:49', '2018-11-24 14:18:37'),
(337, '53721911e87c2dfdd8a2a7e2df9ee979', 'Users', 'users', '326', '{\"email\":\"olaleyetoluwani@gmail.com\"}', 1, '2018-11-29 21:38:36', '2018-11-26 21:38:36', '2018-11-26 21:42:33'),
(338, 'be494248cbe446da33e573ae75566dd6', 'Users', 'users', '327', '{\"email\":\"bitrusreuben0@gmail.com\"}', 1, '2018-12-02 15:25:13', '2018-11-29 15:25:13', '2018-11-29 15:29:04'),
(339, '4df1dd3814729613a698c5f7ba8d8b5d', 'Users', 'users', '328', '{\"email\":\"harrislezs@gmail.com\"}', 1, '2018-12-10 05:45:33', '2018-12-07 05:45:33', '2018-12-07 05:46:09'),
(340, '53fbe68c2628e7c17f95fc57c11cf21b', 'Users', 'users', '329', '{\"email\":\"mugayafahad@gmail.com\"}', 1, '2018-12-13 09:59:43', '2018-12-10 09:59:43', '2018-12-10 10:01:35'),
(341, 'e1dc35176405e25099b9815548c4739a', 'Users', 'users', '330', '{\"email\":\"olotudammy@gmail.com\"}', 1, '2018-12-13 13:21:37', '2018-12-10 13:21:37', '2018-12-10 13:58:52'),
(342, '7990523de5880242bfe4b0db4283a555', 'Users', 'users', '331', '{\"email\":\"halexranking@gmail.com\"}', 1, '2018-12-15 00:13:50', '2018-12-12 00:13:50', '2018-12-12 00:14:39'),
(343, '3aa999cf0e179111f3c65bf6059f18b1', 'Users', 'users', '332', '{\"email\":\"mestaromiebills@gmail.com\"}', 1, '2018-12-16 15:18:41', '2018-12-13 15:18:42', '2018-12-13 15:19:25'),
(344, '2bdab2681024678d8fca47b465223dbb', 'Users', 'users', '333', '{\"email\":\"jadeniyi75@gmail.com\"}', 1, '2018-12-17 17:05:04', '2018-12-14 17:05:04', '2018-12-14 17:05:34'),
(345, '239fa225e721da555ea6c92fd9d9ed65', 'Users', 'users', '334', '{\"email\":\"blackboiwonder1@gmail.com\"}', 1, '2018-12-21 07:23:53', '2018-12-18 07:23:53', '2018-12-18 07:27:09'),
(346, 'a77e13291bbe60a6c4ffc4c00af7ccfd', 'Users', 'users', '335', '{\"email\":\"blackboiwonder1@gmail.com\"}', 1, '2018-12-21 07:24:24', '2018-12-18 07:24:24', '2018-12-18 07:28:28'),
(347, '035bea12f846be1b8b1a470510d1d762', 'Users', 'users', '336', '{\"email\":\"blackboiwonder1@gmail.com\"}', 0, '2018-12-21 07:24:59', '2018-12-18 07:24:59', '2018-12-18 07:24:59'),
(348, 'a78a660b9d05d844afb4d0e08a5b9f90', 'Users', 'users', '337', '{\"email\":\"coleblackofficial@gmail.com\"}', 1, '2018-12-22 11:03:38', '2018-12-19 11:03:38', '2018-12-19 11:04:16'),
(349, '25243b56c046cb95588fefdd32ead503', 'Users', 'users', '338', '{\"email\":\"43119muhs@concetomou.eu\"}', 0, '2018-12-24 03:16:35', '2018-12-21 03:16:35', '2018-12-21 03:16:35'),
(350, '45e2beea85e595f72d78ebaee2046573', 'Users', 'users', '339', '{\"email\":\"74398laflen@tarcuttgige.eu\"}', 1, '2018-12-24 04:48:46', '2018-12-21 04:48:46', '2018-12-21 04:56:02'),
(351, '392306777a026eaac6ec7c9e54dc2004', 'Users', 'users', '340', '{\"email\":\"84294haynesworth@centnetploggbu.eu\"}', 0, '2018-12-24 05:17:18', '2018-12-21 05:17:18', '2018-12-21 05:17:18'),
(352, '04a6c6db0b1bc1895ffe0ea02c17836c', 'Users', 'users', '341', '{\"email\":\"87331cerecedes@analenfo111.eu\"}', 1, '2018-12-24 05:50:20', '2018-12-21 05:50:20', '2018-12-21 05:59:39'),
(353, '2187fba43789800a04e71e6b2a78b36b', 'Users', 'users', '342', '{\"email\":\"14341hasha@acnebrufolirime43.eu\"}', 1, '2018-12-24 07:12:16', '2018-12-21 07:12:16', '2018-12-21 07:30:23'),
(354, '9fe59df17ab25c4ec7c9368d8fa544ed', 'Users', 'users', '343', '{\"email\":\"7836laitinen@enercranyr.eu\"}', 0, '2018-12-24 07:47:38', '2018-12-21 07:47:38', '2018-12-21 07:47:38'),
(355, '2bc4ce67964d23c6ed1315dca5c37cee', 'Users', 'users', '344', '{\"email\":\"17180gavette@caidadepeloyal26.eu\"}', 1, '2018-12-24 08:07:41', '2018-12-21 08:07:41', '2018-12-21 08:15:49'),
(356, '470f3dc81e2d8b7478b5e8b6a7f34145', 'Users', 'users', '345', '{\"email\":\"80882halford@gaterremeds1975.eu\"}', 1, '2018-12-24 08:07:53', '2018-12-21 08:07:53', '2018-12-21 08:26:03'),
(357, 'bc9dbf596c94e7402b043d155b0fef06', 'Users', 'users', '346', '{\"email\":\"82619randall@enlerama.eu\"}', 1, '2018-12-24 08:47:54', '2018-12-21 08:47:54', '2018-12-21 08:54:21'),
(358, '4e058d71e801d8860d6b8b0c9e0258cb', 'Users', 'users', '347', '{\"email\":\"62633giambruno@erexcolbart.eu\"}', 1, '2018-12-24 08:57:08', '2018-12-21 08:57:08', '2018-12-21 08:57:56'),
(359, '36492888e9717105b2b26abab0218473', 'Users', 'users', '348', '{\"email\":\"29362funderbunk@acontenle.eu\"}', 1, '2018-12-24 10:32:03', '2018-12-21 10:32:03', '2018-12-21 10:39:01'),
(360, '31b96b0b6967380aee80e32ee163334e', 'Users', 'users', '349', '{\"email\":\"225hobstetter@crosmereta.eu\"}', 1, '2018-12-24 13:03:47', '2018-12-21 13:03:47', '2018-12-21 13:13:26'),
(361, '67aabc5979a8f6f5fac63ed3fb0aea9c', 'Users', 'users', '350', '{\"email\":\"13556beyers@centleadetai.eu\"}', 1, '2018-12-24 15:56:52', '2018-12-21 15:56:52', '2018-12-21 16:02:25'),
(362, 'cc1c602ed9cbd6efef22c703e0340bc9', 'Users', 'users', '351', '{\"email\":\"16526strople@compscorerric.eu\"}', 1, '2018-12-24 18:35:33', '2018-12-21 18:35:33', '2018-12-21 18:37:56'),
(363, 'ae37b80a3b223f6e89aa4b59d01d5728', 'Users', 'users', '352', '{\"email\":\"18348chabaud@concetomou.eu\"}', 1, '2018-12-24 19:28:44', '2018-12-21 19:28:44', '2018-12-21 19:38:23'),
(364, '0059202f1c4c78482af980ef9354ab64', 'Users', 'users', '353', '{\"email\":\"demayor5410@gmail.com\"}', 1, '2018-12-26 00:01:15', '2018-12-23 00:01:15', '2018-12-23 00:01:34'),
(365, '8374f8f7e4f9790a36d072bc3cabfbd3', 'Users', 'users', '354', '{\"email\":\"benbassey@illusys.com.ng\"}', 1, '2018-12-27 13:43:01', '2018-12-24 13:43:01', '2018-12-24 13:44:08'),
(366, 'aa6c1675b9ec74905c54e01a02ba9ee7', 'Users', 'users', '355', '{\"email\":\"27632bonner@acnebrufolirime43.eu\"}', 1, '2018-12-29 03:14:38', '2018-12-26 03:14:38', '2018-12-26 03:19:57'),
(367, '5bbc8b4f803bc06d48abe1e318dca52b', 'Users', 'users', '356', '{\"email\":\"marcelinomontenegro2@0815.su\"}', 0, '2018-12-29 04:36:20', '2018-12-26 04:36:20', '2018-12-26 04:36:20'),
(368, 'fa30944937e248d5a501b83d145acde9', 'Users', 'users', '357', '{\"email\":\"69139applebee@concetomou.eu\"}', 1, '2018-12-29 10:50:38', '2018-12-26 10:50:38', '2018-12-26 10:51:38'),
(369, 'dc9734b8bc8de6a316bcc5df3ef0ff37', 'Users', 'users', '358', '{\"email\":\"225hobstetter@acontenle.eu\"}', 1, '2018-12-29 14:37:12', '2018-12-26 14:37:12', '2018-12-26 14:43:51'),
(370, '255da9376095058deea7da11b96431b4', 'Users', 'users', '359', '{\"email\":\"48293garacia@enlerama.eu\"}', 0, '2018-12-29 19:14:18', '2018-12-26 19:14:18', '2018-12-26 19:14:18'),
(371, 'e7a79397720e5b032b69f76d28ca616b', 'Users', 'users', '360', '{\"email\":\"35517meissner@caidadepeloyal26.eu\"}', 0, '2018-12-29 22:41:38', '2018-12-26 22:41:38', '2018-12-26 22:41:38'),
(372, '4f086c0dd75e9f5dfbafb83ffabeffd6', 'Users', 'users', '361', '{\"email\":\"48293garacia@concetomou.eu\"}', 1, '2018-12-29 23:48:43', '2018-12-26 23:48:43', '2018-12-26 23:51:14'),
(373, '1c49c7ec368460dcf3480cf6c1c032df', 'Users', 'users', '362', '{\"email\":\"antonyong@level3.nut.cc\"}', 0, '2018-12-30 04:40:49', '2018-12-27 04:40:49', '2018-12-27 04:40:49'),
(374, 'cdab2cb15f8e0f6ec5611022450cfc67', 'Users', 'users', '363', '{\"email\":\"2390needs@gaterremeds1975.eu\"}', 1, '2018-12-30 04:46:43', '2018-12-27 04:46:43', '2018-12-27 04:49:27'),
(375, '15687430211360126bf75cd7db7aa5ef', 'Users', 'users', '364', '{\"email\":\"dyantweddle@cyber-phone.eu\"}', 0, '2018-12-30 12:04:15', '2018-12-27 12:04:15', '2018-12-27 12:04:15'),
(376, '51fe120d36560170d1dd3693bf4f41f8', 'Users', 'users', '365', '{\"email\":\"86585kuether@towndewerap23.eu\"}', 1, '2018-12-30 14:21:48', '2018-12-27 14:21:48', '2018-12-27 15:34:33'),
(377, '6c3133766151c7f87a23c7a8828e78b9', 'Users', 'users', '366', '{\"email\":\"marcelinomontenegro2@0815.su\"}', 0, '2018-12-31 03:05:26', '2018-12-28 03:05:26', '2018-12-28 03:05:26'),
(378, 'bdfb25543e8f236666fcd68ef3c6f782', 'Users', 'users', '367', '{\"email\":\"booksilvamiami@gmail.com\"}', 1, '2019-01-02 10:47:43', '2018-12-30 10:47:43', '2018-12-30 10:48:26'),
(379, '2d472f3eb13e47f891ed9c0beea7efb0', 'Users', 'users', '368', '{\"email\":\"fantorm1@gmail.com\"}', 1, '2019-01-03 15:42:34', '2018-12-31 15:42:34', '2018-12-31 15:43:23'),
(380, '49a039da6727ff2b5634522e5fe86645', 'Users', 'users', '369', '{\"email\":\"djsoftbone@yahoo.com\"}', 1, '2019-01-06 01:12:31', '2019-01-03 01:12:31', '2019-01-03 01:13:48'),
(381, '19a934f3157f8013900ba59b1595b2c0', 'Users', 'users', '370', '{\"email\":\"victoriouzicon@gmail.com\"}', 1, '2019-01-07 12:00:29', '2019-01-04 12:00:29', '2019-01-04 12:01:07'),
(382, '03ebe73862127ff87732d0b34d7edb21', 'Users', 'users', '371', '{\"email\":\"23662belter@centleadetai.eu\"}', 0, '2019-01-07 14:54:06', '2019-01-04 14:54:06', '2019-01-04 14:54:06'),
(383, 'b29ce75b8abbe84b74584c3fbefec238', 'Users', 'users', '372', '{\"email\":\"83417bleser@centleadetai.eu\"}', 1, '2019-01-08 00:53:37', '2019-01-05 00:53:37', '2019-01-05 00:55:04'),
(384, 'd1883029f2c27324b40833895ce9a041', 'Users', 'users', '373', '{\"email\":\"theupendocrew@gmail.com\"}', 1, '2019-01-11 05:17:56', '2019-01-08 05:17:56', '2019-01-08 05:24:05'),
(385, '1321060caa9178d4e1f946a080f6414f', 'Users', 'users', '374', '{\"email\":\"theupendocrew@gmail.com\"}', 1, '2019-01-11 05:21:49', '2019-01-08 05:21:49', '2019-01-08 05:23:26'),
(386, 'd28ee4d1e238fd50b73b0b4e04752597', 'Users', 'users', '375', '{\"email\":\"dyhycuc@mailinator.com\"}', 1, '2019-01-11 09:49:12', '2019-01-08 09:49:12', '2019-01-08 09:49:39'),
(387, '6c3226ba15615efbbf855f5915e72351', 'Users', 'users', '376', '{\"email\":\"yungdrizz064@gmail.com\"}', 0, '2019-01-11 15:14:05', '2019-01-08 15:14:05', '2019-01-08 15:14:05'),
(388, 'e292df00f30dfcc9bd80d8b800c9cc5f', 'Users', 'users', '377', '{\"email\":\"tseeyolterverraphea@gmail.com\"}', 0, '2019-01-11 15:15:30', '2019-01-08 15:15:30', '2019-01-08 15:15:30'),
(389, '1a9086d9234076653caf066b690f13e3', 'Users', 'users', '378', '{\"email\":\"empeetunes@gmail.com\"}', 1, '2019-01-15 05:27:23', '2019-01-12 05:27:23', '2019-01-12 05:33:46'),
(390, '81b436e9ef381a3459257bb6bd25e379', 'Users', 'users', '379', '{\"email\":\"ogunmolaoluwatimilehin@gmail.com\"}', 1, '2019-01-15 14:53:35', '2019-01-12 14:53:35', '2019-01-12 14:58:02'),
(391, 'b88691581a63e468c62b2019b27d6c8d', 'Users', 'users', '380', '{\"email\":\"uzzie44@gmail.com\"}', 1, '2019-01-16 04:06:11', '2019-01-13 04:06:11', '2019-01-13 04:10:23'),
(392, 'ebd6a7691ae4c1d068d6c8625361b9c7', 'Users', 'users', '381', '{\"email\":\"43325mierzwiak@compscorerric.eu\"}', 0, '2019-01-19 03:04:45', '2019-01-16 03:04:45', '2019-01-16 03:04:45'),
(393, 'a4c0c60e39c9efd2ca535835f8e6464d', 'Users', 'users', '382', '{\"email\":\"zaclecter@gmail.com\"}', 1, '2019-01-20 16:37:17', '2019-01-17 16:37:17', '2019-01-17 16:41:40'),
(394, 'c000987cea33e15069ec398e78e52129', 'Users', 'users', '383', '{\"email\":\"Ekwuemeikechukwu1@gmail.com\"}', 0, '2019-01-21 03:58:46', '2019-01-18 03:58:46', '2019-01-18 03:58:46'),
(395, '4c85c0c7bde649aef1f642055649b728', 'Users', 'users', '384', '{\"email\":\"tayestephenbright@gmail.com\"}', 1, '2019-01-21 17:51:35', '2019-01-18 17:51:35', '2019-01-18 17:56:20'),
(396, '7704cb13f6d5d3fe66ed206db832b482', 'Users', 'users', '385', '{\"email\":\"mensenchris@web.de\"}', 1, '2019-01-21 20:28:26', '2019-01-18 20:28:26', '2019-01-18 20:29:46'),
(397, 'ea91f83c69535509b73c0e8037853d2f', 'Users', 'users', '386', '{\"email\":\"solomonray.sr@gmail.com\"}', 0, '2019-01-22 15:33:04', '2019-01-19 15:33:04', '2019-01-19 15:33:04'),
(398, 'e71c963939bb84f6fb59fd77b125d6bb', 'Users', 'users', '387', '{\"email\":\"gorillasrecordz@gmail.com\"}', 0, '2019-01-22 15:37:12', '2019-01-19 15:37:12', '2019-01-19 15:37:12'),
(399, '43079e500f27a6a99051c21eb72af99b', 'Users', 'users', '388', '{\"email\":\"gorillarecordz@gmail.com\"}', 0, '2019-01-22 15:44:09', '2019-01-19 15:44:09', '2019-01-19 15:44:09'),
(400, '273f697ffcd453d0e1f53105c5243450', 'Users', 'users', '389', '{\"email\":\"gorillarecordzz@gmail.com\"}', 0, '2019-01-22 15:49:17', '2019-01-19 15:49:17', '2019-01-19 15:49:17'),
(401, '530495a0e6b3cac7e4b67dc1cd14d1d6', 'Users', 'users', '390', '{\"email\":\"gorillarecordzz@gmail.com\"}', 1, '2019-01-22 15:54:39', '2019-01-19 15:54:39', '2019-01-19 15:55:28'),
(402, '05afb0e6a171df17787773180c4c684e', 'Users', 'users', '391', '{\"email\":\"rudrapatel587@gmail.com\"}', 1, '2019-01-22 16:48:16', '2019-01-19 16:48:16', '2019-01-19 16:54:59'),
(403, '60e9f5ee91f2ac9167c2bc2a68ef1874', 'Users', 'users', '392', '{\"email\":\"rudrapatel587@gmail.com\"}', 0, '2019-01-22 16:50:58', '2019-01-19 16:50:58', '2019-01-19 16:50:58'),
(404, '5550727406874600a243fa2b2c860664', 'Users', 'users', '393', '{\"email\":\"dopekhaye@gmail.com\"}', 1, '2019-01-22 17:29:27', '2019-01-19 17:29:27', '2019-01-19 17:40:59'),
(406, 'a86cbd21bf5919362f9beea910d09cc0', 'Users', 'users', '395', '{\"email\":\"hasib2008@gmail.com\"}', 0, '2019-01-23 10:17:19', '2019-01-20 10:17:19', '2019-01-20 10:17:19'),
(407, 'cf72af21efbed0d97e21bfb8861cb86a', 'Users', 'users', '396', '{\"email\":\"asds@ggfmm.aa\"}', 0, '2019-01-23 10:27:45', '2019-01-20 10:27:45', '2019-01-20 10:27:45'),
(408, '3cab739f8709992e7fa40350b680e081', 'Users', 'users', '397', '{\"email\":\"asds@ggfmm.aah\"}', 0, '2019-01-23 10:33:25', '2019-01-20 10:33:26', '2019-01-20 10:33:26'),
(409, '8559eb4f7613e6b2ab1c3e308f6f6d6a', 'Users', 'users', '398', '{\"email\":\"test3@gmail.com\"}', 0, '2019-01-23 10:37:21', '2019-01-20 10:37:21', '2019-01-20 10:37:21'),
(411, '8011767e57f2d910a5e47e4d7a1806b7', 'Users', 'users', '400', '{\"email\":\"ssdfds@gms.vom\"}', 0, '2019-01-23 10:43:32', '2019-01-20 10:43:32', '2019-01-20 10:43:32'),
(412, 'e317f5ac31e18b42911026fdbe77046b', 'Users', 'users', '401', '{\"email\":\"weqeqw@gms.vom\"}', 0, '2019-01-23 10:47:07', '2019-01-20 10:47:07', '2019-01-20 10:47:07'),
(414, 'f9090c4ce5aef1f5f3b1a6f722215883', 'Users', 'users', '408', '{\"email\":\"info@freaksonar.com\"}', 1, '2019-01-23 16:30:37', '2019-01-20 16:30:37', '2019-01-20 16:31:45'),
(415, '51a0dab24423b482fe8398eee3146ac1', 'Users', 'users', '409', '{\"email\":\"sumitchoudhary727@gmail.com\"}', 1, '2019-01-24 19:20:06', '2019-01-21 19:20:06', '2019-01-21 19:25:08'),
(416, '97561815c8914729a42a73cc8e28e110', 'Users', 'users', '410', '{\"email\":\"emihiaewerekingsley@gmail.com\"}', 1, '2019-01-24 21:30:44', '2019-01-21 21:30:44', '2019-01-21 21:38:04'),
(417, '631da1dffdb91944173c2c6f870cfe3e', 'Users', 'users', '411', '{\"email\":\"bobbiphillie@gmail.com\"}', 1, '2019-01-24 21:53:42', '2019-01-21 21:53:42', '2019-01-21 21:58:34'),
(418, '37eae9587abc948a79d0c39b86d1ad82', 'Users', 'users', '412', '{\"email\":\"05akuaku@gafe.molndal.se\"}', 1, '2019-01-25 18:06:27', '2019-01-22 18:06:27', '2019-01-22 18:11:30'),
(419, 'e5d8948a2bf58d92743b264469568f49', 'Users', 'users', '413', '{\"email\":\"05akuaku@gafe.molndal.se\"}', 0, '2019-01-25 18:09:58', '2019-01-22 18:09:58', '2019-01-22 18:09:58'),
(420, '268a0e0244f490e2b2c39f6d96a4ca83', 'Users', 'users', '414', '{\"email\":\"jagjit.singh@brihaspatitech.com\"}', 1, '2019-01-26 07:30:19', '2019-01-23 07:30:19', '2019-01-23 07:31:44'),
(421, 'b3801e8410d4f0113a848e68c9b3a996', 'Users', 'users', '415', '{\"email\":\"blademaka@gmail.com\"}', 1, '2019-01-26 08:06:46', '2019-01-23 08:06:46', '2019-01-24 08:05:56'),
(422, '09ac1b5b087837fb4ca712219b7cfe58', 'Users', 'users', '416', '{\"email\":\"sumrawal12@gmail.com\"}', 1, '2019-01-27 17:57:55', '2019-01-24 17:57:55', '2019-01-24 18:31:40'),
(423, 'b0bc868a4b20b88ec241ea0cde6b5664', 'Users', 'users', '417', '{\"email\":\"youknowtempo@gmail.com\"}', 1, '2019-01-27 23:07:19', '2019-01-24 23:07:19', '2019-01-24 23:07:59'),
(424, 'b61e4e6c3295cd6ca6c859099ce8bb4f', 'Users', 'users', '418', '{\"email\":\"emayakoto@gmail.com\"}', 1, '2019-01-28 00:56:32', '2019-01-25 00:56:32', '2019-01-25 00:58:06'),
(425, '9d32d70027361cb707e5be2f0c1bb953', 'Users', 'users', '419', '{\"email\":\"ayush11ramola@gmail.com\"}', 1, '2019-01-28 05:44:38', '2019-01-25 05:44:38', '2019-01-25 06:10:49'),
(426, 'f0e173ab935896bb3be0f5a393d858a3', 'Users', 'users', '420', '{\"email\":\"parshav@eternalsoftsolutions.com\"}', 1, '2019-01-28 06:17:02', '2019-01-25 06:17:02', '2019-01-25 06:17:31'),
(427, 'c6c7da9de1745459a08d34c4960e1855', 'Users', 'users', '421', '{\"email\":\"teepeedg@gmail.com\"}', 1, '2019-01-29 10:25:31', '2019-01-26 10:25:31', '2019-01-26 10:27:10'),
(428, 'a9e332ab16b5b1a8421b9d94d9132522', 'Users', 'users', '422', '{\"email\":\"iammrjhay@gmail.com\"}', 1, '2019-01-30 19:40:47', '2019-01-27 19:40:47', '2019-01-27 19:52:41'),
(429, '99477da94f28cadbe756d461e5c8a618', 'Users', 'users', '423', '{\"email\":\"somtochukwuanih@yahoo.com\"}', 1, '2019-01-31 10:58:56', '2019-01-28 10:58:56', '2019-01-28 11:00:26'),
(430, '0b21340f98c49ad62c570ac5ea88b47c', 'Users', 'users', '424', '{\"email\":\"bookwhitedaking@gmail.com\"}', 0, '2019-01-31 12:39:35', '2019-01-28 12:39:35', '2019-01-28 12:39:35'),
(431, '5d746b05f1d44473e59369ad53575c02', 'Users', 'users', '425', '{\"email\":\"bisongcyril@yahoo.com\"}', 1, '2019-02-02 17:51:47', '2019-01-30 17:51:47', '2019-01-30 17:52:09'),
(432, 'a5d9a838b7fbe2d305f3f75ac0caa9c8', 'Users', 'users', '426', '{\"email\":\"ogungbemimosope@gmail.com\"}', 0, '2019-02-02 18:33:54', '2019-01-30 18:33:54', '2019-01-30 18:33:54'),
(433, '9d4742d57af9eea91268362e5cfeb99d', 'Users', 'users', '427', '{\"email\":\"maanjaswinder2412@gmail.com\"}', 1, '2019-02-03 21:32:04', '2019-01-31 21:32:04', '2019-01-31 21:38:59'),
(434, '283905b19e68907661cf96a5a6e2b8e1', 'Users', 'users', '428', '{\"email\":\"maanjaswinder2412@gmail.com\"}', 0, '2019-02-03 21:32:41', '2019-01-31 21:32:41', '2019-01-31 21:32:41'),
(435, '04666eeeab93e9bc1de0a31c18c42f3d', 'Users', 'users', 'maanjaswinder2412@gmail.com', '[]', 0, '2019-02-03 22:18:26', '2019-01-31 22:18:26', '2019-01-31 22:18:26'),
(436, 'db6734a617bca4472264a25ec48cdc1e', 'Users', 'users', 'maanjaswinder2412@gmail.com', '[]', 0, '2019-02-03 22:20:16', '2019-01-31 22:20:16', '2019-01-31 22:20:16'),
(437, 'f094904b9cbea5319898cdc6ceb9642e', 'Users', 'users', 'maanjaswinder2412@gmail.com', '[]', 0, '2019-02-03 22:21:57', '2019-01-31 22:21:57', '2019-01-31 22:21:57'),
(438, 'ff1ea94c244f08309226e5af9d19c416', 'Users', 'users', 'maanjaswinder2412@gmail.com', '[]', 0, '2019-02-03 22:35:52', '2019-01-31 22:35:52', '2019-01-31 22:35:52'),
(439, '0614cf4616a79c4175018eef4a3cdd2e', 'Users', 'users', 'maanjaswinder2412@gmail.com', '[]', 0, '2019-02-03 22:36:27', '2019-01-31 22:36:27', '2019-01-31 22:36:27'),
(440, 'bb116010fa60ae13e3ef883a875f7f6b', 'Users', 'users', 'maanjaswinder2412@gmail.com', '[]', 0, '2019-02-03 22:38:50', '2019-01-31 22:38:50', '2019-01-31 22:38:50'),
(441, '722d16cd99a42a009ea90e362e991bd7', 'Users', 'users', 'maanjaswinder2412@gmail.com', '[]', 0, '2019-02-03 22:57:42', '2019-01-31 22:57:42', '2019-01-31 22:57:42'),
(442, '7b5341c37e72042c0621132ab50b2e94', 'Users', 'users', '429', '{\"email\":\"lakiemmanuel.nel18@gmail.com\"}', 1, '2019-02-04 10:58:32', '2019-02-01 10:58:32', '2019-02-01 11:15:17'),
(443, 'd783cd975102fd74860ada84e16e3dd9', 'Users', 'users', '430', '{\"email\":\"Cody.Lehrer68@wills41.modernsailorclothes.com\"}', 0, '2019-02-04 13:51:56', '2019-02-01 13:51:56', '2019-02-01 13:51:56'),
(444, '548f965a7117b2b292a928116e19ece6', 'Users', 'users', '431', '{\"email\":\"aliyuabdulphatai001@gmail.com\"}', 1, '2019-02-04 21:29:52', '2019-02-01 21:29:52', '2019-02-01 21:34:41'),
(445, '88a09cfd004f9320722ea1d51afd2407', 'Users', 'users', '432', '{\"email\":\"Riley_Menge@bb.glasslightbulbs.com\"}', 0, '2019-02-05 02:23:24', '2019-02-02 02:23:24', '2019-02-02 02:23:24'),
(446, '2c2cab7e43e7e1ffe8ec39335113f940', 'Users', 'users', '433', '{\"email\":\"Zane-Aiello18@bb.glasslightbulbs.com\"}', 0, '2019-02-05 03:33:58', '2019-02-02 03:33:58', '2019-02-02 03:33:58'),
(447, '3d1162caee7873e917b33a2d46576e16', 'Users', 'users', '434', '{\"email\":\"Mira-Gee@wills41.modernsailorclothes.com\"}', 0, '2019-02-05 04:16:36', '2019-02-02 04:16:36', '2019-02-02 04:16:36'),
(448, '56e53b5c456701d211786838133568ac', 'Users', 'users', '435', '{\"email\":\"Ara_Mulkey94@aa.aquadivingaccessories.com\"}', 0, '2019-02-05 08:29:33', '2019-02-02 08:29:33', '2019-02-02 08:29:33'),
(449, 'fca6063de6d9eae02f69854c2bd2db0d', 'Users', 'users', '436', '{\"email\":\"68443pipes@slavens.eu\"}', 1, '2019-02-05 17:08:51', '2019-02-02 17:08:51', '2019-02-02 17:15:43'),
(450, 'cabee21ee1f9371cf756ecc304ee34c0', 'Users', 'users', '437', '{\"email\":\"65072smily@simsdsaon.eu\"}', 0, '2019-02-06 09:55:23', '2019-02-03 09:55:23', '2019-02-03 09:55:23'),
(451, 'bde36450111437454788b1b5b91b15a9', 'Users', 'users', '438', '{\"email\":\"nwachukwuchukwukelu@gmail.com\"}', 0, '2019-02-06 18:25:23', '2019-02-03 18:25:23', '2019-02-03 18:25:23'),
(452, '10ca35b41e7075142331ed9656931573', 'Users', 'users', '439', '{\"email\":\"musicboy010@gmail.com\"}', 0, '2019-02-06 23:18:41', '2019-02-03 23:18:41', '2019-02-03 23:18:41'),
(453, '7a91aaf69df162189062769eb114faa4', 'Users', 'users', '440', '{\"email\":\"nwachukwuchukwukelu@gmail.com\"}', 1, '2019-02-07 06:37:25', '2019-02-04 06:37:25', '2019-02-04 06:42:18'),
(454, 'acf84034174e27e45ea60e69590d59f8', 'Users', 'users', '441', '{\"email\":\"Keansrecord@gmail.com\"}', 1, '2019-02-07 16:08:28', '2019-02-04 16:08:28', '2019-02-04 18:04:38'),
(455, 'de245f47a0667f7a7d6fd86531aba2b0', 'Users', 'users', '442', '{\"email\":\"ogbecheclement99@gmail.com\"}', 1, '2019-02-08 06:44:25', '2019-02-05 06:44:25', '2019-02-05 06:49:15'),
(456, 'f7be9122327a2b10228b5fe54ef1dc08', 'Users', 'users', '443', '{\"email\":\"35517meissner@hootspaddepadua.eu\"}', 1, '2019-02-08 14:52:35', '2019-02-05 14:52:35', '2019-02-05 15:00:57'),
(457, '08621a98c1c0bd82155c2d440f38b4c4', 'Users', 'users', '444', '{\"email\":\"promzy132@gmail.com\"}', 1, '2019-02-11 04:26:16', '2019-02-08 04:26:16', '2019-02-08 04:30:44'),
(458, '48d7b135d6efc1c1e45beacfb19a0042', 'Users', 'users', '445', '{\"email\":\"promzy132@gmail.com\"}', 0, '2019-02-11 04:28:46', '2019-02-08 04:28:46', '2019-02-08 04:28:46'),
(459, 'f44cd387bbe99484283881708c597922', 'Users', 'users', '446', '{\"email\":\"Luca.Kruger@gmail.com\"}', 0, '2019-02-11 08:26:51', '2019-02-08 08:26:51', '2019-02-08 08:26:51'),
(460, '3a6e664866c2aacb8f1198a19767a2f6', 'Users', 'users', '447', '{\"email\":\"ElizbethGawler1@smart.jokeray.com\"}', 0, '2019-02-12 13:47:48', '2019-02-09 13:47:48', '2019-02-09 13:47:48'),
(461, '73ee926b7ef783062a4b762c820c60e8', 'Users', 'users', '448', '{\"email\":\"84569kandoll@centnetploggbu.eu\"}', 0, '2019-02-12 17:39:31', '2019-02-09 17:39:31', '2019-02-09 17:39:31'),
(462, '188d6d405d325444359a811f2e649871', 'Users', 'users', '449', '{\"email\":\"eddy_ratty@yahoo.com\"}', 1, '2019-02-12 18:30:00', '2019-02-09 18:30:00', '2019-02-09 18:30:42'),
(463, 'f81074f1466d75873688065c70e0b3c3', 'Users', 'users', '450', '{\"email\":\"Jana-Gooding76@lostfiilmtv.ru\"}', 1, '2019-02-13 20:31:18', '2019-02-10 20:31:18', '2019-02-10 20:33:20'),
(464, '3b1d3a420dd872d736c547b3a499e256', 'Users', 'users', '451', '{\"email\":\"Ogbiane@yahoo.com\"}', 0, '2019-02-14 03:27:03', '2019-02-11 03:27:03', '2019-02-11 03:27:03'),
(465, '96a9eb9b2262e383cce3a9818b4fc383', 'Users', 'users', '452', '{\"email\":\"Ogbiane@yahoo.com\"}', 1, '2019-02-14 03:28:56', '2019-02-11 03:28:56', '2019-02-11 03:29:22'),
(466, '6573b0885cc41639120693ed6ea77e7d', 'Users', 'users', '453', '{\"email\":\"Leslie.Macleay@imdbcom.ru\"}', 1, '2019-02-14 06:43:28', '2019-02-11 06:43:28', '2019-02-11 06:48:27'),
(467, 'e4f72916a2c5c36680a27c3557ce8540', 'Users', 'users', '454', '{\"email\":\"princessadebimpea@gmail.com\"}', 1, '2019-02-14 21:55:22', '2019-02-11 21:55:22', '2019-02-12 09:53:26'),
(468, 'b658387565cf2db64c2b04525e9622be', 'Users', 'users', 'effkhayyondbeat@gmail.com', '[]', 0, '2019-02-15 13:01:02', '2019-02-12 13:01:02', '2019-02-12 13:01:02'),
(469, '63f73b41a1f84b7153a76bc6b51b9eb3', 'Users', 'users', 'effkhayyondbeat@gmail.com', '[]', 0, '2019-02-15 13:03:28', '2019-02-12 13:03:28', '2019-02-12 13:03:28'),
(470, '8af494b923a1b90c5c60b32b2f59979f', 'Users', 'users', 'effkhayyondbeat@gmail.com', '[]', 0, '2019-02-15 13:03:56', '2019-02-12 13:03:56', '2019-02-12 13:03:56'),
(471, 'd825ed77f615eb979f00b5927412a453', 'Users', 'users', 'effkhayyondbeat@gmail.com', '[]', 0, '2019-02-15 13:28:15', '2019-02-12 13:28:15', '2019-02-12 13:28:15'),
(472, 'f31f93d55761e042fcb33e01d72d9b63', 'Users', 'users', 'effkhayyondbeat@gmail.com', '[]', 0, '2019-02-15 13:28:29', '2019-02-12 13:28:29', '2019-02-12 13:28:29'),
(473, 'c7c8c3bd1d3183ac0851bc6c37118bd0', 'Users', 'users', 'effkhayyondbeat@gmail.com', '[]', 0, '2019-02-15 13:34:52', '2019-02-12 13:34:52', '2019-02-12 13:34:52'),
(474, '8fb6298df593b9a9ec193701842a13f8', 'Users', 'users', '455', '{\"email\":\"ahmedbashir710@gmail.com\"}', 1, '2019-02-16 00:15:08', '2019-02-13 00:15:08', '2019-02-13 00:19:48'),
(475, '7170befa06131851893334360facb1b1', 'Users', 'users', '456', '{\"email\":\"hadria@g.gsasearchengineranker.pw\"}', 1, '2019-02-16 05:42:05', '2019-02-13 05:42:05', '2019-02-13 05:46:55'),
(476, '66d6e7325bcc9a3db32893f4d9f1256a', 'Users', 'users', '457', '{\"email\":\"thatunilagagbero@gmail.com\"}', 0, '2019-02-16 12:39:57', '2019-02-13 12:39:57', '2019-02-13 12:39:57'),
(477, 'f5a7e891df3e2975ffeed72429c25636', 'Users', 'users', '458', '{\"email\":\"thatunilagagbero@gmail.com\"}', 1, '2019-02-16 12:45:09', '2019-02-13 12:45:09', '2019-02-13 12:50:03'),
(478, '59f6d0815e33738eb319fd8bc3fd3c61', 'Users', 'users', '459', '{\"email\":\"makindetobi360@yahoo.com\"}', 0, '2019-02-16 15:02:54', '2019-02-13 15:02:54', '2019-02-13 15:02:54'),
(479, 'f039990b4da7230aa8d493dc2d4371e9', 'Users', 'users', '460', '{\"email\":\"makindetobi360@yahoo.com\"}', 0, '2019-02-16 15:04:54', '2019-02-13 15:04:54', '2019-02-13 15:04:54'),
(480, '1de393e2834cce6d8f1084dccde3d397', 'Users', 'users', '461', '{\"email\":\"makindetobi360@yahoo.com\"}', 0, '2019-02-16 15:06:21', '2019-02-13 15:06:21', '2019-02-13 15:06:21'),
(481, 'a7fbc44db8069ad0055363a8b50a79a1', 'Users', 'users', '462', '{\"email\":\"makindetobi360@yahoo.com\"}', 0, '2019-02-16 15:07:18', '2019-02-13 15:07:18', '2019-02-13 15:07:18'),
(482, '9bf9aa06b1ab4d4b06a9edc436f456ee', 'Users', 'users', '463', '{\"email\":\"makindetobi360@yahoo.com\"}', 0, '2019-02-16 15:10:15', '2019-02-13 15:10:15', '2019-02-13 15:10:15'),
(483, '68ed926168185e698314e32bcac38419', 'Users', 'users', '464', '{\"email\":\"makindetobi360@yahoo.com\"}', 1, '2019-02-16 15:23:22', '2019-02-13 15:23:22', '2019-02-13 15:24:18'),
(484, '2e033cca2bbbf6650e39987a048638f1', 'Users', 'users', 'ejitexflow@yahoo.com', '[]', 0, '2019-02-16 20:47:47', '2019-02-13 20:47:47', '2019-02-13 20:47:47'),
(485, 'b4baab308105cbd5198fded9dd3f2309', 'Users', 'users', '465', '{\"email\":\"nance@b.wp-viralclick.com\"}', 1, '2019-02-17 09:57:50', '2019-02-14 09:57:50', '2019-02-14 10:12:35'),
(486, '6779d41b6a9529df11e6a42c4592946a', 'Users', 'users', 'ejitexflow@yahoo.com', '[]', 0, '2019-02-17 14:12:20', '2019-02-14 14:12:20', '2019-02-14 14:12:20'),
(487, '5f55a82c46674d0a76d95d24efc514da', 'Users', 'users', '466', '{\"email\":\"Viinco104@gmail.com\"}', 0, '2019-02-17 23:33:26', '2019-02-14 23:33:26', '2019-02-14 23:33:26'),
(488, '64b8243bb0bee73da5916b955f068b97', 'Users', 'users', '467', '{\"email\":\"abelnkain@gmx.at\"}', 1, '2019-02-18 12:56:23', '2019-02-15 12:56:23', '2019-02-15 12:58:29'),
(489, 'f99eb8be7df3eaf48f09d577f2d3bae7', 'Users', 'users', '468', '{\"email\":\"lilaimy92@yahoo.com\"}', 1, '2019-02-18 18:04:49', '2019-02-15 18:04:49', '2019-02-15 18:25:09'),
(490, 'c2fa31ad5125a155546a5e6ce5e73af7', 'Users', 'users', '469', '{\"email\":\"oparakaycee4all@gmail.com\"}', 1, '2019-02-18 18:42:50', '2019-02-15 18:42:50', '2019-02-15 18:57:57'),
(491, '725359c8ed561f8605039cc01148cc79', 'Users', 'users', '470', '{\"email\":\"225hobstetter@towndewerap23.eu\"}', 0, '2019-02-19 09:29:37', '2019-02-16 09:29:37', '2019-02-16 09:29:37'),
(492, 'c76c96f7b8a7bf567d62f285596921a2', 'Users', 'users', '471', '{\"email\":\"Michaeledubio9@gmail.Com\"}', 0, '2019-02-19 12:46:16', '2019-02-16 12:46:16', '2019-02-16 12:46:16'),
(493, '4f080331a421640511533ec7823acd8f', 'Users', 'users', '472', '{\"email\":\"galina.molyushkova80@mail.ru\"}', 0, '2019-02-19 21:37:16', '2019-02-16 21:37:16', '2019-02-16 21:37:16'),
(494, 'f8fe985822a144b0254c305bafe8e632', 'Users', 'users', '473', '{\"email\":\"Tamilisoyi@gmail.com\"}', 0, '2019-02-20 22:16:09', '2019-02-17 22:16:09', '2019-02-17 22:16:09'),
(495, '6b2687a2e9c08be6aa2af004002a8d9a', 'Users', 'users', '474', '{\"email\":\"joshua.praise33@gmail.com\"}', 1, '2019-02-21 14:32:07', '2019-02-18 14:32:07', '2019-02-18 14:41:12'),
(496, '67e2acb674416dae99ca7c3a15eda955', 'Users', 'users', '475', '{\"email\":\"jsabas2015@gmail.com\"}', 1, '2019-02-22 13:43:49', '2019-02-19 13:43:49', '2019-02-19 19:15:00'),
(497, '52cbb94d382225207e00d12ec79c329f', 'Users', 'users', '476', '{\"email\":\"eduardolaughlin@txt.flu.cc\"}', 0, '2019-02-24 00:53:41', '2019-02-21 00:53:41', '2019-02-21 00:53:41'),
(498, '7b7609cceb898a365a5c3bc7719e4733', 'Users', 'users', '477', '{\"email\":\"jksea@sohbet.pw\"}', 1, '2019-02-24 05:04:58', '2019-02-21 05:04:58', '2019-02-21 05:10:09'),
(499, 'f0fa83801bc8404cae622f02eff743cc', 'Users', 'users', '478', '{\"email\":\"ekaterina.1977.gvw@mail.ru\"}', 0, '2019-02-24 07:14:53', '2019-02-21 07:14:53', '2019-02-21 07:14:53'),
(500, '51fe403103f8db0916833d1963f46816', 'Users', 'users', '479', '{\"email\":\"tamara.1982y@mail.ru\"}', 0, '2019-02-24 07:24:34', '2019-02-21 07:24:34', '2019-02-21 07:24:34'),
(501, 'b867ef3e3e96bcb9efb147bd14e0c867', 'Users', 'users', '480', '{\"email\":\"danikov.1f@mail.ru\"}', 0, '2019-02-24 08:32:23', '2019-02-21 08:32:23', '2019-02-21 08:32:23'),
(502, '4b630effc41a4996bf6956b26005a775', 'Users', 'users', '481', '{\"email\":\"vishal29051995@gmail.com\"}', 0, '2019-02-28 22:39:34', '2019-02-25 22:39:34', '2019-02-25 22:39:34'),
(503, '46a039dc32313688785152091524a022', 'Users', 'users', '482', '{\"email\":\"ejitexflowf@yahoo.com\"}', 0, '2019-02-28 22:41:59', '2019-02-25 22:41:59', '2019-02-25 22:41:59'),
(504, 'd83ac13d21ea1993910d92b0d783a3ed', 'Users', 'users', '483', '{\"email\":\"tamilisoyi@gmail.com\"}', 1, '2019-02-28 23:39:21', '2019-02-25 23:39:21', '2019-02-25 23:41:16'),
(505, 'fbfc49ea9b9d2df541ff4ce6c10268a4', 'Users', 'users', '484', '{\"email\":\"bvillemusicworldwide@gmail.com\"}', 0, '2019-03-01 00:01:43', '2019-02-26 00:01:43', '2019-02-26 00:01:43'),
(507, '8236b480785bddf6bfc465512dab30bf', 'Users', 'users', '486', '{\"email\":\"gnagnejosaphat01@gmail.com\"}', 1, '2019-03-01 11:25:49', '2019-02-26 11:25:49', '2019-02-26 11:26:26'),
(508, '20bc276038f961541376c6da89b93e71', 'Users', 'users', '487', '{\"email\":\"fixer.beatz@gmail.com\"}', 1, '2019-03-01 12:30:55', '2019-02-26 12:30:55', '2019-02-26 12:40:11'),
(509, 'e5fa625925184be3bbbe0059fc3cc9d7', 'Users', 'users', '488', '{\"email\":\"yawsumoah@gmail.com\"}', 0, '2019-03-01 14:48:33', '2019-02-26 14:48:33', '2019-02-26 14:48:33'),
(510, 'f897c98ee2b1e241bc2112f177ba4f44', 'Users', 'users', '489', '{\"email\":\"joshdlamb1@gmail.com\"}', 1, '2019-03-01 15:37:13', '2019-02-26 15:37:13', '2019-02-26 15:39:16'),
(511, 'fcff7f87dccac60650f15d3091e43a3f', 'Users', 'users', '490', '{\"email\":\"bazebeat10@gmail.com\"}', 1, '2019-03-01 16:16:47', '2019-02-26 16:16:47', '2019-02-26 16:17:04'),
(512, 'cc790d0906d550a50cd1dcaafeefdde4', 'Users', 'users', '491', '{\"email\":\"Bussyjazz25@gmail.com\"}', 0, '2019-03-01 18:55:29', '2019-02-26 18:55:29', '2019-02-26 18:55:29'),
(513, 'e2e43e6dda7221fea7f491330498410c', 'Users', 'users', '492', '{\"email\":\"stephkillthebeat@gmail.com\"}', 1, '2019-03-02 06:09:32', '2019-02-27 06:09:32', '2019-02-27 06:10:04'),
(514, '0cbb6835935978e52ff1bee743c51243', 'Users', 'users', '493', '{\"email\":\"couponsplusdeals.com@gmail.com\"}', 0, '2019-03-02 09:13:21', '2019-02-27 09:13:21', '2019-02-27 09:13:21'),
(515, 'dd9393ee934a7d557f7c5c4a271988c3', 'Users', 'users', '494', '{\"email\":\"feliselvis@gmail.com\"}', 1, '2019-03-02 10:17:53', '2019-02-27 10:17:53', '2019-02-27 12:01:50'),
(516, '598de8125120d0f31b4335c7016038d5', 'Users', 'users', '495', '{\"email\":\"enduranceab67@gmail.com\"}', 1, '2019-03-02 11:19:33', '2019-02-27 11:19:33', '2019-02-27 11:20:51'),
(517, 'a3a4ab0226baec4a0c6b48245f7192f6', 'Users', 'users', '496', '{\"email\":\"45479edemann@towndewerap23.eu\"}', 0, '2019-03-02 15:27:34', '2019-02-27 15:27:34', '2019-02-27 15:27:34'),
(518, '428bbe9e77f1996e9d13b7a0096b4349', 'Users', 'users', '497', '{\"email\":\"emeraldsheriff@gmail.com\"}', 1, '2019-03-02 17:48:42', '2019-02-27 17:48:42', '2019-02-27 19:08:27'),
(519, 'd0ce401fda4bd0c6926cc59cffcc4ce2', 'Users', 'users', '498', '{\"email\":\"raymondwillyy@gmail.com\"}', 1, '2019-03-02 18:20:33', '2019-02-27 18:20:33', '2019-02-27 18:24:49'),
(520, 'aae2038dcfe117fb1a26be0007216af3', 'Users', 'users', '499', '{\"email\":\"itonye@yahoo.com\"}', 1, '2019-03-02 18:27:38', '2019-02-27 18:27:38', '2019-02-27 18:31:55'),
(521, '1a069afd60e9b83d2ba7d12fd8057cb0', 'Users', 'users', '500', '{\"email\":\"kwembep@gmail.com\"}', 1, '2019-03-02 19:46:09', '2019-02-27 19:46:09', '2019-02-27 19:57:31'),
(522, 'f89b9823f99173320cf32c9b8ed663f8', 'Users', 'users', '501', '{\"email\":\"officialsweetsmusic@yahoo.com\"}', 0, '2019-03-02 20:07:33', '2019-02-27 20:07:33', '2019-02-27 20:07:33'),
(523, 'afb97f157673ff45b8dc255d57a739b5', 'Users', 'users', '502', '{\"email\":\"6684degori@gaterremeds1975.eu\"}', 0, '2019-03-02 20:56:33', '2019-02-27 20:56:33', '2019-02-27 20:56:33'),
(524, 'e788e56d7f6f355bbb5a04695c12a527', 'Users', 'users', '503', '{\"email\":\"soundzofasher@gmail.com\"}', 1, '2019-03-02 21:16:17', '2019-02-27 21:16:17', '2019-02-27 21:16:47'),
(525, '0260ca39d1dacc2e9a0454d53caa85df', 'Users', 'users', '504', '{\"email\":\"beatzmotion63@gmail.com\"}', 0, '2019-03-02 21:30:51', '2019-02-27 21:30:51', '2019-02-27 21:30:51'),
(526, 'e36e00c4347f57e15854eed4ef0aebea', 'Users', 'users', '505', '{\"email\":\"truchords@gmail.com\"}', 1, '2019-03-02 21:30:56', '2019-02-27 21:30:56', '2019-02-27 21:31:26'),
(527, 'ca64538666eafbf2fbfdb2ecf6202d72', 'Users', 'users', '506', '{\"email\":\"olamiendowed@gmail.com\"}', 0, '2019-03-02 21:38:52', '2019-02-27 21:38:52', '2019-02-27 21:38:52'),
(528, 'c1fd032d3810fd5ab57cc9c433bb6410', 'Users', 'users', '507', '{\"email\":\"piannilip@yahoo.fr\"}', 1, '2019-03-03 03:54:18', '2019-02-28 03:54:18', '2019-02-28 03:59:12'),
(529, 'fb79c5a822da7b953a2323b1c185065a', 'Users', 'users', '508', '{\"email\":\"vera.7ix2@mail.ru\"}', 1, '2019-03-03 06:33:48', '2019-02-28 06:33:48', '2019-02-28 06:47:18'),
(530, '652861bf8397395e9c2ad09388855c92', 'Users', 'users', '509', '{\"email\":\"youngwizzywisdom@gmail.com\"}', 1, '2019-03-03 06:34:06', '2019-02-28 06:34:06', '2019-02-28 06:35:00'),
(531, '7388ecaf2919291637feeef130d77a2d', 'Users', 'users', '510', '{\"email\":\"princeajallahquay4455@gmail.com\"}', 1, '2019-03-03 11:07:31', '2019-02-28 11:07:31', '2019-02-28 11:08:09'),
(532, 'cffc745faf305a74a07d344fb0886bbf', 'Users', 'users', '511', '{\"email\":\"slidebeatz4stars@gmail.com\"}', 0, '2019-03-03 13:37:42', '2019-02-28 13:37:42', '2019-02-28 13:37:42'),
(533, 'ed757c91cc4fd9c32c5f6d8486d31b76', 'Users', 'users', '512', '{\"email\":\"junnyedson24@gmail.com\"}', 0, '2019-03-03 15:42:09', '2019-02-28 15:42:09', '2019-02-28 15:42:09'),
(534, 'c37088beabe09c5f9b645a21b20f5835', 'Users', 'users', '513', '{\"email\":\"teepsoulent@gmail.com\"}', 1, '2019-03-03 16:00:47', '2019-02-28 16:00:47', '2019-02-28 16:04:48'),
(535, '4e59be941ccb158ef1f78b787605cf23', 'Users', 'users', '514', '{\"email\":\"junnyedson24@gmail.com\"}', 1, '2019-03-03 16:01:36', '2019-02-28 16:01:36', '2019-02-28 16:02:40'),
(536, '65908b0981b4c0f3b2ecc5d773f12808', 'Users', 'users', '515', '{\"email\":\"Shadycruz85@gmail.com\"}', 0, '2019-03-03 22:17:13', '2019-02-28 22:17:13', '2019-02-28 22:17:13'),
(537, 'f65e1f4d6124dc4377ad9b48d1bd4f0e', 'Users', 'users', '516', '{\"email\":\"68845percontino@enercranyr.eu\"}', 1, '2019-03-03 22:48:57', '2019-02-28 22:48:57', '2019-02-28 23:04:28'),
(538, '0f5f315003072e05a60688d602ced48a', 'Users', 'users', '517', '{\"email\":\"barry2mbagha@gmail.com\"}', 0, '2019-03-03 22:51:33', '2019-02-28 22:51:33', '2019-02-28 22:51:33'),
(539, '09d7d56511d04eda492b682520f6e3a8', 'Users', 'users', '518', '{\"email\":\"gary@shangwaiwang.com\"}', 1, '2019-03-03 23:43:42', '2019-02-28 23:43:42', '2019-02-28 23:56:18'),
(540, '70efd867115964f8d5e14fbee39f56bf', 'Users', 'users', '519', '{\"email\":\"peedeveestudios@yahoo.com\"}', 1, '2019-03-04 01:10:36', '2019-03-01 01:10:36', '2019-03-01 01:24:34'),
(541, '196415b6f420ea69f41fab56e1c0dc6d', 'Users', 'users', '520', '{\"email\":\"61807roscorla@tarcuttgige.eu\"}', 1, '2019-03-04 02:03:16', '2019-03-01 02:03:16', '2019-03-01 02:05:31'),
(542, 'e50c58953f015fa0c6340a6a2ac0c7c8', 'Users', 'users', '521', '{\"email\":\"henryroberts331@gmail.com\"}', 1, '2019-03-04 03:17:17', '2019-03-01 03:17:17', '2019-03-01 03:17:45'),
(543, '67c5cf5de7186de5a155618841c4ea3b', 'Users', 'users', '522', '{\"email\":\"itimejila198@gmail.com\"}', 0, '2019-03-04 07:49:34', '2019-03-01 07:49:34', '2019-03-01 07:49:34'),
(544, '91055b6ce71f435cdf3ac8cbadaaa5cb', 'Users', 'users', '523', '{\"email\":\"ibejohn501@gmail.com\"}', 1, '2019-03-04 07:53:45', '2019-03-01 07:53:45', '2019-03-01 07:56:22'),
(545, '83edb484f760f09ccef6580f1d82fe64', 'Users', 'users', '524', '{\"email\":\"Jfistudiostpb@gmail.com\"}', 1, '2019-03-04 09:01:47', '2019-03-01 09:01:47', '2019-03-01 09:05:52'),
(546, '1e199886985756d59e198199c84ef6f6', 'Users', 'users', '525', '{\"email\":\"Jfistudiostpb@gmail.com\"}', 1, '2019-03-04 09:05:03', '2019-03-01 09:05:03', '2019-03-01 09:06:28'),
(547, '490f78ef269561a0029fba2d5167998d', 'Users', 'users', '526', '{\"email\":\"man@g.gsasearchengineranker.pw\"}', 1, '2019-03-04 11:57:58', '2019-03-01 11:57:58', '2019-03-01 12:06:41'),
(548, '4fb2f872cdecea7258a95f9ff3c0ebad', 'Users', 'users', '527', '{\"email\":\"Anuwaaudu3@gmail.com\"}', 1, '2019-03-04 14:06:14', '2019-03-01 14:06:14', '2019-03-01 14:08:16'),
(549, '6729694010b009e4985671656df8112b', 'Users', 'users', '528', '{\"email\":\"nonsosam75@gmail.com\"}', 1, '2019-03-04 18:52:26', '2019-03-01 18:52:26', '2019-03-02 17:04:51'),
(550, '6c408c251911449ad95446f23d4652cd', 'Users', 'users', '529', '{\"email\":\"nicholaussomi24@gmail.com\"}', 0, '2019-03-04 19:38:19', '2019-03-01 19:38:19', '2019-03-01 19:38:19'),
(551, 'b73c7b1c0c717b02709596b769e52ccb', 'Users', 'users', '530', '{\"email\":\"faymourz@gmail.com\"}', 0, '2019-03-04 21:38:56', '2019-03-01 21:38:56', '2019-03-01 21:38:56'),
(552, '2e3541a0c5eed4873aa78ac20f432275', 'Users', 'users', '531', '{\"email\":\"Moonboyrexkid@gmail.com\"}', 0, '2019-03-05 00:39:16', '2019-03-02 00:39:16', '2019-03-02 00:39:16'),
(553, '6ba987475ea648f8facaf33d03f8881a', 'Users', 'users', '532', '{\"email\":\"ksjbooking@gmail.com\"}', 1, '2019-03-05 01:54:18', '2019-03-02 01:54:18', '2019-03-02 01:57:06'),
(554, '41c1913483cda55777a9bf2da4b9aded', 'Users', 'users', '533', '{\"email\":\"kemahdinhovic13@gmail.com\"}', 1, '2019-03-05 08:26:15', '2019-03-02 08:26:15', '2019-03-02 08:27:50'),
(555, 'a89d12f7888e0d04426da74735ae5a35', 'Users', 'users', '534', '{\"email\":\"elbvndit95@email.com\"}', 0, '2019-03-05 10:11:57', '2019-03-02 10:11:57', '2019-03-02 10:11:57'),
(556, '9c3cce1cce9938fdb1900f9907cae5c6', 'Users', 'users', '535', '{\"email\":\"chukwudimadu26@gmail.com\"}', 1, '2019-03-05 12:39:11', '2019-03-02 12:39:11', '2019-03-02 12:39:53'),
(557, '3864690d0feb240816be65045ccb0085', 'Users', 'users', '536', '{\"email\":\"sandy@xxoo321.com\"}', 1, '2019-03-05 12:42:53', '2019-03-02 12:42:53', '2019-03-02 12:54:23'),
(558, '5ca2413e0c860914b5261f830c6a6e01', 'Users', 'users', '537', '{\"email\":\"pissenpro28@gmail.com\"}', 0, '2019-03-05 12:43:17', '2019-03-02 12:43:17', '2019-03-02 12:43:17'),
(559, 'aee61640be1d5752af7dca9390f47c34', 'Users', 'users', '538', '{\"email\":\"pissenpro28@gmail.com\"}', 0, '2019-03-05 12:44:44', '2019-03-02 12:44:44', '2019-03-02 12:44:44'),
(560, 'dcced5dfd15f9ec81eb55290e9390a4e', 'Users', 'users', '539', '{\"email\":\"junioush466@gmail.com\"}', 0, '2019-03-05 19:08:44', '2019-03-02 19:08:44', '2019-03-02 19:08:44'),
(561, '2eb6875c49d67fea564d3d5be458075e', 'Users', 'users', '540', '{\"email\":\"nikita.smith@xxoo321.com\"}', 0, '2019-03-05 22:44:55', '2019-03-02 22:44:55', '2019-03-02 22:44:55'),
(562, '65c71ebf2b7ebdfbb01d43879cfbbfb6', 'Users', 'users', '541', '{\"email\":\"slavik.butakhine6@mail.ru\"}', 1, '2019-03-06 00:43:57', '2019-03-03 00:43:57', '2019-03-03 00:52:52'),
(563, '9961f313be5631a8318a066c27aa0fc4', 'Users', 'users', '542', '{\"email\":\"fataibada@gmail.com\"}', 1, '2019-03-06 03:04:15', '2019-03-03 03:04:15', '2019-03-03 03:05:05'),
(564, '0baf1dbe3b6631555e970a1846fe403c', 'Users', 'users', '543', '{\"email\":\"talktozionbeatz@gmail.com\"}', 1, '2019-03-06 09:36:09', '2019-03-03 09:36:09', '2019-03-03 09:36:55');
INSERT INTO `tokenize_tokens` (`id`, `token`, `foreign_alias`, `foreign_table`, `foreign_key`, `foreign_data`, `status`, `expired`, `created`, `modified`) VALUES
(565, '915a91fd743c8353fc9b27cb672efa9c', 'Users', 'users', '544', '{\"email\":\"alokolodousman6@gmail.com\"}', 1, '2019-03-06 13:36:07', '2019-03-03 13:36:07', '2019-03-03 13:38:02'),
(566, '566ba46223d2f1d85b7c1eb496b6af4f', 'Users', 'users', '545', '{\"email\":\"Stermanoneproject@Gmail.com\"}', 1, '2019-03-06 17:36:42', '2019-03-03 17:36:42', '2019-03-03 17:46:50'),
(567, 'f35956a9decc3b3b7a085ba09e2a9d0b', 'Users', 'users', '546', '{\"email\":\"djmirrormusic@gmail.com\"}', 0, '2019-03-07 00:04:34', '2019-03-04 00:04:34', '2019-03-04 00:04:34'),
(568, 'c3e9bd9d5f452730bd91d039a91459f2', 'Users', 'users', '547', '{\"email\":\"victor.michael510@gmail.com\"}', 1, '2019-03-07 08:42:25', '2019-03-04 08:42:25', '2019-03-04 08:57:56'),
(569, 'e21f14b958b5e52393ee1c1f8f6d5023', 'Users', 'users', '548', '{\"email\":\"david.1976h1v@mail.ru\"}', 1, '2019-03-07 09:09:54', '2019-03-04 09:09:54', '2019-03-04 09:18:37'),
(570, 'cb89803aefe581692bcd44fe9ec1eac8', 'Users', 'users', '549', '{\"email\":\"khakimulina.20.2jz@mail.ru\"}', 1, '2019-03-07 09:27:00', '2019-03-04 09:27:00', '2019-03-04 09:31:54'),
(571, 'fa02303b447166633feb6debe5e445c2', 'Users', 'users', '550', '{\"email\":\"drobysheva.18.qv6@mail.ru\"}', 1, '2019-03-07 09:33:36', '2019-03-04 09:33:36', '2019-03-04 09:43:08'),
(572, '01b6ea3b4fde16bbb1151e4874413f3e', 'Users', 'users', '551', '{\"email\":\"ritala.21m04@mail.ru\"}', 1, '2019-03-07 09:38:51', '2019-03-04 09:38:51', '2019-03-04 09:50:17'),
(573, 'd5dbf46cd6dd8320804a3389f5a9352e', 'Users', 'users', '552', '{\"email\":\"wegbeserge7@gmail.com\"}', 1, '2019-03-07 10:49:18', '2019-03-04 10:49:18', '2019-03-04 13:10:12'),
(574, '29e6210de4284c2827a460f1fa697253', 'Users', 'users', '553', '{\"email\":\"switchkakashi@gmail.com\"}', 1, '2019-03-07 12:17:40', '2019-03-04 12:17:40', '2019-03-04 12:21:10'),
(575, 'a5e03b837565219311af8accf63ae2d4', 'Users', 'users', '554', '{\"email\":\"lyubomir.19906oa@mail.ru\"}', 1, '2019-03-07 12:39:52', '2019-03-04 12:39:52', '2019-03-04 12:47:42'),
(576, 'ac3d2a221bb67fc6440e863eb407af99', 'Users', 'users', '555', '{\"email\":\"miguelita@b.wp-viralclick.com\"}', 1, '2019-03-07 15:04:05', '2019-03-04 15:04:05', '2019-03-04 15:12:06'),
(577, '0266b5dfb052098c1f87f739f91ad522', 'Users', 'users', '556', '{\"email\":\"lettwanerif4@yahoo.com\"}', 0, '2019-03-07 16:22:10', '2019-03-04 16:22:10', '2019-03-04 16:22:10'),
(578, '7116c36d2fd2a402f7bab549c563e9fd', 'Users', 'users', '557', '{\"email\":\"israelmdolo@gmail.com\"}', 0, '2019-03-07 19:47:40', '2019-03-04 19:47:40', '2019-03-04 19:47:40'),
(579, '1f18868f9294cac757ebc1570097a982', 'Users', 'users', '558', '{\"email\":\"enocgodwin2@gmail.com\"}', 1, '2019-03-07 21:22:58', '2019-03-04 21:22:58', '2019-03-04 21:24:25'),
(580, 'dc4a37fc3f54d23106114088b29c56b5', 'Users', 'users', '559', '{\"email\":\"enocgodwin2@gmail.com\"}', 0, '2019-03-07 21:23:54', '2019-03-04 21:23:54', '2019-03-04 21:23:54'),
(581, '9e35a42c7b4f329297081f8cdead26d0', 'Users', 'users', '560', '{\"email\":\"zakariafall90@hotmail.fr\"}', 0, '2019-03-07 23:29:33', '2019-03-04 23:29:33', '2019-03-04 23:29:33'),
(582, 'c76b42d4ce7e0793dc103201d27337a1', 'Users', 'users', '561', '{\"email\":\"tayoeva6@gmail.com\"}', 1, '2019-03-07 23:52:41', '2019-03-04 23:52:41', '2019-03-04 23:53:21'),
(583, 'dc15aa3631d2b289457dc58371d9280f', 'Users', 'users', '562', '{\"email\":\"Johnkollie10@gmail.com\"}', 0, '2019-03-07 23:57:19', '2019-03-04 23:57:19', '2019-03-04 23:57:19'),
(584, 'bcd1d2fba232cda7c276645cf851a0b5', 'Users', 'users', '563', '{\"email\":\"lyksnexus4@gmail.com\"}', 1, '2019-03-08 00:10:44', '2019-03-05 00:10:44', '2019-03-05 00:18:01'),
(585, 'd2d15d8274175e7496c5fbab4fbae8f3', 'Users', 'users', '564', '{\"email\":\"lyksnexus4@gmail.com\"}', 0, '2019-03-08 00:17:25', '2019-03-05 00:17:25', '2019-03-05 00:17:25'),
(586, 'ad1c9d53a6ab499561559b7ea0399527', 'Users', 'users', '565', '{\"email\":\"geugeujr@gmail.com\"}', 1, '2019-03-08 06:44:33', '2019-03-05 06:44:33', '2019-03-05 06:47:31'),
(587, '53a8a22ac3daa30cbdebe44b32449d2c', 'Users', 'users', '566', '{\"email\":\"geugeujr@gmail.com\"}', 0, '2019-03-08 06:45:05', '2019-03-05 06:45:05', '2019-03-05 06:45:05'),
(588, '0da229373135c0c5718a5550fd120936', 'Users', 'users', '567', '{\"email\":\"amosmegabeats@gmail.com\"}', 1, '2019-03-08 09:11:27', '2019-03-05 09:11:27', '2019-03-05 09:12:41'),
(589, '26fc0376add3b68ed36681cb481506c4', 'Users', 'users', '568', '{\"email\":\"beatzfreshii4@gmail.com\"}', 1, '2019-03-08 11:58:13', '2019-03-05 11:58:13', '2019-03-05 11:59:14'),
(590, 'cde127358147b6c5878bf92e523e6cac', 'Users', 'users', '569', '{\"email\":\"Chidiojay6@gmail.com\"}', 1, '2019-03-08 12:24:38', '2019-03-05 12:24:38', '2019-03-05 12:25:51'),
(591, '4756edf9c2dca31092f98fd48aa0b3ff', 'Users', 'users', '570', '{\"email\":\"RandyCade44@dl.quirkymeme.com\"}', 0, '2019-03-08 12:27:49', '2019-03-05 12:27:49', '2019-03-05 12:27:49'),
(592, '5e0d606c1f8c57271d321cd3494531b3', 'Users', 'users', '571', '{\"email\":\"patric10timesrich@gmail.com\"}', 1, '2019-03-08 13:01:12', '2019-03-05 13:01:12', '2019-03-05 13:03:40'),
(593, '6d31c490890d0c5190acc5d1e70e4a2d', 'Users', 'users', '572', '{\"email\":\"patric10timesrich@gmail.com\"}', 0, '2019-03-08 13:01:49', '2019-03-05 13:01:49', '2019-03-05 13:01:49'),
(594, '6b701e70c1a43b525087d9a02f996506', 'Users', 'users', '573', '{\"email\":\"mikewill5473@gmail.com\"}', 1, '2019-03-08 13:58:36', '2019-03-05 13:58:36', '2019-03-05 14:01:43'),
(595, '78bea9f618c3c894e8f161a9532b9e66', 'Users', 'users', '574', '{\"email\":\"Jayrhymodhg@gmail.com\"}', 1, '2019-03-08 14:51:31', '2019-03-05 14:51:31', '2019-03-05 14:52:36'),
(596, '3ab80506cab3049f066e5c42f3883ffc', 'Users', 'users', '575', '{\"email\":\"aik6s2@gmail.com\"}', 1, '2019-03-08 16:02:40', '2019-03-05 16:02:40', '2019-03-05 16:03:38'),
(597, '387ce8ae01cce37f0c74f49d3658f990', 'Users', 'users', '576', '{\"email\":\"me_myhood@yahoo.com\"}', 0, '2019-03-08 17:46:17', '2019-03-05 17:46:17', '2019-03-05 17:46:17'),
(598, '300c0be304b05885900d1aaf6eee04fe', 'Users', 'users', '577', '{\"email\":\"kmuendo97@gmail.com\"}', 1, '2019-03-08 21:48:25', '2019-03-05 21:48:25', '2019-03-05 21:49:13'),
(599, 'bfd9b29d0faa0dad3f6c8f59947c3038', 'Users', 'users', '578', '{\"email\":\"metonhelomagou@gmail.com\"}', 1, '2019-03-09 10:34:25', '2019-03-06 10:34:25', '2019-03-06 10:35:26'),
(600, '4efa34bf780dfdb843124690aa4706cc', 'Users', 'users', '579', '{\"email\":\"bforbewaji@hotmail.com\"}', 1, '2019-03-09 15:53:51', '2019-03-06 15:53:51', '2019-03-06 16:00:00'),
(601, '87c377d4ce93656eb4d44df45d6a48b0', 'Users', 'users', '580', '{\"email\":\"daudiwillium117@gmail.com\"}', 1, '2019-03-09 20:52:21', '2019-03-06 20:52:21', '2019-03-06 20:53:11'),
(602, '13d2d72c60760af5d31bdddba243517c', 'Users', 'users', '581', '{\"email\":\"lauretta@g.gsasearchengineranker.pw\"}', 1, '2019-03-10 00:36:00', '2019-03-07 00:36:00', '2019-03-07 00:47:17'),
(603, '44d9e2aab60069ebd8d88530723b2407', 'Users', 'users', '582', '{\"email\":\"Seakayc@gmail.com\"}', 1, '2019-03-10 02:03:39', '2019-03-07 02:03:39', '2019-03-07 02:04:04'),
(604, '19e30d5018b9b8eda8bd5d5aefc110cc', 'Users', 'users', '583', '{\"email\":\"kut.vladau44@mail.ru\"}', 1, '2019-03-10 02:17:05', '2019-03-07 02:17:05', '2019-03-07 02:17:16'),
(605, 'f4ac555c3883274bc0f4d2efe2f41989', 'Users', 'users', '584', '{\"email\":\"fbiende1@gmail.com\"}', 1, '2019-03-10 12:33:38', '2019-03-07 12:33:38', '2019-03-07 12:34:17'),
(606, 'd77cc1ee6ab06b029c49b0222a7828f7', 'Users', 'users', '585', '{\"email\":\"hasselmedia@gmail.com\"}', 1, '2019-03-10 17:27:35', '2019-03-07 17:27:35', '2019-03-07 17:28:29'),
(607, '3fe33e598f8654ea769529d102e6a22d', 'Users', 'users', '586', '{\"email\":\"Wallace_Vanguilder18@youremail.site\"}', 0, '2019-03-10 21:33:06', '2019-03-07 21:33:06', '2019-03-07 21:33:06'),
(608, 'df5541bcd949ea1103f986766e3060d7', 'Users', 'users', '587', '{\"email\":\"Ferdinand.Lemann20@youremail.site\"}', 0, '2019-03-10 22:16:01', '2019-03-07 22:16:01', '2019-03-07 22:16:01'),
(609, '4c3f592a630ffa9a981f0a67ab201af8', 'Users', 'users', '588', '{\"email\":\"ampirevianney69@gmail.com\"}', 1, '2019-03-10 22:25:06', '2019-03-07 22:25:06', '2019-03-07 22:25:52'),
(610, '630bc1b99e63e1b18f3998b4e34ff1ab', 'Users', 'users', '589', '{\"email\":\"Kristi.Cottrell59@youremail.site\"}', 0, '2019-03-10 22:26:14', '2019-03-07 22:26:14', '2019-03-07 22:26:14'),
(611, 'fe2c42ae8bc1d50833837011237d8568', 'Users', 'users', '590', '{\"email\":\"Sally.Fairfield@youremail.site\"}', 0, '2019-03-10 23:06:06', '2019-03-07 23:06:06', '2019-03-07 23:06:06'),
(612, '8dafb472dd1c3fb348c6f87dd72c27ca', 'Users', 'users', '591', '{\"email\":\"Marco.Wilmot29@youremail.site\"}', 0, '2019-03-10 23:48:12', '2019-03-07 23:48:12', '2019-03-07 23:48:12'),
(613, '3a1ef18351cffba3fadca043ca4a2683', 'Users', 'users', '592', '{\"email\":\"ebeatsofficial@gmail.com\"}', 0, '2019-03-11 02:46:20', '2019-03-08 02:46:20', '2019-03-08 02:46:20'),
(614, 'de0d8bd8f69b5cffb9319a51308b202d', 'Users', 'users', '593', '{\"email\":\"mrmadeit1@gmail.com\"}', 1, '2019-03-11 11:06:40', '2019-03-08 11:06:40', '2019-03-08 11:08:26'),
(615, 'cdc1c15aca383098423a7aba82042af9', 'Users', 'users', '594', '{\"email\":\"ashongj29@gmail.com\"}', 1, '2019-03-11 13:52:14', '2019-03-08 13:52:14', '2019-03-08 13:53:21'),
(616, '90318d686cde7434f576daa9b6244e9d', 'Users', 'users', '595', '{\"email\":\"nhatty.man766@gmail.com\"}', 0, '2019-03-11 14:10:14', '2019-03-08 14:10:14', '2019-03-08 14:10:14'),
(617, 'a13cff84308ff7066efd2c503cf4625a', 'Users', 'users', '596', '{\"email\":\"nhatty.man766@gmail.com\"}', 0, '2019-03-11 14:10:54', '2019-03-08 14:10:54', '2019-03-08 14:10:54'),
(618, 'c2c3a04be7af3087df20de003f4dcf19', 'Users', 'users', '597', '{\"email\":\"nhatty.man766@gmail.com\"}', 0, '2019-03-11 14:11:51', '2019-03-08 14:11:51', '2019-03-08 14:11:51'),
(619, 'a3eb5c28ed00480593a5077822f8cf63', 'Users', 'users', '598', '{\"email\":\"mballaloic445@gmail.com\"}', 1, '2019-03-11 15:09:13', '2019-03-08 15:09:13', '2019-03-08 15:09:59'),
(620, '37627abee54477847fcad6d9751049c0', 'Users', 'users', '599', '{\"email\":\"lyfstylbeat@gmail.com\"}', 1, '2019-03-11 17:10:43', '2019-03-08 17:10:43', '2019-03-08 17:11:09'),
(621, '80e62975412f3f4d7025e9c77cbcae55', 'Users', 'users', '600', '{\"email\":\"datharvester707@gmx.com\"}', 1, '2019-03-11 17:21:41', '2019-03-08 17:21:41', '2019-03-08 17:29:54'),
(622, 'fa0bb57beb75127089512ca7b557cf1f', 'Users', 'users', '601', '{\"email\":\"surestebeyin@gmail.com\"}', 1, '2019-03-12 01:25:29', '2019-03-09 01:25:29', '2019-03-09 01:26:06'),
(623, '3df40194fa4fa38c892dcb7de9026917', 'Users', 'users', '602', '{\"email\":\"Jeanett.Sifford@gmail.com\"}', 0, '2019-03-12 04:12:55', '2019-03-09 04:12:55', '2019-03-09 04:12:55'),
(624, '7a3d60adeb1bbe02ad752100396c4b98', 'Users', 'users', '603', '{\"email\":\"rendab653@gmail.com\"}', 1, '2019-03-12 07:16:35', '2019-03-09 07:16:35', '2019-03-09 07:17:45'),
(625, '1e7fa0ecb6beb77ccea6b05990838a84', 'Users', 'users', '604', '{\"email\":\"idcleffmerit@gmail.com\"}', 1, '2019-03-12 07:23:36', '2019-03-09 07:23:36', '2019-03-09 07:26:14'),
(626, '73307fd0b3b2372b30bcfd5d8e88a4bd', 'Users', 'users', '605', '{\"email\":\"renaudabossolo@gmail.com\"}', 0, '2019-03-12 14:25:40', '2019-03-09 14:25:40', '2019-03-09 14:25:40'),
(627, '1532310e07e8e8ebe73252c7e686f534', 'Users', 'users', '606', '{\"email\":\"teazonthetrack@gmail.com\"}', 1, '2019-03-12 15:01:27', '2019-03-09 15:01:27', '2019-03-09 15:03:32'),
(628, '40656d73e71fb355b8b093ce852f8a8c', 'Users', 'users', '607', '{\"email\":\"onyekaonwujoshua@gmail.com\"}', 1, '2019-03-12 21:56:24', '2019-03-09 21:56:24', '2019-03-09 21:57:31'),
(629, '94bac9c0c85c5af5df2f6568ee8c86b1', 'Users', 'users', '608', '{\"email\":\"onyekaonwujoshua@gmail.com\"}', 0, '2019-03-12 21:57:00', '2019-03-09 21:57:00', '2019-03-09 21:57:00'),
(630, '263b4d62d35a4e57756d312b55fcc911', 'Users', 'users', '609', '{\"email\":\"rmpc18.ng@gmail.com\"}', 1, '2019-03-13 01:44:52', '2019-03-10 01:44:52', '2019-03-10 01:45:57'),
(631, '0c35b734e4fba1abc03b6896fed76111', 'Users', 'users', '610', '{\"email\":\"kisapi360@gmail.com\"}', 0, '2019-03-13 08:18:39', '2019-03-10 08:18:39', '2019-03-10 08:18:39'),
(632, '43271713f04ed421a2337c8d0ac0d736', 'Users', 'users', '611', '{\"email\":\"bettykhatibu@gmail.com\"}', 1, '2019-03-13 23:06:10', '2019-03-10 23:06:10', '2019-03-10 23:07:05'),
(633, 'f164691536880dbb7a99288d846d8d41', 'Users', 'users', '612', '{\"email\":\"ndzieguy11@gmail.com\"}', 1, '2019-03-14 13:04:42', '2019-03-11 13:04:42', '2019-03-11 20:27:55'),
(634, '5b4d45eb39d799002633c306b5114dda', 'Users', 'users', '613', '{\"email\":\"rusheedomarion@gmail.com\"}', 1, '2019-03-14 14:04:10', '2019-03-11 14:04:10', '2019-03-11 14:05:05'),
(635, 'f5f287b30ce1becdec0c4909e4febad7', 'Users', 'users', '614', '{\"email\":\"sahrsnd@gmail.com\"}', 1, '2019-03-15 04:06:07', '2019-03-12 04:06:07', '2019-03-12 04:07:45'),
(636, '1f74a8db8792e828a5e1ea1c1062adfd', 'Users', 'users', '615', '{\"email\":\"david@a.gsaverifiedlist.download\"}', 1, '2019-03-15 15:44:51', '2019-03-12 15:44:51', '2019-03-12 15:57:57'),
(637, '05012ee32c34593fa76e0decd07f96ba', 'Users', 'users', '616', '{\"email\":\"leeminaj.ql@gmail.com\"}', 1, '2019-03-15 17:19:47', '2019-03-12 17:19:47', '2019-03-12 17:20:45'),
(638, '17b24d3551630a310abe4450c4be36bb', 'Users', 'users', '617', '{\"email\":\"69139applebee@kukowski.eu\"}', 1, '2019-03-16 10:03:54', '2019-03-13 10:03:54', '2019-03-13 11:42:33'),
(639, '424002d1c61fc1d49ec41871f60c386c', 'Users', 'users', '618', '{\"email\":\"cctest@hgcitations.com\"}', 1, '2019-03-16 15:29:07', '2019-03-13 15:29:07', '2019-03-13 15:36:10'),
(640, '5c749b1dad9af4b2fd242ff4a674b14e', 'Users', 'users', '619', '{\"email\":\"MichaelOgbekhilu@gmail.com\"}', 1, '2019-03-17 07:00:58', '2019-03-14 07:00:58', '2019-03-14 07:04:40'),
(641, 'b962597fe575b21d4ea6e3b7f2bbd7d3', 'Users', 'users', '620', '{\"email\":\"mngomezulupm@gmail.com\"}', 1, '2019-03-17 22:00:14', '2019-03-14 22:00:14', '2019-03-14 22:01:05'),
(642, '1292962ecc6dde318ab7269f75542d4f', 'Users', 'users', '621', '{\"email\":\"zhofyarnfk8a@mail.ru\"}', 0, '2019-03-18 22:26:48', '2019-03-15 22:26:48', '2019-03-15 22:26:48'),
(643, 'a4f074ded37f6a94a1c432b0f5a2c960', 'Users', 'users', '622', '{\"email\":\"ramona@g.gsasearchengineranker.pw\"}', 1, '2019-03-19 12:47:40', '2019-03-16 12:47:40', '2019-03-16 12:51:15'),
(644, 'f53736cbcf44f3595ea6ae42dd5039e1', 'Users', 'users', '623', '{\"email\":\"y43werdtf@getchonebook.website\"}', 0, '2019-03-19 22:14:53', '2019-03-16 22:14:53', '2019-03-16 22:14:53'),
(645, '892594115675d58c1a6f3f6c7b27dbbb', 'Users', 'users', '624', '{\"email\":\"me_myhood@yahoo.com\"}', 1, '2019-03-20 15:38:14', '2019-03-17 15:38:14', '2019-03-17 15:39:08'),
(646, '91dae8f521f651143acce6cc88914e25', 'Users', 'users', '625', '{\"email\":\"seanjed82@gmail.com\"}', 1, '2019-03-20 20:48:55', '2019-03-17 20:48:55', '2019-03-17 20:49:26'),
(647, '2a2e505ccf4ea541d5ba95004eafe23f', 'Users', 'users', '626', '{\"email\":\"cksiara@getchonebook.website\"}', 0, '2019-03-21 04:45:22', '2019-03-18 04:45:22', '2019-03-18 04:45:22'),
(648, 'f95e0761696f07307830e3b48470831f', 'Users', 'users', '627', '{\"email\":\"29980zacharewicz@tradaswacbo.eu\"}', 0, '2019-03-21 07:34:13', '2019-03-18 07:34:13', '2019-03-18 07:34:13'),
(649, '6cabfb9a90ae8e244752167dea6ab147', 'Users', 'users', '628', '{\"email\":\"donfingers@gmail.com\"}', 1, '2019-03-22 08:33:36', '2019-03-19 08:33:36', '2019-03-19 08:34:52'),
(650, '0bf57316b0ad47acd3ee1d990d58d1e8', 'Users', 'users', '629', '{\"email\":\"wiseronbeatz@gmail.com\"}', 1, '2019-03-22 08:41:52', '2019-03-19 08:41:52', '2019-03-19 08:43:09'),
(651, '8d8619c38490d3b403a25d753dd4bfe9', 'Users', 'users', '630', '{\"email\":\"Thalialldd7338@watpho.online\"}', 0, '2019-03-22 21:43:48', '2019-03-19 21:43:48', '2019-03-19 21:43:48'),
(652, '4c044b6f22c88c6206059ae8d4c48229', 'Users', 'users', '631', '{\"email\":\"djvickin99@gmail.com\"}', 1, '2019-03-23 10:09:49', '2019-03-20 10:09:49', '2019-03-20 10:13:28'),
(653, '34ef92dce787d3f09d5899c691f0b383', 'Users', 'users', '632', '{\"email\":\"catrina@a.gsaverifiedlist.download\"}', 1, '2019-03-23 13:04:39', '2019-03-20 13:04:39', '2019-03-20 13:15:11'),
(654, '38e403fae2dda42d187499aa9c0102b2', 'Users', 'users', '633', '{\"email\":\"simbaztheking@gmail.com\"}', 1, '2019-03-23 17:15:45', '2019-03-20 17:15:45', '2019-03-20 17:16:32'),
(655, '49ed2eedc06f009c4f4f1e7a534fe761', 'Users', 'users', '88', '{\"email\":\"edevbiedavid0@gmail.com\"}', 1, '2019-03-23 19:06:24', '2019-03-20 19:06:24', '2019-03-20 19:08:25'),
(656, 'f022b4133649a1a9e8d67856aa652b03', 'Users', 'users', '88', '{\"email\":\"edevbiedavid0@gmail.com\"}', 0, '2019-03-23 19:06:51', '2019-03-20 19:06:51', '2019-03-20 19:06:51'),
(657, '4fce96d0a924e420e1d65c6792f25067', 'Users', 'users', '88', '{\"email\":\"edevbiedavid0@gmail.com\"}', 0, '2019-03-23 19:07:01', '2019-03-20 19:07:01', '2019-03-20 19:07:01'),
(658, 'f77f08ad34d4c56a6b1b11cefb3b1d84', 'Users', 'users', '634', '{\"email\":\"62833nieves@gaterremeds1975.eu\"}', 0, '2019-03-24 01:17:49', '2019-03-21 01:17:49', '2019-03-21 01:17:49'),
(659, '9c4cd7ca4da45e712699338b953d4e7a', 'Users', 'users', '635', '{\"email\":\"manufique97@outlook.com\"}', 0, '2019-03-24 01:38:42', '2019-03-21 01:38:42', '2019-03-21 01:38:42'),
(660, 'e652f8c672bea510315b961532a82673', 'Users', 'users', '636', '{\"email\":\"nwulu.smart@gmail.com\"}', 1, '2019-03-25 07:14:43', '2019-03-22 07:14:43', '2019-03-22 07:16:07'),
(661, '323a4dadf083fbf4a017d1f03fc39296', 'Users', 'users', '637', '{\"email\":\"Felicitas-Pasco90@rollagodno.ru\"}', 1, '2019-03-25 09:53:35', '2019-03-22 09:53:35', '2019-03-22 10:24:47'),
(662, '78def8f5b14300cf2393b4841203fffd', 'Users', 'users', '638', '{\"email\":\"usmajor04@gmail.com\"}', 0, '2019-03-25 14:50:18', '2019-03-22 14:50:18', '2019-03-22 14:50:18'),
(663, 'd5418d99cd6667ef3de8f1b94ffd4c1d', 'Users', 'users', '639', '{\"email\":\"y43werdtf@getchonebook.website\"}', 0, '2019-03-25 15:53:40', '2019-03-22 15:53:40', '2019-03-22 15:53:40'),
(664, '4a7e5b0d7d08c0133c67553e84841b7a', 'Users', 'users', '640', '{\"email\":\"iren_23@mail.com\"}', 0, '2019-03-27 10:19:29', '2019-03-24 10:19:29', '2019-03-24 10:19:29'),
(665, '8d9034c5412f2322be81649da57fc40d', 'Users', 'users', '641', '{\"email\":\"blaizejeff18@gmail.com\"}', 1, '2019-03-30 00:27:12', '2019-03-27 00:27:12', '2019-03-27 00:34:45'),
(666, '6709808b8ce502f505de761d94eaf51f', 'Users', 'users', '642', '{\"email\":\"soundgodsinglemickey@gmail.com\"}', 1, '2019-03-31 09:11:07', '2019-03-28 09:11:07', '2019-03-28 09:15:17'),
(667, '63cf1d6398a497c6ae4efb8f836de927', 'Users', 'users', '643', '{\"email\":\"Ogepresh99@gmail.com\"}', 1, '2019-04-01 00:39:22', '2019-03-29 00:39:22', '2019-03-29 00:40:00'),
(668, '8d9691a64ae5e97eb9bcd87ae25d2224', 'Users', 'users', '644', '{\"email\":\"tyceondeck@gmail.com\"}', 1, '2019-04-02 17:49:23', '2019-03-30 17:49:23', '2019-03-30 17:50:19'),
(669, '45ba6953d80f923938c7c0588d1809aa', 'Users', 'users', '645', '{\"email\":\"jeffheptagon@gmail.com\"}', 1, '2019-04-04 04:00:57', '2019-04-01 04:00:57', '2019-04-01 04:11:16'),
(670, 'c532cc1be087055f029915615c90560b', 'Users', 'users', '646', '{\"email\":\"juliettehubston@wp.pl\"}', 0, '2019-04-06 05:31:54', '2019-04-03 05:31:54', '2019-04-03 05:31:54'),
(671, '3ec3121b240130068ea66614dd3cf4aa', 'Users', 'users', '647', '{\"email\":\"jadumaha@gmail.com\"}', 1, '2019-04-07 03:56:10', '2019-04-04 03:56:10', '2019-04-04 03:57:00'),
(672, '866db7dc7b8088abc71448589c5490a3', 'Users', 'users', '648', '{\"email\":\"methodgotekote@gmail.com\"}', 1, '2019-04-07 07:44:58', '2019-04-04 07:44:58', '2019-04-04 07:45:20'),
(673, '95e7b2ca8dab3e0294f4a3706a8a10b2', 'Users', 'users', '649', '{\"email\":\"abelkefe@gmail.com\"}', 0, '2019-04-09 17:23:49', '2019-04-06 17:23:49', '2019-04-06 17:23:49'),
(674, '2c3ec61a4f081f1d94d3bf2f0cb3d1e4', 'Users', 'users', '650', '{\"email\":\"ezzykeyz200@gmail.com\"}', 1, '2019-04-12 00:41:45', '2019-04-09 00:41:45', '2019-04-09 00:46:54'),
(675, 'fb42c1f8acff55b5a49634b2f574ba45', 'Users', 'users', '651', '{\"email\":\"63341mcwhorter@chrisgomabouna.eu\"}', 0, '2019-04-12 21:58:44', '2019-04-09 21:58:44', '2019-04-09 21:58:44'),
(676, 'ca23a6df69f3d183df8d3d88b79120d1', 'Users', 'users', '652', '{\"email\":\"opea34@gmail.com\"}', 0, '2019-04-13 15:31:11', '2019-04-10 15:31:11', '2019-04-10 15:31:11'),
(677, 'af7db011a1185433f9adc2dee048017d', 'Users', 'users', '653', '{\"email\":\"support@vdsina.ru\"}', 0, '2019-04-14 00:49:09', '2019-04-11 00:49:09', '2019-04-11 00:49:09'),
(678, '5f7980ef4c3b4e0eb53ba3307cfdfe67', 'Users', 'users', '654', '{\"email\":\"Gus.Purvis55@gmail.com\"}', 0, '2019-04-14 18:49:41', '2019-04-11 18:49:41', '2019-04-11 18:49:41'),
(679, '9dac3feee79ce43524811425721f6d14', 'Users', 'users', '655', '{\"email\":\"Enrique-Jaeger58@rollagodno.ru\"}', 1, '2019-04-16 02:25:40', '2019-04-13 02:25:40', '2019-04-13 02:40:57'),
(680, 'c132743d39fcbd3364d7b40855795b30', 'Users', 'users', '656', '{\"email\":\"84294haynesworth@acontenle.eu\"}', 0, '2019-04-18 02:02:51', '2019-04-15 02:02:51', '2019-04-15 02:02:51'),
(681, '010f7568c828d288b3c0fe521e0f6665', 'Users', 'users', '657', '{\"email\":\"HolisticEarth777@gmail.com\"}', 1, '2019-04-19 19:19:45', '2019-04-16 19:19:45', '2019-04-16 21:30:05'),
(682, '7cbfe80d00bcc9c9f5a7640ffab927b7', 'Users', 'users', '658', '{\"email\":\"Jesus-Person91@sterlace.dynamailbox.com\"}', 1, '2019-04-20 01:33:18', '2019-04-17 01:33:18', '2019-04-17 01:52:29'),
(683, '0af4997572cde5025f7d1727895dd931', 'Users', 'users', '659', '{\"email\":\"percygoin74@gmail.com\"}', 1, '2019-04-20 16:43:59', '2019-04-17 16:43:59', '2019-04-17 16:53:48'),
(684, '34b08b45a957504ae7f0bc17f6a7c9c0', 'Users', 'users', '660', '{\"email\":\"johnchidi974@gmail.com\"}', 1, '2019-04-22 10:21:13', '2019-04-19 10:21:13', '2019-04-19 10:21:41'),
(685, '09dcf40ea52345ab5970a9b9e7eb9bb6', 'Users', 'users', '661', '{\"email\":\"shegzyjay01@gmail.com\"}', 1, '2019-04-22 18:46:49', '2019-04-19 18:46:49', '2019-04-19 18:48:04'),
(686, '0b21e8e075a233b7395cd4546a910170', 'Users', 'users', '662', '{\"email\":\"Victorsweet19@gmail.com\"}', 0, '2019-04-30 11:53:32', '2019-04-27 11:53:32', '2019-04-27 11:53:32'),
(687, '88dcee5f6e594bfbeed8d19a312689c1', 'Users', 'users', '663', '{\"email\":\"Victorsweet19@gmail.com\"}', 0, '2019-04-30 11:55:46', '2019-04-27 11:55:46', '2019-04-27 11:55:46'),
(688, '438e662d850b39bfcada532379a41b51', 'Users', 'users', '664', '{\"email\":\"Victorsweet19@gmail.com\"}', 0, '2019-04-30 11:57:37', '2019-04-27 11:57:37', '2019-04-27 11:57:37'),
(689, '8b9977900eb77e225b4ba0428d4b204a', 'Users', 'users', '665', '{\"email\":\"adejimijoshua@gmail.com\"}', 0, '2019-04-30 12:47:10', '2019-04-27 12:47:10', '2019-04-27 12:47:10'),
(690, 'e023283e9b8f7e0a9e7315e99406f080', 'Users', 'users', '666', '{\"email\":\"adejimijoshua@gmail.com\"}', 0, '2019-04-30 12:48:04', '2019-04-27 12:48:04', '2019-04-27 12:48:04'),
(691, 'e0728d80f6a6325ed4b6423f729d626f', 'Users', 'users', '667', '{\"email\":\"adejimijoshua@gmail.com\"}', 0, '2019-04-30 12:48:43', '2019-04-27 12:48:43', '2019-04-27 12:48:43'),
(692, '18afb1cd5266eca133a65f06597146d1', 'Users', 'users', '668', '{\"email\":\"adejimijoshua@gmail.com\"}', 0, '2019-04-30 12:49:23', '2019-04-27 12:49:23', '2019-04-27 12:49:23'),
(693, 'a17fb8f1a0ab8e37c14454e61830a5f0', 'Users', 'users', '669', '{\"email\":\"adejimijoshua@gmail.com\"}', 0, '2019-04-30 12:50:59', '2019-04-27 12:50:59', '2019-04-27 12:50:59'),
(694, 'd09a15f627bda50706176e5e381f2f99', 'Users', 'users', '670', '{\"email\":\"patieceuniquick@gmail.com\"}', 0, '2019-05-02 02:53:10', '2019-04-29 02:53:10', '2019-04-29 02:53:10'),
(695, '1f40734c83f0da2bd9fb67d1d34e64b7', 'Users', 'users', '671', '{\"email\":\"patieceuniquick@gmail.com\"}', 0, '2019-05-02 02:56:15', '2019-04-29 02:56:15', '2019-04-29 02:56:15'),
(696, '061dce0e586c06db7ab76b151b5c9cfc', 'Users', 'users', '672', '{\"email\":\"68276grahe@antherdihen.eu\"}', 0, '2019-05-02 03:04:03', '2019-04-29 03:04:03', '2019-04-29 03:04:03'),
(697, 'bdef7a34b551976ef5ce1069a9d056d3', 'Users', 'users', '673', '{\"email\":\"sage.somtomadueke@outlook.com\"}', 0, '2019-05-02 21:33:19', '2019-04-29 21:33:19', '2019-04-29 21:33:19'),
(698, '99c23ac9acca34ba444d723c61ea8f92', 'Users', 'users', '674', '{\"email\":\"sage.somtomadueke@outlook.com\"}', 0, '2019-05-02 21:34:04', '2019-04-29 21:34:04', '2019-04-29 21:34:04'),
(699, 'ecaa9cda186d0d7b5ad1899cce034d47', 'Users', 'users', '675', '{\"email\":\"sage.somtomadueke@outlook.com\"}', 0, '2019-05-02 21:36:31', '2019-04-29 21:36:31', '2019-04-29 21:36:31'),
(700, '53122abaf3c5d65177f5a1d3de1365c2', 'Users', 'users', '676', '{\"email\":\"sage.somtomadueke@outlook.com\"}', 0, '2019-05-02 21:36:57', '2019-04-29 21:36:57', '2019-04-29 21:36:57'),
(701, '6a11d67dae7560052799cdc61ca296a6', 'Users', 'users', '677', '{\"email\":\"sage.somtomadueke@outlook.com\"}', 0, '2019-05-02 21:37:48', '2019-04-29 21:37:48', '2019-04-29 21:37:48'),
(702, '83cf6c397aa02da0f42c71f2f908e4d2', 'Users', 'users', '678', '{\"email\":\"samteghe2017@gmail.com\"}', 0, '2019-05-02 21:40:30', '2019-04-29 21:40:30', '2019-04-29 21:40:30'),
(703, '61235f7ba20ebabe5b3d64093238623f', 'Users', 'users', '679', '{\"email\":\"MartinRuggles@books.ragnortheblue.com\"}', 0, '2019-05-03 12:50:29', '2019-04-30 12:50:29', '2019-04-30 12:50:29'),
(704, 'da3f495c6d883eccf864c8bb54864c75', 'Users', 'users', '680', '{\"email\":\"Christena_Guido40@rollagodno.ru\"}', 0, '2019-05-04 01:23:17', '2019-05-01 01:23:17', '2019-05-01 01:23:17'),
(705, 'cca2a1726a411fdccdd3ea04ba3d39b9', 'Users', 'users', '681', '{\"email\":\"HeidiMims39@books.ragnortheblue.com\"}', 0, '2019-05-04 02:19:26', '2019-05-01 02:19:26', '2019-05-01 02:19:26'),
(706, '4f5c0a753ab75653e72edc603befbd6f', 'Users', 'users', '682', '{\"email\":\"MartaMilson38@books.ragnortheblue.com\"}', 0, '2019-05-04 10:48:31', '2019-05-01 10:48:31', '2019-05-01 10:48:31'),
(707, '874c6a61e5b5766175a4f28f1131d76d', 'Users', 'users', '683', '{\"email\":\"DaveFinsch12@books.ragnortheblue.com\"}', 0, '2019-05-04 12:15:14', '2019-05-01 12:15:14', '2019-05-01 12:15:14'),
(708, 'b01bae08af4381a6206770ec21b5045e', 'Users', 'users', '684', '{\"email\":\"SelenaMorell23@books.ragnortheblue.com\"}', 0, '2019-05-04 16:39:57', '2019-05-01 16:39:57', '2019-05-01 16:39:57'),
(709, 'e7a1d0e08a7d75593209df63633eac46', 'Users', 'users', '685', '{\"email\":\"CodyMclain64@books.ragnortheblue.com\"}', 0, '2019-05-04 17:28:08', '2019-05-01 17:28:08', '2019-05-01 17:28:08'),
(710, '035e001b1030ad986a482aa5ae76329b', 'Users', 'users', '686', '{\"email\":\"support@vdsina.ru\"}', 0, '2019-05-06 14:37:31', '2019-05-03 14:37:31', '2019-05-03 14:37:31'),
(711, '96baf77c9efa843dc5c34ca4b9cb85eb', 'Users', 'users', '687', '{\"email\":\"support@vdsina.ru\"}', 0, '2019-05-07 18:07:26', '2019-05-04 18:07:26', '2019-05-04 18:07:26'),
(712, '550b56d49dcd9574febd2c42c249f8c8', 'Users', 'users', '688', '{\"email\":\"ps2isoroms2@gmail.com\"}', 0, '2019-05-08 01:39:40', '2019-05-05 01:39:40', '2019-05-05 01:39:40'),
(713, '1cb088ce806d0d4e0cd939d6bd1886d1', 'Users', 'users', '689', '{\"email\":\"rowlandgrimu@gmail.com\"}', 0, '2019-05-10 06:53:16', '2019-05-07 06:53:16', '2019-05-07 06:53:16'),
(714, 'fe61301b96dfaed0aa5ca4ab246ba771', 'Users', 'users', '690', '{\"email\":\"joe.okereke@gmail.com\"}', 0, '2019-05-10 22:35:45', '2019-05-07 22:35:45', '2019-05-07 22:35:45'),
(715, '5757f92050e7198966c3d24ff7904070', 'Users', 'users', '691', '{\"email\":\"joe.okereke@gmail.com\"}', 0, '2019-05-10 22:39:23', '2019-05-07 22:39:23', '2019-05-07 22:39:23'),
(716, 'b89eb7db64bec1f1e2be5f1ec2fd235a', 'Users', 'users', '692', '{\"email\":\"joe.okereke@gmail.com\"}', 0, '2019-05-10 22:42:02', '2019-05-07 22:42:02', '2019-05-07 22:42:02'),
(717, 'a65165d5344dface68261a4ebc92fae0', 'Users', 'users', '693', '{\"email\":\"bill@vdsina.ru\"}', 0, '2019-05-11 10:09:54', '2019-05-08 10:09:54', '2019-05-08 10:09:54'),
(718, '47bfce0068958b3c4d893767f0ad7dbd', 'Users', 'users', '694', '{\"email\":\"pkialain@students.kennesaw.edu\"}', 0, '2019-05-11 13:19:35', '2019-05-08 13:19:35', '2019-05-08 13:19:35'),
(719, '8cbb0dca45e36c366caf29477f80f73b', 'Users', 'users', '695', '{\"email\":\"kweku.ahanta@yahoo.com\"}', 0, '2019-05-11 17:04:49', '2019-05-08 17:04:49', '2019-05-08 17:04:49'),
(720, '89cf7576b7038e1a15b79923f235e167', 'Users', 'users', '696', '{\"email\":\"starzyezema@gmail.com\"}', 0, '2019-05-11 23:02:39', '2019-05-08 23:02:39', '2019-05-08 23:02:39'),
(721, '0a995f78efec993a54f31efbc7d5eaa1', 'Users', 'users', '697', '{\"email\":\"bernadette.macleod52@youremail.site\"}', 0, '2019-05-14 01:12:19', '2019-05-11 01:12:19', '2019-05-11 01:12:19'),
(722, '6b7af196f27aec8c33e252bd263843b7', 'Users', 'users', '698', '{\"email\":\"vingpillrimi@hotmail.com\"}', 0, '2019-05-14 06:04:22', '2019-05-11 06:04:22', '2019-05-11 06:04:22'),
(723, '5e19448d69297a57c5bf57390afecf3b', 'Users', 'users', '699', '{\"email\":\"support@vdsina.ru\"}', 0, '2019-05-15 11:11:32', '2019-05-12 11:11:32', '2019-05-12 11:11:32'),
(724, '5f1e00d151c66a44d63d958218a36fc6', 'Users', 'users', '700', '{\"email\":\"s.bo.ncan.g@gmail.com\"}', 0, '2019-05-16 04:03:50', '2019-05-13 04:03:50', '2019-05-13 04:03:50'),
(725, '1b66a20e6538a81d03fbe40d7862eb12', 'Users', 'users', '701', '{\"email\":\"donna.pullman52@goemail.site\"}', 0, '2019-05-16 15:59:31', '2019-05-13 15:59:31', '2019-05-13 15:59:31'),
(726, '1b3c9035f2d92c973ad6c52f251b8ea4', 'Users', 'users', '702', '{\"email\":\"Mosafaevy0@gmail.com\"}', 0, '2019-05-17 13:41:39', '2019-05-14 13:41:39', '2019-05-14 13:41:39'),
(727, 'f5c14c193298c29383fe0ad7484868e2', 'Users', 'users', '703', '{\"email\":\"Mosafaevy0@gmail.com\"}', 0, '2019-05-17 13:42:42', '2019-05-14 13:42:42', '2019-05-14 13:42:42'),
(728, 'cb2b2a35e549cac659ca765268886925', 'Users', 'users', '704', '{\"email\":\"Tom-Fegan21@privatemail1.watchonlineshops.com\"}', 0, '2019-05-18 01:06:13', '2019-05-15 01:06:13', '2019-05-15 01:06:13'),
(729, '5fe1344c80c632b1a5ee9d3d5340f8b1', 'Users', 'users', '705', '{\"email\":\"Adenugaadedayo87@gmail.com\"}', 0, '2019-05-19 12:25:26', '2019-05-16 12:25:26', '2019-05-16 12:25:26'),
(730, '59445f974e0ac6cf76c1eabcb63033e4', 'Users', 'users', '706', '{\"email\":\"Adenugaadedayo87@gmail.com\"}', 0, '2019-05-19 12:26:46', '2019-05-16 12:26:46', '2019-05-16 12:26:46'),
(731, '7cd7149d1e612af208d6971fb015e1e1', 'Users', 'users', '707', '{\"email\":\"vasyutafradis@list.ru\"}', 0, '2019-05-20 00:06:13', '2019-05-17 00:06:13', '2019-05-17 00:06:13'),
(732, '38b0f2e3ac849722838702c395a7d8dd', 'Users', 'users', '708', '{\"email\":\"ankurst@gmail.com\"}', 0, '2019-05-20 11:15:35', '2019-05-17 11:15:35', '2019-05-17 11:15:35'),
(733, '1d55b2f74cba52a64e06a174559cc4d6', 'Users', 'users', '709', '{\"email\":\"geekyfingers@gmail.com\"}', 0, '2019-05-20 21:19:02', '2019-05-17 21:19:02', '2019-05-17 21:19:02'),
(734, '87f3aff712c45688234454e23f3fe0fa', 'Users', 'users', '710', '{\"email\":\"geekyfingers@gmail.com\"}', 0, '2019-05-20 21:23:55', '2019-05-17 21:23:55', '2019-05-17 21:23:55'),
(735, '8c26167a142f315710943deae6718945', 'Users', 'users', '711', '{\"email\":\"geekyfingers@gmail.com\"}', 0, '2019-05-20 21:38:49', '2019-05-17 21:38:49', '2019-05-17 21:38:49'),
(736, 'fb1a220c241c0690469f0ae62cf427e0', 'Users', 'users', '712', '{\"email\":\"lennorabaturin@mail.ru\"}', 0, '2019-05-22 01:44:18', '2019-05-19 01:44:18', '2019-05-19 01:44:18'),
(737, '49f77a71dcefff70b6a41c0b87847696', 'Users', 'users', '713', '{\"email\":\"petruneliyaarjanyha@mail.ru\"}', 0, '2019-05-22 09:53:51', '2019-05-19 09:53:51', '2019-05-19 09:53:51'),
(738, 'd96aba7512f7f0c6e7ed940a5cf1c5f7', 'Users', 'users', '714', '{\"email\":\"kaleinikdemenkov@mail.ru\"}', 0, '2019-05-22 16:12:18', '2019-05-19 16:12:18', '2019-05-19 16:12:18'),
(739, '5e64afe12e246113674876e98f00d8ac', 'Users', 'users', '715', '{\"email\":\"pauljohnasuekomhe@yahoo.com\"}', 0, '2019-05-23 05:41:10', '2019-05-20 05:41:10', '2019-05-20 05:41:10'),
(740, 'a972888394ca3a22c6c25ebce3ec9adc', 'Users', 'users', '716', '{\"email\":\"pauljohnasuekomhe@yahoo.com\"}', 0, '2019-05-23 05:46:02', '2019-05-20 05:46:02', '2019-05-20 05:46:02'),
(741, '924bc86cc6559422ab97996698d231ff', 'Users', 'users', '717', '{\"email\":\"pauljohnasuekomhe@yahoo.com\"}', 0, '2019-05-23 05:47:41', '2019-05-20 05:47:41', '2019-05-20 05:47:41'),
(742, 'c1e0eae508b109d3eb5143d9c601ce3c', 'Users', 'users', '718', '{\"email\":\"Timmy.Primrose15@cleantalkorg1.ru\"}', 0, '2019-05-23 05:48:12', '2019-05-20 05:48:12', '2019-05-20 05:48:12'),
(743, 'f181fd59a20738a75628b0445ee6e9eb', 'Users', 'users', '719', '{\"email\":\"pauljohnasuekomhe@yahoo.com\"}', 0, '2019-05-23 06:07:47', '2019-05-20 06:07:47', '2019-05-20 06:07:47'),
(744, 'f1d04cc55dcb6c2cf8b623024cace99d', 'Users', 'users', '720', '{\"email\":\"pauljohnasuekomhe@yahoo.com\"}', 0, '2019-05-23 06:09:24', '2019-05-20 06:09:24', '2019-05-20 06:09:24'),
(745, '2166be2015927ae6c07eba9722f232a3', 'Users', 'users', '721', '{\"email\":\"pauljohnasuekomhe@yahoo.com\"}', 0, '2019-05-23 06:10:34', '2019-05-20 06:10:34', '2019-05-20 06:10:34'),
(746, '3fdf56ebcc60fc799d41596850bc3cb0', 'Users', 'users', '722', '{\"email\":\"pauljohnasuekomhe@yahoo.com\"}', 0, '2019-05-23 06:14:56', '2019-05-20 06:14:56', '2019-05-20 06:14:56'),
(747, '2f7305ba22bcec4f5e1f0afd5a63e54d', 'Users', 'users', '723', '{\"email\":\"pauljohnasuekomhe@yahoo.com\"}', 0, '2019-05-23 06:16:13', '2019-05-20 06:16:13', '2019-05-20 06:16:13'),
(748, 'dca3d03d2073bb7636306a658f4112b7', 'Users', 'users', '724', '{\"email\":\"pauljohnasuekomhe@yahoo.com\"}', 0, '2019-05-23 06:17:01', '2019-05-20 06:17:01', '2019-05-20 06:17:01'),
(749, 'dcfbc95b476cb425226b0c6d9e0d18ac', 'Users', 'users', '725', '{\"email\":\"eric1998eric@yandex.com\"}', 0, '2019-05-23 13:23:39', '2019-05-20 13:23:39', '2019-05-20 13:23:39'),
(750, '72e8201cc91a3e3c71f778c5d89bc275', 'Users', 'users', '726', '{\"email\":\"harry.morrison2@isp2.site\"}', 0, '2019-05-25 01:51:18', '2019-05-22 01:51:18', '2019-05-22 01:51:18'),
(751, '98927b0a96cb17a6903f876ac6b3adb2', 'Users', 'users', '727', '{\"email\":\"slaxc26@gmail.com\"}', 0, '2019-05-25 11:10:54', '2019-05-22 11:10:54', '2019-05-22 11:10:54'),
(752, '4ec81d40597d87859b185e36b19bf26f', 'Users', 'users', '728', '{\"email\":\"slaxc26@gmail.com\"}', 0, '2019-05-25 11:15:03', '2019-05-22 11:15:03', '2019-05-22 11:15:03'),
(753, '7569eeaa3f36d63828e5456178b1fce7', 'Users', 'users', '729', '{\"email\":\"onifadeolaitan7@gmail.com\"}', 1, '2019-05-25 17:35:52', '2019-05-22 17:35:52', '2019-05-22 17:40:45'),
(754, '8787160e5fd6d3654610a70e20dcfade', 'Users', 'users', '730', '{\"email\":\"akiraschannel@gmail.com\"}', 1, '2019-05-26 21:10:15', '2019-05-23 21:10:15', '2019-05-23 21:15:06'),
(755, '8045454fb91f6eeddfb811b88648f12c', 'Users', 'users', '731', '{\"email\":\"director@mchost.ru\"}', 0, '2019-05-29 03:49:00', '2019-05-26 03:49:00', '2019-05-26 03:49:00'),
(756, '26581a86e0ceb7c9bb4dd1f2a83ded7f', 'Users', 'users', '732', '{\"email\":\"shaneharvey1795@m.bengira.com\"}', 0, '2019-05-29 23:15:20', '2019-05-26 23:15:20', '2019-05-26 23:15:20'),
(757, '19714e40534118e3e7abc804290b5328', 'Users', 'users', '733', '{\"email\":\"truongnola504@gmail.com\"}', 0, '2019-05-30 17:52:00', '2019-05-27 17:52:00', '2019-05-27 17:52:00'),
(758, '791ef58ddae4663099e5dc7e2b4b67b2', 'Users', 'users', '734', '{\"email\":\"www.1kdoingit@gmail.com\"}', 1, '2019-05-30 18:35:15', '2019-05-27 18:35:15', '2019-05-27 18:43:30'),
(759, '9cacc97bb17a0353f260f05e12095875', 'Users', 'users', '735', '{\"email\":\"virginia.paterson@goemail.site\"}', 0, '2019-05-31 01:44:41', '2019-05-28 01:44:41', '2019-05-28 01:44:41'),
(760, 'aa2643ab895a914b455e0c4997f760ba', 'Users', 'users', '736', '{\"email\":\"scottdodson2@gmail.com\"}', 0, '2019-05-31 14:50:51', '2019-05-28 14:50:51', '2019-05-28 14:50:51'),
(761, 'f86674b7a77e4a354d2a27e6d59d0f4c', 'Users', 'users', '737', '{\"email\":\"profinokwa@mail.com\"}', 0, '2019-06-01 05:58:17', '2019-05-29 05:58:17', '2019-05-29 05:58:17'),
(762, '28abc6036d9655ae25d013474c246d3b', 'Users', 'users', '738', '{\"email\":\"moisesjast1451@m.bengira.com\"}', 0, '2019-06-01 18:32:34', '2019-05-29 18:32:34', '2019-05-29 18:32:34'),
(763, '50f274e99daae890218e025173e14a1e', 'Users', 'users', '739', '{\"email\":\"rokdr1@gmail.com\"}', 0, '2019-06-03 04:36:59', '2019-05-31 04:36:59', '2019-05-31 04:36:59'),
(764, 'c8c31c048f5e8e75b5ad0221be01f2e2', 'Users', 'users', '740', '{\"email\":\"profvalerierenner1742@m.bengira.com\"}', 0, '2019-06-04 06:08:39', '2019-06-01 06:08:39', '2019-06-01 06:08:39'),
(765, '35fd65ed7a5f17d316879746445e9ede', 'Users', 'users', '741', '{\"email\":\"erikapi44v@mail.ru\"}', 1, '2019-06-04 15:22:41', '2019-06-01 15:22:41', '2019-06-01 15:55:54'),
(766, '3ea2e27e7926dd71b4fa8d0ce1822d14', 'Users', 'users', '742', '{\"email\":\"abyourmom@gmail.com\"}', 0, '2019-06-04 17:21:19', '2019-06-01 17:21:19', '2019-06-01 17:21:19'),
(767, '775c9dbf0f0c7a29a17e4b7d2e1a6702', 'Users', 'users', '743', '{\"email\":\"osaisaimark@gmail.com\"}', 0, '2019-06-06 23:27:30', '2019-06-03 23:27:30', '2019-06-03 23:27:30'),
(768, '88d320c18e04eaae429bff89a1a4254e', 'Users', 'users', '744', '{\"email\":\"Joyce.Kuykendall@speaker.buypbn.com\"}', 0, '2019-06-07 05:07:59', '2019-06-04 05:07:59', '2019-06-04 05:07:59'),
(769, 'c867686ec3b22599f6aaa7a4e863ce5d', 'Users', 'users', '745', '{\"email\":\"tman0327@prodigy.net\"}', 0, '2019-06-08 00:44:38', '2019-06-05 00:44:38', '2019-06-05 00:44:38'),
(770, 'fd5c8a324f0eb8b1f8a9eef6a1df7d54', 'Users', 'users', '746', '{\"email\":\"lungamgqatsa@gmail.com\"}', 1, '2019-06-08 10:11:50', '2019-06-05 10:11:50', '2019-06-05 10:13:35'),
(771, 'e4bca188af8eedf685421d2f7e0dc2d8', 'Users', 'users', '747', '{\"email\":\"wizvic1@gmail.com\"}', 1, '2019-06-08 21:33:36', '2019-06-05 21:33:36', '2019-06-05 21:34:25'),
(772, '0aaaa243f2130280da28ea02fb06b554', 'Users', 'users', '748', '{\"email\":\"sumprocita@yahoo.com\"}', 0, '2019-06-10 05:10:43', '2019-06-07 05:10:43', '2019-06-07 05:10:43'),
(773, '8eec0e0ad9492b0bc2c5984a8bb18e4e', 'Users', 'users', '749', '{\"email\":\"marylinchick5@platinum.farthy.com\"}', 0, '2019-06-10 11:38:41', '2019-06-07 11:38:41', '2019-06-07 11:38:41'),
(774, 'cefcb2f85d33cac9352736fe0181b9f7', 'Users', 'users', '750', '{\"email\":\"chantemccullough92@galaxy.intained.com\"}', 0, '2019-06-10 17:36:53', '2019-06-07 17:36:53', '2019-06-07 17:36:53'),
(775, '8f7c579bad21c01d65437ed633b47ccd', 'Users', 'users', '751', '{\"email\":\"crystleludlum@base.clarized.com\"}', 1, '2019-06-11 07:05:37', '2019-06-08 07:05:37', '2019-06-08 08:25:48'),
(776, '2613d0d0304f5d2c81269dd86e3ac25a', 'Users', 'users', '752', '{\"email\":\"JoseStaton@galaxy.intained.com\"}', 0, '2019-06-11 08:53:21', '2019-06-08 08:53:21', '2019-06-08 08:53:21'),
(777, '2bb9e39329958420f612af09a5dbce5b', 'Users', 'users', '753', '{\"email\":\"MarlonHardwicke@galaxy.intained.com\"}', 1, '2019-06-11 10:01:00', '2019-06-08 10:01:00', '2019-06-08 10:35:12'),
(778, '261abc7c062f541a6ca209d8be3a34b4', 'Users', 'users', '754', '{\"email\":\"kmetg@live.com\"}', 0, '2019-06-11 12:38:12', '2019-06-08 12:38:12', '2019-06-08 12:38:12'),
(779, '8a959debb4a1388cc64d0fde5bdf6775', 'Users', 'users', '755', '{\"email\":\"chgzokere@gmail.com\"}', 0, '2019-06-11 15:21:46', '2019-06-08 15:21:46', '2019-06-08 15:21:46'),
(780, '1bc91f64d66ad8d38e56f8f803623649', 'Users', 'users', '756', '{\"email\":\"CarriBenefield40@galaxy.intained.com\"}', 1, '2019-06-12 00:54:28', '2019-06-09 00:54:28', '2019-06-09 00:56:02'),
(781, 'c4694856a83dccf97b4421e9295c12ff', 'Users', 'users', '757', '{\"email\":\"raylex133@gmail.com\"}', 1, '2019-06-12 16:00:32', '2019-06-09 16:00:32', '2019-06-09 16:01:33'),
(782, '5f3bef06c82659b2cb3c70cce2754657', 'Users', 'users', '758', '{\"email\":\"chigozirimdennis@gmail.com\"}', 1, '2019-06-12 18:03:47', '2019-06-09 18:03:47', '2019-06-09 18:05:07'),
(783, '67f9e771b3fdddfd80eb5b7bd16bd0cd', 'Users', 'users', '759', '{\"email\":\"akasodsliko@yandex.com\"}', 0, '2019-06-12 22:28:46', '2019-06-09 22:28:46', '2019-06-09 22:28:46'),
(784, '59e96515bd763a8a2ef236a7d620dd36', 'Users', 'users', '760', '{\"email\":\"kdotcjamari@gmail.com\"}', 1, '2019-06-14 02:25:43', '2019-06-11 02:25:43', '2019-06-11 02:26:25'),
(785, 'addbc88d94b351c0258209ed9512e3d7', 'Users', 'users', '761', '{\"email\":\"ffrrissf@yandex.com\"}', 0, '2019-06-15 15:19:42', '2019-06-12 15:19:42', '2019-06-12 15:19:42'),
(786, '4c899fa6264ec9b9df3b75b379dc2707', 'Users', 'users', '762', '{\"email\":\"olanshile.ib.ade@gmail.com\"}', 0, '2019-06-18 19:55:26', '2019-06-15 19:55:26', '2019-06-15 19:55:26'),
(787, 'f4f8771b9327489792df8fb430d79051', 'Users', 'users', '763', '{\"email\":\"unknownsuspectrecords@gmail.com\"}', 1, '2019-06-18 22:26:10', '2019-06-15 22:26:10', '2019-06-15 22:26:32'),
(788, '5b46de259f891537f427eb89ea38af01', 'Users', 'users', '764', '{\"email\":\"johnyroyce13@gmail.com\"}', 1, '2019-06-19 22:51:30', '2019-06-16 22:51:30', '2019-06-16 22:52:05'),
(789, 'b3737789a4a5f2a9e39c70a2f0386576', 'Users', 'users', '765', '{\"email\":\"BurtonNeilson52@sky.radities.com\"}', 0, '2019-06-20 20:25:01', '2019-06-17 20:25:02', '2019-06-17 20:25:02'),
(790, 'a565e05e2c8ab22cd0c34df59fdea89a', 'Users', 'users', '766', '{\"email\":\"samewe0@gmail.com\"}', 1, '2019-06-21 00:21:15', '2019-06-18 00:21:15', '2019-06-18 00:21:41'),
(791, '7f2e84062c26c2e890ddf85519597402', 'Users', 'users', '767', '{\"email\":\"eghosaharrison@gmail.com\"}', 1, '2019-06-28 14:40:39', '2019-06-25 14:40:39', '2019-06-25 14:41:11'),
(792, '0d1285de682651eaee48fce85a5516a8', 'Users', 'users', '768', '{\"email\":\"issi@a.kualalumpurtravel.network\"}', 0, '2019-07-01 20:44:45', '2019-06-28 20:44:45', '2019-06-28 20:44:45'),
(793, '57961f1acaf996426de2d6411b26df23', 'Users', 'users', '769', '{\"email\":\"singmarjumpwar@yahoo.com\"}', 0, '2019-07-06 20:31:57', '2019-07-03 20:31:57', '2019-07-03 20:31:57'),
(794, '909d58487af1e1b22842d7c943b3b701', 'Users', 'users', '770', '{\"email\":\"amirah82865@gmail.com\"}', 0, '2019-07-07 01:52:24', '2019-07-04 01:52:24', '2019-07-04 01:52:24'),
(795, '375016ffcf8956db14959659bea50812', 'Users', 'users', '771', '{\"email\":\"amirah82865@gmail.com\"}', 0, '2019-07-07 01:53:17', '2019-07-04 01:53:17', '2019-07-04 01:53:17'),
(796, '5e740bf8a5354762bb34ff0a4e3b21f4', 'Users', 'users', '772', '{\"email\":\"amirah82865@gmail.com\"}', 0, '2019-07-07 01:53:39', '2019-07-04 01:53:39', '2019-07-04 01:53:39'),
(797, 'e04162a4ba33eb3ef891f6cf0ab1b2aa', 'Users', 'users', '773', '{\"email\":\"kobina.amoah1@gmail.com\"}', 1, '2019-07-07 18:01:26', '2019-07-04 18:01:26', '2019-07-04 18:04:10'),
(798, '0e3cee1592195e5c75c071302feb6a12', 'Users', 'users', '36', '{\"email\":\"dxl5000@gmail.com\"}', 1, '2019-07-09 20:42:08', '2019-07-06 20:42:08', '2019-07-06 21:03:18'),
(799, '4741a3c6eb3adffdb276e37327029ff0', 'Users', 'users', '774', '{\"email\":\"akoladedaniel@gmail.com\"}', 1, '2019-07-11 11:18:06', '2019-07-08 11:18:06', '2019-07-08 11:28:55'),
(800, '5a288480c0b1c94d22efb5953daae4a3', 'Users', 'users', '775', '{\"email\":\"margaretha@b.southafricatravel.club\"}', 0, '2019-07-13 05:31:56', '2019-07-10 05:31:56', '2019-07-10 05:31:56'),
(801, '2b55495a00012a3a90f0d7c7a25dadd7', 'Users', 'users', '776', '{\"email\":\"KathieHulett67@trip.ruimz.com\"}', 1, '2019-07-13 21:56:42', '2019-07-10 21:56:42', '2019-07-10 22:32:19'),
(802, '27b8556aca76247da0b28fbffae77d81', 'Users', 'users', '777', '{\"email\":\"denise.cervantes1@yahoo.com\"}', 0, '2019-07-15 02:58:43', '2019-07-12 02:58:43', '2019-07-12 02:58:43'),
(803, 'd3ad3162a6c125d4f4cb09ddcdac3536', 'Users', 'users', '778', '{\"email\":\"KatrinaMakutz@day.suspent.com\"}', 1, '2019-07-16 03:53:28', '2019-07-13 03:53:28', '2019-07-13 03:59:50'),
(804, 'd3c294a04f6ba16bafe54e977eb0d141', 'Users', 'users', '779', '{\"email\":\"Ayahnashbookings@gmail.com\"}', 0, '2019-07-18 20:26:15', '2019-07-15 20:26:15', '2019-07-15 20:26:15'),
(805, '24ac877be88587e194d0a5d8715a3310', 'Users', 'users', '780', '{\"email\":\"RandolphDisher@second.joyrideday.com\"}', 0, '2019-07-20 07:13:56', '2019-07-17 07:13:56', '2019-07-17 07:13:56'),
(806, 'a0a6ef96b9917b1cb56c01d5cc8ac377', 'Users', 'users', '781', '{\"email\":\"cameronlittel955@m.bengira.com\"}', 0, '2019-07-22 20:30:22', '2019-07-19 20:30:22', '2019-07-19 20:30:22'),
(807, 'a78cefa44e73fff46ad2d70cb43924bd', 'Users', 'users', '782', '{\"email\":\"jenrids123@gmail.com\"}', 1, '2019-07-22 22:39:31', '2019-07-19 22:39:31', '2019-07-19 22:40:40'),
(808, '80dc42e5cdd9e7c016f64e738472eeb8', 'Users', 'users', '783', '{\"email\":\"karon@e.linklist.club\"}', 1, '2019-07-23 02:30:03', '2019-07-20 02:30:03', '2019-07-20 02:41:07'),
(809, 'c326755579ee5bd5b06646f2fe07da8b', 'Users', 'users', '784', '{\"email\":\"crista@c.philippinestravel.network\"}', 0, '2019-07-25 19:35:02', '2019-07-22 19:35:02', '2019-07-22 19:35:02'),
(810, 'e69f061c8d1c2ea8600dc47f38723da9', 'Users', 'users', '785', '{\"email\":\"feelstix@gmail.com\"}', 1, '2019-07-26 23:44:34', '2019-07-23 23:44:34', '2019-07-23 23:52:01'),
(811, 'f155af091c3fb79e9f33c676e203bbf6', 'Users', 'users', '786', '{\"email\":\"lumimustapha@gmail.com\"}', 0, '2019-07-27 13:02:37', '2019-07-24 13:02:37', '2019-07-24 13:02:37'),
(812, 'de378b971a1e965c20a10b2a687c2d72', 'Users', 'users', '787', '{\"email\":\"WeldonTitus@edu.toddard.com\"}', 1, '2019-07-27 20:19:25', '2019-07-24 20:19:25', '2019-07-25 03:21:23'),
(813, '5739f5fd9003aa0ee3952cace960f094', 'Users', 'users', '788', '{\"email\":\"PeteKingsley@old.ultramoonbear.com\"}', 0, '2019-07-29 04:57:10', '2019-07-26 04:57:10', '2019-07-26 04:57:10'),
(814, '211e3b7603ea980c6e88de2aaadd19ae', 'Users', 'users', '789', '{\"email\":\"shana@babyteeth.club\"}', 0, '2019-07-29 05:45:57', '2019-07-26 05:45:57', '2019-07-26 05:45:57'),
(815, 'cead04032afd9ee40d105b4305296087', 'Users', 'users', '790', '{\"email\":\"johnpetrion6@gmail.com\"}', 1, '2019-07-29 06:45:36', '2019-07-26 06:45:36', '2019-07-26 06:52:33'),
(816, '3591d8a48daa07e88c333f3eb1444a22', 'Users', 'users', '791', '{\"email\":\"adenugaadedayo87@gmail.com\"}', 0, '2019-07-29 11:07:46', '2019-07-26 11:07:46', '2019-07-26 11:07:46'),
(817, '017480bcdf7a03e1ca11ca3527ff7a2c', 'Users', 'users', '792', '{\"email\":\"linell@web20.club\"}', 0, '2019-07-30 20:15:34', '2019-07-27 20:15:34', '2019-07-27 20:15:34'),
(818, 'a61a8be34a78eae6c8c079091ea43a50', 'Users', 'users', '793', '{\"email\":\"obaletinjoe@yahoo.com\"}', 1, '2019-07-31 00:30:41', '2019-07-28 00:30:41', '2019-07-28 00:31:31'),
(819, '83c3d7077ac97b43451c6815647215a5', 'Users', 'users', '794', '{\"email\":\"karimovaremina@bk.ru\"}', 1, '2019-07-31 17:17:49', '2019-07-28 17:17:49', '2019-07-28 17:32:22'),
(820, 'fe4ca2b1c512444bbcc3c00115e30d2d', 'Users', 'users', '795', '{\"email\":\"brownjocelyn34@gmail.com\"}', 1, '2019-08-01 02:42:09', '2019-07-29 02:42:09', '2019-07-29 02:47:56'),
(821, 'a58173fc7557d0f8fd1469e2c25efa2a', 'Users', 'users', '796', '{\"email\":\"enedina@childrentoys.site\"}', 0, '2019-08-01 06:24:01', '2019-07-29 06:24:01', '2019-07-29 06:24:01'),
(822, '629682b62f4195055e09073a59cf6bf1', 'Users', 'users', '797', '{\"email\":\"hermia@i.shredded.website\"}', 1, '2019-08-01 08:50:46', '2019-07-29 08:50:46', '2019-07-29 09:29:19'),
(823, 'd566d7a3b4a31cedad34ceea50ce22c0', 'Users', 'users', '798', '{\"email\":\"ettie@linklist.club\"}', 1, '2019-08-02 07:37:24', '2019-07-30 07:37:24', '2019-07-30 08:11:47'),
(824, '10458fe179f389a30f68c63fa04b11c6', 'Users', 'users', '799', '{\"email\":\"Marjorie.Graves@mail.backlinksgenerator.in\"}', 0, '2019-08-02 19:09:52', '2019-07-30 19:09:52', '2019-07-30 19:09:52'),
(825, 'c5cacda5a937da9fad56db4323ddd251', 'Users', 'users', '800', '{\"email\":\"keljuiday@delays.space\"}', 0, '2019-08-03 01:50:21', '2019-07-31 01:50:21', '2019-07-31 01:50:21'),
(826, 'c3794c205557b4c31528422437fcf210', 'Users', 'users', '801', '{\"email\":\"gersonbernier660@m.bengira.com\"}', 0, '2019-08-03 07:09:57', '2019-07-31 07:09:57', '2019-07-31 07:09:57'),
(827, 'e11d5ab20a83d25e9b342adbb3fb3d03', 'Users', 'users', '802', '{\"email\":\"stonemanuel2@gmail.com\"}', 0, '2019-08-04 09:07:39', '2019-08-01 09:07:39', '2019-08-01 09:07:39'),
(828, '70ad5e37ca84fc14ecbc111c0477e76c', 'Users', 'users', '803', '{\"email\":\"adebayomatthew29@gmail.com\"}', 1, '2019-08-05 22:47:38', '2019-08-02 22:47:38', '2019-08-02 22:55:08'),
(829, 'f05d6aea87461b7c5f26068c94e6cdd5', 'Users', 'users', '804', '{\"email\":\"Lareeybeatz@gmail.com\"}', 1, '2019-08-06 19:17:46', '2019-08-03 19:17:46', '2019-08-03 19:19:23'),
(830, '821d846d496e625bc365fe8de6698bb9', 'Users', 'users', '805', '{\"email\":\"slovakserce@gazeta.pl\"}', 0, '2019-08-08 23:38:33', '2019-08-05 23:38:33', '2019-08-05 23:38:33'),
(831, 'ae40985fd4b1a311e3789c3bff494fea', 'Users', 'users', '806', '{\"email\":\"kenedy@airmaxboxes.com\"}', 0, '2019-08-09 03:42:20', '2019-08-06 03:42:20', '2019-08-06 03:42:20'),
(832, '1a28dc33bea4e1c4b9d50ce22d788d54', 'Users', 'users', '807', '{\"email\":\"2@akuncerdas.com\"}', 1, '2019-08-09 09:15:38', '2019-08-06 09:15:38', '2019-08-06 09:48:49'),
(833, 'c16897a73b606c40616ce5d46ed45ed1', 'Users', 'users', '808', '{\"email\":\"vanessa@babyteeth.club\"}', 1, '2019-08-11 04:03:08', '2019-08-08 04:03:09', '2019-08-08 04:11:19'),
(834, '945d5dbf6d3c6a741def5f7a97ac3008', 'Users', 'users', '809', '{\"email\":\"jknowles3@att.net\"}', 0, '2019-08-11 06:02:57', '2019-08-08 06:02:57', '2019-08-08 06:02:57'),
(835, 'e558602742d1bd37ba3e92a2e9d6e307', 'Users', 'users', '810', '{\"email\":\"artfulbalanceproductions@gmail.com\"}', 1, '2019-08-11 10:05:31', '2019-08-08 10:05:31', '2019-08-08 10:06:23'),
(836, '5cebc492fe99dccdb25a135376598d1b', 'Users', 'users', '811', '{\"email\":\"jacrob3534@freeregistrationkey.com\"}', 1, '2019-08-12 09:51:13', '2019-08-09 09:51:13', '2019-08-09 10:00:02'),
(837, '44c7be32dd32852fe5cb46ba41728bcb', 'Users', 'users', '812', '{\"email\":\"john@yopmail.com\"}', 1, '2019-08-12 17:01:38', '2019-08-09 17:01:38', '2019-08-09 17:02:11');
INSERT INTO `tokenize_tokens` (`id`, `token`, `foreign_alias`, `foreign_table`, `foreign_key`, `foreign_data`, `status`, `expired`, `created`, `modified`) VALUES
(838, '05de34dd85eb5d9c3aa46a00abf9e095', 'Users', 'users', '813', '{\"email\":\"ZakHacker@services.jokeray.com\"}', 1, '2019-08-12 22:58:16', '2019-08-09 22:58:17', '2019-08-09 23:03:18'),
(839, 'c14f3266fc1e7225ae8f20cf4a1eaf2d', 'Users', 'users', '814', '{\"email\":\"RosellaIrons@i.discopied.com\"}', 0, '2019-08-12 23:51:05', '2019-08-09 23:51:05', '2019-08-09 23:51:05'),
(840, '229374049b5521b2401be7e925486ee4', 'Users', 'users', '815', '{\"email\":\"MarlysTheus@services.jokeray.com\"}', 1, '2019-08-13 01:08:12', '2019-08-10 01:08:12', '2019-08-10 01:19:30'),
(841, 'd015d3c06d30e7864ca3d1d113d4a189', 'Users', 'users', '816', '{\"email\":\"AngusDunham@i.discopied.com\"}', 0, '2019-08-13 01:35:31', '2019-08-10 01:35:31', '2019-08-10 01:35:31'),
(842, 'edb875ffda93f528b3ae8c606992e61c', 'Users', 'users', '817', '{\"email\":\"MartiMathes@general.ultramoonbear.com\"}', 0, '2019-08-13 02:57:35', '2019-08-10 02:57:35', '2019-08-10 02:57:35'),
(843, '342bcf614391630347fecae61917bf84', 'Users', 'users', '818', '{\"email\":\"FlorrieSanderson19@i.discopied.com\"}', 0, '2019-08-13 03:18:06', '2019-08-10 03:18:06', '2019-08-10 03:18:06'),
(844, '8f793a0e1dc3e07ff412da653ea8961f', 'Users', 'users', '819', '{\"email\":\"ShanonCampbell@i.discopied.com\"}', 0, '2019-08-13 04:19:40', '2019-08-10 04:19:40', '2019-08-10 04:19:40'),
(845, 'b4f48378f1a0be2f8bd13a62b303286f', 'Users', 'users', '820', '{\"email\":\"AntoniaDecicco@general.ultramoonbear.com\"}', 0, '2019-08-13 04:35:47', '2019-08-10 04:35:47', '2019-08-10 04:35:47'),
(846, '569aa39a29de97d92f4757a6dc2bd1ae', 'Users', 'users', '821', '{\"email\":\"ArielleUnderhill@services.jokeray.com\"}', 1, '2019-08-13 05:28:43', '2019-08-10 05:28:43', '2019-08-10 06:40:03'),
(847, '7eabc0ab0c9269e17c419293a99edf05', 'Users', 'users', '822', '{\"email\":\"NatalieTritt51@services.jokeray.com\"}', 1, '2019-08-13 07:51:23', '2019-08-10 07:51:23', '2019-08-11 13:00:40'),
(848, '658ffaaefd649e0352b7e8c509e97924', 'Users', 'users', '823', '{\"email\":\"MarionNewdegate@i.discopied.com\"}', 0, '2019-08-13 09:04:17', '2019-08-10 09:04:17', '2019-08-10 09:04:17'),
(849, 'c6faccd5851abe61aadfdca46d553981', 'Users', 'users', '824', '{\"email\":\"munehubbie@gmail.com\"}', 0, '2019-08-13 18:01:38', '2019-08-10 18:01:38', '2019-08-10 18:01:38'),
(850, '9c9ff7c73993296b03e5634d93d402e0', 'Users', 'users', '825', '{\"email\":\"munehubbie@gmail.com\"}', 0, '2019-08-13 18:09:09', '2019-08-10 18:09:09', '2019-08-10 18:09:09'),
(851, 'f0cefd64837fbff01ba44396ca0d83db', 'Users', 'users', '826', '{\"email\":\"Sanora_Hatter@caldero.freephotoretouch.com\"}', 1, '2019-08-14 08:24:46', '2019-08-11 08:24:46', '2019-08-11 08:50:03'),
(852, '39420d3f628a74b3cd51a7c088edde3b', 'Users', 'users', '827', '{\"email\":\"HarrisLeung29@pro.actices.com\"}', 0, '2019-08-14 09:48:17', '2019-08-11 09:48:17', '2019-08-11 09:48:17'),
(853, '23ac313337e35f8cff4b4d72fc5f5162', 'Users', 'users', '828', '{\"email\":\"Sung-Emert67@caldron.truckmetalworks.com\"}', 0, '2019-08-14 12:33:07', '2019-08-11 12:33:07', '2019-08-11 12:33:07'),
(854, '2f83037be6d1c7dd375bce10d409094a', 'Users', 'users', '829', '{\"email\":\"esfandloktionova@mail.ua\"}', 0, '2019-08-14 18:41:17', '2019-08-11 18:41:17', '2019-08-11 18:41:17'),
(855, 'fe203c0948c9968d99b1fb5ee439204e', 'Users', 'users', '830', '{\"email\":\"LorrineStapley@general.ultramoonbear.com\"}', 0, '2019-08-14 20:35:13', '2019-08-11 20:35:13', '2019-08-11 20:35:13'),
(856, '6f8edcb0dfcfa36ff280f1d350666195', 'Users', 'users', '831', '{\"email\":\"ChristinBlaze35@general.ultramoonbear.com\"}', 0, '2019-08-15 03:04:01', '2019-08-12 03:04:01', '2019-08-12 03:04:01'),
(857, 'a2524daa518e0d9c4bc10f498bf3e628', 'Users', 'users', '832', '{\"email\":\"jrusvg@pharmusa.biz\"}', 0, '2019-08-15 04:10:45', '2019-08-12 04:10:45', '2019-08-12 04:10:45'),
(858, 'd817cfd017595b1fde3d2a09902cb6d2', 'Users', 'users', '833', '{\"email\":\"ConcepcionMatthews@i.discopied.com\"}', 0, '2019-08-15 04:36:37', '2019-08-12 04:36:38', '2019-08-12 04:36:38'),
(859, '9be23f417ee436d83c93e65aea5e2f81', 'Users', 'users', '834', '{\"email\":\"davidjrchoombe2@gmail.com\"}', 1, '2019-08-15 22:55:08', '2019-08-12 22:55:09', '2019-08-12 22:56:13'),
(860, 'b70a5ad7b162ffd9db3525c7fa6e047f', 'Users', 'users', '835', '{\"email\":\"Clement-Weston@shela89.fancycarnavalmasks.com\"}', 0, '2019-08-17 06:56:48', '2019-08-14 06:56:48', '2019-08-14 06:56:48'),
(861, 'eff6198525114dc6d3794e9752a72240', 'Users', 'users', '836', '{\"email\":\"blondie@bestdrones.store\"}', 1, '2019-08-17 16:17:37', '2019-08-14 16:17:37', '2019-08-14 16:22:56'),
(862, '36a1f7e9ad6f87e1664f3106d4a85232', 'Users', 'users', '837', '{\"email\":\"nobitamoon@yahoo.com\"}', 1, '2019-08-17 23:54:58', '2019-08-14 23:54:58', '2019-08-14 23:56:21'),
(863, '50de49e4a535a793bafc2dfcc8997310', 'Users', 'users', '838', '{\"email\":\"Bernie-Gartner@saathoff19.softtoiletpaper.com\"}', 1, '2019-08-18 00:11:03', '2019-08-15 00:11:03', '2019-08-15 00:37:04'),
(864, 'cb08cfaeef096a5942ecead71db69641', 'Users', 'users', '839', '{\"email\":\"ainsley@solarlamps.store\"}', 1, '2019-08-18 05:24:58', '2019-08-15 05:24:58', '2019-08-15 05:41:35'),
(865, '2814eadc9f643d9e3e6d540e6fe8e3f6', 'Users', 'users', '840', '{\"email\":\"sari@b.bestvps.info\"}', 1, '2019-08-18 10:46:36', '2019-08-15 10:46:36', '2019-08-15 11:18:09'),
(866, '4c6cd60a085d33dd59a962325a740db1', 'Users', 'users', '841', '{\"email\":\"predtaillenin@yahoo.com\"}', 0, '2019-08-18 20:49:15', '2019-08-15 20:49:15', '2019-08-15 20:49:15'),
(867, 'cad793942e1d27c808fd734258de8299', 'Users', 'users', '842', '{\"email\":\"veronike@electricscooter.best\"}', 1, '2019-08-18 22:13:08', '2019-08-15 22:13:08', '2019-08-15 22:20:58'),
(868, '260e0599d34868697897dd448c321c42', 'Users', 'users', '843', '{\"email\":\"Tammi-Harter84@shela89.fancycarnavalmasks.com\"}', 0, '2019-08-19 03:59:56', '2019-08-16 03:59:56', '2019-08-16 03:59:56'),
(869, '3a64cc9252aa98e8bb5d245e118b64e7', 'Users', 'users', '844', '{\"email\":\"olly@sportwatch.website\"}', 1, '2019-08-19 06:47:31', '2019-08-16 06:47:31', '2019-08-16 06:53:28'),
(870, '7b0d83694dc937aef7d31e36d3d95ed1', 'Users', 'users', '845', '{\"email\":\"Skye_Meyers63@perfetti.freeinvestoradvice.com\"}', 0, '2019-08-19 06:49:30', '2019-08-16 06:49:30', '2019-08-16 06:49:30'),
(871, 'b8b5125337ca80cb4dc2025cd794dceb', 'Users', 'users', '846', '{\"email\":\"katoRaps@darpun.xyz\"}', 0, '2019-08-20 14:45:29', '2019-08-17 14:45:29', '2019-08-17 14:45:29'),
(872, 'd1d2f4fd6f8a275fa2f5d51709e16444', 'Users', 'users', '847', '{\"email\":\"oyedareolayinkamryk@gmail.com\"}', 1, '2019-08-20 20:32:21', '2019-08-17 20:32:21', '2019-08-17 20:33:22'),
(873, '6423945294a5b5c111a03dbe0353bbc5', 'Users', 'users', '848', '{\"email\":\"talitha@sportwatch.website\"}', 1, '2019-08-20 23:14:27', '2019-08-17 23:14:27', '2019-08-17 23:20:13'),
(874, 'f8e22bb46666e96c305930a3389a1243', 'Users', 'users', '403', '{\"email\":\"hasib2008@gmail.com\"}', 1, '2019-08-21 08:37:35', '2019-08-18 08:37:35', '2019-08-18 08:38:13'),
(875, '9df2d841fbf519ba7003fd05c5cb32f2', 'Users', 'users', '849', '{\"email\":\"teddy@flour.icu\"}', 0, '2019-08-23 05:13:08', '2019-08-20 05:13:08', '2019-08-20 05:13:08'),
(876, '9aafcfaa013020effce15293d6f559ba', 'Users', 'users', '850', '{\"email\":\"claude@childrentoys.site\"}', 0, '2019-08-24 12:07:29', '2019-08-21 12:07:30', '2019-08-21 12:07:30'),
(877, 'e208db0271378821e999e05fe5522352', 'Users', 'users', '851', '{\"email\":\"djclash25@gmail.com\"}', 1, '2019-08-25 14:56:34', '2019-08-22 14:56:36', '2019-08-22 14:57:35'),
(878, '6d82511a08ce49d03f877b29a08f7369', 'Users', 'users', '852', '{\"email\":\"Zane.Cramp@sefcik.musclejapancars.com\"}', 0, '2019-08-25 21:46:38', '2019-08-22 21:46:38', '2019-08-22 21:46:38'),
(879, '5d96bf1f191a99d89543ef813271c2da', 'Users', 'users', '853', '{\"email\":\"Alannah.Schultheiss@shela89.fancycarnavalmasks.com\"}', 0, '2019-08-26 06:46:12', '2019-08-23 06:46:12', '2019-08-23 06:46:12'),
(880, '6535258b538b729e1c2baebce6c06a28', 'Users', 'users', '854', '{\"email\":\"danielnwoke1117@gmail.com\"}', 1, '2019-08-27 11:49:41', '2019-08-24 11:49:41', '2019-08-24 11:50:16'),
(881, 'ac5c6ce64431ea42abd31787ae858c65', 'Users', 'users', '855', '{\"email\":\"undilutedla08@yahoo.com\"}', 1, '2019-08-28 21:06:16', '2019-08-25 21:06:16', '2019-08-25 21:08:30'),
(882, '11ec621fcad611e9daea1f4e0101a655', 'Users', 'users', '854', '{\"email\":\"danielnwoke1117@gmail.com\"}', 1, '2019-08-29 01:29:24', '2019-08-26 01:29:25', '2019-08-26 02:06:59'),
(883, 'bfd6de4d887d1dfbd4b40f1f3067451e', 'Users', 'users', '856', '{\"email\":\"kenechukwuezeofor@gmail.com\"}', 1, '2019-08-29 03:26:27', '2019-08-26 03:26:27', '2019-08-26 03:27:33'),
(884, 'b383005a78513de9a07104d7755718c9', 'Users', 'users', '857', '{\"email\":\"blinkzbeat@gmail.com\"}', 1, '2019-08-29 21:24:21', '2019-08-26 21:24:22', '2019-08-26 21:33:54'),
(885, '324f2ea3dedd804ed5936547ab1a66c3', 'Users', 'users', '858', '{\"email\":\"blinkzbeat@gmail.com\"}', 0, '2019-08-29 21:27:57', '2019-08-26 21:27:57', '2019-08-26 21:27:57'),
(886, 'df43263de1730c414d7847a9d6468bae', 'Users', 'users', '859', '{\"email\":\"tarah@bestvpsfor.xyz\"}', 1, '2019-08-30 13:59:01', '2019-08-27 13:59:01', '2019-08-27 14:09:29'),
(887, '1d2bb67956d985a172679283beaf268b', 'Users', 'users', '860', '{\"email\":\"casafoh@outlook.com\"}', 1, '2019-08-30 18:24:56', '2019-08-27 18:24:56', '2019-08-27 18:30:22'),
(888, '82bbf486011bf10291b55e75d1de2580', 'Users', 'users', '861', '{\"email\":\"lona@colar.site\"}', 0, '2019-09-01 22:32:39', '2019-08-29 22:32:39', '2019-08-29 22:32:39'),
(889, '086c864e7fb00350a9ffb1425d796e49', 'Users', 'users', '862', '{\"email\":\"sydelle@gsaprojects.club\"}', 1, '2019-09-03 07:09:18', '2019-08-31 07:09:18', '2019-08-31 07:11:57'),
(890, '0c0d5d4356fa5aee0058c9ff1d69e0ac', 'Users', 'users', '863', '{\"email\":\"maryjane@gsasearchengineranker.pw\"}', 1, '2019-09-03 10:57:51', '2019-08-31 10:57:51', '2019-08-31 11:15:55'),
(891, '185f7a2f95da61239eef32919e616db7', 'Users', 'users', '864', '{\"email\":\"tina@gsaverifiedlist.download\"}', 0, '2019-09-04 04:42:48', '2019-09-01 04:42:48', '2019-09-01 04:42:48'),
(892, '4bb10c1761523d085b5dc756976f556d', 'Users', 'users', '865', '{\"email\":\"57574fillman@acnebrufolirime43.eu\"}', 0, '2019-09-05 13:49:13', '2019-09-02 13:49:13', '2019-09-02 13:49:13'),
(893, 'b1af2e443fc9b9fc073119b966781683', 'Users', 'users', '866', '{\"email\":\"79232kluse@chrisgomabouna.eu\"}', 1, '2019-09-05 15:08:25', '2019-09-02 15:08:25', '2019-09-02 16:05:29'),
(894, '3a501884657de1cab871fcd18850c68b', 'Users', 'users', '867', '{\"email\":\"engrmunnakhan@gmail.com\"}', 0, '2019-09-05 15:58:40', '2019-09-02 15:58:40', '2019-09-02 15:58:40'),
(895, '2782fa96fa1f7e85c2cdee12ba5a9082', 'Users', 'users', '868', '{\"email\":\"33714flinchbaugh@gaterremeds1975.eu\"}', 0, '2019-09-05 16:17:17', '2019-09-02 16:17:17', '2019-09-02 16:17:17'),
(896, 'c8ccfb855492061c7428a467977edc18', 'Users', 'users', '869', '{\"email\":\"58553volner@crosmereta.eu\"}', 0, '2019-09-05 18:10:26', '2019-09-02 18:10:26', '2019-09-02 18:10:26'),
(897, '66ff25a101f1a516606c3c16135f0a30', 'Users', 'users', '870', '{\"email\":\"79232kluse@gaterremeds1975.eu\"}', 0, '2019-09-05 18:30:25', '2019-09-02 18:30:25', '2019-09-02 18:30:25'),
(898, '49f214cbd5c0e7b3f1be591f426fd8e8', 'Users', 'users', '871', '{\"email\":\"dtoksmusic@gmail.com\"}', 1, '2019-09-05 21:51:08', '2019-09-02 21:51:08', '2019-09-02 21:53:47'),
(899, '7c65355ae968277f55300b503538f269', 'Users', 'users', '872', '{\"email\":\"80380edey@gaterremeds1975.eu\"}', 0, '2019-09-06 01:02:24', '2019-09-03 01:02:24', '2019-09-03 01:02:24'),
(900, 'd78af8fdc2a2e9276d706f40fa251a19', 'Users', 'users', '873', '{\"email\":\"73749teehan@gaterremeds1975.eu\"}', 0, '2019-09-06 01:40:26', '2019-09-03 01:40:26', '2019-09-03 01:40:26'),
(901, '499de4f8ede7c09040cb97867d23c9ff', 'Users', 'users', '874', '{\"email\":\"30738mees@centleadetai.eu\"}', 0, '2019-09-06 10:22:34', '2019-09-03 10:22:34', '2019-09-03 10:22:34'),
(902, '8b24faca35fdb600e2df91c06cb61fd5', 'Users', 'users', '875', '{\"email\":\"17180gavette@gaterremeds1975.eu\"}', 0, '2019-09-06 12:40:40', '2019-09-03 12:40:40', '2019-09-03 12:40:40'),
(903, 'ef838e489fc26a6d05c872d12547c890', 'Users', 'users', '876', '{\"email\":\"ogenedavid55@gmail.com\"}', 1, '2019-09-07 10:18:33', '2019-09-04 10:18:33', '2019-09-04 10:20:45'),
(904, '2285b77d6269675c1361340c67e666e0', 'Users', 'users', '877', '{\"email\":\"valentinwolford@asia.dnsabr.com\"}', 0, '2019-09-07 15:55:41', '2019-09-04 15:55:41', '2019-09-04 15:55:41'),
(905, 'f00db0fe34bda520984161cb46a92631', 'Users', 'users', '878', '{\"email\":\"kurt@childrentoys.site\"}', 0, '2019-09-08 00:20:32', '2019-09-05 00:20:32', '2019-09-05 00:20:32'),
(906, 'c75f96c7a24c42e8e039e45d503a04ee', 'Users', 'users', '879', '{\"email\":\"aigneis@linklist.club\"}', 1, '2019-09-08 23:43:55', '2019-09-05 23:43:55', '2019-09-05 23:58:19'),
(907, '36a0c765a7f2cc5cc32c2e687956ef12', 'Users', 'users', '880', '{\"email\":\"88087thatch@acnebrufolirime43.eu\"}', 0, '2019-09-09 05:24:49', '2019-09-06 05:24:49', '2019-09-06 05:24:49'),
(908, '9886a8ca21bf0f7481d05a6c0b695eee', 'Users', 'users', '881', '{\"email\":\"58553volner@crosmereta.eu\"}', 0, '2019-09-09 05:58:01', '2019-09-06 05:58:01', '2019-09-06 05:58:01'),
(909, '326f4a9c94284762d8503062e87fae10', 'Users', 'users', '882', '{\"email\":\"84294haynesworth@centleadetai.eu\"}', 1, '2019-09-09 09:47:01', '2019-09-06 09:47:01', '2019-09-06 09:55:44'),
(910, 'e8ed5226c51aacb05c1cd39c4f0f702b', 'Users', 'users', '883', '{\"email\":\"83417bleser@centnetploggbu.eu\"}', 1, '2019-09-09 16:38:41', '2019-09-06 16:38:41', '2019-09-06 17:11:11'),
(911, '1e5abfda4d7092e150b4436571255c4d', 'Users', 'users', '884', '{\"email\":\"13632haubner@gaterremeds1975.eu\"}', 0, '2019-09-09 18:38:17', '2019-09-06 18:38:17', '2019-09-06 18:38:17'),
(912, '15b68657629590a2a7f532fbbcb399bb', 'Users', 'users', '885', '{\"email\":\"20408larman@acnebrufolirime43.eu\"}', 0, '2019-09-09 22:23:26', '2019-09-06 22:23:26', '2019-09-06 22:23:26'),
(913, '304f036363635051f844b58d0319e39f', 'Users', 'users', '886', '{\"email\":\"80882halford@centnetploggbu.eu\"}', 1, '2019-09-09 23:42:47', '2019-09-06 23:42:47', '2019-09-06 23:54:26'),
(914, '7ad4d99ef9d116d79b0f772675632f43', 'Users', 'users', '887', '{\"email\":\"13632haubner@enlerama.eu\"}', 1, '2019-09-10 00:34:26', '2019-09-07 00:34:26', '2019-09-07 01:31:56'),
(915, 'e152b1f8c7d14a7162ad13c946c829ae', 'Users', 'users', '888', '{\"email\":\"7836laitinen@acnebrufolirime43.eu\"}', 0, '2019-09-10 00:51:16', '2019-09-07 00:51:16', '2019-09-07 00:51:16'),
(916, '9075e44579250aa8f03ca981b2a757c6', 'Users', 'users', '889', '{\"email\":\"44042bellville@enlerama.eu\"}', 1, '2019-09-10 02:05:43', '2019-09-07 02:05:43', '2019-09-07 02:07:44'),
(917, '57fe52f467f4720a6396eda9c38cf6f2', 'Users', 'users', '890', '{\"email\":\"Itemzdadoktor@gmail.com\"}', 1, '2019-09-10 02:52:37', '2019-09-07 02:52:37', '2019-09-07 02:58:18'),
(918, '01941ff99e74efe3a3948cb85170f439', 'Users', 'users', '891', '{\"email\":\"87331cerecedes@centnetploggbu.eu\"}', 1, '2019-09-10 03:25:43', '2019-09-07 03:25:43', '2019-09-07 03:32:13'),
(919, '65b64b4b26cb04a8aba7768ace686c3d', 'Users', 'users', '892', '{\"email\":\"milemilefos@gazeta.pl\"}', 0, '2019-09-10 03:57:55', '2019-09-07 03:57:55', '2019-09-07 03:57:55'),
(920, 'e7b94a8fc92d931facde4eff6815c7c4', 'Users', 'users', '893', '{\"email\":\"56723krawitz@gaterremeds1975.eu\"}', 0, '2019-09-10 05:35:36', '2019-09-07 05:35:36', '2019-09-07 05:35:36'),
(921, '0890a49adfb0999337a6a1b756e13480', 'Users', 'users', '894', '{\"email\":\"80878kritter@gaterremeds1975.eu\"}', 0, '2019-09-10 17:27:19', '2019-09-07 17:27:19', '2019-09-07 17:27:19'),
(922, '89b0ea187b5ca642e5e40d92020e9cb7', 'Users', 'users', '895', '{\"email\":\"2224living@enercranyr.eu\"}', 1, '2019-09-10 17:43:12', '2019-09-07 17:43:12', '2019-09-07 19:09:22'),
(923, '93763bd51c58cbf7e8c48c9f31f17a71', 'Users', 'users', '896', '{\"email\":\"79232kluse@crosmereta.eu\"}', 1, '2019-09-10 18:41:17', '2019-09-07 18:41:17', '2019-09-07 18:45:27'),
(924, 'fd9d7b14c4f1f46cb5ecbaccafb98bcc', 'Users', 'users', '897', '{\"email\":\"30738mees@acnebrufolirime43.eu\"}', 0, '2019-09-10 19:01:33', '2019-09-07 19:01:33', '2019-09-07 19:01:33'),
(925, 'ae778d63b448bffb0b364b82dd962d8e', 'Users', 'users', '898', '{\"email\":\"76414ruhland@centnetploggbu.eu\"}', 1, '2019-09-10 21:26:59', '2019-09-07 21:26:59', '2019-09-07 21:31:55'),
(926, 'ea877aeb3b94e55161c8aa2143ca429d', 'Users', 'users', '899', '{\"email\":\"68443pipes@crosmereta.eu\"}', 0, '2019-09-11 00:59:07', '2019-09-08 00:59:07', '2019-09-08 00:59:07'),
(927, '8a7a72a3120f68e879197d29c5bb9294', 'Users', 'users', '900', '{\"email\":\"80882halford@acnebrufolirime43.eu\"}', 0, '2019-09-11 01:24:48', '2019-09-08 01:24:48', '2019-09-08 01:24:48'),
(928, 'ec4e516bd7027e35f3725e0489d291fa', 'Users', 'users', '901', '{\"email\":\"42306whillock@enlerama.eu\"}', 1, '2019-09-11 01:33:33', '2019-09-08 01:33:33', '2019-09-08 01:34:38'),
(929, '171f1d5f47c26d73ab69f325687c9b7f', 'Users', 'users', '902', '{\"email\":\"youngwealth4@gmail.com\"}', 1, '2019-09-11 02:41:56', '2019-09-08 02:41:56', '2019-09-08 02:44:34'),
(930, '513c062510418b1dea4a79d881f874b1', 'Users', 'users', '903', '{\"email\":\"youngwealth4@gmail.com\"}', 1, '2019-09-11 02:42:54', '2019-09-08 02:42:54', '2019-09-08 03:21:52'),
(931, '78da8472d9407d7cdb16d6a80104ae84', 'Users', 'users', '904', '{\"email\":\"36242mackesy@crosmereta.eu\"}', 1, '2019-09-11 03:31:02', '2019-09-08 03:31:02', '2019-09-08 03:49:03'),
(932, '8d899982ab901a21e9459acc88973e4c', 'Users', 'users', '905', '{\"email\":\"23356stretz@gaterremeds1975.eu\"}', 0, '2019-09-11 03:47:11', '2019-09-08 03:47:11', '2019-09-08 03:47:11'),
(933, 'c24d69774f652e475c8791161319432a', 'Users', 'users', '906', '{\"email\":\"64055fondell@gaterremeds1975.eu\"}', 0, '2019-09-11 03:59:07', '2019-09-08 03:59:07', '2019-09-08 03:59:07'),
(934, '32391064f73b8cd70306300be2789ce2', 'Users', 'users', '907', '{\"email\":\"35517meissner@concetomou.eu\"}', 1, '2019-09-11 04:32:02', '2019-09-08 04:32:02', '2019-09-08 04:32:51'),
(935, '984fa7da0c9067a95dfffedd920e7d57', 'Users', 'users', '908', '{\"email\":\"42306whillock@centleadetai.eu\"}', 0, '2019-09-11 05:21:31', '2019-09-08 05:21:31', '2019-09-08 05:21:31'),
(936, '039bfae62baf243c090250081a5b5184', 'Users', 'users', '909', '{\"email\":\"20430dzurnak@acnebrufolirime43.eu\"}', 0, '2019-09-11 06:14:03', '2019-09-08 06:14:03', '2019-09-08 06:14:03'),
(937, '2c021486a1e9f9f02db58a13298e39a1', 'Users', 'users', '910', '{\"email\":\"16229bandasak@crosmereta.eu\"}', 1, '2019-09-11 06:28:04', '2019-09-08 06:28:04', '2019-09-08 06:36:10'),
(938, '531e0f3950d2786538834178228799e5', 'Users', 'users', '911', '{\"email\":\"staci@gsavps.xyz\"}', 1, '2019-09-11 07:40:39', '2019-09-08 07:40:39', '2019-09-08 07:56:16'),
(939, '7adbf76977bafcc2568a08d9b1d95754', 'Users', 'users', '912', '{\"email\":\"62831tonne@centnetploggbu.eu\"}', 1, '2019-09-11 08:28:40', '2019-09-08 08:28:40', '2019-09-08 08:29:22'),
(940, 'fb0c6f1151a4406c2c4a4c0d336ce5aa', 'Users', 'users', '913', '{\"email\":\"80882halford@centleadetai.eu\"}', 1, '2019-09-11 10:16:29', '2019-09-08 10:16:29', '2019-09-08 10:24:13'),
(941, '4d0cd27c81733714a9ab81ae5e3bb29c', 'Users', 'users', '914', '{\"email\":\"45479edemann@centnetploggbu.eu\"}', 1, '2019-09-11 10:46:35', '2019-09-08 10:46:35', '2019-09-08 10:49:23'),
(942, 'b17a385c5d148b7325ae5a4e64ae3b11', 'Users', 'users', '915', '{\"email\":\"84294haynesworth@centnetploggbu.eu\"}', 1, '2019-09-11 11:38:51', '2019-09-08 11:38:51', '2019-09-08 11:43:20'),
(943, '47ac2d9fcfeea748352dd07d7db646cd', 'Users', 'users', '916', '{\"email\":\"62833nieves@gaterremeds1975.eu\"}', 0, '2019-09-11 16:21:24', '2019-09-08 16:21:26', '2019-09-08 16:21:26'),
(944, '9351010eef8e849039689a6c900169ed', 'Users', 'users', '917', '{\"email\":\"Christy_Gillette46@vissering35.newpopularwatches.com\"}', 1, '2019-09-12 07:11:31', '2019-09-09 07:11:32', '2019-09-09 07:27:37'),
(945, '5ea4c8f2a338feae5fdc20ab4c7c6fcd', 'Users', 'users', '918', '{\"email\":\"Irving-Luster65@vissering35.newpopularwatches.com\"}', 1, '2019-09-14 03:21:22', '2019-09-11 03:21:22', '2019-09-11 03:25:22'),
(946, '2e2d3695d5c95bc5e332cf4eb7943c5a', 'Users', 'users', '919', '{\"email\":\"kolu@mailinator.net\"}', 0, '2019-09-15 10:14:33', '2019-09-12 10:14:34', '2019-09-12 10:14:34'),
(947, '60cf6a8d353ea6276aae7556b7e5b6a4', 'Users', 'users', '920', '{\"email\":\"team@abservetech.com\"}', 1, '2019-09-15 10:53:20', '2019-09-12 10:53:20', '2019-09-12 10:53:56'),
(948, '37a965c81a993ca2d465cf38530db349', 'Users', 'users', '921', '{\"email\":\"alyabewadam@rambler.ru\"}', 0, '2019-09-15 15:03:36', '2019-09-12 15:03:37', '2019-09-12 15:03:37'),
(949, 'e496285cedaf92e7382a63dbbab73d05', 'Users', 'users', '922', '{\"email\":\"avromv8x7nu20n@mail.com\"}', 0, '2019-09-16 00:28:09', '2019-09-13 00:28:10', '2019-09-13 00:28:10'),
(950, '9871b359f2e2e68b539567eaf355a6a4', 'Users', 'users', '923', '{\"email\":\"uchennajoseph33@gmail.com\"}', 0, '2019-09-18 01:30:04', '2019-09-15 01:30:05', '2019-09-15 01:30:05'),
(951, 'c039aaceea28e6a75e27aad1193529cc', 'Users', 'users', '924', '{\"email\":\"68346brakke@acnebrufolirime43.eu\"}', 0, '2019-09-18 04:28:42', '2019-09-15 04:28:42', '2019-09-15 04:28:42'),
(952, '80dd5dd7841ea7be65d33da4fd489e98', 'Users', 'users', '925', '{\"email\":\"55400keto@acnebrufolirime43.eu\"}', 0, '2019-09-18 05:35:05', '2019-09-15 05:35:05', '2019-09-15 05:35:05'),
(953, 'a73feb55eb74bbba9de7bf436e873ae0', 'Users', 'users', '926', '{\"email\":\"74398laflen@acnebrufolirime43.eu\"}', 0, '2019-09-18 06:14:01', '2019-09-15 06:14:01', '2019-09-15 06:14:01'),
(954, '80aacb47a2f212692cb6e18085a9014f', 'Users', 'users', '927', '{\"email\":\"29362funderbunk@acnebrufolirime43.eu\"}', 0, '2019-09-18 07:49:20', '2019-09-15 07:49:20', '2019-09-15 07:49:20'),
(955, '287cd551bfd71eafb26c2f16cec8c152', 'Users', 'users', '928', '{\"email\":\"zdeshorse@american-busflow.com\"}', 0, '2019-09-18 10:10:07', '2019-09-15 10:10:07', '2019-09-15 10:10:07'),
(956, 'd62880761f287450d46d45915bd421be', 'Users', 'users', '929', '{\"email\":\"20867hagler@acnebrufolirime43.eu\"}', 0, '2019-09-18 10:17:08', '2019-09-15 10:17:08', '2019-09-15 10:17:08'),
(957, '21c2a54c68b1b490e6058e8b6cc5df60', 'Users', 'users', '930', '{\"email\":\"hopezdj@gmail.com\"}', 0, '2019-09-18 23:45:18', '2019-09-15 23:45:19', '2019-09-15 23:45:19'),
(958, 'a075e344246eab0fb06842203303b2f5', 'Users', 'users', '931', '{\"email\":\"63184krakauer@acnebrufolirime43.eu\"}', 0, '2019-09-19 00:24:10', '2019-09-16 00:24:10', '2019-09-16 00:24:10'),
(959, '819cdce641e0e5619702dfcc93edef81', 'Users', 'users', '932', '{\"email\":\"30135sentz@acnebrufolirime43.eu\"}', 0, '2019-09-19 07:31:43', '2019-09-16 07:31:43', '2019-09-16 07:31:43'),
(960, '7e5790c33216ee05a9271e1c6fcae9ff', 'Users', 'users', '933', '{\"email\":\"82619randall@acnebrufolirime43.eu\"}', 0, '2019-09-19 16:21:37', '2019-09-16 16:21:38', '2019-09-16 16:21:38'),
(961, '1e9084873f25ac618b7a5b9fd25db8a0', 'Users', 'users', '934', '{\"email\":\"vandeheyszizs@aol.com\"}', 1, '2019-09-19 17:24:48', '2019-09-16 17:24:49', '2019-09-16 17:32:47'),
(962, '56a73151ec5bbdccebe8fadfdc03885a', 'Users', 'users', '935', '{\"email\":\"Minna.Wilhoite37@downloadsongmusic.com\"}', 0, '2019-09-19 22:48:16', '2019-09-16 22:48:17', '2019-09-16 22:48:17'),
(963, '2775e3526176faa31936d75840183d98', 'Users', 'users', '936', '{\"email\":\"Janine.McBurney@downloadsongmusic.com\"}', 0, '2019-09-20 00:43:31', '2019-09-17 00:43:32', '2019-09-17 00:43:32'),
(964, 'd732749425201b75412f23938cbb1a00', 'Users', 'users', '937', '{\"email\":\"Ima.Pauley51@downloadsongmusic.com\"}', 0, '2019-09-20 02:18:20', '2019-09-17 02:18:21', '2019-09-17 02:18:21'),
(965, 'c376d7dd6185893a379413b0f67f479d', 'Users', 'users', '938', '{\"email\":\"jeane@wirelesschargers.xyz\"}', 1, '2019-09-20 07:16:48', '2019-09-17 07:16:49', '2019-09-17 07:30:58'),
(966, 'eff3acef7fe922fadeb50717e9bef223', 'Users', 'users', '939', '{\"email\":\"57574fillman@acnebrufolirime43.eu\"}', 0, '2019-09-20 10:21:09', '2019-09-17 10:21:09', '2019-09-17 10:21:09'),
(967, 'dc8e9212994c60046cc3a55ce376da88', 'Users', 'users', '940', '{\"email\":\"58075badon@acnebrufolirime43.eu\"}', 0, '2019-09-20 17:41:12', '2019-09-17 17:41:13', '2019-09-17 17:41:13'),
(968, '7b0c996b1292b04f8587217b93b53dd0', 'Users', 'users', '941', '{\"email\":\"trixi@bestdrones.store\"}', 0, '2019-09-20 18:53:53', '2019-09-17 18:53:54', '2019-09-17 18:53:54'),
(969, '5a50adcfe3b2f0ada1c20c63953506f2', 'Users', 'users', '942', '{\"email\":\"zubair@aptechgdn.net\"}', 1, '2019-09-21 06:59:27', '2019-09-18 06:59:28', '2019-09-18 07:00:11'),
(970, 'fd13e229a88ac42000e39bdd67b4f3cb', 'Users', 'users', '943', '{\"email\":\"62833nieves@acnebrufolirime43.eu\"}', 0, '2019-09-21 12:03:58', '2019-09-18 12:03:58', '2019-09-18 12:03:58'),
(971, '26098a50ec6d958c9a36cd0ee9df6cac', 'Users', 'users', '944', '{\"email\":\"mstrkids@gmail.com\"}', 1, '2019-09-21 21:46:12', '2019-09-18 21:46:12', '2019-09-18 21:46:44'),
(972, '25c6e7f5ef27f81b74e16efabf33f584', 'Users', 'users', '945', '{\"email\":\"HOPEZDJ2019@GMAIL.COM\"}', 1, '2019-09-22 21:52:16', '2019-09-19 21:52:16', '2019-09-19 21:53:27'),
(973, '5c019b73f5b4a3ecaeffd701b496acec', 'Users', 'users', '946', '{\"email\":\"opal@singaporetravel.network\"}', 0, '2019-09-22 22:22:42', '2019-09-19 22:22:42', '2019-09-19 22:22:42'),
(974, '98953a751d3e8d7d27cade031007d1f8', 'Users', 'users', '947', '{\"email\":\"64041rossum@acnebrufolirime43.eu\"}', 0, '2019-09-23 11:18:14', '2019-09-20 11:18:14', '2019-09-20 11:18:14'),
(975, '0d69842b0e29c21858157c57ab15721e', 'Users', 'users', '948', '{\"email\":\"it.professional.bi@gmail.com\"}', 1, '2019-09-23 15:10:00', '2019-09-20 15:10:00', '2019-09-20 15:11:24'),
(976, '8b5f47402063b8015629537e6f397b64', 'Users', 'users', '949', '{\"email\":\"Brigette.Ridgley95@saregamasongs.com\"}', 0, '2019-09-23 17:26:25', '2019-09-20 17:26:27', '2019-09-20 17:26:27'),
(977, '3592177f710eab6b5e5c4d757056dedc', 'Users', 'users', '950', '{\"email\":\"48293garacia@acnebrufolirime43.eu\"}', 0, '2019-09-23 23:54:24', '2019-09-20 23:54:25', '2019-09-20 23:54:25'),
(978, 'e184d908aceabf3f68ebc82eed8a5526', 'Users', 'users', '951', '{\"email\":\"tinisha@sportwatch.website\"}', 1, '2019-09-24 11:22:31', '2019-09-21 11:22:32', '2019-09-21 11:35:34'),
(979, 'e90a158d37b67bed1259c9a5035dc25d', 'Users', 'users', '952', '{\"email\":\"maragret@moneyrobotdiagrams.club\"}', 0, '2019-09-24 12:30:02', '2019-09-21 12:30:03', '2019-09-21 12:30:03'),
(980, 'c1e859c8e21e83d66ee480ca6d93d4bd', 'Users', 'users', '953', '{\"email\":\"13556beyers@acnebrufolirime43.eu\"}', 0, '2019-09-24 12:50:43', '2019-09-21 12:50:44', '2019-09-21 12:50:44'),
(981, '06c94ea9a4697fe6977380972736272f', 'Users', 'users', '954', '{\"email\":\"80878kritter@acnebrufolirime43.eu\"}', 0, '2019-09-24 13:54:58', '2019-09-21 13:54:59', '2019-09-21 13:54:59'),
(982, 'e2fa4c093d12ab363aceeb42dcb1c978', 'Users', 'users', '955', '{\"email\":\"44302schopp@acnebrufolirime43.eu\"}', 0, '2019-09-24 23:28:19', '2019-09-21 23:28:20', '2019-09-21 23:28:20'),
(983, 'be2fa0863415c95871c88b834d07110b', 'Users', 'users', '956', '{\"email\":\"6684degori@acnebrufolirime43.eu\"}', 0, '2019-09-25 03:31:38', '2019-09-22 03:31:38', '2019-09-22 03:31:38'),
(984, 'd57ef1287b686b034d55b294745d7239', 'Users', 'users', '957', '{\"email\":\"21612benyo@acnebrufolirime43.eu\"}', 0, '2019-09-25 06:15:29', '2019-09-22 06:15:29', '2019-09-22 06:15:29'),
(985, '436315c8248f3e82d84ab5894f6f9acb', 'Users', 'users', '958', '{\"email\":\"AlexanderBergstrom96@site.dobunny.com\"}', 0, '2019-09-25 11:10:00', '2019-09-22 11:10:00', '2019-09-22 11:10:00'),
(986, 'b4d038c05a891a9bc968d3da2fb47a12', 'Users', 'users', '959', '{\"email\":\"cilka@flour.icu\"}', 0, '2019-09-27 05:47:24', '2019-09-24 05:47:24', '2019-09-24 05:47:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `power_users` int(11) NOT NULL DEFAULT '0',
  `is_verified` int(11) NOT NULL DEFAULT '0',
  `top_producer` int(11) NOT NULL DEFAULT '0',
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `accounttype` varchar(255) DEFAULT NULL,
  `aka` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(14) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo_dir` varchar(255) DEFAULT NULL,
  `photo_size` varchar(255) DEFAULT NULL,
  `bio` text,
  `facebook` varchar(50) DEFAULT NULL,
  `twitter` varchar(50) DEFAULT NULL,
  `instagram` varchar(50) DEFAULT NULL,
  `youtube` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `country` varchar(50) NOT NULL,
  `popular` int(1) DEFAULT '2',
  `membership` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `expired` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `power_users`, `is_verified`, `top_producer`, `firstname`, `lastname`, `fullname`, `accounttype`, `aka`, `email`, `phone`, `password`, `role`, `photo`, `photo_dir`, `photo_size`, `bio`, `facebook`, `twitter`, `instagram`, `youtube`, `address`, `state`, `zip`, `country`, `popular`, `membership`, `created`, `modified`, `expired`) VALUES
(1, 0, 1, 0, '', '', 'AmpAdmin', NULL, NULL, 'admin@amplifihub.com', '', '$2y$10$CvN8hB3gygVBuaqq.LbIpOCOHMkn3LQV.a6fyyDwrnZvrsS/zplsq', 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-05-11 19:42:13', '2019-02-22 08:06:09', 1),
(2, 1, 1, 0, 'Ejike', 'Odoh', 'Ejikemuwa', 'Music Producer', 'SonarMixes', 'ejitexflow@yahoo.com', '08084281634', '$2y$10$k4AvEiK7HM9f6gRhYffdseaYqverjNNK28sXNRT..BL6m1xXLrbI.', 'user', '1122b185ebda1b1187b5783c192ab689_1548499061.jpg', 'Users/photo', '43775', ' All I do is produce good music like I\'ve been doing for the past 7 years. Hit me up if you need good music done!', 'https://www.facebook.com/freaksonarstudios', 'https://twitter.com/sonarmixes', 'https://instagram.com/sonarmixes', 'https://www.youtube.com/channel/UCFvvfudn_RduvNDsF', 'No 1 Olufowobi Street, Lawanson', 'Lagos State', '100254', 'Nigeria', 2, NULL, '2018-05-11 21:41:43', '2019-09-08 00:54:21', 1),
(3, 0, 0, 0, '', '', 'Adeshina Oladiran', NULL, NULL, 'iiflowzfiwonsoricruise@yahoo.com', '', '$2y$10$eNExnQPU.jFOtj.CJNF/fOEm88Erz7rtBPedF9PfQk2DmxvsmzEBC', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-05-12 08:19:23', '2018-05-12 08:19:23', 0),
(4, 0, 0, 0, '', '', 'Chuckbeatz entertainment', NULL, NULL, 'achusimchuckyz@gmail.com', '', '$2y$10$r3m0.yjtFL8ZA4lcko2Xv.U.SVH2ee086cTvOP2ij9T7yOjhcS8Ea', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-05-12 13:18:48', '2018-05-12 13:18:48', 0),
(7, 0, 0, 0, '', '', 'Henry Carto Mba', NULL, NULL, 'cartomailing@gmail.com', '', '$2y$10$VX9FcrtBoUXtauQyPOf5auJInHUahRjMA8ZvbFY0pl7jdIcAp3JRq', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-05-15 09:58:44', '2018-05-15 09:58:44', 0),
(8, 1, 1, 0, 'UDoggz', 'Beat', 'UDoggz Beat ', 'Music Producer', 'UDoggzBeat', 'udoggzbeat@gmail.com', '+2348112976128', '$2y$10$xGwhkUlg0g7XDb00ILvFP.dXBQ9gnP6yKdYI4TPpdtZVPezP6lLMS', 'user', 'picsart_10-13-11.1526512539.jpg', 'webroot/files/Users/photo/', '243482', ' UDoggz Beat is the in house producer in UDoggz Empire... His music production cuts across variant types of genres of music eg Hip Hop, RnB, Dance Hall, Afro Pop, Afro Beats, \'The different genres in TRAP\' , Soul, Rock, Alternative Music , Edm, Fugi, Apala etc...  He is also highly sort after by Film producers who utilize his services when it comes to great movie sound tracks and sound engineering.... UDoggz Beat is an award winning music producer who continues to evolve with time when it comes to music production ... With the help of God through our Lord Jesus Christ his music production creates stars that lights up the music skys always', 'www.facebook.com/udoggzbeat ', 'www.twitter.com/udoggzbeat ', 'www.instagram.com/udoggzbeat', '', '20 Anjorin Street Lawanson Surulere lagos Nigeria ', '', '', 'Nigeria', 2, NULL, '2018-05-15 19:58:18', '2019-09-08 23:06:19', 0),
(9, 0, 0, 0, 'Mikeman', 'Check', 'Mike Check', NULL, 'mikecheck', 'effkhayyondbeat@gmail.com', '09099224985', '$2y$10$h897Q.kZbZp2/.auXVt1xOTydmOVkmY828BIcIJC9LJ1ADGf/yLrm', 'user', '24205-d0107c-jembe-500x360.1533856479.jpg', 'webroot/files/Users/photo/', '148813', ' ', '', '', '', '', '', '', '', 'Nigeria', 2, NULL, '2018-05-15 21:25:06', '2018-08-12 00:33:23', 0),
(10, 0, 0, 0, '', '', 'olorunmojo oluwaseun', NULL, NULL, 'seuncee@gmail.com', '', '$2y$10$T2cBYF0IKAfErzYEUqy7QeVN/CaTpQj74INNQt4mN2R57lCfIdDn2', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-05-16 20:04:41', '2018-05-16 20:07:20', 0),
(11, 0, 0, 0, '', '', 'olorunmojo oluwaseun', NULL, NULL, NULL, '', '$2y$10$SBJXceYjTf2tH7UfeakWruwNlQ87EBzyVhlKOAZa9JA/NAT5CxtjG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-05-16 20:05:05', '2018-05-16 20:05:05', 0),
(12, 0, 0, 0, '', '', 'Francis Okaformbah', NULL, NULL, 'Me@francisokaformbah.com', '', '$2y$10$STkdSCwwlsps0zFtuKhMNuvH1V0HcOsQOFC/seYgRRlLhAf34zx1e', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-05-17 13:27:23', '2018-05-17 13:27:23', 0),
(13, 0, 0, 0, '', '', 'Samuel Keji', NULL, NULL, 'samuelkegites@gmail.com', '', '$2y$10$b1EqLpVYwLnP/DUb7Wp9Tu1PfXSS9zSlJk2CieHiDbK0Qi03MEGv.', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-05-17 15:56:53', '2018-05-17 15:56:53', 0),
(14, 0, 0, 0, '', '', 'abuchi ogu', NULL, 'Madlord', 'maduabuchi5@gmail.com', '+2348125956300', '$2y$10$C6tp1itqGe9RSk6KHVswQ.lJ2cyU4bJTokCS0jBpRIoWHvmbB/7Ke', 'user', 'img_20180506_151116_987.1526592954.jpg', 'webroot/files/Users/photo/', '439229', ' ', '', '', '', '', 'Apo abuja', '', '', 'Nigeria', 2, NULL, '2018-05-17 21:30:53', '2018-05-17 21:35:53', 0),
(15, 0, 0, 0, 'Kingcoven beats', 'Kingcoven beats', 'Kingcoven beats', 'Music Producer', 'Kingcoven beats', 'kingcoven@gmail.com', '+2347014085673', '$2y$10$WnDK7PRodmMqzQ4BB96WS.u1wwszj0LfQvX1EqGEOanm9fBneBaze', 'user', 'd468269cac4379c188349e5be09ad640_1552337527.png', 'Users/photo', '420428', 'For the best of every genre of music beats ranging from afrobeats soul,pop,dancehall R n B and all types of hip-hop beats from trap to westcoast,crunk and Afro hiphop.you should check it out', 'Kingcoven beats', '@kingcoven1', '@kingcoven', 'Kingcoven beats', 'Surulere', 'Lagos', '+234', 'Nigeria', 2, NULL, '2018-05-18 10:39:29', '2019-03-11 21:52:07', 0),
(16, 0, 0, 0, '', '', 'opeoluwa opee', NULL, NULL, 'opeemix@gmail.com', '', '$2y$10$iJ6Yr5YXEsDxnwvywMnt1OHwhED4BJ4dXuvgWn2ZfMxZnpwraBIki', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-05-19 08:13:36', '2018-05-19 08:13:36', 0),
(17, 0, 0, 0, '', '', 'Produca Wa', NULL, NULL, 'producawa@gmail.com', '', '$2y$10$Ic8cI10IBkkob/LfvCoZWOahF/PO9WhzHEDP8vG22mlSSN4Nw13vy', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-05-19 08:16:05', '2019-01-18 18:58:08', 0),
(18, 0, 0, 0, '', '', 'Plumpybeatz', NULL, NULL, 'plumpybeatz@yahoo.com', '', '$2y$10$XOtkfehhiDcZZzYgH3.zeewwWFEgHYGJI5FLLTpb0DVlSN.OmMXmi', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-05-19 08:36:12', '2018-05-19 08:36:12', 0),
(19, 0, 0, 0, '', '', 'Plumpybeatz', NULL, NULL, 'plumpybeatz@yahoo.com', '', '$2y$10$vukJyhBOf4fiTvkD8bb52.m1HgSRSxT1XsXeZnHkkEGt2f2l7hU9S', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-05-19 08:42:37', '2018-05-19 08:42:37', 0),
(20, 0, 0, 0, '', '', 'Joseph Akpan', NULL, 'Jaykeys', 'Jukeboxmusicafrica@gmail.com', '08162586190', '$2y$10$yRCSiZV5H29gQc3axSStWu5/OeZn4Jq7yiap0goIG8giVvucS.Q.m', 'user', 'me.1526733239.jpg', 'webroot/files/Users/photo/', '4603', 'Jukeboxmusic_Africa is an entertainment company that deals with music production,audio mixing and mastering,jingles and montages,movie tracks,music directing,artist management and all that concerns music ', 'https://www.facebook.com/JukeBoxAfrica/', 'https://twitter.com/Jukebox94410309', 'www.instagram.com/official_jukeboxmusicafrica/', 'https://www.youtube.com/channel/UCiRBFVsZxgRW5LW4M', 'Surulere,Lagos', '', '', 'Nigeria', 2, NULL, '2018-05-19 09:30:01', '2019-02-22 07:35:09', 0),
(21, 0, 0, 0, '', '', 'Mc Hills', NULL, NULL, 'mchillsmc@gmail.com', '', '$2y$10$hvDExRc2Mpex61LgVVmA6uDMZb0Ph.giZKL5OgL9tuIZD640w9Uru', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-05-19 10:13:38', '2018-05-19 10:13:38', 0),
(22, 0, 0, 0, '', '', 'JbArmy SwaggMilitant', NULL, 'JbArmy SwaggMilitia', 'tobbyclark@gmail.com', '07067395077 ', '$2y$10$sy0kdxcMudpsF.YzBKs0q.USF3C0To/cF6v3bIYOFhEWz6JpzDjRa', 'user', 'beautyplus_20180203150843_save.1526739007.jpg', 'webroot/files/Users/photo/', '139310', ' ', 'fb.ndiano.clark', '', '@iam_jbarmy', '', '38 balogun kuku street, Aguda, surulere, lagos', '', '', 'Nigeria', 2, NULL, '2018-05-19 14:00:02', '2019-01-19 02:02:59', 0),
(23, 0, 0, 0, '', '', 'Clark tobby', NULL, NULL, NULL, '', '$2y$10$SMZzdCyi1iiisx.KS52o4.iMhUeoNSIamywBurlEci9K2b2T/bwTC', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-05-19 14:18:48', '2018-05-19 14:18:48', 0),
(24, 0, 0, 0, '', '', 'Charles Chopper ', NULL, NULL, 'nkeanyadic@yahoo.com', '', '$2y$10$RPAUTNoquPQXN1IrAgtAGeX28OUjyY2YWU//xs/VbEd9ju/rtg/KG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-05-19 19:05:52', '2018-05-19 19:05:52', 0),
(25, 0, 0, 0, '', '', 'Pelij', NULL, NULL, 'pelijbiz@gmail.com', '', '$2y$10$oTOfQolYai5aV1zjAXRS8eTIThlZz/KFnPWcgVKXaj.su4jYY3gAi', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-05-19 21:59:50', '2018-05-19 21:59:50', 0),
(26, 0, 0, 0, 'Joseph', 'Toyosi', '12 Beatz', 'Music Producer', '12 beatz', 'josephtoyosi2014@gmail.com', '09038729764', '$2y$10$VpFBopNVBOGX3OglndphEuOcQIrLksyHPTRGglHxF.qTuyPI0ZQMa', 'user', '882ee0164e142ca1b3436c01b354462d_1548501512.jpg', 'webroot/files/Users/photo/', '692905', 'am just humbly here to make us do great things , in music , love people and ready to give you satisfactory services', '', 'https://twitter.com/12_beatz', 'https://www.instagram.com/12_beatz/', 'https://www.youtube.com/channel/UCRj1eFa5z-qObLkXw', '24 olaleye street, gbagada', 'lagos', '100001', 'Nigeria', 2, NULL, '2018-05-20 12:41:13', '2019-01-25 18:05:48', 0),
(27, 0, 0, 0, '', '', 'Foluso Oluwatayo', NULL, NULL, 'foluglory@gmail.com', '', '$2y$10$Ou0OIxh3T0p/SuGbAemSsOgZuLbHIpwbGMkbDLeZO201kRiY/tUj.', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-05-20 13:07:49', '2018-05-20 13:07:49', 0),
(28, 0, 0, 0, '', '', 'Shineeyes Elvis', NULL, NULL, 'hoodmusicnaija@gmial.com', '', '$2y$10$o/BB7ibZO0uOO0kE/S9CSu2QaQxa0tT6PCEaNEkxD30U90mqB3Aum', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-05-20 20:05:01', '2018-05-20 20:05:01', 0),
(29, 0, 0, 0, 'Marcus', 'Anabewo', 'Marcus anabewo ', NULL, 'Beatzbymz', 'beatzbymz@gmail.com', '08062730188', '$2y$10$n4sW.tRoN2M3w7pQNH7JmuyI40M2o3mEg/80LNaUqCXr9io4NmD/S', 'user', 'fb_img_1528118029888.1533019996.jpg', 'webroot/files/Users/photo/', '38877', '', 'beatzbymz', 'beatzbymz', 'beatzbymz', 'beatzbymz', '', '', '', 'Afghanistan', 2, NULL, '2018-05-22 13:10:06', '2018-07-31 06:53:16', 0),
(30, 0, 0, 0, '', '', 'Teizzeiofficial ', NULL, NULL, 'taiyetayo081@gmail.com', '', '$2y$10$r86YK9HwLRzFNWgfPwSdgOvcn7d3zIy/KCKA24HjkDt6Cn/B1Zzs.', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-05-23 07:59:10', '2018-05-23 07:59:10', 0),
(31, 0, 0, 0, '', '', 'Giwa Olanrewaju', NULL, NULL, 'larrygonbeat2009@gmail.com', '', '$2y$10$7rN2Y4pPIi7LSHagc/yb6OEYESPpAbSDYu4R4bAw2b9O9iW7W4f0a', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-05-23 09:38:19', '2018-05-23 09:38:19', 0),
(32, 0, 0, 0, '', '', 'Phatjoe Anderson ', NULL, NULL, NULL, '', '$2y$10$AVASVgm1J7O695bg6I.Mf.22ky0Up3Pi2ULNndVRr.SMy6miplu4.', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-05-23 09:58:12', '2018-05-23 09:58:12', 0),
(34, 0, 0, 0, '', '', 'DJ Swergvic ', NULL, 'DJ Swergvic ', 'Swergvic@gmail.com', '09020205110', '$2y$10$RgoJxGeBe/P1KGMAXPbuaOqfSVJ9kSVgwjRVOaKLM..PqSbmAFIWy', 'user', 'img_20180408_150258_184.1527164192.jpg', 'webroot/files/Users/photo/', '132278', ' ', 'www.facebook.com/djswergvic', 'www.twitter.com/djswergvic', 'www.instagram.com/djswergvic', 'www.YouTube.com/djswergvic', '', '', '', '', 2, NULL, '2018-05-24 12:10:34', '2018-05-24 12:16:32', 0),
(35, 0, 0, 0, '', '', 'Michael Joseph ', NULL, NULL, 'terrestialbeats5@gmail.com', '', '$2y$10$al/fSm/weDaaiI78xLNct.zamRV6q7x93a.rZE1.Mp7z0MK4PYoqW', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-05-24 22:45:01', '2018-05-24 22:45:01', 0),
(36, 1, 1, 0, 'emeka', 'orji', 'DXL DA BEAT MURDERER', 'Music Producer', 'DXLDABEAT', 'dxl5000@gmail.com', '+7186908351', '$2y$10$FvYy6xjamy.6Z5hmGvguuOrrG1nLXL/0WZ4oZ6KiZXLvNGM5ldFKK', 'user', 'img_0894.1527204152.jpg', 'webroot/files/Users/photo/', '301426', ' ', 'https://www.facebook.com/dxldabeat/', 'https://twitter.com/DXLDABEAT', 'https://www.instagram.com/dxldabeat/', 'https://www.youtube.com/channel/UCmyjH2wc6tPjw6T1D', '85 montgomery avenue', 'NJ', '07111', 'United States', 2, NULL, '2018-05-24 23:04:13', '2019-09-08 23:06:51', 0),
(37, 0, 0, 0, '', '', 'Machinee21 ', NULL, NULL, NULL, '', '$2y$10$3Uop9i3Cyz3mijeh8oXKyuMPO99770vbniD902pHHL0pMGInHnIka', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-05-25 08:53:10', '2018-05-25 08:53:10', 0),
(38, 0, 0, 0, '', '', 'ochei Stephen emeka', NULL, 'emekagava', 'beyondif@yahoo.com', '', '$2y$10$gwPEEuOtxgWUuKeS5GT2teDZhgfG3kf08eOQ06iDsOwSdy3HHX7UO', 'user', 'img_20180301_053406_498.1527922865.jpg', 'webroot/files/Users/photo/', '123676', ' Just a simple guy with a passion for music ', 'emekagava', 'emekagava', 'emekagava', '', '', '', '', '', 2, NULL, '2018-05-25 08:59:11', '2018-06-02 07:01:05', 0),
(39, 0, 0, 0, '', '', 'ochei Stephen emeka', NULL, NULL, NULL, '', '$2y$10$iKp1jOGDfswIWrnCoxZcweD7PpyfTXcvoI8oaojGgnDZnoeNlB0Jm', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-05-25 08:59:35', '2018-05-25 08:59:35', 0),
(40, 0, 0, 0, '', '', 'David Kinho ', NULL, NULL, 'jaydokinho@gmail.com', '', '$2y$10$6sbcN07nYp/0i2.GQzu0YOj0BMQ6.Pepw/Ko3nS1ZyH9RpyBqqKQq', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-05-25 10:54:45', '2018-05-25 10:54:45', 0),
(41, 0, 0, 0, '', '', 'kingsley jade', NULL, NULL, NULL, '', '$2y$10$uZqQwCy2iVgQtt0JQjf8IuAwx1X5L5NfP2GqaEH4jXHpqNvonWGzG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-05-25 22:57:14', '2018-05-25 22:57:14', 0),
(42, 0, 0, 0, '', '', 'ugwu collins ', NULL, 'xswaggz', 'swaggzmich@gmail.com', '08169298039', '$2y$10$OqUYptIletVv/nEVnVNIU.77xSydgKkhlwoFKrhQpWqSdUC7gPcRe', 'user', NULL, NULL, NULL, ' ', '', 'xswaggzofficial', 'xswaggz_official', '', '', '', '', 'Nigeria', 2, NULL, '2018-05-26 09:36:03', '2018-05-28 00:36:37', 0),
(43, 0, 0, 0, '', '', 'ugwu collins onyekachi', NULL, NULL, NULL, '', '$2y$10$9Y4tBq1grXI.C0h4BjUPtu13VnRVuRVoHM61P4J9f6iBF1HcVbBc6', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-05-26 09:36:57', '2018-05-26 09:36:57', 0),
(44, 0, 0, 0, '', '', 'Jemi_therapper', NULL, NULL, 'hardewaleyprince16@gmail.com', '', '$2y$10$1ylsE476wiEVH6URsrxp0uvennGC75SoCuMF1YOpuEXZ0hzX..C2e', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-05-26 11:32:29', '2018-05-26 11:32:29', 0),
(45, 0, 0, 0, '', '', 'Soso', NULL, NULL, NULL, '', '$2y$10$50bbILPEnjVW.ZkPhYLAXuIkR9qQjCLIzgv70Z8XvMVpoC6daPvO.', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-05-26 12:47:20', '2018-05-26 12:47:20', 0),
(46, 0, 0, 0, '', '', 'Monkey Beat ', NULL, 'Monkey Beat ', 'monkeybeat111@gmail.com', '+2349094476957', '$2y$10$ek7u32tYPFcOmoO7F6GoROqNxeAMNAeBaErgK/9FxaB89ZniLRnKm', 'user', 'fb_img_1527361116951.1527361435.jpg', 'webroot/files/Users/photo/', '21504', ' ', '@monkeyonthebeat ', '@MonkeyBeat_', '@monkeyonthebeat ', '', 'No 31 moshobolaje ago Palace way okota Lagos', '', '', 'Nigeria ', 2, NULL, '2018-05-26 18:41:54', '2019-01-18 18:57:49', 0),
(47, 0, 0, 0, '', '', 'David Donkk', NULL, NULL, 'dkdonkeke@gmail.com', '', '$2y$10$4qjokfT71bySI8.cTthjWOCT7CfexA6j1dSI3t63lxlpDl6NJoRZO', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-05-30 11:54:23', '2018-05-30 11:54:23', 0),
(48, 0, 0, 0, '', '', 'Bayo Ejike', NULL, NULL, 'freaksonar@gmail.com', '', '$2y$10$9XfKcSE0xq3lNY7WnvMFzuLMjETYxx1kzQ33wiDj0pAbJiMzy9YZ6', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-06-01 17:27:28', '2018-06-01 17:27:28', 0),
(49, 0, 0, 0, '', '', 'Dolapo YMTRISING', NULL, NULL, NULL, '', '$2y$10$ycSHxh7aMJu6qeQdYLxDGO8N/cNMG8sZjnwYhwylPvlbPA4u2D6Gy', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-06-02 12:32:33', '2018-06-02 12:32:33', 0),
(50, 0, 0, 0, '', '', 'Ghanz Lyte', NULL, NULL, 'ganzlite@gmail.com', '', '$2y$10$f.Y7B467XJ2Uo3kD7rlZGOYrV1s9dt3OtO5XagZtcgmja1ks0.OV2', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-06-02 14:18:08', '2018-06-02 14:18:08', 0),
(51, 0, 0, 0, '', '', 'Ghanz Lyte', NULL, NULL, NULL, '', '$2y$10$brhBKaKjXicMLtuJe75rEeJv4rMm5l/c4X4UXdbfDBjkI8XF0xi/y', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-06-02 14:24:05', '2018-06-02 14:24:05', 0),
(52, 0, 0, 0, '', '', 'Umoh Emmanuel ', NULL, 'OG Production', 'officialogproduction@gmail.com', '', '$2y$10$9Ut4p.1rM/jEM3PZeQAMjuVugoDmoD11O6b3p7qCCbKISR9UCxtYq', 'user', 'img-20180131-wa0022.1530403361.jpg', 'webroot/files/Users/photo/', '76775', ' ', '', '@og_production_ ', '@og_production_ ', '', '', '', '', 'Nigeria', 2, NULL, '2018-06-02 20:52:13', '2018-07-01 00:02:40', 0),
(53, 0, 0, 0, '', '', 'Melvin Jay', NULL, NULL, NULL, '', '$2y$10$N6f/RQRVt7zMhXIkMv6/7uc4ccmUwVEMeGeHOH79eA1AuTWPutFSG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-06-04 09:11:26', '2018-06-04 09:11:26', 0),
(54, 0, 0, 0, '', '', 'Mbelu Melvin', NULL, NULL, 'mbelumelvin@gmail.com', '', '$2y$10$lqr2yTKshvO0/YTb3deVbupHJxcdsTkvOIliZjz2Z64FzDmYgUo4e', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-06-04 09:18:02', '2018-06-04 09:18:02', 0),
(55, 0, 0, 0, '', '', 'J-Mussilini Bricks', NULL, NULL, 'Jbricks147@gmail.com', '', '$2y$10$zLGDyJTy0jbAkPfpsMdfOOJjYp.7pHW30BV5T9ylVA03Ffy4qABuu', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-06-04 09:29:27', '2018-06-04 09:29:27', 0),
(56, 0, 0, 0, '', '', 'Kiki linkz', NULL, NULL, 'Kayodekiki4@gmail.com', '', '$2y$10$Ohf3HcSPAXYg8Kbzzch1geOrPYX/Zm/uc3sW.h6.XDWOwojjn5FFG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-06-04 19:58:44', '2018-06-04 19:58:44', 0),
(57, 0, 0, 0, '', '', 'E FLOWZZ', NULL, NULL, 'godwinemmanuel286@gmail.com', '', '$2y$10$yzjldhyyXP6PyfjDdrSbruptPBAHAiE.rNELIQL16Zr0/115gAobG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-06-04 20:36:35', '2018-06-04 20:36:35', 0),
(58, 0, 0, 0, '', '', 'Ajibesin Richard Damilola ', NULL, NULL, NULL, '', '$2y$10$z.DjI.9D30BqpToHzubgwuWmfVBMmIKFEzHV.Ec5QNCIrPeqWBUeO', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-06-04 21:38:45', '2018-06-04 21:38:45', 0),
(59, 0, 0, 0, '', '', 'temidayo makinde daniel', NULL, 'checkmate', 'tomidreazy@gmail.com', '+2348146029183', '$2y$10$jCO5l2p/hWAtlrQOFN4uNeyEuu58g.//6NkCu1rMp9aZ4WVZf/7kO', 'user', 'db7b8770-3a24-4b1c-9a2d-2364be601abe.1528157236.jpg', 'webroot/files/Users/photo/', '43962', ' ', 'https://www.facebook.com/Checkmate-fanpage-1643314', '', 'https://www.instagram.com/iamofficial_checkmate1/', '', '', '', '', 'nigeria', 2, NULL, '2018-06-04 23:50:10', '2018-06-05 00:19:26', 0),
(60, 0, 0, 0, '', '', 'temidayo makinde daniel', NULL, NULL, NULL, '', '$2y$10$ebs395dyCYXKNAoqlQ71P.5BEHVRmi4VeNbVosZOk5oh2Am0wKEya', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-06-04 23:52:30', '2018-06-04 23:52:30', 0),
(61, 0, 0, 0, '', '', 'ratiog', NULL, 'Rings', 'ratiog3@gmail.com', '+2348063061552', '$2y$10$MdN0HpRHpZB24RGLB7ZPtOkpGLT/az5gIc7WH/d1/DL6RalVsqByq', 'user', '47371f470a6f48f4e8dc4fa70d4aabf8_1548502306.jpg', 'webroot/files/Users/photo/', '18162', 'computer scientist / web guru / ace producer / song writer', 'facebook.com/ratiog', 'twitter.com/ratiog', 'instagram.com/ratiog', 'youtube.com/ratiog', 'Abuja', '', '', 'Nigeria', 2, NULL, '2018-06-06 00:28:02', '2018-06-06 00:51:10', 0),
(62, 0, 0, 0, '', '', 'David Noiki', NULL, NULL, 'noikidavid@yahoo.com', '', '$2y$10$VeHpWUwKxLkvy17eah5qAuWuE5el7s4uZ6znPESWUfWeZfdhuntXO', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-06-06 08:53:02', '2018-06-06 08:53:02', 0),
(63, 0, 0, 0, '', '', 'Folorunso sunshine ', NULL, NULL, 'olu0909898@gmail.com', '', '$2y$10$JfEg6D5LQApPwPlgVpqmuemXc0NOugM3kZJ6UJsXa5z3lzHrY57pW', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-06-08 03:48:10', '2018-06-08 03:48:10', 0),
(64, 0, 0, 0, '', '', 'Corjod', NULL, NULL, NULL, '', '$2y$10$txrQbsSXyG5v6JZxD5RqHu78fcIFSEnJMvZQMxeish2S0tAKaWZ/K', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-06-09 13:08:37', '2018-06-09 13:08:37', 0),
(65, 0, 0, 0, '', '', 'Obed Eligwedire', NULL, 'Obed Eligwedire', 'obedeligwedire@gmail.com', '08095750967', '$2y$10$/QuojLKyYG4/t8BQY7J1Fu3PkFyrvhwG.GsRuQBrY3.p.NkNCb/nG', 'user', 'img-20170318-wa0000.1528550724.jpg', 'webroot/files/Users/photo/', '43276', ' ', 'www.facebook.com/obed.eligwedire', 'www.twitter.com/ObedEliwedire', 'www.Instagram.com/eligwedireobed', 'www.youtube.com/obedeligwedire', '', '', '', 'Nigeria', 2, NULL, '2018-06-09 13:09:23', '2018-06-09 13:25:24', 0),
(66, 0, 0, 0, '', '', 'Corjod', NULL, NULL, 'cherylmissy@yandex.com', '', '$2y$10$ZrVYxiGevZf1jsTcRL5Lcul1DcMy28L1cLdJm8BIXZzKvBixa.ISq', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-06-09 13:10:53', '2018-06-09 13:10:53', 0),
(67, 0, 0, 0, '', '', 'Joevi', NULL, NULL, 'joevibanks@gmail.com', '', '$2y$10$dUsj0PxftqtL4URDiseA1OZUSZMhllhmNcHuzxE4RXAtYohbARpa.', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-06-11 07:17:57', '2018-06-11 07:17:57', 0),
(69, 0, 0, 0, '', '', 'ARINZE', NULL, 'Trila', 'Trilajackofalltrade@gmail.com', '', '$2y$10$9BwMJuRK1u8R8IUJuHX3pOC.8mlf3KNThVBfJxRINMaTyKGGgb9m6', 'user', NULL, NULL, NULL, ' ', '', '', '', '', '', '', '', 'Trilajackofalltrade@gmail.com', 2, NULL, '2018-06-15 19:03:50', '2018-06-15 19:09:15', 0),
(70, 0, 0, 0, '', '', 'Rhymeline', NULL, 'Rhymeline', 'rhymelineayomide5@gmail.com', '09071498824', '$2y$10$T9BNBXAfimgeG0kL4UXJDe6b5P2hL2Zbu2RBhTW5tf0IKluQIlpRO', 'user', '36813592_1883870938323393_4923630017121878016_n.1531313428.jpg', 'webroot/files/Users/photo/', '133470', ' I am rhymeline Ayo  from Lagos nigeria , I am a artist and Music producer . +2349071498824 rhymelineayomide5@gmail.com', 'Ayo Rhymeline ', '@rhymeline1', '@rhymeline', '', '', '', '', 'Afghanistan', 2, NULL, '2018-06-21 08:20:04', '2018-07-11 12:50:28', 0),
(71, 0, 0, 0, '', '', 'Danson Davidson', NULL, 'Davidson beatz', 'davidsonbeatz@gmail.com', '+2348084989342', '$2y$10$N.YYscnUvyOWmeYLqo7ahOgrL.uNp.KtRaiwWwf.q5PzrY7zDgXjy', 'user', '33900772_212749522862011_9110237465792217088_o.1529628384.jpg', 'webroot/files/Users/photo/', '108563', ' I\'m a music producer of all genres', 'Www.facebook.com/davidson.danson.3', '', '', '', '', '', '', 'davidsonbeatz@gmail.com', 2, NULL, '2018-06-21 23:39:12', '2018-06-22 00:47:28', 0),
(72, 0, 0, 0, '', '', 'Danson Davidson', NULL, NULL, NULL, '', '$2y$10$7hulv3S.uFBkdD8zdcJJfuh3MJ6LDnl3uHXlIcmG7PqFLWTDUNFGe', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-06-21 23:39:59', '2018-06-21 23:39:59', 0),
(73, 0, 0, 0, '', '', 'Fayoda Oluwatobi ', NULL, NULL, NULL, '', '$2y$10$g6E9k2l7NKgCn99K0RBoFuGymj4zkASaHDJUtPRAgRI8Z5WzdnYrq', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-06-29 14:29:23', '2018-06-29 14:29:23', 0),
(74, 0, 0, 0, '', '', 'Fayoda Oluwatobi ', NULL, 'Fidexrich ', 'oluawatobifidexfayoda@yahoo.com', '08079589534', '$2y$10$ATW8tBNDeM5jVAq0n8Ht0OlSroWmrBTlFt9.LdBGtARx0PiljqO56', 'user', '6d5af38d-78b7-4dc8-99cc-caa5b5a03916.1530430695.jpeg', 'webroot/files/Users/photo/', '185962', 'I’m fayoda oluwatobiloba Richard...i graduated from European America university.Dominica republican.....Masters degrees in finance from university of Ibadan....ICAN, CICN CIBN...film school sundae film school Paru South America....am a film/music video director...based in Lagos Nigeria ', 'Richard oluwatobiloba Fidex', '@fayodaR', 'Fidexrich', 'https://drive.google.com/folderview?id=1hOMTdGRjai', 'No 5 ikota lekki lagos', '', '', 'oluawatobifidexfayoda@yahoo.com', 2, NULL, '2018-06-30 16:27:35', '2019-01-20 17:22:40', 0),
(75, 0, 0, 0, '', '', 'Kenneth Horsfall', NULL, NULL, 'wecare@kennysoftstudios.com', '', '$2y$10$ttnP.TyPMk52fS1O7qo84uNRywVNAfifQ/rOudfK.IcQA9mYyrg3y', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-07-01 20:49:46', '2018-07-01 20:58:15', 0),
(76, 0, 0, 0, '', '', 'Sleeky. P', NULL, NULL, 'sleekyp7@gmail.com', '', '$2y$10$Qb147a0u1Pk2kJZNsUkAievCZD2Hz3tkHF05giGyXklUtpGv6/ueW', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-07-04 11:40:53', '2018-07-04 11:40:53', 0),
(77, 0, 0, 0, '', '', 'Niphkeys', NULL, NULL, NULL, '', '$2y$10$iG/hRpNJvEO3KBfUr.6C/uPZxbCoQbOLc5WaODxGZz4CAWpgzI3.K', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-07-04 11:41:31', '2018-07-04 11:41:31', 0),
(78, 0, 0, 0, '', '', '', NULL, 'K pillar', NULL, '08187702202', '$2y$10$JeoVYm3CBUsXg2BUthUqdOPKThveABW6kzoXLePcikChiszNovdFO', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-07-07 08:51:25', '2018-07-07 08:51:25', 0),
(79, 0, 0, 0, '', '', '', NULL, 'Original Beaz', 'mailoriginalbeatz@gmail.com', '07066070262', '$2y$10$aloJwwrsdnwj91abJi67CeD7xB862ogy25X7kEPz7od9Gyd82qJQG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-07-07 14:20:18', '2018-07-07 14:20:18', 0),
(80, 0, 0, 0, '', '', '', NULL, 'Kay Flow', 'freaksonarstudios@gmail.com', '09099224985', '$2y$10$9bgnvyX2N3tfK269i5GrPezhVG0B6/NExsFZLfBxiFdkMWODYGQKq', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-07-07 21:50:19', '2018-07-07 21:50:19', 0),
(81, 0, 0, 0, '', '', '', NULL, 'K pillar 3', 'kolapillar@gmail.com', '08187702202', '$2y$10$RBm.CLhdv9iT/uSn.FyDbuCjY1LLarhtuZeC6O4Cdyu9wf5Qoy9tS', 'user', NULL, NULL, NULL, 'The baddest producer is here  ', '', '', '', '', '', '', '', 'Nigeria', 2, NULL, '2018-07-08 05:34:34', '2018-07-08 05:58:17', 0),
(82, 0, 0, 0, 'Stryka', 'Mba', '', NULL, 'Stryka', 'strykabeats@gmail.com', '08065280652', '$2y$10$HZin7vIWOlUT.ngpVCLEzOlHgTTCW7EeP9pCCxH1K0.rUrGgS2qWO', 'user', 'img-20170923-wa0001.1532681046.jpg', 'webroot/files/Users/photo/', '34530', 'Put your headphone on when going through my profile.', '', '', 'Strykabeats', 'Strykabeats ', '', '', '', 'Nigeria', 2, NULL, '2018-07-09 21:42:14', '2018-08-22 21:51:59', 0),
(83, 0, 0, 0, '', '', '', NULL, 'BeatBySydney', 'Dopseudofia@gmail.com', '08140198305', '$2y$10$t2napaQnoujN5Q2GYVzIJOJc95AjTKwc6FWTFFo7i8TiJnBpXDI2S', 'user', NULL, NULL, NULL, 'Smartest, funniest and most intelligent producer you\'ll ever meet.Hit me up let\'s make hits and money together', '', '@beatbysydney', '@beatbysydney', '', '', '', '', 'Nigeria', 2, NULL, '2018-07-10 10:38:42', '2018-07-10 11:53:34', 0),
(84, 0, 0, 0, '', '', '', NULL, 'Wize', 'wizeinthebeat@gmail.com', '08061328255', '$2y$10$xjhv1tq6C/OeBYVnAirZEu8sJgb6eWA731FW0dBVzhNEhlr8.6bIy', 'user', 'img-20180419-wa0009.1531384170.jpg', 'webroot/files/Users/photo/', '91297', 'Wize is a music producer and jazz pianist .', '', '@wizeinthebeat', '@wizeinthebeat', 'Wizebeat', '', '', '', 'Nigeria', 2, NULL, '2018-07-12 07:51:26', '2018-07-12 08:29:29', 0),
(85, 0, 0, 0, 'Slynfit', 'Joe', '', NULL, 'slynfit', 'slynfit_joe@yahoo.com', '07068782258', '$2y$10$eUzoNg0NMD7Mvdu5SJyQS.p3ovGrsA7l.jlpS55rwhbMfFotSn.ym', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-07-17 08:21:20', '2018-07-17 08:21:20', 0),
(86, 0, 0, 0, 'Charles', 'John', '', NULL, 'dove', 'charles.johndove@gmail.com', '08161679408', '$2y$10$qwXvNabXTY/FDhNwmQZ16.Uwj2wL/G1nv1xKOtdaonqeJipOQngs6', 'user', NULL, NULL, NULL, ' A talented singer and a dauntless song writer.', 'https://www.facebook.com/dove4lovemusic', 'https://twitter.com/CharlesJohndove', '', '', 'Apapa, Lagos.', '', '', 'Nigeria', 2, NULL, '2018-07-17 13:45:08', '2018-07-19 12:22:28', 0),
(87, 0, 0, 0, 'Ashade', 'Samson', '', NULL, 'Kronik', 'kronikproducer@yahoo.com', '07053804360', '$2y$10$zMdNpyG93taB.ORJUb.o6.bXPtQbINDoALp3GHkQePAGHSkw44Lbm', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-07-17 18:47:03', '2018-07-17 18:47:03', 0),
(88, 0, 0, 0, 'Edevbie ', 'David', '', 'Music Producer', 'Dreyleine ', 'edevbiedavid0@gmail.com', '08021421794', '$2y$10$cecyw6dxluc7m9VXZK58YOpUffXFlvgFe8J2Dua3XVzFHwLS.Xp6.', 'user', NULL, NULL, NULL, '', '', '', 'https://www.instagram.com/dreyleine_nl', '', 'Surulere', 'Lagos state ', '', 'Nigeria', 2, NULL, '2018-07-19 04:28:45', '2019-06-26 08:57:29', 0),
(89, 0, 0, 0, 'Joseph', 'Etim', '', NULL, 'Jayricz', 'etimjosephmichael@gmail.com', '08189462899', '$2y$10$wwQ.Hxo.wnOXgB.7S4BwNuOjfbHhIoXKiM9r0o79e7F5JmsNJj.Im', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-07-19 11:16:56', '2018-07-19 11:16:56', 0),
(90, 0, 0, 0, 'Othniel ', 'Osakwe ', '', NULL, 'LeoneBeatz', 'saskymalimusic@gmail.com', '09058138702', '$2y$10$LFyqtf2spSh2sEFbGlO1seWmzF1BS1qWr0diFIL7mq/XLV4LnzXgm', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-07-21 12:05:23', '2018-07-21 12:05:23', 0),
(91, 0, 0, 0, 'Ebube', 'Echefu', '', NULL, 'Kezzi', 'kezzisamuel@gmail.com', '+2348153454389', '$2y$10$eOuP5w/fpa/D.yCW.Rue9OnK.Qz2S0XLDeq6nCPmg0mx0.A8P3eUe', 'user', '4e5fcc6823a4cb8ae1f382bb3f6f6325_1548501679.png', 'webroot/files/Users/photo/', '630132', 'Ebube Samuel Echefu (born September 21, 2002), better known by his stage name Kezzi, is a Nigerian record producer and musician. Born in Festac Town, Lagos State, where he began music production at age twelve. He is known for the tag “Young Producer Kezzi” at the beginning or end of all his music productions. He was born into a family of four children. He is a Christian.\r\nHe is an open-minded person who is always excited to learn new things. He loves to see others achieve their goals.\r\nHis productions include “Shake It Up” by Davion, “Million” by Birdboy, “Laga” by Davion, etc. He was awarded best in music and best pianist and violinist by Radiance Primary School in 2014.\r\nHe fell in love with music at a young age. He started playing violin from eight years old. He joined the school band at age nine. But he wasn’t satisfied. He wanted to be able to play all the instruments the way he constructed them in his head and he wanted to play them at the same time, so he went into music production where he would be in control of all his sounds, express himself and create unique vibes.', '', 'www.twitter.com/iamkezzi_', 'www.instagram.com/iamkezzi', 'https://www.youtube.com/channel/UCgl9s4rLYKi3Dlw0t', 'House 3b, U close, 21 Road, Festac Town.', '', '', 'Nigeria', 2, NULL, '2018-07-21 23:40:33', '2018-07-22 21:17:20', 0),
(92, 0, 0, 0, 'Dembo', 'Abdulquddus', '', NULL, 'AMD', 'qobiddom@gmail.com', '09079740398', '$2y$10$k0oq5khg9CCw0gxvLwrn9uxlKr.uYvDa18iqDv7TmMne7Bj2F8ttS', 'user', 'b3b4391285bf96012d8dab184bd237f6_1548502113.jpg', 'webroot/files/Users/photo/', '1785763', '', '', '', 'qobiddom_abd', '', 'Area 2', '', '', 'Nigeria', 2, NULL, '2018-07-22 08:55:05', '2018-07-22 17:58:37', 0),
(93, 0, 0, 0, 'TC', 'Flexbeats', '', NULL, 'TC FLEXBEATS', 'tcflexbeats@gmail.com', '08097866451', '$2y$10$YbI3Ozbzj4RgfE6zYlqcoO9X54Jhs/LSy3peiXdEXQmoYI1IkNvSa', 'user', 'picsart_12-05-12.1532275881.jpg', 'webroot/files/Users/photo/', '66420', 'Music producer', '', 'TC_Flexbeats', 'tc__flexbeats', '', 'Abuja', '', '', 'Afghanistan', 2, NULL, '2018-07-22 16:03:16', '2018-07-25 13:49:42', 0),
(94, 0, 0, 0, 'Osagie ', 'Guobadia ', '', NULL, 'SlimG', 'guobadiaosagie77@gmail.com', '07085735327', '$2y$10$ycuLxYhxjerAZer2cg7PnOPGJ9Li/xkmIjX4/asKcuW24J7imzVWi', 'user', NULL, NULL, NULL, 'Producer ????', '', '', '', '', '', '', '', 'Nigeria', 2, NULL, '2018-07-22 21:10:38', '2018-07-23 18:55:37', 0),
(95, 0, 0, 0, 'ogundipe', 'Abayomi ', '', NULL, 'freshkid boy', 'ogundipeabayo2018@gmail.com', '08163246473', '$2y$10$2dUotFzj3mFNVc4Y0M11BONZUsQBM.NfUdc2ScmlAy1hlGICoDHbm', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-07-23 13:41:36', '2018-07-23 13:41:36', 0),
(96, 0, 0, 0, 'Endeetone', 'D\'beatlord', '', NULL, 'Endeetonebeatz224', 'endeetonebeatz224@gmail.com', '08133413555', '$2y$10$jFLcvN3Lcgqf19fyvfaJC.HldXlL8B1VW5KNH.c3vX3g5F0u02E/a', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-07-23 16:47:33', '2018-07-23 16:47:33', 0),
(97, 0, 0, 0, 'Emana', 'Saintly', '', NULL, 'Icebeat', 'chillingschillings@gmail.com', '07036895151', '$2y$10$PYaVv1ZA.EK8CmDAVKLiu.Q3fgCvzH7IzAMq6btyUY7u8g9MDPkMC', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-07-23 20:38:43', '2018-07-23 20:38:43', 0),
(98, 0, 0, 0, 'Peter ', 'Joseph ', '', NULL, 'Eface ', NULL, '+2348166349214', '$2y$10$MaOSJ.Bs5hK/Wjd6MQypl.r1N9mrQWG/aGdk4HQvgBG5XQdC/.X8u', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-07-23 21:11:17', '2018-07-23 21:11:17', 0),
(99, 0, 0, 0, 'Abe', 'Samuel ', '', NULL, 'Ayan Sam ', 'thesuperstarproducer@gmail.com', '08064017548', '$2y$10$Vfm7qHOU8rANoyFZtmusEOgKMoqTVBQrd4KGeCB/KuBUEx5.xnxOy', 'user', '_dsc9944-1.1532814384.jpg', 'webroot/files/Users/photo/', '3147429', '', '', '', '', '', '', '', '', 'Nigeria', 2, NULL, '2018-07-23 21:54:23', '2018-07-28 21:46:24', 0),
(100, 0, 0, 0, 'kazeem', 'taiwo', '', NULL, 'kaycekeys', 'kkaycekeys@gmail.com', '08115890388', '$2y$10$r4jfMRnk.U8n5/UPfKEa3eja7zr.4k2oK1wt4wPExfTViccBw6Odu', 'user', NULL, NULL, NULL, '', '', '', '', '', 'n0 4, seidu ajibowu', '', '', 'Nigeria', 2, NULL, '2018-07-24 00:02:16', '2018-07-24 00:21:10', 0),
(101, 0, 0, 0, 'Zeali', 'Zion', '', NULL, 'Mr Zeali', 'ikponmwonba.isaac@gmail.com', '09052792459', '$2y$10$tpAj.tNMHQH/J76zGwpEiefLPiD.yylGkeXTAmD6m2BiUtPM3hpGe', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-07-24 13:39:19', '2018-07-24 13:39:19', 0),
(102, 0, 0, 0, 'Ibikunle', 'Oluwatobi', '', NULL, 'Sownickbeatz', 'endyjeff@gmail.com', '08149463006', '$2y$10$kOuG96TVPrBZojHlpQekCu.1NNnUhtH.WwwlNFgBJvb6uDZjCx1NW', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-07-26 08:19:56', '2018-07-26 08:19:56', 0),
(103, 0, 0, 0, 'May', 'Owoyele', '', NULL, 'May Owoyele', 'Owoyelebeckley@yahoo.com', '08130263052', '$2y$10$HfqCw2Mn2NGB39/lpf3w5unDorBLSmaakBYlXwIuySgQSi88lm/W6', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-07-26 22:01:52', '2018-07-26 22:01:52', 0),
(104, 0, 0, 0, 'wole ', 'Aina', '', NULL, 'wols', 'wols.ondbeat@gmail.com', '08038307909', '$2y$10$FVpEhNoSPhbJ0r9yZ8NKluMRpBP1OUsYjCnfDCnMrvGJPbvHheVXu', 'user', NULL, NULL, NULL, '', '', '', 'wols___', '', '', 'Lagos', '00176', 'Nigeria', 2, NULL, '2018-08-04 16:10:55', '2018-08-29 17:38:30', 0),
(105, 0, 0, 0, 'Babasola', 'Davies', '', NULL, 'Babzii D', NULL, '08146803341', '$2y$10$Iem78kCLhMYbJIIbTduEpuI8f50/r.AhUDs12FKUu/MSM9EDIa5SG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-08-05 20:10:16', '2018-08-05 20:10:16', 0),
(106, 0, 0, 0, 'Babasola', 'Davies', '', NULL, 'Babzii D (Pappicci)', 'babasoladavies@yahoo.com', '08146803341', '$2y$10$OGtTVChdvGa4Sv2mewbAzOJOQYoPrZhS9pPZBhhMWwP.4DzTwBwmW', 'user', '5701499a-07ca-4a57-9101-c172022f242f.1533741395.jpeg', 'webroot/files/Users/photo/', '1278817', 'Everything but a rapper. An in house producer who has worked with budding underground talents such as Alphatryyb, Blvcksheep and Young African Movement artists. The sounds we hear from this producer are always quite on a different level. He plays with quite a variety of genres as far as one can tell, predominantly a hip hop and urban Afro-pop lover, Babzii D seems to always give his listeners something they’d loved to listen to again and again. ', '', '@i_am_babz', 'www.instagram.com/babzlately', '', '', '', '', 'Nigeria', 2, NULL, '2018-08-05 20:14:50', '2018-08-09 18:50:40', 0),
(107, 0, 0, 0, 'Babasola', 'Davies ', '', NULL, 'Pappicci 23', NULL, '08151102246', '$2y$10$5STnVtEUmSZ6Gn1p7fk1z.VMUurMBnwURpM0pDpt9lHqc8oF95PsK', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-08-05 20:19:12', '2018-08-05 20:19:12', 0),
(108, 0, 0, 0, 'Henry ', 'ONEBUNNE ', '', NULL, 'ONEBORN', 'henry.onebunne@gmail.com', '07030052585', '$2y$10$99t7RJiXFhHE0OrUza46veBxY/yy/VQvPXV375BdfQOCGm.FtW0Oy', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-08-08 20:16:32', '2018-08-08 20:16:32', 0),
(109, 0, 0, 0, 'Peter', 'Harrison', '', NULL, 'Harry pee', 'peterharrison258@yahoo.com', '+2348071970037', '$2y$10$pCkfRnkguZWONRFhPs9gxuMlrdJSmf/IniABnMzFpCDi16MBxMz4S', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-08-10 09:08:51', '2018-08-10 09:08:51', 0),
(110, 0, 0, 0, 'Adekunle', 'Ayomide', '', NULL, 'V.T.X.', 'adekunleayomide97@gmail.com', '08074344400', '$2y$10$FmhJ0D4uny6UOrfZKkHWIupELj8hIngqs9fFHsSGJoQRP5QAkv6Dy', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-08-11 09:13:40', '2018-08-11 09:13:40', 0),
(113, 0, 0, 0, 'DJ', 'BENTOZ', '', NULL, 'DJ.BENTOZ', 'siizatv@gmail.com', '09096494673', '$2y$10$a/fFGp3vfbIv9dRzZ2cInOsw0KAvJID5Q6oH0Dzl3bX2hdegYDiOW', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-08-14 08:36:44', '2018-08-14 08:36:44', 0),
(114, 0, 0, 0, 'Babatope', 'Samuel Tolulope', '', NULL, 'Samotee', 'Itzsamotee@gmail.com', '08165515560', '$2y$10$LWXaQfysD1ZtGTVqtmQrNetWPcDKEYXcQ/w5Vu91q2HurBPcnYqt.', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-08-14 10:12:35', '2018-08-14 10:12:35', 0),
(115, 0, 0, 0, 'Ogah', 'Shadrack', '', NULL, 'Sheydrey', 'sheydrey@gmail.com', '07012696264', '$2y$10$dHJmIePg7izgkDOgLR8iIOsTMcl5WmNPQgQd5qa80FsXP/0/s7s4O', 'user', 'img_20181002_130450_809.1539750525.jpg', 'webroot/files/Users/photo/', '96744', 'Ogar Shadrack (born 20 March 1996), better known by his stage name sheydrey is a Nigerian hip hop.afro artist and a music producer ', 'Sheydrey ogar ', '', 'Sheydreyogar', '', '', 'Abuja', '', 'Nigeria', 2, NULL, '2018-08-14 16:14:09', '2018-10-17 05:33:25', 0),
(117, 0, 0, 0, 'joseph', 'moyo', '', NULL, 'rejoicebeat', 'rejoicebeat@yahoo.com', '08188117873', '$2y$10$joHKZRAl7Mcb8dYSEgBeX.Lmem4EmUV3QT.EUenMOK178i1aX/Ymm', 'user', 'img_5935.1534885011.jpg', 'webroot/files/Users/photo/', '113527', '', '', '', 'Rejoicebeatz', '', '', '', '', 'Afghanistan', 2, NULL, '2018-08-14 22:01:17', '2018-09-07 15:55:08', 0),
(118, 0, 0, 0, 'Toyin ', 'Odebiyi ', '', NULL, 'Jerry Sweet ', 'Odebiyi62@gmail.com', '08067629514', '$2y$10$8o0jz9eaZFGSivhanCBYVu/E59sZw7Y.Tj6w11qC8uOAwIHQPiVMS', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-08-14 22:12:02', '2018-08-14 22:12:02', 0),
(119, 0, 0, 0, 'Finebone ', 'Denis ', '', NULL, 'Youngm', NULL, '08133432335', '$2y$10$4rgpsFcMv5VZIEv30YAheOI/rDod2XZdCHa8Yf3UCX95MRlqiDROK', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-08-16 08:20:50', '2018-08-16 08:20:50', 0),
(120, 0, 0, 0, 'Jason ', 'Strauss ', '', NULL, 'Tamlu', 'jastrausexpress345@gmail.com', '09056308920', '$2y$10$UnBTA72TnHKqEMbYvROWvOLWnBuVssGP/8yODVJEoeYohHGp..HDy', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-08-18 10:06:01', '2018-08-18 10:06:01', 0),
(121, 0, 0, 0, 'Jason ', 'Strauss ', '', NULL, 'Tam lu', NULL, '09056308920', '$2y$10$6dy8.AFOpbWPFQbi4iv16.E3gJ/pP5.Tqy.7yf8dMBfabJ3tooiQy', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-08-18 10:07:56', '2018-08-18 10:07:56', 0),
(122, 0, 0, 0, 'Emmanuel ', 'Chijioke ', '', NULL, 'Emmashyne ', 'iamemmashyne@gmail.com', '07067442551', '$2y$10$QbSPdgQJxEClS8/uD3LxquzbrtKndct.lRBXTm/oQv6mT1ujM..D6', 'user', '80f6e9d5-c7f5-4451-9edb-0ccd7a77edfb.1535141811.jpeg', 'webroot/files/Users/photo/', '147681', '', '', '', '', '', '', 'Lagos ', '23401', 'Nigeria', 2, NULL, '2018-08-24 18:06:24', '2018-08-24 20:16:50', 0),
(123, 0, 0, 0, 'Tejiri', 'blaze', '', NULL, 'DjTejiriblaze', 'blazetejiri@gmail.com', '07037252588', '$2y$10$pNsX4pGQ5DGb8QPXFopz8u9b.CQdBCrw6j5CjTRg9K/L0Z.jv7VCu', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-08-26 20:44:35', '2018-08-26 20:44:35', 0),
(124, 0, 0, 0, 'Omoniyi', 'Michael', '', NULL, 'Zyrx', 'mrpacz.om71@gmail.com', '08164930835', '$2y$10$Tx0VzmU3/1GZMPuvhtKnH.7BzhmTpGKir9.6aYpihLdved7usIUiq', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-08-26 23:31:32', '2018-08-26 23:31:32', 0),
(125, 0, 0, 0, 'Adewale', 'Kayode', '', NULL, 'KayZ', 'adewaleadeyinka2016@gmail.com', '09020006376', '$2y$10$ciWU2OVebzKfh8DibVwxsem0s9Bd8wgRwSzAvDnLxoOuEjszUmYGe', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-08-27 02:40:12', '2018-08-27 02:40:12', 0),
(126, 0, 0, 0, 'Yomi', 'Adebambo', '', NULL, 'Big A', NULL, '08059544023', '$2y$10$GU.x6gB8qD/aWPmLenaf4O2/ebt0.aYre5yaE2AkBCTppdLidvgvm', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-08-27 12:35:14', '2018-08-27 12:35:14', 0),
(127, 0, 0, 0, 'Egejuru ', 'Isidore ', '', NULL, 'Izzy', 'egejuruisidoreokechukwu@gmail.com', '07060810055', '$2y$10$Nq4QqF0hxSR4QmcZuOAJHOHi3BV0DXiUSYZOWQYIJa8Tczvdq008O', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-08-28 03:13:07', '2018-08-28 03:13:07', 0),
(128, 0, 0, 0, 'Egejuru ', 'Isidore ', '', NULL, 'Izzy_d_producer', NULL, '07060810055', '$2y$10$JBW94JehbEQ75GUO5O/Gy./nmNOhtBvSiLeIVVGoGGYTlp5T7wTl.', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-08-28 03:15:26', '2018-08-28 03:15:26', 0),
(129, 0, 0, 0, 'babatope', 'ogunsuyi', '', NULL, 'Babat BEATZ ', 'babatee202@gmail.com', '+2348128851831', '$2y$10$quz6pzVr/fZS23eof62zweDftjXXehhoM.0V7mbE6rb4swQNtoew2', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-08-28 11:31:31', '2018-08-28 11:31:31', 0),
(130, 0, 0, 0, 'Victor', 'Momodu ', '', NULL, 'Mular Bands ', 'mularbands@gmail.com', '08137067011', '$2y$10$xrtk2tzs1KNQ.GDS4hY4beA/zxTVmty1IBa7b009/HtNbADcq9Enq', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-08-29 01:28:15', '2018-08-29 01:28:15', 0),
(131, 0, 0, 0, 'Victor', 'Ilechukwu', '', NULL, 'Vilusnaija', 'victorvilox1992@gmail.com', '08108557207', '$2y$10$GMo7HxIfaoh.q/X2N0tLBOKVrUR//YlXkbuGaoV5vrv5xWOpZnq5y', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-08-29 21:18:44', '2018-08-29 21:18:44', 0),
(132, 0, 0, 0, 'Elijah', 'Ayotunde', '', NULL, 'Elicino', 'ojekaleelijah@gmail.com', '08138040306', '$2y$10$hLBvvr6Q7jtVfzZY0cNFremJxiU1TNSNyYSNBiypEZzElk0RqOJ3m', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-09-02 07:07:18', '2018-09-02 07:07:18', 0),
(133, 0, 0, 0, 'Jackson ', 'Okpeku ', '', NULL, 'TheMusicNerd', 'djokpeku@gmail.com', '08179797208', '$2y$10$vQRkT.nYGkOHeAo0vCnmM.qWckurBVdHyGrlU7KtcGu.5diskRz7m', 'user', 'js.1536277721.jpg', 'webroot/files/Users/photo/', '409696', 'A being From the 4th dimension | Lives, Breathes, and makes Music', '', '', '', '', '', '', '', 'Nigeria', 2, NULL, '2018-09-02 10:32:09', '2018-09-06 23:48:41', 0),
(134, 0, 1, 1, 'Bitrus', 'Tarfa', '', 'Music Producer', 'BeeBee_Beats', 'bitrustarfa@gmail.com', '08177074162', '$2y$10$0exKfFwyFpqTXoz4IITaWeP76Y9vMpFo3pRxGoa3X14xhzuaMqZdK', 'user', '623cc0efff5c3bad8725a1c695ef6170_1566007503.jpg', 'Users/photo', '79969', 'My name is BeeBee and I am a very creative African music producer and composer. Please kindly go through my work and hit the buy button.\r\nYou can also reach me for Custom Beats and more HERE: \r\nTwitter: https://twitter.com/BeeBee_Beats\r\nInstagram: https://www.instagram.com/beebee_beats\r\nWhatsApp: +2348177074162', '', 'https://twitter.com/BeeBee_Beats', 'https://www.instagram.com/beebee_beats/', '', '', '', '', 'Nigeria', 2, NULL, '2018-09-03 16:16:34', '2019-09-08 23:07:35', 0),
(135, 0, 0, 0, 'oluwasanya', 'solomon', '', NULL, 'bigfrozzbeat', 'bigfrozzbeat@mail.com', '09057668440', '$2y$10$MgdyjUq.Eltg/aUHxNDyyOO5gE/lE/kiyX0y17B75j4uBNG3cbwmG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-09-07 20:08:51', '2018-09-07 20:08:51', 0),
(136, 0, 0, 0, 'oluwasanya', 'solomon', '', NULL, 'bigfrozzbeats', NULL, '09057668440', '$2y$10$mFQSaGWoKwrD/aXg4AHHkuYiZwUq.fSCZJU.AZa5r5iJsEQA5.0HW', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-09-07 20:13:10', '2018-09-07 20:13:10', 0),
(137, 0, 0, 0, 'Oyewole', 'Tobiloba', '', NULL, 'W4c', 'Oyewoletobiloba82@gmail.com', '08163044664', '$2y$10$44whKQPGbWg9aWgk2hwxMO1LJzcdau6ZKxxXrjOx0WHSCCRbUq0s6', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-09-08 03:44:40', '2018-09-08 03:44:40', 0),
(138, 0, 0, 0, 'Lanre', 'Olanrewaju ', '', NULL, 'XY Beats', 'larryexy@gmail.com', '08093422509', '$2y$10$xSzr/MMovKjt8c5Pibe/o.h9zNymD/zfgVcOWCp7Pa62oE7B5kj42', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-09-08 11:40:03', '2018-09-08 11:40:03', 0),
(139, 0, 0, 0, 'Kelly ', 'John', '', NULL, 'Ugly John ', 'kellyhandsome847@gmail.com', '0705 782 4763', '$2y$10$jOCWkrDw0JgOVXqOoBo.EupOP/1CZwycHCTmEK5MrxVxn68YbUthO', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-09-09 07:42:02', '2018-09-09 07:52:55', 0),
(140, 0, 0, 0, 'Gidyon', 'Morena', '', NULL, 'Morena', 'nilegizmo@gmail.com', '08107132031', '$2y$10$FNzEh4s6F4wyvaSMHy52n.4ItiohaOyIM8n/1ob.GZUDQyyFvEhQq', 'user', NULL, NULL, NULL, 'Music Producer', '', '', '', '', '', 'Lagos', '', 'Nigeria', 2, NULL, '2018-09-10 16:12:17', '2018-09-10 16:16:18', 0),
(141, 0, 0, 0, 'Robert', 'latwul', '', NULL, 'Rheos', 'robertlatwul@gmail.com', '+2349066560813', '$2y$10$gTBTEEARhla/M9IboKYIX.CF87HWGPy8TMENZ.JFxLWFsrfCKK0iC', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-09-11 17:49:25', '2018-09-11 17:49:25', 0),
(144, 0, 0, 0, 'Bebe owasu', 'Bebe', '', NULL, 'Deejay Bebe', 'bebeowasu@yahoo.com', '722872554', '$2y$10$tnq.CrIRCtaT.o8nFxgqzer7s09xjAbJekKpyCu5m6RZpiPCD7x9O', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-09-14 23:16:52', '2018-09-14 23:16:52', 0),
(145, 0, 0, 0, 's', 'k', '', NULL, 'da\'doc', 'e.dadoc88@gmail.com', '6478889999', '$2y$10$Ud/xZvhJ/je5FjsN65xGFOnYbuUwbiyc1WZqe/ubtmIwPkhBHXNMi', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-09-21 00:27:29', '2018-09-21 00:27:29', 0),
(146, 0, 0, 0, 'maduabuchi', 'nnodim', '', NULL, 'eMBee ozurumba', 'abuchinnodim92@gmail.com', '+2349025443375', '$2y$10$PAVSBAC8jjarSMlt1PIITeBXJJ7Wl1VM9viZc6ITCFulCbarE5ur.', 'user', '5ef3f28670a74b80f8a4fa407c4181bf_1548502444.jpg', 'webroot/files/Users/photo/', '95402', 'I am the restless seeker, the man who questions all things. I learn from any and everything (living & unliving). Truth is all I seek. Care to take a ride with me? I am eMBee maduabuchi ozurumba', 'https://mbasic.facebook.com/padropio?refid=8', 'https://mobile.twitter.com/home?lang=en', 'https://www.instagram.com/?hl=en', '', 'No 5 Anike Street, Shogunle, Oshodi Lagos state, Nigeria', 'Lagos', '100001', 'Nigeria', 2, NULL, '2018-09-21 17:00:51', '2018-09-21 17:21:46', 0),
(147, 0, 0, 0, 'Chuks', 'Michael', '', NULL, 'M_ch_blaze', 'chukesmichael.cm@gmail.com', '08166672846', '$2y$10$arLtiA2LQhdUW1j6pkwdnu.ZQjvTHIcklasXwgWIlHWurBvKSR53W', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-09-23 18:40:45', '2018-09-23 18:40:45', 0),
(148, 0, 0, 0, 'Uzoigwe ', 'Collins', '', NULL, 'Ability', 'uzoigwecollins10@gmail.com', '08162261673 ', '$2y$10$WgnkrDHy3bTc/BBZC9djSeLyhsR2EgX4uCTnMVqBwjvK2hR2NLm9W', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-09-25 05:32:05', '2018-09-25 05:32:05', 0),
(149, 0, 0, 0, 'Joshua', 'Nwichi', '', 'Music Producer', 'Chrischords', 'realpianointernational@gmail.com', '9052863723', '$2y$10$DgQou1841fYESGEgtcVm8OhP8yt/xKz05i.SkXPhIjojBTKZdE.U.', 'user', '706f2eba54900ee98070f4c764349dfc_1551184270.jpg', 'Users/photo', '144414', 'My name is Joshua Nwichi. Chrischords is my stage name. I\'m a Music Producer, Keyboardist, Arranger and Music Director. Work with Music Artiste Preye Omayuku. I currently reside in Portharcourt.', 'https://www.facebook.com/Realpiano-International-4', '', '@joshuanwichi', 'https://www.youtube.com/channel/UCe-SO2UZl-r2XDo3Z', 'Farm road 1, Eliozu', 'Rivers State', '50000', 'Nigeria', 2, NULL, '2018-09-25 06:34:12', '2019-02-26 13:31:44', 0);
INSERT INTO `users` (`id`, `power_users`, `is_verified`, `top_producer`, `firstname`, `lastname`, `fullname`, `accounttype`, `aka`, `email`, `phone`, `password`, `role`, `photo`, `photo_dir`, `photo_size`, `bio`, `facebook`, `twitter`, `instagram`, `youtube`, `address`, `state`, `zip`, `country`, `popular`, `membership`, `created`, `modified`, `expired`) VALUES
(150, 0, 0, 0, 'Chibuzor ', 'Nweme', '', NULL, 'Chapsy B’Neza', 'chapsynw@gmail.com', '08101100334', '$2y$10$KHH2U7Z8x4vK/tYsqOhwX.zsavoAIMUTnwXbfnEokUFIm4hcA4MKC', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-09-26 07:59:54', '2018-09-26 07:59:54', 0),
(151, 0, 0, 0, 'stan', 'oseata', '', NULL, 'Stan actur', 'anyekegbe80@gmail.com', '08137536619', '$2y$10$zE0aXR0QBbvBBzQxgw4YveiS05/fLcPh0Jzf36azpd/83pdEqxq4m', 'user', NULL, NULL, NULL, 'A music producer also a sound engr', '', '', 'Stanactur_stan', '', '', 'Delta state', '', 'Nigeria', 2, NULL, '2018-09-26 10:40:45', '2018-09-28 07:30:31', 0),
(152, 0, 0, 0, 'Allan', 'Carew', '', NULL, 'Carew', 'allancarew@gmail.com', '481366540', '$2y$10$HRRrcsnw7fo4i8MmCyoFweDTqDi/yIwLEvpQC3gDQ8fbu239W8FcG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-09-27 22:11:05', '2018-09-27 22:11:05', 0),
(153, 0, 0, 0, 'CHUKWUMA', 'CHUKWUNEKE', '', NULL, 'C4', 'nekemaxi@gmail.com', '+2347059305460', '$2y$10$kkLxJ5jgLWaXNvApFvzhSOgE20FwbxJgFXclDyh8qo2fztVi1ZLiC', 'user', 'd647e46f8af91f8daeec748b810d2a95_1548502050.jpg', 'webroot/files/Users/photo/', '640389', 'eXempt Producer. I make all genres\r\nIG & Twitter: @C4pure \r\nContact me for more Beats or Mixing/Mastering Services', '', 'www.twitter.com/C4pure', 'www.instagram.com/C4pure', '', '', '', '', 'Nigeria', 2, NULL, '2018-09-28 19:11:24', '2018-10-01 06:48:46', 0),
(154, 0, 0, 0, 'Kwaku', 'Boakye', '', NULL, 'Sumguy', 'urbancentral5@gmail.com', '0503036439', '$2y$10$of3D/jutqoyAgVJzkH7SKuWwxfEQr5t5sGlnqzAoYay2OhO19zy3y', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-09-30 19:01:07', '2018-09-30 19:01:07', 0),
(155, 0, 0, 0, 'Chinedu', 'Chukwukelu', '', NULL, 'Marvel', 'Marvelblizful@gmail.com', '08135996200', '$2y$10$YqdLS.B7PbGYQRdkbxLSX.ytHNXRM.piXIJX.sbXFSAzQEBXan1X2', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-01 14:38:25', '2018-10-01 14:38:25', 0),
(156, 0, 0, 0, 'Linda', 'Beattie', '', NULL, 'lindabeattie4071437', NULL, '960 18 720', '$2y$10$ydmPwwUKSYGaLHUWBOG9Je6sHN5pqzXdvK3jtARV.NaknwmZoBdRW', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-03 12:42:16', '2018-10-03 12:42:16', 0),
(157, 0, 0, 0, 'Stacie', 'Bair', '', NULL, 'staciebair75912017', NULL, '06-69569994', '$2y$10$B6xQv5OPUFlNVBCXZZ0hXu5gK5C29uPOwBdkqfXWjHfpZU75quFHW', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-03 19:43:20', '2018-10-03 19:43:20', 0),
(158, 0, 0, 0, 'Lottie', 'Quaife', '', NULL, 'lottienap988540318', NULL, '216-551-2182', '$2y$10$vl.168qcUcdUZLc4w0FiAObcFkc6.iSQowSAgxcW1bqZTEpJLJklO', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-03 23:55:10', '2018-10-03 23:55:10', 0),
(159, 0, 0, 0, 'Iola', 'Tasman', '', NULL, 'iolatasman5956662', NULL, '442 22 513', '$2y$10$aPiw222umEm.hhq0yCSZqeTcE5OVDSHggRarzMEPwTTXuGvUKUZx2', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-04 08:30:58', '2018-10-04 08:30:58', 0),
(160, 0, 0, 0, 'Unplug', 'Beats', '', NULL, 'Unplug Beats', 'unplugbeats@gmail.com', '07085837607', '$2y$10$okwiGGLtrDLGearzQEwzFexb4P2EZIbVqmjNGkvx4S75M4CJJN4gK', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-04 23:57:45', '2018-10-04 23:57:45', 0),
(162, 0, 0, 0, 'FAKTORI', 'ATIS', '', NULL, 'FAKTORI ATIS', 'kreyol_man@hotmail.com', '9548827523', '$2y$10$F6mbOh/ZsoTQBVkUo1EiLurNc8VmbV4ecXXNk/5ny5XaY8X5uIXw.', 'user', '54fd051e-b241-4d51-a9c4-a7ad6d465600.1539054155.jpeg', 'webroot/files/Users/photo/', '1964564', 'FAKTORI ATIS IS A MIAMI BASED HAITIAN,CARIBBEAN AND AFRICAN MUSIC RECORD LABEL AND MUSIC PRODUCTION HOUSE.\r\n WITH THE HELP OF  OUR FAMOUS PRODUCERS ,WE OFFER ORIGINAL BEAT MAKING SERVICE ,FOR A DECENT PRICE.', '', '', '', '', '10447 galleria street WELLINGTON', 'FL', '33414', 'United States', 2, NULL, '2018-10-09 03:02:29', '2018-10-09 04:02:35', 0),
(163, 0, 0, 0, 'chidi', 'mattyson', '', NULL, 'crugersmith', NULL, '07086827821', '$2y$10$yy0Hh8O9g/JJsMJFHpqpMO.O1s7S6F4o74.aGAE4NfSVdS7uvtW/G', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-11 16:26:35', '2018-10-11 16:26:35', 0),
(164, 0, 0, 0, 'Chidera', 'Amaraihu', '', NULL, 'Amaraihu', NULL, '7034757851', '$2y$10$7c5cJrR4UX97KNGE4R023uF9Wa4YDgUJamTWQjtXCExA3XJot5SVa', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-11 19:34:20', '2018-10-11 19:34:20', 0),
(165, 0, 0, 0, 'The', 'jui©€', '', NULL, 'Man', 'ogbonnanzube1999@gmail.com', '08143540694', '$2y$10$mTZyuLTsD.kH19SmKcXhsO9k/XBKklNwP2BFodnR21NiVRVbMU07e', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-13 16:50:28', '2018-10-13 16:50:28', 0),
(166, 0, 0, 0, 'KELECHI', 'OGAN', '', NULL, 'Kayceyogan', 'Kayceyogan@yahoo.co.uk', '08075262661', '$2y$10$3nZexZqQgBcmUPMjMqfww.W0T2sLGLccf56N9zM7Ibj/5HrjwWhL2', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-15 09:37:14', '2018-10-15 09:37:14', 0),
(167, 0, 0, 0, 'Opeyemi', 'Iredumare', '', NULL, 'TheConfeedant', 'iredumareojengbedeopeyemi@gmail.com', '08073799899', '$2y$10$BB3QTLSIDqDzwJ9cIGoeGu7yxBHyS0/QSYHpEvJOGilwItntOyUBq', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-16 12:26:15', '2018-10-16 12:26:15', 0),
(168, 0, 0, 0, 'Demola', 'Taiwo', '', NULL, 'Whizben', 'tdemola256@gmail.com', '07086980392', '$2y$10$6HjcKKsM2CoTOA5ClL0e5O0mcEpXW4ZV96DC.96dF0FMqhLTltrZS', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-16 13:16:14', '2018-10-16 13:16:14', 0),
(169, 0, 0, 0, 'Job', 'James', '', NULL, 'Joepex', NULL, '08068090626', '$2y$10$xx6uSoK/dKw9q5fz0o7HPeyb1/alebwikRpJ18oI9hG/aaofFrCW6', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-16 15:07:16', '2018-10-16 15:07:16', 0),
(170, 0, 0, 0, 'ajayi', 'isaac', '', NULL, 'AB. Com', NULL, '08121825337', '$2y$10$glJRU8keYpsKXvfTdJ7P7ewJNlP0ZIuu05S6e9PkxLaEMiVUPfPxa', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-16 15:42:24', '2018-10-16 15:42:24', 0),
(171, 0, 0, 0, 'kabunu', 'yusuf', '', NULL, 'Blinkz skay', 'kabunuyusuf2000@gmail.com', '07011515873', '$2y$10$DKH0ef0Exq4fCOpOLGVQweDhlVpTXerxf0yWvM9s0pAd31rHnyoGC', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-16 16:21:59', '2018-10-16 16:21:59', 0),
(172, 0, 0, 0, 'Faith', ' uwaye', '', NULL, ' faithy', 'faithakpan2016@gmail.com', '08121721079', '$2y$10$Rnm5AOYZP.sOEzzIPAwN..3QXe7irKpY28rbS.8YUspCxP1Dpt1Ei', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-16 17:44:15', '2018-10-16 17:44:15', 0),
(173, 0, 0, 0, 'Chidimma', 'Precious', '', NULL, 'Dimzy kupper', 'chidimmap796@gmail.com', '07017736038', '$2y$10$bTvRw0EcL3m0LJhsILs6hOoyUpYqwmOsZi9RkhjBJHWO3s19mLLZ2', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-16 19:05:50', '2018-10-16 19:05:50', 0),
(174, 0, 0, 0, 'Marshall', 'Okon', '', NULL, 'Jeason', NULL, '08138561018', '$2y$10$PWA0y48wdO8fedQcexa7XuSCXPKecacyKG0xd7b0d4JD36rR6ZaLy', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-16 19:10:49', '2018-10-16 19:10:49', 0),
(175, 0, 0, 0, 'Joseph ', 'Assamudo ', '', NULL, 'Samora', 'josephassamudo90@yahoo.com', '07069561407 ', '$2y$10$hhyt56YjHEI2a/cKKWOOG./Dm9TOo8sxL.smlEy.OPZ9BXE0IsKQK', 'user', NULL, NULL, NULL, 'A writer and a communicator', '', '', '', '', '', '', '', 'Nigeria', 2, NULL, '2018-10-16 19:16:52', '2018-10-17 06:37:46', 0),
(176, 0, 0, 0, 'Dovewin', 'Owa', '', NULL, 'G dove', 'owadove@gmail.com', '08171987246', '$2y$10$.4e8BTh8pVW5q.AMvZWY7ey..0knzGxy2Ae0H7UJyUbb1osPyit7y', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-16 19:54:44', '2018-10-16 19:54:44', 0),
(177, 0, 0, 0, 'prince', 'Johnson', '', NULL, 'johnson2206', NULL, '07087789573', '$2y$10$0oQ73AS5NFRWuJL4SNWIIOnfhiMTIZX3Uk2uw2IQKez2hElhBv9S.', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-16 20:29:46', '2018-10-16 20:29:46', 0),
(178, 0, 0, 0, 'edeh ', 'John ', '', NULL, 'john98 ', NULL, '+2348024377191', '$2y$10$PTYCh8sQD5J.5B0MKStp7O2m9Cj.ZhmfnyLlXKyOOXWfYVw56jf/W', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-16 20:37:06', '2018-10-16 20:37:06', 0),
(179, 0, 0, 0, 'David', 'Nathaniel', '', NULL, 'Dnathdrums ', 'Calvindave17@gmail.com', '08185721455', '$2y$10$j.KB0MmGQVmEIJdWw1NSSed/f0UusTo/K0w3vcXb3JSHuwn9UDsAS', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-16 20:43:41', '2018-10-16 20:43:41', 0),
(180, 0, 0, 0, 'Ayogu', 'Peter', '', NULL, 'Obrigado', 'dellgadotm@gmail.com', '08162457531', '$2y$10$N3tBYMDtx9rJ3ozNI1M6Wu2eiElLiEWVM7UdklIeXMz.4EzsMO4.S', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-16 21:04:47', '2018-10-16 21:04:47', 0),
(181, 0, 0, 0, 'Ayogu', 'Peter', '', NULL, 'Obrigadotm', NULL, '08162457531', '$2y$10$vcZHzZ3hby/keYP9PHP1O.KxO2fl.aooVhzwAm17G0shrf1.Exdje', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-16 21:06:53', '2018-10-16 21:06:53', 0),
(182, 0, 0, 0, 'Odo ', 'Adimoramma', '', NULL, 'Sawiz', 'iamoramma@gmail.com', '08126878472', '$2y$10$1Cj/X3EVYvTXzeaRiOkKjeNwIVB/FW19FGdRQGreoAmjV2hFWSC5C', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-16 21:07:15', '2018-10-16 21:07:15', 0),
(183, 0, 0, 0, 'Evans ', 'Uzochukwu', '', NULL, 'Decent', 'decent4real5@gmail.com', '08142906093', '$2y$10$M3tJIxXeVRiMtI.ElB62hOEe9CTIHmKf6eyfV4gAdDHGWj6QtC9Bu', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-16 21:17:11', '2018-10-16 21:17:11', 0),
(184, 0, 0, 0, 'Chinedu', 'Nelson', '', NULL, 'Black', 'Nelsonhillary147@gmail.com', '09037601520', '$2y$10$6v0FIwOfRxMm6nJHb6sdfuhATgIKVONxtxyM..ZhWR.rSH9301eUe', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-16 22:09:21', '2018-10-16 22:09:21', 0),
(185, 0, 0, 0, 'Adegbola', 'Owolabi ', '', NULL, 'owo blow', 'olowo1805@gmail.com', '09074743371', '$2y$10$XpPSj.Rqws4O0Ts0MiHzzOqbxL62LRicWE4OEdizisxD8Q4KbjWtC', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-16 23:29:07', '2018-10-16 23:29:07', 0),
(186, 0, 0, 0, 'chude ', 'EKENE ', '', NULL, 'kenzy823', 'chudeekene@gmail.com', '09031634098', '$2y$10$n45IC0KBjmQ7/JZM8a88HOONHs5p2GMR4GtjGHQ3GSlBwX7ekDEZG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-17 00:28:29', '2018-10-17 00:28:29', 0),
(187, 0, 0, 0, 'John ', 'Excellence ', '', NULL, 'Chibuzo ', NULL, '09033380027', '$2y$10$aJAy2ipC3Q3RXfenDUu6XOpCheMLYGabOsjc7kXOnyRBz1KEZA8Cy', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-17 00:37:24', '2018-10-17 00:37:24', 0),
(188, 0, 0, 0, 'Joel', 'Princewill', '', NULL, 'Joel Easylife', 'Joelprincewill2@gmail.com', '09030906396', '$2y$10$MEWZAx5dI6YGDh33vqwfjeT5ev/rpxQA4NUX4g6BqSJPcFESQ7ddu', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-17 01:55:28', '2018-10-17 01:55:28', 0),
(189, 0, 0, 0, 'Abancha', 'Paschal', '', NULL, 'Woricriuz', 'woricriuz@gmail.com', '09028374177', '$2y$10$P.2jsjoYawhwIUOQbr45aefKAWM6wUEQ5OoB45YWs9k5hQwLQ5vrC', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-17 06:40:16', '2018-10-17 06:40:16', 0),
(190, 0, 0, 0, 'Polycarp', 'Jonathan', '', NULL, 'Polybest', 'jonathanpolycarp66@gmail.com', '08134166930', '$2y$10$2QhdaX6BXea5aOhDDefQGeXpKfv43NpfqojcepHip19BFUfb8dfK6', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-17 06:56:41', '2018-10-17 06:56:41', 0),
(191, 0, 0, 0, 'Auwal', 'Allo', '', NULL, 'Auwalallo', 'auwalallo94@gmail.com', '08066104610', '$2y$10$7u0lAqvysU.ta4wHkPKoru0k/GThS.TwtpjI2g6.ll6Xkk3lM9mh.', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-17 06:59:06', '2018-10-17 06:59:06', 0),
(192, 0, 0, 0, 'Omobola', 'Sikiru', '', NULL, 'Skulboy', NULL, '08022368072', '$2y$10$QtkGwymTjog5q6AaL9aPRO0hwsADBrs4i7z9Wjl5XEg71V2I4v63e', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-17 07:17:30', '2018-10-17 07:17:30', 0),
(193, 0, 0, 0, 'Taofeek ', 'Ayuba ', '', NULL, 'Cso', NULL, '08124139347 ', '$2y$10$pJ9cgX6u2T7tQs1Ie.v8eO5/WF2Mn/V1nmxr1HJYXXAWh.Ne2ffv6', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-17 07:59:11', '2018-10-17 07:59:11', 0),
(194, 0, 0, 0, 'Kinu', 'Records', '', NULL, '', NULL, '08129583497', '$2y$10$Rw0mfdpLAVcJTD23/ymyMOHxY2TJuoQfWcmwT4OW39tS7kZo/ekXe', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-17 08:41:47', '2018-10-17 08:41:47', 0),
(195, 0, 0, 0, 'Kinu', 'Records', '', NULL, 'Kinu Records ', NULL, '08129583497', '$2y$10$o8oDiNt5sTgwILCdLbUHFOjfLguqzbDa2okYJk0.ZI5oLPKL.PZTq', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-17 08:42:52', '2018-10-17 08:42:52', 0),
(196, 0, 0, 0, 'aliyu', 'abdulphatai', '', NULL, 'killzsteady', NULL, '08134391234', '$2y$10$I85JLMQFyxfJeSYCZL3HQ.lWD1mfkHN4j/4HE3d4XPUU.r2tj5fY2', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-17 09:53:54', '2018-10-17 09:53:54', 0),
(197, 0, 0, 0, 'Obiasogu', 'Ebuka', '', NULL, 'Ebadest', 'obiebuka17@gmail.com', '09021454431', '$2y$10$k1EuCiLhwCIwypc6HGv2MeE/1FP4zvn9RsIc.qhZWQoxX0zp1HcEq', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-17 11:34:19', '2018-10-17 11:34:19', 0),
(198, 0, 0, 0, 'run', 'jozzie', '', NULL, 'runjozzie', NULL, '08146592525', '$2y$10$6CbKH/h9fcAaCTqDDlGhZe17joqfh0NFVhT1vTiGGtRtsYidjw5f6', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-17 11:41:39', '2018-10-17 11:41:39', 0),
(199, 0, 0, 0, 'Soliu', 'Abdulazeez', '', NULL, 'Abiodun', 'abdulazeezonilearo1@gmail.com', '08031870222', '$2y$10$A5gnbXkfSMR5x2rehi1cJ.x0EYECepEMn4r45tj1T3ccMfoKuLQOq', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-17 12:27:52', '2018-10-17 12:27:52', 0),
(200, 0, 0, 0, 'Agbese', 'Ochepa Godwin', '', NULL, 'G don', 'agbese6@gmail.com', '09034149370', '$2y$10$8WHhm0H46TA3P/JxTYEnUOb7eBH7.e/RWn1zV7gNYyYeGcOWupGVG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-17 14:34:00', '2018-10-17 14:38:34', 0),
(201, 0, 0, 0, 'Opeyemi', 'Oyesomi', '', NULL, 'DJ_One00', 'worduptraffic@gmail.com', '08181737108', '$2y$10$26PeZEPqzxDChUfXQk0F1O8/IhBWX.ziwkarS9cqUGezESKznRK7e', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-17 14:37:28', '2018-10-17 14:37:28', 0),
(202, 0, 0, 0, 'Victor Chisom', 'Onyekachi', '', NULL, 'Jerryvic', 'iamjerryvic@gmail.com', '07064548344', '$2y$10$0ZHjwKY6C7RYYD/TkB6/q.jY6BY7rKFNCWUZtUTtITlYlTdKYKs42', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-17 15:15:46', '2018-10-17 15:15:46', 0),
(203, 0, 0, 0, 'Olusanwo', 'John', '', NULL, 'Jaystar', 'johnolusanwo10@gmail.com', '+2349057381239', '$2y$10$DqNLe.j.Gw7gSx.LIY4jdeU7MG4N8PS4Rcr59eyWRUFC6XYK0.wri', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-17 15:17:40', '2018-10-17 15:17:40', 0),
(204, 0, 0, 0, 'remi', 'thomas', '', NULL, 'eminent dremh', NULL, '08054863681', '$2y$10$33NSFpZ0zrr9oUECvEdUrO7R4f9dLi8iHw81pd3DjlXthnvyrHN/G', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-17 15:56:18', '2018-10-17 15:56:18', 0),
(205, 0, 0, 0, 'Nnabuko', 'Chinachi', '', NULL, 'Nachi D Great', NULL, '08025524000', '$2y$10$cVKRnDDMviSzRwX9yt96y.wTDuvcIRnQqtQWFfxq8i3vVmUVVtoje', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-17 16:11:23', '2018-10-17 16:11:23', 0),
(206, 0, 0, 0, 'Sylvanus', 'Ginta', '', NULL, 'Sylva', NULL, '09069297463', '$2y$10$iVfTz1KdiGtFcG.u6SaiPet9LXD0VhAX83Ao3Jpbrk2nR3O.CrJqK', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-17 16:20:12', '2018-10-17 16:20:12', 0),
(207, 0, 0, 0, 'Sylvanus', 'Ginta', '', NULL, 'DSylva', NULL, '09069297463', '$2y$10$bM2QrGVj8hIL.KbuRZ/uLexjZRHvB6QFX0vvAodJB.Cwmoea.19Em', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-17 16:21:06', '2018-10-17 16:21:06', 0),
(208, 0, 0, 0, 'Sylvanus', 'Ginta', '', NULL, 'Whorisitolabout', NULL, '09069297463', '$2y$10$/FAEEVNmDyCWV1fR.jiaZOg2lUHrU7FjOxTbCET/Nj.HzAK6MeudS', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-17 16:22:02', '2018-10-17 16:22:02', 0),
(209, 0, 0, 0, 'Ridwan', 'Musbau', '', NULL, '5Diamond', 'rilwankolawole@gmail.com', '08116441605', '$2y$10$vpx8RkkJLsOe8zbsk7l0A.8JMYqWz/3AC04Gaf7QAyDimMWO.O3.m', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-17 17:00:06', '2018-10-17 17:00:06', 0),
(210, 0, 0, 0, 'Waize', 'okoye', '', NULL, 'easywaize', NULL, '08103830445', '$2y$10$.H.7FCNFRqWsK0gMEv9/yOMDZQtEogAX2qMrW0.b1thNux5xQ6UBq', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-17 17:46:41', '2018-10-17 17:46:41', 0),
(211, 0, 0, 0, 'Waize', 'okoye', '', NULL, 'easy waize', NULL, '08103830445', '$2y$10$lymnd79GLyU1tJ8byQeXxevvBrBwl/G0P3/cfU102U/sxL8m7nisC', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-17 17:48:09', '2018-10-17 17:48:09', 0),
(212, 0, 0, 0, 'Akinsanya rafiu', 'Akanji', '', NULL, 'A kanji', NULL, '09065260747', '$2y$10$BxG4TzXU.7FBEaM2W0usJeW5yBrRxVTL3T1ntYmuIWLMajQPqrhp2', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-17 19:57:03', '2018-10-17 19:57:03', 0),
(213, 0, 0, 0, 'Westino', 'Belonz ', '', NULL, 'Westino ', NULL, '08121962052', '$2y$10$OnDtlo8v2to9tOVIcMxT.uh1NVefQPAzIH2CinBHgOPUvM/Y.eR9C', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-17 20:18:01', '2018-10-17 20:18:01', 0),
(214, 0, 0, 0, 'Westino', 'Belonz', '', NULL, 'sureboi', 'westinosamuel@gmail.com', '08121962052', '$2y$10$l0fn94wkzAKn8I0hWllHfu/okLRQo8lzXErCA5axsl/wGMiYsvNSK', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-17 20:18:55', '2018-10-17 20:18:55', 0),
(215, 0, 0, 0, 'NWIZU', 'UCHENNA', '', NULL, 'NURO\'B', NULL, '08086543978', '$2y$10$9CGA.RKHM0vSzBRNMi/H3OTWjqOS9XfhZPTje3eY4ybhmS2U6HotS', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-17 20:31:55', '2018-10-17 20:31:55', 0),
(216, 0, 0, 0, 'Toxclusive', 'Com', '', NULL, 'Perra', NULL, '08108319327', '$2y$10$lnNICAOy/Q31yVVqYcqLluwa.OHt8wBDRh9h4dmRH4x2LqWM8M4FK', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-17 20:38:25', '2018-10-17 20:38:25', 0),
(217, 0, 0, 0, 'Patrick Eyoh', 'Edet', '', NULL, 'Don cool', NULL, '08169762321', '$2y$10$tuRissMiwMjSTpmKMUvnCu22Ux/F5mi8dA2uuhPL/FD6akl6pi7vi', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-17 20:48:57', '2018-10-17 20:48:57', 0),
(218, 0, 0, 0, 'Patrick eyoh', 'Edet', '', NULL, 'Doncoolnwamama ', NULL, '08169762321', '$2y$10$.cZtQlalOMuJrhFot2.P7e3ZqrPxpT1S9JV/bhVROA8t731naTjlK', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-17 20:54:55', '2018-10-17 20:54:55', 0),
(219, 0, 0, 0, 'Patrick eyoh', 'Edet', '', NULL, 'Don cool nwa ', NULL, '08169762321', '$2y$10$MMb8HbjbnV3xi7o7jRl73OId2uY.HelTl1AggNBofcBtp9s0INmue', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-17 20:56:01', '2018-10-17 20:56:01', 0),
(220, 0, 0, 0, 'Patrick eyoh', 'Edet', '', NULL, 'Don early momo ', NULL, '08169762321', '$2y$10$w52TqIAceqQiWoevs.8hvObCoEx52fxLfcRlTD3QWkodjGw6mJwpi', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-17 20:56:55', '2018-10-17 20:56:55', 0),
(221, 0, 0, 0, 'Patrick eyoh', 'Edet', '', NULL, 'Patrick e edet', NULL, '08169762321', '$2y$10$MGKqjrBrQQBUwtnm7K2yGeFLO29nPeUEzyCawYh6MdOBmB5lQToJ2', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-17 20:58:01', '2018-10-17 20:58:01', 0),
(222, 0, 0, 0, 'Patrick eyoh', 'Edet', '', NULL, 'Super boy', NULL, '08169762321', '$2y$10$4qdFT7mrijkNTE53SSnnF.wZkbJrAIvcATPddXXhCS3TNsffGqHNG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-17 20:58:51', '2018-10-17 20:58:51', 0),
(223, 0, 0, 0, 'Odinaka ', 'Ugwu', '', NULL, 'Gold', NULL, '08166155586', '$2y$10$xrzbPwcFHoQsWq9Fg7J9DumZ1cLJTwsdUR6OV5VDUK8.KJ1GBaVLm', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-17 22:10:34', '2018-10-17 22:10:34', 0),
(224, 0, 0, 0, 'STARGO', 'PRINXY', '', NULL, 'starboy', 'yungflash411@gmail.com', '09070673068', '$2y$10$U.JtzTfe2KsZIaP57djbg.ewYr0X2gvlph68jFupTFyFalLZatbN.', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-17 22:26:11', '2018-10-17 22:26:11', 0),
(225, 0, 0, 0, 'Rokeeb', 'Babatunde', '', NULL, 'F.Rokeeb', NULL, '08122861741', '$2y$10$izpWN2AcM2RsrdGYFPoI7uE/jB1FNODMb1VDVb5ZW9jKwkY6qNVVe', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-17 23:12:24', '2018-10-17 23:12:24', 0),
(226, 0, 0, 0, 'Michael', 'Ajogwu', '', NULL, 'Marshal', 'ajogwu84@gmail.com', '08157923490', '$2y$10$zKw7DkFrWJ5fGCTDdO9Nl.zjaLz9/YfEN1IThDCh9MEM/bE1kH1ay', 'user', NULL, NULL, NULL, '', '', '', '', '', '', 'Enugu', '', 'Nigeria', 2, NULL, '2018-10-17 23:50:02', '2018-10-18 00:01:06', 0),
(227, 0, 0, 0, 'James', 'Abdullahi ', '', NULL, 'Young jayz', NULL, '07024509006', '$2y$10$Xnl3fhjUYL.geBHeHeZ1L.k/lSajVdMM4p1.5o8nWVSQY2wNJ14Ha', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-17 23:53:11', '2018-10-17 23:53:11', 0),
(228, 0, 0, 0, 'Joseph', 'Laban', '', NULL, 'Cooljae blackboyfly', 'iamcooljaebbf@gmail.com', '09066619121', '$2y$10$uqamDl9WRMe/Y2LiBoTU.esM8GNXjxgjCNQ5X85bZ.FOlxtuz5u/q', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-18 00:41:08', '2018-10-18 00:41:08', 0),
(229, 0, 0, 0, 'jeremiah', 'michael', '', NULL, 'jerrywine', 'jerrywine88@gmail.com', '08030662311', '$2y$10$EIwQTpavpDnsGvXHm6.CdOb.pZvbRvh6VxxGcJ1QyuyXKCaAjrKqC', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-18 05:06:22', '2018-10-18 05:06:22', 0),
(230, 0, 0, 0, 'Chinonso ', 'Obi ', '', NULL, 'ObiNaBeatz ', 'obichinonso989@gmail.com', '08063608988', '$2y$10$HlRCLeKK0BGasagFkf4XauTYtnQzVYOE0IeIDNNs5SyjIuucsmpq.', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-18 07:13:16', '2018-10-18 07:13:16', 0),
(231, 0, 0, 0, 'Awulonu', 'Christian', '', NULL, 'Pato', NULL, '08068548874', '$2y$10$gFddhehXJgJZVpDkOisWWukYfZEohAvLdR8p4mYNzdzgySSPwE2lW', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-18 08:55:05', '2018-10-18 08:55:05', 0),
(232, 0, 0, 0, 'akeem', 'ayantokun', '', NULL, 'shehu', NULL, '09024638939', '$2y$10$3O.OMoGazYoRhd/AoAOU5OqQQYbDD.mrxHqsrIv9/80TFH9acruya', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-18 09:08:27', '2018-10-18 09:08:27', 0),
(233, 0, 0, 0, 'James', 'Benjamin', '', NULL, 'Justice', NULL, '07052028967', '$2y$10$8g/pGfO.GMaRi48bKthsoOC1vMhyLPtmIh..qhSbJh1AqJlXa.Ouy', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-18 09:12:30', '2018-10-18 09:12:30', 0),
(234, 0, 0, 0, 'Daniel ', 'Friday', '', NULL, 'Frayozee', 'danfrayozee@gmail.com', '08184116343', '$2y$10$3OJLew5T25F1R.FZIKVoQuNiYoG7aVPYavtSQ7Uft483rhAUwuQbO', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-18 09:14:24', '2018-10-18 09:14:24', 0),
(235, 0, 0, 0, 'Ado', 'Alvin', '', NULL, 'Alvin', NULL, '08086613622', '$2y$10$QFNOec4ewhnDzDqdyzQ0b./8r0lN5zW8N1MXgiNNAIFJNXUGcIpLy', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-18 10:17:12', '2018-10-18 10:17:12', 0),
(236, 0, 0, 0, 'Ayodeji ', 'Israel ', '', NULL, 'Israel 4 Christ', 'ayodejiisrael28@gmail.Com', '08138977618', '$2y$10$qXPXX5M2eimNdCvbpLSaIOONItR.o99M90stxQzjtoY8w75Y/d7Iy', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-18 10:55:07', '2018-10-18 10:55:07', 0),
(237, 0, 0, 0, 'rukky', 'Gbenedio', '', NULL, 'Rukky', 'rukkygbens2@gmail.com', '09066356752', '$2y$10$8N6fH5B0WKJbo.dn/b1c0evXfcC8CJ7nYHZ8qM/I205Oa/1Z7UKVy', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-18 11:53:10', '2018-10-18 11:53:10', 0),
(238, 0, 0, 0, 'chibuzor', 'ezeh', '', NULL, 'lamar cheQzee', NULL, '07038792039', '$2y$10$6r2zL5USz2UWl6gOFwRQs.3jTR36VcA5sFqhhtr.t6vvqnKxNL7ha', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-18 12:20:40', '2018-10-18 12:20:40', 0),
(239, 0, 0, 0, 'Olabanji', 'Ajibola', '', NULL, 'BeeRexbeat', 'beerexbeat@gmail.com', '08066872687', '$2y$10$uZvuMVeDmkri/aD5KjlXR.X68LaSXE6OkRgH6412r7WoIJw1iTuii', 'user', 'thatthrowdown.1539864709.jpg', 'webroot/files/Users/photo/', '372565', 'I\'m a versatile music producer.', 'www.facebook.com/beerexbaba', 'www.twitter.com/beerexbeat', '', '', 'Doctor\'s street, eputu, ibeju lekki, Lagos state Nigeria', 'Lagos', '100001', 'Nigeria', 2, NULL, '2018-10-18 12:51:34', '2018-10-18 13:15:08', 0),
(240, 0, 0, 0, 'Olapade ', 'Quadri ', '', NULL, 'AKA ', 'olapadequadriolatoyese@gmail.com', '08100631513', '$2y$10$N19f4/FYjoa/X6Ixe7U5Z.F0hrugZFfk9YVaG6ADhqQSHEQLQkyzu', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-18 13:43:02', '2018-10-18 13:43:02', 0),
(241, 0, 0, 0, 'Emmanuel ', 'Onyeji ', '', NULL, 'Prince nuel ', 'eprince188@gmail.com', '08109494642', '$2y$10$c9qkTbxRMB7Mk/yqXaO1Yujbrek4TfDMlrl5a6bl9v71DMwwosvwC', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-18 13:55:33', '2018-10-18 13:55:33', 0),
(242, 0, 0, 0, 'Victor', 'Ezekiel', '', NULL, 'Vichordz', 'vichordzezekiel402@gmail.com', '09039712672', '$2y$10$wlv9nn/oxhcVxHEWP22ACO9a1oM08AS0ZSWZyGgKStVVSf6TGCR52', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-18 15:37:19', '2018-10-18 15:37:19', 0),
(243, 0, 0, 0, 'Friday', 'Onyema', '', NULL, 'Fridix', 'fridayonyema71@gmail.com', '07088096628', '$2y$10$pbe5CsnKFfHOXTbtQds4jeIVhQo.vDJuSCn2KBleOcYQKiP2rUdyC', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-18 16:47:43', '2018-10-18 16:47:43', 0),
(244, 0, 0, 0, 'Nsimaro', 'Clement', '', NULL, 'majesty', NULL, '08144292179', '$2y$10$.MX2Ef/WNGOCKCAcsGrCF.n8WNVnW2GJYOXe1RSp5SPFZyfEkLMoq', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-18 17:36:08', '2018-10-18 17:36:08', 0),
(245, 0, 0, 0, 'Innocent', 'Mark', '', NULL, 'Inoman', NULL, '08123407864', '$2y$10$K8RaX9MAQQQPAc/jr8Zwp.EvyYbaVuUcdp3wYuy9fv5pVyQ2OE24K', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-18 19:35:49', '2018-10-18 19:35:49', 0),
(246, 0, 0, 0, 'Ononuju', 'Johnson ', '', NULL, 'Johnson15309', 'johnson15309@gmail.com', '08106007843', '$2y$10$6ynA.iMN84awKTYQvEzDQugBzSVeN/W1sYYUjMHpTXH4CVq0omS3q', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-18 19:51:22', '2018-10-18 19:51:22', 0),
(247, 0, 0, 0, 'hope', 'lnyang udok', '', NULL, 'young boss', 'hopezdj2018@gmail.com', '07069704270', '$2y$10$yiAiJZFDIFheF.4AX/sM2.59qPLBWPdY8yb1Sh9GS80fdEtSxAlMW', 'user', '34380065_392495094566170_2529249289348055040_n.1539890666.jpg', 'webroot/files/Users/photo/', '1697', '', '', '', '', '', '3d ajuwa close off fggc abuloma', 'akwa ibom', '', 'Nigeria', 2, NULL, '2018-10-18 20:03:18', '2018-10-18 20:24:26', 0),
(248, 0, 0, 0, 'hope', 'lnyang udok', '', NULL, 'hopezx', 'hopezdj2018@gmail.com', '07069704270', '$2y$10$museCafKmRf1x1LbZszYz.P3ktJ./m8Cgjb9GixRd16gNt6bKP9qS', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-18 20:04:16', '2018-10-18 20:04:16', 0),
(249, 0, 0, 0, 'Bright', 'Umoru', '', NULL, 'Chris powel', 'owelgane@gmail.com', '08125277867', '$2y$10$PtqVO0XYlu4N6fOpZPTkzedKvHU3XfoYRSBWE4kMnU/pK.2Ypj5sm', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-18 21:41:38', '2018-10-18 21:41:38', 0),
(250, 0, 0, 0, 'Praise', 'James', '', NULL, 'Pojbeatz', 'praisekeys8@gmail.com', '08955895693', '$2y$10$uZ3hyCuv4Krm.4up1MNcCu7BiyP8fWps5h9mewkXaJ3UMfpGU.LpG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-19 00:20:51', '2018-10-19 00:20:51', 0),
(251, 0, 0, 0, 'presh', 'Christian', '', NULL, 'young p', NULL, '08134273079', '$2y$10$i5Cu82ZX9KL7dP5VqV37d.8xf0mlpZUgINLoa4hFypNfCf9aR0U.C', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-19 00:47:40', '2018-10-19 00:47:40', 0),
(252, 0, 0, 0, 'Aliyu ', 'Idi ', '', NULL, 'Haidar', 'Idinbinta@gmail.com', '+2348164249223', '$2y$10$fKLDTG62hQkoWKsRsSbpIef5VFVG9N09SAKkb6mCiIF0tq9PZcDEC', 'user', 'airbrush_20181014194934.1539934920.jpg', 'webroot/files/Users/photo/', '870607', '', '', '', '', '', 'No d61 beside new era cinema Jos', 'Plateau', '930001', 'Nigeria', 2, NULL, '2018-10-19 00:53:59', '2018-10-19 08:41:59', 0),
(253, 0, 0, 0, 'samuel', 'ope', '', NULL, 'wholzz', 'samuelkayode156@gmail.com', '08067892882', '$2y$10$4q9JQsfHUtqxSuOnV2KMWOrJep64UYXwoi7dzq/4qzxDG22QbvChu', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-19 10:15:59', '2018-10-19 10:15:59', 0),
(254, 0, 0, 0, 'Tseeyol Terver Rapheal ', 'Terver Rapheal', '', NULL, 'kiss wonder', NULL, '09097968201', '$2y$10$VwHpCBc4Er4olbWTNJrzYO/JrlfqtmFYyeKsNetggNWYBr9aGHgwW', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-19 10:17:06', '2018-10-19 10:17:06', 0),
(255, 0, 0, 0, 'Denis', 'Osuoha', '', NULL, 'Ikechukwu', NULL, '+2348104792075', '$2y$10$BEiMcyT81jf9XTmajeZvi.BQKOn5oMubHDol4gu/TEett8AXW6EGi', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-19 10:54:33', '2018-10-19 10:54:33', 0),
(256, 0, 0, 0, 'Denis', 'Osuoha', '', NULL, 'Ikechukwu500', NULL, '+2348104792075', '$2y$10$.XvIIRv.FMyp3wOMI8XO/eROJSIeHAH1zlMBxd9inNOZ/V8bkfVhW', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-19 10:55:10', '2018-10-19 10:55:10', 0),
(257, 0, 0, 0, 'Denis', 'Osuoha', '', NULL, 'deniselen45', 'deniselen45@gmail.com', '+2348104792075', '$2y$10$ICd2utKrfhCWC3zhaFD1j.2mXgUcXNNmyJdKWhjyJxeibkq0iU75G', 'user', NULL, NULL, NULL, '', '', '', '', '', '', '', '', 'Nigeria', 2, NULL, '2018-10-19 11:00:30', '2018-10-19 11:07:44', 0),
(258, 0, 0, 0, 'Samuel ', 'Omoboriowo ', '', NULL, 'Ohsam', 'virtuesticks1@gmail.com', '08061348520', '$2y$10$80DW.H491ZL3sE3DYJPaIOBDPIwPsmKbDwD6h1tNPSyhTR/td5OgG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-19 12:16:12', '2018-10-19 12:16:12', 0),
(259, 0, 0, 0, 'Adeleke', 'Saheed', '', NULL, 'Bimbo', NULL, '08099643982', '$2y$10$RdqEnX/uh1OXcWSihAP67eRdGJF5WR2k.Daazl9Z5xlVW6lsFt.fW', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-19 12:38:40', '2018-10-19 12:38:40', 0),
(260, 0, 0, 0, 'Kingsley', 'Ezeogwum', '', NULL, 'Maceze', 'machidice@gmail.com', '+2348147419970', '$2y$10$hvs4.l5Hsn6kXr9fr9GKBu3wSqkO0TxOgrJlq3.rX3BDjdvZSSsIi', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-19 13:25:51', '2018-10-19 13:25:51', 0),
(261, 0, 0, 0, 'Jack', 'Ibinabo', '', NULL, 'I.B', NULL, '08166873152', '$2y$10$TwFrwxJ/1dQxViIUtrVwz.l7fVC0qSq7fGJZz7KT3itLfFIrqmlDq', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-19 13:28:18', '2018-10-19 13:28:18', 0),
(262, 0, 0, 0, 'Jack', 'Ibinabo', '', NULL, 'IB', NULL, '08166873152', '$2y$10$jSb9i0g.oL5MExAg8IHgveh4Pe9Vd/uUkIYAV5tb2W2XTnmd5OtY6', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-19 13:30:06', '2018-10-19 13:30:06', 0),
(263, 0, 0, 0, 'Johnpaul', 'Igweze', '', NULL, 'Mayorflinks', 'mayorflinks0@gmail.com', '08146414699', '$2y$10$.yJgP1lAvWYi2NAX0zD5Du3QYfG2nwVNGs3QgU0mJoKGlQ.QauVka', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-19 13:59:05', '2018-10-19 13:59:05', 0),
(264, 0, 0, 0, 'Johnpaul', 'Igweze', '', NULL, 'Flinks', NULL, '08146414699', '$2y$10$uHgdP6EQPLToe3w10eU74e3HPqJqLs4WLXxxJz5Ats18NUTXlRTQu', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-19 14:00:03', '2018-10-19 14:00:03', 0),
(265, 0, 0, 0, 'Mac', 'Henry', '', NULL, 'Machenry ', 'Machenry27@gmail.com', '+2347031309046', '$2y$10$hAgdin6/JK71oOCj8./t9eCeGGN24u04MBnXAiosS39pukDCLHHiq', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-19 14:15:00', '2018-10-19 14:15:00', 0),
(266, 0, 0, 0, 'Peter ', 'Olamide ', '', NULL, 'Petzy', NULL, '08152485689', '$2y$10$r5dM3jxVjb1DElQeiSANoeVifiSA8a3xpYSI35q9IbMDkCmsV5VK.', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-19 15:12:35', '2018-10-19 15:12:35', 0),
(267, 0, 0, 0, 'Precious', 'Monday', '', NULL, 'Crest', NULL, '0808 154 7892', '$2y$10$b/jGJ/JAWIHF5xSqsVxgPeFnk3t/Q0g9T/BzMVFhyVjg5M8Bp6gTG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-19 15:37:40', '2018-10-19 15:37:40', 0),
(268, 0, 0, 0, 'Precious', 'Monday', '', NULL, 'Papilani', 'james22o3i@gmail.com', '0808 154 7892', '$2y$10$oKBQPa3qVnV4jcfOc4In3.YbsaM.l9MQypGaABhBHTLK8BunZ1yvC', 'user', NULL, NULL, NULL, '', '', '', '', '', '', 'Rivers', '+234', 'Nigeria', 2, NULL, '2018-10-19 15:41:37', '2018-10-19 15:53:22', 0),
(269, 0, 0, 0, 'Adetayo ', 'Adebimpe ', '', NULL, 'Official_Tayor', 'adebimpeadetayo7@gmail.com', '+2348076728372', '$2y$10$mMI6eMIZsGVX4h9dl9mKjOf74BrMycGaRfdOqTh0cpLVnJ7UCrvFq', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-19 15:47:01', '2018-10-19 15:47:01', 0),
(270, 0, 0, 0, 'Khafid', 'Bala', '', NULL, 'Khafid', 'khafeedbala@gmail.com', '09039134793', '$2y$10$ZZTjSiGK4w5l5XBciH/ilOTJISAcNtn8wCG9EBSgNkYSuyYWfuQxa', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-19 17:37:58', '2018-10-19 17:37:58', 0),
(271, 0, 0, 0, 'samuel', 'omoboriowo', '', NULL, 'ohsam1', NULL, '08061348520', '$2y$10$iapHU/uCFdquvHoWRZGcFu63AWaOU08VOcuhwRRvWriyUfDhO8vbO', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-19 17:49:10', '2018-10-19 17:49:10', 0),
(272, 0, 0, 0, 'Ekene', 'Paul', '', NULL, 'Simple paul', 'Simplepaul50@gmail.com', '08098246676', '$2y$10$KvG2gfGyl.Anhw1XY0cRYe7PIZi/BJ1N2jxW3OGHNAoR/QIvszqoe', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-19 17:51:31', '2018-10-19 17:51:31', 0),
(273, 0, 0, 0, 'Precious', 'Anayochukwu', '', NULL, 'lady p', NULL, '08103868132', '$2y$10$EoBqVHVC4uF1ALUxEgMZ8eHOfuCzq9KuGbQzeXWqLQtWB6McoRMxS', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-19 19:07:54', '2018-10-19 19:07:54', 0),
(274, 0, 0, 0, 'Kingsley ', 'Gold', '', NULL, 'Rumie', 'Kingsleygold007@gmail.com', '08156167484', '$2y$10$TTxUGwTz7jkUzgYKtyOEpuhHy7nUr9a5lYI4qu6nsRLeV0bI/hX7m', 'user', 'inshot_20181001_231950723.1539986483.jpg', 'webroot/files/Users/photo/', '1514263', 'Music ???? Lover\r\n', '', '', '', '', '', 'Delta State ', '', 'Nigeria', 2, NULL, '2018-10-19 22:45:42', '2018-10-19 23:06:12', 0),
(275, 0, 0, 0, 'James', 'Godday', '', NULL, 'Doncaplet', 'kmcap1@gmail.com', '07062498065', '$2y$10$23VLBh9hiwQDH4eWo3kt4Ouce6gXTOb9.X.X6y2JpODHv34ylAtRW', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-19 22:57:37', '2018-10-19 22:57:37', 0),
(276, 0, 0, 0, 'Daniel', 'Edet', '', NULL, 'Supadanielee', NULL, '+2348127246177', '$2y$10$ZtlPj1XdeXM81nVMLwNNxOxl2a1qK510tNJG66kX06gtQhwoBdDKS', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-19 23:03:42', '2018-10-19 23:03:42', 0),
(277, 0, 0, 0, 'micheal', 'Seun', '', NULL, 'oluwamhigh', NULL, '08179419384', '$2y$10$bVhOR36QHo6BOa46HljpguJcUrgE9UpB5lmiznYBMMgMRlr4NO7/S', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-19 23:38:15', '2018-10-19 23:38:15', 0),
(278, 0, 0, 0, 'micheal', 'seun', '', NULL, 'mhigh', NULL, '08179419384', '$2y$10$OtcXPbSlDviZgadq3rQgsOblAJxumDHYTySioQvzYrDqk.4AgF7Na', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-19 23:40:06', '2018-10-19 23:40:06', 0),
(279, 0, 0, 0, 'Salem', 'flamb', '', NULL, 'flamboyant', NULL, '08131866770', '$2y$10$p.dM6PubxBQWkBGM9Up8JeF6g74TSAm5xLcBgV9wxUb1oT9vYJhn.', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-20 06:25:36', '2018-10-20 06:25:36', 0),
(280, 0, 0, 0, 'Caxtro', 'Dheater', '', NULL, 'Caxtro', 'sadiqbukar33@gmail.com', '+2348130000969', '$2y$10$ZRxKfLJtWmeka3M61ctbQOjNnozRC.Np/leBHbjHSUd394.q4nfzG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-20 06:38:14', '2018-10-20 06:38:14', 0),
(281, 0, 0, 0, 'Peter', 'Abayomi', '', NULL, 'Yomzee', 'austinefelix04@gmail.com', '08186197345', '$2y$10$2EWuuSe/lXBfEQaq4LX1GOzgP64nzTyI2dBLjEaLokY9XCPJ9DZ0W', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-20 07:53:08', '2018-10-20 07:53:08', 0),
(282, 0, 0, 0, 'Sunny', 'Benson', '', NULL, 'kyle', 'okuvitalis111@gmail.com', '09063876656', '$2y$10$Tehy.8Ve16OmoI/Od/ypK.q/koHmfW/FqOr.R21nuzj/22zKrswHu', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-20 08:44:37', '2018-10-20 08:44:37', 0),
(283, 0, 0, 0, 'confidence', 'desmond', '', NULL, 'cfflo', NULL, '07033353025', '$2y$10$mO.Q0Ol8LWntH34k2avk4eP/UeaJCanRYEKfGtooJHlGdiNpuwcie', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-20 08:47:24', '2018-10-20 08:47:24', 0),
(284, 0, 0, 0, 'confidence', 'desmond', '', NULL, 'official_cf_flo', NULL, '07033353025', '$2y$10$GA31/8N2AEgPcCFGQFjBkeLUPubp0cpL/wDHTqsDeuRxHmhwT2rDO', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-20 08:48:24', '2018-10-20 08:48:24', 0),
(285, 0, 0, 0, 'yasir', 'muhammad', '', NULL, 'blessboy', NULL, '08131853695', '$2y$10$kmjcP1sFFq2b1TyODaE.p.NTC4oFgyBc9coBeP0T5yJ/SvE8WEal6', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-20 09:37:47', '2018-10-20 09:37:47', 0),
(286, 0, 0, 0, 'Abdulsalam', 'Musiliyu', '', NULL, 'Alawe', 'sstephanie690@gmail.com', '08070699934', '$2y$10$ulUKvn1cV/ohqdXmqKsV7.PyYfdOHQzYCN04Ns.wBignbEmGF1Jha', 'user', 'img_20181017_170556.1540026858.jpg', 'webroot/files/Users/photo/', '323777', 'I\'m a very nice and simple person, fun to be with ', '', '', '', '', 'Oluawo compound offa', 'Kwara', '2345', 'Nigeria', 2, NULL, '2018-10-20 10:08:08', '2018-10-20 10:14:18', 0),
(287, 0, 0, 0, 'Abdulsalam', 'Musiliyu', '', NULL, 'Alawe1', NULL, '+2348070699934', '$2y$10$DyFDChFDPh6BX1JAgL1CB.drKA76XA0jSG2KJ/UIufHR9p/4y3dOC', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-20 10:09:06', '2018-10-20 10:09:06', 0),
(288, 0, 0, 0, 'samuel', 'ola', '', NULL, 'psalmmy', 'psalmmyconcept@gmail.com', '08024754624', '$2y$10$znMUO0Y9a215L92nuKox2.0MeszMB2xmIBHE/dFADfhItGy7xFdVm', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-20 10:47:54', '2018-10-20 10:47:54', 0),
(289, 0, 0, 0, 'akeem', 'ayantokun', '', NULL, 'rosskido', 'akeemayantokun30@gmail.com', '09024638939', '$2y$10$4P5Je2ide8UUSuL9BZHm0uJVnVT1Ipmj8Oo.87Oad2cseBn1FI0zC', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-21 14:12:19', '2018-10-21 14:12:19', 0),
(290, 0, 0, 0, 'Somto', 'Nwolisa', '', NULL, 'Soun\'Knox', 'somtochukwu41@yahoo.com', '08039226194', '$2y$10$9wItWMHRcRLkDL65gkG7O.M6bxE6uGSK6gTa8DI50kRo3Ohm3g4zO', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-21 19:59:16', '2018-10-21 19:59:16', 0),
(291, 0, 0, 0, 'Joseph', 'Laban', '', NULL, 'Cooljae blakboyfly', NULL, '09066619121', '$2y$10$Mr./77TaBBq1Dqu.taexNeoGmtOwOSWLEZX.9o76QsNIDzSkMImqy', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-21 20:15:33', '2018-10-21 20:15:33', 0),
(292, 0, 0, 0, 'Marshall', 'Okon', '', NULL, 'Jacksonpeter12', 'kevelling12@gmail.com', '08138561018', '$2y$10$sBckef8g3hEBkpqmmNyh9.uBgyuRrkxv0qZ4UwBT5vcn331j1/rf.', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-22 06:43:01', '2018-10-22 06:43:01', 0),
(293, 0, 0, 0, 'Barak', 'Israel', '', NULL, 'IS_Pioneer', 'barakisrael100@gmail.com', '08125427492', '$2y$10$d4EwMPuYdN2EeqPYGMU8r.u9T/4iBEKC5PRqr8afapZktNslxGRu6', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-22 19:18:06', '2018-10-22 19:18:06', 0),
(294, 0, 0, 0, 'Godspeed', 'Akintayo', '', NULL, 'GDSPD', 'dejikint@gmail.com', '08098491050', '$2y$10$yAcI5Qp4bJZunHSKar4iHuWPCnlL7ttTS/rYXtvNDiZMmfHfpwAhW', 'user', NULL, NULL, NULL, '', '', '', '', '', '', 'Osun', '230262', 'Nigeria', 2, NULL, '2018-10-25 02:44:04', '2018-10-25 02:46:43', 0),
(295, 0, 0, 0, 'Gbenga', 'Afolayan', '', NULL, 'G.Folly', 'stonemanuel3@gmail.com', '+2348033894678', '$2y$10$7yI2b/EhL7ZvAf3Xuyioyet/0layQpwGnD7AF..Jryn68D7OVqLAi', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-27 14:40:03', '2018-10-27 14:40:03', 0),
(296, 0, 0, 0, 'Azeez', 'Odele', '', NULL, 'ZizmoBeatz', 'zezmo9@gmail.com', '+2348078441855', '$2y$10$h5.2657w0Jhvr12AbnTR8eMBbGi8yel9SmWY3Kr5148sbsyuuEo9O', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-28 11:10:24', '2018-10-28 11:10:24', 0),
(297, 0, 0, 0, 'Nyasa', 'Music', '', NULL, 'T-skwey', NULL, '+265991386775', '$2y$10$1nNLGNlchALke7zGYNhiieCo9vyA43ZLXioVZuH4JvZjtE7tAj0vi', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-29 11:41:59', '2018-10-29 11:41:59', 0),
(298, 0, 0, 0, 'frank', 'morgan', '', NULL, 'frank', 'flyboymorgan@icloud.com', '01744275498', '$2y$10$k7E2noiPtpVD0IzxZBTQXeF2/V2nC7ns0vG0G85y3b/KFaOYRl/me', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-29 18:12:46', '2018-10-29 18:12:46', 0),
(299, 0, 0, 0, 'Samuel', 'Adebayo', '', NULL, 'Xammie', 'xamuel121@gmail.com', '07037928755', '$2y$10$xM1kQrJ6i5BvhWplxTD2KecKmXBs72Smxa6smBkOsD0F6Yy3DW9wu', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-10-31 18:46:35', '2018-10-31 18:46:35', 0),
(300, 0, 0, 0, 'Baddest', 'Freeboy', '', NULL, 'Bfreeboy', 'baddestfreeboy@gmail.com', '08107390837', '$2y$10$kmJfx8.w8D.eQBN16mFXfe9V1Xxqj4xGdprLHc8FBkbCJLaqq1SnW', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-11-01 07:00:51', '2018-11-01 07:00:51', 0),
(301, 0, 0, 0, 'Brady', 'Goldsmith', '', NULL, 'bradygoldsmith731', NULL, '077 7335 3426', '$2y$10$HSF2L9ikcM4cA4qgVT.cperMR2DMOUM66bvytuJhmHL/iM3hxk8Sm', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-11-03 02:00:50', '2018-11-03 02:00:50', 0),
(302, 0, 0, 0, 'Ohilere', 'Imiere', '', NULL, 'H koko', 'ohilere@gmail.com', '08082616647', '$2y$10$p5mj1qBUzyKZio1KGYtSRevgeTcf5nxKIOsKEIuNQwy.uiVFEteLK', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-11-05 07:35:25', '2018-11-05 07:35:25', 0),
(303, 0, 0, 0, 'Efe', 'Mena', '', NULL, '69houseparty', 'efemena2580@yahoo.com', '09035282235', '$2y$10$WdunhEAaXGSD9WnIU2HYJOsPlMI5NNalnvFx/vktImYjewRlu8Rt.', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-11-05 22:39:12', '2018-11-05 22:39:12', 0),
(304, 0, 0, 0, 'Akinjide', 'John', '', NULL, 'Jayvoice', NULL, '+2348100526724', '$2y$10$CdjHDNo0vUvyJDJoQ5mczu9aULhR1b.bMUfofaaZNBFkPrILrau1e', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-11-06 01:42:49', '2018-11-06 01:42:49', 0),
(305, 0, 0, 0, 'Cliff', 'Krimmer', '', NULL, 'krystynaponinski6', '54647urbine@erexcolbart.xyz', '079 0426 6968', '$2y$10$AisrZmHKzc/V8iYeBQ5MaOr/fzeZ02/3PDOcObcn58upezzCIvfN2', 'user', NULL, NULL, NULL, 'Tawanna Magdaleno is what her husband loves to call her although it is not her birth subject. Indiana is where he brilliant wife live and his family loves it. To climb is what i do 7days. Software developing has been my regular job for a little while. She is running and looking after a blog here: http://los-mejores-boosters-de-testosterona.eu/', '', '', '27', 'http://los-mejores-boosters-de-testosterona.eu/', '93 Duckpit Lane', 'NA', 'Ox11 5ea', 'United Kingdom', 2, NULL, '2018-11-06 11:31:09', '2018-11-06 18:15:38', 0),
(306, 0, 0, 0, 'Yusuff', 'Moshood', '', NULL, 'Ijoba Rap', 'mayorofcultures@gmail.com', '+22554870391', '$2y$10$sybniIdOjo4RbBqvMFar5epJuZtldCwyQ9USn/T5WlZD9BXTvTsvK', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-11-07 14:16:51', '2018-11-07 14:16:51', 0),
(307, 0, 0, 0, 'Camilla', 'Barnette', '', NULL, 'camillabarnette37', '51677merganthaler@concetomou.xyz', '0327 1929945', '$2y$10$xUzipgyVWrhLeROKCGyCMu.9VSAx7780AWNAoC74BouUCjAOF2a/q', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-11-07 22:40:24', '2018-11-07 22:40:24', 0),
(308, 0, 0, 0, 'Itunuoluwa', 'Johnson', '', NULL, 'Johnson IP', 'itunujohnson90@gmail.com', '07038591498', '$2y$10$iDuzsNRk/k9sux05nRJneeEAH3Wepl22MhTyZadb7V/aSyukHhKR2', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-11-08 08:16:33', '2018-11-08 08:16:33', 0),
(309, 0, 0, 0, 'Promise ', 'Born ', '', NULL, 'Promise Born ', NULL, '3510019548', '$2y$10$vQ69DqMnx/wsZftkj9YzVOD.M0rSEiuBfrSO/BKRT94QYk5eCrApO', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-11-08 13:49:29', '2018-11-08 13:49:29', 0),
(310, 0, 0, 0, 'Franklyn ', 'IGWE ', '', NULL, 'Dimitrii ', 'dimitriitmf@gmail.com', '09024645746', '$2y$10$kD1pPEIxTOPqi8VTMzKIoubRpJ1eVdJ76GXfn44NwACUsOkwCysnW', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-11-08 18:57:43', '2018-11-08 18:57:43', 0),
(311, 0, 0, 0, 'Elly', 'Akwandwanaho', '', NULL, 'elly giant', 'rakandwanaho3@gmail.com', '6575182', '$2y$10$X0UXvsAL2zsHh/6DJYzjB./gQU2ou9YnWMnra.R/W2.ZnZf4nnIQy', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-11-09 23:18:20', '2018-11-09 23:18:20', 0),
(312, 0, 0, 0, 'nuxon', 'mesidor', '', NULL, 'nicky ', NULL, '5618532505', '$2y$10$1U49y8CYzRh5nLKC4090Zu/ko.29TbeltbWJWwGh44q0PWtcSOC7G', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-11-11 05:28:19', '2018-11-11 05:28:19', 0),
(313, 0, 0, 0, 'chris ', 'baptiste', '', NULL, 'knight', 'theknight99@gmail.com', '8683646592', '$2y$10$sjaf/E8OUoAAern0uNj1RuRjq8zmvyksOxwOGlK5MBwuHjaVxMJ7G', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-11-12 11:05:44', '2018-11-12 11:05:44', 0),
(314, 0, 0, 0, 'Kasha', 'Hollway', '', NULL, 'emanuelclint03771755', '2390needs@compscorerric.xyz', '077 1705 7835', '$2y$10$R58pwj0zMIkTieALhkSVR.EmLl76h3557cr9w03wIgh2s1DWwBHUe', 'user', NULL, NULL, NULL, 'Greetings. The author\'s name is Eddie Amaral and that he totally digs that name. I\'ve always loved living co. What I love doing is kit cars and now i am trying to earn money with that. He is currently a bookkeeper. Her husband and her conserve a website. You would possibly want in order to it out: http://penisznovelo-eljarasok-hu.eu/deseo.html', '', '', '14', 'http://penisznovelo-eljarasok-hu.eu/deseo.html', '19 Circle Way', 'NA', 'G78 6rl', 'Virgin Islands (U.S.)', 2, NULL, '2018-11-13 08:42:18', '2018-11-13 09:05:26', 0);
INSERT INTO `users` (`id`, `power_users`, `is_verified`, `top_producer`, `firstname`, `lastname`, `fullname`, `accounttype`, `aka`, `email`, `phone`, `password`, `role`, `photo`, `photo_dir`, `photo_size`, `bio`, `facebook`, `twitter`, `instagram`, `youtube`, `address`, `state`, `zip`, `country`, `popular`, `membership`, `created`, `modified`, `expired`) VALUES
(315, 0, 0, 0, 'Pam', 'Brose', '', NULL, 'dedraalcorn09967815', '88087thatch@erexcolbart.xyz', '078 3267 6018', '$2y$10$4cx9U1QQZ102a0imPTfeS.0lNsqaEtFWI.KbWd.j63Fd85NTzjrAi', 'user', NULL, NULL, NULL, 'Greetings. Ok, i\'ll start by telling the author\'s name - Rico and he totally digs that reputation. Data processing will be the I support my family and the salary has been really comforting. It\'s not a trendy thing but what she likes doing is ballet and now she has time get on issues. For a while he\'s held it\'s place in Colorado as well as will never move. My wife and I maintain a website. You might want to examine it here: http://ingrandimento-pene-it.eu/', '', '', '16', 'http://ingrandimento-pene-it.eu/', '62 Freezeland Lane', 'NA', 'Dg2 2su', 'United Kingdom', 2, NULL, '2018-11-14 11:26:47', '2018-11-14 12:23:15', 0),
(316, 0, 0, 0, 'tseeyol', 'terver', '', NULL, 'kizzy', 'tseeyolterverrapheal@gmail.com', '09097968201', '$2y$10$oSmaNKSEvK75zCIdHliQfetk/JXggBsH2vUEI5Vk4BQ/13yn0oMFq', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-11-15 11:49:16', '2018-11-15 11:49:16', 0),
(317, 0, 0, 0, 'Kenry', 'White', '', NULL, 'Kenrywhite', 'kenrywhite@gmail.com', '08146599853', '$2y$10$N/mIkarrGVNPY/BDu94jo.zKfehJxnI.irLoSw/XJPyjpxOIU6UWG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-11-18 13:55:10', '2018-11-18 13:55:10', 0),
(318, 0, 0, 0, 'Christian', 'shaka', '', NULL, 'huncho', NULL, '08030573541', '$2y$10$5Esi0hoEOUWMrwUmW79Gi.dDI6W0Lwd3OUkOwKiIuHJVbkxnbFQxC', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-11-18 18:36:49', '2018-11-18 18:36:49', 0),
(319, 0, 0, 0, 'SAM', 'HARPER', '', NULL, 'HARPS', 'samharpermusic@gmail.com', '07932917796', '$2y$10$.fXEWWctEiqakVnMmIrW5uwVITu6RFb7p4uJg.6Fdmxmxd.8XUpBe', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-11-20 17:25:55', '2018-11-20 17:25:55', 0),
(320, 0, 0, 0, 'Emmanuel', 'Smith', '', NULL, 'Nasdaq', 'Emmanuelsmith110@yahoo.com', '08161180066', '$2y$10$ikLE.hTVGDGmBg/yG5bGee4FBNB6FwYPr7gzC/wc.vr67OJEUkdJu', 'user', '15428171542698051378715705422045.1542817303.jpg', 'webroot/files/Users/photo/', '1563752', '', 'https://m.facebook.com/home.php', '', '', '', '', 'Lagos state', '23401', 'Nigeria', 2, NULL, '2018-11-21 17:14:59', '2018-11-21 17:21:43', 0),
(321, 0, 0, 0, 'Pelumi ', 'Ayotomiwa ', '', NULL, 'Pepe ', 'Pelumialexpepe@gmail.com', '08106690871', '$2y$10$qqH9Yfem5mKu392lzt2kcOlByUGyFuEa8rZdnD2yokpvMOE7SAAVq', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-11-22 15:11:52', '2018-11-22 15:11:52', 0),
(322, 0, 0, 0, 'Sanusi ', 'Olayode', '', NULL, 'Yoriboi', 'dowwellnicole85@gmail.com', '08103302326', '$2y$10$q/LObJFpCFbNRqKOe0K2/eEGk.itg4IL4AUcCVBAHSr3LY6FSpsGS', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-11-23 09:43:24', '2018-11-23 09:43:24', 0),
(323, 0, 0, 0, 'Omadach ', 'John ', '', NULL, 'Johnny', 'omadachijohn@gmail.com', '+2348140454669', '$2y$10$WzLhrVbyMrJlm06Izer4oONGRTn1OXj83Hap4MW1fAV4ajZhyzABu', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-11-23 12:10:24', '2018-11-23 12:10:24', 0),
(324, 0, 0, 0, 'Adesina', 'Folu-Oni', '', NULL, 'Fo', 'adesinafoluoni@rocketmail.com', '5207436330', '$2y$10$XKR1P8LKEVVTS45Nu8/r4uuFuhgUBHFa07ZLspd1qmKRFCMb67cmG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-11-23 21:40:56', '2018-11-23 21:40:56', 0),
(325, 0, 0, 0, 'Umasom', 'Chims', '', 'Music Producer', 'Uc_beatz', 'chimsumasom@gmail.com', '+2348035120069', '$2y$10$cWge2xY5n.aFF20TWxMOueQZ1t8eEtGgesAX9akIqOGb4hJsf9oye', 'user', '20180903_123047.1543495459.jpg', 'webroot/files/Users/photo/', '537652', 'I am Uc_beats and I love sound and not any sound, but good and quality sound. I make dope beats. I am versatile so I am not restricted to a particular genre however I like to share ideas from my clients and other producers. I have been around for some years now and have worked with musicians and producers with different genres. I like to make that unique sound for you.', '', 'www.twitter.com/uchims1', 'www.instagram.com/uc_beatz', '', '', 'Lagos ', '+234', 'Nigeria', 2, NULL, '2018-11-24 14:17:49', '2019-03-17 17:24:14', 0),
(326, 0, 0, 0, 'Olaleye', 'israel', '', NULL, 'Drizz', 'olaleyetoluwani@gmail.com', '08166856721', '$2y$10$Ampo4ADYZ/S1CmynfNws5u6TdZ/RODVpXuygKsOdSWfABEjJg3Rra', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-11-26 21:38:36', '2018-11-26 21:38:36', 0),
(327, 0, 0, 0, 'Bitrus', 'Reuben', '', NULL, 'Mista Ruff', 'bitrusreuben0@gmail.com', '07032471686', '$2y$10$Z.WvoMOqzIkc/zW0eo4MX.Kz8nP.y/6D5iO3hqmc3IyKpqeR8Jxy.', 'user', NULL, NULL, NULL, '', '', 'Mista_ruff', 'Mista_ruff', '', '', '', '', 'Afghanistan', 2, NULL, '2018-11-29 15:25:13', '2018-11-29 15:31:04', 0),
(328, 0, 0, 0, 'Harry', 'Bankz', '', NULL, 'DriftB_', 'harrislezs@gmail.com', '07011375603', '$2y$10$ou/IzJYqffhYJk1gY5K63eOY7mqj6ODBrM30dijzKZ5Sp9jujweTa', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-12-07 05:45:33', '2018-12-07 05:45:33', 0),
(329, 0, 0, 0, 'mugaya', 'fahad', '', NULL, 'fahad king perfect ', 'mugayafahad@gmail.com', '0708383591', '$2y$10$JTLlacj8b271nzGtZnppw.3xsy3OnjrAEVg7BkwqJRcvgtiHeWzq.', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-12-10 09:59:43', '2018-12-10 09:59:43', 0),
(330, 0, 0, 0, 'Damilola', 'Olotu', '', NULL, 'Olotu', 'olotudammy@gmail.com', '8034210294', '$2y$10$zyQgT/aFc3CM1ck7qJBZV.sN/ArPmvdqoQnuWg3XQuU2sRhV.KO9i', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-12-10 13:21:37', '2018-12-10 13:21:37', 0),
(331, 0, 0, 0, 'Kashy', 'Jnr', '', NULL, 'Kashy ', 'halexranking@gmail.com', '+2348133529000', '$2y$10$CG1a.t3pBAf1V1zuEIHHFuyBSI3tdq4XFtIL2/8RjA.HATe9D1Sca', 'user', 'snapchat-1667591775.1544570451.jpg', 'webroot/files/Users/photo/', '398388', '', 'KING KASHY', 'Omooba_cashy', 'Kashy_jnr', 'Halexranking@gmail.com', '', 'Lagos', '100001', 'Nigeria', 2, NULL, '2018-12-12 00:13:50', '2018-12-12 00:20:51', 0),
(332, 0, 0, 0, 'Michael', 'Elliot', '', NULL, 'mestaromie', 'mestaromiebills@gmail.com', '+2348162189776', '$2y$10$yQV/vHoCpYGL2GpIpsN5euSOx0yHvAkiRvn1bOhA3MLSB74CK0GsO', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-12-13 15:18:41', '2018-12-13 15:18:41', 0),
(333, 0, 0, 0, 'James ', 'Adeniyi', '', NULL, 'ADEWAY', 'jadeniyi75@gmail.com', '678-670-5459', '$2y$10$QcHu9ecZPGD44mIlGYA1A.bADinSL2kBWg2/0N2mSpoiddBbG04R6', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-12-14 17:05:04', '2018-12-14 17:05:04', 0),
(334, 0, 0, 0, 'Chongkon', 'Samuel', '', NULL, 'Blackboi wonder', 'blackboiwonder1@gmail.com', '07062644338', '$2y$10$JfC8tstN9IABm2Ldr6oQs.ntUFXIl9YQV9q8ZQ0PDivYWC/EJbTYC', 'user', NULL, NULL, NULL, '', '', '', '', '', '', 'Jos', '', 'Nigeria', 2, NULL, '2018-12-18 07:23:53', '2018-12-18 07:32:49', 0),
(335, 0, 0, 0, 'Chongkon', 'Samuel', '', NULL, 'Blackboi_wonder', 'blackboiwonder1@gmail.com', '07062644338', '$2y$10$VYDVnKWKUw8kcvcI6094cu0m/d9JOBu0gU31E4ptq2xRm.n5vE4eC', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-12-18 07:24:24', '2018-12-18 07:24:24', 0),
(336, 0, 0, 0, 'Chongkon', 'Samuel', '', NULL, 'Kingbbw', NULL, '07062644338', '$2y$10$J9.XHS0XOi0eERIBiF.COetVbKPpKEmeE5aj.8R15VHqgBQw9H/Gy', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-12-18 07:24:59', '2018-12-18 07:24:59', 0),
(337, 0, 0, 0, 'Cole', 'Adedayo', '', NULL, 'Cole Blvck', 'coleblackofficial@gmail.com', '+2348065430615', '$2y$10$woBI6lq0NKoKZ/Jn3RvfxeoBQB16GA.1k5ZoP79DlRSdy7OLgNUwW', 'user', NULL, NULL, NULL, '', '', '', '', '', 'F.C.T, Nigeria.', 'F.C.T', '900001', 'Nigeria', 2, NULL, '2018-12-19 11:03:38', '2018-12-19 11:07:32', 0),
(338, 0, 0, 0, 'Nolan', 'Laguerre', '', NULL, 'nolanlaguerre9381', NULL, '0699 426 12 74', '$2y$10$Q5YuQjARqRYwJRvpmsDJ9eWAbnH/IAu1MoNEVJ2zGutxR0IfRx6nW', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-12-21 03:16:35', '2018-12-21 03:16:35', 0),
(339, 0, 0, 0, 'Shasta', 'Lambe', '', NULL, 'shastalambe77334', '74398laflen@tarcuttgige.eu', '0841 53 96 73', '$2y$10$vFakQ9v1kk4eBjEP33CWF.2dMRfbM7ckwfyQvtdP1pgM8oQmhSaYW', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-12-21 04:48:46', '2018-12-21 04:48:46', 0),
(340, 0, 0, 0, 'Maybell', 'Llewelyn', '', NULL, 'maybellllewelyn', NULL, '032 592 96 87', '$2y$10$O7SGeIfnoCRrqC6Q1shGW.AjrG2OOMMuykQeRmLV4ut7NWDA6chga', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-12-21 05:17:18', '2018-12-21 05:17:18', 0),
(341, 0, 0, 0, 'Nellie', 'Haun', '', NULL, 'nelliehaun9625079431', '87331cerecedes@analenfo111.eu', '(02) 6729 0397', '$2y$10$UXWYsjB4caVgGztsAKd8aOezMuu8KJ7pFjvH56XAJAx19aYoFEl5W', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-12-21 05:50:20', '2018-12-21 05:50:20', 0),
(342, 0, 0, 0, 'Veola', 'Hibner', '', NULL, 'princefontenot6358', '14341hasha@acnebrufolirime43.eu', '071 412 38 87', '$2y$10$euaXTZ3mEgawdXKSiMQ5..2QiVw.qpB5Jld.VRJxN3B7wESLgM07a', 'user', NULL, NULL, NULL, 'Greetings. The author\'s name is Santiago Vos but he doesn\'t like are extremely use his full domain name. Colorado is her birth place but she may have to move one day or any other. He is really fond of body building and now he has time and take it on new pieces. Meter reading is my employment now but soon We are on the. Her husband and her maintain web page. You might prefer to check it out: http://marirea-penisului-ro.eu/', '', '', '20', 'http://marirea-penisului-ro.eu/', 'Im Wingert 2', 'NA', '9525', 'Switzerland', 2, NULL, '2018-12-21 07:12:16', '2018-12-21 10:14:54', 0),
(343, 0, 0, 0, 'Albertina', 'Messner', '', NULL, 'albertinamessner4', NULL, 'YW', '$2y$10$Ua/I9UvhTZNf6Kg7TyG7L.HqxqyFoFGindWur7hcKOiPo0fw/QgKe', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-12-21 07:47:38', '2018-12-21 07:47:38', 0),
(344, 0, 0, 0, 'Xiomara', 'Leddy', '', NULL, 'roderickgraves5', '17180gavette@caidadepeloyal26.eu', '972 80 495', '$2y$10$a0XexrEc/t1H31VSDoljO.tASGAABR0jZuy9EJ0Y6UQcZwy6Hp76i', 'user', NULL, NULL, NULL, 'The author is known by common history of Patsy Gold though it is not her birth name. My house is now co and will never move. To climb will be the hobby she is going to never stop doing. Meter reading is what she does for an income. If you want to seek out more check out my website: http://tabletelor-impotriva-caderii-parului-ro.eu/', '', '', '17', 'http://tabletelor-impotriva-caderii-parului-ro.eu/', 'Walldens Veg 171', 'NA', '7056', 'Norway', 2, NULL, '2018-12-21 08:07:41', '2018-12-21 08:15:57', 0),
(345, 0, 0, 0, 'Amelie', 'Hawk', '', NULL, 'ameliehawk94563', '80882halford@gaterremeds1975.eu', '0664 217 59 69', '$2y$10$/tBk5P30hQfsdy/MVJYoVuTDjnSo8lXgbYSxCGOrED4V6qWYV9yRa', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-12-21 08:07:53', '2018-12-21 08:07:53', 0),
(346, 0, 0, 0, 'Arlene', 'Larcombe', '', NULL, 'shellilording69', '82619randall@enlerama.eu', '08024 60 22 94', '$2y$10$GVVTXQAixHL7wNikA8tREuj59QfAp8To8fzZpOQG.ynWNZ6jUmmGe', 'user', NULL, NULL, NULL, 'The author is known by the name of Patsy but large number of misspell the house. Montana is her birth store. Her husband doesn\'t like it the way she does but what she really likes doing is ballet will be the she has time in order to on issues. Dispatching the place I support my as well as it\'s something I love. She is running and looking after a blog here: http://basta-testosteron-boosters.eu/CeluraidMuscle.html', '', '', '23', 'http://basta-testosteron-boosters.eu/CeluraidMuscl', 'Waldowstr. 42', 'BY', '83602', 'Germany', 2, NULL, '2018-12-21 08:47:54', '2018-12-21 17:18:40', 0),
(347, 0, 0, 0, 'Jamel', 'Bostock', '', NULL, 'jamel56126113205', '62633giambruno@erexcolbart.eu', '06-87076918', '$2y$10$uIUYhqE0kjND2.uF3r43EuD4hzAv9DOLI5Xt.f6AzS6NOPC/QnyTy', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-12-21 08:57:08', '2018-12-21 08:57:08', 0),
(348, 0, 0, 0, 'Muoi', 'Carreiro', '', NULL, 'belinda10l04774799', '29362funderbunk@acontenle.eu', '070 6515 3000', '$2y$10$nO/dZM0IxSYdw8Y0xwctvONUl9kzEfiyhjQk2Is/zU9vD3Ch/pjDy', 'user', NULL, NULL, NULL, 'Greetings. Permit me to start by telling the author\'s name - Rico and he totally digs that identity. Data processing is when I support my relatives and the salary has been really accomplishing. The favorite hobby for my children and me is to solve puzzles having said that i can\'t let my profession really. Montana is where I\'ve been living. Check out my website here: http://tratarea-impotentei-ro.eu/', '', '', '18', 'http://tratarea-impotentei-ro.eu/', '58 Sea Road', 'NA', 'Ng4 0yr', 'Hungary', 2, NULL, '2018-12-21 10:32:02', '2018-12-21 13:59:51', 0),
(349, 0, 0, 0, 'Haley', 'Gammon', '', NULL, 'rodrigoelkin707897726', '225hobstetter@crosmereta.eu', '21-20-23-70', '$2y$10$PavGjiCHg0rZAkj9I3bhRuBatG0g7dXbL4z3BGtL61pRAOMVuVXV2', 'user', NULL, NULL, NULL, 'Hello! I want to start by saying my name - Jaime however don\'t like when people use my full phrase. New York is his at home. He used regarding unemployed acquire he a good interviewer and he\'s doing pretty good financially. Acting is one of the several things he loves most people. Her husband and her maintain a website. May be want to see it out: http://metode-de-marirea-penisului-ro.eu/turbomaxblue.html', '', '', '14', 'http://metode-de-marirea-penisului-ro.eu/turbomaxb', 'Eskelundsvej 1', 'REGION SJALLAND', '1533', 'Denmark', 2, NULL, '2018-12-21 13:03:47', '2018-12-21 13:51:54', 0),
(350, 0, 0, 0, 'Kandy', 'Wortham', '', NULL, 'kandy6506328455280', '13556beyers@centleadetai.eu', '077 2215 1392', '$2y$10$cdnZv3FJgFX8QSX4AZ1Fw.ItyODUqIbT5ZXlkhJ41IEfjkUy7hSni', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-12-21 15:56:52', '2018-12-21 15:56:52', 0),
(351, 0, 0, 0, 'Shenna', 'Crampton', '', NULL, 'shennacrampton125501', '16526strople@compscorerric.eu', '078 1677 7116', '$2y$10$ARshq6Vc2zdNu9rzripJgerGvO6KUZab2FphgITpFZ/oz7hnXezre', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-12-21 18:35:33', '2018-12-21 18:35:33', 0),
(352, 0, 0, 0, 'Ruthie', 'Halligan', '', NULL, 'rosakellermann67', '18348chabaud@concetomou.eu', '977 98 589', '$2y$10$x3rTc1GG536stImxO7.goeupatrsJCpvb4JBpV8iiyqlr1V9Rq9Re', 'user', NULL, NULL, NULL, 'Hello! Let me start by saying my name - Jaime nevertheless don\'t like when people use my full moniker. New York is quite his interior. He used for you to become unemployed and more so he is an interviewer and he\'s doing pretty good financially. Acting is among the many things he loves almost. Her husband and her conserve a website. Ads about them . want that compares it out: http://agrandir-son-penis-fr.eu/eroxel.html', '', '', '16', 'http://agrandir-son-penis-fr.eu/eroxel.html', 'Smedgata 166', 'NA', '1531', 'Norway', 2, NULL, '2018-12-21 19:28:44', '2018-12-21 20:20:44', 0),
(353, 0, 0, 0, 'Darlington ', 'Ashu', '', NULL, 'De Mayor ', 'demayor5410@gmail.com', '+13462198621', '$2y$10$Kbj9qu3H75PD078tAfvLYOqYZsbbvFz4Zi42zZkV8rY6H06EYvNFi', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-12-23 00:01:15', '2018-12-23 00:01:15', 0),
(354, 0, 0, 0, 'Benedict', 'Bassey', '', NULL, 'Bassey', 'benbassey@illusys.com.ng', '14549777', '$2y$10$QBJhE2jL940lsfW63DgoN.x24pEtfpB5Im0vbqwYg9wwHuWHHbV3i', 'user', 'passport.1545656572.png', 'webroot/files/Users/photo/', '37519', '', '', '', '', '', '', '', '', 'Nigeria', 2, NULL, '2018-12-24 13:43:01', '2018-12-24 14:02:52', 0),
(355, 0, 0, 0, 'Jamel', 'Whittington', '', NULL, 'jamiegreenham1607', '27632bonner@acnebrufolirime43.eu', '0477-9552536', '$2y$10$DYlJOpUKl25I.YNiD0kIfOOthc8tW38UrQ8tCPlP/nmazlVkbkO0y', 'user', NULL, NULL, NULL, 'Greetings. The author\'s name is Santiago Vos but he doesn\'t like making certain you\'re use his full domain name. Colorado is her birth place but she may have to move one day or one particular. He is really fond of body building and now he has time to consider new possessions. Meter reading is my employment now but soon I will be on a. Her husband and her maintain website. You might need to check it out: http://se-memberxxl.eu/', '', '', '26', 'http://se-memberxxl.eu/', 'Kvillevagen 66', 'NA', '360 13', 'Sweden', 2, NULL, '2018-12-26 03:14:38', '2018-12-26 03:20:00', 0),
(356, 0, 0, 0, 'Maryjo', 'Prins', '', NULL, 'maryjoprins979440', NULL, '070 6352 4651', '$2y$10$B/7d7GzpZCHzZaRW7vy8AOKxKXYUe6vmXtaXdVDTa0vntC5Zg25iq', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-12-26 04:36:19', '2018-12-26 04:36:19', 0),
(357, 0, 0, 0, 'Kina', 'O\'Dowd', '', NULL, 'kinaodowd216353486', '69139applebee@concetomou.eu', '805-979-6749', '$2y$10$sGnd1GNjozIKlX4HoH8JZucHoElT3lXbYDHRgJoNQ4jwcHwVFUGfq', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-12-26 10:50:38', '2018-12-26 10:50:38', 0),
(358, 0, 0, 0, 'Emmett', 'Sparling', '', NULL, 'emmettsparling5894348', '225hobstetter@acontenle.eu', '(03) 5328 6783', '$2y$10$RYdBzIrr501NHNhMUxKOM.kDbr99UvvHeYnlyR6eIp7Hxnzzmx7uC', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-12-26 14:37:12', '2018-12-26 14:37:12', 0),
(359, 0, 0, 0, 'Ernest', 'Saltau', '', NULL, 'ernestsaltau11347', NULL, '0317 9945276', '$2y$10$cuP82RhFJjT9HcZurYbmYeEYHI1Ju12sMDAYdkdcksZFXPdpBRk4W', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-12-26 19:14:18', '2018-12-26 19:14:18', 0),
(360, 0, 0, 0, 'Trey', 'Gain', '', NULL, 'treygain69481259', NULL, '0494 20 87 55', '$2y$10$NsuOjXzlZeAtR.2Fjj2VNuKjuGm3SDnmSRWEAhubd1WmI.xrD70um', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-12-26 22:41:38', '2018-12-26 22:41:38', 0),
(361, 0, 0, 0, 'Toney', 'Metters', '', NULL, 'toneymetters3882709', '48293garacia@concetomou.eu', '077 0963 9765', '$2y$10$woYOhwwDilDOBRYSKstexeYK529T8FAv5ZYoG7D6pnwZrg6C29h2i', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-12-26 23:48:43', '2018-12-26 23:48:43', 0),
(362, 0, 0, 0, 'Florrie', 'Parrott', '', NULL, 'florrieparrott48', NULL, '979 29 919', '$2y$10$S7b8RWzCfANHZRqS19FFvueejIb.4pnNlIIRTTMIwa58vlGE/pAk6', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-12-27 04:40:49', '2018-12-27 04:40:49', 0),
(363, 0, 0, 0, 'Stanton', 'Burch', '', NULL, 'brooksjackey982792', '2390needs@gaterremeds1975.eu', '04.27.22.73.23', '$2y$10$7Fv/P6mgIxOP4eyQ7lHbyeSFfNaUz4MgG02HjSpa.ZWC5H0DGSXGq', 'user', NULL, NULL, NULL, 'Greetings. The author\'s name is Eddie Amaral and the man totally digs that logo. Auditing is what she does for a full time income but she plans on changing information technology. What he really enjoys doing is to get together badges the actual is seeking make it a profession. For years she\'s been living in Montana but your girl friend will have in order to one day or one major. Check out her website here: http://tabletky-na-erekci-cz.eu/tonus-fortis.html', '', '', '13', 'http://tabletky-na-erekci-cz.eu/tonus-fortis.html', '87 Rue Gontier-Patin', 'CENTRE', '13090', 'France', 2, NULL, '2018-12-27 04:46:43', '2018-12-27 07:15:01', 0),
(364, 0, 0, 0, 'Michel', 'Mortensen', '', NULL, 'michelako6146089156', NULL, '60 832 79 52', '$2y$10$q4QPI6kw63XZAm4iy7M6gO1U9aPT/xEskMKm1WZOWfRC0fm5Eix9y', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-12-27 12:04:15', '2018-12-27 12:04:15', 0),
(365, 0, 0, 0, 'Barry', 'Blackmon', '', NULL, 'barryblackmon03', '86585kuether@towndewerap23.eu', '06-64600732', '$2y$10$K/3twc92YcWZ7AKH5Tz5z.LOU13qVwULlceE2drSVriel/K/FYPRa', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-12-27 14:21:48', '2018-12-27 14:21:48', 0),
(366, 0, 0, 0, 'Elena', 'Dewitt', '', NULL, 'elenadewitt7854235938', NULL, '0676 946 00 91', '$2y$10$twMvCXTND6Oqs4mHDtq.Z.mVX1DnSmIzYFD3JVEc0ffaa6DIrAPMe', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-12-28 03:05:26', '2018-12-28 03:05:26', 0),
(367, 0, 0, 0, 'Ayobami', 'Adebayo', '', NULL, 'Silvamiami', 'booksilvamiami@gmail.com', '09063689020', '$2y$10$7yJEKpQT4cHjcYkaZkDRq.EqiYX8DEqxPKJm9/RLeK3ZybDUQsSly', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2018-12-30 10:47:43', '2018-12-30 10:47:43', 0),
(368, 0, 0, 0, 'Edwin', 'Ogude', '', NULL, 'Ogude', 'fantorm1@gmail.com', '8089448279', '$2y$10$di3ecma5y8.RqGV41.WxNeAsagcC5n0dhwIHJNJvdtiBmE2bQrU4K', 'user', 'logo.1546422807.jpg', 'webroot/files/Users/photo/', '103262', '', 'https://www.facebook.com/AnthonyEdwinX/', '', 'Instagram.com/fantorm', 'https://www.youtube.com/channel/UCp88Mo6LT4Xzqc38L', 'No. 16 Abuja street kudenda kaduna', 'Kaduna', '062', 'Nigeria', 2, NULL, '2018-12-31 15:42:34', '2019-01-02 10:53:27', 0),
(369, 0, 0, 0, 'Abraham', 'Kissi', '', NULL, 'Esbonnito', 'djsoftbone@yahoo.com', '00230328129290', '$2y$10$CDAXBiWOFDwGWLX9N7qT3ema3GB.5LfRoi.grNcF9/AagAuLLlgUm', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2019-01-03 01:12:31', '2019-01-03 01:12:31', 0),
(370, 0, 0, 0, 'Egbekai', 'Victor', '', NULL, 'Victoriouz Icon', 'victoriouzicon@gmail.com', '+2348117391020', '$2y$10$Wkgtq5AkTCdpJ60JL0mUsejPWcdANsQqIqvsRRtu8HBUOTs3gg.w2', 'user', '5f0f00b8eec6383c106a10f9e52de5da_1548501937.jpg', 'webroot/files/Users/photo/', '34054', '', 'www.facebook.com/victoriouzicon', 'www.twitter.com/victoriouzicon', 'www.instagram.com/victoriouzicon', 'www.youtube.com/victoriouzicon', 'unit 2 block 1 victoria crest estate 1 lekki', 'lagos', '106101', 'Nigeria', 2, NULL, '2019-01-04 12:00:29', '2019-01-04 12:07:00', 0),
(371, 0, 0, 0, 'Lemuel', 'Rhoden', '', NULL, 'lemuel79b961437693', NULL, '0314 9865283', '$2y$10$fl4UR5SlzfFEuFIXy4DvyeeiBaschEGJzokno34aPrJAqoJJXlbcK', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2019-01-04 14:54:06', '2019-01-04 14:54:06', 0),
(372, 0, 0, 0, 'Gabriella', 'Hernsheim', '', NULL, 'gabriellahernsheim', '83417bleser@centleadetai.eu', '(19) 3052-5785', '$2y$10$.NCDCN4n36prg3FhLE0V6OjjuYydTUM4v3.ibse3wlZG.76Hm.y82', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2019-01-05 00:53:37', '2019-01-05 00:53:37', 0),
(373, 0, 0, 0, 'Upendo', 'Crew', '', NULL, 'Voice Of Peace', 'theupendocrew@gmail.com', '000000000', '$2y$10$RZzDPeAP8NYodHg.Kqm5GejdwddtQS85QqunRa13g4y60o43E9Jp.', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2019-01-08 05:17:56', '2019-01-08 05:17:56', 0),
(374, 0, 0, 0, 'Crew', 'Upendo', '', NULL, 'Voice of Inspiration', 'theupendocrew@gmail.com', '000000000', '$2y$10$EyOvjG3G/jZNEsx0sWUSBuOhYkWnd9ncz.oCyuedZ0WVgJKFZ7PHy', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2019-01-08 05:21:49', '2019-01-08 05:21:49', 0),
(375, 0, 0, 0, 'Claudia', 'Jennings', '', NULL, 'dyhycuc', 'dyhycuc@mailinator.com', '+851-57-690236', '$2y$10$XC9Jbt7udOM8Ifkts.T2BOUOC3xVhrPk71Hjmk8NND.SfGULycgVu', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2019-01-08 09:49:12', '2019-01-08 09:49:12', 0),
(376, 0, 0, 0, 'Ohaeri', 'Anthony', '', NULL, 'SD_Beatz', NULL, '08160186877', '$2y$10$Btt93v9gpHVXDL1dlOlPYeBB9hu3DAG2B25AYK4Ej4vOajceI4FYC', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2019-01-08 15:14:05', '2019-01-08 15:14:05', 0),
(377, 0, 0, 0, 'tseeyol', 'rapheal', '', NULL, 'kizz wonder', NULL, '09097968201', '$2y$10$1eleUDMlfMTn3WlG0wQBy.8NyJzoAamxvY2Hphpy04JbuJc1IYSS.', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2019-01-08 15:15:30', '2019-01-08 15:15:30', 0),
(378, 0, 0, 0, 'Kenneth', 'Chukwunonye', '', NULL, 'EmpTunes', 'empeetunes@gmail.com', '08039348770', '$2y$10$cP6R8WxBn550Qv1Yw1Oicu8GjeRNX7YAFUeNL.NgZIpnboXb.4Oxu', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2019-01-12 05:27:23', '2019-01-12 05:27:23', 0),
(379, 0, 0, 0, 'Ogunmola', 'Oluwatimilehin', '', 'Music Producer', 'Otimbababeat', 'ogunmolaoluwatimilehin@gmail.com', '08163773314', '$2y$10$uCYiy0mKD8g/sZtzTb99HOL9eYm0ckG115Z3dhFkkH4bc6Umk/nzu', 'user', 'il_570xn.1547302539.jpg', 'webroot/files/Users/photo/', '39140', 'I cook cool and lovely beat both locally or internationally just contact me of you need beat for your track ', '', '', '', 'https://www.youtube.com/channel/UCdTy6r2pr1UhCJo86', 'Ojota Arapa road Odode Idanre', 'Ondo', '340001', 'Nigeria', 2, NULL, '2019-01-12 14:53:35', '2019-01-26 09:59:06', 0),
(380, 0, 0, 0, 'Bangura', 'Osman', '', NULL, 'Godson12', 'uzzie44@gmail.com', '0779081519', '$2y$10$wmZ1Yp.Sq1rjtDKHs1ICQunBZMefOsF2r4hl2w1fjJAaaONXORcBC', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2019-01-13 04:06:10', '2019-01-13 04:06:10', 0),
(381, 0, 0, 0, 'Tina', 'Stopford', '', NULL, 'tinastopford29189', NULL, '630-590-3495', '$2y$10$IADmLIwiRFmnddt3uHC1K.lqkwBH07rlf9fT43tSJATXWA74TtS1a', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2019-01-16 03:04:45', '2019-01-16 03:04:45', 0),
(382, 0, 0, 0, 'adah', 'adole', '', 'Music Producer', 'Zac Lecter', 'zaclecter@gmail.com', '08075113950', '$2y$10$JQ5IA2N7tb0J.vk8YjxhTOXWUt3NH01KeRowkRJQtPfn2ameUCGtC', 'user', 'img_20190122_095335.1548428461.jpg', 'webroot/files/Users/photo/', '59585', 'Alternative music producer.\r\nI craft ambient soundscapes', '', 'https://twitter.com/zaclecter', '', '', '', 'Lagos', '', 'Nigeria', 2, NULL, '2019-01-17 16:37:17', '2019-01-25 16:01:24', 0),
(383, 0, 0, 0, 'Ikechukwu', 'Ekwueme', '', NULL, 'Ik', NULL, '08177123678', '$2y$10$GPBArJLVkjSm2ajGk0UgP.Aa4rg6TXj5LWGoKzSCGIziuBW2E9sIu', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2019-01-18 03:58:46', '2019-01-18 03:58:46', 0),
(384, 0, 0, 0, 'Oluyemi ', 'Taye', '', NULL, 'Stevynbright', 'tayestephenbright@gmail.com', '08029636310', '$2y$10$yZKfgvSnyDPR1ezTVHx/U.KsSengNEJnJKYpw6PHGZEsVTCS2EZMe', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', 2, NULL, '2019-01-18 17:51:35', '2019-01-18 17:51:35', 0),
(385, 0, 0, 0, 'chrime', 'x', '', NULL, 'chrime', 'mensenchris@web.de', '015238745238', '$2y$10$nlxItS97jNYPIvNUkRHjYePFiwfC/wSkyLy5JvOJhnrUB.gkBeRwK', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Germany', 2, NULL, '2019-01-18 20:28:26', '2019-01-18 20:28:26', 0),
(386, 0, 0, 0, 'Hendrix ', 'Beats', '', NULL, 'Hendrixx', NULL, '0551337279', '$2y$10$Zs9kVuReWOZf2SEcj1FDze57jjNMkxYV0R304fVBpIyY3/YRZ5yGu', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Ghana', 2, NULL, '2019-01-19 15:33:04', '2019-01-19 15:33:04', 0),
(387, 0, 0, 0, 'Jesse', 'Kristo', '', NULL, 'Jaytunes', NULL, '08128907109', '$2y$10$1DOMb.jvADnC/2D5u5Qjb.MHST5HURTcda3lK4zCvdcqbISnMaKqW', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-01-19 15:37:12', '2019-01-19 15:37:12', 0),
(388, 0, 0, 0, 'Jesse', 'Kristo', '', NULL, 'Jaytunez', NULL, '08128907109', '$2y$10$K72SE9ZdDCDQQoDu6ohC1.BnZmO1xQkCZO93E5.IZTAd9g5JbTrc6', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-01-19 15:44:09', '2019-01-19 15:44:09', 0),
(389, 0, 0, 0, 'Jesse', 'Kristo', '', NULL, 'Jaytunezz', NULL, '08128907109', '$2y$10$2rmbBU1GysIfp9VclUCMzeekyKLysEs4svOxiA2EyIP.piiUPY.Cq', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-01-19 15:49:17', '2019-01-19 15:49:17', 0),
(390, 0, 0, 0, 'Jesse', 'Kristo', '', NULL, 'Jaytunes1', 'gorillarecordzz@gmail.com', '08128907109', '$2y$10$JrE1XUMIQ8K3fPQzjFWa8OZqhIgo/BRi0x6tZEulws28nDSAqQi/W', 'user', 'psx_20181230_134613.1547910185.jpg', 'webroot/files/Users/photo/', '858368', '', '', '', '', '', '', '', '+234', 'Nigeria', 2, NULL, '2019-01-19 15:54:39', '2019-01-19 16:03:04', 0),
(391, 0, 0, 0, 'Rudra', 'Rock', '', NULL, 'Rudra', 'rudrapatel587@gmail.com', '9879879870', '$2y$10$dy6lyPdxC19.iLfr.KPMV.jLqNNrYROLB0mR81axwm3WO89rt6s0m', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-01-19 16:48:16', '2019-01-19 16:48:16', 0),
(392, 0, 0, 0, 'Rudra', 'Rock', '', NULL, 'RudraP', NULL, '9879879870', '$2y$10$BLAJHMS1mCV5/iZ53fJTKON24BdgKjWUdQ73DxumB4miUQ6EJHX2O', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-01-19 16:50:58', '2019-01-19 16:50:58', 0),
(393, 0, 0, 0, 'Kingsley', 'Ezeh', '', NULL, 'Khaye', 'dopekhaye@gmail.com', '08135272038', '$2y$10$r3RVTQM8OW3a0gV6PwmDGuUuGvHz77qWMsjwoXnaBpgedM8dZ3xgy', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-01-19 17:29:27', '2019-01-19 17:29:27', 0),
(395, 0, 0, 0, 'Hasibur', 'Rahaman', '', 'Guest', 'hasibbb', NULL, '789664114', '$2y$10$IruvRYqoqO453/EuBS.0XO7oqIJoU0YeShoAwUI6weMgb01JF1sim', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Netherlands', 2, NULL, '2019-01-20 10:17:19', '2019-01-20 10:17:19', 0),
(396, 0, 0, 0, 'asdasda', 'asda', '', NULL, 'asda', NULL, '787878787', '$2y$10$YMpLlHfirYTo3wO3Z2CMU.uBgqheckOCzMJ4ilvoCuC/LlGiKSxIW', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'New Zealand', 2, NULL, '2019-01-20 10:27:45', '2019-01-20 10:27:45', 0),
(397, 0, 0, 0, 'asdasda4', 'asda4', '', NULL, 'asda4', NULL, '787878787', '$2y$10$1TNjdA9lf1A4/zVsNj/RJ.CxWwxnsDfskh6dX48w58Jmrr3z3iOFO', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-01-20 10:33:25', '2019-01-20 10:33:25', 0),
(398, 0, 0, 0, 'Test', 'test2', '', NULL, 'test3', NULL, '7896644111', '$2y$10$2.2yjsjleFucXWE0XcKTXuMDEaJKvLbgmOTV0E8aSOZMeMIcGLTfW', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Netherlands', 2, NULL, '2019-01-20 10:37:21', '2019-01-20 10:37:21', 0),
(400, 0, 0, 0, 'qwweqwe', 'qweqwe', '', 'Guest', 'wqeq123', NULL, '232342342', '$2y$10$EycSqOGLTrbvE0o9UquYZunRT0jsoW5/ULr9apbzKdGMTdGBArCZy', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-01-20 10:43:32', '2019-01-20 10:43:32', 0),
(401, 0, 0, 0, 'qwweqwe', 'qweqwe', '', 'Guest', 'qqqqq', NULL, '232342342', '$2y$10$sctyUV75z7Vu300x/YpC6uVOazwUoszVvRPKsF8EwbeKPXND/pd3u', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-01-20 10:47:07', '2019-01-20 10:47:07', 0),
(402, 0, 0, 0, 'qwweqwe', 'qweqwe', '', 'Guest', 'qqqqq1', 'weqeqw@gms.vom', '232342342', '$2y$10$2xalgxONAq/wyg3nkX9EJOnaZUHkdXB0TuxUSi1EjqOkcSH56iNqG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-01-20 10:52:47', '2019-01-20 10:52:47', 0),
(403, 0, 0, 0, 'test3', 'test3', '', 'Guest', 'test2user', 'hasib2008@gmail.com', '7896412', '$2y$10$moZGqUlw9cXRDNw6XsE5EeuigkhA/sj7pC82lNoQ2iyngIAgQDW7u', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-01-20 10:55:57', '2019-08-18 08:38:13', 0),
(404, 0, 0, 0, 'Ejikemuwa', 'Thomas', '', 'Songwriter', 'Tommy', 'louis@freaksonar.com', '09099224985', '$2y$10$rMKgwR6HYZbk/r6SSy2xCe.bLGGeWktGoJ2Ivf6Fqgur8eJ5hHTgC', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Ghana', 2, NULL, '2019-01-20 13:28:48', '2019-01-20 13:28:48', 0),
(406, 0, 0, 0, 'Ejikemuwa', 'Odoh', '', 'Songwriter', 'Odoh', 'support@freaksonar.com', '8084281634', '$2y$10$QFunDZrvJVqtmbCpN910MeGxXsyTXIMokbnCQRrvgSwKtMKUX1wl6', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Paraguay', 2, NULL, '2019-01-20 13:36:29', '2019-01-20 13:36:29', 0),
(408, 0, 0, 0, 'Ikechukwu', 'Odoh', '', 'Video Director', 'ikonnnnn', 'info@freaksonar.com', '09099224985', '$2y$10$PuiDj4YDYeCVscHAaaTcqefb5TZ8W4AwfTbbo8TkZ.pq0UikjjnE6', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Ghana', 2, NULL, '2019-01-20 16:30:37', '2019-01-20 16:30:37', 0),
(409, 0, 0, 0, 'sam123', 'sam123', '', 'Guest', 'sam123', 'sumitchoudhary727@gmail.com', '7695202526', '$2y$10$9ZtwHYnzw0eBydPvTmKXaOzxUX5Z9IX9zhZ7kwXGqK919s6k/csuS', 'user', 'aea627e2c09b57e634969a1e180ae874_1548502736.png', 'webroot/files/Users/photo/', '139999', '', '', '', '', '', 'Mohali', 'punjab', '144216', 'Nigeria', 2, NULL, '2019-01-21 19:20:06', '2019-01-28 19:17:25', 0),
(410, 0, 0, 0, 'Ewere', 'Emihia', '', 'Artiste', 'D\'KING ', 'emihiaewerekingsley@gmail.com', '08092640804', '$2y$10$OVfS29bQR12mQ1.yo20t8ucmlvNQUNFpDL46sbD0mNy8/JPW.9VZ2', 'user', 'a950aa061eb0d1c3059f18b459cb296e_1551564744.jpg', 'Users/photo', '707170', 'I\'m a dope rapper, dope singer. I do all genre of music. I won the award as the best entertainer of the year in unilag. Follow me on IG @starboidking', '', '', '', '', '36, liberty estate ikorodu', 'Delta state', '+234', 'Nigeria', 2, NULL, '2019-01-21 21:30:44', '2019-03-02 23:12:24', 0),
(411, 0, 0, 0, 'Bobby ', 'Eze', '', 'Artiste', 'BobbiPhillie', 'bobbiphillie@gmail.com', '08087536580', '$2y$10$I9YaP48kfM8dibDxr8npt.JA6D7/SrZGaUT9QabpHGZJqOKH1JbgS', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-01-21 21:53:42', '2019-01-21 21:53:42', 0),
(412, 0, 0, 0, 'Naomi ', 'Mbullah', '', 'Music Producer', 'Bosslady', '05akuaku@gafe.molndal.se', '+46764549731', '$2y$10$PIMUzoMJ0utqM.WBmY2M3ueBOdgFDYnRTgG62v77inhRDR5Cc/4Nu', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Cameroon', 2, NULL, '2019-01-22 18:06:27', '2019-01-22 18:06:27', 0),
(413, 0, 0, 0, 'Naomi ', 'Mbullah', '', 'Guest', 'Empress ', NULL, '+46764549731', '$2y$10$yFgJsZVCvF/eCCWNj45xquBScOSmFUQzIH9V70HRCuvlZG5GLJ/OS', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-01-22 18:09:58', '2019-01-22 18:09:58', 0),
(414, 0, 0, 0, 'jagjit', 'singh', '', 'Guest', 'testtt', 'jagjit.singh@brihaspatitech.com', '9811441141', '$2y$10$25.6bmEkzWwPJhYPy/LAbuEqPhPtkZZsZ8VJhmhz.TwRjGKhl84o6', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-01-23 07:30:19', '2019-01-23 07:30:19', 0),
(415, 0, 0, 0, 'Abel', 'Makablade', '', 'Artiste', 'Dialloblade', 'blademaka@gmail.com', '08171185032', '$2y$10$dtk7RxtnSHrvdlj/czidj.ZMMGE8aJeVXq1iTFKrSrwFzP3APYPg.', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-01-23 08:06:46', '2019-01-23 08:06:46', 0),
(416, 0, 0, 0, 'sam1223', 'sam1223', '', 'Artiste', 'sam1223', 'sumrawal12@gmail.com', '9897454545', '$2y$10$ky7y5x9fmnopEsudyc2ePu9QWlRDPSdyBZcUFvOmS49IyDDq8VBbG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-01-24 17:57:55', '2019-01-24 17:57:55', 0),
(417, 0, 0, 0, 'Youknow', 'Tempo', '', 'Music Producer', 'YouKnowTempo', 'youknowtempo@gmail.com', '2054750611', '$2y$10$qG14RrcsElQI.P2.SotW1uyuwaUas8W5HL9d5muyZa1N28JSowyQ2', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-01-24 23:07:18', '2019-01-24 23:07:18', 0),
(418, 0, 0, 0, 'OTOBONG', 'BENNET', '', 'Artiste', 'OTO', 'emayakoto@gmail.com', '08169416379', '$2y$10$JVl1eg98U5TrZq5S/PAbTusIUIMjR8/m4Gbd.ed0j5Kgb6qCMm/PC', 'user', 'dc90664d1f28d4314e3fb860b382e075_1551679085.jpg', 'Users/photo', '32412', 'I am a singer and a rapper. I love creativity, rich and moral lyrics. ', '', '', 'Bennetotobong', '', 'I7 portharcourt st. Enugu', 'Akwa Ibom', '', 'Nigeria', 2, NULL, '2019-01-25 00:56:32', '2019-03-04 07:08:30', 0),
(419, 0, 0, 0, 'Ayush', 'Ramola', '', 'Guest', 'aayu_', 'ayush11ramola@gmail.com', '8909900744', '$2y$10$oxym5zDbLKNWgj3P56fpR.EQdV/pu/SAsARTNkc0VqUJvCQMdAX1K', 'user', 'jas_0426.1548399426.jpg', 'webroot/files/Users/photo/', '46413', '', '', '', '', '', '', '', '', 'India', 2, NULL, '2019-01-25 05:44:38', '2019-01-25 07:57:06', 0),
(420, 0, 0, 0, 'Parshav', 'Eternal', '', 'Artiste', 'Parshav Eternal', 'parshav@eternalsoftsolutions.com', '9879879879', '$2y$10$.HLqsKIc2O7s3ETNq5U9QOyfbP09wsIP1eWyZg.on.w59yxCxgl0y', 'user', 'parshav.1548395740.png', 'webroot/files/Users/photo/', '1007764', '', '', '', '', '', '', '', '', 'Nigeria', 2, NULL, '2019-01-25 06:17:02', '2019-01-25 06:55:39', 0),
(421, 0, 0, 0, 'Toluwalase', 'Phillips', '', 'Artiste', 'Teepee', 'teepeedg@gmail.com', '07058214091', '$2y$10$llq91.heYL6w7TNQPFjb6OE658Jb.R4zUTXlfiUzOX.BT3YbfKI/e', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-01-26 10:25:31', '2019-01-26 10:25:31', 0),
(422, 0, 0, 0, 'Joseph ', 'Enunwe', '', 'Artiste', 'Jhay', 'iammrjhay@gmail.com', '08186812366', '$2y$10$ibCmxEqKKvXLmvbs73Vl/Orn0kfj2.WPyGPw2GbQZpeWdcQTMufgC', 'user', NULL, NULL, NULL, '', '', '', 'Iammrjhay', '', '', '', '', 'Nigeria', 2, NULL, '2019-01-27 19:40:47', '2019-01-27 20:02:04', 0),
(423, 0, 0, 0, 'Somto', 'Anih', '', 'Artiste', 'Doublezee ', 'somtochukwuanih@yahoo.com', '09063215308', '$2y$10$rTae29TGXCnGYwyqFU.VQuszjXz3Dm74YTDihJ2zKKk.T2gT37sWi', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-01-28 10:58:56', '2019-01-28 10:58:56', 0),
(424, 0, 0, 0, 'King', 'Sochima ', '', 'Artiste', 'Whitedaking', NULL, '08140884004', '$2y$10$AUUZn22E2fr3f1rEl9WkC.6rg.s2suId3IXlsBcwvoUHa29p600VO', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-01-28 12:39:35', '2019-01-28 12:39:35', 0),
(425, 0, 0, 0, 'Cyril ', 'Bisong ', '', 'Guest', 'Super cyril', 'bisongcyril@yahoo.com', '9073422694', '$2y$10$2SkU5xZffGIe.r0EzPimz.boL7zRw5bhZY8PW0qIqB0ZsseqNiFPa', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Cameroon', 2, NULL, '2019-01-30 17:51:47', '2019-01-30 17:51:47', 0),
(426, 0, 0, 0, 'mosopeoluwa', 'praise', '', 'Artiste', 'mosh', NULL, '08077868478', '$2y$10$.go0KW8V.KMEl0f8FAHXS.zGjIdKPmZthUQyWCdHLpJiHHaMjybXG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-01-30 18:33:54', '2019-01-30 18:33:54', 0),
(427, 0, 0, 0, 'new', 'test', '', 'Guest', 'test', 'maanjaswinder2412@gmail.com', '9888329684', '$2y$10$Q6rsHqI2MOhwOzlbBxtVX.SswS0xz6WLERTSPCfnE9cntfKWrJoDK', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-01-31 21:32:04', '2019-01-31 21:32:04', 0),
(428, 0, 0, 0, 'maanjaswinder2412@gmail.com', 'maanjaswinder2412@gmail.com', '', 'Artiste', 'maanjaswinder2412@gmail.com', NULL, '9888329684', '$2y$10$7d23HgWatVd7Xj1/uija..U694afFlgiuZxFCRm0w0auEKfUQKZtq', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-01-31 21:32:41', '2019-01-31 21:32:41', 0),
(429, 0, 0, 0, 'Laki', 'Emmanuel', '', 'Artiste', 'Lb', 'lakiemmanuel.nel18@gmail.com', '+256777184057', '$2y$10$Pdo5wHheqXRmQDY5CkU7.uo8OAI51oXsHjN37x4wYic/UTZy/QqYO', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Uganda', 2, NULL, '2019-02-01 10:58:31', '2019-02-01 10:58:31', 0),
(430, 0, 0, 0, 'Cody', 'Lehrer', '', 'Guest', 'cody872258', NULL, '077 1154 7551', '$2y$10$mw5NaCdIoYuj3SE/K02OuujMwuogmhK9KbBohVSls7RPVpD5TTeae', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'United Kingdom', 2, NULL, '2019-02-01 13:51:56', '2019-02-01 13:51:56', 0),
(431, 0, 0, 0, 'Aliyu', 'Abdulphatai', '', 'Guest', 'Nextrated', 'aliyuabdulphatai001@gmail.com', '08134391234', '$2y$10$smvHhoDQqAHlg6Z1/C9/Q.eUsBfQ9prq6B31eh5Qvtgrs8gngCkSm', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-02-01 21:29:52', '2019-02-01 21:29:52', 0),
(432, 0, 0, 0, 'Riley', 'Menge', '', 'Guest', 'riley04320731770', NULL, '(61) 9826-4435', '$2y$10$HvH8MZasBpRxpB3hGEBiL.pNsPJXxd56rSMLjqlPNogbVrps5.7Tm', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Brazil', 2, NULL, '2019-02-02 02:23:24', '2019-02-02 02:23:24', 0),
(433, 0, 0, 0, 'Zane', 'Aiello', '', 'Guest', 'zaneaiello391', NULL, '06358 93 03 78', '$2y$10$VBIw3FAiJVwFmbB3fA5N9urHLOsCsFPkyOvIvu5dm2cvRHorAgL8C', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Germany', 2, NULL, '2019-02-02 03:33:58', '2019-02-02 03:33:58', 0),
(434, 0, 0, 0, 'Mira', 'Gee', '', 'Guest', 'mira0885769132', NULL, '0315 4826689', '$2y$10$l6s1b5axJAcQe2sCjozDkOQkdixTBsXgqYqBwtEtPWFxqZMWXD2me', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Italy', 2, NULL, '2019-02-02 04:16:36', '2019-02-02 04:16:36', 0),
(435, 0, 0, 0, 'Ara', 'Mulkey', '', 'Guest', 'aramulkey7519', NULL, '09283 95 60 13', '$2y$10$siqS7oX4cqkHxIB5fh71b.pVcxXdv/3PoHlPjFO6D9bhP2fP2dUbG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Germany', 2, NULL, '2019-02-02 08:29:33', '2019-02-02 08:29:33', 0),
(436, 0, 0, 0, 'Aiden', 'Duggan', '', 'Guest', 'aidenduggan0353592', '68443pipes@slavens.eu', '02.27.07.39.47', '$2y$10$DvCqhCAKKNB3.ecCN7csauGEA3UyUOTKsxZmRmXvu2qOCc1bQDwKS', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'France', 2, NULL, '2019-02-02 17:08:51', '2019-02-02 17:08:51', 0),
(437, 0, 0, 0, 'Aubrey', 'Travis', '', 'Guest', 'aubreytravis4713', NULL, '30-70-57-95', '$2y$10$ICrIDRtgrxOxhDxRyKXxQ.nztubFPL9u7jvWa.FOfSHy0TBqKUBgC', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Denmark', 2, NULL, '2019-02-03 09:55:23', '2019-02-03 09:55:23', 0),
(438, 0, 0, 0, 'Chukwukelue', 'Nwachukwu', '', 'Music Producer', 'Mactkay', NULL, '08148193843', '$2y$10$EcbMRekWsWpIeWcNQglU4u4zxcx.EAUK6hc/ZoFZHNYVLw7pS3GZC', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-02-03 18:25:23', '2019-02-03 18:25:23', 0),
(439, 0, 0, 0, 'asimiga ', 'Abraham ', '', 'Artiste', 'kay2', NULL, '0240752230', '$2y$10$W/aM1fDOW3ghrpyZsjgKSu1f53WPVF26GS7A4uk47hFhWi803XyDW', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Ghana', 2, NULL, '2019-02-03 23:18:41', '2019-02-03 23:18:41', 0),
(440, 0, 0, 0, 'Chukwukelue', 'Nwachukwu', '', 'Music Producer', 'Mactkay007', 'nwachukwuchukwukelu@gmail.com', '08148193843', '$2y$10$VrYa22oV6lAVlOE998brPue1NSulB4wVrTZ25TaARwtkKEAuaknJi', 'user', '87fdc041105ebda3d4533d30d2ba1681_1549259160.jpg', 'Users/photo', '36402', '', '', '', 'Its_mactkay', '', '', '', '', 'Nigeria', 2, NULL, '2019-02-04 06:37:25', '2019-02-04 06:46:00', 0),
(441, 0, 0, 0, 'Nuruddeen', 'Kassim', '', 'Artiste', 'Olamide', 'Keansrecord@gmail.com', '08033639479', '$2y$10$mL4oYyaaYHVOsT8zMLE7iuHhYwUSHwtBw9evU4vD9utlE8f6OgnY6', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-02-04 16:08:28', '2019-02-04 16:08:28', 0),
(442, 0, 0, 0, 'Clement', 'Ogbeche', '', 'Music Producer', 'Flawlessbeatzzz', 'ogbecheclement99@gmail.com', '08138745887', '$2y$10$LjtYlXoZI0o5pYCWWHNlbejFbSqOqbN.Vz9ByBcL8fVERPyPNjRY.', 'user', 'cfbe928c3dd8857752278fc6d1764903_1549346348.jpg', 'Users/photo', '1934637', '', '', '@flawlessbeatzzz', '@flawlessbeatzzz', '', '', '', '', 'Nigeria', 2, NULL, '2019-02-05 06:44:25', '2019-02-05 06:59:08', 0),
(443, 0, 0, 0, 'Homer', 'Ogilvy', '', 'Guest', 'homerogilvy111859728', '35517meissner@hootspaddepadua.eu', '(08) 8721 1348', '$2y$10$G/w2t3NuhxsCh/m9Q1.rMeElwpkc/CWzmwTUH6kF.glNVOQNh1Dt6', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Australia', 2, NULL, '2019-02-05 14:52:35', '2019-02-05 14:52:35', 0),
(444, 0, 0, 0, 'Enwongo', 'Udomah', '', 'Music Producer', 'Pezi', 'promzy132@gmail.com', '08116856825', '$2y$10$2U/4Udt3RpN8i48hkw1jBOX4KmgUvD5JljdHShNqIt3SwofTROTSK', 'user', '7bf0c16e88ad44397875d074e1ab3124_1559258029.png', 'Users/photo', '178462', 'beats.. beats... beats\r\nAfrobeats????????????????', '', '', 'instagram.com/beatcoconuts', '', 'Ewet Housing Estate', 'Akwa Ibom', '520231', 'Nigeria', 2, NULL, '2019-02-08 04:26:15', '2019-05-31 00:17:54', 0),
(445, 0, 0, 0, 'Enwongo', 'Udomah', '', 'Guest', 'Pezii', NULL, '08116856825', '$2y$10$qGlVVo7jCFculOk..5CP9uVdBA4tCG8/./39/OOj62eicw./q11KO', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-02-08 04:28:46', '2019-02-08 04:28:46', 0),
(446, 0, 0, 0, 'Luca', 'Kruger', '', 'Guest', 'lucakruger45624', NULL, '06-72706715', '$2y$10$zrlyvxaQ34ixUL3fXxTWzetW.qI22tzQVENZplWPBTRjIQ5gdZ56C', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Netherlands', 2, NULL, '2019-02-08 08:26:51', '2019-02-08 08:26:51', 0),
(447, 0, 0, 0, 'Elizbeth', 'Gawler', '', 'Guest', 'elizbethgawler7', NULL, '0699 866 45 67', '$2y$10$jQrZdt/5SXrOM1ST8dax3e7rhioKl3YqqudoFhwGd94WxEwnrDEwi', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Austria', 2, NULL, '2019-02-09 13:47:48', '2019-02-09 13:47:48', 0),
(448, 0, 0, 0, 'Emilie', 'Hust', '', 'Guest', 'emiliehust56254', NULL, '450-574-6901', '$2y$10$joEsIEucghFxnOp9vNvRI.tolQ7PNbLqgOn1c4AjGejGnZ7LkTtna', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Canada', 2, NULL, '2019-02-09 17:39:31', '2019-02-09 17:39:31', 0),
(449, 0, 0, 0, 'Eddy', 'ratty', '', 'Artiste', 'eddyratty ', 'eddy_ratty@yahoo.com', '+233238633602', '$2y$10$ngMx09zuCO5XzKihXOz5KOGRvUlhu2qYPdIp0W44oXE8jBxfOCFoi', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-02-09 18:30:00', '2019-02-09 18:30:00', 0),
(450, 0, 0, 0, 'Jana', 'Gooding', '', 'Guest', 'janagooding7', 'Jana-Gooding76@lostfiilmtv.ru', '(02) 6712 5390', '$2y$10$BJj9xNEajxky6C.OTXZqreNXtzyxL5CSnkH/TrrYuv3cytZIsaNq2', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Australia', 2, NULL, '2019-02-10 20:31:18', '2019-02-10 20:31:18', 0),
(451, 0, 0, 0, 'Emmanuel ', 'Benedict ', '', 'Music Producer', 'DJ Bayz', NULL, '08069769092', '$2y$10$DOPPYuWvbPyBI.Aahm0Odejatgl4yQ.up5U0eB.kuKqJ52z6T/qCm', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-02-11 03:27:03', '2019-02-11 03:27:03', 0),
(452, 0, 0, 0, 'Emmanuel ', 'Benedict ', '', 'Guest', 'Nextbayz ', 'Ogbiane@yahoo.com', '08069769092', '$2y$10$6svMSOKaYzYk.Okk5xElvepDnO8JDSJjb1wwqJYWOt9i5BwySV6Oq', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-02-11 03:28:56', '2019-02-11 03:28:56', 0),
(453, 0, 0, 0, 'Leslie', 'Macleay', '', 'Guest', 'lesliemacleay', 'Leslie.Macleay@imdbcom.ru', '040 53 36 72', '$2y$10$uoci3EqQlbc5Q5soJ6j0weDmQbnHRl.heb72Un/YRDvrlN6z5Oj/G', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Germany', 2, NULL, '2019-02-11 06:43:28', '2019-02-11 06:43:28', 0),
(454, 0, 0, 0, 'Kehinde ', 'Adeleye', '', 'Guest', 'Queen Kay', 'princessadebimpea@gmail.com', '09097560295', '$2y$10$UcuGJC.NOjH26EWKkJJTn.j3DWTuDMKFs2pe5kEZhEpUl2A38Y4G2', 'user', '17f70ec03c7af7c48de1f7b91d669399_1550051630.jpg', 'Users/photo', '89479', '', '', '', '', '', '', 'Lagos', '', 'Nigeria', 2, NULL, '2019-02-11 21:55:22', '2019-02-13 10:53:50', 0),
(455, 0, 0, 0, 'Bashir ', 'Ahmed ', '', 'Music Producer', 'AobeeBashir ', 'ahmedbashir710@gmail.com', '08169640279', '$2y$10$aIH3O8SYOnWG8p44qZ1kT.9ZftalXOHGCbEn7Ix2dt96uIxe./7U2', 'user', 'fe49acad95d0668754b7eb04cec91fb4_1563137788.png', 'Users/photo', '6217', 'Multi genre music producer from Kogi State, I make basically anything I\'m inspired to, and my goal as a producer is to be innovative through the whole process and at the same time making something people can actually enjoy, I try my best to make sure it\'s of the best quality and also to make sure it\'s beautiful to the ears. ', 'www.facebook.com/aobeebashir ', 'www.twitter.com/aobeebashir ', 'www.instagram.com/aobeebashir ', 'www.youtube.com/aobeebashir ', '', 'Fct ', '', 'Nigeria', 2, NULL, '2019-02-13 00:15:08', '2019-07-14 21:56:28', 0),
(456, 0, 0, 0, 'Mohammad', 'Whittington', '', 'Guest', 'psemohammad', 'hadria@g.gsasearchengineranker.pw', '08572 15 02 57', '$2y$10$oQCPFdb1T.UqfYJUn4cLXukRDlM3Vcu0ensKSdZ6mMVE2iKjt8p.W', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Germany', 2, NULL, '2019-02-13 05:42:05', '2019-02-13 05:42:05', 0),
(457, 0, 0, 0, 'Richie', 'Bandz', '', 'Artiste', 'RichieBandz', NULL, '09066886988', '$2y$10$GchTogfc4DI02nmfpgurVusQcSuYrZ723OK7afJ0HdKA.dArfUAC6', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-02-13 12:39:57', '2019-02-13 12:39:57', 0),
(458, 0, 0, 0, 'Richie', 'Bandz', '', 'Guest', 'Richie Bandz', 'thatunilagagbero@gmail.com', '09066886988', '$2y$10$dzjYK3moAhasHOXUqXPRAeEglvQv07LatYVZOSt2aJoybDQvkq6Ee', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-02-13 12:45:09', '2019-02-13 12:45:09', 0),
(459, 0, 0, 0, 'Makinde', 'Tobi', '', 'Music Producer', 'Mankind', NULL, '08158784621', '$2y$10$RmFqEr09QUpBfFHRU1v3u.LjsWPO5u82D6TY0xaQgI7pw5/CogolO', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-02-13 15:02:54', '2019-02-13 15:02:54', 0);
INSERT INTO `users` (`id`, `power_users`, `is_verified`, `top_producer`, `firstname`, `lastname`, `fullname`, `accounttype`, `aka`, `email`, `phone`, `password`, `role`, `photo`, `photo_dir`, `photo_size`, `bio`, `facebook`, `twitter`, `instagram`, `youtube`, `address`, `state`, `zip`, `country`, `popular`, `membership`, `created`, `modified`, `expired`) VALUES
(460, 0, 0, 0, 'Makinde', 'Tobi', '', 'Guest', 'TobiMankind', NULL, '08158784621', '$2y$10$XJqitb.GaPXHwmo.YHitTOQbYK9dMbogBLFmEwJfscDWIXz/HPRvu', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-02-13 15:04:54', '2019-02-13 15:04:54', 0),
(461, 0, 0, 0, 'Makinde', 'Tobi', '', 'Guest', 'MankindTobi', NULL, '08158784621', '$2y$10$BOinGTgIcgzrRcbyISsDWu1L9ngCmIP0YUNTlY.UhSpnBqH75bzbq', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-02-13 15:06:21', '2019-02-13 15:06:21', 0),
(462, 0, 0, 0, 'Makinde', 'Tobi', '', 'Guest', 'Producer Mankind ', NULL, '08158784621', '$2y$10$zJSCZKJFqdgPTXCKJNyfw.Fyc1tu2Doga5TF/tQTy0NSxvPYdn2XC', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-02-13 15:07:18', '2019-02-13 15:07:18', 0),
(463, 0, 0, 0, 'Makinde', 'Tobi', '', 'Music Producer', 'Producer Tobi Mankind ', NULL, '08158784621', '$2y$10$nHgDE00DjmXVqymwuZSjtekfujX6gWcRe7b3Sg1ykj7BnnCnuuiLK', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-02-13 15:10:15', '2019-02-13 15:10:15', 0),
(464, 0, 0, 0, 'Makinde ', 'Tobi', '', 'Music Producer', 'Man_kind', 'makindetobi360@yahoo.com', '08158784621', '$2y$10$wwE10nwY4g4sm0V/ki7FGuGSYNL1GV8rNqH1Q6sP3sssHmSIkO1t6', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-02-13 15:23:22', '2019-02-13 15:23:22', 0),
(465, 0, 0, 0, 'Alfonzo', 'Geiger', '', 'Guest', 'alfonzogeiger84', 'nance@b.wp-viralclick.com', '03.34.20.42.85', '$2y$10$ZU2HmZYXF81niIP/rRR0luUBUuAgyNLUxbwvWQpuv3sei7gIiRZCC', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'France', 2, NULL, '2019-02-14 09:57:50', '2019-02-14 09:57:50', 0),
(466, 0, 0, 0, 'OKORONKWO', 'VINCENT', '', 'Songwriter', 'Villyfresh', NULL, '08104697189', '$2y$10$7g4typ/SkJgw2M3FV/Wf/.15Kye/4HPjN1Iybagpk9NIpFQRXZn9W', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-02-14 23:33:26', '2019-02-14 23:33:26', 0),
(467, 0, 0, 0, 'iko', 'bass', '', 'Guest', 'ikobass', 'abelnkain@gmx.at', '06999205445', '$2y$10$zJ6617gXU9lnJIFN58JyVuk8cf0N0fMJN3hIwKk9Oi.RP/bA/4BD2', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-02-15 12:56:23', '2019-02-15 12:56:23', 0),
(468, 0, 0, 0, 'Nosazeme', 'Aimiuwu', '', 'Music Producer', 'A.N.E', 'lilaimy92@yahoo.com', '+2347067568802', '$2y$10$mWgxkrlQPgr0anNXRmCjBeQvw8rrJBbXDikJRc/7FuFsOuK7dDk4m', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-02-15 18:04:49', '2019-02-15 18:04:49', 0),
(469, 0, 0, 0, 'kelechi', 'opara', '', 'Artiste', 'stanleygray', 'oparakaycee4all@gmail.com', '08149611496', '$2y$10$2mNEo3rmzJWyByrJD.s5O.54PbTcpF0P3/Z6lxLJsDXWQPVGt3lKG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-02-15 18:42:50', '2019-02-15 18:42:50', 0),
(470, 0, 0, 0, 'Heriberto', 'Cross', '', 'Guest', 'sxaheriberto42177906', NULL, '0911 93 25 41', '$2y$10$yB8EJGVjpiLxJVibvxvb3.gc6mytR2v/4ymAf1v5J0OEOBsfzAZou', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Germany', 2, NULL, '2019-02-16 09:29:37', '2019-02-16 09:29:37', 0),
(471, 0, 0, 0, 'Michael', 'Edubio', '', 'Artiste', 'Y-SNAZZY', NULL, '09072699849', '$2y$10$J2n.aAnb3qlZQu2Uq58Ilulf1fil/R.FPhK1734nMpjUnYhot5iV6', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-02-16 12:46:16', '2019-02-16 12:46:16', 0),
(472, 0, 0, 0, 'Kenny', 'Didomenico', '', 'Guest', 'kennydidomenico', NULL, '024 250 80 59', '$2y$10$g/KVv3W93dTBHwyp3NgheOnwSLshZTeCPCuAWr34mPjoEUB6Ol26W', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Switzerland', 2, NULL, '2019-02-16 21:37:16', '2019-02-16 21:37:16', 0),
(473, 0, 0, 0, 'ADEYEMI', 'ADURAGBEMI ', '', 'Music Producer', 'LIXO', NULL, '08134591538', '$2y$10$fS/9GGkPH8wIIw/HyApa1ug5CQjcYoAoYENJxon5xxnZDuoQchFXC', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-02-17 22:16:09', '2019-02-17 22:16:09', 0),
(474, 0, 0, 0, 'Jorsh', 'Bold', '', 'Music Producer', 'Cedar studios ', 'joshua.praise33@gmail.com', '07033138741', '$2y$10$buWYwMZ9HJrBOxqOLYFJHupRkyD.MRv7s2NW.EnwGx21JvUq24Cze', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-02-18 14:32:07', '2019-02-18 14:32:07', 0),
(475, 0, 0, 0, 'Sha', 'Bas', '', 'Music Producer', 'Dj shabas ', 'jsabas2015@gmail.com', '2348116969223', '$2y$10$P/2EG/a13sg9JsKIKnhzgeZLOIg0t3SL9Nqgn/o/7QvEKgmZ6qqNi', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-02-19 13:43:49', '2019-02-19 13:43:49', 0),
(476, 0, 0, 0, 'Romeo', 'Rix', '', 'Guest', 'romeorix3677898', NULL, 'ZB', '$2y$10$TSSertRPCeaV/XAsG6D.peqLM2yvZMJd.YK1OtTsU//yFvBG3995O', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Austria', 2, NULL, '2019-02-21 00:53:41', '2019-02-21 00:53:41', 0),
(477, 0, 0, 0, 'Simon', 'Abernathy', '', 'Guest', 'simonabernathy', 'jksea@sohbet.pw', '0431 48 70 39', '$2y$10$UQheJZIdFXnXDrNOqiVZsOI4KgioQaTL/zdc5FyLpJUIa2y1qLVry', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Germany', 2, NULL, '2019-02-21 05:04:58', '2019-02-21 05:04:58', 0),
(478, 0, 0, 0, 'Eliza', 'Shanahan', '', 'Guest', 'elizatcl721', NULL, '06785 36 55 96', '$2y$10$7ri.mwgl4zqNo3c4Y6p3LukXHyQ/wobzem9Z3Wwz9K89B7zbz1jCG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Germany', 2, NULL, '2019-02-21 07:14:53', '2019-02-21 07:14:53', 0),
(479, 0, 0, 0, 'Connie', 'Pickrell', '', 'Guest', 'conniepickrell', NULL, '06-36951183', '$2y$10$43RAN/GDEvv6AZtE69sA7uhZ96l43lhCwqMYrK8PmDlPVKRP775wi', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Netherlands', 2, NULL, '2019-02-21 07:24:34', '2019-02-21 07:24:34', 0),
(480, 0, 0, 0, 'Alejandrina', 'Solberg', '', 'Guest', 'alejandrinasolbe', NULL, '0351 8617072', '$2y$10$smjho1Xy03hmhp/pDAKI4Oy1zvOXeAGtPla6v4E2d7jqFEZ/flOJG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Italy', 2, NULL, '2019-02-21 08:32:23', '2019-02-21 08:32:23', 0),
(481, 0, 0, 0, 'Vishal', 'Patel', '', 'Guest', 'hallu', NULL, '4654654654', '$2y$10$pd8UXVtiwouBZUpkvjKIjucVWHkp0zkUxZXic6ZOiRbNoMDphfUlK', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'India', 2, NULL, '2019-02-25 22:39:34', '2019-02-25 22:39:34', 0),
(482, 0, 0, 0, 'Ejikemuwa', 'Odoh', '', 'Guest', 'Gwggag', NULL, '0808 428 1634', '$2y$10$4Umeyglxhm.OXcsVYXg0Z.2N1xpwYBSldA7Gr5GqUyi9NvR6zeBFy', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-02-25 22:41:59', '2019-02-25 22:41:59', 0),
(483, 0, 0, 0, 'Adeyemi', 'Aduragbemi ', '', 'Music Producer', 'DrumStick ', 'tamilisoyi@gmail.com', '08134591538', '$2y$10$00LDMic21oMsRCwpRLSM6uUz94pCqSUMLs3BJJFYQJnM41Y1XdQk6', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-02-25 23:39:21', '2019-02-25 23:39:21', 0),
(484, 0, 0, 0, 'Business', 'MoneyWorldwide', '', 'Music Producer', 'BMW', NULL, '0777676518', '$2y$10$sl2yEd9YPNuFgjN3znCDYeFkdns2optVWwkbV8FtrSM9tMeieWg1e', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Liberia', 2, NULL, '2019-02-26 00:01:43', '2019-02-26 00:01:43', 0),
(486, 0, 0, 0, 'Jojo officiel ', 'Jojo ', '', 'Music Producer', 'Beentrill ', 'gnagnejosaphat01@gmail.com', '+22558309658', '$2y$10$TeDrIP3Rw2aAj2J8A2veSObFoFZWEsDyZbcQlfd6t9ZXxYzB1g9Rm', 'user', NULL, NULL, NULL, '', '', '', '', '', '', '', '', 'Cote d\'Ivoire', 2, NULL, '2019-02-26 11:25:49', '2019-02-26 11:35:42', 0),
(487, 0, 0, 0, 'Christopher', 'Sarlie', '', 'Music Producer', 'FixerBeatz', 'fixer.beatz@gmail.com', '231880780733', '$2y$10$MznCfEchP5D9xzq5hYT6RuoqRG1QoWUrkwgyeG9cFpZ1GT1zuYE9W', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Liberia', 2, NULL, '2019-02-26 12:30:55', '2019-02-26 12:30:55', 0),
(488, 0, 0, 0, 'nana', 'gee', '', 'Guest', ' cha cha', NULL, '5625073814', '$2y$10$U2kfxgk4c2CoNg1kxrY.le1zU1PNYEWkQXBWv0fTtZmv7v506u0gS', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'United States', 2, NULL, '2019-02-26 14:48:33', '2019-02-26 14:48:33', 0),
(489, 0, 0, 0, 'Joshua', 'De lamb', '', 'Music Producer', 'Josh lamb', 'joshdlamb1@gmail.com', '08061641557', '$2y$10$YeYbhXhkn9Agcv53adW.huUnLlBbL5PayL7zR2bfO/YFRd/1zLV4C', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-02-26 15:37:13', '2019-02-26 15:37:13', 0),
(490, 0, 0, 0, 'Damilola', 'Alonge', '', 'Music Producer', 'Mansa Jabulani', 'bazebeat10@gmail.com', '07030413417', '$2y$10$EdAat0LYZqQDdXBXqxRQ1uGdyCOyCqXO8te19UdA60vIi9Tn4Qcei', 'user', '7a60a601bde87c9d8e62559c0f8c3959_1551194660.jpeg', 'Users/photo', '25296', 'Please contact me in person if you’re trying to purchase any of my beat!!!!!', 'https://m.facebook.com/mansajabulani', 'https://mobile.twitter.com/mansa_jabulani', 'https://www.instagram.com/mansajabulani/', '', '12. Owolabi close, ogijo, ogun state ', 'Ogun', '23401', 'Nigeria', 2, NULL, '2019-02-26 16:16:47', '2019-03-16 07:39:26', 0),
(491, 0, 0, 0, 'Busola', 'Adetunji', '', 'Music Producer', 'Bussyjazz', NULL, '07062202077', '$2y$10$5LtEmoGXVNXKfZf9PPqa.u6P0qDI.2OyxEzxN9BBQv1OPZTmqe2yK', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-02-26 18:55:29', '2019-02-26 18:55:29', 0),
(492, 0, 0, 0, 'Wendyam', 'kere ', '', 'Artiste', 'stephkill', 'stephkillthebeat@gmail.com', '6467148429', '$2y$10$ecM8Dp6Ld0c6eU4eU0QmeOs.w7Bn3lYv/JDc9U.CQBz4evcR4vQgS', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'United States', 2, NULL, '2019-02-27 06:09:32', '2019-02-27 06:09:32', 0),
(493, 0, 0, 0, 'Hoang', 'Le Xuan', '', 'Music Producer', 'bogo01', NULL, '0962513941', '$2y$10$MRUTNnWgiZ2OpRX3KrtXROpfhjsWmIN6FpBZTi1IslK/wWBUv9WOu', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'United States', 2, NULL, '2019-02-27 09:13:21', '2019-02-27 09:13:21', 0),
(494, 0, 0, 0, 'Elvis', 'Felix', '', 'Music Producer', 'E-mix', 'feliselvis@gmail.com', '09078118199', '$2y$10$hKIh/t3U0zUKYefZrZgch./dKubTboqbf8MZxR5QQFCIxyGCPznOe', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-02-27 10:17:53', '2019-02-27 10:17:53', 0),
(495, 0, 0, 0, 'endy', 'sam', '', 'Guest', 'brawnee', 'enduranceab67@gmail.com', '08060132684', '$2y$10$P0GpDhN2Cqr8DEC2LCAbVO9HW8ajqNB5hEjvp5DTieiCc/1GaaEwm', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-02-27 11:19:33', '2019-02-27 11:19:33', 0),
(496, 0, 0, 0, 'Brandie', 'Howey', '', 'Guest', 'brandiehowey25018017', NULL, '02202 98 38 58', '$2y$10$yQNaNrX0HLbpLimewLfwQ.LDJ.iKmyb5VglGUWvRNMweuGlIqRyK.', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Germany', 2, NULL, '2019-02-27 15:27:34', '2019-02-27 15:27:34', 0),
(497, 0, 0, 0, 'Randy', 'jay', '', 'Guest', 'Randyjaytunez', 'emeraldsheriff@gmail.com', '08170426087', '$2y$10$D.XKvWBaqwnZcbYsWklXGeAWgVgoM26kU01mn8hzv6GNeVb8jQOyW', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-02-27 17:48:42', '2019-02-27 17:48:42', 0),
(498, 0, 0, 0, 'Emehel', 'Emmanuel ', '', 'Music Producer', 'FX REX', 'raymondwillyy@gmail.com', '08103939599', '$2y$10$HdgmMT.ekq1i/r/Sh8mow.ImBcV3bPEicalLqvQt7L7dmo.BMGEy2', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-02-27 18:20:33', '2019-02-27 18:20:33', 0),
(499, 0, 0, 0, 'Attih', 'Ekpenyong', '', 'Music Producer', 'Hesky', 'itonye@yahoo.com', '07034747262', '$2y$10$fETG6FHCsq0m5jxHPUJOHOhgV84ljHx3Vod.GQPxqDusluTeKAdhS', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-02-27 18:27:38', '2019-02-27 18:27:38', 0),
(500, 0, 0, 0, 'Kwembe', 'Peter', '', 'Music Producer', 'Kwems P', 'kwembep@gmail.com', '08169555823', '$2y$10$J6YMhNZ7ynp8Ha5on5epF.OE2tbTKRQ1n2ZxOpqfHWRnk7IPODoWy', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-02-27 19:46:09', '2019-02-27 19:46:09', 0),
(501, 0, 0, 0, 'Winnie', 'Olani', '', 'Artiste', 'Winnie', NULL, '2402544600', '$2y$10$NBtne7/M1wrt44ffKC0Oy.dkpT5fargShEoT4wzgnJ86zDz.V6H/S', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'United States', 2, NULL, '2019-02-27 20:07:33', '2019-02-27 20:07:33', 0),
(502, 0, 0, 0, 'Lola', 'Mulquin', '', 'Guest', 'lolamulquin314053', NULL, '304-513-8811', '$2y$10$U0s4dyI3dwQ5uSh2NehFOepJl8C1cV77U//OvrVUSy99IXw/Wl6Q6', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'United States', 2, NULL, '2019-02-27 20:56:33', '2019-02-27 20:56:33', 0),
(503, 0, 0, 0, 'Augustine', 'Gideon', '', 'Music Producer', 'Soundzofasher ', 'soundzofasher@gmail.com', '09050333716', '$2y$10$G2XGHOp4MVX/jyvQZKI5J.lm1EEbYv.DiSMtst6yERZ/XD2TsrcBe', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-02-27 21:16:17', '2019-02-27 21:16:17', 0),
(504, 0, 0, 0, 'victor', 'ekeoma', '', 'Music Producer', 'beatzmotion', NULL, '07035355792', '$2y$10$7D9C2otSqIgjAIdgAvFQ2uBcm3dit9OjcJwsNp04RhITPKssj1K9a', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-02-27 21:30:51', '2019-02-27 21:30:51', 0),
(505, 0, 0, 0, 'Obinna', 'James', '', 'Music Producer', 'TruKordz', 'truchords@gmail.com', '07057846406', '$2y$10$Y0vZ3Rox26qKsahMMKiulezbJGvhICtby8DeYyc5bBHeCXcrjelrq', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-02-27 21:30:56', '2019-02-27 21:30:56', 0),
(506, 0, 0, 0, 'Adewumi', 'Olaoluwa', '', 'Music Producer', 'Olami', NULL, '07033240605', '$2y$10$aHXSVqrKBDmXdRdbGMZR3uwZuug.BSVxDwh8hVaKPodupbPlvJR6G', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-02-27 21:38:52', '2019-02-27 21:38:52', 0),
(507, 0, 0, 0, 'Philippe', 'Edouard', '', 'Music Producer', 'EKMAP', 'piannilip@yahoo.fr', '+18683104874', '$2y$10$7DPS9c8qW1JSCdmnDBb9k.RY3/w14SLW.ZwoTBnjEArh7OX97f7Ye', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Trinidad and Tobago', 2, NULL, '2019-02-28 03:54:18', '2019-02-28 03:54:18', 0),
(508, 0, 0, 0, 'Phoebe', 'Mill', '', 'Guest', 'phoebemill', 'vera.7ix2@mail.ru', '034 912 17 64', '$2y$10$541JYsGq1.MKgJJvbBahdO3kkMfV3rXfMMxik1D2L9jDh4d4gb1Z6', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Switzerland', 2, NULL, '2019-02-28 06:33:48', '2019-02-28 06:33:48', 0),
(509, 0, 0, 0, 'Wisdom', 'Aniefiok', '', 'Music Producer', 'Wisebeatz da Eva green', 'youngwizzywisdom@gmail.com', '+2348066278296', '$2y$10$bN96UDezUXvCxehj6JViFOFeqmQ8hS.K9xAUxXT74QAzDQJJ5xLfy', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-02-28 06:34:06', '2019-02-28 06:34:06', 0),
(510, 0, 0, 0, 'Prince a', 'Jallahquay ', '', 'Artiste', 'Melvin Valentino Prince ', 'princeajallahquay4455@gmail.com', '0775634220', '$2y$10$cJq5/hjT6T2rxL3M3pUXKuwnE50qZ7RrfdU608PU6TG0MDv8pj97G', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Liberia', 2, NULL, '2019-02-28 11:07:31', '2019-02-28 11:07:31', 0),
(511, 0, 0, 0, 'Slide', 'Atule', '', 'Music Producer', 'Slide', NULL, '08031142339', '$2y$10$v.3jCPe/o7JYGubbi/6eMOQh7U1nwPmazbHvrvmPuq5O.sw1vijCW', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-02-28 13:37:42', '2019-02-28 13:37:42', 0),
(512, 0, 0, 0, 'Edson', 'Mujuni', '', 'Music Producer', 'Eddie Junny', NULL, '+255674487582', '$2y$10$BqHPO28iKzm5iXfgDBblqOTAOlAjS9c2Peerq9IU2aFP9Xz3UgHLO', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Tanzania, United Republic of', 2, NULL, '2019-02-28 15:42:09', '2019-02-28 15:42:09', 0),
(513, 0, 0, 0, 'Prince', 'Theophilus', '', 'Video Director', 'Teepsoul', 'teepsoulent@gmail.com', '08132345114', '$2y$10$b8Fs4lBc4IpLe/DI5uBUxeE9mI82RletKc3p.Rq1twlj9EeIe.qFW', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-02-28 16:00:47', '2019-02-28 16:00:47', 0),
(514, 0, 0, 0, 'Edson', 'Mujuni', '', 'Music Producer', 'Eddie J', 'junnyedson24@gmail.com', '674487582', '$2y$10$7n7NRTucj/NDrMf.f2ARcOA9fgMzfijjxQ4PaI2SydkRRSLEI.sRa', 'user', 'c5a6733f897b2492ce7d90b54d69fef6_1551447798.jpg', 'Users/photo', '369913', '', '', '', 'http://www.instagram.com/official_eddie_junny/', '', '7756, Mwanza, Tanzania', 'Tanzania/Mwanza', '+255', 'Tanzania, United Republic of', 2, NULL, '2019-02-28 16:01:36', '2019-03-01 14:43:18', 0),
(515, 0, 0, 0, 'Collins', 'Michael', '', 'Music Producer', 'Shadyberry ', NULL, '09061906682', '$2y$10$TrcHW0.rZWMRTUqAdvgrYu9N7Qy1UgsbS0k0utkh9nnYMx4uT7dKO', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-02-28 22:17:13', '2019-02-28 22:17:13', 0),
(516, 0, 0, 0, 'Ada', 'Villanueva', '', 'Guest', 'adavillanueva17', '68845percontino@enercranyr.eu', '0664 248 22 34', '$2y$10$OLgqxuiS5b2vgxIceI25/O5qF4cKWW3CP7P7BJzCZ/E7AL1/0jqki', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Austria', 2, NULL, '2019-02-28 22:48:57', '2019-02-28 22:48:57', 0),
(517, 0, 0, 0, 'Mbagha ', 'Jay', '', 'Music Producer', 'Jaydee', NULL, '09039181330', '$2y$10$OKi0RxQunf5UJnW0ZEeqS.G9A5LFvq/GL6Kx5jnQO5kai0AEXYDbu', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-02-28 22:51:33', '2019-02-28 22:51:33', 0),
(518, 0, 0, 0, 'Chas', 'Lesina', '', 'Guest', 'chaslesina', 'gary@shangwaiwang.com', '01.01.64.27.44', '$2y$10$9.c7TZ1tVix7n6asAdbqjOSzqgaA.RcpKDQeZ2UG5EscQJkyet32O', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'France', 2, NULL, '2019-02-28 23:43:42', '2019-02-28 23:43:42', 0),
(519, 0, 0, 0, 'Emmanuel', 'Akwuba', '', 'Music Producer', 'Dadipee', 'peedeveestudios@yahoo.com', '+2348032740867', '$2y$10$kzV4LRbxBwFIhWYYfZuvB.LW6xNbIO7TQUOv0cS2If8.9v.NAbwLq', 'user', '42db060e8aeb043e55dcb51672c3d5cf_1551496056.jpg', 'Users/photo', '53149', 'Am a music producer and entrepreneur. CEO Pee De Vee Entertainment.', 'dadipee akwuba', '@dadipeebeatguru', '@dadipeedbeatguru', '', '', 'Lagos', '', 'Nigeria', 2, NULL, '2019-03-01 01:10:36', '2019-03-02 04:07:36', 0),
(520, 0, 0, 0, 'Connie', 'Bryce', '', 'Guest', 'randallcochran082614', '61807roscorla@tarcuttgige.eu', '077 8996 8269', '$2y$10$EtG.A75eXzgn1Zd2Q0Nfcuekb0MwgyXQ5FKpNQewm393Ekvo7.3Im', 'user', NULL, NULL, NULL, 'Greetings. The author\'s name is Santiago Vos but he doesn\'t like if you want to use his full logo. He is really fond of horse riding but he\'s thinking on starting new stuff. His family lives in Indiana but he will probably have for you to one day or an alternative. The job I have been occupying detrimental is a bookkeeper and it has something I must say i enjoy. He\'s not godd at design but additionally post want to use his website: http://integratoriperdisfunzioneerettile.bloggg.org/eracto.html', '', '', '18', 'http://integratoriperdisfunzioneerettile.bloggg.or', '11 High Street', 'NA', 'Rh20 2du', 'United Kingdom', 2, NULL, '2019-03-01 02:03:16', '2019-03-01 03:22:17', 0),
(521, 0, 0, 0, 'Tyvan', 'Wilson', '', 'Artiste', 'Soundkiller', 'henryroberts331@gmail.com', '+231779004506', '$2y$10$0rDegRzRtzAW1qKe52TuCeOMwPGnJTsYMnBTl7l3W0drWHUoWU9FW', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Liberia', 2, NULL, '2019-03-01 03:17:17', '2019-03-01 03:17:17', 0),
(522, 0, 0, 0, 'Adeyemi', 'Emmanuel', '', 'Music Producer', 'akin', NULL, '08025879733', '$2y$10$41KLUjzApKaSZcxVsElflu7KBWqBI6ND/.jKgNYa5Q50v5h.2bAyi', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-03-01 07:49:34', '2019-03-01 07:49:34', 0),
(523, 0, 0, 0, 'Ibejohn', 'Ibejohn', '', 'Guest', 'Ibejohn', 'ibejohn501@gmail.com', '09096080476', '$2y$10$8tgHQLegZZvBYnFuOU20BOZI/GZsj3bxxjrHelTxAHAR9gCXG/8Ye', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-03-01 07:53:45', '2019-03-01 07:53:45', 0),
(524, 0, 0, 0, 'Kanu ', 'Gideon ', '', 'Music Producer', 'Jfi Studios ', 'Jfistudiostpb@gmail.com', '08073859386', '$2y$10$cOBIVbho2P4cvepA6ZlNB.svMw/idDubv4hhysZ0eSqlHzTp3BfEq', 'user', 'dbc6aa42d4b7e30c81605138c5a5b4dd_1551474552.jpg', 'Users/photo', '182405', 'just a lover of music,love been inspire and i make music to inspire you', '', '', '', '', '16 ben oyeka,Ago Okota,lagos.', 'lagos', '100001', 'Nigeria', 2, NULL, '2019-03-01 09:01:47', '2019-03-01 22:09:12', 0),
(525, 0, 0, 0, 'Kanu ', 'Gideon ', '', 'Guest', 'JfiStudios ', 'Jfistudiostpb@gmail.com', '08073859386', '$2y$10$vaB3h3SavcR.VvIEy1v8m.dx9mh/TNvloYNDtsxizvmFrLdvNDguK', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-03-01 09:05:03', '2019-03-01 09:05:03', 0),
(526, 0, 0, 0, 'Curtis', 'Burbank', '', 'Guest', 'curtisburbank', 'man@g.gsasearchengineranker.pw', 'EW', '$2y$10$K3Toe71zQ3HdAx4PDQa4yuQQbyimdoujqM/sXYkRWYlSDG2fSPK3e', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Austria', 2, NULL, '2019-03-01 11:57:58', '2019-03-01 11:57:58', 0),
(527, 0, 0, 0, 'Anuwa', 'Audu', '', 'Music Producer', 'Fan-c Beats', 'Anuwaaudu3@gmail.com', '08081646008', '$2y$10$50YXlWfbfdlojhRcjwEh.urE0zTtTzJRLVIegeWuhx7LL6zePh0xK', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-03-01 14:06:14', '2019-03-01 14:06:14', 0),
(528, 0, 0, 0, 'Godwin', 'Ifeanyichukwu', '', 'Guest', 'Hicey', 'nonsosam75@gmail.com', '0810102459', '$2y$10$wZ5rmKtKypnLRbjVt/U2A.yainCm0Z57rLuDdCVh9H/XVB74lYaqy', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-03-01 18:52:26', '2019-03-01 18:52:26', 0),
(529, 0, 0, 0, 'Nicholas', 'Somi', '', 'Music Producer', 'Nicholas somi', NULL, '0763427324', '$2y$10$iDXv2EGsfElTAYIEMt8PZOoWIe7MvhJ24oXmItqoqfoq4MZGQKTGy', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Tanzania, United Republic of', 2, NULL, '2019-03-01 19:38:19', '2019-03-01 19:38:19', 0),
(530, 0, 0, 0, 'badewa', 'titilayo', '', 'Guest', 'faymourz', NULL, '09052802842', '$2y$10$eMfKBAbqfaQr30HUeOzzc./Rjv0FcbHyUbMc/Gbcd/7apB61K2tkC', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-03-01 21:38:56', '2019-03-01 21:38:56', 0),
(531, 0, 0, 0, 'Rex', 'Robert', '', 'Songwriter', 'Rexkid Moomboy', NULL, '+23278322993', '$2y$10$ZshdRMFQnRml/b0WX4BOKOXwKhb3vZm9NUvPYw2u51Rx04JA30iB.', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Sierra Leone', 2, NULL, '2019-03-02 00:39:16', '2019-03-02 00:39:16', 0),
(532, 0, 0, 0, 'Kingsley', 'Williams', '', 'Artiste', 'KSJ', 'ksjbooking@gmail.com', '08183742908', '$2y$10$H1lc7mDR9yF5IQZqDjkiEudZmA8SNLEg.XJINnVzXphd0EGbns9VK', 'user', '4d1fbd5e31a3f89f3f39f5e54f17dd7d_1551488530.jpg', 'Users/photo', '88934', '', 'facebook.com/ksjofficial', 'twitter.com/ksjofficial', 'instagram.com/ksjofficial', 'https://www.youtube.com/channel/UC1KGlaaadvq0S0SjY', '', 'Lagos', '', 'Nigeria', 2, NULL, '2019-03-02 01:54:18', '2019-03-02 02:02:10', 0),
(533, 0, 0, 0, 'Francis', 'Kemah', '', 'Music Producer', 'Frank Kem', 'kemahdinhovic13@gmail.com', '+231778565539', '$2y$10$BnypEr1yUv.XD8PuwX97sO6PgQzhC1GWlFybi.NdBqTTk9B9aelaK', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Liberia', 2, NULL, '2019-03-02 08:26:15', '2019-03-02 08:26:15', 0),
(534, 0, 0, 0, 'Abass', 'Mamour', '', 'Guest', 'El bvndit ', NULL, '783657340', '$2y$10$TybW1aAOItJO54Ho0I1r.OAquolhFaw7nn2yHHX/h2IOSTMT9YWwS', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-03-02 10:11:57', '2019-03-02 10:11:57', 0),
(535, 0, 0, 0, 'Chukwudi', 'Madu', '', 'Artiste', 'CMJ', 'chukwudimadu26@gmail.com', '08133842402', '$2y$10$KMAYr2gpEk6STlVbaenzfuqXTt1CEY0EjE3R5BNIo7pencN/NxZzm', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-03-02 12:39:11', '2019-03-02 12:39:11', 0),
(536, 0, 0, 0, 'Cecile', 'Foltz', '', 'Guest', 'cecileu47971100', 'sandy@xxoo321.com', '(71) 9371-8728', '$2y$10$S/Gb3dkHpxUqGEINTVvjr.OxCKq0mu9ScRt4e.0/Zqt5LJGze0gUu', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Brazil', 2, NULL, '2019-03-02 12:42:53', '2019-03-02 12:42:53', 0),
(537, 0, 0, 0, 'Assane', 'Ndiaye', '', 'Artiste', 'Pissenpro', NULL, ' 777981681', '$2y$10$BC3sVi8o4q8hTIPAwLfV4uUEZQJ8/GHFjthbGZE8lvTL/f1HfIgE6', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Senegal', 2, NULL, '2019-03-02 12:43:17', '2019-03-02 12:43:17', 0),
(538, 0, 0, 0, 'Assane', 'Ndiaye', '', 'Guest', 'Papipuncho', NULL, ' 777981681', '$2y$10$n8W15EknGuAeGFXP2rSSD./H7SBmG00sPKWoURqplAceHVa8v8ZQG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-03-02 12:44:44', '2019-03-02 12:44:44', 0),
(539, 0, 0, 0, 'Ruff', 'Neck', '', 'Music Producer', 'Abovo', NULL, '+221771492407', '$2y$10$hWhgzwcWNPOsa4eg7NHlyuZHm9YdSKy7eHUYH5rzhM9ONCciZHrSu', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Senegal', 2, NULL, '2019-03-02 19:08:44', '2019-03-02 19:08:44', 0),
(540, 0, 0, 0, 'Shay', 'Rodius', '', 'Guest', 'shayrodius9688', NULL, '02.40.72.44.11', '$2y$10$tVHNhCpt2hDLsb/Cvd28qOjkmD/GNDb2eIE9ssg9BfGKKHDSi8tK2', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'France', 2, NULL, '2019-03-02 22:44:55', '2019-03-02 22:44:55', 0),
(541, 0, 0, 0, 'Carol', 'Deluna', '', 'Guest', 'caroldeluna8', 'slavik.butakhine6@mail.ru', '09723 18 74 40', '$2y$10$FEERwpQq1ua2x4w4p4Jc2ugq.oeYuqrXskkIYB7AB/voqiGonGmsG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Germany', 2, NULL, '2019-03-03 00:43:57', '2019-03-03 00:43:57', 0),
(542, 0, 0, 0, 'AbdulFatai', 'Bada', '', 'Music Producer', 'theolaoflagos', 'fataibada@gmail.com', '+2349051893087', '$2y$10$0PKmgQWt31XyujHd03HxE.tRVoJKmDp9pkNGQ7XWCSaMmnYvwCPLO', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-03-03 03:04:15', '2019-03-03 03:04:15', 0),
(543, 0, 0, 0, 'Zion', 'Adebisi', '', 'Music Producer', 'Zion Beatz', 'talktozionbeatz@gmail.com', '08039654595', '$2y$10$/mQNPZc8oqqnB.DuU6SupelPXEalhlTj/TJ/oXmDHQ8oZuR66PZw.', 'user', '7027cc229986ec1f443fef9275d453d9_1552257354.png', 'Users/photo', '78884', 'Your favorite Dancehall Afro Beat producer', 'https://web.facebook.com/zionzbeatz/', 'https://twitter.com/zionzbeatz', 'https://www.instagram.com/zionzbeatz/', 'https://www.youtube.com/channel/UCnlJz_OYYb7FyrR0e', '', 'Lagos', '', 'Nigeria', 2, NULL, '2019-03-03 09:36:09', '2019-03-10 23:35:54', 0),
(544, 0, 0, 0, 'Alokolodo', 'Usman', '', 'Songwriter', 'Horlawise', 'alokolodousman6@gmail.com', '08060748171', '$2y$10$3DcYchQxGK7EcDZ5TJlnwOjcHW0M8ucCADnb.aNaNri4F6AM5HAuu', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-03-03 13:36:07', '2019-03-03 13:36:07', 0),
(545, 0, 0, 0, 'Stermanone ', 'project', '', 'Music Producer', 'Dj Steevy ', 'Stermanoneproject@Gmail.com', '237698984268', '$2y$10$pfn6ko9G22a8NDzE45LebeIuEhxC1Oq/JHs9M1LzeluDZ902RDtGu', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Cameroon', 2, NULL, '2019-03-03 17:36:42', '2019-03-03 17:36:42', 0),
(546, 0, 0, 0, 'dj', 'mirror ', '', 'Music Producer', 'mirror', NULL, '+233245020760', '$2y$10$X4NTkUUE7eBdj2bmUH29q.7ojIto9JQGYoHtNpHi5/YPyH2sQrgJa', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Ghana', 2, NULL, '2019-03-04 00:04:34', '2019-03-04 00:04:34', 0),
(547, 0, 0, 0, 'Victor', 'Michael', '', 'Music Producer', 'Papsy', 'victor.michael510@gmail.com', '09020940585', '$2y$10$DleoYfJZCPohJVSIMm2I3eK87Ca4zLSA0gCUBNMh.LoHtO0svJ6Xm', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-03-04 08:42:25', '2019-03-04 08:42:25', 0),
(548, 0, 0, 0, 'Kristie', 'Wollaston', '', 'Guest', 'nrgkristie', 'david.1976h1v@mail.ru', '0351 8970590', '$2y$10$oGwdMN6MzqrFBBpLBs74PegCI/sVjc3djy0ggLaGR17.PzDinZtq.', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Italy', 2, NULL, '2019-03-04 09:09:54', '2019-03-04 09:09:54', 0),
(549, 0, 0, 0, 'Jeannine', 'Brace', '', 'Guest', 'jeanninebrace6', 'khakimulina.20.2jz@mail.ru', '0379 7361929', '$2y$10$RGBPmeqhVnPEvAtP8skI0.vAFYb2EPUxR.YS5oHtdJFNYquUz8nP.', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Italy', 2, NULL, '2019-03-04 09:27:00', '2019-03-04 09:27:00', 0),
(550, 0, 0, 0, 'Sidney', 'Sizemore', '', 'Guest', 'sidneysizemore', 'drobysheva.18.qv6@mail.ru', 'LA', '$2y$10$Ipt28FmRgMAr5Q./nIEoyu5xc.hKglmcgitlcJslE0yWh2YsNNTgm', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Austria', 2, NULL, '2019-03-04 09:33:36', '2019-03-04 09:33:36', 0),
(551, 0, 0, 0, 'John', 'Bromham', '', 'Guest', 'john776974645', 'ritala.21m04@mail.ru', '229-378-4935', '$2y$10$PQ2YuLU3rRVzcv8rNXQzVe.iQmyQjDvLBymkf/T1JB7pqZY2OncrS', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'United States', 2, NULL, '2019-03-04 09:38:51', '2019-03-04 09:38:51', 0),
(552, 0, 0, 0, 'Wegbe', 'Serge', '', 'Music Producer', 'An other beat by SG', 'wegbeserge7@gmail.com', '+22540213613', '$2y$10$ox2RlsPjR5yj4P.Dpgod5euybDSKX9P9UbMckU6QHsbWoHaQGzJHO', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Cote d\'Ivoire', 2, NULL, '2019-03-04 10:49:18', '2019-03-04 10:49:18', 0),
(553, 0, 0, 0, 'Jefta', 'Kakashi', '', 'Music Producer', 'Switch', 'switchkakashi@gmail.com', '+2349090571896', '$2y$10$tdb.mW/dMgcKqh76sjj3f.TbhEkop2bKg8G4kEQKOQsZqloAbkJu.', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-03-04 12:17:40', '2019-03-04 12:17:40', 0),
(554, 0, 0, 0, 'Maxwell', 'Waterman', '', 'Guest', 'maxwellwaterman', 'lyubomir.19906oa@mail.ru', '06566 60 69 99', '$2y$10$Ji.k2ZRpPygkZbzkuGt1XOtWVgKImthPbdbiGndSajeBCZ6w71p7C', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Germany', 2, NULL, '2019-03-04 12:39:52', '2019-03-04 12:39:52', 0),
(555, 0, 0, 0, 'Harriet', 'Feagin', '', 'Guest', 'harrietfeagin5', 'miguelita@b.wp-viralclick.com', '09374 94 21 43', '$2y$10$O.AGXK79nGXp1jw/b1FXHOj7fXHvETmWpYXtfoW3TQUXYPmPYurZC', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Germany', 2, NULL, '2019-03-04 15:04:05', '2019-03-04 15:04:05', 0),
(556, 0, 0, 0, 'Marjorie', 'Feldman', '', 'Guest', 'marjoriefeldman', NULL, '07226 21 65 63', '$2y$10$FvLpkfR10EYqONVSst88BOWuszpCzmFgl6ikcYmaMcOcKwU6b5QDS', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Germany', 2, NULL, '2019-03-04 16:22:10', '2019-03-04 16:22:10', 0),
(557, 0, 0, 0, 'Israel', 'Dolo', '', 'Guest', 'casi~kid', NULL, '231779156391', '$2y$10$mac37KJMDpNtWyM5PJuOZ.DeEJrUAd5B0msb7xuoGlsvk8y/88wpi', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Liberia', 2, NULL, '2019-03-04 19:47:40', '2019-03-04 19:47:40', 0),
(558, 0, 0, 0, 'Enoc', 'Godwin', '', 'Songwriter', 'prince ', 'enocgodwin2@gmail.com', '0675912969', '$2y$10$dDNvyn0ptZsoT7dV6aJp2eWwKbPzLU5NNCz0UNK27UTqWyt48cD9K', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Tanzania, United Republic of', 2, NULL, '2019-03-04 21:22:58', '2019-03-04 21:22:58', 0),
(559, 0, 0, 0, 'Enoc', 'Godwin', '', 'Songwriter', 'prince enoc', NULL, '0675912969', '$2y$10$5z3zwWTVYQPvtf.Tzope6.bSJqcO/Uf203lVFIyA.qNJk/ze9eRGC', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Tanzania, United Republic of', 2, NULL, '2019-03-04 21:23:54', '2019-03-04 21:23:54', 0),
(560, 0, 0, 0, 'Zakaria ', 'Fall', '', 'Guest', 'Zakziko90', NULL, '+221778336170', '$2y$10$vnen3BuHNM5UtHD/tUy92elgc958xFjB2YC5toC74ZmQUZR1FMNEO', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-03-04 23:29:33', '2019-03-04 23:29:33', 0),
(561, 0, 0, 0, 'Stephen', 'Adeyemi', '', 'Music Producer', 'Tymg classics', 'tayoeva6@gmail.com', '08134529100', '$2y$10$4spIRNOJB5VbB4UyrsptJuDK9WQCOO8sbTtttt3/MrLYYhUMXDAR6', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-03-04 23:52:41', '2019-03-04 23:52:41', 0),
(562, 0, 0, 0, 'Pascal', 'Cech', '', 'Music Producer', 'Pasdinovic', NULL, '231779012940', '$2y$10$l0pZjNuhoMRQ8GSWA7E8p..yzBuAme42fqZ/.S9O0wSANAgzv/6KK', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Liberia', 2, NULL, '2019-03-04 23:57:19', '2019-03-04 23:57:19', 0),
(563, 0, 0, 0, 'Nexus', 'Lyks', '', 'Artiste', 'Nexo', 'lyksnexus4@gmail.com', '+256752109668', '$2y$10$DhT.55sAOY.aBEB2WuSlBeneQ7Ya.ol4hsEdGK1xpuwKhz1t/rv3i', 'user', NULL, NULL, NULL, 'African superstar outta uganda.Aged 25', 'Nexus lyks', '', '', '', 'Ntinda, kla, uganda', 'Kampala', '256', 'Uganda', 2, NULL, '2019-03-05 00:10:44', '2019-03-05 00:25:36', 0),
(564, 0, 0, 0, 'Nexus', 'Lyks', '', 'Guest', 'Nex', NULL, '+256752109668', '$2y$10$ft9LGCGVRZm0KC8ZmvPxluFJJjx3X.HT3ljjS592NPT6hseYY38ry', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Uganda', 2, NULL, '2019-03-05 00:17:25', '2019-03-05 00:17:25', 0),
(565, 0, 0, 0, 'Kazumari', 'Geugeu', '', 'Guest', 'Kazubeats', 'geugeujr@gmail.com', '0679560081', '$2y$10$b2kcjm4ZJKS8c3/tL4vng.fZMx3zQ6/eiQED63xJ2iDsiYCYSgebG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-03-05 06:44:33', '2019-03-05 06:44:33', 0),
(566, 0, 0, 0, 'Kazumari', 'Geugeu', '', 'Guest', 'Kazubeatz', NULL, '0679560081', '$2y$10$ALLGDNK9qJ5EXLa9cNSt4eQtecwpNZPqy3GwJJV7ZIA.9KN4z2xzm', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-03-05 06:45:05', '2019-03-05 06:45:05', 0),
(567, 0, 0, 0, 'Amos', 'Garba ', '', 'Music Producer', 'Megabeats ', 'amosmegabeats@gmail.com', '08095669975', '$2y$10$PxpIAJAFR2ByQ4tp04O1WO.w/EMbjBtVHo/C00hycNtAgjBNL9CgG', 'user', '4262fb7057e5aa0099783f3accdc1fd5_1551774857.jpg', 'Users/photo', '29581', 'I am a nigerian producer based in lagos nigeria. I do good music for a living!', '', '', '', '', 'Line f block 3 room 12 ijeh police barracks obalende lagos ', 'Lagos', '', 'Nigeria', 2, NULL, '2019-03-05 09:11:27', '2019-03-05 09:34:17', 0),
(568, 0, 0, 0, 'Mouhamed ', 'Loucard ', '', 'Guest', 'Freshii 808 Freshii', 'beatzfreshii4@gmail.com', '221774254288', '$2y$10$LGgywnjUqYVxevVsm8BfIuOg/sC8Z71oHqNooGZVK5GdXOdk.iRcO', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-03-05 11:58:13', '2019-03-05 11:58:13', 0),
(569, 0, 0, 0, 'ojhay', 'chidi', '', 'Artiste', 'Öjhäy', 'Chidiojay6@gmail.com', '08092466476', '$2y$10$W5gDX3bNScA48A8EgYAXwOQs5mzZAN/3eodhouH2Dx6Kofk36VSU.', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-03-05 12:24:38', '2019-03-05 12:24:38', 0),
(570, 0, 0, 0, 'Randy', 'Cade', '', 'Guest', 'randycade6081', NULL, '04.92.22.88.92', '$2y$10$O90mF4M7eXF0dyq5Z7cT5Or9Cq47m2EcGvW2qOeV5lXepT1KGaWxy', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'France', 2, NULL, '2019-03-05 12:27:49', '2019-03-05 12:27:49', 0),
(571, 0, 0, 0, 'FeaeGod', 'Umukoro', '', 'Music Producer', 'Mr.moore', 'patric10timesrich@gmail.com', '08110032534', '$2y$10$hvIGNz5IYJaU8UD2J5U7juSjUAz8eDY5.8bWDjsCpcLEkyVUocDQK', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-03-05 13:01:12', '2019-03-05 13:01:12', 0),
(572, 0, 0, 0, 'FeaeGod', 'Umukoro', '', 'Guest', 'Mr.moore11', NULL, '08110032534', '$2y$10$kl4owmMTD6NGKXH./WKb9eqjKVZvXx8I9ybQjvW0Utawj4zLHWrce', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-03-05 13:01:49', '2019-03-05 13:01:49', 0),
(573, 0, 0, 0, 'Michael ', 'Abiodun ', '', 'Music Producer', 'Magical_popzbeatz', 'mikewill5473@gmail.com', '08066080891', '$2y$10$7JznQHWpTk6e8EfK/VOy1um3RJ5SPWeTjZqeUX7oBY6TawTg7RHki', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-03-05 13:58:36', '2019-03-05 13:58:36', 0),
(574, 0, 0, 0, 'Jayrhymodhg', 'Odibotie', '', 'Music Producer', 'Jayrhymo', 'Jayrhymodhg@gmail.com', '9032277943', '$2y$10$g7aS0HR8CqHyQtF9/PEga.d7Gk/gfeaexnQ0uUwEH/KgXqr9.2ssW', 'user', NULL, NULL, NULL, '', 'Jayrhymodhg', 'Jayrhymodhg', 'Jayrhymodhg', '', 'Ughelli North ', 'Delta State', '333105', 'Nigeria', 2, NULL, '2019-03-05 14:51:31', '2019-03-05 14:55:25', 0),
(575, 0, 0, 0, 'Aikins', 'Owusu', '', 'Music Producer', 'Nanayaw', 'aik6s2@gmail.com', '+233552897604', '$2y$10$Dr3iaeTqfoHVSIZu1RWMjOZkUT4vAPh/8Q20JeGuCgnb69gTlc1Wa', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Ghana', 2, NULL, '2019-03-05 16:02:40', '2019-03-05 16:02:40', 0),
(576, 0, 0, 0, 'Hammed', 'Usman', '', 'Songwriter', 'D\'Larray', NULL, '08132390541', '$2y$10$QXa9uK4OMO6f3J0KOPuEDuBM03sDOCNleldgOtdyK.PHAzsruOQRK', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-03-05 17:46:17', '2019-03-05 17:46:17', 0),
(577, 0, 0, 0, 'kelvin', 'mutuku', '', 'Music Producer', 'kevo808', 'kmuendo97@gmail.com', '0702920738', '$2y$10$cCEZu.S9Iu/UD.Kdd4gXFOzhm34bvpgMqvwHs1x4.NwKDifgZSnwe', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Kenya', 2, NULL, '2019-03-05 21:48:25', '2019-03-05 21:48:25', 0),
(578, 0, 0, 0, 'Metonhelo', 'Eniel', '', 'Guest', 'Magson', 'metonhelomagou@gmail.com', '0022960765515', '$2y$10$e0b0Yec/qh64.m65ZnMVl.mZ.GFtM3Dh4iGPk0jqOml34QTtaIXQS', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-03-06 10:34:25', '2019-03-06 10:34:25', 0),
(579, 0, 0, 0, 'Tobi', 'Bewaji', '', 'Guest', 'Djtobi', 'bforbewaji@hotmail.com', '0868970053', '$2y$10$4pLipCZTvfmtJp.MuCATkerZvayd.2vypq6U2YLXCK6v/e3PDOGiW', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-03-06 15:53:51', '2019-03-06 15:53:51', 0),
(580, 0, 0, 0, 'Rulph', 'Cob', '', 'Music Producer', 'Blue', 'daudiwillium117@gmail.com', '0754772924', '$2y$10$gDBh/UeCqcOx6xYX.RkCy.vdHfwLOgZ/nzrRFRwq5kN83ZciBpGWu', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Tanzania, United Republic of', 2, NULL, '2019-03-06 20:52:21', '2019-03-06 20:52:21', 0),
(581, 0, 0, 0, 'Angelita', 'Bosch', '', 'Guest', 'angelita32e', 'lauretta@g.gsasearchengineranker.pw', '078 3734 3111', '$2y$10$Zp2VtdS62TAsJXy/Ynju8OUzlNDwHGNzxPNDwOk9T1h/Y5BNC5DgS', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'United Kingdom', 2, NULL, '2019-03-07 00:36:00', '2019-03-07 00:36:00', 0),
(582, 0, 0, 0, 'Seakay', 'Chuma', '', 'Music Producer', 'LoverboySeakay', 'Seakayc@gmail.com', '09060435190', '$2y$10$Angx/h9tNGahomXPbgc4aO01yONqxcGhkFLVKq1p8OCXlCL3CoBcS', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-03-07 02:03:39', '2019-03-07 02:03:39', 0),
(583, 0, 0, 0, 'Fiona', 'Waterworth', '', 'Guest', 'fionawaterworth', 'kut.vladau44@mail.ru', '(07) 3045 9751', '$2y$10$t2v6gx0PavJwooRZ5OBIM.lgsFefib49P1O34j3xVQApo24JbQXFy', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Australia', 2, NULL, '2019-03-07 02:17:05', '2019-03-07 02:17:05', 0),
(584, 0, 0, 0, 'Franck', ' Biende', '', 'Music Producer', ' Faucheur beatz', 'fbiende1@gmail.com', '00237696370260', '$2y$10$I7cGJJtwMFl/bbV3qEVBDe.3c6TClOwkZXtGmgG1TDR1Xvg3qorSG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Cameroon', 2, NULL, '2019-03-07 12:33:38', '2019-03-07 12:33:38', 0),
(585, 0, 0, 0, 'Charles ', 'Kaiser', '', 'Music Producer', 'HasselBeatz ', 'hasselmedia@gmail.com', '0243054356', '$2y$10$DplQaE74.Az6zevPlGN8/OBqO4vVVqR2r7vIYXC6NeY.1OmhanWee', 'user', '69b0d85c74ddb97d52f73b09fe8c6a1d_1551976375.jpg', 'Users/photo', '182642', '', 'www.facebook.com/HasselbeatzKaiser', 'www.twitter.com/hasselbeatz', 'www.instagram.com/hasselbeatz', '', '', 'Accra', '+233', 'Ghana', 2, NULL, '2019-03-07 17:27:35', '2019-03-07 17:32:55', 0),
(586, 0, 0, 0, 'Wallace', 'Vanguilder', '', 'Guest', 'wallacevanguilde', NULL, '0359 8886856', '$2y$10$zIzRA0ldYex5kRmYPdSARu7FI4QrMF3MfxVEovrHnKuQOHitGMmry', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Italy', 2, NULL, '2019-03-07 21:33:05', '2019-03-07 21:33:05', 0),
(587, 0, 0, 0, 'Ferdinand', 'Lemann', '', 'Guest', 'ferdinandlemann', NULL, '06-81546540', '$2y$10$Av9WSWWzUBWamNfNVNDzmegQM4BuXQuXoRMSWlhaXB7DIVuD1Nc.m', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Netherlands', 2, NULL, '2019-03-07 22:16:01', '2019-03-07 22:16:01', 0),
(588, 0, 0, 0, 'Vianney', 'Ampaire', '', 'Music Producer', 'Ledra', 'ampirevianney69@gmail.com', '*256706465776', '$2y$10$pneG3dOXZH.bD23xbgILAeekOuuj8s67QluCXwo3tZ0RSEFkbNQ2u', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Uganda', 2, NULL, '2019-03-07 22:25:06', '2019-03-07 22:25:06', 0),
(589, 0, 0, 0, 'Kristi', 'Cottrell', '', 'Guest', 'kristicottrell3', NULL, '0348 9425637', '$2y$10$7CgEW4AEz.q9pzIM03Kl8ObpZNaUAM2reihBem18i390NaaiIhyJG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Italy', 2, NULL, '2019-03-07 22:26:14', '2019-03-07 22:26:14', 0),
(590, 0, 0, 0, 'Sally', 'Fairfield', '', 'Guest', 'sallybwl011076', NULL, '06343 49 43 62', '$2y$10$Wyt4.wSO/6eai0mLL6kViuYrOE1qKT6dF7mp9ECyBwXl3Xbwn50LG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Germany', 2, NULL, '2019-03-07 23:06:06', '2019-03-07 23:06:06', 0),
(591, 0, 0, 0, 'Marco', 'Wilmot', '', 'Guest', 'marcowilmot3196', NULL, '413-427-2022', '$2y$10$MKMLXoYg5MTLjlCgH/PI5.XY9Zjb3RiXAYjucpTAvLzxECIW2n2KC', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'United States', 2, NULL, '2019-03-07 23:48:12', '2019-03-07 23:48:12', 0),
(592, 0, 0, 0, 'Oguns ', 'Emmanuel ', '', 'Music Producer', 'Ebeats', NULL, '08083245952', '$2y$10$E2KUwWRdegxpvNIxINivD.7SdQqgT1a.cqmhlbPO9KXZxIs5DnYWG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-03-08 02:46:20', '2019-03-08 02:46:20', 0),
(593, 0, 0, 0, 'Nfawah', 'Usang', '', 'Music Producer', 'Mr_made it', 'mrmadeit1@gmail.com', '+2348175806995', '$2y$10$euCJ66j7pP4uExdhIa.3wOtjuj5InPSG9EbKzvybUxBUwVpN7SpRq', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-03-08 11:06:40', '2019-03-08 11:06:40', 0),
(594, 0, 0, 0, 'Joseph', 'Ashong', '', 'Music Producer', 'Produb', 'ashongj29@gmail.com', '+2335000254619', '$2y$10$0C4ztA2S4UF3WwbVlBY5oeZieKewSim7RfTuMZtSH..3V83Ki0gni', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Ghana', 2, NULL, '2019-03-08 13:52:14', '2019-03-08 13:52:14', 0),
(595, 0, 0, 0, 'Natnael', 'Yifrashewa ', '', 'Guest', 'Nhatty', NULL, '+251920802045', '$2y$10$nCt.lIXKbfBRVmRXlDhv8etNUoqnJ65FUZEWYixoyZzmbkshkROmG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-03-08 14:10:14', '2019-03-08 14:10:14', 0),
(596, 0, 0, 0, 'Natnael', 'Yifrashewa ', '', 'Guest', 'M boy nhatty', NULL, '+251920802045', '$2y$10$k5m/ktWfDDqlYQ9DWV2J2uq7RQVQoN1BRIWZaZs3gvH4zFuuHFvf.', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-03-08 14:10:54', '2019-03-08 14:10:54', 0),
(597, 0, 0, 0, 'Natnael', 'Yifrashewa ', '', 'Artiste', 'Benat', NULL, '+251920802045', '$2y$10$EJCgh1lWd0D.A0UKyqjWyueSiIjuDeWOB6/qaVeYvOn3TyT/2Kxk.', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-03-08 14:11:51', '2019-03-08 14:11:51', 0),
(598, 0, 0, 0, 'mballa', 'loïc', '', 'Music Producer', 'lil_loic', 'mballaloic445@gmail.com', '+237655620772', '$2y$10$BU1G5S7YDDVCW4SUw9MC5Oj/COxeriCqSLUcDrzc0JWIGpGlOaVBC', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Cameroon', 2, NULL, '2019-03-08 15:09:13', '2019-03-08 15:09:13', 0),
(599, 0, 0, 0, 'Sam', 'Mak', '', 'Music Producer', 'Lyfstylbeat', 'lyfstylbeat@gmail.com', '08130884822', '$2y$10$60cnRUnf79CAAkuNUZCRnep8W81tWBzSs/dWKs1edAMIjry4SSNoK', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-03-08 17:10:43', '2019-03-08 17:10:43', 0),
(600, 0, 0, 0, 'Forest', 'Chippindall', '', 'Guest', 'forestchippindal', 'datharvester707@gmx.com', '0680 598 85 13', '$2y$10$Tp9o0uW8R1uIEo3vwkKyjuz8fIGccSKcGMon6XCmtMmk1poC0ghiW', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Austria', 2, NULL, '2019-03-08 17:21:41', '2019-03-08 17:21:41', 0),
(601, 0, 0, 0, 'Adaje ', 'David ', '', 'Artiste', 'Surest ', 'surestebeyin@gmail.com', '07033150120', '$2y$10$Lo29rqu/CYol31FXxLp.IuseejPHalDlkn9MOAHAzuvtucPCG5phS', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-03-09 01:25:29', '2019-03-09 01:25:29', 0),
(602, 0, 0, 0, 'Jeanett', 'Sifford', '', 'Guest', 'jeanettsifford', NULL, '0388 9016232', '$2y$10$w89ri6JLTw5aStliFlDC9OtOq8H8qQ01njiBUTJpB/ptDfvjAm34q', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Italy', 2, NULL, '2019-03-09 04:12:55', '2019-03-09 04:12:55', 0),
(603, 0, 0, 0, 'kayode', 'Oke', '', 'Guest', 'rendabbeatz', 'rendab653@gmail.com', '07039537682', '$2y$10$LwwSWu2zrwDkeo4YDw9AruJ5Mfmn40XIj064a2PPlSCk.ZdxutBTG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-03-09 07:16:35', '2019-03-09 07:16:35', 0),
(604, 0, 0, 0, 'Idongesit ', 'Effiong', '', 'Music Producer', 'ID Cleff', 'idcleffmerit@gmail.com', '07066769821', '$2y$10$nPnNzcVM6VPSjGkscOEJYeB6oqjCrnZD5.aIp1fafzTSmtVZ5UY8q', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-03-09 07:23:36', '2019-03-09 07:23:36', 0),
(605, 0, 0, 0, 'Renaud', 'Abossolo', '', 'Music Producer', 'Dee Jr Ark', NULL, '0237672005584', '$2y$10$e.Z8k6LO.dDb.AcP9cDMU.WKnyv6PTx46zLyIQCwWiGLj4OSu9qHO', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Cameroon', 2, NULL, '2019-03-09 14:25:40', '2019-03-09 14:25:40', 0),
(606, 0, 0, 0, 'Thomas', 'Noel', '', 'Music Producer', 'Teaz', 'teazonthetrack@gmail.com', '+255687276969', '$2y$10$HWhvT54gHZDQW3EkRFy.fextMcHk9N9xBGU7DKZ.8uef0uY9KUNSa', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Tanzania, United Republic of', 2, NULL, '2019-03-09 15:01:27', '2019-03-09 15:01:27', 0),
(607, 0, 0, 0, 'Joshua ', 'Onyekaonwu ', '', 'Music Producer', 'DoshBeat ', 'onyekaonwujoshua@gmail.com', '09029823519', '$2y$10$JcW7X.XbgRV9RWchxkYikOKKzGypgMikRj22Tb4EilW0bkSi/kspe', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-03-09 21:56:24', '2019-03-09 21:56:24', 0),
(608, 0, 0, 0, 'Joshua ', 'Onyekaonwu ', '', 'Guest', 'DoshBeatz', NULL, '09029823519', '$2y$10$UIRxG9oc1gwDz5QcRp3RzOgDSCS.PYNWdaAs2hzMbKv8UunY9lHWK', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-03-09 21:57:00', '2019-03-09 21:57:00', 0),
(609, 0, 0, 0, 'Oshilaja', 'Ademola', '', 'Music Producer', 'Spicyfresh', 'rmpc18.ng@gmail.com', '+2348117711335', '$2y$10$CsG/UvBVwN3FV8.2rckSW.xDiIfwzGafmqtz.GySvRA1tLMOKBBI.', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-03-10 01:44:52', '2019-03-10 01:44:52', 0),
(610, 0, 0, 0, 'Idd', 'Juma', '', 'Guest', 'Kisapi', NULL, '+255674430061', '$2y$10$kAsMlINhjtCSY7dSJgq6/eZw4yAmGPl6hlYgYCPBsZxeT7KFYhGlu', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Tanzania, United Republic of', 2, NULL, '2019-03-10 08:18:39', '2019-03-10 08:18:39', 0),
(611, 0, 0, 0, 'Moussah', 'Shaban', '', 'Music Producer', 'King kisser tz', 'bettykhatibu@gmail.com', '+255784042468', '$2y$10$kVQ.Qsw2txFSy09m8XeA/.5c0O.B64F7Qysq1m.GzpBlVm9s50HNG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Tanzania, United Republic of', 2, NULL, '2019-03-10 23:06:10', '2019-03-10 23:06:10', 0),
(612, 0, 0, 0, 'Ndzie', 'Donald', '', 'Artiste', 'Ziziakiller', 'ndzieguy11@gmail.com', '+237655011039', '$2y$10$4Y0veXRE2lLFg/JAqLNoqu/rWnjnJqim2G7/sVf1dtyGvlJwOICxK', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Cameroon', 2, NULL, '2019-03-11 13:04:42', '2019-03-11 13:04:42', 0),
(613, 0, 0, 0, 'Rashid', 'Omary', '', 'Music Producer', 'Chidycare', 'rusheedomarion@gmail.com', '0672271408', '$2y$10$wEtwSfRHMpwzWCncnRafNO8/mu74BKs6Au4iTAwi3Rsn0qKiMwzbm', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Tanzania, United Republic of', 2, NULL, '2019-03-11 14:04:10', '2019-03-11 14:04:10', 0),
(614, 0, 0, 0, 'sahr', 'sandy', '', 'Music Producer', 'baby  burna', 'sahrsnd@gmail.com', '075244114', '$2y$10$140JJSI9KyWMDRTADc34xOjI0JA2EcQAJm7Gmj816zrMPWpA0WCFu', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Sierra Leone', 2, NULL, '2019-03-12 04:06:07', '2019-03-12 04:06:07', 0),
(615, 0, 0, 0, 'Lacy', 'Rodd', '', 'Guest', 'lacyrodd110617', 'david@a.gsaverifiedlist.download', '077 6048 7729', '$2y$10$0wxkzohm6m7wqwmPsKtyyuRNAu8aSLtAxTsqxVpZdlyLGzb7pnY.q', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Mayotte', 2, NULL, '2019-03-12 15:44:51', '2019-03-12 15:44:51', 0);
INSERT INTO `users` (`id`, `power_users`, `is_verified`, `top_producer`, `firstname`, `lastname`, `fullname`, `accounttype`, `aka`, `email`, `phone`, `password`, `role`, `photo`, `photo_dir`, `photo_size`, `bio`, `facebook`, `twitter`, `instagram`, `youtube`, `address`, `state`, `zip`, `country`, `popular`, `membership`, `created`, `modified`, `expired`) VALUES
(616, 0, 0, 0, 'Lauretta', 'Akinlowo', '', 'Songwriter', 'Leeminaj', 'leeminaj.ql@gmail.com', '08142880468', '$2y$10$aX35cnt6ICDXPJM5q0N3NuF3JxcwQtkLI1j8xoJfSd3w0SPh4l236', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-03-12 17:19:47', '2019-03-12 17:19:47', 0),
(617, 0, 0, 0, 'Cecelia', 'Calwell', '', 'Guest', 'floy6405916833036', '69139applebee@kukowski.eu', '04.02.76.88.61', '$2y$10$ovt369GVHoUrS8ax20AaBeDTvjPPeMXZatZaZid8pQBW9u77jdCbS', 'user', NULL, NULL, NULL, 'They call the author Patsy and she or he believes appears a little bit quite advantageous. For years she\'s been working regarding interviewer and he or she will not change it anytime in a little while. The thing I adore most flower arranging but Not able to make it my profession really. New York is definitely his house. He\'s been acting on his website for a little bit now. Have a go here: http://potencja-tabletki.eu/erogan.html', '', '', '14', 'http://potencja-tabletki.eu/erogan.html', '78 Quai Des Belges', 'CENTRE', '13016', 'France', 2, NULL, '2019-03-13 10:03:54', '2019-03-13 11:43:12', 0),
(618, 0, 0, 0, 'Shawnee', 'Goddard', '', 'Guest', 'shawneegoddard1', 'cctest@hgcitations.com', '030 18 59 18', '$2y$10$R97KOcd8Nx6/X/Ulxcr9w.JCIkuIX62.6UNjEF9oLVcGdJZbVtPee', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Germany', 2, NULL, '2019-03-13 15:29:07', '2019-03-13 15:29:07', 0),
(619, 0, 0, 0, 'Michael ', 'Usunobu ', '', 'Music Producer', 'Mikeyz ', 'MichaelOgbekhilu@gmail.com', '08162537602', '$2y$10$sar2ydcJeFoK.67vIFeu3OmkIJH1KbtTGHqc2hsK1fuhU4HxMb.wm', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-03-14 07:00:58', '2019-03-14 07:00:58', 0),
(620, 0, 0, 0, 'Petros', 'Simelane', '', 'Music Producer', 'P. Ross', 'mngomezulupm@gmail.com', '+27763816733', '$2y$10$9kigtysefcwCc4o1xK8aU.lcKPUMnqSPzBVsyzswviC4JRKs7A1ly', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'South Africa', 2, NULL, '2019-03-14 22:00:14', '2019-03-14 22:00:14', 0),
(621, 0, 0, 0, 'Raymondmiz', 'RaymondmizTU', '', 'Artiste', 'Rock, cedar falls', NULL, '84843382349', '$2y$10$wzqlJIR.cg.2de7V3CM8ieZ0PLsdHR7VtrwOmFkgEVogFv3yrDqFO', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Kyrgyzstan', 2, NULL, '2019-03-15 22:26:48', '2019-03-15 22:26:48', 0),
(622, 0, 0, 0, 'Jurgen', 'McKinley', '', 'Guest', 'exxjurgen13', 'ramona@g.gsasearchengineranker.pw', '71-40-27-19', '$2y$10$OXzySEHtQzR5U7NF0qOJhOeM5zmWGNYni0m.E/13zZzjoEWfqO5nW', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Denmark', 2, NULL, '2019-03-16 12:47:39', '2019-03-16 12:47:39', 0),
(623, 0, 0, 0, 'Tarah', 'Trujillo', '', 'Guest', 'tarahusz46640', NULL, '0345 5459934', '$2y$10$i88fTvYQcWhcDi138u9u9OctuJIpWr9PaA.85wfBIPCPCHgRSh2yG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Italy', 2, NULL, '2019-03-16 22:14:53', '2019-03-16 22:14:53', 0),
(624, 0, 0, 0, 'Hammed', 'Usman', '', 'Songwriter', 'D\'Larray\'s', 'me_myhood@yahoo.com', '08132390541', '$2y$10$Xazi6yjExC/p6HQvstPyZOE0hl2LWvZVkZ5wlAM/fWfSvFnXaIQQa', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-03-17 15:38:14', '2019-03-17 15:38:14', 0),
(625, 0, 0, 0, 'David', 'John', '', 'Music Producer', 'jed roy', 'seanjed82@gmail.com', '08100751137', '$2y$10$FehFia3bozAlqyt.b3QA3.06sRbl/HVTOc3ct08/RZGvYGVefwGVm', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-03-17 20:48:55', '2019-03-17 20:48:55', 0),
(626, 0, 0, 0, 'Terrie', 'Kearns', '', 'Guest', 'terriekearns4', NULL, '078 8155 3829', '$2y$10$R3ummsUCs2b5JKcvhAYOmeOS2hRxyR2kG8oRO6Jktu6ekUyNXNcDC', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Cambodia', 2, NULL, '2019-03-18 04:45:22', '2019-03-18 04:45:22', 0),
(627, 0, 0, 0, 'Rodrigo', 'Lacroix', '', 'Guest', 'rodrigo7576870817885', NULL, '30-93-81-12', '$2y$10$yu2MnwARaaHuZLLUkLP4w.eFjrIUF7lYHZ1S6HOtxpZpE6ZutF0Ja', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Denmark', 2, NULL, '2019-03-18 07:34:13', '2019-03-18 07:34:13', 0),
(628, 0, 0, 0, 'Afam', 'Onwochie', '', 'Guest', 'Donfingers', 'donfingers@gmail.com', '08189116506', '$2y$10$j0RItW9H2sAQHwVNibsQVuYEzy2lprIKp62nrxpasoCmEyW8OhIgS', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-03-19 08:33:36', '2019-03-19 08:33:36', 0),
(629, 0, 0, 0, 'Isaiah', 'Mlaki ', '', 'Music Producer', 'Wiser on beatz ', 'wiseronbeatz@gmail.com', '0769613997', '$2y$10$D1ysLLpvK8B0qK9SAOqsHe0mc8nWTNFEh2q/UTd1aW4Al5J9s3P0K', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-03-19 08:41:52', '2019-03-19 08:41:52', 0),
(630, 0, 0, 0, 'Thalia', 'Knudson', '', 'Guest', 'thalia1005', NULL, '(02) 4734 7255', '$2y$10$hzJ54LEVbtenvcIoU1uXM.rXCrrE0mWJ8v42tehsMsq2UWUgpSGfa', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Australia', 2, NULL, '2019-03-19 21:43:48', '2019-03-19 21:43:48', 0),
(631, 0, 0, 0, 'nwidum', 'victor', '', 'Artiste', 'Dj vick Hardy', 'djvickin99@gmail.com', '09052208370', '$2y$10$EHdsdsqkP6lCyMA5rpXFoePU41fBvbgR/mXDGSouZG4yv6AlrBvXK', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-03-20 10:09:49', '2019-03-20 10:09:49', 0),
(632, 0, 0, 0, 'Chet', 'Mayne', '', 'Guest', 'chetmayne84', 'catrina@a.gsaverifiedlist.download', '0325 5720664', '$2y$10$cL8JTDrQCQwndw/JB9ZDCunDBILap8uziadSRP/TD57Uh8LXqzD8G', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Italy', 2, NULL, '2019-03-20 13:04:39', '2019-03-20 13:04:39', 0),
(633, 0, 0, 0, 'Sim', 'J', '', 'Guest', 'SimZimmer', 'simbaztheking@gmail.com', '7135059036', '$2y$10$tP1YZPYN7uX6K5dh9qmnBOeYBjFSGhzvonAUk9U6MQuvJHtoCCi4G', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'United States', 2, NULL, '2019-03-20 17:15:44', '2019-03-20 17:15:44', 0),
(634, 0, 0, 0, 'Kathryn', 'Mountgarrett', '', 'Guest', 'kathrynmountgarrett6', NULL, '28-44-73-56', '$2y$10$PlEsfnFZ4PJyJ/qiW6R9Xut/.pzrWO2rEbgDV9g41YY1jlhuGxvOa', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Denmark', 2, NULL, '2019-03-21 01:17:48', '2019-03-21 01:17:48', 0),
(635, 0, 0, 0, 'emmanuel', 'Manufique', '', 'Music Producer', 'Manic pax', NULL, '0812603665', '$2y$10$J1big8ZgrfwHWAhDaNkzjOM0ruF7Ol1kAf5gSXhNprgr8qRPOKVKq', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'South Africa', 2, NULL, '2019-03-21 01:38:42', '2019-03-21 01:38:42', 0),
(636, 0, 0, 0, 'Smart', 'Nwulu', '', 'Music Producer', 'Mr NSCey', 'nwulu.smart@gmail.com', '07064581122', '$2y$10$ZT/4/86Si.78QCFjEh2S2eJnkpqrZJOqyb1Rj3OzG4hLhyqbcUC7e', 'user', '6d4305a36fb05f32892d696f4315ea9f_1553240553.png', 'Users/photo', '486835', '', '', '', 'instagram.com/mr_nscey', '', '', 'Lagos', '', 'Nigeria', 2, NULL, '2019-03-22 07:14:43', '2019-03-22 08:42:33', 0),
(637, 0, 0, 0, 'Felicitas', 'Pasco', '', 'Guest', 'felicitaspasco', 'Felicitas-Pasco90@rollagodno.ru', '05.51.58.20.19', '$2y$10$UIDmC8V/MxQ19C4.qK.MKe2R1lzN8JEW/orYV4dy3sQ0cjbXvKr2i', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'France', 2, NULL, '2019-03-22 09:53:35', '2019-03-22 09:53:35', 0),
(638, 0, 0, 0, 'usmajor04@gmail.com', 'Sabi', '', 'Artiste', '2OK', NULL, '08054907259', '$2y$10$w6cUJ78.A30z8MgDBDyo2u6/gF2S.30iNk8XTZLcMFIu/kMl5kjqC', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-03-22 14:50:18', '2019-03-22 14:50:18', 0),
(639, 0, 0, 0, 'Lucas', 'Torres', '', 'Guest', 'lucastorres4', NULL, '416-419-0119', '$2y$10$8PtjoxaqXWeePvUD8boyN.m64TZcYdVNIA.xyj6BiCD1R2qJNfblC', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Canada', 2, NULL, '2019-03-22 15:53:40', '2019-03-22 15:53:40', 0),
(640, 0, 0, 0, 'IrenPed', 'IrenPedZR', '', 'Video Director', 'Beaver springs', NULL, '83217712136', '$2y$10$7PetLJx6tpXNsmUTnbw8EOq68dMktyKDqoTXbxz5xrbP9bbPCY8JO', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Jamaica', 2, NULL, '2019-03-24 10:19:29', '2019-03-24 10:19:29', 0),
(641, 0, 0, 0, 'jeff', 'blaize', '', 'Guest', 'PHEONIX BEATZ', 'blaizejeff18@gmail.com', '08159644720', '$2y$10$n1zkdTYzwFo9p6xr4xzF5ugvYBxi2UzM3Pvmjim5SVSJDvBNKUKsi', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-03-27 00:27:12', '2019-03-27 00:27:12', 0),
(642, 0, 0, 0, 'david', 'Yusuf', '', 'Music Producer', ' singlemickey', 'soundgodsinglemickey@gmail.com', '07015901086', '$2y$10$2YmutiwdIjHTb5cLwMZpCem9VxLbTB2Ya3E/qjeVXZIXYnKf/vmGC', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-03-28 09:11:06', '2019-03-28 09:11:06', 0),
(643, 0, 0, 0, 'Oge', 'odogwu', '', 'Guest', 'Pizzypresh', 'Ogepresh99@gmail.com', '8324065477', '$2y$10$r4o9ft/16s2QVv11WLLrxuMATp41XZfgfst2Phd9u4Kav2mDIK.ze', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-03-29 00:39:22', '2019-03-29 00:39:22', 0),
(644, 0, 0, 0, 'dominique', 'tyce', '', 'Guest', 'Tyce on deck ', 'tyceondeck@gmail.com', '08136392254', '$2y$10$n9vfNTuowbHdz8huy8/XsuWSL1PRppF2uxPqU1JUOZr5X3trBtQ5C', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-03-30 17:49:23', '2019-03-30 17:49:23', 0),
(645, 0, 0, 0, 'Abu ', 'Jeffrey', '', 'Guest', 'JaySuperior', 'jeffheptagon@gmail.com', '07052126716', '$2y$10$7rMwCMycilx5Z/8YhSAgI.eGDQ6bfeExRsMTlzuYhEh1unmgSTF16', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-04-01 04:00:57', '2019-04-01 04:00:57', 0),
(646, 0, 0, 0, 'Trent', 'Hartz', '', 'Guest', 'trentdia2574890', NULL, '06802 75 81 86', '$2y$10$tBulVzvUJgdtS8sGDsWeS.N8ghYPFLCo4AP1nQfjkAwmtNs//Xxfq', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Germany', 2, NULL, '2019-04-03 05:31:54', '2019-04-03 05:31:54', 0),
(647, 0, 0, 0, 'Emmanuel', 'Pometsey', '', 'Artiste', 'Jadu', 'jadumaha@gmail.com', '8048335221', '$2y$10$BgHDer15Za0YOkFAcdcprOMH//Eg8V5PEymrPtxumx40wZWTMel7K', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'United States', 2, NULL, '2019-04-04 03:56:10', '2019-04-04 03:56:10', 0),
(648, 0, 0, 0, 'Method ', 'Wailer', '', 'Artiste', 'Prince of Africa', 'methodgotekote@gmail.com', '+263 718959353', '$2y$10$LYCRDhzyBNDF2QrYMsZSV.Vb6nBlAQ2ad6yw/vCa.OPQ6qZmPYwAK', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Zimbabwe', 2, NULL, '2019-04-04 07:44:58', '2019-04-04 07:44:58', 0),
(649, 0, 0, 0, 'Abel', 'Akpor', '', 'Guest', 'Deabel', NULL, '+14436944925', '$2y$10$RoWAftlBg8fRyMAmh.WYZuuW3yFtQ1ZvcymTo7E06BN.qMnsjqVHe', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-04-06 17:23:49', '2019-04-06 17:23:49', 0),
(650, 0, 0, 0, 'Richard', 'Ezekiel', '', 'Music Producer', 'Ezzykeyz', 'ezzykeyz200@gmail.com', '+2348133086408', '$2y$10$peOE7VHZnVsGryUH9B.8f.ytHXo.YIdAMrjndDhsgl9BDCO023x46', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-04-09 00:41:45', '2019-04-09 00:41:45', 0),
(651, 0, 0, 0, 'Bradly', 'McCready', '', 'Guest', 'bradlymccready096854', NULL, 'HW', '$2y$10$Ph30xo1I2GbzYkj0NcCtDOggsQ0FP36es/i2kvyG.aLE2L91wbqay', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Austria', 2, NULL, '2019-04-09 21:58:44', '2019-04-09 21:58:44', 0),
(652, 0, 0, 0, 'Opeyemi', 'Ajayi', '', 'Artiste', 'Viinc', NULL, '08169925246', '$2y$10$1PjVmWJumDsqxO.Mc6tnPu3SST/RfF3E33bIhfO.4IiruxNGOzNt6', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-04-10 15:31:11', '2019-04-10 15:31:11', 0),
(653, 0, 0, 0, 'Sightiwx', 'szusaymeomcwdbfGP', '', 'Music Producer', 'Rock Falls Raceway', NULL, '84847738654', '$2y$10$VF8XBeO2CSce8YZqaGkEZOFoJlfDizcfT7Cc.9wJQbfyWzcT/e1SK', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Albania', 2, NULL, '2019-04-11 00:49:09', '2019-04-11 00:49:09', 0),
(654, 0, 0, 0, 'Gus', 'Purvis', '', 'Guest', 'guspurvis2830', NULL, '0368 0228223', '$2y$10$oZLOOGlNWbahXLVVcoatt.yiQzkl1XLHwe3Mx0//73cBVmYvZRGW.', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Italy', 2, NULL, '2019-04-11 18:49:41', '2019-04-11 18:49:41', 0),
(655, 0, 0, 0, 'Enrique', 'Jaeger', '', 'Guest', 'enriquejaeger', 'Enrique-Jaeger58@rollagodno.ru', '0681 560 86 13', '$2y$10$SwiTrRpH0dtm92sRBcsQzu3YH9ZTKnpzKs0AaHckQvMIUNQvGwiVC', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Austria', 2, NULL, '2019-04-13 02:25:40', '2019-04-13 02:25:40', 0),
(656, 0, 0, 0, 'Vallie', 'Briley', '', 'Guest', 'vallie23316168650125', NULL, '0368 2072282', '$2y$10$4LOePqFCs4rBFW9xzbTKp.DrooHbNOrnosHdxJIFMIJ1LWbarnzsO', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Italy', 2, NULL, '2019-04-15 02:02:51', '2019-04-15 02:02:51', 0),
(657, 0, 0, 0, 'Kristy', 'Amoah', '', 'Guest', 'Queen', 'HolisticEarth777@gmail.com', '7707561341', '$2y$10$WC9glIVAath.8Ajrc6dJvevvEhF6xKzl5OiC2vs/Ji/aOMwi30k8C', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'United States', 2, NULL, '2019-04-16 19:19:45', '2019-04-16 19:19:45', 0),
(658, 0, 0, 0, 'Jesus', 'Person', '', 'Guest', 'jesus52z810', 'Jesus-Person91@sterlace.dynamailbox.com', '06-33744858', '$2y$10$YFuUt27CzR4kJUAdUwX3duxWtVqLGEKAdZ3ROgW7te/rAoInR0Ari', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Netherlands', 2, NULL, '2019-04-17 01:33:18', '2019-04-17 01:33:18', 0),
(659, 0, 0, 0, 'Samuel', 'Goin', '', 'Artiste', 'Panda', 'percygoin74@gmail.com', '0272048546', '$2y$10$5TTS8j6pb7pMqh77JW.RsumJHlsA8Se1EZqm79fHPqHfkVRs5ZKnq', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Ghana', 2, NULL, '2019-04-17 16:43:58', '2019-04-17 16:43:58', 0),
(660, 0, 0, 0, 'John ', 'Kezzy', '', 'Artiste', 'Kezzy', 'johnchidi974@gmail.com', '07018463776', '$2y$10$iHaqSW7W0Vkk9tQkFcTeA.aU0aImOaRUyvFJkEfBtGmjvoCuLet5y', 'user', '254f19033b7253dace72cf4d4ef2cd2a_1555666852.jpg', 'Users/photo', '137671', 'I do what I love music, not because of the money but for the passion I have for it.. ', 'John kezzy', '', 'Kezzy003', '', '41 Uwague', 'Edo', '300271', 'Nigeria', 2, NULL, '2019-04-19 10:21:13', '2019-04-19 10:40:52', 0),
(661, 0, 0, 0, 'OluwaSegun', 'Dada', '', 'Music Producer', 'ImmaculateBeatz', 'shegzyjay01@gmail.com', '08181840773', '$2y$10$YcuGyAYMSbxV.RBZdeH68OKFDp1Vei.tP0vZdir8CBDa985R.tG42', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-04-19 18:46:48', '2019-04-19 18:46:48', 0),
(662, 0, 0, 0, 'Victorr', 'Mozare', '', 'Music Producer', 'Sweet', NULL, '+2348122823045', '$2y$10$T5Iva8TERcTn1LYAHx8GC..A2yH5G638OlN9ZZne8CcnosFN.8mMS', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-04-27 11:53:32', '2019-04-27 11:53:32', 0),
(663, 0, 0, 0, 'Victor', 'Mozare', '', 'Music Producer', 'Victorsweet', NULL, '+2348122823045', '$2y$10$MKMBckDPQdJZz5TYOLfW.eZKd524Pb6epAzoUJ5deWhRmh.dRRWeq', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-04-27 11:55:46', '2019-04-27 11:55:46', 0),
(664, 0, 0, 0, 'Victor', 'Mozare', '', 'Music Producer', 'Mozare', NULL, '+2348122823045', '$2y$10$1VTw00qS5ERMHMvrU47NNOhLbYvWrXj7EOuNdE0n7ubzCYeTvPTgi', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-04-27 11:57:37', '2019-04-27 11:57:37', 0),
(665, 0, 0, 0, 'Adejimi', 'Joshua', '', 'Music Producer', 'Jk', NULL, '09079516360', '$2y$10$W7fPdypGZb3gpM95kwjiK.2g3E3SAFyzSVlmNH40RSjFzpRCVDWce', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-04-27 12:47:09', '2019-04-27 12:47:09', 0),
(666, 0, 0, 0, 'Adejimi', 'Joshua', '', 'Guest', 'Jimmy king', NULL, '09079516360', '$2y$10$dPoKZHS627NMe3bVFtnvVOZzuQKck9XrOLIuTJzxm/Pp3NDUvBfbO', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-04-27 12:48:04', '2019-04-27 12:48:04', 0),
(667, 0, 0, 0, 'Adejimi', 'Joshua', '', 'Music Producer', 'Jimmyking', NULL, '09079516360', '$2y$10$AFKCEEyOD51g6BECRwRJS.ZhrwvUQu9lL.FhemjYuaMdctmEazRr2', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-04-27 12:48:43', '2019-04-27 12:48:43', 0),
(668, 0, 0, 0, 'Adejimi', 'Joshua', '', 'Guest', 'Jimmykingseyi', NULL, '09079516360', '$2y$10$RAgLs0iukmsZGr3XIiR/guttIFReRoHpLCp8vTF5.dePmyGLfrGPG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-04-27 12:49:23', '2019-04-27 12:49:23', 0),
(669, 0, 0, 0, 'Adejimi', 'Joshua', '', 'Music Producer', 'Kjimmyboss', NULL, '09079516360', '$2y$10$89a9ZCnDwmb/VpKxRgu2iOznvg7FSYujOM6Apz32Mx234qUpESRPS', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-04-27 12:50:59', '2019-04-27 12:50:59', 0),
(670, 0, 0, 0, 'Lil energy', 'Energy', '', 'Music Producer', 'Lil energy', NULL, '0550156629', '$2y$10$U28q9kA9inhKSCIghSXxQ.oL9HEouVnk6knl990UQN3LSUCZci/DW', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Ghana', 2, NULL, '2019-04-29 02:53:10', '2019-04-29 02:53:10', 0),
(671, 0, 0, 0, 'Lil energy', 'Energy', '', 'Guest', 'Lil energy1', NULL, '0550156629', '$2y$10$gvJrP9wTLGanHhgcUCsqh.P.yAyJgMURmnEaDnElM.QqoYByk4vNa', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-04-29 02:56:15', '2019-04-29 02:56:15', 0),
(672, 0, 0, 0, 'Manuela', 'Fennell', '', 'Guest', 'manuelafennell340', NULL, '0650 747 11 50', '$2y$10$i.D/IN82ESmv6.PI6WheiuZSQ0z66ckE6RlgMooWG8eb0KLKwI.zC', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Austria', 2, NULL, '2019-04-29 03:04:03', '2019-04-29 03:04:03', 0),
(673, 0, 0, 0, 'Somto', 'Madueke', '', 'Guest', 'NTO ', NULL, '07014377745', '$2y$10$d9t9Ebyg6wARfs/icZ3NfOB3wxvZTab4xUTBvtDDOSQwUty53Ap8.', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-04-29 21:33:19', '2019-04-29 21:33:19', 0),
(674, 0, 0, 0, 'Somto', 'Madueke', '', 'Guest', 'NTO boy', NULL, '07014377745', '$2y$10$wQujEuZn7RJaomeaJBJs1eazdnkJEdjy0ptjGscHLsJQkBFNhoLvC', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-04-29 21:34:04', '2019-04-29 21:34:04', 0),
(675, 0, 0, 0, 'Somto', 'Madueke', '', 'Music Producer', 'N.T.O', NULL, '07014377745', '$2y$10$3EeFvxoS68BxY0/DZMBjpu..dlXE.61KNbRK7qfPn2nk9yyt9sCxC', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-04-29 21:36:31', '2019-04-29 21:36:31', 0),
(676, 0, 0, 0, 'Somto', 'Madueke', '', 'Music Producer', 'N.T.O boyy', NULL, '07014377745', '$2y$10$2Kw/sFkn8EppwbSsksA.9.s.MqJXFYGriKZO9WvJF22kUtNdwguAy', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-04-29 21:36:57', '2019-04-29 21:36:57', 0),
(677, 0, 0, 0, 'Somto', 'Madueke', '', 'Music Producer', 'Neill', NULL, '07014377745', '$2y$10$iF9qGt3CwxpI2bJxOPpSgegEbwL5tmuW7TBKQmpQqphkToUEJiCQK', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-04-29 21:37:48', '2019-04-29 21:37:48', 0),
(678, 0, 0, 0, 'Samuel', 'OMOIGHE', '', 'Guest', 'Samaret', NULL, '08163864881', '$2y$10$aF2j13yoZxudnj4.410dk.bPMjZhFB5qr1tOFDu//PoKHPwuayetm', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-04-29 21:40:30', '2019-04-29 21:40:30', 0),
(679, 0, 0, 0, 'Martin', 'Ruggles', '', 'Guest', 'martinruggles', NULL, 'XL', '$2y$10$1UIulGG9EpjxTOTA0jciS.DBG1nXe5W85F.mnoiv1B3OdIpHB3hq2', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Austria', 2, NULL, '2019-04-30 12:50:28', '2019-04-30 12:50:28', 0),
(680, 0, 0, 0, 'Christena', 'Guido', '', 'Guest', 'christenaguido3', NULL, '(07) 4577 1089', '$2y$10$.lcMfx3gd3KiDQGr5YRYH.iIq.KvNBgA5nudZNW3JLsf0y5/pPPEK', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Australia', 2, NULL, '2019-05-01 01:23:17', '2019-05-01 01:23:17', 0),
(681, 0, 0, 0, 'Heidi', 'Mims', '', 'Guest', 'heidin535346', NULL, '302-294-7940', '$2y$10$YET6shCpLR/wW.Q5hhKAluoCcO0q9EvQ/gNwCeNQtEpFsYN89S2Z2', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'United States', 2, NULL, '2019-05-01 02:19:26', '2019-05-01 02:19:26', 0),
(682, 0, 0, 0, 'Marta', 'Milson', '', 'Guest', 'martamilson189', NULL, '(03) 5326 3940', '$2y$10$NhkeIyFRN9U8B/L7sqroFObl.iGxkNZOgrKHCeLeyv2PdMfR/D.fS', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Australia', 2, NULL, '2019-05-01 10:48:31', '2019-05-01 10:48:31', 0),
(683, 0, 0, 0, 'Dave', 'Finsch', '', 'Guest', 'davefinsch8', NULL, '04.28.19.87.37', '$2y$10$Skct9itYdt/IK1Zxtmq3vuW1sVKDXhyOdkTh8byQBXw8iVkVXtUlG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'France', 2, NULL, '2019-05-01 12:15:14', '2019-05-01 12:15:14', 0),
(684, 0, 0, 0, 'Selena', 'Morell', '', 'Guest', 'selenakgr5701620', NULL, '08847 21 15 52', '$2y$10$DrIy08WzvwkSqZaZnHfKheGMCVf6ZRAJKvissmHC9Um/tvDQUBIg.', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Germany', 2, NULL, '2019-05-01 16:39:57', '2019-05-01 16:39:57', 0),
(685, 0, 0, 0, 'Cody', 'Mclain', '', 'Guest', 'codymclain2', NULL, '06-29074697', '$2y$10$oeRQ58sHQ4CsyKbSEResOudRcPK/pVJShA5PhSkrC54gv6fkwvSdG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Netherlands', 2, NULL, '2019-05-01 17:28:08', '2019-05-01 17:28:08', 0),
(686, 0, 0, 0, 'Haywardjau', 'zzusafmennpzz3hGP', '', 'Songwriter', 'Hwy 169', NULL, '81318254867', '$2y$10$5bpK4hdk2c/TGNM9FNmtTO2.3maGqjTbW4ch2j9EctZq/D7gBzNn.', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Cote d\'Ivoire', 2, NULL, '2019-05-03 14:37:31', '2019-05-03 14:37:31', 0),
(687, 0, 0, 0, 'Edelbrockiin', 'zwusalmewnjycozGP', '', 'Artiste', 'Cordova Dragway', NULL, '85794148357', '$2y$10$GmOTaRTudejeYHGwNT01Le.XuZRz4bAB8nD/hhQTQ61yBPAjp.OQq', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Guatemala', 2, NULL, '2019-05-04 18:07:26', '2019-05-04 18:07:26', 0),
(688, 0, 0, 0, 'Edith', 'Toussaint', '', 'Guest', 'edithtoussaint5', NULL, '06805 40 07 61', '$2y$10$PTf6PFNCT3hcPoHQsvZfquiu1xSEQLaQLpFli5LDVbDHXOD0ADVBq', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Germany', 2, NULL, '2019-05-05 01:39:40', '2019-05-05 01:39:40', 0),
(689, 0, 0, 0, 'Rowland ', 'Grimu', '', 'Music Producer', 'Flus ABM Beatz', NULL, '3208870378', '$2y$10$HyGaKyolnVuqbcVZGYSneenzDWT/qmwolvlEcfWlBpwigqxiAHn8a', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-05-07 06:53:15', '2019-05-07 06:53:15', 0),
(690, 0, 0, 0, 'Okereke', 'Josiah', '', 'Music Producer', 'Kingjoe', NULL, '07060961244', '$2y$10$svsYfTG936updIOyCJ1onumjq.9yzUw.vMp3TH24afYFZU.oqqi.G', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-05-07 22:35:45', '2019-05-07 22:35:45', 0),
(691, 0, 0, 0, 'Okereke', 'Josiah', '', 'Guest', 'Lushie', NULL, '07060961244', '$2y$10$It3C4u66kCBZ29L.76Toqu6kN5EN3FQ.ZpQ/6WIazymvS5q1Cz8WO', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-05-07 22:39:23', '2019-05-07 22:39:23', 0),
(692, 0, 0, 0, 'Okereke', 'Josiah', '', 'Guest', 'Josiah', NULL, '07060961244', '$2y$10$/x05nRv6bkznTW.dD45fAep/rcABJEu9CyViqbyA/x0tlbbkSt.cq', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-05-07 22:42:02', '2019-05-07 22:42:02', 0),
(693, 0, 0, 0, 'Documentehw', 'xwusaymelmwqd2wGP', '', 'Songwriter', 'University ave', NULL, '89974849377', '$2y$10$aG/BHhZFkB5kSE7D0mFJU.px44ABSxKoDX8XjvC19EFCYs1Xum/Ze', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Namibia', 2, NULL, '2019-05-08 10:09:54', '2019-05-08 10:09:54', 0),
(694, 0, 0, 0, 'Paye', 'Kialain', '', 'Guest', 'Tricky Doe', NULL, '7703102675', '$2y$10$NLdHeV2GRvbY84rjtHl2tO9SdMERW5x96gzr9.4gWaZ3f/xdEJ6Xy', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'United States', 2, NULL, '2019-05-08 13:19:35', '2019-05-08 13:19:35', 0),
(695, 0, 0, 0, 'alex', 'kweku ahanta', '', 'Guest', 'root ahanta', NULL, '07424423706', '$2y$10$7U5Se6AMKHe.b38MAZ28DOvMLi9vlGM13N3BpCTBDXkx0QZzJFo4O', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Ghana', 2, NULL, '2019-05-08 17:04:49', '2019-05-08 17:04:49', 0),
(696, 0, 0, 0, 'Ezema', 'paul', '', 'Artiste', 'starzy', NULL, '07035439006', '$2y$10$0gH9r8UtR/9F70vEorY2ouwOShx5gKk8zhz5S2olontDj1682ScG.', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-05-08 23:02:38', '2019-05-08 23:02:38', 0),
(697, 0, 0, 0, 'Zella', 'Candelaria', '', 'Guest', 'zellaczt84', NULL, '0327 7891712', '$2y$10$lSadQGcq8HMLqTNGIWDHquRQ9m4EhyBRl8ddWyp1q0.I8qwmNfgn6', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Italy', 2, NULL, '2019-05-11 01:12:18', '2019-05-11 01:12:18', 0),
(698, 0, 0, 0, 'Artisanyaw', 'swusaymernyfcpaGP', '', 'Music Producer', 'Interstate Dragways', NULL, '85334349893', '$2y$10$enF8YB1CbD793RDtQANs/ukq3c5629TbngZFa0Zk3k9YvM6BtTccO', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Monaco', 2, NULL, '2019-05-11 06:04:22', '2019-05-11 06:04:22', 0),
(699, 0, 0, 0, 'Squierxbe', 'xvusaymesndezzhGP', '', 'Music Producer', 'Rock falls.', NULL, '82439416433', '$2y$10$3TUz9GqxNYbGmFwxVdkLL.P5U3ZiKjPucdO/M6.eXBML3XlptM41G', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Portugal', 2, NULL, '2019-05-12 11:11:32', '2019-05-12 11:11:32', 0),
(700, 0, 0, 0, 'Adamssow', 'AdamssowUB', '', 'Video Director', 'Rock Falls', NULL, '82722172141', '$2y$10$xWmx/TuGwgCLRFcUccqfxeSR/mtVG//6bCni8Og/p1DiKsXoQfqiy', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'France', 2, NULL, '2019-05-13 04:03:50', '2019-05-13 04:03:50', 0),
(701, 0, 0, 0, 'Dino', 'Thurber', '', 'Guest', 'dinothurber0', NULL, '0487 74 50 74', '$2y$10$m9ucQYC0tMvKWKShSWsLBOZ8jIq6m15P/yVYxO55Dwye5vFyqfy/C', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Belgium', 2, NULL, '2019-05-13 15:59:31', '2019-05-13 15:59:31', 0),
(702, 0, 0, 0, 'Mohamed', 'Farahani', '', 'Music Producer', 'Mohsafa', NULL, '+2550744376547', '$2y$10$UeI5ilE05bFelkvbvNKbVefdUxhD7D3HYRJ/RDeSHFR75JVhnVF9W', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Tanzania, United Republic of', 2, NULL, '2019-05-14 13:41:39', '2019-05-14 13:41:39', 0),
(703, 0, 0, 0, 'Mohamed', 'Farahani', '', 'Music Producer', 'Mohsafaevy ', NULL, '+2550744376547', '$2y$10$FZ9KrOs/Sieqi0o1QyOMeezux14wutWvWu1ZDwnN3zfEk9IeK1Ej2', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Tanzania, United Republic of', 2, NULL, '2019-05-14 13:42:42', '2019-05-14 13:42:42', 0),
(704, 0, 0, 0, 'Tom', 'Fegan', '', 'Guest', 'tomfegan0629', NULL, '03.12.25.52.00', '$2y$10$ydD2UjMj.j7nPCTnV2WSFeXDJbRW3yiB3EydjmzZccRR04PfSzyoK', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'France', 2, NULL, '2019-05-15 01:06:13', '2019-05-15 01:06:13', 0),
(705, 0, 0, 0, 'Adenuga', 'Adedayo', '', 'Guest', 'Meinama', NULL, '08079564466', '$2y$10$5hO8YfnFbO2zrsZ7t1CizugqRulljhu7Q7H7rp/IHIjcBJodD.TCO', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-05-16 12:25:26', '2019-05-16 12:25:26', 0),
(706, 0, 0, 0, 'Adenuga', 'Adedayo', '', 'Guest', 'Mei_nama', NULL, '08079564466', '$2y$10$jlOp.zdHBjhe7i/jlyhkA.3fTrlbKn2UCHXwIJCKK6E.tpzxHfX4K', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-05-16 12:26:46', '2019-05-16 12:26:46', 0),
(707, 0, 0, 0, 'Rolando', 'Gravatt', '', 'Guest', 'rolandox59', NULL, '0392 1686738', '$2y$10$bChzg2iR1F8Qe6Cg876B8.8bP595ASB4JkaME8BgpcD5Og/tU2pGq', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Italy', 2, NULL, '2019-05-17 00:06:13', '2019-05-17 00:06:13', 0),
(708, 0, 0, 0, 'Blendervbz', 'szusalmehmphcbjGP', '', 'Songwriter', 'Raceway park', NULL, '84771477781', '$2y$10$4A7iIB5ZY7g7KmGQ9JrFke18jilUTMFkmBw8CyXdjww4Xx5SHeCQq', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Malawi', 2, NULL, '2019-05-17 11:15:35', '2019-05-17 11:15:35', 0),
(709, 0, 0, 0, 'David', 'Agbogun', '', 'Music Producer', 'Beatsbydavis', NULL, '07063154532', '$2y$10$2cCDPq8dwPHGJg5KsmW1kuEOowBApkiWb7lklVcSdRu7rS8WDByjO', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-05-17 21:19:01', '2019-05-17 21:19:01', 0),
(710, 0, 0, 0, 'David', 'Agbogun', '', 'Music Producer', 'BossTunes', NULL, '07063154532', '$2y$10$1wgSUo6H3VhglgKcXFlGZ.q8rwj5aPES85oPpwqvjFUxcBZ8Uz/xm', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-05-17 21:23:55', '2019-05-17 21:23:55', 0),
(711, 0, 0, 0, 'David', 'Agbogun', '', 'Music Producer', 'KillerTunes', NULL, '07063154532', '$2y$10$EbL1z8s0pyDL0CmFf6HE.OP74pA7DDvp9jr22WBGruTwTdmzqvUTC', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-05-17 21:38:49', '2019-05-17 21:38:49', 0),
(712, 0, 0, 0, 'Ward', 'Felan', '', 'Guest', 'wardfelan24903', NULL, '994 98 348', '$2y$10$DhEKwa1SQzZ6ySDgZRhrSujSQYC9f15K/.n1gxSNtyFWiq5kTGuwq', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Norway', 2, NULL, '2019-05-19 01:44:18', '2019-05-19 01:44:18', 0),
(713, 0, 0, 0, 'Alberta', 'Clemente', '', 'Guest', 'albertaxyf', NULL, '06-28042025', '$2y$10$9uhnqOAlTJOgAOiXdNqZteKWWbU9ikUfhzBf6tL6iBhKJbWhbD02K', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Netherlands', 2, NULL, '2019-05-19 09:53:51', '2019-05-19 09:53:51', 0),
(714, 0, 0, 0, 'Wade', 'Kerferd', '', 'Guest', 'wadekerferd913', NULL, '0335 9918380', '$2y$10$3MsW4lzrAbWKS9MVuqUYuO70fLR0SW.9XnNn.ZPNqFf6n9d3SKiRS', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Italy', 2, NULL, '2019-05-19 16:12:18', '2019-05-19 16:12:18', 0),
(715, 0, 0, 0, 'Paul John', 'Asuekomhe ', '', 'Music Producer', 'Johnay', NULL, '08038853986', '$2y$10$i7.uWPnqFaNs8UYgfxhA1e.2crpqJ8ecHwFtsdF5EjSBgJvPgslHu', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-05-20 05:41:09', '2019-05-20 05:41:09', 0),
(716, 0, 0, 0, 'Paul John', 'Asuekomhe ', '', 'Music Producer', 'Johnay_ NG', NULL, '08038853986', '$2y$10$QFIvHGY8ZqvCflqy0Q8Xj.PpnhBvwMAIBLZDx16QCoTT5B.YNBBKi', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-05-20 05:46:02', '2019-05-20 05:46:02', 0),
(717, 0, 0, 0, 'Paul John', 'Asuekomhe ', '', 'Guest', 'Johnay Empire', NULL, '08038853986', '$2y$10$3I3fHBDV/aMM6wsXXUpT6u54xC9XjQJ2spjL2rnZGXOqv.1K8DcgC', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-05-20 05:47:41', '2019-05-20 05:47:41', 0),
(718, 0, 0, 0, 'Timmy', 'Primrose', '', 'Guest', 'timmym386483479', NULL, '06-64979512', '$2y$10$jGZPvWx40iA4RrsIYSAdmuiT/Ed3OH9w/Hg7nvYgzEp5ZRKDiMT0S', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Netherlands', 2, NULL, '2019-05-20 05:48:12', '2019-05-20 05:48:12', 0),
(719, 0, 0, 0, 'Paul John', 'Asuekomhe ', '', 'Music Producer', 'ItsJohnay', NULL, '08038853986', '$2y$10$rqqUZB/UNjiAtI/PnVeUI.qPPy.LlwaaciPioDVjboZWGtGSc63X.', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-05-20 06:07:47', '2019-05-20 06:07:47', 0),
(720, 0, 0, 0, 'Paul John', 'Asuekomhe ', '', 'Guest', 'ItsJohnaybeatz', NULL, '08038853986', '$2y$10$RLbJW1tmW6fjC3CPI6Ow3.Y0XERvt.Bzbq1rA5d9hrLrMkaZJ1upS', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-05-20 06:09:24', '2019-05-20 06:09:24', 0),
(721, 0, 0, 0, 'Paul John', 'Asuekomhe ', '', 'Guest', 'ItsJohnaybeatz24', NULL, '08038853986', '$2y$10$a.ZyyRL1G2GCiVmOMQYBwuD70yko9QAREXiBE7ydSMnR1hyiGTWdS', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-05-20 06:10:34', '2019-05-20 06:10:34', 0),
(722, 0, 0, 0, 'Paul', 'John', '', 'Music Producer', 'Johnayempirebatz', NULL, '08038853986', '$2y$10$WHytrWjFzl8NtaQHWywbWu1cLGKodKY8nnh24YWouhefFPxZZZdB.', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-05-20 06:14:56', '2019-05-20 06:14:56', 0),
(723, 0, 0, 0, 'Paul', 'John', '', 'Music Producer', 'Johnayempirebeatz', NULL, '08038853986', '$2y$10$OOXaeKL/aKLfhUhcD4xkU.lheNiMFliOXTZCOi5GfQD67IXR5rjIm', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-05-20 06:16:13', '2019-05-20 06:16:13', 0),
(724, 0, 0, 0, 'Paul', 'John', '', 'Music Producer', 'ItsJohnayempirebeatz', NULL, '08038853986', '$2y$10$Go9Pe6GUV0uS1R52En75X.9FivoWoPFFIaEvGOOpGDWE5QXoJFFFG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-05-20 06:17:01', '2019-05-20 06:17:01', 0),
(725, 0, 0, 0, 'Kristofer', 'Strange', '', 'Guest', 'kristoferstrange', NULL, '0338 7767870', '$2y$10$7MOLlpZRJQQeG.GGJUgS1ewLAtdpEho65D/ub.HAzVV678k.EACE.', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Italy', 2, NULL, '2019-05-20 13:23:39', '2019-05-20 13:23:39', 0),
(726, 0, 0, 0, 'Juanita', 'Skidmore', '', 'Guest', 'juanitaskidmore', NULL, '(33) 9414-8853', '$2y$10$rPN6JDRky1n4wa7OvaQCTe/gsVTj9HHZO.yyMhTHRvVMRzCkboKOG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Brazil', 2, NULL, '2019-05-22 01:51:18', '2019-05-22 01:51:18', 0),
(727, 0, 0, 0, 'seleman', 'Mchatta', '', 'Guest', 'slaxc26', NULL, '+255718656460', '$2y$10$S74hO3OlFIRVeNAR8/HGaOxQwxmaYKt3kX4f96SCAoOGZK2WvnRu6', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Tanzania, United Republic of', 2, NULL, '2019-05-22 11:10:54', '2019-05-22 11:10:54', 0),
(728, 0, 0, 0, 'seleman', 'Mchatta', '', 'Guest', 'slaxc2626', NULL, '+255718656460', '$2y$10$ZoT8hZnEYwqd36l7./nnXOGSZ8W5aD3ZnKXkNC7NG0NxVGAejecPC', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Tanzania, United Republic of', 2, NULL, '2019-05-22 11:15:03', '2019-05-22 11:15:03', 0),
(729, 0, 0, 0, 'Olaitan', 'Olaitan', '', 'Music Producer', 'Onifade', 'onifadeolaitan7@gmail.com', '07061287036', '$2y$10$/N.shfPancc.ziBIytfLx.6Glf/xTIruG.llm.3XtB5MhJLPW3ja.', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-05-22 17:35:52', '2019-05-22 17:35:52', 0),
(730, 0, 1, 1, 'Ifedapo ', 'Oderinde ', '', 'Music Producer', 'Akiira', 'akiraschannel@gmail.com', '08141905659', '$2y$10$m1rBgwVPGxhVYOqrQI8rD./d80YvB9S1YdYrMu/n7ursSKxTp4qBu', 'user', 'a6ca5221115c73eca5f97adb2a891ad0_1568702599.jpg', 'Users/photo', '97550', '18 yr old Music Producer from Lagos, Nigeria. ', '', '@AkiraMusic0', 'akiramusic_', 'https://www.youtube.com/channel/UCkt3MUaOe_VlSZN_G', 'University of Lagos Akoka Nigeria, 22 Olowookere Ave Magboro Nigeria', 'Lagos', '100213', 'Nigeria', 2, NULL, '2019-05-23 21:10:15', '2019-09-17 07:43:19', 1),
(731, 0, 0, 0, 'KitchenAidwnz', 'svusalmecmqbzbyGP', '', 'Music Producer', 'CFR', NULL, '89321792568', '$2y$10$R9wa/ykpWxCa23yq/2LsQO/LFukDJKRaKATWyHrgcqvYS7Hnk.YaW', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Armenia', 2, NULL, '2019-05-26 03:49:00', '2019-05-26 03:49:00', 0),
(732, 0, 0, 0, 'Gene', 'Armbruster', '', 'Guest', 'genearmbruster3', NULL, '(02) 9956 4490', '$2y$10$KF8SBxPSpKVUr8MzXj7.EeuBaKbmbDHH1kYuWmPaBlPamNvcVkAiu', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Australia', 2, NULL, '2019-05-26 23:15:20', '2019-05-26 23:15:20', 0),
(733, 0, 0, 0, 'Flukedxk', 'zwusaymemnhlzfpGP', '', 'Artiste', 'BIR', NULL, '82671386547', '$2y$10$JBq7qRMYQYOZoE.1BWuBJOEXSL0JCcn8GOVEgW.x/WIGGbrEaEek2', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Saudi Arabia', 2, NULL, '2019-05-27 17:52:00', '2019-05-27 17:52:00', 0),
(734, 0, 0, 0, 'Samuel', 'Sila', '', 'Music Producer', '1kdoingit', 'www.1kdoingit@gmail.com', '0762211016', '$2y$10$cONBZPYfUwcHn6RRzK40XeKjsG0gwbmB59WBcmd5A6EnDfxrOzj0e', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Kenya', 2, NULL, '2019-05-27 18:35:15', '2019-05-27 18:35:15', 0),
(735, 0, 0, 0, 'Abbey', 'Allsop', '', 'Guest', 'abbeyt7409039715', NULL, '06-42240353', '$2y$10$fpg/C5D9o/GQyyhkBk2hb.CC3BzGQ.h7Rh0ea78mVu0hcwfdzy3TK', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Netherlands', 2, NULL, '2019-05-28 01:44:41', '2019-05-28 01:44:41', 0),
(736, 0, 0, 0, 'Cutteraoz', 'xzusaymegmznxkoGP', '', 'Video Director', 'ATCO', NULL, '85126773415', '$2y$10$EwgIMPVzUbTsDkUSdMyzO.qriXse9Jq4D93Km6V.Myk/e2nYSzhZu', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Kuwait', 2, NULL, '2019-05-28 14:50:51', '2019-05-28 14:50:51', 0),
(737, 0, 0, 0, 'Flexibletqi', 'zvusafmevtdndgbGP', '', 'Music Producer', 'Exit 66   lol', NULL, '85439694614', '$2y$10$7kr3c4Ys/7T2HAdrbuZltOw8ueqNgtXqwQIb4f15Cg4MUg37VrAYG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Philippines', 2, NULL, '2019-05-29 05:58:17', '2019-05-29 05:58:17', 0),
(738, 0, 0, 0, 'Genie', 'Salcido', '', 'Guest', 'geniedqo630', NULL, '034671 90 22', '$2y$10$9ohQuW.5ezdTuFfAQFmV.OEjZwYOB1t7EKupAWeHDCtZxVp5bshNa', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Germany', 2, NULL, '2019-05-29 18:32:34', '2019-05-29 18:32:34', 0),
(739, 0, 0, 0, 'Epiphonexmo', 'swusafmentrtzomGP', '', 'Songwriter', 'Rockfalls', NULL, '84531564193', '$2y$10$fqRm4Ca8j1qlC1uZwbUNtOqo9SQ3LcrK1i.HXHb6VDZq7eBYOU2nm', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Eritrea', 2, NULL, '2019-05-31 04:36:59', '2019-05-31 04:36:59', 0),
(740, 0, 0, 0, 'Gilda', 'Hinkler', '', 'Guest', 'gildaqcm9788', NULL, '02743 77 73 05', '$2y$10$TPCEnD.BeRUE59cWeGj.luBKNAqPxA8mYiMaCeDs4hqPJyekFS3Hi', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Germany', 2, NULL, '2019-06-01 06:08:38', '2019-06-01 06:08:38', 0),
(741, 0, 0, 0, 'Ada', 'McWilliam', '', 'Guest', 'adamcwilliam96', 'erikapi44v@mail.ru', '0398 9695300', '$2y$10$shQ.j9QvlJYAPTOg/cnZC.102HuIBK6n.KwIxtsYfxt5sEzuOFyQa', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Italy', 2, NULL, '2019-06-01 15:22:41', '2019-06-01 15:22:41', 0),
(742, 0, 0, 0, 'Serieshic', 'zzusafmecnjadzbGP', '', 'Video Director', 'ETOWN', NULL, '82754738123', '$2y$10$UveDtjI1OupKJqCrPH8mduapY4Y.K3DXkLJxl1boL9TCjm/giSvGa', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Mozambique', 2, NULL, '2019-06-01 17:21:19', '2019-06-01 17:21:19', 0),
(743, 0, 0, 0, 'Miesintei', 'osaisai', '', 'Guest', 'teatunez', NULL, '08140345521', '$2y$10$PXnkOd33PqNDQdnRlOgnjeUXzkA0KuMJmqGjIjv8IZAMzmnYJXcnK', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-06-03 23:27:30', '2019-06-03 23:27:30', 0),
(744, 0, 0, 0, 'Joyce', 'Kuykendall', '', 'Guest', 'joyce02s54083958', NULL, '(02) 9289 4984', '$2y$10$Kk1PlonUB8qrk/GBkIFDou8uXhyEzaQ0yVVHDcWB8KMfwspKWpWyu', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Australia', 2, NULL, '2019-06-04 05:07:58', '2019-06-04 05:07:58', 0),
(745, 0, 0, 0, 'Garminzwcc', 'xzusafmeetvwx2jGP', '', 'Music Producer', 'Slippery rock falls', NULL, '86456696586', '$2y$10$iN3wmNtnzOCAdc5/SYm/yO5hsuEeOnhWmOG7BkrlOZi41V59o/O3y', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Ghana', 2, NULL, '2019-06-05 00:44:38', '2019-06-05 00:44:38', 0),
(746, 0, 0, 0, 'Lunga', 'Mgqatsa', '', 'Artiste', 'Morningstar', 'lungamgqatsa@gmail.com', '+27824271329', '$2y$10$KmyUMPNAgGldfCxtqfPf5uTCf/CEF0gPboAmac8PmoPur9EsOfR32', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'South Africa', 2, NULL, '2019-06-05 10:11:49', '2019-06-05 10:11:49', 0),
(747, 0, 0, 0, 'swift', 'official', '', 'Music Producer', 'swift', 'wizvic1@gmail.com', '08183849942', '$2y$10$RrN8kcYJ/P9zyAZRlwsjX.tRXBlvmcZ2DpK9kyJ6dHE2nBZrpRMQ2', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-06-05 21:33:36', '2019-06-05 21:33:36', 0),
(748, 0, 0, 0, 'Pouringped', 'svusafmentnedfbGP', '', 'Artiste', 'Cedar Falls Raceway', NULL, '83115981976', '$2y$10$wRdupZwLxsuDv1pHyzR1m.gPVBwbCptn1nktMJ4uheugGiv1626sG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Tanzania, United Republic of', 2, NULL, '2019-06-07 05:10:43', '2019-06-07 05:10:43', 0),
(749, 0, 0, 0, 'Marylin', 'Chick', '', 'Guest', 'marylinchick01', NULL, '030 92 10 18', '$2y$10$7tKL9DXyLkVpTjDgybFiKuKfeSvKgACs9W76a/Ykqfl1msBlh5qGW', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Germany', 2, NULL, '2019-06-07 11:38:41', '2019-06-07 11:38:41', 0),
(750, 0, 0, 0, 'Chante', 'McCullough', '', 'Guest', 'chantemccullough', NULL, 'PK', '$2y$10$8Mul9LEwxQRBlU69UigB1Owa8solf2.cfX.AXanhnGmioBtc4rtf2', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Austria', 2, NULL, '2019-06-07 17:36:53', '2019-06-07 17:36:53', 0),
(751, 0, 0, 0, 'Crystle', 'Ludlum', '', 'Guest', 'crystleludlum3', 'crystleludlum@base.clarized.com', '0357 7448582', '$2y$10$TkgYGtLi45xfx6QT5GUiW.OTfNcyg3iG8ARvc6BU8mpIYPT4T188q', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Italy', 2, NULL, '2019-06-08 07:05:37', '2019-06-08 07:05:37', 0),
(752, 0, 0, 0, 'Jose', 'Staton', '', 'Guest', 'wfejose506966574', NULL, '07162 68 38 63', '$2y$10$xYZSlePltOhlQ0NlC9G8a.5pG4iiJdzTRopb8Tb1uXO.v/8/Bvcym', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Germany', 2, NULL, '2019-06-08 08:53:20', '2019-06-08 08:53:20', 0),
(753, 0, 0, 0, 'Marlon', 'Hardwicke', '', 'Guest', 'marlon74u678', 'MarlonHardwicke@galaxy.intained.com', '06734 12 44 60', '$2y$10$irnmRQuvRhQ0ViQIbqBV1eq3EOtLX.8eDE6dm9BswICPWO3hBqzUi', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Germany', 2, NULL, '2019-06-08 10:01:00', '2019-06-08 10:01:00', 0),
(754, 0, 0, 0, 'Mo', 'Kamara', '', 'Guest', 'MoHakimIII', NULL, '6513470770', '$2y$10$U.1kJstwHnzQmPG1OpqwYeFUQ.VY8dd6C4oD07YoQ1BkciXXVndQ2', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-06-08 12:38:12', '2019-06-08 12:38:12', 0),
(755, 0, 0, 0, 'chigozie ', 'okere', '', 'Music Producer', 'Gozie omba', NULL, '07016408254', '$2y$10$g0ZD3D9npg7mDrP5lTh17u.hGz0SMtNNCcpRNCyRWrLXgLzGdZ99K', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-06-08 15:21:46', '2019-06-08 15:21:46', 0),
(756, 0, 0, 0, 'Carri', 'Benefield', '', 'Guest', 'carribenefield', 'CarriBenefield40@galaxy.intained.com', '06-88668641', '$2y$10$hE6ctT9BqlS0F4R0oSpKuu30bxA21JfXYOm9JB6fmY6OJzNgKW79G', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Netherlands', 2, NULL, '2019-06-09 00:54:28', '2019-06-09 00:54:28', 0),
(757, 0, 0, 0, 'nn', 'jjjj', '', 'Guest', 'raylex', 'raylex133@gmail.com', '08065892884', '$2y$10$9EtD1b6gk6cuTTRKtiQL.e2eG3taczQcMCHzNakoyxbRyNYd3AGIi', 'user', 'e16bd8d90f72303c280b31c4abe3cadd_1560092644.jpg', 'Users/photo', '44898', '', '', '', '', '', '', '', '', 'Nigeria', 2, NULL, '2019-06-09 16:00:32', '2019-06-09 16:04:04', 0),
(758, 0, 0, 0, 'CHIGOZIRIM', 'NWAGBARA', '', 'Music Producer', 'Dunhill', 'chigozirimdennis@gmail.com', '08183808324', '$2y$10$pjQpXZ/Ww7bgGUMUYtKU/e2Q9qGRP7EOOs61onkhBmLQv.z1BHcbG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-06-09 18:03:47', '2019-06-09 18:03:47', 0),
(759, 0, 0, 0, 'Lukedew', 'LukedewOS', '', 'Music Producer', 'Cedar Falls', NULL, '81981834464', '$2y$10$NDVaUQOUCNf/4qppa699ye3DQv3VaJXzXwTe0A9ojnKE3uLNOolvm', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'United States Minor Outlying Islands', 2, NULL, '2019-06-09 22:28:45', '2019-06-09 22:28:45', 0),
(760, 0, 0, 0, 'jamari', 'Kelechi', '', 'Music Producer', 'Jamaribeats', 'kdotcjamari@gmail.com', '07050402293', '$2y$10$lk4tfgkXnL6PoO4IIstCUOsnYea1c6AwxELNR9Eh.wz5j2jG3OHvi', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-06-11 02:25:43', '2019-06-11 02:25:43', 0),
(761, 0, 0, 0, 'FlorEpit', 'FlorEpitUD', '', 'Music Producer', 'Autoplex', NULL, '88663849773', '$2y$10$sBhylu4pOtyAvsCBA2h6TuaTY5WSEtZngh8F3hvsO4GcsxODLzwLi', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Germany', 2, NULL, '2019-06-12 15:19:42', '2019-06-12 15:19:42', 0),
(762, 0, 0, 0, 'Ibrahim', 'Adekunle', '', 'Music Producer', 'Blizzboy', NULL, '08128831247', '$2y$10$jWnoSnx5Au7eJo5fZklg6O28lHrPHZ8gp3t57TCxpB0maeA2OLb3m', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-06-15 19:55:25', '2019-06-15 19:55:25', 0),
(763, 0, 0, 0, 'Ronnie ', 'Lewis ', '', 'Artiste', 'Panic8577', 'unknownsuspectrecords@gmail.com', '5126298459', '$2y$10$jTRFp73uvy/h9ZV.ifqi3.5GawysutLu.fRHHJEjSlzZL5.WVnql2', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-06-15 22:26:10', '2019-06-15 22:26:10', 0),
(764, 0, 0, 0, 'chukwuebuka', 'samson', '', 'Music Producer', 'hop', 'johnyroyce13@gmail.com', '08025684861', '$2y$10$apBXgHspGEyKRjo65SRlEut9E1ZtLJERm.GPlvd1ryl0WMqIBR2eK', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-06-16 22:51:30', '2019-06-16 22:51:30', 0),
(765, 0, 0, 0, 'Burton', 'Neilson', '', 'Guest', 'burtonneilson', NULL, '05721 33 55 91', '$2y$10$jH1gsASibalYXlJbeLL4tOuyVuXlshx1oiV7kDPkmS5N76yE2jYpe', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Germany', 2, NULL, '2019-06-17 20:25:01', '2019-06-17 20:25:01', 0),
(766, 0, 0, 0, 'abiola', 'Eweje', '', 'Artiste', 'sammy', 'samewe0@gmail.com', '0892017188', '$2y$10$J05EHrMiKaFwl3mp/e7mte3hfoXEcewrWQQRxhkGytZ85fC0l5yGO', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Ireland', 2, NULL, '2019-06-18 00:21:15', '2019-06-18 00:21:15', 0),
(767, 0, 0, 0, 'Harrison Eghosa', 'Igharo', '', 'Guest', 'ÍOSA', 'eghosaharrison@gmail.com', '0899855746', '$2y$10$orfOc82pnT6N6oHk6ljjPOqLVZ4yuS3F8i76L2qzN5skUeet6YKUi', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Ireland', 2, NULL, '2019-06-25 14:40:39', '2019-06-25 14:40:39', 0),
(768, 0, 0, 0, 'Jesus', 'Yang', '', 'Guest', 'jesus59i133', NULL, '06-83969915', '$2y$10$biswDOAe9J/VYRY70XAl2uv7qy1Y.AKN4nVcLgNonKYrx5YXqtnhi', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Netherlands', 2, NULL, '2019-06-28 20:44:45', '2019-06-28 20:44:45', 0),
(769, 0, 0, 0, 'iAquaLinknmb', 'zzusalmecmcyctlGP', '', 'Video Director', 'Cedar', NULL, '89699526686', '$2y$10$Jk7qrFK55LuycH61QqtyLOMjOBl9i/CmxdfW3aiZB/kEQHbmJRxLK', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Portugal', 2, NULL, '2019-07-03 20:31:57', '2019-07-03 20:31:57', 0),
(770, 0, 0, 0, 'sharleene', 'moyo', '', 'Songwriter', 'Amirah', NULL, '713331045', '$2y$10$.kTwHLDGjMBVoJdmn2H.vOSU0a1cdXNQIjo/rDDb93GD/y0a1d7DW', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Zimbabwe', 2, NULL, '2019-07-04 01:52:23', '2019-07-04 01:52:23', 0),
(771, 0, 0, 0, 'sharleene', 'moyo', '', 'Songwriter', 'Amirah144', NULL, '713331045', '$2y$10$UOwVvd2e2qG4XDuJ.5Uzd.x/P452nERYZRyoEP6fjdfjFIxIjoqPu', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Zimbabwe', 2, NULL, '2019-07-04 01:53:17', '2019-07-04 01:53:17', 0),
(772, 0, 0, 0, 'sharleene', 'moyo', '', 'Songwriter', 'Amasis', NULL, '713331045', '$2y$10$kuNnvIN5w.xDCfMvrr9Cie.yKl9qUj96hVIQDOuD7vm4SjVxLkEDu', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Zimbabwe', 2, NULL, '2019-07-04 01:53:39', '2019-07-04 01:53:39', 0),
(773, 0, 0, 0, 'Kobina', 'Amoah', '', 'Music Producer', 'likwid Ice', 'kobina.amoah1@gmail.com', '0249288553', '$2y$10$FLjEfAKYTyD7Zba1C9d.4OzJY5oJ5ZXFLCUO.wc0FWFOkkFx3dauq', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Ghana', 2, NULL, '2019-07-04 18:01:26', '2019-07-04 18:01:26', 0),
(774, 0, 0, 0, 'daniel', 'kings', '', 'Music Producer', 'danielkings', 'akoladedaniel@gmail.com', '08087376989', '$2y$10$WUI3sfMfGqVwwtKOBHDzcOGQara9R/Ikp1yg5A7hPoJ/VZPtwanCS', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-07-08 11:18:06', '2019-07-08 11:18:06', 0),
(775, 0, 0, 0, 'Etsuko', 'Samons', '', 'Guest', 'etsukosamons724', NULL, '01.48.27.65.59', '$2y$10$bYwtNIL8.fy5fwrUxeTQUO.gRa0QAoPqHrvewpW4QOXHaNwrDPHzC', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'France', 2, NULL, '2019-07-10 05:31:56', '2019-07-10 05:31:56', 0),
(776, 0, 0, 0, 'Kathie', 'Hulett', '', 'Guest', 'kathiep784', 'KathieHulett67@trip.ruimz.com', '250-425-8233', '$2y$10$KR.iLdvlWOcJI65.9fB70.ovFCJLIT39XhiFM0sU3zbFJcOquZE9W', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Canada', 2, NULL, '2019-07-10 21:56:42', '2019-07-10 21:56:42', 0);
INSERT INTO `users` (`id`, `power_users`, `is_verified`, `top_producer`, `firstname`, `lastname`, `fullname`, `accounttype`, `aka`, `email`, `phone`, `password`, `role`, `photo`, `photo_dir`, `photo_size`, `bio`, `facebook`, `twitter`, `instagram`, `youtube`, `address`, `state`, `zip`, `country`, `popular`, `membership`, `created`, `modified`, `expired`) VALUES
(777, 0, 0, 0, 'Beaterlxm', 'xwusaymedtthcjaGP', '', 'Artiste', 'Grove Creek', NULL, '84626444759', '$2y$10$M5ZmWRDgHBDb2n5yZdNaq.USQCHzDWRL7CDn4wXt81iM8RZfkXXAK', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Liechtenstein', 2, NULL, '2019-07-12 02:58:42', '2019-07-12 02:58:42', 0),
(778, 0, 0, 0, 'Katrina', 'Makutz', '', 'Guest', 'katrinamakutz6', 'KatrinaMakutz@day.suspent.com', '31-39-67-43', '$2y$10$gNzypdhy7Ws5e98AzKGyi.YipqYkwgrtmC4Z/tWnmpeD/iik8EmLa', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Denmark', 2, NULL, '2019-07-13 03:53:28', '2019-07-13 03:53:28', 0),
(779, 0, 0, 0, 'Manyor ', 'Favour ', '', 'Guest', 'Ayahnash ', NULL, '+234 816 399 4', '$2y$10$E/GjWYKjxsxrpvw4YyaJpOmJTq1RkBqz0kTxaP4eMbwzS2SoBKOt.', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-07-15 20:26:15', '2019-07-15 20:26:15', 0),
(780, 0, 0, 0, 'Randolph', 'Disher', '', 'Guest', 'gwurandolph', NULL, '72 518 64 15', '$2y$10$dVudme2d3diT/qopsSVbv.m4h9KLh2.4WeRJq1LpR7EKh7u9tEEjq', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Poland', 2, NULL, '2019-07-17 07:13:56', '2019-07-17 07:13:56', 0),
(781, 0, 0, 0, 'Caitlin', 'Grubbs', '', 'Guest', 'caitlingrubbs', NULL, '(02) 4019 7598', '$2y$10$6vzQdtHNkhX2k98NLsQqb.eAO2hvTzfH9i/vENFQkgGsbwDlKd/1K', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Australia', 2, NULL, '2019-07-19 20:30:22', '2019-07-19 20:30:22', 0),
(782, 0, 0, 0, 'Jeremiah', 'Biggs', '', 'Artiste', 'Tysee', 'jenrids123@gmail.com', '+447788899847', '$2y$10$BuwYfOfHQKnd9d5aWIlQN.vvEWdQcH7TobzTiTA4P99NTsiEWwq.u', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'United Kingdom', 2, NULL, '2019-07-19 22:39:31', '2019-07-19 22:39:31', 0),
(783, 0, 0, 0, 'Shelly', 'Sanborn', '', 'Guest', 'shellysanborn', 'karon@e.linklist.club', '(07) 5375 3740', '$2y$10$e0z9pANnjllBNP4TKrSpj.LpkUgjqtc6.IrOQSsDcmMxA/.390pu.', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Australia', 2, NULL, '2019-07-20 02:30:03', '2019-07-20 02:30:03', 0),
(784, 0, 0, 0, 'Aliza', 'Eads', '', 'Guest', 'alizaeads448277', NULL, '0378 0878446', '$2y$10$UchsVtiqxOH8e2.canpuZu7ur3JwKL1gZphgFzDQvJ8ubRSfdya4u', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Italy', 2, NULL, '2019-07-22 19:35:01', '2019-07-22 19:35:01', 0),
(785, 0, 0, 0, 'Gbenga', 'Johnson', '', 'Music Producer', 'Gboshbeats', 'feelstix@gmail.com', '08024792880', '$2y$10$Qj7lQPQSz4UJFkMVFLi.S.MYX.8h4UGap.jJV3G./fX/qAQqaXO0O', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-07-23 23:44:34', '2019-07-23 23:44:34', 0),
(786, 0, 0, 0, 'Olumide', 'Mustapha', '', 'Guest', 'Lumos', NULL, '+2348104215500', '$2y$10$6ljATGmNqj7zs50a1ebjSOmorke7SiG.X4QwkxozGacb1Jr12zumy', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-07-24 13:02:37', '2019-07-24 13:02:37', 0),
(787, 0, 0, 0, 'Weldon', 'Titus', '', 'Guest', 'weldontitus', 'WeldonTitus@edu.toddard.com', '078 1531 0076', '$2y$10$6fif4yx.JfvGfo0QDNpGheifHGUZkLdn.yGbLuRSuzasptoyUpNhC', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Samoa', 2, NULL, '2019-07-24 20:19:25', '2019-07-24 20:19:25', 0),
(788, 0, 0, 0, 'Pete', 'Kingsley', '', 'Guest', 'pete881437707196', NULL, '0711 26 25 33', '$2y$10$8MJO8gZwFImWWgeoqhJwyuVPjWDpJ/cSjL7WtN.52fW/zID8RPNf2', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Germany', 2, NULL, '2019-07-26 04:57:10', '2019-07-26 04:57:10', 0),
(789, 0, 0, 0, 'Noble', 'Ferres', '', 'Guest', 'nobleferres2176', NULL, '444 83 529', '$2y$10$9ia0ene53GW7LCmq58XjYOMHhiZQAtGfOAbNQ5GWMpv2JekVBtDlK', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Norway', 2, NULL, '2019-07-26 05:45:57', '2019-07-26 05:45:57', 0),
(790, 0, 0, 0, 'Kellie', 'Mullaly', '', 'Guest', 'kelliemullaly72', 'johnpetrion6@gmail.com', '530-917-3593', '$2y$10$AogqxbvskStpMdgC/Z6.p.r0woKLWIRp0P7/ctysFOKJt6/CG8iRu', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'United States', 2, NULL, '2019-07-26 06:45:36', '2019-07-26 06:45:36', 0),
(791, 0, 0, 0, 'Adenuga', 'Adedayo', '', 'Guest', 'meinama$', NULL, '2348079564466', '$2y$10$i4QMitzbSsp/v02qbthpP.xUsWkJab4cxXgn5jDrcaaQxMDZLvVD2', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-07-26 11:07:46', '2019-07-26 11:07:46', 0),
(792, 0, 0, 0, 'Dylan', 'FitzGibbon', '', 'Guest', 'dylanfitzgibbon', NULL, '(02) 6733 1530', '$2y$10$bhjpERKyvbzQPW5H/5oYGu0o/lxO5l71S6z.VODptY.o/LlcI/8Ga', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Australia', 2, NULL, '2019-07-27 20:15:34', '2019-07-27 20:15:34', 0),
(793, 0, 0, 0, 'Joseph', 'Obaletin', '', 'Music Producer', 'OBJ', 'obaletinjoe@yahoo.com', '07032590896', '$2y$10$MSWvDqgoQeovUNoaaIvA4.cvajwkiCom59J5ZwxQnn1zdutQoVfxG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-07-28 00:30:41', '2019-07-28 00:30:41', 0),
(794, 0, 0, 0, 'Ashlee', 'Northrup', '', 'Guest', 'ashleenorthrup0', 'karimovaremina@bk.ru', '078 5562 4115', '$2y$10$hW2wlz1LQH69xRB2emMxre6.l7VZ9dKsTnjZr9ObTn8RzYY0VdwQW', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'United Kingdom', 2, NULL, '2019-07-28 17:17:49', '2019-07-28 17:17:49', 0),
(795, 0, 0, 0, 'Jocelyn', 'Brown', '', 'Guest', 'Joc', 'brownjocelyn34@gmail.com', '8323824450', '$2y$10$CQGCBgAIKhe7QN0HjnhC0uer2ckldEJdYDG6iVzPwoRhiZiR3p5Uq', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'United States', 2, NULL, '2019-07-29 02:42:09', '2019-07-29 02:42:09', 0),
(796, 0, 0, 0, 'Lottie', 'Burnes', '', 'Guest', 'lottieburnes8', NULL, '070 5354 2794', '$2y$10$omGSQGnuBjQa.Y4DvAsyR.y1/HRH9GUc3EovQNe6sidUwufOWWNEK', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Luxembourg', 2, NULL, '2019-07-29 06:24:01', '2019-07-29 06:24:01', 0),
(797, 0, 0, 0, 'Morgan', 'Isles', '', 'Guest', 'morganisles', 'hermia@i.shredded.website', '0353 8080589', '$2y$10$.PZprgYV2WutkywnexhTmeSHTED1BA7Yl0Bzs1ryiYV4cJ4YgVyhm', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Italy', 2, NULL, '2019-07-29 08:50:46', '2019-07-29 08:50:46', 0),
(798, 0, 0, 0, 'Ezequiel', 'Whatmore', '', 'Guest', 'ezequielwhatmore', 'ettie@linklist.club', '0372 3120817', '$2y$10$BxiQrDuYD8kRo2y8bg8Yj.IH60gNU4Kiu/3rwLaPBd2YK.0OWYjI2', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Italy', 2, NULL, '2019-07-30 07:37:24', '2019-07-30 07:37:24', 0),
(799, 0, 0, 0, 'Marjorie', 'Graves', '', 'Guest', 'marjoriegraves', NULL, '07422 41 87 06', '$2y$10$wRZbawa3yoM9ReqEkM8Ug..sEvFDLg9VWuu5qBZy1NCzTRU6XW5iG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Germany', 2, NULL, '2019-07-30 19:09:52', '2019-07-30 19:09:52', 0),
(800, 0, 0, 0, 'Kelsquida', 'KelsquidaBI', '', 'Artiste', 'WSID.com.au', NULL, '84783615888', '$2y$10$M5LwqG0QEIocAKxQE5jAt.M.SHKRDV42iFKatTSJHJ9Ta3yMf3vSK', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Portugal', 2, NULL, '2019-07-31 01:50:21', '2019-07-31 01:50:21', 0),
(801, 0, 0, 0, 'Timothy', 'Daulton', '', 'Guest', 'timothydaulton', NULL, '0491-2302810', '$2y$10$1ib0YsBo56s.//QjZNL76eUnDKzT89OpzAXyhkhHSmImhvYnJ1kHK', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Sweden', 2, NULL, '2019-07-31 07:09:57', '2019-07-31 07:09:57', 0),
(802, 0, 0, 0, 'Gbenga', 'Afolayan', '', 'Artiste', 'Folly-G', NULL, '+2348033894678', '$2y$10$XgtUlWLxX8aNZdTZ77rjXutQHyc1PqhP4sxN6QJTwNa0KAZBr.are', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-08-01 09:07:39', '2019-08-01 09:07:39', 0),
(803, 0, 0, 0, 'Adebayo', 'Ayodeji', '', 'Music Producer', 'Manimal', 'adebayomatthew29@gmail.com', '09034121764', '$2y$10$3H9SZfmr.4GRlzylVN9Q3uDi/8qBCsgVq9It2QVhDOf/mdwMK/rzK', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-08-02 22:47:38', '2019-08-02 22:47:38', 0),
(804, 0, 0, 0, 'Awwal', 'Abdulkadir', '', 'Music Producer', 'Larry_beatz', 'Lareeybeatz@gmail.com', '08120861041', '$2y$10$XQJNoQWbIE9T9Tg0g8x4dOVKLz2EuWTiVSFnK/XbivSDk4C7771sO', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-08-03 19:17:46', '2019-08-03 19:17:46', 0),
(805, 0, 0, 0, 'slovaHum', 'slovaHumDW', '', 'Video Director', 'University Ave.', NULL, '85335884587', '$2y$10$8naP.RNRyYpP2HhsMPlyX.WTz.LgB0Wjn0ihkVRm.J5wJXqS5/aOW', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Slovakia (Slovak Republic)', 2, NULL, '2019-08-05 23:38:33', '2019-08-05 23:38:33', 0),
(806, 0, 0, 0, 'Norman', 'Joslyn', '', 'Guest', 'ybwnorman731954', NULL, '(08) 9066 5437', '$2y$10$QJy9.lPlFPBhmbPLSDyPl.WmdugLWjC9ucuos4.2i1Mgl427chmIC', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Australia', 2, NULL, '2019-08-06 03:42:20', '2019-08-06 03:42:20', 0),
(807, 0, 0, 0, 'Emmanuel', 'Bogner', '', 'Guest', 'emmanuelbogner', '2@akuncerdas.com', '06-13032733', '$2y$10$9Yjq.epZ/qLgIWWG.xz0k.2jSMX8zAqcAx/G.0oHviBw3O3xrwZj.', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Netherlands', 2, NULL, '2019-08-06 09:15:38', '2019-08-06 09:15:38', 0),
(808, 0, 0, 0, 'Declan', 'McCarron', '', 'Guest', 'declanmccarron', 'vanessa@babyteeth.club', '077 0316 4340', '$2y$10$gOXBDV3dHz1S9HrH9ghEmeEFRCCQ9zWjObvHz6YbnJeT9F6hhzpN2', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Kuwait', 2, NULL, '2019-08-08 04:03:08', '2019-08-08 04:03:08', 0),
(809, 0, 0, 0, 'Testerwgd', 'swusafmetnfrdrvGP', '', 'Music Producer', 'Cedarfalls', NULL, '83311438542', '$2y$10$92bR6a9xqEGcv9vaxH0AleBmCTtDPwzHQbwJtx6M4Yhm4DvS73vKK', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Mozambique', 2, NULL, '2019-08-08 06:02:56', '2019-08-08 06:02:56', 0),
(810, 0, 0, 0, 'Desmond ', 'Piniau', '', 'Music Producer', 'Dee', 'artfulbalanceproductions@gmail.com', '7852962', '$2y$10$pg88udaqxivqCZFtj72fO.ijwpxy6jd3/txFJRC47jk2oKyu9uuem', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Solomon Islands', 2, NULL, '2019-08-08 10:05:30', '2019-08-08 10:05:30', 0),
(811, 0, 0, 0, 'Lynell', 'Dyke', '', 'Guest', 'lynelldyke8', 'jacrob3534@freeregistrationkey.com', '0664 747 28 23', '$2y$10$pblKSc7ATuwdQNBZj7jpfOKCwFO4jHYx0LyysJbE81.17S1kqVkbm', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Austria', 2, NULL, '2019-08-09 09:51:13', '2019-08-09 09:51:13', 0),
(812, 0, 0, 0, 'john', 'smith', '', 'Guest', 'john', 'john@yopmail.com', '45645645645', '$2y$10$xWrjVvCAPF8VVfYPDhMF1OMsLG54iY2s7D3d4B3JYEf6hk3IxWVy2', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-08-09 17:01:38', '2019-08-09 17:01:38', 0),
(813, 0, 0, 0, 'Zak', 'Hacker', '', 'Guest', 'zakhacker370436', 'ZakHacker@services.jokeray.com', '(07) 4024 1674', '$2y$10$8gJaZ0ruCWmanyWv56/QdeDmKs833Sdwb0/3m0.spGpXpSDb/CX/a', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Australia', 2, NULL, '2019-08-09 22:58:16', '2019-08-09 22:58:16', 0),
(814, 0, 0, 0, 'Rosella', 'Irons', '', 'Guest', 'rosellairons', NULL, '513-443-0595', '$2y$10$5x4HCKQb6/p/iMe3QpdQA.b5BZKbJSoo7gvzjhTYN2hpC0QnmVuPm', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'United States', 2, NULL, '2019-08-09 23:51:05', '2019-08-09 23:51:05', 0),
(815, 0, 0, 0, 'Marlys', 'Theus', '', 'Guest', 'marlys2334', 'MarlysTheus@services.jokeray.com', '0485 89 68 42', '$2y$10$rGDT.8yl5gSG4mMl7k/ScentAjz6tWgGwUiuXx4eYd20HHUDALLBC', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Belgium', 2, NULL, '2019-08-10 01:08:12', '2019-08-10 01:08:12', 0),
(816, 0, 0, 0, 'Angus', 'Dunham', '', 'Guest', 'angusdunham7562', NULL, '01.64.48.60.56', '$2y$10$eRQGThWxfLEHosu5wacCPuds7.v4EJOzM/xXYG8P1r4VzVX0dSftG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'France', 2, NULL, '2019-08-10 01:35:31', '2019-08-10 01:35:31', 0),
(817, 0, 0, 0, 'Marti', 'Mathes', '', 'Guest', 'martimathes', NULL, '(19) 7161-3672', '$2y$10$4209.QbyRzMiiui35Qz3vOjqcbOaCuaYWyCZb5I8ptN0J/8Zqx4be', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Brazil', 2, NULL, '2019-08-10 02:57:34', '2019-08-10 02:57:34', 0),
(818, 0, 0, 0, 'Florrie', 'Sanderson', '', 'Guest', 'florriesanderson', NULL, '041 526 49 98', '$2y$10$tgkfD.BCll7DYS85ovEg9e2CKOkGwRXTmyOromvQSRiLeJVe2OCzu', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Switzerland', 2, NULL, '2019-08-10 03:18:06', '2019-08-10 03:18:06', 0),
(819, 0, 0, 0, 'Shanon', 'Campbell', '', 'Guest', 'shanon3093', NULL, '062 846 59 45', '$2y$10$XUaLnyaLbB2CM3S1Jo1m7O/AFuPaMHtN3JoYALR6hsxm/geE.Z5qi', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Switzerland', 2, NULL, '2019-08-10 04:19:40', '2019-08-10 04:19:40', 0),
(820, 0, 0, 0, 'Antonia', 'Decicco', '', 'Guest', 'antoniadecicco', NULL, '(02) 4233 2185', '$2y$10$WIpgb7xYawiBcrESdsgXS.fNeRutKrsDiFBk.l1kKexEt91P2OKmy', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Australia', 2, NULL, '2019-08-10 04:35:47', '2019-08-10 04:35:47', 0),
(821, 0, 0, 0, 'Arielle', 'Underhill', '', 'Guest', 'arielle7943', 'ArielleUnderhill@services.jokeray.com', '69 735 29 87', '$2y$10$hq0HCWwWQWTManZMm4Kl9uhEVl8AOzOI95SmrZnSIU2I1UAjOgT1W', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Poland', 2, NULL, '2019-08-10 05:28:43', '2019-08-10 05:28:43', 0),
(822, 0, 0, 0, 'Natalie', 'Tritt', '', 'Guest', 'natalietritt', 'NatalieTritt51@services.jokeray.com', '0474 26 18 87', '$2y$10$18ZFk2n6G1NavdzV.Ye6uOhTr2zoy4DBojTWu6RXDtXRiZRv.m5me', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Belgium', 2, NULL, '2019-08-10 07:51:23', '2019-08-10 07:51:23', 0),
(823, 0, 0, 0, 'Marion', 'Newdegate', '', 'Guest', 'marionnewdegate', NULL, '04.01.34.82.41', '$2y$10$m9Hyh.9AXqAaO6uCNkZVF.Wgy4kpz7wBAnDpnAI0G7rf7tfUJs2RC', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'France', 2, NULL, '2019-08-10 09:04:17', '2019-08-10 09:04:17', 0),
(824, 0, 0, 0, 'Huybbie', 'Beats', '', 'Guest', 'Huybbie Beats', NULL, '0782125306', '$2y$10$3U8Jfau7LzXZYf92QNrctOfNAz5DEoULXUJICp.tllAM7MNmNMo.G', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-08-10 18:01:37', '2019-08-10 18:01:37', 0),
(825, 0, 0, 0, 'Munezero ', 'Hubert', '', 'Guest', 'Huybbie Beatz', NULL, '+250782125306', '$2y$10$DfL/fMvdTQ2fpdT.1wK1r.jVsPaZajIp3jJAPF3CP0VNqscpk3tVO', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-08-10 18:09:09', '2019-08-10 18:09:09', 0),
(826, 0, 0, 0, 'Sanora', 'Hatter', '', 'Guest', 'sanorahatter0', 'Sanora_Hatter@caldero.freephotoretouch.com', '026 748 63 93', '$2y$10$n5XCZC.BQvR4EpRLFIgLl.VJLJzrZ0IldAw6y240BiuU4EQplZTjO', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Switzerland', 2, NULL, '2019-08-11 08:24:45', '2019-08-11 08:24:45', 0),
(827, 0, 0, 0, 'Harris', 'Leung', '', 'Guest', 'harris8297', NULL, '079 1617 0411', '$2y$10$P7muyeZcK4DvRby2W9ssmeJo881bm0eD4ylDdNE3FkG7aSKs81sBK', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Guadeloupe', 2, NULL, '2019-08-11 09:48:17', '2019-08-11 09:48:17', 0),
(828, 0, 0, 0, 'Sung', 'Emert', '', 'Guest', 'sungemert8981440', NULL, '0681 613 28 22', '$2y$10$vvhKd8FZCZmCDFu1lFLPie44//BopG.Aflfbd2OJnGZKkg5q0rB3C', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Austria', 2, NULL, '2019-08-11 12:33:07', '2019-08-11 12:33:07', 0),
(829, 0, 0, 0, 'Jorg', 'Rivers', '', 'Guest', 'jorgrivers', NULL, '0364 5691964', '$2y$10$5zwDVf364ukbjz4.DcHJfuvThgmJ94enAYLc.vzlMCoDGnvm89GDm', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Italy', 2, NULL, '2019-08-11 18:41:17', '2019-08-11 18:41:17', 0),
(830, 0, 0, 0, 'Lorrine', 'Stapley', '', 'Guest', 'lorrinestapley', NULL, '0338 5589715', '$2y$10$m0tWlPMIdp8TeQSnJK4Bg.o9/U0q5Sa/Fw82mPv5ULVjbeNr7Clhu', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Italy', 2, NULL, '2019-08-11 20:35:13', '2019-08-11 20:35:13', 0),
(831, 0, 0, 0, 'Christin', 'Blaze', '', 'Guest', 'christinh53', NULL, '0375 5755227', '$2y$10$tSpE1oSIkGiA3023/hefTuZnP7YpPh02usPY9UpTFUyzPyhcA1ri2', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Italy', 2, NULL, '2019-08-12 03:04:01', '2019-08-12 03:04:01', 0),
(832, 0, 0, 0, 'oyzljj', 'dqqvwvMX', '', 'Music Producer', 'RFR', NULL, '83432455694', '$2y$10$6GsT3dHl80meKByDDMcA2Oa4CUnItKe0ST2qUdvKheEpsQ.5SkZ1y', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Korea, Democratic People\'s Republic of', 2, NULL, '2019-08-12 04:10:45', '2019-08-12 04:10:45', 0),
(833, 0, 0, 0, 'Concepcion', 'Matthews', '', 'Guest', 'concepcionkpa', NULL, '(51) 9155-3822', '$2y$10$/j.FioRBjwgPETDgxCDPh.e.IAapBEhQcZKBoEPFyxTERzwGt7fIC', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Brazil', 2, NULL, '2019-08-12 04:36:37', '2019-08-12 04:36:37', 0),
(834, 0, 0, 0, 'David', 'Choombe', '', 'Guest', 'Ty Kwacha', 'davidjrchoombe2@gmail.com', '0971866072', '$2y$10$npBMI7MTl0wqRzQ0yAewZuV6Cpmo7KB5/S0385nK3C3WtChVXs8F.', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Zambia', 2, NULL, '2019-08-12 22:55:08', '2019-08-12 22:55:08', 0),
(835, 0, 0, 0, 'Clement', 'Weston', '', 'Guest', 'clementweston61', NULL, 'FI', '$2y$10$nF1//JhNsP/vqq/kUZyeX.2AETGWNHNXkRaMQuR3DNz7vQm0CqFfe', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Austria', 2, NULL, '2019-08-14 06:56:48', '2019-08-14 06:56:48', 0),
(836, 0, 0, 0, 'Glinda', 'Gadson', '', 'Guest', 'glindagadson952', 'blondie@bestdrones.store', '(07) 4577 1351', '$2y$10$TILT7rH4ZLHjbvjUfilsHOB/wh788c.EEL7gF5RfDksGcEcQfVVyG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Australia', 2, NULL, '2019-08-14 16:17:37', '2019-08-14 16:17:37', 0),
(837, 0, 0, 0, 'Bert', 'Kinross', '', 'Guest', 'bertm1391151079', 'nobitamoon@yahoo.com', '0461 32 47 84', '$2y$10$jEdJBRxeqSgQlecCZkiqzOW5Ho1kTyNCOpRpEvxrSEc63k9FGUARa', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Germany', 2, NULL, '2019-08-14 23:54:58', '2019-08-14 23:54:58', 0),
(838, 0, 0, 0, 'Bernie', 'Gartner', '', 'Guest', 'berniegartner', 'Bernie-Gartner@saathoff19.softtoiletpaper.com', '0373 6374564', '$2y$10$JnDEqvbf9zTrujrlOiSgJuSJyvHW.NE3vaQ6V44WHhgubl1UkJD8S', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Italy', 2, NULL, '2019-08-15 00:11:03', '2019-08-15 00:11:03', 0),
(839, 0, 0, 0, 'Raymond', 'Crabtree', '', 'Guest', 'raymondudj', 'ainsley@solarlamps.store', '(07) 4574 5917', '$2y$10$mgecoA4Q/wj.HBPpFM6Ll.T6CjWOgar40EIOp7ZKNWTSZdVWzlS.6', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Australia', 2, NULL, '2019-08-15 05:24:58', '2019-08-15 05:24:58', 0),
(840, 0, 0, 0, 'Lena', 'Whittingham', '', 'Guest', 'lenawhittingham', 'sari@b.bestvps.info', '0344 2474971', '$2y$10$e4WcUchqE46wDeBMtyO8z.sZXrruB.1WeB8xOFoxjMBTB09YNIaWq', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Italy', 2, NULL, '2019-08-15 10:46:36', '2019-08-15 10:46:36', 0),
(841, 0, 0, 0, 'Amazonnngja', 'zwusafmelmhnxfxGP', '', 'Music Producer', 'GLD', NULL, '85673993979', '$2y$10$Xe3woDm5ChYmNuz/7IAhG.HWBGNlf29MI0Irjcr0yv9gNIC0U15NG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Saudi Arabia', 2, NULL, '2019-08-15 20:49:15', '2019-08-15 20:49:15', 0),
(842, 0, 0, 0, 'Bruno', 'Verran', '', 'Guest', 'bruno43w31443363', 'veronike@electricscooter.best', '078 2621 3260', '$2y$10$O6GOXPUZDA8M8H/k2lMKL.5/E3TaM2L.n4g2Nm9Pij3GBVs8hSDim', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Ireland', 2, NULL, '2019-08-15 22:13:08', '2019-08-15 22:13:08', 0),
(843, 0, 0, 0, 'Tammi', 'Harter', '', 'Guest', 'tammiharter', NULL, '03.35.28.49.83', '$2y$10$S0RYOjYFOBTlb8oDmeC1wuXyqDpYamfjfwVqoIknC737ku44BSuDe', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'France', 2, NULL, '2019-08-16 03:59:56', '2019-08-16 03:59:56', 0),
(844, 0, 0, 0, 'Basil', 'Shackell', '', 'Guest', 'basil24118728', 'olly@sportwatch.website', '462 54 310', '$2y$10$pHhCpwZmOL44UAUldUOwcOLVp80a9ZSUgvlPlqnxMYkaT2KtAKv.u', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Norway', 2, NULL, '2019-08-16 06:47:30', '2019-08-16 06:47:30', 0),
(845, 0, 0, 0, 'Skye', 'Meyers', '', 'Guest', 'skyemeyers45', NULL, '070 5159 9429', '$2y$10$f3hdUcKrjyqpmneEeEXbIurO86XZJ49yUJ9e1kFZmvJysbOAkC6Vm', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Comoros', 2, NULL, '2019-08-16 06:49:30', '2019-08-16 06:49:30', 0),
(846, 0, 0, 0, 'Kerobok', 'Can you use a debit card for bovada', '', 'Music Producer', 'Crail', NULL, '86753318478', '$2y$10$lWhzJkHhLEQKdQlOBqIp7esH1zQLb1t2FDSvpypxDBhweCCMs.372', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Mauritania', 2, NULL, '2019-08-17 14:45:29', '2019-08-17 14:45:29', 0),
(847, 0, 0, 0, 'Oyedare', 'Olayinka ', '', 'Music Producer', 'Musstar_Beatz', 'oyedareolayinkamryk@gmail.com', '+234701 471 89', '$2y$10$an6KkymDWx9MxbyrZD6zuOCoQx0n3J.QagGMoe1WePMSzVv9WHSqW', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-08-17 20:32:21', '2019-08-17 20:32:21', 0),
(848, 0, 0, 0, 'Jay', 'Brumbaugh', '', 'Guest', 'jaybrumbaugh783', 'talitha@sportwatch.website', '03.73.13.34.52', '$2y$10$vnK.VXxvkKo9Q5LClY3TguoFQ5cunQccnKY0y/otI5v05rihAr1m6', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'France', 2, NULL, '2019-08-17 23:14:27', '2019-08-17 23:14:27', 0),
(849, 0, 0, 0, 'Amelia', 'Fairthorne', '', 'Guest', 'ameliafairthorne', NULL, '318-397-0948', '$2y$10$sSVuY2NA08tSCmZfjtPG1es59wcHQENnHbxm2cHaJ7u6op9.Io3Se', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'United States', 2, NULL, '2019-08-20 05:13:08', '2019-08-20 05:13:08', 0),
(850, 0, 0, 0, 'Garnet', 'Hopper', '', 'Guest', 'garnetudm705', NULL, '06-15649762', '$2y$10$8V173Pt/y9SNUCSND4f4G.3pWHTkMe5wRmj0w863Qa4iHSg9oi/Im', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Netherlands', 2, NULL, '2019-08-21 12:07:28', '2019-08-21 12:07:28', 0),
(851, 0, 0, 0, 'Samsudeen', 'Abdullazeez', '', 'Guest', 'Dj Clash', 'djclash25@gmail.com', '08036423531', '$2y$10$7cywvZmkwUEQXBgobL4Ai.6w9DEQKMq.D8ozisCPuvr1P/FfIUNUu', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-08-22 14:56:34', '2019-08-22 14:56:34', 0),
(852, 0, 0, 0, 'Zane', 'Cramp', '', 'Guest', 'zanecramp0805', NULL, '078 0893 6623', '$2y$10$.tWTDR6bARar5aPsdfbzteKTKvPh.PSO1Vr6KoBTrmQ8N2xjzrxte', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Maldives', 2, NULL, '2019-08-22 21:46:38', '2019-08-22 21:46:38', 0),
(853, 0, 0, 0, 'Alannah', 'Schultheiss', '', 'Guest', 'alannahschulthei', NULL, '079 7462 1892', '$2y$10$wKrFf0oLQ5GMamWaXh/PFOj4TyR0KOrmB7eXOxlsnCJLn5OCsJuu2', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Azerbaijan', 2, NULL, '2019-08-23 06:46:11', '2019-08-23 06:46:11', 0),
(854, 0, 0, 0, 'Daniel', 'Nwoke', '', 'Music Producer', 'DanoeStudio', 'danielnwoke1117@gmail.com', '+22893248892', '$2y$10$43cD7qydVQbBTpLbpISKueT8f0/ZXVxOQGEs4RxSOzhXxvpV9vGNu', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-08-24 11:49:41', '2019-08-26 02:06:59', 0),
(855, 0, 0, 0, 'Crescent', 'Victor', '', 'Music Producer', 'Hilltop', 'undilutedla08@yahoo.com', '08080118492', '$2y$10$zNEZFtNrjFx.afyxAIfk4O.5aw/CGitq2rYOwKpA45QUKHVfgHp96', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-08-25 21:06:15', '2019-08-25 21:06:15', 0),
(856, 0, 0, 0, 'Ezeofor ', 'Kenechukwu', '', 'Music Producer', 'Kimar', 'kenechukwuezeofor@gmail.com', '+2348143217995', '$2y$10$PJboc0tvKUrHcZC90fx0ROz5W7ALS.zzzx0hpVIAqueV6aVS2cysi', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-08-26 03:26:27', '2019-08-26 03:26:27', 0),
(857, 0, 0, 0, 'Ajala', 'Eniola', '', 'Music Producer', 'Blinkz', 'blinkzbeat@gmail.com', '08146161508', '$2y$10$LmrdjqjT9azNIfaDtdRM2umbXVXaO8INeYdtSEhj1HCWMGupVIQz6', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-08-26 21:24:21', '2019-08-26 21:24:21', 0),
(858, 0, 0, 0, 'Ajala', 'Eniola', '', 'Guest', 'Blinkzbeat ', NULL, '08146161508', '$2y$10$MwBt97XIvXiIyfP/rVbwju9QukhyId5w.9f2cSMwWYWJ9XSTQtYC.', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-08-26 21:27:57', '2019-08-26 21:27:57', 0),
(859, 0, 0, 0, 'Alphonse', 'Large', '', 'Guest', 'alphonse20l', 'tarah@bestvpsfor.xyz', '033-3918459', '$2y$10$SosamHsoZxTndHU0xXoaXeW1YEEEHBnupKSyyiPAfxFiT5QsIQ9Y2', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Sweden', 2, NULL, '2019-08-27 13:59:00', '2019-08-27 13:59:00', 0),
(860, 0, 0, 0, 'Christian', 'Asafoh', '', 'Music Producer', 'Chris', 'casafoh@outlook.com', '+233247265751', '$2y$10$TQhHgO/RrM62sH7MvIzYaeZG.CNvMoozBMXM3h0BuN6rFvsqTNqI.', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Ghana', 2, NULL, '2019-08-27 18:24:56', '2019-08-27 18:24:56', 0),
(861, 0, 0, 0, 'Linda', 'Enticknap', '', 'Guest', 'linda53d86', NULL, '089 11 58 10', '$2y$10$n6xPeZ45BKBt.rYVrGKYlutNQjeaAonBd2QTJYzbTrkcL5sWzmJeq', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Germany', 2, NULL, '2019-08-29 22:32:39', '2019-08-29 22:32:39', 0),
(862, 0, 0, 0, 'Thalia', 'Kirkwood', '', 'Guest', 'thaliakirkwood8', 'sydelle@gsaprojects.club', '52-17-04-39', '$2y$10$yoseo3paXc73.RxSBPEHZu4xunLKBkdjM1B/bPmhMET1NQ4xj7MJG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Denmark', 2, NULL, '2019-08-31 07:09:18', '2019-08-31 07:09:18', 0),
(863, 0, 0, 0, 'Stormy', 'Hannell', '', 'Guest', 'stormyhannell4', 'maryjane@gsasearchengineranker.pw', '0611 76 22 43', '$2y$10$cZBi75zLyOr6OJpVnJkJaegeOrd3p7FoGbWTMD06Tytj2cP6/LCDO', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Germany', 2, NULL, '2019-08-31 10:57:51', '2019-08-31 10:57:51', 0),
(864, 0, 0, 0, 'Gudrun', 'Slaton', '', 'Guest', 'gudrunslaton9', NULL, '774-268-8083', '$2y$10$FnCA/eLW37RvBBqkC7BP3OXL4fiV9XoghhaJIoR2w55jsPXqWXYk2', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'United States', 2, NULL, '2019-09-01 04:42:48', '2019-09-01 04:42:48', 0),
(865, 0, 0, 0, 'Julissa', 'Box', '', 'Guest', 'julissabox1876543', NULL, '06-72155317', '$2y$10$h.Z8XtOahQOUw2YaGQ9TbenjjEAjzxyrDAdCIwKPB7p4pbP57tceS', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Netherlands', 2, NULL, '2019-09-02 13:49:13', '2019-09-02 13:49:13', 0),
(866, 0, 0, 0, 'Finley', 'Desaillly', '', 'Guest', 'lamarkoehler92958072', '79232kluse@chrisgomabouna.eu', '60 712 88 71', '$2y$10$hSB8bOenvBf3RAICsG30/.TVGNxj7K/hwNEkph4MvXtEUsK3fAHUq', 'user', NULL, NULL, NULL, 'Greetings. The author\'s name is Santiago Vos but he doesn\'t like if you wish to use his full status. New York is her birth locale. The thing I adore most flower arranging but Not able to make it my profession really. Auditing is what she does for an income but she plans on changing the. If you want to continue reading check out my website: http://iyc2014.org/055zb', '', '', '26', 'http://iyc2014.org/055zb', 'Ul. Biskupinska 75', 'NA', '60-416', 'Poland', 2, NULL, '2019-09-02 15:08:25', '2019-09-03 02:28:17', 0),
(867, 0, 0, 0, 'Mahmudul', 'Mahmudul', '', 'Guest', 'oop', NULL, '+8801912409071', '$2y$10$Coe1pawKHyQ/AMtnIRQwQem9ITgC2ZQhbuRkQAOeFFBscVOB8y4tu', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-09-02 15:58:40', '2019-09-02 15:58:40', 0),
(868, 0, 0, 0, 'Marilou', 'Chanter', '', 'Guest', 'marilouchanter155925', NULL, '04.31.40.90.99', '$2y$10$gIfIBI5rjyfDSmiaKUUwZebstYotewQBmdZR/ytsnbf5.YrZ.J.va', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'France', 2, NULL, '2019-09-02 16:17:17', '2019-09-02 16:17:17', 0),
(869, 0, 0, 0, 'Minnie', 'Putnam', '', 'Guest', 'minnieputnam0506827', NULL, '090-2845507', '$2y$10$wev9PLXZU7SLRhzZy190WOx8lfoIohk.oT8w4JKIPwo3ciQfx6Lqy', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Sweden', 2, NULL, '2019-09-02 18:10:26', '2019-09-02 18:10:26', 0),
(870, 0, 0, 0, 'Emerson', 'Fairthorne', '', 'Guest', 'emersonfairthorne72', NULL, '0343 9670703', '$2y$10$AYDhNc/xz8r1ZQuzIaMM9OPHJ6HmcGveTAS4BPHCT4zMs2zXoQ66a', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Italy', 2, NULL, '2019-09-02 18:30:25', '2019-09-02 18:30:25', 0),
(871, 0, 0, 0, 'Dami', 'Ademidun', '', 'Music Producer', 'D-toks', 'dtoksmusic@gmail.com', '9176356312', '$2y$10$K/W7WfXFQ74Ou6pJS0Opz.QH3I6BO9jrg/7pgD0qQrTtiV9WRR2CW', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'United States', 2, NULL, '2019-09-02 21:51:08', '2019-09-02 21:51:08', 0),
(872, 0, 0, 0, 'Fredericka', 'Florey', '', 'Guest', 'frederickaflorey6858', NULL, '452 16 151', '$2y$10$redJa9q89HwlI/tLG3sqdu9GyneyArwnskIVuvR2m0fUmWX5gArkW', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Norway', 2, NULL, '2019-09-03 01:02:24', '2019-09-03 01:02:24', 0),
(873, 0, 0, 0, 'Nestor', 'Weeks', '', 'Guest', 'nestor3585876047736', NULL, 'FT', '$2y$10$jj6eb736wf0LINnbZ1Wq0uBRha17r205/Mar1txoyh3BWKoXZlM2C', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Austria', 2, NULL, '2019-09-03 01:40:26', '2019-09-03 01:40:26', 0),
(874, 0, 0, 0, 'Emelia', 'Whitehurst', '', 'Guest', 'emeliao947097365', NULL, '071 577 61 53', '$2y$10$SAAW2cmv61ySWZXKjnGhy.V.6kIYDaR364Njjr4N.vsHetdzwWOkG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Switzerland', 2, NULL, '2019-09-03 10:22:34', '2019-09-03 10:22:34', 0),
(875, 0, 0, 0, 'Tanja', 'Schiffer', '', 'Guest', 'tanjaschiffer607', NULL, 'VN', '$2y$10$qhSu48NIZQjbJ1.Y.aprUum/j2vnuR4gi2.qx8yPhgrTMEhcwCMIG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Austria', 2, NULL, '2019-09-03 12:40:40', '2019-09-03 12:40:40', 0),
(876, 0, 0, 0, 'David', 'Ogene', '', 'Music Producer', 'Tripp', 'ogenedavid55@gmail.com', '08118834461', '$2y$10$MZvLR9Jl8iJYVb2QlGVb2e4zGmGJ6AkZnBJzG6pMZfk66tVyWVBLW', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-09-04 10:18:33', '2019-09-04 10:18:33', 0),
(877, 0, 0, 0, 'Jerrold', 'Angwin', '', 'Guest', 'jerroldangwin14', NULL, '03.12.63.52.72', '$2y$10$sxufanu8unxvoWNL0lZk8Oz42jipKm0WUxeKtuUJ5h2W96rNmuMYa', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'France', 2, NULL, '2019-09-04 15:55:41', '2019-09-04 15:55:41', 0),
(878, 0, 0, 0, 'Jim', 'Smythe', '', 'Guest', 'jim08672623640', NULL, 'LW', '$2y$10$.mZQQ39FFt/WY0P8IDwb5uCOigdKeGycQB/WZKV6PtJwidVZgGMkm', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Austria', 2, NULL, '2019-09-05 00:20:32', '2019-09-05 00:20:32', 0),
(879, 0, 0, 0, 'Ashely', 'Ennis', '', 'Guest', 'ashelyennis465', 'aigneis@linklist.club', '(08) 9321 3405', '$2y$10$lcFLgIH6E2qFf6pUCUAztezwfqLEIWWt5EwvaNbKFtJD6sCc942dq', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Australia', 2, NULL, '2019-09-05 23:43:55', '2019-09-05 23:43:55', 0),
(880, 0, 0, 0, 'Edna', 'Barrios', '', 'Guest', 'ednabarrios237881470', NULL, '06-10389469', '$2y$10$wP6WHSsqLizROpe0A5LKUu4M1TUqd1riHLQrNpGkeNzXf3OrEUzHS', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Netherlands', 2, NULL, '2019-09-06 05:24:49', '2019-09-06 05:24:49', 0),
(881, 0, 0, 0, 'Rosa', 'Rainey', '', 'Guest', 'rosai7977423819744', NULL, '01.34.47.56.64', '$2y$10$wUx1RSsppcAqp8zitPZqzupFXFIuoQbPeqvv2FLW2F.9.rT5.7KfO', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'France', 2, NULL, '2019-09-06 05:58:01', '2019-09-06 05:58:01', 0),
(882, 0, 0, 0, 'Melissa', 'Cansler', '', 'Guest', 'tanyaheinig309842012', '84294haynesworth@centleadetai.eu', '09602 68 08 44', '$2y$10$E5KqgA56MkwhpzPIV/jhVewlxgVWuI8rnxoOlAd9fAWlocROMGtO2', 'user', NULL, NULL, NULL, 'Hello dear visitor. I am Jaime. Meter reading is what she does for money. For years she\'s lived in Montana but her husband wants them to go. He is really fond of horse riding but he\'s thinking on starting a new challenge. He\'s not godd at design but you may choose to check his website: http://iyc2014.org/pean2', '', '', '12', 'http://iyc2014.org/pean2', 'Borstelmannsweg 97', 'BY', '92721', 'Germany', 2, NULL, '2019-09-06 09:47:01', '2019-09-15 00:32:21', 0),
(883, 0, 0, 0, 'Rickie', 'Davisson', '', 'Guest', 'wendiartis384104', '83417bleser@centnetploggbu.eu', '03.41.51.25.76', '$2y$10$5.9yloAHzTlyFInDwGgHD.YMusvB8exyV/8WZcj9GY5FoefsW0iq.', 'user', NULL, NULL, NULL, 'I want to have to introduce myself to you, I am Kristy Magdaleno. Montana is where I\'ve for ages been living. He used regarding unemployed but now he is an interviewer and he\'s doing pretty good financially. The favorite hobby for my kids and me is to unravel puzzles however i can\'t permit it to be my profession really. He\'s been practicing his website for quite some time now. Exactly how here: http://iyc2014.org/cdysk', '', '', '11', 'http://iyc2014.org/cdysk', '50 Rue De La Pompe', 'CENTRE', '59700', 'France', 2, NULL, '2019-09-06 16:38:41', '2019-09-14 23:54:20', 0),
(884, 0, 0, 0, 'Samira', 'Montalvo', '', 'Guest', 'ugwsamira18798275273', NULL, '(08) 9094 9256', '$2y$10$ngAUWvf4WrEB1tbzMa6.7.MkZxSDFSDjGv3jfrAj6QyOR2pUmEfX2', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Australia', 2, NULL, '2019-09-06 18:38:17', '2019-09-06 18:38:17', 0),
(885, 0, 0, 0, 'Pamela', 'Locklear', '', 'Guest', 'pamelalocklear311300', NULL, '492 63 118', '$2y$10$ZqDbp15J6uQdoRCbINMf9.cf6Ee9yUCYIxdBQ8SIisTBk6HBmy9.S', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Norway', 2, NULL, '2019-09-06 22:23:26', '2019-09-06 22:23:26', 0),
(886, 0, 0, 0, 'Gwendolyn', 'Coulombe', '', 'Guest', 'chilodewyckx34840881', '80882halford@centnetploggbu.eu', '0202 53 42 26', '$2y$10$XIcOTaE1x8R/VKZ9UpOvsOf1yuNxONJC.DdBQUgrm4E3OjFoYDO8i', 'user', NULL, NULL, NULL, 'Tawanna may be the name Good to be called with and I totally dig that moniker. Meter reading is my profession for a few minutes and I don\'t think I\'ll change it anytime before you know it. The favorite hobby for her and her kids proceeding to fitness and now she has time try on issues. His family lives in Denver. If you want to view more the look at my website: http://walbrzych365.pl/pl/640_materialy_partnera/418_.html', '', '', '15', 'http://walbrzych365.pl/pl/640_materialy_partnera/4', 'Jenaer Strasse 11', 'NW', '42105', 'Germany', 2, NULL, '2019-09-06 23:42:47', '2019-09-15 00:42:07', 0),
(887, 0, 0, 0, 'Alejandro', 'Hand', '', 'Guest', 'maddisonziemba57', '13632haubner@enlerama.eu', '505-735-7208', '$2y$10$0MP/fX1fgiEruESwno0SPeur0f6qE1uc6knlSWs50yhOaXN9eJrXC', 'user', NULL, NULL, NULL, 'Hi there, I am Mallie Coggin. He is really fond of body building and now he has time to new factors. My wife and I picked to have a home in Delaware. The job I have been occupying one very unhealthy is a bookkeeper as well as something I absolutely enjoy. Check out his website here: https://ciechocinek.biz/pl/696_materialy_partnera/1213_.html', '', '', '26', 'https://ciechocinek.biz/pl/696_materialy_partnera/', '3091 Cooks Mine Road', 'NM', '86515', 'United States', 2, NULL, '2019-09-07 00:34:26', '2019-09-07 07:30:10', 0),
(888, 0, 0, 0, 'Faustino', 'Troiano', '', 'Guest', 'faustinotroiano5929', NULL, '0381 64 47 99', '$2y$10$A5fvVACdJzZDI1o7DNeuPe7rvAAkPJlKscgPBLYfzWrylGjoP8.mm', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Germany', 2, NULL, '2019-09-07 00:51:16', '2019-09-07 00:51:16', 0),
(889, 0, 0, 0, 'Cassie', 'Holly', '', 'Guest', 'laceygrove929314081', '44042bellville@enlerama.eu', '434 67 792', '$2y$10$qhLAImr5g9/lWAU2xNg0R.qJfrYZ4Hsd1M7znMZ7EGle/C5w.M8MO', 'user', NULL, NULL, NULL, 'Patsy is what you can call me and Really feel comfortable when we use the full name. To climb is the hobby she might never stop doing. Meter reading is my normal work now but soon I am on my own, personal. My wife there isn\'t any chose to reside Montana. See what\'s new in my little website here: http://ki24.info/pl/652_materialy_partnera/8293_polska_otwarta_na_pracownikow_zza_granicy.html', '', '', '13', 'http://ki24.info/pl/652_materialy_partnera/8293_po', 'Gramstadleitet 129', 'NA', '4329', 'Norway', 2, NULL, '2019-09-07 02:05:43', '2019-09-15 07:23:44', 0),
(890, 0, 0, 0, 'ITemz ', 'Ezekwem', '', 'Music Producer', 'ITemz da Doktor', 'Itemzdadoktor@gmail.com', '+2348136965438', '$2y$10$KPntI1pc5VnsLIgB8.0NHO3ht/cHftOlwsBP6PBJmwDoI6xqWoJh2', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-09-07 02:52:37', '2019-09-07 02:52:37', 0),
(891, 0, 0, 0, 'Normand', 'Kayser', '', 'Guest', 'birgitpalazzi93', '87331cerecedes@centnetploggbu.eu', '03496 83 92 94', '$2y$10$KyojwuassNdTWaW8.Z/DIucFAc2HsaGO2LLr6ikWCer1nbPCnavwC', 'user', NULL, NULL, NULL, 'I need to introduce myself to you, I am Kristy Magdaleno. He used to get unemployed but these days he is an interviewer and he\'s doing pretty good financially. The favorite hobby for my children and me is to solve puzzles on the other hand can\'t permit it to become my profession really. Montana is where I\'ve always been living. He\'s been working on his website for a little extra time now. Try it for yourself here: http://iyc2014.org/ad9jq', '', '', '25', 'http://iyc2014.org/ad9jq', 'Lietzensee-Ufer 25', 'ST', '6354', 'Germany', 2, NULL, '2019-09-07 03:25:43', '2019-09-15 03:33:34', 0),
(892, 0, 0, 0, 'checkvilCah', 'checkvilCahMV', '', 'Music Producer', 'Bremerton', NULL, '82348944598', '$2y$10$16QvGkNRyXila3Nv9WECcumu4pTSm/jP.ryw.TAVRj2jlLDEeo5.G', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Mongolia', 2, NULL, '2019-09-07 03:57:55', '2019-09-07 03:57:55', 0),
(893, 0, 0, 0, 'Lakeisha', 'Peter', '', 'Guest', 'lakeishapeter7174', NULL, '(67) 8536-7026', '$2y$10$OjuCazojAyHqx/Ma66bK9eJsi3m95Nu80au5RWV5Lo/790KJjFfym', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Brazil', 2, NULL, '2019-09-07 05:35:36', '2019-09-07 05:35:36', 0),
(894, 0, 0, 0, 'Annetta', 'Pease', '', 'Guest', 'annettapease89950117', NULL, '(03) 5320 2073', '$2y$10$ELqFmijoTeR7/ycLaZquu.Qep9/RqcM7Nk3l/wIk//Ugqr3KxufTO', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Australia', 2, NULL, '2019-09-07 17:27:19', '2019-09-07 17:27:19', 0),
(895, 0, 0, 0, 'Brigida', 'Drechsler', '', 'Guest', 'jorgez456282890421', '2224living@enercranyr.eu', '070 5599 7702', '$2y$10$pb04sg1l5hbxLse1S5FAVOBup9Js2AReWj1pd93gJqbF5F8umGE9m', 'user', NULL, NULL, NULL, 'Hello family member. Let me introduce myself. I\'m Jaime Kehoe but Dislike like consider use my full brand. She currently lives in Montana. In her professional life is actually an job interviewer. What Adore doing is to play baseball but I can\'t make it my profession really. See what\'s new modest website here: http://iyc2014.org/xko8x', '', '', '17', 'http://iyc2014.org/xko8x', '50 Town Lane', 'NA', 'Ze2 9hp', 'Bulgaria', 2, NULL, '2019-09-07 17:43:12', '2019-09-07 21:04:30', 0),
(896, 0, 0, 0, 'Zak', 'Ngabidj', '', 'Guest', 'deloresmayer329810529', '79232kluse@crosmereta.eu', '06-40420806', '$2y$10$Ukj6JcK7O94Q5qKDjlenHOR2SUYmM/q6r.4.kapM12hxbQIZStMXq', 'user', NULL, NULL, NULL, 'Greetings. The author\'s name is Santiago Vos but he doesn\'t like are extremely use his full moniker. New York is her birth room. Auditing is what she does for a living but she plans on changing the. The thing I adore most flower arranging but Not able to make it my profession really. If you want to read more check out my website: http://czas.tygodnik.pl/pl/639_materialy_partnera/6812_jak_skutecznie_zmotywowac_sie_do_pracy.html', '', '', '10', 'http://czas.tygodnik.pl/pl/639_materialy_partnera/', 'Zuringvaart 138', 'ZH', '2724 Vx', 'Netherlands', 2, NULL, '2019-09-07 18:41:17', '2019-09-15 07:45:27', 0),
(897, 0, 0, 0, 'Valerie', 'Horan', '', 'Guest', 'valeriehoran7672654', NULL, '410 2865', '$2y$10$g/guQ1i3LUC8CWQPBV0Raunnl1lq1peoFt6kj/OnDTe6LbMXk/6u6', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Iceland', 2, NULL, '2019-09-07 19:01:33', '2019-09-07 19:01:33', 0),
(898, 0, 0, 0, 'Christen', 'Cox', '', 'Guest', 'dennismcalroy282', '76414ruhland@centnetploggbu.eu', '(14) 8621-7084', '$2y$10$hnGN4uzONJhl8fURZ5RIRObyUsd.HlHHvuNt3AdQPSpQHgX.DBhju', 'user', NULL, NULL, NULL, 'Tawanna is the name Appreciate to be called with and I totally dig that details. The favorite hobby on her and her kids is certainly to fitness and now she has time think about on issues. His family lives in Denver colorado. Meter reading already been my profession for some precious time and Certain think I\'ll change it anytime . If you want to seek out more check out my website: http://iyc2014.org/u0mzb', '', '', '11', 'http://iyc2014.org/u0mzb', 'Rua Domingos Hermenegildo 1280', 'SP', '17607-033', 'Brazil', 2, NULL, '2019-09-07 21:26:59', '2019-09-08 11:44:48', 0),
(899, 0, 0, 0, 'Mallory', 'Pichardo', '', 'Guest', 'mallory94754724064087', NULL, '(02) 4079 5652', '$2y$10$GGrnCh01kdN01NFh02XtaukKBkKIJeHVq55UL.b/3ZOCsAp1tMuF.', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Australia', 2, NULL, '2019-09-08 00:59:07', '2019-09-08 00:59:07', 0),
(900, 0, 0, 0, 'Nannie', 'Virgo', '', 'Guest', 'nannie070665551', NULL, '(61) 8010-7777', '$2y$10$mXl5JjXaQr2LXlZHwWDFK.iG6d9R/BKSndBKmSW7VzZ8D0ZcyYBrK', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Brazil', 2, NULL, '2019-09-08 01:24:48', '2019-09-08 01:24:48', 0),
(901, 0, 0, 0, 'Forest', 'Stainforth', '', 'Guest', 'waynekier8534990', '42306whillock@enlerama.eu', '01.44.26.39.23', '$2y$10$YfWxadxG0WzJchZiMpfbnulyiNS2Fot/7UCdylYAwEiRf/pIG43.C', 'user', NULL, NULL, NULL, 'They call the author Patsy and she or he believes seems quite reputable. Auditing has been his normal work for a while. Colorado is her birth place but she could have to move one day or a different one. It\'s not really the only thing but what she likes doing is ballet and now she has time in order to consider on issues. He\'s been working away on his website for whilst now. Keep reading here: http://zyciesiedleckie.pl/pl/636_sponsorowane/18334_jak_napisac_dobre_cv.html', '', '', '26', 'http://zyciesiedleckie.pl/pl/636_sponsorowane/1833', '16 Boulevard De Prague', 'ILE-DE-FRANCE', '93160', 'France', 2, NULL, '2019-09-08 01:33:33', '2019-09-15 08:20:01', 0),
(902, 0, 0, 0, 'Jumbo ', 'Billy', '', 'Music Producer', 'RazziOnThebeat', 'youngwealth4@gmail.com', '08124584656', '$2y$10$C/7amdRAIG999..dhjwAhOTnldS0yL1p4c3SZnNLfx4I80MKVk2Z2', 'user', 'a934f3495d1f0608277b8a4a9bf2bc7a_1567907713.png', 'Users/photo', '249904', 'I\'m Jumbo Seiyefa popularly known as Razzi a good music afrobeat producer and artist, based in Nigeria ???????? from Rivers State,  Bonny LGA. I have been producing for 12years now. #D?flut£ LL Local Level. ', 'Afrokin-razzi ', '#RazziOnTheBeat', 'Paparazzi155 ', '', '', 'Rivers State ', '', 'Nigeria', 2, NULL, '2019-09-08 02:41:56', '2019-09-08 03:04:19', 0),
(903, 0, 0, 0, 'Jumbo ', 'Billy', '', 'Guest', 'Afrokin-RazziBeatz', 'youngwealth4@gmail.com', '08124584656', '$2y$10$7XNNuVc6jEPdp86xK5cmYe9gKkLCAKYUspfUq7fTL7JjPTi8XGUwO', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-09-08 02:42:54', '2019-09-08 02:42:54', 0),
(904, 0, 0, 0, 'Lester', 'Larue', '', 'Guest', 'luigicanter969308', '36242mackesy@crosmereta.eu', '070 1580 5430', '$2y$10$xVZYvpr/29lrQoQlfZta.ulYa3TmI0G2mBVQ2VgeeHpOAZq2GcjU.', 'user', NULL, NULL, NULL, 'Greetings. Allow me to start by telling you the author\'s name - Rico and he totally digs that information. Some time ago he chose to survive in De. Dispatching is what he does for a living and man not put it back anytime just. My friends say it\'s unhealthy for me but what Films doing should fitness and I\'ll be starting something else along as well as. My wife and I conserve a website. You may choose to test it here: http://itvszubin.pl/pl/636_sponsorowane/7641_na_jakich_stanowiskach_dobrze_zarobisz.html', '', '', '18', 'http://itvszubin.pl/pl/636_sponsorowane/7641_na_ja', '23 Seafield Place', 'NA', 'Kw14 5wl', 'United Kingdom', 2, NULL, '2019-09-08 03:31:02', '2019-09-08 07:55:01', 0),
(905, 0, 0, 0, 'Patrick', 'Franke', '', 'Guest', 'patrickfranke091799', NULL, '53 854 82 13', '$2y$10$4rtUn1RoOB3syoggQ2aCzuBefVcpSLwCP/z84nhUQzPwrL5j5E4uO', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Poland', 2, NULL, '2019-09-08 03:47:10', '2019-09-08 03:47:10', 0),
(906, 0, 0, 0, 'Rosalinda', 'Love', '', 'Guest', 'rosalindalove3797215', NULL, '81-60-13-08', '$2y$10$nvas4m6Pplo3Fdn42/YNRebmB.gDpFycullu6xNoaB.98HyLNIZ2a', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Denmark', 2, NULL, '2019-09-08 03:59:07', '2019-09-08 03:59:07', 0),
(907, 0, 0, 0, 'Samara', 'Brookes', '', 'Guest', 'joshua62s18050586', '35517meissner@concetomou.eu', '06-91601466', '$2y$10$FbpjYzb7OO2hIbJMHGZ6LeXl5jI.zkMYzsv8rRCBKTjeMZu.TGxaK', 'user', NULL, NULL, NULL, 'Greetings. Allow me to start by telling you the author\'s name - Rico and he totally digs that nick name. My friends say it\'s harmful to me but what I really doing may well fitness and I\'ll be starting another thing along places. Dispatching is what he does for a full time income and he may not change it anytime almost immediately. Some time ago he chose to stay in Dom. My wife and I maintain a website. You may decide to try it out : here: http://terazlipno.pl/pl/648_materialy_partnera/4469_.html', '', '', '19', 'http://terazlipno.pl/pl/648_materialy_partnera/446', 'Soesterweg 19', 'UT', '3812 Bc', 'Netherlands', 2, NULL, '2019-09-08 04:32:02', '2019-09-08 12:46:56', 0),
(908, 0, 0, 0, 'Antonio', 'Carmack', '', 'Guest', 'antoniocarmack2', NULL, '06-75998907', '$2y$10$JmUkFuZmszqL.I6GFSsdV.6DLAQEWFnCFlzIO6Nm.NlVxwdJt6Oh6', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Netherlands', 2, NULL, '2019-09-08 05:21:31', '2019-09-08 05:21:31', 0),
(909, 0, 0, 0, 'Sherlyn', 'Redmon', '', 'Guest', 'sherlynredmon08', NULL, '604-702-2126', '$2y$10$74JanJ4z0jQT7nF2MlOPVO.6cb1NlDocj9F8QF6cLNUX1zqZChqU2', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Canada', 2, NULL, '2019-09-08 06:14:03', '2019-09-08 06:14:03', 0),
(910, 0, 0, 0, 'Kai', 'Cilley', '', 'Guest', 'leannelash879307', '16229bandasak@crosmereta.eu', '079 5885 3579', '$2y$10$FAO6DCBTDy./1bTGH1.EROAB71NWuSkZTsLQQj64.EIW29jK4dODG', 'user', NULL, NULL, NULL, 'Tawanna Magdaleno is what her husband loves to call her although is actually very not her birth advertsing name. What his as well as family him love is perform baseball but he\'s thinking on starting something progressive. Data processing may be my profession for quite some time. Montana has always been my home and Appreciate every day living in this. He\'s not godd at design a person might to help check his website: http://iyc2014.org/wz4kk', '', '', '26', 'http://iyc2014.org/wz4kk', '62 Peachfield Road', 'NA', 'Gl19 8gf', 'Vietnam', 2, NULL, '2019-09-08 06:28:04', '2019-09-08 11:09:50', 0),
(911, 0, 0, 0, 'Christiane', 'Michelides', '', 'Guest', 'christianemichel', 'staci@gsavps.xyz', '03.24.03.63.50', '$2y$10$EGIQ0OhCiFcAZ6y/HFJ1new5GY3bErvd.qE2EaIad13LEBwbFR5xG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'France', 2, NULL, '2019-09-08 07:40:39', '2019-09-08 07:40:39', 0),
(912, 0, 0, 0, 'Micaela', 'McEvilly', '', 'Guest', 'micaelamcevilly', '62831tonne@centnetploggbu.eu', '024 287 21 14', '$2y$10$MChIPSz7GWjGI6.VfdBWQOdz1jDompIFQAjqKzS3iOztKwtkNKX5m', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Switzerland', 2, NULL, '2019-09-08 08:28:40', '2019-09-08 08:28:40', 0),
(913, 0, 0, 0, 'Ernie', 'De Vis', '', 'Guest', 'fatima67p970608246', '80882halford@centleadetai.eu', '0699 263 18 46', '$2y$10$uRGaF/X1C7BPbNju7/.CBeqHN4t3KkvUZI35.qBLAgtOYcARdXhrO', 'user', NULL, NULL, NULL, 'Hello! Ok, i\'ll start by saying my name - Jaime even so don\'t like when people use my full establish. Montana happens to be my living place with regards to have like in I need here. The job I\'ve been occupying detrimental is a data processing representative. The thing I adore most kit cars but I haven\'t made a penny with one. My wife and I maintain a website. You may decide to keep reading here: http://iyc2014.org/1aoky', '', '', '28', 'http://iyc2014.org/1aoky', 'Waldmuhlgasse 40', 'UPPER AUSTRIA', '5270', 'Austria', 2, NULL, '2019-09-08 10:16:29', '2019-09-08 12:19:19', 0);
INSERT INTO `users` (`id`, `power_users`, `is_verified`, `top_producer`, `firstname`, `lastname`, `fullname`, `accounttype`, `aka`, `email`, `phone`, `password`, `role`, `photo`, `photo_dir`, `photo_size`, `bio`, `facebook`, `twitter`, `instagram`, `youtube`, `address`, `state`, `zip`, `country`, `popular`, `membership`, `created`, `modified`, `expired`) VALUES
(914, 0, 0, 0, 'Nola', 'Tobin', '', 'Guest', 'karen7246967124298', '45479edemann@centnetploggbu.eu', '(02) 6733 0612', '$2y$10$iM8InM7Awel19U8VLykyO.BhxJg5XDc6sbtRB5KDBTouB7iGasU8y', 'user', NULL, NULL, NULL, 'Hello dear visitor. I am Valentin. For years I\'ve been living in Montana and my parents live nearby. In her professional life is actually a human resources officer and he or she will not change it anytime hurriedly. Fishing is really a of stuff he loves most. Check out my website here: http://iyc2014.org/epj12', '', '', '23', 'http://iyc2014.org/epj12', '15 Plug Street', 'NSW', '2360', 'Australia', 2, NULL, '2019-09-08 10:46:35', '2019-09-15 01:59:33', 0),
(915, 0, 0, 0, 'Caridad', 'Tindall', '', 'Guest', 'charlakemper892', '84294haynesworth@centnetploggbu.eu', '035795 35 32', '$2y$10$XrJGtSjdsRurSNtgs10dWuV.pDeK/ej0tcLj9E0POSITnH9jQxsq6', 'user', NULL, NULL, NULL, 'The author is known by common history of Patsy but large number of misspell this task. My house is now co and won\'t ever move. What I love doing is kit cars and now i\'m trying to earn money with it then. Meter reading precisely what she does for an income. Check out targeted at low quality news on this website: http://iyc2014.org/j4rar', '', '', '11', 'http://iyc2014.org/j4rar', 'Amsinckstrasse 49', 'SN', '1934', 'Germany', 2, NULL, '2019-09-08 11:38:51', '2019-09-15 00:55:19', 0),
(916, 0, 0, 0, 'Blake', 'Blewett', '', 'Guest', 'blakeblewett23846', NULL, '01.14.88.77.75', '$2y$10$6PgIJ0Pn6dBnZGe23qD4guoSPlxknxTqt8o1o8TSoMJ4E4X..2jl6', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'France', 2, NULL, '2019-09-08 16:21:24', '2019-09-08 16:21:24', 0),
(917, 0, 0, 0, 'Christy', 'Gillette', '', 'Guest', 'christygillette', 'Christy_Gillette46@vissering35.newpopularwatches.com', '0664 348 80 94', '$2y$10$uvjthFFNTGi2pjC/3gxmS.VGToEeFqhvIauhnDj4.g0lxT7TPBBiG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Austria', 2, NULL, '2019-09-09 07:11:31', '2019-09-09 07:11:31', 0),
(918, 0, 0, 0, 'Irving', 'Luster', '', 'Guest', 'irvingluster6', 'Irving-Luster65@vissering35.newpopularwatches.com', '034206 53 93', '$2y$10$mCB2ThStUWbMcdnP1cqdQO56j5b4ubFQNYPPEwsBuKK/WXQQqzvZ.', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Germany', 2, NULL, '2019-09-11 03:21:22', '2019-09-11 03:21:22', 0),
(919, 0, 0, 0, 'Ignacia', 'Cotton', '', 'Music Producer', 'Vel et eaque autem magna nesciunt voluptate alias', NULL, '+1 (739) 705-4', '$2y$10$lXQ8t7M9KtB8Ln12Lya.6.o2rBOSEbsdoWH.19Hm6SrzCT6i0tZYm', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Tonga', 2, NULL, '2019-09-12 10:14:33', '2019-09-12 10:14:33', 0),
(920, 0, 0, 0, 'Foodstar', 'maddy', '', 'Guest', 'maddy', 'team@abservetech.com', '9222379222', '$2y$10$dzEvdkdb00G7FUnYPtMf4e6ZYGj1mNOq8sKSi4FKJ5dbB7HJYBjhG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-09-12 10:53:19', '2019-09-12 10:53:19', 0),
(921, 0, 0, 0, 'Johnniespazy', 'JohnniespazyNH', '', 'Music Producer', '[url=#file_links[\"X:\\xrummer\\assets\\newMEfresh.txt\",1,N] ]Bestest website[/url]', NULL, '88937616728', '$2y$10$ogL3kDNks5wxC5fTJTvJNerGNE0zAJzd4IRrp3bCMjtKRENuT0ySS', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Colombia', 2, NULL, '2019-09-12 15:03:36', '2019-09-12 15:03:36', 0),
(922, 0, 0, 0, 'Philomena', 'Boettcher', '', 'Guest', 'philomenaboettch', NULL, '303-765-2975', '$2y$10$UP7tq6Y3oRU4b7g47QSGzu40Q5e56lGWL1m7dmLlPLJ0t8PrjCqmm', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'United States', 2, NULL, '2019-09-13 00:28:09', '2019-09-13 00:28:09', 0),
(923, 0, 0, 0, 'Uchenna', 'Joseph', '', 'Music Producer', 'Chillbeatz', NULL, '08131842115', '$2y$10$I6PDshVgUXGXGf0RKsLV1OEojBp9ve2jeFGlYeBwlX2GErUqp4E.m', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-09-15 01:30:04', '2019-09-15 01:30:04', 0),
(924, 0, 0, 0, 'Leola', 'Martins', '', 'Guest', 'leolamartins53813', NULL, '05.82.77.09.62', '$2y$10$PJ9JAQt/3LokjvklSHfZTO9r1RBri5U0FbO.PDuDecGh0FC4JNFCe', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'France', 2, NULL, '2019-09-15 04:28:42', '2019-09-15 04:28:42', 0),
(925, 0, 0, 0, 'Jack', 'Eng', '', 'Guest', 'jackeng42586088032', NULL, '0345 66 08 08', '$2y$10$K7kxZ6Zq/YuPLqekfpXEQ.FXVFwrEKgT0ZMu0aoJ/i235RHk9MK2i', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Germany', 2, NULL, '2019-09-15 05:35:05', '2019-09-15 05:35:05', 0),
(926, 0, 0, 0, 'Tahlia', 'Alfred', '', 'Guest', 'tahliaalfred83982', NULL, '467 6462', '$2y$10$ga2ndlydRSy3/D.ai3aNX.GlqpQvbJrGIKPU3f5u8DDdNiMTuagJG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Iceland', 2, NULL, '2019-09-15 06:14:01', '2019-09-15 06:14:01', 0),
(927, 0, 0, 0, 'Alfie', 'Flowers', '', 'Guest', 'alfieflowers408606', NULL, '(03) 5365 9641', '$2y$10$9.GC5It66tIcA6FkEKtCceYzQ8CG9tXv1WrquvPIjHiN5hGFCqc2a', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Australia', 2, NULL, '2019-09-15 07:49:20', '2019-09-15 07:49:20', 0),
(928, 0, 0, 0, 'Morissonch432sd', 'Hoolygohit43', '', 'Music Producer', '0', NULL, '84267735916', '$2y$10$WhEsRbFVSFil8gy2h1Svjef.e4AHl9jhiwgY9QyQyf00ITbKruStK', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Dominica', 2, NULL, '2019-09-15 10:10:07', '2019-09-15 10:10:07', 0),
(929, 0, 0, 0, 'Essie', 'Shetler', '', 'Guest', 'hcjessie119823102338', NULL, '53 725 47 54', '$2y$10$vm89QfNy//32agxQVd8WxOhhyN6kI59TpNZCfBdqOlg7RejikzOOC', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Poland', 2, NULL, '2019-09-15 10:17:08', '2019-09-15 10:17:08', 0),
(930, 0, 0, 0, 'Hope', 'Inyang', '', 'Guest', 'Hopezx1', NULL, '07069704270', '$2y$10$7iYrbszqOsxaIlYOWbNIJOEyVOvTtaiPcvmC2SXw3Dntsz1lDy8oS', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-09-15 23:45:18', '2019-09-15 23:45:18', 0),
(931, 0, 0, 0, 'Elliott', 'Sutherland', '', 'Guest', 'elliottsutherland827', NULL, '(02) 6776 8698', '$2y$10$EtfO5GCkwvOcJjUN/e/A7uIdmBXsqOS9gqR3nVH684DPu/Utba6D2', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Australia', 2, NULL, '2019-09-16 00:24:10', '2019-09-16 00:24:10', 0),
(932, 0, 0, 0, 'Cynthia', 'Pulliam', '', 'Guest', 'kmscynthia342954963', NULL, '031-2546766', '$2y$10$gaT9ly6rpRh10er3hYendOk7AmZx2ZJQpS3yBHpJ6e6frkQ5kRZme', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Sweden', 2, NULL, '2019-09-16 07:31:42', '2019-09-16 07:31:42', 0),
(933, 0, 0, 0, 'Rachele', 'Coulombe', '', 'Guest', 'rachelecoulombe52', NULL, '925-307-6148', '$2y$10$I3eCxDhZrlxLOABxSQidiOAzjVWtiEZiwNey6RNGZZfCKxWQG.l3S', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'United States', 2, NULL, '2019-09-16 16:21:37', '2019-09-16 16:21:37', 0),
(934, 0, 0, 0, 'Sondra', 'Hixson', '', 'Guest', 'sondrahixson687', 'vandeheyszizs@aol.com', '056 218 23 38', '$2y$10$BRwhBAM2gRgCXfH0PUrUdeIg0XIjv/E2y2NZ13T7gkhBMR6PnXSsu', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Switzerland', 2, NULL, '2019-09-16 17:24:48', '2019-09-16 17:24:48', 0),
(935, 0, 0, 0, 'Minna', 'Wilhoite', '', 'Guest', 'minnawilhoite4', NULL, '29-74-77-56', '$2y$10$7wHkGpr2sterTXS0NRjq1O33MftKz2qmj4PBA5CowzdGoiwdk6lmC', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Denmark', 2, NULL, '2019-09-16 22:48:16', '2019-09-16 22:48:16', 0),
(936, 0, 0, 0, 'Janine', 'McBurney', '', 'Guest', 'janinemcburney6', NULL, '078 5277 2143', '$2y$10$.J2hSbIP4RCyxt8vAMjoBeWyDK.1WhCwllXSm4xM1f6TY/mnny946', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Macau', 2, NULL, '2019-09-17 00:43:31', '2019-09-17 00:43:31', 0),
(937, 0, 0, 0, 'Ima', 'Pauley', '', 'Guest', 'imapauley5', NULL, '519-371-3562', '$2y$10$0txpMj0jaKkXu1JThUevu.KwapJMddODMbedAXx4SUEi10wNlp4sa', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Canada', 2, NULL, '2019-09-17 02:18:20', '2019-09-17 02:18:20', 0),
(938, 0, 0, 0, 'Duane', 'Oster', '', 'Guest', 'duaneoster', 'jeane@wirelesschargers.xyz', '079 4096 1607', '$2y$10$wmofJ2kOSUIEjQClCBv1aOcLnakfubBN8J2tGb.tftO5fhdVE103q', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Svalbard and Jan Mayen Islands', 2, NULL, '2019-09-17 07:16:48', '2019-09-17 07:16:48', 0),
(939, 0, 0, 0, 'Donny', 'Hillier', '', 'Guest', 'donnyhillier5146642', NULL, '0376 4914061', '$2y$10$6o1tSGX96xweloJ7LToD9.1BhWwaBXsoXoQfbd9sR/WCwpaIxSZLS', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Italy', 2, NULL, '2019-09-17 10:21:08', '2019-09-17 10:21:08', 0),
(940, 0, 0, 0, 'Autumn', 'Ritchie', '', 'Guest', 'autumnritchie9153759', NULL, '0664 999 27 41', '$2y$10$btSYOkoOK6HPrd4O9aZzrefXnzXVIuiYAURTsNayXS0kvVrI7RAeG', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Austria', 2, NULL, '2019-09-17 17:41:12', '2019-09-17 17:41:12', 0),
(941, 0, 0, 0, 'Margie', 'Woodd', '', 'Guest', 'margie5623', NULL, '077 3003 3082', '$2y$10$QOqKLUEmM5flN0B8ioqeeeHJdXF5mIidDsRzsdozAb84kPgPUci6W', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Ukraine', 2, NULL, '2019-09-17 18:53:53', '2019-09-17 18:53:53', 0),
(942, 0, 0, 0, 'zubair', 'ali', '', 'Guest', 'zubair', 'zubair@aptechgdn.net', '03350152210', '$2y$10$aDvLtwqJM8w8q5oKLYCOQ.MIEL0Cp728CnUQrnFpFU4KWvNWG1rJO', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Pakistan', 2, NULL, '2019-09-18 06:59:27', '2019-09-18 06:59:27', 0),
(943, 0, 0, 0, 'Marissa', 'Mohammad', '', 'Guest', 'marissamohammad93918', NULL, '0663-4251573', '$2y$10$.1ThG7eVu/AgGdpGq0UEkuytxcCWIbYlBFLjuERyGxcmOdxJGfTk2', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Sweden', 2, NULL, '2019-09-18 12:03:58', '2019-09-18 12:03:58', 0),
(944, 0, 0, 0, 'Gilbert', 'Kabeya', '', 'Music Producer', 'Don G', 'mstrkids@gmail.com', '+918882006718', '$2y$10$bGeuZ9KcUjOzRfAcLA8hBuAg.uDQLXROrLNnxFaM6d31OrDiA1Wmu', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Congo, the Democratic Republic of the', 2, NULL, '2019-09-18 21:46:12', '2019-09-18 21:46:12', 0),
(945, 0, 0, 0, 'HOPE', 'UDOK', '', 'Guest', 'HOPEZX 1', 'HOPEZDJ2019@GMAIL.COM', '07069704270', '$2y$10$qesqLWVDi2VQIZVhCzCmjelesO7T8KlhIES5q/2osrSWNgCaFtYGy', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-09-19 21:52:15', '2019-09-19 21:52:15', 0),
(946, 0, 0, 0, 'Stephania', 'Lilley', '', 'Guest', 'stephanialilley', NULL, '504-577-5034', '$2y$10$xf9Y80VUAxj.rnSoLRjQNemOwXACrfZ2MGrq3HSAIjJXVKludwJ7C', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'United States', 2, NULL, '2019-09-19 22:22:42', '2019-09-19 22:22:42', 0),
(947, 0, 0, 0, 'Emmett', 'Charbonneau', '', 'Guest', 'emmettv19453684432945', NULL, '0650 992 93 00', '$2y$10$CdCVQCFipa4yO6KpkrSOGesg51k2JU8V2IR44Z4kDDbdWaDKMM7FC', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Austria', 2, NULL, '2019-09-20 11:18:14', '2019-09-20 11:18:14', 0),
(948, 0, 0, 0, 'Mr', 'MB', '', 'Music Producer', 'MB', 'it.professional.bi@gmail.com', '46546', '$2y$10$ZGKjMYO2rQKInlLnqyslLOeI3xX/WnnPu4YxZ4UPdeDfckpLDNqMu', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Nigeria', 2, NULL, '2019-09-12 00:00:00', '2019-09-20 15:10:00', 1),
(949, 0, 0, 0, 'Brigette', 'Ridgley', '', 'Guest', 'brigetteridgley', NULL, '0681 684 01 96', '$2y$10$F6aIOkmp36n.zuNCiYgUAOrKIsJVpKdmJgA/xmZ2nvk1LRPCpczrK', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Austria', 2, NULL, '2019-09-20 17:26:25', '2019-09-20 17:26:25', 0),
(950, 0, 0, 0, 'Cora', 'Kelley', '', 'Guest', 'corakelley96885259', NULL, '0676 823 44 86', '$2y$10$xZJZfjul9Mcz0jLSM5ghZOtYtIsvnr.CKe.bUMsBMyYqMjTkobd8G', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Austria', 2, NULL, '2019-09-20 23:54:24', '2019-09-20 23:54:24', 0),
(951, 0, 0, 0, 'Luz', 'Pitts', '', 'Guest', 'luzpitts789', 'tinisha@sportwatch.website', '0688 463 42 34', '$2y$10$L4SgxCETAP3U9kwi6Umy0eIOQWM1PTO1veI7CptfihkFS/QB9PKc.', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Austria', 2, NULL, '2019-09-21 11:22:31', '2019-09-21 11:22:31', 0),
(952, 0, 0, 0, 'Tamika', 'Kavanaugh', '', 'Guest', 'tamikakavanaugh', NULL, '061 536 98 66', '$2y$10$f29WnffzLK8sRBGuajs8p.NLI64ZPg87yZGNOVDooi0j2.5IYMz22', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Switzerland', 2, NULL, '2019-09-21 12:30:02', '2019-09-21 12:30:02', 0),
(953, 0, 0, 0, 'Jacqueline', 'Wicks', '', 'Guest', 'jacquelinewicks5650', NULL, '06-98376194', '$2y$10$EaLlYzayLzzjfzCZqf.8Y..gdNgisxR5HKl7/7n9SNFCZ7Nj2mseO', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Netherlands', 2, NULL, '2019-09-21 12:50:43', '2019-09-21 12:50:43', 0),
(954, 0, 0, 0, 'Charmain', 'Du Cane', '', 'Guest', 'charmainhfp7230130', NULL, '08032 53 74 41', '$2y$10$Bf23IpmfcSDQyfvBVyGhs.kl2CJIMe/ToTWGtfOziqgUPD7ZkC6R.', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Germany', 2, NULL, '2019-09-21 13:54:57', '2019-09-21 13:54:57', 0),
(955, 0, 0, 0, 'Ila', 'Antonio', '', 'Guest', 'ilaantonio21375248', NULL, '06-35491466', '$2y$10$7NjsJjNhEDA7F.rT/ehLcOwh.qtT8gWZVwp8wlv96ulhxE1O4r9F.', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Netherlands', 2, NULL, '2019-09-21 23:28:19', '2019-09-21 23:28:19', 0),
(956, 0, 0, 0, 'Denis', 'Trower', '', 'Guest', 'denistrower346711', NULL, '0484 21 33 97', '$2y$10$wnXVSrgITDWM4ctE7bdZQeOa0F7lrOocJdGHGicG.mNa5bcbpHCni', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Belgium', 2, NULL, '2019-09-22 03:31:37', '2019-09-22 03:31:37', 0),
(957, 0, 0, 0, 'Roseanne', 'Kleiber', '', 'Guest', 'roseannekleiber6729', NULL, '06-28513714', '$2y$10$GcNP13JFrWGHKmYBdsj/N.uA5hOd0U0JwfcQF6MhjA5Aqg0YkHkYK', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Netherlands', 2, NULL, '2019-09-22 06:15:29', '2019-09-22 06:15:29', 0),
(958, 0, 0, 0, 'Alexander', 'Bergstrom', '', 'Guest', 'alexanderbqr', NULL, '03.17.95.97.42', '$2y$10$aGd8JEboGywD9WtR2ZaOf.UbCQXxRWl.ab1KXQWVR38rI0PRkp4Ba', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'France', 2, NULL, '2019-09-22 11:10:00', '2019-09-22 11:10:00', 0),
(959, 0, 0, 0, 'Jessika', 'Oatley', '', 'Guest', 'jessikaoatley', NULL, '06-43217844', '$2y$10$/x4ZbJcuA2DmF6HHqQAMieUhP70KDb2mvXums5SYkCm1lAvcp725a', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 'Netherlands', 2, NULL, '2019-09-24 05:47:24', '2019-09-24 05:47:24', 0);

-- --------------------------------------------------------

--
-- Table structure for table `withdrawals`
--

CREATE TABLE `withdrawals` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'pending',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `withdrawals`
--

INSERT INTO `withdrawals` (`id`, `user_id`, `amount`, `status`, `created`, `modified`) VALUES
(1, 15, '5000', 'approved', '2018-08-08 20:39:24', '2018-08-09 16:11:34'),
(2, 133, '7000', 'approved', '2019-01-25 21:26:10', '2019-01-28 20:28:58'),
(3, 8, '7000', 'approved', '2019-02-12 11:09:28', '2019-02-13 16:42:33'),
(5, 490, '15000', 'pending', '2019-03-21 15:51:52', '2019-03-21 15:51:52'),
(7, 36, '50,000', 'pending', '2019-07-06 21:09:07', '2019-07-06 21:09:07'),
(8, 730, '4000', 'approved', '2019-07-11 00:36:35', '2019-07-16 17:41:15'),
(9, 36, '49,950', 'pending', '2019-07-11 12:06:52', '2019-07-11 12:06:52'),
(10, 2, '5000', 'approved', '2019-09-02 01:31:00', '2019-09-02 01:34:10'),
(11, 2, '4000', 'approved', '2019-09-02 01:31:43', '2019-09-02 01:33:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `artistes`
--
ALTER TABLE `artistes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id` (`user_id`),
  ADD KEY `genre` (`genre`);

--
-- Indexes for table `artistesrequesters`
--
ALTER TABLE `artistesrequesters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id` (`user_id`),
  ADD KEY `artiste_id` (`artiste_id`),
  ADD KEY `orderid` (`orderid`);

--
-- Indexes for table `bankbalances`
--
ALTER TABLE `bankbalances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `beatstopromote`
--
ALTER TABLE `beatstopromote`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `buyer_id` (`buyer_id`),
  ADD KEY `beat_id` (`beat_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `plaintiff_id` (`commentee_id`),
  ADD KEY `id` (`id`),
  ADD KEY `accused_id` (`commenter_id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`),
  ADD KEY `plaintiff_id` (`plaintiff_id`),
  ADD KEY `id` (`id`),
  ADD KEY `accused_id` (`accused_id`);

--
-- Indexes for table `contract`
--
ALTER TABLE `contract`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `directorequests`
--
ALTER TABLE `directorequests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `director_id` (`director_id`),
  ADD KEY `orderid` (`orderid`);

--
-- Indexes for table `directors`
--
ALTER TABLE `directors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `email_templates`
--
ALTER TABLE `email_templates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slug` (`slug`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `home_youtube_video`
--
ALTER TABLE `home_youtube_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `rater` (`liker_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `messager_id` (`messager_id`),
  ADD KEY `orderid` (`orderid`);

--
-- Indexes for table `mixmasterings`
--
ALTER TABLE `mixmasterings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `genre` (`genre`);

--
-- Indexes for table `mmrequesters`
--
ALTER TABLE `mmrequesters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `muffin_tokenize_phinxlog`
--
ALTER TABLE `muffin_tokenize_phinxlog`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `page_banner`
--
ALTER TABLE `page_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `rater` (`rater`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `referrals`
--
ALTER TABLE `referrals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `songwriters`
--
ALTER TABLE `songwriters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `songwriter_user_id_connected_to_users_id` (`user_id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `genre` (`music_genre`),
  ADD KEY `str_sub` (`tnx_reference`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `level` (`level_id`),
  ADD KEY `tnx_reference_2` (`tnx_reference`);

--
-- Indexes for table `subscriptions_bkp`
--
ALTER TABLE `subscriptions_bkp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `level` (`level_id`),
  ADD KEY `tnx_reference` (`tnx_reference`);

--
-- Indexes for table `swriterequests`
--
ALTER TABLE `swriterequests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `songwriter_id` (`songwriter_id`),
  ADD KEY `orderid` (`orderid`);

--
-- Indexes for table `tokenize_tokens`
--
ALTER TABLE `tokenize_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `TOKENIZE_TOKEN` (`token`),
  ADD KEY `TOKENIZE_STATUS` (`status`),
  ADD KEY `TOKENIZE_MODEL` (`foreign_alias`,`foreign_table`,`foreign_key`),
  ADD KEY `fk_token` (`foreign_key`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `withdrawals`
--
ALTER TABLE `withdrawals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `artistes`
--
ALTER TABLE `artistes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `artistesrequesters`
--
ALTER TABLE `artistesrequesters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bankbalances`
--
ALTER TABLE `bankbalances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `beatstopromote`
--
ALTER TABLE `beatstopromote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1450;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contract`
--
ALTER TABLE `contract`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `directorequests`
--
ALTER TABLE `directorequests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `directors`
--
ALTER TABLE `directors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `email_templates`
--
ALTER TABLE `email_templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `mixmasterings`
--
ALTER TABLE `mixmasterings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mmrequesters`
--
ALTER TABLE `mmrequesters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `page_banner`
--
ALTER TABLE `page_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `referrals`
--
ALTER TABLE `referrals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `songwriters`
--
ALTER TABLE `songwriters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=226;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `subscriptions_bkp`
--
ALTER TABLE `subscriptions_bkp`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `swriterequests`
--
ALTER TABLE `swriterequests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tokenize_tokens`
--
ALTER TABLE `tokenize_tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=987;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=960;

--
-- AUTO_INCREMENT for table `withdrawals`
--
ALTER TABLE `withdrawals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accounts`
--
ALTER TABLE `accounts`
  ADD CONSTRAINT `fk_acc` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `artistes`
--
ALTER TABLE `artistes`
  ADD CONSTRAINT `fk_artiste` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_artiste_genre` FOREIGN KEY (`genre`) REFERENCES `genres` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `artistesrequesters`
--
ALTER TABLE `artistesrequesters`
  ADD CONSTRAINT `fk_artisterequester_artisteid` FOREIGN KEY (`artiste_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_artisterequester_userid` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_orderid` FOREIGN KEY (`orderid`) REFERENCES `messages` (`orderid`) ON UPDATE CASCADE;

--
-- Constraints for table `bankbalances`
--
ALTER TABLE `bankbalances`
  ADD CONSTRAINT `fk_balance` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `fk_buyer` FOREIGN KEY (`buyer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_storesid` FOREIGN KEY (`beat_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_commentee` FOREIGN KEY (`commentee_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_commenter` FOREIGN KEY (`commenter_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `complaints`
--
ALTER TABLE `complaints`
  ADD CONSTRAINT `fk_accused` FOREIGN KEY (`accused_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_plaintiff` FOREIGN KEY (`plaintiff_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `directorequests`
--
ALTER TABLE `directorequests`
  ADD CONSTRAINT `fk_dr_director` FOREIGN KEY (`director_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_dr_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_orderid_dr` FOREIGN KEY (`orderid`) REFERENCES `messages` (`orderid`);

--
-- Constraints for table `directors`
--
ALTER TABLE `directors`
  ADD CONSTRAINT `fk_director_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `fk_messageeid` FOREIGN KEY (`messager_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_messagerid` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mixmasterings`
--
ALTER TABLE `mixmasterings`
  ADD CONSTRAINT `mixmasterfk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mixmasterfk2` FOREIGN KEY (`genre`) REFERENCES `genres` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `fk_userated` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `fk_userater` FOREIGN KEY (`rater`) REFERENCES `users` (`id`);

--
-- Constraints for table `songwriters`
--
ALTER TABLE `songwriters`
  ADD CONSTRAINT `fk_subscribe` FOREIGN KEY (`user_id`) REFERENCES `subscriptions` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `songwriter_user_id_connected_to_users_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `stores`
--
ALTER TABLE `stores`
  ADD CONSTRAINT `fk_genre` FOREIGN KEY (`music_genre`) REFERENCES `genres` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_stores` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_storesub` FOREIGN KEY (`tnx_reference`) REFERENCES `subscriptions` (`tnx_reference`);

--
-- Constraints for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD CONSTRAINT `fk_level` FOREIGN KEY (`level_id`) REFERENCES `plans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_leveluser` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `swriterequests`
--
ALTER TABLE `swriterequests`
  ADD CONSTRAINT `fk_orderid_sw` FOREIGN KEY (`orderid`) REFERENCES `messages` (`orderid`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_swriter_songwriterid` FOREIGN KEY (`songwriter_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_swriter_userid` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
