<?php

use yii\db\Migration;

class m170722_092625_create_product_brand_table extends Migration
{
    const TABLE_NAME = '{{%product_brand}}';
    const TABLE_NAME_TAB = '产品品牌表';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB COMMENT=' . "'" . self::TABLE_NAME_TAB . "'";
        }

        $this->createTable(self::TABLE_NAME, [
            'id' => $this->primaryKey()->comment('自增ID'),
            'cat_id' => $this->integer()->notNull()->comment('产品分类id'),
            'name' => $this->string()->notNull()->comment('品牌名称'),
            'title' => $this->string()->notNull()->comment('品牌描述'),
            'content' => $this->text()->notNull()->comment('品牌介绍内容'),
            'logo' => $this->string()->notNull()->comment('品牌logo'),
            'status' => $this->smallInteger(1)->notNull()->comment('状态:0-禁用,1-开启'),
            'created_time' => $this->integer()->notNull()->comment('创建时间'),
            'updated_time' => $this->integer()->notNull()->comment('更新时间'),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}