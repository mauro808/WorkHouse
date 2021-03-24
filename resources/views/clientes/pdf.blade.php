<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reporte de Clientes</title>
   
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    
  
    <style>
        @page {
            margin: 0cm 0cm;
            font-size: 1em;
            
        }
       
        body {
            margin: 3cm 2cm 2cm;
        }
        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2.5cm;
            background-color: #1C2833;
            color: white;
            text-align: center;
            line-height: 30px;
        }
        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #1C2833;
            color: white;
            text-align: center;
            line-height: 25px;
        }
        table {
   width: 90%;
   
}
th, td {
   width: 30%;
   text-align: left;
   vertical-align: top;
   border: 1px solid #000;
   border-collapse: collapse;
   padding: 0.8em;
   caption-side: bottom;
}
caption {
   padding: 0.8em;
   color: #fff;
    background: #000;
}
th {
   background: #85929E;
}
    </style>
</head>
<body>
    <header style="font-size: 3em";>
        <p><strong>Reporte de Clientes</strong></p>
    </header>
    <main>
        <div class="container">
           
            <table class="table table-bordered text-center" >
                <thead >
                    <tr >
                        <th scope="col" >Id</th>
                        <th scope="col">Nombres y Apellidos</th>
                        <th scope="col">Identificación</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Celular</th>
                        <th scope="col">Fijo</th>
                        <th scope="col">Correo</th>
                    </tr>
                </thead>
               <tbody >
                @foreach($clientes as $cliente)
                    <tr >
                        <th scope="row">{{ $cliente->id }}</th>
                        <td>{{ $cliente->nombreCliente }}</td>
                        <td>{{ $cliente->numeroIdentificacion }}</td>
                        <td>{{ $cliente->direccion }}</td>
                        <td>{{ $cliente->celular }}</td>
                        <td>{{ $cliente->telefonoFijo }}</td>
                        <td>{{ $cliente->correo }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </main>
    <footer>
        <p><strong>Ferretería López -  Crr 84  40-09 Copacabana, Antioquia </strong></p>
    </footer>
</body>
</html>