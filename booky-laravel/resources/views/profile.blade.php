@extends('master')

@section('main')
<div class="fondoProfile">
  <div class="row profileImage">
  <div class="col-12">
    <img src="/images/fotoPerfil.jpg" alt="" class="img-circle">
  </div>
    <button type="button" class="btn btn-primary">Agregar imagen</button>
  </div>
    <div class="container profile">
      <div class="row">
        <div class="reviews col-lg-4 col-md-6 col-sm-12"> {{--"col-lg-4 col-md-4 col-sm-12 d-sm-block paso">--}}
      <h1>Mis reseñas</h1>
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Una reseña</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button type="button" class="btn btn-link">Me gusta</button>
        </div>
      </div>

      </div>
      <div class="col-lg-8 col-md-6 col-sm-12">
        <div class="librosInfo row">
          <div class="librosAPrestar">
            <h1>Libros para prestar</h1>
            <div class="col-lg-4 col-md-3 col-sm-12">
              <img class="" src="/images/garcia-marquez.jpg" alt="">
            </div>
          </div>
          <div class="librosLeyendo">
            <h1>Libros que pedí o estoy leyendo</h1>
            <div class="col-lg-4 col-md-3 col-sm-12">
              <img class="" src="/images/garcia-marquez.jpg" alt="">
            </div>
          </div>
          <div class="librosPrestados">
            <h1>Libros prestados</h1>
            <div class="col-lg-4 col-md-3 col-sm-12">
            <img class="" src="/images/garcia-marquez.jpg" alt="">
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


@endsection
