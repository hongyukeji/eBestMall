<?php

use yii\db\Migration;

class m170210_060109_advert extends Migration
{
    const TABLE_NAME ='{{%advert}}';
    const TABLE_NAME_TAB ='广告';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB COMMENT='."'" . self::TABLE_NAME_TAB ."'";
        }

        $this->createTable(self::TABLE_NAME, [
            'advertId' => $this->primaryKey(),
            'advertName' => $this->string()->notNull()->comment('广告名称'),
            'advertCode' => $this->string()->comment('广告关键字'),
            'advertLocation' => $this->string()->comment('广告位置'),
            'advertImage' => $this->string()->comment('广告图片'),
            'advertUrl' => $this->string()->comment('广告链接'),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}