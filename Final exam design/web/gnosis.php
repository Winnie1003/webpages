<!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>Winnie's blog</title>
<link rel="stylesheet" href="gnosis.css" />
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
</head>

<body>
    <div id="header">
        <div id="headertxt">
        <!-- 没有找到合适的logo，暂用文字代替 -->
            <div id="logo">
                <h1><a href="#">博客</a></h1>
            </div>
            <div id="nav">
                <ul>
                    <li id="index"><a href="index.php">首页</a></li>
                    <li id="aboutme"><a href="aboutme.php">关于我</a></li>
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
            <div id="Con">
               <!--头像开始-->
               <dl>
                   <dt><img src="images/my.jpg" width="100px" height="100px" /></dt>
                   <dd>我的成长历程</dd>
               </dl>
               <!--头像结束--> 
        
               <!--列表展示内容区开始-->
               <div class="List">
                   <ul>
                       <li>
                       <!--label begin-->
                           <div class="label">
                               <font>12月21日</font>
                               <img src="images/tr.png" class="jt"/>
                               <span></span>
                           </div>
                        <!--label end-->
        
                        <!--内容开始-->
                            <div class="ListCon">
                            	<p>
                                	<img src="images/timeline1.jpg" width="142px" height="100px" alt="身边一直对你好的人有多珍贵"/>
有一天当你发现疏远和拉黑的可能是曾经最聊得来的朋友出手阻碍你的或许是你当初的合伙人；你才会明白，这个世界没有什么是不变的，这个时代，因为利益会有许多人做出许多你想不到的事。沙里淘金后，你才知道原来身边一直对你好的人有多珍贵。
                                </p>
                            </div>
                        <!--内容结束-->
                       </li>
                       <li>
                       <!--label begin-->
                            <div class="label">
                               <font>12月10日</font>
                               <img src="images/tr.png" class="jt"/>
                               <span></span>
                            </div>
                        <!--label end-->
        
                        <!--内容开始-->
                            <div class="ListCon">
                            	<p>
                                	<img src="images/timeline2.jpg" width="142px" height="100px" alt="身边一直对你好的人有多珍贵"/>
时隔多年，本来以为已经豪不介怀，当真正的真相被揭开，却再也找不着可以原谅的理由。
                                </p>
                            </div>
                        <!--内容结束-->
                       </li>
                       <li>
                       <!--label begin-->
                            <div class="label">
                               <font>11月31日</font>
                               <img src="images/tr.png" class="jt"/>
                               <span></span>
                            </div>
                        <!--label end-->
        
                        <!--内容开始-->
                            <div class="ListCon">
                            	<p>
                                	<img src="images/timeline3.jpg" width="142px" height="100px" alt="身边一直对你好的人有多珍贵"/>
早已习惯孤影对阵，谢绝藏在四季背后的春。红颜苍老的眼眸，看不清梦里一道道远景。打了死结的青春，捆死一颗苍白绝望的灵魂。为自己掘一个坟墓来葬心，红尘一梦，不再追寻。一切关于爱的诗篇，从此沉沦。加了锁的青春，不会再因谁而推开心门。
                                </p>
                            </div>
                        <!--内容结束-->
                       </li>
                       <li>
                       <!--label begin-->
                            <div class="label">
                               <font>11月14日</font>
                               <img src="images/tr.png" class="jt"/>
                               <span></span>
                            </div>
                        <!--label end-->
        
                        <!--内容开始-->
                            <div class="ListCon">
                            	<p>
                                	<img src="images/timeline4.jpg" width="142px" height="100px" alt="身边一直对你好的人有多珍贵"/>
你还记得那个深秋么，当冷冷的风捎来彻骨的寒意，
挥别你的时候，我知道所有的故事已不会再来，就像走在那个寂寞的冬夜，心中盛满深深的无奈。
许多年以后我们都远远地离开了那个季节，我们想着最初的一片叶子，想着两个人的车站，那些不经意来去的人。
                                </p>
                            </div>
                        <!--内容结束-->
                       </li>
                       <li>
                       <!--label begin-->
                            <div class="label">
                               <font>10月28日</font>
                               <img src="images/tr.png" class="jt"/>
                               <span></span>
                            </div>
                        <!--label end-->
        
                        <!--内容开始-->
                            <div class="ListCon">
                            	<p>
                                	<img src="images/timeline5.jpg" width="142px" height="100px" alt="身边一直对你好的人有多珍贵"/>
