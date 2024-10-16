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
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('persona_id')->nullable(); // Agregar el campo persona_id
            $table->foreign('persona_id')->references('id')->on('datos_personales')->onDelete('set null')->onDelete('CASCADE'); // Establecer la clave foránea
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['persona_id']); // Eliminar la clave foránea
            $table->dropColumn('persona_id'); // Eliminar el campo persona_id
        });
    }
};
