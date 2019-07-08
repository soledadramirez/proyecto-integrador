@extends('master');

@section('main')
<div class="fondo paral">
<div class="container">
<div class="row p-4">
      <h2 class="col-12 form-title pb-4">Encontramos estos libros</h2>
      @forelse ($librosFinales as $libro)
        <div class="card col-lg-8 p-4 my-3 mx-auto">
          <div class="card-body row">
            <div class="col-lg-3 miniatura">
              <img src="/storage/{{$libro->image}}" alt="" class="img-thumbnail">
            </div>
            <ul class="col-lg-9">
              <h5>{{$libro->title->name}}</h5>
              <li class="list-group-item">  Autor: {{$libro->author->name}} </li>
              <li class="list-group-item">Estado de este ejemplar: {{$libro->state->name}}</li>
              <a href="/bookPost/{{$libro->id}}" class="btn btn-success mt-3">Ver más</a>
            </ul>
          </div>
        </div>
      @empty
          <div class="altura minima">
            No hay libros disponibles
          </div>
      @endforelse

</div>
</div>
</div>

@endsection
