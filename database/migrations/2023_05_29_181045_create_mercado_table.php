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
        Schema::create('mercado', function (Blueprint $table) {
            $table->smallIncrements('mercado_id');
            $table->string('titulo', 100);
            $table->string('foto');
            $table->string('caracteristica', 2000);
            $table->unsignedInteger('precio');
            $table->string('autor');
            $table->boolean('envio')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mercado');
    }
};
