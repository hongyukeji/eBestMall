<?php

use yii\db\Migration;

class m171217_050018_create_user_collection_table extends Migration
{
    const TABLE_NAME = '{{%user_collection}}';
    const TABLE_NAME_TAB = '用户收藏表';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB COMMENT=' . "'" . self::TABLE_NAME_TAB . "'";
        }

        $this->createTable(self::TABLE_NAME, [
            'coll_id' => $this->primaryKey(),
            'coll_type' => $this->smallInteger()->notNull()->defaultValue(0)->comment('收藏类型:1.商品(goods),2.店铺(store),3.文章(article)'),
            'coll_type_id' => $this->integer()->notNull()->defaultValue(0)->comment('收藏类型id'),
            'sort_order' => $this->integer()->notNull()->defaultValue(0)->comment('排序'),
            'status' => $this->smallInteger()->notNull()->defaultValue(0)->comment('状态'),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}
