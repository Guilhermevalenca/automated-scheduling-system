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
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->integer('workload');
            $table->boolean('is_optional')->default(false);
            $table->foreignId('prerequisite_id')
                ->nullable()
                ->constrained('subjects')
                ->onDelete('set null');
            $table->foreignId('course_id')
                ->nullable()
                ->constrained('courses')
                ->onDelete('set null');
            $table->foreignId('teacher_id')
                ->nullable()
                ->references('user_id')
                ->on('teachers')
                ->onDelete('set null');
            $table->foreignId('class_id')
                ->nullable()
                ->constrained('classes')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};
