<?php

use yii\db\Migration;

class m170210_060200_order extends Migration
{
    const TABLE_NAME ='{{%order}}';
    const TABLE_NAME_TAB ='订单';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB COMMENT='."'" . self::TABLE_NAME_TAB ."'";
        }

        $this->createTable(self::TABLE_NAME, [
            'orderId' => $this->primaryKey(),
            'UserId' => $this->integer()->notNull()->defaultValue('0')->comment('用户ID'),
            'AddressId' => $this->integer()->notNull()->defaultValue('0')->comment('收货地址'),
            'orderAmount' => $this->decimal(10,2)->notNull()->defaultValue('0.00')->comment('订单总价'),
            'shippingId' => $this->integer()->notNull()->defaultValue('0')->comment('配送方式'),
            'status' => $this->smallInteger()->defaultValue('0')->comment('订单状态:1-已完成,0-未完成'),
            'createdTime' => $this->integer()->comment('创建时间'),
            'updatedTime' => $this->integer()->comment('更新时间'),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}