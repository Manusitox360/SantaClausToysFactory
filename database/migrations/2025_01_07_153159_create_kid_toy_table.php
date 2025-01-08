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
        Schema::create('kid_toy', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kid_id')->constrained('kid')->onDelete('cascade');
            $table->foreignId('toy_id')->constrained('toy')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kid_toy');
    }
};
