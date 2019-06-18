@extends('layouts.app')
@section('title','Autores')
@section('content')
<center><h2>Seccion de Autores</h2></center>
<div class="row justify-content-between encabezado">
<div class="col-2">
    <a href="{{route('Author.create')}}" class="btn btn-outline-primary">Nuevo autor</a>
</div>
    </div>
    <hr>
    {{$author->render()}}
    <table class="table table-hover">
        <thead class="thead-dark">
            <th>Id</th>
            <th>Nombre</th>
            <th>Fecha nacimiento</th>
            <th>Nacionalidad</th>
            <th>Sexo</th>
            <th>Acciones</th>    
        </thead>
        <tbody>
            @foreach ($author as $authors)
                <tr class="table table-bordered table-success">            
                        <th>{{$authors->id}}</th>
                        <td>{{$authors->name}}</td>
                        <td>{{$authors->date}}</td>  
                        <td>{{$authors->nationality}}</td>  
                        <td>{{$authors->sex}}</td>    
                        <td>
  			  		 		<a href="{{ route('Author.edit', $authors->id)}}" class="btn btn-primary">
  			  		 			Editar
  			  		 		</a>
  			  		 	</td>                 
                        <td>
                            <form action="{{route('Author.destroy',$authors->id)}}" method="post">
                                @csrf
                                @method("delete")
                                <button id="elim{{$authors->id}}"class="btn btn-outline-danger" onclick="return confirm('Quiere borrar el registro {{$authors->name}} ?')">Eliminar</button>
                            </form>
                        </td>       
                      </tr>
            @endforeach
        </tbody>
    </table>
@endsection