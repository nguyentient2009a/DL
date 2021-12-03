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
<div class="page-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Tin tức </h1>
                <span>DL Restaurant với nhiều chương trình khuyến mại  </span>
            </div>
        </div>
    </div>
</div>

<div class="single-services">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <section class='tabs-content'>
                    <article id='tabs-1'>
                        <img src="https://www.nhahangquangon.com/wp-content/uploads/2020/04/qn-2.jpg" alt="">
                        <h4><a href="">ĐẶC SẢN TĂNG ĐỀ KHÁNG CHỐNG DỊCH.</a></h4>
                        <div style="margin-bottom:10px;">
                            <span>DLrestaurant &nbsp;|&nbsp; 27.07.2020 10:10 &nbsp;|&nbsp; 15 comments</span>
                        </div>
                        <p>Đặc sản Heo tộc quay lu chặt mẹt của Nhà hàng Quá Ngon sở dĩ được khách hàng ưa chuộng vì đây
                            không chỉ là món ăn ngon tuyệt vời mà còn bổ dưỡng như một liều thuốc tăng cường sức đề
                            kháng, chống dịch hiệu quả. GIÁ TRỊ DINH DƯỠNG CỦA THỊT HEO TỘC […]</p>
                        <br>
                        <div>
                            <a href="#" class="filled-button">Xem thêm </a>
                        </div>
                    </article>

                    <br>
                    <br>
                    <br>

                    <article id='tabs-2'>
                        <img src="https://www.nhahangquangon.com/wp-content/uploads/2019/08/dich-vu-dat-tiec-qua-ngon.jpg"
                             alt="">
                        <h4><a href="#">Dịch vụ Đặt tiệc tại nhà – Trải nghiệm đẳng cấp nhà hàng tại không gian nhà bạn!</a></h4>
                        <div style="margin-bottom:10px;">
                            <span>DLrestaurant &nbsp;|&nbsp; 27.07.2020 10:10 &nbsp;|&nbsp; 15 comments</span>
                        </div>
                        <p>Ngày nay, xu hướng đặt tiệc tại nhà (tiệc ngoài trời, tiệc tại tư gia, tiệc công ty, cơ quan,
                            doanh nghiệp…) với không gian thoáng đãng, đem đến sự thoải mái, vui vẻ cho mọi người đang
                            là sự lựa chọn của nhiều khách hàng. Dịch vụ nhận đặt tiệc tại nhà trọn gói […]</p>
                        <br>
                        <div>
                            <a href="#" class="filled-button">Xem thêm  </a>
                        </div>
                    </article>
                </section>
            </div>

            <div class="col-md-4">
                <h4 class="h4">Tìm kiếm </h4>

                <form id="search_form" name="gs" method="GET" action="#">
                    <input type="text" name="q" class="form-control form-control-lg" placeholder="Tìm kiếm..."
                           autocomplete="on">
                </form>

                <br>
                <br>

                <h4 class="h4">Bài viết gần đây </h4>

                <ul>
                    <li>
                        <h5 style="margin-bottom:10px;"><a href="#">“Ăn Cá Tầm – Tặng Tôm Sú” – Nhà hàng DL đồng hành cùng Sở Du lịch giới thiệu ẩm thực Việt</a></h5>
                        <small><i class="fa fa-user"></i> DLrestaurant &nbsp;|&nbsp; <i class="fa fa-calendar"></i>
                            27.11.2021 10:10</small>
                    </li>

                    <li><br></li>

                    <li>
                        <h5 style="margin-bottom:10px;"><a href="#">Ưu đãi tháng 11: Tặng gói trang trí đặc biệt cho tiệc thôi nôi, sinh nhật</a></h5>
                        <small><i class="fa fa-user"></i> DLrestaurant &nbsp;|&nbsp; <i class="fa fa-calendar"></i>
                            07.11.2021 10:11</small>
                    </li>

                    <li><br></li>

                    <li>
                        <h5 style="margin-bottom:10px;"><a href="#">“Like” liền tay nhận ngay món ăn</a></h5>

                        <small><i class="fa fa-user"></i> DLrestaurant &nbsp;|&nbsp; <i class="fa fa-calendar"></i>
                            1.12.2021 10:10</small>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>


<?php
include 'end.html';
?>
</body>
</html>