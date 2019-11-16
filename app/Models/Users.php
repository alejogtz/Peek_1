<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Users extends Model{
	//aqui se declara el nombre de la tabla que esta en mysql
	protected $table='users';
	
	//aqui los elementos a mostrarse de la tabla en cuestion
	protected $fillable=['id','type','email','username','password','profile_photo','paypal','phone','email_verified_at'];
}
