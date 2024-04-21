<?php
<<<<<<< HEAD
    // Kết nối đến cơ sở dữ liệu
    $connect = new mysqli("localhost", "root", "vertrigo", "qlbanhang");
    // Kiểm tra kết nối
    if ($connect->connect_error) {
        die("Kết nối đến cơ sở dữ liệu thất bại: " . $connect->connect_error);
    }

    $sql = "SELECT * FROM `nguoidung`";
    $danhsach = $connect->query($sql);
    //Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
    if (!$danhsach) {
        die("Không thể thực hiện câu lệnh SQL: " . $connect->error);
    }
=======
       $sql = "SELECT * FROM `nguoidung` WHERE 1";
        $danhsach = $connect->query($sql);
        
        // Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
        if(!$danhsach)
        {
            die("Không thể thực hiện câu lệnh SQL:" . $connect->connect_error);
        }
>>>>>>> 275d9d80c2dff75c60a9bb17777662d0bf02d7ca
?>

<h3>Danh sách người dùng</h3>
<table class="DanhSach">
    <tr>
<<<<<<< HEAD
        <th>Mã ND</th>
        <th>Họ và tên</th>
        <th>Tên đăng nhập</th>
        <th>Quyền</th>
        <th colspan="3">Hành động</th>
    </tr>
    <?php
        //Dùng vòng lặp while truy xuất các phần tử trong table
        while ($dong = $danhsach->fetch_array(MYSQLI_ASSOC)) 
        {           
            echo "<tr  bgcolor='#ffffff' onmouseover='this.style.background=\"#dee3e7\"' onmouseout='this.style.background=\"#ffffff\"'>";
                echo "<td>" . $dong["MaNguoiDung"] . "</td>";
                echo "<td>" . $dong["TenNguoiDung"] . "</td>";
                echo "<td>" . $dong["TenDangNhap"] . "</td>";
                
                echo "<td>";
                    if($dong["QuyenHan"] == 1)
                        echo "Quản trị (<a href='index.php?do=nguoidung_kichhoat&id=" . $dong["MaNguoiDung"] . "&quyen=2'>Hạ quyền</a>)";
                    else
                        echo "Thành viên (<a href='index.php?do=nguoidung_kichhoat&id=" . $dong["MaNguoiDung"] . "&quyen=1'>Nâng quyền</a>)";
                echo "</td>";
                
                
                
                echo "<td align='center'><a href='index.php?do=nguoidung_sua&id=" . $dong["MaNguoiDung"] . "'><img src='images/edit.png' /></a></td>";
                echo "<td align='center'><a href='index.php?do=nguoidung_xoa&id=" . $dong["MaNguoiDung"] . "' onclick='return confirm(\"Bạn có muốn xóa người dùng " . $dong['TenNguoiDung'] . " không?\")'><img src='images/delete.png' /></a></td>";
                
            echo "</tr>";
        }
    ?>
</table>
    
<a href="index.php?do=dangky">Thêm mới người dùng</a>
</form>
=======
        <th>Mã Người Dùng</th>
        <th>Họ Và Tên</th>
        <th>Tên Đăng Nhập</th>
        <th>Quyền</th>
        <th colspan ="3">Hành Động</th>
    </tr>
    <?php
        $stt = 1;
        // dùng vòng lặp while truy xuất các phần tử trong table
        while ($dong = $danhsach ->fetch_array(MYSQLI_ASSOC))
        {
            echo "<tr>";
            echo "<td>" . $dong["MaNguoiDung"] . "</td>";
            echo "<td>" . $dong["TenNguoiDung"] . "</td>";
            echo "<td>" . $dong["TenDangNhap"] . "</td>";
            
            echo "<td>";
                    if($dong["QuyenHan"]==1)
                        echo "Quản trị (<a href='index.php?do=nguoidungkichhoat&id= " . $dong["MaNguoiDung"] ."&quyen=2'>Hạ quyền </a>)";
                    else
                    echo "Thành viên (<a href='index.php?do=nguoidungkichhoat&id= " . $dong["MaNguoiDung"] ."&quyen=1'>Nâng Quyền </a>)";
                echo "</td>";

                echo "<td align='center'>";
                    if($dong["Khoa"] == 0)
                        echo "<a href='index.php?do=nguoidungkichhoat&id=" . $dong["MaNguoiDung"] . "&khoa1 '><img src='./images/active.png'/></a>";
                    else
						echo "<a href='index.php?do=nguoidungkichhoat&id=" . $dong["MaNguoiDung"] . "&khoa=0'><img src='./images/ban.png' /></a>";
				echo "</td>";

                //echo "<tr align='center'><a href='index.php?do=nguoidung_sua&id=" . $dong["MaNguoiDung"] . "&khoa1 '><img src='./images/edit.png'/></a>";
                //echo "<td align='center'><a href='index.php?do=nguoidung_xoa&id=" . $dong["MaNguoiDung"] . "' onclick='return confirm(\"Bạn có muốn xóa người dùng " . $dong['TenNguoiDung'] . " không?\")'><img src='./images/delete.png' /></a></td>";
            echo "</tr>";    
        }
    ?>
</table>

<a href ="index.php?do=dangky">Thêm Mới Người Dùng</a>
>>>>>>> 275d9d80c2dff75c60a9bb17777662d0bf02d7ca
