<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_category');
            $table->unsignedBigInteger('id_user');
            $table->string('name');
            $table->string('phone_number');
            $table->string('address');
            $table->string('open_time');
            $table->longText('description');
            $table->string('url_gmap');
            $table->boolean('is_open')->default(0);
            $table->boolean('is_close')->default(0);
            $table->boolean('is_off')->default(0);
            $table->integer('counter')->default(0);
            $table->timestamps();

            $table->foreign('id_category')->references('id')->on('categories');
            $table->foreign('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('places');
    }
}
