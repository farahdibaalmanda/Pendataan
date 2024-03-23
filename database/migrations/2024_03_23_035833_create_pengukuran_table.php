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
        Schema::create('pengukuran', function (Blueprint $table) {
            $table->id("id_pengukuran");
                      $table->integer("tinggi_badan");
                      $table->integer("berat_badan");
                      $table->integer("lingkar_kepala");
                      $table->integer("lingkar_lengan_atas");
                      $table->date("waktu");
                      $table->string("kategori_tinggi_badan");
                      $table->string("kategori_berat_badan");
                      $table->string("kategori_hasil");
                      $table->unsignedBigInteger("id_petugas");
                      $table->unsignedBigInteger("id_balita");
                      $table->foreign("id_petugas")->references("id_petugas")->on("petugas")->onDelete("cascade");
                      $table->foreign("id_balita")->references("id_balita")->on("balita")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengukuran');

    }
};
