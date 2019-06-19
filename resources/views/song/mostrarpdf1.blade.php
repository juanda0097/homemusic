<html>
<head> </head>
    <table class="">
        <thead>
            <th>nombre cancion</th>
            <th>Nombre medial</th>
            
        </thead>
        <tbody>
        @if($canciones1->count())
    @foreach($canciones1 as $cancion)
    
    <tr>
        <td>{{ $cancion->nameSong}}</td>
      <td>{{ $cancion->name}}</td>
    </tr>
        
     @endforeach
    @else
     <tr><td colspan="8">
       No existe Registro
     </td></tr>
    @endif
        </tbody>
    </table>
</html>