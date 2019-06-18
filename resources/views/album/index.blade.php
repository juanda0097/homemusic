@extends('layouts.app')
@section('title','Album')
@section('content')
<center><h2>Seccion de Album</h2></center>
<div class="row justify-content-between encabezado">
<div class="col-2">
    <a href="{{route('Album.create')}}" class="btn btn-outline-primary">Agregar nuevo album</a>
</div>
    </div>
    <hr>
    {{$halbum->render()}}
    <table class="table table-hover">
        <thead class="thead-dark">
            <th>Id</th>
            <th>Nombre</th>
            <th>Fecha de lanzamiento</th>
            <th>Casa musical</th>
            <th>Acciones</th>    
        </thead>
        <tbody>
            @foreach ($halbum as $halbums)
                <tr class="table table-bordered table-success">            
                        <th>{{$halbums->id}}</th>
                        <td >{{$halbums->name}}</td>
                        <td>{{$halbums->date}}</td>  
                        <td>{{$halbums->homemusic_id}}</td>    
                        <td>
  			  		 		<a href="{{ route('Album.edit', $halbums->id)}}" class="btn btn-primary">
  			  		 			Editar
  			  		 		</a>
  			  		 	</td>                 
                        <td>
                            <form action="{{route('Album.destroy',$halbums->id)}}" method="post">
                                @csrf
                                @method("delete")
                                <button id="elim{{$halbums->id}}"class="btn btn-outline-danger">Eliminar</button>
                            </form>
                        </td>       
                      </tr>
            @endforeach
        </tbody>
    </table>
@endsection