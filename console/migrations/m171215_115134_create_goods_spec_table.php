<?php

use yii\db\Migration;

class m171215_115134_create_goods_spec_table extends Migration
{
    const TABLE_NAME = '{{%goods_spec}}';
    const TABLE_NAME_TAB = '商品规格表';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB COMMENT=' . "'" . self::TABLE_NAME_TAB . "'";
        }

        $this->createTable(self::TABLE_NAME, [
            'spec_id' => $this->primaryKey(),
            'spec_name' => $this->string()->notNull()->comment('规格名称'),
            'spec_value' => $this->string()->notNull()->comment('规格值'),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}
