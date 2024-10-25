<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // 名稱
            $table->decimal('quantity', 8, 4); // 數量
            $table->string('unit'); // 單位
            $table->string('department_name'); // 部門名稱
            $table->year('announcement_year'); // 公告年份
            $table->timestamps(); // 建立及更新時間
        });
    }

    /**
     * Reverse the migration.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('material');
    }
}