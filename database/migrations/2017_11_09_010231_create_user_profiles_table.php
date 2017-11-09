<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     * 用户简介表
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('full_name')->nullable()->comment('姓名');
            $table->tinyInteger('identity_card_type')->nullable()->comment('证件类型:1-身份证,2-军官证,3-护照');
            $table->string('identity_card_number')->nullable()->comment('证件号码');
            $table->tinyInteger('age')->nullable()->comment('年龄');
            $table->time('birthday')->nullable()->comment('生日');
            $table->tinyInteger('gender')->default(0)->comment('性别:0-保密,1-男,2-女');
            $table->string('qq')->nullable()->comment('QQ');
            $table->string('ww')->nullable()->comment('旺旺');
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
        Schema::dropIfExists('user_profiles');
    }
}
