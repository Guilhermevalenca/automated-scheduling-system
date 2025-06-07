<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('more_datas', function (Blueprint $table) {
            $table->foreignId('user_id')
                ->constrained('users')
                ->onDelete('cascade')
                ->primary();
            $table->foreignId('teacher_id')
                ->nullable()
                ->references('user_id')
                ->on('teachers')
                ->onDelete('set null');
            $table->string('function');
            $table->string('registration_siape')->unique()->nullable();
            $table->string('orgao_lotacao');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('more_datas');
    }
};
