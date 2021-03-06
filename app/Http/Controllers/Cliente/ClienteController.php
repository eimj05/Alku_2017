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
use App\Rolesuser;
use Illuminate\Database\QueryException;
use Redirect;
use DB;

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
        $roles = Rolesuser::paginate(15);


        return view('cliente.cliente.index', compact('cliente','roles'));
    }

    public function pdf()
    {
        $cliente = Cliente::paginate(15);


        $pdf = PDF::loadView('cliente.cliente.pdf', compact('cliente'));
        return $pdf->download('usuarios.pdf');
    }

    

    public function profile()
    {
        return view ('cliente.cliente.fotoperfil', array('user' =>Auth::user()));
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

        //return view ('cliente.cliente.fotoperfil', array('user' =>Auth::user()));
        return back();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        $roles= Roles1::lists('tipoRol', 'id');


        return view('cliente.cliente.create')->with('roles', $roles);

    }



    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        try{
        $cliente = Cliente::create([
            'name' => $request['name'],
            'direccion' => $request['direccion'],
            'telefono' => $request['telefono'],
            'email' => $request['email'],
            'rfc' => $request['rfc'],
            'password' => bcrypt($request['password']),]);



          $cliente->roles()->attach($request->roles);

    
   

        Session::flash('message', 'Usuario creado correctamente');


        return Redirect::to('Usuarios');
        } catch(\Illuminate\Database\QueryException $e) {
        Session::flash('message','El correo ya se encuentra asignado a otro usuario');
        return Redirect::to('Usuarios/create');
    } 

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
        $cliente = Cliente::findOrFail($id);
        $roles = Cliente::find($cliente->id)->roles()->get();

    
        return view('cliente.cliente.show', compact('cliente','roles'));
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
        
        $cliente = Cliente::findOrFail($id);
        $roles= Roles1::lists('tipoRol', 'id');

        $selectedRol = DB::table('cliente_roles1')->where('cliente_id','=', $id)->value('roles1_id');



        return view('cliente.cliente.edit', compact('cliente','roles','selectedRol'));
    }

     

    public function editperfil($id)
    {
        
        $id = Auth::user()->id;

        $cliente = Cliente::findOrFail($id);


        return view('cliente.cliente.perfil', compact('cliente'));
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


        $cliente->roles()->sync([]);


        $cliente->roles()->attach($request->roles);

        

        Session::flash('message', 'Usuario actualizado correctamente');

        return redirect('Usuarios');
    }

    public function updateperfil($id, Request $request)
    {
        
        $cliente = Cliente::findOrFail($id);

        $cliente->update($request->all());


        Session::flash('message', 'Perfil actualizado correctamente');

        return redirect('/home');
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

        $id_cliente = $cliente = Cliente::findOrFail($id);


        $cliente->roles()->detach();


        $cliente = Cliente::destroy($id);




        Session::flash('flash_message', 'Cliente deleted!');

        return redirect('Usuarios');
    }
}
