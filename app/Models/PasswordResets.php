<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class PasswordResets extends Model{
	//aqui se declara el nombre de la tabla que esta en mysql
	protected $table='password_resets';
	//aqui la llave primaria de la tabla
	//protected $primary=;
	public $timestamps=false;
	//aqui los elementos a mostrarse de la tabla en cuestion
	protected $fillable=['email','token','created_at'];
}
