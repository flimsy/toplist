<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntry extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entry', function(Blueprint $table){
            $table->increments('id');
            $table->integer('user_id');
            $table->mediumText('description');  
            $table->string('entry_name'); 
            $table->string('entry_url');
            $table->string('image_url');
            $table->integer('votes');
            $table->string('Game');
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('entry');
    }
}
