

$(function(){

	var $document = $(document);
	var $wrap = $('.wrap');
	var $btn = $('.btn ul li');
	var $part = $('.part')

	var index = 0; 
	var Time = new Date();
	var maxPartIndex = $('.part').length-1;
	var bodyHeight = $('body').height();
	
	
	$('.part1').addClass('on');

	//当窗口被调整时
	$(window).resize(function(){
	
		bodyHeight = $('body').height();
		$wrap.css({'top':-index*bodyHeight});
	})


	//当鼠标滚动时
	$document.mousewheel(function(e,r){
			
			$part.eq(index).removeClass('on');

			if(new Date()-Time>1000){
					
				Time = new Date();
				r<0?index++:index--;
			
			if(index<0){
			
				index = 0;
			
			}

			if(index>maxPartIndex){
			
				index = maxPartIndex;

			}
			
			roll();
		}
	})

	//当按钮被点击时
	$btn.click(function(){

		$part.eq(index).removeClass('on');
		
		var $this = $(this);
		index = $this.index();
		
		roll();
	})

	//滚动封装
	function roll(){
	
		$btn.eq(index).addClass('on').siblings().removeClass('on');
		$wrap.animate({'top':-index*bodyHeight},1000,function(){
			
			$part.eq(index).addClass('on').siblings().removeClass('on');
		})
	}
})