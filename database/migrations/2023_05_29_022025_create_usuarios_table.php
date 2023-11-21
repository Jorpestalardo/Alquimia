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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->smallIncrements('usuario_id');
            $table->string('email', 255)->unique();
            $table->string('nombre', 255)->nullable();
            $table->string('apellido', 255)->nullable();
            $table->string('img', 255)->nullable();
            $table->string('biografia', 2000)->nullable();
            $table->string('password', 255);
            $table->string('numero_celular', 20)->nullable();
            $table->foreignId('avatar_id')->nullable();
            $table->foreign('avatar_id')->references('avatar_id')->on('avatar')->onDelete('set null');

            $table->string('recovery_code')->nullable();
            $table->timestamp('recovery_code_expires_at')->nullable();
            $table->string('recovery_code_hash')->nullable();

            $table->rememberToken(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};