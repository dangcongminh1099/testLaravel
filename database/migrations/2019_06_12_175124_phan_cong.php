<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PhanCong extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phan_cong', function (Blueprint $table) {
            $table->integer('ma_giang_vien')->unsigned();
            $table->integer('ma_mon')->unsigned();
            $table->integer('ma_lop')->unsigned();
            $table->float('thoi_gian_dinh_muc');
            $table->foreign('ma_mon')->references('ma_mon')->on('mon_hoc');
            $table->foreign('ma_giang_vien')->references('ma_giang_vien')->on('giang_vien');
            
            $table->primary(['ma_mon','ma_lop','ma_giang_vien']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phan_cong');
    }
}
