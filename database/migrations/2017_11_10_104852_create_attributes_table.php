<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttributesTable extends Migration
{
    /**
     * Run the migrations.
     * 商品属性表
     * @return void
     */
    public function up()
    {
        Schema::create('attributes', function (Blueprint $table) {
            $table->increments('attr_id');
            $table->string('attr_name')->default('')->comment('属性名称');
            $table->integer('display_order')->default(0)->comment('显示顺序');
            $table->unsignedTinyInteger('state')->default(0)->comment('状态:1-正常,0-禁用');
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
        Schema::dropIfExists('attributes');
    }
}
