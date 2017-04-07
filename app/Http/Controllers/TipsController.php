<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tips;
use Crypt;
use Session;
use Image;
use DB;

class TipsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tips1 = Tips::paginate(15);
        return view('tips.index', compact('tips1'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tips.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $tips1= Tips::create([
            'tip' => $request['tip'],
            'tdesc' => $request['tdesc'],
            ]);

        
        Session::flash('message','El Tip ha sido creado correctamente');

        return redirect('Tips');    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tips1 = Tips::findOrFail($id);


        return view('tips.show', compact('tips1'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function imagen($id)
    {
        $tips1 = Tips::findOrFail($id);

        return view('tips.imagen ', compact('tips1'));
    }



    public function edit($id)
    {
        $tips1 = Tips::findOrFail($id);


        return view('tips.edit', compact('tips1'));
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
        $tips1  = Tips::findOrFail($id);
        
        $tips1->update($request->all());

        Session::flash('message', 'El Tip ha sido actualizado correctamente');

        return redirect('Tips');
    }

    public function update_imagen(Request $request){

        //Handle the user upload image of the course
        if($request->hasFile('imagen_tip')){
            $imagen_tip = $request->file('imagen_tip');
            $filename = time() . '.' . $imagen_tip->getClientOriginalExtension();
            Image::make($imagen_tip)->resize(1200,563)->save( public_path('/uploads/tips/' .$filename ));

            $tips1 = $request->input('id');

            DB::table('tips')->where('id', $tips1)->update(array('imagen_tip' => $filename));
            

        }

        Session::flash('message', 'La imagen del Tip ha sido actualizado correctamente');

        return redirect('Tips');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tips::destroy($id);

        Session::flash('message', 'El Tip ha sido eliminado correctamente');

        return redirect('Tips');    }
}
