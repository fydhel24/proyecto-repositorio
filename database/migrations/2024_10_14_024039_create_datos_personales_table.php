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
        Schema::create('datos_personales', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('paterno');
            $table->string('materno');
            $table->string('cedula_identidad'); // Considera agregar unique si es necesario
            $table->string('celular'); // Es mejor como string para manejar códigos de país
            $table->text('direccion');
            $table->date('fecha_nacimiento');
            $table->unsignedBigInteger('id_ciudad_registro');
            $table->unsignedBigInteger('id_pais');
            $table->timestamps();
    
            // Definir las claves foráneas
            $table->foreign('id_ciudad_registro')->references('id')->on('ciudads')->onDelete('cascade');
            $table->foreign('id_pais')->references('id')->on('pais')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datos_personales');
    }
};
