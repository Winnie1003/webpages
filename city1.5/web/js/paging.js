		function page(opt){
			if(!opt.id){return false;}
			var obj = document.getElementById(opt.id);
			var nowPage = opt.nowPage || 1;
			var allPage = opt.allPage || 5;
			var callBack = opt.callBack || function(){};

			if(allPage){
				var oA = document.createElement('a');
				oA.href = '#1';
				oA.innerHTML="首页"
				obj.appendChild(oA);
			}
			if(nowPage>=2){
				var oA = document.createElement('a');
				oA.href = '#'+(nowPage-1);
				oA.innerHTML="上一页"
				obj.appendChild(oA);
			}
			
			if(allPage<=5){
				for(var i = 1; i<=allPage; i++){
					var oA = document.createElement('a');
					oA.href = "#"+i;
					if(nowPage==i){
						oA.innerHTML = i;
						oA.className='yangshi';
					}else{
						oA.innerHTML = i;
					}
				
					obj.appendChild(oA);
				}
			}else{
				for (var i = 1; i <= 5; i++) {
					var oA = document.createElement('a');
					if(nowPage==1 || nowPage==2){
						oA.href = '#' + i;
						if(nowPage==i){
							oA.innerHTML = i;
							oA.className='yangshi';
						}else{
							oA.innerHTML = i;
						}
					}else if((allPage-nowPage)==0 || (allPage-nowPage)==1){
						oA.href = '#'+(allPage-5+i);
						if((allPage-nowPage)==0 && i==5){
							oA.innerHTML = (allPage-5+i);
							oA.className='yangshi';
						}else if((allPage-nowPage)==1 && i==4){
							oA.innerHTML = (allPage-5+i);
							oA.className='yangshi';
						}else{
							oA.innerHTML = (allPage-5+i);
						}
					}else{
						oA.href = '#' + (nowPage - 3 + i);
						if(i==3){
							oA.innerHTML = (nowPage-3+i);
							oA.className='yangshi';
						}else{
							oA.innerHTML = (nowPage-3+i);
						}
					}
					
					obj.appendChild(oA);
				}
			}
			if((allPage-nowPage)>=1){
				var oA = document.createElement('a');
				oA.href = '#'+(nowPage+1);
				oA.innerHTML="下一页"
				obj.appendChild(oA);
			}
			if(nowPage>=1){
				var oA = document.createElement('a');
				oA.href = '#'+allPage;
				oA.innerHTML="末页"
				obj.appendChild(oA);
			}
			if(nowPage>=1){
				var bText = document.getElementById('page-tum');
				bText.value = nowPage;
			}

			callBack(nowPage,allPage);

			var bText = document.getElementById('page-tum');
			var oBtn = document.getElementById('page-btn');
			var nPage = document.getElementById('now-page');
			var aPage = document.getElementById('all-page');
			aPage.innerHTML = allPage; 

			var aA = obj.getElementsByTagName('a');
			for(var i=0; i<aA.length; i++){
				aA[i].onclick=function(){
					var nowPage = parseInt(this.getAttribute('href').substring(1));
					
					obj.innerHTML='';
					page({
						id : opt.id,
						nowPage : nowPage,
						allPage : allPage,
						callBack : callBack
					});
					
					bText.value = nowPage;
					nPage.innerHTML = nowPage;
					return false;
				}
			}
			oBtn.onclick=function(){
				if(bText.value>=allPage){
					var nowPage = 10;
				}else if(bText.value<1){
					var nowPage = 1;
				}else{
					var nowPage = bText.value;
				}
				obj.innerHTML='';
				page({
					id : opt.id,
					nowPage : nowPage,
					allPage : allPage,
					callBack : callBack
				});
				nPage.innerHTML = nowPage;
				return false;
			}
		}
		

