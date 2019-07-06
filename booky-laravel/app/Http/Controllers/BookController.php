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
      $reglas = [
        "book_cover" => "file|image",
        "name" => "string|min:3|required",
        "author" => "string|min:3|required",
        "description" => "string|min:2|max:1000"
      ];

      $mensajes = [
        'image' => 'El campo :attribute debe ser una imagen',
        'file' => 'El campo :attribute no se cargo correctamente',
        'string' => 'El campo :attribute debe ser cadena de texto',
        'min' => 'El campo :attribute debe ser mayor a :min',
        'max' => 'El campo :attribute debe ser menor a :max',
        'required' => 'El campo :attribute es obligatorio',

      ];

      $this->validate($req, $reglas, $mensajes);

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

      // agregamos clave foranea de titulo
      $libroNuevo->title_id = $nuevoTitulo->id;
      //agregamos clave foranea de autor
      $libroNuevo->author_id = $nuevoAutor->id;
      // aregamos id del user que carga el libro
      $usuarioLog=Auth::user();
      $libroNuevo->user_id =$usuarioLog->id;
      //agregamos el estado del libro
      $libroNuevo->state_id = $req["book_action"];

      //dd($libroNuevo);



      $libroNuevo->image=$nombreArchivo;

      $libroNuevo->save();

      //$libroNuevo->states()->attach($req["book_action"]);





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
    // public function destroy(book $book)



    public function buscarLibros(){
      $search = '%'.$_GET["search"].'%';
        // armar variable search y buscar.
      if ($_GET["busqueda"] == 1) {
          $titulos = Title::where('name', 'like', $search)->get();
          $librosFiltrados = [];
          foreach ($titulos as $titulo) {
            //dd($titulo); desde aca
            $librosFiltrados[]= Book::where('title_id', $titulo->id)->get();
            //dd($librosFilter);
          }
          //dd($libros);
      } elseif ($_GET["busqueda"] == 2){
        $autores = Author::where('name', 'like', $search)->get();
        $librosFiltrados = [];
        //dd($autores);
        foreach ($autores as $autor) {
        $librosFiltrados[] = Book::where('author_id', $autor->id)->get();
        //dd($librosFilter);
      }
      }
      $librosFinales =[];
      foreach ($librosFiltrados as $librosArray) {
        foreach ($librosArray as $libros) {
          $librosFinales[] = $libros;
        }
       }
       $vacTitulo = compact('titulos');
       $vacLibro = compact('librosFinales');
       return view('/resultadoLibros', $vacTitulo, $vacLibro);
      //dd($libros);
    }

    public function confirm($id){
      $book = Book::find($id);
      $book->state_id = 3;

      $book->save();
      return redirect('/bookPost/$'.$id);
    }

    public function devolver($id) {
      $book = Book::find($id);
      $book->state_id = 0;

      $book->save();
      return redirect('/profile');
    }

    // public function pedir($id) {
    //
    // }





}
