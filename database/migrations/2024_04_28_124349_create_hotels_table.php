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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('name_ge');
            $table->string('name_en');
            $table->decimal('price', 20, 2)->index();
            $table->string('description_ge')->nullable();
            $table->string('description_en')->nullable();
            $table->string('seo_title')->nullable();
            $table->string('seo_description')->nullable();
            $table->string('address_ge');
            $table->string('address_en');
            $table->longText('google_map')->nullable();
            $table->string('city_ge')->index();
            $table->string('city_en')->index();
            $table->integer('food')->nullable();
            $table->time('check_in')->nullable();
            $table->time('check_out')->nullable();
            $table->integer('conditioner')->nullable();
            $table->integer('internet')->nullable();
            $table->integer('kitchen')->nullable();
            $table->integer('pool')->nullable();
            $table->integer('sauna')->nullable();
            $table->integer('porch')->nullable();
            $table->integer('Protection')->nullable();
            $table->integer('permission')->default(0)->nullable();
            $table->integer('priority')->default(0)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
