-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 08, 2024 lúc 10:15 AM
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
-- Cấu trúc bảng cho bảng `bophan`
--

CREATE TABLE `bophan` (
  `MaBoPhan` int(5) NOT NULL,
  `TenBoPhan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bophan`
--

INSERT INTO `bophan` (`MaBoPhan`, `TenBoPhan`) VALUES
(1, 'Bán Hàng'),
(2, 'Dịch Vụ Khách Hàng'),
(3, 'Quản Lý Sản Phẩm'),
(4, 'Marketing và Quảng Cáo'),
(5, ' Kỹ Thuật'),
(6, 'Quản Lý và Hành Chính');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `MaCTHD` int(5) NOT NULL,
  `MaHoaDon` int(5) NOT NULL,
  `MaSanPham` int(5) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `GiaBan` float NOT NULL,
  `MaGiamGia` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giamgia`
--

CREATE TABLE `giamgia` (
  `MaGiamGia` int(5) NOT NULL,
  `TenGiamGia` varchar(100) NOT NULL,
  `PhanTramGiam` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `MaGioHang` int(5) NOT NULL,
  `MaKhachHang` int(5) NOT NULL,
  `MaSanPham` int(5) NOT NULL,
  `SoLuong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHoaDon` int(5) NOT NULL,
  `NgayLap` date NOT NULL,
  `TongTien` float NOT NULL,
  `MaKhachHang` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(1, 'Bông tai'),
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
(5, 'Công Ty TNHH Long Lyy', 'daothitrinh@gmail.com', 'KCN. Đồng Văn I, Duy Tiên, Hà Nam, Việt Nam', '03583600');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phongban`
--

CREATE TABLE `phongban` (
  `MaPhongBan` int(5) NOT NULL,
  `TenPhongBan` varchar(100) NOT NULL,
  `MaBoPhan` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `phongban`
--

INSERT INTO `phongban` (`MaPhongBan`, `TenPhongBan`, `MaBoPhan`) VALUES
(1, 'Tư Vấn Khách Hàng', 1),
(2, 'Bán Hàng', 1),
(3, 'Chăm Sóc Khách Hàng', 2),
(4, 'Hỗ Trợ Kỹ Thuật', 2),
(5, 'Quản Lý Tồn Kho', 3),
(6, 'Trưng Bày Sản Phẩm', 3),
(7, 'Tiếp Thị và Quảng Cáo', 4),
(8, 'Thiết Kế Đồ Họa', 4),
(9, 'Sản Xuất Trang Sức', 5),
(10, 'Sửa Chữa Trang Sức', 5),
(11, 'Quản Lý Nhân Sự', 6),
(12, 'Kế Toán và Tài Chính', 6);

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
  `TinhTrang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(1, 'hihihaha1', 1, '2024-04-12', 'aaaa', '0708126244', 'daothitrinh@gmail.com', 'aa');

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
  `MaPhongBan` int(5) NOT NULL,
  `MaBoPhan` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoannhanvien`
--

INSERT INTO `taikhoannhanvien` (`MaNhanVien`, `TenNhanVien`, `GioiTinh`, `NgaySinh`, `DiaChi`, `SoDienThoai`, `Email`, `MatKhau`, `Anh`, `MaPhongBan`, `MaBoPhan`) VALUES
(7, 'Lê Gia Hưng', 0, '2024-04-23', 'aaaa', '0708126244', 'hunglee@gmail.com', '123456', 'uploads/hungle.png', 8, 4);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bophan`
--
ALTER TABLE `bophan`
  ADD PRIMARY KEY (`MaBoPhan`);

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`MaCTHD`),
  ADD KEY `fk_chitiethoadon_hoadon` (`MaHoaDon`),
  ADD KEY `MaSanPham` (`MaSanPham`),
  ADD KEY `MaGiamGia` (`MaGiamGia`);

--
-- Chỉ mục cho bảng `giamgia`
--
ALTER TABLE `giamgia`
  ADD PRIMARY KEY (`MaGiamGia`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`MaGioHang`),
  ADD KEY `MaKhachHang` (`MaKhachHang`,`MaSanPham`),
  ADD KEY `fk_giohang_sanpham` (`MaSanPham`);

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
-- Chỉ mục cho bảng `phongban`
--
ALTER TABLE `phongban`
  ADD PRIMARY KEY (`MaPhongBan`),
  ADD KEY `MaBoPhan` (`MaBoPhan`);

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
  ADD PRIMARY KEY (`MaNhanVien`),
  ADD KEY `MaTaiKhoan` (`MaPhongBan`,`MaBoPhan`),
  ADD KEY `fk_taikhoannhanvien_phongban` (`MaPhongBan`),
  ADD KEY `fk_taikhoannhanvien_bophan` (`MaBoPhan`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bophan`
--
ALTER TABLE `bophan`
  MODIFY `MaBoPhan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `MaCTHD` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `giamgia`
--
ALTER TABLE `giamgia`
  MODIFY `MaGiamGia` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `MaGioHang` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `MaHoaDon` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loaitrangsuc`
--
ALTER TABLE `loaitrangsuc`
  MODIFY `MaLoaiTrangSuc` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `MaNhaCungCap` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `phongban`
--
ALTER TABLE `phongban`
  MODIFY `MaPhongBan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSanPham` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `taikhoankhachhang`
--
ALTER TABLE `taikhoankhachhang`
  MODIFY `MaKhachHang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `taikhoannhanvien`
--
ALTER TABLE `taikhoannhanvien`
  MODIFY `MaNhanVien` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `fk_chitiethoadon_giamgia` FOREIGN KEY (`MaGiamGia`) REFERENCES `giamgia` (`MaGiamGia`),
  ADD CONSTRAINT `fk_chitiethoadon_hoadon` FOREIGN KEY (`MaHoaDon`) REFERENCES `hoadon` (`MaHoaDon`),
  ADD CONSTRAINT `fk_chitiethoadon_sanpham` FOREIGN KEY (`MaSanPham`) REFERENCES `sanpham` (`MaSanPham`);

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `fk_giohang_sanpham` FOREIGN KEY (`MaSanPham`) REFERENCES `sanpham` (`MaSanPham`),
  ADD CONSTRAINT `fk_giohang_taikhoankhachhang` FOREIGN KEY (`MaKhachHang`) REFERENCES `taikhoankhachhang` (`MaKhachHang`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `fk_hoadon_taikhoankhachhang` FOREIGN KEY (`MaKhachHang`) REFERENCES `taikhoankhachhang` (`MaKhachHang`);

--
-- Các ràng buộc cho bảng `phongban`
--
ALTER TABLE `phongban`
  ADD CONSTRAINT `fk_phongban_bophan` FOREIGN KEY (`MaBoPhan`) REFERENCES `bophan` (`MaBoPhan`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_sanpham_loaitrangsuc` FOREIGN KEY (`MaLoaiTrangSuc`) REFERENCES `loaitrangsuc` (`MaLoaiTrangSuc`),
  ADD CONSTRAINT `fk_sanpham_nhacungcap` FOREIGN KEY (`MaNhaCungCap`) REFERENCES `nhacungcap` (`MaNhaCungCap`);

--
-- Các ràng buộc cho bảng `taikhoannhanvien`
--
ALTER TABLE `taikhoannhanvien`
  ADD CONSTRAINT `fk_taikhoannhanvien_bophan` FOREIGN KEY (`MaBoPhan`) REFERENCES `bophan` (`MaBoPhan`),
  ADD CONSTRAINT `fk_taikhoannhanvien_phongban` FOREIGN KEY (`MaPhongBan`) REFERENCES `phongban` (`MaPhongBan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
