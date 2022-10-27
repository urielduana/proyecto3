<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\registerBook;

class ControladorLibreria extends Controller
{
    public function GetMain(){
        return view('main');
    }
    public function Getregister(){
        return view('register');
    }

    public function RegisterBookController(registerBook $req){
        return redirect('register')->with('completed', 'Book registered');
    }
}
