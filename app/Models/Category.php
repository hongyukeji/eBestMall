<?php

namespace App\Models;

use App\Models\Model;

class Category extends Model
{
    protected $primaryKey = 'cate_id';

    /**
     * $categorys = App/Models/Category::with('allChildrenCategorys')->first(); // 一级分类
     * $categorys->allChildrenCategorys;    // 二级分类
     * $categorys->allChildrenCategorys->first()->allChildrenCategorys; // 三级分类
     */
    public function childCategory() {
        return $this->hasMany('App\Models\Category', 'parent_id', 'cate_id');
    }

    public function allChildrenCategorys()
    {
        return $this->childCategory()->with('allChildrenCategorys');
    }
}
