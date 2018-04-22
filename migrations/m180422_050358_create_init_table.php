<?php

use yii\db\Migration;

/**
 * Handles the creation of table `init`.
 */
class m180422_050358_create_init_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%init}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%init}}');
    }
}
