
<?php
	require_once './control/sql.php';
	$id = $_GET['wzid'];
	require_once './control/tz.php';
?>

<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="">
    <meta name="author" content="">
	<style>
		.over{border: 1px solid red;}
		.down{border:1px solid red;}
	</style>
    <title>手机详情</title>
	
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
    
    <script src="js/photo-gallery.js"></script>
	
</head>
<body>
	<!--Top-->
	<nav id="top">
		<div class="container">
			<div class="row">
				<div class="col-xs-6">
				</div>
				<div class="col-xs-6">
					<ul class="top-link">
						<li><a href="login.php"><span class="glyphicon glyphicon-user"></span> 用户登录</a></li>
						<li><a href="login.php"><span class="glyphicon glyphicon-envelope"></span> 邮箱注册</a></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
	<!--搜索框-->
	<header class="container">
		<div class="row">
			<div class="col-md-6">
				<div id="logo"><img src="images/logo.png" /></div>
			</div>
			<div class="col-md-6"> 
					<input type="text" class="input-medium search-query" placeholder="搜索">  
					<button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
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
<!--					
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">手机配件</a>
						<div class="dropdown-menu">
							<div class="dropdown-inner">
								<ul class="list-unstyled">
									<li><a href="Headset_acces.php">耳机</a></li>
									<li><a href="USB_acces.php">USB线</a></li>
								</ul>
							</div> 
						</div>
					</li>
-->
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
									><li><a href="xinpin.php">华为</a></li>
								</ul>
							</div>
						</div>
					</li>
<!--
					<li><a href="collection.php">个人中心</a></li>
