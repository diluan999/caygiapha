-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 15, 2018 lúc 03:44 PM
-- Phiên bản máy phục vụ: 10.1.28-MariaDB
-- Phiên bản PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `caygiapha`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ghinhanketthuc`
--

CREATE TABLE `ghinhanketthuc` (
  `id` int(11) NOT NULL,
  `hovaten` varchar(50) NOT NULL,
  `ngaygiomat` datetime NOT NULL,
  `diadiemmaitang` varchar(50) NOT NULL,
  `nguyennhan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `ghinhanketthuc`
--

INSERT INTO `ghinhanketthuc` (`id`, `hovaten`, `ngaygiomat`, `diadiemmaitang`, `nguyennhan`) VALUES
(1, 'Phan Phúc Nguyên', '2018-04-15 00:00:00', 'Long An', 'Hy sinh vì đất nước'),
(2, 'Phan Tùng Lâm', '0000-00-00 00:00:00', 'Chưa Mất', 'Không có'),
(3, 'Phan Khánh Minh', '0000-00-00 00:00:00', 'Không có', 'Không có');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ghinhanthanhtich`
--

CREATE TABLE `ghinhanthanhtich` (
  `id` int(11) NOT NULL,
  `hovaten` varchar(50) NOT NULL,
  `loaithanhtich` varchar(50) NOT NULL,
  `ngayphatsinh` date NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `ghinhanthanhtich`
--

INSERT INTO `ghinhanthanhtich` (`id`, `hovaten`, `loaithanhtich`, `ngayphatsinh`, `soluong`) VALUES
(1, 'Phan Phúc Nguyên', 'hạng 3', '2018-04-15', 1),
(2, 'Phan Tùng Lâm', 'hang 4', '2018-04-15', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giadinh`
--

