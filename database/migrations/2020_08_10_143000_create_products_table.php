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
            $table->timestamps();

            $table->string('name');
            $table->float('price');
            $table->integer('size');
            $table->string('size_unit');
            $table->unsignedBigInteger('image_id')->nullable();
            $table->string('order_link');
            $table->text('description')->nullable();

            $table->foreign('image_id')
                ->references('id')
                ->on('gallery_images');
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
