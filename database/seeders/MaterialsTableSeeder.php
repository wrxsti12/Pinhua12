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
            ['name' => '單層瓦楞紙箱(B楞，貼箱)', 'coe' => 1.03, 'unit' => '平方公尺(m2)', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '單層瓦楞紙箱(B楞，釘箱)', 'coe' => 0.895, 'unit' => '平方公尺(m2)', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '單層瓦楞紙箱(A楞，貼箱)', 'coe' => 1.11, 'unit' => '平方公尺(m2)', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '單層瓦楞紙箱(A楞，釘箱)', 'coe' => 1.21, 'unit' => '平方公尺(m2)', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '雙層瓦楞紙箱(AB楞，加權平均)', 'coe' => 1.46, 'unit' => '平方公尺(m2)', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '雙層瓦楞紙箱(AB楞，貼箱)', 'coe' => 1.33, 'unit' => '平方公尺(m2)', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '雙層瓦楞紙箱(AB楞，釘箱)', 'coe' => 1.69, 'unit' => '平方公尺(m2)', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '濃硫酸', 'coe' => 0.289, 'unit' => '公斤(kg)', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '偏矽酸鈉', 'coe' => 0.887, 'unit' => '公斤(kg)', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => 'AOS界面活性劑', 'coe' => 1.4, 'unit' => '公斤(kg)', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '硫酸酯鹽界面活性劑', 'coe' => 1.06, 'unit' => '公斤(kg)', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '焊帶(太陽光電模組材料)', 'coe' => 12, 'unit' => '公斤(kg)', 'department_name' => '經濟部標準檢驗局', 'announcement_year' => 2023],
            ['name' => '單結晶矽電池太陽光電模組(60片6吋)-半切割型(120子片)', 'coe' => 377, 'unit' => '片', 'department_name' => '經濟部標準檢驗局', 'announcement_year' => 2023],
            ['name' => '太陽光電電場發電', 'coe' => 0.00961, 'unit' => '度(kwh)', 'department_name' => '經濟部標準檢驗局', 'announcement_year' => 2023],
            ['name' => '潤滑油(未燃燒，2021)', 'coe' => 1.09, 'unit' => '公斤(kg)', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '煤油(未燃燒，2021)', 'coe' => 0.353, 'unit' => '公升(L)', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '煤油使用(2021)', 'coe' => 2.91, 'unit' => '公升(L)', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '液化石油氣(未燃燒，2021)', 'coe' => 0.453, 'unit' => '公升(L)', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '液化石油氣(於固定源使用，2021)', 'coe' => 2.21, 'unit' => '公升(L)', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '天然氣(於固定源使用，2021)', 'coe' => 2.63, 'unit' => '立方公尺(m3)', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '天然氣(未燃燒，2021)', 'coe' => 0.519, 'unit' => '立方公尺(m3)', 'department_name' => '環境部', 'announcement_year' => 2023],
            ['name' => '車用汽油(於移動源使用，2021)', 'coe' => 2.92, 'unit' => '公升(L)', 'department_name' => '環境部', 'announcement_year' => 2023],
            
        ];

        
        
        // Insert data into the 'materials' table
        DB::table('materials')->insert($materials);
    }
}
