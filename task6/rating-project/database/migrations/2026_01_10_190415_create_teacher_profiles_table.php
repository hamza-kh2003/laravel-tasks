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
        Schema::create('teacher_profiles', function (Blueprint $table) {
            $table->id();
              $table->unsignedBigInteger('user_id'); // إدخال يدوي (مش FK)

        $table->string('image')->nullable();   // path للصورة

        $table->string('subject');
        $table->string('branch');

        $table->unsignedInteger('experience'); // سنوات خبرة (رقم)

        $table->string('phone', 30);

        $table->text('about')->nullable();

        $table->boolean('is_approved')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teacher_profiles');
    }
};
