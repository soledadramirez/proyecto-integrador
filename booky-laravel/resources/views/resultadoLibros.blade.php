@extends('master');

@section('main')
<div class="fondo paral">
<div class="container">
  <h2>Encontramos estos libros</h2>
  <div class="">
    <ul>

      @if ($_GET['busqueda'] == 1)
      @forelse ($librosFinales as $libro)
        <li>{{$libro->title->name}}</li>
        <li>{{$libro->author->name}}</li>
        @empty
          No hay libros disponibles
      @endforelse
    @elseif ($_GET['busqueda'] == 2)
      @forelse ($librosFinales as $libro)
        <li>{{$libro->title->name}}</li>
        <li>{{$libro->author->name}}</li>
      @empty
        No hay libros disponibles
      @endforelse
    @endif

    </ul>
  </div>
</div>
</div>

























@endsection
