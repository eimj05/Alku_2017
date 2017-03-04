<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class aboutController extends Controller
{
    public function create()
    {
        return view('about.contact');
    }

    public function store(ContactFormRequest $request)
    {
    	Mail::send('emails.fcontacto', $request->all(), function($message)
    {
        $message->from('eimj05@gmail.com');
        $message->to('eimj05@gmail.com', 'Alku Admin')->subject('Formulario de Contacto');
    });

  return route('home');
    }
}
