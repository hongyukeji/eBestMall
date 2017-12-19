<?php

use yii\db\Migration;

class m171122_073900_create_cart_table extends Migration
{
    const TABLE_NAME = '{{%cart}}';
    const TABLE_NAME_TAB = '购物车表';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB COMMENT=' . "'" . self::TABLE_NAME_TAB . "'";
        }

        $this->createTable(self::TABLE_NAME, [
            'cart_id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull()->comment('会员id'),
            'shop_id' => $this->integer()->notNull()->comment('店铺id'),
            'goods_id' => $this->integer()->notNull()->comment('商品id'),
            'goods_number' => $this->integer()->notNull()->comment('商品数量'),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}
