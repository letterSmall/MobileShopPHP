<?php
    $db=@mysql_connect("127.0.0.1","root","");
    mysql_query("set names utf8");
    mysql_select_db("mobileshop");
    if($db==0){
        echo "<script>alert('连接失败');</script>";
    }
?>