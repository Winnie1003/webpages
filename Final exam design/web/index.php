<!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>Winnie's blog</title>
<link rel="stylesheet" href="../../wqy/web/index.css" />
<link rel="icon" href="../../wqy/web/images/favicon.ico" type="image/x-icon">
</head>

<body>
<div id="banner">
    <div id="header">
        <div id="headertxt">
        <!-- û���ҵ����ʵ�logo���������ִ��� -->
            <div id="logo">
                <h1><a href="#">����<a></h1>
            </div>
            <div id="nav">
                <ul>
                    <li id="index"><a href="../../wqy/web/index.php">��ҳ</a></li>
                    <li id="mind"><a href="../../wqy/web/mind.php">������</a></li>
                    <li id="emotion"><a href="../../wqy/web/emotion.php">ѧ��ֹ��</a></li>
                    <li id="essay"><a href="../../wqy/web/essay.php">����</a></li>
                    <li id="gnosis"><a href="../../wqy/web/gnosis.php">ʱ����</a></li>
                </ul>
            </div>
            <div id="login">
                <?php
					session_start();
					if(isset($_SESSION['isLogin'])){
						echo '<a href="#">';
						echo $_SESSION['username'];		// ��ʾ�û���
						echo '</a><em class="sprit"> / </em><a href="out.php">�˳�</a>';
					}
					else{
                    	echo '<a href="login.php">��½</a><em class="sprit"> / </em><a href="register.php">ע��</a>';
					}
                    echo "\n";
                ?>
            </div>
        </div>
    </div>
    <div id="introduce">
        <div id="poster">
            <p>Wherever you are,be there<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;����<span>My Wish</span></p>
        </div>
        <div id="posterPhoto">
            <a href="#"><img src="../../wqy/web/images/posterPhoto.jpg" width="600px" height="299px"></a>
        </div>
    </div>
</div>
<div id="wrapper">
	<div id="l_wrapper">
        <div class="img">
        	<figure>
            	<a href="#"><img src="../../wqy/web/images/1_img_bg.jpg" height="300px" width="280px"></a>
                <figcaption>����һ��˵����Ļ���</figcaption>
            </figure>
        </div>
        <div class="img">
        	<figure>
            	<a href="#"><img src="../../wqy/web/images/2_img_bg.jpg" height="300px" width="280px"></a>
                <figcaption>������裬�����޺�</figcaption>
            </figure>
        </div>
        <div class="img">
        	<figure>
            	<a href="#"><img src="../../wqy/web/images/3_img_bg.jpg" height="300px" width="280px"></a>
                <figcaption>��������һ������</figcaption>
            </figure>
        </div>
    </div>
</div>

<div id="footer">
</div>
</body>	
</html>		