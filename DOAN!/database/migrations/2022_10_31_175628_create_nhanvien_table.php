<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhanvien', function (Blueprint $table) {
            $table->id();
            $table->string('MaNv');
            $table->string('HoVaTen');
            $table->string('GioiTinh');
            $table->date('NgaySinh');
            $table->string('CMND');
            $table->string('Anh');
            $table->string('DiaChi');
            $table->date('NgayThem');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhanvien');
    }
};
