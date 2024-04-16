-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 25, 2024 lúc 02:51 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `peak_sport`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `diachi` varchar(199) NOT NULL,
  `sdt` varchar(15) NOT NULL,
  `pttt` tinyint(100) NOT NULL DEFAULT 0 COMMENT '0.thanh toán khi nhận hàng\r\n1.thanh toán online\r\n2.Thanh toán qua QRcode',
  `ngaydathang` varchar(100) NOT NULL,
  `tongdonhang` int(100) NOT NULL,
  `trangthai` tinyint(50) NOT NULL DEFAULT 0 COMMENT '0.Đang sử lý\r\n1.Đang giao hàng\r\n2.Đã nhận hàng\r\n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `user`, `email`, `diachi`, `sdt`, `pttt`, `ngaydathang`, `tongdonhang`, `trangthai`) VALUES
(47, 'admin', 'abc3@gmail.com', ' 13 P. Trịnh Văn Bô, Xuân Phương, Nam Từ Liêm, Hà Nội', '012143435', 0, '04:31:44 23/03/24', 727, 0),
(48, 'admin', 'abc3@gmail.com', ' 13 P. Trịnh Văn Bô, Xuân Phương, Nam Từ Liêm, Hà Nội', '012143435', 2, '04:32:49 23/03/24', 999, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `noidung` text NOT NULL,
  `ngaybinhluan` varchar(50) NOT NULL,
  `idpro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `iduser`, `noidung`, `ngaybinhluan`, `idpro`) VALUES
(14, 1, 'Tôi yêu cái nhìn bánh quế cổ điển! Tôi cũng đánh giá cao chất liệu và vẻ ngoài của đôi giày này', '10:35:21 18/03/24', 1),
(15, 1, 'Tôi yêu cái nhìn bánh quế cổ điển! Tôi cũng đánh giá cao chất liệu và vẻ ngoài của đôi giày này', '10:35:52 18/03/24', 1),
(16, 1, 'Tôi nghĩ rằng những đôi giày này thực sự tuyệt vời về tổng thể. Tôi thích thiết kế và cảm hứng từ bánh quế của Nike, vì tôi nghĩ bánh quế là một hình bóng khởi đầu tuyệt vời.', '10:36:19 18/03/24', 8),
(17, 8, 'Chất lượng và thiết kế tuyệt vời', '10:46:23 18/03/24', 8),
(18, 8, 'rừgvsdffgsdf', '02:55:20 19/03/24', 1),
(19, 8, 'Tôi yêu cái nhìn bánh quế cổ điển! Tôi cũng đánh giá cao chất liệu và vẻ ngoài của đôi giày này', '05:50:37 23/03/24', 0),
(20, 8, 'sin vcllll', '05:51:19 23/03/24', 0),
(21, 8, 'fadfafdffffff', '05:52:39 23/03/24', 18),
(22, 8, 'Tôi yêu cái nhìn bánh quế cổ điển! Tôi cũng đánh giá cao chất liệu và vẻ ngoài của đôi giày này', '06:05:17 23/03/24', 18),
(23, 8, 'Ồ. Đây là những điều tuyệt vời. Bạn sẽ cảm nhận được yếu tố cổ điển/hoài cổ nhờ đế bánh quế nổi tiếng. Đây cũng là một bước đột phá của Nike Waffle One, một loại giày thể thao khác mà tôi yêu thích. Tuy nhiên, lần ra mắt Waffle này mang lại cảm giác hỗ trợ nhiều hơn.', '06:05:25 23/03/24', 18),
(24, 1, 'Lần đầu mua đồ giá trị cao trên shoppe khá là run, nhưng ship hàng nhanh e mới mua trưa bửa trước là chiều hôm sau nhận được rồi,  sản phẩm ngoài sức mong đợi', '06:07:03 23/03/24', 17),
(25, 1, 'Lần đầu mua đồ giá trị cao trên shoppe khá là run, nhưng ship hàng nhanh e mới mua trưa bửa trước là chiều hôm sau nhận được rồi,  sản phẩm ngoài sức mong đợi', '06:07:25 23/03/24', 18);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idpro` int(10) NOT NULL,
  `hinh` varchar(199) NOT NULL,
  `tensp` varchar(100) NOT NULL,
  `gia` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `idbill` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `iduser`, `idpro`, `hinh`, `tensp`, `gia`, `soluong`, `size`, `thanhtien`, `idbill`) VALUES
(96, 8, 18, 'air-max-excee-shoes-BND2jb.png', 'Nike Air Max Excee', 99, 3, 41, 297, 47),
(97, 8, 17, 'impact-4-basketball-shoes-CcJxBx.png', 'Nike Impact 4', 100, 2, 41, 100, 47),
(98, 8, 12, 'air-max-1-shoes-KcSx0w.png', 'Nike Air Max 1', 50, 1, 41, 50, 47),
(99, 8, 15, 'air-max-scorpion-flyknit-shoes-4dWrx1 (1).png', 'Nike Air Max Scorpion Flyknit', 180, 1, 39, 180, 47),
(100, 8, 14, 'air-max-plus-shoes-B03LHK.png', 'Nike Air Max Plus', 999, 1, 38, 999, 48);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `tendm` varchar(199) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `tendm`) VALUES
(1, 'giày Nike'),
(2, 'Nike Air Force 1'),
(4, 'Jordan'),
(5, 'Air Max'),
(6, 'Blazer Shoes');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `tensp` varchar(199) NOT NULL,
  `hinhanh` varchar(200) NOT NULL,
  `gia` varchar(10) NOT NULL,
  `size` varchar(10) NOT NULL,
  `soluong` int(10) NOT NULL,
  `luotxem` int(11) NOT NULL DEFAULT 0,
  `mota` text DEFAULT NULL,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `tensp`, `hinhanh`, `gia`, `size`, `soluong`, `luotxem`, `mota`, `iddm`) VALUES
