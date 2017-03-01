<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.2/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use App\Cliente;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        return view('home');
    }

     public function contacto(){

        $idu = Auth::id();
        $cliente = Cliente::findOrFail($idu);


        //return view('contacto')->with('idu', $idu);

        return view('contacto', compact('cliente'));
   }

    public function formcontacto(Request $request)
    {
        $mensaje = null;
        if (isset($_POST['formcontacto']))
        {
            $data = array(
            'firstname' => Input::get('firstname'),
            'lastname' => Input::get('lastname'),
            'email' => Input::get('email'),
            'purpose' => Input::get('purpose'),
            'mensaje' => Input::get('mensaje'));

            $fromEmail = 'eimj05@gmail.com';
            $fromName = 'Alku Contacto';

            Mail::send('emails.fcontacto', $data, function($message) use ($fromName, $fromEmail)
            {
                $message->to($fromEmail, $fromName);
                $message->from($fromEmail, $fromName);
                $message->subject('Nuevo Contacto');
            });
            $mensaje = '<div class="text-info">Mensaje enviado con exito</div>';

        }
        //return View::make('HomeController.contacto', array('mensaje' => $mensaje));
return view('/');

        
    }


    public function nogrant()
    {
        return view('nogrants');
    }



}