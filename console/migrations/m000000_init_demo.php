<?php

use yii\db\Migration;

class m000000_init_demo extends Migration
{
    const TABLE_NAME ='{{%demo}}';
    const TABLE_NAME_TAB ='演示';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB COMMENT='."'" . self::TABLE_NAME_TAB ."'";
        }

        $this->createTable(self::TABLE_NAME, [
            'Id' => $this->primaryKey(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}