<?php

namespace App\Http\Controllers;

use App\Book;
use App\Author;
use App\Title;
use App\State;

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
      $nuevoTitulo = new Title();
      $nuevoTitulo->name = $req['name'];
      $nuevoTitulo->save();

      $nuevoAutor = new Author();
      $nuevoAutor->name = $req['author'];
      $nuevoAutor->save();

      $nuevoEstado = new State();
      $nuevoEstado->name = $req['book_action'];
      //dd($nuevoEstado);

      $nuevoLibro = new Book();
      $nuevoLibro->title_id = $nuevoTitulo->id;
      $nuevoLibro->author_id = $nuevoAutor->id;
      $nuevoLibro->state_id = $nuevoEstado->id;
      $nuevoLibro->save();


      // TODO: INSERT EN TABLAS INTERMEDIAS ESTADO Y USER
      // TODO:



       return redirect ("/profile");

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
