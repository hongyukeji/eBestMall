<?php

use yii\db\Migration;

/**
 * Handles the creation of table `init`.
 */
class m180325_073157_create_init_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%init}}', [
            'id' => $this->primaryKey(),
        ]);

        // 用户表
        $this->createTable('{{%user}}', [
            'user_id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string(),
            'mobile' => $this->string(32)->unique(),
            'payment_password' => $this->string()->comment('支付密码'),
            'avatar' => $this->string()->comment('头像'),
            'nickname' => $this->string()->unique()->comment('用户昵称'),
            'status' => $this->smallInteger()->notNull()->defaultValue(10)->comment('状态'),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);

        $this->createTable('{{%goods}}', [
            'goods_id' => $this->primaryKey()->comment('商品id'),
            'cate_id' => $this->integer()->notNull()->comment('商品分类id'),
            'brand_id' => $this->integer()->notNull()->comment('商品品牌id'),
            'store_id' => $this->integer()->notNull()->comment('店铺id'),
            'goods_code' => $this->string()->notNull()->comment('商品编号'),
            'goods_name' => $this->string()->notNull()->comment('商品名称'),
            'goods_summary' => $this->string()->notNull()->comment('商品简介'),
            'goods_content' => $this->text()->notNull()->comment('商品内容'),
            'goods_mobile_content' => $this->text()->notNull()->comment('商品移动端内容'),

            'goods_default_sku' => $this->integer()->notNull()->defaultValue(0)->comment('商品默认sku_id,默认为0,无sku'),

            'goods_market_price' => $this->decimal(10, 2)->defaultValue('0.00')->notNull()->comment('商品市场价'),
            'goods_price' => $this->decimal(10, 2)->defaultValue('0.00')->notNull()->comment('商品价格'),
            'goods_cost_price' => $this->decimal(10, 2)->defaultValue('0.00')->notNull()->comment('商品成本价'),

            'goods_video' => $this->string()->notNull()->comment('商品视频'),

            'goods_cover_img_source' => $this->string()->notNull()->comment('商品封面原图片'),
            'goods_cover_img_medium' => $this->string()->notNull()->comment('商品封面放大镜图片,400x400'),
            'goods_cover_img_small' => $this->string()->notNull()->comment('商品封面放大镜tab图片,55x55'),
            'goods_cover_thumbnail' => $this->string()->notNull()->comment('商品封面缩略图,220x220'),

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
            'distribution_money_type' => $this->smallInteger()->notNull()->defaultValue(0)->comment('分销金额计算方式:1.商品成交价格-成本价=毛利润百分比(%),2.商品成交价百分比(%),3.固定金额'),
            'distribution_money_value' => $this->decimal(10, 2)->defaultValue('0.00')->notNull()->comment('分销金额值:为客户购买本商品，其推荐人能够通过分成获得的金额基数'),

            'goods_weight' => $this->decimal(10, 3)->notNull()->defaultValue('0.000')->comment('商品重量'),
            'goods_weight_unit' => $this->string()->notNull()->defaultValue('kg')->comment('商品重量单位:1.千克(kg),2.克(g),3.毫克(mg),4.吨(t)'),
            'goods_volume' => $this->decimal(10, 3)->notNull()->defaultValue('0.000')->comment('商品体积'),
            'goods_volume_unit' => $this->string()->notNull()->defaultValue('m3')->comment('商品体积单位:1.立方米(m3),2.立方分米(dm3),3.立方厘米(cm3),4.升(l),5.毫升(ml)'),

            'is_free_shipping' => $this->smallInteger()->notNull()->defaultValue(0)->comment('是否免运费'),
            'shipping_fee_type' => $this->string()->notNull()->defaultValue(0)->comment('计价方式:1.计件,2.重量,3.体积'),

            'is_best' => $this->smallInteger()->notNull()->defaultValue(0)->comment('是否精品'),
            'is_hot' => $this->smallInteger()->notNull()->defaultValue(0)->comment('是否热卖'),
            'is_new' => $this->smallInteger()->notNull()->defaultValue(0)->comment('是否新品'),
            'is_recommend' => $this->smallInteger()->notNull()->defaultValue(0)->comment('是否推荐'),

            'sort_order' => $this->integer()->notNull()->defaultValue(0)->comment('排序顺序'),
            'status' => $this->smallInteger()->notNull()->defaultValue(0)->comment('商品状态:0.下架,1.上架(审核通过),2.未审核,3.审核未通过,4.违规(禁售),5.仓库'),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%init}}');
        $this->dropTable('{{%user}}');
        $this->dropTable('{{%goods}}');
    }
}
