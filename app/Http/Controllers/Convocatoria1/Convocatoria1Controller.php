<?php

namespace App\Http\Controllers\Convocatoria1;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Convocatoria1;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use PDF;

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
        return view('convocatoria1.convocatoria1.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        
        Convocatoria1::create($request->all());

        Session::flash('flash_message', 'Convocatoria1 added!');

        return redirect('convocatoria1/convocatoria1');
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

        return view('convocatoria1.convocatoria1.show', compact('convocatoria1'));
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
        $convocatoria1 = Convocatoria1::findOrFail($id);

        return view('convocatoria1.convocatoria1.edit', compact('convocatoria1'));
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

        Session::flash('flash_message', 'Convocatoria1 updated!');

        return redirect('convocatoria1/convocatoria1');
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

        Session::flash('flash_message', 'Convocatoria1 deleted!');

        return redirect('convocatoria1/convocatoria1');
    }
}
