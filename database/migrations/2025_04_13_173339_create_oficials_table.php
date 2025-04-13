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
        Schema::create('oficials', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_completo');
            $table->string('numero_placa')->unique();
            $table->unsignedBigInteger('rango_id');
            $table->unsignedBigInteger('institucion_id');
            $table->unsignedBigInteger('division_id')->nullable();
            $table->string('foto_oficial')->nullable(); // Ruta o URL de la foto
            $table->string('foto_departamento')->nullable(); // Ruta o URL del departamento
            $table->timestamps();
            
            // Llaves foráneas
            $table->foreign('division_id')->references('id')->on('divisions')->onDelete('set null');
            $table->foreign('rango_id')->references('id')->on('rangos')->onDelete('cascade');
            $table->foreign('institucion_id')->references('id')->on('institucions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oficials');
    }
};
