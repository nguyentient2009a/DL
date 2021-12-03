<html>
<head>
    <?php include "logo_tab.php" ?>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <title> Welcome to DL Restaurant </title>
    <meta name="author" content="GallerySoft.info"/>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/owl.css">
</head>
<body>
<?php
session_start();
include 'head_user.html';
?>
<div class="main-banner header-text" id="top">
    <div class="Modern-Slider">
        <!-- Item -->
        <div class="item item-1">
            <div class="img-fill">
                <div class="text-content">
                    <h6>Chào mừng bạn đến với ĐL Restaurant </h6>
                    <h4>Chương trình khuyến mãi lên đến 30% <br> khi bạn đặt bàn ngay </h4>
                    <p>Hệ thống nhà hàng ĐL là chuỗi nhà hàng ẩm thực Buffet tại Việt Nam. Buffet từ lâu đã
                        được ưa chuộng ở Châu Âu, xuất hiện lần đầu tiên vào thế kỷ 17 tại Pháp. với một hình thức ăn
                        uống mới mẻ, phong phú về thực đơn , tinh tế về hình thức và chất lượng trong từng món ăn.</p>
                    <a href="Order.php" class="filled-button">Đặt bàn ngay </a>
                </div>
            </div>
        </div>
        <!-- // Item -->
        <!-- Item -->
        <div class="item item-2">
            <div class="img-fill">
                <div class="text-content">
                    <h6>ĐL restaurant mang đến những món ăn phong phú đa dạng </h6>
                    <h4>Menu phong phú <br>và đa dạng các món ăn </h4>
                    <p>Hệ thống nhà hàng ĐL cung cấp bữa trưa và bữa tối tự chọn với thực đơn phong phú bao gồm hơn 150
                        món ăn ngon 3 miền, món ăn Âu – Á, các loại hải sản, đồ nướng và đồ Nhật…</p>
                    <a href="menu.php" class="filled-button">Menu</a>
                </div>
            </div>
        </div>
        <!-- // Item -->
        <!-- Item -->
        <div class="item item-3">
            <div class="img-fill">
                <div class="text-content">
                    <h6>ĐL restaurant mang đến cho khách hàng những buổi tiệc sinh nhật hay hội thảo công ty thật ý
                        nghĩa </h6>
                    <h4>Với phương châm:<br> “Vị ngọt trong khẩu vị, vị ngọt trong tinh thần”</h4>
                    <p>Mỗi món ăn nơi đây đều đạt đến sự khéo léo, tinh túy của nghệ thuật ẩm thực. Cách sắp đặt và
                        trang trí đầy sáng tạo trong không gian rộng lớn và đa dạng khiến thực khách bất ngờ, khung cảnh
                        lãng mạn của lụa, hoa và nến hoà cùng âm thanh du dương, cổ điển đầy xúc cảm.</p>
                    <a href="gopy_user.php" class="filled-button">Liên hệ </a>
                </div>
            </div>
        </div>
        <!-- // Item -->
    </div>
</div>
<!-- Banner Ends Here -->

<div class="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Sự kiện <em>của chúng tôi</em></h2>
                    <span>NƠI TỔ CHÚC SỰ KIỆN LÝ TƯỞNG </span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-item">
                    <img src="./image/other-1-720x480.jpg" alt="">
                    <div class="down-content">
                        <h4>Tiệc cưới </h4>
                        <p>Đa dạng không gian:
                            phòng VIP, trong nhà , ngoài trời,..</p>
                        <a href="Order.php" class="filled-button">Đặt ngay </a>
                    </div>
                </div>

                <br>
            </div>
            <div class="col-md-4">
                <div class="service-item">
                    <img src="image/other-2-720x480.jpg" alt="">
                    <div class="down-content">
                        <h4>Tiệc sinh nhật</h4>

                        <p>Không gian sang trọng sở hữu nhiều tiện ích .</p>
                        <a href="Order.php" class="filled-button">Đặt ngay</a>
                    </div>
                </div>

                <br>
            </div>
            <div class="col-md-4">
                <div class="service-item">
                    <img src="image/other-3-720x480.jpg" alt="">
                    <div class="down-content">
                        <h4>Hội nghị tiếp đãi đối tác </h4>

                        <p>Không gian rộng rãi mang lại cho khách hàng trải nghiệm tuyệt vời.</p>
                        <a href="Order.php" class="filled-button">Đặt ngay</a>
                    </div>
                </div>

                <br>
            </div>
        </div>
    </div>
