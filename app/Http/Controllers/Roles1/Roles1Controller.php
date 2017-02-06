<?php

namespace App\Http\Controllers\Roles1;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Roles1;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class Roles1Controller extends Controller
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
        $roles1 = Roles1::paginate(15);

        return view('roles1.roles1.index', compact('roles1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('roles1.roles1.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        
        Roles1::create($request->all());

        Session::flash('flash_message', 'Roles1 added!');

        return redirect('Roles');
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
        $roles1 = Roles1::findOrFail($id);

        return view('roles1.roles1.show', compact('roles1'));
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
        $roles1 = Roles1::findOrFail($id);

        return view('roles1.roles1.edit', compact('roles1'));
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
        
        $roles1 = Roles1::findOrFail($id);
        $roles1->update($request->all());

        Session::flash('flash_message', 'Roles1 updated!');

        return redirect('Roles');
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
        Roles1::destroy($id);

        Session::flash('flash_message', 'Roles1 deleted!');

        return redirect('Roles');
    }
}
