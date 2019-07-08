@extends('master')
@section('custom-style')
{{-- <link rel="stylesheet" href="/css/agregarLibros.css"> --}}
@endsection

@section('main')


<div class="container1" style="background-image: url('images/bg-01.jpg');">
  <div class="container2 fondo paral altura-minima">
    <div class="wrap-container container">
        <div class="row p-4">
        <h2 class="form-title col-12">Detalle de este libro</h2>{{-- si existe un titulo resultado, falta si existe un autor resultado --}}
        <div class="row col-12 mx-auto">
          <div class="col-lg-8">
            <div class="card my-4">
              <div class="card-body">
                <h5 class="card-title">{{$book->title->name}}</h5>
                <p class="card-text">Se reúnen en FICCIONES dos libros de Jorge Luis Borges fechados en 1941 y 1944. «El jardín de senderos que se bifurcan» incluye ocho relatos, entre los que cabe destacar dos breves narraciones de excepcional calidad: «Pierre Menard, autor del Quijote» y «La Biblioteca de Babel». «Artificios» lo forman nueve cuentos, entre ellos «La muerte y la brújula» (historia de una tortuosa venganza), «Funes el memorioso» (una larga metáfora del insomnio) y «El Sur» («acaso mi mejor cuento» en palabras del autor).</p>
                <ul class="list-group list-group-flush">
                 <li class="list-group-item">Compartido por: {{$book->user->name}}</li>
                 <li class="list-group-item">Estado del libro: {{$book->state->name}}</li>
                 @unless (Auth::User()->id == $book->user_id)
                     <li class="pl-3"> ¡Disponible! <a href="#" class="btn btn-success m-2">Solicitar</a></li>
                 @endunless
                 @if (Auth::User()->id !== $book->user_id && $book->state_id == 1)
                   <li>Libro para prestar</li>
                 @endif
               @if ($book->state_id == 2)
                   <li><a href="/confirm/{{$book->id}}" class="btn btn-success m-2">Confirmar préstamo</a></li>
               @endif
               @if ($book->state_id == 3)
                   <li><a href="#" class="btn btn-success m-2">Confirmar devolución</a></li>
               @endif

               </ul>
              </div>
            </div>
          </div>

        <div class="container-image col-lg-4">
          <div class="container-image-in text-center">
              <img class="mt-4 img-fluid"src="/storage/{{$book->image}}" alt="IMG">
          </div>
        </div>

    </div>

    </div>
  </div>
</div>



@endsection
