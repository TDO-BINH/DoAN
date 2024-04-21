<?php
// Kết nối đến cơ sở dữ liệu
$connect = new mysqli("localhost", "root", "vertrigo", "qlbanhang");

// Kiểm tra kết nối
if ($connect->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $connect->connect_error);
}

// Xử lý khi form được gửi đi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form
    $maNguoiDung = $_POST["MaNguoiDung"];
    $matKhauCu = $_POST["MatKhauCu"];
    $matKhauMoi = $_POST["MatKhauMoi"];
    $xacNhanMatKhauMoi = $_POST["XacNhanMatKhauMoi"];

    // Mã hóa mật khẩu cũ
    $matKhauCuMysql = md5($matKhauCu);

    // Kiểm tra mật khẩu cũ trong cơ sở dữ liệu
    $sql_select = "SELECT * FROM `nguoidung` WHERE `MaNguoiDung`='$maNguoiDung' AND `MatKhau`='$matKhauCuMysql'";
    $result = $connect->query($sql_select);

    if ($result->num_rows > 0) { // Nếu mật khẩu cũ đúng
        // Kiểm tra mật khẩu mới và xác nhận mật khẩu mới
        if ($matKhauMoi == $xacNhanMatKhauMoi) { // Nếu mật khẩu mới và xác nhận mật khẩu mới trùng khớp
            // Mã hóa mật khẩu mới
            $matKhauMoiMysql = md5($matKhauMoi);

            // Cập nhật mật khẩu mới vào cơ sở dữ liệu
            $sql_update = "UPDATE `nguoidung` SET `MatKhau`='$matKhauMoiMysql' WHERE `MaNguoiDung`='$maNguoiDung'";
            if ($connect->query($sql_update) === TRUE) {
                echo "Cập nhật mật khẩu thành công";
            } else {
                echo "Lỗi khi cập nhật mật khẩu: " . $connect->error;
            }
        } else {
            echo "Mật khẩu mới và xác nhận mật khẩu mới không khớp";
        }
    } else {
        echo "Mật khẩu cũ không đúng";
    }
}

// Đóng kết nối
$connect->close();
?>
