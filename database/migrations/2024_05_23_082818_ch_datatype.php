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
        Schema::table('pets', function (Blueprint $table) {
            $table->timestamp('limit_date')->change();
            $table->integer("total_price")->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pet', function (Blueprint $table) {
            $table->varchar("limit_date")->change();
            $table->varchar("total_price")->change();
        });
    }
};
