<!DOCTYPE html>
<html>
    <head>
        <title>ÁO</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php	
			
            $sql = "SELECT * FROM `tbl_sanpham` WHERE PhanLoai='Giày'";
            $danhsach = $connect->query($sql);
                
			//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
			if (!$danhsach) {
				die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
				exit();
			}
					
			$count_kq = mysqli_num_rows($danhsach);
					
			while ($row = $danhsach->fetch_array(MYSQLI_ASSOC)) 		
			{						
				
				echo "<div class='khungsp'>";
					echo "<div class='card'>";					
						echo "<img class='hinhanhphim' src=" . $row["HinhAnh"] . " style='width: 190px; height: 140px;'>";
						echo "<span class=\"giaban\">". $row["DonGia"] ." đ</span>";
						echo "<p><a style='text-decoration: none;color:#000' href=''>". $row["TenSanPham"] ." </a></p>";
					echo "</div>";		
                    
				echo "</div>";	
			}

			if (isset($_SESSION['limit_home']) && $count_kq > $_SESSION['limit_home']) {
            }
            
			{
				echo "<h3 class=\"xemthem\"><a href='index.php?do=home&limit_home=ok'>Xem thêm các sản phẩm khác</a></h3></td>";
					
			}
		?>
    </body>
</html>