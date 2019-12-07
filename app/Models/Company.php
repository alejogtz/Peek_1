<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Company extends Model{
	//aqui se declara el nombre de la tabla que esta en mysql
	protected $table='companies';

	/**
	 * primaryKey 
	 * 
	 * @var integer
	 * @access protected
	 */
	protected $primaryKey = null;

	/**
	 * Indicates if the IDs are auto-incrementing.
	 *
	 * @var bool
	 */
	public $incrementing = false;

	//aqui los elementos a mostrarse de la tabla en cuestion
	protected $fillable=['user_id','bussines_name','bussines_email','latitude', 'longitude','description','rating'];
}
