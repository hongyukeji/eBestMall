<?php

use yii\db\Migration;

class m170722_092602_create_product_attribute_table extends Migration
{
    const TABLE_NAME = '{{%product_attribute}}';
    const TABLE_NAME_TAB = '产品属性表';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB COMMENT=' . "'" . self::TABLE_NAME_TAB . "'";
        }

        $this->createTable(self::TABLE_NAME, [
            'id' => $this->bigPrimaryKey()->comment('自增ID'),
            'name' => $this->string()->notNull()->comment('产品属性名称'),
            'cat_id' => $this->integer()->notNull()->comment('产品属性所属分类id'),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}