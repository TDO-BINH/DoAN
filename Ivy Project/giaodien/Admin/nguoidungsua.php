<?php
       $MaNguoiDung = $_GET['id'];

       $sql = "select * from 'nguoidung' where MaNguoiDung ='$ManguoiDung'";

       $danhsach = $connect->query($sql);
       //Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
	if (!$danhsach) 
    {
		die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
		exit();
	}

    $dong = $danhsach->fetch_array(MYSQLI_ASSOC)
?>

<h3>Sửa Người Dùng</h3>
<from action="tao file xu li" metho="post">
        <table class="suanguoidung">
                <input type="hidd" name="MaNguoiDung" value="<?php echo $dong['MaNguoidung']; ?>" />
                <tr>
                    <td>
                        <span class="MyFormLabel">Mã Người Dùng:</span>
                        <input type="text" name="MaNguoiDung" value="<?php echo $dong['MaNguoiDung']; ?>" />
                    </td>
                </tr>
                <tr>
                    <td>
                         <span class="MyFormLabel">Tên Người Dùng:</span>
                        <input type="text" name="TenNguoiDung" value="<?php echo $dong['TenNguoiDung']; ?>" />
                    </td>
                </tr>
                <tr>
                    <td>
                         <span class="MyFormLabel">Mật Khẩu :</span>
                        <input type="text" name="MatKhau" value="<?php echo $dong['MatKhau']; ?>" />
                    </td>
                </tr>
        </table>
        <input type="submit" value="Cật Nhật" />
</from>

