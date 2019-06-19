@extends('layouts.app')
@section('title','Medial')
@section('content')
<center><h2>Seccion de Medios</h2></center>
<div class="row justify-content-between encabezado">
<div class="col-2">
    <a href="{{route('Medial.create')}}" class="btn btn-outline-primary">Nuevo medio</a>
</div>
<div class="col-2">
    <a href="{{ url('pdfmedio') }}" class="btn btn-danger">Ver pdf</a>
</div>
    </div>
    <hr>
    {{$medial->render()}}
    <table class="table table-hover">
        <thead class="thead-dark">
            <th>Id</th>
            <th>Nombre</th>
            <th>Acciones</th>    
        </thead>
        <tbody>
            @foreach ($medial as $medials)
                <tr class="table table-bordered table-success">            
                        <th>{{$medials->id}}</th>
                        <td>{{$medials->name}}</td>  
                        <td>
  			  		 		<a href="{{ route('Medial.edit', $medials->id)}}" class="btn btn-primary">
  			  		 			Editar
  			  		 		</a>
  			  		 	</td>                 
                        <td>
                            <form action="{{route('Medial.destroy',$medials->id)}}" method="post">
                                @csrf
                                @method("delete")
                                <button id="elim{{$medials->id}}"class="btn btn-outline-danger" onclick="return confirm('Quiere borrar el registro {{$medials->name}} ?')">Eliminar</button>
                            </form>
                        </td>       
                      </tr>
            @endforeach
        </tbody>
    </table>
@endsection