<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('popular_courses', function (Blueprint $table) {
            $table->id();
            $table->enum('course_category',['design&multimedia','web&software','degitalmarketing']);
            $table->string('course_name')->nullable();
            $table->string('t_n_reviews')->nullable();
            $table->string('t_n_students')->nullable();
            $table->string('n_modules')->nullable();
            $table->string('price')->nullable();
            $table->string('hours')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('popular_courses');
    }
};