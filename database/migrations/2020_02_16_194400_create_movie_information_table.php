<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovieInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_information', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');    //varchar(255)
            $table->date('releaseDate');   //date
            $table->string('description');  //varchar(255)
            $table->string('genreType');    //varchar(255)
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
        Schema::dropIfExists('movie_information');
    }
}
