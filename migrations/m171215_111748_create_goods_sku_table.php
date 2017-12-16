<?php

use yii\db\Migration;

class m171215_111748_create_goods_sku_table extends Migration
{
    const TABLE_NAME = '{{%goods_sku}}';
    const TABLE_NAME_TAB = '商品sku';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB COMMENT=' . "'" . self::TABLE_NAME_TAB . "'";
        }

        $this->createTable(self::TABLE_NAME, [
            'sku_id' => $this->primaryKey(),
            'goods_id' => $this->integer()->notNull()->comment('商品id'),
            'sku_price' => $this->decimal(10, 2)->defaultValue('0.00')->notNull()->comment('商品sku价格'),
            'sku_market_price' => $this->decimal(10, 2)->defaultValue('0.00')->notNull()->comment('商品sku市场售价'),
            'sku_images' => $this->text()->notNull()->comment('商品sku图片'),
            'sku_spec' => $this->string()->null()->comment('商品sku规格'),
            'sku_stock' => $this->integer()->notNull()->defaultValue(0)->comment('商品sku库存'),
            'sku_sales_volume' => $this->integer()->notNull()->defaultValue(0)->comment('商品sku销量'),
            'sort_order' => $this->integer()->notNull()->defaultValue(0)->comment('排序'),
            'status' => $this->smallInteger()->notNull()->defaultValue(0)->comment('状态'),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}
