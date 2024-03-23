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
        Schema::create('balita', function (Blueprint $table) {
            $table->id("id_balita");
            $table->string("nama_balita");
            $table->string("alamat");
            $table->string("nama_orangtua");
            $table->enum("jenis_kelamin",["laki-laki","perempuan"]);
            $table->date("tanggal_lahir");
            $table->integer("umur");
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('balita');
    }
};
