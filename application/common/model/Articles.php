<?php

namespace app\common\model;

use think\Model;

class Articles extends Model
{
    //
    protected $table = 'articles';
    // 和栏目关联 属于关系 belongsTo
    // article/index.html 这里的cate不是属性呀，没关系它会自动触发一个函数__get会自动进行find select
    public function cate()
    {
        //                             关联的模型                本模型中 关联到 关联模型中的外键字段名 第三个参数是主键ID
        return $this->belongsTo(Cates::class,'cates_id');
    }
}
