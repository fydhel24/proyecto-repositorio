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
        Schema::create('documentos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('resumen');
            $table->unsignedBigInteger('respaldo_digital_id');
            $table->unsignedBigInteger('programa_id');
            $table->string('tipo_programa');
            $table->unsignedBigInteger('modalidad_id');
            $table->unsignedBigInteger('ciudad_id');
            $table->timestamps();

            
                // Definir la clave foránea que referencia a la tabla 
            $table->foreign('respaldo_digital_id')->references('id')
            ->on('respaldo_digitals')->onUpdate('CASCADE')->onDelete('CASCADE');
            // Definir la clave foránea que referencia a la tabla 
            $table->foreign('programa_id')->references('id')
                ->on('programas')->onUpdate('CASCADE')->onDelete('CASCADE');
                // Definir la clave foránea que referencia a la tabla 
            $table->foreign('modalidad_id')->references('id')
            ->on('modalidads')->onUpdate('CASCADE')->onDelete('CASCADE');
            // Definir la clave foránea que referencia a la tabla 
            $table->foreign('ciudad_id')->references('id')
                ->on('ciudads')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documentos');
    }
};
