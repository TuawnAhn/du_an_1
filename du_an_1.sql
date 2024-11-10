-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 10, 2024 at 12:09 PM
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
-- Database: `du_an_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int NOT NULL,
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `hinh_anh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `lien_ket` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `trang_thai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `hinh_anh`, `lien_ket`, `trang_thai`) VALUES
(1, 'Dây chuyền đẹp', 'https://lili.vn/wp-content/uploads/2022/09/Day-chuyen-doi-bac-dinh-da-CZ-hinh-ca-voi-va-buom-Brenna-LILI_123985_4.jpg', 'lili.vn', 2),
(15, 'áda', 'https://lili.vn/wp-content/uploads/2022/09/Day-chuyen-doi-bac-dinh-da-CZ-hinh-ca-voi-va-buom-Brenna-LILI_123985_4.jpg', 'sd', 1),
(18, 'thht', 'https://lili.vn/wp-content/uploads/2022/09/Day-chuyen-doi-bac-dinh-da-CZ-hinh-ca-voi-va-buom-Brenna-LILI_123985_4.jpg', 'đâsđấ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `danh_mucs`
--

CREATE TABLE `danh_mucs` (
  `id` int NOT NULL,
  `ten_danh_muc` varchar(255) NOT NULL,
  `trang_thai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `danh_mucs`
--

INSERT INTO `danh_mucs` (`id`, `ten_danh_muc`, `trang_thai`) VALUES
(5, 'Vòng-Lắc', 1),
(6, 'Nhẫn', 1),
(7, 'Dây chuyền', 1),
(8, 'Bông taiiiiiiiiiii', 2),
(12, 'Bông tai', 1);

-- --------------------------------------------------------

--
-- Table structure for table `don_hangs`
--

CREATE TABLE `don_hangs` (
  `id` int NOT NULL,
  `trang_thai_don_hang` int NOT NULL COMMENT '1="''Chờ xác nhận'',2= ''Đã xác nhận''',
  `trang_thai_thanh_toan` int NOT NULL COMMENT '1=''Đã thanh toán'',2=''Chưa thanh toán''',
  `ngay_tao` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `trang_thai` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `don_hangs`
--

INSERT INTO `don_hangs` (`id`, `trang_thai_don_hang`, `trang_thai_thanh_toan`, `ngay_tao`, `trang_thai`) VALUES
(1, 1, 2, '2024-11-11 17:00:00', 1),
(2, 1, 2, '2024-11-22 17:00:00', 2),
(3, 1, 2, '2024-11-13 17:00:00', 1),
(4, 1, 2, '2024-11-06 17:00:00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `khuyen_mais`
--

CREATE TABLE `khuyen_mais` (
  `id` int NOT NULL,
  `ten_khuyen_mai` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `mo_ta` text,
  `giam_gia` decimal(6,2) DEFAULT NULL,
  `ngay_bat_dau` date DEFAULT NULL,
  `ngay_ket_thuc` date DEFAULT NULL,
  `trang_thai` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `khuyen_mais`
--

INSERT INTO `khuyen_mais` (`id`, `ten_khuyen_mai`, `mo_ta`, `giam_gia`, `ngay_bat_dau`, `ngay_ket_thuc`, `trang_thai`) VALUES
(1, 'Giảm giá mùa hè', 'Giảm giá 20% cho tất cả sản phẩm mùa hè', '20.00', '2024-06-01', '2024-08-31', 1),
(2, 'Khuyến mãi Giáng Sinh', 'Giảm giá đặc biệt mùa Giáng Sinh', '25.00', '2024-12-01', '2024-12-25', 1),
(3, 'Black Friday', 'Giảm giá lớn nhân dịp Black Friday', '50.00', '2024-11-30', '2024-11-29', 2),
(4, 'Tết Nguyên Đán', 'Khuyến mãi đặc biệt mừng Tết Nguyên Đán', '30.00', '2025-01-10', '2025-02-10', 1),
(5, 'Giảm giá 8/8', 'Giảm ngay 50.000 cho đơn từ 200.000 khi mua sắm tại các danh mục Nhẫn Đính Kim Cương', '50.00', '2024-11-01', '2024-11-10', 1),
(7, 'Giảm giá cuối năm', 'Khuyến mãi giảm giá lên đến 70% vào dịp cuối năm', '70.00', '2024-11-15', '2024-11-22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nguoi_dungs`
--

CREATE TABLE `nguoi_dungs` (
  `id` int NOT NULL,
  `ho_ten` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(255) NOT NULL,
  `mat_khau` varchar(125) NOT NULL,
  `so_dien_thoai` varchar(12) NOT NULL,
  `dia_chi` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `nguoi_dungs`
--

INSERT INTO `nguoi_dungs` (`id`, `ho_ten`, `email`, `mat_khau`, `so_dien_thoai`, `dia_chi`) VALUES
(1, 'Đàm Đức Thịnh', 'thinhdepzaivl@gmail.com', 'hangu', '0985671234', 'Hà Nội city '),
(3, 'thinhj', 'thinhddph51501@gmail.com', '12435', '07865746', 'Hà Nội'),
(4, 'dsfsdfdsfsd', 'anhntph51526@gmail.com', 'fsfsdfsf', '7827528', 'Hà nội city');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lienhe`
--

CREATE TABLE `tbl_lienhe` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `so_dien_thoai` int NOT NULL,
  `noi_dung` varchar(255) NOT NULL,
  `ngay_gio` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_lienhe`
--

INSERT INTO `tbl_lienhe` (`id`, `name`, `so_dien_thoai`, `noi_dung`, `ngay_gio`) VALUES
(1, 'chiennnll', 338506483, 'dfvgfbdsx', 2),
(2, 'thinhnguchi1444', 338506458, 'rfsgdhbazx', 1),
(6, 'dấ', 53543, 'đấ', 1),
(7, 'dsfsfds', 242423, 'fsd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tin_tucs`
--

CREATE TABLE `tin_tucs` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `img` text NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tin_tucs`
--

INSERT INTO `tin_tucs` (`id`, `title`, `content`, `img`, `date`) VALUES
(2, '11 Cách Chọn Mua Trang Sức Làm Quà Tặng Phù Hợp Và Ý Nghĩa Cho Nữ', 'Sự lựa chọn món quà trang sức đúng đắn có thể mang đến nhiều ý nghĩa tuyệt ạn yêu quý.', 'https://lili.vn/wp-content/uploads/2022/07/Nhan-bac-nu-dinh-kim-cuong-Moissanite-Aidan-LILI_335168_5.jpg', '2024-11-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `danh_mucs`
--
ALTER TABLE `danh_mucs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `don_hangs`
--
ALTER TABLE `don_hangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `khuyen_mais`
--
ALTER TABLE `khuyen_mais`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nguoi_dungs`
--
ALTER TABLE `nguoi_dungs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_lienhe`
--
ALTER TABLE `tbl_lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tin_tucs`
--
ALTER TABLE `tin_tucs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `danh_mucs`
--
ALTER TABLE `danh_mucs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `don_hangs`
--
ALTER TABLE `don_hangs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `khuyen_mais`
--
ALTER TABLE `khuyen_mais`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `nguoi_dungs`
--
ALTER TABLE `nguoi_dungs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_lienhe`
--
ALTER TABLE `tbl_lienhe`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tin_tucs`
--
ALTER TABLE `tin_tucs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
