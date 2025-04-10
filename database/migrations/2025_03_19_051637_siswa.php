<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('siswa', function (Blueprint $tabel){
            $tabel->id();
            $tabel->integer('nis');
            $tabel->string('nama');
            $tabel->string('alamat');
            $tabel->string('no_hp');
            $tabel->string('jenis_kelamin');
            $tabel->string('hobi');
            $tabel->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('siswa'); 
    }
};
