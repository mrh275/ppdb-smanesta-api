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
        Schema::create('data_periodiks', function (Blueprint $table) {
            $table->id();
            $table->string('noreg_ppdb');
            $table->string('hobi');
            $table->string('cita_cita');
            $table->int('tinggi_badan');
            $table->int('berat_badan');
            $table->int('jarak_rumah');
            $table->int('waktu_tempuh');
            $table->int('anak_ke');
            $table->int('jumlah_saudara');
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
        Schema::dropIfExists('data_periodiks');
    }
};
