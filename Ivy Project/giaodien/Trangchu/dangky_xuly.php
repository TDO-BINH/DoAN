<?php
    session_start();
    
    include_once "cauhinh.php";
    include_once "thuvien.php";

    // Kiểm tra nếu có dữ liệu được gửi từ form
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Lấy thông tin từ FORM
        $HoVaTen = $_POST['HoVaTen'];
        $TenDangNhap = $_POST['TenDangNhap'];
        $MatKhau = $_POST['MatKhau'];
        $XacNhanMatKhau = $_POST['XacNhanMatKhau'];

        // Kiểm tra và xử lý dữ liệu
        if(trim($HoVaTen) == "")
            ThongBaoLoi("Họ và tên không được bỏ trống!");
        elseif(trim($TenDangNhap) == "")
            ThongBaoLoi("Tên đăng nhập không được bỏ trống!");
        elseif(trim($MatKhau) == "")
            ThongBaoLoi("Mật khẩu không được bỏ trống!");
        elseif($MatKhau != $XacNhanMatKhau)
            ThongBaoLoi("Xác nhận mật khẩu không đúng!");
        else {
            // Mã hóa mật khẩu
            $MatKhau = md5($MatKhau);

            // Kiểm tra người dùng đã tồn tại chưa
            $sql_kiemtra = "SELECT * FROM nguoidung WHERE TenDangNhap = '$TenDangNhap'";
            $result = $connect->query($sql_kiemtra);

            if ($result && $result->num_rows > 0) {
                ThongBaoLoi("Tên đăng nhập đã tồn tại!");
            } else {
                // Lấy mã người dùng tiếp theo
                $sql_ma_nguoi_dung = "SELECT MAX(MaNguoiDung) AS MaxMa FROM nguoidung";
                $result_ma_nguoi_dung = $connect->query($sql_ma_nguoi_dung);

                if ($result_ma_nguoi_dung && $row = $result_ma_nguoi_dung->fetch_assoc()) {
                    $ma_nguoi_dung = $row['MaxMa'] + 1;
                } else {
                    $ma_nguoi_dung = 1;
                }

                // Thêm người dùng vào cơ sở dữ liệu
                $sql_them = "INSERT INTO nguoidung (MaNguoiDung, TenNguoiDung, TenDangNhap, MatKhau, QuyenHan, Khoa)
                            VALUES ('$ma_nguoi_dung', '$HoVaTen', '$TenDangNhap', '$MatKhau', 2, 0)";

                if ($connect->query($sql_them) === TRUE) {
                    // Display success message and continue to login page
                    echo "<p>Đăng ký thành công! <a href='index.php?do=dangnhap'>Tiếp tục đăng nhập</a></p>";
                } else {
                    ThongBaoLoi("Đăng ký không thành công: " . $connect->error);
                }

            }
        }
    }
?>


