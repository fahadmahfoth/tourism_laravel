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
            $table->increments('id');
            $table->integer('category_id');
            $table->string('name',255);
            $table->text('contente');
            $table->string('phone_number',255)->nullable();
            $table->string('city',255);
            $table->string('time_up')->nullable();
            $table->string('time_down')->nullable();
            $table->string('days')->nullable();
            $table->string('image');
            $table->text('map_lat')->nullable();
            $table->text('map_lng')->nullable();
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
        Schema::dropIfExists('places');
    }
}
