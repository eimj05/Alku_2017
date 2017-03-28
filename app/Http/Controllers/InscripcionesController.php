<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Cursos1;
use App\CursosInsc;
use App\Cliente;
use App\Diplomados1;
use App\DiplomadosInsc;
use DB;
use Crypt;

class InscripcionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showcursos($id)
    {
        $id = Crypt::decrypt($id);
        $cursos1 = Cursos1::findOrFail($id);   
        $idc= $id;

        $uins = CursosInsc::where('cursos1_id', '=', $id)
            ->select('cliente_id')
            ->get();

      
        $cliente = Cliente::whereIn('id', $uins)->get();

        return view('curso1.cursos1.inscritos', compact('cursos1','uins','cliente','idc'));

     }

    public function showdiplomados($id)
    {
        $id = Crypt::decrypt($id);
        $diplomados1 = Diplomados1::findOrFail($id);   

        $uins = DiplomadosInsc::where('diplomados1_id', '=', $id)
            ->select('cliente_id')
            ->get();

      
        $cliente = Cliente::whereIn('id', $uins)->get();

        return view('diplomado1.diplomados1.inscritos', compact('diplomados1','uins','cliente'));

     }

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
    public function destroycursos($id, $id2)
    {

        CursosInsc::where('cliente_id', '=', $id)
                    ->where('cursos1_id', '=', $id2)
                    ->delete();

       // Session::flash('flash_message', 'Cursos1 deleted!');

        return redirect('Cursos');
    }

    public function destroydiplomados($id, $id2)
    {

       DiplomadosInsc::where('cliente_id', '=', $id)
                    ->where('diplomados1_id', '=', $id2)  
                    ->delete();


        return redirect('Diplomados');
    }
}
