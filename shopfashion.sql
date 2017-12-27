-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2017 at 02:02 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shopfashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `bangtin`
--

CREATE TABLE IF NOT EXISTS `bangtin` (
  `idtin` int(11) NOT NULL,
  `idnhom` int(11) NOT NULL,
  `tieude` longtext NOT NULL,
  `trichdan` longtext NOT NULL,
  `anhtrichdan` longtext NOT NULL,
  `noidung` longtext NOT NULL,
  `ngaydang` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bangtin`
--

INSERT INTO `bangtin` (`idtin`, `idnhom`, `tieude`, `trichdan`, `anhtrichdan`, `noidung`, `ngaydang`) VALUES
(1, 1, 'Điểm danh những xu hướng thời trang hot nhất năm 2017', 'Không biết những trào lưu được lòng tín đồ thời trang Việt nhất trong năm 2017 là gì mời các bạn cùng điểm danh với chúng tôi nhé!\r\n', 'images/news/xuHuong2017.jpg', 'Không biết những trào lưu được lòng tín đồ thời trang Việt nhất trong năm 2017 là gì mời các bạn cùng điểm danh với chúng tôi nhé!\r\nÁo thun logo: Vài năm trước, những mẫu áo thun graphic trở thành xu hướng độc đáo, thì năm 2017, T-shirt đơn giản in logo lại nhận được sự yêu thích từ các bạn trẻ Việt và thế giới. Sự thoải mái, năng động của item này đến từ phom dáng suông, chất liệu cotton cùng hình ảnh logo thiết kế sành điệu.\r\nXu hướng xếp pli: Mang phong cách hoài cổ và nữ tính, qua mấy mùa thời trang, những chiếc váy xếp ly vẫn đang là xu hướng ''hot'' và được nhiều sao Việt yêu thích.\r\nTrong mùa xuân hè 2017, những đường xếp li được các nhà thiết kế trên khắp thế giới biết tấu mới lạ khi đan xen với nhau trên nền chất liệu vải rủ, nhẹ hay lấp lánh ánh kim và rất được lòng các tín đồ thời trang.\r\nHọa tiết kẻ sọc: Không khó để bắt gặp hình ảnh của loại họa tiết trẻ trung này trong mỗi buổi tiệc sang trọng của giới giải trí hay ''cặp kè'' cùng các người đẹp trên mọi tuyến phố mùa hè 2017. Các người đẹp thậm chí chấp nhận bị ''đụng hàng'' bởi sức hút trẻ trung, thanh lịch của trang phục kẻ sọc quả thật rất khó chối từ.\r\nÁo khoác kẻ ô: Những mẫu blazer họa tiết kẻ ô trở thành xu hướng thời trang nổi bật trong năm 2017 với sự biến tấu mạnh mẽ cùng phom dáng cứng cáp. Từ nhà mốt Alexander Wang, Stella McCartney cho đến Calvin Klein cũng đều thể hiện chất riêng nhằm mang đến hình ảnh người phụ nữ cá tính, quyền lực trong xã hội ngày nay.\r\nShort jean nửa mông: Là cô nàng yêu thích sự nóng bỏng và sexy tất nhiên bạn không thể nào bỏ lỡ item cứ mặc vào là hot hòn họt này được. Đúng vậy, chiếc quần được nhắc tới là short jean nửa mông, giúp các cô gái khoe vòng 3 nửa kín nửa hở với vẻ sexy đạt tới cực điểm. Món đồ không chỉ thách thức thị giác người nhìn mà nó còn thể hiện sự bản lĩnh của người mặc. Vậy nên, các bạn gái phải cân nhắc thật kỹ trước khi định diện chúng ra đường nhé.\r\nMũ nồi: Đây là xu hướng phụ kiện nổi bật nhất trong năm 2017. Sau nhiều mùa bị lãng quên, item này quay trở lại với sự xuất hiện trong show diễn thu đông của nhà mốt Dior. Mũ nồi mang kiểu dáng mềm, hình tròn, phẳng được thiết kế bằng vải dệt, len, cotton. Phụ kiện xuất hiện vào thế kỷ 19 từ giới quân nhân Pháp và Tây Ban Nha. Về sau, chiếc mũ này đã trở thành item được yêu thích từ nhiều tầng lớp khác nhau trên thế giới.\r\nHọa tiết kẻ ngang là một trong những xu hướng hot dường như chưa bao giờ lỗi mốt và tiếp tục trở thành xu hướng được yêu thích năm 2017. Trang phục kẻ sọc ngang có thể dễ dàng giúp bạn gái cân bằng cơ thể. Mặc dù chúng ta đã biết rằng các đường sọc dọc tạo chiều dài trong khi các đường sọc ngang tạo chiều rộng, tuy nhiên bạn có vóc dáng như thế nào vẫn có thể mặc để tạo ra sự cân bằng. Hơn thế, những kiểu áo thun kẻ sọc ngang đơn giản cũng dễ dàng mix với nhiều trang phục với nhau như quần jeans, quần short, chân váy...\r\nSơmi trắng dạng váy: Những chiếc sơ mi trắng đơn giản nhưng luôn ẩn chứa sức quyến rũ mãnh liệt, mê hoặc hoàn toàn mọi phong cách của phái đẹp. Váy sơmi vẫn mang dáng vẻ của một chiếc áo với hàng cúc chạy dọc thông thường, nhưng phần thân được kéo dài tạo thành hình váy suông, váy maxi... Chính bởi sự kết hợp độc đáo đó, cho nên mẫu trang phục này rất dễ mặc trong nhiều trường hợp, với nhiều phong cách khác nhau và đã trở thành xu hướng được yêu thích. Từ việc nền nã chỉn chu khi đi làm mỗi ngày cho đến cá tính phóng khoáng mỗi buổi tụ tập bạn bè, chiếc váy này đã trở thành lựa chọn đầu bảng của nhiều cô nàng ngay trong lần thử đồ đầu tiên. \r\nHoạ tiết hoa lá: Thu đông 2017 là khoảng thời gian lên ngôi của họa tiết hoa lá. Không chỉ xuất hiện trên áo khoác, sơ mi mà chúng còn biến tấu qua những mẫu chân váy trẻ trung hay phom dáng maxi nữ tính. Trào lưu này mang đến sức hút khi thể hiện được vẻ nhẹ nhàng, sành điệu của người phụ nữ. Các tín đồ thời trang đã phá cách hơn khi kết hợp trang phục hoa lá đồng điệu cùng những mẫu phụ kiện màu sắc như túi xách hay giày cao gót đinh tán. \r\nTúi cói:Năm nay, các nhà mốt xa xỉ đều đồng loạt trình làng các thiết kế túi xách cói khác nhau. Sự đa dạng về mẫu mã từ kiểu dáng hộp, túi picnic hay thậm chí túi tròn đều tạo nên vẻ bắt mắt, nhẹ nhàng cho phái nữ trong những chuyến du lịch.\r\nÁo khoác độn vai:Những chiếc khoác cầu vai cứng cáp trở nên phổ biến và gây mê hoặc giới mộ điệu trong năm 2017. Xu hướng này được yêu thích khi mang tinh thần hoài cổ gợi nhớ về thập niên 1880 - thời kỳ hoàng kim của vẻ đẹp mạnh mẽ. Trang phục này xuất hiện rất nhiều trong những bức ảnh street style của giới mộ điệu khắp nơi trên thế giới.\r\nTrên đây là những trào lưu được lòng tín đồ thời trang Việt nhất trong năm 2017 và bạn đã sưu tập cho mình hết thảy những phong cách ấy chưa. Nếu chưa thì hãy tiếp tục bổ sung vào tủ đồ của mình nhé vì những xu hướng thời trang trên đây vẫn đang được yêu thích và chưa có dấu hiệu hạ nhiệt đâu nhé.', '2017-12-17 13:00:00'),
(2, 1, 'Thời tiết có mưa lạnh đến thế nào, thì chỉ cần chiếc áo này thôi là đủ ấm', 'Đúng là chẳng có gì ấm áp và phù hợp hơn với tiết trời mưa rét những ngày này ngoài chiếc áo phao to sụ.', 'images/news/thoiTietMuaLanh.jpg', 'Miền Bắc đang bước vào những ngày rét đậm với nhiệt độ xuống thấp đột ngột, ai ra đường cũng phải chuẩn bị cho mình những trang phục ấm áp nhất. Ngay lúc này những chiếc áo khoác dày dặn, có khả năng giữ ấm nhưng vẫn đảm bảo tính thời trang trở thành mối quan tâm hàng đầu của mọi cô gái. Chẳng có gì ấm áp và giúp bạn tránh gió tốt hơn những chiếc áo phao. Đừng vội chán ghét chúng bởi vẻ ngoài to sụ và kiểu dáng đơn điệu. Hãy thỏa sức sáng tạo cùng chúng, phối với skinny jeans, chân váy bó sát và những chiếc áo len, áo phông trẻ trung. Chắc chắn, bạn sẽ thấy ngạc nhiên bởi hóa ra chiếc áo cứng nhắc này cũng... thú vị phết đấy.\r\nNhững ngày trời lạnh thế này, áo phao trở thành món đồ chắn gió giữ ấm hiệu quả nhất. Lựa chọn những gam màu trung tính với sắc độ sáng nhẹ nhàng giúp tổng thể hài hòa và tinh tế hơn. Thiết kế áo phao màu trắng đơn giản mix cùng quần skinny trắng xuyệt tông, bộ canh thêm ấm áp và nền nã khi có sự góp mặt của áo len cao cổ màu ghi sáng.\r\nĐến công sở với một set đồ đơn giản nhưng luôn tinh tế, thanh lịch và quan trọng là luôn giữ ấm tối đa cho cơ thể. Một set layer quen thuộc với áo len trơn màu và sơmi trằng bẻ cổ ra ngoài, thêm áo phao đen sur ton với quần âu, set đồ trung tính rất dễ ứng dụng trong những ngày nhiệt độ lạnh tăng cường như hiện tại.\r\nNgay cả khi trời lất phất mưa thì cùng chẳng hề hấn gì, bởi áo phao khác hẳn áo khoác dạ, chất liệu của phao luôn sạch sẽ và chống thấm nước nên bạn hoàn toàn yên tâm khi diện. Trước kiểu thời tiết âm u như hiện tại, khéo chọn một thiết kế áo có sắc màu một chút kết hợp cùng áo len và skinny, đừng quên thắt thêm khăn quàng giữ ấm phần cổ, bạn có ngay một set đồ tiện dụng và cực kỳ tinh tế trong ngày đại hàn.\r\nÁo phao dày dặn, to sụ thế này nhưng vẫn có nhiều kiểu dáng cho các nàng lựa chọn. Áo phao dáng lửng sẽ rất hợp với những cô nàng trẻ trung năng động.\r\nDiện một chiếc áo phao ấm áp như thế này, bạn chỉ cần mặc bên trong một chiếc áo len mỏng cùng quần jeans là đã sẵn sàng một set đồ chắn gió hiệu quả.\r\nCô nàng nữ tính điệu đà nếu muốn diện váy trong những ngày trời chuyển lạnh thì vẫn cứ yên tâm vì chỉ cần khác ngoài với áo phao to sụ là đã đủ ấm áp rồi. Áo phao tuy vẻ ngoài có phân to dày và hơi thô nhưng nó lại có khả năng kết hợp với đue kiểu trang phục có trong tủ đồ của bạn đấy.\r\nMột nàng công sở chỉn chu đương nhiên sẽ có yêu cầu cao hơn cho set đồ của mình. Khi đó những thiết kế áo phao dáng dài sẽ là lựa chọn tối ưu, vốn dĩ kiểu dáng áo đã giúp các nàng ghi điểm với vẻ ngoài tinh tế, gọn gàng, nay lại kết hợp xuỵet tông cùng áo len mỏng và boots da lại càng cho ra một set đồ hài hòa và thanh lịch hơn cả.\r\nNhững thiết kế áo phao dáng dài sẽ không còn nặng nề hay cồng kềnh nữa khi bạn khéo léo lựa chọn những set đồ đi kèm với nó. Bạn có thể mix đồ năng động với áo len trơn màu nổi cùng quần jeans và boots để dạo phố thật năng động và phong cách.\r\nLựa chọn màu sắc sóng đôi cùng nhau chính là cách để các nàng tránh việc bị dáng áo phao to rộng "nuốt chửng" vóc dáng. Các nàng có thể chọn áo mặc trong xuyệt tông cùng áo phao, hoặc lựa chọn những gam màu khác sắc độ nhưng xếp vào cùng bảng màu trầm nền nã để bộ đồ có sự liên mạch và liên quan đến nhau.\r\nCape', '2017-12-17 13:01:01'),
(3, 1, 'Với cách mix đồ Giáng sinh "cute lạc lối" này, cần gì có người yêu, chỉ cần hội bạn thân là đủ rồi!', 'Bạn đã có ý tưởng gì cho trang phục diện đi chơi đêm Noel cùng hội bạn thân chưa? Nếu chưa thì đây sẽ là những gợi ý hữu ích dành cho bạn, hãy nhanh tay tag ngay hội chị em để cùng thực hiện nhé!', 'images/news/mixDoGiangSinh.jpg', '\r\nGiáng sinh luôn là khoảng thời gian tuyệt vời để các bạn trẻ được “xúng xính” những bộ cánh thật đẹp, cùng hội bạn thân dạo phố hoặc tham gia những buổi tiệc quây quần cùng gia đình. Dưới đây những gợi ý chọn trang phục lí tưởng nhất cho dịp Noel nổi bật mà không bị sến sẩm.\r\n<center><img src=''images/news/mixDoGiangSinh/1.jpg'' width=''600''></center>\r\nVới gam màu đặc trưng của ngày lễ Giáng sinh như đỏ đậm kết hợp với những họa tiết kẻ sọc - hoa văn lộng lẫy này giúp bạn “biến hóa” linh hoạt trong phong cách thời trang trẻ trung, năng động. Bạn có thể chọn cách mix đồ đơn giản như chân váy + áo len, chúng vừa xinh xắn vừa khỏe khoắn, năng động là những gì bạn có thể thấy ở set đồ này.\r\n<center><img src=''images/news/mixDoGiangSinh/2.jpg'' width=''600''></center>\r\nSử dụng rất nhiều màu nóng và lạnh xen kẽ, thế nhưng tổng thể vẫn rất hài hòa với cách phối thống nhất bởi một tông màu đỏ chủ đạo và tất cả còn lại là điểm nhấn nhằm tôn vinh cả set đồ.\r\n<center><img src=''images/news/mixDoGiangSinh/3.jpg'' width=''600''></center>\r\nPhụ kiện như mũ beret, băng đô chính là những thứ không thể thiếu mỗi khi diện đồ nhiều màu sắc nhé các cô nàng, và nhớ hãy chọn phụ kiện đơn sắc để tránh làm rối tổng thể.\r\n<center><img src=''images/news/mixDoGiangSinh/4.jpg'' width=''600''></center>\r\nSet đồ cá tính và ấn tượng với 3 gam màu đen - trắng - đỏ nổi bật. Đây là 1 minh chứng cho việc, không cần phải lộng lẫy hay diêm dúa mới có thể tạo nên 1 set đồ đậm chất Giáng sinh.\r\n<center><img src=''images/news/mixDoGiangSinh/5.jpg'' width=''600''></center>\r\nXanh lá là lựa chọn hoàn hảo để thể hiện sức sống, sự tươi trẻ. Chính vì thế, các thương hiệu thời trang nổi tiếng không bỏ qua màu xanh lá trong BST của mình, đặc biệt trong mùa Giáng sinh này, người ta nói rằng xanh lá là 1 trong top các sắc màu hot nhất.\r\n<center><img src=''images/news/mixDoGiangSinh/6.jpg'' width=''600''></center>\r\nVới trang phục sắc màu xanh lá, các bạn có thể diện cả cây xanh lá hoặc mix & match tùy thích, sắc màu này rất dễ kết hợp, đặc biệt là rất nổi bật khi mix cùng sắc màu đối lập như trắng.\r\n<center><img src=''images/news/mixDoGiangSinh/7.jpg'' width=''600''></center>\r\nNếu muốn diện cả cây xanh mà không nhàm chán, bạn hãy chọn điểm nhấn cho mình bằng họa tiết nhé! Chẳng hạn như chiếc áo babydoll cùng với kẻ sọc trắng sẽ giúp cho bộ trang phục của bạn thêm sinh động và trẻ trung hơn rất nhiều.\r\n<center><img src=''images/news/mixDoGiangSinh/8.jpg'' width=''600''></center>\r\n<center><img src=''images/news/mixDoGiangSinh/9.jpg'' width=''600''></center>\r\nNếu không thích những gam màu sáng như màu đỏ và xanh lá, bạn có thể chọn giải pháp an toàn hơn khi kết hợp gam màu trắng và đen trong cùng một set đồ. Hãy thử tưởng tượng rằng, bạn cùng nhóm mình đi bộ trong cùng một tone màu, cùng diện những trang phục như thế này, chắc chắn mọi người không thể nào rời mắt khỏi nhóm của bạn đâu nhé!\r\n<center><img src=''images/news/mixDoGiangSinh/10.jpg'' width=''600''></center>\r\nNhững set đồ matchy-matchy kẻ caro mang tone trắng đen không hề lạc hậu chút nào mà ngược lại còn rất tươi tắn và trẻ trung như thế này. Và bây giờ chỉ cần tạo dáng nữa thôi là đã có thể sống ảo được rồi!\r\n<center><img src=''images/news/mixDoGiangSinh/11.jpg'' width=''600''></center>\r\nSet đồ dành cho những bạn gái thích sự năng động: chân váy đen xòe và áo sơ mi, thêm một đôi giày đen sẽ giúp diện mạo của bạn thêm trẻ trung, cá tính.\r\n<center><img src=''images/news/mixDoGiangSinh/12.jpg'' width=''600''></center>\r\nĐêm Noel không tránh khỏi những cơn gió lạnh, bạn có thể chọn cho mình một chiếc áo khoác có màu trùng với chân váy hoặc quần legging. Chẳng hạn như áo khoác đen và chân váy đen hoặc áo khoác màu ghi, trắng kết hợp cùng legging đen. Bạn không nên quên chọn cho mình một đôi giày đồng màu với quần hoặc áo hoặc váy nữa nhé!\r\n<br><i>Noel này cần gì cần gì có người yêu nhỉ? Chỉ cần có hội bạn thân này là đủ rồi. Hãy cùng nhau tận hưởng những khoảnh khắc tuyệt vời ngày Giáng sinh và tạo ra những bức ảnh dễ thương qua cách mix đồ ton sur ton này nhé!</i><br>\r\n<br><b>Quyn Quyn</b><br>', '2017-12-17 14:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
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
-- Table structure for table `nhomtin`
--

CREATE TABLE IF NOT EXISTS `nhomtin` (
  `idnhom` int(11) NOT NULL,
  `tennhom` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nhomtin`
--

INSERT INTO `nhomtin` (`idnhom`, `tennhom`) VALUES
(1, 'Thời trang'),
(2, 'Sống khỏe'),
(3, 'Girl'),
(4, 'Đời sống gia đình');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
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

CREATE TABLE IF NOT EXISTS `product_category` (
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

CREATE TABLE IF NOT EXISTS `user` (
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
