 <?php
 require("../control/session.php");
// $link = mysqli_connect("127.0.0.1","root","","mobileshop");
// mysqli_set_charset($link, "utf8");
// if (!$link) {
// die("连接失败:".mysqli_connect_error());
// }
include "../control/sql.php";
$id =$_GET['id'];
$sql="select * from goods where id = '$id'";
$result = mysqli_query($link,$sql);
$row=mysqli_fetch_array($result)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="">
    <meta name="author" content="">

<html>
<link rel="stylesheet" href="css/loginTest.css">
<head>
<meta charset="utf-8" />
<title>卖家管理中心</title>
</head>

<body>
	<div>
		<div id="tu">
			<img src="logo.png" />
		</div>
		<div id="tou">
			<p>
	            <form method="post" style="position:relative;left:830px; top:20px;">
	                <input type="submit" name="button" value="退出" />
	            </form>
            </p >
		</div>

	</div>
	<div id="quanju">
		<nav>
		<div id="daohang">
			<h2 id="tupian">
				<p>后台管理</p>
			</h2>
			<li><a href="maichu.php">已卖出的商品</a></li>
			<li><a href="chushou.php">出售中的商品</a></li>
            <li><a href="fabushangping.php">发布商品</a></li>
			</h2>
		</nav>
	</div>
	<div id="lie">
		<p>
			<a href="" style="text-decoration: none;">商品管理<a>>修改商品 
		</p>
	</div>


	<form action="../control/product_modify.php" id="form1" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $row['id']?>"/>
		手机名称：&nbsp <input type="text" style="height: 20px;" name="phonename" value="<?php echo $row['phonename'];?>">
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
        手机内存：&nbsp <input type="text" style="height: 20px;" name="changp" value="<?php echo $row['changp'];?>">
        <br>

		<br> 
        手机颜色：&nbsp <input type="text" style="height: 20px;" name="color" value="<?php echo $row['color'];?>">
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
        手机通信：&nbsp <input type="text" style="height: 20px;" name="kucun" value="<?php echo $row['kucun'];?>">
		<br>

        <br> 
        手机卡量：&nbsp <input type="text" style="height: 20px;" name="shuliang" value="<?php echo $row['shuliang'];?>">
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
        手机价格：&nbsp <input type="text" style="height: 20px;" name="jiage" value="<?php echo $row['jiage'];?>">
		<br>

		<br>
		手机重量：&nbsp <input type="text" style="height: 20px;" name="weight" value="<?php echo $row['weight'];?>">
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
        手机长度：&nbsp <input type="text" style="height: 20px;" name="length" value="<?php echo $row['length'];?>">
        <br>

		<br> 
		手机宽度：&nbsp <input type="text" style="height: 20px;" name="width" value="<?php echo $row['width'];?>">
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
        手机高度：&nbsp <input type="text" style="height: 20px;" name="height" value="<?php echo $row['height'];?>">
        <br>

		<br> 
		CPU型号：&nbsp <input type="text" style="height: 20px;" name="xh" value="<?php echo $row['xh'];?>">
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
        CPU核数：&nbsp <input type="text" style="height: 20px;" name="hs" value="<?php echo $row['hs'];?>">
        <br>

		<br> 
		摄像头像素：&nbsp <input type="text" style="height: 20px;" name="xs" value="<?php echo $row['xs'];?>">
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
        摄像头数量：&nbsp <input type="text" style="height: 20px;" name="sxtsk" value="<?php echo $row['sxtsk'];?>">
        <br>

		<br> 
		网络支持：&nbsp <input type="text" style="height: 20px;" name="wlzc" value="<?php echo $row['wlzc'];?>"> 
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
        SIM卡类型：&nbsp <input type="text" style="height: 20px;" name="sim" value="<?php echo $row['sim'];?>">
		<br>

		<br>
		手机图片：&nbsp <input type="file" style="height: 27px;" name="tupian" value="<?php echo $row['tupian'];?>">
		
		<br>
    
        
        <p id="tupian5">
		<input type="submit" name="dosubmit" id="tan" style="width: 90px; height: 30px;" value="修改">
		<input type="submit" name="sb" id="tan" style="width: 90px; height: 30px;" value="返回" onclick="history.go(-1)">
		</p>
        
	</form>


	</div>
	
</body>

</html>