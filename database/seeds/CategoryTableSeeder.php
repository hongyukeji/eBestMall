<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'cate_id' => '1',
                'cate_name' => '建站服务',
                'short_name' => '建站',
                'parent_id' => '0',
                'cate_level' => '1',
                'cate_keywords' => '建站',
                'cate_desc' => '建站服务类',
                'cate_image' => '',
                'sort_order' => '100',
                'is_show' => '1',
                'state' => '1',
            ],
            [
                'cate_id' => '2',
                'cate_name' => '云盘资源',
                'short_name' => '资源',
                'parent_id' => '0',
                'cate_level' => '1',
                'cate_keywords' => '云盘,资源',
                'cate_desc' => '云盘资源类',
                'cate_image' => '',
                'sort_order' => '100',
                'is_show' => '1',
                'state' => '1',
            ],
            [
                'cate_id' => '3',
                'cate_name' => '程序源码',
                'short_name' => '源码',
                'parent_id' => '0',
                'cate_level' => '1',
                'cate_keywords' => '程序,源码',
                'cate_desc' => '程序源码类',
                'cate_image' => '',
                'sort_order' => '100',
                'is_show' => '1',
                'state' => '1',
            ],
            [
                'cate_id' => '4',
                'cate_name' => '原创系列',
                'short_name' => '原创',
                'parent_id' => '0',
                'cate_level' => '1',
                'cate_keywords' => '原创',
                'cate_desc' => '原创系列类',
                'cate_image' => '',
                'sort_order' => '100',
                'is_show' => '1',
                'state' => '1',
            ],
            [
                'cate_id' => '5',
                'cate_name' => '其它',
                'short_name' => '其它',
                'parent_id' => '0',
                'cate_level' => '1',
                'cate_keywords' => '其它',
                'cate_desc' => '其它类',
                'cate_image' => '',
                'sort_order' => '100',
                'is_show' => '0',
                'state' => '1',
            ],
            [
                'cate_id' => '6',
                'cate_name' => '网站建设',
                'short_name' => '网站',
                'parent_id' => '1',
                'cate_level' => '2',
                'cate_keywords' => '网站建设',
                'cate_desc' => '网站建设',
                'cate_image' => '',
                'sort_order' => '100',
                'is_show' => '1',
                'state' => '1',
            ],
            [
                'cate_id' => '7',
                'cate_name' => '电商网站',
                'short_name' => '电商',
                'parent_id' => '6',
                'cate_level' => '3',
                'cate_keywords' => '电商网站',
                'cate_desc' => '电商网站',
                'cate_image' => '',
                'sort_order' => '100',
                'is_show' => '1',
                'state' => '1',
            ],
        ]);
    }
}
