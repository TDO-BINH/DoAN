<?php
    // Bắt đầu phiên làm việc
    session_start();

    // Hủy SESSION
    unset($_SESSION['MaND']);
    unset($_SESSION['HoTen']);
    unset($_SESSION['QuyenHan']);
    
    // Chuyển hướng về trang index.php
    header("Location: index.php");
    exit(); // Đảm bảo không có mã PHP nào khác được thực thi sau khi chuyển hướng
?>
