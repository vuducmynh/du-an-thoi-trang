-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 17, 2023 at 02:15 PM
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
-- Database: `du-an-thoi-trang`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int NOT NULL,
  `noidung` text NOT NULL,
  `thoigian` datetime NOT NULL,
  `manguoidung` int NOT NULL,
  `masanpham` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `thoigian`, `manguoidung`, `masanpham`) VALUES
(1, 'À thế sản phẩm này nhà giàu mới mua được, và t nhà giàu :)', '2023-11-17 10:30:00', 1, 1),
(2, 'Rẻ vậy', '2023-11-17 11:45:00', 2, 2),
(3, 'Sắp có khuyến mại chưa vậy Shop', '2023-11-17 12:15:00', 3, 3),
(4, 'hi', '2023-11-17 13:30:00', 4, 4),
(5, 'Khong mua dau', '2023-11-17 14:45:00', 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `id` int NOT NULL,
  `madon` int DEFAULT NULL,
  `masanpham` int DEFAULT NULL,
  `soluong` int NOT NULL,
  `donggia` double NOT NULL,
  `thanhtien` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`id`, `madon`, `masanpham`, `soluong`, `donggia`, `thanhtien`) VALUES
(1, 1, 1, 2, 100000, 200000),
(2, 1, 2, 3, 50000, 150000),
(3, 2, 3, 1, 300000, 300000),
(4, 3, 4, 2, 200000, 400000),
(5, 4, 5, 4, 50000, 200000),
(6, 5, 6, 3, 200000, 600000),
(7, 6, 7, 2, 350000, 700000),
(8, 7, 8, 4, 200000, 800000),
(9, 8, 9, 5, 180000, 900000),
(10, 9, 10, 10, 100000, 1000000);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int NOT NULL,
  `tendanhmuc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `trangthai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `tendanhmuc`, `trangthai`) VALUES
(1, 'Áo sơ mi', 1),
(2, 'Áo thũng', 1),
(3, 'Áo khoác', 1),
(4, 'Áo len', 1),
(5, 'Áo dài', 1),
(6, 'Áo vest', 1),
(7, 'Áo phông', 1);

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `id` int NOT NULL,
  `manguoidung` int DEFAULT NULL,
  `tongtien` double NOT NULL,
  `ngaydathang` datetime NOT NULL,
  `trangthai` tinyint(1) NOT NULL,
  `ghichu` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`id`, `manguoidung`, `tongtien`, `ngaydathang`, `trangthai`, `ghichu`) VALUES
