<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\Company;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    //公司信息
    public function about()
    {
        $company = Company::get();
       // dd($company);
        return view('home.aboutUs.company_introduce',compact('company'));
//        return show(1,'产品中心详情信息',$company);
    }

    //联系我们
    public  function  contact()
    {
        return view('home.contactUs.contact');
    }

    //人才招聘
    public function recruit()
    {
        return view('home.aboutUs.recruit');
    }

    //地图
    public function map()
    {
        return view('home.contactUs.map');
    }

}
