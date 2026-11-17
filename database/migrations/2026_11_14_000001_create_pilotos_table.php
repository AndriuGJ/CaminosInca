<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('pilotos', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger('orden')->index();
            $table->string('numero', 10)->unique();
            $table->string('piloto');
            $table->string('copiloto');
            $table->string('vehiculo');
            $table->string('localidad');
            $table->string('clase', 20)->index();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pilotos');
    }
};