(1, 1, 500000, '2023-11-17 19:20:00', 0, 'Giao hàng nhanh'),
(2, 2, 300000, '2023-11-17 19:25:00', 0, 'Giao hàng tiết kiệm'),
(3, 3, 400000, '2023-11-17 19:30:00', 0, 'Giao hàng nhanh'),
(4, 4, 200000, '2023-11-17 19:35:00', 0, 'Giao hàng tiết kiệm'),
(5, 5, 600000, '2023-11-17 19:40:00', 0, 'Giao hàng nhanh'),
(6, 6, 700000, '2023-11-17 19:45:00', 0, 'Giao hàng nhanh'),
(7, 7, 800000, '2023-11-17 19:50:00', 0, 'Giao hàng nhanh'),
(8, 8, 900000, '2023-11-17 19:55:00', 0, 'Giao hàng nhanh'),
(9, 9, 1000000, '2023-11-17 20:00:00', 0, 'Giao hàng nhanh'),
(10, 10, 1100000, '2023-11-17 20:05:00', 0, 'Giao hàng nhanh');

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id` int NOT NULL,
  `hoten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `matkhau` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sodienthoai` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `diachi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `hinh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gioitinh` tinyint(1) NOT NULL,
  `capbac` tinyint(1) NOT NULL,
  `trangthai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`id`, `hoten`, `email`, `matkhau`, `sodienthoai`, `diachi`, `hinh`, `gioitinh`, `capbac`, `trangthai`) VALUES
(1, 'admin', 'admin@gmail.com', '123', '0987654321', 'Số 1, đường A, quận B, Hà Nội', 'hinh1.jpg', 1, 1, 1),
(2, 'Trần Thị B', 'tranb@gmail.com', 'abcdef', '0912345678', 'Số 2, đường B, quận C, Hà Nội', 'hinh2.jpg', 0, 0, 1),
(3, 'Lê Văn C', 'levanc@gmail.com', 'qwerty', '0965432198', 'Số 3, đường C, quận D, Hà Nội', 'hinh3.jpg', 1, 0, 1),
(4, 'Phạm Thị D', 'phamd@gmail.com', 'asdfgh', '0943216785', 'Số 4, đường D, quận E, Hà Nội', 'hinh4.jpg', 0, 0, 1),
(5, 'Hoàng Văn E', 'hoange@gmail.com', 'zxcvbn', '0921678543', 'Số 5, đường E, quận F, Hà Nội', 'hinh5.jpg', 1, 0, 1),
(6, 'Đỗ Thị F', 'dof@gmail.com', 'poiuyt', '0978564321', 'Số 6, đường F, quận G, Hà Nội', 'hinh6.jpg', 0, 0, 1),
(7, 'Vũ Văn G', 'vug@gmail.com', 'mnbvcx', '0954321876', 'Số 7, đường G, quận H, Hà Nội', 'hinh7.jpg', 1, 0, 1),
(8, 'Ngô Thị H', 'ngoh@gmail.com', 'lkjhgf', '0932187654', 'Số 8, đường H, quận I, Hà Nội', 'hinh8.jpg', 0, 0, 1),
(9, 'Trịnh Văn I', 'trinhi@gmail.com', 'fdghjk', '0987651234', 'Số 9, đường I, quận J, Hà Nội', 'hinh9.jpg', 1, 0, 1),
(10, 'Lý Thị J', 'lyj@gmail.com', 'admin123', '0912345987', 'Số 10, đường J, quận K, Hà Nội', 'hinh10.jpg', 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int NOT NULL,
  `tensanpham` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `hinh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `thuonghieu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kichco` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `soluong` int NOT NULL,
  `gia` double NOT NULL,
  `mota` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `madanhmuc` int DEFAULT NULL,
  `trangthai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `tensanpham`, `hinh`, `thuonghieu`, `kichco`, `soluong`, `gia`, `mota`, `madanhmuc`, `trangthai`) VALUES
(1, 'Áo sơ mi kẻ đỏ', 'hinh11.jpg', 'Zara', 'M', 10, 250000, 'Áo sơ mi nam màu trắng, có kẻ đỏ, chất liệu cotton, kiểu dáng trẻ trung, phù hợp với nhiều dịp', 1, 1),
(2, 'Áo sơ mi bar', 'hinh12.jpg', 'Levi\'s', 'S', 15, 350000, 'Áo sơ mi nam màu xanh, có họa tiết bar, chất liệu cotton, kiểu dáng thời trang, phù hợp với nhiều phong cách', 1, 1),
(3, 'Áo thũng đen', 'hinh13.jpg', 'Nike', 'XL', 20, 450000, 'Áo thũng nam màu đen, chất liệu thũng, kiểu dáng năng động, phù hợp với nhiều hoạt động', 2, 1),
(4, 'Áo sơ mi thũng trắng', 'hinh14.jpg', 'Dior', 'M', 5, 550000, 'Áo sơ mi nam màu trắng, chất liệu thũng, kiểu dáng lịch sự, phù hợp với nhiều dịp', 1, 1),
(5, 'Áo sơ mi kẻ xanh', 'hinh15.jpg', 'Adidas', 'Free size', 25, 150000, 'Áo sơ mi nam màu xanh, có kẻ xanh, chất liệu cotton, kiểu dáng trẻ trung, phù hợp với nhiều dịp', 1, 1),
(6, 'Áo khoác nữ', 'hinh16.jpg', 'H&M', 'L', 8, 650000, 'Áo khoác nữ màu đỏ, chất liệu len, kiểu dáng ấm áp, phù hợp với mùa đông', 3, 1),
(7, 'Áo len nam', 'hinh17.jpg', 'Uniqlo', 'M', 12, 200000, 'Áo len nam màu xám, chất liệu len, kiểu dáng ấm áp, phù hợp với mùa đông', 4, 1),
(8, 'Áo dài nữ', 'hinh18.jpg', 'Gucci', 'S', 6, 750000, 'Áo dài nữ màu đen, chất liệu lụa, kiểu dáng truyền thống, phù hợp với các dịp lễ hội', 5, 1),
(9, 'Áo vest nam', 'hinh19.jpg', 'Louis Vuitton', 'Medium', 4, 850000, 'Áo vest nam màu nâu, chất liệu da, kiểu dáng sang trọng, phù hợp với các buổi tiệc', 6, 1),
(10, 'Áo phông nữ', 'hinh20.jpg', 'Ray-Ban', 'Free size', 18, 250000, 'Áo phông nữ màu hồng, chất liệu cotton, kiểu dáng thoải mái, phù hợp với mùa hè', 7, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `manguoidung` (`manguoidung`),
  ADD KEY `masanpham` (`masanpham`);

--
-- Indexes for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `masanpham` (`masanpham`),
  ADD KEY `madon` (`madon`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `manguoidung` (`manguoidung`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `madanhmuc` (`madanhmuc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`manguoidung`) REFERENCES `nguoidung` (`id`),
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`masanpham`) REFERENCES `sanpham` (`id`);

--
-- Constraints for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`madon`) REFERENCES `donhang` (`id`),
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`masanpham`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `chitietdonhang_ibfk_3` FOREIGN KEY (`madon`) REFERENCES `donhang` (`id`);

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`manguoidung`) REFERENCES `nguoidung` (`id`),
  ADD CONSTRAINT `donhang_ibfk_2` FOREIGN KEY (`manguoidung`) REFERENCES `nguoidung` (`id`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`madanhmuc`) REFERENCES `danhmuc` (`id`),
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`madanhmuc`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
