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
        Schema::create('autors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('posgraduante_id');
            $table->unsignedBigInteger('documento_id');
            $table->timestamps();
            $table->foreign('posgraduante_id')->references('id')
                ->on('posgraduantes')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('documento_id')->references('id')
                ->on('documentos')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('autors');
    }
};
