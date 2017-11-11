<?php

namespace App\Models;


class Category extends Model
{
    protected $primaryKey = 'cate_id';

    const STATE_ACTIVE = 1;
    const STATE_ZERO = 0;

    /**
     * $categorys = App/Models/Category::with('allChildrenCategorys')->first(); // 一级分类
     * $categorys->allChildrenCategorys;    // 下级分类
     * $categorys->allChildrenCategorys->first()->allChildrenCategorys; // 下级所有分类
     */

    // 无条件查询下级分类
    public function childCategory()
    {
        return $this->hasMany('App\Models\Category', 'parent_id', 'cate_id');
    }

    // 无条件查询下级所有分类
    public function allChildrenCategory()
    {
        return $this->childCategory()->with('allChildrenCategory');
    }

    // 从顶级分类开始, 无条件查找所有分类
    public function allCategory()
    {
        return $this->where(['parent_id' => self::STATE_ZERO])->with('allChildrenCategory')->orderBy('cate_id', 'asc')->get();
    }

    // 从顶级分类开始查找, 条件为: is_show 是否显示 = 1, state 状态 = 1
    public function allShowCategory()
    {
        return $this->where(['parent_id' => self::STATE_ZERO, 'is_show' => self::STATE_ACTIVE, 'state' => self::STATE_ACTIVE])
            ->orderBy('sort_order', 'desc')->get();
    }

    // 查询所有下级分类, 条件为: is_show 是否显示 = 1, state 状态 = 1
    public function childShowCategory()
    {
        return $this->hasMany(Category::class, 'parent_id', 'cate_id')
            ->where(['is_show' => self::STATE_ACTIVE, 'state' => self::STATE_ACTIVE])
            ->orderBy('sort_order', 'desc');
    }

    // 查询所有推荐分类
    public function allBestCategory()
    {
        return $this->childShowCategory()->where('is_best', self::STATE_ACTIVE);
    }
}