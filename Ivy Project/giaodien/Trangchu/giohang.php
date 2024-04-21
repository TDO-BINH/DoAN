<!DOCTYPE html>
<htmnl>
    <body>
        <?php
         $MaNguoiDung = $_GET['id'];
         $sql = "SELECT gh.*, sp.* FROM `giohang` gh
                 INNER JOIN `tbl_sanpham` sp ON gh.MaSanPham = sp.MaSanPham
                 WHERE MaNguoiDung='$MaNguoiDung'";
         
            $danhsach = $connect->query($sql);

            //Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
			if (!$danhsach) {
				die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
				exit();
			}			
				
			$count = mysqli_num_rows($danhsach);
            if ($count > 0)
            {
			
        ?>
        <table>
            <tr>
                <td>Tên sản phẩm</td>
                <td>Mô tả</td>
                <td>Phân loại</td>
                <td>Số lượng</td>
                <td>Giá</td>
                <td>Xoá</td>
                <td>Mua</td>
            </tr>

            <?php
                  while ($row = $danhsach->fetch_array(MYSQLI_ASSOC)) 	
                  $gia = $row["SoLuong"] * $row["DonGia"];
                  echo "<tr>";				
                      echo "<td class='TenSanPham'>". $row["TenSanPham"] ."</td>";
                      echo "<td class='MoTa'><img class='hinhanhphim' src=" . $row["HinhAnh"] . " style='height: 180px;'></td>";
                      echo "<td class='PhanLoai'>". $row["PhanLoai"] ."</td>";
                      echo "<td class='SoLuong'>". $row["SoLuong"] ."</td>";
                      echo "<td class='Gia'>". $row["DonGia"] ."</td>";

                      echo "<td><a href='index.php?do=giohang_xoa&id=" . $row['MaGH'] . "' onclick='return confirm(\"Bạn có muốn xoá sản phẩm " . $row['Ten'] . " không?\")'><img src='./images/delete.png' /></a></td>";
                     // echo "<td><a href='index.php?do=giohang_mua&id=" . $row['MaGH'] . "' onclick='return confirm(\"Bạn có muốn mua sản phẩm " . $row['Ten'] . " không?\")'><img src='images/check.jpg' style='height: 25px;'/a></td>";
                  echo "</tr>";
              }	
              else 
              {
                  echo "<h2 align='center'>Bạn chưa thêm món gì vào giỏ hàng</h2>";
              }
            ?>
        </table>            
    </body>
</htmnl>