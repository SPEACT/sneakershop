-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 27, 2023 lúc 02:50 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `myproject`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cate_name` varchar(255) NOT NULL,
  `cate_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `cate_name`, `cate_image`, `created_at`, `updated_at`) VALUES
(8, 'Giày Nike', 'http://127.0.0.1:8000/uploads/1687802497-image.jpg', '2023-06-26 11:01:37', '2023-06-26 11:01:37'),
(9, 'Giày Adidas', 'http://127.0.0.1:8000/uploads/1687802510-image.jpg', '2023-06-26 11:01:50', '2023-06-26 11:01:50'),
(10, 'Giày Puma', 'http://127.0.0.1:8000/uploads/1687802520-image.jpg', '2023-06-26 11:02:00', '2023-06-26 11:02:00'),
(11, 'Giày MLB', 'http://127.0.0.1:8000/uploads/1687802538-image.png', '2023-06-26 11:02:18', '2023-06-26 11:02:18'),
(12, 'Giày NewBalance', 'http://127.0.0.1:8000/uploads/1687803160-image.png', '2023-06-26 11:12:40', '2023-06-26 11:13:36'),
(13, 'Giày Biti\'s', 'http://127.0.0.1:8000/uploads/1688484547-image.png', '2023-07-04 08:29:07', '2023-07-04 08:29:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `groups`
--

INSERT INTO `groups` (`id`, `name`) VALUES
(1, 'Quản lý'),
(2, 'Khách Hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(6, '2023_06_21_174847_add_full_name_column_to_users_table', 2),
(7, '2023_06_24_032707_edit_users_table', 3),
(8, '2014_10_12_100000_create_password_reset_tokens_table', 4),
(9, '2019_08_19_000000_create_failed_jobs_table', 4),
(10, '2019_12_14_000001_create_personal_access_tokens_table', 4),
(11, '2023_06_24_050016_create_categories_table', 5),
(12, '2023_06_24_060754_create_products_table', 6),
(13, '2023_06_24_065017_edit_users_table', 7),
(18, '2014_10_12_100000_create_password_resets_table', 8),
(19, '2023_06_24_143719_add_columns_to_users_table', 8),
(20, '2023_06_24_154900_created_orders_table', 9),
(21, '2023_06_24_155859_create_order_detail_table', 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_name` varchar(255) NOT NULL,
  `order_email` varchar(255) NOT NULL,
  `order_phone` varchar(255) NOT NULL,
  `order_address` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0. Thanh toán khi \r\nnhận hàng 1. Chuyển khoản 2. Thanh toán qua Momo',
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `order_name`, `order_email`, `order_phone`, `order_address`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(66, 'Nguyễn Tuấn Anh', 'anhnt683@gmail.com', '0988346803', 'Ninh Bình', 1, 4, '2023-06-27 07:46:11', '2023-06-27 07:46:11'),
(67, 'admin', 'anhnt683@gmail.com', '0988346803', 'ha noi', 1, 4, '2023-06-27 23:03:23', '2023-06-27 23:03:23'),
(68, 'admin', 'anhnt683@gmail.com', '0988346803', 'ha noi', 1, 4, '2023-06-27 23:04:41', '2023-06-27 23:04:41'),
(69, 'admin', 'anhnt683@gmail.com', '0988346803', 'ha noi', 0, 4, '2023-06-27 23:08:09', '2023-06-27 23:08:09'),
(70, 'admin', 'anhnt683@gmail.com', '0988346803', 'ha noi', 1, 4, '2023-06-28 04:05:26', '2023-06-28 04:05:26'),
(71, 'admin', 'anhnt683@gmail.com', '0988346803', 'ha noi', 1, 4, '2023-06-28 04:06:09', '2023-06-28 04:06:09'),
(72, 'admin', 'anhnt683@gmail.com', '0988346803', 'ha noi', 1, 4, '2023-06-28 04:06:40', '2023-06-28 04:06:40'),
(73, 'admin', 'anhnt683@gmail.com', '0988346803', 'ha noi', 1, 4, '2023-06-28 04:07:01', '2023-06-28 04:07:01'),
(74, 'admin', 'anhnt683@gmail.com', '0988346803', 'ha noi', 1, 4, '2023-06-28 04:07:24', '2023-06-28 04:07:24'),
(75, 'admin', 'anhnt683@gmail.com', '0988346803', 'Ninh Bình', 1, 4, '2023-06-28 04:08:08', '2023-06-28 04:08:08'),
(76, 'admin', 'anhnt683@gmail.com', '0988346803', 'ha noi', 2, 4, '2023-06-28 04:09:19', '2023-06-28 04:09:19'),
(77, 'admin', 'anhnt683@gmail.com', '0988346803', 'ha noi', 2, 4, '2023-06-28 04:11:26', '2023-06-28 04:11:26'),
(78, 'Nguyễn Tuấn Anh', 'anhntph27773123@gmail.com', '0988346803', 'Ninh Bình', 2, 19, '2023-06-28 04:15:07', '2023-06-28 04:15:07'),
(79, 'Anthony', 'anhnt683@gmail.com', '0988346803', 'ha noi', 0, 4, '2023-06-28 10:25:14', '2023-06-28 10:25:14'),
(80, 'admin', 'anhnt683@gmail.com', '0988346803', 'ha noi', 1, 4, '2023-06-29 02:27:04', '2023-06-29 02:27:04'),
(81, 'admin', 'anhnt683@gmail.com', '0988346803', 'ha noi', 1, 4, '2023-06-29 02:33:37', '2023-06-29 02:33:37'),
(82, 'Nguyễn Tuấn Anh', 'anhntph27773@gmail.com', '0988346803', 'Ninh Bình', 1, 23, '2023-06-29 03:20:34', '2023-06-29 03:20:34'),
(83, 'admin', 'anhntph27773@gmail.com', '0988346803', 'ha noi', 0, 4, '2023-06-29 06:37:07', '2023-06-29 06:37:07'),
(84, 'Nguyễn Tuấn Anh', 'lmthao.dev@gmail.com', '0988346803', 'Ninh Bình', 0, 23, '2023-06-30 18:23:38', '2023-06-30 18:23:38'),
(85, 'Nguyễn Tuấn Anh', 'anhntph27773@gmail.com', '0988346803', 'Ninh Bình', 1, 23, '2023-07-01 11:50:11', '2023-07-01 11:50:11'),
(86, 'Nguyễn Tuấn Anh', 'anhntph27773@gmail.com', '0988346803', 'Ninh Bình', 1, 23, '2023-07-04 01:18:28', '2023-07-04 01:18:28'),
(87, 'Nguyễn Tuấn Anh', 'anhntph27773@gmail.com', '0988346803', 'Ninh Bình', 1, 23, '2023-07-04 01:23:48', '2023-07-04 01:23:48'),
(88, 'Nguyễn Tuấn Anh', 'anhntph27773@gmail.com', '0988346803', 'Ninh Bình', 1, 23, '2023-07-04 01:24:03', '2023-07-04 01:24:03'),
(89, 'Nguyễn Tuấn Anh', 'anhntph27773@gmail.com', '0988346803', 'Ninh Bình', 1, 23, '2023-07-04 01:24:26', '2023-07-04 01:24:26'),
(90, 'Nguyễn Tuấn Anh', 'anhntph27773@gmail.com', '0988346803', 'Ninh Bình', 1, 23, '2023-07-04 02:03:28', '2023-07-04 02:03:28'),
(91, 'Nguyễn Tuấn Anh', 'anhntph27773@gmail.com', '0988346803', 'Ninh Bình', 1, 23, '2023-07-10 22:19:47', '2023-07-10 22:19:47'),
(92, 'Nguyễn Tuấn Anh', 'anhntph27773@gmail.com', '0988346803', 'Ninh Bình', 0, 23, '2023-07-10 22:21:22', '2023-07-10 22:21:22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `product_id`, `price`, `quantity`, `created_at`, `updated_at`) VALUES
(52, 66, 7, '8390000', '1', '2023-06-27 07:46:11', '2023-06-27 07:46:11'),
(53, 66, 8, '5670000', '3', '2023-06-27 07:46:11', '2023-06-27 07:46:11'),
(54, 67, 7, '8390000', '1', '2023-06-27 23:03:23', '2023-06-27 23:03:23'),
(55, 67, 8, '1890000', '1', '2023-06-27 23:03:23', '2023-06-27 23:03:23'),
(56, 69, 5, '3090000', '1', '2023-06-27 23:08:09', '2023-06-27 23:08:09'),
(57, 70, 5, '3090000', '1', '2023-06-28 04:05:26', '2023-06-28 04:05:26'),
(58, 75, 7, '8390000', '1', '2023-06-28 04:08:08', '2023-06-28 04:08:08'),
(59, 76, 8, '1890000', '1', '2023-06-28 04:09:19', '2023-06-28 04:09:19'),
(60, 77, 8, '1890000', '1', '2023-06-28 04:11:26', '2023-06-28 04:11:26'),
(61, 78, 10, '11440000', '4', '2023-06-28 04:15:07', '2023-06-28 04:15:07'),
(62, 79, 5, '3090000', '1', '2023-06-28 10:25:14', '2023-06-28 10:25:14'),
(63, 80, 8, '1890000', '1', '2023-06-29 02:27:04', '2023-06-29 02:27:04'),
(64, 81, 7, '8390000', '1', '2023-06-29 02:33:37', '2023-06-29 02:33:37'),
(65, 81, 8, '1890000', '1', '2023-06-29 02:33:37', '2023-06-29 02:33:37'),
(66, 82, 7, '8390000', '1', '2023-06-29 03:20:34', '2023-06-29 03:20:34'),
(67, 82, 8, '1890000', '1', '2023-06-29 03:20:34', '2023-06-29 03:20:34'),
(68, 83, 8, '1890000', '1', '2023-06-29 06:37:07', '2023-06-29 06:37:07'),
(69, 84, 7, '8390000', '1', '2023-06-30 18:23:38', '2023-06-30 18:23:38'),
(70, 84, 8, '1890000', '1', '2023-06-30 18:23:38', '2023-06-30 18:23:38'),
(71, 85, 7, '16780000', '2', '2023-07-01 11:50:11', '2023-07-01 11:50:11'),
(72, 85, 10, '5720000', '2', '2023-07-01 11:50:11', '2023-07-01 11:50:11'),
(73, 86, 7, '16780000', '2', '2023-07-04 01:18:28', '2023-07-04 01:18:28'),
(74, 91, 5, '12360000', '4', '2023-07-10 22:19:47', '2023-07-10 22:19:47'),
(75, 92, 12, '10998000', '2', '2023-07-10 22:21:22', '2023-07-10 22:21:22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_desc` text NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_image`, `product_price`, `product_desc`, `product_quantity`, `cate_id`, `created_at`, `updated_at`) VALUES
(5, 'Giày MLB Chunky Liner New York Yankees', 'http://127.0.0.1:8000/uploads/1688235715-image.webp', 3090000, '<p><a href=\"https://sneakerdaily.vn/san-pham/giay-mlb-chunky-liner-new-york-yankees-grey-3asxca12n-50grl/\"><strong>MLB Chunky Liner New York Yankees &lsquo;Grey&rsquo;</strong></a>&nbsp;hiện đ&atilde; c&oacute; sẵn tại Sneaker Daily Shop với mức gi&aacute; hấp dẫn, đừng bỏ lỡ cơ hội của m&igrave;nh nh&eacute;!</p>\r\n\r\n<p>Cập nhật nhanh nhất lịch ra mắt của c&aacute;c mẫu gi&agrave;y mới nhất v&agrave; tin tức thời trang trong nước v&agrave; tr&ecirc;n thế giới bằng c&aacute;ch theo d&otilde;i&nbsp;<a href=\"https://sneakerdaily.vn/\"><strong>Sneaker Daily</strong></a>&nbsp;tr&ecirc;n&nbsp;<a href=\"https://www.facebook.com/sneakerdailyvn/\" target=\"_blank\">Facebook</a>&nbsp;hoặc&nbsp;<a href=\"https://www.instagram.com/sneakerdaily.vn/\">Instagram</a>.</p>\r\n\r\n<h3><strong>Th&ocirc;ng tin sản phẩm Gi&agrave;y MLB Chunky Liner New York Yankees &lsquo;Grey&rsquo;</strong></h3>\r\n\r\n<p><strong>Thương hiệu:</strong>&nbsp;&nbsp;<a href=\"https://sneakerdaily.vn/danh-muc-san-pham/giay-mlb/\">MLB</a></p>\r\n\r\n<p><strong>Thiết kế:&nbsp;</strong><a href=\"https://sneakerdaily.vn/danh-muc-san-pham/giay-mlb/new-york/\">MLB NewYork</a></p>\r\n\r\n<p><strong>M&atilde; sản phẩm:&nbsp;</strong>3ASXCA12N-50GRL</p>', 10, 11, '2023-06-26 11:03:47', '2023-07-01 11:21:55'),
(7, 'Giày adidas Yeezy Boost 350 V2 ‘Salt’ HQ2060', 'http://127.0.0.1:8000/uploads/1687802734-image.webp', 8390000, '<h3>Th&ocirc;ng tin ph&aacute;t h&agrave;nh adidas Yeezy Boost 350 V2 &lsquo;Salt&rsquo;</h3>\r\n\r\n<p><strong>Thương hiệu:</strong>&nbsp;<a href=\"https://sneakerdaily.vn/danh-muc-san-pham/nike/\">adidas</a></p>\r\n\r\n<p><strong>Thiết kế:</strong>&nbsp;<a href=\"https://sneakerdaily.vn/danh-muc-san-pham/adidas/yeezy/yeezy-350/\">Yeezy 350</a></p>\r\n\r\n<p><strong>M&atilde; sản phẩm: HQ2060</strong></p>\r\n\r\n<p><strong>Xuất xứ:&nbsp;</strong>Đức</p>', 10, 9, '2023-06-26 11:05:34', '2023-06-26 11:05:34'),
(8, 'Giày adidas Stan Smith ‘Colorful Trefoil’ FW2443', 'http://127.0.0.1:8000/uploads/1687802769-image.webp', 1890000, '<h3>Th&ocirc;ng tin ph&aacute;t h&agrave;nh adidas Stan Smith &lsquo;Colorful Trefoil&rsquo;</h3>\r\n\r\n<p><strong>Thời gian ra mắt:&nbsp;</strong>Ng&agrave;y 01 th&aacute;ng 07 năm 2020</p>\r\n\r\n<p><strong>Thương hiệu:&nbsp;</strong>adidas</p>\r\n\r\n<p><strong>Thiết kế:&nbsp;</strong><a href=\"https://sneakerdaily.vn/danh-muc-san-pham/adidas/stan-smith/\">Stan Smith</a></p>\r\n\r\n<p><strong>M&atilde; sản phẩm:&nbsp;</strong>FW2443</p>', 10, 9, '2023-06-26 11:06:09', '2023-06-26 11:06:09'),
(10, 'Giày Nike Air Force 1 Low ’07 LV8 Tartan Plaid', 'http://127.0.0.1:8000/uploads/1688235691-image.webp', 2860000, '<h3><strong>Th&ocirc;ng tin sản phẩm Gi&agrave;y Nike Air Force 1 Low &rsquo;07 LV8 Tartan Plaid &lsquo;White University Red&rsquo;</strong></h3>\r\n\r\n<p><strong>Thương hiệu:</strong>&nbsp;&nbsp;<a href=\"https://sneakerdaily.vn/danh-muc-san-pham/nike/\">Nike</a></p>\r\n\r\n<p><strong>Thiết kế:&nbsp;</strong><a href=\"https://sneakerdaily.vn/danh-muc-san-pham/air-force-1/\">Air Force 1</a></p>\r\n\r\n<p><strong>M&atilde; sản phẩm:</strong>&nbsp;DV0789-100</p>\r\n\r\n<p><strong>Xuất xứ :&nbsp;</strong>Mỹ</p>', 10, 8, '2023-06-26 11:09:29', '2023-07-01 11:21:31'),
(12, 'Giày MLB Chunky Liner Mid Denim', 'http://127.0.0.1:8000/uploads/1688481659-image.png', 5499000, '<h3>Th&ocirc;ng tin ph&aacute;t h&agrave;nh MLB. Chunky Liner Mid Denim Boston Red Sox &lsquo;D.Blue&rsquo;.</h3>\r\n\r\n<p>&nbsp; &nbsp; Gi&agrave;y MLB Chunky Liner Mid Denim kh&ocirc;ng. chỉ mang kiểu d&aacute;ng độc đ&aacute;o, thu h&uacute;t, .đ&ocirc;i gi&agrave;y với</p>\r\n\r\n<p>phong c&aacute;ch chunky c&ograve;n gi&uacute;p người mang c&oacute; được .những sự lựa chọn đa dạng outfit để phối c&ugrave;ng.</p>\r\n\r\n<p>Bạn sẽ nổi bật. giữa đ&aacute;m đ&ocirc;ng. với một đ&ocirc;i gi&agrave;y chunky v&igrave; kiểu d&aacute;ng. của n&oacute; kh&ocirc;ng thể lẫn với b.ất kỳ đ&ocirc;i n&agrave;o kh&aacute;c được.</p>\r\n\r\n<p>Mặc d&ugrave; khi chạm v&agrave;o bạn c&oacute; thể. thấy phần đế n&agrave;y kh&aacute; cứng. Nhưng khi mang sẽ tạo. độ đ&agrave;n hồi mang lại cảm gi&aacute;c. cực kỳ thoải m&aacute;i, nhẹ nh&agrave;ng v&agrave; dễ chịu.</p>\r\n\r\n<p>Gi&agrave;y MLB Chunky Liner Mid. Denim đến từ MLB Korea &ndash; h&atilde;ng thời trang tại H&agrave;n Quốc.</p>\r\n\r\n<p>H&atilde;ng n&agrave;y chuy&ecirc;n thiết kế v&agrave; sản xuất tất cả từ. quần &aacute;o, v&aacute;y cho đến những p.hụ kiện như mũ, t&uacute;i, tất,&hellip;.</p>\r\n\r\n<p>Tất cả đều lấy. cảm hứng từ logo của những. đội b&oacute;ng thuộc MLB.</p>\r\n\r\n<p>Năm 2019, MLB ch&iacute;nh l&agrave; ứng cử vi&ecirc;n s&aacute;ng gi&aacute; nằm. trong top những đ&ocirc;i gi&agrave;y đ&aacute;ng được sở hữu nhất.</p>\r\n\r\n<p>Quy tr&igrave;nh gia c&ocirc;ng một đ&ocirc;i&nbsp; v&ocirc; c&ugrave;ng tỉ mỉ.</p>\r\n\r\n<p>Ch&iacute;nh v&igrave; vậy, chất lượng của. đ&ocirc;i gi&agrave;y v&ocirc; c&ugrave;ng ho&agrave;n. hảo từ đường kim. mũi chỉ đến chất liệu của gi&agrave;y.</p>\r\n\r\n<p>Cập nhật nhanh nhất lịch ra mắt của c&aacute;c mẫu gi&agrave;y mới nhất.&nbsp;<a href=\"https://sneakerdaily.vn/san-pham/giay-mlb-big-ball-chunky-dodgers/\">MLB Dodgers</a>&nbsp;bằng c&aacute;ch theo dỗi .</p>\r\n\r\n<p><a href=\"https://sneakerdaily.vn/\"><strong>Sneaker Daily</strong></a>&nbsp;tr&ecirc;n&nbsp;<a href=\"https://www.facebook.com/sneakerdailyvn/\" target=\"_blank\">Facebook</a>&nbsp;hoặc&nbsp;<a href=\"https://www.instagram.com/sneakerdaily.vn/\" target=\"_blank\">Instagram</a>.</p>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<p><strong>Thiết kế:</strong>&nbsp;<a href=\"https://sneakerdaily.vn/danh-muc-san-pham/giay-mlb/la-dodgers/\">MLB.</a></p>\r\n\r\n<p><strong>Xuất xứ :&nbsp;</strong>H&agrave;n Quốc.</p>', 10, 11, '2023-07-04 07:40:59', '2023-07-04 07:40:59'),
(13, 'Giày Puma RS-X Patent Jr \'White Yellow Alert\'', 'http://127.0.0.1:8000/uploads/1688481740-image.png', 2299000, '<h2>Gi&agrave;y Puma RS-X Patent Jr</h2>\r\n\r\n<p><a href=\"https://sneakerdaily.vn/san-pham/giay-puma-rs-x-patent-jr-white-yellow-alert-372520-02/\"><strong>Gi&agrave;y Puma RS-X Patent Jr &lsquo;White Yellow Alert&rsquo;</strong></a>&nbsp;được sản xuất&nbsp;từ chất liệu được chọn lọc cao cấp, đường chỉ may chắc chắn, độ bền cao, n&acirc;ng niu từng bước ch&acirc;n của bạn. Đế cao su chắc chắn c&oacute; khả năng ma s&aacute;t tốt, chống trơn trượt, c&oacute; thể di chuyển tr&ecirc;n nhiều địa h&igrave;nh.&nbsp;<em>Gi&agrave;y Puma&nbsp;</em>dễ d&agrave;ng phối hợp c&ugrave;ng c&aacute;c trang phục h&agrave;ng ng&agrave;y, ph&ugrave; hợp khi đi học, đi chơi, dạo phố, tập thể dục&hellip; Đừng bỏ lỡ cơ hội sở hữu ch&uacute;ng qua Sneaker Daily Shop nh&eacute; ^^</p>\r\n\r\n<h2><strong>Đặc điểm cơ bản của Puma x Kang Daniel RS-X3</strong></h2>\r\n\r\n<p>Đ&ocirc;i gi&agrave;y được thiết kế với form thể thao mang đầy n&eacute;t c&aacute; t&iacute;nh. Phần upper được l&agrave;m bằng vải dệt mang đến sự tho&aacute;ng kh&iacute; dễ chịu.</p>\r\n\r\n<p>Lớp đệm Misole PU. Kết hợp c&ocirc;ng nghệ hổ trợ phần g&oacute;t ch&acirc;n. Đế gi&agrave;y được l&agrave;m bằng cao su c&oacute; r&atilde;nh chống trượt. tăng độ linh hoạt khi di chuyển.</p>\r\n\r\n<p>Gi&agrave;y đi &ecirc;m ch&acirc;n, thoải m&aacute;i ngay cả khi bạn di chuyển v&agrave; vận động trong thời gian d&agrave;i. Sở hữu kiểu d&aacute;ng hiện đại, gi&agrave;y&nbsp;<strong>Puma x Kang Daniel RS-X</strong>3 chắc chắn sẽ l&agrave; sự lựa chọn tuyệt vời cho bạn.</p>\r\n\r\n<h3>Th&ocirc;ng tin ph&aacute;t h&agrave;nh Gi&agrave;y Puma RS-X Patent Jr &lsquo;White Yellow Alert&rsquo;</h3>\r\n\r\n<p><strong>Thương hiệu:</strong>&nbsp;Puma</p>\r\n\r\n<p><strong>Thiết kế:</strong>&nbsp;<a href=\"https://sneakerdaily.vn/danh-muc-san-pham/puma/puma-rs/\">Puma RS-X</a></p>\r\n\r\n<h2><strong>Đ&ocirc;i n&eacute;t về thương hiệu Puma</strong></h2>\r\n\r\n<p><strong>Puma SE (thương hiệu ch&iacute;nh thức l&agrave; PUMA)</strong>&nbsp;l&agrave; một c&ocirc;ng ty đa quốc gia lớn của Đức chuy&ecirc;n sản xuất gi&agrave;y v&agrave; c&aacute;c dụng cụ thể thao kh&aacute;c c&oacute; trụ sở tại Herzogenaurach, Bavaria, Đức. Từ 1996, Puma đ&atilde; mở rộng hoạt động sang thị trường Mỹ. Từ 2007, Puma SE trở th&agrave;nh một phần của tập đo&agrave;n sản xuất h&agrave;ng xa xỉ Ph&aacute;p Kering</p>', 10, 10, '2023-07-04 07:42:20', '2023-07-04 07:42:20'),
(14, 'Giày adidas Originals Yeezy Foam', 'http://127.0.0.1:8000/uploads/1688481796-image.png', 8399000, '<h3>Gi&agrave;y adidas Originals Yeezy Foam</h3>\r\n\r\n<p><strong>Thời gian ra mắt :&nbsp;&nbsp;</strong>11/12/2021</p>\r\n\r\n<p><strong>Thương hiệu:&nbsp;</strong>adidas</p>\r\n\r\n<p><strong>Thiết kế:</strong>&nbsp;<a href=\"https://sneakerdaily.vn/danh-muc-san-pham/yeezy-slide/\">Yeezy Slide</a></p>\r\n\r\n<p>V&agrave;o năm 2020, đ&acirc;y l&agrave; thời điểm để g&acirc;y chấn động thế giới một lần nữa. H&igrave;nh dạng v&agrave; phong c&aacute;ch Yeezy Foam Runner ho&agrave;n to&agrave;n mới đ&atilde; trở n&ecirc;n phổ biến.</p>\r\n\r\n<p>Được đội ngũ thiết kế Yeezy th&ocirc;ng b&aacute;o về đường n&eacute;t v&agrave; sự giống nhau. Yeezy Foam Runner ra mắt lần đầu với m&agrave;u &ldquo;Ararat&rdquo;.</p>\r\n\r\n<p>Được b&aacute;n lẻ với gi&aacute; 75 đ&ocirc; la nhưng nhanh ch&oacute;ng b&aacute;n được gi&aacute; cao ngất ngưởng nhờ số lượng c&oacute; hạn. Lần đầu ti&ecirc;n được nh&igrave;n thấy trong thời trang gia đ&igrave;nh, West v&agrave; con g&aacute;i của anh, North West, l&agrave; những người đầu ti&ecirc;n sử dụng Yeezy Foam Runner trước khi n&oacute; được b&aacute;n tại c&aacute;c cửa h&agrave;ng, với m&agrave;u sắc thể hiện sự t&ocirc;n k&iacute;nh đối với nguồn gốc Armenia của Kim Kardashian.</p>\r\n\r\n<p>Được ph&aacute;t h&agrave;nh v&agrave;o th&aacute;ng 6 năm 2020. Mẫu Made in America đ&atilde; ho&agrave;n to&agrave;n loại bỏ d&acirc;y buộc v&agrave; thương hiệu để c&oacute; một diện mạo kh&aacute;c lạ kh&ocirc;ng giống bất cứ thứ g&igrave; được đưa ra. Bởi d&ograve;ng sản phẩm West x Adidas. Cấu tr&uacute;c EVA foam đ&atilde; l&agrave;m cho m&ocirc; h&igrave;nh trở n&ecirc;n khả thi. Sử dụng tảo l&agrave;m nền cho c&aacute;c sản phẩm th&acirc;n thiện với m&ocirc;i trường.</p>\r\n\r\n<p>Sau nhiều th&aacute;ng ở thị trường hậu m&atilde;i, phần giới thiệu &ldquo;Ararat&rdquo; tiếp tục g&acirc;y t&ograve; m&ograve; v&agrave; thu phục.</p>\r\n\r\n<p>Những người d&ugrave;ng kh&ocirc;ng chắc chắn về kiểu uốn cong thể loại n&agrave;y. V&agrave;o th&aacute;ng 3 năm 2021, Yeezy Foam Runner trở lại b&aacute;n lẻ với hai phong c&aacute;ch m&ugrave;a xu&acirc;n: trang điểm &ldquo;Sand&rdquo; v&agrave; &ldquo;MXT Moon Grey&rdquo;. Với m&agrave;u &ldquo;Sand&rdquo; chỉ c&oacute; một ch&uacute;t điều chỉnh so với m&agrave;u &ldquo;Ararat&rdquo; v&agrave; &ldquo;MXT Moon Grey&rdquo; với hai t&ocirc;ng m&agrave;u cẩm thạch. Yeezy Foam Runner đột nhi&ecirc;n trở n&ecirc;n phổ biến hơn v&agrave; ng&agrave;y c&agrave;ng độc đ&aacute;o về mặt thẩm mỹ.</p>', 10, 9, '2023-07-04 07:43:16', '2023-07-04 07:43:16'),
(15, 'Giày adidas Forum Exhibit Low', 'http://127.0.0.1:8000/uploads/1688481858-image.jpg', 3490000, '<p><a href=\"https://sneakerdaily.vn/san-pham/giay-adidas-forum-low-blue-hq6334/?preview_id=164852&amp;preview_nonce=ec4ee721cf&amp;_thumbnail_id=164855&amp;preview=true\"><strong>Gi&agrave;y adidas Forum Exhibit Low 2.0 &lsquo;Kream&rsquo;</strong></a>&nbsp;hiện đ&atilde; c&oacute; sẵn tại Sneaker Shop, đừng bỏ lỡ cơ hội của m&igrave;nh nh&eacute;!</p>\r\n\r\n<p><strong>Thương hiệu:</strong>&nbsp;<a href=\"https://sneakerdaily.vn/danh-muc-san-pham/giay-adidas/\">adidas</a></p>\r\n\r\n<p><strong>Thiết kế:&nbsp;</strong>Forum</p>\r\n\r\n<p><strong>M&atilde; sản phẩm: ID1849</strong></p>\r\n\r\n<p><strong>Xuất xứ:</strong>&nbsp;Đức</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>TH&Acirc;N GI&Agrave;Y</p>\r\n			</td>\r\n			<td>\r\n			<p>Da, Vải</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>ĐẾ GI&Agrave;Y</p>\r\n			</td>\r\n			<td>\r\n			<p>Cao su</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>HƯỚNG DẪN BẢO QUẢN</p>\r\n			</td>\r\n			<td>\r\n			<ul>\r\n				<li>\r\n				<p>Kh&ocirc;ng ng&acirc;m nước, hạn chế tiếp x&uacute;c với nước</p>\r\n				</li>\r\n				<li>\r\n				<p>Lau ch&ugrave;i vết bẩn thường xuy&ecirc;n bằng khăn mềm để tr&aacute;nh xuống m&agrave;u sản phẩm</p>\r\n				</li>\r\n				<li>\r\n				<p>Kh&ocirc;ng phơi dưới &aacute;nh nắng trực tiếp</p>\r\n				</li>\r\n				<li>\r\n				<p>Bảo quản gi&agrave;y ở nơi tho&aacute;ng m&aacute;t</p>\r\n				</li>\r\n				<li>\r\n				<p>Kh&ocirc;ng sử dụng chất tẩy mạnh l&ecirc;n gi&agrave;y</p>\r\n				</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>T&Iacute;NH NĂNG NỔI BẬT</p>\r\n			</td>\r\n			<td>\r\n			<ul>\r\n				<li>\r\n				<p>Mang m&agrave;u trắng tinh tế sang trọng kết hợp với xanh thanh lịch</p>\r\n				</li>\r\n				<li>\r\n				<p>Thiết kế gọn nhẹ thoải m&aacute;i cho người mang</p>\r\n				</li>\r\n				<li>\r\n				<p>Đơn giản ph&ugrave; hợp với nhiều phong c&aacute;ch thời trang kh&aacute;c nhau</p>\r\n				</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Adidas ltd AG l&agrave; một nh&agrave; sản xuất dụng cụ thể thao của Đức, một th&agrave;nh vi&ecirc;n của Adidas Group, bao gồm cả c&ocirc;ng ty dụng cụ thể thao Reebok, c&ocirc;ng ty golf Taylormade, c&ocirc;ng ty sản xuất b&oacute;ng golf Maxfli v&agrave; Adidas golf. Adidas l&agrave; nh&agrave; sản xuất dụng cụ thể thao lớn thứ hai tr&ecirc;n thế giới.</p>\r\n\r\n<p>Gi&agrave;y Adidas Forum Exhibit Low &lsquo;Sky Tint&rsquo;&nbsp;&nbsp;mang m&agrave;u sắc phối hợp mới lạ tạo n&ecirc;n một thiết kế tinh tế dễ d&agrave;ng diện c&ugrave;ng rất nhiều item kh&aacute;c nhau v&ocirc; c&ugrave;ng thời trang</p>\r\n\r\n<p>C&aacute;c chi tiết được c&aacute;ch điệu đơn giản trẻ trung, Logo Adidas 3 sọc x&aacute;m đặc trưng đẹp mắt với c&aacute;i viền logo 3 l&aacute; m&agrave;u xanh độc đ&aacute;o</p>', 10, 9, '2023-07-04 07:44:18', '2023-07-04 07:44:18'),
(16, 'Giày adidas UltraBoost 22 Green', 'http://127.0.0.1:8000/uploads/1688482310-image.png', 3799000, '<h2><strong>Gi&agrave;y Adidas Ultraboost 22</strong></h2>\r\n\r\n<p>Gi&agrave;y Adidas Ultraboost 22 l&agrave; một đ&ocirc;i gi&agrave;y chạy bộ được y&ecirc;u th&iacute;ch nhất của c&aacute;c vận động vi&ecirc;n. Đ&ocirc;i gi&agrave;y được thiết kế bền bỉ v&agrave; thoải m&aacute;i với đế giữa được l&agrave;m từ chất liệu Boost, gi&uacute;p tăng độ đ&agrave;n hồi v&agrave; giảm chấn động khi chạy. B&ecirc;n cạnh đ&oacute;, gi&agrave;y c&ograve;n c&oacute; thiết kế với đặc t&iacute;nh &ecirc;m &aacute;i, độ bền cao v&agrave; lớp đệm tối ưu, gi&uacute;p cho người d&ugrave;ng c&oacute; cảm gi&aacute;c thoải m&aacute;i khi sử dụng. Đặc biệt, gi&agrave;y c&ograve;n c&oacute; thiết kế đẹp mắt v&agrave; nhiều t&ugrave;y chọn m&agrave;u sắc kh&aacute;c nhau để người d&ugrave;ng c&oacute; thể lựa chọn.</p>\r\n\r\n<p><img src=\"https://lzd-img-global.slatic.net/g/shop/f2d2140efe87873ab72dbf51d3ee51e9.png_2200x2200q80.png_.webp\" /></p>\r\n\r\n<p><strong>TH&Ocirc;NG TIN THƯƠNG HIỆU ADIDAS</strong></p>\r\n\r\n<p>Ng&agrave;y nay Adidas kh&ocirc;ng chỉ l&agrave; nh&atilde;n hiệu thể thao chuy&ecirc;n nghiệp m&agrave; c&ograve;n l&agrave; một sản phẩm thời trang. Adidas đ&atilde; ph&acirc;n chia c&aacute;c d&ograve;ng sản phẩm của m&igrave;nh th&agrave;nh 3 ph&acirc;n nh&oacute;m:</p>\r\n\r\n<p>Th&agrave;nh t&iacute;ch thể thao: tập trung v&agrave;o t&iacute;nh năng của sản phẩm đ&aacute;p ứng cho c&aacute;c VĐV chuy&ecirc;n nghiệp</p>\r\n\r\n<ul>\r\n	<li><strong>Di sản thể thao</strong>: những sản phẩm truyền thống đ&atilde; mang lại danh tiếng</li>\r\n	<li><strong>Thời trang thể thao</strong>: tập trung v&agrave;o những kh&aacute;ch h&agrave;ng trẻ th&iacute;ch. Những sản phẩm trang phục thể thao hợp thời trang v&agrave; sang trọng.</li>\r\n	<li><strong>C&oacute; thể n&oacute;i Adidas th&agrave;nh c&ocirc;ng nhờ:</strong>\r\n	<ul>\r\n		<li>Lu&ocirc;n lu&ocirc;n s&aacute;ng tạo nhằm v&agrave;o sự n&acirc;ng cao th&agrave;nh t&iacute;ch cho c&aacute;c VĐV chuy&ecirc;n nghiệp.</li>\r\n		<li>Lu&ocirc;n trung th&agrave;nh với KH mục ti&ecirc;u l&agrave; c&aacute;c VĐV chuy&ecirc;n nghiệp.</li>\r\n		<li>Lu&ocirc;n giữ g&igrave;n lịch sử đẹp đẽ v&agrave; ph&aacute;t triển n&oacute; th&agrave;nh 1 phong c&aacute;ch thời trang.</li>\r\n		<li>Lu&ocirc;n ki&ecirc;n định với Hassler ng&agrave;y n&agrave;o: &ldquo;phong độ&rdquo; cho d&ugrave; c&oacute; l&uacute;c s&oacute;ng gi&oacute; nhưng họ kh&ocirc;ng bao giờ bắt sản phẩm m&igrave;nh phải trả gi&aacute;.</li>\r\n		<li>Những ng&ocirc;i sao thể hiện đ&uacute;ng phong c&aacute;ch m&agrave; Adidas truyền đạt.</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<p>Năm 2010 Si&ecirc;u thị thể thao MaxxSport&nbsp;&nbsp;ch&iacute;nh thức l&agrave; nh&agrave; b&aacute;n h&agrave;ng của adidas tại Việt Nam. Cho tới nay MaxxSport đ&atilde; c&oacute; rất nhiều&nbsp;&nbsp;Shop thời trang thể thao adidas tr&ecirc;n khắp địa b&agrave;n cả nước.</p>', 10, 9, '2023-07-04 07:46:08', '2023-07-04 07:51:50'),
(17, 'Giày Nike TravisScott x Air Jordan', 'http://127.0.0.1:8000/uploads/1688482032-image.jpg', 3400000, '<ul>\r\n	<li>\r\n	<h2>Gi&agrave;y Nike TravisScott x Air Jordan</h2>\r\n\r\n	<p>Gi&agrave;y Nike Travis Scott x Air Jordan 1 Low. OG &ldquo;Olive&rdquo;&nbsp; l&agrave; một sản phẩm hợp t&aacute;c giữa Nike v&agrave; rapper nổi tiếng. Travis Scott, mang đến cho người d&ugrave;ng sự pha trộn giữa phong c&aacute;ch thể thao v&agrave; thời trang đương đại.</p>\r\n\r\n	<p>Được thiết kế với m&agrave;u xanh &ocirc; liu đầy ấn tượng. Gi&agrave;y Nike Travis Scott x Air Jordan 1 Low OG &ldquo;Olive&rdquo;. Sở hữu chất liệu da b&ograve; cao cấp. Với đường viền đỏ nổi bật tr&ecirc;n phần đế ngo&agrave;i. Mang đến vẻ đẹp ho&agrave;n hảo v&agrave; sự độc đ&aacute;o cho sản phẩm.</p>\r\n\r\n	<p>Với thiết kế thấp cổ. Gi&agrave;y Nike Travis Scott x Air Jordan 1 Low OG &ldquo;Olive&rdquo; mang đến sự thoải m&aacute;i. Dễ d&agrave;ng phối hợp với c&aacute;c trang phục thể thao, hay thậm ch&iacute; l&agrave; những trang phục mang phong c&aacute;ch đương đại.</p>\r\n\r\n	<p>B&ecirc;n cạnh đ&oacute;, sản phẩm c&ograve;n được trang bị những t&iacute;nh năng vượt trội như đệm. Air Sole tr&ecirc;n phần đế gi&uacute;p giảm thiểu lực động l&ecirc;n cơ thể, gi&uacute;p người d&ugrave;ng cảm thấy thoải m&aacute;i hơn khi sử dụng trong thời gian d&agrave;i.</p>\r\n\r\n	<p>Gi&agrave;y Nike Travis Scott x Air Jordan 1 Low OG &ldquo;Olive&rdquo; DZ4137-106 l&agrave; một sản phẩm đẳng cấp của thương hiệu Nike. Travis Scott, đem đến cho người d&ugrave;ng sự kết hợp ho&agrave;n hảo giữa phong c&aacute;ch thể thao v&agrave; thời trang đương đại. Với chất liệu v&agrave; t&iacute;nh năng đẳng cấp, gi&agrave;y n&agrave;y đ&aacute;p ứng mọi nhu cầu của người d&ugrave;ng về sự thoải m&aacute;i, phong c&aacute;ch v&agrave; chất lượng.</p>\r\n\r\n	<p><a href=\"https://sneakerdaily.vn/san-pham/giay-nike-travis-scott-x-air-jordan-1-low-og-olive-dz4137-106\">Nike Travis Scott x Air Jordan 1 Low OG &ldquo;Olive&rdquo;</a>&nbsp;hiện đ&atilde; c&oacute; sẵn tại SneakerShop. Với mức gi&aacute; hấp dẫn, đừng bỏ lỡ cơ hội của m&igrave;nh nh&eacute;!</p>\r\n\r\n	<p>Cập nhật nhanh nhất lịch ra mắt của c&aacute;c mẫu gi&agrave;y mới nhất v&agrave; tin tức thời trang trong nước.</p>\r\n	</li>\r\n</ul>', 10, 8, '2023-07-04 07:47:12', '2023-07-04 07:47:12'),
(18, 'Giày MLB Chunky Liner High LA', 'http://127.0.0.1:8000/uploads/1688482093-image.png', 3999000, '<p>Gi&agrave;y MLB Chunky Liner High LA với 2 lớp d&iacute;nh liền với nhau c&ugrave;ng đường c&aacute;ch điệu mềm mại .khiến ch&uacute;ng ta c&oacute; cảm gi&aacute;c như đ&ocirc;i gi&agrave;y c&oacute; 3 lớp đế. Chất liệu th&acirc;n gi&agrave;y được l&agrave;m ho&agrave;n to&agrave;n từ da thật. Form gi&agrave;y cổ cao, m&agrave;u tươi s&aacute;ng năng động mang. t&iacute;nh thể thảo v&agrave; thời trang đường phố. Đ&ocirc;i gi&agrave;y phối hợp với những đường &ldquo;Line&rdquo; m&agrave;u sắc tạo điểm nhấn độc đ&aacute;o cho đ&ocirc;i gi&agrave;y.</p>\r\n\r\n<p>Điểm nhấn của những đ&ocirc;i&nbsp;<strong>MLB Chunky Liner</strong>&nbsp;l&agrave; họa tiết&nbsp;logo lớn của c&aacute;c đội b&oacute;ng ch&agrave;y Big Ball y&ecirc;u qu&yacute; của&nbsp;<a href=\"https://sneakerdaily.vn/danh-muc-san-pham/giay-mlb/\"><strong>MLB</strong></a>.</p>\r\n\r\n<p>Gi&agrave;y MLB Chunky Liner High LA hiện đ&atilde; c&oacute; sẵn tại Sneaker Daily. Shop với mức gi&aacute; hấp dẫn, đừng bỏ lỡ cơ hội của m&igrave;nh nh&eacute;! Cập nhật nhanh nhất lịch ra mắt của c&aacute;c mẫu gi&agrave;y mới nhất v&agrave; tin tức thời trang trong nước v&agrave; tr&ecirc;n thế giới bằng c&aacute;ch theo d&otilde;i&nbsp;<a href=\"https://sneakerdaily.vn/\"><strong>Sneaker Daily</strong></a>&nbsp;tr&ecirc;n&nbsp;<a href=\"https://www.facebook.com/sneakerdailyvn/\" target=\"_blank\">Facebook</a>&nbsp;hoặc&nbsp;<a href=\"https://www.instagram.com/sneakerdaily.vn/\">Instagram</a>.</p>\r\n\r\n<p>MLB Chunky Liner Mid Denim Boston Red Sox &lsquo;D.Blue&rsquo; .đến từ MLB Korea &ndash; h&atilde;ng thời trang tại H&agrave;n Quốc. H&atilde;ng n&agrave;y chuy&ecirc;n thiết kế v&agrave; sản xuất tất cả từ quần &aacute;o,. v&aacute;y cho đến những phụ kiện như mũ, t&uacute;i, tất,&hellip;. Tất cả đều lấy cảm hứng từ logo của những đội b&oacute;ng thuộc MLB. Năm 2019,.MLB ch&iacute;nh l&agrave; ứng cử vi&ecirc;n s&aacute;ng gi&aacute; nằm trong top những đ&ocirc;i gi&agrave;y đ&aacute;ng được sở hữu nhất. Quy tr&igrave;nh gia c&ocirc;ng một đ&ocirc;i&nbsp; v&ocirc; c&ugrave;ng tỉ mỉ. Ch&iacute;nh v&igrave; vậy, chất lượng của đ&ocirc;i gi&agrave;y v&ocirc; c&ugrave;ng ho&agrave;n hảo từ đường kim mũi chỉ đến chất liệu của gi&agrave;y.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Thương hiệu:</strong>&nbsp;&nbsp;<a href=\"https://sneakerdaily.vn/danh-muc-san-pham/giay-mlb/\">MLB</a></p>\r\n\r\n<p><strong>Thiết kế:&nbsp;</strong><a href=\"https://sneakerdaily.vn/danh-muc-san-pham/giay-mlb/la-dodgers/\">MLB LA Dodgers</a></p>\r\n\r\n<p><strong>M&atilde; sản phẩm:&nbsp; MLB</strong></p>\r\n\r\n<p><strong>Xuất xứ</strong>&nbsp;: H&agrave;n Quốc</p>', 10, 11, '2023-07-04 07:48:13', '2023-07-04 07:48:13'),
(19, 'Giày New Balance 550 ‘White Green Cream’ BB550SWB', 'http://127.0.0.1:8000/uploads/1688482166-image.webp', 3690000, '<p>New Balance l&agrave; một thương hiệu thời trang v&agrave; gi&agrave;y thể thao từ Mỹ. Hơn 100 năm qua, New Balance lu&ocirc;n t&igrave;m hiểu nhu cầu của những vận động vi&ecirc;n để đầu tư, thiết kế những sản phẩm ph&ugrave; hợp. New Balance lu&ocirc;n tập trung đến từng chuyển động của cơ thể con người để c&oacute; thể &ldquo;Tạo-Ra-Điều-Tuyệt-Vời&rdquo; (Making Excellent Happen)!</p>\r\n\r\n<p><a href=\"https://sneakerdaily.vn/san-pham/giay-new-balance-550-white-green-cream-bb550swb/\"><strong>New Balance 550 &lsquo;White Green Cream&rsquo;</strong></a>đ&atilde; được b&agrave;y b&aacute;n tại New Balance v&agrave; c&aacute;c nh&agrave; b&aacute;n lẻ kh&aacute;c, đừng bỏ lỡ cơ hội sở hữu ch&uacute;ng qua Sneaker Daily Shop nh&eacute; ^^</p>\r\n\r\n<p>Cập nhật nhanh nhất lịch ra mắt của c&aacute;c mẫu gi&agrave;y mới nhất bằng c&aacute;ch theo d&otilde;i&nbsp;<strong>Sneaker Daily</strong>&nbsp;tr&ecirc;n&nbsp;Facebook&nbsp;hoặc&nbsp;Instagram.</p>\r\n\r\n<h3>Th&ocirc;ng tin ph&aacute;t h&agrave;nh Gi&agrave;y New Balance 550 &lsquo;White Green Cream&rsquo;</h3>\r\n\r\n<p><strong>Thương hiệu:<a href=\"https://sneakerdaily.vn/danh-muc-san-pham/new-balance/\">&nbsp;</a></strong><a href=\"https://sneakerdaily.vn/danh-muc-san-pham/new-balance/\">New Balance</a></p>\r\n\r\n<p><strong>Thiết kế:</strong>&nbsp;550</p>\r\n\r\n<p><strong>M&atilde; sản phẩm:</strong>&nbsp;BB550SWB</p>\r\n\r\n<p><strong>Xuất xứ&nbsp;</strong>: Mỹ</p>', 10, 12, '2023-07-04 07:49:26', '2023-07-04 07:49:26'),
(20, 'Giày New Balance 550 ‘White Bubblegum Pink’', 'http://127.0.0.1:8000/uploads/1688482265-image.webp', 3690000, '<p>New Balance l&agrave; một thương hiệu thời trang v&agrave; gi&agrave;y thể thao từ Mỹ. Hơn 100 năm qua, New Balance lu&ocirc;n t&igrave;m hiểu nhu cầu của những vận động vi&ecirc;n để đầu tư, thiết kế những sản phẩm ph&ugrave; hợp. New Balance lu&ocirc;n tập trung đến từng chuyển động của cơ thể con người để c&oacute; thể &ldquo;Tạo-Ra-Điều-Tuyệt-Vời&rdquo; (Making Excellent Happen)!</p>\r\n\r\n<p><a href=\"https://sneakerdaily.vn/san-pham/giay-new-balance-550-white-bubblegum-pink-w-bbw550bd/\"><strong>New Balance 550 &lsquo;White Bubblegum Pink&rsquo; (W)</strong></a>đ&atilde; được b&agrave;y b&aacute;n tại New Balance v&agrave; c&aacute;c nh&agrave; b&aacute;n lẻ kh&aacute;c, đừng bỏ lỡ cơ hội sở hữu ch&uacute;ng qua Sneaker Daily Shop nh&eacute; ^^</p>\r\n\r\n<p>Cập nhật nhanh nhất lịch ra mắt của c&aacute;c mẫu gi&agrave;y mới nhất bằng c&aacute;ch theo d&otilde;i&nbsp;<strong>Sneaker Shop&nbsp;</strong>tr&ecirc;n&nbsp;Facebook&nbsp;hoặc&nbsp;Instagram.</p>\r\n\r\n<h3>Th&ocirc;ng tin ph&aacute;t h&agrave;nh Gi&agrave;y New Balance 550 &lsquo;White Bubblegum Pink&rsquo; (W)</h3>\r\n\r\n<p><strong>Thương hiệu:<a href=\"https://sneakerdaily.vn/danh-muc-san-pham/new-balance/\">&nbsp;</a></strong><a href=\"https://sneakerdaily.vn/danh-muc-san-pham/new-balance/\">New Balance</a></p>\r\n\r\n<p><strong>Thiết kế:</strong>&nbsp;550</p>\r\n\r\n<p><strong>M&atilde; sản phẩm:</strong>&nbsp;BBW550BD</p>\r\n\r\n<p><strong>Xuất xứ&nbsp;</strong>: Mỹ</p>', 10, 12, '2023-07-04 07:51:05', '2023-07-04 07:51:05'),
(21, 'Giày Thể Thao Nam Hunter Street x VietMax Vietnam', 'http://127.0.0.1:8000/uploads/1688484631-image.webp', 1255200, '<p>Gi&agrave;y thể thao nam Hunter Street x VietMax Vietnam Arising DSMH05502 mang thiết kế trẻ trung, năng động với m&agrave;u trắng trang nh&atilde;, đường n&eacute;t tinh tế v&agrave; chăc sẽ l&agrave; một lựa chọn tuyệt vời cho c&aacute;c bạn. Để biết th&ecirc;m về sản phẩm, bạn h&atilde;y tham khảo nội dung ở phần dưới đ&acirc;y.</p>\r\n\r\n<h2>Đế gi&agrave;y</h2>\r\n\r\n<p>Gi&agrave;y Thể Thao Nam Hunter Street x VietMax Vietnam Arising DSMH05502 mang những chi tiết v&agrave; đặc điểm nổi bật như sau:</p>\r\n\r\n<h3>Đế ngo&agrave;i</h3>\r\n\r\n<ul>\r\n	<li>Đế (Outsole) với chất liệu EVA cao su R.E với t&iacute;nh năng mềm dẻo v&agrave; nhẹ hơn rất nhiều so với cao su truyền thống, mặc d&ugrave; mềm dẻo nhưng vẫn đảm bảo khả năng chịu m&agrave;i m&ograve;n v&agrave; va chạm. Độ Shore ph&ugrave; hợp, &ecirc;m v&agrave; nẩy tốt gi&uacute;p bảo vệ v&agrave; n&acirc;ng đỡ b&agrave;n ch&acirc;n mỗi khi sử dụng.</li>\r\n	<li>Đế cao c&oacute; độ cao 5cm thấp dần về ph&iacute;a trước, gi&uacute;p người d&ugrave;ng n&acirc;ng chiều cao một c&aacute;ch tinh tế.</li>\r\n</ul>\r\n\r\n<h3>Đế trong (L&oacute;t gi&agrave;y)</h3>\r\n\r\n<ul>\r\n	<li>Thiết kế đế trong với l&oacute;t đế &ecirc;m &aacute;i O-Foam cao cấp &eacute;p 3D với 6 điểm m&aacute;t-xa, thun c&aacute; sấu kh&ocirc;ng những gi&uacute;p kh&aacute;ng khuẩn m&agrave; c&ograve;n khiến đ&ocirc;i ch&acirc;n trở n&ecirc;n &ecirc;m &aacute;i, th&ocirc;ng tho&aacute;ng khi sử dụng. Nhờ đ&oacute;, ngăn chặn hiệu quả t&igrave;nh trạng ẩm mốc, m&ugrave;i h&ocirc;i tạo cảm gi&aacute;c &ecirc;m &aacute;i..</li>\r\n	<li>Đế được l&agrave;m từ chất liệu nhẹ, &ecirc;m, mềm dẻo, chống nước, &eacute;p khu&ocirc;n 3D bằng d&acirc;y chuyền hiện đại tạo đ&agrave;n hồi tốt, độ bền cao, hấp thu chất động, giảm ma s&aacute;t, hỗ trợ lực v&agrave; tạo độ &ecirc;m &aacute;i đ&agrave;n hồi khi di chuyển.</li>\r\n</ul>\r\n\r\n<h2>Th&acirc;n tr&ecirc;n gi&agrave;y</h2>\r\n\r\n<ul>\r\n	<li>Gi&agrave;y thể thao nam Hunter Street x VietMax Vietnam Arising DSMH05502 được thiết kế với quai sử dụng chất liệu cao cấp l&agrave; da b&ograve; thật, kết hợp hoạ tiết trang tr&iacute; Simili v&ocirc; c&ugrave;ng trẻ trung, đẹp mắt.</li>\r\n	<li>Kiểu d&aacute;ng gi&agrave;y mang tới sự thon gọn, mũi v&agrave; form &ocirc;m vừa vặn từ g&oacute;t l&ecirc;n đến cổ ch&acirc;n, thoải m&aacute;i khi vận động v&agrave; di chuyển.</li>\r\n	<li>Thiết kế d&acirc;y gi&agrave;y rời để dễ d&agrave;ng điều chỉnh k&iacute;ch thước cho người sử dụng cảm thấy thoải m&aacute;i.</li>\r\n	<li>Th&acirc;n gi&agrave;y sử dụng chất liệu cao cấp, thấp nước tốt, tho&aacute;ng kh&iacute; tốt, kh&ocirc;ng g&acirc;y n&oacute;ng, hầm khi sử dụng.</li>\r\n	<li>Th&acirc;n gi&agrave;y với những đường may sắc xảo, chắc chắn mang lại cảm gi&aacute;c chuẩn chỉ v&agrave; đẹp tuyệt vời</li>\r\n</ul>\r\n\r\n<h2>M&agrave;u sắc</h2>\r\n\r\n<ul>\r\n	<li>Hiện nay, sản phẩm c&oacute; m&agrave;u trắng, với t&ocirc;ng m&agrave;u trắng l&agrave;m chủ đạo, chắc chắn sẽ mang lại cảm gi&aacute;c năng động, hợp thời, đặc biệt l&agrave; dễ phối đồ v&agrave; ph&ugrave; hợp với nhiều ho&agrave;n cảnh.</li>\r\n	<li>V&igrave; m&agrave;n h&igrave;nh v&agrave; điều kiện &aacute;nh s&aacute;ng kh&aacute;c nhau, m&agrave;u sắc thực tế của sản phẩm c&oacute; thể ch&ecirc;nh lệch khoảng 3-5%.</li>\r\n</ul>\r\n\r\n<h2>Size gi&agrave;y</h2>\r\n\r\n<p>Hiện nay với thiết kế n&agrave;y Biti&rsquo;s cung cấp đầy đủ c&aacute;c size tương ứng với k&iacute;ch cỡ b&agrave;n ch&acirc;n của nam bao gồm size 39, size 40, size 41, size 42, size 43, size 44, size 45. Kh&aacute;ch h&agrave;ng n&ecirc;n đo ch&iacute;nh x&aacute;c k&iacute;ch cỡ b&agrave;n ch&acirc;n v&agrave; so s&aacute;nh với bảng size gợi &yacute; từ Biti&rsquo;s để chọn đ&ocirc;i gi&agrave;y ưng &yacute;.</p>\r\n\r\n<h2>Độ bền v&agrave; bảo h&agrave;nh</h2>\r\n\r\n<p>Tất cả sản phẩm từ thương hiệu Biti&rsquo;s n&oacute;i chung, trong đ&oacute; c&oacute; cả Gi&agrave;y thể thao nam Hunter Street x VietMax Vietnam Arising đều đ&atilde; được kiểm tra kỹ lưỡng bằng m&aacute;y m&oacute;c n&ecirc;n c&oacute; độ bền cao, khi đến với tay kh&aacute;ch h&agrave;ng sản phẩm được:</p>\r\n\r\n<ul>\r\n	<li>Sản phẩm được bảo h&agrave;nh 6 th&aacute;ng t&iacute;nh từ thời điểm mua h&agrave;ng.</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Bảo h&agrave;nh trọn đời với c&aacute;c lỗi hở keo v&agrave; đứt chỉ.</li>\r\n</ul>\r\n\r\n<h2>T&iacute;nh năng v&agrave; lợi &iacute;ch nổi bật</h2>\r\n\r\n<ul>\r\n	<li>Thiết kế hợp thời, đẹp mắt.</li>\r\n	<li>Chất liệu cao cấp mang đến sự thoải m&aacute;i, &ecirc;m &aacute;i cho người d&ugrave;ng.</li>\r\n	<li>Đế gi&agrave;y c&oacute; độ đ&agrave;n hồi tốt, chống nước, trơn trượt hiệu quả đảm bảo an to&agrave;n cho người sử dụng.</li>\r\n	<li>Th&iacute;ch hợp với nhiều phong c&aacute;ch v&agrave; ho&agrave;n cảnh.</li>\r\n</ul>\r\n\r\n<h2>Sản phẩm bao gồm</h2>\r\n\r\n<ul>\r\n	<li>Hộp gi&agrave;y giấy b&igrave;a cứng c&aacute;p gi&uacute;p bảo quản gi&agrave;y tốt hơn.</li>\r\n	<li>Gi&agrave;y.</li>\r\n	<li>D&acirc;y gi&agrave;y chắc chắn</li>\r\n	<li>T&uacute;i chống ẩm.</li>\r\n</ul>', 10, 13, '2023-07-04 08:30:31', '2023-07-04 08:30:31'),
(22, 'Giày Thể Thao Nam Hunter Core DSMH09400', 'http://127.0.0.1:8000/uploads/1688484685-image.webp', 764000, '<h2>Cấu tạo</h2>\r\n\r\n<ul>\r\n	<li>Quai Knits cổ vế 1 lớp thuận tiện cho qu&aacute; tr&igrave;nh mang, xỏ ch&acirc;n được thuận tiện.&nbsp;</li>\r\n	<li>Quai dệt logo c&aacute;nh chim kết hợp c&aacute;ch may phần &ocirc;z&ecirc; d&acirc;y gi&agrave;y tạo sự kh&aacute;c biệt v&agrave; nổi bật, gi&uacute;p đ&ocirc;i gi&agrave;y th&ecirc;m độc đ&aacute;o hơn.</li>\r\n	<li>Đế gi&agrave;y LITE FOAM 2.0 với chất liệu Phylon v&agrave; cao su mang lại sự nhẹ nh&agrave;ng, linh hoạt v&agrave; thoải m&aacute;i cho gi&agrave;y, đồng thời cung cấp độ bền v&agrave; độ b&aacute;m tốt.</li>\r\n	<li>Độ cao đế 5 ph&acirc;n&nbsp;</li>\r\n</ul>\r\n\r\n<h2>Thiết kế</h2>\r\n\r\n<p>Sản phẩm gi&agrave;y thể thao nam Hunter Core DSMH09400 c&oacute; thiết kế trẻ trung, năng động thể hiện qua c&aacute;c chi tiết độc đ&aacute;o tr&ecirc;n quai gi&agrave;y. Quai dệt logo c&aacute;nh chim l&agrave; một điểm nhấn đặc biệt, tạo phong c&aacute;ch. Th&ecirc;m v&agrave;o đ&oacute;, c&aacute;ch may &ocirc;z&ecirc; d&acirc;y gi&agrave;y đầy tinh tế, chắc chắn tăng th&ecirc;m t&iacute;nh thẩm mỹ cho đ&ocirc;i gi&agrave;y thể thao.</p>\r\n\r\n<h2>M&agrave;u sắc</h2>\r\n\r\n<ul>\r\n	<li>Sản phẩm c&oacute; ba m&agrave;u đen, x&aacute;m v&agrave; xanh nhớt l&agrave; những gam m&agrave;u trung t&iacute;nh dễ phối đồ hướng tới sự năng động, trẻ trung, lịch l&atilde;m, thoải m&aacute;i v&agrave; c&aacute; t&iacute;nh. Mỗi m&agrave;u sắc mang đến một phong c&aacute;ch ri&ecirc;ng v&agrave; cho ph&eacute;p người d&ugrave;ng lựa chọn theo sở th&iacute;ch c&aacute; nh&acirc;n v&agrave; phong c&aacute;ch của m&igrave;nh.</li>\r\n	<li>Do m&agrave;n h&igrave;nh v&agrave; điều kiện &aacute;nh s&aacute;ng kh&aacute;c nhau, m&agrave;u sắc thực tế của sản phẩm c&oacute; thể ch&ecirc;nh lệch khoảng 3-5%.</li>\r\n</ul>\r\n\r\n<h2>Size gi&agrave;y</h2>\r\n\r\n<p>Gi&agrave;y thể thao nam Hunter Core được thiết kế theo size chuẩn từ 39 - 45 đa dạng sự lựa chọn, gọn g&agrave;ng v&agrave; &ocirc;m ch&acirc;n, ph&ugrave; hợp cho việc tập luyện thể thao hay diện xuống phố.</p>\r\n\r\n<h2>T&iacute;nh năng v&agrave; lợi &iacute;ch nổi bật</h2>\r\n\r\n<ul>\r\n	<li>Gi&agrave;y thể thao nam Biti&#39;s Hunter Core c&oacute; trọng lượng nhẹ vừa phải, ph&ugrave; hợp với mọi hoạt động đi lại hoặc thể thao nhưng cũng đảm bảo t&iacute;nh mềm dẻo, che chở cho b&agrave;n ch&acirc;n.</li>\r\n	<li>Với thiết kế đơn giản v&agrave; trang nh&atilde;, gi&agrave;y Biti&#39;s Hunter Core dễ d&agrave;ng phối hợp với nhiều trang phục kh&aacute;c nhau. Từ trang phục thể thao đến trang phục h&agrave;ng ng&agrave;y, gi&agrave;y n&agrave;y c&oacute; thể l&agrave;m tăng th&ecirc;m sự phong c&aacute;ch cho bất kỳ trang phục n&agrave;o.</li>\r\n	<li>Gi&agrave;y Biti&#39;s Hunter Core đi k&egrave;m với d&acirc;y buộc, gi&uacute;p bạn điều chỉnh v&agrave; cố định gi&agrave;y theo &yacute; muốn.&nbsp;</li>\r\n	<li>Thiết kế của gi&agrave;y cho ph&eacute;p ch&acirc;n c&oacute; sự linh hoạt v&agrave; dễ d&agrave;ng thực hiện c&aacute;c động t&aacute;c chuyển động. Điều n&agrave;y rất hữu &iacute;ch trong c&aacute;c hoạt động thể thao hoặc khi bạn cần sự linh hoạt trong c&aacute;c hoạt động h&agrave;ng ng&agrave;y.</li>\r\n</ul>\r\n\r\n<h2>Độ bền v&agrave; bảo h&agrave;nh</h2>\r\n\r\n<ul>\r\n	<li>Gi&agrave;y thể thao nam Hunter Core kh&ocirc;ng chỉ c&oacute; kiểu d&aacute;ng đẹp m&agrave; c&ograve;n mang lại chất lượng tốt. Qu&aacute; tr&igrave;nh sản xuất của gi&agrave;y được tiến h&agrave;nh một c&aacute;ch cẩn thận, đảm bảo từng chi tiết được ho&agrave;n thiện ch&iacute;nh x&aacute;c. C&aacute;c quy tr&igrave;nh kiểm tra cũng được thực hiện một c&aacute;ch kỹ lưỡng bằng m&aacute;y m&oacute;c hiện đại để đảm bảo chất lượng trước khi sản phẩm được đưa đến tay kh&aacute;ch h&agrave;ng.</li>\r\n	<li>Sản phẩm n&agrave;y được bảo h&agrave;nh trong v&ograve;ng 6 th&aacute;ng, cho kh&aacute;ch h&agrave;ng sự y&ecirc;n t&acirc;m v&agrave; tin tưởng v&agrave;o chất lượng. Đặc biệt, lỗi bong keo v&agrave; đứt chỉ sẽ được bảo h&agrave;nh trọn đời.</li>\r\n</ul>\r\n\r\n<h2>Bảo quản gi&agrave;y bền l&acirc;u</h2>\r\n\r\n<p>Để bảo quản gi&agrave;y thể thao nam Hunter Core v&agrave; giữ ch&uacute;ng trong t&igrave;nh trạng tốt nhất, bạn c&oacute; thể tu&acirc;n thủ c&aacute;c hướng dẫn sau đ&acirc;y:</p>\r\n\r\n<ul>\r\n	<li>Sau mỗi lần sử dụng, h&atilde;y lau ch&ugrave;i gi&agrave;y bằng một c&aacute;i khăn mềm v&agrave; ướt để loại bỏ bụi bẩn v&agrave; vết bẩn tr&ecirc;n bề mặt.&nbsp;</li>\r\n	<li>Để giữ gi&agrave;y lu&ocirc;n thơm m&aacute;t, h&atilde;y để gi&agrave;y được tho&aacute;ng kh&iacute; sau khi sử dụng. Bạn c&oacute; thể sử dụng c&aacute;c loại hỗn hợp khử m&ugrave;i hoặc b&oacute;ng gi&agrave;y chuy&ecirc;n dụng để loại bỏ m&ugrave;i h&ocirc;i kh&ocirc;ng mong muốn.</li>\r\n	<li>Khi kh&ocirc;ng sử dụng, h&atilde;y lưu trữ gi&agrave;y ở một nơi tho&aacute;ng m&aacute;t, tr&aacute;nh &aacute;nh nắng trực tiếp v&agrave; độ ẩm cao.</li>\r\n	<li>H&atilde;y tr&aacute;nh tiếp x&uacute;c gi&agrave;y với c&aacute;c chất lỏng, h&oacute;a chất hoặc dung dịch c&oacute; thể g&acirc;y hư hỏng hoặc thay đổi m&agrave;u sắc của gi&agrave;y.</li>\r\n	<li>Để giữ cho gi&agrave;y giữ được h&igrave;nh d&aacute;ng ban đầu, h&atilde;y sử dụng c&aacute;c hỗ trợ gi&agrave;y, như g&agrave;i gi&agrave;y hoặc t&uacute;i nhồi, khi kh&ocirc;ng sử dụng.&nbsp;</li>\r\n	<li>Kiểm tra v&agrave; chăm s&oacute;c đế gi&agrave;y thường xuy&ecirc;n. Nếu thấy c&oacute; m&agrave;i m&ograve;n hoặc hư hỏng, h&atilde;y thay đế mới để đảm bảo an to&agrave;n v&agrave; sự thoải m&aacute;i khi sử dụng.</li>\r\n</ul>', 10, 13, '2023-07-04 08:31:25', '2023-07-04 08:31:25'),
(23, 'Giày Chạy Bộ Nam Biti\'s Hunter Running DSMH10000', 'http://127.0.0.1:8000/uploads/1688484770-image.webp', 926000, '<h2>Đế gi&agrave;y</h2>\r\n\r\n<p>Biti&#39;s Hunter Running DSMH10000 sử dụng bộ đế Lite Bounce với c&aacute;c đặc điểm:</p>\r\n\r\n<h3>Đế ngo&agrave;i:</h3>\r\n\r\n<ul>\r\n	<li>Đế ngo&agrave;i được tạo bằng lớp cao su chống trơn trượt&nbsp; c&oacute; độ b&aacute;m cao, gi&uacute;p cho người d&ugrave;ng tăng khả năng b&aacute;m chặt tr&ecirc;n mọi địa h&igrave;nh.</li>\r\n</ul>\r\n\r\n<h3>Đế trong (l&oacute;t gi&agrave;y):&nbsp;</h3>\r\n\r\n<ul>\r\n	<li>Đế l&oacute;t 2 lớp kết hợp Ortholite v&agrave; Eva, rất vừa vặn với cấu tr&uacute;c l&ograve;ng b&agrave;n ch&acirc;n đặc trưng của người Việt, c&ugrave;ng độ &ecirc;m được t&iacute;nh to&aacute;n kỹ lưỡng nhất.</li>\r\n</ul>\r\n\r\n<h3>Đế giữa:</h3>\r\n\r\n<ul>\r\n	<li>Sử dụng c&ocirc;ng nghệ đế hai lớp &ndash; tiếp đất &ecirc;m, phản hồi lực mạnh mẽ với độ đ&agrave;n hồi vượt trội &gt;50%, cho đường chạy nhẹ như bay.</li>\r\n</ul>\r\n\r\n<h2>Th&acirc;n tr&ecirc;n gi&agrave;y</h2>\r\n\r\n<ul>\r\n	<li>Chất liệu:&nbsp;Sử dụng vải dệt Jacquard mềm mại, &ocirc;m trọn theo sự chuyển động của b&agrave;n ch&acirc;n v&agrave; cấu tạo thiết kế tho&aacute;ng kh&iacute; tối đa đem đến một sự th&ocirc;ng tho&aacute;ng.</li>\r\n	<li>Lưỡi g&agrave;: Được may d&iacute;nh liền với th&acirc;n gi&agrave;y, chất liệu co gi&atilde;n tốt n&ecirc;n bạn c&oacute; thể dễ d&agrave;ng mang v&agrave;o, th&aacute;o ra m&agrave; kh&ocirc;ng cần phải th&aacute;o d&acirc;y.</li>\r\n	<li>Thiết kế: Biti&#39;s Hunter Running &nbsp;DSMH10000 c&oacute; thiết kế hiện đại, phong c&aacute;ch trẻ trung,</li>\r\n</ul>\r\n\r\n<h2>M&agrave;u sắc</h2>\r\n\r\n<ul>\r\n	<li>C&oacute; 4 m&agrave;u &nbsp;Orange &ndash; Grey &ndash; Electric Blue &ndash; Neon Green quen thuộc, dễ phối đồ từ thể thao tới trang phục h&agrave;ng ng&agrave;y.</li>\r\n	<li>Do m&agrave;n h&igrave;nh v&agrave; điều kiện &aacute;nh s&aacute;ng kh&aacute;c nhau, m&agrave;u sắc thực tế của sản phẩm c&oacute; thể ch&ecirc;nh lệch khoảng 3-5%.&nbsp;</li>\r\n</ul>\r\n\r\n<h2>Size gi&agrave;y</h2>\r\n\r\n<ul>\r\n	<li>Biti&#39;s Hunter Running DSMH10000 c&oacute; size chuẩn từ 39-45 được thiết kế để vừa vặn v&agrave; &ocirc;m s&aacute;t ch&acirc;n, tạo cảm gi&aacute;c thoải m&aacute;i khi sử dụng h&agrave;ng ng&agrave;y.</li>\r\n</ul>\r\n\r\n<h2>Độ bền v&agrave; bảo h&agrave;nh</h2>\r\n\r\n<p>Để đảm bảo chất lượng, Biti&#39;s Hunter Running DSMH10000 đ&atilde; được kiểm tra kỹ lưỡng&nbsp; bằng m&aacute;y m&oacute;c hiện đại.</p>', 10, 13, '2023-07-04 08:32:50', '2023-07-04 08:32:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `role_id` int(11) NOT NULL DEFAULT 0 COMMENT '0 is client, 1 is admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `phone`, `address`, `role_id`) VALUES
(4, 'admin', 'anhnt683@gmail.com', NULL, '$2y$10$1Tcgx.IA5QRi5xiaJdHkbeRaiAK47D1WCUqFst7EM8YfJU3NN9.uK', NULL, '2023-06-23 09:43:32', '2023-06-30 07:36:06', '0988346803', 'ha noi', 1),
(17, 'Nguyễn Tuấn Anh', 'anhntph277731@fpt.edu.vn', NULL, '$2y$10$FfaU3YwFbeM46AqLB/TFOu/iBoGwjiLOAancb6Kq4MQvNfQYHS0Vi', NULL, '2023-06-27 00:46:38', '2023-06-27 00:46:38', '0988346803', 'Ninh Bình', 2),
(18, 'Nguyễn Tuấn Anh', 'anhntph27712373@gmail.com', NULL, '$2y$10$WDKKQ3spfg8S.8lKbtaaEOE4CaZVeruxfXDFb29qiGejk8XsZfhZC', NULL, '2023-06-27 01:44:31', '2023-06-27 01:44:31', '0988346803', 'Ninh Bình', 0),
(19, 'Nguyễn Tuấn Anh', 'anhntph27773123@gmail.com', NULL, '$2y$10$lZ.wbyVpVoSEQ4HIIS9Rbu922/Orq.0V01iuH3TyxdCRCFF6831cW', NULL, '2023-06-27 01:48:48', '2023-06-30 07:06:02', '0988346803', 'Ninh Bình', 2),
(22, 'Nguyễn Tuấn Anh 1', 'anhnt6832222@gmail.com', NULL, '$2y$10$lrGt6gL0BgGifaV1CmK7fuzxceHuZGfvEO/6xx8Zg3oAi6gh.mVvC', NULL, '2023-06-28 11:00:59', '2023-06-28 11:02:29', '123123', 'Ninh Bình', 1),
(23, 'Nguyễn Tuấn Anh', 'anhntph27773@gmail.com', NULL, '$2y$10$L3KVMp5bUqiwMIh06rX4PeNa2S0OziohAadkHYjJV7RktQh3J0zmW', NULL, '2023-06-29 02:43:19', '2023-06-30 18:22:37', '0988346803', 'Ninh Bình', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
