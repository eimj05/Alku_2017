<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Cliente;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use App\Intereses1;
use App\Roles1;
use PDF;
use Auth;
use Crypt;
use Image;

class ClienteController extends Controller
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
        $cliente = Cliente::paginate(15);

        return view('cliente.cliente.index', compact('cliente'));
    }

    public function pdf()
    {
        $cliente = Cliente::paginate(15);


        $pdf = PDF::loadView('cliente.cliente.pdf', compact('cliente'));
        return $pdf->download('usuarios.pdf');
    }

    

    public function profile()
    {
        return view ('cliente.cliente.profile', array('user' =>Auth::user()));
    }


    public function update_avatar(Request $request){

        //Handle the user upload avatar
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save( public_path('/uploads/avatars/' .$filename ));

            $user = Auth::user();
            $user->avatar =$filename;
            $user->save();

        }

        return view ('cliente.cliente.profile', array('user' =>Auth::user()));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        $intereses= Intereses1::lists('tipoInteres','id');
        $roles= Roles1::lists('tipoRol', 'id');


        return view('cliente.cliente.create')->with('intereses', $intereses)->with('roles', $roles);

    }



    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        
        $cliente = Cliente::create([
            'name' => $request['name'],
            'direccion' => $request['direccion'],
            'telefono' => $request['telefono'],
            'email' => $request['email'],
            'rfc' => $request['rfc'],
            'password' => bcrypt($request['password']),]);



    $cliente->roles()->attach($request->roles);

    
   foreach ($request->intereses as $interes){

    $cliente->intereses()->attach($interes);

    }

        Session::flash('flash_message', 'Cliente added!');


        return redirect('Usuarios');
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
        $id = Crypt::decrypt($id);
        $cliente = Cliente::findOrFail($id);
        $intereses = Cliente::find($cliente->id)->intereses()->get();
        $roles = Cliente::find($cliente->id)->roles()->get();

    
        return view('cliente.cliente.show', compact('cliente','intereses','roles'));
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
        
        $id = Crypt::decrypt($id);
        $cliente = Cliente::findOrFail($id);
        $intereses= Intereses1::lists('tipoInteres','id');
        $roles= Roles1::lists('tipoRol', 'id');


        return view('cliente.cliente.edit', compact('cliente','intereses','roles'));
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
        
        $cliente = Cliente::findOrFail($id);

        $cliente->update($request->all());

        $cliente->intereses()->sync([]);

        $cliente->roles()->sync([]);


        $cliente->roles()->attach($request->roles);

        foreach ($request->intereses as $interes){

             $cliente->intereses()->attach($interes);

         }

        Session::flash('flash_message', 'Cliente updated!');

        return redirect('Usuarios');
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

        $cliente = Cliente::findOrFail($id);


        $cliente->intereses()->detach([]);

        $cliente->roles()->detach([]);



        $cliente = Cliente::destroy($id);




        Session::flash('flash_message', 'Cliente deleted!');

        return redirect('Usuarios');
    }
}
