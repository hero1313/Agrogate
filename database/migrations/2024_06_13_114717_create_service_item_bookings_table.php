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
        Schema::create('service_item_bookings', function (Blueprint $table) {
            $table->id();
            $table->integer('service_item_id');
            $table->integer('quantity');
            $table->decimal('total_price', 10, 2);
            $table->date('date')->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_item_bookings');
    }
};
