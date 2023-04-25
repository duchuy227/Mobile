-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th4 25, 2023 lúc 04:40 PM
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
-- Cơ sở dữ liệu: `mobile_db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `id` int(20) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Date_of_birth` date NOT NULL,
  `phone_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id`, `username`, `password`, `email`, `Date_of_birth`, `phone_number`) VALUES
(1, 'huy', '123456', 'huy@gmail.com', '2023-04-26', '0987654321'),
(11, 'aaaa', '123456', 'aaaa@gmail.com', '2023-04-11', '01238575784'),
(16, 'leduchuy', '12345678', 'duchuy@gmail', '2023-04-07', '035775833847'),
(17, 'ducminh', '123456', 'ducminh@gmail.com', '2023-04-05', '0987654321');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brand`
--

CREATE TABLE `brand` (
  `brandid` int(50) UNSIGNED NOT NULL,
  `brandName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `brand`
--

INSERT INTO `brand` (`brandid`, `brandName`) VALUES
(1, 'Apple'),
(2, 'Samsung'),
(3, 'Xiaomi'),
(4, 'Oppo'),
(5, 'Nokia');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`) VALUES
(1, 'Oppo Renno 8', 190),
(2, 'Xiaomi Redmi 12C', 236);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `productID` varchar(20) NOT NULL,
  `productName` varchar(100) NOT NULL,
  `productIMG` text NOT NULL,
  `productPrice` float NOT NULL,
  `description` text NOT NULL,
  `brandid` int(50) UNSIGNED NOT NULL,
  `specific_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`productID`, `productName`, `productIMG`, `productPrice`, `description`, `brandid`, `specific_description`) VALUES
('1', 'Iphone 13', './image/iphone13.jpeg', 300, 'Con chip Apple A15 Bionic siêu mạnh được sản xuất trên quy trình 5 nm giúp iPhone 13 đạt hiệu năng ấn tượng, với CPU nhanh hơn 50%, GPU nhanh hơn 30% so với các đối thủ trong cùng phân khúc.', 1, 'Màn hình Super Retina XDR độ sáng cao, tiết kiệm pin'),
('111', 'Duc huy', './image/image.jpeg', 115, 'helloo', 5, 'google'),
('a12', 'Samsung Galaxy S23', './image/samsung.jpeg', 123, 'Samsung Galaxy S23 5G 128GB chắc hẳn không còn là cái tên quá xa lạ đối với các tín độ công nghệ hiện nay, được xem là một trong những gương mặt chủ chốt đến từ nhà Samsung với cấu hình mạnh mẽ bậc nhất, camera trứ danh hàng đầu cùng lối hoàn thiện vô cùng sang trọng và hiện đại.', 2, 'Sở hữu lối thiết kế sang trọng'),
('A22', 'Iphone 12', './image/iphone12.jpeg', 201, 'Trong những tháng cuối năm 2020, Apple đã chính thức giới thiệu đến người dùng cũng như iFan thế hệ iPhone 12 series mới với hàng loạt tính năng bứt phá, thiết kế được lột xác hoàn toàn, hiệu năng đầy mạnh mẽ và một trong số đó chính là iPhone 12 64GB.', 1, 'Hiệu năng vượt xa mọi giới hạn'),
('O1', 'Oppo A55', './image/oppo1.jpeg', 121, 'OPPO cho ra mắt OPPO A55 4G chiếc smartphone giá rẻ tầm trung có thiết kế đẹp mắt, cấu hình khá ổn, cụm camera chất lượng và dung lượng pin ấn tượng, mang đến một lựa chọn trải nghiệm thú vị vừa túi tiền cho người tiêu dùng.', 4, 'Lớp “áo” đẹp mãn nhãn'),
('O11', 'Oppo Renno 8', './image/oppo.jpeg', 190, 'Tiếp nối sự thành công rực rỡ đến từ các thế hệ trước đó thì chiếc OPPO Reno8 T 5G 256GB cuối cùng đã được giới thiệu chính thức tại Việt Nam, được định hình là dòng sản phẩm thuộc phân khúc tầm trung với camera 108 MP, con chip Snapdragon 695 cùng kiểu dáng thiết kế mặt lưng và màn hình bo cong hết sức nổi bật.', 4, 'Thiết kế với kiểu dáng bắt mắt'),
('S06', 'Samsung galaxy A34', './image/samsung1.jpeg', 234, 'Samsung Galaxy A34 5G là mẫu điện thoại thông minh tầm trung mới của Samsung được ra mắt vào tháng 03/2023. Thiết bị hứa hẹn sẽ cung cấp kết nối 5G hiện đại và một hiệu suất ổn định để mang lại trải nghiệm mượt mà cho người dùng.', 2, 'Thiết kế cá tính, màu sắc trẻ trung'),
('X01', 'Xiaomi Redmi 12C', './image/xiaomi.jpeg', 236, 'Xiaomi Redmi 12C 64GB là một thiết bị di động tầm trung được giới thiệu bởi Xiaomi, với cấu hình vượt trội so với các đối thủ trong cùng phân khúc, điều này nhờ trang bị con chip MediaTek Helio G85 mạnh mẽ giúp máy có thể xử lý tốt nhiều tác vụ. Hơn nữa, với bộ ống kính chất lượng 50 MP cho phép bạn chụp ảnh chất lượng, sắc nét và đẹp mắt.', 3, 'Ngoại hình trẻ trung hiện đại');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Chỉ mục cho bảng `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brandid`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`),
  ADD KEY `brandid` (`brandid`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `brand`
--
ALTER TABLE `brand`
  MODIFY `brandid` int(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`brandid`) REFERENCES `brand` (`brandid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
