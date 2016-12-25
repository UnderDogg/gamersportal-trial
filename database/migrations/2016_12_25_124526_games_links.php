<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Games_links.
 *
 * @author  The scaffold-interface created at 2016-12-25 12:45:26pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class GamesLinks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('games_links',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('gamepageurl');
        
        $table->String('downloadurl');
        
        $table->String('downloadurl2');
        
        $table->String('downloadurl3');
        
        $table->String('downloadurl4');
        
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
        Schema::drop('games_links');
    }
}
