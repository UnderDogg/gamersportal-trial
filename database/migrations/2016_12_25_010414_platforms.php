<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Platforms.
 *
 * @author  The scaffold-interface created at 2016-12-25 01:04:14pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Platforms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('platforms',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('platformname');
        
        $table->String('platformslug');
        
        $table->boolean('showonmainpage');
        
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
        Schema::drop('platforms');
    }
}
