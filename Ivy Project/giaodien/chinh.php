<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/1147679ae7.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
        <title>Ivy-Project</title>
    </head>
    <body>
        
                <div id="header">
                    <div id="main">
                        <ul id="menu">
                           
                            <li><a href="">SẢN PHẨM MỚI</a> </li>
                            <li><a href="">ĐẦM</a></li>
                            <li><a href="">ÁO TRÊN</a></li>
                            <li><a href="">QUẦN</a></li>
                            <li><a href="">GIÀY DÉP</a></li>
                            <li><a href="">PHỤ KIỆN</a></li>
                            <li><a href="">TÚI</a></li>
                            <li><input placeholder="Tìm kiếm" type="text"> <i class="fas fa-search"></i></li>
                            <li><a href="index.php?do=dangnhap">Đăng Nhập</a></li>
                            <li><a href="">Đăng ký</a></li>
                            <li> <a class ="fa fa-shopping-bag" href=""></a></li>
                        </ul>
                    </div>
                </div>
               
         
        <div  id="Slider">
            <div class="aspect-ratio-169"> <!--lên gg gõ tỉ lệ aspect ratio-->
                <img src="./images/banner.jpg">
                <!-- <img src="./images/banner2.jpg"> -->
            </div>
        </div>
        <div id="content">
            <?php
                                
                                $do = isset($_GET['do']) ? $_GET['do'] : "home";
                                
                                include $do . ".php";
                            ?>
        </div>

    <!---------------------------------------footer------------------------------------->
        <div id="footer">
                <section class="app-container">
                    <div class="app-google">
                        <p>Tải ứng dụng</p>
                        <img src="images/appstore.png">
                        <img src="images/ggplay.png">
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
    </body>
</html>