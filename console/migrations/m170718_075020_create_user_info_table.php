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
            'id' => $this->primaryKey()->comment('自增ID'),
            'user_id' => $this->integer()->notNull()->comment('用户ID'),
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

        $this->insert('{{%user_info}}', [
            'user_id' => '1',
            'nickname' => '柒',
            'score' => '999999999',
            'money' => '1288888888.00',
            'payment_password' => md5(123456),
            'real_name' => '张鸿宇',
            'id_card_no' => '320324198812181588',
            'age' => '29',
            'sex' => '1',
            'birthday' => strtotime("1988-12-18 18:18:18"),
            'qq' => '1527200768',
            'ww' => 'hongyukeji',
            'address' => '中国 北京市 朝阳区 建设路1288号',
            'register_ip' => '127.0.0.1',
            'login_number' => '7',
            'last_login_ip' => '127.0.0.1',
            'last_login_time' => time(),

        ]);
    }

    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}