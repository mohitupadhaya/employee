-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2020 at 02:09 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_details`
--

CREATE TABLE `employee_details` (
  `emp_id` bigint(20) UNSIGNED NOT NULL,
  `emp_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_details`
--

INSERT INTO `employee_details` (`emp_id`, `emp_name`, `emp_age`, `emp_mobile`, `emp_email`, `created_at`, `updated_at`) VALUES
(1, 'Marlene Swaniawski IV', '14', '+1-843-774-7763', 'tess.corkery@example.net', '2020-09-07 12:35:57', '2020-09-07 12:35:57'),
(2, 'Marcelino Lang', '42', '(560) 551-2661', 'skye54@example.org', '2020-09-07 12:35:57', '2020-09-07 12:35:57'),
(3, 'Barrett Daniel', '33', '+1-478-398-7991', 'awindler@example.com', '2020-09-07 12:35:58', '2020-09-07 12:35:58'),
(4, 'Dr. Saul Kub I', '60', '1-774-310-4397 x108', 'rosenbaum.velva@example.org', '2020-09-07 12:35:58', '2020-09-07 12:35:58'),
(5, 'Ms. Dandre Huel', '50', '+1-440-705-8380', 'lsenger@example.net', '2020-09-07 12:35:58', '2020-09-07 12:35:58'),
(6, 'Mayra Zieme', '96', '647-335-4675 x5326', 'lincoln.wuckert@example.com', '2020-09-07 12:35:58', '2020-09-07 12:35:58'),
(7, 'Prof. Hayden Buckridge DDS', '44', '623.395.4207', 'aurore45@example.net', '2020-09-07 12:35:58', '2020-09-07 12:35:58'),
(8, 'Stephan Jenkins I', '32', '430-428-0505 x73053', 'barton.wilhelm@example.net', '2020-09-07 12:35:58', '2020-09-07 12:35:58'),
(9, 'Godfrey Gulgowski', '80', '(293) 476-7120', 'nils88@example.net', '2020-09-07 12:35:58', '2020-09-07 12:35:58'),
(10, 'Ms. Katherine Powlowski II', '96', '649-926-5520 x527', 'oral91@example.com', '2020-09-07 12:35:58', '2020-09-07 12:35:58'),
(11, 'Madelynn Rice', '39', '(743) 397-2712', 'haylie64@example.com', '2020-09-07 12:37:34', '2020-09-07 12:37:34'),
(12, 'Freeman Metz', '15', '762.623.0481 x2888', 'gstamm@example.net', '2020-09-07 12:37:34', '2020-09-07 12:37:34'),
(13, 'Mr. Carol Kiehn I', '62', '+1-906-342-8984', 'maeve47@example.com', '2020-09-07 12:37:34', '2020-09-07 12:37:34'),
(14, 'Loma Shields', '99', '204-443-1949 x97365', 'lang.eulah@example.org', '2020-09-07 12:37:34', '2020-09-07 12:37:34'),
(15, 'Andy Runolfsdottir', '39', '+1.975.778.7604', 'rickie47@example.net', '2020-09-07 12:37:35', '2020-09-07 12:37:35'),
(16, 'Mrs. Maxie Graham Jr.', '9', '1-931-920-7814', 'hagenes.dexter@example.net', '2020-09-07 12:37:35', '2020-09-07 12:37:35'),
(17, 'Mr. Isaiah Conroy', '70', '(282) 364-9382', 'ncrooks@example.net', '2020-09-07 12:37:35', '2020-09-07 12:37:35'),
(18, 'Loma Cummings', '89', '669-878-1663 x01606', 'grant.lowell@example.net', '2020-09-07 12:37:35', '2020-09-07 12:37:35'),
(19, 'Rubie Kassulke', '62', '419.585.4467 x9743', 'marks.claudine@example.net', '2020-09-07 12:37:35', '2020-09-07 12:37:35'),
(20, 'Maiya Steuber', '32', '(401) 842-4166', 'gaston90@example.net', '2020-09-07 12:37:35', '2020-09-07 12:37:35'),
(21, 'Odell Ferry', '62', '328.295.2429 x65274', 'carolanne.schimmel@example.net', '2020-09-07 12:43:41', '2020-09-07 12:43:41'),
(22, 'Cullen Kling', '21', '+1.240.754.0485', 'lokon@example.org', '2020-09-07 12:43:42', '2020-09-07 12:43:42'),
(23, 'Kane Koepp', '54', '(654) 600-0343 x5360', 'bo.wilderman@example.net', '2020-09-07 12:43:42', '2020-09-07 12:43:42'),
(24, 'Donna Zulauf', '87', '+1.606.425.4067', 'wquigley@example.net', '2020-09-07 12:43:42', '2020-09-07 12:43:42'),
(25, 'Alayna Hansen Jr.', '21', '+1 (938) 292-1503', 'garland92@example.org', '2020-09-07 12:43:42', '2020-09-07 12:43:42'),
(26, 'Mrs. Barbara Predovic V', '93', '910-579-3596', 'hans63@example.org', '2020-09-07 12:43:42', '2020-09-07 12:43:42'),
(27, 'Colin Kunze V', '75', '+1-223-675-7275', 'bbosco@example.net', '2020-09-07 12:43:42', '2020-09-07 12:43:42'),
(28, 'Laverna Dare', '99', '(789) 946-3879 x12578', 'gay35@example.org', '2020-09-07 12:43:42', '2020-09-07 12:43:42'),
(29, 'Khalil Jacobson', '58', '1-772-344-8888 x098', 'zella34@example.org', '2020-09-07 12:43:42', '2020-09-07 12:43:42'),
(30, 'Dr. Jerod Hahn', '87', '415-610-2951', 'hdamore@example.org', '2020-09-07 12:43:42', '2020-09-07 12:43:42');

-- --------------------------------------------------------

--
-- Table structure for table `emp_official_details`
--

CREATE TABLE `emp_official_details` (
  `id` bigint(20) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `emp_salary` double(8,2) NOT NULL,
  `emp_department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `emp_official_details`
