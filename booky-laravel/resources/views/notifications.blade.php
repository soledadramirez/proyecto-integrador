<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1>Listado de libros</h1>
    <h2 style="display:none">Alguien cargó un nuevo libro, hacé click ACÁ para verlo</h2>
    <ul class="listadoLibros">

      @forelse ($books as $book)
        <li class="book"><a href="/bookPost/{{$book->id}}">{{$book->title->name}}: </a>
        {{$book->author->name}}</li>

        <p>{{$book->id}}</p>
      @empty
      @endforelse
    </ul>
    <script src="js/notifications.js"></script>
  </body>
</html>
