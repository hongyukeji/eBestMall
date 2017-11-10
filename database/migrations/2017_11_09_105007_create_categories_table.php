<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     * 商品分类表
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('cate_id')->comment('分类id');
            $table->string('cate_name')->comment('分类名称');
            $table->string('short_name')->comment('分类简称');
            $table->integer('parent_id')->default(0)->comment('分类父id,默认为0-父类');
            $table->unsignedTinyInteger('cate_level')->default(1)->comment('分类等级,默认为1级分类');
            $table->string('cate_keywords')->comment('分类关键词');
            $table->string('cate_desc')->default('')->comment('分类描述');
            $table->string('cate_image')->default('')->comment('分类图片');
            $table->integer('sort_order')->default(0)->comment('排序顺序');
            $table->boolean('is_show')->default(0)->comment('是否显示');
            $table->boolean('status')->default(1)->comment('状态');
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
        Schema::dropIfExists('categories');
    }
}
