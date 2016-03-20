

$(function(){

	var $input = $("#comment .comment_con .txt");
	var $btn = $("#comment .comment_con .btn a");
	var $Bar = $("#video .Bar");

	var val = "";
	var _top = 0;
	
	$btn.click(function(){
	
		val = $input.val();

		if(val==""){
			
			alert("亲，您忘记输内容了哦~");
		}else{
			
			//获取每一个p
			var $p = $("<p>"+val+"</p>");
			
			//插入p
			$Bar.append($p);
			
			//获取Bar下的所有p
			var $all_p = $('p',$Bar);	
			
			$all_p.each(function(){
			
				$this = $(this);
				
				if(_top>$Bar.height()-40){
					_top = 0
				};

				_top += 25;

				$this.css({
				
					left : 910,
					top : _top,
					color : Color(),
				})

				$this.animate({
				
					left : -910,

				},timer(),function(){
				
					$this.remove();
				})


			})
		}
	})

	//随机获取时间
	function timer(){
		return Math.random()*5000+10000;
	}

	//随机获取颜色值
	function Color(){
		return '#' + (function(h) {
		return new Array(7 - h.length).join("0") + h
		})((Math.random() * 0x1000000 << 0).toString(16))	
	}

})