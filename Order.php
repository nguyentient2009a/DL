<!DOCTYPE html>
<html>
	<head> 
		<?php 

		include'logo_tab.php';
		?>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<meta name="author" content="GallerySoft.info" />
    		<link rel="stylesheet" href="style.css" type="text/css" />
		<title> Đặt bàn  </title>
	</head>
	<body>
		<?php
			
			include 'head_user.html';
		?>
        <div class="page-heading header-text">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Đặt bàn </h1>
                        <span>Đặt bàn trước để nhận chương trình ưu đãi của nhà hàng </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="callback-form contact-us" style="margin: 0">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="contact-form">
                            <form id="contact" action="" method="get">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <fieldset>
                                            <input type="text" class="form-control valid-feedback" placeholder="31.07.2020" required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-sm-6">
                                        <fieldset>

                                            <input type="text" class="form-control" placeholder="20:30" required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-sm-6">
                                        <fieldset>

                                            <select class="form-control">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-sm-6">
                                        <fieldset>

                                            <input  type="text" class="form-control" placeholder="Name" required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>

                                            <textarea name="message" rows="6" class="form-control" id="message" placeholder="Notes" required=""></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="filled-button">Kiển tra đặt bàn </button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label>Email</label>
                        <p><a href="#"><i class="fa fa-envelope"></i>dlrestaurant@gmail.com</a></p>

                        <br>

                        <label>Phone</label>
                        <p><a href="#"><i class="fa fa-phone"></i>  +84 9654 77986</a></p>

                        <br>

                        <label>Address</label>
                        <p><i class="fa fa-map-marker"></i>  68 đường Mỹ Đình , quận Nam Từ Liêm ,thành phố Hà Nội</p>
                    </div>
                </div>
            </div>
        </div>
		
		<?php
			include 'end.html';
		?>
	</body>
</html>