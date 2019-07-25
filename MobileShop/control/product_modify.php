<?php
require("sql.php");
 if (!$link)
{
 die("连接失败:".mysqli_connect_error());
 }
	 $id=$_POST['id'];
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
	 $sxtsk=$_POST['sxtsk'];
	 $wlzc=$_POST['wlzc'];
	 $sim=$_POST['sim'];
	 $sql="update goods set phonename = '$phonename',changp = '$changp',color = '$color',kucun='$kucun',shuliang='$shuliang',jiage='$jiage',weight='$weight',length='$length',width='$width',height='$height',xh='$xh',hs='$hs',xs='$xs',sxtsk='$sxtsk',wlzc='$wlzc',sim='$sim' where id ='$id'";
	 $row=$link->query($sql);
	 /* var_dump($row);die; */
	 if($row){
		 echo "<script>alert('修改成功！');window.location.href='../jingtaiyemian/chushou.php'</script>";
	 }else{
		 echo "<script>alert('修改失败！');</script>";
	 }
 ?>