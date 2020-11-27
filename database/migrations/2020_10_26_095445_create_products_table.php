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
            $table->unsignedBigInteger('id_place');
            $table->unsignedBigInteger('id_category');
            $table->unsignedBigInteger('id_subcategory');
            $table->string('name');
            $table->integer('price');
            $table->longText('description');
            $table->string('image');
            $table->boolean('is_active')->default(0);
            $table->boolean('is_order')->default(0);
            $table->integer('counter')->default(0);
            $table->integer('rating');
            $table->timestamps();

            $table->foreign('id_place')->references('id')->on('places');
            $table->foreign('id_category')->references('id')->on('categories');
            $table->foreign('id_subcategory')->references('id')->on('sub_categories');
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
