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
                <img src="../public/images/logo.png" alt="">
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
<!--my_main start-->
<div class="common about_us">
    <!--banner-->
    <div class="inner_banner">
        <img src="{{asset('home/images/banner.png')}}" alt="">
    </div>
    <!--breadcrumb-->
    <div class="lung-breadcrumb">
        <span>关于我们</span><span>人才招聘</span>
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
                            <li><a href="{{url('about')}}">公司介绍</a></li>
                            <li class="active"><a href="{{url('recruit')}}">人才招聘</a></li>
                            <li><a href="{{url('newsList')}}">行业动态</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 hidden-md hidden-lg left_mini">
                <div class="list_mini">
                    <ul class="mini_bar">
                        <li><a href="{{url('about')}}">公司介绍</a></li>
                        <li class="active"><a href="{{url('recruit')}}">人才招聘</a></li>
                        <li><a href="{{url('newsList')}}">行业动态</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-md-8 col-lg-9 right_side">
                <div class="job_content">
                    <div class="company_job">
                        <p>北京中科生仪科技有限公司于2009年成立，公司以先进生命科学技术和装备的研发、生产、销售、服务作为主营业务。公司自成立以来，专注于发展自己的专利技术，研发自主产权的生物技术产品和服务平台。 现公司招纳贤才，诚邀你的加入</p>
                    </div>
                    <div class="job_list">
                        <div class="first_job">
                            <h3 class="job_title">招聘职位：实验技术员</h3>
                            <h4 class="job_details order">职位要求：</h4>
                            <p>1. 负责分子生物学相关产品研发过程中的 实验室技术工作，包括实验方案的设计及相关分子生物学实验的操作；</p>
                            <p>2. 完成公司或上级安排的其它任务。</p>
                            <h4 class="job_details duty">岗位职责 ：</h4>
                            <p>1. 分子生物学相关专业，本科及以上学历，有相关工作经验优先；</p>
                            <p>2. 熟悉分子生物学相关的实验操作，如核酸的提取与纯化，核酸电泳，PCR，基因克隆；</p>
                            <p>3. 具有较强的实验动手能力和学习能力，实验操作认真负责；</p>
                            <p>4. 具有较强的团队协作能力和沟通能力，积极发现并解决实验过程中的问题。</p>
                        </div>
                        <div class="second_job">
                            <h3 class="job_title">招聘职位：电子工程师</h3>
                            <h4 class="job_details order">职位要求：</h4>
                            <p>1. 大学本科以上学历，电子、微电子、自动化及相关专业，1年以上相关工作经验；</p>
                            <p>2. 熟练使用电路设计软件进行原理图和pcb板的设计；</p>
                            <p>3. 熟练使用各类电子测试仪表，熟悉电子电路的调试；</p>
                            <p>4. 具有数字或模拟电路设计经验，精通一种电路版图绘制工具软件的使用；</p>
                            <p>5. 具有良好的英文资料的阅读能力；</p>
                            <p>6. 良好的职业道德，具有开阔的思路和创新精神，敏锐的技术前瞻性；</p>
                            <p>7. 具有组织协调能力和良好的团队协作能力，能适应较高的工作压力。</p>
                            <h4 class="job_details duty">岗位职责 ：</h4>
                            <p>1. 负责原理图的设计工作；</p>
                            <p>2. 负责PCB布线设计；</p>
                            <p>3. 负责产品的调试、测试；</p>
                            <p>4. 负责所开发产品的相关文件的编写；</p>
                            <p>5. 配合采购人员完成器件采购；</p>
                            <p>6. 负责客户及生产中技术问题的处理（收集、分析、解决、反馈）。</p>
                        </div>
                        <div class="third_job">
                            <h3 class="job_title">招聘职位：实验技术员</h3>
                            <h4 class="job_details order">职位要求：</h4>
                            <p>1. 通信、计算机或相关专业毕业,本科以上学历；</p>
                            <p>2. 熟悉linux操作系统，并具有相应的3年以上开发经验；</p>
                            <p>3. 熟悉Linux BSP、Linux内核驱动编程、架构。熟悉对uboot移植、Linux内核裁减移植、文件系统移植、驱动程序开发、应用程序编程及配置等相关开发内容；</p>
                            <p>4. 熟悉MiniGui、QT等界面开发设计工具，具有应用系统的界面与业务流程开发经验；</p>
                            <p>5. 熟悉Socket网络编程；</p>
                            <p>6. 有工作激情、上进心，有团队合作精神；</p>
                            <p>7. 能吃苦耐劳，勇于挑战并克服困难；</p>
                            <p>8. 有医疗器械产品等开发经验者优先。</p>
                            <h4 class="job_details duty">岗位职责 ：</h4>
                            <p>1. 参与公司内项目及设备产品开发，沟通设计方案并详细设计；</p>
                            <p>2. 根据项目要求，进行嵌入式linux系统的CPU、外设等芯片选型；</p>
                            <p>3. 负责进行嵌入式linux系统裁剪、移植及底层驱动开发相关工作；</p>
                            <p>4. 负责linux系统平台产品的开发和维护；</p>
                            <p>5. 配合采购人员完成器件采购；</p>
                            <p>6. 根据公司技术文档规范编写所属岗位相关的技术文档。</p>
                        </div>
                    </div>
                </div>
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
                <img src="../public/images/logo.png" alt="">
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

<script src="../public/js/jquery-1.11.3.js"></script>
<script src="../public/js/bootstrap.js"></script>
<script src="../public/js/common/aboutus.js"></script>

</body>
</html>