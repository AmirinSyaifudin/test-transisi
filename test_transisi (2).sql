-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2022 at 06:31 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_transisi`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`) VALUES
(36, 'Ir. Daroji'),
(37, 'Yoga S.Kom'),
(38, 'Tias S.Kom'),
(39, 'Tumbang S.Kom'),
(40, 'Pius S.kom'),
(41, 'Gunawan S.kom'),
(42, 'Waluyo S.kom'),
(43, 'Beni S.kom'),
(44, 'Indro S.kom'),
(45, 'Bayu S.kom'),
(46, 'David S.kom'),
(47, 'Fandi S.Kom'),
(48, 'Maimunah');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `author_id`, `title`, `description`, `cover`, `qty`, `created_at`, `updated_at`) VALUES
(55, 45, 'Janji, Tere Liye', 'Bahar, Buya, Muthi dan Delma', NULL, '100', '2021-12-03 06:30:27', '2021-12-03 06:30:27'),
(56, 41, 'Laskar Pelangi', 'Laskar Pelangi karya Andree Hirata', 'assets/covers/7egwehh0LWJpnhD2k3UL4kXDl7fSZruRC7TrJgNt.jpeg', '100', '2021-12-03 06:32:36', '2021-12-03 06:37:55'),
(57, 46, 'Sang Pemimpin', 'Sang Pemimpin  karya Andree Hirata', 'assets/covers/NOje0tuIjgxbl8eJsnU0lUQL0VUVm0qiuCrEiFOx.jpeg', '100', '2021-12-03 06:37:15', '2021-12-03 06:39:18'),
(58, 47, 'Sunt blanditiis rerum ratione aliquam.', 'Voluptatem vel quo provident reprehenderit nesciunt soluta doloremque fugiat numquam praesentium sint error quia ipsa architecto asperiores similique sunt cumque omnis quasi laboriosam excepturi saepe perferendis recusandae at sequi aliquam facere asperiores illo pariatur molestiae quidem maiores maiores totam id modi delectus voluptatem eum debitis quo exercitationem in sed et distinctio delectus et.', 'https://picsum.photos/seed/86/200/300', '16', '2022-01-07 01:31:39', '2022-01-07 01:31:39'),
(59, 47, 'Beatae debitis quas corporis.', 'Quaerat provident neque perspiciatis aut qui placeat sit est doloribus voluptate ad non nulla nihil odit consequatur quis aspernatur eum enim at quam in aliquam ipsum atque corporis quisquam et autem recusandae totam ullam error quam voluptas distinctio voluptas quae maiores molestiae porro molestiae quo qui maiores perspiciatis laboriosam vel doloribus in rerum sint excepturi omnis et deleniti.', 'https://picsum.photos/seed/76/200/300', '17', '2022-01-07 01:31:39', '2022-01-07 01:31:39'),
(60, 42, 'Exercitationem fugit saepe enim officia.', 'Velit rerum blanditiis eum non ea nulla quod eaque numquam aliquid nostrum nulla dolores non in id dignissimos consequatur omnis dolor saepe velit consequatur saepe fugit quo consequuntur dolores dolor rerum est enim est nulla consequuntur quidem nisi neque nostrum quia distinctio voluptatem aut sit sunt rerum eius nesciunt.', 'https://picsum.photos/seed/88/200/300', '19', '2022-01-07 01:31:39', '2022-01-07 01:31:39'),
(61, 47, 'Et quisquam dolorem deserunt.', 'Et similique quo cumque illum quam quas eum commodi optio fugit incidunt et rerum facere animi similique aut rerum sapiente recusandae mollitia magni officiis sapiente molestiae inventore fugit repellendus dolorum et aliquam quo necessitatibus quibusdam ut qui nobis placeat voluptate rerum molestias fuga enim fuga sunt distinctio qui sit eos commodi sint et autem est facere quis odit atque accusantium rem beatae mollitia nihil.', 'https://picsum.photos/seed/34/200/300', '13', '2022-01-07 01:31:39', '2022-01-07 01:31:39'),
(62, 41, 'Recusandae iure qui.', 'Esse repudiandae ab laboriosam possimus placeat voluptatem voluptatem ex quaerat et harum omnis est eos tempore reiciendis magni et occaecati ut possimus quos et et numquam sed optio quibusdam libero dolorum numquam fugiat quasi voluptates odit alias non cum rem omnis numquam dignissimos nihil quam eos voluptas dolorem in omnis illum magni quia.', 'https://picsum.photos/seed/75/200/300', '13', '2022-01-07 01:31:39', '2022-01-07 01:31:39'),
(63, 43, 'Dolorem ut dolorum praesentium dolor nulla.', 'Eius et placeat delectus vel et eius tenetur enim est reprehenderit ut veritatis quasi id ea facere et rem vel nostrum debitis rerum et et aliquid aliquam autem magni ipsam impedit minus unde aut sed quod dignissimos dicta laudantium.', 'https://picsum.photos/seed/99/200/300', '13', '2022-01-07 01:31:39', '2022-01-07 01:31:39'),
(64, 47, 'Vitae dolor repellat et aperiam.', 'Illo voluptatem debitis sequi iste non dolores quos beatae corporis ipsum cum enim aliquam modi accusamus repellendus quia quam numquam harum aut commodi et ex et et ipsam quod suscipit minima illo laborum est quia facere exercitationem ipsa eum enim non non et porro totam fugiat nihil aliquam rem accusantium velit impedit et et voluptatem cupiditate omnis alias voluptas dignissimos distinctio.', 'https://picsum.photos/seed/33/200/300', '15', '2022-01-07 01:31:39', '2022-01-07 01:31:39'),
(65, 37, 'Expedita rerum ab laborum occaecati aut.', 'Eius quis eveniet incidunt aliquam voluptatem quia omnis cum ratione est accusamus ullam aut aliquid quas consequatur doloribus saepe natus quas quasi tempora pariatur aut reiciendis molestiae sapiente eius nobis sapiente quo voluptatem deleniti vero consequatur aperiam quia rem quaerat vitae fuga aspernatur.', 'https://picsum.photos/seed/27/200/300', '10', '2022-01-07 01:31:39', '2022-01-07 01:31:39'),
(66, 38, 'Non in quia aspernatur.', 'Veritatis mollitia repellat vitae rerum veniam provident aspernatur et eius aut delectus nobis ducimus neque enim at officia voluptas rerum tempora earum consectetur quis nobis sequi quos neque et rerum natus qui maxime eveniet voluptatem repudiandae voluptate laborum quia voluptatem velit.', 'https://picsum.photos/seed/77/200/300', '13', '2022-01-07 01:31:39', '2022-01-07 01:31:39'),
(67, 47, 'Eius consequuntur fuga aut optio neque.', 'Sint natus non cum consequatur consequatur dolor eius consequuntur eveniet et consequatur accusamus animi repellat distinctio tempora libero sed earum optio repellat ut voluptas nam iusto ratione quae eos facilis ut voluptas autem corporis qui aliquam minima ad ut ullam facilis recusandae ipsa sit tempore consequatur magnam quia.', 'https://picsum.photos/seed/21/200/300', '10', '2022-01-07 01:31:39', '2022-01-07 01:31:39'),
(68, 45, 'Bangkit', 'Bangkit dari kegagalan dan meraih kesuksesan', NULL, '100', '2022-01-07 18:24:55', '2022-01-07 18:24:55');

