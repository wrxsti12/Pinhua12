<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MaterialsTableTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $materials = 
            ['name' => '伸縮膜(LLDPE)', 'quantity' => 3.69, 'unit' => '公斤(kg)', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '苯乙烯-乙烯/丁烯-苯乙烯熱塑性彈性體', 'quantity' => 4.74, 'unit' => '公斤(kg)', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '標籤紙(PET)', 'quantity' => 0.0135, 'unit' => '張', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '高密度聚乙烯(HDPE)', 'quantity' => 2.21, 'unit' => '公斤(kg)', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '聚丙烯(PP)', 'quantity' => 1.95, 'unit' => '公斤(kg)', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '紙棧板', 'quantity' => 1.01, 'unit' => '公斤(kg)', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '角紙', 'quantity' => 1.02, 'unit' => '公斤(kg)', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '裱面紙板', 'quantity' => 1.6, 'unit' => '公斤(kg)', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '瓦楞芯紙', 'quantity' => 0.988, 'unit' => '公斤(kg)', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '牛皮紙', 'quantity' => 1.22, 'unit' => '公斤(kg)', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '瓦楞紙板(B楞)', 'quantity' => 0.813, 'unit' => '公斤(kg)', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '瓦楞紙板(A楞)', 'quantity' => 1.06, 'unit' => '公斤(kg)', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '瓦楞紙板(AB楞)', 'quantity' => 1.3, 'unit' => '公斤(kg)', 'department_name' => '環境部', 'announcement_year' => 2023],
    }
}
