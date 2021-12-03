<!DOCTYPE html>
<html>
<head>
    <?php include "logo_tab.php" ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
          rel="stylesheet">
    <title>ĐL Restaurant </title>
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

                <h1>Liên hệ với chúng tôi</h1>
                <span>DL Restaurant hân hạnh được phục vụ quý khách </span>

            </div>
        </div>
    </div>
</div>

<div class="contact-information">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="contact-item">
                    <i class="fa fa-phone"></i>
                    <h4>Hotline </h4>
                    <p>Gọi cho chúng tôi </p>
                    <a href="#">+84 9654 77986</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-item">
                    <i class="fa fa-envelope"></i>
                    <h4>Email</h4>
                    <p>Liên hệ với chúng tôi qua email .</p>
                    <a href="#">dlrestaurant@gmail.com</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-item">
                    <i class="fa fa-map-marker"></i>
                    <h4>Địa chỉ </h4>
                    <p> 68 đường Mỹ Đình , quận Nam Từ Liêm ,thành phố Hà Nội</p>
                    <a href="https://goo.gl/maps/xRziExma4mSpnThk7">Xem địa chỉ </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="callback-form contact-us">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Gửi tin nhắn cho <em>chúng tôi</em></h2>
                    <span>Nhận xét của bạn về chất lượng của nhà hàng </span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="contact-form">
                    <form id="contact" name="gopyus" action="contact.php" method="post">
                        <div class="row">
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="name" type="text" class="form-control" id="name"
                                           placeholder="Họ và tên " required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="email" type="text" class="form-control" id="email"
                                           pattern="[^ @]*@[^ @]*" placeholder="Địa chỉ email" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="subject" type="text" class="form-control" id="subject"
                                           placeholder="Nhận xét về chất lượng " required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="message" rows="6" class="form-control" id="message"
                                              placeholder="Nhận xét của bạn " required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="filled-button">Gửi liên hệ</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="map">

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.0846399892116!2d105.77270411490468!3d21.029299085998026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b174572a71%3A0x333bbda501d39cf1!2zNjggxJDGsMahzIBuZyBN4bu5IMSQw6xuaCwgTeG7uSDEkMOsbmgsIFThu6sgTGnDqm0sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1638446311889!5m2!1svi!2s"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>

<div align="center">
    <?php
    include 'end.html';
    ?>
</div>
</body>
</html>