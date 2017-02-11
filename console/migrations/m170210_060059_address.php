<?php

use yii\db\Migration;

class m170210_060059_address extends Migration
{
    const TABLE_NAME ='{{%address}}';
    const TABLE_NAME_TAB ='地址';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB COMMENT='."'" . self::TABLE_NAME_TAB ."'";
        }

        $this->createTable(self::TABLE_NAME, [
            'addressId' => $this->primaryKey(),
            'UserId' => $this->integer()->notNull()->defaultValue('0')->comment('用户ID'),
            'addressUserName' => $this->string(32)->notNull()->comment('收货人名字'),
            'addressUserCompany' => $this->string(100)->comment('收货人公司'),
            'addressUserAddress' => $this->string(100)->comment('收货人地址'),
            'addressUserEmail' => $this->string(100)->comment('收货人邮箱'),
            'addressUserTelephone' => $this->string(100)->comment('收货人电话'),
            'createdTime' => $this->integer()->comment('创建时间'),
            'updatedTime' => $this->integer()->comment('更新时间'),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}