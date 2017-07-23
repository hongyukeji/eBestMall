<?php

use yii\db\Migration;

class m170718_075020_create_user_info_table extends Migration
{
    const TABLE_NAME = '{{%user_info}}';
    const TABLE_NAME_TAB = '会员信息表';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB COMMENT=' . "'" . self::TABLE_NAME_TAB . "'";
        }

        $this->createTable(self::TABLE_NAME, [
            'id' => $this->bigPrimaryKey()->comment('自增ID'),
            'user_id' => $this->bigInteger()->notNull()->comment('用户ID'),
            'nickname' => $this->string()->comment('昵称'),
            'score' => $this->integer()->defaultValue(0)->comment('积分'),
            'money' => $this->decimal(10, 2)->defaultValue('0.00')->comment('余额'),
            'payment_password' => $this->string()->comment('支付密码'),
            'real_name' => $this->string()->comment('真实姓名'),
            'id_card_no' => $this->string()->comment('身份证号码'),
            'age' => $this->integer()->comment('年龄'),
            'sex' => $this->smallInteger()->defaultValue(0)->comment('性别,0-保密,1-男,2-女'),
            'birthday' => $this->string()->comment('生日'),
            'qq' => $this->string(32)->comment('QQ'),
            'ww' => $this->string(32)->comment('阿里旺旺'),
            'address' => $this->string()->comment('收货地址'),
            'register_ip' => $this->string()->comment('注册IP'),
            'login_number' => $this->integer()->comment('登录次数'),
            'last_login_ip' => $this->string()->comment('最后登录IP'),
            'last_login_time' => $this->integer()->comment('最后登录时间'),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}