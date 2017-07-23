<?php

use yii\db\Migration;

class m170722_092543_create_product_category_table extends Migration
{
    const TABLE_NAME = '{{%product_category}}';
    const TABLE_NAME_TAB = '产品分类表';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB COMMENT=' . "'" . self::TABLE_NAME_TAB . "'";
        }

        $this->createTable(self::TABLE_NAME, [
            'id' => $this->primaryKey()->comment('自增ID'),
            'name' => $this->string()->notNull()->comment('分类名称'),
            'pid' => $this->integer()->notNull()->comment('分类父id'),
            'sort_order' => $this->smallInteger()->notNull()->comment('排序次序'),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}