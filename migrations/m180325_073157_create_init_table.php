<?php

use yii\db\Migration;

/**
 * Handles the creation of table `init`.
 */
class m180325_073157_create_init_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%init}}', [
            'id' => $this->primaryKey(),
        ]);

        // 用户表
        $this->createTable('{{%user}}', [
            'user_id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string(),
            'mobile' => $this->string(32)->unique(),
            'payment_password' => $this->string()->comment('支付密码'),
            'avatar' => $this->string()->comment('头像'),
            'nickname' => $this->string()->unique()->comment('用户昵称'),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%init}}');
        $this->dropTable('{{%user}}');
    }
}
