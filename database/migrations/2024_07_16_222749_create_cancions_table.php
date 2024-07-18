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
        Schema::create('cancions', function (Blueprint $table) {
            $table->id('id_C');
            $table->string('nombre');
            $table->integer('duracion');
            $table->unsignedbiginteger('album_id');
            $table->foreign('album_id')->references('id_Al')->on('albums')->onDelete('cascade');
            $table->unsignedbiginteger('artista_id');
            $table->foreign('artista_id')->references('id_A')->on('artistas')->onDelete('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cancions');
    }
};
