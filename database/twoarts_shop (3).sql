-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 12, 2019 lúc 02:57 AM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `twoarts_shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `fullname` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `email`, `password`, `fullname`) VALUES
(1, 'admin1@mail.com', '202cb962ac59075b964b07152d234b70', 'Nguyễn Văn Thắng'),
(2, 'admin2@mail.com', '202cb962ac59075b964b07152d234b70', 'Nguyễn Văn Chiến');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `slug` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `name`, `slug`) VALUES
(1, 'Adidas', 'adidas'),
(2, 'Nike', 'nike'),
(3, 'Converse', 'converse'),
(4, 'Thượng Đình', 'thuong-dinh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_img_footer`
--

CREATE TABLE `tbl_img_footer` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` int(10) NOT NULL,
  `address` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order_detail`
--

CREATE TABLE `tbl_order_detail` (
  `order_detail_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `slug` varchar(500) NOT NULL,
  `type_id` int(1) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `discount` float NOT NULL,
  `description` text NOT NULL,
  `content` text NOT NULL,
  `img` varchar(500) NOT NULL,
  `hotproduct` int(1) NOT NULL,
  `view` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `category_id`, `name`, `slug`, `type_id`, `quantity`, `price`, `discount`, `description`, `content`, `img`, `hotproduct`, `view`, `created_at`) VALUES
(1, 1, 'Ultra boost 4.0', 'untra-boost', 1, 20, 12000000, 0, '<p>ok ok</p>\r\n', 'Độ Ta Không Độ Nàng Remix Ver 2 Anh Duy | Htrol Remix - Top EDM Tik Tok Remix 2019 Nhẹ Nhàng ', '1560068550product-2.png', 1, 0, '2019-06-09 13:23:08'),
(2, 2, 'M2K TEKNO LX', 'm2k-tekno-lx', 2, 5, 2500000, 5, '<p>Gi&agrave;y n&agrave;y oke con d&ecirc;</p>\r\n', 'Độ Ta Không Độ Nàng Remix Ver 2 Anh Duy | Htrol Remix - Top EDM Tik Tok Remix 2019 Nhẹ Nhàng ', '1560068541product-1.png', 1, 0, '2019-06-09 15:20:48'),
(3, 1, 'Giày A', 'giay-a', 2, 10, 1000000, 10, '<p>OK OK</p>\r\n', '<p>Độ Ta Kh&ocirc;ng Độ N&agrave;ng Remix Ver 2 Anh Duy | Htrol Remix - Top EDM Tik Tok Remix 2019 Nhẹ Nh&agrave;ng</p>\r\n', '1560504480product-6.png', 0, 0, '2019-06-10 00:31:49'),
(4, 2, 'Giày B', 'giay-b', 1, 0, 200000, 15, '<p>ok ok</p>\r\n', 'Độ Ta Không Độ Nàng Remix Ver 2 Anh Duy | Htrol Remix - Top EDM Tik Tok Remix 2019 Nhẹ Nhàng ', '1560101531product-8.png', 0, 0, '2019-06-10 00:32:11'),
(5, 1, 'Iphone 6', 'iphone-6', 1, 22, 345345, 80, '<p>dok ok</p>\r\n', '<p>okokokokok</p>\r\n', '1560266217product-3.png', 1, 0, '2019-06-11 22:16:57'),
(6, 3, 'Giày E', 'giay-e', 1, 23, 2147483647, 10, '<p>&ocirc;kkokoko</p>\r\n', '<p>okokok</p>\r\n', '1560583719product-7.png', 0, 0, '2019-06-15 14:28:39'),
(7, 3, 'Giày F', 'giay-f', 2, 22, 2147483647, 0, '<p>okokokokok</p>\r\n', '<p>okokoko</p>\r\n', '1560583755product-5.png', 0, 0, '2019-06-15 14:29:15'),
(8, 1, 'Giày G', 'giay-g', 1, 10, 241225, 5, '<p>kokokok</p>\r\n', '<p>okoko</p>\r\n', '1560583802product-6.png', 1, 0, '2019-06-15 14:30:02'),
(9, 1, 'Nike mới nhất', 'nike-moi-nhat', 1, 12, 2147483647, 0, '<p>ok&nbsp;</p>\r\n', '<p>ok</p>\r\n', '15626480501560583719product-7.png', 1, 0, '2019-07-09 11:54:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_type`
--

CREATE TABLE `tbl_type` (
  `type_id` int(11) NOT NULL,
  `name` varchar(5) NOT NULL,
  `slug` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_type`
--

INSERT INTO `tbl_type` (`type_id`, `name`, `slug`) VALUES
(1, 'Nam', 'nam'),
(2, 'Nữ', 'nu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `fullname` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `email`, `password`, `fullname`, `address`, `phone`, `created_at`) VALUES
(1, 'caybutbi197@gmail.com', '202cb962ac59075b964b07152d234b70', 'Nguyễn Văn Thắng', 'Hưng Yên', '0976201874', '2019-06-09 12:11:27'),
(2, 'Huyen123@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Trịnh Thị Huyền', 'Hà Giang', '0346058581', '2019-06-26 12:58:54');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `tbl_img_footer`
--
ALTER TABLE `tbl_img_footer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  ADD PRIMARY KEY (`order_detail_id`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_type`
--
ALTER TABLE `tbl_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_img_footer`
--
ALTER TABLE `tbl_img_footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_order_detail`
--
ALTER TABLE `tbl_order_detail`
  MODIFY `order_detail_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tbl_type`
--
ALTER TABLE `tbl_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
