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
            $table->increments('id')->comment('分类ID');
            $table->string('name')->comment('分类名称');
            $table->string('code');
            $table->string('desc')->nullable();
            $table->integer('parent_id')->default(0)->comment('分类父ID,默认为0-父类');
            $table->boolean('sort_order')->default(100)->comment('排序顺序');
            $table->boolean('is_show')->default(0)->comment('是否显示');
            $table->boolean('status')->default(1)->comment('状态');
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
        Schema::dropIfExists('categories');
    }
}
