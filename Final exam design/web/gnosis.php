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
        <!-- û���ҵ����ʵ�logo���������ִ��� -->
            <div id="logo">
                <h1><a href="#">����</a></h1>
            </div>
            <div id="nav">
                <ul>
                    <li id="index"><a href="index.php">��ҳ</a></li>
                    <li id="aboutme"><a href="aboutme.php">������</a></li>
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
            <div id="Con">
               <!--ͷ��ʼ-->
               <dl>
                   <dt><img src="images/my.jpg" width="100px" height="100px" /></dt>
                   <dd>�ҵĳɳ�����</dd>
               </dl>
               <!--ͷ�����--> 
        
               <!--�б�չʾ��������ʼ-->
               <div class="List">
                   <ul>
                       <li>
                       <!--label begin-->
                           <div class="label">
                               <font>12��21��</font>
                               <img src="images/tr.png" class="jt"/>
                               <span></span>
                           </div>
                        <!--label end-->
        
                        <!--���ݿ�ʼ-->
                            <div class="ListCon">
                            	<p>
                                	<img src="images/timeline1.jpg" width="142px" height="100px" alt="���һֱ����õ����ж����"/>
��һ�쵱�㷢����Զ�����ڵĿ������������ĵ��������ѳ����谭��Ļ������㵱���ĺϻ��ˣ���Ż����ף��������û��ʲô�ǲ���ģ����ʱ������Ϊ����������������������벻�����¡�ɳ���Խ�����֪��ԭ�����һֱ����õ����ж����
                                </p>
                            </div>
                        <!--���ݽ���-->
                       </li>
                       <li>
                       <!--label begin-->
                            <div class="label">
                               <font>12��10��</font>
                               <img src="images/tr.png" class="jt"/>
                               <span></span>
                            </div>
                        <!--label end-->
        
                        <!--���ݿ�ʼ-->
                            <div class="ListCon">
                            	<p>
                                	<img src="images/timeline2.jpg" width="142px" height="100px" alt="���һֱ����õ����ж����"/>
ʱ�����꣬������Ϊ�Ѿ������黳�������������౻�ҿ���ȴ��Ҳ�Ҳ��ſ���ԭ�µ����ɡ�
                                </p>
                            </div>
                        <!--���ݽ���-->
                       </li>
                       <li>
                       <!--label begin-->
                            <div class="label">
                               <font>11��31��</font>
                               <img src="images/tr.png" class="jt"/>
                               <span></span>
                            </div>
                        <!--label end-->
        
                        <!--���ݿ�ʼ-->
                            <div class="ListCon">
                            	<p>
                                	<img src="images/timeline3.jpg" width="142px" height="100px" alt="���һֱ����õ����ж����"/>
����ϰ�߹�Ӱ����л�������ļ�����Ĵ������ղ��ϵ�����������������һ����Զ��������������ഺ������һ�Ų԰׾�������ꡣΪ�Լ���һ����Ĺ�����ģ��쳾һ�Σ�����׷Ѱ��һ�й��ڰ���ʫƪ���Ӵ˳��١����������ഺ����������˭���ƿ����š�
                                </p>
                            </div>
                        <!--���ݽ���-->
                       </li>
                       <li>
                       <!--label begin-->
                            <div class="label">
                               <font>11��14��</font>
                               <img src="images/tr.png" class="jt"/>
                               <span></span>
                            </div>
                        <!--label end-->
        
                        <!--���ݿ�ʼ-->
                            <div class="ListCon">
                            	<p>
                                	<img src="images/timeline4.jpg" width="142px" height="100px" alt="���һֱ����õ����ж����"/>
�㻹�ǵ��Ǹ�����ô��������ķ��������ǵĺ��⣬
�ӱ����ʱ����֪�����еĹ����Ѳ������������������Ǹ���į�Ķ�ҹ������ʢ����������Ρ�
������Ժ����Ƕ�ԶԶ���뿪���Ǹ����ڣ��������������һƬҶ�ӣ����������˵ĳ�վ����Щ��������ȥ���ˡ�
                                </p>
                            </div>
                        <!--���ݽ���-->
                       </li>
                       <li>
                       <!--label begin-->
                            <div class="label">
                               <font>10��28��</font>
                               <img src="images/tr.png" class="jt"/>
                               <span></span>
                            </div>
                        <!--label end-->
        
                        <!--���ݿ�ʼ-->
                            <div class="ListCon">
                            	<p>
                                	<img src="images/timeline5.jpg" width="142px" height="100px" alt="���һֱ����õ����ж����"/>
