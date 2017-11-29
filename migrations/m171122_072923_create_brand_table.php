<?php

use yii\db\Migration;

class m171122_072923_create_brand_table extends Migration
{
    const TABLE_NAME = '{{%brand}}';
    const TABLE_NAME_TAB = '商品品牌表';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB COMMENT=' . "'" . self::TABLE_NAME_TAB . "'";
        }

        $this->createTable(self::TABLE_NAME, [
            'brand_id' => $this->primaryKey(),
            'brand_name' => $this->string()->notNull()->comment('品牌名称'),
            'brand_brief' => $this->string()->notNull()->comment('品牌简介'),
            'brand_content' => $this->text()->notNull()->comment('品牌内容'),
            'brand_logo' => $this->string()->notNull()->comment('品牌logo图片'),
            'sort_order' => $this->integer()->notNull()->defaultValue(0)->comment('排序'),
            'status' => $this->smallInteger()->notNull()->defaultValue(0)->comment('状态'),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}
