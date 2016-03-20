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
        <!-- 没有找到合适的logo，暂用文字代替 -->
            <div id="logo">
                <h1><a href="#">博客<a></h1>
            </div>
            <div id="nav">
                <ul>
                    <li id="index"><a href="index.php">首页</a></li>
                    <li id="mind"><a href="mind.php">关于我</a></li>
                    <li id="emotion"><a href="emotion.php">学无止境</a></li>
                    <li id="essay"><a href="essay.php">交流</a></li>
                    <li id="gnosis"><a href="gnosis.php">时间轴</a></li>
                </ul>
            </div>
            <div id="login">
                <?php
					session_start();
					if(isset($_SESSION['isLogin'])){
						echo '<a href="#">';
						echo $_SESSION['username'];		// 显示用户名
						echo '</a><em class="sprit"> / </em><a href="out.php">退出</a>';
					}
					else{
                    	echo '<a href="login.php">登陆</a><em class="sprit"> / </em><a href="register.php">注册</a>';
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
                <!--视频区域开始-->
                <div class="Tv"></div>
                <!--视频区域结束-->
                
                <!--弹幕区域开始-->
                <div class="Bar"></div>
                <!--弹幕区域结束-->
            </div>
            <!--video end-->
        
            <!--comment begin-->
            <div id="comment">
                <!--comment_con begin-->
                <div class="comment_con">
                    <!--input begin-->
                    <input type="text" class="txt" placeholder="发送弹幕一起交流学习"/>
                    <!--input end-->
                    
                    <!--btn begin-->
                    <span class="btn">
                        <a href="##">发表评论</a>
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