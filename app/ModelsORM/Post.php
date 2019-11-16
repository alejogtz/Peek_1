<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Post extends Model{
	//aqui se declara el nombre de la tabla que esta en mysql
	protected $table='posts';
	
	//aqui los elementos a mostrarse de la tabla en cuestion
	protected $fillable=['photo','description','hashtags','user_id'];
}
