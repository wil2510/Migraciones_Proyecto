<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ofertas', function (Blueprint $table) {
            $table->id();
            $table->string('jornada');
            $table->date('registration_date');
            $table->integer('capacity');
            $table->foreignId('programa_id')
                ->constrained('programas')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ofertas');
    }
};
