<?php

use yii\db\Migration;

class m171118_050151_create_goods_table extends Migration
{
    const TABLE_NAME = '{{%goods}}';
    const TABLE_NAME_TAB = '商品表';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB COMMENT=' . "'" . self::TABLE_NAME_TAB . "'";
        }

        $this->createTable(self::TABLE_NAME, [
            'goods_id' => $this->primaryKey()->comment('商品id'),
            'cate_id' => $this->integer()->notNull()->comment('商品分类id'),
            'goods_code' => $this->string()->notNull()->comment('商品编号'),
            'goods_name' => $this->string()->notNull()->comment('商品名称'),
            'goods_brief' => $this->string()->notNull()->comment('商品简介'),
            'goods_price' => $this->decimal(10, 2)->defaultValue('0.00')->notNull()->comment('商品价格'),
            'goods_market_price' => $this->decimal(10, 2)->defaultValue('0.00')->notNull()->comment('商品市场售价'),
            'goods_content' => $this->text()->notNull()->comment('商品内容'),
            'sort_order' => $this->integer()->notNull()->defaultValue(0)->comment('排序顺序'),
            'status' => $this->smallInteger()->notNull()->defaultValue(0)->comment('商品状态:0-下架,1-上架'),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

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

    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}