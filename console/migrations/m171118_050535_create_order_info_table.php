<?php

use yii\db\Migration;

class m171118_050535_create_order_info_table extends Migration
{
    const TABLE_NAME = '{{%order_info}}';
    const TABLE_NAME_TAB = '订单信息表';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB AUTO_INCREMENT=100000 COMMENT=' . "'" . self::TABLE_NAME_TAB . "'";
        }

        $this->createTable(self::TABLE_NAME, [
            'order_id' => $this->primaryKey(),
            'status' => $this->smallInteger()->notNull()->defaultValue(0)->comment('状态'),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->addForeignKey('fk-order_info-order_id-order-order_id', '{{%order_info}}', 'order_id', '{{%order}}', 'order_id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}