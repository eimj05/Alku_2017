<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Cursos1;
use App\Diplomados1;
use App\Convocatoria1;


class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cursosindex()
    {
        $cursos1 = Cursos1::paginate(15);
        return view('frontend.fcursos', compact('cursos1'));  
    }

    public function cursosshow($id)
    {
        $cursos1 = Cursos1::findOrFail($id);
        $ubicaciones = Cursos1::find($cursos1->id)->ubicacion()->get();

        return view('frontend.fdetallecurso', compact('cursos1','ubicaciones'));  
    }

    public function diplomadosshow($id)
    {
        $diplomados1 = Diplomados1::findOrFail($id);
        $ubicaciones = Diplomados1::find($diplomados1->id)->ubicacion()->get();


        return view('frontend.fdetallediplomado', compact('diplomados1','ubicaciones'));
    }

    public function convocatoriasshow($id)
    {
        $convocatoria1 = Convocatoria1::findOrFail($id);
        $ubicaciones = Convocatoria1::find($convocatoria1->id)->ubicacion()->get();


        return view('frontend.fdetalleconvocatoria', compact('convocatoria1','ubicaciones'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function diplomadosindex()
    {
        $diplomados1 = Diplomados1::paginate(15);
        return view('frontend.fdiplomados', compact('diplomados1'));

   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function convocatoriasindex()
    {
        $convocatoria1 = Convocatoria1::paginate(15);
        return view('frontend.fconvocatorias', compact('convocatoria1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function convocatoriasinfo()
    {
        return view('frontend.convocatoriasinfo');    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
