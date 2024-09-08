-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2022 at 06:27 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yabatech`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `administrations`
--

CREATE TABLE `administrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `staff_office_id` int(11) DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admission_lists`
--

CREATE TABLE `admission_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ad_file` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admission_lists`
--

INSERT INTO `admission_lists` (`id`, `name`, `ad_file`, `created_at`, `updated_at`) VALUES
(1, 'HND FULL TIME ADMISSION LIST 2020/2021', 'hndft.pdf', '2021-09-13 14:50:21', '2021-09-17 00:03:19'),
(2, 'HND FULL TIME SUPPLEMENTARY LIST 2020/2021', 'hndsup.pdf', '2021-09-13 14:50:21', '2021-09-13 14:50:21'),
(3, 'ND/BSc FULL TIME ADMISSION LIST', 'ndbsc.pdf', '2021-09-13 14:50:21', '2021-09-13 14:50:21'),
(4, 'ND FULL TIME SUPPLEMENTARY LIST 2020/2021', 'supp.pdf', '2021-09-13 14:50:21', '2021-09-13 14:50:21'),
(5, 'PGD 2020/2021 FULL TIME ADMISSION LIST', 'pgd.pdf', '2021-09-13 14:50:21', '2021-09-13 14:50:21'),
(6, 'BSC DIRECT ENTRY LIST 2020/2021', 'directentry1.pdf', '2021-09-13 14:50:21', '2021-09-13 14:50:21'),
(7, 'ND BSC SUPPLEMENTARY LIST 1 2020/2021', 'ndbscsup1.pdf', '2021-09-13 14:50:21', '2021-09-13 14:50:21'),
(8, 'HND SUPPLEMENTARY 2 2020/2021', 'hndsup2.pdf', '2021-09-13 14:50:21', '2021-09-13 14:50:21'),
(9, 'HND SUPPLEMENTARY 2 2020/2021', 'hndsup2.pdf', '2021-09-13 14:50:21', '2021-09-13 14:50:21'),
(10, 'HND FULL TIME ADMSSION LIST 2021/2022', 'bd4090bc6dc559be95c08bd91132b540.docx', '2021-09-17 00:07:54', '2021-09-17 00:07:54'),
(11, 'HND FULL TIME ADMSSION LIST 2020/2021', 'e5536abb31a77be97b744ff456516edc.png', '2021-09-17 00:11:28', '2021-09-17 00:12:29'),
(12, 'HND FULL TIME ADMSSION LIST 2020/2021', 'DESIGN AND IMPLEMENTATION OF COMPUTERIZED DIRECTORY OF BUSINESS PREMISES.docx', '2021-09-18 11:17:57', '2021-09-18 11:17:57');

-- --------------------------------------------------------

--
-- Table structure for table `adverts`
--

CREATE TABLE `adverts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `alumni_news`
--

CREATE TABLE `alumni_news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `links` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `views` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Academic', '2021-09-12 23:00:00', NULL, NULL),
(2, 'Non-teaching (junior)', '2021-09-12 23:00:00', NULL, NULL),
(3, 'Non-teaching (senior)', '2021-09-12 23:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(222) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `school_id`, `name`, `image`, `link`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Computer Technology', NULL, NULL, 1, NULL, NULL, NULL),
(2, 1, 'Food Technology', NULL, NULL, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `links` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `event_date` datetime DEFAULT NULL,
  `school_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `image`, `links`, `description`, `status`, `event_date`, `school_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '3rd International Conference, School Of Engineering', NULL, NULL, 'School of Engineering 3rd International Conference.\r\nThe Dean and staff of School of Engineering invite you to the 3rd International Conference.\r\nTheme: Sustainable utilization of local potentials for Scientific, Technological and Engineering innovations\r\nDate:  14th - 16th September, 2021\r\nVenue: Yusuf Grillo Hall\r\nMode: Physical and Virtual', 0, NULL, 1, NULL, NULL, NULL),
