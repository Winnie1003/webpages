<!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>out</title>
</head>

<body>
<?php
	session_start();
	unset($_SESSION['isLogin']);
	echo "<script>history.go(-1);</script>;";
?>
</body>
</html>