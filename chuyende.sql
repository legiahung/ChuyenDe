-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 17, 2024 lúc 08:32 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `chuyende`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `MaCTHD` int(5) NOT NULL,
  `MaHoaDon` int(5) NOT NULL,
  `MaSanPham` int(5) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `GiaBan` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`MaCTHD`, `MaHoaDon`, `MaSanPham`, `SoLuong`, `GiaBan`) VALUES
(10, 20, 8, 1, 8750000),
(11, 21, 4, 2, 590000),
(12, 21, 26, 1, 5090000),
(13, 21, 6, 1, 2390000),
(14, 22, 3, 1, 354000),
(15, 22, 15, 1, 6290000),
(16, 22, 30, 1, 2990000),
(17, 22, 43, 1, 1790000),
(18, 22, 32, 1, 1690000),
(19, 23, 35, 1, 3600000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `MaGioHang` int(5) NOT NULL,
  `MaKhachHang` int(5) NOT NULL,
  `MaSanPham` int(5) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `GiaBan` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`MaGioHang`, `MaKhachHang`, `MaSanPham`, `SoLuong`, `GiaBan`) VALUES
(54, 5, 23, 2, 2390000),
(104, 3, 23, 1, 2390000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHoaDon` int(5) NOT NULL,
  `NgayLap` date NOT NULL,
  `MaKhachHang` int(5) NOT NULL,
  `TinhTrangDonHang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`MaHoaDon`, `NgayLap`, `MaKhachHang`, `TinhTrangDonHang`) VALUES
(20, '2024-05-13', 3, 'Đang giao hàng'),
(21, '2024-05-13', 3, 'Giao hàng thành công'),
(22, '2024-05-14', 3, 'Đang xử lý'),
(23, '2024-05-14', 3, 'Giao hàng thành công');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaitrangsuc`
--

CREATE TABLE `loaitrangsuc` (
  `MaLoaiTrangSuc` int(5) NOT NULL,
  `TenLoaiTrangSuc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loaitrangsuc`
--

INSERT INTO `loaitrangsuc` (`MaLoaiTrangSuc`, `TenLoaiTrangSuc`) VALUES
(1, 'Hoa tai'),
(2, 'Charm'),
(3, 'Dây chuyền'),
(4, 'Nhẫn'),
(6, 'Vòng tay');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `MaNhaCungCap` int(5) NOT NULL,
  `TenNhaCungCap` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `DiaChi` varchar(100) NOT NULL,
  `SoDienThoai` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nhacungcap`
--

INSERT INTO `nhacungcap` (`MaNhaCungCap`, `TenNhaCungCap`, `Email`, `DiaChi`, `SoDienThoai`) VALUES
(1, 'Công Ty CP Tập Đoàn Vàng Bạc Đá Quý DOJI', 'huan.dh@doji.vn', 'Tòa Nhà DOJI TOWER, Số 5 Lê Duẩn, P. Điện Biên, Q. Ba Đình, Hà Nội, Việt Nam', '033662288'),
(2, 'Công Ty TNHH Trang Sức Việt Nam - Sunny', 'sunny@sunnyjewel.net', 'KCN. Đồng Văn I, Duy Tiên, Hà Nam, Việt Nam', '03583600'),
(6, 'Công Ty TNHH Long Ly', 'longly.vn@gmail.com', '89 Đinh Tiên Hoàng, P. Tràng Tiền, Q. Hoàn Kiếm, Hà Nội, Việt Nam', '0822126666'),
(7, 'D.C - Công Ty TNHH Công Nghệ D.C', 'sales@vietnamjewelrytech.com', '56 Nghĩa Thục, P. 5, Q. 5, Tp. Hồ Chí Minh, Việt Nam', '(028) 38380'),
(8, ' Công Ty Vàng Bạc Đá Quý Sài Gòn-SJC-Cn Nha Trang', 'cnsjcnhatrang@vnn.vn', '13 Ngô Gia Tự, Tp. Nha Trang, Khánh Hòa, Việt Nam', '(0258) 3511'),
(9, 'Huyền Thạch - Công Ty TNHH Huyền Thạch', 'nhatsinhotc@gmail.com', 'Phước Hạ, Phước Đồng, Tp. Nha Trang, Khánh Hòa, Việt Nam', '(0258) 2211');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSanPham` int(5) NOT NULL,
  `TenSanPham` varchar(100) NOT NULL,
  `MaLoaiTrangSuc` int(5) NOT NULL,
  `GiaBan` float NOT NULL,
  `MaNhaCungCap` int(5) NOT NULL,
  `MoTa` varchar(1000) NOT NULL,
  `Anh` varchar(100) NOT NULL,
  `Anh2` varchar(100) NOT NULL,
  `Anh3` varchar(100) NOT NULL,
  `SoLuong` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MaSanPham`, `TenSanPham`, `MaLoaiTrangSuc`, `GiaBan`, `MaNhaCungCap`, `MoTa`, `Anh`, `Anh2`, `Anh3`, `SoLuong`) VALUES
