@extends('layouts.admin')
@section('content')
        <!--面包屑导航 开始-->
<div class="crumb_warp">
    <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
    <i class="fa fa-home"></i> <a href="{{url('admin/welcome')}}">首页</a> &raquo;
</div>
<!--面包屑导航 结束-->

<!--结果集标题与导航组件 开始-->
<div class="result_wrap">
    <div class="result_title">
        <h3>添加文章</h3>
        @if(count($errors)>0)
            <div class="mark">
                @if(is_object($errors))
                    @foreach($errors->all() as $error)
                        <p>{{$error}}</p>
                    @endforeach
                @else
                    <p>{{$errors}}</p>
                @endif
            </div>
        @endif
    </div>
</div>
<!--结果集标题与导航组件 结束-->

<div class="result_wrap">
    <form action="{{url('admin/goods')}}" method="post" enctype="multipart/form-data">
    {{--<form action="javascript:void(0)"  enctype="multipart/form-data">--}}
        {{csrf_field()}}
        <table class="add_tab">
            <tbody>
            <tr>
                <th width="120">商品分类：</th>
                <td>
                    <select name="gc_id">
                        @foreach($data as $d)
                            <option value="{{$d->gc_id}}">{{$d->_gc_title}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i> 商品名称：</th>
                <td>
                    <input type="text" class="lg" name="g_name">
                </td>
            </tr>
            {{--<tr>
                <th>主图：</th>
                <td>
                    <input id="file_upload" name="file_upload" type="file" multiple="true">
                </td>
            </tr>--}}
            <tr>
                <th>保质期:</th>
                <td>
                    <input type="text" name="g_quality">
                </td>
            </tr>
            <tr>
                <th>保存条件:</th>
                <td>
                    <input type="text" name="g_condition">
                </td>
            </tr>
            <tr>
                <th>商品简介：</th>
                <td>
                    <textarea name="g_jian"></textarea>
                </td>
            </tr>
            <tr>
                <th>商品内容：</th>
                <td>
                    <script type="text/javascript" charset="utf-8" src="{{asset('org/ueditor/ueditor.config.js')}}"></script>
                    <script type="text/javascript" charset="utf-8" src="{{asset('org/ueditor/ueditor.all.min.js')}}"> </script>
                    <script type="text/javascript" charset="utf-8" src="{{asset('org/ueditor/lang/zh-cn/zh-cn.js')}}"></script>
                    <script id="editor" name="g_content" type="text/plain" style="width:860px;height:500px;"></script>
                    <script type="text/javascript">
                        var ue = UE.getEditor('editor');
                    </script>
                    <style>
                        .edui-default{line-height: 28px;}
                        div.edui-combox-body,div.edui-button-body,div.edui-splitbutton-body
                        {overflow: hidden; height:20px;}
                        div.edui-box{overflow: hidden; height:22px;}
                    </style>
                </td>
            </tr>
            <tr>
                <th></th>
                <td>
                    <input type="submit" value="提交">
                    <input type="button" class="back" onclick="history.go(-1)" value="返回">
                </td>
            </tr>
            </tbody>
        </table>
    </form>
</div>

@endsection
