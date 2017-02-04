<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Ubicacion;
use Session;



class UbicacionController extends Controller
{
     
     public function index()
    {
        $ubicacion = Ubicacion::paginate(15);

        return view('ubicacion.index', compact('ubicacion'));
    }

    
     public function create()
    {
       
        return view('ubicacion.create');

    }

     public function store(Request $request)
    {
        
        $ubicacion = Ubicacion::create([
            'title' => $request['title'],
            'lat' => $request['lat'],
            'lng' => $request['lng'],]);

        Session::flash('flash_message', 'Ubicacion added!');


        return redirect('curso1/cursos1');
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

        return redirect('ubicacion');
    }

}
