<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Games_link.
 *
 * @author  The scaffold-interface created at 2016-12-25 12:45:26pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Games_link extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'games_links';

	
}
