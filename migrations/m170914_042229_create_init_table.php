<?php

use yii\db\Migration;

/**
 * Handles the creation of table `init`.
 */
class m170914_042229_create_init_table extends Migration
{
    const TABLE_NAME = '{{%init}}';
    const TABLE_NAME_TAB = '初始化';

    /**
     * @inheritdoc
     */
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB COMMENT=' . "'" . self::TABLE_NAME_TAB . "'";
        }

        $this->createTable(self::TABLE_NAME, [
            'id' => $this->primaryKey()->comment('自增ID'),
        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}
