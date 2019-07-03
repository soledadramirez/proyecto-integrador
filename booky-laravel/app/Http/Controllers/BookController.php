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

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)

    {
// //<<<<<<< HEAD
//       $nuevoTitulo = new Title();
//       $nuevoTitulo->name = $req['name'];
//       $nuevoTitulo->save();
//
//       $nuevoAutor = new Author();
//       $nuevoAutor->name = $req['author'];
//       $nuevoAutor->save();
//
//       $nuevoEstado = new State();
//       $nuevoEstado->name = $req['book_action'];
//       //dd($nuevoEstado);
//
//       $nuevoLibro = new Book();
//       $nuevoLibro->title_id = $nuevoTitulo->id;
//       $nuevoLibro->author_id = $nuevoAutor->id;
//       $nuevoLibro->state_id = $nuevoEstado->id;
//       $nuevoLibro->save();
//
//
// //=======
      $nuevoTitulo = Title::where('name', $req['name'])->first();

      if (!$nuevoTitulo) {
        $nuevoTitulo = new Title();
        $nuevoTitulo->name = $req['name'];
        $nuevoTitulo->save();
      }
      //dd($nuevoTitulo);
      $nuevoAutor = Author::where('name', $req['author'])->first();

      if (!$nuevoAutor) {
        $nuevoAutor = new Author();
        $nuevoAutor->name = $req['author'];
        $nuevoAutor->save();
      }

      $libroNuevo = new Book();
      $ruta = $req->file('book_cover')->store("public");
      $nombreArchivo= basename($ruta);
      //dd($libroNuevo);

      $libroNuevo->title_id = $nuevoTitulo->id;
      //dd($libroNuevo);
      $libroNuevo->author_id = $nuevoAutor->id;

      //dd($libroNuevo);
      $libroNuevo->image=$nombreArchivo;

      $libroNuevo->save();

      $libroNuevo->states()->attach($req["book_action"]);





       return redirect ("/profile");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\book  $book
     * @return \Illuminate\Http\Response
     */
    public function showToAdd(book $book)
    {
      $states = State::all();
      return view ("agregarLibros", compact("states"));
        //
    }
    public function show($id)
    {

      $book=book::find($id);
      $vac=compact("book");
      return view("bookPost",$vac);

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
