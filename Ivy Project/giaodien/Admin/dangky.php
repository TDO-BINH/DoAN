<?php
    //session_start(); // Bạn không cần bắt đầu phiên làm việc ở đây nếu đã bắt đầu ở trang index.php

    // Bạn có thể cần include file cauhinh.php và thuvien.php ở đây

    // Khai báo các biến
    $HoVaTen = $TenDangNhap = $MatKhau = $XacNhanMatKhau = "";

    // Kiểm tra nếu có dữ liệu được gửi từ form
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Lấy thông tin từ FORM
        $HoVaTen = $_POST['HoVaTen'];
        $TenDangNhap = $_POST['TenDangNhap'];
        $MatKhau = $_POST['MatKhau'];
        $XacNhanMatKhau = $_POST['XacNhanMatKhau'];

        // Kiểm tra và xử lý dữ liệu ở phần xử lý
        // (Nếu cần xử lý dữ liệu ngay tại đây, bạn có thể thêm mã xử lý ở đây)
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Đăng ký</title>
    <!-- Các thẻ meta, link CSS và script -->
</head>
<body>
    <!-- Form đăng ký -->
    <h3>Đăng ký</h3>
<<<<<<< HEAD
    <form action="dangky_xuly.php" method="post">
        <label for="HoVaTen">Họ và tên:</label>
        <input type="text" id="HoVaTen" name="HoVaTen" value="<?php echo $HoVaTen; ?>"><br><br>

        <label for="TenDangNhap">Tên đăng nhập:</label>
        <input type="text" id="TenDangNhap" name="TenDangNhap" value="<?php echo $TenDangNhap; ?>"><br><br>

        <label for="MatKhau">Mật khẩu:</label>
        <input type="password" id="MatKhau" name="MatKhau"><br><br>

        <label for="XacNhanMatKhau">Xác nhận mật khẩu:</label>
        <input type="password" id="XacNhanMatKhau" name="XacNhanMatKhau"><br><br>

        <input type="submit" value="Đăng ký">
    </form>
=======
    <div class="row">
    <form action="dangky_xuly.php" method="post">
        <div>
            <label for="HoVaTen">Họ và tên:</label>
            <input type="text" id="HoVaTen" name="HoVaTen" value="<?php echo $HoVaTen; ?>"><br><br>
        </div>
        <div>
            <label for="TenDangNhap">Tên đăng nhập:</label>
            <input type="text" id="TenDangNhap" name="TenDangNhap" value="<?php echo $TenDangNhap; ?>"><br><br>
        </div>
        <div>
            <label for="MatKhau">Mật khẩu:</label>
            <input type="password" id="MatKhau" name="MatKhau"><br><br>
        </div>    
        <div>
            <label for="XacNhanMatKhau">Xác nhận mật khẩu:</label>
            <input type="password" id="XacNhanMatKhau" name="XacNhanMatKhau"><br><br>
        </div>
        <input type="submit" value="Đăng ký">
    </form>
    </div>
>>>>>>> 275d9d80c2dff75c60a9bb17777662d0bf02d7ca
</body>
</html>
