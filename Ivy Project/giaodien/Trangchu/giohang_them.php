<?php
        $MaSanPham = $_GET['id'];
        $MaNguoiDung = $_SESSION['MaNguoiDung'];

        // Kiểm tra các sản phẩm đã vô giỏ hàng hay chưa
        $sql = "SELECT * FROM 'giohang' WHERE MaNguoiDung =' $MaNguoiDung' ADD MaSanPham = ' $MaSanPham'";
        $result = $connect-> query($sql);

        if($result ->num_rows > 0)
        {
            //Nếu sản phẩm đã tồn tại trong giỏ thì , chỉ cật nhập số lượng
            $row = $result ->fetch_assoc();
            $sl = $row['SoLuong'] +1;

            $sql_update ="UPDATE giohang SET SoLuong ='$sl' WHERE MaNguoiDung =' $MaNguoiDung' AND MaSanPham =' $MaSanPham'";
            $connect->query($sql_update);
            echo "<h2 align='center'>Số lượng sản phẩm vừa mới cập nhật vào giỏ hàng</h2>";
        }
        else
        {
            // nếu sảm phẩm chưa thêm vào giỏ, thì thêm giỏ
            $sql_addgiohang = "INSERT INTO `giohang`(`MaNguoiDung`,`MaSanPham`,`SoLuong`) VALUES (`$MaNguoiDung`,`$MaSanPham`,1)";
            $connect->query($sql_addgiohang);
            echo "<h2 align='center'>Bạn vừa thêm 1 sản phẩm mới vào giỏ hàng</h2>";
        }
?>