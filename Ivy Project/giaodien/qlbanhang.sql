
-- su dung để tăng giá tri  tiếp theo
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

-- -- tạo cơ sở dữ liệu 
CREATE DATABASE `qlbanhang` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `qlbanhang`;

-- Xóa bảng người dùng nếu tồn tại
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
--mk 456abc
INSERT INTO `nguoidung` (`MaNguoiDung`, `TenNguoiDung`, `TenDangNhap`, `MatKhau`, `QuyenHan`, `Khoa`) VALUES
(1,'Trần Bảo Toàn','TBT','a906449d5769fa7361d7ecc6aa3f6d28',1,0), 
(2,'Đỗ Thanh Bình','DTB','a916c5e70469689f4e390aeb0d2bf67d',2,0),
(3,'Trần Ngọc Nhi','','tnn','a916c5e70469689f4e390aeb0d2bf67d',1,0),
(4,'Trần Phi Phi','tpp','a916c5e70469689f4e390aeb0d2bf67d',2,0);


-- Xóa bảng giỏ hàng nếu tồn tại
DROP TABLE IF EXISTS `giohang`;
CREATE TABLE IF NOT EXISTS `giohang` (
  `MaGH` int(10) NOT NULL AUTO_INCREMENT,
  `MaNguoiDung` int(10) NOT NULL,
  `MaDS` int(10) NOT NULL,
  `SoLuong` int(10) NOT NULL,
  PRIMARY KEY (`MaGH`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;


-- Xóa bảng sản phẩm nếu tồn tại
DROP TABLE IF EXISTS `tbl_sanpham`;
-- Tạo bảng sản phẩm với cột MaSanPham là khóa chính tự động tăng giá trị
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
('1','Áo Sơ Mi Thời Trang Voan Ngắn Tay','','499.000đ','Phối Mùa Hè Mùa Hè Mẫu Mới Áo Thiết Kế Quần Áo Nữ','100');

--Quần
('5416A-DV018-', 'Quần Jean Nữ Dễ Phối Khí Chất Ống Thẳng Cạp Cao Ren Ghép Cảm Giác Thiết Kế Xuân Hè', 
'images/clo21.webp', '1.065.000', 'Quần chín điểm, cạp cao, mỏng', '100')
('5409A-DV009-', 'Quần Short Axetat Quần Năm Phân Thường Ngày Rộng Rãi Mẫu Mới Mùa Hè Năm Cho Nữ Quần Tây Ống Rộng Ống Đứng Kiểu Mỏng', 
'images/clo22.webp', '599.000', 'Quần vest ren nhẹ nhàng phong cách công chúa', '100')
('5409A-DV002-', 'Quần Bò Ống Rộng Rách Cỡ Lớn Cho Người Béo Mm Quần Ống Đứng Rộng Rãi Dễ Phối Đồ Kiểu Mỹ Đường Phố Mẫu Mới Mùa Hè Màu Xanh Nhạt Cho Nữ', 
'images/clo23.webp', '669.000', 'Quần ống rộng phong cách hip hop đường phố, quần jean lưng cao', '100')
('5408A-DV014-', 'Quần Ống Rộng Hẹp Satin Jacquard Phong Cách Trung Quốc Mới Quần Thường Ngày Thêu Công Nghiệp Nặng Tôn Dáng Cạp Cao Mẫu Mới Xuân Hè Cho Nữ', 
'images/clo24.webp', '799.000', 'Vải jacquard siêu tinh tế và satin mượt, trông cực kỳ quý phái khi mặc', '100')
('5402A-DV007-', 'Váy denim thiết kế mùa hè mới thích hợp váy ngắn chữ A cạp cao ôm sát mông nhỏ dành cho nữ', 
'images/clo25.webp', '809.000', 'Quần short denim là món đồ không thể thiếu trong mùa hè, chúng trông vẫn tuyệt vời dù kết hợp với gì', '100')
('5401A-DV002-', 'Quần Kẻ Sọc Mùa Hè Nữ Cotton Mỏng Quần Ống Rộng Quần Âu Mới Rời Cao Cấp Phong Cách Phổ Biến', 
'images/clo26.webp', '1.169.000', 'Quần họa tiết kẻ sọc dễ thương, thường xuyên, quần ống rộng', '100')
('5319A-DV005-', 'Quần Dài Bò ỐNg RộNg Ống Đứng Rộng Rãi Ống Đứng Rộng Rãi Ống Đứng Thêu Hoa Phong Cách Trung Quốc Mẫu Mới Xuân Hè', 
'images/clo34.webp', '699.000', 'Chiều dài quần: quần dài; Kiểu thắt lưng: cạp cao; Độ dày: Trung bình', '100')
('5319A-DV004-', 'Quần Bò Cổ Điển Kiểu Pháp Quần Ống Đứng Cạp Siêu Cao Cho Nữ Có Túi Trước Mùa Hè Năm 2024 Mẫu Mới Xuân Thu Thiết Kế', 
'images/clo35.webp', '649.000', 'Kiểu dáng: Quần ống loe; Chiều dài quần: quần dài; Kiểu thắt lưng: cạp cao; Độ dày: trung bình', '100')
--Giày-dép
('5308A-DV010-', 'Đế Cao 7Cm Ngoại Thương Cỡ Lớn Xà Kép Thu Đông Mẫu Mới Tăng Chiều Cao Hot Trên Mạng Dép Lê', 
'images/clo27.webp', '395.000', ' Giày tăng chiều cao đế dày, dép lê và giày lông thông thường, hoàn toàn không gây cấn khi mang ngoài trời', '100')
('5417A-DV016-', 'Dép Xỏ Ngón Đế Dày Eva Mẫu Mới Đi Ra Ngoài Mùa Hè Dép Xỏ Ngón Bãi Biển Thời Trang Nữ Hot Trên Mạng', 
'images/clo28.webp', '329.000', 'Dép xỏ ngón đế dày thông thường, siêu thoải mái', '100')
('5414A-DV028-', 'Dép Lê Đế Dày Xỏ Ngón Phong Cách Nghỉ Dưỡng Mẫu Mới Dép Lê Đế Cao Đi Ra Ngoài Mùa Hè Cho Nữ Dép Xăng Đan Đế Bánh Xốp', 
'images/clo29.webp', '619.000', 'Giày đế dày đế dày hở mũi, dép sandal bên ngoài đơn giản và thanh lịch dành cho nữ', '100')
('5419A-DV019-', 'Dép Sục Bít Mũi Đính Sequin Màu Bạc Dép Lê Muller Đế Bằng Mềm Mại Phong Cách Tiên Nữ Khí Chất Nhẹ Nhàng Đi Ra Ngoài Mùa Hè Cho Nữ', 
'images/clo30.webp', '679.000', 'Giày bệt Mary Jane mũi vuông đính sequin siêu sáng bóng', '100')
('5330A-DT008-', 'Dép Xỏ Ngón Cao Gót Đế Dày Đế Xuồng Dép Lê Đi Biển Kiểu Mới Mùa Hè Cho Nữ Đi Bên Ngoài 2024 Đế Chống Thấm Nước', 
'images/clo31.webp', '775.000', 'Vải, mũi vuông, phiên bản Hàn Quốc', '100')
('5312A-DV020-', 'Kết Hợp Váy Dép Lê Phong Cách Buổi Tối Kiểu Pháp Dép Lê Gót Thô Kỳ Nghỉ Lễ Tiên Nữ Dịu Dàng Mẫu Mới Năm Phong Cách Hàn Quốc Mặc Ngoài Mùa Hè Cho Nữ', 
'images/clo32.webp', '426.000', 'Vạch sọc, mũi vuông', '100')
('5308A-DV015-', 'Xăng Đan Bít Mũi Giày Một Lớp Mũi Nhọn Kiểu Pháp Mẫu Mới Xuân Hè Nữ Giày Cao Gót Gót Nhọn Nơ Bướm Phong Cách Tiên Nữ Khí Chất', 
'images/clo33.webp', '874.000', 'Giày cao gót mũi nhọn siêu nhẹ nhàng nữ tính, nơ 2 lớp lấp lánh, đính đầy kim cương pha lê, siêu sang, đi làm, đi chơi đều hợp', '100')
