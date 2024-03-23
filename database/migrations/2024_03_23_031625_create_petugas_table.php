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
        Schema::create('petugas', function (Blueprint $table) {
            $table->id("id_petugas");
            $table->string("nama_petugas");
            $table->string("alamat_petugas");
            $table->string("no_tlp_petugas");
            $table->string("password");
            $table->unsignedBigInteger("id_posyandu");
            $table->timestamps();
            $table->foreign("id_posyandu")->references("id_posyandu")->on("posyandu")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('petugas');
    }
};
