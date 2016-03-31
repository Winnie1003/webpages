// JavaScript Document

function getStyle(obj,attr){
	if(obj.currentStyle){
		return obj.currentStyle[attr];
		}
	else{
		return getComputedStyle(obj,false)[attr];
		}
	
	
	}	
	
function startMove(obj,json,fn){
	clearInterval(obj.timer);
    obj.timer=setInterval(function(){
		var bStop=true;
		
		for(var attr in json){
			
			  //如果传来的attr是opacity  使用parseFloat
		if(attr=='opacity'){
			var cul=parseInt(parseFloat(getStyle(obj,attr))*100);
			}  	
		else{
			var cul=parseInt(getStyle(obj,attr));
			}
		
		
		var speed=(json[attr]-cul)/15;
		speed=speed>0?Math.ceil(speed):Math.floor(speed);
		
		if(cul!=json[attr]){
			
			bStop=false;
			}
		
		
		if(attr=='opacity'){
			obj.style[attr]=(cul+speed)/100;
			}
			else{
				obj.style[attr]=cul+speed+'px';
				}
			}
		 
		 if(bStop){
			clearInterval(obj.timer);
			if(fn){
				fn();
				}
	          }
		},30)
	}