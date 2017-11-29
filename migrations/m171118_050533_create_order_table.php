<?php

use yii\db\Migration;

class m171118_050533_create_order_table extends Migration
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
            'order_id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull()->comment('会员id'),
            'order_name' => $this->string()->notNull()->comment('订单名称'),
            'order_code' => $this->string()->notNull()->comment('订单号'),
            'status' => $this->smallInteger()->notNull()->defaultValue(0)->comment('状态'),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}