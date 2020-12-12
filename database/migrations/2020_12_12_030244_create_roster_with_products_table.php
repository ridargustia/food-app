<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRosterWithProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roster_with_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('roster_id');
            $table->unsignedBigInteger('product_id');
            $table->timestamps();

            $table->foreign('roster_id')->references('id')->on('rosters');
            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roster_with_products');
    }
}
