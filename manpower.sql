-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 09, 2024 at 01:29 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manpower`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` bigint UNSIGNED NOT NULL,
  `job_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime DEFAULT NULL,
  `interview_date` datetime DEFAULT NULL,
  `date_of_interview` datetime DEFAULT NULL,
  `resume` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `job_category`, `job_name`, `full_name`, `email`, `address`, `date`, `interview_date`, `date_of_interview`, `resume`, `phone`, `created_at`, `updated_at`) VALUES
(12, 'Administrative', 'Admin Position', 'Airies Asilio', 'decastrojustin24@gmail.com', 'Makati City', '2024-07-20 10:00:00', NULL, NULL, 'hiring/1720489237_1720429722_FOR HARD CODED.docx', '09456754591', '2024-07-08 17:40:37', '2024-07-08 17:52:38'),
(13, 'Human Resource', 'Interns', 'Justin', 'decastrojustin24@gmail.com', 'Makati City', '2024-07-04 10:57:00', NULL, NULL, 'hiring/1720491246_1720429722_FOR HARD CODED.docx', '09456754591', '2024-07-08 18:14:06', '2024-07-08 18:57:29'),
(14, 'ENGINEERING', 'ELECTRICAL ENGINEERING', 'Justin Mangubat', 'decastrojustin24@gmail.com', 'Makati City', NULL, NULL, NULL, 'hiring/1720494721_1720429722_FOR HARD CODED.docx', '09456754591', '2024-07-08 19:12:02', '2024-07-08 19:12:02'),
(15, 'MARKETING', 'ADMIN STAFF', 'justin mangubat decastro', 'decastrojustin321@gmail.com', 'Makati City', '2024-07-24 18:00:00', NULL, NULL, 'hiring/1720510937_Salazar_FrontEndDev.pdf', '09456754591', '2024-07-08 23:42:17', '2024-07-08 23:43:06'),
(16, 'Human Resource', 'Human Resource STAFF', 'justin mangubat decastro', 'decastrojustin321@gmail.com', 'looban tagbakin pola oriental mindoro', '2024-07-10 10:00:00', NULL, NULL, 'hiring/1720513119_Salazar_FrontEndDev.pdf', '09456754591', '2024-07-09 00:18:39', '2024-07-09 00:19:30'),
(17, 'Human Resource', 'Human Resource STAFF', 'justin mangubat decastro', 'decastrojustin321@gmail.com', 'looban tagbakin pola oriental mindoro', '2024-07-10 10:44:00', NULL, NULL, 'hiring/1720514660_Salazar_FrontEndDev.pdf', '09456754591', '2024-07-09 00:44:20', '2024-07-09 00:45:07'),
(18, 'Human Resource', 'Human Resource STAFF', 'justin mangubat decastro', 'decastrojustin321@gmail.com', 'looban tagbakin pola oriental mindoro', '2024-07-09 10:00:00', NULL, NULL, 'hiring/1720515935_Salazar_FrontEndDev.pdf', '09456754591', '2024-07-09 01:05:35', '2024-07-09 01:06:04');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Solution Recruitment International Inc', 'acredited/1720497454.png', '2024-07-08 19:57:34', '2024-07-08 19:57:34'),
(2, 'Global Talent Professionals', 'acredited/1720499252.png', '2024-07-08 20:27:32', '2024-07-08 20:27:32'),
(3, 'Hyundai Engineering & Construction', 'acredited/1720499293.jpg', '2024-07-08 20:28:13', '2024-07-08 20:28:13'),
(4, 'Talent Angels Pte. Ltd.', 'acredited/1720499329.jpeg', '2024-07-08 20:28:49', '2024-07-08 20:28:49'),
(5, 'Triple J', 'acredited/1720499356.png', '2024-07-08 20:29:16', '2024-07-08 20:29:16');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `name`, `email`, `contact_number`, `country`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Justin De Castro', 'decastrojustin24@gmail.com', '09456754591', 'Philippines', 'Applicant-Inquiries', 'Hello', '2024-07-08 04:45:43', '2024-07-08 04:45:43'),
(2, 'Justin De Castro', 'decastrojustin24@gmail.com', '09456754591', 'Philippines', 'Applicant-Follow Up', 'hello', '2024-07-08 04:51:18', '2024-07-08 04:51:18'),
(3, 'Justin De Castro', 'decastrojustin24@gmail.com', '09456754591', 'Philippines', 'Applicant-Follow Up', 'hello', '2024-07-08 04:53:43', '2024-07-08 04:53:43'),
(4, 'Justin De Castro', 'decastrojustin321@gmail.com', '09456754591', 'Philippines', 'Applicant-Inquiries', 'follow up', '2024-07-08 04:55:38', '2024-07-08 04:55:38'),
(5, 'Justin De Castro', 'decastrojustin321@gmail.com', '09456754591', 'Philippines', 'Applicant-Inquiries', 'Omanfil Int\'l Manpower Dev\'t Corp. Rodeo Bldg.\r\n802 km 18 West Service Road South Super Highway\r\nParanaque City 1700 Metro Manila Philippines', '2024-07-08 05:02:52', '2024-07-08 05:02:52'),
(6, 'justin mangubat decastro', 'decastrojustin321@gmail.com', '09456754591', 'Philippines', 'Applicant-Inquiries', 'Hello i am applying for this job', '2024-07-08 23:40:49', '2024-07-08 23:40:49'),
(7, 'justin mangubat decastro', 'decastrojustin321@gmail.com', '09456754591', 'Philippines', 'Applicant-Follow Up', 'hello', '2024-07-08 23:45:47', '2024-07-08 23:45:47'),
(8, 'justin mangubat decastro', 'decastrojustin321@gmail.com', '09456754591', 'Philippines', 'Applicant-Follow Up', 'hello', '2024-07-08 23:48:40', '2024-07-08 23:48:40');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_07_08_085805_create_applications_table', 2),
(6, '2024_07_08_123717_create_contact_messages_table', 3),
(7, '2024_07_09_000941_create_schedule_table', 4),
(8, '2024_07_09_035153_create_companies_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `schedule_email_unique` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
