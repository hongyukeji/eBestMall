<?php

use yii\db\Migration;

class m171122_072923_create_goods_brand_table extends Migration
{
    const TABLE_NAME = '{{%goods_brand}}';
    const TABLE_NAME_TAB = '商品品牌表';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB COMMENT=' . "'" . self::TABLE_NAME_TAB . "'";
        }

        $this->createTable(self::TABLE_NAME, [
            'brand_id' => $this->primaryKey(),
            'brand_name' => $this->string()->notNull()->comment('品牌名称'),
            'brand_brief' => $this->string()->notNull()->comment('品牌简介'),
            'brand_content' => $this->text()->notNull()->comment('品牌内容'),
            'brand_logo' => $this->string()->notNull()->comment('品牌logo图片'),
            'sort_order' => $this->integer()->notNull()->defaultValue(0)->comment('排序'),
            'status' => $this->smallInteger()->notNull()->defaultValue(0)->comment('状态'),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->batchInsert('{{%goods_brand}}', [
            'brand_id',
            'brand_name',
            'brand_brief',
            'brand_content',
            'brand_logo',
            'sort_order',
            'status',
            'created_at',
            'updated_at',
        ], [
            [
                '1',
                '苹果（Apple）',
                '苹果 - 手机中的战斗机',
                '苹果公司（Apple Inc. ）是美国的一家高科技公司。由史蒂夫·乔布斯、斯蒂夫·沃兹尼亚克和罗·韦恩(Ron Wayne)等人于1976年4月1日创立，并命名为美国苹果电脑公司（Apple Computer Inc. ），2007年1月9日更名为苹果公司，总部位于加利福尼亚州的库比蒂诺。',
                '/statics/img/temp/tmps-brand-001.jpg',
                '100',
                '1',
                time(),
                time(),
            ],
        ]);
    }

    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}
