<?php

use yii\db\Migration;

/**
 * Handles the creation of table `init_data`.
 */
class m181118_111118_create_init_data_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        // 分类数据
        $this->batchInsert('{{%category}}', [
            'cate_id',
            'cate_name',
            'parent_id',
            'is_show',
            'sort_order',
            'status',
        ], [
            ['', '家用电器', '0', '1', '300', '1',],
            ['', '手机 / 运营商 / 数码', '0', '1', '290', '1',],
            ['', '电脑 / 办公', '0', '1', '280', '1',],
            ['', '家居 / 家具 / 家装 / 厨具', '0', '1', '270', '1',],
            ['', '男装 / 女装 / 童衣 / 内衣', '0', '1', '260', '1',],
            ['', '美妆个护 / 宠物', '0', '1', '250', '1',],
            ['', '女鞋 / 箱包 / 钟表 / 珠宝', '0', '1', '240', '1',],
            ['', '男鞋 / 运动 / 户外', '0', '1', '230', '1',],
            ['', '汽车 / 汽车用品', '0', '1', '220', '1',],
            ['', '母婴 / 玩具乐器', '0', '1', '210', '1',],
            ['', '食品 / 酒类 / 生鲜 / 特产', '0', '1', '200', '1',],
            ['', '礼品鲜花 / 农资绿植', '0', '1', '190', '1',],
            ['', '医药保健 / 计生情趣', '0', '1', '180', '1',],
            ['', '图书 / 音像 / 电子书', '0', '1', '170', '1',],
            ['', '机票 / 酒店 / 旅游 / 生活', '0', '1', '160', '1',],
            ['', '理财 / 众筹 / 白条 / 保险', '0', '1', '150', '1',],
            ['', '分类2', '1', '1', '150', '1',],
            ['', '分类3', '17', '1', '150', '1',],
        ]);

        // 商品演示数据
        $this->batchInsert('{{%goods}}', [
            'goods_id',
            'cate_id',
            'store_id',
            'goods_code',
            'goods_name',
            'goods_brief',
            'goods_keywords',
            'goods_price',
            'goods_market_price',
            'goods_content',
            'sort_order',
            'status',
            'created_at',
            'updated_at',
        ], [
            [
                '1',
                '1',
                '1',
                'EBM000000001',
                '苹果(Apple） iPhoneX Plus - 测试商品 - 平台自营', '暖春开学季，就要“焕”新装！领券可享12期白条免息！<a href="#" title="量免息券，领券戳这里！ ">量免息券，领券戳这里！</a><br>推荐选择下方的移动、联通、电信优惠购，套餐有优惠，还有话费返还。',
                '苹果 手机 iPhone',
                '7999.99',
                '8999.99',
                '<p><img src="//img30.360buyimg.com/popWaterMark/jfs/t3292/30/4768230111/183978/11cad8a1/585c8d4eN8ea09fd1.jpg"></p>',
                '100',
                '1',
                time(),
                time(),
            ],
        ]);

        // 用户数据
        $this->batchInsert('{{%user}}', [
            'user_id',
            'username',
            'auth_key',
            'password_hash',
            'password_reset_token',
            'email',
            'avatar',
            'status',
            'created_at',
            'updated_at',
        ], [
            ['', 'shadow', 'auth_key', 'password_hash', 'password_reset_token', 'hongyukeji@126.com', 'avatar', '1', time(), time(),],
        ]);

        // 店铺表
        $this->batchInsert('{{%store}}', [
            'store_id',
            'user_id',
            'store_name',
            'sort_order',
            'is_self',
            'status',
            'created_at',
            'updated_at',
        ], [
            ['', '1', '平台自营', '100', '1', '1', time(), time(),],
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        //
    }
}
