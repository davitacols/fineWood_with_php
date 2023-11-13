<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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
            $table->string('product_name');
            $table->string('category');
            $table->string('shipping_type');
            $table->date('date_created');
            $table->time('time_created');
            $table->date('date_updated');
            $table->string('main_image');
            $table->string('other_images');
            $table->integer('inventory');
            $table->string('sku');
            $table->decimal('product_price', 10, 2); // Added product_price column
            // Add more columns as needed
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
}
