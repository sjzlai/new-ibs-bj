<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\Article;
use foo\bar;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

/**
 * Class NewsController
 * @package App\Http\Controllers\Home
 * @name 公司动态新闻api类
 * @author weikai
 */
class NewsController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     * @name    文章列表 时间降序 分页
     * @author weikai
     */
    public function newsList(){
        //查询指定字段数据
        $list = Article::from('article as a')
//            ->select('art_id','art_title','art_tag','art_description','art_thumb','art_time','art_editor','art_view','cate_id')
            ->orderBy('art_time','desc')
            ->take(4)
            ->get();
        //返回json
//        dd($list);
        if($list){
            return view('home.aboutUs.news',compact('list'));
//            return show(1,'文章列表',$list);
        }
    }


    //公司动态
    public function newsLists($cate_id,$page_id){
        $list = Article::from('article as a')
            ->orderBy('a.art_time','desc')
            ->paginate($page_id);
//            dd($list);
        if($list){
            return view('home.aboutUs.compant_introduce',compact('list'));
//            return show(1,'文章列表',$list);
        }else {
//            return show(0, '文章列表没有数据');
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @name 文章详情 news_id
     * @author
     */
   public function newsInfo($news_id)
   {
        //判断是否有news_id 查询单条
        if($news_id){
            //$news_id = intval(trim($news_id));
            //dd($news_id);
            //查询文章内容
            $newsInfo = Article::where('art_id','=',"$news_id")->get();
//dd($newsInfo);
            if($newsInfo){
                return view('home.aboutUs.news_detail',compact('newsInfo'));
//                return show(1,'文章详情',$newsInfo);
            }
//                return show(0,'没有找到文章内容');
        }
    }




    public function newsNew(){

            $news = Article::orderBy('art_time','desc')->first();

        if($news){
            return show('1','最新咨询推荐',$news);
        }else{
            return show('0','没有数据');
        }
    }


}//class 结束
