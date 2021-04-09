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
        <h1 class="text-lucida"><strong>Registrar Usuario</strong></h1>
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

<form action="{{ route('agregarUsuario') }}" method="POST" class="w-60 p-3 mr-3 text-center">
@csrf 

<div class="form-group">
    <div class="row">
    <div class="col-6">
    <input type="hidden" name="estado" id="estado" value="Activo">
    <label for="idRol"><strong>Rol: </strong></label>
    {!! $errors->first('idRol','<small style="color:red;"><strong> :message</strong></small></br>') !!}
    <select name="idRol" id="idRol" class="form-control"/>
      <option selected value="">Seleccione Un Rol</option>
        @foreach($roles as $rol)
        <option value="{{$rol->id}}">{{$rol->name}}</option>
        @endforeach
      </select>
      </div>
      <div class="col-6">
    <label for="nombre"><strong>Nombres y Apellidos:</strong></label>
    {!! $errors->first('nombre','<small style="color:red;"><strong> :message</strong></small></br>') !!}
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Digite Nombres y Apellidos" value="{{old('nombre')}}" />
    
    </div>
    </div>
  </br>
    <div class="row">
    <div class="col-6">
    <label for="tipoDocumento"><strong>Tipo Documento:</strong></label>
    {!! $errors->first('tipoDocumento','<small style="color:red;"><strong>:message</strong></small></br>') !!}
    <select name="tipoDocumento" id="tipoDocumento" class="form-control" value="{{old('tipoDocumento')}}" >
      <option selected value="">Seleccione el Tipo de Documento</option>
        <option>Cédula Ciudadanía</option>
        <option>Cédula Extranjería</option>
        <option>Permiso Permanencia</option>
        <option>Pasaporte</option>
        <option>Otro</option>
      </select>
      </div>

    <div class="col-6">
    <label for="identificacion"><strong>Identificación:</strong></label>
    {!! $errors->first('identificacion','<small style="color:red;"><strong> :message</strong></small></br>') !!}
    <input type="number"  class="form-control" min="000000000000000" max="999999999999999" id="identificacion" name="identificacion" placeholder="Digite Número de Documento" min="1" pattern="^[0-9]+" value="{{old('identificacion')}}" />
   
    </div>
    </div>
  </br>
    <div class="row">
    <div class="col-6">
      <label for="celular"><strong>Celular:</strong></label>
      {!! $errors->first('celular','<small style="color:red;"><strong> :message</strong></small></br>') !!}
      <input type="number" min="0000000000" max="9999999999" class="form-control" id="celular" name="celular" placeholder="Digite Celular" min="1" pattern="^[0-9]+" value="{{old('celular')}}"  />
   
    </div>
    <div class="col-6">
    <label for="telefonoFijo"><strong>Teléfono fijo:</strong></label>
    {!! $errors->first('telefonoFijo','<small style="color:red;"><strong> :message</strong></small></br>') !!}
    <input type="number" min="0000000" max="9999999" class="form-control" id="telefonoFijo" name="telefonoFijo" placeholder="Digite Teléfono Fijo" min="1" pattern="^[0-9]+" value="{{old('telefonoFijo')}}"  />
  
   </div>
   </div>
  </br>
    <div class="row">
   <div class="col-6">
    <label for="email"><strong>Correo electrónico:</strong></label>
    {!! $errors->first('email','<small style="color:red;"><strong> :message</strong></small></br>') !!}
    <input type="email" class="form-control" id="email" name="email" placeholder="Digite Correo Electrónico" value="{{old('email')}}"  />
    
    
    </div>
    <div class="col-6">
    <label for="direccion"><strong>Dirección:</strong></label>
    {!! $errors->first('direccion','<small style="color:red;"><strong> :message</strong></small></br>') !!}
    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Digite la Dirección" value="{{old('direccion')}}"  />
    
    </div>
    </div>
  </br>
    <div class="col-12" align="center">
    <label for="nombreUsuario"><strong>Usuario (Alias):</strong></label>
    {!! $errors->first('nombreUsuario','<small style="color:red;"><strong> :message</strong></small></br>') !!}
    <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario" placeholder="Digite un Alias (Máximo 8 caracteres)" value="{{old('nombreUsuario')}}" />
    
    </div>
  </br>
       <div class="row">
    <div  class= "col-6">
    <label for="password"><strong>Contraseña:</strong></label>
    {!! $errors->first('password','<small style="color:red;"><strong> :message</strong></small></br>') !!}
    <div class="input-group ">
    <input type="password" class="form-control" id="password" name="password"  minlength="8" placeholder="Digite Contraseña (Mínimo 8 Caracteres)"  />
    
    </div>
  </div>
  <div  class= "col-6">
    <label for="passwordc"><strong>Confirme Contraseña:</strong></label>
    {!! $errors->first('passwordc','<small style="color:red;"><strong>:message</strong></small></br>') !!}
    <div class="input-group">
    <input type="password" class="form-control" id="passwordc" name="passwordc" minlength="8" placeholder="Confirme Contraseña (Mínimo 8 Caracteres)"  />
    
  </div>
    </div>
</div>
</br>
<button type="submit" class="btn btn-dark btn-lg " style="margin: 20px" id="registrar" >
<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
</svg> Registrar</button>

      <a class="btn btn-light btn-lg " href="{{ url ('usuarios') }}" style="margin: 20px">
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

      idRol  = $("#idRol option:selected").text();
      nombre  = $("#nombre").val();
      tipoDocumento  = $("#tipoDocumento option:selected").text();
      identificacion  = $("#identificacion").val();
      email  = $("#email").val();
      telefonoFijo  = $("#telefonoFijo").val();
      celular  = $("#celular").val();
      direccion  = $("#direccion").val();
      nombreUsuario  = $("#nombreUsuario").val();
      password  = $("#password").val();
      passwordc  = $("#passwordc").val();
      console.log(idRol,
nombre,
tipoDocumento,
identificacion,
email,
telefonoFijo,
celular,
direccion,
nombreUsuario,
password,
passwordc);
      if (idRol != "" || nombre != "" ||  tipoDocumento != "" || email != ""  || telefonoFijo != "" || telefonoFijo.length < 7 || 
      celular != "" || celular.length < 10 && celular.length > 0 || direccion != "" || nombreUsuario != ""  || nombreUsuario.length < 8 
      || password != ""  || password.length > 8 || passwordc != "" || passwordc.length > 8 || identificacion != "" || identificacion.length < 15 || identificacion.length > 0)
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
        Swal.fire({
        type: 'error',
        icon: 'error',
        text: 'Diligencia correctamente todos los campos',
        showConfirmButton: false, 
        confirmButtonColor: '#1C2833',
        timer: 1500
      }); 
  }
  }

</script>
@endsection