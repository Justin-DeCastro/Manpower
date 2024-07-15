-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 15, 2024 at 10:44 PM
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
-- Table structure for table `admin_jobs`
--

CREATE TABLE `admin_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `location` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_jobs`
--

INSERT INTO `admin_jobs` (`id`, `location`, `title`, `created_at`, `updated_at`) VALUES
(1, 'MAKATI, NATIONAL CAPITAL REGION', 'HUMAN RESOURCES', '2024-07-11 10:22:37', '2024-07-11 10:22:37'),
(2, 'MAKATI, NATIONAL CAPITAL REGION', 'ACCOUNTING', '2024-07-11 10:34:00', '2024-07-11 10:34:00'),
(3, 'MAKATI, NATIONAL CAPITAL REGION', 'OFFICE SUPPORT', '2024-07-11 10:34:10', '2024-07-11 10:34:10'),
(4, 'MAKATI, NATIONAL CAPITAL REGION', 'LIAISON ASSISTANT', '2024-07-11 10:34:44', '2024-07-11 10:34:44');

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` bigint UNSIGNED NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime DEFAULT NULL,
  `interview_date` datetime DEFAULT NULL,
  `date_of_interview` datetime DEFAULT NULL,
  `resume` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `attended` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `phone` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `name`, `position`, `message`, `email`, `address`, `date`, `interview_date`, `date_of_interview`, `resume`, `status`, `attended`, `phone`, `created_at`, `updated_at`) VALUES
(31, 'ABIC MANPOWER', 'Engineering', 'I would like to apply in any vacant position on engineering', 'decastrojustin321@gmail.com', 'Oriental Mindoro', '2024-07-18 15:41:00', NULL, NULL, 'hiring/1720923681_1720489237_1720429722_FOR HARD CODED (2).docx', 'No Show', NULL, '09456754591', '2024-07-14 09:21:21', '2024-07-16 05:43:19'),
(32, 'Justin', 'Liaison', 'Default Message', 'decastrojustin321@gmail.com', 'Oriental Mindoro', NULL, NULL, NULL, 'hiring/1720923981_1720489237_1720429722_FOR HARD CODED (2).docx', 'Pending', NULL, '09456754591', '2024-07-14 09:26:21', '2024-07-14 09:26:21'),
(33, 'Justin', 'ADMIN Staff', 'Default Message', 'decastrojustin321@gmail.com', 'pola', '2024-07-10 15:42:00', NULL, NULL, 'hiring/1720924570_1720489237_1720429722_FOR HARD CODED (3).docx', 'For Interview', NULL, '09456754591', '2024-07-14 09:36:10', '2024-07-16 05:42:45'),
(34, 'ABIC MANPOWER', 'ADMIN', 'Default Message', 'decastrojustin321@gmail.com', 'pola', NULL, NULL, NULL, 'hiring/1720924743_1720489237_1720429722_FOR HARD CODED (3).docx', 'For Interview', NULL, '09456754591', '2024-07-14 09:39:03', '2024-07-16 05:35:07'),
(35, 'ABIC MANPOWER', 'ADMIN', 'Default Message', 'decastrojustin321@gmail.com', 'pola', NULL, NULL, NULL, 'hiring/1720924758_1720489237_1720429722_FOR HARD CODED (3).docx', 'For Interview', NULL, '09456754591', '2024-07-14 09:39:18', '2024-07-16 05:22:26'),
(36, 'ABIC MANPOWER111', 'ADMIN', 'Default Message', 'decastrojustin321@gmail.com', 'Oriental Mindoro', NULL, NULL, NULL, 'hiring/1720925002_1720489237_1720429722_FOR HARD CODED (3).docx', 'Pending', NULL, '09456754591', '2024-07-14 09:43:22', '2024-07-14 09:43:22'),
(37, 'ABIC MANPOWER', 'ADMIN Staff', 'Default Message', 'inorganicdrake@gmail.com', 'Oriental Mindoro', NULL, NULL, NULL, 'hiring/1720925347_1720489237_1720429722_FOR HARD CODED (3).docx', 'Pending', NULL, '09456754591', '2024-07-14 09:49:07', '2024-07-14 09:49:07'),
(38, 'Justin', 'Liaison', 'Default Message', 'inorganicdrake@gmail.com', 'Oriental Mindoro', NULL, NULL, NULL, 'hiring/1720925611_1720489237_1720429722_FOR HARD CODED (3).docx', 'For Interview', NULL, '09456754591', '2024-07-14 09:53:31', '2024-07-16 04:33:01');

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `id` bigint UNSIGNED NOT NULL,
  `companyname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `companyimage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`id`, `companyname`, `companyimage`, `created_at`, `updated_at`) VALUES
(1, 'Certificate of Appreciation', '1720810072.jpg', '2024-07-13 01:47:52', '2024-07-13 01:47:52'),
(2, 'Certificate of Participation', '1720810252.jpg', '2024-07-13 01:50:52', '2024-07-13 01:50:52'),
(3, 'Certificate of Participation', '1720810314.jpg', '2024-07-13 01:51:54', '2024-07-13 01:51:54'),
(4, 'Certificate of Participation', '1720810331.jpg', '2024-07-13 01:52:11', '2024-07-13 01:52:11'),
(5, 'Certificate of Appreciation', '1720810348.jpg', '2024-07-13 01:52:28', '2024-07-13 01:52:28'),
(6, 'Certificate of Accreditation', '1720810372.jpg', '2024-07-13 01:52:52', '2024-07-13 01:52:52'),
(7, 'Certificate of Appreciation', '1720810390.jpg', '2024-07-13 01:53:10', '2024-07-13 01:53:10'),
(8, 'Certification', '1720810418.jpg', '2024-07-13 01:53:38', '2024-07-13 01:53:38'),
(9, 'Certificate of Accreditation', '1720810656.jpg', '2024-07-13 01:57:36', '2024-07-13 01:57:36'),
(10, 'Certificate of Accreditation', '1720810701.jpg', '2024-07-13 01:58:21', '2024-07-13 01:58:21'),
(11, 'Certificate of Participation', '1720810730.jpg', '2024-07-13 01:58:50', '2024-07-13 01:58:50');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `executives`
--

CREATE TABLE `executives` (
  `id` bigint UNSIGNED NOT NULL,
  `companyname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `awards` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `companyimage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `executives`
--

INSERT INTO `executives` (`id`, `companyname`, `awards`, `companyimage`, `created_at`, `updated_at`) VALUES
(2, 'ZHENRONG LI\r\n(Position)', 'Philippine Women`s University, Bachelor of Science in Nutrition and Dietetics, Asian Institute of Management (AIM), Rotary Club of Las Piñas - Caminol Real District 3830', '1721066868.jpg', '2024-07-16 01:07:48', '2024-07-16 01:07:48');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Justin', 'I recently interacted with Customer Service Representative\'s regarding some issue. I was impressed by their professionalism and quick response. They handled my concern efficiently and provided a clear solution.', '2024-07-14 08:26:43', '2024-07-14 08:26:43'),
(2, 'Moses', 'I wanted to take a moment to express my gratitude for the outstanding service I received. My recent experience was exceptional, and I am genuinely impressed. I am very satisfied with my experience and will definitely recommend your company to friends and family. Keep up the excellent work!', '2024-07-14 08:29:53', '2024-07-14 08:29:53'),
(3, 'GIO', 'I can\'t say enough about the incredible service I received from Manpower. They truly went above and beyond to match me with a job that fits my skills and career goals perfectly. The entire process was smooth and efficient, and their team was so supportive throughout. I\'m grateful for their expertise and dedication in helping me land a position where I can thrive. Thank you, Manpower, for making my job search not just successful but also enjoyable!', '2024-07-15 23:24:19', '2024-07-15 23:24:19');

