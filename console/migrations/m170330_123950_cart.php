<?php

use yii\db\Migration;

class m170330_123950_cart extends Migration
{
    const TABLE_NAME ='{{%cart}}';
    const TABLE_NAME_TAB ='购物车';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB COMMENT='."'" . self::TABLE_NAME_TAB ."'";
        }

        $this->createTable(self::TABLE_NAME, [
            'cartId' => $this->bigPrimaryKey(),
            'goodsId' => $this->bigInteger()->defaultValue('0')->notNull()->comment('商品ID'),
            'goodsNumber' => $this->integer()->defaultValue('0')->notNull()->comment('商品数量'),
            'goodsPrice' => $this->decimal(10,2)->defaultValue('0.00')->notNull()->comment('商品价格'),
            'userId' => $this->bigInteger()->notNull()->defaultValue('0')->comment('用户ID'),
            'createdTime' => $this->integer()->notNull()->defaultValue('0')->comment('创建时间'),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}