@extends('master')
@section('custom-style')
  <link rel="stylesheet" href="/css/follow.css">
@endsection
@section('main')
  <div class="fondo paral">
 <div class="fondoProfile">
  <div class="container header-profile">
  <div class="row profileImage jumbotron">
  <div class="col-sm-6">
    <form class="" action="/profile" method="post" enctype="multipart/form-data" class="">
        {{csrf_field()}}
          <input type="file" onchange="previewFile()" name="image" class="form-control-file mx-auto">
          <div class="circle">
            <img src="/images/fotoPerfil.jpg" alt="">
          </div>
            <button type="submit" class="btn btn-success agregImage"><i class="fas fa-pen-square"></i></button>
        </div>
      </form>

  <div class="col-sm-6 profile-info">
    <div class="user-info">
    <div class="row">

    </div>
     <div class="row user-data user-follow">

       <button id="myBtn" style="border-radius:5px;color:#18867a;background-color:white"> <span  class="col-sm-5 p-2"> {{count($follow)}} seguidores</span> </button>


       <div id="myModal" class="modal">


         <div class="modal-content">
           <h1> <span class="close">&times;</span> Lista de seguidores</h1>

           @forelse ($follow as $follower)

           <p> <a style="color:black; font-weight:bolder"  href="/normalProfile/{{$follower->user->id}}">{{$follower->user->name}}</a></p>

           @empty
           <p> No tienes ningún seguidor</p>
           @endforelse
         </div>

       </div>

       <button id="myBtn1" style="border-radius:5px;color:#18867a;background-color:white;margin-left:5%">      <span  class="col-sm-5 p-2">{{count($following)}} seguidos  </span></button>


<div id="myModal1" class="modal1">

 <div class="modal-content1">
   <span class="close1">&times;</span>
   <h1>lista de seguidos</h1>

   @forelse ($following as $following_user)

   <p> <a style="color:black; font-weight:bolder"  href="/normalProfile/{{$following_user->user->id}}">{{$follower->user->name}}</a></p>

   @empty
   <p> No sigues a nadie</p>
   @endforelse
 </div>

</div>



    </div>
      </div>
    <div class="row user-data book-button">
    <button type="submit" name="button" class="col-sm-5 btn btn-success"><a href="/agregarLibros">Cargar libro</a></button>
    {{-- <button type="submit" name="button" class="col-sm-5 btn btn-success"><a href="#">Pedir libro</a></button> --}}
    <button class="col-sm-5 btn btn-link edit text-left " type="submit" name="button">Editar perfil</button>
   </div>
  </div>
  </div>
      <div class="container profile">
      <div class="row py-2">
      <div class="">
        <div class="librosInfo row">
          <div class="librosAPrestar col-12 row w-100 mx-auto">
            <h1 class="text-center col-sm-12">Libros para prestar</h1>
            @forelse ($myBooks as $book)
                @if ($book->state_id == 1)
                <div class="card col-md-3 mx-auto text-center" style="width: 18rem;">
                <img class="card-img-top mx-auto mt-1" src="/storage/{{$book->image}}" alt="Imagen del libro">
                <div class="card-body">
                  <h5 class="card-title">{{$book->title->name}}</h5>
                  <a href="/bookPost/{{$book->id}}" class="btn btn-success">Ver detalle</a>
                </div>
              </div>
                @endif
              @empty
                <p>Por el momento no hay libros cargados</p>
              @endforelse
          </div>
          <div class="librosLeyendo col-12 row w-100 mx-auto">
            <h1 class="text-center col-sm-12">Son de mi interés</h1>
            @forelse ($myBooks as $book)
              @if ($book->state_id == 2)
                <div class="card col-md-3 mx-auto text-center" style="width: 18rem;">
                <img class="card-img-top mx-auto mt-1" src="/storage/{{$book->image}}" alt="Imagen del libro">
                <div class="card-body">
                  <h5 class="card-title">{{$book->title->name}}</h5>
                  <a href="/bookPost/{{$book->id}}" class="btn btn-success">Ver detalle</a>
                </div>
              </div>
              @endif
              @empty
                <p>Por el momento no hay libros cargados</p>
              @endforelse
          </div>
          <div class="librosPrestados col-12 row w-100 mx-auto">
            <h1 class="text-center col-sm-12">Libros prestados</h1>
            @forelse ($myBooks as $book)
              @if ($book->state_id == 3)
                <div class="card col-md-3 mx-auto text-center" style="width: 18rem;">
                <img class="card-img-top mx-auto mt-1" src="/storage/{{$book->image}}" alt="Imagen del libro">
                <div class="card-body">
                  <h5 class="card-title">{{$book->title->name}}</h5>
                  <a href="/bookPost/{{$book->id}}" class="btn btn-success">Ver detalle</a>
                </div>
              </div>
              @endif
              @empty
                <p>Por el momento no hay libros cargados</p>
              @endforelse
          </div>
        </div>
      </div>
    </div>




        </div>

  </div>

  </div>
  </div>
</div>
</div>
<footer class="col-lg-12 footer-home">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Nosotros</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">FAQ</a>
    </li>
  </ul>
</footer>
<script src="/js/follow.js">

</script>
@endsection
