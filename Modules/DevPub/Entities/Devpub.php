<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Devpub.
 *
 * @author  The scaffold-interface created at 2016-12-25 12:42:40pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Devpub extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'devpubs';

	
}
