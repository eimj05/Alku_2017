<?php

namespace App\Http\Controllers\Empresa1;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Empresa1;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class Empresa1Controller extends Controller
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
        $empresa1 = Empresa1::paginate(15);

        return view('empresa1.empresa1.index', compact('empresa1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('empresa1.empresa1.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        
        Empresa1::create($request->all());

        Session::flash('flash_message', 'Empresa1 added!');

        return redirect('empresa1/empresa1');
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
        $empresa1 = Empresa1::findOrFail($id);

        return view('empresa1.empresa1.show', compact('empresa1'));
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
        $empresa1 = Empresa1::findOrFail($id);

        return view('empresa1.empresa1.edit', compact('empresa1'));
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
        
        $empresa1 = Empresa1::findOrFail($id);
        $empresa1->update($request->all());

        Session::flash('flash_message', 'Empresa1 updated!');

        return redirect('empresa1/empresa1');
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
        Empresa1::destroy($id);

        Session::flash('flash_message', 'Empresa1 deleted!');

        return redirect('empresa1/empresa1');
    }
}
