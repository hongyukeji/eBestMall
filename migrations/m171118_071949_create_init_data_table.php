<?php

use yii\db\Migration;

/**
 * Handles the creation of table `init_data`.
 */
class m171118_071949_create_init_data_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->insert('{{%goods}}', [
            'goods_id' => '1',
            'cate_id' => '1',
            'goods_code' => 'EBM000000001',
            'goods_name' => '苹果(Apple） iPhoneX Plus - 测试商品 - 平台自营',
            'goods_brief' => '暖春开学季，就要“焕”新装！领券可享12期白条免息！<a href="#" title="量免息券，领券戳这里！ ">量免息券，领券戳这里！</a><br>推荐选择下方的移动、联通、电信优惠购，套餐有优惠，还有话费返还。',
            'goods_price' => '7999.99',
            'goods_market_price' => '8999.99',
            'goods_content' => '<p><img src="//img30.360buyimg.com/popWaterMark/jfs/t3292/30/4768230111/183978/11cad8a1/585c8d4eN8ea09fd1.jpg"></p>',
            'sort_order' => '100',
            'status' => '1',
            'created_at' => time(),
            'updated_at' => time(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('init_data');
    }
}
