<?php
        $MaGH = $_GET['id'];

        // lấy mã giỏ hàng
        $sql = "SELECT gh.*, sp.* FROM `giohang` gh,`tbl_sanpham` sp WHERE MaGH =' $MaGH' ADD sp.MaSanPham = gh.MaSanPham ";
        $danhsach = $connect->query($sql);

        $row = $danhsach->fetch_assoc();

        $sql_delete = "DELETE FROM `giohang` WHERE MaGH = '$MaGH'";
        $connect->query($sql_delete);
        
        echo "<h2 align='center'>Bạn đã đặt đơn hàng: " . $row['TenSanPham'] . " số lượng: " . $row['SoLuong'] . "</h2>";
?> 