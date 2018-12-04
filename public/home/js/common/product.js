$(function(){
    //加载页面时执行一次
    changeWidth();
    //监听浏览器宽度的改变
    window.onresize = function(){
        changeWidth();
    };
    function changeWidth(){
        // ----改变主体宽度----// 
        var goalMain = $('div.container-fluid.product_show');
        var goalBread = $('div.lung-breadcrumb');
        //获取网页可见区域宽度
        var docWidth = $(window).width();
        if(docWidth >= 1600){
            //动态设置样式
            goalMain.css({
                width:'80%'
            });
            goalBread.css({
                width:'78%'
            });
        }else {
            goalMain.css({
                width:'100%'
            });
            goalBread.css({
                width:'98%'
            });
        }
        // ----左侧栏高度自适应----// 
        var goalBar = $('.left_side>.bgc');
        var goalContent = $('.right_side');
        if(goalBar.height() <= goalContent.height()){
            goalBar.css({
                height:goalContent.height()
            })
        }else {
            goalBar.css({
                height:goalContent.height()
            })
        }
    }
}())