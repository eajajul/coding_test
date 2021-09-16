-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2021 at 07:57 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `phone`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Eajajul4', '01965115621', 'eaa4@gmail.com', '$2y$10$S6MpRO83cxX/TXj/oFFKVOpAKFIrF5Iz6VTiUVHPzdiHMGQTBUOtS', '2021-09-14 13:09:29', '2021-09-14 13:09:29'),
(2, 'Eajajul5', '01965115621', 'eaa5@gmail.com', '$2y$10$MfuQL.zioPOBCFW6rr3Mt.Fq8uE6DEh1djst3WxMU9ZO8y4YSjWPm', '2021-09-14 13:10:20', '2021-09-14 13:10:20'),
(3, 'Eajajul6', '01965115621', 'eaa5@gmail.co6', '$2y$10$kBiak5y4XS75b.dc7c4PcuWK6phzvTHZmn8mSxPy.PDcI4ezGLJbS', '2021-09-14 13:21:43', '2021-09-14 13:21:43'),
(4, 'Eajajul7', '01965115621', 'eaa7@gmail.com', '$2y$10$XdBtJrL0wUF/gzh58hGvmOTdL9UyrLHK8XZ1cESRekc1EcN5JVPtm', '2021-09-14 13:26:48', '2021-09-14 13:26:48'),
(5, 'Shaeleigh Anthony', '11399118198', 'weryv@mailinator.com', '$2y$10$bih9uKwza9D7W3ZeqvYZ9.38rBWob4e3v30Rqq3rA3PbaeDgtNl8C', '2021-09-15 12:53:05', '2021-09-15 12:53:05'),
(6, 'Briar Lester', '769465227', 'botiqu@mailinator.com', '$2y$10$p1jYOylSpOR1WuhTpBhKle.LRmxq8c.WKmpgbr5dlc0OFZpocs1vy', '2021-09-15 12:53:53', '2021-09-15 12:53:53'),
(7, 'Stacy Dominguez', '956684594', 'docat@mailinator.com', '$2y$10$pveKZBzcWS66pJow9Ay.8ebmQpy6CatifZNA1XLSZ3uK1xsymRCqO', '2021-09-15 12:54:23', '2021-09-15 12:54:23'),
(8, 'Tarik Ellison', '12852359637', 'lawodawezu@mailinator.com', '$2y$10$B5FhZXGW2WueYNbn3m4jm.zAM9ssDFZ78S4hwaVxUn32HbriTPJo.', '2021-09-15 12:57:48', '2021-09-15 12:57:48'),
(9, 'Logan Ball', '6563422584', 'kyvy@mailinator.com', '$2y$10$iVpvNUq2uP7Y0RYAZUgtzuDUFBs3oZ4fnC8VTO7UuJ/KBRwtQdGPG', '2021-09-15 12:58:21', '2021-09-15 12:58:21'),
(10, 'Warren Franks', '12743179764', 'syruxyha@mailinator.com', '$2y$10$61HW6BtWcwRQvyjUnYJ3Fe819gOuA/ftXgJhQsqsgD23KB9nTkVoi', '2021-09-15 12:58:49', '2021-09-15 12:58:49'),
(11, 'Ivory Sexton', '7723027889', 'gybobejax@mailinator.com', '$2y$10$lHMs3Ces1hGnuazA2jdeneO74v5GZueTr6ui436Nu..C3d/RJMV1C', '2021-09-15 12:59:09', '2021-09-15 12:59:09'),
(12, 'ww', '122', 'ww', '$2y$10$bndAE4jqsN7VCZSAQBMyL.vKyKN.WIxReRjb9IrcZyo/mhC3aJ2H6', '2021-09-15 15:27:10', '2021-09-15 15:27:10'),
(13, 'sdfs', '77899', 'sf', '$2y$10$Z7lMUXV6c80UXC/49g/fOe1AbEwUtYtj4VQTBxE28SJLMOKNWKIGC', '2021-09-15 15:27:11', '2021-09-15 15:27:11'),
(14, 'wwfff', '666122', 'wwff', '$2y$10$sSiretp5Dedy91/dbh1ZweCbd8d4OIDb0byJ8lpAAHh3agQsLW2Yy', '2021-09-15 15:29:41', '2021-09-15 15:29:41'),
(15, 'sdfs dsdsd', '5577899', 'sf vv', '$2y$10$odkIy5ly4q6.2kLyiYEBje2V8nxTYkrZCiJsaInnkdA3KKhT.c5B.', '2021-09-15 15:29:41', '2021-09-15 15:29:41');

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
(10, '2014_10_12_000000_create_users_table', 1),
(11, '2014_10_12_100000_create_password_resets_table', 1),
(12, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(13, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(14, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(15, '2016_06_01_000004_create_oauth_clients_table', 1),
(16, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(17, '2019_08_19_000000_create_failed_jobs_table', 1),
(18, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(19, '2021_09_14_190003_create_customers_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('1607cda081d2d309674f86fdf96e85cbfaebae965ef5a4edf5a047628d68635766ac39d222fa62a7', 3, 3, 'passport customer login', '[]', 0, '2021-09-14 13:24:43', '2021-09-14 13:24:43', '2022-09-14 19:24:43'),
('170037188d7f475df4c6c8e1b34f0f3aeee438ac522934a2b1759289f0d250bf38eb1e77f8e52f8e', 2, 3, 'passport customer login', '[]', 0, '2021-09-14 13:10:20', '2021-09-14 13:10:20', '2022-09-14 19:10:20'),
('a12027d139b4a4e47960ce32b4dfbf80348226ac0dab3ccd79333fc19c1cbc4393958511aeffc780', 4, 3, 'passport customer login', '[]', 0, '2021-09-14 13:26:48', '2021-09-14 13:26:48', '2022-09-14 19:26:48'),
('a15c5a64b64d74cb41e03c497a27fbee0212037f2d063a2070e833691c003b56d699683d18c81770', 3, 3, 'passport customer login', '[]', 0, '2021-09-14 13:21:44', '2021-09-14 13:21:44', '2022-09-14 19:21:44'),
('c98b121e10de2118bc1403a41efe6cf8be4f282d87e7fe868f1dacc5ce7175e5b73336b1848a0284', 4, 3, 'passport customer login', '[]', 0, '2021-09-14 13:29:53', '2021-09-14 13:29:53', '2022-09-14 19:29:53');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'qzp0fBKk88FxWYgvhJaCjNpRVKczeU6wE1gIf4tC', NULL, 'http://localhost', 1, 0, 0, '2021-09-14 13:09:47', '2021-09-14 13:09:47'),
(2, NULL, 'Laravel Password Grant Client', 'jbaPgyxELbLPTmjg6nASV1K0chqBTKe4ASVuqNNj', 'users', 'http://localhost', 0, 1, 0, '2021-09-14 13:09:48', '2021-09-14 13:09:48'),
(3, NULL, 'Laravel Personal Access Client', 'JolJ2XEhcqrqCm6ITcZmMqa2oIn5TY360sNTWtel', NULL, 'http://localhost', 1, 0, 0, '2021-09-14 13:10:05', '2021-09-14 13:10:05'),
(4, NULL, 'Laravel Password Grant Client', 'h5s2BIdohgMUZd6M03wn3ysrih3biAp3W0pHb7n6', 'users', 'http://localhost', 0, 1, 0, '2021-09-14 13:10:05', '2021-09-14 13:10:05');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-09-14 13:09:48', '2021-09-14 13:09:48'),
(2, 3, '2021-09-14 13:10:05', '2021-09-14 13:10:05');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `email_verified_at`, `password`, `user_type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Eajajul', '01965115621', 'ratan@gmail.com', NULL, '$2y$10$cwIskf4c.Aa1DI1i9B7tBOosIOkH7Wjgnz094RcF99ZHbN.XKq7MO', '1', NULL, '2021-09-15 06:17:34', '2021-09-15 06:17:34'),
(2, 'top', '019674601235', 'ha@gmail.com', NULL, '$2y$10$pGn1mP0hMhLL1CGk2dLI5OLrSBabo3KTWA.47IazhJH3wIRjxseDq', '1', NULL, '2021-09-15 06:19:14', '2021-09-15 06:19:14'),
(3, 'Amelia Garner', '565082231', 'cunubu@mailinator.com', NULL, '$2y$10$VAdSEdZ2NnTgbpZ3rWBkauUuvl4mvYGxiIorU65z0f4y.hAA4U.nG', '2', NULL, '2021-09-15 12:26:38', '2021-09-15 12:26:38'),
(4, 'Ignatius Rios', '9693475618', 'xewuvizam@mailinator.com', NULL, '$2y$10$73V04yFGj/Py6iekfDqZtOmCJspkML7yeHZfZU4yO7cwzL6HUwkE6', '2', NULL, '2021-09-15 12:27:46', '2021-09-15 12:27:46'),
(5, 'Callie Walker', '1935883752', 'vizaryhur@mailinator.com', NULL, '$2y$10$DxwcEQ5hretmjZ00njK5n.5sAuw4yzA4Cald0nqLjtD2dQIuSSbpG', '2', NULL, '2021-09-15 12:50:51', '2021-09-15 12:50:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

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
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

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
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
