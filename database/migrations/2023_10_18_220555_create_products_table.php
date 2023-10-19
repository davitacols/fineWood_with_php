<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->enum('shipping_type', [0, 1])->default(0); // 0 for drop shipping, 1 for personal
            $table->enum('category', ['bedroom', 'school', 'office', 'kitchen', 'outdoor']);
            $table->string('product_name');
            $table->decimal('product_price', 8, 2);
            $table->string('main_image'); // File location for main image (PNG or JPG)
            $table->json('other_images')->nullable(); // Store additional images as JSON array, nullable if not required
            $table->integer('inventory')->default(0);
            $table->string('sku')->unique();
            $table->date('date_created');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
