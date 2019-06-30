<?php

namespace App\Http\Controllers;

use App\Book;
use App\Author;
use App\Title;

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
      //dd($nuevoTitulo);
      $nuevoAutor = new Author();
      $nuevoAutor->name = $req['author'];
      $nuevoAutor->save();


      $libroNuevo = new Book();
      //dd($libroNuevo);
      $libroNuevo->title_id = $nuevoTitulo->id;
      //dd($libroNuevo);
      $libroNuevo->author_id = $nuevoAutor->id;
      //dd($libroNuevo);
      $libroNuevo->save();

      // TODO: AGREGAR MODELO DE RESEÑAS
      // TODO: INSERT EN TABLAS INTERMEDIAS ESTADO Y USER
      // TODO:



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
