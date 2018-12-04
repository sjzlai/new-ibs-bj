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
                <li><a href="/" class="active">首页</a></li>
                <li><a href="{{url('goodsInfo/20')}}" >研发中心</a></li>
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
                            <img src="{{asset('home/images/1-1.png')}}" alt="" class="img_big">
                            <div class="carousel">
                                <img src="{{asset('home/images/left.png')}}" alt="" class="click_left">
                                <img src="{{asset('home/images/right.png')}}" alt="" class="click_right">
                                <ul class="carousel_list">
                                    <li class="carousel_item">
                                        <img src="{{asset('home/images/1-1.png')}}" alt="" class="img_small">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="pro_work">
                            <h3 class="pro_name">微流控芯片（lab-on-chip）</h3> 
                            <p class="pro_word">集成样品核酸提取、纯化、扩增和检测过程的一体化微流控芯片，与现场级核酸提取分析系统配套使用，实现高度自动化，减少人工操作，控制污染，提高样品检测的准确性和稳定性。</p>
                        </div>
                    </div>
                </div>
                    <!--<div class="holder_bar">
                        <table>
                            <thead>
                                <tr>
                                    <th>货号</th>
                                    <th>规格</th>
                                    <th>单价</th>
                                </tr>
                            </thead>
                        </table>
                    </div>-->
                <div class="row holder_bar">
                    <div class="col-xs-4">.</div>
                    <div class="col-xs-4">.</div>
                    <div class="col-xs-4">.</div>
                </div>
                <div class="pro_content">
                    <p>核酸是生命最基本的遗传物质，广泛存在于所有动植物、微生物细胞内。随着核酸分析技术的飞速发展，越来越多的学科领域把核酸的纯化、检测和分析作为主要技术手段。例如传染性疾病的预防、控制和诊疗，生物恐怖因子、食源性致病因子和突变基因成分鉴定，口岸卫生和有害生物防御性检疫。</p>
                    <p>常用的核酸提取、纯化方法包括酚氯仿抽提法、离心柱法、磁珠法。提取过程复杂，操作繁琐，耗时长，还可能使用有毒试剂，降低了纯化核酸的得率、纯度及操作的安全性、一致性和重复性。核酸扩增反应是利用聚合酶对特定的DNA片段进行复制放大的分子生物学技术，经过扩增反应后，特定DNA片段的数量达到100万以上，利用特殊染料/探针显色得到高灵敏度的分子鉴定结果。核酸扩增技术主要包括变温扩增和等温扩增。两者对温度的要求不同，但是都需要光学检测元件进行信号读取，因此对反应管质量的光学特定要求比较高，市面上常用的扩增检测设备，如ABI公司的7500、BioRad公司的MyCycler都需要配合使用光学扩增反应管。</p>
                    <p>微流控芯片技术又称为芯片实验室（Lab-on-chip），是在微尺度空间下，利用高度集成的功能单元实现多步骤的生化反应过程，减少人工操作，实现样品入-结果出（Sample in- Answer out），为生物医学诊断、分析化学、生命科学等领域提供自动化解决方案。微流控芯片的优势在于减小反应体系和所需试剂用量，大幅缩短样品处理时间，全封闭的芯片-试剂体系避免交叉污染，自动化控制减少人工操作过程，提高操作的一致性。利用微流控芯片集成核酸样本提取和检测分析等过程是近年来研究的热点。目前市场上的集成核酸纯化、扩增检测的便携产品均为进口，如GeneXpert和FilmArray等。现有的微流控芯片研究主要集中在科研领域，集成度较高，芯片上设计大量微阀或精密结构，加大了芯片制作工艺的复杂度，批量生产困难，成本偏高，且外部控制系统复杂。</p>
                    <p>我们致力于研发具有自主知识产权的现场级核酸提取分析系统及配套微流控芯片，集成核酸提取、纯化、扩增和检测等过程，实现高度自动化操作，减少人工操作，控制污染，提高样品检测的准确性和稳定性。</p>
                </div>
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
                    <li><a href="../index.html" class="active">首页</a></li>
                    <li><a href="product.blade.php" >研发中心</a></li>
                    <li><a class="disabled" disabled="true">技术支持</a></li>
                    <li><a href="./company_introduce.html">关于我们</a></li>
                    <li><a href="../contactUs/contact.blade.php">联系我们</a></li>
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