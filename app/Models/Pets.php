<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Pets extends Model{
	//aqui se declara el nombre de la tabla que esta en mysql
	protected $table='pets';
	//aqui la llave primaria de la tabla
	protected $primary='user_id';
	public $timestamps=false;
	//aqui los elementos a mostrarse de la tabla en cuestion
	protected $fillable=['user_id','name','age','sex','specie','description'];
}