</div>

<div class="fun-facts">
    <div class="container">
        <div class="more-info-content">
            <div class="row">
                <div class="col-md-6">
                    <div class="left-image">
                        <img src="image/about-1-570x350.jpg" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-6 align-self-center">
                    <div class="right-content">
                        <span>Nhà hàng <em>DL</em></span>
                        <h2>Bạn <em>có biết </em></h2>
                        <p>“Ẩm thực và hơn thế nữa!” là câu slogan thể hiện sứ mệnh, phương châm, hướng đi mà Nhà Hàng
                            Ẩm
                            Thực DL đã lựa chọn. Sứ mệnh của Nhà Hàng Ẩm Thực DL là mang đến cho khách hàng những trải
                            nghiệm tuyệt vời và đúng nghĩa nhất về ẩm thực.</p>
                        <a href="about.php" class="filled-button">Đọc thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="more-info">
    <div class="container">
        <div class="section-heading">
            <h2><em>Tin tức</em></h2>
            <span>Cập nhật liên tục để hưởng các chương trình khuyến mãi </span>
        </div>

        <div class="row" id="tabs">
            <div class="col-md-4">
                <ul>
                    <li><a href='#tabs-1'>TẶNG TRỌN GÓI DỊCH VỤ LÊN ĐẾN 10.000.000Đ<br> <small>DLrestaurant
                                &nbsp;|&nbsp; 27.11.2021 10:10</small></a></li>
                    <li><a href='#tabs-2'>“TỚI DL – ALO LÀ GIẢM GIÁ <br> <small>DLrestaurant
                                &nbsp;|&nbsp; 1.12.2021 09:10</small></a></li>
                    <li><a href='#tabs-3'>“ĐẠI TIỆC HẢI SẢN – ƯU ĐÃI SẬP SÀN <br> <small>DLrestaurant
                                &nbsp;|&nbsp; 3.12.2021 12:00</small></a></li>
                </ul>

                <br>

                <div class="text-center">
                    <a href="blog.php" class="filled-button">Đọc thêm </a>
                </div>

                <br>
            </div>

            <div class="col-md-8">
                <section class='tabs-content'>
                    <article id='tabs-1'>
                        <img src="image/blog1.jpg" alt="">
                        <h4><a href="blog.php">TẶNG TRỌN GÓI DỊCH VỤ LÊN ĐẾN 10.000.000Đ</a></h4>
                        <p>Tặng Gói trang trí Sinh nhật
                            Chạy slide ảnh, clip trên màn hình LED lớn.
                            Tặng Gói chụp ảnh theo tiệc</p>
                    </article>
                    <article id='tabs-2'>
                        <img src="image/blog2.jpg" alt="">
                        <h4><a href="blog.php"> TỚI DL – ALO LÀ GIẢM GIÁ</a></h4>
                        <p>
                            Cùng DL Quán tạm biệt 2021 bằng tháng cuối năm đầy ưu đãi:
                            – Giảm 10% hóa đơn cho khách hàng đặt bàn trước.
                            – Tặng 01 nậm rượu mơ tình hoặc táo mèo.
                            – Áp dụng cho bàn từ 4 người
                            – Thời gian áp dụng từ: 01/12 – 31/12/2021 (trừ các ngày diễn ra AFF CUP)</p>
                    </article>
                    <article id='tabs-3'>
                        <img src="image/blog3.jpg" alt="">
                        <h4><a href="blog.php">
                                Bạn là tín đồ của hải sản? Bạn muốn thưởng thức hải sản tươi ngon mà vẫn tiết kiệm chi phí?</a></h4>
                        <p>Chi tiết chương trình:
                            – Giảm 10% tất cả các món hải sản.
                            – Tặng thêm 500 gram ốc Hương.
                            – Đối tượng: Áp dụng cho bàn từ 6 người.
                            – Thời gian áp dụng: Từ 03/12 đến 30/12. </p>
                    </article>
                </section>

            </div>
        </div>


    </div>
</div>
<br><br><br>
<?php
include 'end.html';
?>
</body>
</html>