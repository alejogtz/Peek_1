<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Likes extends Model{
	//aqui se declara el nombre de la tabla que esta en mysql
	protected $table='likes';
	//aqui la llave primaria de la tabla
	//protected $primary='id';
	public $timestamps=false;
	//aqui los elementos a mostrarse de la tabla en cuestion
	protected $fillable=['user_id','post_id'];
}
