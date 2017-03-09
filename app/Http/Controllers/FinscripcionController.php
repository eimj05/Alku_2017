<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use Session;
use Redirect;
use App\CursoInscripcion;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;



class FinscripcionController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

     public function store(Request $request)
    {
        	$idu = Auth::id();

        	$icurso = new CursoInscripcion;
        	$icurso->cliente_id = $idu;
		    $icurso->cursos1_id = Input::get('id');
		    
		    $icurso->save();

       
   

    Session::flash('message','Mensaje enviado correctamente');
    return Redirect::back();
    }
}
