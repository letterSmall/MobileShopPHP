<?php

// $con=mysql_connect('127.0.0.1','root','');
// if(!$con) {
// 	die('数据库连接失败：'.mysql_error());
// }
// mysql_select_db('mobileshop',$con);

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
?>