-- --------------------------------------------------------

--
-- Table structure for table `borrow_history`
--

CREATE TABLE `borrow_history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `returned_at` datetime DEFAULT NULL,
  `admin_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `nama`, `email`, `cover`, `created_at`, `updated_at`) VALUES
(1, 'Similique amet pariatur cum sit et.', 'vkling@hotmail.com', 'https://picsum.photos/seed/43/200/300', '2022-01-07 01:00:09', '2022-01-07 01:00:09'),
(2, 'Quo dolores velit.', 'kira25@yahoo.com', 'https://picsum.photos/seed/96/200/300', '2022-01-07 01:00:09', '2022-01-07 01:00:09'),
(4, 'Quos eligendi est quo repudiandae.', 'bfarrell@durgan.biz', 'https://picsum.photos/seed/29/200/300', '2022-01-07 01:00:09', '2022-01-07 01:00:09'),
(5, 'Sunt et aliquid sit.', 'oberbrunner.reymundo@murphy.org', 'https://picsum.photos/seed/91/200/300', '2022-01-07 01:00:09', '2022-01-07 01:00:09'),
(7, 'Veritatis nostrum cumque perspiciatis tempora.', 'kamryn.kemmer@heathcote.org', 'https://picsum.photos/seed/27/200/300', '2022-01-07 01:00:09', '2022-01-07 01:00:09'),
(8, 'Eum nobis ab sequi.', 'richie78@borer.com', 'https://picsum.photos/seed/85/200/300', '2022-01-07 01:00:09', '2022-01-07 01:00:09'),
(9, 'Dignissimos ut asperiores minima aut.', 'gklein@fahey.net', 'https://picsum.photos/seed/97/200/300', '2022-01-07 01:00:09', '2022-01-07 01:00:09'),
(14, 'Delectus magnam corporis.', 'amelia.grady@yahoo.com', 'https://picsum.photos/seed/73/200/300', '2022-01-07 01:00:24', '2022-01-07 01:00:24'),
(15, 'Voluptatem doloribus quisquam veritatis.', 'jena78@yahoo.com', 'https://picsum.photos/seed/24/200/300', '2022-01-07 01:00:24', '2022-01-07 01:00:24'),
(18, 'Rerum quaerat id.', 'kolby04@bartoletti.com', 'https://picsum.photos/seed/75/200/300', '2022-01-07 01:00:24', '2022-01-07 01:00:24'),
(19, 'Ut optio dignissimos nam sequi.', 'gutmann.hilma@blick.com', 'https://picsum.photos/seed/33/200/300', '2022-01-07 01:00:24', '2022-01-07 01:00:24'),
(20, 'Sint doloremque quae et.', 'leda.hilpert@yahoo.com', 'https://picsum.photos/seed/73/200/300', '2022-01-07 01:00:24', '2022-01-07 01:00:24'),
(23, 'Voluptas aut est maxime culpa.', 'kozey.merritt@brekke.com', 'https://picsum.photos/seed/98/200/300', '2022-01-07 03:41:01', '2022-01-07 03:41:01'),
(24, 'Omnis iure et et fugiat.', 'xbeer@feil.info', 'https://picsum.photos/seed/19/200/300', '2022-01-07 03:41:01', '2022-01-07 03:41:01'),
(25, 'Aliquam qui vel accusamus.', 'lowell.satterfield@hartmann.net', 'https://picsum.photos/seed/43/200/300', '2022-01-07 03:41:01', '2022-01-07 03:41:01'),
(26, 'Voluptatibus fuga ab itaque pariatur tenetur.', 'anika.heaney@sauer.com', 'https://picsum.photos/seed/24/200/300', '2022-01-07 03:41:01', '2022-01-07 03:41:01'),
(27, 'Vel est at.', 'schroeder.dannie@lockman.com', 'https://picsum.photos/seed/76/200/300', '2022-01-07 03:41:01', '2022-01-07 03:41:01'),
(28, 'Sed aut alias ea.', 'carole09@yahoo.com', 'https://picsum.photos/seed/72/200/300', '2022-01-07 03:41:01', '2022-01-07 03:41:01'),
(29, 'Minus quae esse totam corporis.', 'pvonrueden@gmail.com', 'https://picsum.photos/seed/25/200/300', '2022-01-07 03:41:01', '2022-01-07 03:41:01'),
(32, 'Adit', 'adit@gmail.com', NULL, '2022-01-07 20:13:01', '2022-01-07 20:13:55'),
(33, 'PT INDOMARET', 'indomaret@gmail.com', NULL, '2022-01-08 00:59:02', '2022-01-08 00:59:02'),
(34, 'PT ALFAMART', 'alfamart@gmail.com', NULL, '2022-01-08 01:12:37', '2022-01-08 01:12:37'),
(35, 'TOKO PEDIA', 'tokopedia@gmail.com', NULL, '2022-01-08 01:13:49', '2022-01-08 01:13:49'),
(36, 'PT ALFAMIDI', 'alfamidi@gmail.com', NULL, '2022-01-08 01:17:46', '2022-01-08 01:17:46');

