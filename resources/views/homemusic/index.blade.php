@extends('layouts.app')
@section('title','Casa Musical')
@section('content')
<center><h2>Seccion de Casas musicales</h2></center>
<div class="row justify-content-between encabezado">
<div class="col-2">
    <a href="{{route('Homemusic.create')}}" class="btn btn-outline-primary">Agregar Casa musical</a>
</div>
    </div>
    <hr>
    {{$hmusic->render()}}
    <table class="table table-hover">
        <thead class="thead-dark">
            <th>Id</th>
            <th>Nombre</th>
            <th>Acciones</th>    
        </thead>
        <tbody>
            @foreach ($hmusic as $hmusics)
                <tr class="table table-bordered table-success">            
                        <th>{{$hmusics->id}}</th>
                        <td>{{$hmusics->name}}</td>  
                        <td>
  			  		 		<a href="{{ route('Homemusic.edit', $hmusics->id)}}" class="btn btn-primary">
  			  		 			Editar
  			  		 		</a>
  			  		 	</td>                 
                        <td>
                            <form action="{{route('Homemusic.destroy',$hmusics->id)}}" method="post">
                                @csrf
                                @method("delete")
                                <button id="elim{{$hmusics->id}}"class="btn btn-outline-danger" onclick="return confirm('Quiere borrar el registro {{$hmusics->name}} ?')">Eliminar</button>
                            </form>
                        </td>       
                      </tr>
            @endforeach
        </tbody>
    </table>
@endsection