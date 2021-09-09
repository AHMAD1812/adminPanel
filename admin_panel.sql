-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Sep 09, 2021 at 04:34 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_panel`
--

-- --------------------------------------------------------

--
-- Table structure for table `loginlogs`
--

CREATE TABLE `loginlogs` (
  `id` int(11) NOT NULL,
  `iPaddress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `medialinks`
--

CREATE TABLE `medialinks` (
  `playerId` int(11) NOT NULL,
  `mediaType` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medialinks`
--

INSERT INTO `medialinks` (`playerId`, `mediaType`, `link`) VALUES
(1, 'FaceBook', 'https://www.facebook.com');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 1, 'my-app-token', '7684e725db0b38a6204f32d460d7ebfab925785f42602dec268f8d8ee8e53a98', '[\"*\"]', NULL, '2021-06-24 05:49:48', '2021-06-24 05:49:48'),
(2, 'App\\Models\\User', 2, 'my-app-token', '954d1a3830939e773f0df274920025643c28ade2521606e01076a32863a5af18', '[\"*\"]', NULL, '2021-06-25 17:03:14', '2021-06-25 17:03:14'),
(3, 'App\\Models\\User', 3, 'my-app-token', '405fbafb846d69d55203c258f3a36ad4d9c2325573ce8614059338faab691dab', '[\"*\"]', NULL, '2021-06-25 17:20:50', '2021-06-25 17:20:50'),
(4, 'App\\Models\\User', 4, 'my-app-token', 'acc44dc63a4b69f279dbec2ad7989ffd85dfcaad9ddd34f2cb458db3b3fde1d6', '[\"*\"]', NULL, '2021-06-29 20:15:55', '2021-06-29 20:15:55'),
(5, 'App\\Models\\User', 4, 'my-app-token', '53a74eaaba04a227f65e1e3c21824f83e1ba4001a9a18d9b97911a87d026aca2', '[\"*\"]', NULL, '2021-06-29 20:28:15', '2021-06-29 20:28:15'),
(6, 'App\\Models\\User', 4, 'my-app-token', '946167e12f94b6e8b58ba168a0dd53f0ac1287ef69de2e06637bc9830308687e', '[\"*\"]', NULL, '2021-06-29 20:34:25', '2021-06-29 20:34:25'),
(7, 'App\\Models\\User', 4, 'my-app-token', 'd04577a02b8e470389b61118226f51fc539d75a17517b5b2dba0d0ce47f6033e', '[\"*\"]', NULL, '2021-06-29 21:19:54', '2021-06-29 21:19:54'),
(8, 'App\\Models\\User', 4, 'my-app-token', 'f4f994f48e585adffc98fa738f320a49835254ec5f57ac3540bea96ed0135425', '[\"*\"]', NULL, '2021-06-29 22:00:19', '2021-06-29 22:00:19'),
(9, 'App\\Models\\User', 6, 'my-app-token', 'b0965aa8609cc3d47bc2e1775965d1750dba5c7a0cf779f31e6a82546e097038', '[\"*\"]', NULL, '2021-06-29 22:31:53', '2021-06-29 22:31:53'),
(10, 'App\\Models\\User', 6, 'my-app-token', '88ed8b0d2bc2251f7e77285f68318f413896eb1837d8920ea977eab73d6e875e', '[\"*\"]', NULL, '2021-06-30 00:11:44', '2021-06-30 00:11:44'),
(11, 'App\\Models\\User', 8, 'my-app-token', '3df038b4f0403d49a5227fac7a787e576e3c37cad0f836588c54b7a8e14e869f', '[\"*\"]', NULL, '2021-06-30 20:40:38', '2021-06-30 20:40:38'),
(12, 'App\\Models\\User', 6, 'my-app-token', 'be24370acd38d9b11aac9f4c4be58d37e7147ef0ab8b43cb799e37d2f5a52293', '[\"*\"]', NULL, '2021-06-30 21:00:20', '2021-06-30 21:00:20'),
(13, 'App\\Models\\User', 6, 'my-app-token', '71cc47d881925ca22443dcab0d8752aa51cbe1f9cd208f90f0323a729dceba02', '[\"*\"]', NULL, '2021-06-30 21:08:59', '2021-06-30 21:08:59'),
(14, 'App\\Models\\User', 6, 'my-app-token', '3c579cc08658b715b62447d3c9de3114836065550364c6b15dd446a135091a15', '[\"*\"]', NULL, '2021-06-30 21:11:28', '2021-06-30 21:11:28'),
(15, 'App\\Models\\User', 6, 'my-app-token', '9789360d22ac5f8ad4356e5cd08f002ec85e10c22fd08376dec11a7d7c8a3021', '[\"*\"]', NULL, '2021-06-30 21:12:58', '2021-06-30 21:12:58'),
(16, 'App\\Models\\User', 6, 'my-app-token', '4288424d64ef2d92027ffb3edca1f79219f99d9381987b02308cb9daf88a8093', '[\"*\"]', NULL, '2021-06-30 21:18:10', '2021-06-30 21:18:10'),
(17, 'App\\Models\\User', 8, 'my-app-token', '3d7b5110fe40d104e586b84e504c4f45731458241f0990c491e6f5f2b4779472', '[\"*\"]', NULL, '2021-06-30 21:47:47', '2021-06-30 21:47:47'),
(18, 'App\\Models\\User', 6, 'my-app-token', '7c7bb3be837660f46aef5488bd5201c0a30e479c957b59fa0ef189fc93e61a19', '[\"*\"]', NULL, '2021-06-30 22:05:34', '2021-06-30 22:05:34'),
(19, 'App\\Models\\User', 6, 'my-app-token', '4ed12aa74af1d597d010e01f221640fc59574f75fc7971c5982370ad8f8ba6c9', '[\"*\"]', NULL, '2021-06-30 22:10:47', '2021-06-30 22:10:47'),
(20, 'App\\Models\\User', 6, 'my-app-token', '8d3da780ad617183cbe003ecfc137de37c876d442229c4ca4b194e8d2cd150e9', '[\"*\"]', NULL, '2021-06-30 22:16:36', '2021-06-30 22:16:36'),
(21, 'App\\Models\\User', 6, 'my-app-token', 'f871659281cbc85689775ad92fda2393f0d8874d0ef284feb86f1ae39272fe21', '[\"*\"]', NULL, '2021-06-30 22:21:05', '2021-06-30 22:21:05'),
(22, 'App\\Models\\User', 6, 'my-app-token', 'ed2f7478fd017e7514d068c108b1216a1422bce7378fee2cf9349292c8fb5d3c', '[\"*\"]', NULL, '2021-06-30 22:24:30', '2021-06-30 22:24:30'),
(23, 'App\\Models\\User', 6, 'my-app-token', 'bf496c76f628ac556281f1f1c29954571eb28f74a4a2cc06f0d359b606c16570', '[\"*\"]', NULL, '2021-06-30 22:26:10', '2021-06-30 22:26:10'),
(24, 'App\\Models\\User', 6, 'my-app-token', '88530b8d3d531679aa9d21c4cb700bf25a49914148a8bd3063c2e6546778f7d1', '[\"*\"]', NULL, '2021-06-30 22:28:55', '2021-06-30 22:28:55'),
(25, 'App\\Models\\User', 6, 'my-app-token', '3ec160b1ac801681f882e7e4a9085e0a23d117b693513864152ee5f5f99f6118', '[\"*\"]', NULL, '2021-06-30 22:37:31', '2021-06-30 22:37:31'),
(26, 'App\\Models\\User', 6, 'my-app-token', '9e75bc1704ef3c022913d768fc77d616f9f78c96ed8bd01c5162128830b430f8', '[\"*\"]', NULL, '2021-06-30 22:40:06', '2021-06-30 22:40:06'),
(27, 'App\\Models\\User', 8, 'my-app-token', '63220ecd5a90bd08b68098facd9a9ed1ff13c5c90a0359af2f24b4955fa74562', '[\"*\"]', NULL, '2021-06-30 22:47:49', '2021-06-30 22:47:49'),
(28, 'App\\Models\\User', 6, 'my-app-token', '662298fa826a49d1bcf8c30f65f932debc2774f595d04928a20ad12a63cdfe0a', '[\"*\"]', NULL, '2021-06-30 23:08:25', '2021-06-30 23:08:25'),
(29, 'App\\Models\\User', 6, 'my-app-token', '01bf7408cda4e550d18a8f31c228f7c87391d41ec4c280c178e4011cc4bfa3e0', '[\"*\"]', NULL, '2021-06-30 23:35:55', '2021-06-30 23:35:55'),
(30, 'App\\Models\\User', 8, 'my-app-token', '8b8c8faa4a0dc7ee99eaf1dce39dc82faa1ebbbbb0ef81e85571b0e610cc3371', '[\"*\"]', NULL, '2021-07-01 00:04:19', '2021-07-01 00:04:19'),
(31, 'App\\Models\\User', 8, 'my-app-token', 'd2481f548269a2cecace63b9ebea66480f5e6bc43aa308af416e6cadafc97909', '[\"*\"]', NULL, '2021-07-01 00:17:10', '2021-07-01 00:17:10'),
(32, 'App\\Models\\User', 8, 'my-app-token', '335ebfb6505b7e73082aef73147deccd6c0a9dd907b520b0f4997b650e22c2bd', '[\"*\"]', NULL, '2021-07-01 00:17:10', '2021-07-01 00:17:10'),
(33, 'App\\Models\\User', 8, 'my-app-token', '1bc197c88fba05e9c4c0489cd4d8b52f48c2c1fe3240fe74a289d9d03616ef20', '[\"*\"]', NULL, '2021-07-01 00:17:10', '2021-07-01 00:17:10'),
(34, 'App\\Models\\User', 8, 'my-app-token', '3190d3a498200de421888bc58832673ac8088a39de50402b5192691332edee42', '[\"*\"]', NULL, '2021-07-01 02:14:36', '2021-07-01 02:14:36'),
(35, 'App\\Models\\User', 8, 'my-app-token', '0b6a3e7cda2a1b8e3f2bc1c9f4f24468626f3d1ec97822535af7744edede46ee', '[\"*\"]', NULL, '2021-07-01 06:22:56', '2021-07-01 06:22:56'),
(36, 'App\\Models\\User', 8, 'my-app-token', 'f5becb5473aa8f123ffb221c26d46093de509552f80c26a1e9b25916ef5bae6b', '[\"*\"]', NULL, '2021-07-01 19:27:18', '2021-07-01 19:27:18'),
(37, 'App\\Models\\User', 8, 'my-app-token', 'd993902edb52c5a4bc1641dbb1122873be2681f6eeebd9d3be9324d9bbd054ea', '[\"*\"]', NULL, '2021-07-02 07:11:30', '2021-07-02 07:11:30'),
(38, 'App\\Models\\User', 8, 'my-app-token', '0a609b48ef384dc604d52a3d110367c413f60d1d2bd30a0b477673f41d6cf005', '[\"*\"]', NULL, '2021-07-02 07:11:31', '2021-07-02 07:11:31'),
(39, 'App\\Models\\User', 8, 'my-app-token', 'b077c37c4d711d84db0953f2ef79f30ac395ab520b2ec7d3b439b722a249f17d', '[\"*\"]', NULL, '2021-07-02 07:11:32', '2021-07-02 07:11:32'),
(40, 'App\\Models\\User', 8, 'my-app-token', '6edec89d433f9943d1a164321ba71126c4b7646f35d4ed77b3aa8524eabaede4', '[\"*\"]', NULL, '2021-07-02 10:48:10', '2021-07-02 10:48:10'),
(41, 'App\\Models\\User', 6, 'my-app-token', '37fce4c26e5ab163552dc4b92e52522d647d1ddf5d0d3ada629173b2c2bac68c', '[\"*\"]', NULL, '2021-07-02 21:41:03', '2021-07-02 21:41:03'),
(42, 'App\\Models\\User', 6, 'my-app-token', '30150d4154783ab6f5294b0c46f4f159bb708e58e1708b880cb1327abf9a64e2', '[\"*\"]', NULL, '2021-07-02 21:45:10', '2021-07-02 21:45:10'),
(43, 'App\\Models\\User', 6, 'my-app-token', '93ab41ec9b36792dfe53d441dc85d8b85d0f5514ede04198cf5fe64464bee19f', '[\"*\"]', NULL, '2021-07-02 21:54:15', '2021-07-02 21:54:15'),
(44, 'App\\Models\\User', 6, 'my-app-token', 'a933525c27ef887a4d1b57cbde94fa84993c14fc1badff914d2a5090e5368509', '[\"*\"]', NULL, '2021-07-02 23:50:40', '2021-07-02 23:50:40'),
(45, 'App\\Models\\User', 6, 'my-app-token', '007444b5b95820518b1f63439e9fa822f9767b3411abf9bee5b950a79b6ee8a8', '[\"*\"]', NULL, '2021-07-02 23:55:46', '2021-07-02 23:55:46'),
(46, 'App\\Models\\User', 8, 'my-app-token', '1ea7a908b870088ffd0d9ec6b7b1a7ce8d4457dca6e904fc12c0080cce4dad2b', '[\"*\"]', NULL, '2021-07-03 00:18:15', '2021-07-03 00:18:15'),
(47, 'App\\Models\\User', 8, 'my-app-token', 'b9a64211469ddf943d82daa35e230d4fae43eea634c1e794aa18cec4c451da5e', '[\"*\"]', NULL, '2021-07-03 02:54:48', '2021-07-03 02:54:48'),
(48, 'App\\Models\\User', 8, 'my-app-token', 'da515f5e3b3135d7a7fc0612b3d4de230016950fb75066951902e63eb2af3dd4', '[\"*\"]', NULL, '2021-07-03 03:15:17', '2021-07-03 03:15:17'),
(49, 'App\\Models\\User', 9, 'my-app-token', '2d9e6c19d7164666f3f6342c832e1d63fc0efd12f1675e663de00da1dff64730', '[\"*\"]', NULL, '2021-07-03 03:29:29', '2021-07-03 03:29:29'),
(50, 'App\\Models\\User', 9, 'my-app-token', '4eb04003ca0eb7bb330f20c138cf6641d98f07ccfe9572947fc49735a185c365', '[\"*\"]', NULL, '2021-07-03 03:38:03', '2021-07-03 03:38:03'),
(51, 'App\\Models\\User', 10, 'my-app-token', '4fabf0e7584915a25dcc3c8434200a2e40d064aac72405b546cc3f2cc59c85a5', '[\"*\"]', NULL, '2021-07-03 03:53:46', '2021-07-03 03:53:46'),
(52, 'App\\Models\\User', 8, 'my-app-token', 'a696835b87e8c7c29c81fb118cabf2aaf3a76b8080ad8e75f3ba60f1e1120c63', '[\"*\"]', NULL, '2021-07-03 05:43:53', '2021-07-03 05:43:53'),
(53, 'App\\Models\\User', 10, 'my-app-token', '908d9c24120d7e98070d29c2ce11488158d3f8ab7f1b2ca89062504ed20f0876', '[\"*\"]', NULL, '2021-07-03 06:15:31', '2021-07-03 06:15:31'),
(54, 'App\\Models\\User', 8, 'my-app-token', '6bcc528a5796f0899f47b525c3151fb95bd9e46003040a85b8465a98487df07e', '[\"*\"]', NULL, '2021-07-03 15:50:09', '2021-07-03 15:50:09'),
(55, 'App\\Models\\User', 8, 'my-app-token', '26f85c2cf06b548082fd3aecc9db2134aabcc1b619df1476f16550416a94eb1a', '[\"*\"]', NULL, '2021-07-03 15:50:09', '2021-07-03 15:50:09'),
(56, 'App\\Models\\User', 8, 'my-app-token', 'd01532b7c6d99659acfb7af35bdb148e334399d4de712d79d08e65d4ffc0ed98', '[\"*\"]', NULL, '2021-07-03 15:50:09', '2021-07-03 15:50:09'),
(57, 'App\\Models\\User', 8, 'my-app-token', '17842b00a31d8f2b70dfef06b66d469c3ed5d6781b7298583221ffb47bcffa37', '[\"*\"]', NULL, '2021-07-03 15:50:09', '2021-07-03 15:50:09'),
(58, 'App\\Models\\User', 8, 'my-app-token', '976eaaeb6eedb2b7ad21f4768a09025f2d5d39aa0a05afe968e92e31f15adc33', '[\"*\"]', NULL, '2021-07-03 15:50:09', '2021-07-03 15:50:09'),
(59, 'App\\Models\\User', 8, 'my-app-token', '6499675e318657f9f2e69468bdbdf67ca29cd18cb9d4c110424a29a135e6e1ff', '[\"*\"]', NULL, '2021-07-03 15:50:10', '2021-07-03 15:50:10'),
(60, 'App\\Models\\User', 8, 'my-app-token', '0db9c396ac283b31af402c30e84b82251eb76a405a82136dc7dccc11d4a2f007', '[\"*\"]', NULL, '2021-07-03 15:50:10', '2021-07-03 15:50:10'),
(61, 'App\\Models\\User', 8, 'my-app-token', '0d542825962d4e8241cf2fbca6c4d22890f58b11f11f413aed4771d44630e214', '[\"*\"]', NULL, '2021-07-03 18:00:10', '2021-07-03 18:00:10'),
(62, 'App\\Models\\User', 8, 'my-app-token', '58258d74323821efb11c09e90d98ee552781f4572cf05f9435e931a0b08bdc03', '[\"*\"]', NULL, '2021-07-03 18:00:10', '2021-07-03 18:00:10'),
(63, 'App\\Models\\User', 8, 'my-app-token', 'e3386308dcbfb65681941e0b56c777dcbb591a21b5d851545aac872658ca6832', '[\"*\"]', NULL, '2021-07-03 18:00:10', '2021-07-03 18:00:10'),
(64, 'App\\Models\\User', 8, 'my-app-token', 'c84763e1ade4c37c3960364c4ef7aad7bf050d0fbeaf1ce25978a9b88cde03ed', '[\"*\"]', NULL, '2021-07-07 21:36:22', '2021-07-07 21:36:22'),
(65, 'App\\Models\\User', 8, 'my-app-token', '25bdad6082e1de51642c8396c4f3cd7cb4ef200d2c551cd5327dd9452010db54', '[\"*\"]', NULL, '2021-07-07 21:52:17', '2021-07-07 21:52:17'),
(66, 'App\\Models\\User', 8, 'my-app-token', '9aab789ecf81ec9c528180d4f052324dd29479181189afe05f2333d793def3e5', '[\"*\"]', NULL, '2021-07-08 00:36:06', '2021-07-08 00:36:06'),
(67, 'App\\Models\\User', 8, 'my-app-token', '25b47a9682be9fab7d4bc7b6212af5497533789c5eb5990aba8c518b354e7d32', '[\"*\"]', NULL, '2021-07-08 02:06:53', '2021-07-08 02:06:53'),
(68, 'App\\Models\\User', 8, 'my-app-token', 'fb82fd9fd3559fa9dbba42447c9035c44398f7d3216ebf1cd28399a74eeb0ef8', '[\"*\"]', NULL, '2021-07-24 07:40:19', '2021-07-24 07:40:19'),
(69, 'App\\Models\\User', 8, 'my-app-token', '8c7050a3be03cd17d60f7f69f9c0b6bbb14cc82ce23584990f75f728c4db5d99', '[\"*\"]', NULL, '2021-07-26 17:41:20', '2021-07-26 17:41:20'),
(70, 'App\\Models\\User', 8, 'my-app-token', '38e3d752ad60baf7039b39deb4a59ced0e12457b292b889581107b1727e4e236', '[\"*\"]', NULL, '2021-07-26 17:41:20', '2021-07-26 17:41:20'),
(71, 'App\\Models\\User', 8, 'my-app-token', 'de7e6678ca96cb2f206602cfe1b5bb328d7ee50522690b089908a2ffbcdc4967', '[\"*\"]', NULL, '2021-07-26 17:41:21', '2021-07-26 17:41:21'),
(72, 'App\\Models\\User', 13, 'my-app-token', '1e5b87da93ac977d287edf0b5bb1e06409b6f05b125034064060f6aea7845aca', '[\"*\"]', NULL, '2021-07-28 16:31:38', '2021-07-28 16:31:38'),
(73, 'App\\Models\\User', 14, 'my-app-token', '10129fd9a9e853b3e9867baa9cb55423c397253bb969639538400232e13c9071', '[\"*\"]', NULL, '2021-07-28 17:18:47', '2021-07-28 17:18:47'),
(74, 'App\\Models\\User', 15, 'my-app-token', '901ab4608a29072095075717f1294b3c639d47b305dfb4c56740bfe7b419d928', '[\"*\"]', NULL, '2021-07-28 18:31:30', '2021-07-28 18:31:30'),
(75, 'App\\Models\\User', 16, 'my-app-token', '97545bbac9f89be256bceaac4534a6b5fac572326c792672a282dad2e280f572', '[\"*\"]', NULL, '2021-07-28 19:14:11', '2021-07-28 19:14:11'),
(76, 'App\\Models\\User', 17, 'my-app-token', '526d16a676b6b9602b73355f3d2750f5cbf92ccd739d46ced45d4f5a933db1f6', '[\"*\"]', NULL, '2021-07-28 21:31:46', '2021-07-28 21:31:46'),
(77, 'App\\Models\\User', 17, 'my-app-token', '0c4f864164204964cbf338ab22a7b39e2461c2f9128f55567aab772d84a8dde4', '[\"*\"]', NULL, '2021-07-28 21:36:05', '2021-07-28 21:36:05'),
(78, 'App\\Models\\User', 8, 'my-app-token', '74fa787315546fc4d22d91e9823ee7365097ddae6b808e8b785d01604fa741b0', '[\"*\"]', NULL, '2021-07-29 01:21:09', '2021-07-29 01:21:09'),
(79, 'App\\Models\\User', 8, 'my-app-token', '95f68f279a4a02d91898de5b2149164b1f3016eb48120a8f65eb1686956747a7', '[\"*\"]', NULL, '2021-07-29 01:27:32', '2021-07-29 01:27:32'),
(80, 'App\\Models\\User', 8, 'my-app-token', 'c38e34774a42c0a76dd1e4d24fa6db13098d73d5dc556092bc41017ea974ee88', '[\"*\"]', NULL, '2021-07-29 02:46:05', '2021-07-29 02:46:05'),
(81, 'App\\Models\\User', 8, 'my-app-token', 'a8e1f63e3f72fa739cc986742e3a2e6b105b46ec611a570a836ea795fbce6405', '[\"*\"]', NULL, '2021-07-29 13:02:20', '2021-07-29 13:02:20'),
(82, 'App\\Models\\User', 19, 'my-app-token', '3862f74d144939cceac88272ff4ecbb74cd23f68a1606c228a91a6888feadd35', '[\"*\"]', NULL, '2021-07-29 23:41:55', '2021-07-29 23:41:55'),
(83, 'App\\Models\\User', 18, 'my-app-token', 'c5b236b8117f69a6f340319493d4944a70e91f5089bd427367391a664a5e258e', '[\"*\"]', NULL, '2021-07-29 23:51:57', '2021-07-29 23:51:57'),
(84, 'App\\Models\\User', 19, 'my-app-token', '257fd1df3026fcd7dcef064b630ff283db2a3b95ff3eafc2071313193010115e', '[\"*\"]', NULL, '2021-07-30 00:07:47', '2021-07-30 00:07:47'),
(85, 'App\\Models\\User', 20, 'my-app-token', '3912fe59cc74b69d609ea6e4cbaaff8f22f488266cf31679148d25699a929456', '[\"*\"]', NULL, '2021-07-30 02:28:56', '2021-07-30 02:28:56'),
(86, 'App\\Models\\User', 20, 'my-app-token', '513f9e17264e219ab5da9c390fcc339d64c386c0f763a4a854ef69b4e9a246ff', '[\"*\"]', NULL, '2021-07-30 02:34:19', '2021-07-30 02:34:19'),
(87, 'App\\Models\\User', 20, 'my-app-token', 'db6bac1da28122394d9280b65a741293565250ec9b9962f251c7d038ceef2bb4', '[\"*\"]', NULL, '2021-07-30 02:36:44', '2021-07-30 02:36:44'),
(88, 'App\\Models\\User', 19, 'my-app-token', '0df83f8693892d0e2d5cee67b933bb4a435f4f21f79a56d6fc6a9230aa44f0c8', '[\"*\"]', NULL, '2021-07-30 04:44:15', '2021-07-30 04:44:15'),
(89, 'App\\Models\\User', 21, 'my-app-token', 'a29c93766cbf23a299e29776be252601af0e9344d513a55445dad8dfe2018c11', '[\"*\"]', NULL, '2021-07-30 04:45:14', '2021-07-30 04:45:14'),
(90, 'App\\Models\\User', 21, 'my-app-token', 'c7e415338f6df83d527f865819d2cdc31a1153b5678729ac67624ff3c9b9ab13', '[\"*\"]', NULL, '2021-07-30 04:53:45', '2021-07-30 04:53:45'),
(91, 'App\\Models\\User', 22, 'my-app-token', '0df178d197bd22e0020e92b5d1a9214b21311936663aaf988efea96046d4b18a', '[\"*\"]', NULL, '2021-07-30 13:48:41', '2021-07-30 13:48:41'),
(92, 'App\\Models\\User', 22, 'my-app-token', '4ef041d7b492d58da44b0c7fe806581512ce521e4a9f88cac5d50fca600218a2', '[\"*\"]', NULL, '2021-07-30 13:51:49', '2021-07-30 13:51:49'),
(93, 'App\\Models\\User', 22, 'my-app-token', 'dbed5df68945a8b84558cfeeed9e85665a7b021ae4593d115c6af810fba8a093', '[\"*\"]', NULL, '2021-07-30 13:53:53', '2021-07-30 13:53:53'),
(94, 'App\\Models\\User', 22, 'my-app-token', 'e5775d14fdaa11c86813542f8e5be721253a1fe283ed32dad3d585fc9fbec436', '[\"*\"]', NULL, '2021-07-30 13:53:54', '2021-07-30 13:53:54'),
(95, 'App\\Models\\User', 22, 'my-app-token', 'd6428eee876ddab84fc7f7beec1c5795d439cbfc930da49d9babf8b25f3cc5fc', '[\"*\"]', NULL, '2021-07-30 13:54:01', '2021-07-30 13:54:01'),
(96, 'App\\Models\\User', 23, 'my-app-token', '5f8169bfb4fdd0caa4e7acb24284f7b5185ca57eca4c2f1134f43d273426a4d2', '[\"*\"]', NULL, '2021-07-30 15:06:52', '2021-07-30 15:06:52'),
(97, 'App\\Models\\User', 22, 'my-app-token', '8368006f7e976b5ae32ba025838f65ad6721dd483748e58acaab5ca70e8d6ed7', '[\"*\"]', NULL, '2021-07-30 15:16:06', '2021-07-30 15:16:06'),
(98, 'App\\Models\\User', 23, 'my-app-token', '164cc65aeb1e1069d1d6048865de9a5be03919a4fe141c7ab5205e513c3e673b', '[\"*\"]', NULL, '2021-07-30 15:18:38', '2021-07-30 15:18:38'),
(99, 'App\\Models\\User', 23, 'my-app-token', '658bc4c7aab3d1225544642a258b8e032c328b247f827677ed57be151dea1799', '[\"*\"]', NULL, '2021-07-30 15:20:10', '2021-07-30 15:20:10'),
(100, 'App\\Models\\User', 23, 'my-app-token', '781550a9d9ad86cfb4e4b87249b124da231a0ab22d44f584c13bf1d0c5703728', '[\"*\"]', NULL, '2021-07-30 15:21:14', '2021-07-30 15:21:14'),
(101, 'App\\Models\\User', 22, 'my-app-token', 'c0e40f625c08c0da4be45591d4cbb3e377d1612ac1628b6a2d8a62e2a1168b39', '[\"*\"]', NULL, '2021-07-30 15:24:19', '2021-07-30 15:24:19'),
(102, 'App\\Models\\User', 17, 'my-app-token', '38d987391a33384df88e06cdc27350cdcc38290bda6435a39cb255ec93705c0e', '[\"*\"]', NULL, '2021-07-30 17:10:35', '2021-07-30 17:10:35'),
(103, 'App\\Models\\User', 17, 'my-app-token', 'de133478c851ca46c676252843b649410f6edcb70317ec84ebd54bd7b6e41721', '[\"*\"]', NULL, '2021-07-30 17:14:46', '2021-07-30 17:14:46'),
(104, 'App\\Models\\User', 24, 'my-app-token', 'e1d2887c4fe6e66b6065772dbb98096b4ed4cc123d8b37af7de4a8dd9771d82a', '[\"*\"]', NULL, '2021-07-30 18:08:43', '2021-07-30 18:08:43'),
(105, 'App\\Models\\User', 8, 'my-app-token', 'bfd32238c611478acdfad32b07648e7ab8dcb25138afe6630323ae1f0499047c', '[\"*\"]', NULL, '2021-07-31 12:05:50', '2021-07-31 12:05:50'),
(106, 'App\\Models\\User', 8, 'my-app-token', 'eb957294daaa6e19f400df4a1082a2a37cebe6c36e55388b895d36ed745bf8f3', '[\"*\"]', NULL, '2021-07-31 12:05:51', '2021-07-31 12:05:51'),
(107, 'App\\Models\\User', 26, 'my-app-token', '7e5aaeca89e990e342725f1d1b054d659e4958b5730d6a7a4bdff61636719218', '[\"*\"]', NULL, '2021-08-06 19:04:35', '2021-08-06 19:04:35'),
(108, 'App\\Models\\User', 26, 'my-app-token', '420f2bed9a52b429a8416664f276eeb8db9d235c713a4b438eaa6cf06cc2b262', '[\"*\"]', NULL, '2021-08-06 19:06:07', '2021-08-06 19:06:07'),
(109, 'App\\Models\\User', 26, 'my-app-token', '474a8f884c717675c376636766c375215fe512fd01b2ddcb5fc58430b5fd54bf', '[\"*\"]', NULL, '2021-08-06 19:25:50', '2021-08-06 19:25:50'),
(110, 'App\\Models\\User', 26, 'my-app-token', 'd631d444745ae3f71fd747deb20213b2f8c18b02804fa12307caf7274615974a', '[\"*\"]', NULL, '2021-08-06 19:25:53', '2021-08-06 19:25:53'),
(111, 'App\\Models\\User', 26, 'my-app-token', 'd982044cf39cf0407b14b341041eea875649c8626d96aac7e1fb389b8b41f626', '[\"*\"]', NULL, '2021-08-06 19:25:55', '2021-08-06 19:25:55'),
(112, 'App\\Models\\User', 26, 'my-app-token', 'ab2ce564ee910ad07f1f832084ace53d2258286f3a23b9337ee73f8ee1942cb0', '[\"*\"]', NULL, '2021-08-06 19:26:01', '2021-08-06 19:26:01'),
(113, 'App\\Models\\User', 26, 'my-app-token', '2ec01183808338bbd2ebfdc34276dd75ab0cd299a54bd5b493a2de3987e35280', '[\"*\"]', NULL, '2021-08-06 19:26:02', '2021-08-06 19:26:02'),
(114, 'App\\Models\\User', 26, 'my-app-token', '8e3420949d173f3e32f7d98b1b513ef5c9bffc454fc9a5d40a1f53c91014165e', '[\"*\"]', NULL, '2021-08-06 19:26:02', '2021-08-06 19:26:02'),
(115, 'App\\Models\\User', 26, 'my-app-token', '9d409779e0b01337e0f3fb45ce710837c513502917b3322baee7616aea24be92', '[\"*\"]', NULL, '2021-08-06 19:26:36', '2021-08-06 19:26:36'),
(116, 'App\\Models\\User', 26, 'my-app-token', '7c1578ff77992bc308800b47a9ffe526c12fb1919bd0bc2f7061348fd89eb38e', '[\"*\"]', NULL, '2021-08-06 19:26:36', '2021-08-06 19:26:36'),
(117, 'App\\Models\\User', 26, 'my-app-token', '86a48c1ccec971ef88c6fab983cf89c39cd73e5a35a6c1f7c3ac3b64d82c48ef', '[\"*\"]', NULL, '2021-08-06 19:26:37', '2021-08-06 19:26:37'),
(118, 'App\\Models\\User', 26, 'my-app-token', '27051d3154f634b03d511d87cf80b00a00c406c66ead9bb5859cafb1b524a120', '[\"*\"]', NULL, '2021-08-06 19:26:37', '2021-08-06 19:26:37'),
(119, 'App\\Models\\User', 26, 'my-app-token', '088363fe2e6b6274e2f7afbf6804790bf525e642503b4b671937b21e058ff067', '[\"*\"]', NULL, '2021-08-06 19:26:37', '2021-08-06 19:26:37'),
(120, 'App\\Models\\User', 26, 'my-app-token', '0f6da001149252fd59117448c279566aa39c187ab711c5528a2478ee0f20b5af', '[\"*\"]', NULL, '2021-08-06 19:26:38', '2021-08-06 19:26:38'),
(121, 'App\\Models\\User', 28, 'my-app-token', '4165e637bb6be575ee9ed6ee302be31502ac789452cb113784f8fd4b651c22b2', '[\"*\"]', NULL, '2021-08-06 20:16:28', '2021-08-06 20:16:28'),
(122, 'App\\Models\\User', 28, 'my-app-token', 'd0695c8871b78869846bef50acbd209fc631c41336a54d63ff6d38430d8238da', '[\"*\"]', NULL, '2021-08-06 20:21:03', '2021-08-06 20:21:03'),
(123, 'App\\Models\\User', 28, 'my-app-token', '7774e5d9b756c06c7775f8751cd6db3192da54ee6e9f4367713a0ef6631c0280', '[\"*\"]', NULL, '2021-08-06 20:32:07', '2021-08-06 20:32:07'),
(124, 'App\\Models\\User', 28, 'my-app-token', '6b9af017757b7037d63dd2f592cb4734e65eaafbafb6f8a6ee4a25f129c0102b', '[\"*\"]', NULL, '2021-08-06 20:44:13', '2021-08-06 20:44:13'),
(125, 'App\\Models\\User', 28, 'my-app-token', '33e3cd4c5bd8203dc321ce008a391f8b0f8b7bf8b64c331de131cdbb8854bdd9', '[\"*\"]', NULL, '2021-08-06 20:51:50', '2021-08-06 20:51:50'),
(126, 'App\\Models\\User', 28, 'my-app-token', 'e98ef089a53435846f072b9cd980098e684fc0698da5870397c72c98b95980d3', '[\"*\"]', NULL, '2021-08-06 20:55:21', '2021-08-06 20:55:21'),
(127, 'App\\Models\\User', 28, 'my-app-token', 'bb3390bc02e3a411c3fc3ce22755214eb63756096392119545b9d1d06b848324', '[\"*\"]', NULL, '2021-08-06 20:55:51', '2021-08-06 20:55:51'),
(128, 'App\\Models\\User', 28, 'my-app-token', 'bd83875250a651167fc9f4c0afd61e51bb9f3bdb890509465804b5cc9f902576', '[\"*\"]', NULL, '2021-08-11 17:52:18', '2021-08-11 17:52:18'),
(129, 'App\\Models\\User', 28, 'my-app-token', '723437261ad84295ec90438029411c57afe017f2ba6ad35ba3e7ce89fd58b39e', '[\"*\"]', NULL, '2021-08-11 17:59:11', '2021-08-11 17:59:11'),
(130, 'App\\Models\\User', 28, 'my-app-token', '481e590647b28161dc3fe4c153915882cb38a8445075b6d8e7998e1cc0336758', '[\"*\"]', NULL, '2021-08-11 17:59:31', '2021-08-11 17:59:31'),
(131, 'App\\Models\\User', 30, 'my-app-token', '1239bb1ade0f7055284093cbcb13e965ed8c803efe39161553c5f4d11210a9a8', '[\"*\"]', NULL, '2021-08-13 20:12:13', '2021-08-13 20:12:13'),
(132, 'App\\Models\\User', 30, 'my-app-token', '1eb61923367b4702ac6a36272a27c201cdcae5fa1c9e144e47fecdbdea927c7e', '[\"*\"]', NULL, '2021-08-13 20:12:59', '2021-08-13 20:12:59'),
(133, 'App\\Models\\User', 30, 'my-app-token', '694da969e51a3b7ae38d3d03739b02f8e605a92101a5ea383cb60ce3bb45eb60', '[\"*\"]', NULL, '2021-08-13 20:13:24', '2021-08-13 20:13:24'),
(134, 'App\\Models\\User', 30, 'my-app-token', 'cdf578ed2b443eca94f97acb5c11af0cc9525e6138d668b73ffcc199179773b7', '[\"*\"]', NULL, '2021-08-13 20:13:52', '2021-08-13 20:13:52'),
(135, 'App\\Models\\User', 30, 'my-app-token', 'bfc6b7dcc41b95cc55b8fbc3d87a9fc70f6bf208fb23061c8fc7e936c08571fa', '[\"*\"]', NULL, '2021-08-13 20:14:39', '2021-08-13 20:14:39'),
(136, 'App\\Models\\User', 30, 'my-app-token', 'fb04978a0a66af5014def45befa656a825c7c44399fc838a59a06d99e73a668f', '[\"*\"]', NULL, '2021-08-13 20:19:41', '2021-08-13 20:19:41'),
(137, 'App\\Models\\User', 30, 'my-app-token', '218dbe6abfa3276a18a04e8a922d37ecb399c84201930f3e44c9025e3eb09d17', '[\"*\"]', NULL, '2021-08-16 19:29:44', '2021-08-16 19:29:44'),
(138, 'App\\Models\\User', 30, 'my-app-token', '71864046cb1f12f6523021253a87828c5ea8a57450e8f007a66e2c349a70bdf3', '[\"*\"]', NULL, '2021-08-16 19:30:12', '2021-08-16 19:30:12'),
(139, 'App\\Models\\User', 30, 'my-app-token', '57161ddf76efb50ba957aa5403963dfccabdc89724c4207c4e0ec8d460bd57d9', '[\"*\"]', NULL, '2021-08-16 19:36:32', '2021-08-16 19:36:32'),
(140, 'App\\Models\\User', 30, 'my-app-token', '9b5bd4255d03e4c5fa13e2cb5539c6b223f846ee09843ec98c0b5afbea01ac83', '[\"*\"]', NULL, '2021-08-16 19:40:20', '2021-08-16 19:40:20'),
(141, 'App\\Models\\User', 30, 'my-app-token', 'f7ea5342a981896240d84d58faf5936ef89eebb1a7764ec72a46f74acf343911', '[\"*\"]', NULL, '2021-08-16 19:44:06', '2021-08-16 19:44:06'),
(142, 'App\\Models\\User', 30, 'my-app-token', '5d13de0a82844c9de659355ea1e4b946e2844da4fc37d543777de00b092953ee', '[\"*\"]', NULL, '2021-08-16 19:52:44', '2021-08-16 19:52:44'),
(143, 'App\\Models\\User', 30, 'my-app-token', 'd7854d79bc49424466e96df367dcd984c4e90e3ebc4a84ef3f8a06649896c508', '[\"*\"]', NULL, '2021-08-16 19:53:55', '2021-08-16 19:53:55'),
(144, 'App\\Models\\User', 31, 'my-app-token', '13e6c1170a9c0418771c85ecc32ab6e73c8f030acb0cca2f82e80614b2db1040', '[\"*\"]', NULL, '2021-08-16 23:34:53', '2021-08-16 23:34:53'),
(145, 'App\\Models\\User', 31, 'my-app-token', 'bd358b469ad693cc36587a4e3b1e150de0452323e6c5f5b29477e1b15df11825', '[\"*\"]', NULL, '2021-08-16 23:36:01', '2021-08-16 23:36:01'),
(146, 'App\\Models\\User', 31, 'my-app-token', '364738b48c886303da400fcc9e60d8bdc4321fa017eaefed25d57d7ba758242a', '[\"*\"]', NULL, '2021-08-16 23:47:25', '2021-08-16 23:47:25'),
(147, 'App\\Models\\User', 31, 'my-app-token', '8b7c2504be82d0e5cd3fe84824a55619b24440a142bf528433dc31c4dc9004f9', '[\"*\"]', NULL, '2021-08-16 23:53:58', '2021-08-16 23:53:58'),
(148, 'App\\Models\\User', 31, 'my-app-token', '7aca0908e73450842d26f4eaa938220ea74cd9e1164e8a6c3acf0da911523b07', '[\"*\"]', NULL, '2021-08-16 23:54:42', '2021-08-16 23:54:42'),
(149, 'App\\Models\\User', 31, 'my-app-token', '1d2af7c5e9e25bcdbb6a5a14244ccdf5b5faab8155cedf8813f60c64ccd1d3fb', '[\"*\"]', NULL, '2021-08-16 23:55:59', '2021-08-16 23:55:59'),
(150, 'App\\Models\\User', 8, 'my-app-token', '7ecb34ca72c5b68c3a7d7a31807db283ef2a88144c83c521693f9b5bfd070e1c', '[\"*\"]', NULL, '2021-08-17 00:27:52', '2021-08-17 00:27:52'),
(151, 'App\\Models\\User', 8, 'my-app-token', 'a7eea10591a1f299a8358d835eda49cbb844266faf2f343f31ade7ed7ca05fa5', '[\"*\"]', NULL, '2021-08-17 00:29:19', '2021-08-17 00:29:19'),
(152, 'App\\Models\\User', 8, 'my-app-token', 'a8f90ea387e1c889fd0b7c87a5bbdb1a723397553653f349e6e58032f0820e5b', '[\"*\"]', NULL, '2021-08-17 00:30:32', '2021-08-17 00:30:32'),
(153, 'App\\Models\\User', 8, 'my-app-token', '93c3593a19845b23087539b3411765ed47a747fb362dd598c0e61405484566a2', '[\"*\"]', NULL, '2021-08-17 05:41:19', '2021-08-17 05:41:19'),
(154, 'App\\Models\\User', 8, 'my-app-token', '5c199b447e22698b02f2f81588ba6ef76cbb633360c40d75d9a7a61575bb5c51', '[\"*\"]', NULL, '2021-08-17 05:43:31', '2021-08-17 05:43:31'),
(155, 'App\\Models\\User', 8, 'my-app-token', '91721302ea1333259bafb2e156e282041afd86ff5c2c4cab779c40e07556dbc0', '[\"*\"]', NULL, '2021-08-17 05:44:55', '2021-08-17 05:44:55'),
(156, 'App\\Models\\User', 32, 'my-app-token', 'e893d34c3bf971f96081bd1edcafe9c4440beb2dca6e2e1379b357eb0a69a8e4', '[\"*\"]', NULL, '2021-08-17 17:37:11', '2021-08-17 17:37:11'),
(157, 'App\\Models\\User', 8, 'my-app-token', 'f324e08d4582eec6b6d08df309861adc8bed2e09620ac7a40bcfa7ccced58a77', '[\"*\"]', NULL, '2021-08-17 19:29:49', '2021-08-17 19:29:49'),
(158, 'App\\Models\\User', 8, 'my-app-token', '97efefa2033b156e8595c52c8b3890a926b7f79324cc55ae1036a1d40798d826', '[\"*\"]', NULL, '2021-08-17 19:32:35', '2021-08-17 19:32:35'),
(159, 'App\\Models\\User', 8, 'my-app-token', '2bd91a78f591a25b4bd33a6f48b8cbf14cff7b1922b011dc5dbd04316022cf54', '[\"*\"]', NULL, '2021-08-17 19:33:32', '2021-08-17 19:33:32'),
(160, 'App\\Models\\User', 8, 'my-app-token', '14f027152311896a565a6c1c5b6f59aee4f0514164c8358cb5000d84d102532e', '[\"*\"]', NULL, '2021-08-17 19:34:39', '2021-08-17 19:34:39'),
(161, 'App\\Models\\User', 8, 'my-app-token', 'b1c6022a54994204ffcc7b6d0e16ffa44322a7edac1dca38004156e439cc6242', '[\"*\"]', NULL, '2021-08-17 19:55:16', '2021-08-17 19:55:16'),
(162, 'App\\Models\\User', 8, 'my-app-token', 'ae4fcc38a38b25303e87cd8a3fe522104e0a77b3185fa02d3d7930a331c86775', '[\"*\"]', NULL, '2021-08-17 19:58:24', '2021-08-17 19:58:24'),
(163, 'App\\Models\\User', 8, 'my-app-token', '7a0daba806aed6e1da688750795fab504ca5c0ddb1175b4054bfdf70ced1f819', '[\"*\"]', NULL, '2021-08-17 19:59:29', '2021-08-17 19:59:29'),
(164, 'App\\Models\\User', 19, 'my-app-token', '772c1e42b3b8b52a987ec7e00e8ee2c19fe5a5f30e851bb337aeaa7c4b440886', '[\"*\"]', NULL, '2021-08-18 19:16:44', '2021-08-18 19:16:44'),
(165, 'App\\Models\\User', 19, 'my-app-token', '1663f2a1d4ff39a6eaa39575fb88a37713fbf374942f07be4cab42adcc6780cc', '[\"*\"]', NULL, '2021-08-18 19:39:04', '2021-08-18 19:39:04'),
(166, 'App\\Models\\User', 19, 'my-app-token', '796cfe1197078025e5a08dbd69cc39fb247ab0b5c0a675b347c9c2beef4a4f89', '[\"*\"]', NULL, '2021-08-18 19:40:48', '2021-08-18 19:40:48');

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `playerId` int(11) NOT NULL,
  `playerName` varchar(255) NOT NULL,
  `profilePic` varchar(255) NOT NULL,
  `avaliableTokens` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `totalGames` int(10) NOT NULL,
  `wins` int(10) NOT NULL,
  `lose` int(10) NOT NULL,
  `rankPower` varchar(255) NOT NULL,
  `weaponDamage` varchar(255) NOT NULL,
  `comboDamage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`playerId`, `playerName`, `profilePic`, `avaliableTokens`, `email`, `phone`, `address`, `totalGames`, `wins`, `lose`, `rankPower`, `weaponDamage`, `comboDamage`) VALUES
