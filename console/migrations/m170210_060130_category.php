<?php

use yii\db\Migration;

class m170210_060130_category extends Migration
{
    const TABLE_NAME ='{{%category}}';
    const TABLE_NAME_TAB ='分类';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB COMMENT='."'" . self::TABLE_NAME_TAB ."'";
        }

        $this->createTable(self::TABLE_NAME, [
            'categoryId' => $this->primaryKey(),
            'categoryName' => $this->string(32)->notNull()->comment('分类名称'),
            'categoryParentId' => $this->smallInteger()->defaultValue('0')->comment('分类父ID'),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}