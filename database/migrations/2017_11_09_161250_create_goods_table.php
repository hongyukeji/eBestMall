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
            $table->integer('cate_id')->comment('分类ID');
            $table->string('goods_name')->comment('商品名称');
            $table->string('goods_desc')->default('')->comment('商品描述');
            $table->string('goods_code')->comment('商品编号');
            $table->string('goods_cover')->comment('商品封面图');
            $table->decimal('price',10,2)->comment('价格');
            $table->decimal('market_price',10,2)->comment('市场价');
            $table->text('goods_content')->comment('商品内容');
            $table->unsignedInteger('stock')->default(0)->comment('库存');
            $table->unsignedInteger('sales_volume')->default(0)->comment('销量');
            $table->unsignedInteger('comment')->default(0)->comment('评论');
            $table->boolean('is_hot')->default(0)->comment('是否热卖');
            $table->boolean('is_best')->default(0)->comment('是否精品');
            $table->boolean('is_new')->default(0)->comment('是否最新');
            $table->integer('sort_order')->default(0)->comment('排序顺序');
            $table->unsignedTinyInteger('state')->comment('状态');
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
