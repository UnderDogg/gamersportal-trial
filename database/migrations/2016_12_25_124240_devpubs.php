<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Devpubs.
 *
 * @author  The scaffold-interface created at 2016-12-25 12:42:40pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Devpubs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('devpubs',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('devpuburl');
        
        $table->String('devpubname');
        
        $table->String('devpubtype');
        
        $table->boolean('isgreatdevpub');
        
        $table->String('devpubdescription');
        
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
        Schema::drop('devpubs');
    }
}
