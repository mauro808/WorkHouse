<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reporte de Compras</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
    <link href="../resources/views/layouts/dataTables.bootstrap4.min.css" rel="stylesheet">
     <script src = "https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js" defer ></script> 
  
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
        <p><strong>Reporte de Compras</strong></p>
    </header>
    <main>
        <div class="container">
           
            <table class="table table-bordered text-center" >
                <thead >
                    <tr >
                        <th scope="col" >Id</th>
                        <th scope="col">Usuario Creador</th>
                         <th scope="col">Fecha de Compra</th>
                        <th scope="col">Valor Total</th>
                        <th scope="col">Estado de Compra</th>
                    </tr>
                </thead>
               <tbody >
                @foreach($compras as $compra)
                    <tr >
                        <th scope="row">{{ $compra->id }}</th>
                         @foreach($usuarios as $usuario)
                    @if($compra->idUsuario == $usuario->id)
                    <td>{{$usuario->nombre}}</td>
                        @endif 
                        @endforeach 
                        <td>{{ $compra->created_at}}</td>
                        <td>{{ $compra->precioTotal }}</td>
                        <td>{{ $compra->estado }}</td>
                  
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