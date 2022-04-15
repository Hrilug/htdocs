<?php
	header("content-type:text/html;charset=utf-8");
	//连接数据库
	$link = mysqli_connect("localhost","root","1234","test");
	if (!$link) {
		die("连接失败: " . mysqli_connect_error());
	}
	//接收$_POST用户名和密码
	$username=$_POST['username'];
	$password=$_POST['password'];

	$sql="insert into users(username,password) values('$username','$password')";
	$result=mysqli_query($link,$sql);

	if(!$result)
	{
		echo "登录不成功！"."<br>";//输出错误
		echo "<a href='index.html'>返回</a>";//超链接到首页
	}
	else
	{
	    echo "<body id='pic'><img src='h.png'style='background-repeat:repeat-x ;width: 100% ;height: auto; overflow-y:auto'></body>";
    }
	
?>
