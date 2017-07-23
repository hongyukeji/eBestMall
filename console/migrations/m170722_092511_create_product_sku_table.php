<?php

use yii\db\Migration;

class m170722_092511_create_product_sku_table extends Migration
{
    const TABLE_NAME = '{{%product_sku}}';
    const TABLE_NAME_TAB = '产品SKU表';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB COMMENT=' . "'" . self::TABLE_NAME_TAB . "'";
        }

        $this->createTable(self::TABLE_NAME, [
            'id' => $this->bigPrimaryKey()->comment('自增ID'),
            'product_id' => $this->bigInteger()->notNull()->comment('产品id'),
            'price' => $this->decimal(10, 2)->defaultValue('0.00')->notNull()->comment('产品sku价格'),
            'market_price' => $this->decimal(10, 2)->defaultValue('0.00')->notNull()->comment('产品sku市场售价'),
            'sku_images' => $this->text()->null()->comment('产品sku图片集'),
            'sku_attribute' => $this->string()->null()->comment('产品sku属性'),
            'sku_stock' => $this->integer()->notNull()->comment('产品sku库存'),
            'sku_sales_volume' => $this->integer()->notNull()->comment('产品sku销量'),
            'created_time' => $this->integer()->notNull()->comment('创建时间'),
            'updated_time' => $this->integer()->notNull()->comment('更新时间'),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}