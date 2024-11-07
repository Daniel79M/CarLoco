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
        // database/migrations/xxxx_xx_xx_create_cars_table.php
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('marque');
            $table->text('description');
            $table->decimal('price', 10, 2);
            $table->string('model');
            $table->string('make');
            $table->integer('year');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
