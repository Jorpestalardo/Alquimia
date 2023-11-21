<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->id('compra_id');
            $table->unsignedSmallInteger('usuario_id');
            $table->unsignedSmallInteger('mercado_id');

            $table->foreign('usuario_id')->references('usuario_id')->on('usuarios');
            $table->foreign('mercado_id')->references('mercado_id')->on('mercado')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('compras');
    }
}