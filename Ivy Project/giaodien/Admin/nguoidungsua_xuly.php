<?php
        //Lấy thông tin cua from

        $MaNguoiDung = $_POST['MaNguoiDung'];
        $TenNguoiDung = $_POST['TenNguoiDung'];
        $MatKhau = $_POST['MatKhau'];
        $cauhinh = $_POST['cauhinh'];

        //kiem tra

        if(trim($MaNguoiDung) == "")
            ThongBaoLoi("Mã người dùng không được bỏ trống")
        
?>