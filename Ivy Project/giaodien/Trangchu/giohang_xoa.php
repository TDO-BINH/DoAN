<?php
	$sql = "DELETE FROM `giohang` where MaGH = " . $_GET['id'];
	$danhsach = $connect->query($sql);
	//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
	if (!$danhsach) {
		die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
		exit();
	}
	else
	{
		echo "<h2 align='center'>Bạn đã xoá sản phầm một sản phẩm</h2>";
	}
?>