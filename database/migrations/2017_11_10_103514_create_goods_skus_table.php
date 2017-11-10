<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsSkusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods_skus', function (Blueprint $table) {
            $table->increments('sku_id');
            $table->integer('goods_id')->default(0)->comment('商品id');
            $table->integer('attr_id')->default(0)->comment('属性id');
            $table->integer('attr_value_id')->default(0)->comment('属性值id');
            $table->string('input_value')->default(0)->comment('输入值');
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
        Schema::dropIfExists('goods_skus');
    }
}
