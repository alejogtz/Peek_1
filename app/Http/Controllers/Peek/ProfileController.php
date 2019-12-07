<?php

namespace App\Http\Controllers\Peek;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    //
    /** 
     * 
     * @param data Objeto Request con el formulario
     * 
     * @return void
    */
    //controlador para datatable de busqueda perfil
    public function getTasks(Request $id)
    {
    $tasks = Task::select(['id','name','category','state'])
    where->$id

    return Datatables::of($tasks)

        ->make(true);
}
}
