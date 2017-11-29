<?php

use yii\db\Migration;

class m171120_051214_create_store_table extends Migration
{
    const TABLE_NAME = '{{%store}}';
    const TABLE_NAME_TAB = '店铺表';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB COMMENT=' . "'" . self::TABLE_NAME_TAB . "'";
        }

        $this->createTable(self::TABLE_NAME, [
            'store_id' => $this->primaryKey()->comment('店铺id'),
            'user_id' => $this->integer()->notNull()->defaultValue(0)->comment('用户id'),
            'store_name' => $this->string()->notNull()->comment('店铺名称'),
            'sort_order' => $this->integer()->notNull()->defaultValue(0)->comment('排序'),
            'is_self' => $this->smallInteger()->notNull()->defaultValue(0)->comment('是否自营'),
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
