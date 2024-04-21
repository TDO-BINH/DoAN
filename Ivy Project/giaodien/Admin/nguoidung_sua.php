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
    $tenNguoiDung = $_POST["TenNguoiDung"];
    $tenDangNhap = $_POST["TenDangNhap"];
    // Cập nhật thông tin người dùng vào cơ sở dữ liệu
    $sql_update = "UPDATE `nguoidung` SET `TenNguoiDung`='$tenNguoiDung', `TenDangNhap`='$tenDangNhap' WHERE `MaNguoiDung`='$maNguoiDung'";
    if ($connect->query($sql_update) === TRUE) {
        echo "Cập nhật thông tin người dùng thành công";
    } else {
        echo "Lỗi khi cập nhật thông tin người dùng: " . $connect->error;
    }
}

// Lấy thông tin người dùng cần sửa từ URL
$maNguoiDung = $_GET["id"];
$sql_select = "SELECT * FROM `nguoidung` WHERE `MaNguoiDung`='$maNguoiDung'";
$result = $connect->query($sql_select);
$nguoiDung = $result->fetch_assoc();
?>

<form method="post" action="">
    <input type="hidden" name="MaNguoiDung" value="<?php echo $nguoiDung['MaNguoiDung']; ?>">
    <label for="TenNguoiDung">Họ và tên:</label>
    <input type="text" name="TenNguoiDung" value="<?php echo $nguoiDung['TenNguoiDung']; ?>"><br>
    <label for="TenDangNhap">Tên đăng nhập:</label>
    <input type="text" name="TenDangNhap" value="<?php echo $nguoiDung['TenDangNhap']; ?>"><br>
    <input type="submit" value="Cập nhật">
</form>
