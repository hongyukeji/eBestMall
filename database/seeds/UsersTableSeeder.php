<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'shadow',
                'email' => 'admin@hongyuvip.com',
                'mobile_phone' => '13952101395',
                'password' => bcrypt('123456'),
                'remember_token' => '',
                'avatar' => '',
                'status' => '1',
                'created_at' => '2017-08-08 05:29:16',
                'updated_at' => '2017-08-16 05:29:16',
            ],
        ]);

        DB::table('users_info')->insert([
            [
                'user_id' => '1',
                'nickname' => '影子',
                'score' => '99999999',
                'money' => '99999999.99',
                'payment_password' => bcrypt('123456'),
                'real_name' => '张鸿宇',
                'id_card_no' => '320324198808181288',
                'age' => '28',
                'sex' => '1',
                'birthday' => '1988-08-18',
                'qq' => '1527200768',
                'ww' => '',
                'address' => '',
                'register_ip' => '127.0.0.1',
                'login_number' => '7',
                'last_login_ip' => '127.0.0.1',
                'last_login_time' => '00000000000',
                'created_at' => '2017-08-08 05:29:16',
                'updated_at' => '2017-08-16 05:29:16',
            ],
        ]);
    }
}
