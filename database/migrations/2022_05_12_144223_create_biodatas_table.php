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
        Schema::create('biodatas', function (Blueprint $table) {
            $table->id();
            $table->string('noreg_ppdb', 20)->unique();
            $table->enum('gelombang', [1, 2, 3]);
            $table->string('nisn', 11);
            $table->string('nik', 16);
            $table->string('nama', 255);
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('asal_sekolah');
            $table->string('tahun_lulus');
            $table->string('kelas');
            $table->string('alamat');
            $table->string('dusun');
            $table->string('rt', 3);
            $table->string('rw', 3);
            $table->string('desa');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('provinsi');
            $table->integer('kode_pos');
            $table->integer('is_verified')->default(0);
            $table->integer('is_accepted')->default(0);
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
        Schema::dropIfExists('biodatas');
    }
};
