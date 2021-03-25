@extends('layouts.app')
@section('content')

@if (session('mensaje'))
<div class="alert alert-success">{{ session('mensaje') }} </div>
@endif
<div class="row"> 
    <div class="col-lg-12" align="center">
    </br>
         <h2 class="text-lucida"><strong>Editar Usuario</strong></h2>
    </div>
    
</div>  
</br>
<div class="row">
<div class="col-lg-4"></div>
<div class="col-lg-12">
<form action="{{ route('usuario.update', $usuario->id) }}" method="POST" class="w-60 p-3 mr-3 text-center">
@method('PUT')
@csrf 
<div class="form-group">
</br>
<div class="row">
<div class="col-6">
<label for="txtidRol">Rol:</label>
{!! $errors->first('idRol','<small style="color:red;"><strong> :message</strong></small></br>') !!}
    <select name="idRol" class="form-control" required>
        @foreach($rols as $rol)
             @if($usuario->idRol == $rol->id)
             <option value="{{$rol->id}}" selected>{{$rol->descripcion}}</td>
            @endif 
            @endforeach  
        @foreach($rols as $rol)
        <option value="{{$rol->id}}">{{$rol->descripcion}}</td>
        @endforeach 
      </select>
      </div>
      <div class="col-6">
    <label for="nombre">Nombres y Apellidos:</label>
    {!! $errors->first('nombre','<small style="color:red;"><strong> :message</strong></small></br>') !!}
    <input type="text" class="form-control" value="{{ $usuario->nombre }}" id="nombre" name="nombre" placeholder="Digite el Nombre" />
    
  </div>
    </div>
  </br>
    <div class="row">
    <div class="col-6">
    <label for="txtTipoDocumento">Tipo Documento:</label>
    {!! $errors->first('tipoDocumento','<small style="color:red;"><strong> :message</strong></small></br>') !!}
    <select name="tipoDocumento" class="form-control" >
        <option @if ($usuario->tipoDocumento=="Cedula Ciudadania") selected @endif>Cédula Ciudadanía</option>
        <option @if ($usuario->tipoDocumento=="Cedula Extranjeria") selected @endif>Cedula Extranjería</option>
        <option @if ($usuario->tipoDocumento=="Permiso Permanencia") selected @endif>Permiso Permanencia</option>
        <option @if ($usuario->tipoDocumento=="Pasaporte") selected @endif>Pasaporte</option>
        <option @if ($usuario->tipoDocumento=="Otro") selected @endif>Otro</option>
      </select>
      </div>
    <div class="col-6">
    <label for="identificacion">Identificación:</label>
    {!! $errors->first('identificacion','<small style="color:red;"><strong> :message</strong></small></br>') !!}
    <input type="text" class="form-control" value="{{ $usuario->identificacion }}" id="identificacion" name="identificacion" placeholder="Digite el Documento" />
    </div>
    </div>
  </br>
    <div class="row">
   <div class="col-6">
    <label for="celular">Celular:</label>
    {!! $errors->first('celular','<small style="color:red;"><strong> :message</strong></small></br>') !!}
    <input type="text" class="form-control" value="{{ $usuario->celular }}" id="celular" name="celular" placeholder="Digite el Celular" />
   </div>
     <div class="col-6">
    <label for="telefonoFijo">Teléfono fijo:</label>
    {!! $errors->first('telefonoFijo','<small style="color:red;"><strong> :message</strong></small></br>') !!}
    <input type="text" class="form-control" value="{{ $usuario->telefonoFijo }}" id="telefonoFijo'" name="telefonoFijo" placeholder="Digite el Telefono Fijo" />
    </div>
    </div>
  </br>
    <div class="row">
     <div class="col-6">
    <label for="correo">Correo electrónico:</label>
    {!! $errors->first('correo','<small style="color:red;"><strong> :message</strong></small></br>') !!}
    <input type="email" class="form-control" value="{{ $usuario->correo }}" id="correo'" name="correo" placeholder="Digite el Correo" />
    </div>
    
    <div class="col-6">
    <label for="direccion">Dirección:</label>
    {!! $errors->first('direccion','<small style="color:red;"><strong> :message</strong></small></br>') !!}
    <input type="text" class="form-control" value="{{ $usuario->direccion }}" id="direccion" name="direccion" placeholder="Digite la Direccion" />
    </div>
  </div>
  </br>

    <div class="col-12" align="center">
    <label for="nombreUsuario">Usuario:</label>
    <input type="text" class="form-control" value="{{ $usuario->nombreUsuario }}" id="nombreUsuario" name="nombreUsuario" placeholder="Digite el Usuario" />
   </div>
   
      

</div>
</br>
<button type="submit" class="btn btn-dark btn-lg " style="margin: 20px" id="registrar">
<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
</svg> Actualizar</button>
 <a class="btn btn-light btn-lg " href="{{ url ('usuarios') }}" style="margin: 20px">
 <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
</svg> Cancelar</a>
</form>
</div>
<div class="col-lg-2"></div>
</div>

<script>
  $(document).ready(function() {
      $("#registrar").click(function() {
        registrar();
      });
  });

 // $("#registrar").hide();

  function registrar() {

      idRol  = $("#idRol option:selected").text();
      nombre  = $("#nombre").val();
      tipoDocumento  = $("#tipoDocumento option:selected").text();
      identificacion  = $("#identificacion").val();
      correo  = $("#correo").val();
      telefonoFijo  = $("#telefonoFijo").val();
      celular  = $("#celular").val();
      direccion  = $("#direccion").val();
      nombreUsuario  = $("#nombreUsuario").val();

   
      if (idRol != "" && nombre != "" &&  tipoDocumento != "" && identificacion != "" && correo != "" && telefonoFijo != "" 
      && celular != "" && direccion != "" && nombreUsuario != ""  ){

        Swal.fire({
          position: 'top-center',
          icon: 'success',
          title: 'Registro exitoso',
          showConfirmButton: false, 
          confirmButtonColor: '#1C2833',
         
        })

      }else {
      Swal.fire({
        type: 'error',
        icon: 'error',
        text: 'Rellene todos los campos',
        showConfirmButton: false, 
        confirmButtonColor: '#1C2833',
      })
  }
}

</script>
@endsection