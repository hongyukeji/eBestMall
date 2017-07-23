<?php

use yii\db\Migration;

class m170718_075021_create_user_address_table extends Migration
{
    const TABLE_NAME = '{{%user_address}}';
    const TABLE_NAME_TAB = '用户收货地址表';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB COMMENT=' . "'" . self::TABLE_NAME_TAB . "'";
        }

        $this->createTable(self::TABLE_NAME, [
            'id' => $this->bigPrimaryKey()->comment('自增ID'),
            'user_id' => $this->bigInteger()->notNull()->comment('用户id'),
            'consignee' => $this->integer()->notNull()->comment('收货人名字'),
            'address' => $this->string()->notNull()->comment('收货地址'),
            'email' => $this->string(100)->null()->comment('邮箱'),
            'mobile_phone' => $this->string(32)->notNull()->comment('手机号'),
            'is_default' => $this->smallInteger(1)->notNull()->comment('是否默认地址'),
            'created_time' => $this->integer()->notNull()->comment('创建时间'),
            'updated_time' => $this->integer()->notNull()->comment('更新时间'),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}