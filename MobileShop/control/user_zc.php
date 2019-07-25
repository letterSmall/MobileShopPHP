<?php 
//注册处理界面
require_once 'sqltry.php';
$name=trim($_POST['user']);
	//trim函数，过滤空格，如果不加，我们在用户名后面添加很多空格，提交表单，打开firebug
	//调试工具，我们可以到输入的用户名后面会有很多空格，使用trim函数，我们可以把表单中空格给过滤掉
	$password=$_POST['passwd'];

	 $sql = "select * from user where name='$name'";
		$info = mysql_query($sql);
		$res = mysql_num_rows($info);

	if(empty($name)){
		echo "<script>alert('用户名不能为空');location.href='../login.php';</script>";
	}else if(empty($password)){
		echo "<script>alert('密码不能为空');location.href='../login.php';</script>";
	}else{	
		if($res){
			echo "<script>alert('用户名已存在');location.href='../login.php';</script>";
		}else{
			$sql1 ="insert into user(name,pwd) values('".$name."','".$password."')";
			$result = mysql_query($sql1);
			if($result){
		 			echo "<script>alert('注册成功');location.href='../jingtaiyemian/index.php';</script>";
			}else{
		 			echo "<script>alert('注册失败')</script>";
			}
		}
}	
?>