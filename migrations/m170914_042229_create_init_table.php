<?php

use yii\db\Migration;

/**
 * Handles the creation of table `init`.
 */
class m170914_042229_create_init_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('init', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('init');
    }
}
