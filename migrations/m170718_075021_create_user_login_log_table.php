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
            'id' => $this->PrimaryKey()->comment('自增ID'),
            'user_id' => $this->integer()->notNull()->comment('用户ID'),
            'login_ip' => $this->string()->notNull()->comment('登录IP'),
            'login_time' => $this->integer()->notNull()->comment('登录时间'),
            'login_type' => $this->string()->notNull()->comment('登录终端类型:0.电脑(pc),1.移动设备(mobile)'),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}