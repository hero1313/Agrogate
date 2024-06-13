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
        Schema::create('service_items', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('name_ge');
            $table->string('name_en');
            $table->string('seo_title')->nullable();
            $table->string('seo_description')->nullable();
            $table->string('address_ge');
            $table->string('address_en');
            $table->longText('google_map')->nullable();
            $table->string('city_ge')->index();
            $table->string('city_en')->index();
            $table->longText('description_ge')->nullable();
            $table->longText('description_en')->nullable();
            $table->decimal('price', 10, 2);
            $table->integer('permission')->default(0)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_items');
    }
};
