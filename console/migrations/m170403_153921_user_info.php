<?php

use yii\db\Migration;

class m170403_153921_user_info extends Migration
{
    const TABLE_NAME = '{{%user_info}}';
    const TABLE_NAME_TAB = '用户信息';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB COMMENT=' . "'" . self::TABLE_NAME_TAB . "'";
        }

        $this->createTable(self::TABLE_NAME, [
            'id' => $this->bigPrimaryKey(),
            'userId' => $this->bigInteger()->notNull()->defaultValue('0')->unique()->comment('用户ID'),
            'realName' => $this->string()->defaultValue('')->comment('真实姓名'),
            'age' => $this->integer()->defaultValue('0')->comment('年龄'),
            'sex' => 'ENUM("0","1","2") DEFAULT "0" COMMENT "性别,0-保密,1-男,2-女"',
            'birthday' => $this->string()->defaultValue('0')->comment('生日'),
            'nickname' => $this->string()->defaultValue('')->comment('昵称'),
            'qq' => $this->string()->defaultValue('0')->comment('QQ'),
            'createdTime' => $this->integer()->defaultValue('0')->comment('创建时间'),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}