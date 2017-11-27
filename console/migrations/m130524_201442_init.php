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
            'user_id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string()->notNull()->unique(),
            'avatar' => $this->string()->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->batchInsert('{{%user}}', [
            'user_id',
            'username',
            'auth_key',
            'password_hash',
            'password_reset_token',
            'email',
            'avatar',
            'status',
            'created_at',
            'updated_at',
        ], [
            [
                '1',
                'admin',
                'UhrAHnHrTkj6MLx2BZRsrPW8RBjGTe63',
                '$2y$13$fFB9QG8OXKQINUr/fOL6OOrMngEQ.ZRGaLVkg5iUMP.zwsrrSUwEi',
                'password_reset_token',
                'admin@hongyuvip.com',
                'avatar',
                '1',
                time(),
                time(),
            ],
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%user}}');
    }
}
