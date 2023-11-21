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
        Schema::create('ubicacion', function (Blueprint $table) {
            $table->smallIncrements('ubicacion_id');

            $table->unsignedSmallInteger('province_id');
            $table->unsignedBigInteger('city_id');
            // Establecer claves foráneas
            $table->foreign('province_id')->references('province_id')->on('province');
            $table->foreign('city_id')->references('city_id')->on('cities');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ubicacion');
    }
};
