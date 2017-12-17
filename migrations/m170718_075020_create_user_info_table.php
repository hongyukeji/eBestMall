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
            'id' => $this->PrimaryKey()->comment('自增ID'),
            'user_id' => $this->integer()->notNull()->comment('用户ID'),
            'nickname' => $this->string()->comment('昵称'),
            'payment_password' => $this->string()->comment('支付密码'),
            'real_name' => $this->string()->comment('真实姓名'),
            'id_card_no' => $this->string()->comment('身份证号码'),
            'age' => $this->smallInteger()->comment('年龄'),
            'sex' => $this->smallInteger()->defaultValue(0)->comment('性别,0-保密,1-男,2-女'),
            'birthday' => $this->integer()->comment('生日'),
            'qq' => $this->string(32)->comment('QQ'),
            'ww' => $this->string(32)->comment('阿里旺旺'),
            'default_address_id' => $this->integer()->comment('默认收货地址id'),
            'register_ip' => $this->string()->comment('注册IP'),
            'register_type' => $this->string()->comment('注册终端类型:0.电脑(pc),1.移动设备(mobile)'),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}