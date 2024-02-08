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
        Schema::create('ecoms', function (Blueprint $table) {
            $table->id();
            $table->string("Name");
            $table->string("Price");
            $table->string("Description");
            $table->string("Code");
            $table->string("Phone");
            $table->string("Image");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ecoms');
    }
};
