@extends('master')

@section('main')

<link rel="stylesheet" type="text/css" href="css/agregarLibros.css">


<ul class="errores" style:"color:red">
  <?php foreach ($errors->all() as $error): ?>
    <li>
      <?= $error?>
    </li>
  <?php endforeach; ?>
</ul>
<div class="container1" style="background-image: url('images/bg-01.jpg');">
  <div class="container2">
    <div class="wrap-container">
      <div class="container-image">
        <div class="container-image-in">

          <form action="/agregarLibros" method="post" enctype="multipart/form-data">
            {{csrf_field()}}

            <img src="images/agregarPortada.png" alt="IMG">
          </div>
          <div class="container-form-btn">
            <input type="file" onchange="previewFile()" name="book_cover"><br>
           <img src="" height="200" alt="Agregar portada">
          </div>

      </div>


      <div class="container-form">

        <span class="form-title">
          Datos del libro
        </span>

        <div class="wrap-input">
          <input class="input100" type="text" name="name" placeholder="Nombre del libro" value="{{old("name")}}">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fas fa-book"></i>
          </span>
          <small>{{$errors->first('name')}}</small>
        </div>

        <div class="wrap-input">
          <input class="input100" type="text" name="author" placeholder="Nombre del autor" value="{{old("author")}}">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fas fa-feather"></i>
          </span>
          <small>{{$errors->first('author')}}</small>

        </div>

        <div class="wrap-input">

          <select name="book_action" class="form-control select100" id="exampleFormControlSelect1">
          <option>Disponible para:</option>
          @foreach ($states as $state)
            <option value="{{$state->id}}">{{$state->name}}</option>
          @endforeach
          </select>
        </div>

        <div class="wrap-input validate-input">
          <textarea class="input100" name="description" placeholder="Agrega una reseña de este libro" value="{{old("description")}}"></textarea>
          <span class="focus-input100"></span>
          <small>{{$errors->first('description')}}</small>

        </div>

        <div class="container-form-btn">
          <button type="submit" class="form-btn">
            Cargar al perfil
          </button>
        </div>
      </div>
      </form>
    </div>
  </div>
</div>

<script src="js/addImg.js">

</script>

@endsection
