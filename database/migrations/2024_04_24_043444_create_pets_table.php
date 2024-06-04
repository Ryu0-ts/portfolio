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
        Schema::create('pets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('type');
            $table->boolean('gender');
            $table->string('kind');
            $table->integer('old');
            $table->integer('size');
            $table->boolean('vaccine');
            $table->boolean('surgery');
            $table->string('background');
            $table->string('terms');
            $table->string('others');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
