<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 使用正確的 DB 類別 (DB::table) 插入資料
        DB::table('materials')->insert([
            'name' => '伸縮膜',
            'coe' => 3.69,  // 可以使用數字，因為 'coe' 欄位可能是數字型態
            'unit' => '公斤(kg)',
            'department_name' => '環境部', // 確保字段名稱正確
            'announcement_year' => 2023,  // 同樣，檢查字段名稱
        ]);
    }
}
