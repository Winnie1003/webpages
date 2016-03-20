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
        <!-- 没有找到合适的logo，暂用文字代替 -->
            <div id="logo">
                <h1><a href="#">博客<a></h1>
            </div>
            <div id="nav">
                <ul>
                    <li id="index"><a href="../../wqy/web/index.php">首页</a></li>
                    <li id="mind"><a href="../../wqy/web/mind.php">关于我</a></li>
                    <li id="emotion"><a href="../../wqy/web/emotion.php">学无止境</a></li>
                    <li id="essay"><a href="../../wqy/web/essay.php">交流</a></li>
                    <li id="gnosis"><a href="../../wqy/web/gnosis.php">时间轴</a></li>
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
    <div id="introduce">
        <div id="poster">
            <p>Wherever you are,be there<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;——<span>My Wish</span></p>
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
                <figcaption>爱是一个说不完的话题</figcaption>
            </figure>
        </div>
        <div class="img">
        	<figure>
            	<a href="#"><img src="../../wqy/web/images/2_img_bg.jpg" height="300px" width="280px"></a>
                <figcaption>岁月如歌，续落无痕</figcaption>
            </figure>
        </div>
        <div class="img">
        	<figure>
            	<a href="#"><img src="../../wqy/web/images/3_img_bg.jpg" height="300px" width="280px"></a>
                <figcaption>给生活做一个减法</figcaption>
            </figure>
        </div>
    </div>
</div>

<div id="footer">
</div>
</body>	
</html>		