-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 12, 2023 lúc 11:18 AM
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
-- Cơ sở dữ liệu: `nienluannganh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(43, 'Áo sơ mi'),
(44, 'Áo phông'),
(45, 'Quần jeans'),
(46, 'Áo vest'),
(47, 'Túi xách');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id` int(11) NOT NULL,
  `idtk` int(255) NOT NULL,
  `tentk` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `sdt` varchar(255) NOT NULL,
  `pttt` tinyint(4) NOT NULL,
  `ngaydathang` varchar(255) NOT NULL,
  `tongdonhang` int(11) NOT NULL,
  `trangthai` varchar(255) NOT NULL DEFAULT 'đơn hàng mới'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id`, `idtk`, `tentk`, `diachi`, `sdt`, `pttt`, `ngaydathang`, `tongdonhang`, `trangthai`) VALUES
(113, 28, 'nguyên', 'cần thơ', '399999999', 1, '11:03:09am 12/02/2023', 200000, 'đơn hàng mới');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `id` int(11) NOT NULL,
  `idtk` int(11) NOT NULL,
  `idsp` int(11) NOT NULL,
  `hinh` varchar(255) NOT NULL,
  `tensp` varchar(255) NOT NULL,
  `gia` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `size` varchar(255) NOT NULL,
  `iddh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`id`, `idtk`, `idsp`, `hinh`, `tensp`, `gia`, `soluong`, `thanhtien`, `size`, `iddh`) VALUES
(125, 28, 56, 'ao4.jpg', 'Áo B23', 100000, 2, 200000, 'S', 113);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `id` int(11) NOT NULL,
  `tennv` varchar(255) NOT NULL,
  `matkhaunv` varchar(255) NOT NULL,
  `diachinv` text NOT NULL,
  `sdtnv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`id`, `tennv`, `matkhaunv`, `diachinv`, `sdtnv`) VALUES
(2, 'admin', 'admin', 'can tho', 123456789),
(3, 'admin2', '2', '', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL DEFAULT 0,
  `img` varchar(255) DEFAULT NULL,
  `mota` text DEFAULT NULL,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `mota`, `iddm`) VALUES
(53, 'Áo 01', 500000, 'ao1.jpg', 'Chất liệu: vải tổng hợp cao cấp\r\nKiểu dáng: đầm thiết kế dáng chữ A dài qua gối, tone màu trắng trơn, tay bồng\r\nPhù hợp: đi làm, sự kiện, hay đi dạo phố, tạo vẻ trẻ trung nữ tính cho người mặc.\r\nSản phẩm thuộc dòng sản phẩm: NEM NEW\r\nThông tin người mẫu: mặc sản phẩm size 2', 46),
(54, 'Áo A43', 200000, 'ao2.jpg', 'Chất liệu: vải tổng hợp cao cấp\r\nKiểu dáng: đầm thiết kế dáng chữ A dài qua gối, tone màu trắng trơn, tay bồng\r\nPhù hợp: đi làm, sự kiện, hay đi dạo phố, tạo vẻ trẻ trung nữ tính cho người mặc.\r\nSản phẩm thuộc dòng sản phẩm: NEM NEW\r\nThông tin người mẫu: mặc sản phẩm size 2', 44),
(55, 'Áo A45', 500000, 'ao3.jpg', 'Chất liệu: vải tổng hợp cao cấp\r\nKiểu dáng: đầm thiết kế dáng chữ A dài qua gối, tone màu trắng trơn, tay bồng\r\nPhù hợp: đi làm, sự kiện, hay đi dạo phố, tạo vẻ trẻ trung nữ tính cho người mặc.\r\nSản phẩm thuộc dòng sản phẩm: NEM NEW\r\nThông tin người mẫu: mặc sản phẩm size 2', 44),
(56, 'Áo B23', 100000, 'ao4.jpg', 'Chất liệu: vải tổng hợp cao cấp\r\nKiểu dáng: đầm thiết kế dáng chữ A dài qua gối, tone màu trắng trơn, tay bồng\r\nPhù hợp: đi làm, sự kiện, hay đi dạo phố, tạo vẻ trẻ trung nữ tính cho người mặc.\r\nSản phẩm thuộc dòng sản phẩm: NEM NEW\r\nThông tin người mẫu: mặc sản phẩm size 2', 44),
(57, 'Quần D4', 500000, 'quan1.jpg', 'Chất liệu: vải tổng hợp cao cấp\r\nKiểu dáng: đầm thiết kế dáng chữ A dài qua gối, tone màu trắng trơn, tay bồng\r\nPhù hợp: đi làm, sự kiện, hay đi dạo phố, tạo vẻ trẻ trung nữ tính cho người mặc.\r\nSản phẩm thuộc dòng sản phẩm: NEM NEW\r\nThông tin người mẫu: mặc sản phẩm size 2', 45),
(58, 'Quần D6', 200000, 'quan2.jpg', 'Chất liệu: vải tổng hợp cao cấp\r\nKiểu dáng: đầm thiết kế dáng chữ A dài qua gối, tone màu trắng trơn, tay bồng\r\nPhù hợp: đi làm, sự kiện, hay đi dạo phố, tạo vẻ trẻ trung nữ tính cho người mặc.\r\nSản phẩm thuộc dòng sản phẩm: NEW NEW\r\nThông tin người mẫu: mặc sản phẩm size 2', 45);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `tentk` varchar(255) NOT NULL,
  `matkhau` varchar(255) NOT NULL,
  `sdt` int(11) NOT NULL,
  `diachi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `tentk`, `matkhau`, `sdt`, `diachi`) VALUES
(28, 'nguyên', '1', 399999999, 'cần thơ'),
(30, 'nguyên 2', '2', 123456789, 'Tiền Giang'),
(31, 'nguyen 3', '3', 1111222233, 'cần thơ'),
(32, 'nguyenB180', '1', 123456789, 'cần thơ'),
(33, 'nguyên', '1', 123456789, 'Cần Thơ');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_iddm_sanpham` (`iddm`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_iddm_sanpham` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
