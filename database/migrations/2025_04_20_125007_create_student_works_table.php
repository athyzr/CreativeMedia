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
        Schema::create('student_works', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // nama karya
            $table->text('description')->nullable(); // deskripsi karya
            $table->string('student_name')->nullable(); // opsional
            $table->string('image')->nullable(); // preview karya
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_works');
    }
};
