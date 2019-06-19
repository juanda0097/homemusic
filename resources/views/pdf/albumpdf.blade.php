<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/pdf.css">
  <title>Peliculas</title>
</head>
<body> 
    <section class="content">
        <img src="img/ortizo-logo-1_300x.png" style="width:100%; height:150px;" />
        <h2 style="text-align:center; color:blue;">Album</h2>
        <h3 style="text-align:center; color:blue;">STARTUP ORTIZO</h3>
        <p style="text-align:center;">Carrera 2, Calle 1. Barrio arriba Nro. 231</p>
        <p style="text-align:center;">Telf: (035)-528-0035 Cel: 3012311471</p>

        <div style="text-align:left;">
            <p> Señor (es): __________________________________________</p>
            <p> Direccion:  __________________________________________ </p>
        </div>
        <p>DNI: 2350521512</p>
        <table width="100%" border="1" style="margin: 0 auto;" id="tabla">
            <thead> 
                <tr>
                    <th>ID</th>
                    <th>Nombre del album</th>
                    <th>Fecha de lanzamiento</th>
                    
                </tr>
            </thead>
            <tbody>
                @if($albumpdf->count())
                @foreach($albumpdf as $album)   
                <tr>
                    <td>{{ $album->id}}</td>
                    <td>{{ $album->name}}</td>
                    <td>{{ $album->date}}</td>  
                    
                </tr>        
                @endforeach
                @else
                <tr>
                    <td colspan="8">    No existe Registro</td>
                </tr>
                @endif
            </tbody>
        </table>
    </section>
</body>
</html>