<?php

//1.连接数据库
$link=@mysql_connect('localhost','root','') or die('数据库连接失败');
mysql_select_db('mobileshop') or die('数据库选择失败');
//设置客户端编码
mysql_query('set names gbk');
//获取数据
$s=mysql_query('select count(*) from goods ');
$rows=mysql_fetch_row($s);//将资源匹配成索引数组
$recordcount=$rows[0];//总记录数
//定义页面大小
$pagesize=8;
//求总页数
$pagecount=ceil($recordcount/$pagesize);
//点击页码，获得当前页面
$pageno=isset($_GET['pageno'])?$_GET['pageno']:1;//get请求是否有值，有值就用自身
if($pageno<1){
    $pageno=1;
}
if($pageno>$pagecount){
    $pageno=$pagecount;
}
 
//获取当前页的起始位置
$startno=($pageno-1)*$pagesize;
//获取当前页的内容
$sql="select * from goods order by id desc limit $startno,$pagesize";
 
$rs=mysql_query($sql);
 
?>
