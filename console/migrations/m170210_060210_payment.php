<?php

use yii\db\Migration;

class m170210_060210_payment extends Migration
{
    const TABLE_NAME ='{{%payment}}';
    const TABLE_NAME_TAB ='支付方式';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB COMMENT='."'" . self::TABLE_NAME_TAB ."'";
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