(5, 'adhasdasd', 'air-max-90-ltr-younger-shoes-3W4GLs.png', '11', 'm', 12, 0, 'shdadsjkd', 6),
(8, 'iphone 15pro aaa', 'air-max-90-futura-shoes-Rxjzm2.png', '21', 'd', 1, 0, 'weqrq', 1),
(9, 'dasdasd', 'air-max-90-shoes-8gM9Hn.png', '300000', 'm', 9, 0, 'rewrew', 1),
(10, 'iphone 15duhashod', 'air-max-90-futura-shoes-Rxjzm2.png', '500000', 'dasdsa', 1, 0, 'sdasd', 2),
(11, 'afsadsffd', 'air-max-1-87-shoes-xr5105.png', '1', 'm', 1, 0, 'rrfgsdfgb', 6),
(12, 'Nike Air Max 1', 'air-max-1-shoes-KcSx0w.png', '50', '40', 10, 0, 'Gặp gỡ người lãnh đạo của gói. Đi trên những đám mây phía trên tiếng ồn, Air Max 1 kết hợp thiết kế vượt thời gian với sự thoải mái có đệm. Thể hiện kiểu dáng nhanh nhẹn và tấm chắn bùn gợn sóng với đệm Nike Air và bộ phận Max Air, biểu tượng cổ điển này xuất hiện vào năm 1987 và vẫn là linh hồn của thương hiệu cho đến ngày nay.', 2),
(13, 'Nike Air Max DN', 'air-max-dn-shoes-FtLNfm.png', '100', '41', 5, 0, 'Chào mừng thế hệ tiếp theo của công nghệ Air. Air Max Dn có hệ thống ống áp suất kép Dynamic Air của chúng tôi, tạo ra cảm giác phản ứng với mỗi bước đi. Điều này tạo ra một thiết kế mang tính tương lai, đủ thoải mái để đeo từ ngày này sang đêm khác. Hãy tiếp tục—Hãy cảm nhận điều không thực.', 4),
(14, 'Nike Air Max Plus', 'air-max-plus-shoes-B03LHK.png', '999', '41', 10, 0, 'Ra mắt lần đầu tiên vào năm 1998, Nike Air Max Plus có một diện mạo mới với thân giày bằng chất liệu tổng hợp co giãn và bộ phận Air để đệm nhẹ theo từng bước đi.', 2),
(15, 'Nike Air Max Scorpion Flyknit', 'air-max-scorpion-flyknit-shoes-4dWrx1 (1).png', '180', 'L', 12, 0, 'Chúng ta đã nhìn về tương lai và nó sẽ rất thoải mái. Với bộ phận Air \"tải điểm\" (đệm tạo thành từng bước của bạn), Air Max Scorpion Flyknit mang lại cảm giác tương lai. Và bởi vì vẻ ngoài rất quan trọng nên chúng tôi đã chế tạo phần trên từ loại vải giống renin vô cùng mềm mại.', 1),
(16, 'Nike Air Max Plus Drift', 'air-max-plus-drift-shoes-FCM3Rg.png', '150', 'S M L', 99, 0, 'Hãy để thái độ của bạn được nâng cao trong Air Max Plus Drift, một trải nghiệm Air được \"điều chỉnh\" mang lại độ ổn định và khả năng giảm chấn cao cấp. Với lưới thoáng mát, màu chuyển sắc và các đường thiết kế lượn sóng nguyên bản, nó tôn vinh phong cách thách thức của bạn.\r\n\r\nMàu sắc hiển thị: Đen/Tím trường/Cam Laser/Đỏ tươi\r\nPhong cách: FD4290-003', 1),
(17, 'Nike Impact 4', 'impact-4-basketball-shoes-CcJxBx.png', '100', 'S, M, L', 12, 0, 'Nâng cao trò chơi và bước nhảy của bạn. Được trang bị đệm Max Air ở gót chân, đôi giày nhẹ, an toàn này giúp bạn lên khỏi mặt đất một cách tự tin và tiếp đất thoải mái. Ngoài ra, cao su bọc các bên để tăng độ bền và ổn định.\r\n\r\nMàu sắc hiển thị: Đen/Đỏ thẫm sáng/Xám sói/Trắng\r\nPhong cách: DM1124-002', 1),
(18, 'Nike Air Max Excee', 'air-max-excee-shoes-BND2jb.png', '99', '41', 10, 0, 'Hòa vào phong cách với Air Max Excee để có phong cách thách thức thời gian. Lấy cảm hứng từ Air Max 90, những đôi giày này mang hơi hướng hiện đại vào biểu tượng huyền thoại thông qua chất liệu hỗn hợp và tỷ lệ méo mó.', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `email` varchar(199) NOT NULL,
  `sdt` varchar(20) NOT NULL,
  `diachi` varchar(100) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `sdt`, `diachi`, `role`) VALUES
(1, 'ph45933', '123', 'thanhf1122003@gmail.com', '098765432', '304 Mỹ Đình-Nam Từ Liêm -Hà Nội', 0),
(8, 'admin', '1', 'abc3@gmail.com', '012143435', ' 13 P. Trịnh Văn Bô, Xuân Phương, Nam Từ Liêm, Hà Nội', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_bl` (`iduser`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_idbill` (`idbill`),
  ADD KEY `FK_iduser` (`iduser`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_sanpham` (`iddm`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `FK_bl` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `FK_idbill` FOREIGN KEY (`idbill`) REFERENCES `bill` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_iduser` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `FK_sanpham` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
