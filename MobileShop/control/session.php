<?php
    $admin = false;
    //  启动会话，这步必不可少
    session_start();
    //  判断是否登陆
    if (isset($_SESSION["admin"]) && $_SESSION["admin"] === true) {
        
    } else {
        //  验证失败，将 $_SESSION["admin"] 置为 false
        $_SESSION["admin"] = false;
        die("<script>alert('请先登录');location.href='../jingtaiyemian/guanliyuanLogin.php';</script>");
    }
?>