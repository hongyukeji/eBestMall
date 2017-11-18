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
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}