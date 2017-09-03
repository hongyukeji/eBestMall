<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_info', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('nickname')->comment('昵称');
            $table->integer('score')->comment('积分');
            $table->decimal('money',10,2)->comment('余额');
            $table->string('payment_password')->comment('支付密码');
            $table->string('real_name')->comment('真实姓名');
            $table->string('id_card_no')->comment('身份证号码');
            $table->tinyInteger('age')->comment('年龄');
            $table->tinyInteger('sex')->comment('性别');
            $table->string('birthday')->comment('生日');
            $table->string('qq')->comment('QQ');
            $table->string('ww')->comment('旺旺');
            $table->string('address')->comment('地址');
            $table->string('register_ip')->comment('注册IP');
            $table->integer('login_number')->comment('登录次数');
            $table->string('last_login_ip')->comment('最后登录IP');
            $table->integer('last_login_time')->comment('最后登录时间');
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
        Schema::dropIfExists('users_info');
    }
}
