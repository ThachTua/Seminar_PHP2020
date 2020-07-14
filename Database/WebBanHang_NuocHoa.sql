-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 14, 2020 lúc 03:08 PM
-- Phiên bản máy phục vụ: 10.1.39-MariaDB
-- Phiên bản PHP: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nuochoa`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_account` int(5) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` char(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `level` char(7) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`name`, `id_account`, `phone`, `email`, `password`, `level`, `address`) VALUES
('Thạch', 1, '123', 'thachtua66@gmail.com', '123', 'admin', 'CNTT'),
('Tua Thach', 2, '123456', 'thach@gmail.com', '123', 'member', 'CNTT'),
('Trần', 3, '123456', '123@gmail.com.vn', '123', 'Member', 'CNTT');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `all_product`
--

CREATE TABLE `all_product` (
  `id_product` int(10) NOT NULL,
  `name_product` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `link_product` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `describe_product` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price_product` double NOT NULL,
  `sex_product` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `type_product` varchar(50) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `date_udate` date NOT NULL,
  `type` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `since_product` int(20) NOT NULL,
  `designer_product` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `all_product`
--

INSERT INTO `all_product` (`id_product`, `name_product`, `link_product`, `describe_product`, `price_product`, `sex_product`, `type_product`, `date_udate`, `type`, `since_product`, `designer_product`) VALUES
(1, 'BVLGARI AQVA POUR HOMME EAU DE TOILETTE FOR MEN', 'boy1.jpg', 'Nước hoa Aqva Pour Homme của Bvlgari là một mẫu nước hoa thuộc nhóm hương thơm biển, được ra mắt vào', 1590000, 'Nam', '1', '2019-05-15', 'BVLGARI', 2006, 'Antoine Maisondieu'),
(2, 'BURBERRY LONDON EAU DE TOILETTE FOR MEN', 'boy2.jpg', '', 1690000, 'Nam', '1', '2019-06-20', 'BURBERRY', 2006, 'Antoine Maisondieu'),
(3, 'BVLGARI MAN IN BLACK EAU DE PARFUM FOR MEN', 'boy3.jpg', '', 1790000, 'Nam', '1', '2019-04-24', 'BVLGARI', 2006, 'Antoine Maisondieu'),
(4, 'BVLGARI AQVA POUR HOMME MARINE EAU DE TOILETTE FOR MEN', 'boy4.jpg', '', 1590000, 'Nam', '1', '2019-04-24', 'BVLGARI', 2006, 'Antoine Maisondieu'),
(5, 'CALVIN KLEIN CK FREE EAU DE TOILETTE FOR MEN', 'boy5.jpg', '', 1590000, 'Nam', '1', '2019-04-24', 'CAVIN KLEIN', 2006, 'Antoine Maisondieu'),
(6, 'CALVIN KLEIN CK ONE EAU DE TOILETTE FOR WOMEN AND MEN', 'boy6.jpg', '', 1590000, 'Nam', '1', '2019-04-24', 'CAVIN KLEIN', 2006, 'Antoine Maisondieu'),
(7, 'CAROLINA HERRERA 212 MEN EAU DE TOILETTE FOR MEN', 'boy7.jpg', '', 1790000, 'Nam', '1', '2019-04-24', 'CAROLINA', 2006, 'Antoine Maisondieu'),
(9, 'BURBERRY MY BURBERRY EAU DE PARFUM FOR WOMEN', 'nu1.jpg', '', 2590000, 'Nữ', '2', '2019-04-24', 'BURBERRY', 2006, 'Antoine Maisondieu'),
(10, 'CAROLINA HERRERA 212 VIP MEN EAU DE TOILETTE FOR MEN', 'boy9.jpg', '', 2090000, 'Nam', '1', '2019-04-03', 'CAROLINA', 2006, 'Antoine Maisondieu'),
(11, 'CALVIN KLEIN CK BE DEODORANT STICK FOR MEN', 'khac1.jpg', '', 5900000, 'Nam', '3', '2019-04-25', 'CALVIN KLEIN', 2006, 'Antoine Maisondieu'),
(12, 'CHANEL ALLURE HOMME SPORT DEODORANT STICK FOR MEN', 'khac2.jpg', '', 1190000, 'Nam', '3', '2019-04-25', 'CHANEL', 2006, 'Antoine Maisondieu'),
(13, 'CHANEL BLEU DE CHANEL DEODORANT STICK FOR MEN', 'khac3.jpg', '', 1190000, 'Nam', '3', '2019-04-25', 'CHANEL', 2006, 'Antoine Maisondieu'),
(14, 'CHANEL CHANCE EAU FRAICHE FOAMING SHOWER GEL FOR WOMEN', 'khac4.jpg', '', 1790000, 'Nữ', '3', '2019-04-25', 'CHANEL', 2006, 'Antoine Maisondieu'),
(15, 'CHANEL CHANCE EAU TENDRE FOAMING SHOWER GEL FOR WOMEN', 'khac5.jpg', '', 1790000, 'Nữ', '3', '2019-04-25', 'CHANEL', 2006, 'Antoine Maisondieu'),
(16, 'GUCCI GUILTY BLACK POUR HOMME EAU DE TOILETTE FOR MEN', 'nuochoahot1.jpg', '', 2090000, 'Nam', '10', '2019-05-03', 'GUCCI', 2007, 'Mr.Long(handsome)'),
(17, 'DIOR HOMME SPORT EAU DE TOILETTE FOR MEN', 'nuochoahot2.jpg', '', 2090000, 'Nam', '10', '2019-05-03', 'DIOR', 1995, 'Mr.Long(handsome)'),
(18, 'VERSACE YELLOW DIAMOND EAU DE TOILETTE FOR WOMEN', 'nuochoahot3.jpg', '', 2090000, 'Nữ', '10', '2019-05-03', 'VERSACE', 1995, 'Mr.Long(handsome)'),
(19, 'GUCCI BY GUCCI EAU DE PARFUM FOR WOMEN', 'nuochoahot4.jpg', '', 2090000, 'Nữ', '10', '2019-05-03', 'GUCCI', 1995, 'Mr.Long(handsome)'),
(20, 'CHANEL CHANCE EAU VIVE EAU DE TOILETTE FOR WOMEN', 'nuochoamoi1.jpg', '', 2090000, 'Nữ', '11', '2019-05-03', 'CHANEL', 1995, 'Mr.Long(handsome)'),
(21, 'LANCOME LA NUIT TRESOR EAU DE PARFUM FOR WOMEN', 'nuochoamoi2.jpg', '', 3090000, 'Nữ', '11', '2019-05-03', 'LANCOME', 1995, 'Mr.Long(handsome)'),
(22, 'KILIAN IMPERIAL TEA BY KILIAN DE PARFUM FOR WOMEN', 'nuochoamoi3.jpg', '', 4080000, 'Nữ', '11', '2019-05-03', 'KILIAN', 1995, 'Mr.Long(handsome)'),
(23, 'DIOR POISON EAU DE TOILETTE FOR WOMEN', 'nuochoamoi4.jpg', '', 3060000, 'Nữ', '11', '2019-05-03', 'DIOR', 1995, 'Mr.Long(handsome)'),
(24, 'MISS DIOR EAU DE TOILETTE FOR WOMEN', 'nuochoakhac1.jpg', '', 3060000, 'Nữ', '12', '2019-05-03', 'DIOR', 1995, 'Mr.Long(handsome)'),
(25, 'CHANEL ALLURE EAU DE TOILETTE FOR WOMEN', 'nuochoakhac2.jpg', '', 2290000, 'Nữ', '12', '2019-05-03', 'CHANEL', 1995, 'Mr.Long(handsome)'),
(26, 'CHANEL CHANCE EAU FRAICHE FOR WOMEN', 'nuochoakhac3.jpg', '', 3600000, 'Nữ', '12', '2019-05-03', 'CHANEL', 1995, 'Mr.Long(handsome)'),
(27, 'CHANEL CHANCE EAU DE PARFUM FOR WOMEN', 'nuochoakhac4.jpg', '', 2960000, 'Nữ', '12', '2019-05-03', 'CHANEL', 1995, 'Mr.Long(handsome)'),
(30, '$ten', '$linkanh', 'sfvzvzzv', 0, 'nam', '1', '0000-00-00', '1', 1111, 'thach mo tua');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id_bill` int(10) NOT NULL,
  `name_bill` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_customer` int(5) NOT NULL,
  `order_date` date NOT NULL,
  `total_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_detail`
