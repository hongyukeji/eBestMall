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
            'goodsId' => $this->bigPrimaryKey(),
            'categoryId' => $this->integer()->comment('商品分类ID'),
            'goodsIdentifier' => $this->string()->comment('商品编号'),
            'goodsName' => $this->string()->notNull()->comment('商品名称'),
            'goodsDescribe' => $this->string()->defaultValue('')->comment('商品描述'),
            'goodsPrice' => $this->decimal(10,2)->defaultValue('0.00')->notNull()->comment('商品价格'),
            'goodsMarketPrice' => $this->decimal(10,2)->defaultValue('0.00')->comment('商品市场价格'),
            'goodsNumber' => $this->integer()->defaultValue('0')->notNull()->comment('商品数量'),
            'goodsSalesVolume' => $this->integer()->defaultValue('0')->comment('商品销量'),
            'goodsCoverImage' => $this->string()->defaultValue('')->notNull()->comment('商品封面图片'),
            'goodsAllImage' => $this->text()->defaultValue('')->comment('商品所有图片'),
            'goodsIntroduce' => $this->text()->defaultValue('')->comment('商品介绍'),
            'goodsIsSale' => 'ENUM("0","1") DEFAULT "0" COMMENT "商品是否促销,0-否,1-是"',
            'goodsIsHot' => 'ENUM("0","1") DEFAULT "0" COMMENT "商品是否热卖,0-否,1-是"',
            'goodsSort' => $this->smallInteger()->defaultValue('100')->comment('Sort值越大越靠前'),
            'status' => $this->smallInteger()->defaultValue('0')->comment('状态:1-开启,0-关闭'),
            'createdTime' => $this->integer()->comment('创建时间'),
            'updatedTime' => $this->integer()->comment('更新时间'),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}