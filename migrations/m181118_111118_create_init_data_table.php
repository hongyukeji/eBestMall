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

            ['', '程序源码', '0', '1', '100', '1',],
            ['', '云盘资源', '0', '1', '110', '1',],

            ['100', 'PHP', '1', '1', '100', '1',],
            ['', '商城系统', '100', '1', '200', '1',],
            ['', '企业网站', '100', '1', '100', '1',],
            ['', '社区论坛', '100', '1', '100', '1',],
            ['', '博客空间', '100', '1', '100', '1',],

            ['200', '程序开发', '2', '1', '110', '1',],
            ['', 'PHP', '200', '1', '200', '1',],
            ['', 'Android', '200', '1', '100', '1',],
            ['', 'Yii2', '200', '1', '150', '1',],
            ['', 'Laravel', '200', '1', '100', '1',],
            ['', 'ThinkPHP', '200', '1', '100', '1',],

            ['220', '影视资源', '2', '1', '100', '1',],
            ['', '爱情', '220', '1', '110', '1',],
            ['', '喜剧', '220', '1', '109', '1',],
            ['', '动作', '220', '1', '108', '1',],
            ['', '剧情', '220', '1', '107', '1',],
            ['', '科幻', '220', '1', '106', '1',],
            ['', '恐怖', '220', '1', '105', '1',],
            ['', '动画', '220', '1', '104', '1',],
            ['', '惊悚', '220', '1', '103', '1',],
            ['', '犯罪', '220', '1', '102', '1',],
            ['', '冒险', '220', '1', '101', '1',],
            ['', '其他', '220', '1', '100', '1',],

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
