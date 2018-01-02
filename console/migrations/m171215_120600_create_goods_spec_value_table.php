<?php

use yii\db\Migration;

class m171215_120600_create_goods_spec_value_table extends Migration
{
    const TABLE_NAME = '{{%goods_spec_value}}';
    const TABLE_NAME_TAB = '商品规格值';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB COMMENT=' . "'" . self::TABLE_NAME_TAB . "'";
        }

        $this->createTable(self::TABLE_NAME, [
            'id' => $this->primaryKey(),
            'spec_id' => $this->integer()->notNull()->comment('商品规格id'),
            'spec_value' => $this->string()->notNull()->comment('规格值'),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}
