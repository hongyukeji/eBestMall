<?php

use yii\db\Migration;

class m170722_092341_create_product_table extends Migration
{
    const TABLE_NAME = '{{%product}}';
    const TABLE_NAME_TAB = '产品表';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB COMMENT=' . "'" . self::TABLE_NAME_TAB . "'";
        }

        $this->createTable(self::TABLE_NAME, [
            'id' => $this->bigPrimaryKey()->comment('自增ID'),
            'name' => $this->string()->notNull()->comment('产品名称'),
            'title' => $this->string()->notNull()->comment('产品标题'),
            'content' => $this->string()->notNull()->comment('产品内容'),
            'cat_id' => $this->integer()->notNull()->comment('产品分类id'),
            'brand_id' => $this->integer()->null()->comment('品牌id'),
            'store_id' => $this->integer()->notNull()->comment('产品所属店铺id'),
            'sku_id_default' => $this->bigInteger()->notNull()->comment('默认sku_id'),
            'commodity_code' => $this->string()->notNull()->comment('产品编码'),
            'spu_cover' => $this->string()->notNull()->comment('产品封面'),
            'spu_images' => $this->text()->notNull()->comment('产品spu图片集'),
            'spu_stock' => $this->integer()->notNull()->comment('产品spu库存'),
            'spu_sales_volume' => $this->integer()->notNull()->comment('产品spu销量'),
            'spu_comment' => $this->integer()->notNull()->comment('产品评论数'),
            'is_best' => $this->smallInteger(1)->notNull()->comment('是否精品'),
            'is_new' => $this->smallInteger(1)->notNull()->comment('是否最新'),
            'is_hot' => $this->smallInteger(1)->notNull()->comment('是否热卖'),
            'sort_order' => $this->smallInteger()->notNull()->comment('排序次序'),
            'status' => $this->smallInteger(1)->notNull()->comment('状态:0-下架,1-上架'),
            'created_time' => $this->integer()->notNull()->comment('创建时间'),
            'updated_time' => $this->integer()->notNull()->comment('更新时间'),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}