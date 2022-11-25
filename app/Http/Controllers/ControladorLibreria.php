<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\registerBook;
use App\Http\Requests\registerCustomer;


class ControladorLibreria extends Controller
{
    public function GetMain(){
        return view('main');
    }
    public function Getregister(){
        return view('register');
    }
    public function GetCustomer(){
        return view('customer');
    }
    public function RegisterBookController(registerBook $req){
        $titleR = $req->input('title');
        return redirect()->route('r')->with('completed', compact('titleR'));
    }


    public function RegisterCustomerController(registerCustomer $req){
        $nameOut = $req->input('customerName');
        return redirect()->route('cus')->with('completed', compact('nameOut'));
    }
}
