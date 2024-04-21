<?php
        $MaGH = $_GET['id'];

        // Kiểm tra xem sản phẩm đã có trong giỏ hàng chưa
        $sql ="SELECT gh.*, sp.*, nd.* FROM `giohang` gh, `tbl_sanpham` sp, `nguoidung` nd WHERE MaGH='$MaGH' AND gh.MaSanPham = sp.MaSanPham AND nd.MaNguoiDung = gh.MaNguoiDung";
        $danhsach = $connect->query($sql);
        while ($row = $danhsach->fetch_array(MYSQLI_ASSOC))
        {
            $Gia = $row["SoLuong"] * $row["DonGia"];
            echo "<form id='f' action='index.php?do=giohangmua_xuly&id'" .$row["MaGH"]."'method='post'>";
                    echo '<table border="0" align="center">';
                    echo '<tr>
                        <th colspan="2">THÔNG TIN ĐĂNG KÝ</th>
                    </tr>';
                        echo '<tr>
                            <td width="30%">Họ và tên: </td>
                        <td width="70%">
                            ' . $row["TenNguoiDung"] .'
                        </td>
                    </tr>';
                    echo '<tr>
                        <td>Tên sản phẩm</td>
                        <td>'. $row['Ten'] .'</td>
                    </tr>';
                    echo '<tr>
                        <td>Số lượng</td>
                        <td>
                            <input id="txtSoLuong" type="text" value="'. $row["SoLuong"] .'" onchange="updateGia()">
                        </td>
                    </tr>';
                    echo '<tr>
                        <td>Giá</td>
                        <td>
                            <input id="txtGia" type="text" value="'. $Gia .'" readonly="true">
                        </td>
                    </tr>';
                    echo '<tr>
                        <td>Ghi chú</td>
                        <td>
                            <textarea name="txtGhiChu"></textarea>
                        </td>
                    </tr>';
                    echo '<tr>
                        <td><input type="submit" value="Mua"></td>
                        <td><input type="submit" value="Huỷ" onclick="submitHuy()"></td>
                    </tr>  ';     
                echo '</table>';
            echo '</form>';
        }
?>

<script>
    function updateGia() {
        var sl = document.getElementById("txtSoLuong").value;
        var Gia = sl * <?php
                           $sql ="SELECT gh.*, sp.*, nd.* FROM `giohang` gh, `tbl_sanpham` sp, `nguoidung` nd WHERE MaGH='$MaGH' AND gh.MaSanPham = sp.MaSanPham AND nd.MaNguoiDung = gh.MaNguoiDung";
                            $danhsach = $connect->query($sql);
                            $row = $danhsach->fetch_array(MYSQLI_ASSOC);
                            echo $row["DonGia"]; 
                        ?>;
        document.getElementById("txtGia").value = Gia + 'đ';
    }

    function submitHuy() {
        var maND = "<?php echo $_SESSION["MaND"]; ?>";
        document.getElementById("f").action = "index.php?do=giohang&id=" + maND;
        document.getElementById("f").submit();
    }
</script>