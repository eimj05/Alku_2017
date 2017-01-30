<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Vendor;
use Session;



class VendorController extends Controller
{
     
     public function index()
    {
        $vendor = Vendor::paginate(15);

        return view('vendor.index', compact('vendor'));
    }

    
     public function create()
    {
       
        return view('vendor.create');

    }

     public function store(Request $request)
    {
        
        $vendor = Vendor::create([
            'title' => $request['title'],
            'lat' => $request['lat'],
            'lng' => $request['lng'],]);

        Session::flash('flash_message', 'Ubicacion added!');


        return redirect('vendor');
    }

    public function show($id)
    {
        $vendor = Vendor::findOrFail($id);


    return View('vendor.show',compact('vendor'));
        
    }

    public function destroy($id)
    {

        $vendor = Vendor::findOrFail($id);

        $vendor = Vendor::destroy($id);


        Session::flash('flash_message', 'Ubicacion deleted!');

        return redirect('vendor');
    }

}
