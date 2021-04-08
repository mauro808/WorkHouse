@extends('layouts.app')
@section('content')
<div class="row"> 
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="card-body" style="background-color:#E5E8E8;">
  <div class="row w-30" style="padding-left:60px; "> 
    <div class="col-lg-12" align="left">
    </br>
        <h1 class="text-lucida"><strong>Registrar Producto</strong></h1>
    </div>
  
    </div>
 </br>
<div class="row">
<div class="col-lg-4"></div>
<div class="col-lg-12">


  @if ($errors->any())
  @foreach ($errors->all as $error) 
  <p>{{ $error }}</p>
  @endforeach
  @endif
  
  
<form action="{{ route('agregarProducto') }}" method="POST" class="w-60 p-3 mr-3 text-center">
@csrf 



<div class="form-group">
</br>
    <div class="row">
    <div class="col-6">
    <input type="hidden" name="estado" id="estado" value="Activo">
    <label for="txtidCategoria"><strong>Categoría:</strong></label>
    {!! $errors->first('idCategoria','<small style="color:red;"><strong>:message</strong></small></br>') !!}
    <select name="idCategoria" class="form-control"  value="{{old('idCategoria')}}">
       <option value="">Seleccione Categoría</option>
         @foreach($categorias as $categoria)
        <option value="{{$categoria->id}}">{{$categoria->nombreCategoria}}</option>
        @endforeach
      </select>
      </div>
      <div class="col-6">
    <label for="nombreProducto"><strong>Nombre:</strong></label>
    {!! $errors->first('nombreProducto','<small style="color:red;"><strong> :message</strong></small></br>') !!}
    <input type="text" class="form-control" id="nombreProducto" name="nombreProducto" placeholder="Digite el Nombre" value="{{old('nombreProducto')}}"/>
    </div>
    </div>
  </br>
    <div class="row">
    <div class="col-6">
    <label for="existencias"><strong>Existencias:</strong></label>
    {!! $errors->first('existencias','<small style="color:red;"><strong> :message</strong></small></br>') !!}
    <input type="number" class="form-control" id="existencias" name="existencias" min="0" pattern="^[0-9]+" placeholder="Ingrese existencias" value="{{old('existencias')}}"/>
    </div>
    <div class="col-6">
    <label for="medida"><strong>Medida:</strong></label> 
    {!! $errors->first('medida','<small style="color:red;"><strong>:message</strong></small></br>') !!}
    <select name="medida" class="form-control"  value="{{old('medida')}}" >
      <option value="">Seleccione Medida</option>
        <option>Metro</option>
        <option>Unidad</option>
        <option>Galón</option>
        <option>Litro</option>
        <option>Mililitro</option>
        <option>Kilogramo</option>
        <option>Gramo</option>
        <option>Rollo</option>
        <option>Pliego</option>
        <option>Lámina</option>
        <option>Bulto</option>
        <option>Paquete</option>
        <option>Sobre</option>
        
      </select>
    </div>
    </div>
  </br>
   
    <div class="col-12">
    <label for="valorProducto"><strong>Precio:</strong></label>
    {!! $errors->first('valorProducto','<small style="color:red;"><strong> :message</strong></small></br>') !!}
    <input type="number" min="1" pattern="^[0-9]+" class="form-control" id="valorProducto'" name="valorProducto" placeholder="Digite el Precio de Venta" value="{{old('valorProducto')}}"/>
    </div>
  

</br>
</br>
<button type="submit" class="btn btn-dark btn-lg " style="margin: 20px" id="registrar">
<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
</svg> Registrar</button>
 <a class="btn btn-light btn-lg " href="{{ url ('productos') }}" style="margin: 20px">
 <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
</svg> Cancelar</a>
</form>
</div>
<div class="col-lg-2"></div>
</div>
</div>
</div>

@endsection
@section('scripts')

<script>  
  
  $(document).ready(function(){
    $(".form-control").change(function(){
      $(this).css("background-color", "#D6D6FF");
    });
  });

  $(document).ready(function() {
      $("#registrar").click(function() {
        registrar();
      });
  });


  function registrar() {
    idCategoria = $("#idCategoria  option:selected").text();
    nombreProducto  = $("#nombreProducto").val();
    existencias  = $("#existencias").val();
    medida = $("#medida  option:selected").text();
    valorProducto  = $("#valorProducto").val();

    if (idCategoria != "" && nombreProducto != "" &&  existencias != "" && medida != "" && valorProducto != "" )
      {
        Swal.fire({
          position: 'top-center',
          icon: 'success',
          title: 'Registro exitoso',
          showConfirmButton: false, 
          confirmButtonColor: '#1C2833',
          timer: 1500
         
        });

      }else {
     /* Swal.fire({
        type: 'error',
        icon: 'error',
        text: 'Diligencia correctamente todos los campos',
        showConfirmButton: false, 
        confirmButtonColor: '#1C2833',
        timer: 1500
      });*/
  }
  }

</script>
@endsection