-->
				</ul>
			</div>
		</div>
	</nav>
	<!--//////////////////////////////////////////////////-->
	<!--///////////////////Product Page///////////////////-->
	<!--//////////////////////////////////////////////////-->
	<div id="page-content" class="single-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<ul class="breadcrumb">
						<li><a href="index.php">首页</a></li>
						<li><a href="#"><?php echo $row['phonename'] ?></a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div id="main-content" class="col-md-8">
					<div class="product">
						<div class="col-md-6">
							<div class="image">
								<img id="tu" src="<?php echo $row['tupian'] ?>" />
							</div>
						</div>
						<div class="col-md-6">
							<div class="caption">
								<div class="name"><h3>手机型号：<?php echo $row['phonename'] ?>"</h3></div>
								<div class="info">
									<ul>
										<li><?php echo $row['changp'] ?> &nbsp;<?php echo $row['color'] ?> &nbsp;<?php echo $row['kucun'] ?> &nbsp;<?php echo $row['shuliang'] ?> </li>
										<li>重量：<?php echo $row['weight'] ?>kg</li>
									</ul>
								</div>
								<div class="price">价格:<b style="color: red;">&nbsp;￥<?php echo $row['jiage'] ?></b></div><hr />
								<div class="well"><label>数量: </label> <input class="form-inline quantity" type="text" value="1"><a href="../write_info.php?name=<?php echo $row['phonename'] ?>&&color=<?php echo $row['color'] ?>&&jiage=<?php echo $row['jiage'] ?>" class="btn btn-2 ">购买</a></div>
								<div class="well">
									
									 <a href="#" class="share-btn" target="_blank">分享：
										<i class="fa fa-twitter"></i>
									 </a>
									
										<a class="share-btn" href="#" style="padding-left: 5vw;">收藏：<i class="glyphicon glyphicon-heart"></i></a>	
										</a>
									
								</div>
							</div>
						</div>
						<div class="clear"></div>
					</div>	
					<div class="product-desc">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#description">商品介绍</a></li>
							<li><a href="#review">商品评论</a></li>
						</ul>
						<div class="tab-content">
							<div id="description" class="tab-pane fade in active">
							<!--
                            <img src="images/huawei_XQ.jpg"/>
                            -->
                            
                            <P>商品详细介绍请参照右侧详细说明。<br>
								—————————————————
                                <br>
								为推动社会信用体系建设，营造统一开放、公平竞争、规范有序的市场环境，树立企业诚信经营的良好形象，本企业作出以下诚信承诺：<br>
								一、严格依照国家有关法律、法规合法经营，依法照章纳税，遵守财务制度和税务制度。<br>
                                二、依法开展生产经营活动，不生产、销售假冒伪劣商品和"三无"产品，维护消费者合法权益。<br>
                                三、做好企业各项安全生产工作。<br>
                                四、积极参与本行业的企业信用体系建设，自觉遵守企业信用管理规章制度，共同树立信用自律的道德观念和行业风尚。<br>
                                五、自觉接受社会、群众和新闻舆论的监督。
                                <br>
								服务热线：020-8888666。
                            </P>
                            
							</div>
							<!--商品评论-->
							<div id="review" class="tab-pane fade">
							 
							  <div>
							  	<span style="color: orangered;"> 兴***络 </span>:第一次买小米的手机 一直纠结买米6还是note3 习惯了5.5的屏幕就买了note3了用了一段时间才来评价 真心不错 反应流畅 不卡顿 就是京东物流送错地方了总体评价啊很好很满意
							  </div><br />
							  <div>
							  	<span style="color: orangered;">o***皮 </span>:手感很好。。反应好快。从6p过来的。这几年一直都是苹果。朋友用的这note3试了下感觉和苹果差不多。速度就下单了。以后就用小米了。。优点照相很棒前后摄像头都很好自带美颜很棒。系统用着很流畅不比苹果差。外形玻璃后盖手感很好。自带的软壳很柔软很舒服和机子很合适。缺点64G的闪存收到手机后发现看下怎么只有54G少了10G。难道是小米的系统占用了。6G内存用后发现只能运行3G左右。游戏还没试别的等用用再来补评。
							  </div><br />
							  <div>
							  	<span style="color: orangered;"> l***9 </span>:手机不错，小米真是性价比之王啊！手机充满电，可以玩，一天半左右。6gb的运行内存。 x20*和OPPOR9。那些都那些都是4gb。后置摄像头。呵呵，×20，和OPPO r9。一样高清吗？价格却比其他几个便宜。外观大气。手感不错。就是物流不怎么样？慢了一天
							  </div><br />
							  <div>
							  	<span style="color: orangered;">青***z</span>:第一次使用小米手机，外观设计美感十足，手感舒适，重量适中，可以直接更新MIUI9.1稳定版,6G运存使用流畅不卡，游戏的话，只玩消消乐，应该没啥难度，MIUI9功能各种贴心，永远相信美好的事情即将发生！用几天再做后续评测。o(￣ε￣*)
							  </div><br />
							  <div>
							  	<span style="color: orangered;">s***2 </span>:哈哈，终于到手了，迫不及待的打开，高端大气上档次，之前还很犹豫买呢，到手了绝不后悔，喜欢的朋友不要。在犹豫 了，越是犹豫就越是落后别人一节了
							  </div>
							
							</div>
							<!--/商品评论-->
						</div>
					</div>
					<!--产品推荐-->
					<div class="product-related">
						<div class="heading"><h2>产品推荐</h2></div>
						<div class="products">
							<div class="col-lg-4 col-md-4 col-xs-12">
								<div class="product">
									<div class="image"><a href="product.php?wzid=25"><img src="images/iphonex.jpg" /></a></div>
									<div class="caption">
										<div class="name"><h3><a href="product.php?wzid=25">iphonex</a></h3></div>
										<div class="price" style="color: red;">￥5999</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-xs-12">
								<div class="product">
									<div class="image"><a href="product.php?wzid=22"><img src="images/mixian_3.jpe" /></a></div>
									<div class="caption">
										<div class="name"><h3><a href="product.php?wzid=22">小米3s</a></h3></div>
										<div class="price" style="color: red;">￥1666</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-xs-12">
								<div class="product">
									<div class="image"><a href="product.php?wzid=14"><img src="images/huawei_blue.jpe" /></a></div>
									<div class="caption">
										<div class="name"><h3><a href="product.php?wzid=14">华为p10</a></h3></div>
										<div class="price" style="color: red;">￥3888</div>
									</div>
								</div>
							</div>
						</div>
						<div class="clear"></div>
					</div>
					<!--/产品推荐-->
				</div>
				<div id="sidebar" class="col-md-4">
					<div class="widget wid-categories">
						<div class="heading"><h4>基本信息</h4></div>
						<div class="content">
							<ul>
								<li>机身颜色： <?php echo $row['color'] ?></li>
								<li>机身长度（mm）：<?php echo $row['length'] ?></li>
								<li>机身宽度（mm）：<?php echo $row['width'] ?></li>
								<li>机身厚度（mm）：<?php echo $row['weight'] ?></li>
								<li>机身重量（g）：约<?php echo $row['weight'] ?></li>
							</ul>
						</div>
					</div>
					<div class="widget wid-type">
						<div class="heading"><h4>操作系统</h4></div>
						<div class="content">
							<?php echo $row['xh'] ?>
						</div>
					</div>
					<div class="widget wid-discouts">
						<div class="heading"><h4>主芯片</h4></div>
						<div class="content">
							<ul>
								<li>CPU型号： <?php echo $row['xh'] ?></li>
								<li>CPU核数：<?php echo $row['hs'] ?></li>
							</ul>
						</div>
					</div>
					<div class="widget wid-brand">
						<div class="heading"><h4>后置摄像头</h4></div>
						<div class="content">
							摄像头数量：<?php echo $row['sxtsk'] ?>个<br />	后置摄像头：<?php echo $row['xs'] ?>万像素
						</div>
					</div>
					<!-- <div class="widget wid-brand">
						<div class="heading"><h4>前置摄像头</h4></div>
						<div class="content">
							前置摄像头：2000万像素<br />	前摄光圈大小：f/2.0
						</div>
					</div> -->
					<div class="widget wid-product">
						<div class="heading"><h4>网络支持</h4></div>
						<div class="content">
							双卡机类型：<?php echo $row['wlzc'] ?><br />
							SIM卡类型:<?php echo $row['sim'] ?><br />
						</div>
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
	
	
	
	<script>
	$(document).ready(function(){
		$(".nav-tabs a").click(function(){
			$(this).tab('show');
		});
		$('.nav-tabs a').on('shown.bs.tab', function(event){
			var x = $(event.target).text();         // active tab
			var y = $(event.relatedTarget).text();  // previous tab
			$(".act span").text(x);
			$(".prev span").text(y);
		});
	});
	</script>
	<script type="text/javascript">
		function changeTu(y,i){
			y.style.border="2px solid red";
			document.getElementById("tu").src = i;
		}
		function out(y){
			y.style.border="0";
		}
	</script>
</body>
</php>
