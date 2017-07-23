<?php

use yii\db\Migration;

class m170722_092611_create_product_attribute_extends_table extends Migration
{
    const TABLE_NAME = '{{%product_attribute_extends}}';
    const TABLE_NAME_TAB = '产品属性扩展表';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB COMMENT=' . "'" . self::TABLE_NAME_TAB . "'";
        }

        $this->createTable(self::TABLE_NAME, [
            'id' => $this->bigPrimaryKey()->comment('自增ID'),
            'product_id' => $this->bigInteger()->notNull()->comment('产品id'),
            'product_attribute_id' => $this->bigInteger()->notNull()->comment('产品属性id'),
            'product_attribute_value' => $this->string()->notNull()->comment('产品属性值'),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}