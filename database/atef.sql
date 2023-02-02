-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2023 at 01:04 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atef`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_doctor` int(11) NOT NULL DEFAULT 1,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_national_card` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_job_card` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `is_doctor`, `image`, `phone_number`, `address`, `created_at`, `updated_at`, `id_national_card`, `id_job_card`) VALUES
(1, 'Anas Rabea', 'anas.admin@gmail.com', '$2y$10$lgUr65D9xnBxFemjfKNmbe4KCeXMsG4NaMD/3wuEsnWWx9TyHEBJG', 2, '', '01152067272', '6 October', '2022-12-15 16:33:45', '2022-12-15 16:33:45', 'Zcin1675337654.jpeg', 'Zcin1675337654.jpeg'),
(2, 'Mohamed Atef Admin', 'atef.admin@gmail.com', '$2y$10$lgUr65D9xnBxFemjfKNmbe4KCeXMsG4NaMD/3wuEsnWWx9TyHEBJG', 2, '', '01152067273', 'بلاد ما وراء الدائري', '2022-12-15 16:35:06', '2022-12-15 16:35:06', 'Zcin1675337654.jpeg', 'Zcin1675337654.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_national_card` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_job_card` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `created_at`, `updated_at`, `name`, `email`, `password`, `phone_number`, `address`, `image`, `id_national_card`, `id_job_card`) VALUES
(1, '2022-12-15 14:33:25', '2022-12-15 14:33:25', 'Mohamed Atef', 'atef@gmail.com', '$2y$10$GJGCLi2UEVR2.HfcQnEUo.uQOXMsVO1WKUVahUgAonA1gzdBigW8W', '01152067272', 'بلاد ما وراء الدائري', 'MKlx1671122005.jpg', 'gVzn1671122005.jpg', 'dFKD1671122005.jpg'),
(2, '2022-12-18 08:41:08', '2022-12-18 08:41:08', 'Mahmoud Khaled', 'bowi@mailinator.com', '$2y$10$3Z/sEbokSEqBxXA4c65goOPWYsPuwzajpmkUt8EAXxOks8J0aejwC', '01152067278', 'hiwefuti@mailinator.com', 'dULp1671360068.jpg', 'QuJY1671360068.png', 'KTkl1671360068.jpg'),
(3, '2023-02-02 09:41:50', NULL, 'Kristina Denesik DVM', 'dorian20@nolan.com', '$2y$10$VSzsbLxs7gIIu4HJw7a21eGHsJNBP9X9swX0Ggy52fLKUXYwlyV0a', '01139540953', 'New Raul', 'cfGu1675328470.jpg', 'Zcin1675337654.jpeg', 'Zcin1675337654.jpeg'),
(4, '2023-02-02 09:41:51', NULL, 'Prof. Collin Halvorson DVM', 'jaylan14@zboncak.com', '$2y$10$Jlut2OtK0.rqHZiG4zXZZuhm.R0IM52.2nY/MKXtL9S5Sm/xEpYiG', '01178300739', 'Lake Kendrafort', 'cfGu1675328470.jpg', 'Zcin1675337654.jpeg', 'Zcin1675337654.jpeg'),
(5, '2023-02-02 09:41:51', NULL, 'Dr. Ari D\'Amore DDS', 'bahringer.cathryn@reichert.net', '$2y$10$Rilbr5jabwPZGWsy1L9qD.WqQhUDGF6oFfLRBP55NcCGz/J7eI7VW', '01137577905', 'Alyshamouth', 'cfGu1675328470.jpg', 'Zcin1675337654.jpeg', 'Zcin1675337654.jpeg'),
(6, '2023-02-02 09:41:51', NULL, 'Lurline Durgan', 'hudson.lafayette@wiza.com', '$2y$10$VX6WBDbe4Ld4TfOx3C8Soei0oLI7I4AKCLbHuG59NTf6ZPU8MNEsq', '01169894675', 'Jazmintown', 'cfGu1675328470.jpg', 'Zcin1675337654.jpeg', 'Zcin1675337654.jpeg'),
(7, '2023-02-02 09:41:51', NULL, 'Christine Champlin', 'msimonis@gmail.com', '$2y$10$D/.ddI88Ak8Sl3.bmJi3tutZqtF32mWUByHDNNSfZFbA3pTbdJfZm', '01130217123', 'Schoenburgh', 'cfGu1675328470.jpg', 'Zcin1675337654.jpeg', 'Zcin1675337654.jpeg'),
(8, '2023-02-02 09:41:51', NULL, 'Mrs. Gabriella Heidenreich I', 'olson.sylvester@hotmail.com', '$2y$10$8D2yeWFGhBPPZ5fCd/3y.Od5W19fgSXvrwADSJXsnoBzyftlt9dVa', '01161979613', 'Macejkovicmouth', 'cfGu1675328470.jpg', 'Zcin1675337654.jpeg', 'Zcin1675337654.jpeg'),
(9, '2023-02-02 09:41:51', NULL, 'Vernice Reilly III', 'opal.hahn@yahoo.com', '$2y$10$ub8XTCnsdJ697IIR3LOTOOol1KEj7l54lubEUBGHDzDomBRwM536.', '01199231870', 'East Haven', 'cfGu1675328470.jpg', 'Zcin1675337654.jpeg', 'Zcin1675337654.jpeg'),
(10, '2023-02-02 09:41:51', NULL, 'Hilma Labadie', 'damore.karen@gerlach.com', '$2y$10$2yPTQ2gQBefum8oj65SxxuLbTVI4WXH4TAJvHZS3adUHJNPO9JqB2', '01140285859', 'South Dasia', 'cfGu1675328470.jpg', 'Zcin1675337654.jpeg', 'Zcin1675337654.jpeg'),
(11, '2023-02-02 09:41:51', NULL, 'Braeden Lindgren', 'yhuels@gmail.com', '$2y$10$Ejesp4jhNyNiKX.Sz6L0O.KscuNziC.sMpibyJK/S3q0P2BSTCqAO', '01154964238', 'North Claudmouth', 'cfGu1675328470.jpg', 'Zcin1675337654.jpeg', 'Zcin1675337654.jpeg'),
(12, '2023-02-02 09:41:51', NULL, 'Dr. Arvilla O\'Keefe', 'wbahringer@prohaska.com', '$2y$10$bK7oz9ALrXIgw1Jx33gbVuNGMDsh.es2apc0G/sHG8VPdo9JqAmkm', '01167853973', 'Doyletown', 'cfGu1675328470.jpg', 'Zcin1675337654.jpeg', 'Zcin1675337654.jpeg'),
(13, '2023-02-02 09:41:51', NULL, 'Filiberto Stehr', 'francisca.steuber@johns.com', '$2y$10$RqkhfF9/2ifXldFRdW6CN.3U74qV.Ifph.J/RRkAVl1vmK6/HOLMS', '01120644127', 'Schillermouth', 'cfGu1675328470.jpg', 'Zcin1675337654.jpeg', 'Zcin1675337654.jpeg'),
(14, '2023-02-02 09:41:52', NULL, 'Jace Turner', 'hoeger.gudrun@gmail.com', '$2y$10$KqF4UEoqZIEo0OVzibqT6ekLZtP6QgdSh4TQYImmfLVFo/IGZKn2q', '01152073628', 'Kassulkefort', 'cfGu1675328470.jpg', 'Zcin1675337654.jpeg', 'Zcin1675337654.jpeg'),
(15, '2023-02-02 09:41:52', NULL, 'Catherine Homenick', 'ssanford@gmail.com', '$2y$10$5PUZ2XHhs9FLfK2ULyxnWe7xLgBoc500lyLf0IJnik1IjjIpHoqR.', '01134197367', 'South Eda', 'cfGu1675328470.jpg', 'Zcin1675337654.jpeg', 'Zcin1675337654.jpeg'),
(16, '2023-02-02 09:41:52', NULL, 'Melyna Greenholt', 'austin.ferry@little.com', '$2y$10$IF/p4FXbHfP/YoMD/Z3jf.kIFHa9JC0YfjbTyLnHSKl.3Z5cYuBfC', '01159000658', 'Ebbamouth', 'cfGu1675328470.jpg', 'Zcin1675337654.jpeg', 'Zcin1675337654.jpeg'),
(17, '2023-02-02 09:41:52', NULL, 'Dr. Noelia Weimann PhD', 'dayna98@hotmail.com', '$2y$10$tuZfEl8R4l12FClqMl2xjO4VH0x/XfH.G4BUH7fOHhqFewE8sO3p.', '01115605930', 'Garrisonhaven', 'cfGu1675328470.jpg', 'Zcin1675337654.jpeg', 'Zcin1675337654.jpeg'),
(18, '2023-02-02 09:41:52', NULL, 'Mrs. Anabelle Grant', 'dalton60@stroman.com', '$2y$10$G3p41UFeR2V66/bhOiL4..6l4SBKBlkO.lS50TtF/BEt.WEfx8LeW', '01196872931', 'Lake Hortense', 'cfGu1675328470.jpg', 'Zcin1675337654.jpeg', 'Zcin1675337654.jpeg'),
(19, '2023-02-02 09:41:52', NULL, 'Mrs. Wilhelmine Mertz PhD', 'conrad93@gmail.com', '$2y$10$VRglFPDvfsmbtIStCM3Bz.dmXeCKKygFhvMglSvASFduxBj9HbDEq', '01128885114', 'West Jedediah', 'cfGu1675328470.jpg', 'Zcin1675337654.jpeg', 'Zcin1675337654.jpeg'),
(20, '2023-02-02 09:41:52', NULL, 'Olaf Cronin', 'kkuhic@mraz.com', '$2y$10$lSCaJWMktu6.YqAhq3pNQO80xZnnJ89pVInlOiGqjn.ItrpliBEbC', '01187691138', 'Laronmouth', 'cfGu1675328470.jpg', 'Zcin1675337654.jpeg', 'Zcin1675337654.jpeg'),
(21, '2023-02-02 09:41:52', NULL, 'Cornell Pouros', 'edgar.rohan@pfeffer.com', '$2y$10$Bf9PJnCssenyLRHrEBVv9Ol.YEOieCnfNdVANTafWUskR2hC.Yp2O', '01144044437', 'Vandervortborough', 'cfGu1675328470.jpg', 'Zcin1675337654.jpeg', 'Zcin1675337654.jpeg'),
(22, '2023-02-02 09:41:52', NULL, 'Ms. Kaci Hammes', 'wyman.nya@strosin.biz', '$2y$10$VJVkaIPYGx6tXC8dt2MpOOiLGB05nkOoL74OaFEIWwX9E4lglRrrW', '01191658899', 'Lake Raphael', 'cfGu1675328470.jpg', 'Zcin1675337654.jpeg', 'Zcin1675337654.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_19_152220_create_doctors_table', 1),
(6, '2022_11_19_153008_create_admins_table', 1),
(7, '2022_11_20_193112_add_columns_to_users', 1),
(8, '2022_11_20_202301_add_doctor_id_to_users', 1),
(9, '2022_11_21_144301_add_columns_to_doctor', 1),
(10, '2022_11_21_144951_drop_columns_to_doctors', 1),
(11, '2022_11_24_082316_add_columns_to_admins', 1),
(12, '2023_02_02_095558_add_column_to_users', 2),
(13, '2023_02_02_115655_edit_column_to_users', 3),
(14, '2023_02_02_115751_edit_column_doctor_id_to_users', 4);

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
  `id` int(10) UNSIGNED NOT NULL,
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
(1, 'App\\Models\\User', 2, 'authToken', 'd3af481ebd1883ad867aba71fbfe6c19eecf9c74f381e181d435fd90ec7a7fb2', '[\"*\"]', NULL, '2023-02-02 07:37:52', '2023-02-02 07:37:52'),
(2, 'App\\Models\\User', 2, 'authToken', 'bf94138049ec1580301ae9df201a70dd1226321d602513e58550b0754756a9ab', '[\"*\"]', '2023-02-02 08:23:52', '2023-02-02 07:37:54', '2023-02-02 08:23:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `psa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medical_history` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doctor_id` int(10) UNSIGNED DEFAULT NULL,
  `psa_result` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone_number`, `address`, `image`, `remember_token`, `created_at`, `updated_at`, `gender`, `age`, `psa`, `medical_history`, `doctor_id`, `psa_result`) VALUES
(2, 'ahmed abdelrhim', 'Abdelrhim.User@Gmail.Com', NULL, '$2y$10$R83CoywbQz4BS2Ef/omnuu06aOmwrU0HqwNFR4nP2zAyLJUm3YfrW', '01152067271', NULL, 'cfGu1675328470.jpg', NULL, '2023-02-02 07:01:11', '2023-02-02 09:58:56', '1', 23, 'QOsN1675328470.png', 'Et excepturi deserunt inventore. Consequatur esse officiis vitae sunt corporis sed numquam.', 6, '1'),
(3, 'Jamarcus Kozey', 'ibogan@kerluke.com', NULL, '$2y$10$7WJOErYUsRFPb4ObpEGBm.BuSmUXTR3xShlhTn74yhabKt0DHblgm', '01138534271', 'Sophiaport', 'cfGu1675328470.jpg', NULL, '2023-02-02 09:20:30', '2023-02-02 09:58:56', '0', 65, 'QOsN1675328470.png', 'Non ut perferendis dignissimos iure. Tempore cupiditate nam voluptas pariatur voluptas. A cupiditate et aut tempore in non exercitationem.', 4, NULL),
(4, 'Gay Harris PhD', 'emanuel.bartell@cole.com', NULL, '$2y$10$3knrmS6dqQTQXSfQ1w28BuwKLidYQxGORFPpyyR7qcJaGdiCf68W6', '01115025335', 'East Angie', 'cfGu1675328470.jpg', NULL, '2023-02-02 09:20:30', '2023-02-02 09:58:56', '0', 34, 'QOsN1675328470.png', 'Blanditiis beatae ex vitae et odio consequatur quo non. Qui accusamus quidem beatae provident. Voluptatibus ipsum ut voluptate doloribus quia nihil. Nulla possimus perspiciatis aperiam.', 4, NULL),
(5, 'Hillary Rodriguez', 'vergie.runolfsdottir@daugherty.com', NULL, '$2y$10$NhrnXmGexPYL4WdL6Qe1v.pcklWK/d.s12O7FahLtFst1I8ZSvlQy', '01186197546', 'Kautzershire', 'cfGu1675328470.jpg', NULL, '2023-02-02 09:20:30', '2023-02-02 09:58:56', '0', 27, 'QOsN1675328470.png', 'Fuga aperiam sequi aspernatur minima praesentium. Consequatur ut quia non in voluptate repellendus. Dolorum quo sed dignissimos eligendi.', 2, NULL),
(6, 'Haley Wisozk', 'koepp.ahmed@kreiger.com', NULL, '$2y$10$mj/AMAYVs5safA.EkkL.jOrFKsQgkPI28IVgq4ZGbZ5h7bM9nW8mS', '01158675424', 'Camilleborough', 'cfGu1675328470.jpg', NULL, '2023-02-02 09:20:30', '2023-02-02 09:58:56', '0', 21, 'QOsN1675328470.png', 'Consequatur maiores saepe repellendus. Laborum totam odit quia qui non rerum aut. Illo rerum dolores qui rem nesciunt eum exercitationem.', 5, NULL),
(7, 'Henri Brakus', 'feeney.jazmyn@schmeler.com', NULL, '$2y$10$5IptFINQ.oxH3YmLR5D3bupqbKUfW/lVjErd0X3dWqnMtpZ.uAbV6', '01183666035', 'Kendallview', 'cfGu1675328470.jpg', NULL, '2023-02-02 09:20:30', '2023-02-02 09:58:56', '1', 71, 'QOsN1675328470.png', 'Est modi deleniti possimus doloremque ex est. Labore dolore nam sed illum quos similique similique in. Cumque qui a sapiente ipsam. Possimus id voluptas ut non.', 8, NULL),
(8, 'Kale Gleason', 'maverick.herzog@hotmail.com', NULL, '$2y$10$dZrrwuqRT6gu7j3W4o.0FeJWjqo4VcH2v.zYS8uPLGTSuZJDpqvqK', '01198333801', 'Andersonhaven', 'cfGu1675328470.jpg', NULL, '2023-02-02 09:20:30', '2023-02-02 09:58:56', '0', 10, 'QOsN1675328470.png', 'Fuga veniam distinctio nulla culpa nihil dolores et omnis. Quia nam cupiditate voluptatem ad iure. Dolorem rem reprehenderit quaerat est voluptatem alias quae voluptatibus.', 10, NULL),
(9, 'Keara Buckridge', 'reymundo.keebler@hotmail.com', NULL, '$2y$10$5c3ni/w5wAxu0e79wIllaeUAoTzqsgQOK6X4BHUWNvNRcZOEM0brC', '01126829433', 'Haleyhaven', 'cfGu1675328470.jpg', NULL, '2023-02-02 09:20:30', '2023-02-02 09:58:56', '1', 35, 'QOsN1675328470.png', 'Nesciunt delectus totam eaque cumque rerum cum. Ex animi qui ipsa est labore. Vel facilis error ex tempora dicta.', 6, NULL),
(10, 'Pietro Haag', 'gaetano39@yahoo.com', NULL, '$2y$10$AkgbiAj4I93Q9kN1LBhs2eSbTKgzfomIc5j/hD5dSkhtZLLlshnoG', '01195676012', 'Anahiville', 'cfGu1675328470.jpg', NULL, '2023-02-02 09:20:30', '2023-02-02 09:58:56', '1', 3, 'QOsN1675328470.png', 'Vel cumque sunt architecto et voluptatem in est. Omnis earum est beatae temporibus facere commodi aut. Aliquid rerum modi saepe occaecati qui vitae.', 5, NULL),
(11, 'Alia Goyette', 'louisa45@yahoo.com', NULL, '$2y$10$s71PPhIc1PwScGhFMuI9Gua089AcDemvqHCYYd0hwnVcZgHcv3iC6', '01196495911', 'Parkerside', 'cfGu1675328470.jpg', NULL, '2023-02-02 09:20:31', '2023-02-02 09:58:56', '1', 25, 'QOsN1675328470.png', 'Amet nesciunt atque quas nesciunt suscipit est excepturi voluptas. Repellendus eum provident cumque aut et. Aperiam laudantium magnam enim.', 4, NULL),
(12, 'Prof. Art Schneider', 'wgreenfelder@hotmail.com', NULL, '$2y$10$i0MROrgyL5.qoTpgncbIQ.Ke.DtPVkTCzr5crnuM2vJ0JaUQXY.ba', '01195671324', 'Port Dayana', 'cfGu1675328470.jpg', NULL, '2023-02-02 09:20:31', '2023-02-02 09:58:56', '0', 84, 'QOsN1675328470.png', 'Ab ea cupiditate ratione et rerum praesentium totam. Recusandae doloribus qui rerum magni facilis minus enim. Aut qui quis voluptate.', 4, NULL),
(13, 'Ms. Marta Collier', 'orland51@yahoo.com', NULL, '$2y$10$8S6S7hxyBAVNqDX3xtex3OLWRToyihH.7di02xlQNoYg2Zoq0M7ia', '01193018227', 'New Leonie', 'cfGu1675328470.jpg', NULL, '2023-02-02 09:20:31', '2023-02-02 09:58:56', '1', 79, 'QOsN1675328470.png', 'Cumque consectetur repellat laudantium voluptatem cumque. Saepe reiciendis unde doloribus velit modi et et. Qui rerum rerum voluptatem repellat. In tempora nam atque ratione.', 5, NULL),
(14, 'Prof. Adell Aufderhar', 'eveum@harvey.com', NULL, '$2y$10$xm7YuFT4wOVtt8zGefr9Ye.hh0fJnZcrPkc7GCUlyiBle6O4fzx.m', '01149183951', 'Joannyton', 'cfGu1675328470.jpg', NULL, '2023-02-02 09:20:31', '2023-02-02 09:58:56', '1', 67, 'QOsN1675328470.png', 'Quia omnis quae consectetur porro fugit culpa rerum. Beatae perspiciatis molestiae dolore nam voluptatem. Fuga voluptates autem odio.', 6, NULL),
(15, 'Aliyah Thompson', 'baumbach.jared@zieme.info', NULL, '$2y$10$FDYlh3nCGXra9.qriEKqdelxiugUEnqzk1fs9TWxTb5UcfoCJiKVi', '01195360068', 'Schadenbury', 'cfGu1675328470.jpg', NULL, '2023-02-02 09:20:31', '2023-02-02 09:58:56', '0', 33, 'QOsN1675328470.png', 'Dicta unde cupiditate facere quos. Vel expedita quis magnam nisi dolorem velit quia. Odio ipsam error in autem natus hic debitis. Numquam voluptates cum laboriosam rerum in.', 7, NULL),
(16, 'Merl Harris', 'arden56@yahoo.com', NULL, '$2y$10$/4wmPjpvQ5c.J0kfrr.t1.G0z5ggSFoLvw0kTpsXLxjVyRS9w1UiK', '01192995879', 'Port Pansyview', 'cfGu1675328470.jpg', NULL, '2023-02-02 09:20:31', '2023-02-02 09:58:56', '0', 13, 'QOsN1675328470.png', 'Ea ut et adipisci dolores. Reiciendis ut est modi. At sint molestiae corrupti inventore consequatur asperiores.', 6, NULL),
(17, 'Dr. Camren O\'Hara', 'jewel42@hotmail.com', NULL, '$2y$10$y9AuK2tly67O8o2SEy34l.B29liuPfnzCCFFtYcsVfiiiEA5zZgCu', '01169299603', 'East Eugeniaport', 'cfGu1675328470.jpg', NULL, '2023-02-02 09:20:31', '2023-02-02 09:58:56', '1', 65, 'QOsN1675328470.png', 'Praesentium reiciendis eius temporibus et est illum. Ut repellat rerum velit quae dolores.', 9, NULL),
(18, 'Meta Hammes', 'freddy44@miller.org', NULL, '$2y$10$.hWwNgY6RQLhs7uJyV0il.p391arZbF5tdXZlkp.wUPskiPkpfHIG', '01187487577', 'West Rebeccaview', 'cfGu1675328470.jpg', NULL, '2023-02-02 09:20:31', '2023-02-02 09:58:56', '1', 52, 'QOsN1675328470.png', 'Quae laboriosam dolorum ab aut et beatae animi. Illum eos neque voluptates repudiandae.', 6, NULL),
(19, 'Henry Cassin', 'hodkiewicz.natalie@roob.biz', NULL, '$2y$10$0avA3zJ7j5qKOjI/hk3vrOJQ4a4BXtlEigXzYLUvijjiVCruvTt.2', '01161159199', 'Eugenechester', 'cfGu1675328470.jpg', NULL, '2023-02-02 09:20:31', '2023-02-02 09:58:56', '0', 7, 'QOsN1675328470.png', 'Omnis quas non tempora reiciendis odit. Reprehenderit modi velit molestias qui dicta est.', 10, NULL),
(20, 'Mabel Feest', 'tressie64@gmail.com', NULL, '$2y$10$uY18FCF8hiXsq3OPq0.T.u1f5Uak8glFnXa5vQtwT3gBGxG5zHDBm', '01131345605', 'West Rosella', 'cfGu1675328470.jpg', NULL, '2023-02-02 09:20:31', '2023-02-02 09:58:56', '1', 33, 'QOsN1675328470.png', 'Ipsa harum modi in aperiam sed. Ipsam error velit mollitia in libero delectus. Accusantium est pariatur quam amet. Eos earum voluptatem consequatur molestiae et sint.', 9, NULL),
(21, 'Jovan Marquardt', 'barton.ottilie@stamm.com', NULL, '$2y$10$/3PGmNBDXh0M2KGJYfvtf.bzxAIZ89DxpqP3GGn2hLfvTUXnLxfU2', '01172659056', 'Marquardtborough', 'cfGu1675328470.jpg', NULL, '2023-02-02 09:20:31', '2023-02-02 09:58:56', '0', 40, 'QOsN1675328470.png', 'Aut in quia recusandae optio. Quidem officia deserunt omnis aliquid. Optio est quas cum optio.', 4, NULL),
(22, 'Libby Purdy', 'jacklyn.krajcik@kohler.com', NULL, '$2y$10$yXPROXYTAw9UYXWBfswtau5TCwVq1ZhyD/pROO6w4g5OLfFsp/V0C', '01151717533', 'New Helenaton', 'cfGu1675328470.jpg', NULL, '2023-02-02 09:20:32', '2023-02-02 09:58:56', '1', 62, 'QOsN1675328470.png', 'Sunt impedit eum cupiditate doloribus accusamus excepturi accusamus. Dolorem ea ut odio voluptatem. Soluta non corrupti reprehenderit exercitationem. Soluta ut consequatur enim officiis ut.', 10, NULL),
(23, 'Ardith Leffler', 'chris19@yahoo.com', NULL, '$2y$10$kgKIqc7ToHXwmW8dcLtx5ufamdjuke6GEtLo1J6ivTNF9yN.WuAPW', '01128877706', 'Melissaview', 'cfGu1675328470.jpg', NULL, '2023-02-02 09:20:32', '2023-02-02 09:58:56', '0', 65, 'QOsN1675328470.png', 'Nisi illo ut sequi eum. Tempore quo quo nostrum. Eius voluptas iste expedita dolorem. Dicta hic illum repudiandae aliquam temporibus eius blanditiis deleniti.', 6, NULL),
(24, 'Ms. Clotilde Quigley', 'schmeler.bradly@waelchi.com', NULL, '$2y$10$mr.5hiC4MXGDLv1kiwgsVOaPfAdbo4GatYIcPDQOahu0fHqXnCumK', '01130654286', 'Lake Kathleenstad', 'cfGu1675328470.jpg', NULL, '2023-02-02 09:20:32', '2023-02-02 09:58:56', '0', 34, 'QOsN1675328470.png', 'Et sed rerum eligendi vitae aut. Modi optio sit adipisci voluptatem officia. Inventore amet ea laborum vitae cumque eum atque et. Quod reiciendis omnis eum fuga ab.', 3, NULL),
(25, 'Jackson Denesik', 'torphy.michael@pollich.com', NULL, '$2y$10$vRdmCe3FR9rtTFQ8aZ2zquXBLdL/cZHpsdHrwtkfMknjKUwFaeWOy', '01117767339', 'Reynoldschester', 'cfGu1675328470.jpg', NULL, '2023-02-02 09:20:32', '2023-02-02 09:58:56', '1', 20, 'QOsN1675328470.png', 'Quia sunt fugiat nobis blanditiis nostrum debitis qui. Quis facilis et illo et. Doloremque non et maiores quo rerum provident. Nam dolorem recusandae non.', 7, NULL),
(26, 'Ari Carter', 'yfay@kertzmann.com', NULL, '$2y$10$Df2YMprsDOXUaI9fdZx20uIq73/zVKL0wDcUjlIZtTpuv2LBH4Nb.', '01198111043', 'Feestfort', 'cfGu1675328470.jpg', NULL, '2023-02-02 09:20:32', '2023-02-02 09:26:57', '0', 42, 'QOsN1675328470.png', 'Molestiae dicta molestiae dolor maiores. Sit sed quos sit rerum. Nobis et sapiente quia omnis. Et itaque sapiente quo sunt repudiandae.', 2, NULL),
(27, 'Dr. Gabrielle Willms', 'sawayn.willis@paucek.net', NULL, '$2y$10$r0QN9FZYiaY4z.c6B76LVODtQgJCoBhza0.m0A5fZckoY3L2Kac1G', '01183032609', 'North Brandtstad', 'cfGu1675328470.jpg', NULL, '2023-02-02 09:20:32', '2023-02-02 09:58:56', '1', 79, 'QOsN1675328470.png', 'Et quis labore ipsa. Qui fugiat sit suscipit optio rerum dolorem labore. Quia in aut et voluptatem officiis.', 8, NULL),
(28, 'Scotty Littel', 'savannah38@dubuque.org', NULL, '$2y$10$AwYOBXGEQ70KZACLWPLfJO2tvn9Qb2lfNORXKheMwiS8ZfDJZTYXS', '01177392510', 'Lake Romanshire', 'cfGu1675328470.jpg', NULL, '2023-02-02 09:20:32', '2023-02-02 09:58:56', '0', 96, 'QOsN1675328470.png', 'Ut quia alias in delectus temporibus. Reprehenderit vel possimus doloribus ut. Officiis magnam repellat omnis aut. Odio at qui quos quis vitae.', 8, NULL),
(29, 'Stefan Marvin', 'carissa.keeling@hotmail.com', NULL, '$2y$10$kaSpQQ2X6Vobm7RGDQIbxe0VqbRas8iqyj2x55VBoroJW4xbQ0pd.', '01154440846', 'East Georgette', 'cfGu1675328470.jpg', NULL, '2023-02-02 09:20:32', '2023-02-02 09:58:56', '0', 73, 'QOsN1675328470.png', 'Perspiciatis saepe rem maiores incidunt quam. Voluptatem consectetur aliquid sit recusandae esse. Et et ab fugiat sapiente omnis numquam.', 8, NULL),
(30, 'Wiley Kris', 'kaylah10@yahoo.com', NULL, '$2y$10$y4gvsyD8e6o/09nTme7wYesJ8k8.4JDk.M0I7RP53v1ntGtsR30Va', '01178135048', 'North Jarredchester', 'cfGu1675328470.jpg', NULL, '2023-02-02 09:20:32', '2023-02-02 09:58:56', '0', 24, 'QOsN1675328470.png', 'Nam eveniet nulla et. Nesciunt maiores saepe maxime quia amet. Nobis et ratione aut commodi. Odio perferendis officiis sed qui sit. Illo eum beatae optio natus aut sunt nostrum.', 5, NULL),
(31, 'Kelsie Bernhard', 'qgerlach@gmail.com', NULL, '$2y$10$5nloe3hWHxDx7gf/LxHhCeEmhipihvbNL8v7npbFSUrXjk3gKIo3C', '01193359610', 'Aldenport', 'cfGu1675328470.jpg', NULL, '2023-02-02 09:20:32', '2023-02-02 09:58:56', '0', 32, 'QOsN1675328470.png', 'Animi rerum sunt culpa qui mollitia consequatur esse facilis. Dolores eum sunt ducimus necessitatibus id. Doloribus dolores nihil enim officia asperiores facere et.', 8, NULL),
(32, 'Idella Fahey', 'okeefe.carolina@schamberger.com', NULL, '$2y$10$oPsBcAeVOmBZUxonQjg11uh7B9zRFA.YA64SkWSH9MoZBY6L6AvUu', '01118258849', 'Jaymehaven', 'cfGu1675328470.jpg', NULL, '2023-02-02 09:20:33', '2023-02-02 09:58:56', '1', 11, 'QOsN1675328470.png', 'Quidem enim aspernatur provident et et eum saepe. Dolorum ut ea dolor consequuntur voluptas velit. Dolorem rerum aut sit et commodi sed.', 10, NULL),
(33, 'Alene Graham', 'michelle72@jaskolski.info', NULL, '$2y$10$dQpe2fGgvLn5ujge5DmMAOJvju/iYWlAg7mT8yk7.CAAiOK9AS1fK', '01156672065', 'Rustyhaven', 'cfGu1675328470.jpg', NULL, '2023-02-02 09:20:33', '2023-02-02 09:58:56', '1', 99, 'QOsN1675328470.png', 'Quis numquam maiores asperiores velit dolor. Qui libero quis nostrum laboriosam. Blanditiis qui sit veniam quam voluptatibus qui.', 6, NULL),
(34, 'Kade Treutel', 'cronin.winfield@moore.com', NULL, '$2y$10$s08ibLClBZ4z8DNdPcbche2IwUAFkxTOAQwAfMU/LTPMn0DJrfw3S', '01114713658', 'East Kasandraborough', 'cfGu1675328470.jpg', NULL, '2023-02-02 09:20:33', '2023-02-02 09:58:56', '1', 69, 'QOsN1675328470.png', 'Consequuntur ut excepturi odio rerum sunt. Cumque voluptate voluptatem qui doloremque aliquid. Laboriosam aut aut sapiente. Libero et optio voluptatum delectus sit est nostrum.', 9, NULL),
(35, 'Isabella Williamson', 'eladio.parker@gmail.com', NULL, '$2y$10$ep1N3WvL/SZo1yW.9.RRkOweFljAILE22jMgP2ktM4sIvjvjtg6MC', '01131068331', 'Vernerborough', 'cfGu1675328470.jpg', NULL, '2023-02-02 09:20:33', '2023-02-02 09:58:56', '0', 18, 'QOsN1675328470.png', 'Autem est totam sint occaecati ut eum laudantium. Sed qui et sint laborum omnis molestiae. Labore non incidunt minima voluptate dolores rerum provident. Nesciunt ut repellat quod.', 4, NULL),
(36, 'Graham Abshire', 'yasmeen.treutel@yahoo.com', NULL, '$2y$10$LjwdwqsbV5nzvosfcX8Vi.XFeev/zTjHrx2RDgRMo09khu5g8axhq', '01141404956', 'South Micheal', 'cfGu1675328470.jpg', NULL, '2023-02-02 09:20:33', '2023-02-02 09:58:56', '0', 41, 'QOsN1675328470.png', 'Perferendis sed est commodi amet. Inventore officia incidunt voluptatem facilis eum ipsam. Ut optio harum harum.', 8, NULL),
(37, 'Kamryn Lemke DDS', 'imani78@kuvalis.com', NULL, '$2y$10$niRJiTCkahwQON4Sfb5HZ.xzHjVuR.7uwGaWvW6wQYTGRfrx/Pkku', '01147603499', 'Demetrisland', 'cfGu1675328470.jpg', NULL, '2023-02-02 09:20:33', '2023-02-02 09:58:56', '0', 12, 'QOsN1675328470.png', 'Fugiat quo asperiores consectetur et in et. Hic voluptatem cumque dolorum. Molestiae laudantium suscipit et assumenda quos earum illum. Et sit consectetur eum excepturi rem.', 5, NULL),
(38, 'Mr. Easter Berge', 'nick62@nicolas.com', NULL, '$2y$10$80xL6X/bbMEXnKz6NBtMdONbnIExK6ViOgWolunG0CdzQJPs1oy4G', '01123465785', 'Lake Sadyemouth', 'cfGu1675328470.jpg', NULL, '2023-02-02 09:20:33', '2023-02-02 09:58:56', '1', 88, 'QOsN1675328470.png', 'Accusamus eligendi ex et. Quae inventore quia veniam repellendus corporis voluptas aperiam. Animi atque quisquam voluptas aspernatur. Eaque necessitatibus eum est quis provident.', 4, NULL),
(39, 'Mrs. Chelsie Hoppe', 'conner.blanda@yahoo.com', NULL, '$2y$10$QRqSwbBkKNtKTdhMfWTAPuE2v0eL.R0swU4475xOw6.8P0mCHDxhq', '01183502949', 'Lake Blanca', 'cfGu1675328470.jpg', NULL, '2023-02-02 09:20:33', '2023-02-02 09:26:57', '1', 24, 'QOsN1675328470.png', 'Dolores quod eveniet corporis inventore quam. Et aliquid beatae nisi sint nam inventore expedita. Sed est voluptatum ut veniam quasi qui. Nihil soluta et ut est accusamus et maxime velit.', 2, NULL),
(40, 'Idella Bode', 'vida.leffler@gmail.com', NULL, '$2y$10$TPh2e0/mQsWtgbda7tj4heUDJf3sua3P3w/Opvc.jjg8P3ssoMWB6', '01168950879', 'Zulaufside', 'cfGu1675328470.jpg', NULL, '2023-02-02 09:20:33', '2023-02-02 09:58:56', '1', 32, 'QOsN1675328470.png', 'Eius consequatur quibusdam omnis ab. Sint consequatur provident animi pariatur odio temporibus. Facilis ab impedit eos nobis quae beatae.', 4, NULL),
(41, 'Dr. Savanah Marvin', 'plindgren@tromp.biz', NULL, '$2y$10$/FcbqJ6igrle6BQ9iyYD.eaZJPLL1/pMlxP9aYOtfM.OBjPmgyzf6', '01135179429', 'Moenchester', 'cfGu1675328470.jpg', NULL, '2023-02-02 09:20:33', '2023-02-02 09:58:56', '1', 43, 'QOsN1675328470.png', 'Non distinctio non accusantium sequi occaecati. Ex dolorum sunt harum nemo quasi alias praesentium. Dicta ab itaque dolor cum iure eum ut. Aut nisi est numquam pariatur dolores quod sit.', 9, NULL),
(42, 'Murl Trantow', 'ward.delores@yahoo.com', NULL, '$2y$10$C7qh5.ouG/gkEir0YQ/7feNbe9wolsdhAFnnVsF5BEocoWGOsfaH6', '01131081377', 'Maryamhaven', 'cfGu1675328470.jpg', NULL, '2023-02-02 09:20:33', '2023-02-02 09:58:56', '1', 25, 'QOsN1675328470.png', 'Laborum qui voluptatum qui autem. Dignissimos cupiditate dolores odit sed. At et id nostrum dolores et voluptatem voluptas. Nostrum placeat minus minima beatae id. Architecto vel omnis sunt aut.', 6, NULL),
(43, 'Ms. Delores Cronin', 'zstehr@hotmail.com', NULL, '$2y$10$qIR.souZv0i6X46ZKzcLi.yBjKod11LwLgXykNHiT4WxkAanBrG26', '01142519617', 'Harveybury', 'cfGu1675328470.jpg', NULL, '2023-02-02 09:20:34', '2023-02-02 09:58:56', '1', 63, 'QOsN1675328470.png', 'Placeat in eligendi voluptatem quia enim enim provident. Reprehenderit ut et esse numquam amet voluptatem culpa. Ex consequatur esse cum velit maiores est.', 3, NULL),
(44, 'Dr. Dora Beier', 'adelle73@macejkovic.net', NULL, '$2y$10$P4brhqFUlv.8kgiu5LmWDea4t5hl0Pjj6bk28o0UpNqlTOeV0Vhya', '01128035667', 'Heaneyville', 'cfGu1675328470.jpg', NULL, '2023-02-02 09:20:34', '2023-02-02 09:58:56', '1', 17, 'QOsN1675328470.png', 'Provident quis velit mollitia cum enim nesciunt deleniti eum. Est aspernatur iusto libero assumenda.', 4, NULL),
(45, 'Prof. Tracey Corwin', 'towne.camila@ullrich.org', NULL, '$2y$10$sAYaxDo8oMcXx2SuGAQHfuMjVuBLKvoJeJWqdFqWISKWi84/EnoQC', '01125288089', 'Port Priceberg', 'cfGu1675328470.jpg', NULL, '2023-02-02 09:20:34', '2023-02-02 09:58:56', '0', 40, 'QOsN1675328470.png', 'Sed dolorum quia sunt doloribus possimus earum. Consequuntur quia esse quos ipsa adipisci modi ullam. Omnis nihil provident eos dicta. Et dolorem molestias rerum porro excepturi dignissimos.', 8, NULL),
(46, 'Jackson Schaefer', 'paul27@gmail.com', NULL, '$2y$10$y14Da7WdyO/OTtrxAa21TemM.NYQEEKD15rdxpQ9ezmtNJCTknHxO', '01164742440', 'Port Buford', 'cfGu1675328470.jpg', NULL, '2023-02-02 09:20:34', '2023-02-02 09:58:56', '0', 36, 'QOsN1675328470.png', 'Maiores ut veniam ipsa dignissimos et. Doloribus numquam maiores non consequatur ut quae est.', 5, NULL),
(47, 'Dr. Evelyn Greenfelder', 'lester07@vonrueden.info', NULL, '$2y$10$3dWYeLyQx1x98IRPELrDqurZrCooQrueZSVzyKNwelPURUGWk5hCS', '01112068904', 'New Jeanetteside', 'cfGu1675328470.jpg', NULL, '2023-02-02 09:20:34', '2023-02-02 09:26:57', '0', 88, 'QOsN1675328470.png', 'Beatae ullam aperiam eveniet molestiae maxime eius eos. Consequatur unde deserunt inventore nihil et corporis. Iste asperiores fugiat magni aut veniam adipisci qui. Architecto et iste recusandae et.', 2, NULL),
(48, 'Felicia Lesch', 'dale45@gutkowski.net', NULL, '$2y$10$kCb6T4AzDM8JuSVy8inmI./4FCQcNwVGvyjTG86HHJKAGHZROyw3u', '01185903303', 'West Fosterfort', 'cfGu1675328470.jpg', NULL, '2023-02-02 09:20:34', '2023-02-02 09:58:56', '1', 11, 'QOsN1675328470.png', 'Quia nihil ipsum illo quisquam saepe a laudantium. Natus quia debitis est deleniti corporis. Corrupti voluptas non non. Ab voluptatum aliquid est dolorum dignissimos dolorem molestias ullam.', 5, NULL),
(49, 'Caesar Schneider', 'dhackett@yahoo.com', NULL, '$2y$10$e38DiMzY3QUEdR2Q.2xMP.kUnzto9/F9q6zdOIGY13Ux2OEzSNWce', '01142929474', 'East Germaineside', 'cfGu1675328470.jpg', NULL, '2023-02-02 09:20:34', '2023-02-02 09:58:56', '1', 71, 'QOsN1675328470.png', 'Aut maiores est eius blanditiis quia aut. Qui et vel quis. Provident vel maiores perspiciatis et dolorum laboriosam.', 6, NULL),
(50, 'Loraine Boyer', 'claud.schuster@hotmail.com', NULL, '$2y$10$w0wEzugEfeK7ukwfOAbkSOwBxdsT9EixIfGmQCfaPC2VLhKTBdAMy', '01183913328', 'Amirfurt', 'cfGu1675328470.jpg', NULL, '2023-02-02 09:20:34', '2023-02-02 09:58:56', '1', 86, 'QOsN1675328470.png', 'Rerum maxime est dicta velit eius. Ut aliquam incidunt voluptatem et aut. Assumenda architecto aliquid necessitatibus. Labore totam ipsa et velit earum repellat.', 6, NULL),
(51, 'Jaiden Feil', 'vernon14@schumm.net', NULL, '$2y$10$o4DL/1hDfxyHlue6SPDsiuSLsuYSNl6QgortzFi4DDHCNbH7Om3ti', '01188361993', 'Tamarashire', 'cfGu1675328470.jpg', NULL, '2023-02-02 09:20:34', '2023-02-02 09:58:56', '1', 63, 'QOsN1675328470.png', 'Provident repudiandae omnis voluptas ipsam quia. Odit fugiat fugit illo quidem. Non eaque modi occaecati. Esse ducimus minus et animi vero et quam. Exercitationem culpa occaecati a illum.', 5, NULL),
(52, 'Lexie Rath', 'mohammad93@hotmail.com', NULL, '$2y$10$rAc/5m1WPAExxi6ZY53em.TceMm.lM.AQ8wD0T.Nktz4XzHpSPFJq', '01197012044', 'North Mireille', 'cfGu1675328470.jpg', NULL, '2023-02-02 09:20:34', '2023-02-02 09:58:56', '0', 31, 'QOsN1675328470.png', 'Quia vel magni consequatur iste deserunt dolorum. Delectus est fugit quidem cumque hic error. Dolore ducimus voluptas aliquam repudiandae sequi qui.', 8, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_doctor_id_foreign` (`doctor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
