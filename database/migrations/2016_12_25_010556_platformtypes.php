<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Platformtypes.
 *
 * @author  The scaffold-interface created at 2016-12-25 01:05:56pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Platformtypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('platformtypes',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('platformtype');
        
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
        Schema::drop('platformtypes');
    }
}
