<?php
 header("content-type:text/html;charset=utf8");
 $link = mysqli_connect("127.0.0.1","root","","mobileshop");
 mysqli_set_charset($link, "utf8");
 
 if (!$link) {
 die("连接失败:".mysqli_connect_error());
 }
 $id = $_GET['id'];
 $sql = "delete from goods where id = '$id'";
 //echo $sql;
 $rel = mysqli_query($link,$sql);
 if($rel){
 echo "<script>alert('删除成功');window.location.href='../jingtaiyemian/chushou.php'</script>";
 }else{
 echo "<script>alert('删除失败');window.location.href='../jingtaiyemian/chushou.php'</script>";
 }
?>