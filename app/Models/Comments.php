<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Comments extends Model{
	//aqui se declara el nombre de la tabla que esta en mysql
	protected $table='comments';
	//aqui la llave primaria de la tabla
	//protected $primary='id';
	public $timestamps=false;
	//aqui los elementos a mostrarse de la tabla en cuestion
	protected $fillable=['content','user_id','post_id'];
}
