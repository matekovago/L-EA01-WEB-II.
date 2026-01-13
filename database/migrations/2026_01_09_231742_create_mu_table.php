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
        Schema::create('mu', function (Blueprint $table) {
            $table->id();
            $table->string('cim');
            $table->string('eredeti')->nullable();
            $table->string('szinhaz')->nullable();
            $table->integer('ev')->nullable();
            $table->integer('felvonas')->nullable();
            $table->string('kep')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mu');
    }
};
