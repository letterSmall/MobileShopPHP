<?php
    require("sql.php");//插入连接数据库的文件sql.php
    $phonename=$_POST['phonename'];
    $color=$_POST['color'];
    $jiage=$_POST['jiage'];
    $number=$_POST['number'];
    $sjr=$_POST['sjr'];
    $sjdz=$_POST['sjdz'];
    $lxdh=$_POST['lxdh'];
    $message=$_POST['message'];
    if($phonename==false&&$color==false&&$jiage==false&&$number==false&&$sjr==false&&$sjdz==false&&$lxdh==false&&$message==false){
        echo "<script>alert('您有数据没填！');location.href='../write_info';</script>";
        die;
    }
    // $sql ="insert into `goods`(`phonename`,`changp`,`color`,`kucun`,`shuliang`,`jiage`,`tupian`,`weight`,`length`,`width`,`height`,`xh`,`hs`,
    // `xs`,`sxtsk`,`wlzc`,`sim`) values('$phonename','$changp','$color','$kucun','$shuliang','$jiage','$tupian','$weight','$length','$width',
    // '$height','$xh','$hs','$xs','$sxtsk','$wlzc','$sim');";
    $sql="insert into sellout(name,site,phonenumber,number,phonename,color,price) values('$sjr','$sjdz','$lxdh','$number','$phonename','$color','$jiage')";
    $result = mysqli_query($link,$sql);
    if($result>0){
        echo "<script>alert('成功！');history.go(-2);</script>";
    }else{
        echo "<script>alert('你输入有误！');history.go(-1);</script>";
    }
    // $row=mysqli_fetch_array($result);
    // if($row==false){
    //     echo "<script>alert('你输入有误！');location.href='../write_info.php';</script>";
    // }
?>