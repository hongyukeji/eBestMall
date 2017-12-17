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

            'goods_cover_img_source' => $this->string()->notNull()->comment('商品封面原图片'),
            'goods_cover_img_medium' => $this->string()->notNull()->comment('商品封面放大镜图片,400x400'),
            'goods_cover_img_small' => $this->string()->notNull()->comment('商品封面放大镜tab图片,55x55'),
            'goods_cover_thumbnail' => $this->string()->notNull()->comment('商品封面缩略图,220x220'),
            'goods_video' => $this->string()->notNull()->comment('商品视频'),

            'goods_content' => $this->text()->notNull()->comment('商品内容'),
            'goods_mobile_content' => $this->text()->notNull()->comment('商品移动端内容'),

            'goods_default_sku' => $this->integer()->notNull()->defaultValue(0)->comment('商品默认sku_id,默认为0,无sku'),

            'virtual_browse_count' => $this->integer()->notNull()->defaultValue(0)->comment('虚拟商品浏览数基数'),
            'goods_browse_count' => $this->integer()->notNull()->defaultValue(0)->comment('商品浏览数'),

            'goods_comment_count' => $this->integer()->notNull()->defaultValue(0)->comment('商品评论数'),

            'virtual_sales_volume' => $this->integer()->notNull()->defaultValue(0)->comment('虚拟销量基数'),
            'spu_sales_volume' => $this->integer()->notNull()->defaultValue(0)->comment('产品spu销量'),

            'spu_stock' => $this->integer()->notNull()->defaultValue(0)->comment('产品spu库存'),
            'is_show_stock' => $this->smallInteger()->notNull()->defaultValue(0)->comment('是否显示库存'),

            'is_sales_promotion' => $this->smallInteger()->notNull()->defaultValue(0)->comment('是否促销'),
            'sales_promotion_price' => $this->decimal(10, 2)->defaultValue('0.00')->notNull()->comment('促销价'),
            'sales_promotion_start_time' => $this->string()->notNull()->defaultValue(0)->comment('促销开始时间'),
            'sales_promotion_end_time' => $this->string()->notNull()->defaultValue(0)->comment('促销结束时间'),

            'is_limit_buy' => $this->smallInteger()->notNull()->defaultValue(0)->comment('是否限购'),
            'limit_buy_number' => $this->smallInteger()->notNull()->defaultValue(0)->comment('限购数量'),
            'limit_buy_start_time' => $this->string()->notNull()->defaultValue(0)->comment('限购开始时间'),
            'limit_buy_end_time' => $this->string()->notNull()->defaultValue(0)->comment('限购结束时间'),

            'is_distribution' => $this->smallInteger()->notNull()->defaultValue(0)->comment('是否分销'),
            'distribution_money_type' => $this->smallInteger()->notNull()->defaultValue(0)->comment('分销金额计算方式:0.商品成交价格-成本价=毛利润百分比(%),1.商品成交价百分比(%),2.固定金额'),
            'distribution_money_value' => $this->decimal(10, 2)->defaultValue('0.00')->notNull()->comment('分销金额值:为客户购买本商品，其推荐人能够通过分成获得的金额基数'),

            'goods_weight' => $this->decimal(10, 3)->notNull()->defaultValue('0.000')->comment('商品重量'),
            'goods_weight_unit' => $this->string()->notNull()->defaultValue(0)->comment('商品重量单位:0.千克(kg),1.克(g),2.毫克(mg),3.吨(t)'),
            'goods_volume' => $this->decimal(10, 3)->notNull()->defaultValue('0.000')->comment('商品体积'),
            'goods_volume_unit' => $this->string()->notNull()->defaultValue(0)->comment('商品体积单位:0.立方米(M3),1.立方分米(DM3),2.立方厘米(CM3)3.升(L)4.毫升(ML)'),

            'is_free_shipping' => $this->smallInteger()->notNull()->defaultValue(0)->comment('是否免运费'),
            'shipping_fee_type' => $this->string()->notNull()->defaultValue(0)->comment('计价方式:0.计件,1.重量,2.体积'),

            'is_best' => $this->smallInteger()->notNull()->defaultValue(0)->comment('是否精品'),
            'is_hot' => $this->smallInteger()->notNull()->defaultValue(0)->comment('是否热卖'),
            'is_new' => $this->smallInteger()->notNull()->defaultValue(0)->comment('是否新品'),
            'is_recommend' => $this->smallInteger()->notNull()->defaultValue(0)->comment('是否推荐'),

            'sort_order' => $this->integer()->notNull()->defaultValue(0)->comment('排序顺序'),
            'status' => $this->smallInteger()->notNull()->defaultValue(0)->comment('商品状态:0.下架,1.上架(审核通过),2.未审核,3.审核未通过,4.违规(禁售),5.仓库'),
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
            'goods_weight',
            'goods_name',
            'goods_brief',
            'goods_keywords',
            'goods_price',
            'goods_market_price',
            'goods_cover_img_source',
            'goods_cover_img_medium',
            'goods_cover_img_small',
            'goods_cover_thumbnail',
            'goods_video',
            'goods_content',
            'goods_mobile_content',
            'goods_default_sku',
            'goods_browse_count',
            'goods_comment_count',
            'virtual_sales_volume',
            'spu_stock',
            'is_show_stock',
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
                '0.435kg',
                '苹果(Apple） iPhoneX Plus - 测试商品 - 平台自营', '暖春开学季，就要“焕”新装！领券可享12期白条免息！<a href="#" title="量免息券，领券戳这里！ ">量免息券，领券戳这里！</a><br>推荐选择下方的移动、联通、电信优惠购，套餐有优惠，还有话费返还。',
                '苹果 手机 iPhone',
                '7999.99',
                '8999.99',
                '/static/img/temp/temp-goods_img_002_big.jpg',
                '/static/img/temp/temp-goods_img_002.jpg',
                '/static/img/temp/temp-goods_img_002_small.jpg',
                '/static/img/temp/temp-goods_img_002.jpg',
                '/uploads/temps/video-001.mp4',
                '<p style="text-align:center;"><img src="//img30.360buyimg.com/popWaterMark/jfs/t3292/30/4768230111/183978/11cad8a1/585c8d4eN8ea09fd1.jpg"></p>',
                '手机端内容',
                '0',
                '999999',
                '999999',
                '999999',
                '999999',
                '0',
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