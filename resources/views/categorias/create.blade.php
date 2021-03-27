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
        <h1 class="text-lucida"><strong>Registrar Categoría</strong></h1>
    </div>
    <div class="col-lg-11">
        
    </div>
</div>  
<div class="row">
<div class="col-lg-4"></div>
<div class="col-lg-12">


<form action="{{ route('agregarCategoria') }}" method="POST" class="w-45 p-3 mr-3 text-center">
@csrf 
<div class="form-group">
</br>
  <input type="hidden" name="estado" id="estado" value="Activo">
    <label for="nombreCategoria"><strong>Nombre:</strong></label>
    {!! $errors->first('nombreCategoria','<small style="color:red;"><strong> :message</strong></small></br>') !!}
    <input type="text" class="form-control" id="nombreCategoria" name="nombreCategoria" placeholder="Ingrese el nombre" value="{{old('nombreCategoria')}}"  />
    
     </br>
    <label for="Descripcion"><strong>Descripción:</strong></label>
    {!! $errors->first('Descripcion','<small style="color:red;"><strong>:message</strong></small></br>') !!}
    <textarea class="form-control" id="Descripcion" name="Descripcion" rows="5" placeholder="Descripción categoría" value=" {{old('Descripcion')}}"  /></textarea>
  
</div>
<button type="submit" class="btn btn-dark btn-lg" style="margin: 10px" id="registrar">
<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
</svg> Registrar</button>
<a class="btn btn-light btn-lg" href="{{ url ('categorias') }}" style="margin: 10px">
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

<script>
  $(document).ready(function() {
      $("#registrar").click(function() {
        registrar();
      });
  });


  function registrar() {

   
    nombreCategoria  = $("#nombreCategoria").val();   
    Descripcion  = $("#Descripcion").val();
     
   
      if (nombreCategoria != "" && nombreCategoria != "nombreCategoria" && Descripcion != "" ){

        Swal.fire({
          position: 'top-center',
          icon: 'success',
          title: 'Registro exitoso',
          showConfirmButton: false, 
          confirmButtonColor: '#1C2833',
          timer: 1500
         
        })

      }else {
      Swal.fire({
        type: 'error',
        icon: 'error',
        text: 'Verifica todos los campos',
        showConfirmButton: false, 
        confirmButtonColor: '#1C2833',
        timer: 1500
      });
  }
}

</script>

@endsection