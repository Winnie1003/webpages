(function setpie1(){
    var chartPie1 = echarts.init(document.getElementById('pie1')); 
    var option = {
    title : {
        text: '货源信息（吨）',
        x:'center',
        textStyle:{
        fontSize: 14,
        fontWeight: 'bolder',
        color: '#000'
        }             
    },
    tooltip : {
                trigger: 'item',
                formatter: "{c} ({d}%)"
            },
                 
    legend: {
        orient : 'horizontal',
        x : 'center',
        y : 'bottom',
        textStyle:{
        fontSize:11,
        },   
        itemWidth:10, 
        itemHeight:10,         
        data:['西湖区','东湖区','红谷滩','新建区','青山湖','高新区']
    },
    
    
    calculable : true,
    series : [
        {
            
            type:'pie',
            radius : '42%',
            center: ['50%', '45%'],
            data:[
                {value:1000, name:'西湖区'},
                {value:300, name:'东湖区'},
                {value:200, name:'红谷滩'},
                {value:300, name:'新建区'},
                {value:240, name:'青山湖'},
                {value:224, name:'高新区'}
            ]
        }
    ]
};
                    
    chartPie1.setOption(option);
})();


/*--------------------------------------------------------------*/
(function setpie2(){
    var chartPie2 = echarts.init(document.getElementById('pie2')); 
    var option = {
     title : {
        text: '车辆分布（辆）',
        x:'center',
        textStyle:{
        fontSize: 14,
        fontWeight: 'bolder',
        color: '#000'
        }             
    },
     tooltip : {
        trigger: 'item',
        formatter: "{a} <br/>{b} : {c} ({d}%)"
    },
    legend: {
        orient : 'horizontal',
        x : 'center',
        y : 'bottom',
        textStyle:{
        fontSize:11,
        },   
        itemWidth:10, 
        itemHeight:10,         
        data:['西湖区','东湖区','红谷滩','新建区','青山湖']
    },
    
    calculable : true,
    series : [
        {
            
            type:'pie',
            center: ['50%', '45%'],
            radius : ['30%', '50%'],
            itemStyle : {
                normal : {
                    label : {
                        show : false
                    },
                    labelLine : {
                        show : false
                    }
                },
                emphasis : {
                    label : {
                        show : true,
                        position : 'center',
                        textStyle : {
                            fontSize : '10',
                            fontWeight : 'bold'
                        }
                    }
                }
            },
            data:[
                {value:35, name:'西湖区'},
                {value:24, name:'东湖区'},
                {value:12, name:'红谷滩'},
                {value:13, name:'新建区'},
                {value:16, name:'青山湖'}
                
            ]
        }
    ]
};
                    
    chartPie2.setOption(option);
})();

/*---------------------------------------------------------------------*/

(function setbar1(){
    var chartBar1 = echarts.init(document.getElementById('bar1')); 
    var option = {
    grid: {y: 40, y2:50, x2:10,x:55,borderWidth:0,backgroundColor:'rgba(194,13,49,0.1)'},
    title : {
        text: '仓储面积（平方米）',
        x:'center',
        textStyle:{
            fontSize: 14,
            fontWeight: 'bolder',
            color: '#000'
        }             
    },
     
        tooltip : {
        trigger: 'axis',
        axisPointer : {            // 坐标轴指示器，坐标轴触发有效
            type : 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
        },
        formatter: function (params) {
            var tar = params[0];
            return tar.name + '<br/>' + tar.seriesName + ' : ' + tar.value;
        }
    },
   
    xAxis : [
        {
            type : 'category',
            splitLine: {show:false},
            axisLabel :{formatter:'{value}',interval:0,rotate:90},
            data : ['西湖区','东湖区','红谷滩','新建区','青山湖','高新区']
        }
    ],
    yAxis : [
        {
            type : 'value'
        }
    ],
    series : [
      
        {
            name:'仓储面积',
            type:'bar',         
            itemStyle: {
                normal: {
                    color: 'rgba(18,53,85,0.8)',
                    label : {
                        show: false
                    }
                }
            },
            
            data:[100000, 22000, 23000,90000, 60000, 220000]
        }
    ]
};
                    
    chartBar1.setOption(option);
})();

/*---------------------------------------------------------------------------*/
(function setbar2(){
    var chartBar2 = echarts.init(document.getElementById('bar2')); 
    var option = {
    grid: {y: 40, y2:50, x2:20,x:55,borderWidth:0,backgroundColor:'rgba(18,53,85,0.1)'},
    title : {
        text: '物流企业分布',
        x:'center',
        textStyle:{
            fontSize: 14,
            fontWeight: 'bolder',
            color: '#000'
        }             
    },
     
        tooltip : {
        trigger: 'axis',
        axisPointer : {            // 坐标轴指示器，坐标轴触发有效
            type : 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
        },
        formatter: function (params) {
            var tar = params[0];
            return tar.name + '<br/>' + tar.seriesName + ' : ' + tar.value;
        }
    },
   
    yAxis : [
        {
            type : 'category',
            splitLine: {show:false},
            data : ['安义','西湖','青山湖','高新','新建','红谷滩','南昌县']
        }
    ],
    xAxis : [
        {   axisLabel :{formatter:'{value}',interval:0,rotate:90},
            type : 'value'
        }
    ],
    series : [
      
        {
            name:'物流企业分布',
            type:'bar',         
            itemStyle: {
                normal: {
                    color: 'rgba(194,13,49,0.8)',
                    label : {
                        show: false
                    }
                }
            },
            
            data:[100, 250, 200,120, 130, 500,310,205]
        }
    ]
};
                    
    chartBar2.setOption(option);
})();
/*-------------------------------------------------------------------------*/
(function setline(){
    var chartBar2 = echarts.init(document.getElementById('line1')); 
    var option = {
        grid: {y: 40, y2:50, x2:20,x:55,borderWidth:0},
     title : {
        text: '2015年公路运量',
        x:'center',
        textStyle:{
            fontSize: 14,
            fontWeight: 'bolder',
            color: '#000'
        }             
    },
    tooltip : {
        trigger: 'axis'
    },
    legend: {
         orient : 'horizontal',
        x : 'center',
        y : 'bottom',
        data:['运量']

    },
   
    calculable : true,
    xAxis : [
        {
            type : 'category',
            boundaryGap : false,
            data : ['1月','2月','3月','4月','5月']
        }
    ],
    yAxis : [
        {
            type : 'value',
            axisLabel : {
                formatter: '{value}'
            }
        }
    ],
    series : [
        {
            name:'运量',
            type:'line',
            data:[100000, 150000, 160000, 140000, 130000],
          
          
        }
       
    ]
};
                    
    chartBar2.setOption(option);
})();