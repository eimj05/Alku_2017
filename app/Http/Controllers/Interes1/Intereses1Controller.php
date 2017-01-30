<?php

namespace App\Http\Controllers\Interes1;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Intereses1;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class Intereses1Controller extends Controller
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
        $intereses1 = Intereses1::paginate(15);

        return view('interes1.intereses1.index', compact('intereses1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('interes1.intereses1.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        
        Intereses1::create($request->all());

        Session::flash('flash_message', 'Intereses1 added!');

        return redirect('interes1/intereses1');
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
        $intereses1 = Intereses1::findOrFail($id);

        return view('interes1.intereses1.show', compact('intereses1'));
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
        $intereses1 = Intereses1::findOrFail($id);

        return view('interes1.intereses1.edit', compact('intereses1'));
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
        
        $intereses1 = Intereses1::findOrFail($id);
        $intereses1->update($request->all());

        Session::flash('flash_message', 'Intereses1 updated!');

        return redirect('interes1/intereses1');
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
     
        $interes = Intereses1::findOrFail($id);

        $interes->clientes()->detach([]);

        $interes = Intereses1::destroy($id);

        Session::flash('flash_message', 'Intereses1 deleted!');

        return redirect('interes1/intereses1');
    }
}
