<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('aluno_skill', function (Blueprint $table) {
            $table->foreignId('aluno_id')->constrained()->onDelete('cascade');
            $table->foreignId('skill_id')->constrained()->onDelete('cascade');
            $table->primary(['aluno_id', 'skill_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('aluno_skill');
    }
}; 