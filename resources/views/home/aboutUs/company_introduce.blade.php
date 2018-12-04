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
    <link rel="stylesheet" href="{{asset('home/css/common/aboutus.css')}}">
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
                <li><a href="{{url('goodsInfo/20')}}" >研发中心</a></li>
                <li><a class="disabled" disabled="true">技术支持</a></li>
                <li><a href="{{url('about')}}"  class="active">关于我们</a></li>
                <li><a href="{{url('contact')}}">联系我们</a></li>
            </ul>
        </div>
   </div>
</nav>
<!--my_main start-->
<div class="common about_us">
    <!--banner-->
    <div class="inner_banner">
        <img src="{{asset('home/images/banner.png')}}" alt="">
    </div>
    <!--breadcrumb-->
    <div class="lung-breadcrumb">
        <span>关于我们</span><span>公司介绍</span>
    </div>
    <!--主体部分-->
    <div class="container-fluid aboutus_main">
        <div class="row">
            <div class="hidden-xs hidden-sm col-md-4 col-lg-3 left_side">
                <div class="bgc">
                    <div class="common_bar">
                        <h3>关于我们</h3>
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
            <div class="col-xs-12 col-md-8 col-lg-9 right_side">
                @foreach($company as $com)
                <div class="introduce_content">
                @php echo  $com->content @endphp
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>    
<!--my_main end-->
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
<script src="{{asset('home/js/common/aboutus.js')}}"></script>

</body>
</html>