(3, 'Nhẫn Bạc Hình Vô Cực', 4, 354000, 1, 'Cặp nhẫn bạc vô cực là biểu tượng của sự liên kết không thể phá vỡ và là điểm nhấn độc đáo cho bộ sưu tập trang sức. Nút thắt không đối xứng ở phần trung tâm thể hiện sức mạnh của sự kết nối. Kết hợp với những chiếc khuyên tai cùng chủ đề sẽ tạo nên một tuyên ngôn cá nhân mạnh mẽ.', 'uploads/sp1.jpg', 'uploads/sp1.2.jpg', 'uploads/sp1.3.jpg', '10'),
(4, 'Dây Chuyền Bạc Hoa Hồng Trắng', 3, 590000, 2, 'Chiếc dây chuyền này với viên ngọc trai nhân tạo trắng được tạo thành một bông hoa hồng, biểu tượng cho sự trong sáng và tình yêu. Mặt sau được trang trí bằng cubic zirconia lấp lánh, tạo điểm nhấn tinh tế. Độ dài có thể điều chỉnh, là minh chứng cho sức mạnh vĩnh cửu của tình yêu.', 'uploads/sp2.1.jpg', 'uploads/sp2.2.jpg', 'uploads/sp2.3.jpg', '8'),
(5, 'Vòng Kiềng Mạ Vàng Hồng 14K Đính Đá', 6, 2299000, 2, 'Vòng kiềng mạ vàng hồng 14K đính đá là một món trang sức quý phái với chất liệu vàng hồng 14K và các viên đá lấp lánh. Thiết kế tinh tế và độc đáo làm nổi bật vẻ đẹp và sự thanh lịch của người đeo.', 'uploads/sp3.1.jpg', 'uploads/sp3.2.jpg', 'uploads/sp3.3.jpg', '10'),
(6, 'Hoa Tai Bạc Hình Bướm Xanh', 1, 2390000, 1, ' Tạo sự cảm hứng mùa xuân hàng ngày với Hoa tai vòng bướm xanh của chúng tôi. Với cánh men vẽ tay và đá zirconia lấp lánh, mỗi chiếc bướm độc đáo giống như trong tự nhiên. Kết hợp với charm con bướm màu xanh tạo điểm nhấn cho mùa chuyển đổi.', 'uploads/sp4.jpg', 'uploads/sp4.2.jpg', '', '10'),
(7, 'Nhẫn Vàng 18K Đính Đá', 4, 4452000, 8, 'Chiếc nhẫn CZ đầy quyền năng và hiện đại, với đường nét rành mạch và sự kết hợp tinh tế giữa vàng và đá. Mang đến sự khác biệt và cá tính cho phụ nữ trưởng thành, khẳng định phong cách và con đường riêng của họ.', 'uploads/sp5.jpg', 'uploads/sp5.2.jpg', '', '8'),
(8, 'Dây Chuyền Vàng 14K Đính Đá', 3, 8750000, 7, 'Dây chuyền vàng 14K đính đá CZ là một món trang sức lấp lánh và sang trọng. Với chất liệu vàng 14K và các viên đá CZ, nó mang đến vẻ đẹp lấp lánh và cuốn hút cho người đeo.', 'uploads/sp6.jpg', 'uploads/sp6.2.jpg', 'uploads/sp6.3.jpg', '8'),
(9, 'Nhẫn Bạc Mặt Trái Tim Đỏ', 4, 2990000, 9, 'Nhẫn này có một viên pha lê đỏ là điểm nhấn chính, được bao quanh bởi 18 viên đá CZ. Sự kết hợp này tạo ra một thiết kế thanh lịch và hiện đại, vượt thời gian.', 'uploads/sp7.jpg', 'uploads/sp7.2.jpg', 'uploads/sp7.3.jpg', '12'),
(11, 'Hoa Tai Mạ Vàng Hồng Hình Bông Hoa', 1, 4190000, 1, 'Bông tai nụ Herbarium Cluster với sợi dây chuyền mạ vàng hồng 14K, đá hình quả lê và marquise, cùng viên đá tròn lấy cảm hứng từ thiên nhiên. Thiết kế thanh lịch, tinh tế là điểm nhấn cho phong cách của bạn.', 'uploads/sp9.jpg', 'uploads/sp9.2.jpg', '', '12'),
(12, 'Dây Chuyền Đính Đá Trắng', 3, 1690000, 1, 'Mang vẻ đẹp của thiên nhiên bên trong bộ trang sức của bạn với sợi dây chuyền Collier Cluster Cluster Sparkling.Thiết kế bao gồm những viên đá ko đồng đều một cách duyên dáng: một cụm đá hình quả lê xen kẽ với đá hình marquise, và tâm điểm là một viên đá CZ tròn, tạo hình lấy cảm hứng từ cánh hoa và lá. Một thiết kế mang hơi hướng thanh lịch từ dạng hình học mà chúng ta có thể tìm thấy bất cứ đâu trong tự nhiên, sợi dây chuyền này là sự lựa chọn hoàn hảo cho phòng cách tinh tế, nổi bật hơn của bạn.', 'uploads/sp10.jpg', 'uploads/sp10.2.jpg', 'uploads/sp10.3.jpg', '9'),
(13, 'Vòng Bạc Khóa Bướm', 6, 3090000, 8, 'Mùa xuân, câu chuyện của tôi bắt đầu với vòng đeo tay chuỗi thân rắn Pandora Moments Butterfly Clasp. Thiết kế độc đáo với hình trái tim và đá cubic zirconia tạo lấp lánh cho hình ảnh con bướm. Phối đồ lên đến 18 charm, sản phẩm này là điểm nhấn thú vị mang theo những khoảnh khắc thanh xuân.', 'uploads/sp11.1.jpg', 'uploads/sp11.2.jpg', 'uploads/sp11.3.jpg', '13'),
(14, 'Dây Chuyền Bạc Mặt Tròn Lồng Vào Nhau Đính Đá', 3, 3390000, 8, 'Dây chuyền bạc mặt tròn đính đá là biểu tượng của sự tinh tế và quyến rũ. Chế tác từ bạc sterling 925, mặt tròn độc đáo và rạng rỡ với đá quý nhỏ, tạo nên một trang sức thanh lịch và sang trọng. Được kết hợp hoàn hảo giữa thiết kế hiện đại và chất lượng cao, đây là điểm nhấn hoàn hảo cho phong cách cá nhân của bạn.', 'uploads/sp12.1.jpg', 'uploads/sp12.2.jpg', 'uploads/sp12.3.jpg', '13'),
(15, 'Dây Chuyền Mặt Hình Rồng Đính Pha Lê ', 3, 6290000, 1, 'Dây chuyền Dây Nhà Rồng là biểu tượng sức mạnh và bí ẩn. Được làm từ bạc Sterling, mặt dây chuyền hiển thị một con rồng cuộn tròn, với viên đá màu đỏ tạo điểm nhấn. Đây là một biểu tượng cho những trải nghiệm phiêu lưu và bí ẩn đầy sức hấp dẫn.', 'uploads/sp13.jpg', 'uploads/sp13.2.jpg', 'uploads/sp13.3.jpg', '11'),
(16, 'Dây Chuyền Bạc Mặt Ngôi Sao Và Mặt Trăng', 3, 2120750, 9, 'Dây chuyền bạc với mặt ngôi sao và mặt trăng, biểu tượng của sự quyến rũ và phong cách. Chế tác từ bạc sterling 925, thể hiện vẻ đẹp và nghệ thuật. Điểm nhấn cho phong cách cá nhân và quan trọng trong mọi dịp.', 'uploads/sp14.jpg', 'uploads/sp14.2.jpg', 'uploads/sp14.3.jpg', '9'),
(17, 'Dây Chuyền Mặt Tròn Đính Đá', 3, 4790000, 1, 'Chiếc vòng cổ mạ vàng hồng 14K này thể hiện vẻ đẹp cổ điển và sức hấp dẫn vượt thời gian. Mặt dây chuyền hình học kết hợp cùng zirconia và hạt cườm, tạo điểm nhấn tinh tế. Sản phẩm được làm từ hỗn hợp kim loại mạ vàng hồng 14K, là lựa chọn mới mẻ và tinh tế.', 'uploads/sp15.jpg', 'uploads/sp15.2.jpg', 'uploads/sp15.3.jpg', '10'),
(18, 'Dây Chuyền Mặt Dây Hai Vòng Tròn Đính Đá', 3, 1500000, 1, 'Một cuộc khám phá về ý nghĩa và kiểu dáng, chiếc vòng cổ mặt dây chuyền này có thiết kế đính cườm, lát 1 lớp microbeads và logo Pandora với trái tim cắt đối ngược lại. Với các vòng tròn bên trong có thể đảo ngược và chiều dài có thể điều chỉnh, nó mang lại thêm một nét linh hoạt cho bộ sưu tập của bạn.', 'uploads/sp16.jpg', 'uploads/sp16.2.jpg', 'uploads/sp16.3.jpg', '14'),
(19, 'Dây Chuyền Mặt Chữ Mom', 3, 3620000, 1, 'Dây chuyền Mum Pavé được chế tác từ bạc đúc, với chữ \"Mom\" viết bằng chữ viết tay và được đính ba viên đá nhỏ, tạo hình trái tim. Với khóa trượt để điều chỉnh chiều dài, đây là món quà ý nghĩa tôn vinh tình mẫu tử đặc biệt của bạn.', 'uploads/sp17.jpg', 'uploads/sp17.2.jpg', 'uploads/sp17.3.jpg', '10'),
(20, 'Nhẫn Bạc Hình Rồng Đính Pha Lê Đỏ Salsa', 4, 1690000, 2, 'Nhẫn Rồng Rạng Ngời trong trò chơi Ngôi Nhà của Rồng là một chiếc nhẫn bạc Sterling độc đáo, thiết kế shank chồng chéo giống hình một con rồng. Với viên đá mắt nhân tạo ở đầu và viên đá màu đỏ nhân tạo ở đuôi, đây là một lựa chọn quyến rũ cho những người yêu thích Game of Thrones.', 'uploads/sp18.jpg', 'uploads/sp18.2.jpg', 'uploads/sp18.3.jpg', '8'),
(21, 'Hoa Tai Bạc Đính Đá Trái Tim', 1, 1990000, 6, 'Hoa tai bạc cao cấp, mỗi bông tai đính một viên đá quý hình trái tim, tạo điểm nhấn sang trọng. Thiết kế tinh tế và tỉ mỉ giúp nó trở thành một phụ kiện thời trang độc đáo và lịch lãm.', 'uploads/sp19.jpg', 'uploads/sp19.2.jpg', '', '10'),
(22, 'Hoa Tai Bạc Tròn Đính Đá Xanh', 1, 2250000, 7, 'Hoa tai bạc tròn đính đá xanh là một sản phẩm tinh tế và quyến rũ. Thiết kế đơn giản nhưng đẹp mắt, với đá quý màu xanh lá cây là điểm nhấn. Sản phẩm phù hợp cho mọi dịp và thể hiện sự tinh tế và gu thẩm mỹ của người đeo.', 'uploads/sp20.jpg', 'uploads/sp20.2.jpg', '', '18'),
(23, 'Hoa Tai Bạc Đính Đá Pha Lê Đỏ', 1, 2390000, 2, 'Hoa Tai Bạc Họa Tiết Bím Tóc Đính Đá Pha Lê Đỏ là một sản phẩm sang trọng và độc đáo. Thiết kế tinh tế với chất liệu bạc cao cấp và đá pha lê màu đỏ, tạo nên sự kết hợp quyến rũ. Sản phẩm tỉ mỉ và lấp lánh, là lựa chọn hoàn hảo để thể hiện phong cách và gu thẩm mỹ cá nhân.', 'uploads/sp21.jpg', 'uploads/sp21.2.jpg', '', '16'),
(24, 'Hoa Tai Bạc Hoa Cúc Đính Đá', 1, 2150000, 8, 'Đôi hoa tai bạc này mang ý nghĩa của sự khởi đầu và tự do, được thiết kế dài trải trên vành tai. Với hình ảnh hoa cúc và đá Cubic Zirconia, chúng là lựa chọn hoàn hảo cho phong cách phối nhiều khuyên tai hoặc đeo riêng lẻ. Đây cũng là một món quà tuyệt vời để tặng cho người thân yêu.', 'uploads/sp22.jpg', 'uploads/sp22.2.jpg', '', '16'),
(26, 'Hoa Tai Marvel Mạ Vàng 14K Đính Đá Vô Cực', 1, 5090000, 2, 'Nâng tầm phong cách với đôi khuyên tai đính đá vô cực Marvel. Được mạ vàng 14k, các khuyên tai này mang đến sức mạnh và vẻ đẹp của vũ trụ. Với sáu viên đá nhân tạo được đặt trong các hình dạng đa dạng, mỗi viên đá đại diện cho một khía cạnh của sức mạnh: không gian, sức mạnh, thời gian, hiện thực, linh hồn và trí tuệ. Phối chúng để tạo ra một diện mạo cân bằng hoàn hảo hoặc xoay để hiển thị tất cả các màu sắc của cầu vồng.', 'uploads/sp24.jpg', 'uploads/sp24.2.jpg', '', '7'),
(27, 'Hoa Tai Bạc Nút Mạ Vàng Hồng 14k', 1, 2680000, 8, 'Nhận ba lần lấp lánh với Bông Tai Nút Hình Lê Lấp Lánh. Thiết kế mảnh mai với ba viên đá hình lê kích thước khác nhau, tạo hiệu ứng động đặc biệt từ bé đến lớn. Sự kết hợp của viên đá vàng hồng và ngà voi hình V tạo nên vẻ độc đáo và sang trọng. Đây là lựa chọn hoàn hảo cho các dịp từ lịch lãm đến sáng hơn.', 'uploads/sp25.jpg', 'uploads/sp25.2.jpg', '', '12'),
(28, 'Hoa Tai Bạc Treo Mạ Vàng 14k Đính Đá', 1, 3700000, 8, ' Tạo lập tuyên bố thanh lịch với Bông Tai Treo Đá Lấp Lánh Theo Dòng. Thiết kế mạ vàng 14k với sáu viên đá lấp lánh treo thành một hàng, tạo ra sự di chuyển và lấp lánh đầy cuốn hút. Thích hợp cho các dịp đặc biệt hoặc làm quà tặng ý nghĩa cho người đặc biệt trong cuộc sống của bạn.', 'uploads/sp26.jpg', 'uploads/sp26.2.jpg', '', '12'),
(29, 'Nhẫn Mạ Vàng 14k Gợn Sóng Đính Đá', 4, 2390000, 8, 'Vòng sóng CZ mang đến sự đột phá với thiết kế uốn cong như đỉnh của những con sóng vỗ biển. Các viên đá CZ xếp chồng lên nhau tạo hiệu ứng lấp lánh giống ánh sáng từ mặt biển, có sẵn trong ba chất liệu: bạc, rose gold plated và 14k gold plated.', 'uploads/sp27.jpg', 'uploads/sp27.2.jpg', 'uploads/sp27.3.jpg', '12'),
(30, 'Nhẫn Mạ Vàng Hồng 14k Cánh Hoa', 4, 2990000, 8, 'Chiếc nhẫn Sparkling Herbarium Cluster với tâm điểm là ba viên đá xếp hình cánh hoa, hai viên hình bầu dục và một viên hình quả lê. Đươc hoàn thiện mạ vàng 14k, chiếc nhẫn thanh lịch này lấy cảm hứng từ vẻ đẹp của thiên nhiên, với tạo hình cánh hoa không bao giờ lỗi mốt.', 'uploads/sp28.jpg', 'uploads/sp28.2.jpg', 'uploads/sp28.3.jpg', '17'),
(31, 'Nhẫn Bạc Hình Thiên Thần', 4, 2690000, 8, 'Bộ sưu tập Disney với nhân vật Tinker Bell mang thông điệp ', 'uploads/sp29.jpg', 'uploads/sp29.2.jpg', 'uploads/sp29.3.jpg', '10'),
(32, 'Nhẫn Bạc Marvel Họa Tiết Baby Groot', 4, 1690000, 8, 'Khám phá sức mạnh với nhẫn Baby Groot của Marvel Guardians of the Galaxy. Được làm thủ công từ bạc sterling, nhẫn này có hình ảnh đáng yêu của Groot và lá quanh dải nhẫn. Đôi mắt và lá được trang trí bằng men đen và cubic zirconia.', 'uploads/sp30.jpg', 'uploads/sp30.2.jpg', 'uploads/sp30.3.jpg', '11'),
(33, 'Nhẫn Bạc Viền Đính Đá', 4, 3590000, 8, 'Thêm vào bộ sưu tập của bạn với nhẫn Pavé Single-row lấp lánh và thời thượng. Chế tác từ bạc sterling và hoàn thiện thủ công, nhẫn này có hàng đá cubic zirconia lấp lánh, tạo nên một hình vuông sáng từ mọi góc nhìn.', 'uploads/sp31.jpg', 'uploads/sp31.2.jpg', 'uploads/sp31.3.jpg', '12'),
(34, 'Vòng Charm Jonc Disney Stitch', 6, 2500000, 1, 'Vòng đeo tay bạc Sterling có hình ảnh nhân vật nghịch ngợm từ bộ phim Disney Lilo & Stitch đang cắn nắp bóng, với thông điệp ', 'uploads/sp32.jpg', 'uploads/sp32.2.jpg', 'uploads/sp32.3.jpg', '9'),
(35, 'Vòng Tay Chuỗi Đá Vô Cực Của Avengers', 6, 3600000, 1, 'Vòng tay chuỗi đá vô cực của Avengers, lấy cảm hứng từ siêu anh hùng Marvel, với các viên đá tượng trưng cho sức mạnh đặc biệt.', 'uploads/sp33.jpg', 'uploads/sp33.2.jpg', 'uploads/sp33.3.jpg', '8'),
(36, 'Vòng Bạc Dạng Chuỗi Đính Đá Xanh', 6, 2950000, 7, 'Vòng tay Pavé Bars lấp lánh là sự kết hợp hoàn hảo giữa mảnh ghép cổ điển và phá cách hiện đại. Thiết kế độc đáo này kết hợp các viên đá nhỏ trong suốt với những viên lớn màu xanh lam, tạo điểm nhấn sang trọng và độc đáo. Có thể điều chỉnh kích thước và được trang trí bằng miếng mạ vàng hồng 14k thủ công.', 'uploads/sp34.jpg', 'uploads/sp34.2.jpg', 'uploads/sp34.3.jpg', '12'),
(37, 'Vòng Tay Mạ Vàng Hồng 14K Đính Đá', 6, 3090000, 1, 'Vòng tay Two-tone Logo & Pavé kết hợp giữa bạc sterling và hợp kim mạ vàng 14k, với hạt tròn hai màu và hình vuông. Thiết kế độc đáo, sang trọng với chi tiết lấp lánh và khả năng kết hợp linh hoạt với các loại dây chuyền khác.', 'uploads/sp35.jpg', 'uploads/sp35.2.jpg', 'uploads/sp35.3.jpg', '12'),
(38, 'Vòng Bạc Cụm Herbarium Hình Tròn', 6, 4190000, 8, 'Chiếc vòng tay Sparkling Herbarium Cluster Chain Bracelet, lấy cảm hứng từ thiên nhiên, được làm từ bạc sterling và trang trí với các viên đá cubic zirconia. Thiết kế tỉ mỉ với hình dáng của bông hoa và lá cọp, vòng tay này mang đến vẻ đẹp tự nhiên và thanh lịch. Các viên đá được sắp xếp hài hòa, tạo nên những hình dáng lôi cuốn, kết nối với nhau bằng những miếng ghép linh hoạt. Điểm đặc biệt là khả năng điều chỉnh kích thước, tạo sự thoải mái và linh hoạt cho người đeo.', 'uploads/sp36.jpg', 'uploads/sp36.2.jpg', 'uploads/sp36.3.jpg', '14'),
(39, 'Vòng Tay Mạ Vàng Hồng Đính Đá Hồng', 6, 4790000, 7, 'Vòng tay Tennis Pavé mạ vàng hồng 14k, trang trí viên pha lê nhân tạo màu hồng lấp lánh. Thiết kế có tảng đá hình trái tim lớn và các viên đá nhỏ, có móc khóa an toàn và có thể điều chỉnh.', 'uploads/sp37.jpg', 'uploads/sp37.2.jpg', 'uploads/sp37.3.jpg', '10'),
(40, 'Vòng Tay Vương Miện Lấp Lánh', 6, 2990000, 8, 'Vòng tay con rắn với vương miện lấp lánh, làm từ hợp kim chất lượng cao. Thiết kế tinh tế với chuỗi dây xích con rắn và vương miện trang trí đá lấp lánh ở trung tâm, tạo điểm nhấn sang trọng. Phụ kiện phù hợp với nhiều dịp và phong cách trang phục.', 'uploads/sp38.jpg', 'uploads/sp38.2.jpg', 'uploads/sp38.3.jpg', '10'),
(41, 'Vòng Da Đôi Màu Đen', 6, 2090000, 8, 'Vòng da đôi màu đen là một món phụ kiện tinh tế với thiết kế đơn giản nhưng đẹp mắt. Chất liệu da tổng hợp cao cấp kết hợp hai màu đen cơ bản, tạo điểm nhấn hoàn hảo cho bất kỳ trang phục nào. Sự kết hợp của hai màu đen tạo ra một vẻ đẹp tối giản nhưng vẫn cuốn hút, phù hợp cho cả nam và nữ.', 'uploads/sp39.jpg', 'uploads/sp39.2.jpg', 'uploads/sp39.3.jpg', '10'),
(42, 'Charm Trái Tim Màu Tím', 2, 670000, 1, 'Charm Trái Tim Màu Tím là một phụ kiện trang sức nhỏ gọn và lãng mạn, làm từ chất liệu cao cấp với hình dáng đẹp mắt và trang trí tinh tế.', 'uploads/sp40.jpg', 'uploads/sp40.2.jpg', 'uploads/sp40.3.jpg', '12'),
(43, 'Charm Họa Tiết Hoa Tuyết', 2, 1790000, 1, 'Hiệu ứng băng giá tạo nên bởi màu xanh nhạt của chiếc charm này mang lại cảm giác như nhìn qua mặt hồ nước đóng băng. Phần kính tạo hiệu ứng bóng nước đầy mê hoặc, với những bông tuyết đươc cắt bằng bạc đóng khung phần lõi như thể chúng vừa mới rơi trên mặt băng. Một chiếc charm duy mỹ thanh lịch cho một vẻ ngoài đầy cảm hứng mùa đông.', 'uploads/sp41.1.jpg', 'uploads/sp41.2.jpg', 'uploads/sp41.3.jpg', '12'),
(44, 'Charm Dải Ngân Hà', 2, 1390000, 1, 'Chiếc charm Galaxy Blue & Star Murano là biểu tượng của vẻ đẹp của bầu trời đêm, với thủy tinh Murano xanh lam lấp lánh và các ngôi sao bạc cắt bất đối xứng. Được làm thủ công từ bạc sterling, charm này thể hiện sức mạnh của vũ trụ và là một món quà ý nghĩa để thể hiện sự quan tâm của bạn.', 'uploads/sp42.jpg', 'uploads/sp42.2.jpg', 'uploads/sp42.3.jpg', '14'),
(45, 'Charm Trái Tim Đính Đá Hồng Ở Giữa', 2, 1290000, 1, 'Lan tỏa tình yêu với charm Sparkling Leveled Hearts. Charm này được làm thủ công từ hỗn hợp kim mạ vàng hồng 14k, có một viên pha lê hồng hình trái tim được bao quanh bởi khối zirconia lấp lánh. Thiết kế tinh tế và lãng mạn, là món quà ý nghĩa cho người đặc biệt của bạn.', 'uploads/sp43.jpg', 'uploads/sp43.2.jpg', 'uploads/sp43.3.jpg', '16'),
(46, 'Charm Đính Đá Trong Suốt', 2, 3190000, 1, 'Bảo vệ những kỷ niệm quý báu với charm khóa an toàn Pandora Moments. Sản phẩm được làm từ chất liệu mạ vàng hồng 14k và được trang trí bằng đá Cubic Zirconia, tạo điểm nhấn lộng lẫy cho vòng của bạn. Thiết kế gồm chuỗi xoay chống rối và grips silicon để giữ charm luôn ổn định.', 'uploads/sp44.jpg', 'uploads/sp44.2.jpg', 'uploads/sp44.3.jpg', '14'),
(48, 'Charm Cây Gia Đình Màu Hồngggg', 2, 1390000, 1, 'Tưởng niệm tình yêu gia đình với charm Cây Gia Đình Màu Hồng và Trái Tim. Thiết kế bằng bạc sterling, có một viên pha lê màu hồng trong suốt hình trái tim. Mặt sau là hình ảnh cây gia đình mở ra, biểu tượng cho tình yêu vĩnh cửu và sự phát triển. Phụ kiện lý tưởng để đại diện cho những người thân yêu nhất trong cuộc sống của bạn.', 'uploads/sp46.jpg', 'uploads/sp46.2.jpg', '', '12'),
(49, 'Charm Đính Đá Trái Tim Màu Hồng', 2, 1390000, 1, 'Cổ điển kết hợp hiện đại trong chiếc charm Double Halo Heart Dangle màu bạc sterling này. Nó có một viên đá trung tâm màu hồng hình trái tim được bao quanh bởi hai quầng sáng, một hình trái tim và một hình tròn. Các đường viền ở phía sau được đánh bóng để sáng bóng và phần bảo hiểm lấp lánh với một pavé zirconia hình khối. Một thiết kế để kỷ niệm tình yêu vượt thời gian của bạn.', 'uploads/sp47.jpg', 'uploads/sp47.2.jpg', '', '12'),
(50, 'Charm Bạc Tinh Thể Màu Mật Ong', 2, 790000, 1, 'Thêm màu sắc cho trang sức của bạn với charm Mật Ong Eternal Honeycomb này. Thiết kế độc đáo của nó bao gồm một viên pha lê màu mật ong ở trung tâm. Lựa chọn tuyệt vời để làm mới kiểu dáng của bạn mỗi ngày.', 'uploads/sp48.jpg', 'uploads/sp48.2.jpg', 'uploads/sp48.3.jpg', '20'),
(51, 'Charm Biểu Tượng Ngôi Sao Mặt Trăng', 2, 2390000, 1, ' Charm treo Blue Night Sky Crescent Moon & Stars của Pandora là biểu tượng tình yêu vô hạn. Hoàn thiện từ bạc sterling và trang trí bằng các ngôi sao, charm này có mặt sau với viên đá hình nửa vầng trăng màu xanh lam và câu châm ngôn ', 'uploads/sp49.jpg', 'uploads/sp49.2.jpg', 'uploads/sp49.3.jpg', '16'),
(52, 'Dây Chuyền Mạ Vàng Hồng 14K Đính Đá', 3, 5690000, 2, 'Dây chuyền Two-tone Logo & Pavé kết hợp bạc sterling và hợp kim mạ vàng 14k, có hạt tròn hai màu và hình vuông. Thiết kế tinh tế, đơn giản, với chi tiết lấp lánh và vòng tròn nổi bật. Phối cùng các dây chuyền khác hoặc đơn giản sử dụng một mình.', 'uploads/sp50.jpg', 'uploads/sp50.2.jpg', 'uploads/sp50.3.jpg', '12'),
(58, 'Charm Ngôi Sao', 2, 1790000, 1, 'Chiếc charm ngôi sao và dải ngân hà là một tác phẩm tinh xảo từ vũ trụ, với ngôi sao sáng chói giữa dải ngân hà rộng lớn. Sự kết hợp này tạo ra một cảm giác đẹp và kỳ diệu của bầu trời đêm, đem lại sự lấp lánh và cảm hứng cho bộ trang sức của bạn.', 'uploads/sp51.jpg', 'uploads/sp51.2.jpg', 'uploads/sp51.3.jpg', '10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoankhachhang`
--

CREATE TABLE `taikhoankhachhang` (
  `MaKhachHang` int(5) NOT NULL,
  `TenKhachHang` varchar(100) NOT NULL,
  `GioiTinh` tinyint(1) NOT NULL,
  `NgaySinh` date NOT NULL,
  `DiaChi` varchar(255) NOT NULL,
  `SoDienThoai` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `MatKhau` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoankhachhang`
--

INSERT INTO `taikhoankhachhang` (`MaKhachHang`, `TenKhachHang`, `GioiTinh`, `NgaySinh`, `DiaChi`, `SoDienThoai`, `Email`, `MatKhau`) VALUES
(3, 'Lê Gia Hưng', 0, '2002-03-06', '29 Âu cơ', '0708126244', 'hungle@gmail.com', '$2y$10$Qp.M2JLaSdbX.ctMB31fweyjcharO8xIGB/1cCbx0t9j6XH35.Cfm'),
(5, 'Nam', 1, '2024-05-28', 'Bệnh Viện Tỉnh', '115', 'nam@gmail.com', '$2y$10$kixuZFR/TOLbo0zzVr656./Orlf6QvLW6L4ngHerCKtFnFdLW3Uw2'),
(7, 'hihihaha', 0, '2024-05-12', 'aaa', '113', 'hihi@gmail.com', '$2y$10$9zkfcin21TD9OrGN5lYRte4FiniE9sX//M1SBKsJSPjfNtcgDJbb2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoannhanvien`
--

CREATE TABLE `taikhoannhanvien` (
  `MaNhanVien` int(5) NOT NULL,
  `TenNhanVien` varchar(100) NOT NULL,
  `GioiTinh` tinyint(1) NOT NULL,
  `NgaySinh` date NOT NULL,
  `DiaChi` varchar(255) NOT NULL,
  `SoDienThoai` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `MatKhau` varchar(100) NOT NULL,
  `Anh` varchar(100) NOT NULL,
  `TYPE_ADMIN` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoannhanvien`
--

INSERT INTO `taikhoannhanvien` (`MaNhanVien`, `TenNhanVien`, `GioiTinh`, `NgaySinh`, `DiaChi`, `SoDienThoai`, `Email`, `MatKhau`, `Anh`, `TYPE_ADMIN`) VALUES
(20, 'Lê Gia Hưng', 0, '2002-03-06', 'Vĩnh Ngọc', '0708126244', 'hung123@gmail.com', '$2y$10$N9iLyjzbt.3qj0228KigCeeawwFOyEZfosMwEMV7d78l08nS2aT9O', 'uploads/hungle.png', 'Chủ Cửa Hàng'),
(22, 'Lê Bảo Hân', 1, '2003-08-10', 'Trần Phú', '0905029337', 'hanlee@gmail.com', '$2y$10$1GZkC1NKKk3Z0QNoiW6/luXtfjbiNQwPFnDLdSoJPi/FEqV5y7mZa', 'uploads/han.png', 'Nhân Viên'),
(23, 'Nguyễn Thị Bưởi', 1, '2004-09-12', 'Thái Nguyên', '0906251725', 'buoicute@gmail.com', '$2y$10$wGJelh/u7FpdKWTK0U6Vw.IosSQrPpGQnkLqNdSdGyKX2hBvH8xW2', 'uploads/buoi.png', 'Nhân Viên'),
(24, 'Đào Thị Hoa Lan', 1, '2003-09-18', 'Đà Lạt', '0706182149', 'hoalan@gmail.com', '$2y$10$xbe183aJlLjvgogqh3ZSauy3XtWHHf2AKjjNYHcXoNxfPr5DltwXW', 'uploads/lan.png', 'Nhân Viên'),
(25, 'Nguyễn Thị Mai Anh', 1, '2002-10-12', 'Quảng Ninh', '0907262159', 'anh@gmail.com', '$2y$10$fdW/VUSna.HWaITcyy2CNOKi8X2TlKmoZgXEZI87Ys4TV/fLM0e2K', 'uploads/m.anh.jpg', 'Nhân Viên'),
(27, 'Phạm Hoàng Long', 0, '2002-04-08', 'Vĩnh Thái', '0799246520', 'long@gmail.com', '$2y$10$4JP3NxX9Q0p8vduvmOXRTei6YIMwTVGOqqBN3XZO9LWuGItaQrGmW', 'uploads/long.jpg', 'Nhân Viên');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`MaCTHD`),
  ADD KEY `MaSanPham` (`MaSanPham`),
  ADD KEY `MaHoaDon` (`MaHoaDon`) USING BTREE;

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`MaGioHang`),
  ADD KEY `MaSanPham` (`MaSanPham`),
  ADD KEY `MaKhachHang` (`MaKhachHang`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHoaDon`),
  ADD KEY `MaKhachHang` (`MaKhachHang`);

--
-- Chỉ mục cho bảng `loaitrangsuc`
--
ALTER TABLE `loaitrangsuc`
  ADD PRIMARY KEY (`MaLoaiTrangSuc`);

--
-- Chỉ mục cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`MaNhaCungCap`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSanPham`),
  ADD KEY `MaLoaiTrangSuc` (`MaLoaiTrangSuc`,`MaNhaCungCap`),
  ADD KEY `fk_sanpham_nhacungcap` (`MaNhaCungCap`);

--
-- Chỉ mục cho bảng `taikhoankhachhang`
--
ALTER TABLE `taikhoankhachhang`
  ADD PRIMARY KEY (`MaKhachHang`);

--
-- Chỉ mục cho bảng `taikhoannhanvien`
--
ALTER TABLE `taikhoannhanvien`
  ADD PRIMARY KEY (`MaNhanVien`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `MaCTHD` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `MaGioHang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `MaHoaDon` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `loaitrangsuc`
--
ALTER TABLE `loaitrangsuc`
  MODIFY `MaLoaiTrangSuc` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `MaNhaCungCap` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSanPham` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT cho bảng `taikhoankhachhang`
--
ALTER TABLE `taikhoankhachhang`
  MODIFY `MaKhachHang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `taikhoannhanvien`
--
ALTER TABLE `taikhoannhanvien`
  MODIFY `MaNhanVien` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`MaSanPham`) REFERENCES `sanpham` (`MaSanPham`),
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`MaHoaDon`) REFERENCES `hoadon` (`MaHoaDon`);

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`MaKhachHang`) REFERENCES `taikhoankhachhang` (`MaKhachHang`),
  ADD CONSTRAINT `giohang_ibfk_2` FOREIGN KEY (`MaSanPham`) REFERENCES `sanpham` (`MaSanPham`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_2` FOREIGN KEY (`MaKhachHang`) REFERENCES `taikhoankhachhang` (`MaKhachHang`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_sanpham_loaitrangsuc` FOREIGN KEY (`MaLoaiTrangSuc`) REFERENCES `loaitrangsuc` (`MaLoaiTrangSuc`),
  ADD CONSTRAINT `fk_sanpham_nhacungcap` FOREIGN KEY (`MaNhaCungCap`) REFERENCES `nhacungcap` (`MaNhaCungCap`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
