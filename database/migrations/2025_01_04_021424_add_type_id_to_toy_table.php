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
        Schema::table('toy', function (Blueprint $table) {
            $table->foreignId('toy_type_id')->constrained('toy_type')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('toy', function (Blueprint $table) {
            $table->dropForeign(['toy_type_id']);
            $table->dropColumn('toy_type_id');
        });
    }
};