(1, 'Striker', 'assets/images/faces/face12.jpg', '30', 'striker@gmail.com', '030001200012', 'Pakistan', 24, 12, 9, '80', '78', '45');

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `playerId` int(11) NOT NULL,
  `1` tinyint(1) NOT NULL,
  `2` tinyint(1) NOT NULL,
  `3` tinyint(1) NOT NULL,
  `4` tinyint(1) NOT NULL,
  `5` tinyint(1) NOT NULL,
  `6` tinyint(1) NOT NULL,
  `7` tinyint(1) NOT NULL,
  `8` tinyint(1) NOT NULL,
  `9` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`playerId`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`) VALUES
(1, 1, 1, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `resetpassword`
--

CREATE TABLE `resetpassword` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('cHMxuXe68Myc07cMB5DMJLzVApmzpbUYZlivXuE7', NULL, '217.138.255.164', 'Mozilla/5.0 (Linux; U; Android 8.1.0; zh-CN; EML-AL00 Build/HUAWEIEML-AL00) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/57.0.2987.108 baidu.sogo.uc.UCBrowser/11.9.4.974 UWS/2.13.1.48 Mobile Safari/537.36 AliApp(DingTalk/4.5.11) com.alibaba.android.rimet/10487439 Channel/227200 language/zh-CN', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoia3A5Z0FhclJPWHhxdlRxbDRGOE5GVGNscWZFU2o4OGZkaGNnM2pzRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHA6Ly93d3cubG9vdC5saXR0bGVyb290c2luYy5jb20vc2VydmVyLnBocCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1627606607),
('FmPBa8Tw1mLN9K8YjZivFfqBarWGsmV1I3kwTGNC', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibjBCbWZYdkZ1R3A5WUJFdWswUGNiME9TaHl1STNsUFlNckF0MmF5cyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly9sb2NhbGhvc3Q6ODA4MC9nYW1lL3B1YmxpYy9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1624530111),
('gwdDlxwMLI5SX05ni43DaBEdGMo8VEwrYPKT4JiP', NULL, '197.242.157.235', 'Mozilla/5.0 (Linux; Android 7.1.1; Android SDK built for x86 Build/NYC) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.91 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUHVmeGdSN2sxeWJkc2VxMmswRTJ3TWtYbVU3YUZOS2hMNnZYYTR2VyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDY6Imh0dHBzOi8vd3d3Lmxvb3QubGl0dGxlcm9vdHNpbmMuY29tL3NlcnZlci5waHAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627606608),
('ilYAKgNNPygFN4Jhx9WICGO6UAOpqQSeNu9bj76I', NULL, '178.128.140.117', 'Mozilla/5.0 (X11; Linux x86_64; rv:78.0) Gecko/20100101 Firefox/78.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaER3TmxETE5SVjFtOXhTZ2kyVk1Qb1FCNTN6ODZxZklyQVdsaTBKWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly93d3cubG9vdC5saXR0bGVyb290c2luYy5jb20vcHVibGljIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1627606606),
('LDbSliOJLUQnK3MkD5AJlLugsR3rGGp8cLcoxl6S', NULL, '51.75.141.254', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.164 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibE5ZSmxOcEFmZXRXSVR4Um1PZW90STJMOHR6cHpYWDhyU1hmZzc5bCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDY6Imh0dHBzOi8vd3d3Lmxvb3QubGl0dGxlcm9vdHNpbmMuY29tL3NlcnZlci5waHAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627606607),
('mH7qJuNkfBNYNxjKxf67Kx3vA4Jnb5X8WwwJhlYF', NULL, '217.138.255.164', 'Mozilla/5.0 (Linux; U; Android 8.1.0; zh-CN; EML-AL00 Build/HUAWEIEML-AL00) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/57.0.2987.108 baidu.sogo.uc.UCBrowser/11.9.4.974 UWS/2.13.1.48 Mobile Safari/537.36 AliApp(DingTalk/4.5.11) com.alibaba.android.rimet/10487439 Channel/227200 language/zh-CN', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQVhzcGZLRmpaUzYzbEt4b3hsVURVTFlPWmV1TlczaEtGdjNRZnJaaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDY6Imh0dHBzOi8vd3d3Lmxvb3QubGl0dGxlcm9vdHNpbmMuY29tL3NlcnZlci5waHAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627606607),
('RZyfBZkyM2iueE7t57ZTcVdbFo60ORXluUCJFru5', NULL, '62.254.69.180', 'Mozilla/5.0 (Linux; Android 6.0.1; SOV33 Build/35.0.D.0.326) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.91 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRjVORE9oaTJpWHE2bUZRcjQzRGgyUjdiZFNwblFNa1NLcW1ncnJlaCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHA6Ly93d3cubG9vdC5saXR0bGVyb290c2luYy5jb20vc2VydmVyLnBocCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1627606607),
('SJWHeyvCkZf8asI1aHPfSyuZiXPJbj87jSHYT9fC', NULL, '84.17.42.5', 'Mozilla/5.0 (iPhone; CPU iPhone OS 14_4_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib1NrM2lFRU9rM01nMUpUMzgwaU40V1pDdWdYZklHd1NqelJPeDBPNCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly93d3cubG9vdC5saXR0bGVyb290c2luYy5jb20vcHVibGljIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1627606607),
('Sy83V88f8mEf84rgTc2heDKa4aLoDEOYRWkd0VIR', NULL, '197.242.157.235', 'Mozilla/5.0 (Linux; Android 7.1.1; Android SDK built for x86 Build/NYC) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.91 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQkFLcjBQSVNRb1g1c2p3alg5NmRWcmUwVld3dEVHTjF0VlpQajZlSSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHA6Ly93d3cubG9vdC5saXR0bGVyb290c2luYy5jb20vc2VydmVyLnBocCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1627606607),
('UHCoWw1dSDvjyqPss5Zrh8xioJYQ203tRkwfkgOM', NULL, '62.254.69.180', 'Mozilla/5.0 (Linux; Android 6.0.1; SOV33 Build/35.0.D.0.326) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.91 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYWZzdHRmNHN2VlI2Z2x4V2dPR2pOT0xnUWFkWExiTUo3dGp3bzZNQSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDY6Imh0dHBzOi8vd3d3Lmxvb3QubGl0dGxlcm9vdHNpbmMuY29tL3NlcnZlci5waHAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627606607),
('uYgZ4ZM3uMpCkgiHx84jLMxu5vwePzNtE5gBJNmS', NULL, '87.115.231.209', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:89.0) Gecko/20100101 Firefox/89.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidVl6cDJ4MVRJcmczS0RNWGt6Z3VHYjgyVlVvR1YzdE83SDEzcDdtQSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDY6Imh0dHBzOi8vd3d3Lmxvb3QubGl0dGxlcm9vdHNpbmMuY29tL3NlcnZlci5waHAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1627606607),
('Vkjg2z9r2If7oM3niOPOPxx9ZTo8lXFTMiShPPmU', NULL, '72.255.21.233', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidFE0ZFBhd1VKdlRtM2pMWVVrZk10dXVmV2dvRlBNOWRNNFNIa25rMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHBzOi8vbG9vdC5saXR0bGVyb290c2luYy5jb20vcHVibGljIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1624624535),
('vsuXB9QfAnTpfdnKNCkIs71759ZbdO2bm7Q0mcTx', NULL, '87.115.231.209', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:89.0) Gecko/20100101 Firefox/89.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidTVHc1FXZFcyMURMeGJYeGZkdFFuQ1VHY0pOWlozalpUYkhaV25ObiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHA6Ly93d3cubG9vdC5saXR0bGVyb290c2luYy5jb20vc2VydmVyLnBocCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1627606606),
('XMNUZhSrJTSIChtHj27oBZpo7JLSdnYjwnPiO7cw', NULL, '88.107.191.147', 'Mozilla/5.0 (Linux; Android 7.1.1; Android SDK built for x86 Build/NYC) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.91 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQjVQdXlhcjF2Tnp2OVlNNjY1NGNTUU9Ec1pCQ3BSR1A3cGdoR0NRSSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly93d3cubG9vdC5saXR0bGVyb290c2luYy5jb20vcHVibGljIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1627606606),
('YjTfEDXfGoHrnyeX4G1P4lCcQYAnpSGHZzGzGsw7', NULL, '51.75.141.254', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.164 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZ3I5Z3c0MlhwVmJNWTljZjEzVUVlOXhCM2lLN2RXQm9HdDNiOHIwRiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHA6Ly93d3cubG9vdC5saXR0bGVyb290c2luYy5jb20vc2VydmVyLnBocCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1627606607);

-- --------------------------------------------------------

--
-- Table structure for table `totalwithdraw`
--

CREATE TABLE `totalwithdraw` (
  `playerId` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `totalwithdraw`
--

INSERT INTO `totalwithdraw` (`playerId`, `amount`, `time`) VALUES
(1, 130, '2021-09-07 17:12:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `two_factor_secret`, `two_factor_recovery_codes`, `created_at`, `updated_at`) VALUES
(1, 'Numan', 'numan@gmail.com', NULL, '$2y$10$lhnCdu.WLvtIkMYJvp.Dg.LN61.B.hZ3bompvXIpbiZboZJRDljhu', '', NULL, NULL, '2021-06-24 05:47:36', '2021-06-24 05:47:36'),
(2, NULL, 'numan1@gmail.com', NULL, '$2y$10$DRibfyG0X5LfmIJ43p/9AOHBT8PpW0.EnbZmeHTRwHulrpIGpwb6C', '', NULL, NULL, '2021-06-25 17:02:57', '2021-06-25 17:02:57'),
(3, NULL, 'test@123456', NULL, '$2y$10$1X28u4pKpjdpcCRD5az0w.njm14i92.8Va0I0r2PLpbVEIVWVi74q', '', NULL, NULL, '2021-06-25 17:18:05', '2021-06-25 17:18:05'),
(4, NULL, 'abc@gmail.com', NULL, '$2y$10$42gFbPGv1Sx9o8SbKLcZMOUqjc8MBswDDOMLUGKE09zh.mIy4A.wy', '', NULL, NULL, '2021-06-29 20:14:19', '2021-06-29 20:14:19'),
(5, NULL, 'noman@gmail.com', NULL, '$2y$10$FFS5YK6WAmjxVzcSF2t4PuDvGE/LJR3AhYWJPWIiboEJqH/nyPCWy', '', NULL, NULL, '2021-06-29 22:10:33', '2021-06-29 22:10:33'),
(6, NULL, 'noman@test.com', NULL, '$2y$10$cWcZ46yj2ykvlxqP2GXhTOd5CBZPacQMt4GY9/AMlekgudbTY9QWS', '', NULL, NULL, '2021-06-29 22:31:37', '2021-06-29 22:31:37'),
(7, NULL, 'hshyshshsh', NULL, '$2y$10$jGghcT.5GtcGjvwsYR/2NOTgAtRt0r8UN0wGsFjRCs0/5DdIb/Cxy', '', NULL, NULL, '2021-06-30 20:38:06', '2021-06-30 20:38:06'),
(8, NULL, 'start', NULL, '$2y$10$8b8HMAuVyRDGO/hcFK/6U.ynPwN.7JpZDgWEAvEjjUExo.ZPTJLFK', '', NULL, NULL, '2021-06-30 20:39:16', '2021-06-30 20:39:16'),
(9, NULL, 'loot0', NULL, '$2y$10$BeCBQP.34MfujSLChGTcC.UtdAxeCLB8xW5aeRReTJ5PXng1J0qW6', '', NULL, NULL, '2021-07-03 03:29:15', '2021-07-03 03:29:15'),
(10, NULL, 'loot', NULL, '$2y$10$CaDHWUiMvm6vo8/7opfKbOJJ88ciZsNbuu19wgpverG3wpHLGFOry', '', NULL, NULL, '2021-07-03 03:53:34', '2021-07-03 03:53:34'),
(11, NULL, 'FDSGDS@FPS.COM', NULL, '$2y$10$cKl7SVEjTwZ4lAFqjK/7Ruub.EUv9S4dbPO//HOH9tDX.qGWJUNym', '', NULL, NULL, '2021-07-09 20:45:33', '2021-07-09 20:45:33'),
(12, NULL, 'THGDFJN@MNL.COM', NULL, '$2y$10$PzE.81.NG6CaIGLrc9Fh5.H5g2pb27yThiN..jI12bUc1ridJH62a', '', NULL, NULL, '2021-07-09 20:45:55', '2021-07-09 20:45:55'),
(13, NULL, 'hbfgh@mnz.com', NULL, '$2y$10$mEPbYzEX6S7Mhuy3ONhS7u9b9AQoh//XOXuq4Tu/PRtmuZ8bF4EJe', '', NULL, NULL, '2021-07-28 16:31:05', '2021-07-28 16:31:05'),
(14, NULL, 'gdbghas@eml.com', NULL, '$2y$10$eYPPgf/BuHxrRauznbMq2ec9NSEs7qsLj4zEoyTkrk5.5BHW.iaxO', '', NULL, NULL, '2021-07-28 17:18:35', '2021-07-28 17:18:35'),
(15, NULL, 'dasfasd@nmx.com', NULL, '$2y$10$KgRt0wlmatUWhSS7sq/4UOBsCa90E0tnQSZHzltvVughMuk0AomNq', '', NULL, NULL, '2021-07-28 18:31:16', '2021-07-28 18:31:16'),
(16, NULL, 'hsijs@jsjw.com', NULL, '$2y$10$oJqJZTLw0ZMjtTIW1EpCeu6p5ukVMuy.2i7dyiCOjcMD5hu3yaIXO', '', NULL, NULL, '2021-07-28 19:12:28', '2021-07-28 19:12:28'),
(17, NULL, 'imran@hotmail.com', NULL, '$2y$10$Av4QhOHtXpQGaENew7.omOplQPt94xDvuiVa7kUuG99rqkFB/Q.4.', '', NULL, NULL, '2021-07-28 21:31:02', '2021-07-28 21:31:02'),
(18, NULL, 'mvpappsllc@gmail.com', NULL, '$2y$10$WU/IND529XAi9Pvi/yqbHOACBEfiojk8/p2K1ZVlGA3a6M.Kqq.UC', '', NULL, NULL, '2021-07-29 22:53:52', '2021-07-29 22:53:52'),
(19, NULL, 'apetty1980@yahoo.com', NULL, '$2y$10$MzKhFeUBYDmApsncyTloJesLg1lKOHgUfKs5hJbTahmEH4L0l083a', '', NULL, NULL, '2021-07-29 23:41:42', '2021-07-29 23:41:42'),
(20, NULL, 'rajathens@gmail.com', NULL, '$2y$10$ynXQzUA8GpVyZCK3a7nPpO1QupBhbUNH2WF9Q.Zwg1rlPYoOB7UEa', '', NULL, NULL, '2021-07-30 02:28:26', '2021-07-30 02:28:26'),
(21, NULL, 'Colepetty@rocketmail', NULL, '$2y$10$sulUYONS2XnJ97JelHcshesAxBFzXqEyHwyt8HQ7jX9s5bholkYnS', '', NULL, NULL, '2021-07-30 04:45:09', '2021-07-30 04:45:09'),
(22, NULL, 'nazimalipucit@gmail.', NULL, '$2y$10$fJyFNGKDNNkoc/L5RZmI1OTh.50FVgyfPC1z6WalddydWFxWINhe2', '', NULL, NULL, '2021-07-30 13:48:10', '2021-07-30 13:48:10'),
(23, NULL, 'Raazia@yopmail.com', NULL, '$2y$10$NCNiX/ASAVs4nOvgsM1/K.oM.ivmOl14BxgzHfQiwbriZzWpB8BlK', '', NULL, NULL, '2021-07-30 15:06:34', '2021-07-30 15:06:34'),
(24, NULL, 'sikandar.zamstudios@', NULL, '$2y$10$4Hp1b2p8ISAzZx/F.ZffCOrRubqM3ei94F6jiPFCcYUEMS4OTQYNu', '', NULL, NULL, '2021-07-30 18:08:29', '2021-07-30 18:08:29'),
(25, NULL, 'dfsdgfsd@dfx.com', NULL, '$2y$10$xS6XdUtLjTx05GhylRhrXu9oyuXWkyF24jW7XrttARHoR9n.MybNi', '', NULL, NULL, '2021-08-06 19:04:11', '2021-08-06 19:04:11'),
(26, NULL, 'dsgfdsg@mnz.com', NULL, '$2y$10$l/VLgCGwWTuRxmjxcuPBtuLz3o2pNM0a3bdNh.LFJ09qHrL8LQ1GG', '', NULL, NULL, '2021-08-06 19:04:25', '2021-08-06 19:04:25'),
(27, NULL, 'dgdfgh@kml.com', NULL, '$2y$10$f.dBtCrIb4w/dsh5JCAYZepo4VMItfQUWTk1B5BwQrKXUE2M5EBVq', '', NULL, NULL, '2021-08-06 20:12:38', '2021-08-06 20:12:38'),
(28, NULL, 'dasfdasf@nmz.com', NULL, '$2y$10$xwdWlLqang5q3JoFz8Xjtu6o.A09wmODbhkKzQenw0qHC1h5.onwG', '', NULL, NULL, '2021-08-06 20:16:19', '2021-08-06 20:16:19'),
(29, NULL, 'werwerwetr@fgc.cok', NULL, '$2y$10$dSLMGpIxvKhKMRPXx8jFG.kKTLg9r35dV4wc7tGTtFdNakRwY8lZi', '', NULL, NULL, '2021-08-11 17:54:33', '2021-08-11 17:54:33'),
(30, NULL, 'qasim@gmail.com', NULL, '$2y$10$xI2hZJ8/bdOeuJNwnYHy6uob0RIAhpn8xb50V2SdjGqRgX4f1j.q.', '', NULL, NULL, '2021-08-13 20:12:08', '2021-08-13 20:12:08'),
(31, NULL, 'imranalis@gmail.com', NULL, '$2y$10$4t.Y4PW8lP3dzJsjCufe4.4TEiX/0tf/v9Lxznv95814UgRoLG4r2', '', NULL, NULL, '2021-08-16 23:34:25', '2021-08-16 23:34:25'),
(32, NULL, 'rose@yopmail.com', NULL, '$2y$10$/heekWls.IXnCyxiL15Z..8wueTTYZ5rYhmxir0554TVRKVaNQX3e', '', NULL, NULL, '2021-08-17 17:36:31', '2021-08-17 17:36:31'),
(33, 'admin', 'admin_dashboard', NULL, '$2y$10$jb4ilB4srpVEiKey2d4pduJ.aAmxLm5RZplMfCNfStXdlmdIwZmZW', '', NULL, NULL, NULL, NULL),
(36, 'ahmad', 'ahmad@gmail.com', NULL, '$2y$10$EZQ0IBvOCuF4CHchuPvv2epEvjQPtnxZqdsU7mjHjGH.qDQbVi/zK', '030012212', NULL, NULL, NULL, NULL),
(39, 'ali', 'ali@gmail.com', NULL, '$2y$10$2hZtR/HQav04yXHWrbHUlek5kCd1kJzEPGq9Pjwy9w/dsMtNkBcf.', '03001221222', NULL, NULL, NULL, NULL),
(41, 'ali', 'asad@gmail.com', NULL, '$2y$10$jbSsj65MsIR6wBChfC5z6eslcHb485PI.bCrKPPFKvWqxp8Dt3C1i', '03001221222', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `verificationotp`
--

CREATE TABLE `verificationotp` (
  `otp` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `verificationotp`
--

INSERT INTO `verificationotp` (`otp`, `email`) VALUES
(420976, 'asad@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loginlogs`
--
ALTER TABLE `loginlogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`playerId`);

--
-- Indexes for table `resetpassword`
--
ALTER TABLE `resetpassword`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loginlogs`
--
ALTER TABLE `loginlogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `resetpassword`
--
ALTER TABLE `resetpassword`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
