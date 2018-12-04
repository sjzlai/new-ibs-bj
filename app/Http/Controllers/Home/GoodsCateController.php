<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\Goods;
use App\Http\Model\GoodsCate;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class GoodsCateController extends Controller
{
    //

    public function goodsCateNameList(){
        $data['class'] = GoodsCate::all();
        foreach ($data['class'] as $k =>$value){
            $data['class'][$k]['goodsName'] = Goods::where('gc_id','=',$value->gc_id)->select('g_id','g_name')->get();
        }
//        dd($data);
        if($data) {
            return view('home.product.product',compact('data'));
        }
//            return show(1,'类别名称及商品名称',$data);
//        }else{
//            return show(0,'没有类别名称及商品名称');
//        }
    }
}
