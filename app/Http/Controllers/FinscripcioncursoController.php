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
use Illuminate\Database\QueryException;



class FinscripcioncursoController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

     public function store(Request $request)
    {
    	try{
        	$idu = Auth::id();

        	$icurso = new CursoInscripcion;
        	$icurso->cliente_id = $idu;
		    $icurso->cursos1_id = Input::get('id');
		    
		    $icurso->save();

    Session::flash('message','Pre - Inscrito al curso correctamente');
    return Redirect::to('Fcursoslist');

	} catch(\Illuminate\Database\QueryException $e) {
	 Session::flash('message','El usuario ya se encuentra Pre - Inscrito al Curso');
	 return Redirect::to('Fcursoslist');
	} 
		
	}


}

