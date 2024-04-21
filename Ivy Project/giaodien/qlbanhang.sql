
-- su dung để tăng giá tri  tiếp theo
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

-- -- tạo cơ sở dữ liệu 
-- CREATE DATABASE `qlbanhang` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
 USE `qlbanhang`;


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


DROP TABLE IF EXISTS `giohang`;
CREATE TABLE IF NOT EXISTS `giohang` (
  `MaGH` int(10) NOT NULL AUTO_INCREMENT,
  `MaNguoiDung` int(10) NOT NULL,
  `MaSanPham` varchar(20) NOT NULL,
  `SoLuong` int(10) NOT NULL,
  PRIMARY KEY (`MaGH`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;




DROP TABLE IF EXISTS `tbl_sanpham`;
CREATE TABLE IF NOT EXISTS `tbl_sanpham` (
  `MaSanPham` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `TenSanPham` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `HinhAnh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `DonGia` int(255) NOT NULL,
  `MoTa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SoLuong` int(10) NOT NULL,
  `PhanLoai` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaSanPham`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=46 ;

INSERT INTO `tbl_sanpham` ( `MaSanPham`, `TenSanPham`, `HinhAnh`, `DonGia`, `MoTa`, `SoLuong`,`PhanLoai`) VALUES
('5412A-DV001-', 'Áo Sơ Mi Thời Trang Voan Ngắn Tay Thêu Cổ Chữ V Dễ Phối Mùa Hè Mùa Hè Mẫu Mới Áo Thiết Kế Quần Áo Nữ','images/clo1.jpg', '499000', 'Bình thường (50cm<Length≤65cm), tay áo phồng, thêu nối', '100','Áo'),
('5412A-DV016-', 'Áo Sơ Mi Nữ Kẻ Sọc Trắng Vàng Áo Sơ Mi Nữ Đầu Xuân Mẫu Mới Áo Sơ Mi Kiểu Tây Âu Áo Chống Nắng Bãi Biển','images/clo2.jpg', '589000', 'Bình thường (50cm<Length≤65cm), phong cách thường xuyên, vạch sọc', '100','Áo'),
('5411A-DV012-', 'Áo dệt kim chống nắng đơn giản phong cách Hàn Quốc cho nữ mùa hè mỏng dài tay thiết kế hốc rộng áo vest áo hai mảnh','images/clo3.jpg', '619000', 'Bình thường (50cm<Length≤65cm), phong cách thông thường, hồng', '100','Áo'),
('5411A-DV004-', 'Áo Sơ Mi Nữ Sọc Tay Phồng Xuân Hè Mẫu Mới Nhật Bản Lotte','images/clo4.jpg', '529000', 'Quần dài, quần thẳng, tay áo lồng đèn', '100','Áo'),
('5410A-DV010-', 'Áo Sơ Mi Ren Cổ Điển Rộng Rãi Cổ Chữ V Kiểu Pháp Áo Chân Váy Hoa Nhỏ Tôn Dáng Gầy Cạp Cao Phong Cách Hàn Quốc Bộ Đồ Nữ Mùa Hè','images/clo5.jpg', '519000', 'Tay áo năm điểm, vừa vặn, tay áo phồng', '100','Áo'),
('5410A-DV016-', 'Áo Phông Ngắn Tay Ren Màu Hồng Cổ Chữ U Thuần Khiết Gợi Cảm Cho Nữ Áo Dáng Ngắn Phối Bên Trong Nơ Bướm Mùa Hè Năm','images/clo6.jpg', '409000', 'Ngắn (40cm <chiều dài ≤ 50cm), chui đầu, ren', '100','Áo'),
('5408A-DV007-', 'Áo Sơ Mi Kiểu Pháp Màu Hồng Áo Sơ Mi Cổ Tròn VảI Gai Lãng Mạn Tôn Dáng Gầy Rộng Rãi Mùa Hè Cho Nữ','images/clo7.jpg', '779000', 'kiểu dáng bình thường (50cm <chiều dài ≤ 65cm), kiểu dáng rộng rãi, màu trơn', '100','Áo'),
('5405A-DV023-', 'Áo Sơ Mi Kẻ Sọc Sơ Mi Nữ Kiểu Pháp Ngắn Tay Nhẹ Nhàng Áo Sơ Mi Đi Làm Đơn Giản Dành Cho Người Đi Làm Mùa Hè','images/clo8.jpg', '399000', 'Ngắn (40cm <chiều dài ≤ 50cm), loại rộng, sọc', '100','Áo'),
('5223A-DV003-', 'Áo REN THÊU CHÂN VÁY Bộ Hai Chiếc Mẫu Mới Mùa Hè Cho Nữ Mặc Trọn Bộ Dòng Sữa Trẻ Trung Ngọt Ngào','images/clo11.webp', '16000', 'Thông thường, vải họa tiết, ôm vừa vặn', '100','Áo'),
('5223A-DV019-', 'Hanfu nữ phong cách Trung Hoa mới cải cách cổ điển mặt ngựa đen phong cách Trung Quốc Váy nửa người mùa hè mới','images/clo12.webp', '846000', 'Thông thường, eo cao xếp li', '100','Áo'),
('5418A-DV007-', 'Real Shot Mùa Hè Mới Thời Trang Phong Cách Hàn Quốc Tay Loe Tay Ngắn Thiết Kế Cảm Giác Thích Hợp Ngọt Ngào Phong Cách Phương Tây Nữ','images/clo13.webp', '569000', 'Thiết kế cổ áo ngọt ngào, giảm tuổi và thời trang Có một sự sang trọng tự nhiên', '100','Áo'),
('5229A-N0104-', 'Áo thun dệt kim thời trang và đa năng phong cách Hàn Quốc, thân thiện với làn da và thoáng khí','images/clo14.webp', '512000', 'Áo thun tay ngắn phối ren kiểu dáng thanh lịch dành cho nữ', '100','Áo'),
('5417A-DV003-', 'Áo Sơ Mi Voan Ngắn Tay Vai Chính Áo Sơ Mi Nữ Mùa Hè Áo Sơ Mi Cổ Chữ V Cảm Giác Thiết Kế Mẫu Mới Mùa Hè Áo Sơ Mi Kiểu Tây','images/clo15.webp', '569000', 'Loại bình thường (50cm <Chiều dài ≤ 65cm), loại rộng, quá trình xếp nếp', '100','Áo'),
---Quần
('5219A-DV8818-', 'Quần áo nữ mùa xuân hè ngọt ngào nhỏ thơm kiểu dây treo váy ngắn váy giảm béo vòng eo','images/clo10.webp', '550000', 'Kiểu ngắn, dây đeo chéo, ôm vừa vặn', '100','Quần'),
('5417A-DV022-', 'Quần Đi Biển Thái Lan Quần Ống Rộng Đi Biển Bohemian Nữ Quần Đi Du Lịch Phong Cách Dân Tộc Mùa Hè Quần Dài In Hoa','images/clo16.webp', '399000', 'Quần chín điểm, quần ống rộng, ren xuyên thấu', '100','Quần'),
('5416A-DV019-', 'Quần Bò Phân Tôn Dáng Gầy Tôn Dáng Co Giãn Cạp Cao Khâu Ren Thêu Phong Cách Trung Quốc Mới','images/clo17.webp', '819000', 'Kiểu thắt lưng cạp cao, màu xanh khói ren', '100','Quần'),
('5416A-DV018-', 'Quần Jean Nữ Dễ Phối Khí Chất Ống Thẳng Cạp Cao Ren Ghép Cảm Giác Thiết Kế Xuân Hè','images/clo21.webp', '1065000', 'Quần chín điểm, cạp cao, mỏng', '100','Quần'),
('5409A-DV009-', 'Quần Short Axetat Quần Năm Phân Thường Ngày Rộng Rãi Mẫu Mới Mùa Hè Năm Cho Nữ Quần Tây Ống Rộng Ống Đứng Kiểu Mỏng','images/clo22.webp', '599000', 'Quần vest ren nhẹ nhàng phong cách công chúa', '100','Quần'),
('5409A-DV002-', 'Quần Bò Ống Rộng Rách Cỡ Lớn Cho Người Béo Mm Quần Ống Đứng Rộng Rãi Dễ Phối Đồ Kiểu Mỹ Đường Phố Mẫu Mới Mùa Hè Màu Xanh Nhạt Cho Nữ','images/clo23.webp', '669000', 'Quần ống rộng phong cách hip hop đường phố, quần jean lưng cao', '100','Quần'),
('5408A-DV014-', 'Quần Ống Rộng Hẹp Satin Jacquard Phong Cách Trung Quốc Mới Quần Thường Ngày Thêu Công Nghiệp Nặng Tôn Dáng Cạp Cao Mẫu Mới Xuân Hè Cho Nữ','images/clo24.webp', '799000', 'Vải jacquard siêu tinh tế và satin mượt, trông cực kỳ quý phái khi mặc', '100','Quần'),
('5319A-DV005-', 'Quần Dài Bò ỐNg RộNg Ống Đứng Rộng Rãi Ống Đứng Rộng Rãi Ống Đứng Thêu Hoa Phong Cách Trung Quốc Mẫu Mới Xuân Hè', 'images/clo34.webp', '699000', 'Chiều dài quần: quần dài; Kiểu thắt lưng: cạp cao; Độ dày: Trung bình', '100','Quần'),
('5319A-DV004-', 'Quần Bò Cổ Điển Kiểu Pháp Quần Ống Đứng Cạp Siêu Cao Cho Nữ Có Túi Trước Mùa Hè Năm 2024 Mẫu Mới Xuân Thu Thiết Kế','images/clo35.webp', '649000', 'Kiểu dáng: Quần ống loe; Chiều dài quần: quần dài; Kiểu thắt lưng: cạp cao; Độ dày: trung bình', '100','Quần'),




---Giày
('5109A-DV011-', 'Giày Một Lớp Miệng Nông Mũi Tròn Màu Đen Giày Mary Jane Đế Bằng Mềm Tiên Nữ Dịu Dàng Cổ Điển Phong Cách Hàn Quốc Mẫu Mới Mùa Xuân Nữ','images/clo18.webp', '617000', 'Chiều cao gót: thấp (1-3CM); Họa tiết: Màu trơn; Các mùa thích hợp: hè, đông, xuân, thu; Màu sắc: đen kẻ sọc, đen mờ, đen bóng;', '100','Giày'),
('5308A-DV010-', 'Đế Cao 7Cm Ngoại Thương Cỡ Lớn Xà Kép Thu Đông Mẫu Mới Tăng Chiều Cao Hot Trên Mạng Dép Lê','images/clo27.webp', '395000', ' Giày tăng chiều cao đế dày, dép lê và giày lông thông thường, hoàn toàn không gây cấn khi mang ngoài trời', '100','Giày'),
('5417A-DV016-', 'Dép Xỏ Ngón Đế Dày Eva Mẫu Mới Đi Ra Ngoài Mùa Hè Dép Xỏ Ngón Bãi Biển Thời Trang Nữ Hot Trên Mạng','images/clo28.webp', '329000', 'Dép xỏ ngón đế dày thông thường, siêu thoải mái', '100','Giày'),
('5414A-DV028-', 'Dép Lê Đế Dày Xỏ Ngón Phong Cách Nghỉ Dưỡng Mẫu Mới Dép Lê Đế Cao Đi Ra Ngoài Mùa Hè Cho Nữ Dép Xăng Đan Đế Bánh Xốp','images/clo29.webp', '619000', 'Giày đế dày đế dày hở mũi, dép sandal bên ngoài đơn giản và thanh lịch dành cho nữ', '100','Giày'),
('5419A-DV019-', 'Dép Sục Bít Mũi Đính Sequin Màu Bạc Dép Lê Muller Đế Bằng Mềm Mại Phong Cách Tiên Nữ Khí Chất Nhẹ Nhàng Đi Ra Ngoài Mùa Hè Cho Nữ','images/clo30.webp', '679000', 'Giày bệt Mary Jane mũi vuông đính sequin siêu sáng bóng', '100','Giày'),
('5330A-DT008-', 'Dép Xỏ Ngón Cao Gót Đế Dày Đế Xuồng Dép Lê Đi Biển Kiểu Mới Mùa Hè Cho Nữ Đi Bên Ngoài 2024 Đế Chống Thấm Nước','images/clo31.webp', '775000', 'Vải, mũi vuông, phiên bản Hàn Quốc', '100','Giày'),
('5312A-DV020-', 'Kết Hợp Váy Dép Lê Phong Cách Buổi Tối Kiểu Pháp Dép Lê Gót Thô Kỳ Nghỉ Lễ Tiên Nữ Dịu Dàng Mẫu Mới Năm Phong Cách Hàn Quốc Mặc Ngoài Mùa Hè Cho Nữ','images/clo32.webp', '426000', 'Vạch sọc, mũi vuông', '100','Giày'),
('5308A-DV015-', 'Xăng Đan Bít Mũi Giày Một Lớp Mũi Nhọn Kiểu Pháp Mẫu Mới Xuân Hè Nữ Giày Cao Gót Gót Nhọn Nơ Bướm Phong Cách Tiên Nữ Khí Chất','images/clo33.webp', '874000', 'Giày cao gót mũi nhọn siêu nhẹ nhàng nữ tính, nơ 2 lớp lấp lánh, đính đầy kim cương pha lê, siêu sang, đi làm, đi chơi đều hợp', '100','Giày');