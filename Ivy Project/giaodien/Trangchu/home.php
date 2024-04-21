<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1147679ae7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <title>Trang Chủ</title>
</head>
<body>
	<h1>Các Sản Phẩm Nỗi Bật</h1>
	<?php	
            $sql = "SELECT * FROM `tbl_sanpham` WHERE PhanLoai='Áo'";
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

			if (isset($_SESSION['limit_home']) && $count_kq > $_SESSION['limit_home']) 
			{
				echo "<a href='index.php?do=giohang_them'>Thêm vào Giỏ</a>";
			
			}

			$sql = "SELECT * FROM `tbl_sanpham` WHERE PhanLoai='Quần'";
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
				echo "<a href='index.php?do=giohang_them'>Thêm vào Giỏ</a>";
            }

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
				echo "<a href='index.php?do=giohang_them'>Thêm vào Giỏ</a>";
            }

    ?>
</body>

<!--------------------------------------menu tiêu đề---------------------------------------------------->
<script>
    const header = document.querySelector("header")
window.addEventListener("scroll", function(){
    x = window.pageYOffset
    if(x>0){
        header.classList.add("sticky")
    }else{
        header.classList.remove("sticky")
    }
})
</script>

</html>