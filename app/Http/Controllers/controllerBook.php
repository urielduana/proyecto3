<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\registerBook;
use DB;
use Carbon\Carbon;

class controllerBook extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $selectBook = DB::table('tb_book')->get();
        return view('bookIndex', compact('selectBook'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bookCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(registerBook $request)
    {
        DB::table('tb_book')->insert([
            "isbn"=>$request->input('isbn'),
            "title"=>$request->input('title'),
            "author"=>$request->input('author'),
            "number_page"=>$request->input('pages'),
            "editorial_name"=>$request->input('editorial'),
            "editorial_email"=>$request->input('editorialEmail'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now()
        ]);
        $title = $request->input('title');
        return redirect('book/create')->with('confirmacionregistro', compact('title'));
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
        $consultaId = DB::table('tb_book')->where('Id_book', $id)->first();
        return view('bookEdit', compact('consultaId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(registerBook $request, $id)
    {
        DB::table('tb_book')->where('Id_book', $id)->update([
            "Isbn"=>$request->input('isbn'),
            "Title"=>$request->input('title'),
            "Author"=>$request->input('author'),
            "Number_page"=>$request->input('pages'),
            "Editorial_name"=>$request->input('editorial'),
            "Editorial_email"=>$request->input('editorialEmail'),
            "updated_at"=>Carbon::now()
        ]);
        return redirect('book/index')->with('confirmacioneditar', "tu recuerdo se guardo");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_book')->where('id_book', $id)->delete();
        return redirect('book/index')->with('confirmacioneliminar', "a");
    }
}
