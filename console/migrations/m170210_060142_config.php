<?php

use yii\db\Migration;

class m170210_060142_config extends Migration
{
    const TABLE_NAME ='{{%config}}';
    const TABLE_NAME_TAB ='系统配置';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB COMMENT='."'" . self::TABLE_NAME_TAB ."'";
        }

        $this->createTable(self::TABLE_NAME, [
            'id' => $this->primaryKey(),
            'configCode' => $this->string()->notNull()->unique()->comment('配置关键字'),
            'configValue' => $this->string(3000)->comment('配置值'),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}