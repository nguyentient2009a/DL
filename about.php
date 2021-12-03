<!DOCTYPE html>
<html>
<head>
    <?php include "logo_tab.php" ?>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="GallerySoft.info"/>
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <title> DL Restaurant </title>
</head>
<body>

<?php
session_start();
if (isset($_SESSION['name']) && $_SESSION['level'] == 1) {
    include 'head_admin.html';
} else if (isset($_SESSION['name']) && $_SESSION['level'] == 2) {
    include 'head_user.html';
} else {
    include 'head.html';
}
?>
<div class="page-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h1>Về chúng tôi</h1>
                <span>Nhà hàng DL mang đến hương vị khác biệt cho mọi khách hàng </span>

            </div>
        </div>
    </div>
</div>
<div class="more-info about-info">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="more-info-content">
                    <div class="row">
                        <div class="col-md-6 align-self-center">
                            <div class="right-content">
                                <span>Giới thiệu chung</span>
                                <h2>Nhà hàng <em>DL</em></h2>
                                <p>Nhà hàng sở hữu một không gian ẩm thực ấm cúng với sự kết hợp tinh tế giữa văn hóa ẩm
                                    thực Việt Nam và các nền văn hóa ẩm thực Á Đông. Đến với Nhà Hàng Ẩm Thực Việt,
                                    khách hàng có thể thưởng thức những món ăn độc đáo, sáng tạo và mang đậm dấu ấn đặc
                                    trưng. Trong đó, ấn tượng và nổi bật nhất với thiết kể ẩm thực chủ đạo gồm những món
                                    ăn đặc sắc chế biến từ nguyên liệu truyền thống và các nguyên liệu được nhập khẩu
                                    100%.
                                    <br><br>Với khát vọng và nỗ lực, Nhà Hàng Ẩm Thực DL sẽ không ngừng cải tiến, hoàn
                                    thiện chất lượng dịch vụ, hướng đến khẳng định uy tín và vị thế vững vàng trên thị
                                    trường kinh doanh ẩm thực Hà Nội .

                                    Đồng thời trong tương lai đẩy mạnh, phát triển chuỗi nhà hàng chuyên về hải sản cao
                                    cấp, thú rừng hoang dã cũng như những món ăn tinh hoa Trung Hoa mang thương hiệu Ẩm
                                    Thực Việt và một số thương hiệu về nhà hàng – khách sạn khác.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="left-image">
                                <img src="image/about-1-570x350.jpg" alt="">
                            </div>
                            <p style="padding-top: 25px">An toàn: Trong ngành kinh doanh ẩm thực, an toàn về sức khỏe được xem là yếu tố quan
                                trọng nhất. Tuy nhiên, hiện nay rất nhiều cơ sở kinh doanh vì lợi nhuận mà lại bỏ quên
                                yếu tố này. Với tâm niệm mong muốn bảo vệ sức khỏe của khách hàng, Nhà Hàng Ẩm Thực DL
                                luôn luôn đề cao vấn đề an toàn thực phẩm ở mọi công đoạn từ lựa chọn và bảo quản nguyên
                                liệu, quá trình chế biến món ăn đến khi thành phẩm.

                                Đặc biệt nhất, Nhà Hàng Ẩm Thực DL rất chặt chẽ trong khâu nhập nguyên liệu. Nhà Hàng
                                không chỉ nhập những loại rau đảm bảo tiêu chuẩn rau sạch, hải sản đảm bảo tươi sống và
                                có nguồn gốc rõ ràng, mà với hải sản nhập cấp đông luôn được lấy mẫu kiểm định trước khi
                                nhập vào.


                                <br><br> Chất lượng: Nhà Hàng Ẩm Thực DL luôn không ngừng tìm tòi, học hỏi, cập nhật
                                để hoàn
                                thiện và nâng cao chất lượng từng món ăn, nâng cao chất lượng và sự khoa học trong thiết
                                kế thực đơn bữa ăn. Đồng thời Ẩm Thực DL còn chú trọng đến việc nâng cao chất lượng
                                các loại hình dịch vụ Nhà Hàng mà cung cấp.

                                Chuyên nghiệp: Sự chuyên nghiệp là một trong những giá trị Nhà Hàng Ẩm Thực DL tự tin
                                và tự hào nhất. Ẩm Thực DL sở hữu một đội ngũ nhân viên giàu kinh nghiệm và đã qua đào
                                tạo chuyên sâu, bao gồm các chuyên gia tư vấn về ẩm thực, đầu bếp, nhân viên phục vụ…
                                Tập thể nhân viên Ẩm Thực DL luôn sẵn sàng cống hiến hết mình để có thể cung cấp những
                                dịch vụ tốt nhất, chuyên nghiệp nhất đến khách hàng.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="fun-facts">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="left-content">
                    <span>Lịch sử hình thành</span>
                    <h2>Địa chỉ: <em>68 đường Mỹ Đình , quận Nam Từ Liêm ,thành phố Hà Nội </em></h2>
                    <p>Ngày 9/5/2020, Nhà Hàng Ẩm Thực DL chính thức khai trương đi vào hoạt động tại cơ sở Hà Nội.
                        <br><br>“Ẩm thực và hơn thế nữa!”

                        “Ẩm thực và hơn thế nữa!” là câu slogan thể hiện sứ mệnh, phương châm, hướng đi mà Nhà Hàng Ẩm
                        Thực DL đã lựa chọn. Sứ mệnh của Nhà Hàng Ẩm Thực DL là mang đến cho khách hàng những trải
                        nghiệm tuyệt vời và đúng nghĩa nhất về ẩm thực. Ở đó, ẩm thực không chỉ đơn giản là ngon miệng,
                        mà phải đảm bảo an toàn vệ sinh và dinh dưỡng.</p>
                </div>
            </div>
            <div class="col-md-6 align-self-center">
                <div class="row">
                    <div class="col-md-6">
                        <div class="count-area-content">
                            <div class="count-digit">100</div>
                            <div class="count-title">Bàn phục vụ</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="count-area-content">
                            <div class="count-digit">33280</div>
                            <div class="count-title">Khách hàng hài lòng</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="count-area-content">
                            <div class="count-digit">12</div>
                            <div class="count-title">Thành phố</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="count-area-content">
                            <div class="count-digit">15</div>
                            <div class="count-title">Nhà hàng</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div align="center">
    <?php
    include 'end.html';
    ?>
</div>
