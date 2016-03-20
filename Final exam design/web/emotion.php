<!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>Winnie's blog</title>
<link rel="stylesheet" href="emotion.css" />
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
           	<div class="blogs">
            	<div class="b_nav">
                    <span>我们长路漫漫，只因学无止境。 </span>
                    <a href="#" class="n_index">网站首页</a>
                    <a href="#"class="n_about">学无止境</a>  
                </div>
                <div class="b_log">
                	<h2>
                    	<a title="【已评选】给我模板PSD源文件，我给你设计HTML！" href="#">【已评选】给我模板PSD源文件，我给你设计HTML！</a>
                        <p class="l_dataview">
                        	<span>发布时间：2015-07-23</span>
                            <span>作者：王秋云</span>
                        </p>
                    </h2>
                    <figure>
                    	<a title="【已评选】给我模板PSD源文件，我给你设计HTML！" href="#">
                        	<img src="images/l1.jpg"  width="180px" height="116px alt="【已评选】给我模板PSD源文件，我给你设计HTML！">
                        </a>
                    </figure>
                    <ul class="l_nlist">
                    	<p>
                        只要你有PSD模板（原创）即可参与评选活动！集思广益，各位爱好设计的小伙伴们，拿出你们最得意的作品，曾经设计过的，或者正在设计中的PSD源文件，并且愿意参加本活动，本站将评选出前三名优秀的博客设计模板，免费写出相应的Html页面！
                        </p>
                    	<a title="【已评选】给我模板PSD源文件，我给你设计HTML！" href="#" target="_blank" class="n_readmore">详细信息&gt;&gt;</a>
                    </ul>
                    <div class="l_line"></div>
                    
                    <figure>
                    	<a title="【已评选】给我模板PSD源文件，我给你设计HTML！" href="#">
                        	<img src="images/l2.jpg"  width="180px" height="116px alt="【已评选】给我模板PSD源文件，我给你设计HTML！">
                        </a>
                    </figure>
                    <ul class="l_nlist">
                    	<p>
                        本站郑重申明只提供静态模板下载，拒绝伸手党！本站所有能提供的模板均已发布，喜欢就下载！下载是干嘛的？！学习参考！初衷就是让更多喜欢web设计的新手能从中找到乐趣，以及开发设计更多更好的模板！
                        </p>
                    	<a title="【已评选】给我模板PSD源文件，我给你设计HTML！" href="#" target="_blank" class="n_readmore">详细信息&gt;&gt;</a>
                    </ul>
                    <div class="l_line"></div>
                    
                    <figure>
                    	<a title="【已评选】给我模板PSD源文件，我给你设计HTML！" href="#">
                        	<img src="images/l3.png"  width="180px" height="116px alt="【已评选】给我模板PSD源文件，我给你设计HTML！">
                        </a>
                    </figure>
                    <ul class="l_nlist">
                    	<p>
                        帝国cms首页以及自定义页面如何实现分页，添加如下js代码即可复制以下代码：&lt;!doctype html&gt;&lt;html&gt;&lt;head&gt;&lt;meta charset="gb2312"&gt;&lt;title&gt;www.yangqq.com&lt;/title&gt;&lt;meta name
                        </p>
                    	<a title="【已评选】给我模板PSD源文件，我给你设计HTML！" href="#" target="_blank" class="n_readmore">详细信息&gt;&gt;</a>
                    </ul>
                    <div class="l_line"></div>
                    
                    <figure>
                    	<a title="【已评选】给我模板PSD源文件，我给你设计HTML！" href="#">
                        	<img src="images/l5.jpg"  width="180px" height="116px alt="【已评选】给我模板PSD源文件，我给你设计HTML！">
                        </a>
                    </figure>
                    <ul class="l_nlist">
                    	<p>
                        经筛选合格的参赛个人博客网站，合计29个。评分标准按照网站的（内容10分、创意5分、原创5分、界面10分、兼容性10分、用户体验度10分）总分数50分来排名次。
                        </p>
                    	<a title="【已评选】给我模板PSD源文件，我给你设计HTML！" href="#" target="_blank" class="n_readmore">详细信息&gt;&gt;</a>
                    </ul>
                    <div class="l_line"></div>
                    
                    <figure>
                    	<a title="【已评选】给我模板PSD源文件，我给你设计HTML！" href="#">
                        	<img src="images/l6.jpg"  width="180px" height="116px alt="【已评选】给我模板PSD源文件，我给你设计HTML！">
                        </a>
                    </figure>
                    <ul class="l_nlist">
                        <p>设定一组侧边栏导航菜单，然后可以从任何一边滑出。有两种实现方式，一种固定菜单，一种从左右两侧推出</p>
                    	<a title="【已评选】给我模板PSD源文件，我给你设计HTML！" href="#" target="_blank" class="n_readmore">详细信息&gt;&gt;</a>
                    </ul>
                    <div class="l_line">
                    </div>  
                </div>
                <div class="l_right">
                    <div class="r_searchbox">
                    	<form>
                        	<input type="text" name="q" class="bdcs-search-form-input" id="bdcs-search-form-input" placeholder="请输入关键词" style="width:185px;height: 28px;line-height: 28px;">
                        	<input type="submit" class="form-submit" id="bdcs-search-form-submit" value="搜索" style="line-height:28px;">
                        </form>
                        <div class="r_nav">
                        	<h2>栏目导航</h2>
                            <ul>
                            	<li>
                                	<a href="/jstt/bj/">心得笔记</a>
                                </li>
                                <li>
                                	<a href="http://www.ip3q.com/">IP查询</a>
                                </li>
                                <li>
                                	<a href="/jstt/css3/">CSS3|Html5</a>
                                </li>
                                <li>
                                	<a href="/jstt/web/">网站建设</a>
                                </li>
                                <li>
                                	<a href="/news/jsex/">JS经典实例</a>
                                </li>
                                <li>
                                	<a href="/jstt/t/">推荐工具</a>
                                </li>
                            </ul>
                        </div>
                        <div class="r_news">
                        	<h3>
                            	<p>最新<span>模板</span></p>
                            </h3>
                            <ul>
                            	<li>
                                	<a href="/jstt/bj/2015-01-09/740.html" title="【匆匆那些年】总结个人博客经历的这四年…" target="_blank">【匆匆那些年】总结个人博客经历的这四年…</a>
                                </li>
                                <li>
                                <a href="/jstt/web/2015-02-25/745.html" title="【已评选】给我模板PSD源文件，我给你设计HTML！" target="_blank">【已评选】给我模板PSD源文件，我给你设计HTML！</a>
                                </li>
                                <li>
                                <a href="/jstt/bj/2015-02-14/744.html" title="【郑重申明】本站只提供静态模板下载！" target="_blank">【郑重申明】本站只提供静态模板下载！</a>
                                </li>
                                <li><a href="/jstt/css3/2014-11-18/733.html" title="【分享】css3侧边栏导航不同方向划出效果" target="_blank">【分享】css3侧边栏导航不同方向划出效果</a>
                                </li>
                                 <li><a href="/jstt/web/2014-12-18/736.html" title="2014年度优秀个人博客评选活动" target="_blank">2014年度优秀个人博客评选活动</a>
                                </li>
                                <li><a href="/jstt/css3/2014-12-09/734.html" title="使用CSS3制作文字、图片倒影" target="_blank">使用CSS3制作文字、图片倒影</a>
                                </li>
                                <h3>
                            	<p>最近<span>访客</span></p>
                            	</h3>
                                <div class="r_visitors">
                                	<div class="v_list">
                                    	<div class="l_avator">
                                    		<a rel="nofollow author" target="_blank" href="http://t.qq.com/lidegang4506" onclick="this.href='http://yangqq.duoshuo.com/user-url/?user_id=6231520884415267586';" title="纠结式幸福"><img src="images/v1.jpg" alt="纠结式幸福" style="width:32px;height:32px"></a>
                                        </div>
                                        <div class="l_avator">
                                    		<a rel="nofollow author" target="_blank" href="http://t.qq.com/lidegang4506" onclick="this.href='http://yangqq.duoshuo.com/user-url/?user_id=6231520884415267586';" title="纠结式幸福"><img src="images/v2.jpg" alt="纠结式幸福" style="width:32px;height:32px"></a>
                                        </div>
                                        <div class="l_avator">
                                    		<a rel="nofollow author" target="_blank" href="http://t.qq.com/lidegang4506" onclick="this.href='http://yangqq.duoshuo.com/user-url/?user_id=6231520884415267586';" title="纠结式幸福"><img src="images/v3.jpg" alt="纠结式幸福" style="width:32px;height:32px"></a>
                                        </div>
                                        <div class="l_avator">
                                    		<a rel="nofollow author" target="_blank" href="http://t.qq.com/lidegang4506" onclick="this.href='http://yangqq.duoshuo.com/user-url/?user_id=6231520884415267586';" title="纠结式幸福"><img src="images/v5.jpg" alt="纠结式幸福" style="width:32px;height:32px"></a>
                                        </div>
                                        <div class="l_avator">
                                    		<a rel="nofollow author" target="_blank" href="http://t.qq.com/lidegang4506" onclick="this.href='http://yangqq.duoshuo.com/user-url/?user_id=6231520884415267586';" title="纠结式幸福"><img src="images/v6.gif" alt="纠结式幸福" style="width:32px;height:32px"></a>
                                        </div>
                                        <div class="l_avator">
                                    		<a rel="nofollow author" target="_blank" href="http://t.qq.com/lidegang4506" onclick="this.href='http://yangqq.duoshuo.com/user-url/?user_id=6231520884415267586';" title="纠结式幸福"><img src="images/v7.jpg" alt="纠结式幸福" style="width:32px;height:32px"></a>
                                        </div>
                                        <div class="l_avator">
                                    		<a rel="nofollow author" target="_blank" href="http://t.qq.com/lidegang4506" onclick="this.href='http://yangqq.duoshuo.com/user-url/?user_id=6231520884415267586';" title="纠结式幸福"><img src="images/v8.jpg" alt="纠结式幸福" style="width:32px;height:32px"></a>
                                        </div>
                                        <div class="l_avator">
                                    		<a rel="nofollow author" target="_blank" href="http://t.qq.com/lidegang4506" onclick="this.href='http://yangqq.duoshuo.com/user-url/?user_id=6231520884415267586';" title="纠结式幸福"><img src="images/v9.jpg" alt="纠结式幸福" style="width:32px;height:32px"></a>
                                        </div>
                                        <div class="l_avator">
                                    		<a rel="nofollow author" target="_blank" href="http://t.qq.com/lidegang4506" onclick="this.href='http://yangqq.duoshuo.com/user-url/?user_id=6231520884415267586';" title="纠结式幸福"><img src="images/v10.jpg" alt="纠结式幸福" style="width:32px;height:32px"></a>
                                        </div>
                                        <div class="l_avator">
                                    		<a rel="nofollow author" target="_blank" href="http://t.qq.com/lidegang4506" onclick="this.href='http://yangqq.duoshuo.com/user-url/?user_id=6231520884415267586';" title="纠结式幸福"><img src="images/v1.jpg" alt="纠结式幸福" style="width:32px;height:32px"></a>
                                        </div>
                                        <div class="l_avator">
                                    		<a rel="nofollow author" target="_blank" href="http://t.qq.com/lidegang4506" onclick="this.href='http://yangqq.duoshuo.com/user-url/?user_id=6231520884415267586';" title="纠结式幸福"><img src="images/v2.jpg" alt="纠结式幸福" style="width:32px;height:32px"></a>
                                        </div>
                                        <div class="l_avator">
                                    		<a rel="nofollow author" target="_blank" href="http://t.qq.com/lidegang4506" onclick="this.href='http://yangqq.duoshuo.com/user-url/?user_id=6231520884415267586';" title="纠结式幸福"><img src="images/v3.jpg" alt="纠结式幸福" style="width:32px;height:32px"></a>
                                        </div>
                                        <div class="l_avator">
                                    		<a rel="nofollow author" target="_blank" href="http://t.qq.com/lidegang4506" onclick="this.href='http://yangqq.duoshuo.com/user-url/?user_id=6231520884415267586';" title="纠结式幸福"><img src="images/v5.jpg" alt="纠结式幸福" style="width:32px;height:32px"></a>
                                        </div>
                                        <div class="l_avator">
                                    		<a rel="nofollow author" target="_blank" href="http://t.qq.com/lidegang4506" onclick="this.href='http://yangqq.duoshuo.com/user-url/?user_id=6231520884415267586';" title="纠结式幸福"><img src="images/v6.gif" alt="纠结式幸福" style="width:32px;height:32px"></a>
                                        </div>
                                        <div class="l_avator">
                                    		<a rel="nofollow author" target="_blank" href="http://t.qq.com/lidegang4506" onclick="this.href='http://yangqq.duoshuo.com/user-url/?user_id=6231520884415267586';" title="纠结式幸福"><img src="images/v7.jpg" alt="纠结式幸福" style="width:32px;height:32px"></a>
                                        </div>
                                        <div class="l_avator">
                                    		<a rel="nofollow author" target="_blank" href="http://t.qq.com/lidegang4506" onclick="this.href='http://yangqq.duoshuo.com/user-url/?user_id=6231520884415267586';" title="纠结式幸福"><img src="images/v8.jpg" alt="纠结式幸福" style="width:32px;height:32px"></a>
                                        </div>
                                        <div class="l_avator">
                                    		<a rel="nofollow author" target="_blank" href="http://t.qq.com/lidegang4506" onclick="this.href='http://yangqq.duoshuo.com/user-url/?user_id=6231520884415267586';" title="纠结式幸福"><img src="images/v9.jpg" alt="纠结式幸福" style="width:32px;height:32px"></a>
                                        </div>
                                        <div class="l_avator">
                                    		<a rel="nofollow author" target="_blank" href="http://t.qq.com/lidegang4506" onclick="this.href='http://yangqq.duoshuo.com/user-url/?user_id=6231520884415267586';" title="纠结式幸福"><img src="images/v10.jpg" alt="纠结式幸福" style="width:32px;height:32px"></a>
                                        </div>
                                         <div class="l_avator">
                                    		<a rel="nofollow author" target="_blank" href="http://t.qq.com/lidegang4506" onclick="this.href='http://yangqq.duoshuo.com/user-url/?user_id=6231520884415267586';" title="纠结式幸福"><img src="images/v6.gif" alt="纠结式幸福" style="width:32px;height:32px"></a>
                                        </div>
                                        <div class="l_avator">
                                    		<a rel="nofollow author" target="_blank" href="http://t.qq.com/lidegang4506" onclick="this.href='http://yangqq.duoshuo.com/user-url/?user_id=6231520884415267586';" title="纠结式幸福"><img src="images/v7.jpg" alt="纠结式幸福" style="width:32px;height:32px"></a>
                                        </div>
                                        <div class="l_avator">
                                    		<a rel="nofollow author" target="_blank" href="http://t.qq.com/lidegang4506" onclick="this.href='http://yangqq.duoshuo.com/user-url/?user_id=6231520884415267586';" title="纠结式幸福"><img src="images/v8.jpg" alt="纠结式幸福" style="width:32px;height:32px"></a>
                                        </div>
                                        <div class="l_avator">
                                    		<a rel="nofollow author" target="_blank" href="http://t.qq.com/lidegang4506" onclick="this.href='http://yangqq.duoshuo.com/user-url/?user_id=6231520884415267586';" title="纠结式幸福"><img src="images/v9.jpg" alt="纠结式幸福" style="width:32px;height:32px"></a>
                                        </div>
                                        <div class="l_avator">
                                    		<a rel="nofollow author" target="_blank" href="http://t.qq.com/lidegang4506" onclick="this.href='http://yangqq.duoshuo.com/user-url/?user_id=6231520884415267586';" title="纠结式幸福"><img src="images/v10.jpg" alt="纠结式幸福" style="width:32px;height:32px"></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
      </div>
</div>
 
<div id="footer">
	
</div>
</body>	
</html>	