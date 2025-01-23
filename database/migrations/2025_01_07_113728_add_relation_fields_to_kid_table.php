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
        Schema::table('kid', function (Blueprint $table) {
            $table->foreignId('gender_id')->constrained('gender')->onDelete('cascade');
            $table->foreignId('country_id')->constrained('country')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kid', function (Blueprint $table) {
            $table->dropForeign(['gender_id']);
            $table->dropColumn('gender_id');
            
            $table->dropForeign(['country_id']);
            $table->dropColumn('country_id');
        });
    }
};
