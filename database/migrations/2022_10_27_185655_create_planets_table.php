<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('galaxyId');
            $table->unsignedBigInteger('solarSystemId');
            $table->string('name');
            $table->string('dimension');
            $table->string('number_of_moons');
            $table->string('light_years_from_the_main_star');
            $table->foreign('solarSystemId')
                ->references('id')
                ->on('solar_systems')
                ->onDelete('cascade');
            $table->foreign('galaxyId')
                ->references('id')
                ->on('galaxies')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('planets');
    }
}
