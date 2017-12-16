<?php

use yii\db\Migration;

class m171216_090049_create_goods_images_table extends Migration
{
    const TABLE_NAME = '{{%goods_images}}';
    const TABLE_NAME_TAB = '商品图片表';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB COMMENT=' . "'" . self::TABLE_NAME_TAB . "'";
        }

        $this->createTable(self::TABLE_NAME, [
            'img_id' => $this->primaryKey(),
            'img_original' => $this->string()->notNull()->comment('原图片'),
            'img_thumbnail' => $this->string()->notNull()->comment('缩略图'),
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
