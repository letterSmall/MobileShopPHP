<?php
require("sql.php");//插入连接数据库的文件sql.php
require("../control/session.php");
if(isset($_POST['button'])){ //点击提交按钮后才执行   
	unset($_SESSION['admin']);
	echo "<script>location.href='../jingtaiyemian/guanliyuanLogin.php';</script>";
}
if(isset($_POST['dosubmit'])){//判断提交按钮是否被点击
	//取文件信息
	$arr = $_FILES["tupian"];
	//var_dump($arr);
	//加限制条件
	//1.文件类型
	//2.文件大小
	//3.保存的文件名不重复
	if(($arr["type"]=="image/jpeg" || $arr["type"]=="image/png" ) && $arr["size"]<10241000 ){
	//临时文件的路径
	$arr["tmp_name"];
	//上传的文件存放的位置
	//避免文件重复: 
	//1.加时间戳.time()加用户名.$uid或者加.date('YmdHis')
	//2.类似网盘，使用文件夹来防止重复
	$filename = "./images/".date('YmdHis').$arr["name"];
	//保存之前判断该文件是否存在
	  if(file_exists($filename))
	  {
		echo "该文件已存在";
	  }else{
	  //中文名的文件出现问题，所以需要转换编码格式
	  $filename = iconv("UTF-8","gb2312",$filename);
	  //移动临时文件到上传的文件存放的位置（核心代码）
	  //括号里：1.临时文件的路径, 2.存放的路径
	  move_uploaded_file($arr["tmp_name"],$filename);
	  }
	}else{
	  echo "上传的文件大小或类型不符";
	}
	$phonename = $_POST['phonename'];
	$changp = $_POST['changp'];
	$color = $_POST['color'];
	$kucun = $_POST['kucun'];
	$shuliang = $_POST['shuliang'];
	$jiage = $_POST['jiage'];

	$weight=$_POST['weight'];
	$length=$_POST['length'];
	$width=$_POST['width'];
	$height=$_POST['height'];
	$xh=$_POST['xh'];
	$hs=$_POST['hs'];
	$xs=$_POST['xs'];
	$sxtsk=$_POST['sxtsl'];
	$wlzc=$_POST['wlzc'];
	$sim=$_POST['sim'];

	$tupian = $filename;
	 if($phonename==false&&$changp==false&&$color==false&&$kucun==false&&$shuliang==false&&$jiage==false&&$weight==false&&$length==false&&$width==false&&$height==false&&$xh==false&&$hs==false&&$xs==false&&$sxtsk==false&&$wlzc==false&&$sim==false){
	 	echo "<script>alert('请输入全部参数，不能为空');location.href='../jingtaiyemian/fabushangping.php';</script>";
		
	 }
	$sql ="insert into `goods`(`phonename`,`changp`,`color`,`kucun`,`shuliang`,`jiage`,`tupian`,`weight`,`length`,`width`,`height`,`xh`,`hs`,`xs`,`sxtsk`,`wlzc`,`sim`) values('$phonename','$changp','$color','$kucun','$shuliang','$jiage','$tupian','$weight','$length','$width','$height','$xh','$hs','$xs','$sxtsk','$wlzc','$sim');";
	$db -> query($sql);
	$row = $db -> affected_rows;
	/* var_dump($row);die; */
	if($row!=0){
		echo "<script>alert('添加成功！');</script>";
	}else{
		echo "<script>alert('添加失败！');</script>";
	}
	
}
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
			</p>
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
			<a href="" style="text-decoration: none;">商品管理<a>>发布商品 
		</p>
	</div>


	<form action="" id="form1" method="post" enctype="multipart/form-data">
		手机名称：&nbsp <input type="text" style="height: 20px;" name="phonename">
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
        手机内存：&nbsp <input type="text" style="height: 20px;" name="changp">
        <br>
		<br> 
        手机颜色：&nbsp <input type="text" style="height: 20px;" name="color">
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
        手机通信：&nbsp <input type="text" style="height: 20px;" name="kucun">
		<br>
        <br> 
        手机卡量：&nbsp <input type="text" style="height: 20px;" name="shuliang">
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
        手机价格：&nbsp <input type="text" style="height: 20px;" name="jiage">
		<br>
		<br>
        <!-- 增加 -->
		手机重量：&nbsp <input type="text" style="height: 20px;" name="weight">
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
        手机长度：&nbsp <input type="text" style="height: 20px;" name="length">
        <br>
		<br> 
		手机宽度：&nbsp <input type="text" style="height: 20px;" name="width">
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
        手机高度：&nbsp <input type="text" style="height: 20px;" name="height">
        <br>
		<br> 
		CPU型号：&nbsp <input type="text" style="height: 20px;" name="xh">
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
        CPU核数：&nbsp <input type="text" style="height: 20px;" name="hs">
        <br>
		<br> 
		摄像头像素：&nbsp <input type="text" style="height: 20px;" name="xs">
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
        摄像头数量：&nbsp <input type="text" style="height: 20px;" name="sxtsl">
        <br>
		<br> 
		网络支持：&nbsp <input type="text" style="height: 20px;" name="wlzc">
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
        SIM卡类型：&nbsp <input type="text" style="height: 20px;" name="sim">
		<br>
		<br>
		手机图片：&nbsp <input type="file" style="height: 27px;" name="tupian">
		
		
        <br>
		<br> 
        <p id="tupian5">
		<input type="submit" name="dosubmit" id="tan" style="width: 90px; height: 30px;" value="商品上架">
		</p>
        
	</form>


	</div>
	
</body>

</html>