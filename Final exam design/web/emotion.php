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
        <!-- û���ҵ����ʵ�logo���������ִ��� -->
            <div id="logo">
                <h1><a href="#">����</a></h1>
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
           	<div class="blogs">
            	<div class="b_nav">
                    <span>���ǳ�·������ֻ��ѧ��ֹ���� </span>
                    <a href="#" class="n_index">��վ��ҳ</a>
                    <a href="#"class="n_about">ѧ��ֹ��</a>  
                </div>
                <div class="b_log">
                	<h2>
                    	<a title="������ѡ������ģ��PSDԴ�ļ����Ҹ������HTML��" href="#">������ѡ������ģ��PSDԴ�ļ����Ҹ������HTML��</a>
                        <p class="l_dataview">
                        	<span>����ʱ�䣺2015-07-23</span>
                            <span>���ߣ�������</span>
                        </p>
                    </h2>
                    <figure>
                    	<a title="������ѡ������ģ��PSDԴ�ļ����Ҹ������HTML��" href="#">
                        	<img src="images/l1.jpg"  width="180px" height="116px alt="������ѡ������ģ��PSDԴ�ļ����Ҹ������HTML��">
                        </a>
                    </figure>
                    <ul class="l_nlist">
                    	<p>
                        ֻҪ����PSDģ�壨ԭ�������ɲ�����ѡ�����˼���棬��λ������Ƶ�С����ǣ��ó�������������Ʒ��������ƹ��ģ�������������е�PSDԴ�ļ�������Ը��μӱ������վ����ѡ��ǰ��������Ĳ������ģ�壬���д����Ӧ��Htmlҳ�棡
                        </p>
                    	<a title="������ѡ������ģ��PSDԴ�ļ����Ҹ������HTML��" href="#" target="_blank" class="n_readmore">��ϸ��Ϣ&gt;&gt;</a>
                    </ul>
                    <div class="l_line"></div>
                    
                    <figure>
                    	<a title="������ѡ������ģ��PSDԴ�ļ����Ҹ������HTML��" href="#">
                        	<img src="images/l2.jpg"  width="180px" height="116px alt="������ѡ������ģ��PSDԴ�ļ����Ҹ������HTML��">
                        </a>
                    </figure>
                    <ul class="l_nlist">
                    	<p>
                        ��վ֣������ֻ�ṩ��̬ģ�����أ��ܾ����ֵ�����վ�������ṩ��ģ����ѷ�����ϲ�������أ������Ǹ���ģ���ѧϰ�ο������Ծ����ø���ϲ��web��Ƶ������ܴ����ҵ���Ȥ���Լ�������Ƹ�����õ�ģ�壡
                        </p>
                    	<a title="������ѡ������ģ��PSDԴ�ļ����Ҹ������HTML��" href="#" target="_blank" class="n_readmore">��ϸ��Ϣ&gt;&gt;</a>
                    </ul>
                    <div class="l_line"></div>
                    
                    <figure>
                    	<a title="������ѡ������ģ��PSDԴ�ļ����Ҹ������HTML��" href="#">
                        	<img src="images/l3.png"  width="180px" height="116px alt="������ѡ������ģ��PSDԴ�ļ����Ҹ������HTML��">
                        </a>
                    </figure>
                    <ul class="l_nlist">
                    	<p>
                        �۹�cms��ҳ�Լ��Զ���ҳ�����ʵ�ַ�ҳ���������js���뼴�ɸ������´��룺&lt;!doctype html&gt;&lt;html&gt;&lt;head&gt;&lt;meta charset="gb2312"&gt;&lt;title&gt;www.yangqq.com&lt;/title&gt;&lt;meta name
                        </p>
                    	<a title="������ѡ������ģ��PSDԴ�ļ����Ҹ������HTML��" href="#" target="_blank" class="n_readmore">��ϸ��Ϣ&gt;&gt;</a>
                    </ul>
                    <div class="l_line"></div>
                    
                    <figure>
                    	<a title="������ѡ������ģ��PSDԴ�ļ����Ҹ������HTML��" href="#">
                        	<img src="images/l5.jpg"  width="180px" height="116px alt="������ѡ������ģ��PSDԴ�ļ����Ҹ������HTML��">
                        </a>
                    </figure>
                    <ul class="l_nlist">
                    	<p>
                        ��ɸѡ�ϸ�Ĳ������˲�����վ���ϼ�29�������ֱ�׼������վ�ģ�����10�֡�����5�֡�ԭ��5�֡�����10�֡�������10�֡��û������10�֣��ܷ���50���������Ρ�
                        </p>
                    	<a title="������ѡ������ģ��PSDԴ�ļ����Ҹ������HTML��" href="#" target="_blank" class="n_readmore">��ϸ��Ϣ&gt;&gt;</a>
                    </ul>
                    <div class="l_line"></div>
                    
                    <figure>
                    	<a title="������ѡ������ģ��PSDԴ�ļ����Ҹ������HTML��" href="#">
                        	<img src="images/l6.jpg"  width="180px" height="116px alt="������ѡ������ģ��PSDԴ�ļ����Ҹ������HTML��">
                        </a>
                    </figure>
                    <ul class="l_nlist">
                        <p>�趨һ�����������˵���Ȼ����Դ��κ�һ�߻�����������ʵ�ַ�ʽ��һ�̶ֹ��˵���һ�ִ����������Ƴ�</p>
                    	<a title="������ѡ������ģ��PSDԴ�ļ����Ҹ������HTML��" href="#" target="_blank" class="n_readmore">��ϸ��Ϣ&gt;&gt;</a>
                    </ul>
                    <div class="l_line">
                    </div>  
                </div>
                <div class="l_right">
                    <div class="r_searchbox">
                    	<form>
                        	<input type="text" name="q" class="bdcs-search-form-input" id="bdcs-search-form-input" placeholder="������ؼ���" style="width:185px;height: 28px;line-height: 28px;">
                        	<input type="submit" class="form-submit" id="bdcs-search-form-submit" value="����" style="line-height:28px;">
                        </form>
                        <div class="r_nav">
                        	<h2>��Ŀ����</h2>
                            <ul>
                            	<li>
                                	<a href="/jstt/bj/">�ĵñʼ�</a>
                                </li>
                                <li>
                                	<a href="http://www.ip3q.com/">IP��ѯ</a>
                                </li>
                                <li>
                                	<a href="/jstt/css3/">CSS3|Html5</a>
                                </li>
                                <li>
                                	<a href="/jstt/web/">��վ����</a>
                                </li>
                                <li>
                                	<a href="/news/jsex/">JS����ʵ��</a>
                                </li>
                                <li>
                                	<a href="/jstt/t/">�Ƽ�����</a>
                                </li>
                            </ul>
                        </div>
                        <div class="r_news">
                        	<h3>
                            	<p>����<span>ģ��</span></p>
                            </h3>
                            <ul>
                            	<li>
                                	<a href="/jstt/bj/2015-01-09/740.html" title="���Ҵ���Щ�꡿�ܽ���˲��;����������ꡭ" target="_blank">���Ҵ���Щ�꡿�ܽ���˲��;����������ꡭ</a>
                                </li>
                                <li>
                                <a href="/jstt/web/2015-02-25/745.html" title="������ѡ������ģ��PSDԴ�ļ����Ҹ������HTML��" target="_blank">������ѡ������ģ��PSDԴ�ļ����Ҹ������HTML��</a>
                                </li>
                                <li>
                                <a href="/jstt/bj/2015-02-14/744.html" title="��֣����������վֻ�ṩ��̬ģ�����أ�" target="_blank">��֣����������վֻ�ṩ��̬ģ�����أ�</a>
                                </li>
                                <li><a href="/jstt/css3/2014-11-18/733.html" title="������css3�����������ͬ���򻮳�Ч��" target="_blank">������css3�����������ͬ���򻮳�Ч��</a>
                                </li>
                                 <li><a href="/jstt/web/2014-12-18/736.html" title="2014���������˲�����ѡ�" target="_blank">2014���������˲�����ѡ�</a>
                                </li>
                                <li><a href="/jstt/css3/2014-12-09/734.html" title="ʹ��CSS3�������֡�ͼƬ��Ӱ" target="_blank">ʹ��CSS3�������֡�ͼƬ��Ӱ</a>
                                </li>
                                <h3>
                            	<p>���<span>�ÿ�</span></p>
                            	</h3>
                                <div class="r_visitors">
                                	<div class="v_list">
                                    	<div class="l_avator">
                                    		<a rel="nofollow author" target="_blank" href="http://t.qq.com/lidegang4506" onclick="this.href='http://yangqq.duoshuo.com/user-url/?user_id=6231520884415267586';" title="����ʽ�Ҹ�"><img src="images/v1.jpg" alt="����ʽ�Ҹ�" style="width:32px;height:32px"></a>
                                        </div>
                                        <div class="l_avator">
                                    		<a rel="nofollow author" target="_blank" href="http://t.qq.com/lidegang4506" onclick="this.href='http://yangqq.duoshuo.com/user-url/?user_id=6231520884415267586';" title="����ʽ�Ҹ�"><img src="images/v2.jpg" alt="����ʽ�Ҹ�" style="width:32px;height:32px"></a>
                                        </div>
                                        <div class="l_avator">
                                    		<a rel="nofollow author" target="_blank" href="http://t.qq.com/lidegang4506" onclick="this.href='http://yangqq.duoshuo.com/user-url/?user_id=6231520884415267586';" title="����ʽ�Ҹ�"><img src="images/v3.jpg" alt="����ʽ�Ҹ�" style="width:32px;height:32px"></a>
                                        </div>
                                        <div class="l_avator">
                                    		<a rel="nofollow author" target="_blank" href="http://t.qq.com/lidegang4506" onclick="this.href='http://yangqq.duoshuo.com/user-url/?user_id=6231520884415267586';" title="����ʽ�Ҹ�"><img src="images/v5.jpg" alt="����ʽ�Ҹ�" style="width:32px;height:32px"></a>
                                        </div>
                                        <div class="l_avator">
                                    		<a rel="nofollow author" target="_blank" href="http://t.qq.com/lidegang4506" onclick="this.href='http://yangqq.duoshuo.com/user-url/?user_id=6231520884415267586';" title="����ʽ�Ҹ�"><img src="images/v6.gif" alt="����ʽ�Ҹ�" style="width:32px;height:32px"></a>
                                        </div>
                                        <div class="l_avator">
                                    		<a rel="nofollow author" target="_blank" href="http://t.qq.com/lidegang4506" onclick="this.href='http://yangqq.duoshuo.com/user-url/?user_id=6231520884415267586';" title="����ʽ�Ҹ�"><img src="images/v7.jpg" alt="����ʽ�Ҹ�" style="width:32px;height:32px"></a>
                                        </div>
                                        <div class="l_avator">
                                    		<a rel="nofollow author" target="_blank" href="http://t.qq.com/lidegang4506" onclick="this.href='http://yangqq.duoshuo.com/user-url/?user_id=6231520884415267586';" title="����ʽ�Ҹ�"><img src="images/v8.jpg" alt="����ʽ�Ҹ�" style="width:32px;height:32px"></a>
                                        </div>
                                        <div class="l_avator">
                                    		<a rel="nofollow author" target="_blank" href="http://t.qq.com/lidegang4506" onclick="this.href='http://yangqq.duoshuo.com/user-url/?user_id=6231520884415267586';" title="����ʽ�Ҹ�"><img src="images/v9.jpg" alt="����ʽ�Ҹ�" style="width:32px;height:32px"></a>
                                        </div>
                                        <div class="l_avator">
                                    		<a rel="nofollow author" target="_blank" href="http://t.qq.com/lidegang4506" onclick="this.href='http://yangqq.duoshuo.com/user-url/?user_id=6231520884415267586';" title="����ʽ�Ҹ�"><img src="images/v10.jpg" alt="����ʽ�Ҹ�" style="width:32px;height:32px"></a>
                                        </div>
                                        <div class="l_avator">
                                    		<a rel="nofollow author" target="_blank" href="http://t.qq.com/lidegang4506" onclick="this.href='http://yangqq.duoshuo.com/user-url/?user_id=6231520884415267586';" title="����ʽ�Ҹ�"><img src="images/v1.jpg" alt="����ʽ�Ҹ�" style="width:32px;height:32px"></a>
                                        </div>
                                        <div class="l_avator">
                                    		<a rel="nofollow author" target="_blank" href="http://t.qq.com/lidegang4506" onclick="this.href='http://yangqq.duoshuo.com/user-url/?user_id=6231520884415267586';" title="����ʽ�Ҹ�"><img src="images/v2.jpg" alt="����ʽ�Ҹ�" style="width:32px;height:32px"></a>
                                        </div>
                                        <div class="l_avator">
                                    		<a rel="nofollow author" target="_blank" href="http://t.qq.com/lidegang4506" onclick="this.href='http://yangqq.duoshuo.com/user-url/?user_id=6231520884415267586';" title="����ʽ�Ҹ�"><img src="images/v3.jpg" alt="����ʽ�Ҹ�" style="width:32px;height:32px"></a>
                                        </div>
                                        <div class="l_avator">
                                    		<a rel="nofollow author" target="_blank" href="http://t.qq.com/lidegang4506" onclick="this.href='http://yangqq.duoshuo.com/user-url/?user_id=6231520884415267586';" title="����ʽ�Ҹ�"><img src="images/v5.jpg" alt="����ʽ�Ҹ�" style="width:32px;height:32px"></a>
                                        </div>
                                        <div class="l_avator">
                                    		<a rel="nofollow author" target="_blank" href="http://t.qq.com/lidegang4506" onclick="this.href='http://yangqq.duoshuo.com/user-url/?user_id=6231520884415267586';" title="����ʽ�Ҹ�"><img src="images/v6.gif" alt="����ʽ�Ҹ�" style="width:32px;height:32px"></a>
                                        </div>
                                        <div class="l_avator">
                                    		<a rel="nofollow author" target="_blank" href="http://t.qq.com/lidegang4506" onclick="this.href='http://yangqq.duoshuo.com/user-url/?user_id=6231520884415267586';" title="����ʽ�Ҹ�"><img src="images/v7.jpg" alt="����ʽ�Ҹ�" style="width:32px;height:32px"></a>
                                        </div>
                                        <div class="l_avator">
                                    		<a rel="nofollow author" target="_blank" href="http://t.qq.com/lidegang4506" onclick="this.href='http://yangqq.duoshuo.com/user-url/?user_id=6231520884415267586';" title="����ʽ�Ҹ�"><img src="images/v8.jpg" alt="����ʽ�Ҹ�" style="width:32px;height:32px"></a>
                                        </div>
                                        <div class="l_avator">
                                    		<a rel="nofollow author" target="_blank" href="http://t.qq.com/lidegang4506" onclick="this.href='http://yangqq.duoshuo.com/user-url/?user_id=6231520884415267586';" title="����ʽ�Ҹ�"><img src="images/v9.jpg" alt="����ʽ�Ҹ�" style="width:32px;height:32px"></a>
                                        </div>
                                        <div class="l_avator">
                                    		<a rel="nofollow author" target="_blank" href="http://t.qq.com/lidegang4506" onclick="this.href='http://yangqq.duoshuo.com/user-url/?user_id=6231520884415267586';" title="����ʽ�Ҹ�"><img src="images/v10.jpg" alt="����ʽ�Ҹ�" style="width:32px;height:32px"></a>
                                        </div>
                                         <div class="l_avator">
                                    		<a rel="nofollow author" target="_blank" href="http://t.qq.com/lidegang4506" onclick="this.href='http://yangqq.duoshuo.com/user-url/?user_id=6231520884415267586';" title="����ʽ�Ҹ�"><img src="images/v6.gif" alt="����ʽ�Ҹ�" style="width:32px;height:32px"></a>
                                        </div>
                                        <div class="l_avator">
                                    		<a rel="nofollow author" target="_blank" href="http://t.qq.com/lidegang4506" onclick="this.href='http://yangqq.duoshuo.com/user-url/?user_id=6231520884415267586';" title="����ʽ�Ҹ�"><img src="images/v7.jpg" alt="����ʽ�Ҹ�" style="width:32px;height:32px"></a>
                                        </div>
                                        <div class="l_avator">
                                    		<a rel="nofollow author" target="_blank" href="http://t.qq.com/lidegang4506" onclick="this.href='http://yangqq.duoshuo.com/user-url/?user_id=6231520884415267586';" title="����ʽ�Ҹ�"><img src="images/v8.jpg" alt="����ʽ�Ҹ�" style="width:32px;height:32px"></a>
                                        </div>
                                        <div class="l_avator">
                                    		<a rel="nofollow author" target="_blank" href="http://t.qq.com/lidegang4506" onclick="this.href='http://yangqq.duoshuo.com/user-url/?user_id=6231520884415267586';" title="����ʽ�Ҹ�"><img src="images/v9.jpg" alt="����ʽ�Ҹ�" style="width:32px;height:32px"></a>
                                        </div>
                                        <div class="l_avator">
                                    		<a rel="nofollow author" target="_blank" href="http://t.qq.com/lidegang4506" onclick="this.href='http://yangqq.duoshuo.com/user-url/?user_id=6231520884415267586';" title="����ʽ�Ҹ�"><img src="images/v10.jpg" alt="����ʽ�Ҹ�" style="width:32px;height:32px"></a>
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