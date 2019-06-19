@extends('layouts.app')
@section('title','Interprete')
@section('content')
<center><h2>Seccion de Interpretes</h2></center>
<div class="row justify-content-between encabezado">
<div class="col-2">
    <a href="{{route('Interpreter.create')}}" class="btn btn-outline-primary">Nuevo interprete</a>
</div>
<div class="col-2">
    <a href="{{ url('pdfinterprete') }}" class="btn btn-danger">Ver pdf</a>
</div>
    </div>
    <hr>
    {{$interpreter->render()}}
    <table class="table table-hover">
        <thead class="thead-dark">
            <th>Id</th>
            <th>Nombre</th>
            <th>Nacionalidad</th>
            <th>Acciones</th>    
        </thead>
        <tbody>
            @foreach ($interpreter as $interpreters)
                <tr class="table table-bordered table-success">            
                        <th>{{$interpreters->id}}</th>
                        <td>{{$interpreters->name}}</td>
                        <td>{{$interpreters->nationality}}</td>  
                        <td>
  			  		 		<a href="{{ route('Interpreter.edit', $interpreters->id)}}" class="btn btn-primary">
  			  		 			Editar
  			  		 		</a>
  			  		 	</td>                 
                        <td>
                            <form action="{{route('Interpreter.destroy',$interpreters->id)}}" method="post">
                                @csrf
                                @method("delete")
                                <button id="elim{{$interpreters->id}}"class="btn btn-outline-danger" onclick="return confirm('Quiere borrar el registro {{$interpreters->name}} ?')">Eliminar</button>
                            </form>
                        </td>       
                      </tr>
            @endforeach
        </tbody>
    </table>
@endsection