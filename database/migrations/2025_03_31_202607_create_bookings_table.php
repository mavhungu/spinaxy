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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Who made the booking
            $table->foreignId('business_id')->constrained()->onDelete('cascade'); // Which clinic is booking
            $table->string('location');
            $table->date('collection_date');
            $table->string('instruction')->nullable();
            $table->integer('boxes_collected')->default(0);
            $table->integer('containers_collected')->default(0);
            $table->integer('boxes_requested')->default(0);
            $table->integer('containers_requested')->default(0);
            $table->boolean('status')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
