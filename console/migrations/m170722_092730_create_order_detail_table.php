<?php

use yii\db\Migration;

class m170722_092730_create_order_detail_table extends Migration
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
            'id' => $this->primaryKey()->comment('自增ID'),
            'order_id' => $this->integer()->notNull()->comment('订单id'),
            'product_id' => $this->bigInteger()->notNull()->comment('产品id'),
            'product_price' => $this->decimal(10, 2)->defaultValue('0.00')->notNull()->comment('产品价格'),
            'product_number' => $this->integer()->notNull()->comment('产品数量'),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}