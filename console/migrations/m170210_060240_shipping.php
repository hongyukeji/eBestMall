<?php

use yii\db\Migration;

class m170210_060240_shipping extends Migration
{
    const TABLE_NAME ='{{%shipping}}';
    const TABLE_NAME_TAB ='配送方式';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB COMMENT='."'" . self::TABLE_NAME_TAB ."'";
        }

        $this->createTable(self::TABLE_NAME, [
            'shippingId' => $this->primaryKey(),
            'shippingName' => $this->string()->notNull()->comment('配送方式名称'),
            'shippingDescribe' => $this->string()->comment('配送方式描述'),
            'shippingPrice' => $this->integer()->comment('配送方式价格'),
            'status' => $this->smallInteger()->defaultValue('0')->comment('状态:1-开启,0-关闭'),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}