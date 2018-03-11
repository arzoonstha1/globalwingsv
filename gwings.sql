-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2018 at 03:28 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gwings`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Swimmingg', '2018-03-10 23:57:04', '2018-03-10 23:57:13'),
(2, 'Ditching', '2018-03-11 00:04:57', '2018-03-11 00:04:57'),
(3, 'Fire Fighting', '2018-03-11 00:05:13', '2018-03-11 00:05:13'),
(4, 'Beauty', '2018-03-11 05:33:01', '2018-03-11 05:33:01');

-- --------------------------------------------------------

--
-- Table structure for table `gallerys`
--

CREATE TABLE `gallerys` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallerys`
--

INSERT INTO `gallerys` (`id`, `name`, `image`, `description`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Swimming', '1520747652-Screenshot (6).png', '<p>Swimming @ Bhaktpur</p>', 1, '2018-03-11 00:09:13', '2018-03-11 00:09:13'),
(2, 'Arjune Chor', '1520748684-Screenshot (9).png', '<p>guu</p>', 2, '2018-03-11 00:26:24', '2018-03-11 00:26:24'),
(3, 'Swimming', '1520767214-pexels-photo-61129.jpeg', '<p>Swimming Training</p>', 1, '2018-03-11 05:35:14', '2018-03-11 05:35:14'),
(4, 'Swimming', '1520767242-pexels-photo-260445.jpeg', '<p>Swimming Training</p>', 1, '2018-03-11 05:35:42', '2018-03-11 05:35:42'),
(5, 'Swimming', '1520767253-pexels-photo-261025.jpeg', '<p>Swimming Training</p>', 1, '2018-03-11 05:35:53', '2018-03-11 05:35:53'),
(6, 'Swimming', '1520767264-pexels-photo-261109.jpeg', '<p>Swimming Training</p>', 1, '2018-03-11 05:36:05', '2018-03-11 05:36:05'),
(7, 'Swimming', '1520767277-pexels-photo-261260.jpeg', '<p>Swimming Training</p>', 1, '2018-03-11 05:36:17', '2018-03-11 05:36:17'),
(8, 'Swimming', '1520767288-pexels-photo-346776.jpeg', '<p>Swimming Training</p>', 1, '2018-03-11 05:36:28', '2018-03-11 05:36:28'),
(9, 'Swimming', '1520767297-pexels-photo-707185.jpeg', '<p>Swimming Training</p>', 1, '2018-03-11 05:36:37', '2018-03-11 05:36:37'),
(10, 'Swimming', '1520767307-pexels-photo-711187.jpeg', '<p>Swimming Training</p>', 1, '2018-03-11 05:36:47', '2018-03-11 05:36:47'),
(11, 'Swimming', '1520767321-pexels-photo-863988.jpeg', '<p>v</p>', 1, '2018-03-11 05:37:01', '2018-03-11 05:37:01'),
(12, 'Swimming', '1520767332-swimming-swimmer-female-race-73760.jpeg', '<p>Swimming Training</p>', 1, '2018-03-11 05:37:12', '2018-03-11 05:37:12'),
(13, 'beauty', '1520767363-pexels-photo-354962.jpeg', '<p>Beauty&nbsp; Training</p>', 4, '2018-03-11 05:37:43', '2018-03-11 05:37:43'),
(14, 'Beauty', '1520767391-pexels-photo-413727.jpeg', '<p>beauuty Training</p>', 4, '2018-03-11 05:38:11', '2018-03-11 05:38:11'),
(15, 'Beauty', '1520767409-pexels-photo-415829.jpeg', '<p>beauuty Training</p>', 4, '2018-03-11 05:38:29', '2018-03-11 05:38:29'),
(16, 'Beauty', '1520767420-pexels-photo-458766.jpeg', '<p>beauuty Training</p>', 1, '2018-03-11 05:38:40', '2018-03-11 05:38:40'),
(17, 'Beauty', '1520767434-pexels-photo-458766.jpeg', '<p>beauuty Training</p>', 4, '2018-03-11 05:38:54', '2018-03-11 05:38:54'),
(18, 'Beauty', '1520767446-woman-girl-beauty-mask.jpg', '<p>beauuty Training</p>', 4, '2018-03-11 05:39:06', '2018-03-11 05:39:06'),
(19, 'Beauty', '1520767460-pexels-photo-821259.jpeg', '<p>beauuty Training</p>', 4, '2018-03-11 05:39:20', '2018-03-11 05:39:20'),
(20, 'Beauty', '1520767472-pexels-photo-413880.jpeg', '<p>beauuty Training</p>', 4, '2018-03-11 05:39:33', '2018-03-11 05:39:33'),
(21, 'Beauty', '1520767484-pexels-photo-413727.jpeg', '<p>beauuty Training</p>', 4, '2018-03-11 05:39:44', '2018-03-11 05:39:44'),
(22, 'Fire Fighting', '1520767514-fireworks-light-japan-festival-66277.jpeg', '<p>fireFighting Training</p>', 3, '2018-03-11 05:40:14', '2018-03-11 05:40:14'),
(23, 'Fire Fighting', '1520767526-fireworks-sky-party-new-year-s-eve-128872.jpeg', '<p>fireFighting Training</p>', 3, '2018-03-11 05:40:26', '2018-03-11 05:40:26'),
(24, 'Fire Fighting', '1520767540-fireworks-sparklers-bank-celebration-69071.jpeg', '<p>fireFighting Training</p>', 3, '2018-03-11 05:40:40', '2018-03-11 05:40:40'),
(25, 'Fire Fighting', '1520767553-pexels-photo-266462.jpeg', '<p>fireFighting Training</p>', 3, '2018-03-11 05:40:54', '2018-03-11 05:40:54'),
(26, 'Fire Fighting', '1520767566-pexels-photo-282919.jpeg', '<p>fireFighting Training</p>', 3, '2018-03-11 05:41:06', '2018-03-11 05:41:06'),
(27, 'Fire Fighting', '1520767578-pexels-photo-534031.jpeg', '<p>fireFighting Training</p>', 3, '2018-03-11 05:41:19', '2018-03-11 05:41:19'),
(28, 'Ditching', '1520767606-mexico-lake-man-wakeboard-46537.jpeg', '<p>ditiching Training</p>', 2, '2018-03-11 05:41:46', '2018-03-11 05:41:46'),
(29, 'Ditching', '1520767618-pexels-photo-207710.jpeg', '<p>ditiching Training</p>', 2, '2018-03-11 05:41:58', '2018-03-11 05:41:58'),
(30, 'Ditching', '1520767633-pexels-photo-248547.jpeg', '<p>ditiching Training</p>', 2, '2018-03-11 05:42:13', '2018-03-11 05:42:13'),
(31, 'Ditching', '1520767646-pexels-photo-386024.jpeg', '<p>ditiching Training</p>', 2, '2018-03-11 05:42:26', '2018-03-11 05:42:26'),
(32, 'Ditching', '1520767659-pexels-photo-532805.jpeg', '<p>ditiching Training</p>', 2, '2018-03-11 05:42:40', '2018-03-11 05:42:40'),
(33, 'Ditching', '1520767672-spot-runs-start-la.jpg', '<p>ditiching Training</p>', 2, '2018-03-11 05:42:52', '2018-03-11 05:42:52');

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
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2018_03_05_053837_create_pages', 1),
(12, '2018_03_10_071814_create_posts_table', 1),
(13, '2018_03_11_045426_create_gallerys', 2),
(14, '2018_03_11_045908_create_categories', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'home', '2018-03-10 06:56:24', '2018-03-10 06:56:24'),
(2, 'About Us', 'about', '2018-03-10 06:56:38', '2018-03-10 06:56:38'),
(3, 'Testimonials', 'testimonial', '2018-03-10 06:56:58', '2018-03-10 06:56:58'),
(4, 'Gallery', 'gallery', '2018-03-10 06:57:09', '2018-03-10 06:57:09'),
(5, 'Contact Us', 'contact', '2018-03-10 06:57:28', '2018-03-10 06:57:28'),
(6, 'Verification', 'verification', '2018-03-10 22:54:47', '2018-03-10 22:54:47');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_id` int(10) UNSIGNED NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `name`, `slug`, `page_id`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'About Global Wings', 'our info', 2, '<p>Global Wings Pvt. Ltd. is registered with and licensed by Government of Nepal, Company registrar&rsquo;s Office as a private limited company. It is one of the finest Flight Attendant (Air-Hosts/ Air-Hostess) training institute of Nepal accredited by IAO, USA. It aggregates well-experienced faculty members. Global Wings focuses on the training and recruitment of the students. Training includes both theoretical as well as practical knowledge along with in flight experience. Office is located at 3rd floor above Aagan Sweets, Putalisadak, Kathmandu, Nepal. Effectiveness of Air-Hostess Training at Global Wings.</p><ol><li>Personality development.</li><li>Customer service operation.</li><li>Grooming lesson (Makeup).</li><li>Swimming and Ditching.</li><li>Handling extra ordinary situations.</li><li>Ability to handle risky goods.</li><li>Importance of tourism from Nepal Tourism Board (NTB) museum visit.</li><li>Ability to handle security issues.</li><li>Improvement in communication skills.</li></ol><p><strong>Services</strong></p><p>Global Wings provides a pleasant environment for the students with full-fledge of practical training which is very essential for an air-hostess carrier. It understands every student&rsquo;s interest, their determination, requirement and assists them the right gateway.</p>', '1520686012-Screenshot (1).png', 'active', '2018-03-10 07:01:53', '2018-03-10 07:01:53'),
(2, 'Verify Students', 'verify', 6, '<p>asgafgafhahcfa</p>', '1520743223-Screenshot (11).png', 'active', '2018-03-10 22:55:24', '2018-03-10 22:55:24'),
(3, 'Sunil Subedi', 'sunil', 3, '<p>Global Wings Is good For Me. It make Me Airhostes in Yeti Airlines.</p>', '1520769407-pexels-photo-207710.jpeg', 'active', '2018-03-11 06:11:47', '2018-03-11 06:11:47'),
(4, 'Bikash Adhikari', 'bikash', 3, '<p>Global Wings Pvt. Ltd. is registered with and licensed by Government of Nepal, Company registrar&rsquo;s Office as a private limited company. It is one of the finest Flight Attendant (Air-Hosts/ Air-Hostess) training institute of Nepal accredited by IAO, USA. It aggregates well-experienced faculty members.&nbsp;Global Wings is focus on the training and recruitment of the students.</p>', '1520771869-25994990_2011570232437134_8631337103915819075_n.jpg', 'active', '2018-03-11 06:52:49', '2018-03-11 06:52:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', '$2y$10$36AyBJRQFfrkPikQ9cFyuuSzxIgEdrVxq3YJojcj7.cHwVadqsmx6', 'LaG4EVePEBESpCQ7nCYFczRqxNuEdqW2xnRCePLds4DAcL2TXcuZdwFHhAOX', '2018-03-11 01:46:21', '2018-03-11 01:46:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallerys`
--
ALTER TABLE `gallerys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gallerys`
--
ALTER TABLE `gallerys`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
