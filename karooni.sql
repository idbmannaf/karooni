-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 06, 2022 at 05:59 AM
-- Server version: 5.7.24
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karooni`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyers`
--

CREATE TABLE `buyers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buyers`
--

INSERT INTO `buyers` (`id`, `name`, `mobile`, `email`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Abdus Salams', '01720504503', 'marriagebd2011@gmail.com', 'some descs', '2021-09-21 07:16:32', '2021-09-21 07:31:43'),
(2, 'Jashim Uddin', '011222', 'fd8@gmail.com', 'some desc sdaf', '2021-09-21 07:32:51', '2021-10-12 01:58:26'),
(3, 'H & M', '0175582874', 'hm@h2com', 'ex', '2021-10-12 17:28:10', '2021-10-12 17:28:17'),
(4, 'Zara-Inditex', '163465', 'Zara-Inditex@Zara-Inditex.com', 'Zara-Inditex', '2021-10-12 17:34:35', '2021-10-12 17:34:35'),
(5, 'Zara-Texprego', '65749878', 'Zara-Texprego@Zara-Texprego.com', 'Zara-Texprego', '2021-10-12 17:35:20', '2021-10-12 17:35:20'),
(6, 'KHOLS', '4645', 'KHOLS@KHOLS.com', 'KHOLS', '2021-10-12 17:36:23', '2021-10-12 17:36:23'),
(7, 'Matalon', '78465465', 'Matalon@Matalon.com', 'Matalon', '2021-10-12 17:37:12', '2021-10-12 17:37:12'),
(8, 'OVS', '34687', 'OVS@OVS.com', 'OVS', '2021-10-12 17:37:51', '2021-10-12 17:37:51'),
(9, 'O\'stin', '4645', 'O\'stin@O\'stin.com', 'O\'stin', '2021-10-12 17:38:52', '2021-10-12 17:38:52'),
(10, 'Cinderella Fashion', '453645', 'CinderellaFashion@CinderellaFashion.com', 'Cinderella Fashion', '2021-10-12 17:39:34', '2021-10-12 17:39:48'),
(11, 'New Yorker', '5454661', 'lofevir@mailinator.com', 'New Yorker', '2021-10-12 17:40:26', '2021-10-12 17:40:26'),
(12, 'P.Brummel', '65434', 'muxegas@mailinator.com', 'P.Brummel', '2021-10-12 17:41:05', '2021-10-12 17:41:05'),
(13, 'Front Line', '54546', 'tapecyx@mailinator.com', 'Incidunt aliquip al', '2021-10-12 17:41:54', '2021-10-12 17:41:54'),
(14, 'Thriftys INC', '321320', 'vukid@mailinator.com', 'Thriftys INC', '2021-10-12 17:43:13', '2021-10-12 17:43:20'),
(15, 'MANGO', 'Et quo similique eiu', 'rawulaxyvi@mailinator.com', 'Voluptates culpa si', '2021-10-12 17:43:54', '2021-10-12 17:43:54'),
(16, 'Top Ten', '3156', 'litymyfac@mailinator.com', 'Possimus animi des', '2021-10-12 17:44:13', '2021-10-12 17:45:30'),
(17, 'Yagi', 'Ut est amet iste d', 'sogugabaqe@mailinator.com', 'Yagi', '2021-10-12 17:44:41', '2021-10-12 17:44:41'),
(18, 'C&C', '654654', 'cikazowi@mailinator.com', 'Velit ut dolor aut', '2021-10-12 17:45:05', '2021-10-12 17:45:19'),
(19, 'NDT', '65465', 'fonywuzehu@mailinator.com', 'Voluptatibus molliti', '2021-10-12 17:45:50', '2021-10-12 17:45:50'),
(20, 'Krayons', '65498789', 'nyco@mailinator.com', 'Dicta dolorem odit c', '2021-10-12 17:46:44', '2021-10-12 17:46:44'),
(21, 'Kaporal', '789654', 'wutiwijoke@mailinator.com', 'Ut voluptatem offici', '2021-10-12 17:47:03', '2021-10-12 17:47:03'),
(22, 'JNC/CLRIDEn', '9878948', 'fipuxisevu@mailinator.com', 'Harum elit cillum l', '2021-10-12 17:47:39', '2021-10-12 17:47:39'),
(23, 'Alviras', '6878', 'gavekaw@mailinator.com', 'Amet voluptatibus m', '2021-10-12 17:48:09', '2021-10-12 17:48:09'),
(24, 'Altavista', '3216978', 'xylu@mailinator.com', 'Commodi ratione cum', '2021-10-12 17:48:56', '2021-10-12 17:48:56'),
(25, 'Target', '987948', 'bizovuqyl@mailinator.com', 'Deserunt reprehender', '2021-10-12 17:49:20', '2021-10-12 17:49:20'),
(26, 'LUA', '879465', 'tazom@mailinator.com', 'Fuga Et dolor ratio', '2021-10-12 17:49:35', '2021-10-12 17:49:35'),
(27, 'Linq Asia', '98765', 'mufazobu@mailinator.com', 'Fugit voluptatum ma', '2021-10-12 17:50:00', '2021-10-12 17:50:00'),
(28, 'Hellenic', '987894165', 'zynysa@mailinator.com', 'Assumenda eu blandit', '2021-10-12 17:50:22', '2021-10-12 17:50:22');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(5, '2021_09_21_070250_create_permission_tables', 1),
(6, '2021_09_21_112853_create_buyers_table', 2),
(13, '2021_09_23_050339_create_orders_table', 3),
(14, '2021_10_16_104211_create_order_color_quantities_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 3),
(2, 'App\\Models\\User', 6),
(3, 'App\\Models\\User', 7);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buyer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `style_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_date_interval` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pl_germent_details` text COLLATE utf8mb4_unicode_ci,
  `pl_fabric_details` text COLLATE utf8mb4_unicode_ci,
  `pl_yern_details` text COLLATE utf8mb4_unicode_ci,
  `pl_trim_details` text COLLATE utf8mb4_unicode_ci,
  `pl_quantity` decimal(10,2) DEFAULT NULL,
  `pl_po_purch_recvd_d` date DEFAULT NULL,
  `pl_req_delv_dt` date DEFAULT NULL,
  `pl_lead_time` date DEFAULT NULL,
  `pl_yern_recei_s_dt` date DEFAULT NULL,
  `pl_yern_recei_e_dt` date DEFAULT NULL,
  `pl_fabric_qlt_sub_dt` date DEFAULT NULL,
  `pl_fabric_qlt_app_dt` date DEFAULT NULL,
  `pl_fabric_compo_tst_sub` date DEFAULT NULL,
  `pl_fabric_compo_tst_app` date DEFAULT NULL,
  `pl_fabric_qlt_tst_sub` date DEFAULT NULL,
  `pl_fabric_qlt_tst_app_dt` date DEFAULT NULL,
  `pl_sss_samp_sub_dt` date DEFAULT NULL,
  `pl_sss_app_dt` date DEFAULT NULL,
  `pl_knitting_s_dt` date DEFAULT NULL,
  `pl_knitting_e_dt` date DEFAULT NULL,
  `pl_dyeing_s_dt` date DEFAULT NULL,
  `pl_dyeing_e_dt` date DEFAULT NULL,
  `pl_sewing_acce_tst_sub` date DEFAULT NULL,
  `pl_sewing_acce_inhouse_dt` date DEFAULT NULL,
  `pl_packing_acce_tst_sub` date DEFAULT NULL,
  `pl_packing_acce_inhouse_dt` date DEFAULT NULL,
  `pl_cutting_s_dt` date DEFAULT NULL,
  `pl_cutting_e_dt` date DEFAULT NULL,
  `pl_print_emb_s_dt` date DEFAULT NULL,
  `pl_print_emb_e_dt` date DEFAULT NULL,
  `pl_sewing_s_dt` date DEFAULT NULL,
  `pl_sewing_e_dt` date DEFAULT NULL,
  `pl_finish_s_dt` date DEFAULT NULL,
  `pl_finish_e_dt` date DEFAULT NULL,
  `pl_midline_inspec_dt` date DEFAULT NULL,
  `pl_final_inspec_dt` date DEFAULT NULL,
  `pl_shipment_dt` date DEFAULT NULL,
  `pl_picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pl_germents_smv` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pl_fabric_consumtion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pl_sewing_acc_dets` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pl_packing_acc_dets` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pl_buld_fab_qlt_app_dt` date DEFAULT NULL,
  `pl_lab_dip_app_dt` date DEFAULT NULL,
  `pl_print_app_dt` date DEFAULT NULL,
  `pl_garments_app_dt` date DEFAULT NULL,
  `pl_pp_app_dt` date DEFAULT NULL,
  `pl_size_set_app_dt` date DEFAULT NULL,
  `pl_yarn_rf_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pl_yarn_qty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pl_fabric_qty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pl_fabric_ready_dt` date DEFAULT NULL,
  `pl_cutting_dt` date DEFAULT NULL,
  `pl_no_of_line` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pl_sewing_prod_line` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pl_sewing_prod_day` date DEFAULT NULL,
  `pl_sewing_compl_dt` date DEFAULT NULL,
  `pl_finish_compl_dt` date DEFAULT NULL,
  `pl_fabric_rejec` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pl_cutting_rejec` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pl_sewing_rejec` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pl_finish_rejec` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pl_dhu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pl_final_pack_qty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pl_excess_short_qty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pl_final_shipp_qty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pl_value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `al_germent_details` text COLLATE utf8mb4_unicode_ci,
  `al_fabric_details` text COLLATE utf8mb4_unicode_ci,
  `al_yern_details` text COLLATE utf8mb4_unicode_ci,
  `al_trim_details` text COLLATE utf8mb4_unicode_ci,
  `al_quantity` decimal(10,2) DEFAULT NULL,
  `al_po_purch_recvd_d` date DEFAULT NULL,
  `al_req_delv_dt` date DEFAULT NULL,
  `al_lead_time` date DEFAULT NULL,
  `al_yern_recei_s_dt` date DEFAULT NULL,
  `al_yern_recei_e_dt` date DEFAULT NULL,
  `al_fabric_qlt_sub_dt` date DEFAULT NULL,
  `al_fabric_qlt_app_dt` date DEFAULT NULL,
  `al_fabric_compo_tst_sub` date DEFAULT NULL,
  `al_fabric_compo_tst_app` date DEFAULT NULL,
  `al_fabric_qlt_tst_sub` date DEFAULT NULL,
  `al_fabric_qlt_tst_app_dt` date DEFAULT NULL,
  `al_sss_samp_sub_dt` date DEFAULT NULL,
  `al_sss_app_dt` date DEFAULT NULL,
  `al_knitting_s_dt` date DEFAULT NULL,
  `al_knitting_e_dt` date DEFAULT NULL,
  `al_dyeing_s_dt` date DEFAULT NULL,
  `al_dyeing_e_dt` date DEFAULT NULL,
  `al_sewing_acce_tst_sub` date DEFAULT NULL,
  `al_sewing_acce_inhouse_dt` date DEFAULT NULL,
  `al_packing_acce_tst_sub` date DEFAULT NULL,
  `al_packing_acce_inhouse_dt` date DEFAULT NULL,
  `al_cutting_s_dt` date DEFAULT NULL,
  `al_cutting_e_dt` date DEFAULT NULL,
  `al_print_emb_s_dt` date DEFAULT NULL,
  `al_print_emb_e_dt` date DEFAULT NULL,
  `al_sewing_s_dt` date DEFAULT NULL,
  `al_sewing_e_dt` date DEFAULT NULL,
  `al_finish_s_dt` date DEFAULT NULL,
  `al_finish_e_dt` date DEFAULT NULL,
  `al_midline_inspec_dt` date DEFAULT NULL,
  `al_final_inspec_dt` date DEFAULT NULL,
  `al_shipment_dt` date DEFAULT NULL,
  `al_picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `al_germents_smv` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `al_fabric_consumtion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `al_color_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `al_color_wise_qty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `al_print_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `al_sewing_acc_dets` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `al_packing_acc_dets` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `al_buld_fab_qlt_app_dt` date DEFAULT NULL,
  `al_lab_dip_app_dt` date DEFAULT NULL,
  `al_print_app_dt` date DEFAULT NULL,
  `al_garments_app_dt` date DEFAULT NULL,
  `al_pp_app_dt` date DEFAULT NULL,
  `al_size_set_app_dt` date DEFAULT NULL,
  `al_yarn_rf_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `al_yarn_qty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `al_fabric_qty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `al_fabric_ready_dt` date DEFAULT NULL,
  `al_cutting_dt` date DEFAULT NULL,
  `al_no_of_line` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `al_sewing_prod_line` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `al_sewing_prod_day` date DEFAULT NULL,
  `al_sewing_comal_dt` date DEFAULT NULL,
  `al_finish_comal_dt` date DEFAULT NULL,
  `al_fabric_rejec` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `al_cutting_rejec` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `al_sewing_rejec` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `al_finish_rejec` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `al_dhu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `al_final_pack_qty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `al_excess_short_qty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `al_final_shipp_qty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `al_value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_status` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_no`, `buyer_id`, `style_no`, `delivery_date_interval`, `pl_germent_details`, `pl_fabric_details`, `pl_yern_details`, `pl_trim_details`, `pl_quantity`, `pl_po_purch_recvd_d`, `pl_req_delv_dt`, `pl_lead_time`, `pl_yern_recei_s_dt`, `pl_yern_recei_e_dt`, `pl_fabric_qlt_sub_dt`, `pl_fabric_qlt_app_dt`, `pl_fabric_compo_tst_sub`, `pl_fabric_compo_tst_app`, `pl_fabric_qlt_tst_sub`, `pl_fabric_qlt_tst_app_dt`, `pl_sss_samp_sub_dt`, `pl_sss_app_dt`, `pl_knitting_s_dt`, `pl_knitting_e_dt`, `pl_dyeing_s_dt`, `pl_dyeing_e_dt`, `pl_sewing_acce_tst_sub`, `pl_sewing_acce_inhouse_dt`, `pl_packing_acce_tst_sub`, `pl_packing_acce_inhouse_dt`, `pl_cutting_s_dt`, `pl_cutting_e_dt`, `pl_print_emb_s_dt`, `pl_print_emb_e_dt`, `pl_sewing_s_dt`, `pl_sewing_e_dt`, `pl_finish_s_dt`, `pl_finish_e_dt`, `pl_midline_inspec_dt`, `pl_final_inspec_dt`, `pl_shipment_dt`, `pl_picture`, `pl_germents_smv`, `pl_fabric_consumtion`, `pl_sewing_acc_dets`, `pl_packing_acc_dets`, `pl_buld_fab_qlt_app_dt`, `pl_lab_dip_app_dt`, `pl_print_app_dt`, `pl_garments_app_dt`, `pl_pp_app_dt`, `pl_size_set_app_dt`, `pl_yarn_rf_no`, `pl_yarn_qty`, `pl_fabric_qty`, `pl_fabric_ready_dt`, `pl_cutting_dt`, `pl_no_of_line`, `pl_sewing_prod_line`, `pl_sewing_prod_day`, `pl_sewing_compl_dt`, `pl_finish_compl_dt`, `pl_fabric_rejec`, `pl_cutting_rejec`, `pl_sewing_rejec`, `pl_finish_rejec`, `pl_dhu`, `pl_final_pack_qty`, `pl_excess_short_qty`, `pl_final_shipp_qty`, `pl_value`, `al_germent_details`, `al_fabric_details`, `al_yern_details`, `al_trim_details`, `al_quantity`, `al_po_purch_recvd_d`, `al_req_delv_dt`, `al_lead_time`, `al_yern_recei_s_dt`, `al_yern_recei_e_dt`, `al_fabric_qlt_sub_dt`, `al_fabric_qlt_app_dt`, `al_fabric_compo_tst_sub`, `al_fabric_compo_tst_app`, `al_fabric_qlt_tst_sub`, `al_fabric_qlt_tst_app_dt`, `al_sss_samp_sub_dt`, `al_sss_app_dt`, `al_knitting_s_dt`, `al_knitting_e_dt`, `al_dyeing_s_dt`, `al_dyeing_e_dt`, `al_sewing_acce_tst_sub`, `al_sewing_acce_inhouse_dt`, `al_packing_acce_tst_sub`, `al_packing_acce_inhouse_dt`, `al_cutting_s_dt`, `al_cutting_e_dt`, `al_print_emb_s_dt`, `al_print_emb_e_dt`, `al_sewing_s_dt`, `al_sewing_e_dt`, `al_finish_s_dt`, `al_finish_e_dt`, `al_midline_inspec_dt`, `al_final_inspec_dt`, `al_shipment_dt`, `al_picture`, `al_germents_smv`, `al_fabric_consumtion`, `al_color_name`, `al_color_wise_qty`, `al_print_name`, `al_sewing_acc_dets`, `al_packing_acc_dets`, `al_buld_fab_qlt_app_dt`, `al_lab_dip_app_dt`, `al_print_app_dt`, `al_garments_app_dt`, `al_pp_app_dt`, `al_size_set_app_dt`, `al_yarn_rf_no`, `al_yarn_qty`, `al_fabric_qty`, `al_fabric_ready_dt`, `al_cutting_dt`, `al_no_of_line`, `al_sewing_prod_line`, `al_sewing_prod_day`, `al_sewing_comal_dt`, `al_finish_comal_dt`, `al_fabric_rejec`, `al_cutting_rejec`, `al_sewing_rejec`, `al_finish_rejec`, `al_dhu`, `al_final_pack_qty`, `al_excess_short_qty`, `al_final_shipp_qty`, `al_value`, `order_status`, `created_at`, `updated_at`) VALUES
(2, '49', 1, '81', NULL, 'Soluta atque commodi', 'Sit modi voluptas i', 'Aperiam sint amet a', 'Consectetur minus re', '76.00', '1993-03-02', '1993-04-21', '1993-04-19', '1993-03-12', '1993-03-17', '1993-03-12', '1993-03-19', '1993-03-10', '1993-03-17', '1993-03-10', '1993-03-19', '1993-03-15', '1993-03-22', '1993-03-16', '1993-03-30', '1993-03-20', '1993-04-03', '1993-03-15', '1993-03-22', '1993-03-17', '1993-04-01', '1993-03-27', '1993-04-11', '1993-03-28', '1993-04-13', '1993-03-30', '1993-04-15', '1993-03-31', '1993-04-17', '1993-04-05', '1993-04-19', '1993-04-20', 'img_2021_10_03_010115_70817023.jpg', 'Consectetur sint qu', 'dzn', 'Eos placeat nulla', 'Voluptas ea ad et ab', '1977-03-31', '1993-01-16', '1996-07-24', NULL, '1986-07-30', '1982-08-21', 'Dicta pariatur Sed', '922', '606', '1992-08-27', '1984-04-06', 'Quod in sunt rerum', 'Commodo in sit qui o', '2002-10-28', '1973-04-04', '2017-12-28', 'Adipisicing dolore e', 'Maiores repellendus', 'Quia eos ut sunt har', 'Maiores sint commod', 'Ratione autem et in', '393', '935', '424', '54', '88888888', '120', 'yern details here', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-03 07:01:15', '2021-10-09 23:06:01'),
(3, '100', 2, '98', NULL, 'Exercitationem qui m', 'Illo culpa et eiusm', 'Quasi voluptas conse', 'Cum libero id omnis', '103.00', '2003-10-21', '2003-12-10', '2003-12-08', '2003-10-31', '2003-11-05', '2003-10-31', '2003-11-07', '2003-10-29', '2003-11-05', '2003-10-29', '2003-11-07', '2003-11-03', '2003-11-10', '2003-11-04', '2003-11-18', '2003-11-08', '2003-11-22', '2003-11-03', '2003-11-10', '2003-11-05', '2003-11-20', '2003-11-15', '2003-11-30', '2003-11-16', '2003-12-02', '2003-11-18', '2003-12-04', '2003-11-19', '2003-12-06', '2003-11-24', '2003-12-08', '2003-12-09', 'img_2021_10_10_050318_48016165.jpg', 'Dolores blanditiis m', 'kg', 'Labore exercitation', 'In rerum adipisicing', '1982-05-13', '2008-07-02', '2003-09-28', NULL, '2007-03-09', '1984-01-03', 'Aut cupidatat id nu', '767', '749', '1982-04-01', '2015-05-30', 'Lorem autem laborum', 'Nisi repudiandae vel', '2021-12-17', '2007-10-31', '1971-03-09', 'Architecto magna mag', 'Elit cupiditate lab', 'Est ratione quam eo', 'Explicabo Commodo d', 'Eos dolorum nulla f', '156', '65', '771', '60', '120', '1200000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '120', '100', NULL, '2021-10-09 23:03:19', '2021-10-12 00:41:46'),
(4, '100', 2, '13', NULL, 'Blanditiis sapiente', 'Deserunt vel nemo fu', 'Delectus nostrum fa', 'Placeat cupidatat p', '879.00', '2018-09-05', '2018-10-25', '2018-10-23', '2018-09-15', '2018-09-20', '2018-09-15', '2018-09-22', '2018-09-13', '2018-09-20', '2018-09-13', '2018-09-22', '2018-09-18', '2018-09-25', '2018-09-19', '2018-10-03', '2018-09-23', '2018-10-07', '2018-09-18', '2018-09-25', '2018-09-20', '2018-10-05', '2018-09-30', '2018-10-15', '2018-10-01', '2018-10-17', '2018-10-03', '2018-10-19', '2018-10-04', '2018-10-21', '2018-10-09', '2018-10-23', '2018-10-24', 'img_2021_10_10_050442_31031021.jpg', 'Inventore temporibus', 'dzn', 'Nemo in dolor quaera', 'Eligendi in natus qu', '2021-05-30', '1971-07-10', '2017-10-10', NULL, '2021-08-14', '2016-09-07', 'Dolores nihil ad ame', '656', '316', '1998-02-25', '2015-05-30', 'Sunt ut minim volupt', 'Et eum vitae occaeca', '2012-12-27', '1975-01-31', '1995-10-22', 'Itaque ipsum qui opt', 'In commodi aliqua N', 'Odio sit cum exercit', 'Ut optio in vel rep', 'Aliqua Non dolor an', '947', '984', '369', '79', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1980-09-27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-09 23:04:42', '2021-10-09 23:38:18'),
(5, '48', 1, '57', NULL, 'Ut est incididunt a', 'Voluptas nulla ut iu', 'Consequatur est pra', 'Eiusmod earum omnis', '503.00', '2017-02-15', '2017-04-06', '2017-04-04', '2017-02-25', '2017-03-02', '2017-02-25', '2017-03-04', '2017-02-23', '2017-03-02', '2017-02-23', '2017-03-04', '2017-02-28', '2017-03-07', '2017-03-01', '2017-03-15', '2017-03-05', '2017-03-19', '2017-02-28', '2017-03-07', '2017-03-02', '2017-03-17', '2017-03-12', '2017-03-27', '2017-03-13', '2017-03-29', '2017-03-15', '2017-03-31', '2017-03-16', '2017-04-02', '2017-03-21', '2017-04-04', '2017-04-05', 'img_2021_10_12_064329_98753814.jpg', 'Ad ut excepturi esse', 'kg', 'Sit est fuga Repud', 'Ea qui aut voluptate', '2016-03-27', '1991-05-14', '1985-11-29', NULL, '1999-10-19', '2020-05-24', 'Sunt cupiditate ut', '731', '536', '1997-09-18', '2016-08-04', 'At elit fugit dolo', 'Eum commodi reprehen', '1986-11-04', '1994-11-26', '1971-05-19', 'Quibusdam ea et eos', 'Do velit delectus u', 'Vitae quaerat dolore', 'Dolore quia rem itaq', 'Eligendi Nam qui imp', '712', '323', '571', '40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-28', NULL, NULL, '12222', 'dzn', 'kg', NULL, '100', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-12 00:43:30', '2021-10-12 22:40:08'),
(6, 'Perferendis non est', 3, 'Saepe hic dolor id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Vel qui distinctio', NULL, 'Magna labore aliquam', 'Mollit ea excepteur', '1972-11-12', '1991-11-07', '1983-01-05', NULL, '1984-03-15', '2013-11-01', 'At omnis eum volupta', '299', '624', '1970-06-16', '1971-03-29', 'Sit voluptatem quis', 'Excepteur quas dolor', '2011-04-16', '1998-07-18', '1978-09-17', 'Dolore quia quia fac', 'Aliquip numquam impe', 'Sit qui quam aut nih', 'Sit eiusmod accusam', 'Mollitia libero comm', '530', '36', NULL, '67', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-16 03:37:02', '2021-10-16 04:04:01'),
(7, 'Aut incididunt ullam', 5, 'Ut atque harum rerum', NULL, 'Aspernatur ex aut oc', 'Eveniet similique u', 'Voluptate excepturi', 'Est reiciendis et in', '10.00', '2021-10-16', '2021-10-26', '2021-10-20', '2021-10-17', '2021-10-17', '2021-10-17', '2021-10-17', '2021-10-16', '2021-10-17', '2021-10-16', '2021-10-17', '2021-10-17', '2021-10-17', '2021-10-17', '2021-10-17', '2021-10-17', '2021-10-19', '2021-10-17', '2021-10-18', '2021-10-17', '2021-10-19', '2021-10-18', '2021-10-20', '2021-10-18', '2021-10-20', '2021-10-18', '2021-10-20', '2021-10-18', '2021-10-20', '2021-10-19', '2021-10-20', '2021-10-20', NULL, 'Ipsam earum sit sunt', NULL, 'Sunt sint eaque ess', 'Qui officia veniam', '2004-11-10', '1991-04-22', '1977-07-22', NULL, '2000-01-17', '2021-02-11', 'Aliquid in alias qui', '520', '789', '1991-11-16', '1977-12-06', 'Aliquid laboriosam', 'Accusantium in offic', '2000-11-23', '1995-03-01', '1995-05-27', 'Maiores minim conseq', 'Labore adipisicing v', 'Error voluptas possi', 'Blanditiis excepteur', 'Aspernatur at qui of', '784', '251', '100', '95', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-16 04:06:17', '2021-10-16 04:37:50'),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-16 05:16:52', '2021-10-16 05:16:52'),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-16 05:23:04', '2021-10-16 05:23:04'),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-17 01:59:27', '2021-10-17 01:59:27'),
(11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'draft', '2021-10-17 02:49:15', '2021-10-17 02:49:15'),
(12, 'Accusantium distinct', 8, 'Occaecat tempore qu', NULL, 'Repudiandae possimus', 'Et totam debitis sus', 'Deleniti irure velit', 'Voluptas animi sunt', '404.00', '2021-10-17', '2021-10-27', '2021-10-21', '2021-10-18', '2021-10-18', '2021-10-18', '2021-10-18', '2021-10-17', '2021-10-18', '2021-10-17', '2021-10-18', '2021-10-18', '2021-10-18', '2021-10-18', '2021-10-18', '2021-10-18', '2021-10-20', '2021-10-18', '2021-10-19', '2021-10-18', '2021-10-20', '2021-10-19', '2021-10-21', '2021-10-19', '2021-10-21', '2021-10-19', '2021-10-21', '2021-10-19', '2021-10-21', '2021-10-20', '1995-09-23', '2021-10-21', 'img_2021_10_17_085301_63725762.png', 'Voluptatem aliquam m', 'dzn', 'Error et impedit ul', 'Nulla provident vel', '1993-04-17', '2010-12-27', '1989-12-16', NULL, '2016-01-17', '2006-11-07', 'Atque et eveniet am', '687', '297', '1990-08-02', '2009-06-17', 'Totam ullam perferen', 'Aliquid quaerat volu', '1988-09-21', '1977-05-26', '2011-07-26', 'Dolore dolor aut vol', 'Et quod est odit bea', 'Eos natus lorem perf', 'Id veniam aut in qu', 'Laboris labore eum v', '486', '630', '333', '57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'draft', '2021-10-17 02:51:41', '2021-10-17 02:53:02'),
(13, 'Quia natus iste sequ', 8, 'Reprehenderit ut ac', NULL, 'Libero atque consequ', 'Sit et ullamco aut', 'Voluptas eos enim to', 'Adipisci laudantium', '262.00', '2021-10-17', '2021-11-04', '2021-10-25', '2021-10-18', '2021-10-19', '2021-10-18', '2021-10-20', '2021-10-18', '2021-10-19', '2021-10-18', '2021-10-20', '2021-10-20', '2021-10-20', '2021-10-20', '2021-10-20', '2021-10-20', '2021-10-22', '2021-10-19', '2021-10-21', '2021-10-19', '2021-10-22', '2021-10-21', '2021-10-24', '2021-10-21', '2021-10-24', '2021-10-22', '2021-10-24', '2021-10-22', '2021-10-25', '2021-10-23', '2016-10-17', '2021-10-25', 'img_2021_10_17_085447_61331698.png', 'Non nihil labore dol', 'kg', 'Reprehenderit offic', 'Accusantium laborios', '2010-03-06', '2004-03-14', '1982-06-25', NULL, '2004-07-24', '1993-05-17', 'Nulla voluptatum est', '524', '199', '1971-08-04', '1991-11-13', 'Eiusmod eius ea ut d', 'Qui aut laborum Ape', '1975-05-19', '2012-03-07', '1988-08-04', 'Ut fugiat veniam in', 'Ipsum praesentium a', 'Non facilis consecte', 'Rerum eaque aut ea q', 'Enim quia non ut vit', '271', '223', '867', '22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'approved', '2021-10-17 02:54:08', '2021-10-17 02:54:47'),
(15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'draft', '2021-10-17 03:25:07', '2021-10-17 03:25:07'),
(16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'draft', '2021-10-17 04:27:23', '2021-10-17 04:27:23'),
(17, 'Voluptate accusamus', 3, 'Aut aliquip cupidita', '50', 'Eligendi sunt est pa', 'Expedita iusto verit', 'Accusantium libero i', 'Qui nobis id rerum', '248.00', '2021-10-23', '2021-11-26', '2021-10-31', '2021-10-12', '2021-10-14', '2021-10-12', '2021-10-15', '2021-10-11', '2021-10-14', '2021-10-11', '2021-10-15', '2021-10-16', '2021-10-16', '2021-10-16', '2021-10-16', '2021-10-16', '2021-10-23', '2021-10-13', '2021-10-20', '2021-10-14', '2021-10-22', '2021-10-19', '2021-10-27', '2021-10-20', '2021-10-28', '2021-10-21', '2021-10-29', '2021-10-21', '2021-10-30', '2021-10-24', '1978-02-19', '2021-10-31', NULL, 'Itaque quia aliquid', NULL, 'Et obcaecati fugit', 'Accusantium blanditi', '1993-04-24', '2010-09-05', '2004-02-17', NULL, '2018-09-10', '2013-12-15', 'Soluta voluptatibus', '25', '868', '2019-01-25', '1986-04-25', 'Eum ut assumenda vol', 'Unde sint beatae vo', '2011-05-14', '2000-01-15', '2011-11-08', 'Quis reiciendis non', 'Eligendi quisquam cu', 'Sit sunt dolore libe', 'Id omnis reiciendis', 'Inventore quis deser', '681', '824', '1400', '30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'img_2021_10_18_082113_10869911.jpg', NULL, NULL, '{\"1\":\"fdsf\",\"0\":\"aaa\"}', '{\"1\":\"656\",\"0\":\"55\"}', '{\"1\":\"aa\",\"0\":\"55\"}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'approved', '2021-10-17 04:56:04', '2021-10-23 03:14:10'),
(18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'approved', '2021-10-17 05:10:38', '2021-10-17 05:10:55'),
(19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'draft', '2021-10-17 05:11:52', '2021-10-17 05:11:52'),
(20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'draft', '2021-10-17 05:13:22', '2021-10-17 05:13:22'),
(21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'draft', '2021-10-17 05:22:46', '2021-10-17 05:22:46'),
(22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'draft', '2021-10-17 05:22:59', '2021-10-17 05:22:59'),
(23, NULL, NULL, NULL, '10', NULL, NULL, NULL, NULL, NULL, '2021-10-17', '2021-10-27', '2021-10-21', '2021-10-18', '2021-10-18', '2021-10-18', '2021-10-18', '2021-10-17', '2021-10-18', '2021-10-17', '2021-10-18', '2021-10-18', '2021-10-18', '2021-10-18', '2021-10-18', '2021-10-18', '2021-10-20', '2021-10-18', '2021-10-19', '2021-10-18', '2021-10-20', '2021-10-19', '2021-10-21', '2021-10-19', '2021-10-21', '2021-10-19', '2021-10-21', '2021-10-19', '2021-10-21', '2021-10-20', NULL, '2021-10-21', NULL, NULL, 'kg', 'Rerum architecto ven', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"Paul Owens\"]', '[\"4564\"]', '[\"22\"]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'approved', '2021-10-17 05:23:04', '2021-10-17 06:01:35'),
(24, NULL, NULL, NULL, '10', NULL, NULL, NULL, NULL, NULL, '2021-10-17', '2021-10-27', '2021-10-21', '2021-10-18', '2021-10-18', '2021-10-18', '2021-10-18', '2021-10-17', '2021-10-18', '2021-10-17', '2021-10-18', '2021-10-18', '2021-10-18', '2021-10-18', '2021-10-18', '2021-10-18', '2021-10-20', '2021-10-18', '2021-10-19', '2021-10-18', '2021-10-20', '2021-10-19', '2021-10-21', '2021-10-19', '2021-10-21', '2021-10-19', '2021-10-21', '2021-10-19', '2021-10-21', '2021-10-20', NULL, '2021-10-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[null]', '[null]', '[null]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', NULL, 'approved', '2021-10-17 06:02:47', '2021-10-17 06:43:58'),
(25, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'draft', '2021-10-17 06:32:32', '2021-10-17 06:32:32'),
(26, NULL, NULL, NULL, '52', NULL, NULL, NULL, NULL, NULL, '2021-10-18', '2021-12-09', '2021-12-07', '2021-10-29', '2021-11-03', '2021-10-29', '2021-11-05', '2021-10-27', '2021-11-03', '2021-10-27', '2021-11-05', '2021-11-06', '2021-11-06', '2021-11-06', '2021-11-06', '2021-11-06', '2021-11-21', '2021-10-24', '2021-11-01', '2021-10-25', '2021-11-02', '2021-10-31', '2021-11-07', '2021-10-31', '2021-11-08', '2021-11-01', '2021-11-09', '2021-11-02', '2021-11-10', '2021-11-04', NULL, '2021-11-12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '50', NULL, NULL, 'approved', '2021-10-17 22:32:19', '2021-10-18 00:22:06'),
(27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'draft', '2021-10-18 00:22:59', '2021-10-18 00:22:59'),
(29, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'draft', '2021-10-18 02:01:18', '2021-10-18 02:01:18'),
(30, NULL, NULL, NULL, '20', NULL, NULL, NULL, NULL, NULL, '2021-10-23', '2021-11-07', '2021-11-07', '2021-10-22', '2021-10-24', '2021-10-22', '2021-10-25', '2021-10-22', '2021-10-24', '2021-10-22', '2021-10-25', '2021-10-26', '2021-10-26', '2021-10-26', '2021-10-26', '2021-10-26', '2021-10-31', '2021-10-24', '2021-10-26', '2021-10-24', '2021-10-30', '2021-10-28', '2021-11-03', '2021-10-29', '2021-11-04', '2021-10-30', '2021-11-05', '2021-10-30', '2021-11-06', '2021-11-01', '2021-11-04', '2021-11-07', 'img_2021_10_18_083607_70903490.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1500', '120', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'approved', '2021-10-18 02:35:55', '2021-10-23 03:26:43'),
(31, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'draft', '2021-11-17 01:33:38', '2021-11-17 01:33:38'),
(32, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'draft', '2021-11-17 01:35:44', '2021-11-17 01:35:44'),
(33, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'draft', '2021-11-17 02:04:13', '2021-11-17 02:04:13'),
(34, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'draft', '2021-12-07 22:25:55', '2021-12-07 22:25:55'),
(35, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'draft', '2021-12-07 22:26:19', '2021-12-07 22:26:19'),
(36, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'draft', '2021-12-07 22:32:42', '2021-12-07 22:32:42'),
(37, 'Quia ratione magnam', 28, 'Qui est aut fuga U', '50', 'Suscipit in eaque do', 'Temporibus dolorem d', 'Qui natus non facili', 'Eaque aspernatur eli', '504.00', '2021-12-09', '2022-01-28', '2022-01-26', '2021-12-19', '2021-12-24', '2021-12-19', '2021-12-26', '2021-12-17', '2021-12-24', '2021-12-17', '2021-12-26', '2021-12-27', '2021-12-27', '2021-12-27', '2021-12-27', '2021-12-27', '2022-01-10', '2021-12-22', '2021-12-29', '2021-12-24', '2022-01-08', '2022-01-03', '2022-01-18', '2022-01-04', '2022-01-20', '2022-01-06', '2022-01-22', '2022-01-07', '2022-01-24', '2022-01-12', '1980-01-24', '2022-01-27', NULL, 'Quasi tenetur elit', 'dzn', 'Sunt laboriosam ita', 'Qui voluptate facili', '1996-04-14', '1979-08-23', '1992-02-06', NULL, '2015-08-30', '1998-09-04', 'Tempore eiusmod mag', '198', '347', '2009-03-05', '2012-12-08', 'Placeat nostrud dig', 'Animi voluptatum ex', '1993-06-20', '1973-08-07', '2002-09-01', 'Consectetur corpori', 'Duis ad numquam tene', 'Dicta adipisicing vo', 'Hic dolor aute alias', 'Dolores ut rerum ad', '879', '85', '494', '60', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'approved', '2021-12-07 22:47:08', '2021-12-07 22:47:29'),
(38, 'Aut voluptate dolore', 2, 'A voluptatem aliquam', '20', 'Consequatur digniss', 'Perferendis incididu', 'Iusto aperiam dicta', 'Sed sapiente aliquip', '100.00', '2021-12-08', '2021-12-28', '2021-12-28', '2021-12-12', '2021-12-14', '2021-12-12', '2021-12-15', '2021-12-12', '2021-12-14', '2021-12-12', '2021-12-15', '2021-12-14', '2021-12-16', '2021-12-14', '2021-12-20', '2021-12-16', '2021-12-21', '2021-12-14', '2021-12-16', '2021-12-14', '2021-12-20', '2021-12-18', '2021-12-24', '2021-12-19', '2021-12-25', '2021-12-20', '2021-12-26', '2021-12-20', '2021-12-27', '2021-12-22', '2005-05-01', '2021-12-28', NULL, 'Consequat Expedita', 'dzn', 'Temporibus autem con', 'Minima ut dolore et', '1985-10-22', '1989-07-21', '1989-11-04', NULL, '1971-01-10', '1985-06-02', 'Ipsum deserunt ut ul', '656', '738', '2015-04-27', '2008-03-11', 'Aliqua Nobis sit d', 'Sint error sint ut', '1971-10-04', '2000-02-14', '2008-07-04', 'Itaque doloremque in', 'Omnis dolore dolorem', 'Veniam nisi cumque', 'Saepe eos sed perspi', 'Recusandae Soluta h', '949', '469', '275', '75', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'approved', '2021-12-07 22:57:01', '2021-12-07 22:57:17'),
(39, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'draft', '2021-12-07 22:58:01', '2021-12-07 22:58:01'),
(40, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'draft', '2021-12-07 23:17:18', '2021-12-07 23:17:18'),
(41, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'draft', '2021-12-08 04:22:33', '2021-12-08 04:22:33'),
(42, 'Dolor et rem at reru', 15, 'Cupidatat autem hic', '50', 'Voluptatibus minus a', 'Adipisci veniam nem', 'Beatae in deserunt d', 'Commodi delectus la', '939.00', '2021-12-09', '2022-01-28', '2022-01-26', '2021-12-19', '2021-12-24', '2021-12-19', '2021-12-26', '2021-12-17', '2021-12-24', '2021-12-17', '2021-12-26', '2021-12-22', '2021-12-29', '2021-12-23', '2022-01-06', '2021-12-27', '2022-01-10', '2021-12-22', '2021-12-29', '2021-12-24', '2022-01-08', '2022-01-03', '2022-01-18', '2022-01-04', '2022-01-20', '2022-01-06', '2022-01-22', '2022-01-07', '2022-01-24', '2022-01-12', '1993-05-30', '2022-01-27', NULL, 'Quasi atque sed pari', 'dzn', 'Nostrum et cupiditat', 'Aut consequatur Vol', '2001-03-07', '1999-08-20', '1971-02-01', NULL, '1986-01-20', '2014-09-22', 'Harum distinctio Na', '702', '644', '1979-11-17', '1998-08-13', 'Illum excepteur dol', 'Commodi quibusdam et', '1972-09-01', '1971-05-29', '2006-01-18', 'Doloribus nostrum qu', 'Magnam Nam delectus', 'Quibusdam dolor offi', 'Totam fugiat sed sin', 'Enim aut ut deserunt', '33', '692', '116', '9', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'approved', '2021-12-08 06:48:17', '2021-12-08 07:02:57'),
(43, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'draft', '2021-12-08 07:07:49', '2021-12-08 07:07:49'),
(44, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'draft', '2021-12-19 02:43:52', '2021-12-19 02:43:52'),
(45, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'draft', '2021-12-19 02:47:20', '2021-12-19 02:47:20');

-- --------------------------------------------------------

--
-- Table structure for table `order_color_quantities`
--

CREATE TABLE `order_color_quantities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED DEFAULT NULL,
  `pl_color_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pl_color_wise_qty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pl_print_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `al_color_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `al_color_wise_qty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `al_print_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addedby_id` bigint(20) UNSIGNED DEFAULT NULL,
  `editedby_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_color_quantities`
--

INSERT INTO `order_color_quantities` (`id`, `order_id`, `pl_color_name`, `pl_color_wise_qty`, `pl_print_name`, `al_color_name`, `al_color_wise_qty`, `al_print_name`, `addedby_id`, `editedby_id`, `created_at`, `updated_at`) VALUES
(1, 10, '1', '1', 'a', NULL, NULL, NULL, NULL, NULL, '2021-10-17 02:44:34', '2021-10-17 02:44:34'),
(2, 10, '2', '2', 'b', NULL, NULL, NULL, NULL, NULL, '2021-10-17 02:44:34', '2021-10-17 02:44:34'),
(3, 10, '3', '3', 'c', NULL, NULL, NULL, NULL, NULL, '2021-10-17 02:44:34', '2021-10-17 02:44:34'),
(4, 12, 'Green', '443', 'Seth White', NULL, NULL, NULL, NULL, NULL, '2021-10-17 02:53:02', '2021-10-17 02:53:02'),
(5, 12, 'Yellow', '500', 'DEV', NULL, NULL, NULL, NULL, NULL, '2021-10-17 02:53:02', '2021-10-17 02:53:02'),
(6, 12, 'Blue', '150', 'Blueing', NULL, NULL, NULL, NULL, NULL, '2021-10-17 02:53:02', '2021-10-17 02:53:02'),
(7, 12, 'Red', '500', 'readi', NULL, NULL, NULL, NULL, NULL, '2021-10-17 02:53:02', '2021-10-17 02:53:02'),
(8, 13, 'Red', '712', 'Kelsey Small', NULL, NULL, NULL, NULL, NULL, '2021-10-17 02:54:47', '2021-10-17 02:54:47'),
(9, 13, 'green', '500', 'grin', NULL, NULL, NULL, NULL, NULL, '2021-10-17 02:54:47', '2021-10-17 02:54:47'),
(10, 13, 'Yellow', '700', 'yell', NULL, NULL, NULL, NULL, NULL, '2021-10-17 02:54:47', '2021-10-17 02:54:47'),
(23, 17, 'Azalia Farrell', '171', 'Rhiannon Booker', NULL, NULL, NULL, NULL, NULL, '2021-10-17 04:59:16', '2021-10-17 04:59:16'),
(24, 17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-17 05:00:00', '2021-10-17 05:00:00'),
(25, 17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-17 05:02:18', '2021-10-17 05:02:18'),
(27, 17, NULL, NULL, NULL, 'd', '777', '10', NULL, NULL, '2021-10-17 05:09:44', '2021-10-17 05:09:44'),
(28, 17, NULL, NULL, NULL, 'a', '10', '50', NULL, NULL, '2021-10-17 05:09:56', '2021-10-17 05:09:56'),
(29, 17, NULL, NULL, NULL, 'aaa', '55', '55', NULL, NULL, '2021-10-17 05:10:27', '2021-10-17 05:10:27'),
(30, 17, NULL, NULL, NULL, 'fdsf', '656', 'aa', NULL, NULL, '2021-10-17 05:10:27', '2021-10-17 05:10:27'),
(31, 18, 'a', '20', 'a', NULL, NULL, NULL, NULL, NULL, '2021-10-17 05:10:55', '2021-10-17 05:10:55'),
(32, 23, 'safd', '5646', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-17 05:29:35', '2021-10-17 05:29:35'),
(34, 23, NULL, NULL, NULL, 'Paul Owens', '4564', '22', NULL, NULL, '2021-10-17 05:30:36', '2021-10-17 05:30:36'),
(35, 23, 'a', '10', '100', NULL, NULL, NULL, NULL, NULL, '2021-10-17 05:34:19', '2021-10-17 05:34:19'),
(36, 23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-17 05:36:40', '2021-10-17 05:36:40'),
(37, 23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-17 06:01:35', '2021-10-17 06:01:35'),
(38, 24, 'a', '10', 'a', NULL, NULL, NULL, NULL, NULL, '2021-10-17 06:10:03', '2021-10-17 06:10:03'),
(39, 26, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-17 23:45:25', '2021-10-17 23:45:25'),
(41, 30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-18 02:36:08', '2021-10-18 02:36:08'),
(42, 17, 'a', '12', 'a', NULL, NULL, NULL, NULL, NULL, '2021-10-23 03:12:26', '2021-10-23 03:12:26'),
(43, 17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-23 03:12:26', '2021-10-23 03:12:26'),
(44, 17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-23 03:12:46', '2021-10-23 03:12:46'),
(45, 17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-23 03:14:10', '2021-10-23 03:14:10'),
(46, 30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-23 03:26:27', '2021-10-23 03:26:27'),
(47, 30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-23 03:26:36', '2021-10-23 03:26:36'),
(48, 30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-23 03:26:44', '2021-10-23 03:26:44'),
(49, 37, 'Rhea Pruitt', '593', 'Cullen Avila', NULL, NULL, NULL, NULL, NULL, '2021-12-07 22:47:29', '2021-12-07 22:47:29'),
(50, 38, 'Amity Welch', '298', 'Ciara Delgado', NULL, NULL, NULL, NULL, NULL, '2021-12-07 22:57:17', '2021-12-07 22:57:17'),
(51, 42, 'Grace Campbell', '899', 'Beverly Hamilton', NULL, NULL, NULL, NULL, NULL, '2021-12-08 06:49:57', '2021-12-08 06:49:57');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'web', '2021-09-21 06:48:25', '2021-09-21 06:48:25'),
(2, 'role-create', 'web', '2021-09-21 06:48:25', '2021-09-21 06:48:25'),
(3, 'role-edit', 'web', '2021-09-21 06:48:25', '2021-09-21 06:48:25'),
(4, 'role-delete', 'web', '2021-09-21 06:48:25', '2021-09-21 06:48:25'),
(5, 'buyer-list', 'web', '2021-09-21 06:48:25', '2021-09-21 06:48:25'),
(6, 'buyer-create', 'web', '2021-09-21 06:48:25', '2021-09-21 06:48:25'),
(7, 'buyer-edit', 'web', '2021-09-21 06:48:25', '2021-09-21 06:48:25'),
(8, 'buyer-delete', 'web', '2021-09-21 06:48:25', '2021-09-21 06:48:25'),
(9, 'order-list', 'web', '2021-10-13 00:43:08', '2021-10-13 00:43:08'),
(10, 'order-create', 'web', '2021-10-13 00:43:22', '2021-10-13 00:43:22'),
(11, 'order-edit', 'web', '2021-10-13 00:43:29', '2021-10-13 00:43:29'),
(12, 'order-delete', 'web', '2021-10-13 00:43:36', '2021-10-13 00:43:36'),
(13, 'user-list', 'web', '2021-10-13 00:54:07', '2021-10-13 00:54:07'),
(14, 'user-create', 'web', '2021-10-13 00:54:21', '2021-10-13 00:54:21'),
(15, 'user-edit', 'web', '2021-10-13 00:54:29', '2021-10-13 00:54:29'),
(16, 'user-delete', 'web', '2021-10-13 00:54:35', '2021-10-13 00:54:35'),
(17, 'reset-password', 'web', '2021-12-14 01:11:55', '2021-12-14 01:11:55');

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
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2021-09-21 06:49:25', '2021-09-21 06:49:25'),
(2, 'Merchandiser', 'web', '2021-09-21 06:54:00', '2021-09-21 06:54:00'),
(3, 'Product_Store', 'web', '2021-12-19 02:36:58', '2021-12-19 02:36:58');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(5, 2),
(6, 2),
(7, 2),
(8, 2),
(9, 2),
(10, 2),
(11, 2),
(12, 2),
(13, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temp_password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `email_verified_at`, `password`, `remember_token`, `temp_password`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, NULL, '$2y$10$O8vdajLPF07s6AVdGQWcxulZnNzfM3YNuGYGxhTRhuPExB7T2HPoa', '3P2j1wwcYjuwCBsl2aJeJb6G5hfeN0WK9EWAsBi9j2jC24kdBtp6mHJAzalC', NULL, '2021-09-21 02:40:07', '2021-12-14 01:27:02'),
(3, 'Jakeem Williamson', 'figun@mailinator.com', NULL, NULL, '$2y$10$2vpSIzU0UZgYQaPyKFHCRO.CWBEdfRZuVdCeqU/BfF4cSRHjez/wu', NULL, NULL, '2021-09-21 06:57:26', '2021-09-21 06:57:26'),
(4, 'Lynn Hebert', 'pumokoq@mailinator.com', NULL, NULL, '$2y$10$sWn/8azeC8pqoux7Hu5JTOhyH3mYSRE76WOddo6Wk6hr5uBlFN8mu', NULL, NULL, '2021-09-21 16:22:37', '2021-09-21 16:22:37'),
(6, 'marchend', 'user@user.com', NULL, NULL, '$2y$10$ZiVGDZvsdKoo8kQqSj0a2eioxUzNf77i0LN7my3OWbfNkMnoMalgO', 'vXAfM45KzHLJUp8vjoMu1X1vKzJ7EpHqRb0SNQAch6Er6dGe1HEh9ecCJCEM', NULL, '2021-10-23 03:28:46', '2021-10-23 03:28:46'),
(7, 'DEV', 'dev@gmail.com', NULL, NULL, '$2y$10$v3.FbrCOfXMBE5vrVUQnT.c47dVsIPFc5frbtZZh/6qhWh2BLxIdC', 'WkARhPrNhLNrEApLCNVo4G2UCLj4znxdL8RWYUC9VEQ5Mww04XfGfiEfiCD3', '11111111', '2021-12-14 01:07:25', '2021-12-14 02:07:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyers`
--
ALTER TABLE `buyers`
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
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_color_quantities`
--
ALTER TABLE `order_color_quantities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyers`
--
ALTER TABLE `buyers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `order_color_quantities`
--
ALTER TABLE `order_color_quantities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
