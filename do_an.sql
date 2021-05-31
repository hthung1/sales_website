-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 16, 2021 lúc 01:26 AM
-- Phiên bản máy phục vụ: 10.4.10-MariaDB
-- Phiên bản PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `do_an`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `comment` text NOT NULL,
  `ngaygio` text NOT NULL,
  `iduser` int(11) NOT NULL,
  `idhanghoa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `name`, `comment`, `ngaygio`, `iduser`, `idhanghoa`) VALUES
(10, 'hung', 'alo', 'Monday. 28, 12, 2020 at 22:28', 1, 42),
(12, 'hung', 'hay', 'Tuesday. 29, 12, 2020 at 10:51', 1, 42),
(15, 'hung', 'chào blog 32', 'Saturday. 02, 01, 2021 at 14:01', 1, 32),
(17, 'haihiw', '123', 'Monday. 11, 01, 2021 at 03:36', 13, 25),
(18, 'admin', 'ok', 'Monday. 11, 01, 2021 at 03:38', 11, 25),
(29, 'haihiw', '<p>3</p>\n', 'Monday. 11, 01, 2021 at 04:23', 13, 25),
(30, 'hung', '<p>321</p>\n', 'Tuesday. 12, 01, 2021 at 13:19', 1, 25),
(31, 'hung', '<p>okokok</p>\n', 'Wednesday. 13, 01, 2021 at 09:47', 1, 25);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `tendanhmuc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `tendanhmuc`) VALUES
(2, 'Bánh'),
(3, 'Chè'),
(4, 'Ăn Vặt'),
(5, 'Đồ Uống');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dathang`
--

CREATE TABLE `dathang` (
  `id` int(11) NOT NULL,
  `idhanghoa` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `dongia` double NOT NULL,
  `iduser` int(11) NOT NULL,
  `idhoadon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dathang`
--

INSERT INTO `dathang` (`id`, `idhanghoa`, `soluong`, `dongia`, `iduser`, `idhoadon`) VALUES
(54, 27, 1, 1.85, 13, 44),
(55, 26, 2, 3.9, 13, 44),
(56, 26, 1, 1.95, 1, 45),
(57, 27, 3, 5.55, 1, 45),
(58, 26, 2, 3.9, 13, 47),
(59, 27, 3, 5.55, 13, 47),
(60, 48, 2, 3.7, 13, 47),
(61, 27, 1, 1.85, 1, 48),
(62, 46, 1, 1.85, 1, 49),
(63, 48, 1, 1.85, 1, 49),
(64, 45, 3, 5.55, 1, 50),
(65, 27, 1, 1.85, 1, 51),
(66, 26, 10, 19.5, 1, 52),
(67, 27, 6, 11.1, 1, 52),
(68, 26, 5, 9.75, 1, 53),
(69, 27, 4, 7.4, 1, 54),
(72, 26, 2, 3.9, 6, 55),
(73, 26, 6, 11.7, 6, 56),
(74, 45, 3, 5.55, 6, 57),
(75, 47, 1, 1.85, 6, 57),
(88, 25, 3, 5.55, 1, 91),
(89, 26, 3, 5.85, 1, 91),
(90, 25, 6, 11.1, 1, 92),
(91, 26, 2, 3.9, 1, 92),
(92, 27, 3, 5.55, 1, 92),
(93, 25, 1, 1.85, 14, 93),
(94, 26, 1, 1.95, 14, 93),
(95, 26, 1, 1.95, 14, 94),
(96, 27, 12, 22.2, 14, 94);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanghoa`
--

