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
			alert("�������û�����");
			return false;	
		}
		if(password==""){
			alert("���������룡");
			return false;	
		}
		if(tconfirm==""){
			alert("��ȷ�����룡");
			return false;	
		}
		if(tconfirm!=password){
			alert("�뱣�������һ���ԣ�");
			return false;	
		}
	}
</script>

</head>

<body>
    <div id="header">
        <!-- û���ҵ����ʵ�logo���������ִ��� -->
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
                    		<input type="text" name="username" id="username" placeholder="�û���" 
                            	style="width:320px; height:40px; background:#EBEBEB; border:0; margin-bottom:1px; border-radius:6px 6px 0 0; font-size:18px;"
                            />
                   		</td>
                  	</tr>
                  	<tr>
                   		<td>
                    		<input type="password" name="password" id="password" placeholder="����"
                            	style="width:320px; height:40px; background:#EBEBEB; border:0; border-radius:0; font-size:18px; margin-bottom:1px;"
                            />
                   		</td>
                  	</tr>
                    <tr>
                   		<td>
                    		<input type="password" name="confirm" id="confirm" placeholder="ȷ������"
                            	style="width:320px; height:40px; background:#EBEBEB; border:0; border-radius:0 0 6px 6px; font-size:18px; border-radius:0 0 6px 6px;"
                            />
                   		</td>
                  	</tr>
                  	<tr>
                   		<td>
                    		<input type="submit" name="submit" value="����ע��"
                            	style="width:320px; height:40px; background:#B2B2B2; border:0; border-radius:6px; margin-top:20px; font-size:20px;"
                            />
                		</td>
                	</tr>
                    <tr>
                   		<td>
                    		<input type="button" name="register" value="���ص�½" onclick="javascript:location.href='login.php'"
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