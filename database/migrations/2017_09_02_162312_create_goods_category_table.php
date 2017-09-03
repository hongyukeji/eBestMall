<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods_category', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cat_id')->comment('分类id');
            $table->string('cat_name')->comment('分类名称');
            $table->integer('parent_id')->comment('分类父id');
            $table->string('keywords')->comment('关键字');
            $table->string('description')->comment('描述');
            $table->tinyInteger('sort_order')->comment('排序次序');
            $table->tinyInteger('is_show')->comment('是否显示');
            $table->tinyInteger('status')->comment('状态');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('goods_category');
    }
}
