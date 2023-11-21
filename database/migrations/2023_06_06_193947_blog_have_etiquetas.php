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
        Schema::create('blog_have_etiquetas', function (Blueprint $table) {

            $table->foreignId('blog_id')->constrained('blog', 'blog_id');
            $table->unsignedTinyInteger('etiquetas_id');
            $table->foreign('etiquetas_id')->references('etiquetas_id')->on('etiquetas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_have_etiquetas');
    }
};
