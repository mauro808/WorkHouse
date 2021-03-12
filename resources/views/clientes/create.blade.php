@extends('layouts.app')
@section('content')
<div class="row"> 
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <div class="col-lg-11" align="center">
    </br>
       <h2 class="text-lucida"><strong>Registrar Cliente</strong></h2>
    </div>
    <div class="col-lg-11">
       
    </div>
</div>  
<div class="row">
<div class="col-lg-3"></div>
<div class="col-lg-6">

@if ($errors->any())
    @foreach ($errors->all as $error) 
    <p>{{ $error }}</p>
    @endforeach
@endif


<form action="{{ route('agregarCliente') }}" method="POST" class="w-60 p-3 mr-3 text-center">
@csrf 


<div class="form-group" >
  <div class="col-12">
      <label for="txtidUsuario">Usuario Creador:</label>
       <select name="idUsuario" class="form-control"  value="{{ old('idUsuario')}}" />
        <option selected >Seleccione</option>
         @foreach($usuarios as $usuario)
         @if($usuario->Estado == "Activo")
        <option value="{{$usuario->id}}">{{$usuario->nombreUsuario}}</option>
        @endif
        @endforeach
      </select>
      {!! $errors->first('idUsuario','<small><strong>:message</strong></small></br>') !!}
      </div>
    </div>
   <div class="row">
     <div class="col-6">
    <label for="nombreCliente">Nombre:</label>
    <input type="text" class="form-control" id="nombreCliente" name="nombreCliente" placeholder="Digite el Nombre" value="{{ old('nombreCliente')}}"/>
      {!! $errors->first('nombreCliente','<small><strong>:message</strong></small></br>') !!}
     </div>
    <div class="col-6">
    <label for="tipoIdentificacion">Tipo Documento:</label>
    <select name="tipoIdentificacion" id="tipoIdentificacion" class="form-control" value="{{ old('tipoIdentificacion')}}">
        <option selected>Seleccione</option>
        <option>Tarjeta Identidad</option>
        <option>Cédula Ciudadanía</option>
        <option>Cedula Extranjería</option>
        <option>Permiso Permanencia</option>
        <option>Pasaporte</option>
        <option>Otro</option>
      </select>
       {!! $errors->first('tipoIdentificacion','<small><strong>:message</strong></small></br>') !!}
     </div>
       </div>
       <div class="row">
     <div class="col-6">
    <label for="numeroIdentificacion">Identificacion:</label>
    <input type="text" class="form-control" id="numeroIdentificacion" name="numeroIdentificacion" placeholder="Digite el Documento" value="{{ old('numeroIdentificacion')}}" />
    {!! $errors->first('numeroIdentificacion','<small><strong>:message</strong></small>') !!}
    </div>
    <div class="col-6">
    <label for="telefonoFijo">Telefono fijo:</label>
    <input type="text" class="form-control" id="telefonoFijo'" name="telefonoFijo" placeholder="Digite el Telefono Fijo" value="{{ old('telefonoFijo')}}" />
     {!! $errors->first('telefonoFijo','<small><strong>:message</strong></small>') !!}
     </div>
       </div>
        <div class="row">
     <div class="col-6">
    <label for="celular">Celular:</label>
    <input type="text" class="form-control" id="celular'" name="celular" placeholder="Digite el Celular" value="{{ old('celular')}}" />
      {!! $errors->first('celular','<small><strong>:message</strong></small>') !!} 
       </div>
    <div class="col-6">
    <label for="direccion">Direccion:</label>
    <input type="text" class="form-control" id="direccion'" name="direccion" placeholder="Digite la Direccion"  value="{{ old('direccion')}}" />
   {!! $errors->first('direccion','<small><strong>:message</strong></small>') !!} 
</div>
</div>
<div class="col-12">
    <label for="correo">Correo Electrónico:</label>
    <input type="text" class="form-control" id="correo'" name="correo" placeholder="Digite Correo Electrónico" value="{{ old('correo')}}" />
    {!! $errors->first('correo','<small><strong>:message</strong></small>') !!} 
</div>
</br>
<button type="submit" class="btn btn-dark" style="margin: 20px" onclick="validarDatosCliente()">
<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
</svg> Registrar</button>
 <a class="btn btn-light" href="{{ url ('clientes') }}" style="margin: 20px">
    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
</svg> Cancelar</a>
</form>
</div>
<div class="col-lg-2"></div>
</div>
@endsection
@section('js')

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"</script>

<script>

$('.btn-dark').submit(function(e){
  e.preventDefault();
  Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Registro Exitoso',
  showConfirmButton: false,
  timer: 1500
})
});

</script>
@endsection

