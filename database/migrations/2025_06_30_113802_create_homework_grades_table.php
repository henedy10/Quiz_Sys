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
        Schema::create('homework_grades', function (Blueprint $table) {
            $table->id();

            // foreign key
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('students');

            $table->integer('student_mark');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homework_grades');
    }
};
