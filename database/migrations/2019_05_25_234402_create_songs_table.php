<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('duration');
            $table->unsignedInteger('interpreter_id')->comment('Llave foranea');

            $table->foreign('interpreter_id')->references('id')
                                      ->on('interpreters')
                                      ->onDelete('cascade')
                                      ->onUpdate('cascade');
           $table->unsignedInteger('gender_id')->comment('Llave foranea');

            $table->foreign('gender_id')->references('id')
                                      ->on('genders')
                                      ->onDelete('cascade')
                                      ->onUpdate('cascade');
            $table->timestamps();
        });
        Schema::create('medial_songs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('medial_id')->comment('Llave foranea de la tabla medial');
            $table->unsignedInteger('song_id')->comment('Llave foranea de la tabla song');
            $table->timestamps();

            $table->foreign('medial_id')->references('id')
                                        ->on('medials')
                                        ->onDelete('cascade')
                                        ->onUpdate('cascade');
            
            $table->foreign('song_id')->references('id')
                                      ->on('songs')
                                      ->onDelete('cascade')
                                      ->onUpdate('cascade');
        });
        Schema::create('author_songs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('author_id')->comment('Llave foranea de la tabla medial');
            $table->unsignedInteger('song_id')->comment('Llave foranea de la tabla song');
            $table->timestamps();

            $table->foreign('author_id')->references('id')
                                        ->on('authors')
                                        ->onDelete('cascade')
                                        ->onUpdate('cascade');
            
            $table->foreign('song_id')->references('id')
                                      ->on('songs')
                                      ->onDelete('cascade')
                                      ->onUpdate('cascade');
        });
        Schema::create('album_songs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('album_id')->comment('Llave foranea de la tabla medial');
            $table->unsignedInteger('song_id')->comment('Llave foranea de la tabla song');
            $table->timestamps();

            $table->foreign('album_id')->references('id')
                                        ->on('albums')
                                        ->onDelete('cascade')
                                        ->onUpdate('cascade');
            
            $table->foreign('song_id')->references('id')
                                      ->on('songs')
                                      ->onDelete('cascade')
                                      ->onUpdate('cascade');
        });
    } 

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::dropIfExists('songs');
        Schema::dropIfExists('medial_songs');
        Schema::dropIfExists('author_songs');
        Schema::dropIfExists('album_songs');
    }
}
