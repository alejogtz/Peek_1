<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;

//use App\Models\ModeloDetalleIngrediente;


/**
*
*/
class ControllerPerfil extends Controller
{

  public function verVistaPerfil()
	{
			return view('vista');
	}

	public function verVistaVeterinario()
	{
			return view('vistaVeterinaria');
	}



}

?>
