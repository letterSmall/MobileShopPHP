<?php
require("../control/session.php");
if(isset($_POST['button'])){ //点击提交按钮后才执行   
	unset($_SESSION['admin']);
	echo "<script>location.href='../jingtaiyemian/guanliyuanLogin.php';</script>";
}
// 显示所有的错误
error_reporting(E_ALL & ~E_NOTICE  );
// 连接mysql数据库
$link = mysqli_connect('localhost','root', '');
if (!$link) {
    echo "connect mysql error!";
    exit();
}
// 选中数据库 news为数据库的名字
$db_selected = mysqli_select_db($link, 'mobileshop');
if (!$db_selected) {
    echo "<br>selected db error!";
    exit();
}
// 设置mysql字符集 为 utf8
$link->query("set names utf8");

$sql = "select * from sellout"; // 查询语句
$result = mysqli_query($link,$sql);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<link rel="stylesheet" href="css/loginTest.css">
<head>
<style type="text/css">
table {
	border: 2px #CCCCCC solid;
	width: 800px;
	margin-left: 250px;
}

table td, th {
	text-align: center;
	height: 30px;
	border: #CCCCCC 1px solid;
}
</style>
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
			<a href="jygl.jsp" style="text-decoration: none;">交易管理<a>>已卖出的商品
		</p>
	</div>



	<br />
	<br />

	<!-- <div id="lie2">
		<p>&nbsp;商品号码  &nbsp; &nbsp;&nbsp;
		           商品单价 &nbsp; &nbsp;&nbsp;
		           成交时间&nbsp; &nbsp;&nbsp; 
			买家昵称&nbsp; &nbsp;&nbsp; 
			商品名称&nbsp; &nbsp;&nbsp; 
			订单编号&nbsp; &nbsp;&nbsp; 
			物流状态&nbsp; &nbsp;&nbsp;  
			商品评价</p>
			 -->

	<table>
		<tr>
			<th>商品号码</th>
			<th>收件人</th>
			<th>地址</th>
			<th>电话号码</th>

			<th>购买数量</th>
			<th>手机名称</th>
			<th>手机颜色</th>
			<th>手机价格</th>

		</tr>
		
		<?php
			
			// if($row=mysql_fetch_array($result)==false){
			// 	echo "<h1>空</h1>";
			// }else{
			// 	echo "<h1>有</h1>";
			// }检测出没有数据
			while($row=mysqli_fetch_array($result)){
		?>
			<tr>
				<th><?php echo $row['id'];?></th>
				<th><?php echo $row['name'];?></th>
				<th><?php echo $row['site'];?></th>
				<th><?php echo $row['phonenumber'];?></th>
				<th><?php echo $row['number'];?></th>
				<th><?php echo $row['phonename'];?></th>
				<th><?php echo $row['color'];?></th>
				<th><?php echo $row['price'];?></th>

			</tr>
			<?php } ?>
	</table>
	</div>
	
</body>
</html>