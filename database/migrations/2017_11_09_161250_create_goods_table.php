<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     * 商品表
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->increments('goods_id');
            $table->integer('cate_id')->default(0)->comment('分类id');
            $table->integer('brand_id')->default(0)->comment('品牌id');
            $table->integer('sku_id')->default(0)->comment('商品SKUid');
            $table->string('goods_code')->default('')->comment('商品编号');
            $table->string('goods_name')->comment('商品名称');
            $table->string('goods_desc')->default('')->comment('商品描述');
            $table->decimal('shop_price',10,2)->default(0)->comment('商城价格');
            $table->decimal('market_price',10,2)->default(0)->comment('市场价');
            $table->decimal('cost_price',10,2)->default(0)->comment('成本价价');
            $table->integer('weight')->default(0)->comment('重量单位:克');
            $table->string('goods_cover')->default('')->comment('商品封面图');
            $table->string('goods_images')->default('')->comment('商品基本图片集');
            $table->text('goods_content')->comment('商品内容');
            $table->unsignedInteger('stock_count')->default(0)->comment('库存数量');
            $table->unsignedInteger('sale_count')->default(0)->comment('销售数量');
            $table->unsignedInteger('visit_count')->default(0)->comment('访问数量');
            $table->unsignedInteger('review_count')->default(0)->comment('评价数量');
            $table->boolean('is_hot')->default(0)->comment('是否热销');
            $table->boolean('is_best')->default(0)->comment('是否推荐');
            $table->boolean('is_new')->default(0)->comment('是否新品');
            $table->integer('display_order')->default(0)->comment('显示顺序');
            $table->unsignedTinyInteger('state')->default(0)->comment('状态:1-上架,0-下架');
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('goods');
    }
}
