<?php

namespace App\Http\Controllers;

use App\book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
       $libroNuevo= new book();
       $libroNuevo->title=$req["name"];
       $libroNuevo->author=$req["author"];
       $libroNuevo->book_action["book_action"];
       $libroNuevo->description["description"];

       $libroNuevo->id_estado=1;
       $libroNuevo->id_titulo=1;
       $libroNuevo->id_autor=1;
       $libroNuevo->id_usuario=2;
       $libroNuevo->image="asdf";
       $libroNuevo->language="español";
       $libroNuevo->edition=1993;
       $libroNuevo->year=1233;
       $libroNuevo->return_date="asdf";

       $libroNuevo->save();

       return redirect ("/home");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(book $book)
    {
      return view ("agregarLibros");
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(book $book)
    {
        //
    }
}
