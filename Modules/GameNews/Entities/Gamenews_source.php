<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Gamenews_source.
 *
 * @author  The scaffold-interface created at 2016-12-25 12:38:52pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Gamenews_source extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'gamenews_sources';

	
}
