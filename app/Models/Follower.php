<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Follow extends Pivot
{
	//aqui se declara el nombre de la tabla que esta en mysql
	protected $table = 'followers';

	//aqui los elementos a mostrarse de la tabla en cuestion
	protected $fillable = ['user_id', 'user_id_follower', 'provider'];
}
