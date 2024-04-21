<?php
    // Kiểm tra xác nhận xóa người dùng
    if(isset($_GET['id'])) {
        // Lấy ID của người dùng cần xóa từ tham số truyền vào
        $id = $_GET['id'];

        // Kết nối đến cơ sở dữ liệu
        //$connect = new mysqli("localhost", "username", "password", "qlbanhang");

        // Kiểm tra kết nối
        if ($connect->connect_error) {
            die("Kết nối đến cơ sở dữ liệu thất bại: " . $connect->connect_error);
        }

        // Tạo câu truy vấn để xóa người dùng
        $sql = "DELETE FROM `nguoidung` WHERE `MaNguoiDung` = $id";

        // Thực thi câu truy vấn
        if ($connect->query($sql) === TRUE) {
            echo "Xóa người dùng thành công!";
        } else {
            echo "Lỗi: " . $sql . "<br>" . $connect->error;
        }

        // Đóng kết nối
        $connect->close();
    } else {
        echo "Không có thông tin người dùng để xóa!";
    }
?>
