<?php

use yii\db\Migration;

class m171217_043528_create_user_rank_table extends Migration
{
    const TABLE_NAME = '{{%user_rank}}';
    const TABLE_NAME_TAB = '用户等级表';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB COMMENT=' . "'" . self::TABLE_NAME_TAB . "'";
        }

        $this->createTable(self::TABLE_NAME, [
            'rank_id' => $this->primaryKey(),
            'rank_name' => $this->string()->notNull()->comment('等级名称'),
            'rank_type' => $this->string()->notNull()->comment('等级计算方式:0.积分,1.已消费金额'),
            'min_points' => $this->integer()->notNull()->defaultValue(0)->comment('最小点'),
            'max_points' => $this->integer()->notNull()->defaultValue(0)->comment('最大点'),
            'is_show_price' => $this->smallInteger()->notNull()->defaultValue(0)->comment('是否显示等级价'),
            'rank_discount' => $this->smallInteger()->notNull()->defaultValue(0)->comment('等级折扣:百分比(%)'),
            'sort_order' => $this->integer()->notNull()->defaultValue(0)->comment('排序'),
            'status' => $this->smallInteger()->notNull()->defaultValue(0)->comment('状态'),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->batchInsert('{{%user_rank}}', [
            'rank_name',
            'rank_type',
            'min_points',
            'max_points',
            'is_show_price',
            'rank_discount',
            'sort_order',
            'status',
            'created_at',
            'updated_at',
        ], [
            ['普通会员', '0', '0', '999', '1', '100', '100', '1', time(), time(),],
            ['铜牌会员', '0', '1000', '9999', '1', '99', '100', '1', time(), time(),],
            ['银牌会员', '0', '10000', '99999', '1', '98', '100', '1', time(), time(),],
            ['钻石会员', '0', '100000', '999999', '1', '96', '100', '1', time(), time(),],
        ]);
    }

    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}
