<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class GoodsCate extends Model
{
    //
    protected $table = 'goods_cate';
    protected $primaryKey='gc_id';
    public $timestamps =false;
    protected $guarded =[];
}
