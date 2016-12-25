<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Games.
 *
 * @author  The scaffold-interface created at 2016-12-25 12:29:14pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Games extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('games',function (Blueprint $table){

        $table->increments('id');

        $table->String('gamename');
        
        $table->String('gameslug');
        
        $table->boolean('is_interesting');
        
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
        Schema::drop('games');
    }
}
