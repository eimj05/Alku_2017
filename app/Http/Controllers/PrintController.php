<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use PDF;
use App\Cliente;

class PrintController extends Controller
{
    public function index()
    {

    	 $cliente = Cliente::paginate(15);

        $pdf = PDF::loadView('cliente.cliente.index');
        return $pdf->download('test.pdf'); 
    }
}
