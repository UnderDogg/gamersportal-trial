<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Serys.
 *
 * @author  The scaffold-interface created at 2016-12-25 01:22:18pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Serys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('serys',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('serys_name');
        
        $table->String('serys_slug');
        
        $table->String('serys_url');
        
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
        Schema::drop('serys');
    }
}
