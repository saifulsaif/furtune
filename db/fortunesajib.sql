-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2020 at 11:53 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fortunehl`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `center_Name` text COLLATE utf8mb4_unicode_ci,
  `date` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view_status` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `image`, `title`, `created_at`, `updated_at`) VALUES
(1, 'uploads/1/2020-05/career1.jpg', 'Why With US?', '2020-05-09 23:21:07', NULL),
(2, 'uploads/1/2020-05/career2.jpg', 'Discover Opportunity', '2020-05-09 23:21:30', NULL),
(3, 'uploads/1/2020-05/career3.jpg', 'Shared Value', '2020-05-09 23:22:02', NULL),
(4, 'uploads/1/2020-05/career3.jpg', 'Life @ Furtune', '2020-05-09 23:28:13', '2020-05-09 23:35:14');

-- --------------------------------------------------------

--
-- Table structure for table `cms_apicustom`
--

CREATE TABLE `cms_apicustom` (
  `id` int(10) UNSIGNED NOT NULL,
  `permalink` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tabel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aksi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kolom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderby` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_query_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sql_where` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `method_type` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` longtext COLLATE utf8mb4_unicode_ci,
  `responses` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cms_apikey`
--

CREATE TABLE `cms_apikey` (
  `id` int(10) UNSIGNED NOT NULL,
  `screetkey` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hit` int(11) DEFAULT NULL,
  `status` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cms_dashboard`
--

CREATE TABLE `cms_dashboard` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_cms_privileges` int(11) DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cms_email_queues`
--

CREATE TABLE `cms_email_queues` (
  `id` int(10) UNSIGNED NOT NULL,
  `send_at` datetime DEFAULT NULL,
  `email_recipient` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_from_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_from_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_cc_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_content` text COLLATE utf8mb4_unicode_ci,
  `email_attachments` text COLLATE utf8mb4_unicode_ci,
  `is_sent` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cms_email_templates`
--

CREATE TABLE `cms_email_templates` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cc_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_email_templates`
--

INSERT INTO `cms_email_templates` (`id`, `name`, `slug`, `subject`, `content`, `description`, `from_name`, `from_email`, `cc_email`, `created_at`, `updated_at`) VALUES
(1, 'Email Template Forgot Password Backend', 'forgot_password_backend', NULL, '<p>Hi,</p><p>Someone requested forgot password, here is your new password : </p><p>[password]</p><p><br></p><p>--</p><p>Regards,</p><p>Admin</p>', '[password]', 'System', 'system@crudbooster.com', NULL, '2020-05-01 23:30:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cms_logs`
--

CREATE TABLE `cms_logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `ipaddress` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `useragent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci,
  `id_cms_users` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_logs`
--

INSERT INTO `cms_logs` (`id`, `ipaddress`, `useragent`, `url`, `description`, `details`, `id_cms_users`, `created_at`, `updated_at`) VALUES
(1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:75.0) Gecko/20100101 Firefox/75.0', 'http://localhost/furtune/public/admin/login', 'admin@crudbooster.com login with IP Address ::1', '', 1, '2020-05-01 23:31:47', NULL),
(2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/login', 'admin@crudbooster.com login with IP Address ::1', '', 1, '2020-05-03 11:20:06', NULL),
(3, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/login', 'admin@crudbooster.com login with IP Address ::1', '', 1, '2020-05-03 22:40:42', NULL),
(4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/slider/add-save', 'Add New Data  at Slider', '', 1, '2020-05-04 00:13:32', NULL),
(5, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/slider/add-save', 'Add New Data  at Slider', '', 1, '2020-05-04 00:16:23', NULL),
(6, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/slider/delete/1', 'Delete data 1 at Slider', '', 1, '2020-05-04 00:16:37', NULL),
(7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/slider/delete/2', 'Delete data 2 at Slider', '', 1, '2020-05-04 00:16:41', NULL),
(8, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/module_generator/delete/12', 'Delete data Slider at Module Generator', '', 1, '2020-05-04 00:25:59', NULL),
(9, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/menu/add-save', 'Add New Data Our Service at Menu', '', 1, '2020-05-04 00:31:41', NULL),
(10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/menu/add-save', 'Add New Data About Us at Menu', '', 1, '2020-05-04 00:31:51', NULL),
(11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/menu/add-save', 'Add New Data Book An Appointment at Menu', '', 1, '2020-05-04 00:32:20', NULL),
(12, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/menu/add-save', 'Add New Data Home Collection at Menu', '', 1, '2020-05-04 00:32:28', NULL),
(13, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/menu/add-save', 'Add New Data Health Packages at Menu', '', 1, '2020-05-04 00:32:48', NULL),
(14, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/menu/add-save', 'Add New Data Franchisee at Menu', '', 1, '2020-05-04 00:33:35', NULL),
(15, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/menu/add-save', 'Add New Data Contact Us at Menu', '', 1, '2020-05-04 00:33:44', NULL),
(16, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/sub_menu/add-save', 'Add New Data Imaging at Submenu', '', 1, '2020-05-04 00:41:19', NULL),
(17, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/sub_menu/add-save', 'Add New Data Cardiology at Submenu', '', 1, '2020-05-04 00:41:33', NULL),
(18, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/login', 'admin@crudbooster.com login with IP Address ::1', '', 1, '2020-05-04 12:02:03', NULL),
(19, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/sub_menu/delete/1', 'Delete data Imaging at Submenu', '', 1, '2020-05-04 16:28:36', NULL),
(20, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/sub_menu/delete/2', 'Delete data Cardiology at Submenu', '', 1, '2020-05-04 16:28:42', NULL),
(21, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/sub_menu/add-save', 'Add New Data Company Profile at Submenu', '', 1, '2020-05-04 16:29:07', NULL),
(22, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/sub_menu/add-save', 'Add New Data Team of Experts at Submenu', '', 1, '2020-05-04 16:29:28', NULL),
(23, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/sub_menu/add-save', 'Add New Data CSR at Submenu', '', 1, '2020-05-04 16:29:41', NULL),
(24, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/sub_menu/add-save', 'Add New Data Customer Care at Submenu', '', 1, '2020-05-04 16:29:51', NULL),
(25, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/sub_menu/add-save', 'Add New Data Feedback at Submenu', '', 1, '2020-05-04 16:52:20', NULL),
(26, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/sub_menu/add-save', 'Add New Data Career at Submenu', '', 1, '2020-05-04 16:52:50', NULL),
(27, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/sub_menu/add-save', 'Add New Data Get in Teach at Submenu', '', 1, '2020-05-04 16:53:05', NULL),
(28, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/slider13/add-save', 'Add New Data  at Slider', '', 1, '2020-05-04 22:16:50', NULL),
(29, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/slider13/add-save', 'Add New Data  at Slider', '', 1, '2020-05-04 23:33:36', NULL),
(30, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/slider13/add-save', 'Add New Data  at Slider', '', 1, '2020-05-04 23:33:44', NULL),
(31, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/slider13/delete/3', 'Delete data 3 at Slider', '', 1, '2020-05-04 23:34:03', NULL),
(32, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/menu/add-save', 'Add New Data fdsf at Menu', '', 1, '2020-05-04 23:51:28', NULL),
(33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/menu/delete/8', 'Delete data fdsf at Menu', '', 1, '2020-05-04 23:51:35', NULL),
(34, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/login', 'admin@crudbooster.com login with IP Address ::1', '', 1, '2020-05-05 10:11:07', NULL),
(35, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/company_profile/add-save', 'Add New Data EASTERN INDIA’S LARGEST DIAGNOSTIC CHAIN at Company Profile', '', 1, '2020-05-05 10:55:40', NULL),
(36, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/company_profile/add-save', 'Add New Data THE BEST OF TECHNOLOGIES AND KNOWHOW at Company Profile', '', 1, '2020-05-05 10:55:57', NULL),
(37, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/company_profile/add-save', 'Add New Data SETTING BENCHMARKS IN SERVICES at Company Profile', '', 1, '2020-05-05 10:56:13', NULL),
(38, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/company_profile/add-save', 'Add New Data OUR MISSION at Company Profile', '', 1, '2020-05-05 10:56:39', NULL),
(39, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/company_profile/add-save', 'Add New Data OUR VISION at Company Profile', '', 1, '2020-05-05 10:56:52', NULL),
(40, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/login', 'admin@crudbooster.com login with IP Address ::1', '', 1, '2020-05-05 16:40:57', NULL),
(41, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/expert_team/add-save', 'Add New Data Dr. Abhik Banerjee at Team of Expert', '', 1, '2020-05-05 17:08:28', NULL),
(42, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/login', 'admin@crudbooster.com login with IP Address ::1', '', 1, '2020-05-06 11:59:38', NULL),
(43, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/sub_menu/edit-save/5', 'Update data CSR at Submenu', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>route_name</td><td>company_profile</td><td>csr</td></tr></tbody></table>', 1, '2020-05-06 12:00:07', NULL),
(44, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/csrs/add-save', 'Add New Data Sarswati Sishu Mandir at CSR', '', 1, '2020-05-06 12:14:58', NULL),
(45, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/csrs/add-save', 'Add New Data Sarswati Sishu Mandir at CSR', '', 1, '2020-05-06 12:25:27', NULL),
(46, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/csrs/add-save', 'Add New Data Sarswati Sishu Mandir at CSR', '', 1, '2020-05-06 12:28:01', NULL),
(47, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/csrs/add-save', 'Add New Data Sarswati Sishu Mandir at CSR', '', 1, '2020-05-06 12:32:03', NULL),
(48, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/module_generator/delete/18', 'Delete data CSR at Module Generator', '', 1, '2020-05-06 12:36:24', NULL),
(49, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/login', 'admin@crudbooster.com login with IP Address ::1', '', 1, '2020-05-06 16:00:14', NULL),
(50, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/sub_menu/add-save', 'Add New Data Imging at Submenu', '', 1, '2020-05-06 16:23:50', NULL),
(51, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/sub_menu/add-save', 'Add New Data Cardiology at Submenu', '', 1, '2020-05-06 16:24:12', NULL),
(52, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/sub_menu/add-save', 'Add New Data Neurology at Submenu', '', 1, '2020-05-06 16:24:35', NULL),
(53, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/sub_menu/add-save', 'Add New Data Gastroenterology at Submenu', '', 1, '2020-05-06 16:24:56', NULL),
(54, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/sub_menu/add-save', 'Add New Data Pathology at Submenu', '', 1, '2020-05-06 16:25:07', NULL),
(55, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/sub_menu/add-save', 'Add New Data Pathology at Submenu', '', 1, '2020-05-06 16:25:15', NULL),
(56, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/sub_menu_lists/add-save', 'Add New Data X-ray at Sub Menu List', '', 1, '2020-05-06 16:50:57', NULL),
(57, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/sub_menu_lists/add-save', 'Add New Data MRI at Sub Menu List', '', 1, '2020-05-06 16:51:19', NULL),
(58, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/sub_menu_lists/add-save', 'Add New Data CT Scan at Sub Menu List', '', 1, '2020-05-06 16:51:37', NULL),
(59, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/sub_menu_lists/add-save', 'Add New Data DEXA Sacn at Sub Menu List', '', 1, '2020-05-06 17:06:03', NULL),
(60, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/sub_menu_lists/add-save', 'Add New Data Mammography at Sub Menu List', '', 1, '2020-05-06 17:06:24', NULL),
(61, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/login', 'admin@crudbooster.com login with IP Address ::1', '', 1, '2020-05-07 00:47:11', NULL),
(62, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/module_generator/delete/21', 'Delete data Service Details at Module Generator', '', 1, '2020-05-07 02:39:46', NULL),
(63, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/service_infos22/add-save', 'Add New Data Diagnostic Service - X Ray at Service Details', '', 1, '2020-05-07 03:22:14', NULL),
(64, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/login', 'admin@crudbooster.com login with IP Address ::1', '', 1, '2020-05-07 14:55:30', NULL),
(65, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/login', 'admin@crudbooster.com login with IP Address ::1', '', 1, '2020-05-07 23:41:14', NULL),
(66, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/login', 'admin@crudbooster.com login with IP Address ::1', '', 1, '2020-05-08 22:42:45', NULL),
(67, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/menu/edit-save/6', 'Update data Franchisee at Menu', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>route_name</td><td>#</td><td>franchisee</td></tr></tbody></table>', 1, '2020-05-09 00:22:15', NULL),
(68, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/menu/edit-save/5', 'Update data Health Packages at Menu', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>route_name</td><td>#</td><td>health_package</td></tr></tbody></table>', 1, '2020-05-09 00:22:26', NULL),
(69, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/login', 'admin@crudbooster.com login with IP Address ::1', '', 1, '2020-05-09 14:48:48', NULL),
(70, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/home_services/add-save', 'Add New Data  at Home Collection', '', 1, '2020-05-09 15:21:29', NULL),
(71, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/home_services/add-save', 'Add New Data  at Home Collection', '', 1, '2020-05-09 15:22:05', NULL),
(72, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/home_services/add-save', 'Add New Data  at Home Collection', '', 1, '2020-05-09 15:22:38', NULL),
(73, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/home_services/add-save', 'Add New Data  at Home Collection', '', 1, '2020-05-09 15:23:26', NULL),
(74, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/home_services/add-save', 'Add New Data  at Home Collection', '', 1, '2020-05-09 15:23:40', NULL),
(75, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/home_services/edit-save/3', 'Update data  at Home Collection', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>icon</td><td><div class=\"timingdiv\"></td><td>timingdiv</td></tr></tbody></table>', 1, '2020-05-09 15:24:08', NULL),
(76, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/home_services/edit-save/2', 'Update data  at Home Collection', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>icon</td><td><div class=\"reportdiv\"></div></td><td>reportdiv</td></tr></tbody></table>', 1, '2020-05-09 15:24:20', NULL),
(77, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/home_services/edit-save/2', 'Update data  at Home Collection', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody></tbody></table>', 1, '2020-05-09 15:24:20', NULL),
(78, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/home_services/edit-save/1', 'Update data  at Home Collection', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>icon</td><td><div class=\"staffdiv\"></div></td><td>staffdiv</td></tr></tbody></table>', 1, '2020-05-09 15:24:29', NULL),
(79, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/health_packages/add-save', 'Add New Data Exclusive Health Package at Health Package', '', 1, '2020-05-09 15:51:49', NULL),
(80, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/health_packages/add-save', 'Add New Data Exclusive Health Gold Package at Health Package', '', 1, '2020-05-09 15:54:15', NULL),
(81, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/package_details/add-save', 'Add New Data  at Health Package Details', '', 1, '2020-05-09 16:23:08', NULL),
(82, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/package_details/add-save', 'Add New Data  at Health Package Details', '', 1, '2020-05-09 16:23:30', NULL),
(83, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/package_details/add-save', 'Add New Data  at Health Package Details', '', 1, '2020-05-09 16:24:48', NULL),
(84, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/package_details/add-save', 'Add New Data  at Health Package Details', '', 1, '2020-05-09 16:27:02', NULL),
(85, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/package_details/edit-save/4', 'Update data  at Health Package Details', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>package_id</td><td>1</td><td>2</td></tr></tbody></table>', 1, '2020-05-09 16:28:31', NULL),
(86, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/login', 'admin@crudbooster.com login with IP Address ::1', '', 1, '2020-05-09 23:05:37', NULL),
(87, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/sub_menu/edit-save/8', 'Update data Career at Submenu', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>route_name</td><td>company_profile</td><td>career</td></tr></tbody></table>', 1, '2020-05-09 23:06:03', NULL),
(88, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/careers/add-save', 'Add New Data Why With US? at Career', '', 1, '2020-05-09 23:21:07', NULL),
(89, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/careers/add-save', 'Add New Data Discover Opportunity at Career', '', 1, '2020-05-09 23:21:30', NULL),
(90, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/careers/add-save', 'Add New Data Shared Value at Career', '', 1, '2020-05-09 23:22:02', NULL),
(91, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/careers/add-save', 'Add New Data Samsung at Career', '', 1, '2020-05-09 23:28:13', NULL),
(92, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'http://localhost/furtune/admin/careers/edit-save/4', 'Update data Life @ Furtune at Career', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>title</td><td>Samsung</td><td>Life @ Furtune</td></tr></tbody></table>', 1, '2020-05-09 23:35:14', NULL),
(93, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36', 'http://localhost/furtune/admin/login', 'admin@crudbooster.com login with IP Address ::1', '', 1, '2020-05-10 16:03:35', NULL),
(94, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36', 'http://localhost/furtune/admin/corporate_partners/add-save', 'Add New Data  at Corporate Partner', '', 1, '2020-05-10 16:05:46', NULL),
(95, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36', 'http://localhost/furtune/admin/corporate_partners/add-save', 'Add New Data  at Corporate Partner', '', 1, '2020-05-10 16:05:53', NULL),
(96, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36', 'http://localhost/furtune/admin/corporate_partners/add-save', 'Add New Data  at Corporate Partner', '', 1, '2020-05-10 16:06:01', NULL),
(97, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36', 'http://localhost/furtune/admin/corporate_partners/add-save', 'Add New Data  at Corporate Partner', '', 1, '2020-05-10 16:06:11', NULL),
(98, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36', 'http://localhost/furtune/admin/index_infos/add-save', 'Add New Data Our 28 year old legacy continues at Legacy  Info', '', 1, '2020-05-10 17:44:31', NULL),
(99, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36', 'http://localhost/furtune/admin/lab_infos/add-save', 'Add New Data Suraksha Diagnostics brings Robots to its Lab at Lab Info', '', 1, '2020-05-10 17:46:39', NULL),
(100, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36', 'http://localhost/furtune/admin/corporate_services/add-save', 'Add New Data  at Corporate  Service', '', 1, '2020-05-10 17:49:04', NULL),
(101, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36', 'http://localhost/furtune/admin/corporate_services/add-save', 'Add New Data  at Corporate  Service', '', 1, '2020-05-10 17:49:24', NULL),
(102, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36', 'http://localhost/furtune/admin/corporate_services/add-save', 'Add New Data  at Corporate  Service', '', 1, '2020-05-10 17:49:31', NULL),
(103, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36', 'http://localhost/furtune/admin/corporate_services/add-save', 'Add New Data  at Corporate  Service', '', 1, '2020-05-10 17:49:40', NULL),
(104, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36', 'http://localhost/furtune/admin/corporate_services/add-save', 'Add New Data  at Corporate  Service', '', 1, '2020-05-10 17:49:48', NULL),
(105, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36', 'http://localhost/furtune/admin/corporate_services/add-save', 'Add New Data  at Corporate  Service', '', 1, '2020-05-10 17:49:59', NULL),
(106, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36', 'http://localhost/furtune/admin/corporate_services/add-save', 'Add New Data  at Corporate  Service', '', 1, '2020-05-10 17:50:01', NULL),
(107, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36', 'http://localhost/furtune/admin/login', 'admin@crudbooster.com login with IP Address ::1', '', 1, '2020-05-10 23:06:16', NULL),
(108, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36', 'http://localhost/furtune/admin/sub_menu_lists/add-save', 'Add New Data X-ray at Sub Menu List', '', 1, '2020-05-11 00:52:48', NULL),
(109, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36', 'http://localhost/furtune/admin/sub_menu_lists/delete/11', 'Delete data X-ray at Sub Menu List', '', 1, '2020-05-11 00:52:54', NULL),
(110, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36', 'http://localhost/furtune/admin/login', 'admin@crudbooster.com login with IP Address ::1', '', 1, '2020-05-11 12:57:26', NULL),
(111, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36', 'http://localhost/furtune/admin/customer_cares/add-save', 'Add New Data HELPLINE: at Customer Care', '', 1, '2020-05-12 00:17:43', NULL),
(112, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36', 'http://localhost/furtune/admin/customer_cares/add-save', 'Add New Data ONLINE FEEDBACK: at Customer Care', '', 1, '2020-05-12 00:17:56', NULL),
(113, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36', 'http://localhost/furtune/admin/customer_cares/add-save', 'Add New Data REALTIME CUSTOMER CARE: at Customer Care', '', 1, '2020-05-12 00:18:16', NULL),
(114, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36', 'http://localhost/furtune/admin/login', 'admin@crudbooster.com login with IP Address ::1', '', 1, '2020-05-13 00:21:11', NULL),
(115, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36', 'http://localhost/furtune/admin/login', 'admin@crudbooster.com login with IP Address ::1', '', 1, '2020-05-14 22:52:29', NULL),
(116, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36', 'http://localhost/furtune/admin/login', 'admin@crudbooster.com login with IP Address ::1', '', 1, '2020-05-15 14:48:21', NULL),
(117, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36', 'http://localhost/furtune/admin/site_infos/add-save', 'Add New Data Furtune Diagnostics Private Limited at Site Information', '', 1, '2020-05-15 14:56:19', NULL),
(118, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36', 'http://localhost/furtune/admin/lab_infos/edit-save/1', 'Update data Furtune Diagnostics brings Robots to its Lab at Lab Info', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>title</td><td>Suraksha Diagnostics brings Robots to its Lab</td><td>Furtune Diagnostics brings Robots to its Lab</td></tr><tr><td>description</td><td>Suraksha has come up with \'Aptio\' automation, the robotic track (track-based automation solution), as a unified and complete solution to its expanding need. The track is completely AI enabled and runs without human interference. It allows to provide the best therapeutic turnaround time in the industry. In an emergency can churn out a report in less than a minute. It allows the Task Targeted Automation by hugely reducing errors. The entire system is One flow One Touch.</td><td>Furtune has come up with \'Aptio\' automation, the robotic track (track-based automation solution), as a unified and complete solution to its expanding need. The track is completely AI enabled and runs without human interference. It allows to provide the best therapeutic turnaround time in the industry. In an emergency can churn out a report in less than a minute. It allows the Task Targeted Automation by hugely reducing errors. The entire system is One flow One Touch.</td></tr></tbody></table>', 1, '2020-05-15 15:43:42', NULL),
(119, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36', 'http://localhost/furtune/admin/index_infos/edit-save/1', 'Update data Our 28 year old legacy continues at Legacy  Info', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>description</td><td>Suraksha is a name people readily associate with diagnostic quality and convenience. The largest diagnostic chain in eastern India, it today ranks among the top 5 nationally with nearly 35 centres across West Bengal, Bihar and Delhi NCR. All diagnostic centres are owned and operated by the company to maintain strict quality protocols. Suraksha also operates a centre in NRS Medical College & Hospital in Kolkata on PPP (Public Private Partnership) basis with the State Government.\r\n\r\nSuraksha diagnostics services span Pathology, Histopathology, Molecular Diagnostics and Radiology and include the latest tests. It is the first in India to receive the coveted CAP (College of American Pathologists) certification and is also NABH and NABL accredited. Apart from diagnostic services, Suraksha has a number of polyclinics with senior consultants from disciplines such as Cardiology, Gastroenterology, Neurology, Gynaecology, Oncology, Psychology, Endocrinology, Dermatology, Opthalmology, Homeopathy etc. It also runs Super Specialty Clinics for diabetes, hypertension, back pain, et</td><td>Furtune is a name people readily associate with diagnostic quality and convenience. The largest diagnostic chain in eastern India, it today ranks among the top 5 nationally with nearly 35 centres across West Bengal, Bihar and Delhi NCR. All diagnostic centres are owned and operated by the company to maintain strict quality protocols. Suraksha also operates a centre in NRS Medical College & Hospital in Kolkata on PPP (Public Private Partnership) basis with the State Government.\r\n\r\nSuraksha diagnostics services span Pathology, Histopathology, Molecular Diagnostics and Radiology and include the latest tests. It is the first in India to receive the coveted CAP (College of American Pathologists) certification and is also NABH and NABL accredited. Apart from diagnostic services, Suraksha has a number of polyclinics with senior consultants from disciplines such as Cardiology, Gastroenterology, Neurology, Gynaecology, Oncology, Psychology, Endocrinology, Dermatology, Opthalmology, Homeopathy etc. It also runs Super Specialty Clinics for diabetes, hypertension, back pain, et</td></tr></tbody></table>', 1, '2020-05-15 15:43:58', NULL),
(120, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36', 'http://localhost/furtune/admin/index_infos/edit-save/1', 'Update data Our 28 year old legacy continues at Legacy  Info', '<table class=\"table table-striped\"><thead><tr><th>Key</th><th>Old Value</th><th>New Value</th></thead><tbody><tr><td>description</td><td>Furtune is a name people readily associate with diagnostic quality and convenience. The largest diagnostic chain in eastern India, it today ranks among the top 5 nationally with nearly 35 centres across West Bengal, Bihar and Delhi NCR. All diagnostic centres are owned and operated by the company to maintain strict quality protocols. Suraksha also operates a centre in NRS Medical College & Hospital in Kolkata on PPP (Public Private Partnership) basis with the State Government.\r\n\r\nSuraksha diagnostics services span Pathology, Histopathology, Molecular Diagnostics and Radiology and include the latest tests. It is the first in India to receive the coveted CAP (College of American Pathologists) certification and is also NABH and NABL accredited. Apart from diagnostic services, Suraksha has a number of polyclinics with senior consultants from disciplines such as Cardiology, Gastroenterology, Neurology, Gynaecology, Oncology, Psychology, Endocrinology, Dermatology, Opthalmology, Homeopathy etc. It also runs Super Specialty Clinics for diabetes, hypertension, back pain, et</td><td>Furtune is a name people readily associate with diagnostic quality and convenience. The largest diagnostic chain in eastern India, it today ranks among the top 5 nationally with nearly 35 centres across West Bengal, Bihar and Delhi NCR. All diagnostic centres are owned and operated by the company to maintain strict quality protocols. Furtune also operates a centre in NRS Medical College & Hospital in Kolkata on PPP (Public Private Partnership) basis with the State Government.\r\n\r\nSuraksha diagnostics services span Pathology, Histopathology, Molecular Diagnostics and Radiology and include the latest tests. It is the first in India to receive the coveted CAP (College of American Pathologists) certification and is also NABH and NABL accredited. Apart from diagnostic services, Suraksha has a number of polyclinics with senior consultants from disciplines such as Cardiology, Gastroenterology, Neurology, Gynaecology, Oncology, Psychology, Endocrinology, Dermatology, Opthalmology, Homeopathy etc. It also runs Super Specialty Clinics for diabetes, hypertension, back pain, et</td></tr></tbody></table>', 1, '2020-05-15 15:44:42', NULL),
(121, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36', 'http://localhost/furtune/admin/login', 'admin@crudbooster.com login with IP Address ::1', '', 1, '2020-05-15 07:30:33', NULL),
(122, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36', 'http://localhost/furtune/admin/service_infos22/delete/2', 'Delete data few at Service Details', '', 1, '2020-05-15 08:07:43', NULL),
(123, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36', 'http://localhost/furtune/admin/service_infos22/delete/3', 'Delete data few at Service Details', '', 1, '2020-05-15 08:07:47', NULL),
(124, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36', 'http://localhost/furtune/admin/service_infos22/delete/8', 'Delete data Test at Service Details', '', 1, '2020-05-15 09:55:56', NULL),
(125, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36', 'http://localhost/furtune/admin/service_infos22/delete/8', 'Delete data Test at Service Details', '', 1, '2020-05-15 09:56:18', NULL),
(126, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36', 'http://localhost/furtune/admin/service_infos22/delete/8', 'Delete data Test at Service Details', '', 1, '2020-05-15 09:56:53', NULL),
(127, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36', 'http://localhost/furtune/admin/service_infos22/delete/8', 'Delete data Test at Service Details', '', 1, '2020-05-15 09:57:39', NULL),
(128, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36', 'http://localhost/furtune/admin/service_infos22/delete/8', 'Delete data Test at Service Details', '', 1, '2020-05-15 09:58:21', NULL),
(129, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36', 'http://localhost/furtune/admin/logout', 'admin@crudbooster.com logout', '', 1, '2020-05-15 10:03:30', NULL),
(130, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36', 'http://localhost/furtune/admin/login', 'admin@crudbooster.com login with IP Address ::1', '', 1, '2020-05-15 10:03:33', NULL),
(131, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36', 'http://localhost/furtune/admin/logout', 'admin@crudbooster.com logout', '', 1, '2020-05-15 15:46:26', NULL),
(132, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36', 'http://localhost/furtune/admin/login', 'admin@crudbooster.com login with IP Address ::1', '', 1, '2020-05-15 15:46:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cms_menus`
--

CREATE TABLE `cms_menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'url',
  `path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `is_dashboard` tinyint(1) NOT NULL DEFAULT '0',
  `id_cms_privileges` int(11) DEFAULT NULL,
  `sorting` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_menus`
--

INSERT INTO `cms_menus` (`id`, `name`, `type`, `path`, `color`, `icon`, `parent_id`, `is_active`, `is_dashboard`, `id_cms_privileges`, `sorting`, `created_at`, `updated_at`) VALUES
(2, 'Slider', 'Route', 'AdminSlider13ControllerGetIndex', NULL, 'fa fa-image', 0, 1, 0, 1, 1, '2020-05-04 00:26:23', NULL),
(3, 'Menu', 'Route', 'AdminMenuControllerGetIndex', NULL, 'fa fa-bars', 0, 1, 0, 1, 2, '2020-05-04 00:31:01', NULL),
(4, 'Submenu', 'Route', 'AdminSubMenuControllerGetIndex', NULL, 'fa fa-bars', 0, 1, 0, 1, 3, '2020-05-04 00:34:32', NULL),
(5, 'Company Profile', 'Route', 'AdminCompanyProfileControllerGetIndex', NULL, 'fa fa-home', 0, 1, 0, 1, 4, '2020-05-05 10:54:40', NULL),
(6, 'Team of Expert', 'Route', 'AdminExpertTeamControllerGetIndex', NULL, 'fa fa-user', 0, 1, 0, 1, 5, '2020-05-05 17:04:35', NULL),
(8, 'CSR', 'Route', 'AdminCsrs19ControllerGetIndex', NULL, 'fa fa-glass', 0, 1, 0, 1, 6, '2020-05-06 12:36:45', NULL),
(9, 'Sub Menu List', 'Route', 'AdminSubMenuListsControllerGetIndex', NULL, 'fa fa-th-list', 0, 1, 0, 1, 7, '2020-05-06 16:49:11', NULL),
(11, 'Service Details', 'Route', 'AdminServiceInfos22ControllerGetIndex', NULL, 'fa fa-plus', 0, 1, 0, 1, 8, '2020-05-07 02:40:28', NULL),
(12, 'Home Collection', 'Route', 'AdminHomeServicesControllerGetIndex', NULL, 'fa fa-server', 0, 1, 0, 1, 9, '2020-05-09 15:20:07', NULL),
(13, 'Health Package', 'Route', 'AdminHealthPackagesControllerGetIndex', NULL, 'fa fa-plus-circle', 0, 1, 0, 1, 10, '2020-05-09 15:49:10', NULL),
(14, 'Health Package Details', 'Route', 'AdminPackageDetailsControllerGetIndex', NULL, 'fa fa-plus-circle', 0, 1, 0, 1, 11, '2020-05-09 16:14:12', NULL),
(15, 'Career', 'Route', 'AdminCareersControllerGetIndex', NULL, 'fa fa-file', 0, 1, 0, 1, 12, '2020-05-09 23:19:41', NULL),
(16, 'Corporate Partner', 'Route', 'AdminCorporatePartnersControllerGetIndex', NULL, 'fa fa-users', 0, 1, 0, 1, 13, '2020-05-10 16:04:35', NULL),
(17, 'Legacy  Info', 'Route', 'AdminIndexInfosControllerGetIndex', NULL, 'fa fa-info', 0, 1, 0, 1, 14, '2020-05-10 17:43:36', NULL),
(18, 'Lab Info', 'Route', 'AdminLabInfosControllerGetIndex', NULL, 'fa fa-flask', 0, 1, 0, 1, 15, '2020-05-10 17:45:26', NULL),
(19, 'Corporate  Service', 'Route', 'AdminCorporateServicesControllerGetIndex', NULL, 'fa fa-star', 0, 1, 0, 1, 16, '2020-05-10 17:48:17', NULL),
(20, 'Customer Care', 'Route', 'AdminCustomerCaresControllerGetIndex', NULL, 'fa fa-phone-square', 0, 1, 0, 1, 17, '2020-05-12 00:15:48', NULL),
(21, 'Franchisee', 'Route', 'AdminFranchiseesControllerGetIndex', NULL, 'fa fa-star', 0, 1, 0, 1, 18, '2020-05-13 00:21:49', NULL),
(22, 'Feedback', 'Route', 'AdminFeedbackControllerGetIndex', NULL, 'fa fa-repeat', 0, 1, 0, 1, 19, '2020-05-15 00:23:38', NULL),
(23, 'Site Information', 'Route', 'AdminSiteInfosControllerGetIndex', NULL, 'fa fa-info', 0, 1, 0, 1, 20, '2020-05-15 14:52:23', NULL),
(24, 'Doctor', 'Route', 'AdminDoctorsControllerGetIndex', NULL, 'fa fa-info', 0, 1, 0, 1, 21, '2020-05-15 14:52:23', NULL),
(25, 'Doctors', 'Route', 'AdminDoctors36ControllerGetIndex', NULL, 'fa fa-glass', 0, 1, 0, 1, 22, '2020-05-15 11:35:55', NULL),
(26, 'Appointment List', 'Route', 'AdminListAppointmentsControllerGetIndex', NULL, 'fa fa-medkit', 0, 1, 0, 1, 23, '2020-05-15 15:47:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cms_menus_privileges`
--

CREATE TABLE `cms_menus_privileges` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_cms_menus` int(11) DEFAULT NULL,
  `id_cms_privileges` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_menus_privileges`
--

INSERT INTO `cms_menus_privileges` (`id`, `id_cms_menus`, `id_cms_privileges`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1),
(7, 7, 1),
(8, 8, 1),
(9, 9, 1),
(10, 10, 1),
(11, 11, 1),
(12, 12, 1),
(13, 13, 1),
(14, 14, 1),
(15, 15, 1),
(16, 16, 1),
(17, 17, 1),
(18, 18, 1),
(19, 19, 1),
(20, 20, 1),
(21, 21, 1),
(22, 22, 1),
(23, 23, 1),
(24, 25, 1),
(25, 26, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cms_moduls`
--

CREATE TABLE `cms_moduls` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_protected` tinyint(1) NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_moduls`
--

INSERT INTO `cms_moduls` (`id`, `name`, `icon`, `path`, `table_name`, `controller`, `is_protected`, `is_active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Notifications', 'fa fa-cog', 'notifications', 'cms_notifications', 'NotificationsController', 1, 1, '2020-05-01 23:30:23', NULL, NULL),
(2, 'Privileges', 'fa fa-cog', 'privileges', 'cms_privileges', 'PrivilegesController', 1, 1, '2020-05-01 23:30:23', NULL, NULL),
(3, 'Privileges Roles', 'fa fa-cog', 'privileges_roles', 'cms_privileges_roles', 'PrivilegesRolesController', 1, 1, '2020-05-01 23:30:23', NULL, NULL),
(4, 'Users Management', 'fa fa-users', 'users', 'cms_users', 'AdminCmsUsersController', 0, 1, '2020-05-01 23:30:23', NULL, NULL),
(5, 'Settings', 'fa fa-cog', 'settings', 'cms_settings', 'SettingsController', 1, 1, '2020-05-01 23:30:23', NULL, NULL),
(6, 'Module Generator', 'fa fa-database', 'module_generator', 'cms_moduls', 'ModulsController', 1, 1, '2020-05-01 23:30:23', NULL, NULL),
(7, 'Menu Management', 'fa fa-bars', 'menu_management', 'cms_menus', 'MenusController', 1, 1, '2020-05-01 23:30:23', NULL, NULL),
(8, 'Email Templates', 'fa fa-envelope-o', 'email_templates', 'cms_email_templates', 'EmailTemplatesController', 1, 1, '2020-05-01 23:30:23', NULL, NULL),
(9, 'Statistic Builder', 'fa fa-dashboard', 'statistic_builder', 'cms_statistics', 'StatisticBuilderController', 1, 1, '2020-05-01 23:30:23', NULL, NULL),
(10, 'API Generator', 'fa fa-cloud-download', 'api_generator', '', 'ApiCustomController', 1, 1, '2020-05-01 23:30:23', NULL, NULL),
(11, 'Log User Access', 'fa fa-flag-o', 'logs', 'cms_logs', 'LogsController', 1, 1, '2020-05-01 23:30:23', NULL, NULL),
(12, 'Slider', 'fa fa-photo', 'slider', 'slider', 'AdminSliderController', 0, 0, '2020-05-03 22:56:22', NULL, '2020-05-04 00:25:59'),
(13, 'Slider', 'fa fa-image', 'slider13', 'slider', 'AdminSlider13Controller', 0, 0, '2020-05-04 00:26:23', NULL, NULL),
(14, 'Menu', 'fa fa-bars', 'menu', 'menu', 'AdminMenuController', 0, 0, '2020-05-04 00:31:01', NULL, NULL),
(15, 'Submenu', 'fa fa-bars', 'sub_menu', 'sub_menu', 'AdminSubMenuController', 0, 0, '2020-05-04 00:34:32', NULL, NULL),
(16, 'Company Profile', 'fa fa-home', 'company_profile', 'company_profile', 'AdminCompanyProfileController', 0, 0, '2020-05-05 10:54:40', NULL, NULL),
(17, 'Team of Expert', 'fa fa-user', 'expert_team', 'expert_team', 'AdminExpertTeamController', 0, 0, '2020-05-05 17:04:35', NULL, NULL),
(18, 'CSR', 'fa fa-bars', 'csrs', 'csrs', 'AdminCsrsController', 0, 0, '2020-05-06 12:09:23', NULL, '2020-05-06 12:36:24'),
(19, 'CSR', 'fa fa-glass', 'csrs19', 'csrs', 'AdminCsrs19Controller', 0, 0, '2020-05-06 12:36:45', NULL, NULL),
(20, 'Sub Menu List', 'fa fa-th-list', 'sub_menu_lists', 'sub_menu_lists', 'AdminSubMenuListsController', 0, 0, '2020-05-06 16:49:11', NULL, NULL),
(21, 'Service Details', 'fa fa-glass', 'service_infos', 'service_infos', 'AdminServiceInfosController', 0, 0, '2020-05-07 02:36:32', NULL, '2020-05-07 02:39:46'),
(22, 'Service Details', 'fa fa-plus', 'service_infos22', 'service_infos', 'AdminServiceInfos22Controller', 0, 0, '2020-05-07 02:40:28', NULL, NULL),
(23, 'Home Collection', 'fa fa-server', 'home_services', 'home_services', 'AdminHomeServicesController', 0, 0, '2020-05-09 15:20:06', NULL, NULL),
(24, 'Health Package', 'fa fa-plus-circle', 'health_packages', 'health_packages', 'AdminHealthPackagesController', 0, 0, '2020-05-09 15:49:09', NULL, NULL),
(25, 'Health Package Details', 'fa fa-plus-circle', 'package_details', 'package_details', 'AdminPackageDetailsController', 0, 0, '2020-05-09 16:14:12', NULL, NULL),
(26, 'Career', 'fa fa-file', 'careers', 'careers', 'AdminCareersController', 0, 0, '2020-05-09 23:19:41', NULL, NULL),
(27, 'Corporate Partner', 'fa fa-users', 'corporate_partners', 'corporate_partners', 'AdminCorporatePartnersController', 0, 0, '2020-05-10 16:04:35', NULL, NULL),
(28, 'Legacy  Info', 'fa fa-info', 'index_infos', 'index_infos', 'AdminIndexInfosController', 0, 0, '2020-05-10 17:43:36', NULL, NULL),
(29, 'Lab Info', 'fa fa-flask', 'lab_infos', 'lab_infos', 'AdminLabInfosController', 0, 0, '2020-05-10 17:45:26', NULL, NULL),
(30, 'Corporate  Service', 'fa fa-star', 'corporate_services', 'corporate_services', 'AdminCorporateServicesController', 0, 0, '2020-05-10 17:48:16', NULL, NULL),
(31, 'Customer Care', 'fa fa-phone-square', 'customer_cares', 'customer_cares', 'AdminCustomerCaresController', 0, 0, '2020-05-12 00:15:47', NULL, NULL),
(32, 'Franchisee', 'fa fa-star', 'franchisees', 'franchisees', 'AdminFranchiseesController', 0, 0, '2020-05-13 00:21:48', NULL, NULL),
(33, 'Feedback', 'fa fa-repeat', 'feedback', 'feedback', 'AdminFeedbackController', 0, 0, '2020-05-15 00:23:37', NULL, NULL),
(34, 'Site Information', 'fa fa-info', 'site_infos', 'site_infos', 'AdminSiteInfosController', 0, 0, '2020-05-15 14:52:22', NULL, NULL),
(35, 'Doctors', 'fa fa-info', 'doctors', 'doctors', 'AdminDoctorsController', 0, 0, '2020-05-15 14:52:22', NULL, NULL),
(36, 'Doctors', 'fa fa-glass', 'doctors36', 'doctors', 'AdminDoctors36Controller', 0, 0, '2020-05-15 11:35:55', NULL, NULL),
(37, 'Appointment List', 'fa fa-medkit', 'list_appointments', 'list_appointments', 'AdminListAppointmentsController', 0, 0, '2020-05-15 15:47:38', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cms_notifications`
--

CREATE TABLE `cms_notifications` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_cms_users` int(11) DEFAULT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_read` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cms_privileges`
--

CREATE TABLE `cms_privileges` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_superadmin` tinyint(1) DEFAULT NULL,
  `theme_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_privileges`
--

INSERT INTO `cms_privileges` (`id`, `name`, `is_superadmin`, `theme_color`, `created_at`, `updated_at`) VALUES
(1, 'Super Administrator', 1, 'skin-red', '2020-05-01 23:30:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cms_privileges_roles`
--

CREATE TABLE `cms_privileges_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `is_visible` tinyint(1) DEFAULT NULL,
  `is_create` tinyint(1) DEFAULT NULL,
  `is_read` tinyint(1) DEFAULT NULL,
  `is_edit` tinyint(1) DEFAULT NULL,
  `is_delete` tinyint(1) DEFAULT NULL,
  `id_cms_privileges` int(11) DEFAULT NULL,
  `id_cms_moduls` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_privileges_roles`
--

INSERT INTO `cms_privileges_roles` (`id`, `is_visible`, `is_create`, `is_read`, `is_edit`, `is_delete`, `id_cms_privileges`, `id_cms_moduls`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 0, 0, 0, 1, 1, '2020-05-01 23:30:23', NULL),
(2, 1, 1, 1, 1, 1, 1, 2, '2020-05-01 23:30:23', NULL),
(3, 0, 1, 1, 1, 1, 1, 3, '2020-05-01 23:30:23', NULL),
(4, 1, 1, 1, 1, 1, 1, 4, '2020-05-01 23:30:23', NULL),
(5, 1, 1, 1, 1, 1, 1, 5, '2020-05-01 23:30:23', NULL),
(6, 1, 1, 1, 1, 1, 1, 6, '2020-05-01 23:30:23', NULL),
(7, 1, 1, 1, 1, 1, 1, 7, '2020-05-01 23:30:23', NULL),
(8, 1, 1, 1, 1, 1, 1, 8, '2020-05-01 23:30:23', NULL),
(9, 1, 1, 1, 1, 1, 1, 9, '2020-05-01 23:30:23', NULL),
(10, 1, 1, 1, 1, 1, 1, 10, '2020-05-01 23:30:23', NULL),
(11, 1, 0, 1, 0, 1, 1, 11, '2020-05-01 23:30:23', NULL),
(12, 1, 1, 1, 1, 1, 1, 12, NULL, NULL),
(13, 1, 1, 1, 1, 1, 1, 13, NULL, NULL),
(14, 1, 1, 1, 1, 1, 1, 14, NULL, NULL),
(15, 1, 1, 1, 1, 1, 1, 15, NULL, NULL),
(16, 1, 1, 1, 1, 1, 1, 16, NULL, NULL),
(17, 1, 1, 1, 1, 1, 1, 17, NULL, NULL),
(18, 1, 1, 1, 1, 1, 1, 18, NULL, NULL),
(19, 1, 1, 1, 1, 1, 1, 19, NULL, NULL),
(20, 1, 1, 1, 1, 1, 1, 20, NULL, NULL),
(21, 1, 1, 1, 1, 1, 1, 21, NULL, NULL),
(22, 1, 1, 1, 1, 1, 1, 22, NULL, NULL),
(23, 1, 1, 1, 1, 1, 1, 23, NULL, NULL),
(24, 1, 1, 1, 1, 1, 1, 24, NULL, NULL),
(25, 1, 1, 1, 1, 1, 1, 25, NULL, NULL),
(26, 1, 1, 1, 1, 1, 1, 26, NULL, NULL),
(27, 1, 1, 1, 1, 1, 1, 27, NULL, NULL),
(28, 1, 1, 1, 1, 1, 1, 28, NULL, NULL),
(29, 1, 1, 1, 1, 1, 1, 29, NULL, NULL),
(30, 1, 1, 1, 1, 1, 1, 30, NULL, NULL),
(31, 1, 1, 1, 1, 1, 1, 31, NULL, NULL),
(32, 1, 1, 1, 1, 1, 1, 32, NULL, NULL),
(33, 1, 1, 1, 1, 1, 1, 33, NULL, NULL),
(34, 1, 1, 1, 1, 1, 1, 34, NULL, NULL),
(35, 1, 1, 1, 1, 1, 1, 36, NULL, NULL),
(36, 1, 1, 1, 1, 1, 1, 37, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cms_settings`
--

CREATE TABLE `cms_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `content_input_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dataenum` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `helper` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `group_setting` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_settings`
--

INSERT INTO `cms_settings` (`id`, `name`, `content`, `content_input_type`, `dataenum`, `helper`, `created_at`, `updated_at`, `group_setting`, `label`) VALUES
(1, 'login_background_color', NULL, 'text', NULL, 'Input hexacode', '2020-05-01 23:30:23', NULL, 'Login Register Style', 'Login Background Color'),
(2, 'login_font_color', NULL, 'text', NULL, 'Input hexacode', '2020-05-01 23:30:23', NULL, 'Login Register Style', 'Login Font Color'),
(3, 'login_background_image', NULL, 'upload_image', NULL, NULL, '2020-05-01 23:30:23', NULL, 'Login Register Style', 'Login Background Image'),
(4, 'email_sender', 'support@crudbooster.com', 'text', NULL, NULL, '2020-05-01 23:30:23', NULL, 'Email Setting', 'Email Sender'),
(5, 'smtp_driver', 'mail', 'select', 'smtp,mail,sendmail', NULL, '2020-05-01 23:30:23', NULL, 'Email Setting', 'Mail Driver'),
(6, 'smtp_host', '', 'text', NULL, NULL, '2020-05-01 23:30:23', NULL, 'Email Setting', 'SMTP Host'),
(7, 'smtp_port', '25', 'text', NULL, 'default 25', '2020-05-01 23:30:23', NULL, 'Email Setting', 'SMTP Port'),
(8, 'smtp_username', '', 'text', NULL, NULL, '2020-05-01 23:30:23', NULL, 'Email Setting', 'SMTP Username'),
(9, 'smtp_password', '', 'text', NULL, NULL, '2020-05-01 23:30:23', NULL, 'Email Setting', 'SMTP Password'),
(10, 'appname', 'CRUDBooster', 'text', NULL, NULL, '2020-05-01 23:30:23', NULL, 'Application Setting', 'Application Name'),
(11, 'default_paper_size', 'Legal', 'text', NULL, 'Paper size, ex : A4, Legal, etc', '2020-05-01 23:30:23', NULL, 'Application Setting', 'Default Paper Print Size'),
(12, 'logo', '', 'upload_image', NULL, NULL, '2020-05-01 23:30:23', NULL, 'Application Setting', 'Logo'),
(13, 'favicon', '', 'upload_image', NULL, NULL, '2020-05-01 23:30:23', NULL, 'Application Setting', 'Favicon'),
(14, 'api_debug_mode', 'true', 'select', 'true,false', NULL, '2020-05-01 23:30:23', NULL, 'Application Setting', 'API Debug Mode'),
(15, 'google_api_key', '', 'text', NULL, NULL, '2020-05-01 23:30:23', NULL, 'Application Setting', 'Google API Key'),
(16, 'google_fcm_key', '', 'text', NULL, NULL, '2020-05-01 23:30:23', NULL, 'Application Setting', 'Google FCM Key');

-- --------------------------------------------------------

--
-- Table structure for table `cms_statistics`
--

CREATE TABLE `cms_statistics` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cms_statistic_components`
--

CREATE TABLE `cms_statistic_components` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_cms_statistics` int(11) DEFAULT NULL,
  `componentID` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `component_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area_name` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sorting` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `config` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cms_users`
--

CREATE TABLE `cms_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_cms_privileges` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_users`
--

INSERT INTO `cms_users` (`id`, `name`, `photo`, `email`, `password`, `id_cms_privileges`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Super Admin', NULL, 'admin@crudbooster.com', '$2y$10$4K0oVzQJfVpXUTY8iih1WO5rc0ZgeF8rg6l8com70roAy9861KxWa', 1, '2020-05-01 23:30:23', NULL, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `company_profile`
--

CREATE TABLE `company_profile` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_profile`
--

INSERT INTO `company_profile` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'EASTERN INDIA’S LARGEST DIAGNOSTIC CHAIN', 'Established in 1992 as Suraksha Diagnostics & Eye Centre (P) Ltd. in Kolkata, we started as one of the first diagnostic centers in Kolkata to provide all pathology and radiology services under one roof. This convenience, along with our unwavering commitment to accuracy and service, resulted in steady growth and popularity. Within 3 years we could confidently open a second Center at Siliguri, in North Bengal, which remains the largest such facility in the region, and today serves not only to patients from North Bengal, but also neighbouring States and countries. Since then we have grown steadily across Bengal, Bihar, and Delhi NCR.', '2020-05-05 10:55:40', NULL),
(2, 'THE BEST OF TECHNOLOGIES AND KNOWHOW', 'Committed to deliver world-class quality, Suraksha’s Diagnostic Centres are equipped with state-of-the-art equipment from GE, Schiller, Beckman Coulter, Siemens, Roche Diagnostic, Biorat D10, Variant Turbo, Biomerieux, Phillips, etc. The technology is backed by high caliber diagnosticians: Radiologists, Bio-chemists, Pathologists, Microbiologists as well as skilled technicians. Diagnostic services range from Radiology to Pathology, Histopathology and Molecular Biology.', '2020-05-05 10:55:57', NULL),
(3, 'SETTING BENCHMARKS IN SERVICES', 'Service has always been the distinguishing factor in Suraksha’s popularity. Whether it is the comfort, convenience or courtesy at the Centres or in delivering quick, accurate reports, we have led industry practices in India. Today with services such as online reports and SMS alerts we continue to lead the way in leveraging technology for better services.', '2020-05-05 10:56:13', NULL),
(4, 'OUR MISSION', 'To serve the society with leading edge, world class diagnostic services at an affordable price and to make Reliable, Economical and Latest diagnostic facilities with Global Quality Standards - available to a major segment of the society in India.', '2020-05-05 10:56:39', NULL),
(5, 'OUR VISION', 'To be the leading complete diagnostic solution provider in the country; to build a chain of diagnostic centers throughout Eastern India and be recognized as the best in the count', '2020-05-05 10:56:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `corporate_partners`
--

CREATE TABLE `corporate_partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `corporate_partners`
--

INSERT INTO `corporate_partners` (`id`, `image`, `website_link`, `created_at`, `updated_at`) VALUES
(1, 'uploads/1/2020-05/logo48_inside.jpg', '#', '2020-05-10 16:05:46', NULL),
(2, 'uploads/1/2020-05/logo23_inside.jpg', '#', '2020-05-10 16:05:53', NULL),
(3, 'uploads/1/2020-05/logo49_inside.jpg', '#', '2020-05-10 16:06:01', NULL),
(4, 'uploads/1/2020-05/logo50_inside.jpg', '#', '2020-05-10 16:06:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `corporate_services`
--

CREATE TABLE `corporate_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `corporate_services`
--

INSERT INTO `corporate_services` (`id`, `service`, `created_at`, `updated_at`) VALUES
(1, 'We entertain tenders for both Pathology and Non-Pathology tests', '2020-05-10 17:49:00', NULL),
(2, 'Employees get discount cards', '2020-05-10 17:49:24', NULL),
(3, 'Pre-Employment Check-Ups', '2020-05-10 17:49:31', NULL),
(4, 'Annual Health Check-Ups for employees', '2020-05-10 17:49:36', NULL),
(5, 'On-site (office) and Off-site (factory) Health Camps', '2020-05-10 17:49:48', NULL),
(6, 'And other benefits tailor-made to suit your company\'s employees', '2020-05-10 17:49:59', NULL),
(7, 'And other benefits tailor-made to suit your company\'s employees', '2020-05-10 17:50:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `csrs`
--

CREATE TABLE `csrs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `distance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `students` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teachers` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `before` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `during` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `after` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `csrs`
--

INSERT INTO `csrs` (`id`, `school_name`, `location`, `distance`, `students`, `teachers`, `before`, `during`, `after`, `created_at`, `updated_at`) VALUES
(1, 'Sarswati Sishu Mandir', 'Raipur', '220km to Bankura. From Bankura it’s a drive of 58km to the school in Raipur', 'Before Construction 307 & after Construction 359', '6 Males & 7 Females', 'uploads/1/2020-05/1_l.jpg', 'uploads/1/2020-05/2_l.jpg', 'uploads/1/2020-05/3_l.jpg', '2020-05-06 12:32:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer_cares`
--

CREATE TABLE `customer_cares` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_cares`
--

INSERT INTO `customer_cares` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'HELPLINE:', 'We have a dedicated CRM team that answers every call you make to any of our helpline numbers. The main aim of these representatives is to familiarize you with the testing protocol in our centers. They provide you with exhaustive information of the preparations required before every test and also help you book your slot in advance.\r\n\r\nOur State-wise Helpline Numbers are as follows:', '2020-05-12 00:17:43', NULL),
(2, 'ONLINE FEEDBACK:', 'Customers are encouraged to leave their feedback in our website by filling in the Feedback Form and relating to us any complaints or suggestions that they may have regarding our services. Each complaint is looked into by our customer care department and meticulous details of the same are obtained.', '2020-05-12 00:17:56', NULL),
(3, 'REALTIME CUSTOMER CARE:', 'Team Suraksha takes immense pride in pulling together all co-ordinates that bring a 360 degree approach to its customer care. We attend to calls at any hour of the day including Sundays and any patient who is facing trouble during test procedure and has brought it to our notice has received immediate assistance from staff at both the Head Office and the respective center.', '2020-05-12 00:18:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(10) UNSIGNED NOT NULL,
  `center` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doctor_name` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doctor_degree` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `center`, `department`, `doctor_name`, `doctor_degree`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Brahmanbaria', 'Dentist', 'Sanaullah', 'BDS', 1, '2020-05-15 11:49:10', '2020-05-15 11:49:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doctor_times`
--

CREATE TABLE `doctor_times` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` int(10) UNSIGNED NOT NULL,
  `start_days` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_days` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `strat_time` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_time` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `special_days` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `special_strat_time` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `special_end_time` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `opinion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctor_times`
--

INSERT INTO `doctor_times` (`id`, `doctor_id`, `start_days`, `end_days`, `strat_time`, `end_time`, `special_days`, `special_strat_time`, `special_end_time`, `opinion`, `created_at`, `updated_at`) VALUES
(1, 1, 'Sunday', 'Wednesday', '1.00', '8', 'Friday', '10', '6', 'Appointed by Owner', '2020-05-15 11:49:10', '2020-05-15 11:49:10');

-- --------------------------------------------------------

--
-- Table structure for table `expert_team`
--

CREATE TABLE `expert_team` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specialization` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `intertest` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descreption` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expert_team`
--

INSERT INTO `expert_team` (`id`, `image`, `name`, `designation`, `from`, `experience`, `specialization`, `intertest`, `descreption`, `created_at`, `updated_at`) VALUES
(1, 'uploads/1/2020-05/microbiology.jpg', 'Dr. Abhik Banerjee', 'Director - Quality Assurance & Senior Consultant - Pathology', 'Topiwala National Medical College and Charitable Hospital, Mumbai', '7 years', 'MBBS, MD (Biochemistry)', 'Clinical biochemistry, Metabolic diagnostics, Molecular Biology.', 'Dr. Chowdhury holds over five years of experience as a Consultant Biochemist who joined Suraksha Diagnostics on a full time basis soon after her MD in Medical College & Hospital, Calcutta. Currently, she is the Section Director of Clinical Biochemistry Department.\r\n\r\nShe is also trained as a Technical Assessor – Biochemistry from National Accreditation Board for Testing & Calibration Laboratories ( NABL ) as per ISO 15189:2012 – Medical laboratories and Life Member of AMBI, ACBI and IMA.', '2020-05-05 17:08:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_list_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `note`, `status`, `menu_list_id`, `created_at`, `updated_at`) VALUES
(1, 'All views X ray reports (AP/Lateral/Oblique)', '1', '8', NULL, NULL),
(2, 'Latest technology instruments from Siemens and Allengers.', '1', '8', NULL, NULL),
(3, 'Digital X-ray: We bring to you highly accurate X-ray images printed instantly and delivered to you within a couple of hours.', '1', '8', NULL, NULL),
(4, 'Hysterosalpingogram (HSG):  Our skilled staff helps patients to acquire detailed report of their uterine cavity.', '1', '8', NULL, NULL),
(6, 'Hello', '1', '7', NULL, NULL),
(7, 'hey', '1', '7', NULL, NULL),
(8, 'dewde', '1', '7', NULL, NULL),
(9, 'dewdew', '1', '7', NULL, NULL),
(20, 'edqdew', '1', '10', NULL, NULL),
(21, 'dewdew', '1', '10', NULL, NULL);

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visited_center` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experiance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `moment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `suggest` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `complaint` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `first_name`, `last_name`, `phone`, `email`, `visited_center`, `experiance`, `moment`, `suggest`, `location`, `complaint`, `created_at`, `updated_at`) VALUES
(1, 'sda', 'adsf', '33', 'safdf', 'adas', 'No', 'asdfsad', 'Yes', NULL, 'sdfafassdffsa', '2020-05-15 00:18:20', '2020-05-15 00:18:20'),
(2, 'dadf', 'sdfad', '333', 'sas', 'sfsfd', 'Yes', 'fdsfa', 'No', 'Dhaka', 'fdfa', '2020-05-15 00:21:40', '2020-05-15 00:21:40');

-- --------------------------------------------------------

--
-- Table structure for table `franchisees`
--

CREATE TABLE `franchisees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pin_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `franchisees`
--

INSERT INTO `franchisees` (`id`, `name`, `age`, `locality`, `area`, `phone`, `email`, `pin_code`, `created_at`, `updated_at`) VALUES
(1, 'adf', '343', 'afds', '343', '2323', 'sas@admim.com', '323', '2020-05-13 00:19:49', '2020-05-13 00:19:49');

-- --------------------------------------------------------

--
-- Table structure for table `health_packages`
--

CREATE TABLE `health_packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hover_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `health_packages`
--

INSERT INTO `health_packages` (`id`, `package_name`, `image`, `hover_image`, `created_at`, `updated_at`) VALUES
(1, 'Exclusive Health Package', 'uploads/1/2020-05/executive_health_package_new.jpg', 'uploads/1/2020-05/executive_health_text.jpg', '2020-05-09 15:51:49', NULL),
(2, 'Exclusive Health Gold Package', 'uploads/1/2020-05/executive_gold_package_new.jpg', 'uploads/1/2020-05/executive_gold_package_text.jpg', '2020-05-09 15:54:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `home_services`
--

CREATE TABLE `home_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_services`
--

INSERT INTO `home_services` (`id`, `icon`, `service`, `created_at`, `updated_at`) VALUES
(1, 'staffdiv', 'Friendly Staff', '2020-05-09 15:21:29', '2020-05-09 15:24:29'),
(2, 'reportdiv', 'Accurate Reports', '2020-05-09 15:22:05', '2020-05-09 15:24:20'),
(3, 'timingdiv', 'Flexible Timings', '2020-05-09 15:22:36', '2020-05-09 15:24:08'),
(4, 'smsdiv', 'SMS Alerts', '2020-05-09 15:23:26', NULL),
(5, 'pricediv', 'Affordable Prices', '2020-05-09 15:23:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `index_infos`
--

CREATE TABLE `index_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `index_infos`
--

INSERT INTO `index_infos` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Our 28 year old legacy continues', 'Furtune is a name people readily associate with diagnostic quality and convenience. The largest diagnostic chain in eastern India, it today ranks among the top 5 nationally with nearly 35 centres across West Bengal, Bihar and Delhi NCR. All diagnostic centres are owned and operated by the company to maintain strict quality protocols. Furtune also operates a centre in NRS Medical College & Hospital in Kolkata on PPP (Public Private Partnership) basis with the State Government.\r\n\r\nSuraksha diagnostics services span Pathology, Histopathology, Molecular Diagnostics and Radiology and include the latest tests. It is the first in India to receive the coveted CAP (College of American Pathologists) certification and is also NABH and NABL accredited. Apart from diagnostic services, Suraksha has a number of polyclinics with senior consultants from disciplines such as Cardiology, Gastroenterology, Neurology, Gynaecology, Oncology, Psychology, Endocrinology, Dermatology, Opthalmology, Homeopathy etc. It also runs Super Specialty Clinics for diabetes, hypertension, back pain, et', '2020-05-10 17:44:31', '2020-05-15 15:44:42');

-- --------------------------------------------------------

--
-- Table structure for table `lab_infos`
--

CREATE TABLE `lab_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lab_infos`
--

INSERT INTO `lab_infos` (`id`, `title`, `description`, `video_link`, `created_at`, `updated_at`) VALUES
(1, 'Furtune Diagnostics brings Robots to its Lab', 'Furtune has come up with \'Aptio\' automation, the robotic track (track-based automation solution), as a unified and complete solution to its expanding need. The track is completely AI enabled and runs without human interference. It allows to provide the best therapeutic turnaround time in the industry. In an emergency can churn out a report in less than a minute. It allows the Task Targeted Automation by hugely reducing errors. The entire system is One flow One Touch.', 'https://www.youtube.com/embed/pDjxZilfQ30', '2020-05-10 17:46:39', '2020-05-15 15:43:42');

-- --------------------------------------------------------

--
-- Table structure for table `list_appointments`
--

CREATE TABLE `list_appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstName` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastName` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateOfAppoinment` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timeAppoinment` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phoneNumber` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diseaseTopic` text COLLATE utf8mb4_unicode_ci,
  `doctor_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `list_appointments`
--

INSERT INTO `list_appointments` (`id`, `firstName`, `lastName`, `email`, `dateOfAppoinment`, `timeAppoinment`, `phoneNumber`, `diseaseTopic`, `doctor_id`, `created_at`, `updated_at`) VALUES
(1, 'dwqd', 'dwedew', 'dew@gmail.com', '2020-05-16', '13:01', NULL, 'cdafwaefwe', 1, '2020-05-15 15:39:32', '2020-05-15 15:39:32'),
(2, 'MD Sajib', 'Mulla', 'dew@gmail.com', '2020-05-16', '13:01', '01748', 'Something urgent to solve', 1, '2020-05-15 15:43:52', '2020-05-15 15:43:52'),
(3, 'Md Sajib', 'Mulla', 'sajib155@gmail.com', '2020-05-16', '01:01', '01748920048', 'Something very urgent', 1, '2020-05-15 15:45:36', '2020-05-15 15:45:36');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `menu_name`, `route_name`, `created_at`, `updated_at`) VALUES
(1, 'Our Service', '#', '2020-05-04 00:31:41', NULL),
(2, 'About Us', '#', '2020-05-04 00:31:51', NULL),
(3, 'Book An Appointment', 'fortune.getDoctor', '2020-05-04 00:32:20', NULL),
(4, 'Home Collection', 'home_collection', '2020-05-04 00:32:28', NULL),
(5, 'Health Packages', 'health_package', '2020-05-04 00:32:48', '2020-05-09 00:22:26'),
(6, 'Franchisee', 'franchisee', '2020-05-04 00:33:35', '2020-05-09 00:22:15'),
(7, 'Contact Us', '#', '2020-05-04 00:33:44', NULL);

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
(1, '2016_08_07_145904_add_table_cms_apicustom', 1),
(2, '2016_08_07_150834_add_table_cms_dashboard', 1),
(3, '2016_08_07_151210_add_table_cms_logs', 1),
(4, '2016_08_07_151211_add_details_cms_logs', 1),
(5, '2016_08_07_152014_add_table_cms_privileges', 1),
(6, '2016_08_07_152214_add_table_cms_privileges_roles', 1),
(7, '2016_08_07_152320_add_table_cms_settings', 1),
(8, '2016_08_07_152421_add_table_cms_users', 1),
(9, '2016_08_07_154624_add_table_cms_menus_privileges', 1),
(10, '2016_08_07_154624_add_table_cms_moduls', 1),
(11, '2016_08_17_225409_add_status_cms_users', 1),
(12, '2016_08_20_125418_add_table_cms_notifications', 1),
(13, '2016_09_04_033706_add_table_cms_email_queues', 1),
(14, '2016_09_16_035347_add_group_setting', 1),
(15, '2016_09_16_045425_add_label_setting', 1),
(16, '2016_09_17_104728_create_nullable_cms_apicustom', 1),
(17, '2016_10_01_141740_add_method_type_apicustom', 1),
(18, '2016_10_01_141846_add_parameters_apicustom', 1),
(19, '2016_10_01_141934_add_responses_apicustom', 1),
(20, '2016_10_01_144826_add_table_apikey', 1),
(21, '2016_11_14_141657_create_cms_menus', 1),
(22, '2016_11_15_132350_create_cms_email_templates', 1),
(23, '2016_11_15_190410_create_cms_statistics', 1),
(24, '2016_11_17_102740_create_cms_statistic_components', 1),
(25, '2017_06_06_164501_add_deleted_at_cms_moduls', 1),
(26, '2019_08_19_000000_create_failed_jobs_table', 1),
(27, '2020_05_03_164956_create_slider_table', 2),
(28, '2020_05_03_182832_create_menu_table', 3),
(29, '2020_05_03_182919_create_sub_menu_table', 3),
(30, '2020_05_05_045014_create_company_profile_table', 4),
(31, '2020_05_05_105922_create_expert_team_table', 5),
(32, '2020_05_05_091721_create_appointments_table', 6),
(34, '2020_05_06_055427_create_csrs_table', 7),
(35, '2020_05_06_104417_create_sub_menu_lists_table', 8),
(37, '2020_05_06_184529_create_service_infos_table', 9),
(39, '2020_05_06_211443_create_facilities_table', 10),
(40, '2020_05_07_200331_create_doctors_table', 11),
(41, '2020_05_07_200813_create_doctor_times_table', 11),
(42, '2020_05_09_090942_create_home_services_table', 12),
(43, '2020_05_09_094645_create_health_packages_table', 13),
(44, '2020_05_09_100845_create_package_details_table', 14),
(45, '2020_05_09_170823_create_careers_table', 15),
(46, '2020_05_10_095917_create_corporate_partners_table', 16),
(47, '2020_05_10_113624_create_index_infos_table', 17),
(48, '2020_05_10_113714_create_lab_infos_table', 17),
(49, '2020_05_10_113759_create_corporate_services_table', 18),
(50, '2020_05_10_141935_create_submenuses_table', 19),
(51, '2020_05_10_142442_create_submenu_facilities_table', 19),
(52, '2020_05_11_181008_create_customer_cares_table', 20),
(53, '2020_05_12_175735_create_franchisees_table', 21),
(54, '2020_05_14_175054_create_feedback_table', 22),
(55, '2020_05_15_084324_create_site_infos_table', 23),
(56, '2020_05_15_102336_create_faqs_table', 24),
(57, '2020_05_15_205150_create_list_appointments_table', 25);

-- --------------------------------------------------------

--
-- Table structure for table `package_details`
--

CREATE TABLE `package_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `package_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `package_details`
--

INSERT INTO `package_details` (`id`, `service`, `description`, `package_id`, `created_at`, `updated_at`) VALUES
(1, 'Chest', 'X-RAY CHEST (PA) / AP', '1', '2020-05-09 16:23:08', NULL),
(2, 'HEART', 'BILIRUBIN (TOTAL), SGOT / AST, SGPT / ALT, ALKALINE PHOSPHATASE, TOTAL PROTEIN (BLOOD) ALB:GLO RATIO & GAMMA GT (GGTP)', '1', '2020-05-09 16:23:30', NULL),
(3, 'DIABETES', 'SUGASUGAR FASTING & SUGAR PPR FASTING & SUGAR PP', '1', '2020-05-09 16:24:47', NULL),
(4, 'PATHOLOGY', 'CBC WITH PLATELET (THROMBOCYTE) COUNT, ESR (ERYTHROCYTE SEDIMENTATION RATE), 25-HYDROXY VITAMIN D - TOTAL, VITAMIN B12 (CYANOCOBALAMIN)', '2', '2020-05-09 16:27:02', '2020-05-09 16:28:31');

-- --------------------------------------------------------

--
-- Table structure for table `service_infos`
--

CREATE TABLE `service_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_list_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_infos`
--

INSERT INTO `service_infos` (`id`, `title`, `description`, `image`, `menu_list_id`, `created_at`, `updated_at`) VALUES
(1, 'Diagnostic Service - X Ray', 'An X-ray report is a photographic or digital image of the internal composition of something, especially a part of the body, produced by X-rays being passed through it and being absorbed to different degrees by different materials.\r\n\r\nDuring X-ray examination, you are required to change into light cloths and remove all jewelry. The technician guides you in taking the right position in front of the X-ray receiving plate. Depending upon the target body part, you may be asked to lie down or stand to facilitate the X-ray report.', 'uploads/1/2020-05/5829237_stock_vector_special_offer_red_sticky_notes_vector_icon_design.jpg', '8', '2020-05-07 03:22:14', NULL),
(4, 'Test', 'Test Instrucytion', '_user5ebea271cbeeb7.08962522.png', '7', NULL, NULL),
(5, 'Test', 'dewde', '_user5ebea369bd9c26.41345937.png', '7', NULL, NULL),
(6, 'dedew', 'dewdew', 'service/55ebea7d1986c8_55eb477db0fdef_nuser-img.png', '7', NULL, NULL),
(7, 'Test', 'fnjewnfrej', 'public/service/55ebebc402c03e_admin.jpg', '10', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `site_infos`
--

CREATE TABLE `site_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `applicaton_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hoteline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_info` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `app_icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `app_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_infos`
--

INSERT INTO `site_infos` (`id`, `logo`, `applicaton_name`, `address`, `email`, `phone`, `hoteline`, `facebook`, `youtube`, `instagram`, `footer_info`, `app_icon`, `app_link`, `twitter`, `created_at`, `updated_at`) VALUES
(1, 'uploads/1/2020-05/suraksha_newlogo_updated_1.png', 'Furtune Diagnostics Private Limited', '12/1, Premises No. 02-0327, DG Block, Action Area 1D, New Town, Kolkata - 700156', 'info@furtune.com', '03366191000', '(033) 66059750', '#', '#', '#', 'Copyright @ 2020 Furtune Diagnostics Private Limited. Developed by DzetIT Technologies', 'uploads/1/2020-05/badges_apps.png', '#', '#', '2020-05-15 14:56:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image_link`, `created_at`, `updated_at`) VALUES
(4, 'uploads/1/2020-05/banner_17042020.jpg', '2020-05-04 23:33:36', NULL),
(5, 'uploads/1/2020-05/covid19.jpg', '2020-05-04 23:33:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `submenuses`
--

CREATE TABLE `submenuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `sub_menu_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `route_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `submenuses`
--

INSERT INTO `submenuses` (`id`, `sub_menu_name`, `route_name`, `menu_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Company Profile', 'company_profile', 2, '2020-05-04 16:29:07', NULL, NULL),
(2, 'Team of Experts', 'team_of_expert', 2, '2020-05-04 16:29:28', NULL, NULL),
(3, 'CSR', 'csr', 2, '2020-05-04 16:29:41', '2020-05-06 12:00:07', NULL),
(4, 'Customer Care', 'customer_care', 2, '2020-05-04 16:29:51', NULL, NULL),
(5, 'Feedback', 'feedback', 7, '2020-05-04 16:52:20', NULL, NULL),
(6, 'Career', 'career', 7, '2020-05-04 16:52:50', '2020-05-09 23:06:03', NULL),
(7, 'Get in Teach', 'get_in_touch', 7, '2020-05-04 16:53:05', NULL, NULL),
(8, 'Imging', '#', 1, '2020-05-06 16:23:50', NULL, NULL),
(9, 'Cardiology', '#', 1, '2020-05-06 16:24:12', NULL, NULL),
(10, 'Neurology', '#', 1, '2020-05-06 16:24:35', NULL, NULL),
(11, 'Gastroenterology', '#', 1, '2020-05-06 16:24:56', NULL, NULL),
(12, 'Pathology', '#', 1, '2020-05-06 16:25:07', NULL, NULL),
(13, 'Pathology', '#', 1, '2020-05-06 16:25:15', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `submenu_facilities`
--

CREATE TABLE `submenu_facilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_name` text COLLATE utf8mb4_unicode_ci,
  `submenu_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `submenu_facilities`
--

INSERT INTO `submenu_facilities` (`id`, `item_name`, `submenu_id`, `created_at`, `updated_at`) VALUES
(6, 'X-ray', 8, '2020-05-06 16:50:57', NULL),
(7, 'MRI', 8, '2020-05-06 16:51:18', NULL),
(8, 'CT Scan', 8, '2020-05-06 16:51:37', NULL),
(9, 'DEXA Sacn', 8, '2020-05-06 17:06:03', NULL),
(10, 'Mammography', 8, '2020-05-06 17:06:24', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_apicustom`
--
ALTER TABLE `cms_apicustom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_apikey`
--
ALTER TABLE `cms_apikey`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_dashboard`
--
ALTER TABLE `cms_dashboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_email_queues`
--
ALTER TABLE `cms_email_queues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_email_templates`
--
ALTER TABLE `cms_email_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_logs`
--
ALTER TABLE `cms_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_menus`
--
ALTER TABLE `cms_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_menus_privileges`
--
ALTER TABLE `cms_menus_privileges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_moduls`
--
ALTER TABLE `cms_moduls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_notifications`
--
ALTER TABLE `cms_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_privileges`
--
ALTER TABLE `cms_privileges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_privileges_roles`
--
ALTER TABLE `cms_privileges_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_settings`
--
ALTER TABLE `cms_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_statistics`
--
ALTER TABLE `cms_statistics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_statistic_components`
--
ALTER TABLE `cms_statistic_components`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_users`
--
ALTER TABLE `cms_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_profile`
--
ALTER TABLE `company_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corporate_partners`
--
ALTER TABLE `corporate_partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corporate_services`
--
ALTER TABLE `corporate_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `csrs`
--
ALTER TABLE `csrs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_cares`
--
ALTER TABLE `customer_cares`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_times`
--
ALTER TABLE `doctor_times`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctor_times_doctor_id_foreign` (`doctor_id`);

--
-- Indexes for table `expert_team`
--
ALTER TABLE `expert_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `franchisees`
--
ALTER TABLE `franchisees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `health_packages`
--
ALTER TABLE `health_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_services`
--
ALTER TABLE `home_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `index_infos`
--
ALTER TABLE `index_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab_infos`
--
ALTER TABLE `lab_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_appointments`
--
ALTER TABLE `list_appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_details`
--
ALTER TABLE `package_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_infos`
--
ALTER TABLE `service_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_infos`
--
ALTER TABLE `site_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submenuses`
--
ALTER TABLE `submenuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submenu_facilities`
--
ALTER TABLE `submenu_facilities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `submenu_facilities_submenu_id_foreign` (`submenu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cms_apicustom`
--
ALTER TABLE `cms_apicustom`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cms_apikey`
--
ALTER TABLE `cms_apikey`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cms_dashboard`
--
ALTER TABLE `cms_dashboard`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cms_email_queues`
--
ALTER TABLE `cms_email_queues`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cms_email_templates`
--
ALTER TABLE `cms_email_templates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cms_logs`
--
ALTER TABLE `cms_logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `cms_menus`
--
ALTER TABLE `cms_menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `cms_menus_privileges`
--
ALTER TABLE `cms_menus_privileges`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `cms_moduls`
--
ALTER TABLE `cms_moduls`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `cms_notifications`
--
ALTER TABLE `cms_notifications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cms_privileges`
--
ALTER TABLE `cms_privileges`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cms_privileges_roles`
--
ALTER TABLE `cms_privileges_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `cms_settings`
--
ALTER TABLE `cms_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `cms_statistics`
--
ALTER TABLE `cms_statistics`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cms_statistic_components`
--
ALTER TABLE `cms_statistic_components`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cms_users`
--
ALTER TABLE `cms_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company_profile`
--
ALTER TABLE `company_profile`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `corporate_partners`
--
ALTER TABLE `corporate_partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `corporate_services`
--
ALTER TABLE `corporate_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `csrs`
--
ALTER TABLE `csrs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_cares`
--
ALTER TABLE `customer_cares`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doctor_times`
--
ALTER TABLE `doctor_times`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `expert_team`
--
ALTER TABLE `expert_team`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `franchisees`
--
ALTER TABLE `franchisees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `health_packages`
--
ALTER TABLE `health_packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home_services`
--
ALTER TABLE `home_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `index_infos`
--
ALTER TABLE `index_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lab_infos`
--
ALTER TABLE `lab_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `list_appointments`
--
ALTER TABLE `list_appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `package_details`
--
ALTER TABLE `package_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `service_infos`
--
ALTER TABLE `service_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `site_infos`
--
ALTER TABLE `site_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `submenuses`
--
ALTER TABLE `submenuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `submenu_facilities`
--
ALTER TABLE `submenu_facilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doctor_times`
--
ALTER TABLE `doctor_times`
  ADD CONSTRAINT `doctor_times_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `submenu_facilities`
--
ALTER TABLE `submenu_facilities`
  ADD CONSTRAINT `submenu_facilities_submenu_id_foreign` FOREIGN KEY (`submenu_id`) REFERENCES `submenuses` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
