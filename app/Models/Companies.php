<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Companies extends Model{
	//aqui se declara el nombre de la tabla que esta en mysql
	protected $table='companies';
	//aqui la llave primaria de la tabla
	protected $primary='user_id';
	public $timestamps=false;
	//aqui los elementos a mostrarse de la tabla en cuestion
	protected $fillable=['user_id','bussines_name','bussines_email','google_maps_position','description','rating'];
}
