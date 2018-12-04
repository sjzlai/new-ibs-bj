<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>博美开泰</title>
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" href="{{asset('home/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/cssreset.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/header_footer.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/common/aboutus.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/common/news.css')}}">
    <!--[if lt IE 9]>
    <script src="{{asset('home/js/html5shiv.min.js')}}"></script>
    <script src="{{asset('home/js/respond.min.js')}}"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top index_nav">
   <div class="container">
        <div class="navbar-header">
            <a href="../index.html" class="my-logo"><img src="{{asset('home/images/logo.png')}}" alt=""></a>
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
                <li><a href="{{url('goodsInfo/20')}}" >研发中心</a></li>
                <li><a class="disabled" disabled="true">技术支持</a></li>
                <li><a href="{{url('about')}}"  class="active">关于我们</a></li>
                <li><a href="{{url('contact')}}">联系我们</a></li>
            </ul>
        </div>
   </div>
</nav>

<!--about_us start-->

<div class="common company_news">
    <div class="inner_banner">
        <img src="{{asset('home/images/banner.png')}}" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="hidden-xs hidden-sm col-md-3 left_side">
                <div class="bgc">
                    <div class="common_bar">
                        <h3>公司新闻</h3>
                        <h5>About Us</h5>
                    </div>
                    <div class="common_list">
                        <ul class="lists_bar">
                            <li class="active"><a href="{{url('about')}}">公司介绍</a></li>
                            <li><a href="{{url('recruit')}}">人才招聘</a></li>
                            <li><a href="{{url('newsList')}}">行业动态</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 hidden-md hidden-lg left_mini">
                <div class="list_mini">
                    <ul class="mini_bar">
                        <li class="active"><a href="{{url('about')}}">公司介绍</a></li>
                        <li><a href="{{url('recruit')}}">人才招聘</a></li>
                        <li><a href="{{url('newsList')}}">行业动态</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-md-9 news_right right_side">
                <h3>公司新闻</h3>
                @foreach($newsInfo as $news)
                <div class="bgc">
                    <h2 class="news_title">{{$news->art_title}}</h2>
                    <h5 class="news_time">
                        <span>编辑：博美</span>&emsp;&emsp;
                        <span>时间：{{date('Y:m:d H:i:s',$news->art_time)}}</span>
                    </h5>
                    <div class="news_img">
                        <img src="{{asset('home/images/news_inner.png')}}" alt="">
                    </div>
                    <div class="detail_content">
                      {!! $news->art_content !!}
                    </div>
                    <div class="pages">
                        <ul class="pager">
                            <li class="previous"><a href="{{url('newsInfo',['news_id'=>$news->art_id-1])}}">上一篇</a></li>
                            <li class="next"><a href="{{url('newsInfo',['news_id'=>$news->art_id+1])}}">下一篇</a></li>
                        </ul>
                        <div class="goto_list"><a href="{{url('newsList')}}">新闻列表</a></div>
                    </div>
                </div>
                @endforeach
            </div>
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
                    <li><a href="/">首页</a></li>
                    <li><a href="{{url('goodsInfo/20')}}" >研发中心</a></li>
                    <li><a class="disabled" disabled="true">技术支持</a></li>
                    <li><a href="{{url('about')}}"  class="active">关于我们</a></li>
                    <li><a href="{{url('contact')}}">联系我们</a></li>
                </ul>
           </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 beian">
                <p class="text-center">天津博美开泰生物科技医药有限公司 © 版权所有京ICP备案19283746&emsp;&emsp;&emsp;&emsp;京公网安备</p>
            </div>
        </div>
    </div>
    
</footer>

<script src="{{asset('home/js/jquery-1.11.3.js')}}"></script>
<script src="{{asset('home/js/bootstrap.js')}}"></script>
</body>
</html>