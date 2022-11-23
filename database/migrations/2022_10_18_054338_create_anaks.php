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
        Schema::create('anaks', function (Blueprint $table) {
            $table->integer('nik_anak')->primary();
            $table->foreignId('no_kk');
            $table->string('nama_anak');
            $table->enum('jenkel_anak', ['L', 'P']);
            $table->date('tgl_anak')->format('d-m-y');
            $table->string('tmp_anak');
            $table->char('golongan_darah');
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
        Schema::dropIfExists('anaks');
    }
};
