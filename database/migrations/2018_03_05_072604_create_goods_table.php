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
            $table->integer('cate_id');
            $table->string('goods_name')->comment('商品名称');
            $table->string('goods_slogan')->comment('商品标语');
            $table->text('goods_content')->comment('商品内容');
            $table->decimal('goods_price', 10, 2)->comment('商品价格');
            $table->integer('sort')->comment('排序');
            $table->smallInteger('status')->comment('状态');
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