时隔多年，本来以为已经豪不介怀，当真正的真相被揭开，却再也找不着可以原谅的理由
                                </p>
                            </div>
                        <!--内容结束-->
                       </li>
                       <li>
                       <!--label begin-->
                            <div class="label">
                               <font>9月5日</font>
                               <img src="images/tr.png" class="jt"/>
                               <span></span>
                            </div>
                        <!--label end-->
        
                        <!--内容开始-->
                            <div class="ListCon">
                            	<p>
                                	<img src="images/timeline6.jpg" width="142px" height="100px" alt="身边一直对你好的人有多珍贵"/>
不管何时，人生之旅终是自己，或者说是孤独的。回首过去，我们哭过，笑过，最终铭记。没有什么可以与时间抗衡，也没有什么可以与光阴一起长青，轮回的四季，回不去的昨天，今天是明天的永远，明天是后天的纪念，还有多少青春经得起我们挥霍？
                                </p>
                            </div>
                        <!--内容结束-->
                       </li>
                       <li>
                       <!--label begin-->
                            <div class="label">
                               <font>7月31日</font>
                               <img src="images/tr.png" class="jt"/>
                               <span></span>
                            </div>
                        <!--label end-->
        
                        <!--内容开始-->
                            <div class="ListCon">
                            	<p>
                                	<img src="images/timeline7.jpg" width="142px" height="100px" alt="身边一直对你好的人有多珍贵"/>
不管何时，人生之旅终是自己，或者说是孤独的。回首过去，我们哭过，笑过，最终铭记。没有什么可以与时间抗衡，也没有什么可以与光阴一起长青，轮回的四季，回不去的昨天，今天是明天的永远，明天是后天的纪念，还有多少青春经得起我们挥霍？
                                </p>
                            </div>
                        <!--内容结束-->
                       </li>
                       <li>
                       <!--label begin-->
                            <div class="label">
                               <font>5月19日</font>
                               <img src="images/tr.png" class="jt"/>
                               <span></span>
                            </div>
                        <!--label end-->
        
                        <!--内容开始-->
                            <div class="ListCon">
                            	<p>
                                	<img src="images/timeline8.jpg" width="142px" height="100px" alt="身边一直对你好的人有多珍贵"/>
很清晰的梦境，右脚、左脚、耸肩、每个动作我都记得很清楚，一早起来还为这独创舞步惊喜，哪知，这是名副其实的“秧歌”
                                </p>
                            </div>
                        <!--内容结束-->
                       </li>
                       <li>
                       <!--label begin-->
                            <div class="label">
                               <font>4月2日</font>
                               <img src="images/tr.png" class="jt"/>
                               <span></span>
                            </div>
                        <!--label end-->
        
                        <!--内容开始-->
                            <div class="ListCon">
                            	<p>
                                	<img src="images/timeline5.jpg" width="142px" height="100px" alt="身边一直对你好的人有多珍贵"/>
很多的梦 在等待着世界，而我已分不清 你是友情还是错过的爱情
                                </p>
                            </div>
                        <!--内容结束-->
                       </li>
                       <li>
                       <!--label begin-->
                            <div class="label">
                               <font>3月3日</font>
                               <img src="images/tr.png" class="jt"/>
                               <span></span>
                            </div>
                        <!--label end-->
        
                        <!--内容开始-->
                            <div class="ListCon">
                            	<p>
                                	<img src="images/timeline7.jpg" width="142px" height="100px" alt="身边一直对你好的人有多珍贵"/>
每个人都有坏脾气，我的坏脾气正在被自己慢慢挫减，有时候能控制住自己，但却无法控制别人。不是所有谦让都能换取原谅，也许付出的是自尊…
                                </p>
                            </div>
                        <!--内容结束-->
                       </li>
                   </ul>
               </div>
               <!--列表展示内容区结束-->
            </div>
        </div>
    </div>
<div id="footer">
	
</div>
</body>	
</html>	