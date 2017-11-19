<?php

use yii\db\Migration;

class m171119_033149_create_category_table extends Migration
{
    const TABLE_NAME = '{{%category}}';
    const TABLE_NAME_TAB = '商品分类表';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB COMMENT=' . "'" . self::TABLE_NAME_TAB . "'";
        }

        $this->createTable(self::TABLE_NAME, [
            'cate_id' => $this->primaryKey(),
            'cate_name' => $this->string()->notNull()->comment('分类名称'),
            'parent_id' => $this->integer()->notNull()->defaultValue(0)->comment('分类父id'),
            'is_show' => $this->smallInteger()->notNull()->defaultValue(0)->comment('是否显示'),
            'sort_order' => $this->smallInteger()->notNull()->defaultValue(0)->comment('排序'),
            'status' => $this->smallInteger()->notNull()->defaultValue(0)->comment('状态'),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}
