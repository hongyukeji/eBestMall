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
 * @property integer $is_show
 * @property integer $sort_order
 * @property integer $status
 */
class Category extends Model
{
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
            [['parent_id', 'is_show', 'sort_order', 'status'], 'integer'],
            [['cate_name'], 'string', 'max' => 255],
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
            'is_show' => Yii::t('app', 'Is Show'),
            'sort_order' => Yii::t('app', 'Sort Order'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

    /**
     * 查询子分类
     * $categories = app\models\Category::findOne(1)->childCategory()->all()
     */
    public function childCategory()
    {
        return $this->hasMany(Category::className(), ['parent_id' => 'cate_id']);
    }

    public function getData()
    {
        $categories = self::find()
            ->where(['status' => Category::STATUS_ACTIVE,])
            ->orderBy('sort_order DESC')
            ->all();
        $categories = ArrayHelper::toArray($categories);
        return $categories;
    }

    public function getTree($categories, $pid = 0)
    {
        $tree = [];
        foreach ($categories as $cate) {
            if ($cate['parent_id'] == $pid) {
                $tree[] = $cate;
                $tree = array_merge($tree, $this->getTree($categories, $cate['cate_id']));
            }
        }
        return $tree;
    }

    public function setPrefix($data, $p = '|---')
    {
        $tree = [];
        $num = 1;
        $prefix = [0 => 1];
        while ($val = current($data)) {
            $key = key($data);
            if ($key > 0) {
                if ($data[$key - 1]['parent_id'] != $val['parent_id']) {
                    $num++;
                }
            }
            if (array_key_exists($val['parent_id'], $prefix)) {
                $num = $prefix[$val['parent_id']];
            }
            $val['cate_name'] = str_repeat($p, $num) . $val['cate_name'];
            $prefix[$val['parent_id']] = $num;
            $tree[] = $val;
            next($data);
        }
        return $tree;
    }

    public function getOptions()
    {
        $categories = $this->getData();
        $tree = $this->getTree($categories);
        $tree = $this->setPrefix($tree);
        $options = [];
        foreach ($tree as $cate) {
            $options[$cate['cate_id']] = $cate['cate_name'];
        }
        return $options;
    }

    // 查找显示分类
    public function childShowCategory()
    {
        $data = static::find()
            ->where([
                'is_show' => Category::STATUS_ACTIVE,
                'status' => Category::STATUS_ACTIVE,
            ])
            ->orderBy('sort_order DESC')
            ->all();
        return self::_generateTree($data);
    }

    // 查找所有状态开启的分类
    public function allChildrenCategory()
    {
        $data = static::find()
            ->where([
                'status' => Category::STATUS_ACTIVE,
            ])
            ->orderBy('sort_order DESC')
            ->all();
        return self::_generateTree($data);
    }

    // 获取分类树
    public static function getTrees($pid = 0)
    {
        //这里我们直接获取所有的数据，然后通过程序进行处理
        //在无限极分类中最忌讳的是对数据库进行层层操作，也就很容易造成内存溢出
        //最后电脑死机的结果
        $data = static::find()->all();
        return self::_generateTree($data, $pid);
    }

    // 生成分类树
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
}
