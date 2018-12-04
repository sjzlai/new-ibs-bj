<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\File;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DownloadController extends Controller
{
    //
    public function fileDown($file_id){
        $file_path = File::where('file_id','=',$file_id)->select('file_path')->get();
        //dd($file_path);
        return response()->download(".".$file_path[0]['file_path']);
        // return response()->download("./file/2018-01-22/20180122155701200.doc");
    }
}
