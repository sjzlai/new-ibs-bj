<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>IBS</title>
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" href="{{asset('home/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/cssreset.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/header_footer.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/breadcrumb.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/common/product.css')}}">
    <!--[if lt IE 9]>
    <script src="{{asset('home/js/html5shiv.min.js')}}"></script>
    <script src="{{asset('home/js/respond.min.js')}}"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top index_nav">
   <div class="container">
        <div class="navbar-header">
            <a href="../index.html" class="my-logo">
                <img src="{{asset('home/images/logo.png')}}" alt="">
                <div class="logo_word">
                    <div>&nbsp;北京中科生仪科技有限公司</div>
				    <div>Beijing Integrated BioSystems Co., Ltd.</div>
                </div>
            </a>
            <a href="#menu" class="navbar-toggle" data-toggle="collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
        </div>
        <div id="menu" class="collapse navbar-collapse">
            <!--菜单-->
            <ul class="nav navbar-nav navbar-right text-center">
                <li><a href="/">首页</a></li>
                <li><a href="{{url('goodsInfo/20')}}"  class="active">研发中心</a></li>
                <li><a class="disabled" disabled="true">技术支持</a></li>
                <li><a href="{{url('about')}}">关于我们</a></li>
                <li><a href="{{url('contact')}}">联系我们</a></li>
            </ul>
        </div>
   </div>
</nav>
<!--about_us start-->
<div class="common product_manage">
    <div class="inner_banner">
        <img src="{{asset('home/images/inner.png')}}" alt="">
    </div>
    <div class="lung-breadcrumb">
        <span>研发中心</span><span>产品名称</span>
    </div>
    <div class="container-fluid product_show">
        <div class="row">
            <!--产品页·····左侧（pc）-->
            <div class="hidden-xs hidden-sm col-md-4 col-lg-3 left_side">
                <div class="bgc">
                <!--↓折叠菜单·····开始-->
                <div class="panel-group" id="accordion" width="100%">
                    @foreach($data['class'] as $value)
                    <div class="panel panel-default">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$value->gc_id}}">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    {{$value->gc_title}}
                                    <img src="{{asset('home/images/title_show.png')}}" alt="">
                                </h4>
                            </div>
                        </a>  
                        <div id="collapse{{$value->gc_id}}" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul class="pro_detail">
                                    @foreach($value['goodsName'] as $va)
                                    <li><a href="{{url('goodsInfo',['g_id'=>$va->g_id])}}">{{$va->g_name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{--<div class="panel panel-default">                       --}}
                        {{--<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"> --}}
                            {{--<div class="panel-heading">--}}
                                {{--<h4 class="panel-title">--}}
                                    {{--现场级核酸提取分析系统--}}
                                    {{--<img src="{{asset('home/images/title_show.png')}}" alt="">--}}
                                {{--</h4>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                        {{--<div id="collapseTwo" class="panel-collapse collapse">--}}
                            {{--<div class="panel-body">--}}
                                {{--<ul class="pro_detail">--}}
                                    {{--<li><a href="">微流控芯片（lab-on-chip）</a></li>--}}
                                    {{--<li><a href="">扩增酶冷冻干燥技术</a></li>--}}
                                    {{--<li><a href="">双级温控系统</a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="panel panel-default">--}}
                        {{--<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">--}}
                            {{--<div class="panel-heading">--}}
                                {{--<h4 class="panel-title">--}}
                                    {{--手持式等温扩增仪--}}
                                    {{--<img src="{{asset('home')}}/images/title_show.png" alt="">--}}
                                {{--</h4>--}}
                            {{--</div>--}}
                        {{--</a>                            --}}
                        {{--<div id="collapseThree" class="panel-collapse collapse">--}}
                            {{--<div class="panel-body">--}}
                                {{--<ul class="pro_detail">--}}
                                    {{--<li><a href="">手持式等温扩增仪</a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
                <!--↑折叠菜单·····结束-->
                </div>
            </div>

            <!--产品页·····左侧（移动端）-->
            <div class="col-xs-12 hidden-md hidden-lg left_mini">
                <div class="common_list dropdown">
                    <button type="button" class="btn dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown">产品列表
                        <span class="caret"></span>
                    </button>
                    <ul class="small lists_bar dropdown-menu" role="menu" aria-labelledby="dropdownMenu1"">
                        <li role="presentation" class="active"><a href="javascript:void(0);">便携式猪肉检测仪</a></li>
                        <li role="presentation"><a href="javascript:void(0);">产品二</a></li>
                        <li role="presentation"><a href="javascript:void(0);">产品三</a></li>
                    </ul>
                </div>
            </div>
            <!--产品页·····右侧-->
            <div class="col-xs-12 col-md-8 col-lg-9 right_side">

                <div class="row pro_row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="text-center pro_img">
                            @foreach($goodsInfo['photo'] as $goods)
                            <img src="{{asset($goods->gp_photo)}}" alt="" class="img_big">
                            <div class="carousel">
                                <img src="{{asset('home/images/left.png')}}" alt="" class="click_left">
                                <img src="{{asset('home/images/right.png')}}" alt="" class="click_right">
                                <ul class="carousel_list">
                                    <li class="carousel_item">
                                        <img src="{{asset($goods->gp_thum)}}" alt="" class="img_small">
                                    </li>
                                </ul>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        @foreach($goodsInfo['info'] as $goods)
                        <div class="pro_work">
                            <h3 class="pro_name">{{$goods->g_name}}</h3>
                            <p class="pro_word">{{$goods->g_jian}}</p>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="row holder_bar">
                    <div class="col-xs-4">.</div>
                    <div class="col-xs-4">.</div>
                    <div class="col-xs-4">.</div>
                </div>
                @foreach($goodsInfo['info'] as $goods)
                <div class="pro_content">
                @php echo $goods->g_content @endphp
                </div>
                @endforeach
            </div>

            {{--产品结束--}}

        </div>
    </div>
</div>    
<!--about_us end-->
<!--尾部-->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 bottom_logo text-center">
                <img src="{{asset('home/images/logo.png')}}" alt="">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
           <div class="hidden-xs col-sm-10 col-sm-push-1 text-center">
                <ul class="bottom_path text-center">
                    <li><a href="/" class="active">首页</a></li>
                    <li><a href="{{url('goodsInfo/20')}}" >研发中心</a></li>
                    <li><a class="disabled" disabled="true">技术支持</a></li>
                    <li><a href="{{url('about')}}">关于我们</a></li>
                    <li><a href="{{url('contact')}}">联系我们</a></li>
                </ul>
           </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 beian">
                <p class="text-center">
                    <span>北京中科生仪科技有限公司© 京ICP备17037815号
                    </span>
                    <span>京公网安备</span>
                </p>
            </div>
        </div>
    </div>
    
</footer>

<script src="{{asset('home/js/jquery-1.11.3.js')}}"></script>
<script src="{{asset('home/js/bootstrap.js')}}"></script>
<script src="{{asset('home/js/common/product.js')}}"></script>
<script>
    $(".panel").on('click',function(){
// $(this).find(".panel-title").find("img").toggleClass('active');
        var nex = $(this).find('.panel-collapse');
        var nexImg = $(this).siblings().find("a>.panel-heading>.panel-title>img");
        var img = $(this).find("a>.panel-heading>.panel-title>img");
        if(nex.hasClass('in')){
            img.removeClass('active');
        }else {
            img.addClass('active');
            nexImg.removeClass('active');
        }
    })
</script>
</body>
</html>