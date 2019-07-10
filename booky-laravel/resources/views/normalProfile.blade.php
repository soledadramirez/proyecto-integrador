
@extends('master')

@section('main')
  <div class="fondo paral">
 <div class="fondoProfile">
  <div class="container header-profile">
  <div class="row profileImage jumbotron">
  <div class="col-sm-6">
    <div class="circle">
      <img src="/images/fotoPerfil.jpg" alt="">
    </div>
      <button type="button" class="btn btn-success agregImage"><i class="fas fa-pen-square"></i></button>
  </div>
  <div class="col-sm-6 profile-info">
    <div class="user-info">
    <div class="row">
      <h4 class="userName">{{$user->name}}</h4>
    </div>
     <div class="row user-data user-follow">
      <h4 class="col-sm-5 p-2"> {{count($follow)}} seguidores</h4>
      <h4 class="col-sm-5 p-2">{{count($following)}} seguidos  </h4>

          @if (Auth::User()->isFollowing($user->id))

<form action="{{url('unfollow/' . $user->id)}}" method="POST">
{{ csrf_field() }}
{{ method_field('DELETE') }}

<button type="submit" id="delete-follow-{{ $user->target_id }}" class="btn btn-danger">
<i class="fa fa-btn fa-trash"></i>Unfollow
</button>
</form>

@else
<
<form action="{{url('follow/' . $user->id)}}" method="POST">
{{ csrf_field() }}

<button type="submit" id="follow-user-{{ $user->id }}" class="btn btn-success">
<i class="fa fa-btn fa-user"></i>Follow
</button>
</form>

@endif

    </div>
      </div>
    <div class="row user-data book-button">
    <button type="submit" name="button" class="col-sm-4 btn btn-success p-1"><a href="/agregarLibros">Seguir</a></button>
    {{-- <button type="submit" name="button" class="col-sm-5 btn btn-success"><a href="#">Pedir libro</a></button> --}}

   </div>
  </div>
  </div>
      <div class="container profile">
      <div class="row py-2">
      <div class="">
        <div class="librosInfo row">
          <div class="librosAPrestar col-12 row w-100 mx-auto">
            <h1 class="text-center col-sm-12">Libros para prestar</h1>
            @forelse ($userBooks as $book)
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
            @forelse ($userBooks as $book)
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
            @forelse ($userBooks as $book)
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
@endsection
