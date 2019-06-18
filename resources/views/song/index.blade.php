@extends('layouts.app')
@section('title','Canciones')
@section('content')
<center><h2>Seccion de Canciones</h2></center>
<div class="row justify-content-between encabezado">
<div class="col-2">
    <a href="{{route('Song.create')}}" class="btn btn-outline-primary">Nueva cancion</a>
</div>
    </div>
    <hr>
    {{$song->render()}}
    <table class="table table-hover">
        <thead class="thead-dark">
            <th>Id</th>
            <th>Nombre</th>
            <th>Duracion</th>
            <th>Interprete</th>
            <th>Genero</th>
            <th>Acciones</th>    
        </thead>
        <tbody>
            @foreach ($song as $songs)
                <tr class="table table-bordered table-success">            
                        <th>{{$songs->id}}</th>
                        <td>{{$songs->name}}</td>
                        <td>{{$songs->duration}}</td>  
                        <td>{{$songs->interpreter_id}}</td>
                        <td>{{$songs->gender_id}}</td>    
                        <td>
  			  		 		<a href="{{ route('Song.edit', $songs->id)}}" class="btn btn-primary">
  			  		 			Editar
  			  		 		</a>
  			  		 	</td>                 
                        <td>
                            <form action="{{route('Song.destroy',$songs->id)}}" method="post">
                                @csrf
                                @method("delete")
                                <button id="elim{{$songs->id}}"class="btn btn-outline-danger" onclick="return confirm('Quiere borrar el registro {{$songs->name}} ?')">Eliminar</button>
                                
                            </form>
                        </td>       
                      </tr>
            @endforeach
        </tbody>
    </table>
@endsection