ʱ�����꣬������Ϊ�Ѿ������黳�������������౻�ҿ���ȴ��Ҳ�Ҳ��ſ���ԭ�µ�����
                                </p>
                            </div>
                        <!--���ݽ���-->
                       </li>
                       <li>
                       <!--label begin-->
                            <div class="label">
                               <font>9��5��</font>
                               <img src="images/tr.png" class="jt"/>
                               <span></span>
                            </div>
                        <!--label end-->
        
                        <!--���ݿ�ʼ-->
                            <div class="ListCon">
                            	<p>
                                	<img src="images/timeline6.jpg" width="142px" height="100px" alt="���һֱ����õ����ж����"/>
���ܺ�ʱ������֮�������Լ�������˵�ǹ¶��ġ����׹�ȥ�����ǿ޹���Ц�����������ǡ�û��ʲô������ʱ�俹�⣬Ҳû��ʲô���������һ���࣬�ֻص��ļ����ز�ȥ�����죬�������������Զ�������Ǻ���ļ�����ж����ഺ���������ǻӻ���
                                </p>
                            </div>
                        <!--���ݽ���-->
                       </li>
                       <li>
                       <!--label begin-->
                            <div class="label">
                               <font>7��31��</font>
                               <img src="images/tr.png" class="jt"/>
                               <span></span>
                            </div>
                        <!--label end-->
        
                        <!--���ݿ�ʼ-->
                            <div class="ListCon">
                            	<p>
                                	<img src="images/timeline7.jpg" width="142px" height="100px" alt="���һֱ����õ����ж����"/>
���ܺ�ʱ������֮�������Լ�������˵�ǹ¶��ġ����׹�ȥ�����ǿ޹���Ц�����������ǡ�û��ʲô������ʱ�俹�⣬Ҳû��ʲô���������һ���࣬�ֻص��ļ����ز�ȥ�����죬�������������Զ�������Ǻ���ļ�����ж����ഺ���������ǻӻ���
                                </p>
                            </div>
                        <!--���ݽ���-->
                       </li>
                       <li>
                       <!--label begin-->
                            <div class="label">
                               <font>5��19��</font>
                               <img src="images/tr.png" class="jt"/>
                               <span></span>
                            </div>
                        <!--label end-->
        
                        <!--���ݿ�ʼ-->
                            <div class="ListCon">
                            	<p>
                                	<img src="images/timeline8.jpg" width="142px" height="100px" alt="���һֱ����õ����ж����"/>
���������ξ����ҽš���š��ʼ硢ÿ�������Ҷ��ǵú������һ��������Ϊ������貽��ϲ����֪������������ʵ�ġ���衱
                                </p>
                            </div>
                        <!--���ݽ���-->
                       </li>
                       <li>
                       <!--label begin-->
                            <div class="label">
                               <font>4��2��</font>
                               <img src="images/tr.png" class="jt"/>
                               <span></span>
                            </div>
                        <!--label end-->
        
                        <!--���ݿ�ʼ-->
                            <div class="ListCon">
                            	<p>
                                	<img src="images/timeline5.jpg" width="142px" height="100px" alt="���һֱ����õ����ж����"/>
�ܶ���� �ڵȴ������磬�����ѷֲ��� �������黹�Ǵ���İ���
                                </p>
                            </div>
                        <!--���ݽ���-->
                       </li>
                       <li>
                       <!--label begin-->
                            <div class="label">
                               <font>3��3��</font>
                               <img src="images/tr.png" class="jt"/>
                               <span></span>
                            </div>
                        <!--label end-->
        
                        <!--���ݿ�ʼ-->
                            <div class="ListCon">
                            	<p>
                                	<img src="images/timeline7.jpg" width="142px" height="100px" alt="���һֱ����õ����ж����"/>
ÿ���˶��л�Ƣ�����ҵĻ�Ƣ�����ڱ��Լ������������ʱ���ܿ���ס�Լ�����ȴ�޷����Ʊ��ˡ���������ǫ�ö��ܻ�ȡԭ�£�Ҳ������������
                                </p>
                            </div>
                        <!--���ݽ���-->
                       </li>
                   </ul>
               </div>
               <!--�б�չʾ����������-->
            </div>
        </div>
    </div>
<div id="footer">
	
</div>
</body>	
</html>	