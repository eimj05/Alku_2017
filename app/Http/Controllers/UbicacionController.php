<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Ubicacion;
use Session;
use Auth;
use DB;



class UbicacionController extends Controller
{
     
     public function index()
    { 
        $idu = Auth::id();
        $rol = DB::table('cliente_roles1')->where('cliente_id','=', $idu)->value('roles1_id');


    if($rol ==1) 
        {
        $ubicacion = Ubicacion::paginate(15);

        return view('ubicacion.index', compact('ubicacion'));
        }
    elseif($rol ==2)
        {

        $ubicacion = Ubicacion::where('created_by','=', $idu)->paginate(15);

        return view('ubicacion.index', compact('ubicacion'));
        }
    }  

     public function create()
    {
       
        return view('ubicacion.create');

    }

     public function store(Request $request)
    {
        $idu = Auth::id();
    
        Ubicacion::create([
            'title' => $request['title'],
            'lat' => $request['lat'],
            'lng' => $request['lng'],
            'created_by' => $idu,]);


        Session::flash('flash_message', 'Ubicacion added!');


        return redirect('Ubicaciones');
    }

    public function show($id)
    {
        $ubicacion = Ubicacion::findOrFail($id);


    return View('ubicacion.show',compact('ubicacion'));
        
    }

    public function destroy($id)
    {

        $ubicacion = Ubicacion::findOrFail($id);

        $ubicacion = Ubicacion::destroy($id);


        Session::flash('flash_message', 'Ubicacion deleted!');

        return redirect('Ubicaciones');
    }

}
