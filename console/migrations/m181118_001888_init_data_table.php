<?php

use yii\db\Migration;

/**
 * Handles the creation of table `test`.
 */
class m181118_001888_init_data_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->insert('{{%user}}', [
            'username' => 'shadow',
            'auth_key' => 'UhrAHnHrTkj6MLx2BZRsrPW8RBjGTe63',
            'password_hash' => '$2y$13$fFB9QG8OXKQINUr/fOL6OOrMngEQ.ZRGaLVkg5iUMP.zwsrrSUwEi',
            'email' => 'admin@hongyuvip.com',
            'mobile_phone' => '13952101395',
            'avatar' => '/img/public/user/user_default_avatar.jpg',
            'status' => '10',
            'created_at' => time(),
            'updated_at' => time(),
        ]);

        $this->insert('{{%user_info}}', [
            'user_id' => '1',
            'nickname' => '柒',
            'score' => '999999999',
            'money' => '1288888888.00',
            'payment_password' => md5(123456),
            'real_name' => '张鸿宇',
            'id_card_no' => '320324198812181588',
            'age' => '29',
            'sex' => '1',
            'birthday' => strtotime("1988-12-18 18:18:18"),
            'qq' => '1527200768',
            'ww' => 'hongyukeji',
            'address' => '中国 北京市 朝阳区 建设路1288号',
            'register_ip' => '127.0.0.1',
            'login_number' => '7',
            'last_login_ip' => '127.0.0.1',
            'last_login_time' => time(),
        ]);

        $this->insert('{{%user_address}}', [
            'user_id' => '1',
            'consignee' => '张鸿宇',
            'address' => '中国 北京市 朝阳区 建设路1288号',
            'email' => 'admin@hongyuvip.com',
            'mobile_phone' => '13952101395',
            'is_default' => '1',
            'created_time' => time(),
            'updated_time' => time(),
        ]);

        $this->insert('{{%product_category}}', [
            'name' => '默认分类',
            'pid' => '0',
            'sort_order' => '100',
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('test');
    }
}
