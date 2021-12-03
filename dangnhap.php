<!DOCTYPE html>
<html>
<head>
    <?php include "logo_tab.php" ?>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <title> Đăng nhập </title>
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

include 'head.html';
?>
<div class="page-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h1>Đăng nhập</h1>
                <span>Bạn cần đăng nhập để trải nghiệm </span>

            </div>
        </div>
    </div>
</div>
<section class="ftco-section">
    <div class=" container">
        <form action="checklogin.php" name="formlogin" class="login-form " method="post">
            <div class="form-group">
                <label class=" " >Tên truy cập </label>
                <input type="text" name="name" class="form-control rounded-left" placeholder="Username" required>
            </div>
            <div class="form-group">
                <label class=" " >Mật khẩu  </label>
                <input type="password" name="pass" class="form-control rounded-left" placeholder="Password" required>
            </div>
            <div class="form-group">
                <button type="submit" name="submit" value="Đăng nhập" class="form-control btn btn-primary rounded submit px-3">Đăng nhập</button>
            </div>
            <div class="form-group d-md-flex">
                <div class="w-50">
                    <label for="autologin" id="lbl_autologin">
                        <input type="checkbox" name="autologin" id="autologin" tabindex="4" class="checkbox"
                               checked="checked">
                        Ghi nhớ
                    </label>
                </div>
                <div class="w-50 text-md-right">
                    <a href="#">Quên mật khẩu ?</a>
                </div>
            </div>

        </form>

    </div>
</section>
<!--    <form class="login" name="formlogin" action="checklogin.php" method="post">-->
<!--            <div class="row">-->
<!--                <label class="" for="name"><b>Tên truy cập</b></label>-->
<!--                <input type="text" name="name" size="25" maxlength="40" placeholder="Username" required/>-->
<!--            </div>-->
<!---->
<!--        <label for="password"><b>Mật khẩu</b></label>-->
<!--        <input type="password" name="pass" size="25" maxlength="40" placeholder="Password" required/>-->
<!--        <label for="autologin" id="lbl_autologin">-->
<!--            <input type="checkbox" name="autologin" id="autologin" tabindex="4" class="checkbox" checked="checked">-->
<!--            Ghi nhớ-->
<!--        </label>-->
<!--        <br>-->
<!--        <div align="center">-->
<!--            <input type="submit" name="submit" value="Đăng nhập" class="btn"/>-->
<!--        </div>-->
<!--    </form>-->


<?php
include 'end.html';
?>
</body>
</html>
