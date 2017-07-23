<?php

use yii\db\Migration;

class m170722_092703_create_cart_table extends Migration
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
            'id' => $this->primaryKey()->comment('自增ID'),
            'user_id' => $this->bigInteger()->notNull()->comment('用户id'),
            'store_id' => $this->integer()->notNull()->comment('店铺ID'),
            'product_id' => $this->bigInteger()->notNull()->comment('产品id'),
            'product_number' => $this->integer()->notNull()->comment('产品数量'),
            'sku_id' => $this->bigInteger()->notNull()->comment('产品sku_id'),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}