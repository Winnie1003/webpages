<!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>Winnie's blog</title>
<link rel="stylesheet" href="register.css" />
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
</head>
<script language="javascript">
	function check(){
		var username=document.getElementById("username").value;
		var password=document.getElementById("password").value;
		var tconfirm=document.getElementById("confirm").value;
		
		if(username==""){
			alert("请输入用户名！");
			return false;	
		}
		if(password==""){
			alert("请输入密码！");
			return false;	
		}
		if(tconfirm==""){
			alert("请确认密码！");
			return false;	
		}
		if(tconfirm!=password){
			alert("请保持密码的一致性！");
			return false;	
		}
	}
</script>

</head>

<body>
    <div id="header">
        <!-- 没有找到合适的logo，暂用文字代替 -->
        <div id="logo">
            <h1><a href="index.php"><img src="../../wqy/web/images/winnie.jpg" height="85px" width="85px"></a></h1>
        </div>
    </div>
	<div id="wrapper">
    	<div id="login_wrapper">
            <form action="regcheck.php" name="form" method="post" onsubmit="return check();">
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
                            	style="width:320px; height:40px; background:#EBEBEB; border:0; border-radius:0; font-size:18px; margin-bottom:1px;"
                            />
                   		</td>
                  	</tr>
                    <tr>
                   		<td>
                    		<input type="password" name="confirm" id="confirm" placeholder="确认密码"
                            	style="width:320px; height:40px; background:#EBEBEB; border:0; border-radius:0 0 6px 6px; font-size:18px; border-radius:0 0 6px 6px;"
                            />
                   		</td>
                  	</tr>
                  	<tr>
                   		<td>
                    		<input type="submit" name="submit" value="立即注册"
                            	style="width:320px; height:40px; background:#B2B2B2; border:0; border-radius:6px; margin-top:20px; font-size:20px;"
                            />
                		</td>
                	</tr>
                    <tr>
                   		<td>
                    		<input type="button" name="register" value="返回登陆" onclick="javascript:location.href='login.php'"
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
</html>