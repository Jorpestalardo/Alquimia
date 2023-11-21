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
        Schema::create('comentarios_blogs', function (Blueprint $table) {
            $table->id('comentarioblog_id');
            $table->text('mensaje');

            $table->unsignedSmallInteger('usuario_id');
            $table->foreignId('blog_id');
            $table->foreign('usuario_id')->references('usuario_id')->on('usuarios');
            $table->foreign('blog_id')->references('blog_id')->on('blog')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comentarios_eventos');
    }
};
