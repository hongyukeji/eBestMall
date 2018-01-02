<?php

use yii\db\Migration;

class m171217_045444_create_user_account_log_table extends Migration
{
    const TABLE_NAME = '{{%user_account_log}}';
    const TABLE_NAME_TAB = '用户账户记录表';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB COMMENT=' . "'" . self::TABLE_NAME_TAB . "'";
        }

        $this->createTable(self::TABLE_NAME, [
            'user_account_log_id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull()->comment('用户ID'),
            'name' => $this->string()->notNull()->comment('名称'),
            'sort_order' => $this->integer()->notNull()->defaultValue(0)->comment('排序'),
            'status' => $this->smallInteger()->notNull()->defaultValue(0)->comment('状态'),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->addForeignKey('fk-user_account_log-user_id-user-user_id', '{{%user_account_log}}', 'user_id', '{{%user}}', 'user_id', 'CASCADE', 'CASCADE');

    }

    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}
