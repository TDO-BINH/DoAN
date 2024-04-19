
-- su dung để tăng giá tri  tiếp theo
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

-- -- tạo cơ sở dữ liệu 
-- CREATE DATABASE `qlbanhang` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
-- USE `qlbanhang`;


DROP TABLE IF EXISTS `nguoidung`;
CREATE TABLE IF NOT EXISTS `nguoidung` (
  `MaNguoiDung` int(10) NOT NULL,
  `TenNguoiDung` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `TenDangNhap` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `QuyenHan` tinyint(1) NOT NULL,
  `Khoa` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--mk 123abc

INSERT INTO `nguoidung` (`MaNguoiDung`, `TenNguoiDung`, `TenDangNhap`, `MatKhau`, `QuyenHan`, `Khoa`) VALUES
(1,'Trần Bảo Toàn','TBT','a906449d5769fa7361d7ecc6aa3f6d28',1,0), 
(2,'Đỗ Thanh Bình','DTB','a906449d5769fa7361d7ecc6aa3f6d28',2,0),
(3,'Trần Ngọc Nhi','TNN','a906449d5769fa7361d7ecc6aa3f6d28',1,0),
(4,'Trần Phi Phi','TPP','a906449d5769fa7361d7ecc6aa3f6d28',2,0); 



CREATE TABLE IF NOT EXISTS `giohang` (
  `MaGH` int(10) NOT NULL AUTO_INCREMENT,
  `MaNguoiDung` int(10) NOT NULL,
  `MaDS` int(10) NOT NULL,
  `SoLuong` int(10) NOT NULL,
  PRIMARY KEY (`MaGH`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;
-- Table structure for table `tbl_sanpham`
--

DROP TABLE IF EXISTS `tbl_sanpham`;
CREATE TABLE IF NOT EXISTS `tbl_sanpham` (
  `MaSanPham` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `TenSanPham` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `HinhAnh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `DonGia` int(10) NOT NULL,
  `MoTa` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `SoLuong` int(10) NOT NULL,
  PRIMARY KEY (`IdSanPham`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=46 ;

INSERT INTO `tbl_sanpham` ( `MaSanPham`, `TenSanPham`, `HinhAnh`, `DonGia`, `MoTa`, `SoLuong`) VALUES
('1','Áo Sơ Mi Thời Trang Voan Ngắn Tay','./Trangchu/images/clo1.jpg','499.000đ','Phối Mùa Hè Mùa Hè Mẫu Mới Áo Thiết Kế Quần Áo Nữ','100');
('1','Áo Sơ Mi Thời Trang Voan Ngắn Tay','./Trangchu/images/clo2.jpg','');

