// window.onresize=window.onscroll=window.onload=function(){
// 	var odiv=document.getElementById('elevator');
// 	var scrollTop=document.documentElement.scrollTop||document.body.scrollTop;
// 	var t=scrollTop+(document.documentElement.clientHeight-odiv.offsetHeight)/2;
	
// 	//把目标值设置成整数
// 	// start(parseInt(t));
// 	startMove(odiv,{top:parseInt(t)});
// }

// var timer=null;
// function start(target){
// 	var odiv=document.getElementById('elevator');
// 	clearInterval(timer);
	
// 	timer=setInterval(function(){
// 		var speed=(target-odiv.offsetTop)/8;
// 		speed=speed>0?Math.ceil(speed):Math.floor(speed);
		
		
// 		if(odiv.offsetTop==target)
// 		{
// 			clearInterval(timer);
// 			}else{
// 				odiv.style.top=odiv.offsetTop+speed+'px';
// 				document.title=target+':'+odiv.offsetTop;
				
// 			}
			
// 		},30)
// 	}

	
