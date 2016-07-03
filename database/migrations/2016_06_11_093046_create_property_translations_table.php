<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_translations', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('property_id')->unsigned();
            $table->string('name');
            $table->text('detail');
            $table->text('key_feature');
            $table->text('location_detail');
            $table->string('locale')->index();

            $table->unique(['property_id','locale']);
            $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('property_translations');
    }
}