--

CREATE TABLE `bill_detail` (
  `id_bill` int(10) NOT NULL,
  `id_product` int(10) NOT NULL,
  `amount` int(5) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(5) NOT NULL,
  `id_acc` int(5) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu1`
--

CREATE TABLE `menu1` (
  `id` int(11) NOT NULL,
  `catalog_id` int(30) NOT NULL,
  `menu1_name` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `link_menu` varchar(200) NOT NULL,
  `tittle_menu` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Parent` int(11) NOT NULL DEFAULT '1',
  `ParentID` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `menu1`
--

INSERT INTO `menu1` (`id`, `catalog_id`, `menu1_name`, `link_menu`, `tittle_menu`, `Parent`, `ParentID`) VALUES
(1, 1, 'TRANG CHỦ', 'index.php', '', 0, 0),
(2, 1, 'GIỚI THIỆU', 'menu-gioithieu.php', '', 0, 0),
(3, 1, 'NƯỚC HOA NAM', 'menu-wfb.php', '', 0, 0),
(4, 1, 'NƯỚC HOA NỮ', 'menu-wfg.php', '', 0, 0),
(5, 1, 'SẢN PHẨM KHÁC', 'menu-product-different.php', '', 0, 0),
(6, 1, 'LIÊN HỆ', 'contact.php', '', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `submenu`
--

CREATE TABLE `submenu` (
  `id` int(50) NOT NULL,
  `catolog_id` int(50) NOT NULL,
  `sub_name` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `parent` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `submenu`
--

INSERT INTO `submenu` (`id`, `catolog_id`, `sub_name`, `parent`) VALUES
(1, 1, 'Nước Hoa Dior Nam', 3),
(2, 1, 'Nước Hoa Gucci Nam', 3),
(3, 1, 'Nước Hoa Lancome Nam', 3),
(4, 1, 'Nước Hoa Tom Ford Nam', 3),
(5, 1, 'Nước Hoa Hermes Nam', 3),
(6, 1, 'Nước Hoa Chanel Nam', 3),
(7, 1, 'Nước Hoa Dior Nữ', 4),
(8, 1, 'Nước Hoa Gucci Nữ', 4),
(9, 1, 'Nước Hoa Lancome Nữ', 4),
(10, 1, 'Nước Hoa Tom Ford Nữ', 4),
(11, 1, 'Nước Hoa Hermes Nữ', 4),
(12, 1, 'Nước Hoa Chanel Nữ', 4),
(13, 1, 'Nước hoa Calvin Klein', 5),
(14, 1, 'Nước Hoa Nữ khác ', 5),
(15, 1, 'Nước Hoa Nam khác', 5);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id_account`);

--
-- Chỉ mục cho bảng `all_product`
--
ALTER TABLE `all_product`
  ADD PRIMARY KEY (`id_product`);

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id_bill`),
  ADD KEY `id_customer` (`id_customer`);

--
-- Chỉ mục cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_bill` (`id_bill`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`),
  ADD KEY `id_acc` (`id_acc`);

--
-- Chỉ mục cho bảng `menu1`
--
ALTER TABLE `menu1`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `submenu`
--
ALTER TABLE `submenu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `all_product`
--
ALTER TABLE `all_product`
  MODIFY `id_product` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `menu1`
--
ALTER TABLE `menu1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `submenu`
--
ALTER TABLE `submenu`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`);

--
-- Các ràng buộc cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD CONSTRAINT `bill_detail_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `all_product` (`id_product`),
  ADD CONSTRAINT `bill_detail_ibfk_3` FOREIGN KEY (`id_bill`) REFERENCES `bill` (`id_bill`);

--
-- Các ràng buộc cho bảng `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`id_acc`) REFERENCES `account` (`id_account`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
