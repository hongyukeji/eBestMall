<?php

use yii\db\Migration;

class m180102_141946_create_messages_board_table extends Migration
{
    const TABLE_NAME = '{{%messages_board}}';
    const TABLE_NAME_TAB = '留言表';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB COMMENT=' . "'" . self::TABLE_NAME_TAB . "'";
        }

        $this->createTable(self::TABLE_NAME, [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull()->defaultValue(0)->comment('用户ID,默认为0-游客'),
            'name' => $this->string()->notNull()->comment('名称'),
            'email' => $this->string()->comment('邮箱'),
            'mobile' => $this->string()->comment('手机号'),
            'content ' => $this->text()->notNull()->comment('留言内容'),
            'user_ip' => $this->string()->notNull()->comment('用户ip'),
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
