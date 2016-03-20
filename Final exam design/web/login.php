<!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>Winnie's blog</title>
<link rel="stylesheet" href="login.css" />
<link rel="icon" href="images/favicon.ico" type="image/x-icon">

<script language="javascript">
	function check(){
		var username=document.getElementById("username").value;
		var password=document.getElementById("password").value;
		
		if(username==""){
			alert("用户名不能为空！");
			return false;	
		}
		if(password==""){
			alert("密码不能为空！");
			return false;	
		}
	}
</script>

</head>

<body>
    <div id="header">
            <h1><a href="index.php"><img src="../../wqy/web/images/winnie.jpg" height="85px" width="85px"></a></h1>
    </div>
	<div id="wrapper">
    	<div id="login_wrapper">
            <form name="frm" action="check.php" method="post" onsubmit="return check();">
                <table cellpadding="0" cellspacing="0" border="0">
                    <tr>
                   		<td>
                    		<input type="text" name="username" id="username" placeholder="用户名" 
                            	style="width:320px; height:40px; background:#EBEBEB; border:0; margin-bottom:1px; border-radius:6px 6px 0 0; font-size:18px;"
                            />
                   		</td>
                  	</tr>
                  	<tr>
                   		<td>
                    		<input type="password" name="password" id="password" placeholder="密码"
                            	style="width:320px; height:40px; background:#EBEBEB; border:0; border-radius:0 0 6px 6px; font-size:18px;"
                            />
                   		</td>
                  	</tr>
                  	<tr>
                   		<td>
                    		<input type="submit" name="submit" value="立即登陆"
                            	style="width:320px; height:40px; background:#B2B2B2; border:0; border-radius:6px; margin-top:20px; font-size:20px;"
                            />
                		</td>
                	</tr>
                    <tr>
                   		<td>
                    		<input type="button" name="register" value="注册账号" onclick="javascript:location.href='register.php'"
                            	style="width:320px; height:40px; background:#E9E9E9; border:0; border-radius:6px; margin-top:35px; font-size:20px;"
                            />
                		</td>
                	</tr>
            	</table>
            </form>
        </div>
    </div>
<div id="footer">
	<p>&copy;jxnu-Winnie</p>
</div>
</body>
</html>