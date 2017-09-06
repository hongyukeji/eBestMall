<?php

use Illuminate\Database\Seeder;

class AdminUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin_users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@hongyuvip.com' ,
                'password' => bcrypt('123456'),
            ],
        ]);
    }
}
