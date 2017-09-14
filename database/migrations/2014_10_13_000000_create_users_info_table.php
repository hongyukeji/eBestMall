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
            $table->string('nickname')->nullable()->comment('昵称');
            $table->integer('score')->comment('积分');
            $table->decimal('money',10,2)->comment('余额');
            $table->string('payment_password')->nullable()->comment('支付密码');
            $table->string('real_name')->nullable()->comment('真实姓名');
            $table->string('id_card_no')->nullable()->comment('身份证号码');
            $table->tinyInteger('age')->nullable()->comment('年龄');
            $table->tinyInteger('sex')->nullable()->comment('性别');
            $table->string('birthday')->nullable()->comment('生日');
            $table->string('qq')->nullable()->comment('QQ');
            $table->string('ww')->nullable()->comment('旺旺');
            $table->string('address')->nullable()->comment('地址');
            $table->string('register_ip')->comment('注册IP');
            $table->integer('login_number')->comment('登录次数');
            $table->string('last_login_ip')->comment('最后登录IP');
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
