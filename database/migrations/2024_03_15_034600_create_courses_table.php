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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->integer('course_id')->comment('課ID');
            $table->integer('teacher_id')->comment('教師ID');
            $table->string('course_name')->comment('課程名稱');
            $table->string('course_introduction')->comment('課程簡介');
            $table->longText('pic')->comment('課程照片');
            $table->timestamps();
            // $table->integer('academic_id')->comment('學期ID');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
