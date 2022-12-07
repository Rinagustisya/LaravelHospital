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
        Schema::create('dokters', function (Blueprint $table) {
            $table->id();
            $table->integer('kode_dokter')->unique();
            $table->string('nama_dokter');
            $table->string('alamat_dokter');
            $table->string('no_telp_dokter');
            $table->string('jenis_kelamin_dokter');
            $table->string('tempat_lahir_dokter');
            $table->date('tanggal_lahir_dokter');
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
        Schema::dropIfExists('dokters');
    }
};