<?php

use yii\db\Migration;

class m170211_095215_order_detail extends Migration
{
    const TABLE_NAME ='{{%order_detail}}';
    const TABLE_NAME_TAB ='订单详情表';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB COMMENT='."'" . self::TABLE_NAME_TAB ."'";
        }

        $this->createTable(self::TABLE_NAME, [
            'orderDetailId' => $this->bigPrimaryKey(),
            'orderDetailGoodsId' => $this->bigInteger()->notNull()->defaultValue('0')->comment('订单详情商品ID'),
            'orderDetailGoodsPrice' => $this->decimal(10,2)->notNull()->defaultValue('0.00')->comment('订单详情商品价格'),
            'orderDetailGoodsNumber' => $this->integer()->defaultValue('0')->comment('订单详情商品数量'),
            'orderId' => $this->integer()->notNull()->defaultValue('0')->comment('订单ID'),
            'createdTime' => $this->integer()->comment('创建时间'),
            'updatedTime' => $this->timestamp()->comment('更新时间'),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}