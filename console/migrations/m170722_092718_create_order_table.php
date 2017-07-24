<?php

use yii\db\Migration;

class m170722_092718_create_order_table extends Migration
{
    const TABLE_NAME = '{{%order}}';
    const TABLE_NAME_TAB = '订单表';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB COMMENT=' . "'" . self::TABLE_NAME_TAB . "'";
        }

        $this->createTable(self::TABLE_NAME, [
            'id' => $this->primaryKey()->comment('自增ID'),
            'order_number' => $this->bigInteger()->notNull()->comment('订单号'),
            'user_id' => $this->bigInteger()->notNull()->comment('用户id'),
            'address_id' => $this->bigInteger()->notNull()->comment('收货地址id'),
            'total_money' => $this->decimal(10,2)->notNull()->comment('总金额'),
            'shipping_id' => $this->integer()->notNull()->comment('配送方式id'),
            'shipping_status' => $this->string()->notNull()->comment('配送状态'),
            'status' => $this->smallInteger(1)->notNull()->comment('状态:0-未完成,1-已完成'),
            'created_time' => $this->integer()->notNull()->comment('创建时间'),
            'updated_time' => $this->integer()->notNull()->comment('更新时间'),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}