CREATE TABLE `giadinh` (
  `id` int(11) NOT NULL,
  `ten-gia-dinh` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `giadinh`
--

INSERT INTO `giadinh` (`id`, `ten-gia-dinh`) VALUES
(1, 'Gia đình 1'),
(2, 'Gia đình 2'),
(3, 'Gia đình 3');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hosothanhvien`
--

CREATE TABLE `hosothanhvien` (
  `id` int(11) NOT NULL,
  `id_gd` int(11) NOT NULL,
  `id_doi` int(11) NOT NULL,
  `id-thanhtich` int(11) NOT NULL,
  `id-ketthuc` int(11) NOT NULL,
  `loaiquanhe` varchar(50) NOT NULL COMMENT 'Cha, Mẹ, Ông, Bà, Con, Cháu',
  `ngayphatsinh` date NOT NULL,
  `hovaten` varchar(50) NOT NULL,
  `gioitinh` varchar(50) NOT NULL,
  `ngaygiosinh` datetime NOT NULL,
  `quequan` varchar(50) NOT NULL,
  `nghenghiep` varchar(50) NOT NULL,
  `diachi` varchar(50) NOT NULL,
  `deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hosothanhvien`
--

INSERT INTO `hosothanhvien` (`id`, `id_gd`, `id_doi`, `id-thanhtich`, `id-ketthuc`, `loaiquanhe`, `ngayphatsinh`, `hovaten`, `gioitinh`, `ngaygiosinh`, `quequan`, `nghenghiep`, `diachi`, `deleted`) VALUES
(1, 1, 1, 1, 1, 'Chưa rõ', '2018-04-15', 'Phan Phúc Nguyên', 'Nam', '2018-04-15 00:00:00', 'Long An', 'Chưa rõ', 'TPHCM', 1),
(2, 2, 2, 2, 2, 'Chưa rõ', '2018-04-15', 'Phan Tùng Lâm', 'Nam', '2018-04-15 00:00:00', 'Long An', 'Chưa rõ', 'TPHCM', 1),
(3, 1, 1, 1, 1, 'Chưa rõ', '2018-04-15', 'Phan Khánh Minh', 'Nam', '2018-04-15 00:00:00', 'Long An', 'Chưa rõ', 'TPHCM', 1),
(4, 2, 2, 2, 2, 'Chưa rõ', '2018-04-15', 'Phan Khả Di', 'Nữ', '2018-04-15 00:00:00', 'Long An', 'Chưa rõ', 'TPHCM', 1),
(12, 1, 1, 1, 1, 'Chưa rõ', '2018-04-15', 'Phan Minh Huy', 'Nam', '2018-04-15 00:00:00', 'Long An', 'Chưa rõ', 'TPHCM', 1),
(13, 2, 2, 2, 2, 'Chưa rõ', '2018-04-15', 'Phan Diễm My', 'Nữ', '2018-04-15 00:00:00', 'Long An', 'Chưa rõ', 'TPHCM', 1),
(14, 1, 1, 1, 1, 'Chưa rõ', '2018-04-15', 'Phan Út Lệ', 'Nữ', '2018-04-15 00:00:00', 'Long An', 'Chưa rõ', 'TPHCM', 1),
(15, 3, 3, 3, 3, 'Chưa rõ', '2018-04-15', 'Phan Khả Hân', 'Nữ', '2018-04-15 00:00:00', 'Long An', 'Chưa rõ', 'TPHCM', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tanggiamthanhvien`
--

CREATE TABLE `tanggiamthanhvien` (
  `id` int(11) NOT NULL,
  `nam` int(11) NOT NULL,
  `soluongsinh` int(11) NOT NULL,
  `soluongkethon` int(11) NOT NULL,
  `soluongmat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tendoi`
--

CREATE TABLE `tendoi` (
  `id` int(11) NOT NULL,
  `ten-doi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tendoi`
--

INSERT INTO `tendoi` (`id`, `ten-doi`) VALUES
(1, 'Đời 1'),
(2, 'Đời 2'),
(3, 'Đời 3');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ghinhanketthuc`
--
ALTER TABLE `ghinhanketthuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ghinhanthanhtich`
--
ALTER TABLE `ghinhanthanhtich`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `giadinh`
--
ALTER TABLE `giadinh`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hosothanhvien`
--
ALTER TABLE `hosothanhvien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_gd` (`id_gd`),
  ADD KEY `id_doi` (`id_doi`),
  ADD KEY `id-thanhtich` (`id-thanhtich`),
  ADD KEY `id-ketthuc` (`id-ketthuc`);

--
-- Chỉ mục cho bảng `tanggiamthanhvien`
--
ALTER TABLE `tanggiamthanhvien`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tendoi`
--
ALTER TABLE `tendoi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `ghinhanketthuc`
--
ALTER TABLE `ghinhanketthuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `ghinhanthanhtich`
--
ALTER TABLE `ghinhanthanhtich`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `giadinh`
--
ALTER TABLE `giadinh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `hosothanhvien`
--
ALTER TABLE `hosothanhvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `tanggiamthanhvien`
--
ALTER TABLE `tanggiamthanhvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tendoi`
--
ALTER TABLE `tendoi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `ghinhanketthuc`
--
ALTER TABLE `ghinhanketthuc`
  ADD CONSTRAINT `ghinhanketthuc_ibfk_1` FOREIGN KEY (`id`) REFERENCES `hosothanhvien` (`id-ketthuc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `ghinhanthanhtich`
--
ALTER TABLE `ghinhanthanhtich`
  ADD CONSTRAINT `ghinhanthanhtich_ibfk_1` FOREIGN KEY (`id`) REFERENCES `hosothanhvien` (`id-thanhtich`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `giadinh`
--
ALTER TABLE `giadinh`
  ADD CONSTRAINT `giadinh_ibfk_1` FOREIGN KEY (`id`) REFERENCES `hosothanhvien` (`id_gd`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tendoi`
--
ALTER TABLE `tendoi`
  ADD CONSTRAINT `tendoi_ibfk_1` FOREIGN KEY (`id`) REFERENCES `hosothanhvien` (`id_doi`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
