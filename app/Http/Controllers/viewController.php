<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewController extends Controller
{
    public function show ()
    {
        return view('Uvod');


    }

    public function show2 ()

    {
        return view('CoAJak');


    }

 public function show3()

 {
    return view('OLaravelu');

 }



}
