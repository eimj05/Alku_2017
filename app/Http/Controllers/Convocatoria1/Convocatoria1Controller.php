<?php

namespace App\Http\Controllers\Convocatoria1;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Convocatoria1;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use PDF;
use App\Ubicacion;
use Image;
use DB;
use App\Intereses1;


class Convocatoria1Controller extends Controller
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
        $convocatoria1 = Convocatoria1::paginate(15);

        return view('convocatoria1.convocatoria1.index', compact('convocatoria1'));
    }
    public function pdf()
    {
        $convocatoria1 = Convocatoria1::paginate(15);


        $pdf = PDF::loadView('convocatoria1.convocatoria1.pdf', compact('convocatoria1'));
        return $pdf->download('convocatorias.pdf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {

        $ubicacion= Ubicacion::lists('title', 'id');
        $intereses= Intereses1::lists('tipoInteres','id');


        return view('convocatoria1.convocatoria1.create' , compact('ubicacion','intereses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        
        $convocatoria1= Convocatoria1::create([
            'nombreConvocatoria' => $request['nombreConvocatoria'],
            'descripcionCorta' => $request['descripcionCorta'],
            'descripcion' => $request['descripcion'],
            'tipoConvocatoria' => $request['tipoConvocatoria'],
            'dependencia' => $request['dependencia'],
            'fechaCierre' => $request['fechaCierre'],
            'contacto' => $request['contacto'],
            'interes' => $request['interes']]);

         $convocatoria1->ubicacion()->sync([]);

        $convocatoria1->ubicacion()->attach($request->ubicacion);


        Session::flash('message','La convocatoria ha sido creada correctamente');

        return redirect('Convocatorias');
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

        $convocatoria1 = Convocatoria1::findOrFail($id);
        $ubicaciones = Convocatoria1::find($convocatoria1->id)->ubicacion()->get();

        $interes = Convocatoria1::where('id', '=', $id)->lists('interes');
        $cats = Intereses1::whereIn('id', $interes)->get();

        return view('convocatoria1.convocatoria1.show', compact('convocatoria1','ubicaciones','cats'));
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
        $ubicacion= Ubicacion::lists('title', 'id');

        $convocatoria1 = Convocatoria1::findOrFail($id);

        $intereses= Intereses1::lists('tipoInteres','id');

        return view('convocatoria1.convocatoria1.edit', compact('convocatoria1','ubicacion','intereses'));
    }


    public function imagen($id)
    {
        $convocatoria1 = Convocatoria1::findOrFail($id);

        return view('convocatoria1.convocatoria1.imagen ', compact('convocatoria1'));
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
        
        $convocatoria1 = Convocatoria1::findOrFail($id);
        $convocatoria1->update($request->all());

        $convocatoria1->ubicacion()->sync([]);

        $convocatoria1->ubicacion()->attach($request->ubicacion);

        Session::flash('message', 'La convocatoria ha sido actualizada correctamente');

        return redirect('Convocatorias');
    }

    public function update_imagen(Request $request){

        //Handle the user upload image of the course
        if($request->hasFile('imagen_convocatoria')){
            $imagen_convocatoria = $request->file('imagen_convocatoria');
            $filename = time() . '.' . $imagen_convocatoria->getClientOriginalExtension();
            Image::make($imagen_convocatoria)->resize(1200,563)->save( public_path('/uploads/convocatorias/' .$filename ));

            $convocatoria1 = $request->input('id');

            DB::table('convocatoria1s')->where('id', $convocatoria1)->update(array('imagen_convocatoria' => $filename));

        }

        return redirect('Convocatorias');
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
        Convocatoria1::destroy($id);

        Session::flash('message', 'La convocatoria ha sido eliminada correctamente');

        return redirect('Convocatorias');
    }
}
