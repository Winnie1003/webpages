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
        	<h1 class="w_nav">
            	<span>�񡰲ݸ���һ���������ŵ��棬�͵��Ĵ��ڣ���ȥ�������������</span>
                <a href="index.php" class="n_index">��վ��ҳ</a>
                <a href="#" class="n_about">������</a>
            </h1>
            <div class="w_about">
            	<h2>Just about me</h2>
                <ul>
                    <p>�����ƣ�Ů��һ��90����ÿ��ʵ�Ů����13������ѧ���Լ����רҵ�Ӻ��µ�ϲ�����ϴ�ѧ֮��ÿ�����æµ����ʵ�����ӡ����ڻ������������ǵô�һ�Լ�ð�ź���ȥΩ��¥��ϰ�����ȵ��������ŵ���ȥ���X¥д���롣��Ȼ���̺��ۺ����࣬�����Լ�����֮�����ֳɾ͸��������Ա�ģ���Ҳ��������һ���ܹ����Ű�ȥ�Ĵ����У����뿴�ĵط����������ڵ�һ��ֻ��Ϊδ�����������̵档</p>
                    <p>
��������һ������ʧ�Ĺ��̣�����ȴ��һ�������ߣ��õ�����Զ��ʧȥ�Ķࡣ�����ѹ����ʹ�ҷ��������ɵģ�������ϲ���ĵ�Ӱ�������˸���˯�����Ĵ����������ǽ�������Ĺ������񣬵�������Ȼ��������Щ����ֻʣ�º���Ȧ�����ӣ���Ϊ����һ��ʹ����ȥҪ���Լ�����Դ�ÿһ�����顣</p>
                    <p>���⼸��Ĵ�ѧ�����г��˸�л���е���ʦ��ͬѧ֮���һ�Ҫ��л���ҵ����ѣ���лS664���ҵ��������ȣ�Ҳ��ڤڤ�о�ע�����ǻ��Ϊ���ѣ������ĸ����Ǳ����ˣ������ĸ��ķ�������ͬ������Ϊ�ⲻͬ���ǻ�����ѧϰ�ˣ������٩���֣������������ദ�ظ�����Ǣ�Žᡣ�ڼ�����Ҳ�й�Сì�ܵ���û����ô�ҾͶ�����һ�ɶ������ҵ��������Ѷ��ܴ������෴���Ҿ����Լ��������һ���������Ҹо��Լ��������ĸ������ڷܵ�һ�����Ҵ���������Ҳѧ���˺ܶࡣ</p>
                    <p>
��Ҫ�ر��лһ���ˣ��������Լ�����Щ����������Լ�˵һ�䡰�����ˡ�����No pains,no gains����һֱ����ȥ����ÿһ���£�����Դ����Լ���ѧϰ�����Ϊ���Լ������룬��Ը��Ϊ֮��иŬ�������뵱����ʵ�ֵ����죬�һ�Ц�úܿ��ġ���Ϊ�������ũ�񲮲���ׯ�ڣ�����Ĳ��־�����ĸ���������Ľ�����������໻���Ĺ�ʵ��������Ʒ�����Լ��Ĺ�ʵ��������Ȼ�����۵ġ�</p>
                </ul>
                <h2>About my blog</h2>
                <p>��  ����http://blog.csdn.net/qq_19299063 ������2014��12��12��&nbsp;&nbsp;&nbsp;&nbsp; 
                <a href="http://www.net.cn/domain/" class="blog_link" target="_blank">ע������</a>
                 </p>

                <p>�������������Ʒ�����&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="http://s.click.taobao.com/t?e=m%3D2%26s%3Dz5eBi6WTFMQcQipKwQzePCperVdZeJviEViQ0P1Vf2kguMN8XjClAlNMWqr0PJv0%2BzfprQ6FycnevVLneSIAilqVHLpX3RfWM7YdOqxZsyNXcE%2BniVLVjudn1BbglxZYxUhy8exlzcq9AmARIwX9K%2BnbtOD3UdznPV1H2z0iQv9NkKVMHClW0QbMqOpFMIvnvjQXzzpXdTHGJe8N%2FwNpGw%3D%3D" target="_blank" class="blog_link">����ռ�</a>
                </p>
                <p>��  ��PHP �۹�CMS7.0</p>
            </div>
            <div class="w_right">
            	<div class="r_about">
                	<p>������<span>WinnieLucky</span> | ���е�Angel</p>
                    <p>������������</p>
                    <p>���᣺����-�ϲ�</p>
                    <p>�־ӣ�����-�ϲ�</p>
                    <p>ѧ���������ڶ�</p>
                    <p>�ó�����ҳ��� Ӣ����� �٤</p>
                    <p>ϲ�����飺��С���ӡ�</p>
                    <p>ϲ�������֣���burning��</p>
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