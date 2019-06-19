@extends('layouts.app')
@section('title','Genero')
@section('content')
<center><h2>Seccion de Genero</h2></center>
<div class="row justify-content-between encabezado">
<div class="col-2">
    <a href="{{route('Gender.create')}}" class="btn btn-outline-primary">Nuevo genero</a>
</div>
<div class="col-2">
    <a href="{{ url('pdfgenero') }}" class="btn btn-danger">Ver pdf</a>
</div>
    </div>
    <hr>
    {{$gender->render()}}
    <table class="table table-hover">
        <thead class="thead-dark">
            <th>Id</th>
            <th>Nombre</th>
            <th>Acciones</th>    
        </thead>
        <tbody>
            @foreach ($gender as $genders)
                <tr class="table table-bordered table-success">            
                        <th>{{$genders->id}}</th>
                        <td>{{$genders->name}}</td>  
                        <td>
  			  		 		<a href="{{ route('Gender.edit', $genders->id)}}" class="btn btn-primary">
  			  		 			Editar
  			  		 		</a>
  			  		 	</td>                 
                        <td>
                            <form action="{{route('Gender.destroy',$genders->id)}}" method="post">
                                @csrf
                                @method("delete")
                                <button id="elim{{$genders->id}}"class="btn btn-outline-danger" onclick="return confirm('Quiere borrar el registro {{$genders->name}} ?')">Eliminar</button>
                            </form>
                        </td>       
                      </tr>
            @endforeach
        </tbody>
    </table>
@endsection