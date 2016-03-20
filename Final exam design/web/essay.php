<!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>Winnie's blog</title>
<link rel="stylesheet" href="essay.css" />
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
</head>

<body>
    <div id="header">
        <div id="headertxt">
        <!-- û���ҵ����ʵ�logo���������ִ��� -->
            <div id="logo">
                <h1><a href="#">����<a></h1>
            </div>
            <div id="nav">
                <ul>
                    <li id="index"><a href="index.php">��ҳ</a></li>
                    <li id="mind"><a href="mind.php">������</a></li>
                    <li id="emotion"><a href="emotion.php">ѧ��ֹ��</a></li>
                    <li id="essay"><a href="essay.php">����</a></li>
                    <li id="gnosis"><a href="gnosis.php">ʱ����</a></li>
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
    <div id="wrapper">
    	<div id="l_wrapper">
        	<!--video begin-->
            <div id="video">
                <!--��Ƶ����ʼ-->
                <div class="Tv"></div>
                <!--��Ƶ�������-->
                
                <!--��Ļ����ʼ-->
                <div class="Bar"></div>
                <!--��Ļ�������-->
            </div>
            <!--video end-->
        
            <!--comment begin-->
            <div id="comment">
                <!--comment_con begin-->
                <div class="comment_con">
                    <!--input begin-->
                    <input type="text" class="txt" placeholder="���͵�Ļһ����ѧϰ"/>
                    <!--input end-->
                    
                    <!--btn begin-->
                    <span class="btn">
                        <a href="##">��������</a>
                    </span>
                    <!--btn end-->
                </div>
                <!--comment_con end-->
            </div>
            <!--comment end-->
            <script type="text/javascript" src="js/jquery.js"></script>
            <script type="text/javascript" src="js/tm.js"></script>
        </div>
    </div>
<div id="footer">
	
</div>
</body>	
</html>	