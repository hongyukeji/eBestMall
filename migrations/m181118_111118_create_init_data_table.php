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

        // 商品演示数据
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


        // 分类数据
        /*$this->insert('{{%category}}', [
            'cate_id' => '',
            'cate_name' => '',
            'parent_id' => '',
            'is_show' => '',
            'sort_order' => '',
            'status' => '',
        ]);*/

        $this->insert('{{%category}}', [
            'cate_id' => '1',
            'cate_name' => '云盘资源',
            'parent_id' => '0',
            'is_show' => '1',
            'sort_order' => '100',
            'status' => '1',
        ]);

        $this->insert('{{%category}}', [
            'cate_id' => '2',
            'cate_name' => '视频教程',
            'parent_id' => '1',
            'is_show' => '1',
            'sort_order' => '100',
            'status' => '1',
        ]);

        $this->insert('{{%category}}', [
            'cate_id' => '3',
            'cate_name' => '图书资源',
            'parent_id' => '1',
            'is_show' => '1',
            'sort_order' => '100',
            'status' => '1',
        ]);

        $this->insert('{{%category}}', [
            'cate_id' => '4',
            'cate_name' => '电影资源',
            'parent_id' => '1',
            'is_show' => '1',
            'sort_order' => '100',
            'status' => '1',
        ]);

        $this->insert('{{%category}}', [
            'cate_id' => '5',
            'cate_name' => '文件资源',
            'parent_id' => '1',
            'is_show' => '1',
            'sort_order' => '100',
            'status' => '1',
        ]);

        $this->insert('{{%category}}', [
            'cate_id' => '6',
            'cate_name' => '微电影',
            'parent_id' => '1',
            'is_show' => '0',
            'sort_order' => '100',
            'status' => '0',
        ]);

        $this->insert('{{%category}}', [
            'cate_id' => '7',
            'cate_name' => 'Php开发教程',
            'parent_id' => '2',
            'is_show' => '1',
            'sort_order' => '100',
            'status' => '1',
        ]);

        $this->insert('{{%category}}', [
            'cate_id' => '8',
            'cate_name' => 'Java开发教程',
            'parent_id' => '2',
            'is_show' => '1',
            'sort_order' => '99',
            'status' => '1',
        ]);

        $this->insert('{{%category}}', [
            'cate_id' => '9',
            'cate_name' => 'Android开发教程',
            'parent_id' => '2',
            'is_show' => '1',
            'sort_order' => '100',
            'status' => '1',
        ]);

        $this->insert('{{%category}}', [
            'cate_id' => '10',
            'cate_name' => '电商系统开发教程',
            'parent_id' => '2',
            'is_show' => '1',
            'sort_order' => '101',
            'status' => '1',
        ]);

        $this->insert('{{%category}}', [
            'cate_id' => '11',
            'cate_name' => 'Yii2.0开发教程',
            'parent_id' => '2',
            'is_show' => '1',
            'sort_order' => '108',
            'status' => '1',
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
