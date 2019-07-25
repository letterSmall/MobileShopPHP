<?php
include_once "../control/fenye.php";
include "../control/sql.php";
require("../control/session.php");
if(isset($_POST['button'])){ //点击提交按钮后才执行   
	unset($_SESSION['admin']);
	echo "<script>location.href='../jingtaiyemian/guanliyuanLogin.php';</script>";
}
$result = mysqli_query($link,$sql); 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<link rel="stylesheet" href="css/loginTest.css">
<head>
<style type="text/css">
table {
	border: 2px #CCCCCC solid;
	width: 1000px;
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
			<a href="chushou.php" style="text-decoration: none;">商品管理</a>>出售中的商品
		</p>
	</div>
	
	<br>
	<form  method="post">

		<table>
			<tr>
				<th>请选择</th>
				<th>手机名称</th>
				<th>手机内存</th>
				<th>手机颜色</th>
				<th>手机通信</th>
				<th>手机卡</th>
				<th>手机价格</th>
				<th>手机图片</th>
				<th>操作</th>
			</tr>
			<?php
			while($row=mysqli_fetch_array($result)){
		?>
				<tr>
				
					<th><input type="checkbox" name="xuanze">
					</th>
				<th><?php echo $row['phonename'];?></th>
				<th><?php echo $row['changp'];?></th>
				<th><?php echo $row['color'];?></th>
				<th><?php echo $row['kucun'];?></th>
				<th><?php echo $row['shuliang'];?></th>
				<th><?php echo $row['jiage'];?></th>
				<th><img src="<?php echo $row['tupian'];?>" width="100px" height="140px"></th>
				<th>
				<a href="../jingtaiyemian/modityproduct.php?id=<?php echo $row['id']?>"><font color="blue">修改</font></a>
 				<a href="../control/delete.php?id=<?php echo $row['id']?>"><font color="blue">删除</font></a>
				</th>
				</tr>
				
				<?php }?>
		</table>
<br>
		<div align='center'>
     【<a href="?pageno=1">首页</a>】
      【<a href="?pageno=<?php echo $pageno-1?>">上一页</a>】
	  <?php 
        for($i=1;$i<=$pagecount;$i++){
            echo '<a href="?pageno='.$i.'">'.$i.'</a> ';
        }
      ?>
       【<a href="?pageno=<?php echo $pageno+1?>">下一页</a>】
        【<a href="?pageno=<?php echo $pagecount?>">末页</a>】   
</div>

<br>
	</form>
	</div>

</body>

</html>