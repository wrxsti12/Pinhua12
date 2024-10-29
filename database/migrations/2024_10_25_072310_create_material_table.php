<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialsTable extends Migration
{
    /**
     * Run the migration.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->id();                              // 自增主鍵
            $table->string('name')->comment('物料名稱');                    // 物料名稱
            $table->decimal('coe', 10, 4)->comment('係數');              // 係數
            $table->string('unit')->comment('單位');                      // 單位
            $table->string('department_name')->comment('部門名稱');          // 部門名稱
            $table->integer('announcement_year')->comment('公告年份');       // 公告年份
            $table->timestamps();  // 生成 created_at 和 updated_at 欄位
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
