<!DOCTYPE html>
<html lang="en">
<head>

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

$connection = mysqli_connect("localhost", "root", "", "nhahang") or die ("Không thể kết nối đến dữ liệu");
mysqli_select_db($connection, "nhahang");
$sql = "select * from menu where value ='1'"; // chon du lieu de in mon khai vi
$result = mysqli_query($connection, $sql);
?>
<!----><div class="page-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Thực đơn</h1>
                <span>Các món phong phú và đa dạng</span>
            </div>
        </div>
    </div>
</div>

<br><br><br>
<div class="main-banner header-text " id="top">
    <div class="Modern-Slider ">
        <!-- Item -->
        <div class="item item-4">
            <div class="img-fill-1">

            </div>
        </div>
        <!-- // Item -->
        <!-- Item -->
        <div class="item item-5">
            <div class="img-fill-1">

            </div>
        </div>
        <!-- // Item -->
        <!-- Item -->
        <div class="item item-6">
            <div class="img-fill-1">

            </div>
        </div><div class="item item-7">
            <div class="img-fill-1">

            </div>
        </div>
        <div class="item item-8">
            <div class="img-fill-1">

            </div>
        </div>
        <!-- // Item -->
    </div>
</div>

<div class="container">
    <div class="row" align="center">
        <table class="table table-hover table-striped table-order">
            <thead>
            <tr align="center" valign="middle">
                <th>
                    <div align="center" class="menu_th">STT</div>
                </th>
                <th>
                    <div align="center" class="menu_th">Tên món</div>
                </th>
                <th>
                    <div align="right" class="menu_th">Mô tả</div>
                </th>
            </tr>
            </thead>
            <tbody>
            <?php
            $dem = 0;
            while ($data = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <?php $dem++; ?>
                    <td width="80" height="25">
                        <div align="center"><?php echo $dem; ?></div>
                    </td>
                    <td width="350">
                        <div align="center"><?php echo $data["Name"]; ?></div>
                    </td>
                    <td width="170">
                        <div align="right"><?php echo $data["Description"]; ?></div>
                    </td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
    <br><br><br>

</div>

<?php
mysqli_close($connection);

include 'end.html';
?>
</body>
</html>
