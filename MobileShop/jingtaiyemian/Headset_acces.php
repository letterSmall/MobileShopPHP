<?php
include_once "../control/fenye.php";
include "../control/sql.php";
$result = mysqli_query($link,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="">
    <meta name="author" content="">
	
    <title>新品上市</title>
	
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css"  type="text/css">
	
	<!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
	
	
	<!-- Custom Fonts -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"  type="text/css">
    <link rel="stylesheet" href="fonts/font-slider.css" type="text/css">
	
	<!-- jQuery and Modernizr-->
	<script src="js/jquery-2.1.1.js"></script>
	
	<!-- Core JavaScript Files -->  	 
    <script src="js/bootstrap.min.js"></script>
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<!--顶部栏-->
	<!--Header-->
	<header class="container">
		<div class="row">
			<div class="col-md-6">
				<div id="logo"><img src="images/logo.png" /></div>
			</div>
			
		</div>
	</header>
	<!--Navigation-->
    <nav id="menu" class="navbar">
		<div class="container">
			<div class="navbar-header"><span id="heading" class="visible-xs">导航栏</span>
			  <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>
			</div>
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li><a href="index.php">首页</a></li>
					<li class="dropdown"><a href="Headset_acces.php">新品上市</a></li>
					<li class="dropdown"><a href="xinpin.php" class="dropdown-toggle" data-toggle="dropdown">品牌</a>
						<div class="dropdown-menu" style="margin-left: -203.625px;">
							<div class="dropdown-inner">
								<ul class="list-unstyled">
									<li><a href="xinpin.php">小米</a></li>
									<li><a href="xinpin.php">oppo</a></li>
									<li><a href="xinpin.php">荣耀Honor</a></li>
									>
								</ul>
								<ul class="list-unstyled">
									<li><a href="xinpin.php">三星</a></li>
									<li><a href="xinpin.php">魅族</a></li
									<li><a href="xinpin.php">华为</a></li>
								</ul>
							</div>
						</div>
					</li>
					
				</ul>
			</div>
		</div>
	</nav>
	
	<!--//////////////////////////////////////////////////-->
	<!--///////////////////页面主内容//////////////////-->
	<!--//////////////////////////////////////////////////-->
	<div id="page-content" class="single-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<ul class="breadcrumb">
						<li><a href="index.php">首页</a></li>
						<li><a href="Headset_acces.php">手机</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="products">
						<?php
							while($row=mysqli_fetch_array($result)){
						?>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" >
							<div class="product" action="product.php" match="get" name="<?php echo $row['id'] ?>">
							<div class="image"><a href="product.php?wzid=<?php echo $row['id'] ?>"><img src="<?php echo $row['tupian'];?>" width="200px" height="250px" overflow="hiddle" /></a></div>
								<div class="caption">
									<div class="name"><h3><a href="product.php?wzid=<?php echo $row['id'] ?>"><?php echo $row['phonename'];?></a></h3></div>
									<div class="price" style="color: red;">$<?php echo $row['jiage'];?></div>
								</div>
							</div>
						</div>
						
						<?php } ?>
						
					</div>
					
						<div align='center'>
     						【<a href="?pageno=1">首页</a>】
      						【<a href="?pageno=<?php echo $pageno-1?>">上一页</a>】
	  						<?php 
								for($i=1;$i<=$pagecount;$i++)
								{
            					echo '<a href="?pageno='.$i.'">'.$i.'</a> ';
        						}
     						 ?>
       						【<a href="?pageno=<?php echo $pageno+1?>">下一页</a>】
        					【<a href="?pageno=<?php echo $pagecount?>">末页</a>】
    
						</div>
				</div>
			</div>
		</div>
	</div>												

	<footer>
		<div class="container">
			<div class="wrap-footer">
				<div class="row">
					<div class="col-md-3 col-footer footer-1">
						<img src="images/logofooter.png" /><br />
						<p style="color: white;">品类齐全&nbsp;&nbsp;轻松购物<br/>正品行货&nbsp;&nbsp;精致服务<br/>天天低价&nbsp;&nbsp;畅选无忧</p>
					</div>
					<div class="col-md-3 col-footer footer-2">
						<div class="heading"><h4>配送方式</h4></div>
						<ul style="color: white;">
							<li><a href="../footer_info.php" style="color: white;">上门自提</a></li>
							<li><a href="../footer_info.php" style="color: white;">211限时达</a></li>
							<li><a href="../footer_info.php" style="color: white;">配送收费标准</a></li>
							<li><a href="../footer_info.php" style="color: white;">海外配送</a></li>
						</ul>
					</div>
					<div class="col-md-3 col-footer footer-3" >
						<div class="heading"><h4>支付方式</h4></div>
						<ul style="color: white;">
							<li><a href="../footer_info.php" style="color: white;">货到付款</a></li>
							<li><a href="../footer_info.php" style="color: white;">在线付款</a></li>
							<li><a href="../footer_info.php" style="color: white;">分期付款</a></li>
							<li><a href="../footer_info.php" style="color: white;">邮政汇款</a></li>
							<li><a href="../footer_info.php" style="color: white;">公司转账</a></li>
						</ul>
					</div>
					<div class="col-md-3 col-footer footer-3">
						<div class="heading"><h4>售后服务</h4></div>
						<ul style="color: white;">
							<li><a href="../footer_info.php" style="color: white;">售后政策</a></li>
							<li><a href="../footer_info.php" style="color: white;">价格保护</a></li>
							<li><a href="../footer_info.php" style="color: white;">退款说明</a></li>
							<li><a href="../footer_info.php" style="color: white;">返修/退换货</a></li>
							<li><a href="../footer_info.php" style="color: white;">取消订单</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright">
			<div class="container">
				
				<div style="text-align: center;color: white;">MobileShop &copy; 2017.手机商城</div>	
				
			</div>
		</div>
	</footer>
</body>
</html>
