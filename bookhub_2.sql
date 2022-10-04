-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2022 at 03:58 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookhub`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `book_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published` date NOT NULL,
  `total_page` int(11) NOT NULL,
  `book_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `created_at`, `updated_at`, `book_name`, `book_file`, `book_cover`, `genre`, `author`, `published`, `total_page`, `book_desc`) VALUES
(1231, '2022-01-06 13:21:03', '2022-02-03 01:51:21', 'Madilog', 'Madilog.pdf', 'Madilog_cover.jpg', 'Political', 'Tan Malaka', '1943-01-01', 234, 'The Madilog by Iljas Hussein, first published in 1943, official first edition 1951, is the magnum opus of Tan Malaka, the Indonesian national hero and is the most influential work in the history of modern Indonesian philosophy.'),
(1234, '2022-01-06 13:21:03', '2022-02-04 02:23:49', 'Dilan', 'Dilan.pdf', 'Dilan_cover.jpg', 'Romance', 'Paid Baiq', '2014-04-01', 123, 'Test Description'),
(123123, '2022-01-20 18:18:39', '2022-02-03 01:53:06', 'Why Nations Fail', 'Why Nations Fail Daron Acemoglu.pdf', 'Why Nations Fail Daron Acemoglu_cover.jpg', 'Political', 'Daron Acemoglu', '2012-03-20', 546, 'Why Nations Fail: The Origins of Power, Prosperity, and Poverty, first published in 2012, is a book by economists Daron Acemoglu and James Robinson. It summarizes and popularizes previous research by the authors and many other scientists.'),
(123124, '2022-02-02 23:55:41', '2022-02-02 23:55:41', 'Dilan 1991', 'DILAN-2-pidi-baiq.pdf', 'Dilan 1991_cover.JPG', 'Romance', 'Pidi Baiq', '2015-01-01', 345, 'An adult Milea writes her high school memories in the house she shares with her husband. From there we can interpret, Dilan was Milea\'s boyfriend in high school, but later Dilan did not become her husband.'),
(123125, '2022-02-03 01:54:28', '2022-02-03 01:54:28', 'A JOURNEY TO THE CENTER OF THE EARTH', 'A Journey to the Centre of the Earth.pdf', 'A Journey to the Center of the Earth_cover.JPG', 'Action & Adventure', 'Jules Verne', '1871-01-01', 274, 'First published in England by Griffith and Farran in 1871, this edition is not a translation at all but a complete rewrite of the novel, with portions added and omitted, and names changed'),
(123126, '2022-02-03 01:55:25', '2022-02-03 01:55:25', 'ALEXANDER THE GREAT', 'Alexander the Great.pdf', 'Alexander The Great_cover.JPG', 'Biography', 'Jacob Abbott', '1849-01-01', 167, 'Sadors from the Persian court arrived in Macedon when Philip was away. These ambassadors saw Alexander, of course, and had opportunities to converse with him.'),
(123127, '2022-02-03 01:56:16', '2022-02-03 01:56:16', 'Beethoven', 'Beethoven.pdf', 'Beethoven_cover.JPG', 'Biography', 'Thomas Tapper', '1917-01-01', 29, 'While Ludwig was in school he played at a concert for the first time. He was then eight years old. Two years later he had composed quite a number of pieces.'),
(123128, '2022-02-03 01:56:57', '2022-02-03 01:56:57', 'Cleopatra', 'Cleopatra.pdf', 'Cleopatra_cover.JPG', 'Biography', 'H. Rider Haggard', '1889-01-01', 247, 'Set in the Ptolemaic era the story revolves around the survival of a dynastic bloodline protected by the Priesthood of Isis.'),
(123129, '2022-02-03 01:58:08', '2022-02-03 01:58:08', 'Crime and Punishment', 'Crime and Punishment.pdf', 'Crime & Punishment_cover.JPG', 'Action & Adventure', 'Fyodor Dostoyevsky', '1866-01-01', 491, 'From the Russian master of psychological characterizations, this novel portrays the carefully planned murder of a miserly.'),
(123130, '2022-02-03 01:58:56', '2022-02-03 01:58:56', 'Gulliver’s Travels', 'Gulliver\'s Travels.pdf', 'Gulliver\'s Travels_cover.JPG', 'Action & Adventure', 'Jonathan Swift', '1726-01-01', 254, 'A satire on human nature and a parody of the \"travelers\' tales\" literary genre, this is widely considered Swift\'s greatest work as well as one of the indisputable classics of English literature.'),
(123131, '2022-02-03 01:59:45', '2022-02-03 01:59:45', 'Joan of Arc', 'Joan of Arc.pdf', 'Joan of Arc_cover.JPG', 'Biography', 'Lord Gower Ronald Sutherland', '1893-01-01', 226, 'She world the impossible these voices and visions will ever be connected with Joan of Arc, and with her deathless fame and glory.'),
(123132, '2022-02-03 02:01:31', '2022-02-03 02:01:31', 'The Adventure of the Dying Detective', 'The Adventure of the Dying Detective.pdf', 'The Adventure of Sherlock Holmes_cover.JPG', 'Action & Adventure', 'Arthur Conan Doyle', '1917-01-01', 26, 'A delight for a public which enjoys incident, mystery, and above all that matching of the wits of a clever man against the dumb resistance of the secrecy of inanimate things.'),
(123133, '2022-02-03 02:02:08', '2022-02-03 02:02:08', 'The Autobiography of Ben Franklin', 'The Autobiography of Ben Franklin.pdf', 'The Autobiography of Ben Franklin.JPG', 'Biography', 'Benjamin Franklin', '1909-01-01', 192, 'It’s the traditional name for the unfinished record of his own life written by Benjamin Franklin.'),
(123134, '2022-02-03 02:03:07', '2022-02-03 02:03:07', 'The Hound of the Baskervilles', 'The Hound of the Baskervilles.pdf', 'The Hound of the Baskervilles_cover.JPG', 'Mystery & Thriller', 'Arthur Conan Doyle', '1902-01-01', 149, 'This may be the most popular of all of the Sherlock Holmes stories. Inspired by regional mythology of the British Isles concerning hell-hounds.'),
(123135, '2022-02-03 02:03:46', '2022-02-03 02:03:46', 'The Invisible Man', 'The Invisible Man.pdf', 'The Invisible Man_cover.JPG', 'Mystery & Thriller', 'H. G. Wells', '1897-01-01', 145, 'The Invisible Man of the title is \'\'Griffin\'\', a scientist who theorizes that if a person\'s refractive index is changed to exactly that of air and his body does not absorb or reflect light, then he will not be visible.'),
(123136, '2022-02-03 02:04:35', '2022-02-03 02:04:35', 'The Mysterious Island', 'The Mysterious Island.pdf', 'The Mysterious Island_cover.JPG', 'Mystery & Thriller', 'Jules Verne', '1874-01-01', 492, 'The book tells the adventures of five American prisoners of war on an uncharted island in the South Pacific.'),
(123137, '2022-02-03 02:05:31', '2022-02-03 02:05:31', 'The Phantom of the Opera', 'The Phantom of the Opera.pdf', 'The Phantom of the Opera.JPG', 'Action & Adventure', 'Gaston Leroux', '1909-01-01', 254, 'The story of a man named Erik, an eccentric, physically deformed genius who terrorizes the Opera Garnier in Paris.'),
(123138, '2022-02-03 02:06:15', '2022-02-03 02:06:15', 'The Story of My Life', 'The Story of My Life.pdf', 'The Story of My Life_cover.JPG', 'Biography', 'Helen Keller', '1902-01-01', 405, 'Edited by John Albert Macy. This is the autobiography written by the amazing deafblind woman Helen Keller at the early age of 22.'),
(123139, '2022-02-03 02:07:20', '2022-02-03 02:07:20', 'The Time Machine', 'The Time Machine_cover.JPG', 'The Time Machine_cover.JPG', 'Action & Adventure', 'H.G Wells', '1895-01-01', 78, 'The Time Machine is a science fiction novel by H. G. Wells, published in 1895.');

