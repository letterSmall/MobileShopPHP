<?php
    $sql = "select * from goods where id='$id'"; // 查询语句
    $result = mysqli_query($link,$sql);
    $row=mysqli_fetch_array($result);
    // if($row==flse){
    //     echo 1;
    // }else{
    //     echo 2;
    // }判断是否有数据
?>