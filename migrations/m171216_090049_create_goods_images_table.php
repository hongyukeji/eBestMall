<?php

use yii\db\Migration;

class m171216_090049_create_goods_images_table extends Migration
{
    const TABLE_NAME = '{{%goods_images}}';
    const TABLE_NAME_TAB = '商品图片表';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB COMMENT=' . "'" . self::TABLE_NAME_TAB . "'";
        }

        $this->createTable(self::TABLE_NAME, [
            'img_id' => $this->primaryKey(),
            'goods_id' => $this->integer()->notNull()->comment('商品id'),
            'img_source' => $this->string()->notNull()->comment('商品原图片'),
            'img_medium' => $this->string()->notNull()->comment('放大镜图片,400x400'),
            'img_small' => $this->string()->notNull()->comment('放大镜tab图片,55x55'),
            'img_thumbnail' => $this->string()->notNull()->comment('缩略图,220x220'),
            'sort_order' => $this->integer()->notNull()->defaultValue(0)->comment('排序'),
            'status' => $this->smallInteger()->notNull()->defaultValue(0)->comment('状态'),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);


        $this->batchInsert('{{%goods_images}}', [
            'goods_id',
            'img_source',
            'img_medium',
            'img_small',
            'img_thumbnail',
            'sort_order',
            'status',
            'created_at',
            'updated_at',
        ], [
            [
                '1',
                '/static/img/temp/temp-goods_img_001_big.jpg',
                '/static/img/temp/temp-goods_img_001.jpg',
                '/static/img/temp/temp-goods_img_001_small.jpg',
                '/static/img/temp/temp-goods_img_001.jpg',
                '100',
                '1',
                time(),
                time(),
            ],
            [
                '1',
                '/static/img/temp/temp-goods_img_002_big.jpg',
                '/static/img/temp/temp-goods_img_002.jpg',
                '/static/img/temp/temp-goods_img_002_small.jpg',
                '/static/img/temp/temp-goods_img_002.jpg',
                '100',
                '1',
                time(),
                time(),
            ],
            [
                '1',
                '/static/img/temp/temp-goods_img_001_big.jpg',
                '/static/img/temp/temp-goods_img_001.jpg',
                '/static/img/temp/temp-goods_img_001_small.jpg',
                '/static/img/temp/temp-goods_img_001.jpg',
                '100',
                '1',
                time(),
                time(),
            ],
            [
                '1',
                '/static/img/temp/temp-goods_img_002_big.jpg',
                '/static/img/temp/temp-goods_img_002.jpg',
                '/static/img/temp/temp-goods_img_002_small.jpg',
                '/static/img/temp/temp-goods_img_002.jpg',
                '100',
                '1',
                time(),
                time(),
            ],
            [
                '1',
                '/static/img/temp/temp-goods_img_001_big.jpg',
                '/static/img/temp/temp-goods_img_001.jpg',
                '/static/img/temp/temp-goods_img_001_small.jpg',
                '/static/img/temp/temp-goods_img_001.jpg',
                '100',
                '1',
                time(),
                time(),
            ],
            [
                '1',
                '/static/img/temp/temp-goods_img_002_big.jpg',
                '/static/img/temp/temp-goods_img_002.jpg',
                '/static/img/temp/temp-goods_img_002_small.jpg',
                '/static/img/temp/temp-goods_img_002.jpg',
                '100',
                '1',
                time(),
                time(),
            ],
            [
                '1',
                '/static/img/temp/temp-goods_img_001_big.jpg',
                '/static/img/temp/temp-goods_img_001.jpg',
                '/static/img/temp/temp-goods_img_001_small.jpg',
                '/static/img/temp/temp-goods_img_001.jpg',
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