-- --------------------------------------------------------

--
-- Table structure for table `credit_card`
--

CREATE TABLE `credit_card` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `book_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `user_id`, `book_id`, `created_at`, `updated_at`) VALUES
(1, 3, 123132, '2022-02-03 09:18:03', '2022-02-03 09:18:03'),
(2, 8, 123137, '2022-02-03 20:03:16', '2022-02-03 20:03:16'),
(5, 11, 123125, '2022-02-04 01:58:53', '2022-02-04 01:58:53'),
(6, 11, 1234, '2022-02-04 02:00:01', '2022-02-04 02:00:01'),
(7, 11, 123126, '2022-02-04 02:00:22', '2022-02-04 02:00:22'),
(8, 12, 123124, '2022-02-04 02:18:40', '2022-02-04 02:18:40'),
(9, 12, 123125, '2022-02-04 02:19:01', '2022-02-04 02:19:01');

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2021_12_26_131512_create_book_table', 1),
(5, '2021_12_26_140452_create_admin_table', 1),
(6, '2021_12_26_140753_create_credit_card_table', 1),
(7, '2022_1_1_000000_create_users_table', 1),
(8, '2022_2_2_132720_create_history_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('shafaraananta@gmail.com', '$2y$10$HRwUSSDytN8ADQSCxkq.B.C9ZsVIwn2yqancicfeZOmHVaFL418J6', '2022-02-04 07:49:14');

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
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `sub_days` int(11) DEFAULT NULL,
  `credit_card_ID` bigint(20) UNSIGNED DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `is_admin`, `sub_days`, `credit_card_ID`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'aldika2', 'shafaraananta@gmail.com', NULL, 0, NULL, NULL, '$2y$10$BJdKm9PQvaya/hxPMvueMe/LF.gnvB0.68cEO/2OVBk9EcV7lFg6K', NULL, '2022-01-19 11:00:55', '2022-01-19 11:00:55'),
(6, 'testuser', 'aldikaprya@gmail.com', '2022-02-03 09:20:42', 1, NULL, NULL, '$2y$10$SSznyWBCHE8kR3LmBrhtv.BEhKf.uDQ/Z2n0fAd00p5W91vyXkgyq', NULL, '2022-01-19 12:35:55', '2022-02-03 09:20:42'),
(8, 'Aldika Ananta', 'aldikaanantabagus@gmail.com', '2022-02-03 20:02:56', 0, NULL, NULL, '$2y$10$dU2G4YqG2CzODF37i/f.TugB1ZTyKx2Zmq/b5oKRoJEpu/JJKYZWq', NULL, '2022-02-03 20:01:53', '2022-02-03 20:02:56'),
(11, 'Aldika Ananta', 'zefri.ananta@yahoo.co.id', '2022-02-04 01:54:24', 0, NULL, NULL, '$2y$10$6B/Jg8HEsCYibDye/CXLReJSaebwTVuzPO3.IgcnxMF0xxR9ct/oK', 'DXcUoQLBcZKJU7Kyt4JF4WvzXVSzHNkVwTDIArJ5m3x8KJ5ZmCoZTvHUnOnw', '2022-02-04 01:53:55', '2022-02-04 01:55:30'),
(12, 'Aldika Ananta', 'pbaldika@graduate.utm.my', '2022-02-04 02:17:58', 0, NULL, NULL, '$2y$10$RP4zZoQTHPN9XUyAXLQlxekBltwgB88wF6Jnb7OvDX.anuZ1E8M9q', 'GreH0FUggz6MeJj1zflqhmNSnrs8BCTeU8MmZEia4AbV1b9viNfOwfo0aZE6', '2022-02-04 02:17:31', '2022-02-04 02:20:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `credit_card`
--
ALTER TABLE `credit_card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `history_user_id_foreign` (`user_id`),
  ADD KEY `history_book_id_foreign` (`book_id`);

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
  ADD KEY `users_credit_card_id_foreign` (`credit_card_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123143;

--
-- AUTO_INCREMENT for table `credit_card`
--
ALTER TABLE `credit_card`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `history_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_credit_card_id_foreign` FOREIGN KEY (`credit_card_ID`) REFERENCES `credit_card` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
