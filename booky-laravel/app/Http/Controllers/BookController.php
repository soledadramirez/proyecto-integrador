<?php

namespace App\Http\Controllers;

use App\Book;
use App\Author;
use App\Title;
use App\State;
use Auth;

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


      $usuarioLog=Auth::user();

      $libroNuevo->user_id =$usuarioLog->id;

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

      $book=Book::find($id);
      $vac=compact("book");
      return view("bookPost",$vac);

    }

    // public function showBooksOwnProfile()
    // {
    //   $usuarioLog=Auth::user();
    //   $ownBooks=Book::where("id_user","=","$usuarioLog->id");
    //   $vac=compact("ownBooks");
    //   return view("profile",$vac);
    //
    // }


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

    // public function buscarLibros(){
    //   $search = '%'.$_POST["search"].'%';
    //
    //   $tituloEncontrado = Title::where('name', 'like', $search)->get();
    //   $vac = compact('tituloEncontrado');
    //   $autorEncontrado = Author::where('name', 'like', $search)->get();
    //   $vac = compact('autorEncontrado');
    //   dd($autorEncontrado);
    //   }
    //
    //   return view('/bookPost', $vac);
    // }




}
// public function index()
//
//
//     public function search(){
//       $stmt = Actor::where('first_name', 'like', '%'.$_GET["search"].'%')
//       ->orwhere('last_name', 'like', '%'.$_GET["search"].'%')
//       ->orderBy('last_name')
//       ->paginate(5);
//       $stmt->withPath('?search='.$_GET['search']);
//       //dd($stmt);
//       return view('actores')->with('actors', $stmt);
//     }
