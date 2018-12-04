<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>IBS</title>
    <link rel="shortcut icon" href="./favicon.ico">
    <link rel="stylesheet" href="{{asset('home/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/cssreset.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/header_footer.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/common/index.css')}}">
    <!--[if lt IE 9]>
    <script src="{{asset('home/js/html5shiv.min.js')}}"></script>
    <script src="{{asset('home/js/respond.min.js')}}"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top index_nav">
   <div class="container">
        <div class="navbar-header">
            <a href="index.blade.php" class="my-logo">
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
<!--my-main start-->
<div class="my-main">
    <div class="banner_img">
        <img src="{{asset('home/images/banner.png')}}" alt="">
    </div>
    <div class="about_us">
        <div class="container">
            <div class="row text-center title">
                <div class="col-xs-12 text-center">
                    <h2>公司简介</h2>
                    <span class="icon-bar"></span>
                </div>
            </div>
            <div class="row company_content">
                <div class="col-xs-12 col-lg-10 col-lg-push-1 company_intro">
                    <p>北京中科生仪科技有限公司成立于2009年，公司位于北京全国科技创新中心“三城一区”主平台中的北京经济技术开发区，并作为开发区生物医药板块中基因技术创新中心的核心企业参与相关产业的规划与布局。</p>
                    <p>中科生仪以先进生命科学及医学诊断技术和装备的研发、生产、销售、服务作为主营业务，其中侧重点集中于便携式核酸分子检测设备、实用化POCT设备、基因测序技术及装备，以及相应的配套试剂产品等原始创新研发和产业化工作，力求满足我国精准医学和现场化检测等市场领域对国产化技术装备的迫切需求。</p>
                    <p>中科生仪迄今完成或承担多项省部级科技攻关项目，已申请国家发明专利十余项，拥有数件软件著作权，形成了具有可持续性的自主知识产权布局。</p>
                    <p class="text-right"><a href="./aboutUs/company_introduce.html">查看详情>></a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="news">
        <div class="container">
            <div class="row text-center title">
                <div class="col-xs-12 text-center">
                    <h2>行业动态</h2>
                    <span class="icon-bar"></span>
                </div>
            </div>
            <div class="row company_content">

                <div class="hidden-xs col-sm-5 news_left">
                    <div class="img_show">
                        <img src="{{$news->art_thumb}}" alt="">
                    </div>
                    <div class="word_show">
                        <h4>{{$news->art_title}}</h4>
                        <a href="{{url('newsInfo',['news_id'=>$news->art_id])}}">【详情】</a>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-7 news_right">
                    @foreach($list as $key=>$li)
                    <div class="row news_list">
                        <div class="col-xs-3 col-md-2 ind">
                            <h1 class="text-center"><span>0{{$key+1}}</span></h1>
                        </div>
                        <div class="col-xs-5 col-sm-9 col-md-10 col-lg-7 tit">
                            <h5>
                                <a href="{{url('newsInfo',['news_id'=>$li->art_id])}}">{{$li->art_title}}</a>
                            </h5>
                        </div>
                        <div class="col-xs-4 hidden-sm hidden-md col-lg-3 tim"><h5>{{$li->time}}</h5></div>
                    </div>
                    @endforeach
                    <div class="text-right">
                        <span><a href="{{url('newsList')}}">【更多】</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
<!--my-main end-->
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
                    <li><a href="{{url('GoodsClassNameList')}}" >研发中心</a></li>
                    <li><a class="disabled" disabled="true">技术支持</a></li>
                    <li><a href="{{url('about')}}">关于我们</a></li>
                    <li><a href="./contactUs/contact.html">联系我们</a></li>
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
</body>
</html>