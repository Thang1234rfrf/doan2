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
        Schema::create('sanphams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tieude');
            $table->string('gia');
            $table->string('dientich');
            $table->string('nhatam');
            $table->string('phongngu');
            $table->string('nhadexe');
            $table->string('anh');
            $table->string('chitiet');
            $table->string('email');

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
        Schema::dropIfExists('sanphams');
    }
};
