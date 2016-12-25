<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Gamenews.
 *
 * @author  The scaffold-interface created at 2016-12-25 12:31:11pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Gamenews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('gamenews',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('gamenews_title');
        
        $table->String('gamenews_intro');
        
        $table->String('gamenews_body');
        
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
        Schema::drop('gamenews');
    }
}
