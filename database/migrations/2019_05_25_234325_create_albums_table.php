<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
        Schema::create('albums', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('date');
            $table->unsignedInteger('homemusic_id')->comment('Llave foranea de la tabla users');

            $table->foreign('homemusic_id')->references('id')
                                      ->on('homemusics')
                                      ->onDelete('cascade')
                                      ->onUpdate('cascade');

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
        Schema::dropIfExists('albums');
    }
}
