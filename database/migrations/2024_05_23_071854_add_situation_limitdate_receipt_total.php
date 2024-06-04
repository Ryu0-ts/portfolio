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
            $table->string("situation")->after("image");
            $table->string("limit_date")->after("updated_at");
            $table->string("receipt")->after("others");
            $table->string("total_price")->after("receipt");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pets', function (Blueprint $table) {
            $table->dropColumn('situation');
            $table->dropColumn('limit_date');
            $table->dropColumn('receipt');
            $table->dropColumn('total_price');
        });
    }
};
