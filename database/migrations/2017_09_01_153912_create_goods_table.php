<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->increments('goods_id')->comment('商品id');
            $table->string('goods_name')->comment('商品名称');
            $table->string('goods_describe')->comment('商品描述');
            $table->integer('cat_id')->comment('商品分类id');
            $table->text('goods_content')->comment('商品内容');

            $table->decimal('price',10,2)->comment('价格');
            $table->decimal('market_price',10,2)->comment('市场价');

            $table->integer('stock')->comment('库存');
            $table->integer('sales_volume')->comment('销量');
            $table->integer('comment')->comment('评论');

            $table->tinyInteger('is_best')->comment('是否精品');
            $table->tinyInteger('is_new')->comment('是否最新');
            $table->tinyInteger('is_hot')->comment('是否热卖');

            $table->tinyInteger('status')->comment('状态');
            $table->timestamps();
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
