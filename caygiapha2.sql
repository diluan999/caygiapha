-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th4 22, 2018 lúc 03:41 PM
-- Phiên bản máy phục vụ: 10.1.26-MariaDB
-- Phiên bản PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `caygiapha2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ghinhanketthuc`
--

CREATE TABLE `ghinhanketthuc` (
  `id` int(11) NOT NULL,
  `hovaten` varchar(50) NOT NULL,
  `ngaygiomat` date NOT NULL,
  `diadiemmaitang` varchar(50) NOT NULL,
  `nguyennhan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `ghinhanketthuc`
--

INSERT INTO `ghinhanketthuc` (`id`, `hovaten`, `ngaygiomat`, `diadiemmaitang`, `nguyennhan`) VALUES
(1, 'Phan Minh Ngọc', '2018-04-14', 'Long An', 'Bệnh');

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
(1, 'Phan Minh Ngọc', 'Thương BInh', '2018-04-01', 1),
(2, 'Test', 'A', '2018-04-18', 1);

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
(1, 'Gia Đình 1'),
(2, 'Gia Đình 2'),
(3, 'Gia Đình 3');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hosothanhvien`
--

CREATE TABLE `hosothanhvien` (
  `id` int(11) NOT NULL,
  `id_gd` int(11) NOT NULL,
  `id_doi` int(11) NOT NULL,
  `id_thanhtich` int(11) NOT NULL,
  `id_ketthuc` int(11) NOT NULL,
  `thanviencu` varchar(50) NOT NULL,
  `loaiquanhe` varchar(50) NOT NULL COMMENT 'Cha, Mẹ, Ông, Bà, Con, Cháu',
  `ngayphatsinh` date NOT NULL,
  `hovaten` varchar(50) NOT NULL,
  `chame` varchar(50) NOT NULL,
  `gioitinh` varchar(50) NOT NULL,
  `ngaygiosinh` date NOT NULL,
  `quequan` varchar(50) NOT NULL,
  `nghenghiep` varchar(50) NOT NULL,
  `diachi` varchar(50) NOT NULL,
  `deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hosothanhvien`
--

INSERT INTO `hosothanhvien` (`id`, `id_gd`, `id_doi`, `id_thanhtich`, `id_ketthuc`, `thanviencu`, `loaiquanhe`, `ngayphatsinh`, `hovaten`, `chame`, `gioitinh`, `ngaygiosinh`, `quequan`, `nghenghiep`, `diachi`, `deleted`) VALUES
(1, 1, 1, 1, 1, 'Không Rõ', 'Ông', '2018-04-21', 'Phan Minh Ngọc', 'Chưa Rõ', 'nam', '2018-01-03', 'Long An', 'Kỹ Sư', 'Sài Gòn', 1),
(2, 1, 1, 1, 1, 'Không rõ', 'Bà', '2018-04-21', 'Đặng Ngọc Ngân', 'Chưa Rõ', 'Nữ', '2018-04-09', 'Tiềng Giang', 'Nội Trợ', 'Tiềng Giang', 1),
(3, 2, 2, 2, 2, 'Phan Minh Ngọc', 'Cha', '2018-04-21', 'Phan Minh Huy', 'Phan Minh Ngọc - Đăng Ngọc Ngân', 'Nam', '2018-04-01', 'Long An', 'Bác Sĩ', 'Quận 10, TPHCM', 1),
(4, 2, 2, 2, 2, 'Phan Minh Ngọc', 'Con ', '2018-04-14', 'Phan Hà My', 'Phan Minh Ngọc - Đặng Ngọc Ngân', 'Nữ', '2018-04-21', 'Long An', 'Nội Trợ', 'Q1 , TPHCM', 1),
(5, 2, 2, 2, 2, 'Trần Hải Châu', 'Con', '2018-04-21', 'Trần Hải Yến', 'Trần Hải Châu - Nguyễn Minh Tiến', 'Nữ', '2018-04-01', 'Bến Tre', 'Nội Trợ', 'Quận 10, TPHCM', 1),
(6, 2, 2, 2, 2, 'Trần Thanh Hải', 'Con', '2018-04-21', 'Trần Thanh Tú', 'Trần Thành Hải - Nguyễn Thanh Thảo', 'Nam', '2018-04-01', 'Vĩnh Long', 'Nhân Viên Văn Phòng', 'Q1 , TPHCM', 1),
(7, 3, 3, 3, 3, 'Phan Minh Huy', 'Con', '2018-04-14', 'Phan Tùng Lâm', 'Phan Minh Huy - Trần Hải Yến', 'Nam', '2018-04-01', 'Long An', 'Sinh Viên', 'Quận 10, TPHCM', 1),
(8, 3, 3, 3, 3, 'Phan Minh Huy', 'Con', '2018-04-01', 'Phan Tiến DŨng', 'Phan Minh Huy - Trần Hải Yến', 'Nam', '2018-04-01', 'Long', '', '', 1),
(9, 3, 3, 3, 3, 'Trần Thanh Tú', 'Con', '2018-04-22', 'Trần Văn Minh', 'Trần Thanh Tú - Phan Hà My', 'Nam', '2018-04-01', 'Vĩnh Long- Long An', 'Học SInh Cấp 2', 'Q1 , TPHCM', 1),
(10, 3, 3, 3, 3, 'Trần Thanh Tú', 'Con', '2018-04-22', 'Trần Mỹ Linh', 'Trần Thanh Tú - Phan Hà My', 'Nữ', '2018-04-01', 'Vĩnh Long- Long An', 'Sinh Viên Năm 1', 'Q1 , TPHCM', 1),
(227, 4, 4, 4, 4, 'Test', 'Test', '2018-04-15', 'Test', 'Test', 'Nam', '2018-04-22', 'Long An', 'Test', 'Test', 0),
(228, 4, 4, 4, 4, 'Test', 'Test', '2018-04-07', 'Test', 'Test', 'Nam', '2018-04-22', 'Test', 'Test', 'Test', 0),
(229, 4, 4, 4, 4, 'Testt', 'Test', '2018-04-21', 'Test', 'Test', 'Nam', '2018-04-13', 'Long An', 'Test', 'Test', 0),
(230, 4, 4, 4, 4, '4', '4', '0004-04-04', '4', '4', '4', '0004-04-04', '4', '4', '4', 0),
(231, 4, 4, 4, 4, '4', '4', '0004-04-04', '4', '4', '4', '0004-04-04', '4', '4', '4', 0),
(232, 4, 4, 4, 4, '4', '4', '0004-04-04', '4', '4', '4', '0004-04-04', '4', '4', '4', 0),
(233, 4, 4, 4, 4, '4', '4', '0004-04-04', '4', '4', '4', '0004-04-04', '4', '4', '4', 0),
(234, 4, 4, 4, 4, '4', '4', '0004-04-04', '4', '4', '4', '0004-04-04', '4', '4', '4', 0),
(235, 4, 4, 4, 4, '4', '4', '0004-04-04', '4', '4', '4', '0004-04-04', '4', '4', '4', 0);

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

--
-- Đang đổ dữ liệu cho bảng `tanggiamthanhvien`
--

INSERT INTO `tanggiamthanhvien` (`id`, `nam`, `soluongsinh`, `soluongkethon`, `soluongmat`) VALUES
(1, 2000, 0, 1, 0),
(2, 2001, 2, 0, 0),
(3, 2005, 4, 0, 0),
(4, 2018, 0, 0, 1);

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
  ADD KEY `id-thanhtich` (`id_thanhtich`),
  ADD KEY `id-ketthuc` (`id_ketthuc`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `ghinhanthanhtich`
--
ALTER TABLE `ghinhanthanhtich`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `giadinh`
--
ALTER TABLE `giadinh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `hosothanhvien`
--
ALTER TABLE `hosothanhvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=236;

--
-- AUTO_INCREMENT cho bảng `tanggiamthanhvien`
--
ALTER TABLE `tanggiamthanhvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tendoi`
--
ALTER TABLE `tendoi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `ghinhanketthuc`
--
ALTER TABLE `ghinhanketthuc`
  ADD CONSTRAINT `ghinhanketthuc_ibfk_1` FOREIGN KEY (`id`) REFERENCES `hosothanhvien` (`id_ketthuc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `ghinhanthanhtich`
--
ALTER TABLE `ghinhanthanhtich`
  ADD CONSTRAINT `ghinhanthanhtich_ibfk_1` FOREIGN KEY (`id`) REFERENCES `hosothanhvien` (`id_thanhtich`) ON DELETE CASCADE ON UPDATE CASCADE;

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
