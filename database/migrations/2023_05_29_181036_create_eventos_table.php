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
        Schema::create('eventos', function (Blueprint $table) {
            $table->id('eventos_id');
            $table->unsignedSmallInteger('usuario_id');
            $table->unsignedSmallInteger('ubicacion_id');

            $table->foreign('usuario_id')->references('usuario_id')->on('usuarios');
            $table->foreign('ubicacion_id')->references('ubicacion_id')->on('ubicacion');

            $table->string('titulo', 255);
            $table->text('descripcion');
            $table->string('img');
            $table->date('fecha');
            $table->string('autor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};
