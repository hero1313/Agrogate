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
            $table->integer('user_id');
            $table->integer('service_item_id');
            $table->integer('quantity');
            $table->decimal('total_price', 10, 2);
            $table->date('date')->index();
            $table->string('visitor_name');
            $table->string('visitor_last_name');
            $table->string('visitor_email');
            $table->string('visitor_number');
            $table->string('visitor_id_number');
            $table->integer('status')->default('0')->nullable();
            $table->integer('pay_status')->default('0')->nullable();
            $table->integer('pay_method')->default('1')->nullable();
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
