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
        Schema::create('lineas_historial', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->string('motivo_visita');
            $table->text('descripcion');
            $table->foreignId('mascota_id')->constrained('mascotas');
            $table->timestamps();
        });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('linea_historials');
    }
};
