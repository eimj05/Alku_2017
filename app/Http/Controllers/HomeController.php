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
use Mail;

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


    public function indexFE()
    {
        return view('frontend.landing');
    }

     public function contacto(){

        $idu = Auth::id();
        $cliente = Cliente::findOrFail($idu);


        //return view('contacto')->with('idu', $idu);

        return view('contacto', compact('cliente'));
   }

   


    public function nogrant()
    {
        return view('nogrants');
    }



}