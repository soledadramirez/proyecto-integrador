@extends('master');
@section('custom-style')
  <link rel="stylesheet" href="/css/follow.css">
@endsection
@section('main')
<div class="fondo paral">
<div class="container">
<div class="row p-4">
      <h2 class="col-12 form-title pb-4">Encontramos estos libros</h2>
      @forelse ($librosFinales as $libro)
        <div class="card col-lg-8 p-4 my-3 mx-auto">
          <div class="card-body row">
            <div class="col-lg-3 miniatura mx-auto">
              <img src="/storage/{{$libro->image}}" alt="" class="img-thumbnail">
            </div>
            <ul class="col-lg-9">
              <h5 class="pl-2">{{$libro->title->name}}</h5>
              <li class="list-group-item">  Autor: {{$libro->author->name}} </li>
              <li class="list-group-item">Estado de este ejemplar: {{$libro->state->name}}</li>

              <a class="btn btn-success mt-3 myBtn2">Ver más</a>


              <div class="modal2 myModal">


                <div class="modal-content2">


                  <h1> <span class="close2">&times;</span> Tenés que estar logueado!!!!</h1>


              </div>

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

<script src="/js/agregarLibros.js">

</script>

@endsection
