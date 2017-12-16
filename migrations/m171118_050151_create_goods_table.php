<?php

use yii\db\Migration;

class m171118_050151_create_goods_table extends Migration
{
    const TABLE_NAME = '{{%goods}}';
    const TABLE_NAME_TAB = '商品表';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB COMMENT=' . "'" . self::TABLE_NAME_TAB . "'";
        }

        $this->createTable(self::TABLE_NAME, [
            'goods_id' => $this->primaryKey()->comment('商品id'),
            'cate_id' => $this->integer()->notNull()->comment('商品分类id'),
            'brand_id' => $this->integer()->notNull()->comment('商品品牌id'),
            'store_id' => $this->integer()->notNull()->comment('店铺id'),
            'goods_code' => $this->string()->notNull()->comment('商品编号'),
            'goods_name' => $this->string()->notNull()->comment('商品名称'),
            'goods_brief' => $this->string()->notNull()->comment('商品简介'),
            'goods_keywords' => $this->string()->notNull()->comment('商品关键字'),
            'goods_market_price' => $this->decimal(10, 2)->defaultValue('0.00')->notNull()->comment('商品市场价'),
            'goods_price' => $this->decimal(10, 2)->defaultValue('0.00')->notNull()->comment('商品价格'),
            'goods_cost_price' => $this->decimal(10, 2)->defaultValue('0.00')->notNull()->comment('商品成本价'),
            'goods_sales_promotion' => $this->decimal(10, 2)->defaultValue('0.00')->notNull()->comment('商品促销价'),
            'goods_cover_img_source' => $this->string()->notNull()->comment('商品封面原图片'),
            'goods_cover_img_medium' => $this->string()->notNull()->comment('商品封面放大镜图片,400x400'),
            'goods_cover_img_small' => $this->string()->notNull()->comment('商品封面放大镜tab图片,55x55'),
            'goods_cover_thumbnail' => $this->string()->notNull()->comment('商品封面缩略图,220x220'),
            'goods_content' => $this->text()->notNull()->comment('商品内容'),
            'goods_mobile_content' => $this->text()->notNull()->comment('商品移动端内容'),
            'goods_default_sku' => $this->integer()->notNull()->defaultValue(0)->comment('商品默认sku_id,默认为0,无sku'),
            'virtual_sales_volume' => $this->integer()->notNull()->defaultValue(0)->comment('虚拟销量'),
            'spu_stock' => $this->integer()->notNull()->defaultValue(0)->comment('产品spu库存'),
            'spu_sales_volume' => $this->integer()->notNull()->defaultValue(0)->comment('产品spu销量'),
            'spu_comment_count' => $this->integer()->notNull()->defaultValue(0)->comment('产品评论数'),
            'is_best' => $this->smallInteger()->notNull()->defaultValue(0)->comment('是否推荐'),
            'is_new' => $this->smallInteger()->notNull()->defaultValue(0)->comment('是否新品'),
            'is_hot' => $this->smallInteger()->notNull()->defaultValue(0)->comment('是否热卖'),
            'sort_order' => $this->integer()->notNull()->defaultValue(0)->comment('排序顺序'),
            'status' => $this->smallInteger()->notNull()->defaultValue(0)->comment('商品状态:0-下架,1-上架'),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

        // 商品演示数据
        $this->batchInsert('{{%goods}}', [
            'goods_id',
            'cate_id',
            'brand_id',
            'store_id',
            'goods_code',
            'goods_name',
            'goods_brief',
            'goods_keywords',
            'goods_price',
            'goods_market_price',
            'goods_cover_img_source',
            'goods_cover_img_medium',
            'goods_cover_img_small',
            'goods_cover_thumbnail',
            'goods_content',
            'goods_mobile_content',
            'goods_default_sku',
            'virtual_sales_volume',
            'sort_order',
            'status',
            'created_at',
            'updated_at',
        ], [
            [
                '1',
                '163',
                '1',
                '1',
                'EBM000000001',
                '苹果(Apple） iPhoneX Plus - 测试商品 - 平台自营', '暖春开学季，就要“焕”新装！领券可享12期白条免息！<a href="#" title="量免息券，领券戳这里！ ">量免息券，领券戳这里！</a><br>推荐选择下方的移动、联通、电信优惠购，套餐有优惠，还有话费返还。',
                '苹果 手机 iPhone',
                '7999.99',
                '8999.99',
                '/static/img/temp/temp-goods_img_002_big.jpg',
                '/static/img/temp/temp-goods_img_002.jpg',
                '/static/img/temp/temp-goods_img_002_small.jpg',
                '/static/img/temp/temp-goods_img_002.jpg',
                '<p style="text-align:center;"><img src="//img30.360buyimg.com/popWaterMark/jfs/t3292/30/4768230111/183978/11cad8a1/585c8d4eN8ea09fd1.jpg"></p>',
                '手机端内容',
                '0',
                '999999',
                '100',
                '1',
                time(),
                time(),
            ],
        ]);
    }

    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}