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
    }
}
