<?php
    $con=mysql_connect('127.0.0.1','root','');
    if(!$con) {
        die('数据库连接失败：'.mysql_error());
    }
    mysql_select_db('mobileshop',$con);    
    $username=$_POST['username'];
    $pwd=$_POST['p'];
    $sql="select * from user where name='$username' and pwd='$pwd'";
    $res=mysql_query($sql);
    $num=mysql_num_rows($res);
    if($num>0){
        // $lifeTime = 1 * 3600;//设置session存在时间
        // session_set_cookie_params($lifeTime);
       session_start();
       //注册session变量，赋值为一个用户的名称
        //注册登陆成功的 admin 变量，并赋值 true
        $_SESSION["admin"] = true;
        echo "<script>location.href='../jingtaiyemian/fabushangping.php';</script>";
    }else{
        echo "<script>alert('你输入有误！');location.href='../jingtaiyemian/guanliyuanLogin.php';</script>";
    }

?>