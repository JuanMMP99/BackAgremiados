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
        Schema::create('agremiados', function (Blueprint $table) {
            $table->id();
            $table->string('a_paterno', 20);
            $table->string('a_materno', 20);
            $table->string('nombre', 20);
            $table->string('sexo', 20);
            $table->string('NUP', 10);
            $table->string('NUE', 10);
            $table->string('RFC', 13);
            $table->string('NSS', 18);
            $table->integer('telefono');
            $table->string('cuota', 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agremiados');
    }
};
