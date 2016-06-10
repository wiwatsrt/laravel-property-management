<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZoneLocationTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zone_location_translations', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('zone_location_id')->unsigned();
            $table->string('name');
            $table->string('locale')->index();

            $table->unique(['zone_location_id','locale']);
            $table->foreign('zone_location_id')->references('id')->on('zone_locations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('zone_location_translations');
    }
}