-- --------------------------------------------------------

--
-- Table structure for table `employe`
--

CREATE TABLE `employe` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employe`
--

INSERT INTO `employe` (`id`, `company_id`, `nama`, `email`, `created_at`, `updated_at`) VALUES
(1, 2, 'Voluptatem qui iure exercitationem.', 'renner.tyson@klocko.biz', '2022-01-07 03:48:05', '2022-01-07 03:48:05'),
(2, 20, 'Qui quia eveniet itaque voluptatem.', 'mauricio.maggio@moore.com', '2022-01-07 03:48:05', '2022-01-07 03:48:05'),
(3, 32, 'Dolor sit debitis.', 'hosea.fritsch@klein.com', '2022-01-07 03:48:05', '2022-01-08 00:57:47'),
(4, 8, 'Voluptas neque odio et enim.', 'antoinette67@gmail.com', '2022-01-07 03:48:05', '2022-01-07 03:48:05'),
(5, 7, 'A accusantium est culpa.', 'barton.axel@metz.org', '2022-01-07 03:48:05', '2022-01-07 03:48:05'),
(6, 29, 'Temporibus officiis quia repudiandae architecto blanditiis.', 'jay09@yahoo.com', '2022-01-07 03:48:05', '2022-01-07 03:48:05'),
(7, 33, 'Fandi', 'fandi@gmail.com', '2022-01-07 03:48:05', '2022-01-08 01:00:42'),
(8, 28, 'Voluptatem sapiente non aut aut.', 'edwina40@gmail.com', '2022-01-07 03:48:05', '2022-01-07 03:48:05'),
(9, 27, 'Quia voluptatem dolore culpa quis qui.', 'lilian68@yahoo.com', '2022-01-07 03:48:05', '2022-01-07 03:48:05'),
(10, 29, 'Ipsum ut dolorem animi.', 'pfeil@harris.com', '2022-01-07 03:48:05', '2022-01-07 03:48:05'),
(11, 9, 'Odit labore est.', 'gillian43@yahoo.com', '2022-01-07 04:06:44', '2022-01-07 04:06:44'),
(12, 19, 'A repellat consequatur fugiat consequatur.', 'april15@gmail.com', '2022-01-07 04:06:44', '2022-01-07 04:06:44'),
(13, 4, 'At tenetur sed vero.', 'johnson.linda@grant.org', '2022-01-07 04:06:44', '2022-01-07 04:06:44'),
(14, 24, 'Dolore quia laboriosam dicta.', 'shirley74@yahoo.com', '2022-01-07 04:06:44', '2022-01-07 04:06:44'),
(15, 33, 'Fitri', 'fitri@gmail.com', '2022-01-07 04:06:44', '2022-01-08 01:10:24'),
(16, 29, 'Quis omnis exercitationem velit.', 'pfeffer.evangeline@bashirian.com', '2022-01-07 04:06:44', '2022-01-07 04:06:44'),
(17, 28, 'Doloribus aut et.', 'lennie.christiansen@trantow.com', '2022-01-07 04:06:44', '2022-01-07 04:06:44'),
(19, 28, 'Rem eligendi itaque.', 'hwindler@gulgowski.net', '2022-01-07 04:06:44', '2022-01-07 04:06:44'),
(20, 25, 'Ut iusto excepturi omnis recusandae.', 'altenwerth.aniyah@moore.net', '2022-01-07 04:06:44', '2022-01-07 04:06:44'),
(21, 33, 'indro', 'indro@gmail.com', '2022-01-08 00:59:40', '2022-01-08 00:59:40');

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
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_03_23_125824_create_authors_table', 1),
(5, '2020_03_23_130418_create_books_table', 1),
(6, '2020_03_23_131417_create_borrow_history_table', 1),
(7, '2020_03_23_141936_create_permission_tables', 2),
(8, '2020_03_25_055725_add_qty_on_books_table', 3),
(9, '2020_04_14_152429_add_returned_at_and_receiver_user_id_on_borrow_history_table', 4),
(10, '2022_01_06_124648_create_company_table', 4),
(11, '2022_01_06_125133_create_employe_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 8),
(1, 'App\\User', 13),
(2, 'App\\User', 7),
(2, 'App\\User', 9),
(2, 'App\\User', 10),
(2, 'App\\User', 11);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('amirinsyaifudin6@gmail.com', '$2y$10$5UtvGgp/3TcxV0Gs2n48WeYE9a9qGQ9FACsXUDkbgF7H2.bULPoGW', '2020-03-23 17:55:21'),
('andi@gmail.com', '$2y$10$0y8eThMqh0SvEh.xIoBX1eK/UQFXwKd3UoRKxxMctgTZFB3Y.9OmW', '2020-03-23 18:24:02');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2020-03-24 00:15:13', '2020-03-24 00:15:13'),
(2, 'user', 'web', '2020-03-24 00:15:13', '2020-03-24 00:15:13');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Amir Sy', 'amirinsyaifudin6@gmail.com', NULL, '$2y$10$ClK5JBLV55Tk59N8x/o1OOgrv5IIM3WT/43iBqYe9OqGNKzhz7Y8W', NULL, '2020-03-23 16:20:32', '2020-03-23 16:20:32'),
(2, 'Andi Putra', 'andi@gmail.com', '2020-03-23 18:42:02', '$2y$10$xOcERet6M10CH.DxVp4a/.Ao8Q6I.llyhqTQvuKEh99wvdRgc5VH6', NULL, '2020-03-23 17:57:25', '2020-03-23 18:42:02'),
(3, 'raka', 'rakainuy@gmail.com', NULL, '$2y$10$Gm/PbCeULCgY4lmHgEj/uurCh7kyai6Qj9UWGIjceD7yWAeG7mlpm', NULL, '2020-03-23 18:29:02', '2020-03-23 18:29:02'),
(4, 'Dodi Hardoyo', 'dodi@perpus.test', '2020-03-23 18:39:29', '$2y$10$huh9N00xpZ9EKsIgPCEm0OONchny47cG/0nJ6UtyAvIf9try8whvq', NULL, '2020-03-23 18:31:22', '2020-03-23 18:39:29'),
(5, 'ahmad', 'ahmad@gmail.com', '2020-03-23 23:42:08', '$2y$10$o0QI/gpFYVPcBuRy/yWoIuceAVXgZd1gBJR1y3YsdVWZkCYKYrxge', NULL, '2020-03-23 23:40:50', '2020-03-23 23:42:08'),
(6, 'dina', 'dina@perpus.test', '2020-03-24 00:35:08', '$2y$10$H1xF5P7TaO/UE9ghDdN8O.jrt6qOQ7scziIW4Zvqt7pum5LBhvXX6', NULL, '2020-03-24 00:34:08', '2020-03-24 00:35:08'),
(7, 'ajik', 'ajik@perpus.test', '2020-03-24 00:46:52', '$2y$10$7blFOmo8vu08VGepkYuceeIO.NBI/FxR9iECV3BrCZmPz6twuy.u.', NULL, '2020-03-24 00:46:35', '2020-03-24 00:46:52'),
(8, 'Admin Perpus', 'admin@perpus.test', '2020-03-24 08:05:30', '$2y$10$8NauhqlTOajbfh9sMdEo8eADG4SoJFQy7uXuZT5izGeJ8gh2D1ZhW', NULL, '2020-03-24 07:58:01', '2020-03-24 08:05:30'),
(9, 'andi jaa', 'andi@perpus.test', '2020-03-29 17:15:21', '$2y$10$CZCGwa3n/6A54BLq6veOGudPjxGFPid.Iwm3qhS541x6Q4anPfNBm', NULL, '2020-03-29 17:04:46', '2020-03-29 17:15:21'),
(10, 'fatimah zahra', 'fatimahzahra@gmail.com', '2020-03-30 16:45:45', '$2y$10$rjn6ljJ9xXCIBbYTyFGyHOhyFbw/dYEXxWvQpkt1tZkhKnOHC8WfG', NULL, '2020-03-30 16:44:55', '2020-03-30 16:45:45'),
(13, 'Admin', 'admin@transisi.id', '2022-01-06 22:35:12', '$2y$10$lVESbQXDEZppI7gV/KdXfuZTy72nWm6twReGL60PF0RwnFMoKB.I6', NULL, '2022-01-06 22:35:12', '2022-01-06 22:35:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_author_id_foreign` (`author_id`);

--
-- Indexes for table `borrow_history`
--
ALTER TABLE `borrow_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `borrow_history_user_id_foreign` (`user_id`),
  ADD KEY `borrow_history_book_id_foreign` (`book_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employe`
--
ALTER TABLE `employe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employe_company_id_foreign` (`company_id`);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `borrow_history`
--
ALTER TABLE `borrow_history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `employe`
--
ALTER TABLE `employe`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `borrow_history`
--
ALTER TABLE `borrow_history`
  ADD CONSTRAINT `borrow_history_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `borrow_history_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `employe`
--
ALTER TABLE `employe`
  ADD CONSTRAINT `employe_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `company` (`id`) ON UPDATE CASCADE;

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
