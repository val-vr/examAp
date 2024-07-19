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
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id('Mat');
            $table->string('nombre', 50);
            $table->string('a_p', 50);
            $table->string('a_m', 50);
            $table->string('correo', 80)->nullable();
            $table->char('telefono', 10);
            $table->string('f_nac', 10);
            $table->timestamps(); 
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
