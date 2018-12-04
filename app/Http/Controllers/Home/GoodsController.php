<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\File;
use App\Http\Model\Goods;
use App\Http\Model\GoodsCate;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

/**
 * Class GoodsController
 * @package App\Http\Controllers\Home
 * @name 商品api类
 * @author
 */
class GoodsController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     * @name 商品首页介绍信息
     * @author
     */
    public function goodsIntroduction(){
        $data['goodsInfo'] = Goods::from('goods as g')
            ->leftJoin('goods_cate as c','c.gc_id','=','g.gc_id')
            ->get();

        foreach ($data['goodsInfo'] as $k=>$value){
            $data['goodsInfo'][$k]['goodsImg'] = Db::table('goods_photo')->where('g_id','=',$value->g_id)->get();
            $data['goodsInfo'][$k]['goodsNum'] = Db::table('number')->where('n_goods_id','=',$value->g_id)->get();
        }
        //dd($data);
        if($data){
            return view('home.product.list',compact(''));
//            return show(1,'首页产品介绍',$data);
        }
//        else{
//            return show(0,'没有数据');
//        }
    }



    /**
     * @param $g_id
     * @return \Illuminate\Http\JsonResponse
     * @name    产品中心详情
     * @author
     */
    public function goodsInfo($g_id){
        //分类
        $data['class'] = GoodsCate::all();
        foreach ($data['class'] as $k =>$value){
            $data['class'][$k]['goodsName'] = Goods::where('gc_id','=',$value->gc_id)->select('g_id','g_name')->get();
        }
        //商品
         $goodsInfo['info']= Goods::from('goods as g')
             ->leftJoin('goods_cate as c','c.gc_id','=','g.gc_id')
             ->where('g.g_id',$g_id)
             ->get();
             //dd($goodsInfo);
         $goodsInfo['num'] = DB::table('number')->where('n_goods_id','=',$g_id)->get();
         //查询商品文件信息
         $goodsInfo['files'] = File::where('g_id',$g_id)->get();
         //查询商品图片信息
        $goodsInfo['photo'] = DB::table('goods_photo')->where('g_id',$g_id)->get();
        //var_dump($goodsInfo['files']);die;
        if($goodsInfo){
           // dd($goodsInfo);
            return view('home.product.list',compact('goodsInfo','data'));
//            return show(1,'产品中心详情信息',$goodsInfo);
        }
//        else{
//            return show(0,'没有数据');
//        }
    }


}//class end
