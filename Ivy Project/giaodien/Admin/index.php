<?php
	//session_set_cookie_params(30); // 1800 giây = 30 phút
	session_start();
	
	
	include_once "cauhinh.php";
	
	include_once "thuvien.php";
?>
<!DOCTYPE html>
<html>
        <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
                <script src="https://kit.fontawesome.com/1147679ae7.js" crossorigin="anonymous"></script>
                <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
                <title>Quản Lý</title>
        </head>
        <body>
                <div id="main">
                        <div id="header">
                                <?php
                                        if(isset($_SESSION['MaND']) && isset($_SESSION['HoTen']))
                                        {
                                                echo "<br><br><br><br><br>Xin Chào ".$_SESSION['HoTen']." &nbsp;&nbsp;|| &nbsp;&nbsp;";
<<<<<<< HEAD
                                                echo '<a href="dangxuat.php">Đăng xuất</a>'."&nbsp;&nbsp;";
=======
                                                echo '<a href="index.php?do=dangxuat">Đăng xuất</a>'."&nbsp;&nbsp;";
>>>>>>> 275d9d80c2dff75c60a9bb17777662d0bf02d7ca
                                        }
                                ?> 
                        </div>

                        <div id="content">
                                <div id="left">
                                        <?php
                                                //Hien menu quản lý
                                                if(!isset($_SESSION['MaND']))
					        {
                                                        echo '<h3>Quản lý</h3>';
                                                                echo '<ul>';
                                                                        echo '<li><a href="index.php?do=dangnhap">Đăng nhập</a></li>';
                                                                        echo '<li><a href="index.php?do=dangky">Đăng ký</a></li>';
                                                                echo '</ul>';
					        }
                                                else
					        {
						echo '<h3>Quản lý</h3>';
<<<<<<< HEAD
						echo '<ul>';						
							echo '<li><a href="index.php?do=nguoidung">Danh sách người dùng</a></li>';
								
							if($_SESSION['QuyenHan'] == 1)
							{
								echo '<li><a href="index.php?do=dangky">Thêm người dùng</a></li>';
							}
						echo '</ul>';
					        }

=======
						echo '<ul>';							
							if($_SESSION['QuyenHan'] == 2)
							{
								echo '<li><a href="index.php?do=themsp">Thêm Sản Phẩm </a><li>';
							}else if ($_SESSION['QuyenHan'] == 1) 
                                                        {
                                                                echo '<li><a href="index.php?do=themsp">Thêm Sản Phẩm</a><li>';
                                                                echo '<li><a href="index.php?do=danhsachsp">Danh sách Sản phẩm</a><li>';
                                                                echo '<li><a href="index.php?do=nguoidung">Quản lý người dùng</a><li>';
                                                        }

						echo '</ul>';
					        }
>>>>>>> 275d9d80c2dff75c60a9bb17777662d0bf02d7ca
                                                //hiện menu hồ sơ cá nhân					
                                                if(isset($_SESSION['MaND']))
                                                {
                                                        echo '<h3>Hồ sơ cá nhân</h3>';
                                                        echo '<ul>';						
                                                                echo '<li><a href="index.php?do=hosocanhan">Hồ sơ cá nhân</a></li>';
                                                                echo '<li><a href="index.php?do=doimatkhau">Đổi mật khẩu</a></li>';
                                                        echo '</ul>';
                                                }								
                                        ?>

                                </div>
                                <div id="right">
<<<<<<< HEAD
					<?php
						$do = isset($_GET['do']) ? $_GET['do'] : "home";
						
						include $do . ".php";
					?>
=======
                                <?php
                                $do = isset($_GET['do']) ? $_GET['do'] : "home";
                                include $do . ".php";
                            ?>
>>>>>>> 275d9d80c2dff75c60a9bb17777662d0bf02d7ca
				</div>
                        </div>
                
 <!---------------------------------------footer------------------------------------->
                        <div id="footer">
                                <section class="app-container">
                                <div class="app-google">
                                        <p>Tải ứng dụng</p>
<<<<<<< HEAD
                                        <img src="images/appstore.png"> 
=======
                                        <img src="images/appstore.png">
>>>>>>> 275d9d80c2dff75c60a9bb17777662d0bf02d7ca
                                        <img src="images/ggplay.jpg">
                                </div>
                                </section>
                                <div class="footer-top">
                                        <li><a href=""><img src="images/dathongbao.png" alt=""></a></li>
                                        <li><a href=""></a>Liên hệ</li>
                                        <li><a href=""></a>Tuyển dụng</li>
                                        <li><a href=""></a>Giới thiệu</li>
                                        <li>
                                                <a href="" class="fab fa-facebook-f"></a>
                                                <a href="" class="fab fa-twitter"></a>
                                                <a href="" class="fab fa-youtube"></a>
                                        </li>
                        </div>
                        <div class="footer-center">
                        <p>
                                Công ty cổ phần Thanh Bình với số đăng ký kinh doanh 1620516828 <br>
                                Đị chỉ đăng ký: đường số 4, Khu Đô Thị Mới Tây Sông Hậu, Phường Mỹ Phước, Thành phố Long Xuyên , An Giang <br>
                                Đặt hàng online: <b>0383 225 660</b>
                        </p>
                        </div>
                        <div class="footer-bottom">
                           ©Trần Toàn All rights reserved
                        </div>
                        </div>
                </div>
        </body>
</html>