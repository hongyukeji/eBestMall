<?php

use yii\db\Migration;

class m171118_050620_create_order_detail_table extends Migration
{
    const TABLE_NAME = '{{%order_detail}}';
    const TABLE_NAME_TAB = '订单详情表';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB COMMENT=' . "'" . self::TABLE_NAME_TAB . "'";
        }

        $this->createTable(self::TABLE_NAME, [
            'id' => $this->primaryKey(),
            'order_id' => $this->integer()->notNull()->comment('订单id'),
            'goods_id' => $this->integer()->notNull()->comment('商品id'),
            'shop_id' => $this->integer()->notNull()->comment('店铺id'),
            'shop_name' => $this->string()->notNull()->comment('店铺名称'),
            'goods_name' => $this->string()->notNull()->comment('商品名称'),
            'goods_sku' => $this->string()->comment('sku'),
            'goods_price' => $this->decimal(10, 2)->defaultValue('0.00')->notNull()->comment('商品价格'),
            'goods_number' => $this->integer()->notNull()->comment('商品数量'),
            'goods_content' => $this->text()->notNull()->comment('商品内容'),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}