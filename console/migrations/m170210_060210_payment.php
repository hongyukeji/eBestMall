<?php

use yii\db\Migration;

class m170210_060210_payment extends Migration
{
    const TABLE_NAME ='{{%payment}}';
    const TABLE_NAME_TAB ='支付方式';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB COMMENT='."'" . self::TABLE_NAME_TAB ."'";
        }

        $this->createTable(self::TABLE_NAME, [
            'paymentId' => $this->primaryKey(),
            'paymentName' => $this->string()->notNull()->comment('支付方式名称'),
            'paymentDescribe' => $this->string()->comment('支付方式描述'),
            'paymentConfig' => $this->string()->comment('支付方式配置'),
            'status' => $this->smallInteger()->defaultValue('0')->comment('状态:1-开启,0-关闭'),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}