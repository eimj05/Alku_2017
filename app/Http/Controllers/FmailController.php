<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Http\Requests;
use Mail;
use Session;
use Redirect;
use App\Http\Requests\ContactFormRequest;

class FmailController extends Controller
{
    public function store(ContactFormRequest $request)
    {
    	Mail::send('emails.fcontacto',$request->all(), function($msj){
            $msj->subject('Formulario de Contacto');
            $msj->to('eimj05@gmail.com');
        });
        Session::flash('message','Mensaje enviado correctamente');
        return Redirect::to('Fcontacto');
    }
}
