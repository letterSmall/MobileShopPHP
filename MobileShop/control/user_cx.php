<?php
 require_once './sqltry.php';

 $username=$_POST['username'];
 $pwd=$_POST['p'];
 $sql="select * from user where name='$username' and pwd='$pwd'";
 $res=mysql_query($sql);
 $num=mysql_num_rows($res);
 if($num>0){
    session_start();
    //注册session变量，赋值为一个用户的名称
    $_SESSION["username"]=$username;
     echo "<script>location.href='../jingtaiyemian/index.php';</script>";
 }else{
     echo "<script>alert('你输入有误！');location.href='../login.php';</script>";
 }
?>