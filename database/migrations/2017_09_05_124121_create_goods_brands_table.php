<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods_brands', function (Blueprint $table) {
            $table->increments('brand_id');
            $table->string('brand_name')->comment('品牌名称');
            $table->string('brand_desc')->comment('品牌描述');
            $table->string('brand_pic')->comment('品牌图片');
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
        Schema::dropIfExists('goods_brands');
    }
}
