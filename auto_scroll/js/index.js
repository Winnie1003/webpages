/* 
* @Author: anchen
* @Date:   2015-08-18 13:56:36
* @Last Modified by:   anchen
* @Last Modified time: 2015-08-18 23:58:53
*/

/*首页轮播图特效*/
var _index=0;
var _qindex=0;
var clearTime = null;
$(".But span").mouseover(function(){
    clearInterval(clearTime);
    _index=$(this).index();//获取序列号
    scrollPlay();//调用播放的方法
    _qindex = _index;//把当前的值赋给作为下一次的前一个序列号
    // alert(_index);
}).mouseout(function(){
    autoPlay();
});

//右切换按钮
$(".flash a.next").click(function(){
    _index++;//序列号加1
    if(_index>5){
        _index = 0;
        _qindex = 5;
    }
    scrollPlay();
    _qindex = _index;
});

//左切换按钮
$(".flash a.prev").click(function(){
    _index--;//序列号减1
    if(_index<0){
        _qindex = 0;
        _index = 5;
    }
    scrollPlay();
    _qindex = _index;
});

autoPlay();
function autoPlay(){
    clearTime = setInterval(function(){
        _index++;//序列号加1
        if(_index>5){
            _index = 0;
            _qindex = 5;
        }
        scrollPlay();
        _qindex = _index;
        },2000);
} 

function scrollPlay(){
    $(".But span").eq(_index).addClass("hover").siblings("span").removeClass("hover");
    if(_index==0 && _qindex==5){
        next();
    }else if(_index==5 && _qindex==0){
        prev();
    }else if(_index>_qindex){//往左边滑
        // document.title="前"+_qindex+"现"+_index;
        next();
    }else if(_index<_qindex){//往右边滑
        prev();
    }
}

//下一张，左移
function next(){
    $(".scroll img").eq(_qindex).animate({"left":"-820px"},300);
    $(".scroll img").eq(_index).css("left","820px").animate({"left":"0px"},300);
};

//上一张，右移
function prev(){
    $(".scroll img").eq(_qindex).animate({"left":"820px"},300);
    $(".scroll img").eq(_index).css("left","-820px").animate({"left":"0px"},300);
}

//按钮显示隐藏
$(".flash").hover(function(){
    //显示
    $("a.prev,a.next").show();
},function(){
    $("a.prev,a.next").hide();
});