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
    }

    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}