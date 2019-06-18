@extends('layouts.app')
@section('title','Agregar')
@section('content')
    <h1>Agregar un nuevo Genero</h1>
    <hr>
    <form action="{{route('Gender.store')}}" method="POST" role="form">
            @csrf
                 <div class="form-group">
                
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese nombre ">
                
                  </div>
                  <button type="submit" class="btn btn-outline-warning">Guardar</button>
                  <a href="{{ route('Gender.index') }}" class="btn btn-outline-warning">Regresar</a>
    </form>
@endsection