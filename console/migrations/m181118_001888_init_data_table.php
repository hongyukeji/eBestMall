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
            'id' => '1',
            'username' => 'shadow',
            'auth_key' => 'UhrAHnHrTkj6MLx2BZRsrPW8RBjGTe63',
            'password_hash' => '$2y$13$fFB9QG8OXKQINUr/fOL6OOrMngEQ.ZRGaLVkg5iUMP.zwsrrSUwEi',
            'email' => 'shadow@hongyuvip.com',
            'mobile_phone' => '13952101395',
            'avatar' => '/img/public/user/user_default_avatar.jpg',
            'status' => '10',
            'created_at' => time(),
            'updated_at' => time(),
        ]);

        $this->insert('{{%user}}', [
            'id' => '2',
            'username' => 'admin',
            'auth_key' => 'UhrAHnHrTkj6MLx2BZRsrPW8RBjGTe63',
            'password_hash' => '$2y$13$fFB9QG8OXKQINUr/fOL6OOrMngEQ.ZRGaLVkg5iUMP.zwsrrSUwEi',
            'email' => 'admin@hongyuvip.com',
            'mobile_phone' => '13800138000',
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

        $this->insert('{{%product}}', [
            'id' => '1',
            'name' => '苹果(Apple） iPhone7 Plus - 测试商品 - 平台自营',
            'title' => '【正品保障】苹果产品激活不支持七天无理由退换货购',
            'content' => '<p><img src="//img30.360buyimg.com/popWaterMark/jfs/t3292/30/4768230111/183978/11cad8a1/585c8d4eN8ea09fd1.jpg"></p>',
            'cat_id' => '1',
            'store_id' => '1',
            'sku_id_default' => '1',
            'commodity_code' => '818908696588',
            'spu_cover' => 'https://img13.360buyimg.com/n7/jfs/t5764/160/3027680664/72667/97392bd/59365825Nd9f7e814.jpg',
            'spu_images' => '{"1":"https://img13.360buyimg.com/n5/s450x450_jfs/t5764/160/3027680664/72667/97392bd/59365825Nd9f7e814.jpg","2":"https://img13.360buyimg.com/n5/s450x450_jfs/t3805/75/2374080700/71107/c10d4073/585c8d04Ne19f38fb.jpg","3":"https://img13.360buyimg.com/n5/s450x450_jfs/t5986/124/1811264192/36004/66e1c1a3/5936581eN11cf79f2.jpg","4":"https://img13.360buyimg.com/n5/s450x450_jfs/t3877/179/746030535/14508/17be998a/585c8d04Na325a3cf.jpg","5":"https://img13.360buyimg.com/n5/s450x450_jfs/t5635/102/3049210980/68046/f047c7a8/5936581dN01daccc8.jpg","6":"https://img14.360buyimg.com/n5/s450x450_jfs/t5989/91/1362652255/70657/7581d508/59317eedNd4df47bf.jpg"}',
            'spu_stock' => '999999',
            'spu_sales_volume' => '666666',
            'spu_comment' => '3999999',
            'is_best' => '1',
            'is_new' => '1',
            'is_hot' => '1',
            'sort_order' => '100',
            'status' => '1',
            'created_time' => time(),
            'updated_time' => time(),
        ]);

        $this->insert('{{%product}}', [
            'id' => '2',
            'name' => '苹果(Apple） iPhone7 Plus - 测试商品 - 入驻商家',
            'title' => '【正品保障】苹果产品激活不支持七天无理由退换货购',
            'content' => '<p><br><img src="//img30.360buyimg.com/popWaterMark/jfs/t3292/30/4768230111/183978/11cad8a1/585c8d4eN8ea09fd1.jpg"></p>',
            'cat_id' => '1',
            'store_id' => '2',
            'sku_id_default' => '5',
            'commodity_code' => '818908696589',
            'spu_cover' => 'https://img13.360buyimg.com/n7/jfs/t5764/160/3027680664/72667/97392bd/59365825Nd9f7e814.jpg',
            'spu_images' => '{"1":"https://img13.360buyimg.com/n5/s450x450_jfs/t5764/160/3027680664/72667/97392bd/59365825Nd9f7e814.jpg","2":"https://img13.360buyimg.com/n5/s450x450_jfs/t3805/75/2374080700/71107/c10d4073/585c8d04Ne19f38fb.jpg","3":"https://img13.360buyimg.com/n5/s450x450_jfs/t5986/124/1811264192/36004/66e1c1a3/5936581eN11cf79f2.jpg","4":"https://img13.360buyimg.com/n5/s450x450_jfs/t3877/179/746030535/14508/17be998a/585c8d04Na325a3cf.jpg","5":"https://img13.360buyimg.com/n5/s450x450_jfs/t5635/102/3049210980/68046/f047c7a8/5936581dN01daccc8.jpg","6":"https://img14.360buyimg.com/n5/s450x450_jfs/t5989/91/1362652255/70657/7581d508/59317eedNd4df47bf.jpg"}',
            'spu_stock' => '999999',
            'spu_sales_volume' => '666666',
            'spu_comment' => '3999999',
            'is_best' => '1',
            'is_new' => '1',
            'is_hot' => '1',
            'sort_order' => '100',
            'status' => '1',
            'created_time' => time(),
            'updated_time' => time(),
        ]);

        $this->insert('{{%product_sku}}', [
            'id' => '1',
            'product_id' => '1',
            'price' => '5999.00',
            'market_price' => '7999.00',
            'sku_images' => '{"1":"https://img13.360buyimg.com/n5/s450x450_jfs/t5764/160/3027680664/72667/97392bd/59365825Nd9f7e814.jpg","2":"https://img13.360buyimg.com/n5/s450x450_jfs/t3805/75/2374080700/71107/c10d4073/585c8d04Ne19f38fb.jpg","3":"https://img13.360buyimg.com/n5/s450x450_jfs/t5986/124/1811264192/36004/66e1c1a3/5936581eN11cf79f2.jpg","4":"https://img13.360buyimg.com/n5/s450x450_jfs/t3877/179/746030535/14508/17be998a/585c8d04Na325a3cf.jpg","5":"https://img13.360buyimg.com/n5/s450x450_jfs/t5635/102/3049210980/68046/f047c7a8/5936581dN01daccc8.jpg","6":"https://img14.360buyimg.com/n5/s450x450_jfs/t5989/91/1362652255/70657/7581d508/59317eedNd4df47bf.jpg"}',
            'sku_attribute' => '["1","3"]',
            'sku_stock' => '131313',
            'sku_sales_volume' => '131313',
            'created_time' => time(),
            'updated_time' => time(),
        ]);

        $this->insert('{{%product_sku}}', [
            'id' => '2',
            'product_id' => '1',
            'price' => '7999.00',
            'market_price' => '8999.00',
            'sku_images' => '{"1":"https://img13.360buyimg.com/n5/s450x450_jfs/t5764/160/3027680664/72667/97392bd/59365825Nd9f7e814.jpg","2":"https://img13.360buyimg.com/n5/s450x450_jfs/t3805/75/2374080700/71107/c10d4073/585c8d04Ne19f38fb.jpg","3":"https://img13.360buyimg.com/n5/s450x450_jfs/t5986/124/1811264192/36004/66e1c1a3/5936581eN11cf79f2.jpg","4":"https://img13.360buyimg.com/n5/s450x450_jfs/t3877/179/746030535/14508/17be998a/585c8d04Na325a3cf.jpg","5":"https://img13.360buyimg.com/n5/s450x450_jfs/t5635/102/3049210980/68046/f047c7a8/5936581dN01daccc8.jpg","6":"https://img14.360buyimg.com/n5/s450x450_jfs/t5989/91/1362652255/70657/7581d508/59317eedNd4df47bf.jpg"}',
            'sku_attribute' => '["1","4"]',
            'sku_stock' => '141414',
            'sku_sales_volume' => '141414',
            'created_time' => time(),
            'updated_time' => time(),
        ]);

        $this->insert('{{%product_sku}}', [
            'id' => '3',
            'product_id' => '1',
            'price' => '5999.00',
            'market_price' => '7999.00',
            'sku_images' => '{"1":"https://img13.360buyimg.com/n5/s450x450_jfs/t5764/160/3027680664/72667/97392bd/59365825Nd9f7e814.jpg","2":"https://img13.360buyimg.com/n5/s450x450_jfs/t3805/75/2374080700/71107/c10d4073/585c8d04Ne19f38fb.jpg","3":"https://img13.360buyimg.com/n5/s450x450_jfs/t5986/124/1811264192/36004/66e1c1a3/5936581eN11cf79f2.jpg","4":"https://img13.360buyimg.com/n5/s450x450_jfs/t3877/179/746030535/14508/17be998a/585c8d04Na325a3cf.jpg","5":"https://img13.360buyimg.com/n5/s450x450_jfs/t5635/102/3049210980/68046/f047c7a8/5936581dN01daccc8.jpg","6":"https://img14.360buyimg.com/n5/s450x450_jfs/t5989/91/1362652255/70657/7581d508/59317eedNd4df47bf.jpg"}',
            'sku_attribute' => '["2","3"]',
            'sku_stock' => '232323',
            'sku_sales_volume' => '232323',
            'created_time' => time(),
            'updated_time' => time(),
        ]);

        $this->insert('{{%product_sku}}', [
            'id' => '4',
            'product_id' => '1',
            'price' => '7999.00',
            'market_price' => '8999.00',
            'sku_images' => '{"1":"https://img13.360buyimg.com/n5/s450x450_jfs/t5764/160/3027680664/72667/97392bd/59365825Nd9f7e814.jpg","2":"https://img13.360buyimg.com/n5/s450x450_jfs/t3805/75/2374080700/71107/c10d4073/585c8d04Ne19f38fb.jpg","3":"https://img13.360buyimg.com/n5/s450x450_jfs/t5986/124/1811264192/36004/66e1c1a3/5936581eN11cf79f2.jpg","4":"https://img13.360buyimg.com/n5/s450x450_jfs/t3877/179/746030535/14508/17be998a/585c8d04Na325a3cf.jpg","5":"https://img13.360buyimg.com/n5/s450x450_jfs/t5635/102/3049210980/68046/f047c7a8/5936581dN01daccc8.jpg","6":"https://img14.360buyimg.com/n5/s450x450_jfs/t5989/91/1362652255/70657/7581d508/59317eedNd4df47bf.jpg"}',
            'sku_attribute' => '["2","4"]',
            'sku_stock' => '242424',
            'sku_sales_volume' => '242424',
            'created_time' => time(),
            'updated_time' => time(),
        ]);

        $this->insert('{{%product_sku}}', [
            'id' => '5',
            'product_id' => '2',
            'price' => '7999.00',
            'market_price' => '8999.00',
            'sku_images' => '{"1":"https://img13.360buyimg.com/n5/s450x450_jfs/t5764/160/3027680664/72667/97392bd/59365825Nd9f7e814.jpg","2":"https://img13.360buyimg.com/n5/s450x450_jfs/t3805/75/2374080700/71107/c10d4073/585c8d04Ne19f38fb.jpg","3":"https://img13.360buyimg.com/n5/s450x450_jfs/t5986/124/1811264192/36004/66e1c1a3/5936581eN11cf79f2.jpg","4":"https://img13.360buyimg.com/n5/s450x450_jfs/t3877/179/746030535/14508/17be998a/585c8d04Na325a3cf.jpg","5":"https://img13.360buyimg.com/n5/s450x450_jfs/t5635/102/3049210980/68046/f047c7a8/5936581dN01daccc8.jpg","6":"https://img14.360buyimg.com/n5/s450x450_jfs/t5989/91/1362652255/70657/7581d508/59317eedNd4df47bf.jpg"}',
            'sku_attribute' => '',
            'sku_stock' => '999999',
            'sku_sales_volume' => '999999',
            'created_time' => time(),
            'updated_time' => time(),
        ]);

        $this->insert('{{%product_category}}', [
            'id' => '1',
            'name' => '默认分类',
            'pid' => '0',
            'sort_order' => '100',
        ]);

        $this->insert('{{%product_attribute}}', [
            'id' => '1',
            'name' => '颜色',
            'cat_id' => '1',
        ]);

        $this->insert('{{%product_attribute}}', [
            'id' => '2',
            'name' => '型号',
            'cat_id' => '1',
        ]);

        $this->insert('{{%product_attribute_extends}}', [
            'id' => '1',
            'product_id' => '1',
            'product_attribute_id' => '1',
            'product_attribute_value' => '银色',
        ]);

        $this->insert('{{%product_attribute_extends}}', [
            'id' => '2',
            'product_id' => '1',
            'product_attribute_id' => '1',
            'product_attribute_value' => '金色',
        ]);

        $this->insert('{{%product_attribute_extends}}', [
            'id' => '3',
            'product_id' => '1',
            'product_attribute_id' => '2',
            'product_attribute_value' => '64G',
        ]);

        $this->insert('{{%product_attribute_extends}}', [
            'id' => '4',
            'product_id' => '1',
            'product_attribute_id' => '2',
            'product_attribute_value' => '128G',
        ]);

        $this->insert('{{%store}}', [
            'id' => '1',
            'name' => '平台自营',
            'is_proprietary' => '1',
            'user_id' => '1',
        ]);

        $this->insert('{{%store}}', [
            'id' => '2',
            'name' => '入驻商家',
            'is_proprietary' => '1',
            'user_id' => '2',
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