--

INSERT INTO `emp_official_details` (`id`, `emp_id`, `emp_salary`, `emp_department`, `emp_designation`, `created_at`, `updated_at`) VALUES
(1, 5, 4833.00, '3GpU6', 'EZTLPTdX', '2020-09-07 12:43:42', '2020-09-07 12:43:42'),
(2, 9, 3360.00, 'DE5YG', 'tv8wiLPY', '2020-09-07 12:43:42', '2020-09-07 12:43:42'),
(3, 4, 4777.00, 'EXkc0', 'MY11o1Om', '2020-09-07 12:43:42', '2020-09-07 12:43:42'),
(4, 3, 9529.00, 'W5r0z', '3FG9VpLN', '2020-09-07 12:43:42', '2020-09-07 12:43:42'),
(5, 9, 6705.00, '4Xc1e', 'UcPPXtUg', '2020-09-07 12:43:42', '2020-09-07 12:43:42'),
(6, 10, 4246.00, 'lrYbi', 'o9fyM3yx', '2020-09-07 12:43:42', '2020-09-07 12:43:42'),
(7, 2, 3707.00, 'x55b6', 'h9RTOzbP', '2020-09-07 12:43:42', '2020-09-07 12:43:42'),
(8, 9, 9584.00, 'IYeJd', 'dreGkyfv', '2020-09-07 12:43:42', '2020-09-07 12:43:42'),
(9, 8, 9132.00, 'StqCk', 'kOwfAiG1', '2020-09-07 12:43:42', '2020-09-07 12:43:42'),
(10, 5, 4687.00, 'hT2tv', 'hZ9lVzxF', '2020-09-07 12:43:42', '2020-09-07 12:43:42');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(4, '2020_09_03_082807_create_employee_details_table', 2),
(5, '2020_09_03_083502_create_emp_official_details_table', 3),
(6, '2020_09_07_132416_create_employee_details_table', 4),
(7, '2020_09_07_132705_create_emp_official_details_create', 4),
(8, '2020_09_07_133248_create_user_table', 5);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login_date_time` datetime DEFAULT NULL,
  `logout_date_time` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `admin` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `mobile`, `login_date_time`, `logout_date_time`, `status`, `admin`, `created_at`, `updated_at`) VALUES
(1, 'mohit', '$2y$10$Cj2RlHKDqDY1lLXh3Y1M.OLVRnhq7mJHEGjfmla/qzNCuEjaU40Te', 'mohit@gmail.com', '8545251545', '2020-09-07 18:04:17', NULL, 1, 1, '2020-09-07 12:33:07', '2020-09-07 12:34:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_details`
--
ALTER TABLE `employee_details`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `emp_official_details`
--
ALTER TABLE `emp_official_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_details`
--
ALTER TABLE `employee_details`
  MODIFY `emp_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `emp_official_details`
--
ALTER TABLE `emp_official_details`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
