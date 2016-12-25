<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Gamelinks.
 *
 * @author  The scaffold-interface created at 2016-12-25 12:43:52pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Gamelinks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('gamelinks',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('gamelink_url');
        
        $table->String('gamelink_title');
        
        $table->String('httpcode');
        
        $table->String('httpdefinition');
        
        $table->String('gamelink_type');
        
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
        Schema::drop('gamelinks');
    }
}
