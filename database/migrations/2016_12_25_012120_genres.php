<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Genres.
 *
 * @author  The scaffold-interface created at 2016-12-25 01:21:20pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Genres extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('genres',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('genre');
        
        $table->String('genreslug');
        
        $table->boolean('is_gamespotgenre');
        
        /**
         * Foreignkeys section
         */
        
        
        $table->timestamps();
        
        
        $table->softDeletes();
        
        // type your addition here

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('genres');
    }
}
