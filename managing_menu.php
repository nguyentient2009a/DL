<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<meta name="author" content="GallerySoft.info" />
    		<link rel="stylesheet" href="style.css" type="text/css" />
		<title>	Quản lí thực đơn	</title>
	</head>
		
	<body>
		

        <?php
			include 'head_admin.html';
	
        $connection = mysqli_connect("localhost","root","", "nhahang") or die ("Không thể kết nối đến dữ liệu");
        mysqli_select_db($connection, "nhahang");
        $sql = "select * from menu where value = '1'";
        $result = mysqli_query($connection, $sql);
        ?>
        <style>
			.edit{
				color: black;
				text-align: center;
			}
        </style>

        <div class = "container">
			<div class = "text1"> <b> THỰC ĐƠN </b> <a class="text1" href="Add.php">(+)</a> </div>
			<br><br>
			<div class = "row">
				<table class="table table-hover table-striped" style = "margin-left: 22%;">
					<thead>	
						<tr align="center" valign="middle">
							<th> <div align = "center">Tên món</div></th>
							<th><div align = "right">Mô tả</div></th>
							<th></th>
							<th colspan = "2"> <div align = "center">Thao tác </div></th>
						</tr>
					</thead>
					<tbody>
            <tr>
            	<td><div class = "menu1"><b>Thực đơn</b></div><td>
				<td colspan = "3"></td>
            </tr>

        <?php
        while($data=mysqli_fetch_assoc($result)){
        ?>
        <tr>
    	  
    	   <td width="211"><div align="center"><?php echo $data["Name"]; ?></div></td>
    	   <td width="165"><div align="right"><?php echo $data["Description"]; ?></div></td>
		   <td></td>
		   <td><?php echo "<a class = 'btn' href='edit.php?uSTT=$data[STT]'>Sửa</a>" ;?></td>
		   <td><?php echo "<a class = 'btn' href='delete.php?uSTT=$data[STT]'>Xóa</a>" ;?></td>
        </tr>
	   <?php
	   }
	   ?>

       </tbody>
       
        </table>
		</div>
		</div>
        
        <?php
			mysqli_close($connection);

	?>
	</body>
</html>
