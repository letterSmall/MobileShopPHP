<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="">
    <meta name="author" content="">
	
    <title>填写订单内容</title>
	
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
	
</head>
	<body>
		<div style="margin: 2vw 0;">
			<img src="images/logo.png" class="center-block"/>
		</div>
		<div style="height: 0.3vw;background-color: black;"></div>
		<div class="container">
			<form action="control/goumai.php" method="post" class="well" style="margin: 3vw;">
			<?php
				$phonename=$_GET['name'];
				$color=$_GET['color'];
				$jiage=$_GET['jiage'];
			?>
				<input type="hidden" name="phonename" value="<?php echo $phonename ?>">
				<input type="hidden" name="color" value="<?php echo $color ?>">
				<input type="hidden" name="jiage" value="<?php echo $jiage ?>">
				<!-- <?php echo $phonename ?><?php echo $color ?><?php echo $jiage ?> -->
				<!-- <input type="hidden" name="id" value="<?php echo $row['id']?>"/> -->
				<div>* 购买数量 ：<input name="number" type="number"/></div><br />
				<div>*  收  件  人  ：<input name="sjr" type="text"/></div><br />
				<div>* 收件地址：<input name="sjdz" type="text"/></div><br />
				<div>* 联系电话：<input name="lxdh" type="text"/></div><br />
				<div>备注：<br/><textarea name="message" rows="10" cols="30" class="form-control"></textarea></div>
				<div style="text-align: center;margin-top: 2vw;">
					<input type="submit" name="dosubmit" id="tan" style="width: 90px; height: 30px;" value="支付提交">
					<!-- <a href="pending_shipment.html" class="btn btn-2 ">支付提交</a>-->
				</div>		
			</form>
		</div>
	</body>
</html>
