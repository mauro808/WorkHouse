@extends('layouts.app')
@section('content')
    <style type="text/css">
        #cliclogin {
            display: none
        }

    </style>
    <style type="text/css">
        #clicusuarios {
            display: none
        }

    </style>

    <style type="text/css">
        #clicclientes {
            display: none
        }

    </style>
    <style type="text/css">
        #cliccategorias {
            display: none
        }

    </style>
    <style type="text/css">
        #clicproductos {
            display: none
        }

    </style>
    <style type="text/css">
        #cliccompras {
            display: none
        }

    </style>
    <style type="text/css">
        #clicventas {
            display: none
        }

    </style>
    <style type="text/css">
        #clic1 {
            display: none
        }

    </style>
    <style type="text/css">
        #clic2 {
            display: none
        }

    </style>
    <style type="text/css">
        #clic3 {
            display: none
        }

    </style>
    <style type="text/css">
        #clic4 {
            display: none
        }

    </style>
    <style type="text/css">
        #clic5 {
            display: none
        }

    </style>
    <style type="text/css">
        #clic6 {
            display: none
        }

    </style>
    <style type="text/css">
        #clic7 {
            display: none
        }

    </style>
    <style type="text/css">
        #clic8 {
            display: none
        }

    </style>
    <style type="text/css">
        #clic9 {
            display: none
        }

    </style>
    <style type="text/css">
        #clic10 {
            display: none
        }

    </style>
    <style type="text/css">
        #clic11 {
            display: none
        }

    </style>
    <style type="text/css">
        #clic12 {
            display: none
        }

    </style>
    <style type="text/css">
        #clic13 {
            display: none
        }

    </style>
    <style type="text/css">
        #clic14 {
            display: none
        }

    </style>
    <style type="text/css">
        #clic15 {
            display: none
        }

    </style>
    <style type="text/css">
        #clic16 {
            display: none
        }

    </style>
    <style type="text/css">
        #clic17 {
            display: none
        }

    </style>
    <style type="text/css">
        #clic18 {
            display: none
        }

    </style>
    <style type="text/css">
        #clic19 {
            display: none
        }

    </style>
    <style type="text/css">
        #clic20 {
            display: none
        }

    </style>
    <style type="text/css">
        #clic21 {
            display: none
        }

    </style>
    <style type="text/css">
        #clic22 {
            display: none
        }

    </style>
    <style type="text/css">
        #clic23 {
            display: none
        }

    </style>
    <style type="text/css">
        #clic24 {
            display: none
        }

    </style>
    <style type="text/css">
        #clic25 {
            display: none
        }

    </style>
    <style type="text/css">
        #clic26 {
            display: none
        }

    </style>
    <style type="text/css">
        #clic27 {
            display: none
        }

    </style>
    <style type="text/css">
        #clic28 {
            display: none
        }

    </style>
    <style type="text/css">
        #clic29 {
            display: none
        }

    </style>
    <style type="text/css">
        #clic30 {
            display: none
        }

    </style>
    <style type="text/css">
        #clic31 {
            display: none
        }

    </style>
    <style type="text/css">
        #clic32 {
            display: none
        }

    </style>
    <style type="text/css">
        #clic33 {
            display: none
        }

    </style>
    <style type="text/css">
        #clic34 {
            display: none
        }

    </style>
    <style type="text/css">
        #clic35 {
            display: none
        }

    </style>
    <div class="card">
        <div class="card-body" style="background-color:#E5E8E8;">
            <div class="row w-30" style="padding-left:60px; ">
                <div class="card-header">
                    <div class="col-lg-10 p-2 m-2" align="left">
                        <h1 class="text-lucida"><strong>Qué desea hacer? </strong></h1>
                    </div>
                </div>

            </div class="">
            </br>

            <button type="submit" class="btn btn-dark btn-lg btn-block " onclick="mostrar_ocultar_login();"
                style="margin: 10px">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-lock"
                    viewBox="0 0 16 16">
                    <path
                        d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z" />
                </svg><strong> </br>Login</strong></button>

            <div id="cliclogin">
                <p></br><strong>1.</strong> Para ingresar al sistema debe tener un usuario y contraseña previamente creado
                    por el administrador.<strong></br>2.</strong>En la ventana de login, debe digitar el usuario y la contraseña,
                    luego
                    presionar el botón <strong>Ingresar</strong>. </br><strong>3.</strong>En caso de olvido de contraseña, debe
                    presionar el
                    botón <strong>Recordar Contraseña</strong> el cual le enviará su contraseña actual al correo electrónico
                    registrado.
                </br><strong>4.</strong>Si desea cambiar su contraseña, debe ingresar su usuario y luego presionar el botón Cambiar
                    Contraseña. En el momento de utilizar esta opción se valida que esté previamente registrado,
                    luego solicitará el ingreso de la contraseña anterior y la nueva.</br></br>
                    <img width="900" height="480" src="img/login.jpg"></img>
                    </br> 
                </p>
            </div>

            <button type="submit" class="btn btn-dark btn-lg btn-block " onclick="mostrar_ocultar_usuarios();"
                style="margin: 10px">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person"
                    viewBox="0 0 16 16">
                    <path
                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                </svg><strong> </br>Usuarios</strong></button>

            <div id="clicusuarios">

                <button type="submit" class="btn btn-light " onclick="mostrar_ocultar_crear();" style="margin: 14px">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person"
                        viewBox="0 0 16 16">
                        <path
                            d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                    </svg><strong> </br>Crear Usuario</strong></button>
                <div id="clic1">
                    <p></br><strong>1.</strong> Ingresar al módulo <strong>Usuarios</strong> y a continuación verá una lista
                        de
                        los usuarios registrados actualmente.</br><strong> 2. </strong>Debe presionar el botón
                        <strong>Agregar
                            Usuario</strong>, el cual se encuentra en la parte superior derecha. </br> <strong>3.</strong> A
                        continuación, verá en la pantalla un formulario en el cual deberá diligenciar todos los campos y
                        luego
                        presionar el botón <strong>Registrar</strong>.<strong></br>4.</strong> Si al momento de presionar el
                        botón Registrar, algún campo está diligenciado erróneamente o está vacío, verá en la pantalla un
                        mensaje
                        de error indicándole qué campo debe corregir.</br>
                        <video width="700" height="480" autoplay muted loop controls>
                            <source src="videos/Crearusuario.mov">
                        </video>
                        </br>
                    </p>
                </div>

                <button type="submit" class="btn btn-light " onclick="mostrar_ocultar_editar();" style="margin: 14px">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person"
                        viewBox="0 0 16 16">
                        <path
                            d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                    </svg><strong> </br> Editar Usuario </strong></button>
                <div id="clic2">
                    <p></br>1.</strong> Ingresar al módulo <strong>Usuarios</strong> y a continuación verá una lista de
                        los usuarios registrados actualmente.</br><strong> 2. </strong>Debe presionar el botón
                        <strong>Editar
                        </strong>, el cual se encuentra en la fila donde se ubica el registro deseado. </br>
                        <strong>3.</strong>
                        A
                        continuación, verá en la pantalla un formulario en el cual deberá diligenciar todos los campos y
                        luego
                        presionar el botón <strong>Actualizar</strong>.<strong></br>4.</strong> Si al momento de presionar
                        el
                        botón Actualizar, algún campo está diligenciado erróneamente o está vacío, verá en la pantalla un
                        mensaje
                        de error indicándole qué campo debe corregir.</br>
                        <video width="700" height="480" autoplay muted loop controls>
                            <source src="videos/Editarusuario.mov">
                        </video>
                    </p>
                </div>

                <button type="submit" class="btn btn-light " onclick="mostrar_ocultar_ver();" style="margin: 14px">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person"
                        viewBox="0 0 16 16">
                        <path
                            d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                    </svg><strong> </br> Ver Usuario </strong></button>
                <div id="clic30">
                    <p></br>1.</strong> Ingresar al módulo <strong>Usuarios</strong> y a continuación verá una lista de
                        los usuarios registrados actualmente.</br><strong> 2. </strong>Debe presionar el botón <strong>Ver
                        </strong>, el cual se encuentra en la fila donde se ubica el registro deseado. </br>
                        <strong>3.</strong>
                        A
                        continuación, verá en la pantalla todos los datos registrados del usuario seleccionado.</br>
                        < <video width="700" height="480" autoplay muted loop controls>
                            <source src="videos/Verusuario.mov"></video>
                    </p>
                </div>

                <button type="submit" class="btn btn-light " onclick="mostrar_ocultar_activar();" style="margin: 14px">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person"
                        viewBox="0 0 16 16">
                        <path
                            d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                    </svg><strong> </br> Activar/Inactivar </strong></button>
                <div id="clic4">
                    <p></br><strong>1.</strong> Ingresar al módulo <strong>Usuarios</strong> y a continuación verá una lista
                        de
                        los usuarios registrados actualmente.</br><strong> 2. </strong>Debe presionar el botón
                        <strong>Activar/Inactivar
                        </strong>, el cual se encuentra en la fila donde se ubica el registro deseado. </br>
                        <strong>3.</strong>
                        A continuación, verá en la pantalla el usuario seleccionado con el estado Activo/Inactivo
                        según sea el caso. </br></br>
                        <video width="700" height="480" autoplay muted loop controls>
                            <source src="videos/Activarusuario.mov">
                        </video>
                    </p>

                </div>

                <button type="submit" class="btn btn-light " onclick="mostrar_ocultar_buscar();" style="margin: 14px">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person"
                        viewBox="0 0 16 16">
                        <path
                            d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                    </svg><strong> </br>Buscar Usuario </strong></button>
                <div id="clic3">
                    <p></br><strong>1.</strong> Ingresar al módulo <strong>Usuarios</strong> y a continuación verá una lista
                        de
                        los usuarios registrados actualmente.</br><strong> 2. </strong>Debe dar clic en <strong>la caja de
                            búsqueda
                        </strong>, la cual se encuentra en la parte superior derecha de la lista e ingresar una palabra
                        clave.
                        </br> <strong>3.</strong>
                        A continuación verá en la pantalla el usuario encontrado por el aplicativo y en caso de no estar
                        registrado
                        o no coincidir con lo buscado, no arrojará ningún resultado. </br>
                        <video width="700" height="480" autoplay muted loop controls>
                            <source src="videos/Buscarusuario.mov">
                        </video>
                        < </p>

                </div>


                <button type="submit" class="btn btn-light " onclick="mostrar_ocultar_reporte();" style="margin: 14px">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person"
                        viewBox="0 0 16 16">
                        <path
                            d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                    </svg><strong> </br> Reporte Usuarios </strong></button>
                <div id="clic5">
                    <p></br><strong>1.</strong> Ingresar al módulo <strong>Usuarios</strong> y a continuación verá una lista
                        de
                        los usuarios registrados actualmente.</br><strong> 2. </strong>Debe dar clic en el botón
                        <strong>Descargar PDF
                        </strong>, la cual se encuentra en la parte inferior derecha. </br> <strong>3.</strong>
                        El sistema descargará un archivo PDF en el cual verá la lista de usuarios registrados con los campos
                        de
                        Id, nombres y apellidos, documento, rol, nombre de usuario, celular, fijo, estado y Correo
                        electrónico.</br>
                        <video width="700" height="480" autoplay muted loop controls>
                            <source src="videos/Reporteusuario.mov">
                        </video>
                    </p>

                </div>
            </div>
            </br>
            <button type="submit" class="btn btn-dark btn-lg btn-block " onclick="mostrar_ocultar_clientes();"
                style="margin: 10px">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-people"
                    viewBox="0 0 16 16">
                    <path
                        d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
                </svg><strong> </br>Clientes</strong></button>

            <div id="clicclientes">

                <button type="submit" class="btn btn-light " onclick="mostrar_ocultar_crearC();" style="margin: 15px">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-people"
                        viewBox="0 0 16 16">
                        <path
                            d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
                    </svg><strong></br> Crear Cliente </strong></button>
                <div id="clic6">
                    <p><strong>1.</strong> Ingresar al módulo <strong>Clientes</strong> y a continuación verá una lista de
                        los clientes registrados actualmente.</br><strong> 2. </strong>Debe presionar el botón
                        <strong>Agregar
                            Cliente</strong>, el cual se encuentra en la parte superior derecha. </br> <strong>3.</strong> A
                        continuación, verá en la pantalla un formulario en el cual deberá diligenciar todos los campos y
                        luego
                        presionar el botón <strong>Registrar</strong>.<strong></br>4.</strong> Si al momento de presionar el
                        botón Registrar, algún campo está diligenciado erróneamente o está vacío, verá en la pantalla un
                        mensaje
                        de error indicándole qué campo debe corregir.</br>
                        <video width="700" height="480" autoplay muted loop controls>
                            <source src="videos/Crearcliente.mov">
                        </video></br>
                    </p>
                </div>

                <button type="submit" class="btn btn-light " onclick="mostrar_ocultar_editarC();" style="margin: 15px"><svg
                        xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-people"
                        viewBox="0 0 16 16">
                        <path
                            d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
                    </svg><strong></br> Editar Cliente </strong></button>
                <div id="clic7">
                    <p></br><strong>1.</strong> Ingresar al módulo <strong>Clientes</strong> y a continuación verá una lista
                        de
                        los cientes registrados actualmente.</br><strong> 2. </strong>Debe presionar el botón <strong>Editar
                        </strong>, el cual se encuentra en la fila donde se ubica el registro deseado. </br>
                        <strong>3.</strong>
                        A
                        continuación, verá en la pantalla un formulario en el cual deberá diligenciar todos los campos y
                        luego
                        presionar el botón <strong>Actualizar</strong>.<strong></br>4.</strong> Si al momento de presionar
                        el
                        botón Actualizar, algún campo está diligenciado erróneamente o está vacío, verá en la pantalla un
                        mensaje
                        de error indicándole qué campo debe corregir.</br>
                        <video width="700" height="480" autoplay muted loop controls>
                            <source src="videos/Editarcliente.mov">
                        </video></br>
                    </p>
                </div>

                <button type="submit" class="btn btn-light " onclick="mostrar_ocultar_verC();" style="margin: 15px"><svg
                        xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-people"
                        viewBox="0 0 16 16">
                        <path
                            d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
                    </svg><strong></br> Ver Cliente </strong></button>
                <div id="clic31">
                    <p></br><strong>1.</strong> Ingresar al módulo <strong>Clientes</strong> y a continuación verá una lista
                        de
                        los clientes registrados actualmente.</br><strong> 2. </strong>Debe presionar el botón <strong>Ver
                        </strong>, el cual se encuentra en la fila donde se ubica el registro deseado. </br>
                        <strong>3.</strong>
                        A
                        continuación, verá en la pantalla todos los datos registrados del cliente seleccionado.</br>
                        <video width="700" height="480" autoplay muted loop controls>
                            <source src="videos/Vercliente.mov">
                        </video>
                    </p>
                </div>

                <button type="submit" class="btn btn-light " onclick="mostrar_ocultar_buscarC();" style="margin: 15px"><svg
                        xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-people"
                        viewBox="0 0 16 16">
                        <path
                            d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
                    </svg><strong></br> Buscar Cliente </strong></button>
                <div id="clic8">
                    <p></br><strong>1.</strong> Ingresar al módulo <strong>Clientes</strong> y a continuación verá una lista
                        de
                        los clientes registrados actualmente.</br><strong> 2. </strong>Debe dar clic en <strong>la caja de
                            búsqueda
                        </strong>, la cual se encuentra en la parte superior derecha de la lista e ingresar una palabra
                        clave.
                        </br> <strong>3.</strong>
                        A continuación verá en la pantalla el cliente encontrado por el aplicativo y en caso de no estar
                        registrado
                        o no coincidir con lo buscado, no arrojará ningún resultado.</br>
                        <video width="700" height="480" autoplay muted loop controls>
                            <source src="videos/Buscarcliente.mov">
                        </video>
                    </p>
                </div>
                <button type="submit" class="btn btn-light " onclick="mostrar_ocultar_reporteC();" style="margin: 15px"><svg
                        xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-people"
                        viewBox="0 0 16 16">
                        <path
                            d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
                    </svg><strong></br>Reporte Clientes </strong></button>
                <div id="clic9">
                    <p></br><strong>1.</strong> Ingresar al módulo <strong>Clientes</strong> y a continuación verá una lista
                        de
                        los clientes registrados actualmente.</br><strong> 2. </strong>Debe dar clic en el botón
                        <strong>Descargar PDF
                        </strong>, la cual se encuentra en la parte inferior derecha. </br> <strong>3.</strong>
                        El sistema descargará un archivo PDF en el cual verá la lista de clientes registrados con los campos
                        de
                        Id, nombres y apellidos, documento, fijo, celular y correo electrónico.</br>
                        <video width="700" height="480" autoplay muted loop controls>
                            <source src="videos/Reportecliente.mov">
                        </video>
                    </p>
                </div>
            </div>

            </br>
            <button type="submit" class="btn btn-dark btn-lg btn-block " onclick="mostrar_ocultar_categorias();"
                style="margin: 10px">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-bag-plus"
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                    <path
                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                </svg><strong> </br>Categorías</strong></button>

            <div id="cliccategorias">

                <button type="submit" class="btn btn-light " onclick="mostrar_ocultar_crearT();" style="margin: 10px">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                        class="bi bi-bag-plus" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                        <path
                            d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                    </svg><strong> </br>Crear Categoría </strong></button>
                <div id="clic10">
                    <p></br><strong>1.</strong> Ingresar al módulo <strong>Categorías</strong> y a continuación verá una
                        lista
                        de
                        los categorías registradas actualmente.</br><strong> 2. </strong>Debe presionar el botón
                        <strong>Agregar
                            Categoría</strong>, el cual se encuentra en la parte superior derecha. </br> <strong>3.</strong>
                        A
                        continuación, verá en la pantalla un formulario en el cual deberá diligenciar todos los campos y
                        luego
                        presionar el botón <strong>Registrar</strong>.<strong></br>4.</strong> Si al momento de presionar el
                        botón Registrar, algún campo está diligenciado erróneamente o está vacío, verá en la pantalla un
                        mensaje
                        de error indicándole qué campo debe corregir.</br>
                        <video width="700" height="480" autoplay muted loop controls>
                            <source src="videos/Crearcategoria.mov">
                        </video></br>
                    </p>
                </div>

                <button type="submit" class="btn btn-light " onclick="mostrar_ocultar_editarT();" style="margin: 8px"><svg
                        xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-bag-plus"
                        viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                        <path
                            d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                    </svg><strong> </br> Editar Categoría </strong></button>
                <div id="clic11">
                    <p></br><strong>1.</strong> Ingresar al módulo <strong>Categorías</strong> y a continuación verá una
                        lista
                        de
                        los categorías registrados actualmente.</br><strong> 2. </strong>Debe presionar el botón
                        <strong>Editar
                        </strong>, el cual se encuentra en la fila donde se ubica el registro deseado. </br>
                        <strong>3.</strong>
                        A
                        continuación, verá en la pantalla un formulario en el cual deberá diligenciar todos los campos y
                        luego
                        presionar el botón <strong>Actualizar</strong>.<strong></br>4.</strong> Si al momento de presionar
                        el
                        botón Actualizar, algún campo está diligenciado erróneamente o está vacío, verá en la pantalla un
                        mensaje
                        de error indicándole qué campo debe corregir.</br>
                        <video width="700" height="480" autoplay muted loop controls>
                            <source src="videos/Editarcategoria.mov">
                        </video></br>
                    </p>
                    </p>
                </div>

                <button type="submit" class="btn btn-light " onclick="mostrar_ocultar_verT();" style="margin: 8px"><svg
                        xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-bag-plus"
                        viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                        <path
                            d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                    </svg><strong> </br> Ver Categoría </strong></button>
                <div id="clic32">
                    <p></br><strong>1.</strong> Ingresar al módulo <strong>Categorías</strong> y a continuación verá una
                        lista
                        de
                        los categorías registradas actualmente.</br><strong> 2. </strong>Debe presionar el botón <strong>Ver
                        </strong>, el cual se encuentra en la fila donde se ubica el registro deseado. </br>
                        <strong>3.</strong>
                        A
                        continuación, verá en la pantalla todos los datos registrados de la categoría seleccionada.</br>
                        <video width="700" height="480" autoplay muted loop controls>
                            <source src="videos/Vercategoria.mov">
                        </video>
                    </p>
                </div>

                <button type="submit" class="btn btn-light " onclick="mostrar_ocultar_activarT();" style="margin: 8px"><svg
                        xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-bag-plus"
                        viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                        <path
                            d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                    </svg><strong> </br> Activar/Inactivar </strong></button>
                <div id="clic13">
                    <p></br><strong>1.</strong> Ingresar al módulo <strong>Categorías</strong> y a continuación verá una
                        lista
                        de
                        las caltegorías registradas actualmente.</br><strong> 2. </strong>Debe presionar el botón
                        <strong>Activar/Inactivar
                        </strong>, el cual se encuentra en la fila donde se ubica el registro deseado. </br>
                        <strong>3.</strong>
                        A continuación, verá en la pantalla la categoría seleccionada con el estado Activo/Inactivo
                        según sea el caso.</br>
                        <video width="700" height="480" autoplay muted loop controls>
                            <source src="videos/Activarcategoria.mov">
                        </video>
                    </p>
                </div>

                <button type="submit" class="btn btn-light " onclick="mostrar_ocultar_buscarT();" style="margin: 8px"><svg
                        xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-bag-plus"
                        viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                        <path
                            d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                    </svg><strong> </br> Buscar Categoría </strong></button>
                <div id="clic12">
                    <p></br><strong>1.</strong> Ingresar al módulo <strong>Categorías</strong> y a continuación verá una
                        lista
                        de
                        las categorías registradas actualmente.</br><strong> 2. </strong>Debe dar clic en <strong>la caja de
                            búsqueda
                        </strong>, la cual se encuentra en la parte superior derecha de la lista e ingresar una palabra
                        clave.
                        </br> <strong>3.</strong>
                        A continuación verá en la pantalla la categoría encontrada por el aplicativo y en caso de no estar
                        registrada
                        o no coincidir con lo buscado, no arrojará ningún resultado.</br>
                        <video width="700" height="480" autoplay muted loop controls>
                            <source src="videos/Buscarcategoria.mov">
                        </video>
                    </p>
                </div>



                <button type="submit" class="btn btn-light " onclick="mostrar_ocultar_reporteT();" style="margin: 8px"><svg
                        xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-bag-plus"
                        viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                        <path
                            d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                    </svg><strong> </br> Reporte Categorías </strong></button>
                <div id="clic14">
                    <p></br><strong>1.</strong> Ingresar al módulo <strong>Categorías</strong> y a continuación verá una
                        lista
                        de
                        las categorías registradas actualmente.</br><strong> 2. </strong>Debe dar clic en el botón
                        <strong>Descargar PDF
                        </strong>, la cual se encuentra en la parte inferior derecha. </br> <strong>3.</strong>
                        El sistema descargará un archivo PDF en el cual verá la lista de las categorías registradas con los
                        campos de
                        Id, nombres y desripción.</br>
                        <video width="700" height="480" autoplay muted loop controls>
                            <source src="videos/Reportecategoria.mov">
                        </video>
                    </p>
                </div>
            </div>

            <button type="submit" class="btn btn-dark btn-lg btn-block " onclick="mostrar_ocultar_productos();"
                style="margin: 10px">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-tools"
                    viewBox="0 0 16 16">
                    <path
                        d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z" />
                </svg><strong> </br>Productos</strong></button>

            <div id="clicproductos">

                <button type="submit" class="btn btn-light " onclick="mostrar_ocultar_crearP();" style="margin: 10px">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-tools"
                        viewBox="0 0 16 16">
                        <path
                            d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z" />
                    </svg><strong> </br>Crear Producto </strong></button>
                <div id="clic15">
                    <p></br><strong>1.</strong> Ingresar al módulo <strong>Productos</strong> y a continuación verá una
                        lista de
                        los productos registradas actualmente.</br><strong> 2. </strong>Debe presionar el botón
                        <strong>Agregar
                            Producto</strong>, el cual se encuentra en la parte superior derecha. </br> <strong>3.</strong>
                        A
                        continuación, verá en la pantalla un formulario en el cual deberá diligenciar todos los campos y
                        luego
                        presionar el botón <strong>Registrar</strong>.<strong></br>4.</strong> Si al momento de presionar el
                        botón Registrar, algún campo está diligenciado erróneamente o está vacío, verá en la pantalla un
                        mensaje
                        de error indicándole qué campo debe corregir.</br>
                        <video width="700" height="480" autoplay muted loop controls>
                            <source src="videos/Crearproducto.mov">
                        </video></br>
                    </p>
                </div>

                <button type="submit" class="btn btn-light " onclick="mostrar_ocultar_editarP();" style="margin: 10px"> <svg
                        xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-tools"
                        viewBox="0 0 16 16">
                        <path
                            d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z" />
                    </svg><strong> </br> Editar Producto </strong></button>
                <div id="clic16">
                    <p></br><strong>1.</strong> Ingresar al módulo <strong>Productos</strong> y a continuación verá una
                        lista de
                        los productos registrados actualmente.</br><strong> 2. </strong>Debe presionar el botón
                        <strong>Editar
                        </strong>, el cual se encuentra en la fila donde se ubica el registro deseado. </br>
                        <strong>3.</strong>
                        A
                        continuación, verá en la pantalla un formulario en el cual deberá diligenciar todos los campos y
                        luego
                        presionar el botón <strong>Actualizar</strong>.<strong></br>4.</strong> Si al momento de presionar
                        el
                        botón Actualizar, algún campo está diligenciado erróneamente o está vacío, verá en la pantalla un
                        mensaje
                        de error indicándole qué campo debe corregir.</br>
                        <video width="700" height="480" autoplay muted loop controls>
                            <source src="videos/Editarproducto.mov">
                        </video>
                    </p>
                </div>

                <button type="submit" class="btn btn-light " onclick="mostrar_ocultar_verP();" style="margin: 10px"> <svg
                        xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-tools"
                        viewBox="0 0 16 16">
                        <path
                            d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z" />
                    </svg><strong> </br> Ver Producto </strong></button>
                <div id="clic33">
                    <p></br><strong>1.</strong> Ingresar al módulo <strong>Productos</strong> y a continuación verá una
                        lista de
                        los productos registrados actualmente.</br><strong> 2. </strong>Debe presionar el botón <strong>Ver
                        </strong>, el cual se encuentra en la fila donde se ubica el registro deseado. </br>
                        <strong>3.</strong>
                        A
                        continuación, verá en la pantalla todos los datos registrados del producto seleccionado.</br>
                        <video width="700" height="480" autoplay muted loop controls>
                            <source src="videos/Verproducto.mov">
                        </video>
                    </p>
                </div>

                <button type="submit" class="btn btn-light " onclick="mostrar_ocultar_activarP();" style="margin: 10px">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-tools"
                        viewBox="0 0 16 16">
                        <path
                            d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z" />
                    </svg><strong> </br> Activar/Inactivar </strong></button>
                <div id="clic18">
                    <p></br><strong>1.</strong> Ingresar al módulo <strong>Productos</strong> y a continuación verá una
                        lista de
                        laos productos registrados actualmente.</br><strong> 2. </strong>Debe presionar el botón
                        <strong>Activar/Inactivar
                        </strong>, el cual se encuentra en la fila donde se ubica el registro deseado. </br>
                        <strong>3.</strong>
                        A continuación, verá en la pantalla el producto seleccionado con el estado Activo/Inactivo
                        según sea el caso.</br>
                        <video width="700" height="480" autoplay muted loop controls>
                            <source src="videos/Activarproducto.mov">
                        </video>
                    </p>
                </div>

                <button type="submit" class="btn btn-light " onclick="mostrar_ocultar_buscarP();" style="margin: 10px"> <svg
                        xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-tools"
                        viewBox="0 0 16 16">
                        <path
                            d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z" />
                    </svg><strong> </br> Buscar Producto </strong></button>
                <div id="clic17">
                    <p></br><strong>1.</strong> Ingresar al módulo <strong>Productos</strong> y a continuación verá una
                        lista de
                        las productos registrados actualmente.</br><strong> 2. </strong>Debe dar clic en <strong>la caja de
                            búsqueda
                        </strong>, la cual se encuentra en la parte superior derecha de la lista e ingresar una palabra
                        clave.
                        </br> <strong>3.</strong>
                        A continuación verá en la pantalla el producto encontrado por el aplicativo y en caso de no estar
                        registrada
                        o no coincidir con lo buscado, no arrojará ningún resultado.</br>
                        <video width="700" height="480" autoplay muted loop controls>
                            <source src="videos/Buscarproducto.mov">
                        </video>
                    </p>
                </div>



                <button type="submit" class="btn btn-light " onclick="mostrar_ocultar_reporteP();" style="margin: 10px">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-tools"
                        viewBox="0 0 16 16">
                        <path
                            d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z" />
                    </svg><strong> </br>Reporte Productos </strong></button>
                <div id="clic19">
                    <p></br><strong>1.</strong> Ingresar al módulo <strong>Productos</strong> y a continuación verá una
                        lista de
                        los productos registrados actualmente.</br><strong> 2. </strong>Debe dar clic en el botón
                        <strong>Descargar PDF
                        </strong>, la cual se encuentra en la parte inferior derecha. </br> <strong>3.</strong>
                        El sistema descargará un archivo PDF en el cual verá la lista de los porductos registradas con los
                        campos de
                        Id, categoría, nombre, precio y stock.</br>
                        <video width="700" height="480" autoplay muted loop controls>
                            <source src="videos/Reporteproducto.mov">
                        </video>
                    </p>
                </div>
            </div>

            <button type="submit" class="btn btn-dark btn-lg btn-block " onclick="mostrar_ocultar_compras();"
                style="margin: 10px">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-basket"
                    viewBox="0 0 16 16">
                    <path
                        d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z" />
                </svg><strong> </br>Compras</strong></button>

            <div id="cliccompras">

                <button type="submit" class="btn btn-light " onclick="mostrar_ocultar_crearO();" style="margin: 15px">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-basket"
                        viewBox="0 0 16 16">
                        <path
                            d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z" />
                    </svg><strong> </br>Crear Compra </strong></button>
                <div id="clic20">
                    <p></br><strong>1.</strong> Ingresar al módulo <strong>Compras</strong> y a continuación verá una lista
                        de
                        las compras registradas actualmente.</br><strong> 2. </strong>Debe presionar el botón
                        <strong>Agregar
                            Compra</strong>, el cual se encuentra en la parte superior derecha. </br> <strong>3.</strong> A
                        continuación, verá en la pantalla un formulario en el cual deberá diligenciar todos los campos y
                        luego
                        presionar el botón <strong>Agregar</strong> con el cual irá agregando los productos al
                        detalle.</br><strong>4.</strong> Si desea eliminar un producto debe dar clic
                        en el botón <strong>eliminar</strong></br><strong>5.</strong> Si al momento de presionar el
                        botón <strong>Agregar</strong>, algún campo está diligenciado erróneamente o está vacío, verá en la
                        pantalla un
                        mensaje
                        de error indicándole qué campo debe corregir.<strong></br>6.</strong>Para finalizar la compra, de
                        clic en
                        el botón<strong>Registrar</strong></br><strong>7.</strong> A continuación, verá el detalle de la
                        compra registrada el cual podrá imprimir dando clc en el botón <strong>pdf</strong> el cual está
                        ubicado en el parte superior derecha.</br>

                        <video width="700" height="480" autoplay muted loop controls>
                            <source src="videos/Crearcompra.mov">
                        </video></br>
                    </p>
                </div>



                <button type="submit" class="btn btn-light " onclick="mostrar_ocultar_verO();" style="margin: 15px"> <svg
                        xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-basket"
                        viewBox="0 0 16 16">
                        <path
                            d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z" />
                    </svg><strong> </br> Ver Compra </strong></button>
                <div id="clic34">
                    <p></br><strong>1.</strong> Ingresar al módulo <strong>Compras</strong> y a continuación verá una lista
                        de
                        las compras registradas actualmente.</br><strong> 2. </strong>Debe presionar el botón <strong>Ver
                        </strong>, el cual se encuentra en la fila donde se ubica el registro deseado. </br>
                        <strong>3.</strong>
                        A
                        continuación, verá en la pantalla todos los datos registrados de la compra seleccionada.</br>
                        <strong>3.</strong>Puede imprimir el detalle de la compra en pdf, guardarlo o imprimirlo una vez
                        generado</br>
                        <video width="700" height="480" autoplay muted loop controls>
                            <source src="videos/Vercompra.mov">
                        </video>
                    </p>
                </div>

                <button type="submit" class="btn btn-light " onclick="mostrar_ocultar_buscarO();" style="margin: 1015pxpx">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-basket"
                        viewBox="0 0 16 16">
                        <path
                            d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z" />
                    </svg><strong> </br> Buscar Compra </strong></button>
                <div id="clic22">
                    <p></br><strong>1.</strong> Ingresar al módulo <strong>Compras</strong> y a continuación verá una lista
                        de
                        las compras registradas actualmente.</br><strong> 2. </strong>Debe dar clic en <strong>la caja de
                            búsqueda
                        </strong>, la cual se encuentra en la parte superior derecha de la lista, e ingresar una palabra
                        clave.
                        </br> <strong>3.</strong>
                        A continuación verá en la pantalla la compra encontrada por el aplicativo y en caso de no estar
                        registrada
                        o no coincidir con lo buscado, no arrojará ningún resultado.</br>
                        < <video width="700" height="480" autoplay muted loop controls>
                            <source src="videos/Buscarcompra.mov">
                            </video>
                    </p>
                </div>

                <button type="submit" class="btn btn-light " onclick="mostrar_ocultar_activarO();" style="margin: 15px">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-basket"
                        viewBox="0 0 16 16">
                        <path
                            d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z" />
                    </svg><strong> </br>Anular Compra</strong></button>
                <div id="clic23">
                    <p></br><strong>1.</strong> Ingresar al módulo <strong>Compras</strong> y a continuación verá una lista
                        de
                        las registradas actualmente.</br><strong> 2. </strong>Debe presionar el botón
                        <strong>Anular
                        </strong>, el cual se encuentra en la fila donde se ubica el registro deseado. </br>
                        <strong>3.</strong>
                        A continuación, verá en la pantalla un mensaje de confirmación, ya ésta acción es irreversible.
                        <strong>4.</strong> A continuación, de clic en el botón <strong> Anular </strong>
                        de la compra seleccionada la cual quedará anulada totalmente.
                        según sea el caso.</br>
                        <video width="700" height="480" autoplay muted loop controls>
                            <source src="videos/Anularcompra.mov">
                        </video>
                    </p>
                </div>

                <button type="submit" class="btn btn-light " onclick="mostrar_ocultar_reporteO();" style="margin: 15px">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-basket"
                        viewBox="0 0 16 16">
                        <path
                            d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z" />
                    </svg><strong> </br>Reporte Compras </strong></button>
                <div id="clic24">
                    <p></br><strong>1.</strong> Ingresar al módulo <strong>Compras</strong> y a continuación verá una lista
                        de
                        las compras registradas actualmente.</br><strong> 2. </strong>Debe dar clic en el botón
                        <strong>Descargar PDF
                        </strong>, el cual se encuentra en la parte inferior derecha. </br> <strong>3.</strong>
                        El sistema descargará un archivo PDF en el cual verá la lista de compras registrada s con los campos
                        de
                        Id, usuario creador, fecha de compra y valor total. </br>
                        <video width="700" height="480" autoplay muted loop controls>
                            <source src="videos/Reportecompra.mov">
                        </video>
                    </p>
                </div>
            </div>

            <button type="submit" class="btn btn-dark btn-lg btn-block " onclick="mostrar_ocultar_ventas();"
                style="margin: 10px">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-cart4"
                    viewBox="0 0 16 16">
                    <path
                        d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                </svg><strong> </br>Ventas</strong></button>

            <div id="clicventas">

                <button type="submit" class="btn btn-light " onclick="mostrar_ocultar_crearV();" style="margin: 16px">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-cart4"
                        viewBox="0 0 16 16">
                        <path
                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                    </svg><strong> </br>Crear Venta </strong></button>
                <div id="clic25">
                    <p></br><strong>1.</strong> Ingresar al módulo <strong>Ventas</strong> y a continuación verá una lista
                        de
                        las ventas registradas actualmente.</br><strong> 2. </strong>Debe presionar el botón
                        <strong>Agregar
                            Venta</strong>, el cual se encuentra en la parte superior derecha. </br> <strong>3.</strong> A
                        continuación, verá en la pantalla un formulario en el cual deberá diligenciar todos los campos y
                        luego
                        presionar el botón <strong>Agregar</strong> con el cual irá agregando los productos al
                        detalle.</br><strong>4.</strong> Si desea eliminar un producto debe dar clic
                        en el botón <strong>eliminar</strong></br><strong>5.</strong> Si al momento de presionar el
                        botón <strong>Agregar</strong>, algún campo está diligenciado erróneamente o está vacío, verá en la
                        pantalla un
                        mensaje
                        de error indicándole qué campo debe corregir.<strong></br>6.</strong>Para finalizar la venta, de
                        clic en
                        el botón<strong>Registrar</strong></br><strong>7.</strong> A continuación, verá el detalle de la
                        venta registrada el cual podrá imprimir dando clc en el botón <strong>pdf</strong> el cual está
                        ubicado en el parte superior derecha.</br>
                        <video width="700" height="480" autoplay muted loop controls>
                            <source src="videos/Crearventa.mov">
                        </video></br>
                    </p>
                </div>


                <button type="submit" class="btn btn-light " onclick="mostrar_ocultar_verV();" style="margin: 16px"><svg
                        xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-cart4"
                        viewBox="0 0 16 16">
                        <path
                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                    </svg><strong> </br> Ver Venta </strong></button>
                <div id="clic35">
                    <p></br><strong>1.</strong> Ingresar al módulo <strong>Ventas</strong> y a continuación verá una lista
                        de
                        las ventas registradas actualmente.</br><strong> 2. </strong>Debe presionar el botón <strong>Ver
                        </strong>, el cual se encuentra en la fila donde se ubica el registro deseado. </br>
                        <strong>3.</strong>
                        A
                        continuación, verá en la pantalla todos los datos registrados de la venta seleccionada.</br>
                        <strong>3.</strong>Puede imprimir el detalle de la venta en pdf, guardarlo o imprimirlo una vez
                        generado</br>
                        <video width="700" height="480" autoplay muted loop controls>
                            <source src="videos/Verventa.mov">
                        </video>
                    </p>
                </div>

                <button type="submit" class="btn btn-light " onclick="mostrar_ocultar_buscarV();" style="margin: 16px"><svg
                        xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-cart4"
                        viewBox="0 0 16 16">
                        <path
                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                    </svg><strong> </br> Buscar Venta </strong></button>
                <div id="clic27">
                    <p></br><strong>1.</strong> Ingresar al módulo <strong>Ventas</strong> y a continuación verá una lista
                        de
                        las ventas registradas actualmente.</br><strong> 2. </strong>Debe dar clic en <strong>la caja de
                            búsqueda
                        </strong>, la cual se encuentra en la parte superior derecha de la lista, e ingresar una palabra
                        clave.
                        </br> <strong>3.</strong>
                        A continuación verá en la pantalla la venta encontrado por el aplicativo y en caso de no estar
                        registrada
                        o no coincidir con lo buscado, no arrojará ningún resultado.</br>
                        <video width="700" height="480" autoplay muted loop controls>
                            <source src="videos/Buscarventa.mov">
                        </video>
                    </p>
                </div>

                <button type="submit" class="btn btn-light " onclick="mostrar_ocultar_activarV();" style="margin: 16px"><svg
                        xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-cart4"
                        viewBox="0 0 16 16">
                        <path
                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                    </svg><strong> </br> Anular Venta</strong></button>
                <div id="clic28">
                    <p></br><strong>1.</strong> Ingresar al módulo <strong>Ventas</strong> y a continuación verá una lista
                        de
                        las registradas actualmente.</br><strong> 2. </strong>Debe presionar el botón
                        <strong>Anular
                        </strong>, el cual se encuentra en la fila donde se ubica el registro deseado. </br>
                        <strong>3.</strong>
                        A continuación, verá en la pantalla un mensaje de confirmación, ya ésta acción es irreversible.
                        <strong>4.</strong> A continuación, de clic en el botón <strong> Anular </strong>
                        de la venta seleccionada la cual quedará anulada totalmente.
                        según sea el caso.</br>
                        <video width="700" height="480" autoplay muted loop controls>
                            <source src="videos/Anularventa.mov">
                        </video>
                    </p>
                </div>

                <button type="submit" class="btn btn-light " onclick="mostrar_ocultar_reporteV();" style="margin: 16px"><svg
                        xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-cart4"
                        viewBox="0 0 16 16">
                        <path
                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                    </svg><strong> </br> Reporte Ventas </strong></button>
                <div id="clic29">
                    <p></br><strong>1.</strong> Ingresar al módulo <strong>Ventas</strong> y a continuación verá una lista
                        de
                        las ventas registradas actualmente.</br><strong> 2. </strong>Debe dar clic en el botón
                        <strong>Descargar PDF
                        </strong>, el cual se encuentra en la parte inferior derecha. </br> <strong>3.</strong>
                        El sistema descargará un archivo PDF en el cual verá la lista de ventas registrada s con los campos
                        de
                        Id, usuario creador, fecha de venta y valor total.</br>
                        <video width="700" height="480" autoplay muted loop controls>
                            <source src="videos/Reporteventa.mov">
                        </video>
                    </p>
                </div>

            </div>
        </div>
    </div>
    </div>
    </div>
    </div>


    <script type="text/javascript">

        function mostrarLogin() {
            document.getElementById('cliclogin').style.display = "block";
        }

        function ocultarLogin() {
            document.getElementById('cliclogin').style.display = "none";
        }

        function mostrar_ocultar_login() {
            var cliclogin = document.getElementById('cliclogin');
            if (cliclogin.style.display == "none") {
                mostrarLogin();
            } else {
                ocultarLogin();
            }
        }
        function mostrarUsuarios() {
            document.getElementById('clicusuarios').style.display = "block";
        }

        function ocultarUsuarios() {
            document.getElementById('clicusuarios').style.display = "none";
        }

        function mostrar_ocultar_usuarios() {
            var clicusuarios = document.getElementById('clicusuarios');
            if (clicusuarios.style.display == "none") {
                mostrarUsuarios();
            } else {
                ocultarUsuarios();
            }
        }

        function mostrarClientes() {
            document.getElementById('clicclientes').style.display = "block";
        }

        function ocultarClientes() {
            document.getElementById('clicclientes').style.display = "none";
        }

        function mostrar_ocultar_clientes() {
            var clicclientes = document.getElementById('clicclientes');
            if (clicclientes.style.display == "none") {
                mostrarClientes();
            } else {
                ocultarClientes();
            }
        }

        function mostrarCategorias() {
            document.getElementById('cliccategorias').style.display = "block";
        }

        function ocultarCategorias() {
            document.getElementById('cliccategorias').style.display = "none";
        }

        function mostrar_ocultar_categorias() {
            var cliccategorias = document.getElementById('cliccategorias');
            if (cliccategorias.style.display == "none") {
                mostrarCategorias();
            } else {
                ocultarCategorias();
            }
        }

        function mostrarProductos() {
            document.getElementById('clicproductos').style.display = "block";
        }

        function ocultarProductos() {
            document.getElementById('clicproductos').style.display = "none";
        }

        function mostrar_ocultar_productos() {
            var clicproductos = document.getElementById('clicproductos');
            if (clicproductos.style.display == "none") {
                mostrarProductos();
            } else {
                ocultarProductos();
            }
        }

        function mostrarCompras() {
            document.getElementById('cliccompras').style.display = "block";
        }

        function ocultarCompras() {
            document.getElementById('cliccompras').style.display = "none";
        }

        function mostrar_ocultar_compras() {
            var cliccompras = document.getElementById('cliccompras');
            if (cliccompras.style.display == "none") {
                mostrarCompras();
            } else {
                ocultarCompras();
            }
        }

        function mostrarVentas() {
            document.getElementById('clicventas').style.display = "block";
        }

        function ocultarVentas() {
            document.getElementById('clicventas').style.display = "none";
        }

        function mostrar_ocultar_ventas() {
            var clicventas = document.getElementById('clicventas');
            if (clicventas.style.display == "none") {
                mostrarVentas();
            } else {
                ocultarVentas();
            }
        }

        function mostrarcrearUsuario() {
            document.getElementById('clic1').style.display = "block";
        }

        function ocultarcrearUsuario() {
            document.getElementById('clic1').style.display = "none";
        }

        function mostrar_ocultar_crear() {
            var clic1 = document.getElementById('clic1');
            if (clic1.style.display == "none") {
                mostrarcrearUsuario();
            } else {
                ocultarcrearUsuario();
            }
        }


        function mostrareditarUsuario() {
            document.getElementById('clic2').style.display = "block";
        }

        function ocultareditarUsuario() {
            document.getElementById('clic2').style.display = "none";
        }

        function mostrar_ocultar_editar() {
            var clic2 = document.getElementById('clic2');
            if (clic2.style.display == "none") {
                mostrareditarUsuario();
            } else {
                ocultareditarUsuario();
            }
        }

        function mostrarbuscarUsuario() {
            document.getElementById('clic3').style.display = "block";
        }

        function ocultarbuscarUsuario() {
            document.getElementById('clic3').style.display = "none";
        }

        function mostrar_ocultar_buscar() {
            var clic3 = document.getElementById('clic3');
            if (clic3.style.display == "none") {
                mostrarbuscarUsuario();
            } else {
                ocultarbuscarUsuario();
            }
        }

        function mostrarhabilitarUsuario() {
            document.getElementById('clic4').style.display = "block";
        }

        function ocultarhabilitarUsuario() {
            document.getElementById('clic4').style.display = "none";
        }

        function mostrar_ocultar_activar() {
            var clic4 = document.getElementById('clic4');
            if (clic4.style.display == "none") {
                mostrarhabilitarUsuario();
            } else {
                ocultarhabilitarUsuario();
            }
        }

        function mostrarreporteUsuario() {
            document.getElementById('clic5').style.display = "block";
        }

        function ocultarreporteUsuario() {
            document.getElementById('clic5').style.display = "none";
        }

        function mostrar_ocultar_reporte() {
            var clic5 = document.getElementById('clic5');
            if (clic5.style.display == "none") {
                mostrarreporteUsuario();
            } else {
                ocultarreporteUsuario();
            }
        }

        function mostrarcrearCliente() {
            document.getElementById('clic6').style.display = "block";
        }

        function ocultarcrearCliente() {
            document.getElementById('clic6').style.display = "none";
        }

        function mostrar_ocultar_crearC() {
            var clic6 = document.getElementById('clic6');
            if (clic6.style.display == "none") {
                mostrarcrearCliente();
            } else {
                ocultarcrearCliente();
            }
        }

        function mostrareditarCliente() {
            document.getElementById('clic7').style.display = "block";
        }

        function ocultareditarCliente() {
            document.getElementById('clic7').style.display = "none";
        }

        function mostrar_ocultar_editarC() {
            var clic7 = document.getElementById('clic7');
            if (clic7.style.display == "none") {
                mostrareditarCliente();
            } else {
                ocultareditarCliente();
            }
        }

        function mostrarbuscarCliente() {
            document.getElementById('clic8').style.display = "block";
        }

        function ocultarbuscarCliente() {
            document.getElementById('clic8').style.display = "none";
        }

        function mostrar_ocultar_buscarC() {
            var clic8 = document.getElementById('clic8');
            if (clic8.style.display == "none") {
                mostrarbuscarCliente();
            } else {
                ocultarbuscarCliente();
            }
        }

        function mostrarreporteCliente() {
            document.getElementById('clic9').style.display = "block";
        }

        function ocultarreporteCliente() {
            document.getElementById('clic9').style.display = "none";
        }

        function mostrar_ocultar_reporteC() {
            var clic9 = document.getElementById('clic9');
            if (clic9.style.display == "none") {
                mostrarreporteCliente();
            } else {
                ocultarreporteCliente();
            }
        }

        function mostrarcrearCategoria() {
            document.getElementById('clic10').style.display = "block";
        }

        function ocultarcrearCategoria() {
            document.getElementById('clic10').style.display = "none";
        }

        function mostrar_ocultar_crearT() {
            var clic10 = document.getElementById('clic10');
            if (clic10.style.display == "none") {
                mostrarcrearCategoria();
            } else {
                ocultarcrearCategoria();
            }
        }


        function mostrareditarCategoria() {
            document.getElementById('clic11').style.display = "block";
        }

        function ocultareditarCategoria() {
            document.getElementById('clic11').style.display = "none";
        }

        function mostrar_ocultar_editarT() {
            var clic11 = document.getElementById('clic11');
            if (clic11.style.display == "none") {
                mostrareditarCategoria();
            } else {
                ocultareditarCategoria();
            }
        }

        function mostrarbuscarCategoria() {
            document.getElementById('clic12').style.display = "block";
        }

        function ocultarbuscarCategoria() {
            document.getElementById('clic12').style.display = "none";
        }

        function mostrar_ocultar_buscarT() {
            var clic12 = document.getElementById('clic12');
            if (clic12.style.display == "none") {
                mostrarbuscarCategoria();
            } else {
                ocultarbuscarCategoria();
            }
        }

        function mostrarhabilitarCategoria() {
            document.getElementById('clic13').style.display = "block";
        }

        function ocultarhabilitarCategoria() {
            document.getElementById('clic13').style.display = "none";
        }

        function mostrar_ocultar_activarT() {
            var clic13 = document.getElementById('clic13');
            if (clic13.style.display == "none") {
                mostrarhabilitarCategoria();
            } else {
                ocultarhabilitarCategoria();
            }
        }

        function mostrarreporteCategoria() {
            document.getElementById('clic14').style.display = "block";
        }

        function ocultarreporteCategoria() {
            document.getElementById('clic14').style.display = "none";
        }

        function mostrar_ocultar_reporteT() {
            var clic14 = document.getElementById('clic14');
            if (clic14.style.display == "none") {
                mostrarreporteCategoria();
            } else {
                ocultarreporteCategoria();
            }
        }

        function mostrarcrearProducto() {
            document.getElementById('clic15').style.display = "block";
        }

        function ocultarcrearProducto() {
            document.getElementById('clic15').style.display = "none";
        }

        function mostrar_ocultar_crearP() {
            var clic15 = document.getElementById('clic15');
            if (clic15.style.display == "none") {
                mostrarcrearProducto();
            } else {
                ocultarcrearProducto();
            }
        }


        function mostrareditarProducto() {
            document.getElementById('clic16').style.display = "block";
        }

        function ocultareditarProducto() {
            document.getElementById('clic16').style.display = "none";
        }

        function mostrar_ocultar_editarP() {
            var clic16 = document.getElementById('clic16');
            if (clic16.style.display == "none") {
                mostrareditarProducto();
            } else {
                ocultareditarProducto();
            }
        }

        function mostrarbuscarProducto() {
            document.getElementById('clic17').style.display = "block";
        }

        function ocultarbuscarProducto() {
            document.getElementById('clic17').style.display = "none";
        }

        function mostrar_ocultar_buscarP() {
            var clic17 = document.getElementById('clic17');
            if (clic17.style.display == "none") {
                mostrarbuscarProducto();
            } else {
                ocultarbuscarProducto();
            }
        }

        function mostrarhabilitarProducto() {
            document.getElementById('clic18').style.display = "block";
        }

        function ocultarhabilitarProducto() {
            document.getElementById('clic18').style.display = "none";
        }

        function mostrar_ocultar_activarP() {
            var clic18 = document.getElementById('clic18');
            if (clic18.style.display == "none") {
                mostrarhabilitarProducto();
            } else {
                ocultarhabilitarProducto();
            }
        }

        function mostrarreporteProducto() {
            document.getElementById('clic19').style.display = "block";
        }

        function ocultarreporteProducto() {
            document.getElementById('clic19').style.display = "none";
        }

        function mostrar_ocultar_reporteP() {
            var clic19 = document.getElementById('clic19');
            if (clic19.style.display == "none") {
                mostrarreporteProducto();
            } else {
                ocultarreporteProducto();
            }
        }

        function mostrarcrearCompra() {
            document.getElementById('clic20').style.display = "block";
        }

        function ocultarcrearCompra() {
            document.getElementById('clic20').style.display = "none";
        }

        function mostrar_ocultar_crearO() {
            var clic20 = document.getElementById('clic20');
            if (clic20.style.display == "none") {
                mostrarcrearCompra();
            } else {
                ocultarcrearCompra();
            }
        }


        function mostrareditarCompra() {
            document.getElementById('clic21').style.display = "block";
        }

        function ocultareditarCompra() {
            document.getElementById('clic21').style.display = "none";
        }

        function mostrar_ocultar_editarO() {
            var clic21 = document.getElementById('clic21');
            if (clic21.style.display == "none") {
                mostrareditarCompra();
            } else {
                ocultareditarCompra();
            }
        }

        function mostrarbuscarCompra() {
            document.getElementById('clic22').style.display = "block";
        }

        function ocultarbuscarCompra() {
            document.getElementById('clic22').style.display = "none";
        }

        function mostrar_ocultar_buscarO() {
            var clic22 = document.getElementById('clic22');
            if (clic22.style.display == "none") {
                mostrarbuscarCompra();
            } else {
                ocultarbuscarCompra();
            }
        }

        function mostraranularCompra() {
            document.getElementById('clic23').style.display = "block";
        }

        function ocultaranularCompra() {
            document.getElementById('clic23').style.display = "none";
        }

        function mostrar_ocultar_activarO() {
            var clic23 = document.getElementById('clic23');
            if (clic23.style.display == "none") {
                mostraranularCompra();
            } else {
                ocultaranularCompra();
            }
        }

        function mostrarreporteCompra() {
            document.getElementById('clic24').style.display = "block";
        }

        function ocultarreporteCompra() {
            document.getElementById('clic24').style.display = "none";
        }

        function mostrar_ocultar_reporteO() {
            var clic24 = document.getElementById('clic24');
            if (clic24.style.display == "none") {
                mostrarreporteCompra();
            } else {
                ocultarreporteCompra();
            }
        }

        function mostrarcrearVenta() {
            document.getElementById('clic25').style.display = "block";
        }

        function ocultarcrearVenta() {
            document.getElementById('clic25').style.display = "none";
        }

        function mostrar_ocultar_crearV() {
            var clic25 = document.getElementById('clic25');
            if (clic25.style.display == "none") {
                mostrarcrearVenta();
            } else {
                ocultarcrearVenta();
            }
        }

        function mostrareditarVenta() {
            document.getElementById('clic26').style.display = "block";
        }

        function ocultareditarVenta() {
            document.getElementById('clic26').style.display = "none";
        }

        function mostrar_ocultar_editarV() {
            var clic26 = document.getElementById('clic26');
            if (clic26.style.display == "none") {
                mostrareditarVenta();
            } else {
                ocultareditarVenta();
            }
        }

        function mostrarbuscarVenta() {
            document.getElementById('clic27').style.display = "block";
        }

        function ocultarbuscarVenta() {
            document.getElementById('clic27').style.display = "none";
        }

        function mostrar_ocultar_buscarV() {
            var clic27 = document.getElementById('clic27');
            if (clic27.style.display == "none") {
                mostrarbuscarVenta();
            } else {
                ocultarbuscarVenta();
            }
        }

        function mostraranularVenta() {
            document.getElementById('clic28').style.display = "block";
        }

        function ocultaranularVenta() {
            document.getElementById('clic28').style.display = "none";
        }

        function mostrar_ocultar_activarV() {
            var clic28 = document.getElementById('clic28');
            if (clic28.style.display == "none") {
                mostraranularVenta();
            } else {
                ocultaranularVenta();
            }
        }

        function mostrarreporteVenta() {
            document.getElementById('clic29').style.display = "block";
        }

        function ocultarreporteVenta() {
            document.getElementById('clic29').style.display = "none";
        }

        function mostrar_ocultar_reporteV() {
            var clic29 = document.getElementById('clic29');
            if (clic29.style.display == "none") {
                mostrarreporteVenta();
            } else {
                ocultarreporteVenta();
            }
        }


        function mostrarverUsuario() {
            document.getElementById('clic30').style.display = "block";
        }

        function ocultarverUsuario() {
            document.getElementById('clic30').style.display = "none";
        }

        function mostrar_ocultar_ver() {
            var clic30 = document.getElementById('clic30');
            if (clic30.style.display == "none") {
                mostrarverUsuario();
            } else {
                ocultarverUsuario();
            }
        }

        function mostrarverCliente() {
            document.getElementById('clic31').style.display = "block";
        }

        function ocultarverCliente() {
            document.getElementById('clic31').style.display = "none";
        }

        function mostrar_ocultar_verC() {
            var clic31 = document.getElementById('clic31');
            if (clic31.style.display == "none") {
                mostrarverCliente();
            } else {
                ocultarverCliente();
            }
        }

        function mostrarverCategoria() {
            document.getElementById('clic32').style.display = "block";
        }

        function ocultarverCategoria() {
            document.getElementById('clic32').style.display = "none";
        }

        function mostrar_ocultar_verT() {
            var clic32 = document.getElementById('clic32');
            if (clic32.style.display == "none") {
                mostrarverCategoria();
            } else {
                ocultarverCategoria();
            }
        }

        function mostrarverProducto() {
            document.getElementById('clic33').style.display = "block";
        }

        function ocultarverProducto() {
            document.getElementById('clic33').style.display = "none";
        }

        function mostrar_ocultar_verP() {
            var clic33 = document.getElementById('clic33');
            if (clic33.style.display == "none") {
                mostrarverProducto();
            } else {
                ocultarverProducto();
            }
        }

        function mostrarverCompra() {
            document.getElementById('clic34').style.display = "block";
        }

        function ocultarverCompra() {
            document.getElementById('clic34').style.display = "none";
        }

        function mostrar_ocultar_verO() {
            var clic34 = document.getElementById('clic34');
            if (clic34.style.display == "none") {
                mostrarverCompra();
            } else {
                ocultarverCompra();
            }
        }

        function mostrarverVenta() {
            document.getElementById('clic35').style.display = "block";
        }

        function ocultarverVenta() {
            document.getElementById('clic35').style.display = "none";
        }

        function mostrar_ocultar_verV() {
            var clic35 = document.getElementById('clic35');
            if (clic35.style.display == "none") {
                mostrarverVenta();
            } else {
                ocultarverVenta();
            }
        }

    </script>

@endsection
