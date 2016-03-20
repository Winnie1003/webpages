<!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>check</title>
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
</head>

<body>
<?php
	session_start();
	if(isset($_POST["submit"]) && $_POST["submit"] == "立即登陆")
	{
		$user = $_POST["username"];  
        $psw = $_POST["password"];
		$_SESSION['username'] = $user;
		
		mysql_connect("localhost","root","");
		mysql_select_db("vt");
		mysql_query("set names 'gbk'");
		$sql = "select username,password from user where username = '$_POST[username]' and password = '$_POST[password]'";
		$result = mysql_query($sql);
		$num = mysql_num_rows($result);
		if($num)
		{
			
			$_SESSION['isLogin']=1;				// 登录成功标志
			$row = mysql_fetch_array($result);	// 将数据以索引方式储存在数组中
			//echo $row[0];
			echo "<script>location.href='index.php'</script>;";
		}
		else
		{
			unset($_SESSION['username']);		// 注销session变量，说明没有登陆成功
			echo "<script>alert('用户名或密码不正确！');history.go(-1);</script>";
		}
	}
	else
	{
		echo "<script>alert('提交未成功！'); history.go(-1);</script>";
	}

?>
</body>
</html>