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
        Schema::create('kapcsolat', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mu_id')->constrained('mu')->onDelete('cascade');
            $table->foreignId('alkoto_id')->constrained('alkoto')->onDelete('cascade');
            $table->string('tipus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kapcsolat');
    }
};
