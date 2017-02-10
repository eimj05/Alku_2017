<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Http\Requests;
use Mail;
use Session;
use Redirect;

class MailController extends Controller
{

    public function store(Request $request)
    {
		$mail = $request->input('email');

        Mail::send('emails.contact',$request->all(), function($msj) use ($mail){
            $msj->subject('Notificaciones');
            $msj->to($mail);
        });
        Session::flash('message','Mensaje enviado correctamente');
        return Redirect::to('/home');
    }
}
