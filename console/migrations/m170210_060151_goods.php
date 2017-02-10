<?php

use yii\db\Migration;

class m170210_060151_goods extends Migration
{
    const TABLE_NAME ='{{%goods}}';
    const TABLE_NAME_TAB ='商品';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB COMMENT='."'" . self::TABLE_NAME_TAB ."'";
        }

        $this->createTable(self::TABLE_NAME, [
            'goodsId' => $this->primaryKey(),
            'goodsName' => $this->string()->notNull()->comment('商品名称'),
            'goodsBrief' => $this->string()->comment('商品简介'),
            'goodsPrice' => $this->decimal(10,2)->defaultValue('0.00')->comment('商品价格'),
            'goodsMarketPrice' => $this->decimal(10,2)->defaultValue('0.00')->comment('商品市场价格'),
            'goodsNumber' => $this->integer()->defaultValue(0)->comment('商品数量'),
            'goodsSalesVolume' => $this->integer()->defaultValue(0)->comment('商品销量'),
            'goodsIntroduce' => $this->text()->comment('商品介绍'),
            'goodsStatus' => $this->smallInteger(1)->comment('状态:1-显示,0-关闭'),
            'createdTime' => $this->integer()->comment('创建时间'),
            'updatedTime' => $this->integer()->comment('更新时间'),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}