<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function index()
    {

        $list = Article::from('article as a')
//            ->select('art_id','art_title','art_tag','art_description','art_thumb','art_time','art_editor','art_view','cate_id')
            ->orderBy('art_time','desc')
            ->take(4)
            ->get();
        $news = Article::orderBy('art_time','desc')->first();
        //dd($news);
        return view('home.index.index',compact('list','news'));
    }
}
