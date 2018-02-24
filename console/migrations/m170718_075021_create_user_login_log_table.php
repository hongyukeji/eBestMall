<?php

use yii\db\Migration;

class m170718_075021_create_user_login_log_table extends Migration
{
    const TABLE_NAME = '{{%user_login_log}}';
    const TABLE_NAME_TAB = '用户登录记录表';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB COMMENT=' . "'" . self::TABLE_NAME_TAB . "'";
        }

        $this->createTable(self::TABLE_NAME, [
            'user_login_log_id' => $this->PrimaryKey()->comment('自增ID'),
            'user_id' => $this->integer()->notNull()->comment('用户ID'),
            'login_count' => $this->integer()->notNull()->comment('登录次数'),
            'prev_login_time' => $this->integer()->notNull()->comment('上次登录时间'),
            'prev_login_ip' => $this->string()->notNull()->comment('上次登录IP'),
            'last_login_time' => $this->integer()->notNull()->comment('最后登录时间'),
            'last_login_ip' => $this->string()->notNull()->comment('登录IP'),
            'login_type' => $this->string()->notNull()->comment('登录终端类型:0.电脑(pc),1.移动设备(mobile)'),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->addForeignKey('fk-user_login_log-user_id-user-user_id', '{{%user_login_log}}', 'user_id', '{{%user}}', 'user_id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}