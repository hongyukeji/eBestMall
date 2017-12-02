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
            'cate_keys' => $this->string()->notNull()->defaultValue('')->comment('分类关键字'),
            'cate_desc' => $this->string()->notNull()->defaultValue('')->comment('分类描述'),
            'is_best' => $this->smallInteger()->notNull()->defaultValue(0)->comment('是否推荐在顶级分类'),
            'is_show_channel' => $this->smallInteger()->notNull()->defaultValue(0)->comment('是否显示在分类频道'),
            'is_show_tab' => $this->smallInteger()->notNull()->defaultValue(0)->comment('是否显示在导航栏'),
            'is_show' => $this->smallInteger()->notNull()->defaultValue(0)->comment('是否显示'),
            'sort_order' => $this->integer()->notNull()->defaultValue(0)->comment('排序'),
            'status' => $this->smallInteger()->notNull()->defaultValue(0)->comment('状态'),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}
