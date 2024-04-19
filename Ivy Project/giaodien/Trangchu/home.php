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
<!---------------------------------------cartegory------------------------------------->
<section class="cartegory">
    <div class="container">
        <div class="row">
            <div class="cartegory-right row">
                <div class="cartegory-right-top-item">
                    <p>Sản Phẩm Nỗi Bật</p>
                </div>

                <div class="cartegory-right-top-item">
                    <button><span>Bộ lọc</span><i class="fas fa-sort-down"></i></button>
                </div>
                <div class="cartegory-right-top-item">
                    <select name="" id="">
                        <option value="">Sắp sếp</option>
                        <option value="">Giá cao đến thấp</option>
                        <option value="">Giá thấp đến cao</option>
                    </select>
                </div>
                <div class="cartegory-right-content row">
                    <div class="cartegory-right-content-item">
                        <img src="images/clo1.jpg" alt="">
                        <h1>Áo Sơ Mi Thời Trang Voan Ngắn Tay Thêu Cổ Chữ V Dễ Phối Mùa Hè Mùa Hè Mẫu Mới Áo Thiết Kế Quần Áo Nữ 
                            5412A-DV001-</h1>
                        <p>499.000<sup>đ</sup></p>
                    </div>
                    <div class="cartegory-right-content-item">
                        <img src="images/clo2.jpg" alt="">
                        <h1>Áo Sơ Mi Nữ Kẻ Sọc Trắng Vàng Áo Sơ Mi Nữ Đầu Xuân Mẫu Mới Áo Sơ Mi Kiểu Tây Âu Áo Chống Nắng Bãi Biển
                            5412A-DV016-</h1>
                        <p>589.000<sup>đ</sup></p>
                    </div>
                    <div class="cartegory-right-content-item">
                        <img src="images/clo3.jpg" alt="">
                        <h1>Áo dệt kim chống nắng đơn giản phong cách Hàn Quốc cho nữ mùa hè mỏng dài tay thiết kế hốc rộng áo vest áo hai mảnh
                            5411A-DV012-</h1>
                        <p>619.000<sup>đ</sup></p>
                    </div>
                    <div class="cartegory-right-content-item">
                        <img src="images/clo4.jpg" alt="">
                        <h1>Áo Sơ Mi Nữ Sọc Tay Phồng Xuân Hè Mẫu Mới Nhật Bản Lotte
                            5411A-DV004-</h1>
                        <p>529.000<sup>đ</sup></p>
                    </div>
                    <div class="cartegory-right-content-item">
                        <img src="images/clo5.jpg" alt="">
                        <h1>Áo Sơ Mi Ren Cổ Điển Rộng Rãi Cổ Chữ V Kiểu Pháp Áo Chân Váy Hoa Nhỏ Tôn Dáng Gầy Cạp Cao Phong Cách Hàn Quốc Bộ Đồ Nữ Mùa Hè
                            5410A-DV010-</h1>
                        <p>519.000<sup>đ</sup></p>
                    </div>
                    <div class="cartegory-right-content-item">
                        <img src="images/clo6.jpg" alt="">
                        <h1>Áo Phông Ngắn Tay Ren Màu Hồng Cổ Chữ U Thuần Khiết Gợi Cảm Cho Nữ Áo Dáng Ngắn Phối Bên Trong Nơ Bướm Mùa Hè Năm
                            5410A-DV016-</h1>
                        <p>409.000<sup>đ</sup></p>
                    </div>
                    <div class="cartegory-right-content-item">
                        <img src="images/clo7.jpg" alt="">
                        <h1>Áo Sơ Mi Kiểu Pháp Màu Hồng Áo Sơ Mi Cổ Tròn VảI Gai Lãng Mạn Tôn Dáng Gầy Rộng Rãi Mùa Hè Cho Nữ
                            5408A-DV007-</h1>
                        <p>779.000<sup>đ</sup></p>
                    </div>
                    <div class="cartegory-right-content-item">
                        <img src="images/clo8.jpg" alt="">
                        <h1>Áo Sơ Mi Kẻ Sọc Sơ Mi Nữ Kiểu Pháp Ngắn Tay Nhẹ Nhàng Áo Sơ Mi Đi Làm Đơn Giản Dành Cho Người Đi Làm Mùa Hè
                            5405A-DV023-</h1>
                        <p>399.000<sup>đ</sup></p>
                    </div>
                </div> 
            </div>
             
        </div>
    </div>
</section>
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