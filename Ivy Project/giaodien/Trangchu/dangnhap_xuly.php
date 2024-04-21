<?php
    // Thực hiện kết nối đến cơ sở dữ liệu (cần thêm thông tin kết nối)
    $connect = new mysqli($servername, $username, $password, $dbname);

    // Kiểm tra kết nối
    if ($connect->connect_error) {
        die("Kết nối đến cơ sở dữ liệu thất bại: " . $connect->connect_error);
    }

    // Lấy thông tin từ FORM
    $TenDangNhap = $_POST['TenDangNhap'];
    $MatKhau = $_POST['MatKhau'];

    // Kiểm tra
    if(trim($TenDangNhap) == "")
        ThongBaoLoi("Tên đăng nhập không được bỏ trống!");
    elseif(trim($MatKhau) == "")
        ThongBaoLoi("Mật khẩu không được bỏ trống!");
    else
    {
        // Mã hóa mật khẩu
        $MatKhau = md5($MatKhau);

        // Kiểm tra người dùng có tồn tại không
        $sql_kiemtra = "SELECT * FROM nguoidung WHERE TenDangNhap = '$TenDangNhap' AND MatKhau = '$MatKhau'";  

        $result = $connect->query($sql_kiemtra);

        if (!$result) {
            die("Không thể thực hiện câu lệnh SQL: " . $connect->error);
            exit();
        }

        $dong = $result->fetch_assoc();
        if($dong)
        {
            if($dong['Khoa'] == 0)
            {
                // Đăng ký SESSION
                $_SESSION['MaND'] = $dong['MaNguoiDung'];
                $_SESSION['HoTen'] = $dong['TenNguoiDung'];
                $_SESSION['QuyenHan'] = $dong['QuyenHan'];

                // Chuyển hướng về trang index.php
                header("Location: index.php");
            }
            else
            {
                ThongBaoLoi("Người dùng đã bị khóa tài khoản!");
            }   
        }
        else
        {
            ThongBaoLoi("Tên đăng nhập hoặc mật khẩu không chính xác!");
        }
    }

    // Đóng kết nối
    $connect->close();
?>
