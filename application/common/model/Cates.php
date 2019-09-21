<?php

namespace app\common\model;

use think\Model;

class Cates extends Model
{
    protected $table = 'cates';
    // 关联文章表 一对多 hasMany
    public function arts()
    {
        //                           关联的模型                关联模型中对应到本模型的字段名
        return $this->hasMany(Articles::class,'cates_id');
    }
}
