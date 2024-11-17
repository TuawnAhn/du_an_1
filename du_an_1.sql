-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 17, 2024 at 12:46 AM
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
-- Table structure for table `chi_tiet_don_hangs`
--

CREATE TABLE `chi_tiet_don_hangs` (
  `id` int NOT NULL,
  `don_hang_id` int NOT NULL,
  `san_pham_id` int NOT NULL,
  `so_luong` int NOT NULL,
  `don_gia` decimal(10,2) NOT NULL,
  `thanh_tien` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `chi_tiet_don_hangs`
--

INSERT INTO `chi_tiet_don_hangs` (`id`, `don_hang_id`, `san_pham_id`, `so_luong`, `don_gia`, `thanh_tien`) VALUES
(1, 4, 14, 10, '10000.00', '100000.00'),
(2, 5, 8, 1, '10000.00', '10000.00'),
(3, 6, 15, 10, '120000.00', '1200000.00');

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_san_phams`
--

CREATE TABLE `chi_tiet_san_phams` (
  `id` int NOT NULL,
  `ten` varchar(255) NOT NULL,
  `ma_san_pham` varchar(11) NOT NULL,
  `tinh_trang` int NOT NULL,
  `so_luong_kho` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
(1, 'Vòng-Lắc', 1),
(2, 'Nhẫn', 1),
(3, 'Dây chuyền', 1),
(4, 'Bông taiiiiiiiiiii', 2),
(5, 'Bông tai', 1);

-- --------------------------------------------------------

--
-- Table structure for table `don_hangs`
--

CREATE TABLE `don_hangs` (
  `id` int NOT NULL,
  `ma_don_hang` varchar(50) NOT NULL,
  `nguoi_dung_id` int NOT NULL,
  `ho_ten_nguoi_nhan` varchar(100) NOT NULL,
  `sdt_nguoi_nhan` varchar(15) NOT NULL,
  `email_nguoi_nhan` varchar(100) DEFAULT NULL,
  `dia_chi_nguoi_nhan` text NOT NULL,
  `ngay_dat_hang` datetime NOT NULL,
  `phuong_thuc_thanh_toan_id` int DEFAULT NULL,
  `trang_thai_don_hang_id` int DEFAULT NULL,
  `trang_thai` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `don_hangs`
--

INSERT INTO `don_hangs` (`id`, `ma_don_hang`, `nguoi_dung_id`, `ho_ten_nguoi_nhan`, `sdt_nguoi_nhan`, `email_nguoi_nhan`, `dia_chi_nguoi_nhan`, `ngay_dat_hang`, `phuong_thuc_thanh_toan_id`, `trang_thai_don_hang_id`, `trang_thai`) VALUES
(4, 'DH001', 1, 'Nguyễn Văn A', '0123456789', 'vana@example.com', '123 Đường A, Quận B, TP.C', '2024-11-17 10:00:00', 1, 1, 1),
(5, 'DH002', 1, 'Trần Thị B', '0987654321', 'thib@example.com', '456 Đường X, Quận Y, TP.Z', '2024-11-12 11:00:00', 2, 5, 2),
(6, 'DH003', 1, 'Lê Văn C', '0932112233', NULL, '789 Đường L, Quận M, TP.N', '2024-11-12 12:00:00', 2, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hinh_anh_san_phams`
--

CREATE TABLE `hinh_anh_san_phams` (
  `id` int NOT NULL,
  `san_pham_id` int NOT NULL,
  `album_hinh_anh` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `hinh_anh_san_phams`
--

INSERT INTO `hinh_anh_san_phams` (`id`, `san_pham_id`, `album_hinh_anh`) VALUES
(1, 24, ''),
(2, 28, './uploads/1731593916279749712_530299182020173_5296107756670684214_n.jpg'),
(3, 28, './uploads/1731593916IMG-0380.jpg'),
(4, 28, './uploads/1731593916IMG-1159.jpg'),
(5, 29, './uploads/1731593926279749712_530299182020173_5296107756670684214_n.jpg'),
(6, 29, './uploads/1731593926IMG-0380.jpg'),
(7, 29, './uploads/1731593926IMG-1159.jpg'),
(8, 31, './uploads/1731662349IMG-0380.jpg'),
(9, 31, './uploads/1731662349IMG-1159.jpg'),
(10, 31, './uploads/1731662349snapedit_1728291327469.jpg');

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
-- Table structure for table `phuong_thuc_thanh_toans`
--

CREATE TABLE `phuong_thuc_thanh_toans` (
  `id` int NOT NULL,
  `phuong_thuc_thanh_toan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT '1: ''Thanh toán tiền mặt khi giao hàng'' && 2: ''Thanh toán qua ví Momo, ZaloPay,...(Tiết kiệm 20.000đ)'''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `phuong_thuc_thanh_toans`
--

INSERT INTO `phuong_thuc_thanh_toans` (`id`, `phuong_thuc_thanh_toan`) VALUES
(1, '1'),
(2, '2');

-- --------------------------------------------------------

--
-- Table structure for table `san_phams`
--

CREATE TABLE `san_phams` (
  `id` int NOT NULL,
  `ten` varchar(255) NOT NULL,
  `img` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `gia_ban` decimal(10,0) NOT NULL,
  `gia_km` decimal(10,0) NOT NULL,
  `mo_ta` text NOT NULL,
  `so_luong` int NOT NULL,
  `date` date DEFAULT NULL,
  `trang_thai` int NOT NULL,
  `gia_nhap` decimal(10,0) NOT NULL,
  `danh_muc_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `san_phams`
--

INSERT INTO `san_phams` (`id`, `ten`, `img`, `gia_ban`, `gia_km`, `mo_ta`, `so_luong`, `date`, `trang_thai`, `gia_nhap`, `danh_muc_id`) VALUES
(8, 'aaaaaaaaaaa', './uploads/1731319111_taoanhdep_cover_marketing_61385.png', '10000', '20000', 'aaa', 2, '2024-11-06', 1, '56785', 3),
(9, 'aaaaaaaaaaa', './uploads/1731318245_Screenshot 2024-09-20 165738.png', '10000', '20000', 'aaa', 150, '2024-11-06', 1, '42345', 4),
(13, 'aaaaaaaaaaa', './uploads/1731302601_th (13).jpg', '10000', '20000', 's', 2, '2024-11-10', 2, '89679', 5),
(14, 'aaaaaaaaaaa', './uploads/1731556148_64451024_1314853245331472_240455474938380288_n.jpg', '10000', '20000', 'asadá', 1, '2024-11-10', 1, '34675', 3),
(15, 'fawfasf', './uploads/1731556759_233703160_1992416827575107_6782043107933747975_n.jpg', '120000', '4234', '12323123', 12, '2024-11-10', 1, '1233333', 5),
(31, 'fawfasf', './uploads/1731662349z4659802612872_9ce6e870fd6d431e36d4a08fffb84f0a.jpg', '120000', '32000', '', 123, '2024-11-15', 1, '1413424', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tai_khoans`
--

CREATE TABLE `tai_khoans` (
  `id` int NOT NULL,
  `ho_ten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `anh_dai_dien` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ngay_sinh` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `so_dien_thoai` int NOT NULL,
  `gioi_tinh` int NOT NULL,
  `dia_chi` varchar(255) NOT NULL,
  `mat_khau` int NOT NULL,
  `chuc_vu_id` int NOT NULL,
  `trang_thai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tai_khoans`
--

INSERT INTO `tai_khoans` (`id`, `ho_ten`, `anh_dai_dien`, `ngay_sinh`, `email`, `so_dien_thoai`, `gioi_tinh`, `dia_chi`, `mat_khau`, `chuc_vu_id`, `trang_thai`) VALUES
(1, 'nguyenvanchien', '', '2024-11-07', 'chiennvph51500@gmail.com', 338506483, 1, 'so 1 ha noi', 123456, 1, '1'),
(2, 'chiennnguynvan', '', '2024-11-19', 'chienn@gmail.com', 338506458, 1, 'xp vip', 123456, 2, '2');

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

-- --------------------------------------------------------

--
-- Table structure for table `trang_thai_don_hangs`
--

CREATE TABLE `trang_thai_don_hangs` (
  `id` int NOT NULL,
  `trang_thai_don_hang` int NOT NULL COMMENT '1="''Chờ xác nhận'',2= ''Đã xác nhận''',
  `ngay_tao` date DEFAULT NULL,
  `trang_thai` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `trang_thai_don_hangs`
--

INSERT INTO `trang_thai_don_hangs` (`id`, `trang_thai_don_hang`, `ngay_tao`, `trang_thai`) VALUES
(1, 1, '2024-11-12', 1),
(2, 2, '2024-11-23', 2),
(5, 7, '2024-11-03', 1),
(6, 3, '2024-11-03', 2),
(7, 6, '2024-11-22', 2),
(8, 5, '2024-11-09', 1),
(9, 6, '2024-11-24', 2),
(10, 6, '2024-12-01', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chi_tiet_don_hangs`
--
ALTER TABLE `chi_tiet_don_hangs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `don_hang_id` (`don_hang_id`),
  ADD KEY `san_pham_id` (`san_pham_id`);

--
-- Indexes for table `chi_tiet_san_phams`
--
ALTER TABLE `chi_tiet_san_phams`
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_phuong_thuc` (`phuong_thuc_thanh_toan_id`),
  ADD KEY `FK_trang_thai` (`trang_thai_don_hang_id`),
  ADD KEY `FK_don_hangs_tai_khoans` (`nguoi_dung_id`);

--
-- Indexes for table `hinh_anh_san_phams`
--
ALTER TABLE `hinh_anh_san_phams`
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
-- Indexes for table `phuong_thuc_thanh_toans`
--
ALTER TABLE `phuong_thuc_thanh_toans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `san_phams`
--
ALTER TABLE `san_phams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tai_khoans`
--
ALTER TABLE `tai_khoans`
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
-- Indexes for table `trang_thai_don_hangs`
--
ALTER TABLE `trang_thai_don_hangs`
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
-- AUTO_INCREMENT for table `chi_tiet_don_hangs`
--
ALTER TABLE `chi_tiet_don_hangs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `chi_tiet_san_phams`
--
ALTER TABLE `chi_tiet_san_phams`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `danh_mucs`
--
ALTER TABLE `danh_mucs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `don_hangs`
--
ALTER TABLE `don_hangs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hinh_anh_san_phams`
--
ALTER TABLE `hinh_anh_san_phams`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
-- AUTO_INCREMENT for table `phuong_thuc_thanh_toans`
--
ALTER TABLE `phuong_thuc_thanh_toans`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `san_phams`
--
ALTER TABLE `san_phams`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tai_khoans`
--
ALTER TABLE `tai_khoans`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_lienhe`
--
ALTER TABLE `tbl_lienhe`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tin_tucs`
--
ALTER TABLE `tin_tucs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `trang_thai_don_hangs`
--
ALTER TABLE `trang_thai_don_hangs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chi_tiet_don_hangs`
--
ALTER TABLE `chi_tiet_don_hangs`
  ADD CONSTRAINT `chi_tiet_don_hangs_ibfk_1` FOREIGN KEY (`don_hang_id`) REFERENCES `don_hangs` (`id`),
  ADD CONSTRAINT `chi_tiet_don_hangs_ibfk_2` FOREIGN KEY (`san_pham_id`) REFERENCES `san_phams` (`id`);

--
-- Constraints for table `don_hangs`
--
ALTER TABLE `don_hangs`
  ADD CONSTRAINT `FK_phuong_thuc` FOREIGN KEY (`phuong_thuc_thanh_toan_id`) REFERENCES `phuong_thuc_thanh_toans` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_trang_thai` FOREIGN KEY (`trang_thai_don_hang_id`) REFERENCES `trang_thai_don_hangs` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
