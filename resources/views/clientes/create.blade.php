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
       <h1 class="text-lucida"><strong>Registrar Cliente</strong></h1>
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


<form action="{{ route('agregarCliente') }}" method="POST" class="w-60 p-3 mr-3 text-center">
@csrf 


<div class="form-group" >

   <div class="row">
     <div class="col-6">
    <label for="nombreCliente"><strong>Nombres y Apellidos:</strong></label>
    {!! $errors->first('nombreCliente','<small style="color:red;"><strong>:message</strong></small></br>') !!}
    <input type="text" class="form-control" id="nombreCliente" name="nombreCliente" placeholder="Digite el Nombre" value="{{ old('nombreCliente')}}"/>
      
     </div>
    <div class="col-6">
    <label for="tipoIdentificacion"><strong>Tipo Documento:</strong></label>
    {!! $errors->first('tipoIdentificacion','<small style="color:red;"><strong>:message</strong></small></br>') !!}
    <select name="tipoIdentificacion" id="tipoIdentificacion"   class="form-control" value="{{ old('tipoIdentificacion')}}">
      <option value="">Seleccione el Tipo de Documento</option>
        <option>Tarjeta Identidad</option>
        <option>Cédula Ciudadanía</option>
        <option>Cedula Extranjería</option>
        <option>Permiso Permanencia</option>
      </select>
       
     </div>
       </div>
      </br>
       <div class="row">
     <div class="col-6">
    <label for="numeroIdentificacion"><strong>Identificación:</strong></label>
    {!! $errors->first('numeroIdentificacion','<small style="color:red;"><strong>:message</strong></small>') !!}
    <input type="number" class="form-control" min="000000000000000" max="999999999999999" id="numeroIdentificacion" name="numeroIdentificacion" placeholder="Digite el Documento" value="{{ old('numeroIdentificacion')}}" />
    
    </div>
    <div class="col-6">
    <label for="telefonoFijo"><strong>Teléfono Fijo:</strong></label>
    {!! $errors->first('telefonoFijo','<small style="color:red;"><strong>:message</strong></small>') !!}
    <input type="number" min="0000000" max="9999999" class="form-control" id="telefonoFijo'" name="telefonoFijo" min="1" pattern="^[0-9]+" placeholder="Digite el Telefono Fijo" value="{{ old('telefonoFijo')}}" />
    
     </div>
       </div>
      </br>
        <div class="row">
     <div class="col-6">
    <label for="celular"><strong>Celular:</strong></label>
    {!! $errors->first('celular','<small style="color:red;"><strong>:message</strong></small>') !!} 
    <input type="number" min="0000000000" max="9999999999" class="form-control" id="celular'" name="celular" min="1" pattern="^[0-9]+" placeholder="Digite el Celular" value="{{ old('celular')}}" />
    
       </div>
    <div class="col-6">
    <label for="direccion"><strong>Dirección:</strong></label>
    {!! $errors->first('direccion','<small style="color:red;"><strong>:message</strong></small>') !!} 
    <input type="text" class="form-control" id="direccion'" name="direccion" placeholder="Digite la Direccion"  value="{{ old('direccion')}}" />
   
</div>
</div>
</br>
<div class="col-12">
    <label for="correo"><strong>Correo Electrónico:</strong></label>
    {!! $errors->first('correo','<small style="color:red;"><strong>:message</strong></small>') !!} 
    <input type="email" class="form-control" id="correo'" name="correo" placeholder="Digite Correo Electrónico" value="{{ old('correo')}}" />
   
</div>
</br>
<button type="submit" class="btn btn-dark btn-lg" id="registrado" style="margin: 20px"  >
<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
</svg> Registrar</button>
 <a class="btn btn-light btn-lg " href="{{ url ('clientes') }}" style="margin: 20px">
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
    $("#registrado").click(function() {
        registrado();
    });
});

  function registrado() {
    nombreCliente  = $("#nombreCliente").val();
    tipoIdentificacion  = $("#tipoIdentificacion option:selected").text();
    numeroIdentificacion  = $("#numeroIdentificacion").val();
    direccion  = $("#direccion").val();
    celular  = $("#celular").val();
    telefonoFijo  = $("#telefonoFijo").val();
    correo  = $("#correo").val();

    if (nombreCliente != "" && tipoIdentificacion != "" && numeroIdentificacion != "" 
    && numeroIdentificacion.length < 15 && direccion != "" && celular != "" && celular.length < 10
    && telefonoFijo != "" && telefonoFijo.length < 7 && correo != "" ) {
      
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
      text: 'Diligencia correctamente todos los campos',
      showConfirmButton: false, 
      confirmButtonColor: '#1C2833',
      timer: 1500
    })
  }
}

</script>
@endsection

