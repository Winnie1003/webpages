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
	if(isset($_POST["submit"]) && $_POST["submit"] == "������½")
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
			
			$_SESSION['isLogin']=1;				// ��¼�ɹ���־
			$row = mysql_fetch_array($result);	// ��������������ʽ������������
			//echo $row[0];
			echo "<script>location.href='index.php'</script>;";
		}
		else
		{
			unset($_SESSION['username']);		// ע��session������˵��û�е�½�ɹ�
			echo "<script>alert('�û��������벻��ȷ��');history.go(-1);</script>";
		}
	}
	else
	{
		echo "<script>alert('�ύδ�ɹ���'); history.go(-1);</script>";
	}

?>
</body>
</html>