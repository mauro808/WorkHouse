function validarDatosCliente(){

if(txtidUsuario!="" && nombreCliente!=""&& tipoIdentificacion!="" && numeroIdentificacion!="" && 
telefonoFijo!="" && genero!=""&& celular && direccion!="" && correo!=""){

    Swal.fire({
        position: 'top-center',
        icon: 'success',
        title: 'Registro exitoso',
        showConfirmButton: false, //true
        timer: 1500
      })

}else{
    
    Swal.fire({
       position: 'top-center',
        icon: 'error',
        title: 'Todos los datos son obligatorios...',
        text: 'Todos los datos son obligatorios',
     
      })

    }
  } 