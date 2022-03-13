<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class projectcontroller extends Controller
{
    function homepage(){
        return view('homepage');
    }

    function contact(){
        return view('contact');
    }
    function aboutus(){
        return view('aboutus');
    }
    function product(){
        $names=array('sunsilk','machine','drill');
        return view('product')
        ->with('names',$names);

    }
    function ourteams(){
        return view('ourteams');
    }
}
