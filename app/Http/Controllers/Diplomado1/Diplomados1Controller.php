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
        $intereses= Intereses1::lists('tipoInteres','id');

        return view('diplomado1.diplomados1.create')->with('intereses', $intereses);
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
         Diplomados1::create([
            'nombreDiplomado' => $request['nombreDiplomado'],
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

        Session::flash('flash_message', 'Diplomados1 added!');

        return redirect('diplomado1/diplomados1');
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
        $diplomados1 = Diplomados1::findOrFail($id);

        return view('diplomado1.diplomados1.show', compact('diplomados1'));
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
        $diplomados1 = Diplomados1::findOrFail($id);

        return view('diplomado1.diplomados1.edit', compact('diplomados1'));
    }

     public function imagen($id)
    {
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

        Session::flash('flash_message', 'Diplomados1 updated!');

        return redirect('diplomado1/diplomados1');
    }

    public function update_imagen(Request $request){

        //Handle the user upload image of the course
        if($request->hasFile('imagen_diplomado')){
            $imagen_diplomado = $request->file('imagen_diplomado');
            $filename = time() . '.' . $imagen_diplomado->getClientOriginalExtension();
            Image::make($imagen_diplomado)->resize(300,300)->save( public_path('/uploads/diplomados/' .$filename ));

            $diplomados1 = $request->input('id');

            DB::table('diplomados1s')->where('id', $diplomados1)->update(array('imagen_diplomado' => $filename));

        }

        return redirect('diplomado1/diplomados1');
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

        Session::flash('flash_message', 'Diplomados1 deleted!');

        return redirect('diplomado1/diplomados1');
    }
}

