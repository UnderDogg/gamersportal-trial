<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Game.
 *
 * @author  The scaffold-interface created at 2016-12-25 12:29:14pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Game extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'games';

	
}
