<?php

namespace App\Http\Controllers\Curso1;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Cursos1;
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

class Cursos1Controller extends Controller
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
        $cursos1 = Cursos1::paginate(15);
        return view('curso1.cursos1.index', compact('cursos1'));
    }
    elseif($rol ==2)
    {
        $cursos1 = Cursos1::where('created_by','=', $idu)->paginate(15);

        return view('curso1.cursos1.index', compact('cursos1'));
    }
    }

    public function pdf()
    {
        $cursos1 = Cursos1::paginate(15);


        $pdf = PDF::loadView('curso1.cursos1.pdf', compact('cursos1'));
        return $pdf->download('cursos.pdf');
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
        


       // return view('curso1.cursos1.create')->with('intereses', $intereses);
        return view('curso1.cursos1.create', compact('intereses','ubicacion'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        $idu = Auth::id();
       // Cursos1::create($request->all())->with('updated_by', $idu);

        $cursos1= Cursos1::create([
            'nombreCurso' => $request['nombreCurso'],
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

        $cursos1->ubicacion()->sync([]);

        $cursos1->ubicacion()->attach($request->ubicacion);

        
        Session::flash('flash_message', 'Cursos1 added!');

        return redirect('Cursos');
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

        $cursos1 = Cursos1::findOrFail($id);
        $ubicaciones = Cursos1::find($cursos1->id)->ubicacion()->get();

        $interes = Cursos1::where('id', '=', $id)->lists('interes');
        $cats = Intereses1::whereIn('id', $interes)->get();



        return view('curso1.cursos1.show', compact('cursos1','ubicaciones', 'cats'));
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
        $idu = Auth::id();

        $ubicacion= Ubicacion::where('created_by','=', $idu)->lists('title', 'id');

        $cursos1 = Cursos1::findOrFail($id);

        $intereses= Intereses1::lists('tipoInteres','id');


        return view('curso1.cursos1.edit', compact('cursos1','ubicacion','intereses'));
    }

    public function ubicacion($id)
    {

        $ubicacion = Ubicacion::paginate(15);

        return view('ubicacion.index', compact('ubicacion','id_curso'));
    }

    public function imagen($id)
    {
        $cursos1 = Cursos1::findOrFail($id);

        return view('curso1.cursos1.imagen ', compact('cursos1'));
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
        
        $cursos1 = Cursos1::findOrFail($id);
        
        $cursos1->update($request->all());

        $cursos1->ubicacion()->sync([]);

        $cursos1->ubicacion()->attach($request->ubicacion);

        DB::table('cursos1s')
            ->where('id', $id)
            ->update(['interes' => $request->intereses]);
        

        

        Session::flash('flash_message', 'Cursos1 updated!');

        return redirect('Cursos');
    }

    public function update_imagen(Request $request){

        //Handle the user upload image of the course
        if($request->hasFile('imagen_curso')){
            $imagen_curso = $request->file('imagen_curso');
            $filename = time() . '.' . $imagen_curso->getClientOriginalExtension();
            Image::make($imagen_curso)->resize(1200,563)->save( public_path('/uploads/cursos/' .$filename ));

            $cursos1 = $request->input('id');

            DB::table('cursos1s')->where('id', $cursos1)->update(array('imagen_curso' => $filename));


            

        }

        return redirect('Cursos');

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
        Cursos1::destroy($id);

        Session::flash('flash_message', 'Cursos1 deleted!');

        return redirect('Cursos');
    }
}
