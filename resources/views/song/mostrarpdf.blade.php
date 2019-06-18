<html>
<head> </head>
    <table class="">
        <thead>
            <th>Id</th>
            <th>Nombre</th>
            
        </thead>
        <tbody>
        @if($canciones->count())
    @foreach($canciones as $cancion)
    
    <tr>
      <td>{{ $cancion->id}}</td>
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