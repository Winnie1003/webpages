$(function(){
	var odiv=document.getElementById('bannerlist');
	var oOl = odiv.getElementsByTagName('ol')[0];
	var aLiOl = oOl.getElementsByTagName('li');
	
	var oUl = odiv.getElementsByTagName('ul')[0];
	var aLiUl = oUl.getElementsByTagName('li');
	
	for(var i=0;i<aLiOl.length;i++){
		aLiOl[i].index = i;
		aLiOl[i].onmouseover = function(){
			for(var i=0;i<aLiOl.length;i++){
				aLiOl[i].className = '';
				startMove(aLiUl[i] , { opacity : 0 } , function(){
					
					// this.style.display = 'none';
					
				});
				aLiUl[i].style.display='none';
			}
			this.className = 'active';
			aLiUl[this.index].style.display = 'block';
			startMove( aLiUl[this.index] , {opacity:100} );
		};
	}

	//侧栏滚动
	$(window).scroll(function(){
		var scrolltop=$(document).scrollTop();
		var winheight=$(window).height();
		var odivheight=$('#elevator').height();
		var t=scrolltop+(winheight-odivheight)/2;
		console.log(parseInt(t));
		startMove($('.elevator')[0],{top:parseInt(t)});
	});


	$('#h_nav_ul').find('li').mouseover(function(){
            $(this).find('.sub_menu').show();
        });
        $('#h_nav_ul').find('li').mouseout(function(){
            $(this).find('.sub_menu').hide();
        });


    // 图文咨询选项卡切换
 	$('#banner-block .tab-content>ul>li').mouseover(function(){
	 	$('#banner-block .tab-content>ul>li').removeClass('active');
	 	$(this).addClass('active');
	 	$('#banner-block .tab-content>div').hide();
	 	$('#banner-block .tab-content>div').eq($(this).index()).show();
 		
 });


 	// 实用工具栏变色
 	$(window).scroll(function(){
	   	var height=($(window).height())/2;
		var scrolltop=$(document).scrollTop();
		var Top=scrolltop+height;
		var hTop=$('.tool>h1').offset().top;
	   	console.log(hTop+'滚动条'+Top);
	   	console.log(Top>hTop);
	   	if(Top>hTop){
	   		$('.tool>h1').addClass('change');
	   	}
 	});



})