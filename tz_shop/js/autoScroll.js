		var _index = 0;
		var _qindex = 0;
		var clearTime=null;
		var ktime=new Date();//获取当前时间
		$(".b_btn span").mouseover(function(){

			clearInterval(clearTime);//鼠标移到图片上停止轮播
			_index = $(this).index();//获取当前序列号
			scrollPlay();//调用播放方法
			_qindex = _index;//把当前值赋给下一次序列号的前一个值
		}).mouseout(function(){
			autoPlay();
		});
		$("a.next").click(function(){
			_index++;
			if(_index>3){
				_index = 0;
				_qindex = 3;

			}
			scrollPlay();
			_qindex = _index;

		});

		$("a.prev").click(function(){
			_index--;
			if(_index<0){
				_qindex = 0;
				_index = 3;	
			}
			scrollPlay();
			_qindex = _index;

		});

		function scrollPlay(){
			$(".b_btn span").eq(_index).addClass("t_hover").siblings("span").removeClass("t_hover");
			if(_index==3 && _qindex==0){
				prev();	
			}else if(_index==0 && _qindex==3){
				next();
			}else if(_index>_qindex){
				next();
			}else if(_index<_qindex){
				prev();
			}
			//document.title="前"+_qindex+"现"+_index;
		}
		
		//自动轮播
		autoPlay();
		function autoPlay(){
			clearTime = setInterval(function(){
				_index++
				if(_index>3){
					_index = 0;
					_qindex = 3;
				}
				scrollPlay();
				_qindex = _index;
			},2000);
		}
		
		//上一张 向右切换
		function prev(){
			$(".b_scroll img").eq(_qindex).animate({"left":"874px"},300);
			$(".b_scroll img").eq(_index).css("left","-874px").animate({"left":"0px"},300);
		}

		//下一张 向左切换
		function next(){
			$(".b_scroll img").eq(_qindex).animate({"left":"-874px"},300);
			$(".b_scroll img").eq(_index).css("left","874px").animate({"left":"0px"},300);
		}