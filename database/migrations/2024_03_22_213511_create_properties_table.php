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
        Schema::create('properties_', function (Blueprint $table) {
            $table->id();
            $table->string('property_title');
            $table->string('description');
            $table->integer('rooms');
            $table->integer('bathrooms');
            $table->integer('price');
            $table->string('property_type');
            $table->string('location');
            $table->string('photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties_');
    }
};
