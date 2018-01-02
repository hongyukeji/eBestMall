<?php
/**
 * eBestMall
 * ============================================================================
 * Copyright 2015-2018 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768  Time: 2018/1/1 17:56
 * E-mail: hongyukeji@126.com
 * ============================================================================
 */

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

class GoodsCategoryModel extends GoodsCategory
{
    const STATUS_DELETED = 0;   // 状态 默认
    const STATUS_INACTIVE = 0;  // 状态 无效
    const STATUS_ACTIVE = 1;    // 状态 有效

    public function getChildren()
    {
        //
    }

    // 向上查找父亲，到顶级分类
    public function getParent($cate_id)
    {
        $data = self::getShowCategories();
        $tree = [];
        if ($data && is_array($data)) {
            foreach ($data as $v) {
                if ($v['cate_id'] == $cate_id) {
                    if ($v['parent_id'] !== 0) {
                        $v['parent'] = self::getParent($v['parent_id']);
                        $tree = $v;
                    }
                }
            }
        }
        return $tree;
    }

    /**
     * 根据分类id, 返回商品导航栏数组
     * @param $cate_id
     * @return array
     */
    public function getGoodsNav($cate_id)
    {
        $categories = self::getCategories();

        $goodsNav = self::getParentId($categories, $cate_id);

        return $goodsNav;
    }

    /**
     * 根据分类id, 查询上级分类,并以数组方式返回
     * @param $categories
     * @param $cate_id
     * @return array
     */
    public function getParentId($categories, $cate_id)
    {
        $arr = array();
        foreach ($categories as $v) {
            if ($v['cate_id'] == $cate_id) {
                $arr[] = $v;    // $arr[$v['cate_id']]=$v['name'];
                $arr = array_merge(self::getParentId($categories, $v['parent_id']), $arr);
            }
        }
        return $arr;
    }

    /**
     * 根据分类id, 查询顶级父类id
     * @param $cate_id
     * @return array|null|\yii\db\ActiveRecord
     */
    public function getParentIdOld($cate_id)
    {
        $category = self::find()
            ->where([
                'cate_id' => $cate_id,
                'status' => self::STATUS_ACTIVE,
            ])
            ->asArray()
            ->one();
        if ($category['parent_id'] != '0') {
            return self::getParentId($category['parent_id']);
        }
        return $category;
    }

    public function getMainCategories()
    {
        $data = self::getShowCategories();
        $categories = self::generateTree($data);

        // TODO: 查找该分类下的活动频道 channel

        //\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;    // 以json格式输出

        return $categories;
    }

    public function getShowCategories()
    {
        $data = self::find()
            ->where([
                'is_show' => self::STATUS_ACTIVE,
                'status' => self::STATUS_ACTIVE,
            ])
            ->orderBy('sort_order DESC')
            ->asArray()
            ->all();
        return $data;
    }

    /**
     * 查找指定条件分类，如：is_bset,is_show_nav
     * @param $data
     * @param $key
     * @param int $value
     * @param string $sort_name
     * @param int $sort_type
     * @return array
     */
    public static function childAccordCategory($data, $key, $value = self::STATUS_ACTIVE, $sort_name = 'sort_order', $sort_type = SORT_DESC)
    {
        $tree = [];
        foreach ($data as $v) {
            if ($v[$key] == $value) {
                $tree[] = $v;
            }
        }
        //array_multisort(array_column($tree, $sort_name), $sort_type, $tree);
        ArrayHelper::multisort($tree, [$sort_name], [$sort_type]);
        return $tree;
    }

    /**
     * 生成树
     * @param $data
     * @param int $pid
     * @return array
     */
    private static function generateTree($data, $pid = 0)
    {
        $tree = [];
        if ($data && is_array($data)) {
            foreach ($data as $v) {
                if ($v['parent_id'] == $pid) {
                    $v['children'] = self::generateTree($data, $v['cate_id']);
                    $tree[] = $v;
                }
            }
        }
        return $tree;
    }

    /**
     * 获取所有状态为STATUS_ACTIVE的分类
     * @return array
     */
    public static function getCategories()
    {
        $categories = self::find()->where(['status' => self::STATUS_ACTIVE])->all();
        return ArrayHelper::toArray($categories);   // 对象转换为数组
    }

    /**
     * 获取所有的分类
     */
    public static function getCategoriesAll()
    {
        $categories = self::find()->all();
        return ArrayHelper::toArray($categories);   // 对象转换为数组
    }

    /**
     * 遍历出各个子类 获得树状结构的数组
     */
    public static function getTree($data, $pid = 0, $lev = 0, $item = '|---')
    {
        $tree = [];
        foreach ($data as $value) {
            if ($value['parent_id'] == $pid) {
                $value['cate_name'] = str_repeat($item, $lev) . $value['cate_name'];
                $tree[] = $value;
                $tree = array_merge($tree, self::getTree($data, $value['cate_id'], $lev + 1));
            }
        }
        return $tree;
    }

    /**
     * 得到相应  id  对应的  分类名  数组
     */
    public function getOptions()
    {
        $data = $this->getCategories();
        $tree = $this->getTree($data);
        $list = ['顶级分类'];
        foreach ($tree as $value) {
            $list[$value['cate_id']] = $value['cate_name'];
        }
        return $list;
    }
}