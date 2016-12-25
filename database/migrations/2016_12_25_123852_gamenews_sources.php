<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Gamenews_sources.
 *
 * @author  The scaffold-interface created at 2016-12-25 12:38:52pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class GamenewsSources extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('gamenews_sources',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('gnsource_name');
        
        $table->String('gnsource_url');
        
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
        Schema::drop('gamenews_sources');
    }
}
