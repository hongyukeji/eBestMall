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
            'username' => $this->string()->notNull()->unique(),
            'nickname' => $this->string(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string()->unique(),
            'mobile_phone' => $this->string(11)->unique(),
            //'role' => $this->integer(),   //角色-待定
            'avatar' => $this->string(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->insert('{{%user}}', [
            'username' => 'shadow',
            'nickname' => '柒',
            'auth_key' => 'UhrAHnHrTkj6MLx2BZRsrPW8RBjGTe63',
            'password_hash' => '$2y$13$fFB9QG8OXKQINUr/fOL6OOrMngEQ.ZRGaLVkg5iUMP.zwsrrSUwEi',
            'email' => 'admin@hongyuvip.com',
            'mobile_phone' => '13952101395',
            'status' => '10',
            'created_at' => '1499707686',
            'updated_at' => '1499707686',
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%user}}');
    }
}
