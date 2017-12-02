<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "{{%category}}".
 *
 * @property integer $cate_id
 * @property string $cate_name
 * @property integer $parent_id
 * @property string $cate_keywords
 * @property string $cate_desc
 * @property integer $is_best
 * @property integer $is_show_channel
 * @property integer $is_show_nav
 * @property integer $is_show
 * @property integer $sort_order
 * @property integer $status
 */
class Category extends Model
{
    public $children = [];

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%category}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cate_name'], 'required'],
            [['parent_id', 'is_best', 'is_show_channel', 'is_show_nav', 'is_show', 'sort_order', 'status'], 'integer'],
            [['cate_name', 'cate_keywords', 'cate_desc'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cate_id' => Yii::t('app', 'Cate ID'),
            'cate_name' => Yii::t('app', 'Cate Name'),
            'parent_id' => Yii::t('app', 'Parent ID'),
            'cate_keywords' => Yii::t('app', 'Cate Keywords'),
            'cate_desc' => Yii::t('app', 'Cate Desc'),
            'is_best' => Yii::t('app', 'Is Best'),
            'is_show_channel' => Yii::t('app', 'Is Show Channel'),
            'is_show_nav' => Yii::t('app', 'Is Show Nav'),
            'is_show' => Yii::t('app', 'Is Show'),
            'sort_order' => Yii::t('app', 'Sort Order'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

    /**
     * 获取 status-1，is_show-1
     */
    public function getMainCategories()
    {
        $data = static::find()
            ->where([
                'is_show' => Category::STATUS_ACTIVE,
                'status' => Category::STATUS_ACTIVE,
            ])
            ->orderBy('sort_order DESC')
            ->asArray()
            ->all();

        $categories = self::_generateTree($data);

        foreach ($categories as $key => $category) {
            $best = self::_getBestChildren($data, $category['cate_id']);
            $channel = self::_getChannelChildren($data, $category['cate_id']);
            array_multisort(array_column($best, 'sort_order'), SORT_DESC, $best);
            array_multisort(array_column($channel, 'sort_order'), SORT_DESC, $channel);
            $categories[$key]['best'] = $best;
            $categories[$key]['channel'] = $channel;
        }

        //dump($categories);exit();

        //\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;    // 以json格式输出
        return $categories;
    }

    public static function _getBestChildren($data, $pid = 0)
    {
        $tree = [];
        foreach ($data as $value) {
            if ($value['parent_id'] == $pid && $value['is_best'] == Category::STATUS_ACTIVE) {
                $tree[] = $value;
                $tree = array_merge($tree, self::_getBestChildren($data, $value['cate_id']));
            }
        }
        return $tree;
    }

    public static function _getChannelChildren($data, $pid = 0)
    {
        $tree = [];
        foreach ($data as $value) {
            if ($value['parent_id'] == $pid && $value['is_show_channel'] == Category::STATUS_ACTIVE) {
                $tree[] = $value;
                $tree = array_merge($tree, self::_getChannelChildren($data, $value['cate_id']));
            }
        }
        return $tree;
    }

    /**
     * 生成树
     * @param $data
     * @param int $pid
     * @return array
     */
    private static function _generateTree($data, $pid = 0)
    {
        $tree = [];
        if ($data && is_array($data)) {
            foreach ($data as $v) {
                if ($v['parent_id'] == $pid) {
                    $tree[] = [
                        'cate_id' => $v['cate_id'],
                        'cate_name' => $v['cate_name'],
                        'parent_id' => $v['parent_id'],
                        'children' => self::_generateTree($data, $v['cate_id']),
                    ];
                }
            }
        }
        return $tree;
    }

    /**
     * 获取所有的分类
     */
    public static function getCategories()
    {
        $items = static::find()->all();
        return ArrayHelper::toArray($items);
    }

    /**
     * 遍历出各个子类 获得树状结构的数组
     */
    public static function getTree($data, $pid = 0, $lev = 0)
    {
        $tree = [];
        foreach ($data as $value) {
            if ($value['parent_id'] == $pid) {
                $value['cate_name'] = str_repeat('|___', $lev) . $value['cate_name'];
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
        $list = ['添加顶级分类'];
        foreach ($tree as $value) {
            $list[$value['cate_id']] = $value['cate_name'];
        }
        return $list;
    }
}
