<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ambiente_course', function (Blueprint $table) {
            $table->id();

            $table->foreignId('ambiente_id')
                ->constrained('ambientes')
                ->onDelete('cascade');

            $table->foreignId('course_id')
                ->constrained('courses')
                ->onDelete('cascade');

            $table->timestamps();

            $table->unique(['ambiente_id', 'course_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ambiente_course');
    }
};