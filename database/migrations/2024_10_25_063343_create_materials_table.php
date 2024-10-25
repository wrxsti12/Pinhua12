<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->id();                              // 自增主鍵
            $table->string('name') ->coment('物料名稱');                    // 物料名稱
            $table->decimal('coe', 10, 4)->coment('係數');              // 係數
            $table->string('unit')->coment('單位');                      // 單位
            $table->string('department_name')->coment('部門名稱');          // 部門名稱
            $table->integer('announcement_year')->coment('公告年份');       // 公告年份
            $table->timestamps();                       // 生成 created_at 和 updated_at 欄位
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materials');
    }
}
