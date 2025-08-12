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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description')->nullable();
            $table->decimal('price',15,2);
            $table->string('currency');
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->integer('area');
            $table->longText('address');
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->char('pincode', 6);
            $table->string('image_url')->nullable();
            $table->string('property_type')->nullable();
            $table->string('status');
            $table->date('available_from');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