CREATE TABLE `hanghoa` (
  `id` int(11) NOT NULL,
  `tenhang` text NOT NULL,
  `images` text NOT NULL,
  `soluong` int(11) NOT NULL,
  `dongia` double NOT NULL,
  `mota` text NOT NULL,
  `mota1` text NOT NULL,
  `iddanhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hanghoa`
--

INSERT INTO `hanghoa` (`id`, `tenhang`, `images`, `soluong`, `dongia`, `mota`, `mota1`, `iddanhmuc`) VALUES
(25, 'Bánh Mì', 'item-b1.jpg', 184, 1.85, 'Bánh mì Việt Nam là một loại thức ăn đường phố của Việt Nam bao gồm một ổ bánh mì nướng có da giòn, ruột mềm, bên trong có nhân', '', 2),
(26, 'Bánh Xèo', 'item-b2.jpg', 191, 1.95, 'Bánh xèo là một loại bánh làm từ bột phổ biến ở châu Á, phiên bản bánh xèo của Nhật Bản và Triều Tiên có bột bên ngoài, bên trong có nhân là tôm, thịt, giá đỗ; kimchi, khoai tây, hẹ, thủy sản', 'Một loại bánh làm bằng bột, bên trong có nhân là tôm, thịt, giá, đúc hình tròn. Tùy theo mỗi vùng mà cách chế biến và thưởng thức bánh xèo có khác nhau. Ở Huế, món ăn này thường được gọi là bánh khoái và thường kèm với thịt nướng, nước chấm là nước lèo gồm tương, gan, đậu phộng. Ở miền Nam, bánh có cho thêm trứng, chấm nước mắm chua ngọt. Ở miền Bắc, nhân bánh xèo còn có thêm củ đậu thái mỏng hoặc khoai môn thái sợi. Các loại rau ăn kèm với bánh xèo rất đa dạng gồm rau diếp, cải xanh, diếp cá, tía tô, rau húng, lá quế, lá cơm nguội non...', 2),
(27, 'Bánh Căn', 'item-b3.jpg', 185, 1.85, 'Bánh căn là một loại bánh phổ biến ở vùng Nam Trung Bộ, đặc biệt ở các tỉnh Khánh Hòa, Ninh Thuận, Bình Thuận. Bánh căn có hình dáng gần với bánh khọt ở các tỉnh phía Nam.', 'Bánh căn là một loại bánh phổ biến ở vùng Nam Trung Bộ, đặc biệt ở các tỉnh Khánh Hòa, Ninh Thuận, Bình Thuận. Bánh căn có hình dáng gần với bánh khọt ở các tỉnh phía Nam, nhưng cách làm hoàn toàn khác. Nếu như bánh khọt là loại bột gạo \"chiên\" (vì có dùng dầu mỡ) thì bánh căn là loại bột gạo \"nướng\". Làm bánh căn thường phải có khuôn đúc đặc biệt, thường làm bằng đất nung, và có nhiều lỗ tròn để đặt khuôn. Vì bánh căn nhỏ nên thường tính theo cặp chứ không theo cái, ở giữa có thể quét mỡ hành hoặc đổ trứng. Bánh căn thường ít được dọn cùng rau sống ăn lá, mà thường ăn kèm với xoài xanh, khế chua, dưa leo băm sợi.', 2),
(28, 'Bánh Bèo', 'item-b4.jpg', 200, 1.85, 'Bánh bèo là một món bánh rất thịnh hành ở miền Trung, ngoài ra cũng có nhiều ở miền Nam Việt Nam. Bánh bèo gồm có ba phần chính là bánh làm từ bột gạo, nhân để rắc lên bánh', 'Bánh bèo là một món bánh rất thịnh hành ở miền Trung, ngoài ra cũng khá thịnh hành ở miền Nam Việt Nam.  Bánh bèo gồm có ba phần chính là bánh làm từ bộ gạo, nhân để rắc lên bánh làm bằng tôm xoay nhuyễn, và nước chấm, một hỗn hợp mà nước mắm là thành phần chính. Thành phần phụ của bánh bèo thường là mỡ hành, đậu phộng rang rã nhỏ', 2),
(29, 'Bánh Lọc', 'item-b5.jpg', 200, 2, 'Bánh bột lọc là một loại bánh Việt Nam, có xuất xứ từ Huế, được từ bằng bột sắn được lọc tinh bột, sau đó được luộc một phần nhỏ bột, hoặc dùng nước sôi nhồi kỹ và làm bánh. Nhân bánh ..', 'Để làm nên được những chiếc bánh bột trong trong và dẻo, béo ngậy và thơm thì nguyên liệu cần là bột năng, ba chỉ, tôm cùng mùi thơm đặc trưng của lá chuối. Trước khi bắt đầu làm phần bỏ bánh, người dân Huế thường làm phần nhân trước. Những con tôm tươi được làm sạch và cắt bỏ đầu đuôi, thịt ba chỉ cũng được cắt nhỏ, mang đi rim khô rồi để nguội. Sau khi xong phần nhân bánh, người Huế bắt đầu nhào nặn vỏ bánh. Đây là một công đoạn khá đơn giản, tuy nhiên nếu chưa có nhiều kinh nghiệm thì rất nhiều người phải chật vật ở công đoạn này. Lý do chính là vì bột năng là loại bột dễ bị chảy khi pha nước, không có độ dẻo nhất định như bột nếp hoặc bột mì. Để làm nên những chiếc vỏ bánh hoàn hảo từ bột năng, người Huế phải nhào bột trước với một ít muối, đường và dầu ăn, nhào đều tay để bột mịn và dẻo.   Khâu tạo hình và gói bánh cũng khá quan trọng. Người ta chọn lá chuối để gói bánh bởi mùi thơm đặc biệt. Người gói bánh phải đảm bảo bánh gói cho nhanh, cho khéo. Lá chuối rửa sạch, xé ra từng miếng, để ráo. Hơ lá trên lửa trước khi quét xíu dầu phộng, múc từng phần nhỏ bột đặt vào giữa lá, dùng tay dần mỏng bột, đặt tôm vào giữa, dần bột nối các góc và mép bột lại, gấp hai mép lá chồng lên nhau, bẻ hai đầu xuống dưới. Mỗi chiếc bánh bột lọc bọc một con tôm. Cuối cùng nhẹ nhàng xếp những chiếc bánh bột lọc xinh xinh vào nồi hấp cách thủy, chừng 15 phút là bánh chín.', 2),
(30, 'Bánh Đúc', 'item-b6.jpg', 200, 3, 'Bánh đúc là một loại bánh của Việt Nam, thường được làm bằng bột gạo hoặc bột năng với một số gia vị. Bánh được làm thành tấm to, khi ăn thì cắt nhỏ thành miếng tùy thích. Là món ăn dân dã thịnh hành khắp ba miền.', 'Bánh nấu bằng bột gạo tẻ hoặc bột ngô quấy với nước vôi trong, khi chín đổ ra cho đông thành tảng, thường được ăn kèm với mắm tôm. Bánh đúc là món quà quen thuộc của làng quê.', 2),
(31, 'Chè Bưởi', 'item-c1.jpg', 200, 1.65, 'Là một món chè rất ngon, và mát và được nhiều người ưa thích , đặc biệt được dùng trong những ngày hè nóng nực', '', 3),
(32, 'Chè Thái', 'item-c2.jpg', 200, 2, 'Là một món chè rất ngon, và mát và được nhiều người ưa thích , đặc biệt được dùng trong những ngày hè nóng nực', '', 3),
(33, 'Chè Trôi Nước', 'item-c3.jpg', 200, 2.2, 'Là một món chè rất ngon, và mát và được nhiều người ưa thích , đặc biệt được dùng trong những ngày hè nóng nực', '', 3),
(34, 'Chè Đậu Xanh', 'item-c4.jpg', 200, 1.75, 'Là một món chè rất ngon, và mát và được nhiều người ưa thích , đặc biệt được dùng trong những ngày hè nóng nực', '', 3),
(35, 'Chè Đậu Ván', 'item-c5.jpg', 200, 1.75, 'Là một món chè rất ngon, và mát và được nhiều người ưa thích , đặc biệt được dùng trong những ngày hè nóng nực', '', 3),
(36, 'Chè Hạt Sen', 'item-c6.jpg', 200, 1.85, 'Là một món chè rất ngon, và mát và được nhiều người ưa thích , đặc biệt được dùng trong những ngày hè nóng nực', '', 3),
(37, 'Bánh Tráng Trộn\r\n', 'item-v1.jpg', 200, 1, '', '', 4),
(38, 'Khoai Lang Kén', 'item-v2.jpg', 200, 2.1, '', '', 4),
(39, 'Cá Viên Chiên', 'item-v3.jpg', 200, 1.1, '', '', 4),
(40, 'Bánh Tráng Nướng', 'item-v4.jpg', 200, 1.5, '', '', 4),
(41, 'Phô Mai Chiên', 'item-v5.jpg', 200, 3.1, '', '', 4),
(42, 'Chân Gà', 'item-v6.jpg', 200, 3.2, '', '', 4),
(43, 'Trà Chanh', 'item-d1.jpg', 200, 1, '', '', 5),
(44, 'Trà Tắc', 'item-d2.jpg', 200, 1, '', '', 5),
(45, 'Trà Sữa', 'item-d3.jpg', 200, 3, '', '', 5),
(46, 'Nước Dừa', 'item-d4.jpg', 200, 1, '', '', 5),
(47, 'Nước Mía', 'item-d5.jpg', 200, 0.85, '', '', 5),
(48, 'Nước Cam', 'item-d6.jpg', 200, 1.85, '', '', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `id` int(11) NOT NULL,
  `tongtien` double NOT NULL,
  `ngaymua` text NOT NULL,
  `iduser` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `ngay` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`id`, `tongtien`, `ngaymua`, `iduser`, `status`, `ngay`) VALUES
(44, 5.75, 'Monday. 28, 12, 2020 at 11:18', 13, '0', '2020-12-28'),
(45, 7.5, 'Monday. 28, 12, 2020 at 16:25', 1, '1', '2020-12-28'),
(47, 13.15, 'Monday. 28, 12, 2020 at 17:12', 13, '2', '2020-12-28'),
(48, 1.85, 'Tuesday. 29, 12, 2020 at 15:45', 1, '1', '2020-12-29'),
(49, 3.7, 'Wednesday. 30, 12, 2020 at 16:07', 1, '2', '2020-12-30'),
(50, 5.55, 'Wednesday. 30, 12, 2020 at 16:08', 1, '0', '2020-12-30'),
(51, 1.85, 'Wednesday. 30, 12, 2020 at 17:29', 1, '0', '2020-12-30'),
(52, 30.6, 'Wednesday. 30, 12, 2020 at 18:04', 1, '0', '2020-12-30'),
(53, 9.75, 'Wednesday. 30, 12, 2020 at 18:04', 1, '1', '2020-12-30'),
(54, 7.4, 'Wednesday. 30, 12, 2020 at 18:07', 1, '1', '2021-01-01'),
(55, 3.9, 'Friday. 01, 01, 2021 at 13:47', 6, '0', '2021-01-01'),
(56, 11.7, 'Friday. 01, 01, 2021 at 13:50', 6, '0', '2021-01-01'),
(57, 7.4, 'Friday. 01, 01, 2021 at 13:50', 6, '2', '2021-01-01'),
(91, 11.4, 'Saturday. 02, 01, 2021 at 13:59', 1, '1', '2021-01-02'),
(92, 20.55, 'Saturday. 09, 01, 2021 at 12:45', 1, '2', '2021-01-09'),
(93, 3.8, 'Monday. 11, 01, 2021 at 11:19', 14, '1', '2021-01-11'),
(94, 24.15, 'Monday. 11, 01, 2021 at 11:20', 14, '0', '2021-01-11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reply`
--

CREATE TABLE `reply` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `comment` text NOT NULL,
  `ngaygio` text NOT NULL,
  `iduser` int(11) NOT NULL,
  `idbinhluan` int(11) NOT NULL,
  `idreply` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `reply`
--

INSERT INTO `reply` (`id`, `name`, `comment`, `ngaygio`, `iduser`, `idbinhluan`, `idreply`) VALUES
(2, 'haihiw', 'reply 1', 'Tuesday. 29, 12, 2020 at 09:13', 13, 10, 0),
(36, 'haihiw', 'hawaf', 'Tuesday. 29, 12, 2020 at 11:43', 13, 12, 0),
(49, 'haihiw', '123', 'Tuesday. 29, 12, 2020 at 12:16', 13, 12, 0),
(50, 'haihiw', '321', 'Tuesday. 29, 12, 2020 at 12:16', 13, 12, 0),
(51, 'haihiw', 'ok', 'Tuesday. 29, 12, 2020 at 12:19', 13, 10, 0),
(52, 'haihiw', 'okkk', 'Tuesday. 29, 12, 2020 at 12:19', 13, 10, 0),
(53, 'haihiw', 'okkk', 'Tuesday. 29, 12, 2020 at 12:19', 13, 10, 0),
(54, 'haihiw', 'kkkk', 'Tuesday. 29, 12, 2020 at 12:19', 13, 10, 0),
(59, 'hung', 'chào bạn', 'Saturday. 02, 01, 2021 at 14:01', 1, 15, 0),
(66, 'hung', 'oke', 'Tuesday. 12, 01, 2021 at 13:18', 1, 29, 0),
(67, 'hung', 'oke', 'Tuesday. 12, 01, 2021 at 13:38', 1, 29, 0),
(68, 'hung', 'add', 'Tuesday. 12, 01, 2021 at 13:49', 1, 30, 0),
(69, 'hung', 'oke', 'Wednesday. 13, 01, 2021 at 09:47', 1, 30, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` text NOT NULL,
  `address` varchar(400) NOT NULL,
  `password` varchar(40) NOT NULL,
  `role` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `phone`, `address`, `password`, `role`) VALUES
(1, 'hung', 'Hung', '0905123123', 'Đà Nẵng', '202cb962ac59075b964b07152d234b70', '0'),
(6, 'hung1', 'Hung', '0292922911', 'Quảng Nam', '202cb962ac59075b964b07152d234b70', '0'),
(11, 'admin', 'Admin', '0', '', '202cb962ac59075b964b07152d234b70', '1'),
(12, 'Hungga', 'Hung', '0905939399', 'Đà Nẵng', '202cb962ac59075b964b07152d234b70', '0'),
(13, 'haihiw', 'Hai', '0123456789', 'Đà Nẵng', '202cb962ac59075b964b07152d234b70', '0'),
(14, 'Dat', 'dat', '1234567889', 'Kon Tum', '202cb962ac59075b964b07152d234b70', '0');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `binhluan_ibfk_1` (`idhanghoa`),
  ADD KEY `iduser` (`iduser`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `dathang`
--
ALTER TABLE `dathang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idhanghoa` (`idhanghoa`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `idhoadon` (`idhoadon`);

--
-- Chỉ mục cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iddanhmuc` (`iddanhmuc`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iduser` (`iduser`);

--
-- Chỉ mục cho bảng `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idbinhluan` (`idbinhluan`),
  ADD KEY `iduser` (`iduser`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `dathang`
--
ALTER TABLE `dathang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT cho bảng `reply`
--
ALTER TABLE `reply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`idhanghoa`) REFERENCES `hanghoa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `dathang`
--
ALTER TABLE `dathang`
  ADD CONSTRAINT `dathang_ibfk_1` FOREIGN KEY (`idhanghoa`) REFERENCES `hanghoa` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `dathang_ibfk_2` FOREIGN KEY (`idhoadon`) REFERENCES `hoadon` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `dathang_ibfk_3` FOREIGN KEY (`iduser`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD CONSTRAINT `hanghoa_ibfk_1` FOREIGN KEY (`iddanhmuc`) REFERENCES `danhmuc` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `reply`
--
ALTER TABLE `reply`
  ADD CONSTRAINT `reply_ibfk_1` FOREIGN KEY (`idbinhluan`) REFERENCES `binhluan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reply_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
