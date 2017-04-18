<?php

namespace App\Http\Controllers\Diplomado1;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Diplomados1;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use App\Intereses1;
use PDF;
use Auth;
use DB;
use Image;
use inputs;
use App\Ubicacion;
use Crypt;

class Diplomados1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $idu = Auth::id();
        $rol = DB::table('cliente_roles1')->where('cliente_id','=', $idu)->value('roles1_id');
        
    if($rol ==1) 
    {
        $diplomados1 = Diplomados1::paginate(15);
        return view('diplomado1.diplomados1.index', compact('diplomados1'));
    }
    elseif($rol ==2)
    {
        $diplomados1 = Diplomados1::where('created_by','=', $idu)->paginate(15);

        return view('diplomado1.diplomados1.index', compact('diplomados1'));
    }
        
       
    }

    public function pdf()
    {
        $diplomados1 = Diplomados1::paginate(15);


        $pdf = PDF::loadView('diplomado1.diplomados1.pdf', compact('diplomados1'));
        return $pdf->download('diplomados.pdf');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        $idu = Auth::id();

        $ubicacion= Ubicacion::where('created_by','=', $idu)->lists('title', 'id');
        $intereses= Intereses1::lists('tipoInteres','id');

        //return view('diplomado1.diplomados1.create')->with('intereses', $intereses);
        return view('diplomado1.diplomados1.create', compact('intereses','ubicacion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        
        $idu = Auth::id();
        //Diplomados1::create($request->all());
         $diplomados1=Diplomados1::create([
            'nombreDiplomado' => $request['nombreDiplomado'],
            'descripcionCorta' => $request['descripcionCorta'],
            'descripcion' => $request['descripcion'],
            'fechaInicio' => $request['fechaInicio'],
            'fechaFin' => $request['fechaFin'],
            'horaInicio' => $request['horaInicio'],
            'horaFin' => $request['horaFin'],
            'costo' => $request['costo'],
            'capacitador' => $request['capacitador'],
            'cupoLimite' => $request['cupoLimite'],
            'created_by' => $idu,
            'interes' => $request['interes']]);

        $diplomados1->ubicacion()->sync([]);

        $diplomados1->ubicacion()->attach($request->ubicacion);

        Session::flash('message','El diplomado ha sido creado correctamente');

        return redirect('Diplomados');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function show($id)
    {
        $id = Crypt::decrypt($id);

        $diplomados1 = Diplomados1::findOrFail($id);
        $ubicaciones = Diplomados1::find($diplomados1->id)->ubicacion()->get();
        $interes = Diplomados1::where('id', '=', $id)->lists('interes');
        $cats = Intereses1::whereIn('id', $interes)->get();



        return view('diplomado1.diplomados1.show', compact('diplomados1','ubicaciones','cats'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function edit($id)
    {
       $id = Crypt::decrypt($id);

        $idu = Auth::id();

        $ubicacion= Ubicacion::where('created_by','=', $idu)->lists('title', 'id');
        $diplomados1 = Diplomados1::findOrFail($id);
        $intereses= Intereses1::lists('tipoInteres','id');

        $selectedInteres = DB::table('diplomados1s')->where('id','=', $id)->value('interes');

        $selectedUbicacion = DB::table('diplomado_ubicacion1')->where('diplomado_id','=', $id)->value('ubicacion_id');


        return view('diplomado1.diplomados1.edit', compact('diplomados1','ubicacion','intereses','selectedInteres','selectedUbicacion'));
    }

     public function imagen($id)
    {
        $id = Crypt::decrypt($id);
        $diplomados1 = Diplomados1::findOrFail($id);

        return view('diplomado1.diplomados1.imagen ', compact('diplomados1'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function update($id, Request $request)
    {
        
        $diplomados1 = Diplomados1::findOrFail($id);
        $diplomados1->update($request->all());

        $diplomados1->ubicacion()->sync([]);

        $diplomados1->ubicacion()->attach($request->ubicacion);

        DB::table('diplomados1s')
            ->where('id', $id)
            ->update(['interes' => $request->intereses]);

         Session::flash('message', 'El diplomado ha sido actualizado correctamente');

        return redirect('Diplomados');
    }

    public function update_imagen(Request $request){

        //Handle the user upload image of the course
        if($request->hasFile('imagen_diplomado')){
            $imagen_diplomado = $request->file('imagen_diplomado');
            $filename = time() . '.' . $imagen_diplomado->getClientOriginalExtension();
            Image::make($imagen_diplomado)->resize(1200,563)->save( public_path('/uploads/diplomados/' .$filename ));

            $diplomados1 = $request->input('id');

            DB::table('diplomados1s')->where('id', $diplomados1)->update(array('imagen_diplomado' => $filename));

        }

        Session::flash('message', 'La imagen del diplomado ha sido actualizada correctamente');

        return redirect('Diplomados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function destroy($id)
    {
        Diplomados1::destroy($id);

        Session::flash('message', 'El diplomado ha sido eliminado correctamente');

        return redirect('Diplomados');
    }
}

