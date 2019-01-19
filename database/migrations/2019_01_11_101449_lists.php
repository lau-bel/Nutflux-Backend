<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Lists extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('lists', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('subuser_id')->unsigned();
            $table->foreign('subuser_id')
                    ->references('id')
                    ->on('subusers')
                    ->onDelete('no action')
                    ->onUpdate('no action');
/*
            $table->integer('list_type_id')->unsigned();
            $table->foreign('list_type_id')
                    ->references('id')
                    ->on('list_types')
                    ->onDelete('no action')
                    ->onUpdate('no action');

            $table->integer('film_id')->unsigned();
            $table->foreign('film_id')
                    ->references('id')
                    ->on('films')
                    ->onDelete('no action')
                    ->onUpdate('no action');
                    */

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
        //
        Schema::dropIfExists('lists');

    }
}