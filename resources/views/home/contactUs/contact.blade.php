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
    <link rel="stylesheet" href="{{asset('home/css/common/contactUs.css')}}">
    <!--[if lt IE 9]>
    <script src="{{asset('home/js/html5shiv.min.js')}}"></script>
    <script src="{{asset('home/js/respond.min.js')}}"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top index_nav">
   <div class="container">
        <div class="navbar-header">
            <a href="/" class="my-logo">
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
                <li><a href="/" class="active">首页</a></li>
                <li><a href="{{url('goodsInfo/20')}}" >研发中心</a></li>
                <li><a class="disabled" disabled="true">技术支持</a></li>
                <li><a href="{{url('about')}}">关于我们</a></li>
                <li><a href="{{url('contact')}}">联系我们</a></li>
            </ul>
        </div>
   </div>
</nav>
<!--contact_us start-->
<div class="common contact_us">
    <div class="inner_banner">
        <img src="{{asset('home/images/banner.png')}}" alt="">
    </div>
    <div class="lung-breadcrumb">
        <span>首页</span><span>联系我们</span>
    </div>
    <div class="container-fluid contact_main">
        <div class="row contact_left">
            <div class="col-xs-12 col-sm-5 col-lg-4 col-lg-push-1">
                <ul class="methods_list">
                    <li class="contact_bar">
                        <span>联系我们</span>
                        <span>Contact Us</span>
                    </li>
                    <li class="address">
                        <img src="{{asset('home/images/address_03.png')}}" alt="">
                        <span>地址：北京市经济技术开发区中和街14号</span>
                    </li>
                    <li class="youbian">
                        <img src="{{asset('home/images/youbian_07.png')}}" alt="">
                        <span>邮编：100176</span>
                    </li>
                    <li class="phone">
                        <img src="{{asset('home/images/dianhua.png')}}" alt="">
                        <span>电话：010-51029778</span>
                    </li>
                    <li class="chuanzhen">
                        <img src="{{asset('home/images/chuanzhen_12.png')}}" alt="">
                        <span>传真：010-51029778</span>
                    </li>
                    <li class="e_mail">
                        <img src="{{asset('home/images/youxiang_14.png')}}" alt="">
                        <span>邮箱：zksy@ibs-bj.com</span>
                    </li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-7 col-lg-7 col-lg-push-1 contact_right">
                <iframe src="{{url('map')}}" width="100%" height="410" frameborder="0" scrolling="no"></iframe>
            </div>
        </div>
    </div>
</div>    
<!--contact_us end-->
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

<script src="{{asset('home')}}/js/jquery-1.11.3.js"></script>
<script src="{{asset('home')}}/js/bootstrap.js"></script>
</body>
</html>