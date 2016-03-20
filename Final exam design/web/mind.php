<!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>Winnie's blog</title>
<link rel="stylesheet" href="mind.css" />
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
        	<h1 class="w_nav">
            	<span>像“草根”一样，紧贴着地面，低调的存在，冬去春来，枯荣无恙</span>
                <a href="index.php" class="n_index">网站首页</a>
                <a href="#" class="n_about">关于我</a>
            </h1>
            <div class="w_about">
            	<h2>Just about me</h2>
                <ul>
                    <p>王秋云，女，一个90后活泼开朗的女孩！13年进入大学，对计算机专业从害怕到喜欢。上大学之后每天过着忙碌但充实的日子。现在回想起来，还记得大一自己冒着寒风去惟义楼自习，炎热的夏天提着电脑去先骕楼写代码。最然过程很累很辛苦，但当自己进步之后那种成就感是难以言表的，我也梦想着有一天能够背着包去四处旅行，看想看的地方，所以现在的一切只是为未来的日子做铺垫。</p>
                    <p>
人生就是一个得与失的过程，而我却是一个幸运者，得到的永远比失去的多。生活的压力迫使我放弃了轻松的，放弃了喜欢的电影，放弃了给我睡懒觉的床，换来的是接踵而来的工作任务，但是我仍然很享受那些熬得只剩下黑眼圈的日子，因为我有一种使命感去要求自己认真对待每一件事情。</p>
                    <p>在这几年的大学生活中除了感谢所有的老师和同学之外我还要感谢的我的室友，感谢S664寝室的三个逗比，也许冥冥中就注定我们会成为室友，我们四个都是本地人，我们四个的风格各不相同，正因为这不同我们互相借鉴学习人，互相调侃打闹，让我们寝室相处地更加融洽团结。期间我们也有过小矛盾但是没过多久大家就都忘得一干二净。我的三个室友都很聪明，相反，我觉得自己是最笨的那一个，但是我感觉自己是我们四个中最勤奋的一个，我从她们身上也学到了很多。</p>
                    <p>
还要特别感谢一个人，就是我自己。这些年来我想对自己说一句“辛苦了”，“No pains,no gains”我一直尽力去做好每一件事，认真对待这自己的学习与生活，为了自己的梦想，我愿意为之不懈努力，我想当梦想实现的那天，我会笑得很开心。因为生活就像农民伯伯种庄稼，春天的播种就是你的付出，秋天的结果就是你辛苦换来的果实，当亲手品尝着自己的果实，心里自然是甜蜜的。</p>
                </ul>
                <h2>About my blog</h2>
                <p>域  名：http://blog.csdn.net/qq_19299063 创建于2014年12月12日&nbsp;&nbsp;&nbsp;&nbsp; 
                <a href="http://www.net.cn/domain/" class="blog_link" target="_blank">注册域名</a>
                 </p>

                <p>服务器：阿里云服务器&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="http://s.click.taobao.com/t?e=m%3D2%26s%3Dz5eBi6WTFMQcQipKwQzePCperVdZeJviEViQ0P1Vf2kguMN8XjClAlNMWqr0PJv0%2BzfprQ6FycnevVLneSIAilqVHLpX3RfWM7YdOqxZsyNXcE%2BniVLVjudn1BbglxZYxUhy8exlzcq9AmARIwX9K%2BnbtOD3UdznPV1H2z0iQv9NkKVMHClW0QbMqOpFMIvnvjQXzzpXdTHGJe8N%2FwNpGw%3D%3D" target="_blank" class="blog_link">购买空间</a>
                </p>
                <p>程  序：PHP 帝国CMS7.0</p>
            </div>
            <div class="w_right">
            	<div class="r_about">
                	<p>网名：<span>WinnieLucky</span> | 云中的Angel</p>
                    <p>姓名：王秋云</p>
                    <p>籍贯：江西-南昌</p>
                    <p>现居：江西-南昌</p>
                    <p>学历：本科在读</p>
                    <p>擅长：网页设计 英语口语 瑜伽</p>
                    <p>喜欢的书：《小王子》</p>
                    <p>喜欢的音乐：《burning》</p>
                    <img src="images/aboutphoto.jpg" width="200" height="300"
                </div>
            </div>
            
        </div>
    </div>
<div id="footer">
	&copy;Designed by Winnie
</div>
</body>	
</html>	