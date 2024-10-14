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
        Schema::create('posgraduantes', function (Blueprint $table) {
            $table->id();
            $table->String('matricula');
            $table->unsignedBigInteger('persona_id');
            $table->timestamps();
            $table->foreign('persona_id')->references('id')
            ->on('datos_personales')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posgraduantes');
    }
};
