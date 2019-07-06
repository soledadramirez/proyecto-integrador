@extends('master')
@section('custom-style')
<link rel="stylesheet" href="/css/agregarLibros.css">
@endsection

@section('main')


<div class="container1" style="background-image: url('images/bg-01.jpg');">
  <div class="container2">
    <div class="wrap-container">

      <div class="container-image">
        <div class="container-image-in">
            <img src="storage/{{$book->image}}" alt="IMG">
        </div>

      </div>


      <div class="container-form">
        <span class="form-title">Datos del libro</span>

        {{-- si existe un titulo resultado, falta si existe un autor resultado --}}
        <div class="wrap-input">
         <span>Titulo:{{$book->title->name}} </span>
        </div>
        <div class="wrap-input">
          <span>Autor: </span> <?php // TODO:  ?>
        </div>
        <div class="wrap-input">
          <span>Fecha de publicación:</span>
        </div>
        <div class="wrap-input">
          <span>Edición:</span>
        </div>
        <div class="wrap-input">
          <span>Publicado por:</span>
        </div>
        <div class="wrap-input">
          <span>Disponible para: </span>
        </div>
        <div class="wrap-input validate-input">
        <span>Reseñas: </span>
        </div>

        @unless (Auth::User()->id == $book->user_id)
            <a href="#">Solicitar</a>
        @endunless
        @if ($book->state_id == 2)
            <a href="/confirm/{{$book->id}}">Confirmar préstamo</a>
        @endif
        @if ($book->state_id == 3)
            <a href="#">Confirmar devolución</a>
        @endif

    </div>

    </div>
  </div>
</div>



@endsection
