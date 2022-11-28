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

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
