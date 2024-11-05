<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaterialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $materials = [
            ['name' => '伸縮膜(LLDPE)', 'coe' => 3.69, 'unit' => '公斤(kg)', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '苯乙烯-乙烯/丁烯-苯乙烯熱塑性彈性體', 'coe' => 4.74, 'unit' => '公斤(kg)', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '標籤紙(PET)', 'coe' => 0.0135, 'unit' => '張', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '高密度聚乙烯(HDPE)', 'coe' => 2.21, 'unit' => '公斤(kg)', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '聚丙烯(PP)', 'coe' => 1.95, 'unit' => '公斤(kg)', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '紙棧板', 'coe' => 1.01, 'unit' => '公斤(kg)', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '角紙', 'coe' => 1.02, 'unit' => '公斤(kg)', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '裱面紙板', 'coe' => 1.6, 'unit' => '公斤(kg)', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '瓦楞芯紙', 'coe' => 0.988, 'unit' => '公斤(kg)', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '牛皮紙', 'coe' => 1.22, 'unit' => '公斤(kg)', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '瓦楞紙板(B楞)', 'coe' => 0.813, 'unit' => '公斤(kg)', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '瓦楞紙板(A楞)', 'coe' => 1.06, 'unit' => '公斤(kg)', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '瓦楞紙板(AB楞)', 'coe' => 1.3, 'unit' => '公斤(kg)', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '單層瓦楞紙箱(加權平均)', 'coe' => 1.1, 'unit' => '平方公尺(m2)', 'department_name' => '環境部', 'announcement_year' => 2023],

           

            ['name' => '塑膠袋', 'coe' => 6.2, 'unit' => '公斤 CO₂e/公斤', 'department_name' => '環境部', 'announcement_year' => 2023], // Plastic Bag
            ['name' => '塑膠瓶', 'coe' => 1.32, 'unit' => '公斤 CO₂e/公斤', 'department_name' => '環境部', 'announcement_year' => 2023], // Plastic Bottle
            ['name' => '塑膠餐具', 'coe' => 5.1, 'unit' => '公斤 CO₂e/公斤', 'department_name' => '環境部', 'announcement_year' => 2023], // Plastic Cutlery
            ['name' => '塑膠薄膜', 'coe' => 7.8, 'unit' => '公斤 CO₂e/公斤', 'department_name' => '農業部', 'announcement_year' => 2023], // Plastic Film
            ['name' => '塑膠包裝材料', 'coe' => 3.2, 'unit' => '公斤 CO₂e/公斤', 'department_name' => '環境部', 'announcement_year' => 2023], // Plastic Packaging Material
            ['name' => '塑料泡沫', 'coe' => 5.5, 'unit' => '公斤 CO₂e/公斤', 'department_name' => '環境部', 'announcement_year' => 2023], // Foamed Plastic
            ['name' => '塑膠吸管', 'coe' => 4.3, 'unit' => '公斤 CO₂e/公斤', 'department_name' => '環境部', 'announcement_year' => 2023], // Plastic Straw
            ['name' => '塑膠外包裝袋', 'coe' => 3.5, 'unit' => '公斤 CO₂e/公斤', 'department_name' => '環境部', 'announcement_year' => 2023], // Plastic Outer Packaging Bag
            ['name' => '塑膠飲料瓶', 'coe' => 1.8, 'unit' => '公斤 CO₂e/公斤', 'department_name' => '環境部', 'announcement_year' => 2023], // Plastic Beverage Bottle
            ['name' => '塑膠食品包裝袋', 'coe' => 2.0, 'unit' => '公斤 CO₂e/公斤', 'department_name' => '環境部', 'announcement_year' => 2023], // Plastic Food Packaging Bag
            
        ];

        
        
        // Insert data into the 'materials' table
        DB::table('materials')->insert($materials);
    }
}
