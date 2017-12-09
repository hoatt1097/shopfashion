-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2017 at 04:30 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopfashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(10) NOT NULL,
  `image_link` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `image_link`) VALUES
(1, 'images/product/thoi-trang-nu/xanh-1-0636086650350562651.jpg'),
(2, 'images/product/thoi-trang-nu/trang-1-0636054082543242809-num1.jpg,images/product/thoi-trang-nu/trang-1-0636054082543242809-num2.jpg,images/product/thoi-trang-nu/trang-1-0636054082543242809-num3.jpg,images/product/thoi-trang-nu/trang-1-0636054082543242809-num4.jpg'),
(3, 'images/product/thoi-trang-nu/tim-1-0636010025286033752-num1.jpg,images/product/thoi-trang-nu/tim-1-0636010025286033752-num2.jpg,images/product/thoi-trang-nu/tim-1-0636010025286033752-num3.jpg,images/product/thoi-trang-nu/tim-1-0636010025286033752-num4.jpg'),
(4, 'images/product/thoi-trang-nu/den-1-0636008271386029189-num1.jpg,images/product/thoi-trang-nu/den-1-0636008271386029189-num2.jpg,images/product/thoi-trang-nu/den-1-0636008271386029189-num3.jpg,\r\nimages/product/thoi-trang-nu/den-1-0636008271386029189-num4.jpg'),
(5, 'images/product/thoi-trang-nu/do-1-0636207801668764682-num1.jpg,images/product/thoi-trang-nu/do-1-0636207801668764682-num2.jpg,images/product/thoi-trang-nu/do-1-0636207801668764682-num3.jpg,images/product/thoi-trang-nu/do-1-0636207801668764682-num4.jpg'),
(6, 'images/product/thoi-trang-nu/xanhsoc-1-0635935674125854622-num1.jpg,\r\nimages/product/thoi-trang-nu/xanhsoc-1-0635935674125854622-num2.jpg,images/product/thoi-trang-nu/xanhsoc-1-0635935674125854622-num3.jpg,images/product/thoi-trang-nu/xanhsoc-1-0635935674125854622-num4.jpg'),
(7, 'images/product/thoi-trang-nu/hong-1-cm-num1.jpg,images/product/thoi-trang-nu/hong-1-cm-num2.jpg,images/product/thoi-trang-nu/hong-1-cm-num3.jpg,images/product/thoi-trang-nu/hong-1-cm-num4.jpg\r\n'),
(8, 'images/product/thoi-trang-nu/xanh-1-0636011521638009955-num1.jpg,images/product/thoi-trang-nu/xanh-1-0636011521638009955-num2.jpg,images/product/thoi-trang-nu/xanh-1-0636011521638009955-num3.jpg,images/product/thoi-trang-nu/xanh-1-0636011521638009955-num4.jpg'),
(9, 'images/product/thoi-trang-nu/xanh-1-0636030480335378891-num1.jpg,\r\nimages/product/thoi-trang-nu/xanh-1-0636030480335378891-num2.jpg,images/product/thoi-trang-nu/xanh-1-0636030480335378891-num3.jpg,images/product/thoi-trang-nu/xanh-1-0636030480335378891-num4.jpg\r\n'),
(10, 'images/product/thoi-trang-nu/do-1-0636046279689386571-num1.jpg,images/product/thoi-trang-nu/do-1-0636046279689386571-num2.jpg,images/product/thoi-trang-nu/do-1-0636046279689386571-num3.jpg,images/product/thoi-trang-nu/do-1-0636046279689386571-num4.jpg'),
(11, 'images/product/thoi-trang-nu/xanh-2-0636028970049926215-num1.jpg,images/product/thoi-trang-nu/xanh-2-0636028970049926215-num2.jpg,images/product/thoi-trang-nu/xanh-2-0636028970049926215-num3.jpg,images/product/thoi-trang-nu/xanh-2-0636028970049926215-num4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `brand` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int(10) NOT NULL,
  `sale` int(11) NOT NULL,
  `descrition` varchar(5000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(10) NOT NULL,
  `image_id` int(10) NOT NULL,
  `image_link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `brand`, `color`, `price`, `status`, `sale`, `descrition`, `category_id`, `image_id`, `image_link`) VALUES
(1, 'Đầm lenin 4 túi thương hiệu Khánh Linh - Màu xanh', 'TWIN', 'Xanh', 'null', 1, 60, 'Cùng với những thiết kế tinh tế mang đến vẻ ngoài trẻ trung, duyên dáng và hiện đại cho các bạn gái mỗi khi xuống phố. Chất liệu vải thông thoáng, thấm hút mồ hôi tạo cảm giác dễ chịu cho người mặc. Hãy nhanh tay mua ngay để nhận được những giá trị hấp dẫn bạn nhé!', 4, 1, 'images/product/thoi-trang-nu/xanh-1-0636086650350562651.jpg'),
(2, 'Đầm Đuôi Cá Form Suông Màu Trắng TP61', 'The fashion', 'Trắng,Xanh', '315.000đ', 0, 10, 'Cùng với những thiết kế tinh tế mang đến vẻ ngoài trẻ trung, duyên dáng và hiện đại cho các bạn gái mỗi khi xuống phố. Chất liệu vải thông thoáng, thấm hút mồ hôi tạo cảm giác dễ chịu cho người mặc. Hãy nhanh tay mua ngay để nhận được những giá trị hấp dẫn bạn nhé!', 4, 2, 'images/product/thoi-trang-nu/trang-1-0636054082543242809.jpg'),
(3, 'Đầm dây Hàn Quốc hoa tím đính nút', 'Spandex', 'Tím', '199.000đ', 1, 0, 'Cùng với những thiết kế tinh tế mang đến vẻ ngoài trẻ trung, duyên dáng và hiện đại cho các bạn gái mỗi khi xuống phố. Chất liệu vải thông thoáng, thấm hút mồ hôi tạo cảm giác dễ chịu cho người mặc. Hãy nhanh tay mua ngay để nhận được những giá trị hấp dẫn bạn nhé!', 4, 3, 'images/product/thoi-trang-nu/tim-1-0636010025286033752.jpg'),
(4, 'Đầm công sở xòe nhấn eo sát nách', 'The fashion', 'Đen', '299.000đ', 1, 0, 'Đầm công sở xòe nhấn eo sát nách thiết kế thanh lịch, mang đến phong cách trẻ trung, sang trọng cho chị em phụ nữ.\r\nKiểu dáng form hơi xòe nhẹ tôn lên vóc dáng cân đối, cổ tròn tay sát nách, ở phần thân chít eo tạo điểm nhấn nổi bật cho trang phục.\r\nKhóa kéo nổi sau lưng được thiết kế chắc chắn, cho bạn nữ thoải mái vận động khi diện đầm nơi công sở hoặc lúc dạo phố.\r\nChất liệu thun nhũ mát mẻ, tạo cảm giác dễ chịu khi mặc.\r\nXuất xứ: Việt Nam', 4, 4, 'images/product/thoi-trang-nu/den-1-0636008271386029189.jpg'),
(5, 'Bộ mặc nhà Nutica lai cách điệu QN-TN màu đô', 'The fashion', 'Đỏ', '199.000đ', 1, 0, 'Size M: Dài 93; Vai 35; Ngực 80; Eo nhún 50\r\nSize L: Dài 94; Vai 36; Ngực 82; Eo nhún 52\r\nSize XL: Dài 95; Vai 37; Ngực 84; Eo nhún 54 \r\nBST Thời trang sành điệu VNXK cao cấp được thiết kế thời trang, duyên dáng với những chân váy sành điệu, trẻ trung, những chiếc áo kiểu nền nã, hiện đại thực sự là lựa chọn hoàn hảo cho các cô nàng thanh lịch. Được may từ chất liệu vải mềm mịn, thoáng mát, các sản phẩm được tạo nên form dáng chuẩn và đem tới gu thẩm mỹ riêng cho bạn gái mỗi khi diện. Nhanh tay để chọn ngay cho mình bộ trang phục ưng ý nhất nào các nàng!', 5, 5, 'images/product/thoi-trang-nu/do-1-0636207801668764682.jpg'),
(6, 'Đồ mặc nhà Jumsuit cổ V sọc xanh Twins', 'Spandex', 'Xanh', '350.000đ', 1, 0, 'Thiết kế trẻ trung, màu sắc tươi mới mang đến bạn gái diện mạo gọn gàng và năng động ngay cả khi ở nhà.\r\nKiểu dáng đơn giản, form lửng thoải mái, tạo cho bạn sự khỏe khoắn, trẻ trung.\r\nHọa tiết tinh tế và đẹp mắt đem lại sự đáng yêu, duyên dáng.\r\nChất liệu: cotton thoáng mát, bạn dễ dàng làm việc nhà hay hoạt động một cách tự nhiên, thoải mái.\r\nXuất xứ: Việt Nam.', 5, 6, 'images/product/thoi-trang-nu/xanhsoc-1-0635935674125854622.jpg'),
(7, 'Đồ mặc nhà áo tay con, quần short - Sọc hồng KIR24116/12147', 'Spandex', 'Hồng', '129.000đ', 1, 0, 'Thiết kế trẻ trung, màu sắc tươi mới mang đến bạn gái diện mạo gọn gàng và năng động ngay cả khi ở nhà.\r\nKiểu dáng đơn giản, form lửng thoải mái, tạo cho bạn sự khỏe khoắn, trẻ trung.\r\nHọa tiết tinh tế và đẹp mắt đem lại sự đáng yêu, duyên dáng.\r\nChất liệu: cotton thoáng mát, bạn dễ dàng làm việc nhà hay hoạt động một cách tự nhiên, thoải mái.\r\nXuất xứ: Việt Nam.', 5, 7, 'images/product/thoi-trang-nu/hong-1-cm.jpg'),
(8, 'Jumsuit cổ V sọc xanh Twins', 'The fashion', 'Xanh', '99.000đ', 0, 0, 'BST Thời trang sành điệu VNXK cao cấp được thiết kế thời trang, duyên dáng với những chân váy sành điệu, trẻ trung, những chiếc áo kiểu nền nã, hiện đại thực sự là lựa chọn hoàn hảo cho các cô nàng thanh lịch. Được may từ chất liệu vải mềm mịn, thoáng mát, các sản phẩm được tạo nên form dáng chuẩn và đem tới gu thẩm mỹ riêng cho bạn gái mỗi khi diện. Nhanh tay để chọn ngay cho mình bộ trang phục ưng ý nhất nào các nàng!', 5, 8, 'images/product/thoi-trang-nu/xanh-1-0636011521638009955.jpg'),
(9, 'Áo khoác kiểu bóng chày in hình cô gái màu xanh', 'Spandex', 'Xanh', '150.000đ', 1, 30, 'Thiết kế trẻ trung, khỏe khoắn, form áo vừa vặn, sản phẩm sẽ là chiếc áo khoác lý tưởng mang đến bạn sự thoải mái, dễ chịu mỗi khi mặc.\r\nVừa có tác dụng giúp bạn che bớt ánh nắng, khói bụi khi đi ra ngoài vừa giữ ấm vào buổi tối.\r\nKiểu áo có mũ, tay dài bo tiện dụng giúp bảo vệ làn da và mái tóc cho bạn gái.\r\nÁo có khóa kéo chắc chắn phối túi hai bên cá tính tạo nên vẻ ngoài trẻ trung.\r\nChất liệu: vải nỉ.\r\nXuất xứ: Việt Nam', 6, 9, 'images/product/thoi-trang-nu/xanh-1-0636030480335378891.jpg'),
(10, 'Áo khoác nỉ in chữ ADIDAS màu đỏ', 'Vascara', 'Đỏ', '350.000đ', 1, 0, 'Thiết kế trẻ trung, khỏe khoắn, form áo vừa vặn, sản phẩm sẽ là chiếc áo khoác lý tưởng mang đến bạn sự thoải mái, dễ chịu mỗi khi mặc.\r\nVừa có tác dụng giúp bạn che bớt ánh nắng, khói bụi khi đi ra ngoài vừa giữ ấm vào buổi tối.\r\nKiểu áo có mũ, tay dài bo tiện dụng giúp bảo vệ làn da và mái tóc cho bạn gái.\r\nÁo có khóa kéo chắc chắn phối túi hai bên cá tính tạo nên vẻ ngoài trẻ trung.\r\nChất liệu: vải nỉ.\r\nXuất xứ: Việt Nam', 6, 10, 'images/product/thoi-trang-nu/do-1-0636046279689386571.jpg'),
(11, 'Áo khoác thun cotton chấm bi màu xanh', 'Spandex', 'Xanh chấm bi', '250.000đ', 1, 0, 'Thiết kế trẻ trung, khỏe khoắn, form áo vừa vặn, sản phẩm sẽ là chiếc áo khoác lý tưởng mang đến bạn sự thoải mái, dễ chịu mỗi khi mặc.\r\nVừa có tác dụng giúp bạn che bớt ánh nắng, khói bụi khi đi ra ngoài vừa giữ ấm vào buổi tối.\r\nKiểu áo có mũ, tay dài bo tiện dụng giúp bảo vệ làn da và mái tóc cho bạn gái.\r\nÁo có khóa kéo chắc chắn phối túi hai bên cá tính tạo nên vẻ ngoài trẻ trung.\r\nChất liệu: vải nỉ.\r\nXuất xứ: Việt Nam', 6, 11, 'images/product/thoi-trang-nu/xanh-2-0636028970049926215.jpg'),
(12, 'Vest xanh vân vuông', 'Vascara', 'Xanh', '2.800.000đ', 1, 0, '', 9, 12, 'images/product/thoi-trang-nam/vest-xam-ke-soc-an-tuong-127.jpg'),
(13, 'Vest xanh vân vuông', 'Spandex', 'Xanh', '2.800.000đ', 1, 0, '', 9, 13, 'images/product/thoi-trang-nam/vest-xam-ke-soc-an-tuong-127.jpg'),
(14, 'Quần Âu màu đen kẻ sọc', 'Vascara', 'Đen', '600.000đ', 1, 0, '', 8, 14, 'images/product/thoi-trang-nam/quan-au-mau-den-ke-soc-117.jpg'),
(15, 'Sơ mi trắng', 'Spandex', 'Trắng', '600.000đ', 1, 0, '', 7, 15, 'images/product/thoi-trang-nam/so-mi-trang-cham-den-nho-tinh-te-321.jpg'),
(16, 'Sơ mi xám chấm bi chìm', 'Spandex', 'Xám', '600.000đ', 1, 0, '', 7, 16, 'images/product/thoi-trang-nam/so-mi-xam-cham-bi-chim-316.jpg'),
(17, 'Sơ mi dài tay xanh navy lịch lãm', 'Spandex', 'Xanh', '600.000đ', 1, 0, '', 7, 17, 'images/product/thoi-trang-nam/so-mi-xanh-tim-hoa-tiet-tron-306.jpg'),
(18, 'Thắt lưng da khóa tròn chạm khắc nổi', 'The fashion', 'Đà', '600.000đ', 1, 0, '', 10, 18, 'images/product/phu-kien/that-lung-da-khoa-tron-cham-khac-noi-226.png'),
(19, 'Thắt lưng da khóa vân mạ vàng', 'Nice', '', '600.000đ', 1, 0, '', 10, 19, 'images/product/phu-kien/that-lung-da-khoa-van-ma-vang-230-ff0c1375-f337-4d21-b8b8-bb2e91787170.png'),
(20, 'Đồng hồ Carnival phong cách châu Âu', 'Nice', '', '3.000.000đ', 1, 0, '', 10, 20, 'images/product/phu-kien/2016-Top-10-Brand-Carnival-Automatical-Mechanical.jpg'),
(21, 'Giày tây nam', 'Nice', '', '1.800.000đ', 1, 0, '', 10, 21, 'images/product/phu-kien/giay-da-tay-nam.jpg'),
(22, 'Giày tây nam cao cấp', 'Nice', '', '2.600.000đ', 1, 0, '', 10, 22, 'images/product/phu-kien/images.jpg'),
(23, 'Giày cao gót mũi đế vương nữ xinh', 'Spandex', '', '900.000đ', 1, 0, '', 11, 23, 'images/product/phu-kien/giay-cao-got-ho-mui-de-vuong-nu-xinh-1m4G3-OIk1B3.jpg'),
(24, 'Túi xách thời trang nữ', 'Spandex', '', '1.500.000', 1, 0, '', 11, 24, 'images/product/phu-kien/tui-xach-nu-svn.jpg'),
(25, 'Ví thời trang nữ', 'The fashion', 'Xanh dương', '900.000đ', 1, 0, '', 11, 25, 'images/product/phu-kien/vi-nu-da-that-nucelle-070363-11-1-jpeg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(10) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `name`, `parent_id`) VALUES
(1, 'Thời trang nam', 0),
(2, 'Thời trang nữ', 0),
(3, 'Phụ kiện', 0),
(4, 'Váy đầm', 1),
(5, 'Đồ mặc nhà', 1),
(6, 'Áo khoát nữ', 1),
(7, 'Áo thun nam', 2),
(8, 'Quần jean nam', 2),
(9, 'Áo vest nam', 2),
(10, 'Phụ kiện nam', 3),
(11, 'Phụ kiện nữ', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
