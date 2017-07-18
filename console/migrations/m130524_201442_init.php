<?php

use yii\db\Migration;

class m130524_201442_init extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique()->comment('用户名'),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull()->comment('哈希密码'),
            'password_reset_token' => $this->string()->unique()->comment('重置密码token'),
            'email' => $this->string()->unique()->comment('邮箱'),
            'mobile_phone' => $this->string(11)->unique()->comment('手机号'),
            //'role' => $this->integer()->comment('角色权限'),
            'avatar' => $this->string()->comment('用户头像'),
            'status' => $this->smallInteger()->notNull()->defaultValue(10)->comment('状态'),
            'created_at' => $this->integer()->notNull()->comment('创建时间'),
            'updated_at' => $this->integer()->notNull()->comment('更新时间'),
        ], $tableOptions);

        $this->insert('{{%user}}', [
            'username' => 'shadow',
            'auth_key' => 'UhrAHnHrTkj6MLx2BZRsrPW8RBjGTe63',
            'password_hash' => '$2y$13$fFB9QG8OXKQINUr/fOL6OOrMngEQ.ZRGaLVkg5iUMP.zwsrrSUwEi',
            'email' => 'admin@hongyuvip.com',
            'mobile_phone' => '13952101395',
            'status' => '10',
            'created_at' => time(),
            'updated_at' => time(),
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%user}}');
    }
}
