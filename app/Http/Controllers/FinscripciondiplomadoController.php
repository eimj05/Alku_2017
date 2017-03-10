<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use Session;
use Redirect;
use App\DiplomadoInscripcion;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;

class FinscripciondiplomadoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

     public function store(Request $request)
    {
        try{

        	$idu = Auth::id();

        	$idiplomado = new DiplomadoInscripcion;
        	$idiplomado->cliente_id = $idu;
		    $idiplomado->diplomados1_id = Input::get('id');
		    
		    $idiplomado->save();

    Session::flash('message','Pre - Inscrito al diplomado correctamente');
    return Redirect::to('Fdiplomadoslist');
    } catch(\Illuminate\Database\QueryException $e) {
	 Session::flash('message','El usuario ya se encuentra Pre - Inscrito al Diplomado');
	 return Redirect::to('Fdiplomadoslist');
	} 
		
	}

}