-- --------------------------------------------------------

--
-- Table structure for table `jobfairs`
--

CREATE TABLE `jobfairs` (
  `id` bigint UNSIGNED NOT NULL,
  `companyname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `companyimage` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobfairs`
--

INSERT INTO `jobfairs` (`id`, `companyname`, `link`, `companyimage`, `created_at`, `updated_at`) VALUES
(2, 'Kalayaan Job Fair', 'https://www.facebook.com/photo.php?fbid=165598909794059&set=pb.100090318514723.-2207520000&type=3', '1720736208.jpg', '2024-07-12 05:16:48', '2024-07-12 05:16:48'),
(3, 'Manila City Job Fair', 'https://www.facebook.com/photo.php?fbid=165598899794060&set=pb.100090318514723.-2207520000&type=3', '1720683042.jpg', '2024-07-10 23:30:42', '2024-07-10 23:30:42');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `companyname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `companyimage` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manpower_reqs`
--

CREATE TABLE `manpower_reqs` (
  `id` bigint UNSIGNED NOT NULL,
  `work_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `vacant_position` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_vacancy` int NOT NULL,
  `years_experience` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `working_location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `working_schedule_hours` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `working_schedule_days` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preferred_gender` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_requirements` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cpa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payout_firstdate` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payout_seconddate` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationalcertificate` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `license` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_qualification` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qualifications` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `other_requirements` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `salary_from` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary_to` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target_date` date DEFAULT NULL,
  `screening_method` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manpower_reqs`
--

INSERT INTO `manpower_reqs` (`id`, `work_type`, `vacant_position`, `job_category`, `no_of_vacancy`, `years_experience`, `working_location`, `working_schedule_hours`, `working_schedule_days`, `preferred_gender`, `job_requirements`, `cpa`, `payout_firstdate`, `payout_seconddate`, `nationalcertificate`, `license`, `other_qualification`, `qualifications`, `other_requirements`, `salary_from`, `salary_to`, `target_date`, `screening_method`, `job_description`, `created_at`, `updated_at`) VALUES
(4, 'Contractual', 'Admin Staff', 'Electrical Engineer', 2, '2', 'Calamba', '8', '5', 'Male', 'Resume', NULL, '5 of the month', '20 of the month', 'National Certificate', NULL, NULL, '', 'picture', '10000', '20000', '2024-07-13', 'Virtual', 'Hello', '2024-07-11 04:34:26', '2024-07-11 04:34:26'),
(5, 'Project Based', 'Laborer', 'Machine Operators', 3, '2', 'Manila', '8', '5', 'Male', 'Resume and government id', NULL, '5 of the month', '20 of the month', NULL, NULL, NULL, '', 'picture', '10000', '20000', '2024-07-20', 'Virtual', 'hi', '2024-07-11 04:53:53', '2024-07-11 04:53:53'),
(6, 'Project Based', 'Admin Staff', 'Machine Operators', 3, '2', 'Laguna', '8', '5', 'Female', 'no', NULL, '5 of the month', '20 of the month', NULL, NULL, NULL, 'CPA License', 'no', '10000', '20000', '2024-07-24', 'Virtual', 'no', '2024-07-11 05:01:52', '2024-07-11 05:01:52');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
(8, '2024_07_09_035153_create_companies_table', 5),
(9, '2024_07_10_175731_create_jobs_table', 6),
(10, '2024_07_11_001919_create_ojts_table', 7),
(11, '2024_07_11_005515_create_profiles_table', 8),
(12, '2024_07_11_031149_create_admin_jobs_table', 9),
(13, '2024_07_11_220452_create_jobfairs_table', 10),
(14, '2024_07_11_121045_create_manpower_reqs_table', 11),
(15, '2024_07_12_183252_create_awards_table', 12),
(16, '2024_07_12_065408_create_executives_table', 13),
(17, '2024_07_14_010709_create_feedback_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `ojts`
--

CREATE TABLE `ojts` (
  `id` bigint UNSIGNED NOT NULL,
  `fullname` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `school` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ojt_hours` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `resume` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ojts`
--

INSERT INTO `ojts` (`id`, `fullname`, `email`, `school`, `course`, `phone`, `ojt_hours`, `resume`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Justin Mangubat De Castro', 'decastrojustin321@gmail.com', 'MINSU', 'BSIT', '09456754591', '396', 'resumes/g5YRfygNtoE2iTTIbkrq5oFUBTd5rxjCa6srFuum.pptx', 'hello', '2024-07-11 07:33:46', '2024-07-11 07:33:46'),
(2, 'Justin Mangubat De Castro', 'decastrojustin321@gmail.com', 'MINSU', 'BSIT', '09456754591', '396', 'resumes/5Tq2tf5GDVDgeQdtxCPfy4yfo0toZ7BSvmg7X89R.pptx', 'hello', '2024-07-11 07:38:42', '2024-07-11 07:38:42'),
(3, 'Justin Mangubat De Castro', 'decastrojustin321@gmail.com', 'MINSU', 'BSIT', '09456754591', '396', 'resumes/5tolfQpH8Bh8xVkUyhwO1HSCKgZxWaPT9CDQo79E.pptx', 'asdasd', '2024-07-11 07:40:42', '2024-07-11 07:40:42'),
(4, 'Justin Mangubat De Castro', 'decastrojustin321@gmail.com', 'MINSU', 'BSIT', '09456754591', '396', 'resumes/ME9nXLx4bP3O2GuaSUqHTb2qRHetr4wSpUMuLJRR.pptx', 'hello', '2024-07-11 07:42:17', '2024-07-11 07:42:17'),
(5, 'Justin Mangubat De Castro', 'decastrojustin321@gmail.com', 'MINSU', 'BSIT', '09456754591', '396', 'resumes/DdE7CqlMEtouuPrbKrbDXEWE8cp3TbnUUjZ5vTQa.pptx', 'qwe', '2024-07-11 07:45:14', '2024-07-11 07:45:14'),
(6, 'Mangubat Decastro Justin', 'user@test.com', 'MINSCAT', 'BSIT', '09456754591', '390', 'public/resume/Huanying.png', 'Hello', '2024-07-11 05:54:39', '2024-07-11 05:54:39'),
(7, 'Mangubat Decastro Justin', 'admin@admin.com', 'MINSCAT', 'BSIT', '09456754591', '390', 'public/resume/logo.jpg', 'qwe', '2024-07-11 06:00:38', '2024-07-11 06:00:38'),
(8, 'Moses Alcantara', 'decastrojustin24@gmail.com', 'MINSU', 'Bachelor of Science in Information Technology', '09456754591', '400', 'public/resume/1720489237_1720429722_FOR HARD CODED.docx', 'Hello', '2024-07-13 01:23:32', '2024-07-13 01:23:32');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `person` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sec_certificate` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_permit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `name`, `website`, `phone`, `position`, `email`, `person`, `sec_certificate`, `business_permit`, `created_at`, `updated_at`) VALUES
(8, 'Cal Cheese', 'https://www.calcheese.com', '09456754591', 'Head', 'cocacola@gmail.com', 'Justin', '14.jpg', 'avatar.png', '2024-07-11 05:41:24', '2024-07-11 05:41:24');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_jobs`
--
ALTER TABLE `admin_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `awards`
--
ALTER TABLE `awards`
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
-- Indexes for table `executives`
--
ALTER TABLE `executives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobfairs`
--
ALTER TABLE `jobfairs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manpower_reqs`
--
ALTER TABLE `manpower_reqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ojts`
--
ALTER TABLE `ojts`
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
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admin_jobs`
--
ALTER TABLE `admin_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
-- AUTO_INCREMENT for table `executives`
--
ALTER TABLE `executives`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobfairs`
--
ALTER TABLE `jobfairs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `manpower_reqs`
--
ALTER TABLE `manpower_reqs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `ojts`
--
ALTER TABLE `ojts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
