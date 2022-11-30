<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\registerCustomer;
use DB;
use Carbon\Carbon;

class controllerCustomer extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $selectCustomer = DB::table('tb_customer')->get();
        return view('customerIndex', compact('selectCustomer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customerCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(registerCustomer $request)
    {
        DB::table('tb_customer')->insert([
            "Name"=>$request->input('customerName'),
            "Customer_email"=>$request->input('customerEmail'),
            "ine"=>$request->input('ine'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now()
        ]);
        $name = $request->input('Name');
        return redirect('customer/create')->with('confirmacionregistro', compact('name'));     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consultaId = DB::table('tb_customer')->where('Id_customer', $id)->first();
        return view('customerEdit', compact('consultaId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(registerCustomer $request, $id)
    {
        DB::table('tb_customer')->where('Id_customer', $id)->update([
            "Name"=>$request->input('customerName'),
            "Customer_email"=>$request->input('customerEmail'),
            "ine"=>$request->input('ine'),
            "updated_at"=>Carbon::now()
        ]);
        return redirect('customer/index')->with('confirmacioneditar', "tu recuerdo se guardo");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_customer')->where('id_customer', $id)->delete();
        return redirect('customer/index')->with('confirmacioneliminar', "a");
    }
}
