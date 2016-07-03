<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('location_id')->unsigned();
            $table->integer('type_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->integer('view_id')->unsigned();
            $table->integer('ownership')->unsigned();
            $table->string('image')->nullable();
            $table->tinyInteger('bedrooms');
            $table->tinyInteger('bathrooms');
            $table->tinyInteger('parking');
            $table->tinyInteger('parking_cars');
            $table->tinyInteger('swimming_pool');
            $table->decimal('land_area', 10, 2);
            $table->decimal('building_area', 10, 2);
            $table->decimal('price', 15, 2);
            $table->timestamps();

            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('properties');
    }
}
