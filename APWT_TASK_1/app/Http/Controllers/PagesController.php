<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $message = "Welcome";
        return view('home')->with('message', $message);
    }

    public function aboutUs(){
        $name = "Mr. x";
        $id="11-11111-1";
        $dob = "10-10-2010";
        $names=array("Mr. X", "Mr. Y", "Mr. Z");
        return view('aboutUs')
        ->with('name', $name)
        ->with('id', $id)
        ->with('dob', $dob)
        ->with('names', $names);
    }

    public function contactUs(){
        $name = "Mr. x";
        $id="11-11111-1";
        $dob = "10-10-2010";
        $names=array("Mr. X", "Mr. Y", "Mr. Z");
        return view('contactUs')
        ->with('name', $name)
        ->with('id', $id)
        ->with('dob', $dob)
        ->with('names', $names);
    }

    public function ourTeams(){
        $name = "Mr. x";
        $id="11-11111-1";
        $dob = "10-10-2010";
        $names=array("Mr. X", "Mr. Y", "Mr. Z");
        return view('ourTeams')
        ->with('name', $name)
        ->with('id', $id)
        ->with('dob', $dob)
        ->with('names', $names);
    }

    public function product(){
        $name = "Mr. x";
        $id="11-11111-1";
        $dob = "10-10-2010";
        $names=array("Mr. X", "Mr. Y", "Mr. Z");
        return view('product')
        ->with('name', $name)
        ->with('id', $id)
        ->with('dob', $dob)
        ->with('names', $names);
    }

    

    
}
