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
            $table->increments('goods_id');
            $table->string('goods_name')->comment('商品名称');
            $table->string('goods_desc')->comment('商品描述')->nullable();
            $table->text('goods_content')->comment('商品详情');
            $table->decimal('goods_price', 10, 2)->default('0.00')->comment('商品价格');
            $table->integer('sort_order')->default(0)->comment('排序顺序');
            $table->smallInteger('status')->default(0)->comment('状态');
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
