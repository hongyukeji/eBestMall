<?php

use yii\db\Migration;

class m170210_060121_article extends Migration
{
    const TABLE_NAME ='{{%article}}';
    const TABLE_NAME_TAB ='文章';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB COMMENT='."'" . self::TABLE_NAME_TAB ."'";
        }

        $this->createTable(self::TABLE_NAME, [
            'articleId' => $this->primaryKey(),
            'articleCatId' => $this->smallInteger()->defaultValue('0')->comment('文章分类ID'),
            'articleTitle' => $this->string()->notNull()->comment('文章标题'),
            'articleContent' => $this->text()->notNull()->comment('文章内容'),
            'articleAuthorAdminUserId' => $this->smallInteger()->defaultValue('0')->comment('文章作者ID'),
            'status' => $this->smallInteger()->defaultValue('0')->comment('状态:1-开启,0-关闭'),
            'createdTime' => $this->integer()->defaultValue('0')->comment('创建时间'),
            'updatedTime' => $this->integer()->defaultValue('0')->comment('更新时间'),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}