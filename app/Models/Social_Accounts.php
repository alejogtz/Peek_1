<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Social_Accounts extends Model{
	//aqui se declara el nombre de la tabla que esta en mysql
	protected $table='social_accounts';
	//aqui la llave primaria de la tabla
	protected $primary='user_id';
	public $timestamps=false;
	//aqui los elementos a mostrarse de la tabla en cuestion
	protected $fillable=['user_id','provider_user_id','provider'];
}