(2, '3rd International Conference, School Of Engineering', NULL, NULL, 'School of Engineering 3rd International Conference.\r\nThe Dean and staff of School of Engineering invite you to the 3rd International Conference.\r\nTheme: Sustainable utilization of local potentials for Scientific, Technological and Engineering innovations\r\nDate:  14th - 16th September, 2021\r\nVenue: Yusuf Grillo Hall\r\nMode: Physical and Virtual', 0, NULL, 2, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hods`
--

CREATE TABLE `hods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `expired_at` datetime DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `school_id` int(11) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hods`
--

INSERT INTO `hods` (`id`, `staff_id`, `status`, `expired_at`, `message`, `created_at`, `updated_at`, `school_id`, `department_id`) VALUES
(1, 1, 1, NULL, '<p>lsdfskldfskldlfsdfs</p>', '2021-11-19 01:19:15', '2021-11-19 01:19:15', 1, 1),
(2, 3, 1, NULL, '<p>he Faculty of Science was one of the three Foundation Faculties at the inception of the University of Ibadan&nbsp;</p>', '2021-11-19 05:25:04', '2021-11-19 05:55:38', 1, 1),
(3, 4, 1, NULL, '<p>jkjkjk</p>', '2021-11-19 12:45:29', '2021-11-19 12:45:29', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `home_slider_images`
--

CREATE TABLE `home_slider_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_slider_images`
--

INSERT INTO `home_slider_images` (`id`, `image`, `status`, `created_at`, `updated_at`, `is_active`) VALUES
(1, 'slider.jpg', 1, '2021-09-10 23:00:00', NULL, 1),
(2, 'slider2.jpg', 1, '2021-09-10 23:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `libraries`
--

CREATE TABLE `libraries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `libraries`
--

INSERT INTO `libraries` (`id`, `image`, `about`, `gallery`, `created_at`, `updated_at`) VALUES
(1, 'citm.jpg', 'The library is the nerve-centre of the College. It is positioned to cater for the information needs of staff, students and the entire College community. It is rich in both print and electronic information resources that are aimed at improving teaching, learning and research activities. The personnel are seasoned information practitioners with wealth of experiences and willingness to provide necessary services that will facilitate career advancement and fulfillment of all stakeholders. It is responsible for the acquisition and processing of all the books, journals, e-books, e-journals, databases to meet the information needs of staff and students of the college community. The main Library and various School Libraries have a combined seating capacity for 1,740 readers.\n            In order to ensure efficient service delivery, the library operations have been structured into six Departments as follows', '[\"image1.jpg\",\"image2.jpg\",\"image3.jpg\",\"image4.jpg\"]', '2021-09-08 11:46:06', '2021-09-08 11:46:06');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'About', 1, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(2, 'Administration', 1, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(3, 'Admissions', 1, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(4, 'TETFund_Special', 1, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(5, 'TETFund_Annual', 1, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(6, 'Academics_CCS', 1, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(7, 'Academics_Schools', 1, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(8, 'Academics_Students', 1, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(9, 'Units_Service', 1, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(10, 'Units_Academic', 1, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(11, 'Units_Registry', 1, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(12, 'Units_Bursary', 1, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(13, 'More_Others', 1, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(14, 'More_Staff', 1, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(15, 'More_Alumni', 1, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(16, 'More_Contact', 1, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(17, 'Enterprise', 1, '2021-11-03 19:56:02', '2021-11-03 19:56:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2021_02_16_002747_create_roles_table', 1),
(2, '2021_02_16_002749_create_users_table', 1),
(3, '2021_02_16_002812_create_schools_table', 1),
(4, '2021_02_16_002819_create_units_table', 1),
(5, '2021_02_16_002955_create_departments_table', 1),
(6, '2021_02_16_003020_create_alumni_news_table', 1),
(7, '2021_02_16_003032_create_menus_table', 1),
(8, '2021_02_16_003050_create_nav_lists_table', 1),
(9, '2021_02_16_003100_create_nav_dropdowns_table', 1),
(10, '2021_02_16_003115_create_events_table', 1),
(11, '2021_02_16_003132_create_categories_table', 1),
(12, '2021_02_16_003147_create_adverts_table', 1),
(13, '2021_02_16_003206_create_routings_table', 1),
(14, '2021_02_16_095219_create_activities_table', 1),
(15, '2021_02_16_152313_create_staff_publications_table', 1),
(16, '2021_02_16_152354_create_staff_qualifications_table', 1),
(17, '2021_02_17_002820_create_staff_lists_table', 1),
(18, '2021_02_17_002829_create_staff_profiles_table', 1),
(19, '2021_03_11_230323_create_news_table', 2),
(20, '2021_03_12_003819_create_notice_boards_table', 3),
(21, '2021_03_23_142517_create_rectors_table', 4),
(22, '2021_03_23_142949_create_rector_news_table', 5),
(23, '2021_03_23_145120_add_another_field_to_rector_table', 6),
(26, '2021_07_09_003148_create_school_deans_table', 7),
(27, '2021_07_09_010929_add_field_to_school', 7),
(28, '2021_09_08_115539_create_libraries_table', 8),
(31, '2021_09_11_135135_add_new_fields_to_notice_boards', 9),
(32, '2021_09_11_135344_add_new_fields_to_news', 9),
(33, '2021_09_11_174349_create_home_slider_images_table', 10),
(34, '2021_09_11_180520_add_new_field_to_home_slider_images', 11),
(35, '2021_09_11_191820_add_new_field_to_notice_boards', 12),
(36, '2021_09_11_191831_add_new_field_to_news', 12),
(37, '2021_09_12_001639_create_school_galleries_table', 13),
(38, '2021_09_12_011637_create_tetfund_trainings_table', 14),
(39, '2021_09_12_012158_create_tetfund_research_table', 14),
(40, '2021_09_12_012453_create_tetfund_housings_table', 14),
(41, '2021_09_12_012538_create_tetfund_supports_table', 14),
(42, '2021_09_13_110707_create_tetfund_books_table', 15),
(43, '2021_09_13_141741_create_tet_funds_icts_table', 16),
(44, '2021_09_13_151221_create_admission_lists_table', 17),
(45, '2021_09_13_225022_create_staff_table', 18),
(50, '2021_09_15_170029_create_downloads_table', 19),
(51, '2021_09_15_170411_create_sport_complexes_table', 19),
(52, '2021_11_07_234706_add_field_to_staffs', 20),
(53, '2021_11_08_001350_add_field_to_rectors', 21),
(56, '2021_11_08_023323_create_staff_posts_table', 22),
(57, '2021_11_08_023332_create_administrations_table', 22),
(58, '2021_11_19_000942_add_fields_to_staffs', 23),
(59, '2021_11_19_005211_add_fields_to_school_deans', 24),
(60, '2021_11_19_010048_create_hods_table', 24),
(61, '2021_11_19_020748_add_new_field_to_hods', 25),
(62, '2022_03_12_135300_add_field_to_news', 26),
(63, '2022_03_12_153514_add_fielsd_to_staffs', 27);

-- --------------------------------------------------------

--
-- Table structure for table `nav_dropdowns`
--

CREATE TABLE `nav_dropdowns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nav_list_id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `external_link` varchar(220) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nav_dropdowns`
--

INSERT INTO `nav_dropdowns` (`id`, `name`, `link`, `nav_list_id`, `status`, `external_link`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Vision & Mission', 'about.vision', 1, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(2, 'History', 'about.history', 1, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(3, 'Visitor', 'administration.visitor', 2, 2, NULL, '2021-03-11 17:20:31', '2021-09-16 23:10:00', NULL),
(4, 'Chairman Council', 'administration.chairman_council', 2, 2, NULL, '2021-03-11 17:20:31', '2021-09-16 21:25:37', NULL),
(5, 'The Rector', 'administration.rector', 2, 2, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(6, 'Governing Council', 'administration.governing_council', 2, 2, NULL, '2021-03-11 17:20:31', '2021-09-16 21:27:36', NULL),
(7, 'Deputy Rector Academics', 'administration.deputy_academics', 2, 2, NULL, '2021-03-11 17:20:31', '2021-09-16 23:10:47', NULL),
(8, 'Deputy Rector Administration', 'administration.deputy_administration', 2, 2, NULL, '2021-03-11 17:20:31', '2021-09-16 23:11:00', NULL),
(9, 'Registrar', 'administration.registrar', 2, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(10, 'Bursar', 'administration.bursar', 2, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(11, 'Polytechnic Librarian', 'administration.librarian', 2, 2, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(12, 'Programmes', 'admissions.programmes', 3, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(13, 'Apply to Yabatech', 'admissions.apply_to_yct', 3, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(14, 'Entry Requirements', 'admissions.entry_requirement', 3, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(15, 'Admission List', 'admissions.ad_list', 3, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(17, 'Acceptance Fee', 'admissions.acceptance_fee', 3, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(18, 'Academic Staff Training & Development', 's_intervention.academic_staff', 4, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(20, 'Physical Infrastructure', 's_intervention.physical_infrastructure', 4, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(21, 'ICT Support Intervention', 's_intervention.ict_support', 4, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(24, 'Book Development', 'a_intervention.book_development', 5, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(25, 'Training & Development', 'a_intervention.training_development', 5, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(27, 'Academic Research Journal and Conferences Development', 'a_intervention.journal_conferences', 5, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(31, 'Weekend Programmes', 'ccs.weekend-programmes', 6, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(32, 'Weekday/Evening Programmes', 'ccs.weekday', 6, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(33, 'Art, Design & Printing', 'schools.art-design-printing', 7, 2, 'art-design-printing', '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(34, 'Engineering', 'schools.engineering', 7, 2, 'engineering', '2021-03-11 17:20:31', '2021-11-19 07:15:59', NULL),
(35, 'Environmental Studies', 'schools.environmental-studies', 7, 2, 'environmental-studies', '2021-03-11 17:20:31', '2021-11-19 07:44:30', NULL),
(36, 'Liberal Studies', 'schools.liberal-studies', 7, 2, 'liberal-studies', '2021-03-11 17:20:31', '2021-11-19 07:53:08', NULL),
(37, 'Management & Business Studies Studies', 'schools.smbs', 7, 2, 'smbs', '2021-03-11 17:20:31', '2021-11-19 07:56:17', NULL),
(38, 'Technical Education', 'schools.technical-education', 7, 1, 'technical-education', '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(39, 'Science', 'schools.science', 7, 1, 'science', '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(40, 'Technology', 'schools.technology', 7, 2, 'technology', '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(42, 'Student Portal', 'students.portal', 8, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(44, 'Sports & Societies ', 'students.sports_societies', 8, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(46, 'Downloads', 'students.downloads', 8, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(47, 'Calenders', 'students.calenders', 8, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(48, 'Audit', 'service_units.audit', 9, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(49, 'Centre for Information Technology & Management', 'service_units.citm', 9, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(50, 'Medical Services', 'service_units.medical_services', 9, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(51, 'Physical Planning', 'service_units.physical_planning', 9, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(52, 'SERVICOM', 'service_units.servicom', 9, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(53, 'Skills Acquisition Centre', 'service_units.skill_acquisition_centre', 9, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(54, 'Student Industrial Work Experience Scheme', 'service_units.siwes', 9, 1, 'siwes', '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(55, 'Transport', 'service_units.transport', 9, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(56, 'works and Services', 'service_units.work_services', 9, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(57, 'Academic & Planning Unit', 'academic_units.academic_planning', 10, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(58, 'Applied Research & Technology Innovation', 'academic_units.research_technology', 10, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(59, 'Centre for Entrepreneurship Development', 'academic_units.ced', 10, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(60, 'College Central Research Laboratory', 'academic_units.central_laboratory', 10, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(61, 'Internal Quality Assurance', 'academic_units.iqa', 10, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(62, 'Academic Board Matters', 'registry.academic_board', 11, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(63, 'Academic Records', 'registry.academic_records', 11, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(64, 'Academic Staff Personnel', 'registry.academic_staff', 11, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(65, 'Admissions', 'registry.admissions', 11, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(66, 'Alumni Relations', 'registry.alumni_relations', 11, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(67, 'Centre for Continuous Studies', 'registry.ccs', 11, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(68, 'Council Affairs', 'registry.council_affairs', 11, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(69, 'Epe Campus', 'registry.epe_campus', 11, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(70, 'Examination Matters', 'registry.examination_matters', 11, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(71, 'General Administration/Legal Matters', 'registry.administrative_matters', 11, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(72, 'Budget & Expenditure', 'bursary.budget_expenditure', 12, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(73, 'Cashbook & Reconciliation', 'bursary.cashbook_reconciliation', 12, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(74, 'Final Accounts', 'bursary.final_accounts', 12, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(75, 'Fixed Assets', 'bursary.fixed_assets', 12, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(76, 'Loans & Advances', 'bursary.loans_advances', 12, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(77, 'Staff Accounts', 'bursary.staff_accounts', 12, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(78, 'Student Account', 'bursary.student_account', 12, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(79, 'Treasury', 'bursary.treasury', 12, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(80, 'Consult', 'more.consult', 13, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(81, 'Library', 'more.library', 13, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(82, 'Payments', 'more.payments', 13, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(85, 'Epe Campus', 'more.epe_campus', 13, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(87, 'e-Journal', 'more.e-journal', 13, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(88, 'FSDC', 'more.fsdc', 13, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(89, 'Staff List', 'staff.list', 14, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(90, 'Staff Portal', 'staff.portal', 14, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(91, 'E-learning', 'staff.e_learning', 14, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(92, 'Staff Email', 'staff.email', 14, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(93, 'Staff Accommodation', 'staff.accommodation', 14, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(94, 'Transcript Application Guidelines', 'alumni.transcript_guidelines', 15, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(95, 'Graduate Portal', 'alumni.portal', 15, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(96, 'Alumni Relations', 'alumni.relations', 15, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(97, 'Contact Us', 'contact.contact_us', 16, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(98, 'Social Media', 'contact.social_media', 16, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(99, 'Buildings in College', 'contact.buildings_in_college', 16, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(100, 'Faq', 'contact.faq', 16, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(101, 'Careers', 'contact.careers', 16, 1, NULL, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(102, 'Yabatech Consult Limited', 'enterprise.consult', 17, 1, NULL, '2021-11-03 20:07:54', '2021-11-03 20:07:54', NULL),
(103, 'Skills Acquisition', 'enterprise.acquisition', 17, 1, NULL, '2021-11-03 20:07:54', '2021-11-03 20:07:54', NULL),
(104, 'Facility Management', 'enterprise.facility', 17, 1, NULL, '2021-11-03 20:07:54', '2021-11-03 20:07:54', NULL),
(105, 'Asset Managment', 'enterprise.asset', 17, 1, NULL, '2021-11-03 20:07:54', '2021-11-03 20:07:54', NULL),
(106, 'Seminars & Conference', 'enterprise.seminars', 17, 1, NULL, '2021-11-03 20:07:54', '2021-11-03 20:07:54', NULL),
(107, 'Advert Services', 'enterprise.adverts', 17, 1, NULL, '2021-11-03 20:07:54', '2021-11-03 20:07:54', NULL),
(108, 'Consultancy Services', 'enterprise.services', 17, 1, NULL, '2021-11-03 20:07:54', '2021-11-03 20:07:54', NULL),
(109, 'Products', 'enterprise.products', 17, 1, NULL, '2021-11-03 20:07:54', '2021-11-03 20:07:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nav_lists`
--

CREATE TABLE `nav_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nav_lists`
--

INSERT INTO `nav_lists` (`id`, `name`, `menu_id`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'About', 1, 1, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(2, 'Administration', 2, 1, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(3, 'Admissions', 3, 1, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(4, 'Special Intervention', 4, 1, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(5, 'Annual Intervention', 5, 1, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(6, 'CCS', 6, 1, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(7, 'Schools', 7, 1, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(8, 'Students', 8, 1, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(9, 'Service Units', 9, 1, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(10, 'Academic Units', 10, 1, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(11, 'Registry', 11, 1, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(12, 'Bursary', 12, 1, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(13, 'Others', 13, 1, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(14, 'Staff', 14, 1, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(15, 'Alumni', 15, 1, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(16, 'Contact', 16, 1, '2021-03-11 17:20:31', '2021-03-11 17:20:31', NULL),
(17, 'Enterprise', 17, 1, '2021-11-03 19:59:07', '2021-11-03 19:59:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `links` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `school_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `posted_by` int(11) DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `links`, `content`, `image`, `created_at`, `updated_at`, `school_id`, `status`, `posted_by`, `type`) VALUES
(1, 'Fagbemi Promises To Reinstate SUG In Yabatec', NULL, '<p>Prince Lateef Fagbemi SAN, the Chairman Governing Council of Yaba College of Technology (YABATECH), has promised the students of the institution that the suspension placed on the Student Union Government (SUG) by the previous Governing Council led by Barrister Ebenezer Babatope would be lifted after certain conditions are met.</p>', 'sug.jpg', '2021-09-11 18:36:49', '2021-09-20 08:45:03', 0, 1, 1, NULL),
(2, 'Yabatech Plans N50b Endowment Fund To Improve Facilities, As Rector Praises The Sun, Seeks Partnership', NULL, '<p>RECTOR of Yaba College of Technology (YABATECH), Engr. Obafemi Omokungbe has revealed that the institution is planning a N50 billion endowment fund to improve facilities and restore the lost glory of the institution. Omokungbe disclosed this recently, when management of The Sun Publishing Limited led by the Managing Director/Editor-in-Chief, Mr. Onuoha Ukeh paid a courtesy visit to the institution.</p>', 'sun.jpg', '2021-09-11 18:36:49', '2021-09-20 09:20:31', 0, 1, 1, NULL),
(3, 'Yabatech Honours Art Icon, Ekundaye, At 70', NULL, 'The Yaba College of Technology (Yabatech) Art Museum, recently honoured Nike Ekundaye, the art legend, on her 70th birthday, during its exhibition.\n            The event, which took place at the School of Art, Design and Printing, was hosted by the museum with the theme “Living Blue, an Archive Retrospective.”\n            The art exhibition, to assist researchers, which centered on presentation on the life and practice of Ekundaye, showcased the art-works of the professional textile artist.', 'music.jpg', '2021-09-11 18:36:49', '2021-09-11 18:36:49', 0, 1, 1, NULL),
(4, 'YABATECH Welcomes Applications To September 2021 Music Certificate Course', NULL, 'Yaba College of Technology through YABATECH Consult Limited in corroboration with Diamond Well Integrated Concepts Limited announces September 2021 Music Certificates Course Admission in Music Production and Engineering, Music Law and Music Business.\n\n            The September Admission is the second set after the successful completion of the first set where students are taught and are introduced to the nitty gritty of music production in the serene, safe and conducive environment of the YABATEC', 'music.jpg', '2021-09-11 18:36:49', '2021-09-11 18:36:49', 0, 1, 1, NULL),
(5, 'Mushin Rotary Club Donates Books To Yabatech', NULL, 'The Rotary Club of Mushin Golden led by its President Mr. David Chidozie were in Yaba College of Technology (Yabatech) lately to contribute their own quota to the development of education in Nigeria by donating educative books to the College. They were highly magnanimous by donating 11 copies of Physics Mathematics by Jude Ndubuisi Onichi; 1 copy of Organic Chemistry by Brown and Frote, 1 copy of Organic Chemistry by William H. Brown, 1 copy of Organic Chemistry by G. Marc London, and 1 copy of Inorganic Chemistry by Gary L. Miessler and Donald A. Tarr to the College Library. The Rector of the Institution, Engr. Obafemi Omokungbe who was ably represented by the Deputy Rector Administration', 'donate.jpg', '2021-09-11 18:36:49', '2021-09-11 18:36:49', 1, 1, 1, NULL),
(6, 'Fagbemi Promises To Reinstate SUG In Yabatech', NULL, 'Prince Lateef Fagbemi SAN, the Chairman Governing Council of Yaba College of Technology (YABATECH), has promised the students of the institution that the suspension placed on the Student Union Government (SUG) by the previous Governing Council led by Barrister Ebenezer Babatope would be lifted after certain conditions are met.', 'sug.jpg', '2021-09-13 11:14:33', '2021-09-13 11:14:33', 2, 1, 1, NULL),
(7, 'Yabatech Plans N50b Endowment Fund To Improve Facilities, As Rector Praises The Sun, Seeks Partnership', NULL, 'RECTOR of Yaba College of Technology (YABATECH), Engr. Obafemi Omokungbe has revealed that the institution is planning a N50 billion endowment fund to improve facilities and restore the lost glory of the institution.\n\n            Omokungbe disclosed this recently, when management of The Sun Publishing Limited led by the Managing Director/Editor-in-Chief, Mr. Onuoha Ukeh paid a courtesy visit to the institution.', 'sun.jpg', '2021-09-13 11:14:33', '2021-09-13 11:14:33', 2, 1, 1, NULL),
(8, 'Yabatech Honours Art Icon, Ekundaye, At 70', NULL, 'The Yaba College of Technology (Yabatech) Art Museum, recently honoured Nike Ekundaye, the art legend, on her 70th birthday, during its exhibition.\n            The event, which took place at the School of Art, Design and Printing, was hosted by the museum with the theme “Living Blue, an Archive Retrospective.”\n            The art exhibition, to assist researchers, which centered on presentation on the life and practice of Ekundaye, showcased the art-works of the professional textile artist.', 'music.jpg', '2021-09-13 11:14:33', '2021-09-13 11:14:33', 2, 1, 1, NULL),
(9, 'YABATECH Welcomes Applications To September 2021 Music Certificate Course', NULL, 'Yaba College of Technology through YABATECH Consult Limited in corroboration with Diamond Well Integrated Concepts Limited announces September 2021 Music Certificates Course Admission in Music Production and Engineering, Music Law and Music Business.\n\n            The September Admission is the second set after the successful completion of the first set where students are taught and are introduced to the nitty gritty of music production in the serene, safe and conducive environment of the YABATEC', 'music.jpg', '2021-09-13 11:14:33', '2021-09-13 11:14:33', 2, 1, 1, NULL),
(10, 'Mushin Rotary Club Donates Books To Yabatech', NULL, 'The Rotary Club of Mushin Golden led by its President Mr. David Chidozie were in Yaba College of Technology (Yabatech) lately to contribute their own quota to the development of education in Nigeria by donating educative books to the College. They were highly magnanimous by donating 11 copies of Physics Mathematics by Jude Ndubuisi Onichi; 1 copy of Organic Chemistry by Brown and Frote, 1 copy of Organic Chemistry by William H. Brown, 1 copy of Organic Chemistry by G. Marc London, and 1 copy of Inorganic Chemistry by Gary L. Miessler and Donald A. Tarr to the College Library. The Rector of the Institution, Engr. Obafemi Omokungbe who was ably represented by the Deputy Rector Administration', 'donate.jpg', '2021-09-13 11:14:33', '2021-09-13 11:14:33', 2, 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notice_boards`
--

CREATE TABLE `notice_boards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `headline` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `school_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `posted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notice_boards`
--

INSERT INTO `notice_boards` (`id`, `headline`, `content`, `created_at`, `updated_at`, `school_id`, `status`, `posted_by`) VALUES
(1, '2021/2022 ND/HND/B.SC EDUCATION 100 LEVEL & DIRECT ENTRY Part Time Application Form Is Out', 'ADVERTISEMENT FOR APPLICATION FOR 2021/2022 ADMISSIONS INTO HIGHER NATIONAL DIPLOMA/NATIONAL DIPLOMA/B.SC EDUCATION 100 LEVEL & DIRECT ENTRY (PART TIME) IN AFFILIATION WITH UNIVERSITY OF NIGERIA NSUKKA AND CERTIFICATE PROGRAMMES.\n\n            Applications are hereby invited from suitably qualified candidates for admission into Part Time Programmes at Higher National Diploma/ National Diploma, B.Sc Education 100 level & Direct Entry (in affiliation with University of Nigeria Nsukka) and Certificate Programmes for the 2021/2022 academic session.', '2021-09-11 14:10:03', '2021-09-11 14:10:03', 0, 1, 1),
(2, 'The Chairman Governing Council of Yaba College of Technology (YABATECH), Prince Lateef fagbemi SAN,', '<p>The Chairman Governing Council of Yaba College of Technology (YABATECH), Prince Lateef fagbemi SAN, has assured the College Community that the Council is determined to ensure the institution experience growth and development in all ramifications. He made this remark at the inaugural meeting of the newly constituted council with staff of the College. Fagbemi disclosed that the council is coming with open minds and listening ears, and shall not only be fair to all but will be guided by the rule of law and due process in carrying out its mandate. He noted that staff motivation is essential to quality performance, and promised that the council shall ensure that what is required for the achievement of optimal staff motivation is put in place. He appreciated the Federal Government for re-appointing him as the Governing Council Chairman for the second time which has never happened before in the history of the College. He said that his appointment for the second time is an opportunity for him to serve humanity, and contribute his own quota to the development of education in Nigeria and in Yabatech in particular.</p>', '2021-09-11 14:10:03', '2021-09-20 09:29:21', 0, 1, 1),
(4, 'Second Semester Result is out ', 'This is thelk', '2021-09-20 23:00:00', NULL, 0, 1, NULL),
(5, 'You are cordially invited to the Global Entrepreneurship Week 2021 as scheduled below:', 'You are cordially invited to the Global Entrepreneurship Week 2021 as scheduled below:', '2021-11-18 23:00:00', NULL, 2, 1, 1),
(6, 'Yaba College of Technology (Yabatech) on Sunday was bestowed with the 2020 Global Excellence Special Recognition Award in Education.', 'Yaba College of Technology (Yabatech) on Sunday was bestowed with the 2020 Global Excellence Special Recognition Award in Education.', '2021-11-18 23:00:00', NULL, 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rectors`
--

CREATE TABLE `rectors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff_id` bigint(20) UNSIGNED DEFAULT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(222) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rectors`
--

INSERT INTO `rectors` (`id`, `name`, `staff_id`, `designation`, `about`, `message`, `image`, `created_at`, `updated_at`, `link`, `is_active`) VALUES
(1, 'Engr. obafemi omokungbe', NULL, 'rector', 'Rector Yaba College of Technology', 'On behalf of the Governing Council, College Management, Staff and Students, it is my pleasure and privilege to welcome you to Yaba College of Technology, the cradle of Higher Education in Nigeria. Established in 1947 as an immediate successor to Yaba Higher College, Yaba College of Technology, YABATECH as it is fondly referred to attained autonomous and independent status in 1969 by virtue of Decree 23 which granted it the exclusive mandate to provide full-time and part-time courses of instruction and training in Technology, Applied Science, Commerce and Management and in such other fields of applied learning relevant to technical, vocational and industrial needs of Nigeria.\r\n\r\nThe College which took off with academic programmes in Arts, Engineering and Management has expanded in leaps and bounds. It presently has 9 Schools namely: School of Art, Design & Printing, School of Industrial & Manufacturing Engineering, School of Civil & Natural Resources Engineering, School of Environment Studies, School of Liberal Studies, School of Management & Business Studies, School of Science, School of Technical Education, School of Technology, and 46 Departments with well over 40 Academic Programmes which cut across College Certificates, National Diploma (ND), Higher National Diploma (HND) and professional Diploma Certificates in Science, Engineering, Technology, Visual Arts and Management Sciences. Yaba College of Technology with a population of 20,000 students and 1,900 staff also offers B.Sc in Technical and Vocational Education Programmes such as Business Education, Industrial Technical Education, Mathematics Education, Fine Arts Education, Integrated Science Education and Computer Education. These Programmes are run in affiliation with University of Nigeria, Nsukka, Enugu State.\r\n\r\nThe College is well acknowledged both within and outside Nigeria as a pace setter and a unique Centre of Learning and Teaching. It has forged ahead and repositioned itself as an institution of class and excellence. The vision of the college, is “to be the leading higher educational institution in Nigeria by providing first-rate academic, professional and entrepreneurial education to our students, who are empowered to make a positive impact in the technological and socio-economic development of the country” and our mission therefore is “to produce knowledgeable and innovative graduates, worthy in skill and character, through effective teaching, learning and research for the technological advancement of Nigeria”. The College no doubt strives in all its activities to ensure it fulfills its vision and mission and sustains its position as the first and the best in the comity of Polytechnics in Nigeria.\r\n\r\nOur Registry as the nerve centre is up to date with all information required about the college. Feel free to navigate therein and keep abreast with all data concerning the college. This includes requirement for admission, procedure for applying for transcripts and examination statement of results, collection of certificates etc.\r\n\r\nThe Bursary unit is saddled with the responsibility for all financial transactions of the college.\r\nThe college boasts of a modern library equipped with current titles and an e-library to service all programmes in the college. It has internet facilities to assist users to access the internet for their academic searches. It also has well qualified and trained personnel to provide services to users.\r\n\r\nYaba College of Technology is the first higher institution in Nigeria to establish a Centre of Entrepreneurship Development with strong linkages with the world of commerce and industry. The Centre trains students in skill development for self reliance and as well exposes them to the world of work. Other notable Academic and Service units of the College include Centre for Continuous Studies (CCS), Academic Planning Unit (APU), Internal Quality Assurance (IQA), Flexible Skills Development Centre (FSDC), College Central Research Laboratory (CCPL), Center for Applied Research and Technological Innovation (ARTI), UNEVOC Centre, SERVICOM Unit, Continuous Professional Development Centre (CPDC), Yabatech Consult, and Centre for Information Technology and Management (CITM).\r\n\r\nOur Central Research Laboratory is the first of its kind in any polytechnic in Nigeria. The laboratory has equipment and facilities for industrial and degree programme research analyses. This is in addition to well equipped schools, workshops, studios and laboratories to complement the running of the Diploma Programmes. For over 70 years, Yaba College of Technology as a Centre for academic excellence contributed significantly to the socio-economic and political development of Nigeria through the Alumni. In the area of Research, Innovations, Teaching and Learning, the College has made giant strides and this has made it the first choice among candidates seeking admission into Polytechnic in our dear Country. It also boasts of a Medical Centre which is also an NHIS Centre open round the clock to staff and students.\r\n\r\nThe College is acknowledged for its sporting prowess and has excelled in both Nigeria Polytechnic Games (NIPOGA) and West Africa Polytechnic Games (WAPOGA). The Philip Adegbile Sports Complex also known as the home of champions is one of the best sporting facilities around.\r\nThe College has a second campus located at Epe. The campus is presently home to Departments of Leisure and Tourism, Marine Engineering, Agricultural Technology and Agric. Bio-Environmental Engineering. The Michael Otedola Center for Information and Communication is also housed at the Epe Campus.\r\n\r\nThe College’s human resources are its areas of strength as it boast of well qualified and experience lecturers. The emphasis on Human Capital Development has distinguished our employees in their fields of endavour. The possession of higher degrees and proficiency workshops and conferences are a priority in this regard. Consequently, our students are highly sought after in the industries and workplaces arising from well delivered curriculum.\r\n\r\nYaba College of Technology popularly referred to as Yaba the Great! is committed to maintaining its high standard and will not cease until all its lofty goals are achieved. I therefore heartily welcome you to the college website and portal.\r\n\r\nYabatech....the first, still best.\r\nThank you.', 'rector.jpg', '2021-03-22 23:00:00', '2021-11-08 01:18:48', 'rector', 2),
(2, 'The Deputy Rector Admin', NULL, 'Deputy Rector Administration', '<p>edited The Deputy Rector (Administration) assists the Rector in the performance of administrative functions, to ensure a smooth running of administrative process, as well as matters bordering on financial, welfare, labour, conflict resolution etc. She shall also assist the Rector to review operational difficulties in the areas stated above, and proffer solutions to attendant problems. Among the functions of the office is to oversee the activities of the following service units: Works and Services, Students&rsquo; Affairs, Medical Services, Fire Prevention Services, Transport, Surveillance, SERVICOM, UNIVOC Continuing Professional Development Centre (CPDC) and Anti-Corruption and Transparency Monitoring (ACTU)</p>', '<p>The Deputy Rector (Administration) is to also oversee/monitor the following areas of College administration, and report to Rector on same: 1.0 General Administration with respect to staff recruitment, discipline and monitoring the activities of administrative committees. 2.0 Financial Matters such as Authorize expenditure within approved limit. 3.0 Resolve conflicts and complaints emanating from any College project 4.0 Maintenance of Structure and Equipment: The Deputy Rector Administration shall: a. Monitor and ensure continuous implementation of standard maintenance schedules on all fixed or moveable facilities. b. Oversee usage and maintenance of College vehicles. c. Oversee maintenance of good aesthetic environment in the internal and external premises of the College. 5.0 Medical Services Monitor medical services delivery to the College community 6.0 Security and Safety a. Oversee the overall security arrangements in the College and the activities of fire prevention unit. b. Responsible for issuance of gate pass for movement of equipment and materials from the College and monitoring the return of such equipment/materials. 7.0 Labour, Union and Staff Welfare Matters a. Ensure maintenance of good rapport between management and the staff unions. b. Ensure conflict resolution involving unions, staff and students. 8.0 Pensioners&rsquo; Matters Monitor matters of protocol, liaison and request from pensioners&rsquo; associations. 9.0 Student Affairs a. Supervise the administration of students&rsquo; affairs b. Monitor the provision of basic and essential amenities to the students&rsquo; halls of residence. 10.0 Staff Secondary School and Nursery/Primary Schools Monitor the activities of the Management Committee of the Secondary and Nursery/Primary Schools. 11.0 Any Other Duties the Rector may from time to time assign.</p>', 'dradmin.jpg', NULL, '2021-09-16 23:11:00', 'deputy_administration', NULL),
(3, 'The librarian', NULL, 'The Ag. Polytechnic Librarian', 'The library is the nerve-centre of the College. It is positioned to cater for the information needs of staff, students and the entire College community. It is rich in both print and electronic information resources that are aimed at improving teaching, learning and research activities.  ', 'The library is the nerve-centre of the College. It is positioned to cater for the information needs of staff, students and the entire College community. It is rich in both print and electronic information resources that are aimed at improving teaching, learning and research activities. The personnel are seasoned information practitioners with wealth of experiences and willingness to provide necessary services that will facilitate career advancement and fulfillment of all stakeholders.\r\nIn order to ensure efficient service delivery, the library operations have been structured into six Departments as follows:-\r\nThe Polytechnic Librarian’s Office\r\nReaders’ Services Department\r\nTechnical Services Department\r\nSerials Department\r\nInformation and Communication Technology Department\r\nArchive, Research and Documents Department', 'librarian.jpg', NULL, NULL, 'librarian', NULL),
(4, 'rector', NULL, 'Visitor', '<p>dksjdsjkfsf</p>', '<p>kldlsdfs</p>', NULL, '2021-09-16 21:14:12', '2021-09-16 21:14:12', NULL, NULL),
(5, 'rector', NULL, 'Governing Council', '<p>dksjdsjkfsf</p>', '<p>kldlsdfs</p>', NULL, '2021-09-16 21:15:28', '2021-09-16 21:15:28', NULL, NULL),
(6, 'rector', NULL, 'Deputy Rector Academics', '<p>kdsfjsdkfds</p>', '<p>sdkjsdfjksdf</p>', NULL, '2021-09-16 21:18:12', '2021-09-16 21:18:12', 'deputy_academics', NULL),
(8, 'just added new', NULL, 'Chairman Council', '<p>lkldlsfk</p>', '<p>sddfsdf</p>', 'a5dd4b861e014c0bd5370bd6b86e947c.png', '2021-09-16 21:25:38', '2021-09-16 21:25:38', 'chairman_council', NULL),
(9, 'rector', NULL, 'Governing Council', '<p>kjsdfks</p>', '<p>askasjk</p>', 'eea9a1ceb6d5d37c1babad130f93cfba.png', '2021-09-16 21:27:37', '2021-09-16 21:27:37', 'governing_council', NULL),
(11, 'Nanre Charles Benedi', NULL, 'efkgdjdf', NULL, '<p>ldfgdlg</p>', NULL, '2021-11-08 00:28:29', '2021-11-08 00:28:29', 'rector', NULL),
(13, 'Nanre Charles Benedi', 1, 'efkgdjdf', NULL, '<p>ldfgdlg</p>', NULL, '2021-11-08 00:41:21', '2021-11-08 00:41:21', 'rector', NULL),
(14, 'Olaifa Oluwafemi Adeyinka', 2, 'CHIEF DATA PROCESSING ASSISTANT', NULL, '<p>sdfksjdfksfdjksdfjksdfksdjkfmsdfjs</p>\r\n\r\n<p>sdfjskdfskfd</p>\r\n\r\n<p>sdnfskjdfns</p>\r\n\r\n<p>snksfnd</p>\r\n\r\n<p>sdjnskfs</p>\r\n\r\n<p>nsdfksfndjks</p>\r\n\r\n<p>sdfnsjkfsdn</p>\r\n\r\n<p>snsdkfnskdf</p>\r\n\r\n<p>sjsdfksdfksf</p>\r\n\r\n<p>sndfks</p>\r\n\r\n<p>sdfkns</p>\r\n\r\n<p>nsdflks</p>\r\n\r\n<p>nsds</p>\r\n\r\n<p>sndfo</p>', NULL, '2021-11-08 00:43:55', '2021-11-08 00:43:55', 'deputy_administration', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rector_news`
--

CREATE TABLE `rector_news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rector_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'SuperAdmin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `routings`
--

CREATE TABLE `routings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `name`, `link`, `description`, `status`, `created_at`, `updated_at`, `deleted_at`, `slug`) VALUES
(1, 'technology', 'technology', NULL, 1, NULL, NULL, NULL, 'technology'),
(2, 'School of Arts and Designs', '', 'The Faculty of Science was one of the three Foundation Faculties at the inception of the. \r\nThe founding fathers  made it a deliberate policy to attain and maintain a very high academic standard. Consequently,  It was pre-eminent in Africa and was recognised worldwide as a centre of excellence. The Faculty expanded steadily from its initial six Departments (Botany, Chemistry, Geography, Mathematics, Physics and Zoology) to ten Departments (Archaeology and Anthropology, Botany and Microbiology, Chemistry, Computer Science, Geography, Geology, Mathematics, Physics, Statistics and Zoology). Currently, the Faculty consists of eleven Departments: Archaeology and Anthropology, Botany, Microbiology, Chemistry, Computer Science, Geography, Geology, Mathematics, Physics, Statistics and Zoology.', 1, NULL, NULL, NULL, 'art-design-printing'),
(20, 'Environmental Studies', 'environmental-studies', '<p>kdsjskf</p>', 1, '2021-11-19 07:44:30', '2021-11-19 07:44:30', NULL, 'environmental-studies');

-- --------------------------------------------------------

--
-- Table structure for table `school_deans`
--

CREATE TABLE `school_deans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `expired_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `school_deans`
--

INSERT INTO `school_deans` (`id`, `school_id`, `name`, `image`, `message`, `created_at`, `updated_at`, `staff_id`, `status`, `expired_at`) VALUES
(1, 2, 'Michael kachi', 'deanimg.jpg', '<p>Editedam glad to welcome your here today to the department technologfy Payment and Registration for Part-Time Students for First Semester 2020/2021 has been extended till Friday (25th June, 2021) MidnightPayment and Registration for Part-Time Students for First Semester 2020/2021 has been extended till Friday (25th June, 2021) MidnightPayment and Registration for Part-Time Students for First Semester 2020/2021 has been extended till Friday (25th June, 2021) MidnightPayment and Regisdfkjsfdksfdsstration for Part-Time Students for First Semester 2020/2021 has been extended till Friday (25th June, 2021) MidnightPayment and Registration for Part-Time Students for First Semester 2020/2021 has been extended till Friday (25th June, 2021) MidnightPayment and Registration for Part-Time Students for First Semester 2020/2021 has been extended till Friday (25th June, 2021) MidnightPayment and Registration for Part-Time Students for First Semester 2020/2021 has been extended til</p>', '2021-05-24 23:00:00', '2021-11-19 05:52:13', NULL, NULL, '2021-11-08 00:00:00'),
(2, 1, 'prince Kachi', 'deanimg.jpg', 'am glad to welcome your here today to the department technologfy Payment and Registration for Part-Time Students for First Semester 2020/2021 has been extended till Friday (25th June, 2021) MidnightPayment and Registration for Part-Time Students for First Semester 2020/2021 has been extended till Friday (25th June, 2021) MidnightPayment and Registration for Part-Time Students for First Semester 2020/2021 has been extended till Friday (25th June, 2021) MidnightPayment and Registration for Part-Time Students for First Semester 2020/2021 has been extended till Friday (25th June, 2021) MidnightPayment and Registration for Part-Time Students for First Semester 2020/2021 has been extended till Friday (25th June, 2021) MidnightPayment and Registration for Part-Time Students for First Semester 2020/2021 has been extended till Friday (25th June, 2021) MidnightPayment and Registration for Part-Time Students for First Semester 2020/2021 has been extended till Friday (25th June, 2021) MidnightPayment and Registration for Part-Time Students for First Semester 2020/2021 has been extended till Friday (25th June, 2021) MidnightPayment and Registration for Part-Time Students for First Semester 2020/2021 has been extended till Friday (25th June, 2021) MidnightPayment and Registration for Part-Time Students for First Semester 2020/2021 has been extended till Friday (25th June, 2021) Midnight', '2021-07-12 23:00:00', NULL, NULL, NULL, '2021-11-09 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `school_galleries`
--

CREATE TABLE `school_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_id` bigint(20) UNSIGNED NOT NULL,
  `header_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `school_galleries`
--

INSERT INTO `school_galleries` (`id`, `school_id`, `header_image`, `gallery`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'images.jpg', '[\"image1.jpg\",\"image2.jpg\",\"image3.jpg\",\"image4.jpg\"]', 1, NULL, NULL),
(2, 2, '394e6b6c73f071044a96a041d6fa0136.jpg', '[\"image1.jpg\",\"image2.jpg\",\"image3.jpg\",\"image4.jpg\"]', 1, NULL, NULL),
(4, 20, 'images.jpg', '[\"a5da09ae02afe85ff733643fa7846ebb.jpg\",\"394e6b6c73f071044a96a041d6fa0136.jpg\",\"db30e599642aec6c9280712821889574.jpg\"]', NULL, '2021-11-19 07:44:34', '2021-11-19 07:44:34');

-- --------------------------------------------------------

--
-- Table structure for table `sport_complexes`
--

CREATE TABLE `sport_complexes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `headine` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `departments` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qualification` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Publications` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `research_areas` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cv` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school_id` int(11) DEFAULT NULL,
  `dob` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dappt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dprom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gradelevel` int(11) DEFAULT NULL,
  `origin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lga` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signature` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sex` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `personal_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `image`, `email`, `department_id`, `category_id`, `departments`, `designation`, `qualification`, `Publications`, `research_areas`, `created_at`, `updated_at`, `cv`, `bio`, `school_id`, `dob`, `staff_no`, `dappt`, `dprom`, `gradelevel`, `origin`, `lga`, `signature`, `phone`, `mobile`, `sex`, `unit`, `title`, `birthday`, `personal_email`) VALUES
(1, 'Nanre Charles Benedi', '0b76f89fbdff7fd262fdc6edcce94b79.jpg', 'nanre.charlse@yabatech.edu.n', 1, 3, 'efkgdjdf', NULL, NULL, NULL, NULL, '2021-09-13 23:07:27', '2021-11-08 00:41:21', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Olaifa Oluwafemi Adeyinka', 'cf8ea4ed1917589d348c2c657e99e62f.jpg', NULL, 2, 2, 'CHIEF DATA PROCESSING ASSISTANT', 'CHIEF DATA PROCESSING ASSISTANT', NULL, NULL, NULL, '2021-09-13 23:07:27', '2021-11-08 00:43:55', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Olatunji Folashade Funmilola', 'prof.jpg', NULL, 2, 2, 'Office Of The Dean', 'CHIEF CLERICAL OFFICER', 'Bachelor of Science (Demography & Social Statistics)', NULL, NULL, '2021-09-13 23:07:27', '2021-09-13 23:07:27', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Adesokan Oluwakemi Adepero', 'prof.jpg', 'oluwakemi.adesokan@yabatech.edu.ng', 2, 2, 'Office Of The Dean', 'SENIOR CONFIDENTIAL SECRETARY', 'NATIONAL DIPLOMA (Office Technology Management), HIGHER NATIONAL DIPLOMA (Office Technology Management)', NULL, NULL, '2021-09-13 23:07:27', '2021-09-13 23:07:27', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Alebiosu Kabiru Olatoye', 'kabi.jpg', 'olatoye.alebiosu@yabatech.edu.ng', 2, 2, 'Office Of The Dean', 'SENIOR CLERICAL OFFICER', 'NATIONAL DIPLOMA (Business Administration), HIGHER NATIONAL DIPLOMA (Business Administration)', NULL, NULL, '2021-09-13 23:07:27', '2021-09-13 23:07:27', NULL, 'lfkslfdmlsdfsd;fkmsdf;sdfk;lsdfnks;dfnspdfpehiperphiutetreitethiehtephthethethiperhiethirherrerhethetr', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Alli Hajarat Abdul, Mrs.', 'ali.jpg', 'hajarat.ali@yabatech.edu.ng', 2, 2, 'Office Of The Dean', 'CHIEF DATA PROCESSING ASSISTANT', 'NATIONAL DIPLOMA (Business Administration), HIGHER NATIONAL DIPLOMA (Business Administration)', NULL, NULL, '2021-09-13 23:07:27', '2021-09-13 23:07:27', NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'michael kachi', '6e5c6686cf044af596dfe08d92d7b45e.png', 'michaelkachi@yabatech.edu.ng', 1, 1, NULL, NULL, 'HND computer science', NULL, NULL, '2021-09-18 11:46:10', '2021-09-18 11:46:10', NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'michael kachi', '0099fdac00154d0decf3c58bfe8e0d19.png', NULL, 1, 1, NULL, NULL, 'HND computer science', NULL, NULL, '2021-09-18 11:46:37', '2021-09-18 11:46:37', NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staff_posts`
--

CREATE TABLE `staff_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff_posts`
--

INSERT INTO `staff_posts` (`id`, `name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Dean', NULL, '2021-11-08 01:48:43', '2021-11-08 01:48:43'),
(2, 'HOD', NULL, '2021-11-08 01:48:43', '2021-11-08 01:48:43'),
(3, 'Assist. Dean', NULL, '2021-11-08 01:48:43', '2021-11-08 01:48:43'),
(4, 'Assist. HOD', NULL, '2021-11-08 01:48:43', '2021-11-08 01:48:43');

-- --------------------------------------------------------

--
-- Table structure for table `tetfund_books`
--

CREATE TABLE `tetfund_books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dpt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `book_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tetfund_books`
--

INSERT INTO `tetfund_books` (`id`, `name`, `dpt`, `book_title`, `year`, `status`, `created_at`, `updated_at`) VALUES
(1, 'IYANDA OLADIMEJI', 'ENVIROMENT', 'PLANNING STUDIO DESIGN', '2012-2014', 'Completed & Paid', '2021-09-13 10:31:32', '2021-09-13 10:31:32');

-- --------------------------------------------------------

--
-- Table structure for table `tetfund_housings`
--

CREATE TABLE `tetfund_housings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `headline` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tetfund_ict`
--

CREATE TABLE `tetfund_ict` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `headline` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tetfund_ict`
--

INSERT INTO `tetfund_ict` (`id`, `image`, `headline`, `created_at`, `updated_at`) VALUES
(1, 'ict1.jpg', NULL, '2021-09-13 13:39:09', '2021-09-13 13:39:09'),
(2, 'ict2.jpg', NULL, '2021-09-13 13:39:09', '2021-09-13 13:39:09'),
(3, 'ict3.jpg', NULL, '2021-09-13 13:39:09', '2021-09-13 13:39:09'),
(4, 'ict4.jpg', NULL, '2021-09-13 13:39:09', '2021-09-13 13:39:09'),
(5, 'ict5.jpg', NULL, '2021-09-13 13:39:09', '2021-09-13 13:39:09'),
(6, 'ict6.jpg', NULL, '2021-09-13 13:39:09', '2021-09-13 13:39:09'),
(7, 'ict7.jpg', NULL, '2021-09-13 13:39:09', '2021-09-13 13:39:09'),
(8, 'ict8.jpg', NULL, '2021-09-13 13:39:09', '2021-09-13 13:39:09');

-- --------------------------------------------------------

--
-- Table structure for table `tetfund_research`
--

CREATE TABLE `tetfund_research` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lead_research` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dpt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tetfund_research`
--

INSERT INTO `tetfund_research` (`id`, `lead_research`, `dpt`, `title`, `duration`, `year`, `created_at`, `updated_at`) VALUES
(1, 'NWAKANMA NDUBUISI M C', 'SCIENCE', 'GENETIC CHARACTERIZATION AND ISOLATION OF ANTI- PLASMODIAL COMPOUNDS FROM THE LEAVE OF VERONIA AMYGDALINA', '12 MONTH', '2012-2014', '2021-09-12 01:06:33', '2021-09-12 01:06:33'),
(2, 'ADEBAYO MIHEAL O', 'SCIENCE', 'FRAMEWORK FOR ASSESSING REWORK IN BULDING PROJECTS IN SOUTH-WEST NIGERIA', '12 MONTH', '2012-2014', '2021-09-12 01:06:33', '2021-09-12 01:06:33'),
(3, 'MORDI EMMANUEL', 'ART', 'ORGANIC SHELLS AITERNATIVE SOURCE OF CALCIUM CARBONATE FOR GERAMIC GLAZE FORMULATION ENVIROMENTAL PROTECTION', '12 MONTH', '2012-2014', '2021-09-12 01:06:33', '2021-09-12 01:06:33'),
(4, 'ENGR MOLOKWU I.M', 'ENGINEERING', 'DESIGNING AND FABRICATION OF UNMANNED UNDER WATER CRAFT FOR MARINE SECURITY OPERATION IN NIGERIA', '12 MONTH', '2012-2014', '2021-09-12 01:06:33', '2021-09-12 01:06:33'),
(5, 'AGBETUNDE LATEEF A', 'MANAGEMENT', 'PUBLIC- PRIVATE PARTNERSHIP AND TRANSPORT MANAGEMENT IN NIGERIA', '12 MONTH', '2012-2014', '2021-09-12 01:06:33', '2021-09-12 01:06:33'),
(6, 'DR MRS DOHERTY', 'SCIENCE', 'CONTROL AND UTILIZATION OF EICHHORNIA CRASSIPS (WATER HYACINTH )IN LAGOS', '12 MONTH', '2012-2014', '2021-09-12 01:06:33', '2021-09-12 01:06:33'),
(7, 'MRS ODUSANMI J ADELANKE', 'SCIENCE', 'SYNTHESIS OF SOME SULPHUR CONTAING TRICYCLIC HETROCYCLES WITH PHYSIOLOGICAL ACTIVITIES', '12 MONTH', '2012-2014', '2021-09-12 01:06:33', '2021-09-12 01:06:33'),
(8, 'DR MRS KANIFE UCHENNA C', 'SCIENCE', 'BIOLOGICAL CONTROL OF ANTHRACNOSE ANDCEROSPORA LEAF SPOT DISEASE CAPSICUM ANNUM(CHILLI PEPPER) AND CELOSIA ARGENTA (LAGOS SPINACH) GROWN IN LAGOS', '12 MONTH', '2012-2014', '2021-09-12 01:06:33', '2021-09-12 01:06:33'),
(9, 'KOLAWOLE JOSEPH', 'SCIENCE', 'ANTIFLAMMATORY AND WOUND HEATING POTENTIAL OF SELECTED MEDICAL PLANTS FROM SOUTH-WEST NIGERIA', '12 MONTH', '2012-2014', '2021-09-12 01:06:33', '2021-09-12 01:06:33'),
(10, 'OVIONA GODWIN O', 'SCIENCE', 'BIOLOGICAL EFFECTS OF POLLUTANTS ON FISH SPECIES COLLECTED FROM DIFFERENT PART OF THE LAGOS LAGOON: A HISTOPHTHOLOGICAL STUDY', '12 MONTH', '2012-2014', '2021-09-12 01:06:33', '2021-09-12 01:06:33'),
(11, 'EDEGHAGBA, BEATRICE', 'SCIENCE', 'ISOLATION AND CHARACTERIZATION OF DIESEL DEGRADING BACTERIA FROM AIR IN OIL POLLUTED SITES USING 165 RDNR GENE ANALYSIS', '12 MONTH', '2012-2014', '2021-09-12 01:06:33', '2021-09-12 01:06:33'),
(12, 'OKOLIE PN', 'SCHOOL OF TECHNOLOGY', 'APPLICATION OF MICROBIAL GUMS AND LACTIC ACID BACTERIA FROM PALM SAP  AS STABILISZING AGENT AND PROBIOTICS IN YOUGHURT PRODUCTION', '12 MONTH', '2012-2015', '2021-09-12 01:06:33', '2021-09-12 01:06:33'),
(13, 'ASHADE OLUFEMI', 'TECHNOLOGY', 'GINGER PEELS AS ALTERNATIVE FOR MAIZE IN FISH MEAL & ITS EFFECTS ON THE PHYSIOLOSY OF FISH', '12 MONTH', '2012-2015', '2021-09-12 01:06:33', '2021-09-12 01:06:33'),
(14, 'SOLAKUNMI OLUWAJOBA', 'SCIENCE', 'APPLICATION OF MICROBIAL GUMS AND LACTIC ACID BACTERIA FROM PALM SAP  AS STABILISZING AGENT AND PROBIOTICS IN YOUGHURT', '12 MONTH', '2012-2015', '2021-09-12 01:06:33', '2021-09-12 01:06:33');

-- --------------------------------------------------------

--
-- Table structure for table `tetfund_supports`
--

CREATE TABLE `tetfund_supports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `headline` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tetfund_supports`
--

INSERT INTO `tetfund_supports` (`id`, `image`, `headline`, `created_at`, `updated_at`) VALUES
(1, 'sci.jpg', 'Engineering Building', '2021-09-13 12:07:51', '2021-09-13 12:07:51'),
(2, 'bus.jpg', 'Bus Intervention', '2021-09-13 12:07:51', '2021-09-13 12:07:51'),
(3, 'gen.jpg', 'Generator Intervention', '2021-09-13 12:07:51', '2021-09-13 12:07:51'),
(4, 'multi.jpg', 'Multipurpose Building', '2021-09-13 12:07:51', '2021-09-13 12:07:51'),
(5, 'tech.jpg', 'Food Technology Bbuilding', '2021-09-13 12:07:51', '2021-09-13 12:07:51');

-- --------------------------------------------------------

--
-- Table structure for table `tetfund_trainings`
--

CREATE TABLE `tetfund_trainings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `funding_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sex` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `programme` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `university` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tetfund_trainings`
--

INSERT INTO `tetfund_trainings` (`id`, `funding_date`, `name`, `sex`, `programme`, `university`, `country`, `start_year`, `end_year`, `remark`, `created_at`, `updated_at`) VALUES
(1, '9/20/2017', 'OGUNBISI MERCY ADENIKE', 'Female', 'Benchwork-BENCHWORK', 'NANJING UNIVERSITY', 'china', '2017', '2020', 'return', '2021-09-13 09:54:04', '2021-09-13 09:54:04'),
(2, '9/24/2009', 'BALOGUN EMMANUEL M.', 'Male', 'Masters - Fashion Design', 'UNIVERSITY OF SOUTHAMPTON', 'United Kingdom', '2008', '2012', 'return', '2021-09-13 09:54:04', '2021-09-13 09:54:04'),
(3, '5/17/2010', 'YEKINI NURENI ASAFA', 'Male', 'Masters - Computer', 'UNIVERSITY OF LAGOS', 'Nigeria', '2008', '2010', 'return', '2021-09-13 09:54:04', '2021-09-13 09:54:04'),
(4, '1/13/2011', 'MUKAIL OLAWUYI OYEYEMI', 'Male', 'Masters - PUBLIC HEALTH', 'UNIVERSITI MALAYSIA', 'MALAYSIA', '2009', '2011', 'return', '2021-09-13 09:54:04', '2021-09-13 09:54:04'),
(5, '1/13/2011', 'OMOLABI ABIMBOLA OLUFEMI', 'Female', 'Master - GEOGRAPHY', 'UNIVERSITI IBADAN', 'NIGERIA', '2010', '2013', 'return', '2021-09-13 09:54:04', '2021-09-13 09:54:04'),
(6, '1/13/2011', 'ABIONA OLALEYE', 'Male', 'Masters - CIVIL ENGINEERING', 'UNIVERSITI IBADAN', 'NIGERIA', '2010', '2012', 'return', '2021-09-13 09:54:04', '2021-09-13 09:54:04'),
(7, '1/13/2011', 'BADMUS ISMAILA', 'Male', 'Masters - MECHANICAL ENGINEERING', 'UNIVERSITI IBADAN', 'NIGERIA', '2010', '2012', 'return', '2021-09-13 09:54:04', '2021-09-13 09:54:04'),
(8, '1/13/2011', 'OGUNREMI AYORINDE BOLUWAJI', 'Male', 'Masters - PHYSICS', 'OLABISI ONABANJO UNIVERSITY', 'NIGERIA', '2010', '2012', 'return', '2021-09-13 09:54:04', '2021-09-13 09:54:04'),
(9, '1/13/2011', 'OLADOSU OLAKUNLE ABIMBOLA', 'Male', 'Masters - COMPUTER SCIENCE', 'UNIVERSITY OF IBADAN', 'NIGERIA', '2010', '2012', 'return', '2021-09-13 09:54:04', '2021-09-13 09:54:04'),
(10, '1/27/2011', 'OLUWOLE CATHERINE FUNMI', 'Female', 'Masters - CIVIL ENGINEERING', 'UNIVERSITY OF IBADAN', 'NIGERIA', '2010', '2012', 'return', '2021-09-13 09:54:04', '2021-09-13 09:54:04'),
(11, '2/21/2012', 'FALILAT IDOWU OLUBUNMI', 'Female', 'Masters - M.SC CONSTRUCTION LAW & DIAPUTE AND RESOLUTION', 'UNIVERSITY OF CENTRAL LANCASHIRE', 'UNITED KINGDOM', '2010', '2012', 'return', '2021-09-13 09:54:04', '2021-09-13 09:54:04'),
(12, '2/21/2012', 'OJO OLANREWAJU', 'Male', 'Masters - M.TECH COMPUTER SCIENCE & TECH', 'LADOKE AKINTOLA UNIVERSITY', 'Nigeria', '2010', '2012', 'return', '2021-09-13 09:54:04', '2021-09-13 09:54:04'),
(13, '2/21/2012', 'BEATRICE OLUKEMI ADEYOKUN', 'Female', 'Masters - M.SC LIBRARY INFORMATIONSCIENCE', 'UNIVERSITY OF IBADAN', 'Nigeria', '2010', '2012', 'return', '2021-09-13 09:54:04', '2021-09-13 09:54:04'),
(14, '2/21/2012', 'GEOREGE LUKMAN ABOLAJI', 'Male', 'Masters - M.SC LIBRARY INFORMATIONSCIENCE', 'UNIVERSITY OF IBADAN', 'Nigeria', '2010', '2012', 'return', '2021-09-13 09:54:04', '2021-09-13 09:54:04'),
(15, '12/17/2012', 'ORINTUNSIN TOYOSI KOLA', 'Male', 'Masters - M.ENG PRODUCTION ENGINEERING', 'UNIVERSITY OF AGRIC, ABEOKUTA', 'Nigeria', '2010', '2012', 'return', '2021-09-13 09:54:04', '2021-09-13 09:54:04'),
(16, '12/17/2012', 'AKANBI OLADAYO KAYODE', 'Male', 'Masters - M.A VISUAL ARTS', 'UNIVERSITY OF LAGOS', 'Nigeria', '2010', '2012', 'return', '2021-09-13 09:54:04', '2021-09-13 09:54:04'),
(17, '12/17/2012', 'OLADUNJOYE OLAWALE TAOFIK', 'Male', 'Masters - M.PHILOSOPHY', 'BABCOCK UNIVERSITY', 'Nigeria', '2010', '2012', 'return', '2021-09-13 09:54:04', '2021-09-13 09:54:04');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `links` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(222) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `name`, `header_image`, `about`, `title`, `links`, `images`, `slug`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Audit Units', 'citm.jpg', 'The audit department is a unit within the rectory that is responsible for evaluating operational procedures.', NULL, NULL, 'audit.jpg', 'audit', 1, '2021-09-06 23:28:06', '2021-09-06 23:28:06', NULL),
(2, 'CITM Units', 'citm.jpg', 'The Centre for Information Technology and Management (CITM) is a unit under the Rectory which provides important services such as: supporting delivery of Information Technology processing, development and implementation of software applications and adding credibility to all information generated in the College for management decision making. The Unit is also designing and implementing ICT strategies for the Polytechnic through human development capacities and maintenance of ICT infrastructure and Network services.', NULL, NULL, 'citm.jpg', 'citm', 1, '2021-09-06 23:28:06', '2021-09-06 23:28:06', NULL),
(3, 'Medical Service Unit', 'citm.jpg', 'The Medical Centre is the unit where operations of all medical services for the College take place. It is a highly comprehensive medical centre with facilities such as medical laboratory services, x-ray, medical records, pharmacy, out-patient department, consulting rooms, nurses station, treatment rooms, minor theatre, observation rooms (wards) male and female with 3-4 beds in each room, immunization and dressing rooms, etc..', NULL, NULL, 'medical.jpg', 'medical_services', 1, '2021-09-06 23:28:06', '2021-09-06 23:28:06', NULL),
(4, 'Academic Planning Units', 'academic.png', 'The Academic Planning Unit of Yaba College of Technology, Yaba is an academic organ of the College under the office of the Rector. It was established in October 2011 during the leadership of former Rector, Dr. (Mrs.) M. K. Ladipo. The Unit is controlled by a Director and assisted by other staff.VISION OF THE UNIT To be outstanding Academic Planning Unit among tertiary institutions that will make impact in teaching, learning and research.', NULL, NULL, 'academic.jpg', 'academic_planning', 1, '2021-09-06 23:28:06', '2021-09-06 23:28:06', NULL),
(5, 'Academic Board Units', 'board.png', 'Coverage of all Academic Board Meetings.\n            Follow up actions and implementation of all decisions taken at Academic Board meetings.\n            Taking custody of Academic Board Records.\n            Vetting of convocation programme.\n            Collation of students’ awards.\n            .', NULL, NULL, 'board.jpg', 'academic_board', 1, '2021-09-06 23:28:06', '2021-09-06 23:28:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `image`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Michael Kachi', 'mikkynoble@gmail.com', NULL, '$2y$10$LameUIJ5ZQSb7IXYBgLaKuiDU4eqGsWZrQ3qlA4DrBboFWAhFTKPe', 'image.jpg', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activities_user_id_foreign` (`user_id`);

--
-- Indexes for table `administrations`
--
ALTER TABLE `administrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission_lists`
--
ALTER TABLE `admission_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adverts`
--
ALTER TABLE `adverts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alumni_news`
--
ALTER TABLE `alumni_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `departments_school_id_foreign` (`school_id`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `events_school_id_foreign` (`school_id`);

--
-- Indexes for table `hods`
--
ALTER TABLE `hods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_slider_images`
--
ALTER TABLE `home_slider_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `libraries`
--
ALTER TABLE `libraries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nav_dropdowns`
--
ALTER TABLE `nav_dropdowns`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nav_dropdowns_nav_list_id_foreign` (`nav_list_id`);

--
-- Indexes for table `nav_lists`
--
ALTER TABLE `nav_lists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nav_lists_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice_boards`
--
ALTER TABLE `notice_boards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rectors`
--
ALTER TABLE `rectors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rector_news`
--
ALTER TABLE `rector_news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rector_news_rector_id_foreign` (`rector_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `routings`
--
ALTER TABLE `routings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `routings_name_unique` (`name`),
  ADD KEY `routings_school_id_foreign` (`school_id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `schools_link_unique` (`link`);

--
-- Indexes for table `school_deans`
--
ALTER TABLE `school_deans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_galleries`
--
ALTER TABLE `school_galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `school_galleries_school_id_foreign` (`school_id`);

--
-- Indexes for table `sport_complexes`
--
ALTER TABLE `sport_complexes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD KEY `staff_department_id_foreign` (`department_id`),
  ADD KEY `staff_category_id_foreign` (`category_id`);

--
-- Indexes for table `staff_posts`
--
ALTER TABLE `staff_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tetfund_books`
--
ALTER TABLE `tetfund_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tetfund_housings`
--
ALTER TABLE `tetfund_housings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tetfund_ict`
--
ALTER TABLE `tetfund_ict`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tetfund_research`
--
ALTER TABLE `tetfund_research`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tetfund_supports`
--
ALTER TABLE `tetfund_supports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tetfund_trainings`
--
ALTER TABLE `tetfund_trainings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
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
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `administrations`
--
ALTER TABLE `administrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admission_lists`
--
ALTER TABLE `admission_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `adverts`
--
ALTER TABLE `adverts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alumni_news`
--
ALTER TABLE `alumni_news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hods`
--
ALTER TABLE `hods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `home_slider_images`
--
ALTER TABLE `home_slider_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `libraries`
--
ALTER TABLE `libraries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `nav_dropdowns`
--
ALTER TABLE `nav_dropdowns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `nav_lists`
--
ALTER TABLE `nav_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `notice_boards`
--
ALTER TABLE `notice_boards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rectors`
--
ALTER TABLE `rectors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `rector_news`
--
ALTER TABLE `rector_news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `routings`
--
ALTER TABLE `routings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `school_deans`
--
ALTER TABLE `school_deans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `school_galleries`
--
ALTER TABLE `school_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sport_complexes`
--
ALTER TABLE `sport_complexes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `staff_posts`
--
ALTER TABLE `staff_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tetfund_books`
--
ALTER TABLE `tetfund_books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tetfund_housings`
--
ALTER TABLE `tetfund_housings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tetfund_ict`
--
ALTER TABLE `tetfund_ict`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tetfund_research`
--
ALTER TABLE `tetfund_research`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tetfund_supports`
--
ALTER TABLE `tetfund_supports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tetfund_trainings`
--
ALTER TABLE `tetfund_trainings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activities`
--
ALTER TABLE `activities`
  ADD CONSTRAINT `activities_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `departments`
--
ALTER TABLE `departments`
  ADD CONSTRAINT `departments_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `nav_dropdowns`
--
ALTER TABLE `nav_dropdowns`
  ADD CONSTRAINT `nav_dropdowns_nav_list_id_foreign` FOREIGN KEY (`nav_list_id`) REFERENCES `nav_lists` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `nav_lists`
--
ALTER TABLE `nav_lists`
  ADD CONSTRAINT `nav_lists_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `rector_news`
--
ALTER TABLE `rector_news`
  ADD CONSTRAINT `rector_news_rector_id_foreign` FOREIGN KEY (`rector_id`) REFERENCES `rectors` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `routings`
--
ALTER TABLE `routings`
  ADD CONSTRAINT `routings_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `school_galleries`
--
ALTER TABLE `school_galleries`
  ADD CONSTRAINT `school_galleries_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `staff_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
