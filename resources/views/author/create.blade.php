@extends('layouts.app')
@section('title','Agregar')
@section('content')
    <h1>Agregar un nuevo Autor</h1>
    <hr>
    <form action="{{route('Author.store')}}" method="POST" role="form">
            @csrf
                 <div class="form-group">
                
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese nombre ">
                    <label for="date">Fecha de nacimiento</label>
                    <input type="date" class="form-control" id="date" name="date" placeholder="Ingrese fecha de nacimiento ">
                    <label for="nationality">Nacionalidad</label>
                    <input type="text" class="form-control" id="nationality" name="nationality" placeholder="Ingrese nacionalidad ">
                    <label for="sex">Sexo</label>
                    <input type="text" class="form-control" id="sex" name="sex" placeholder="Ingrese sexo ">

                
                  </div>
                  <button type="submit" class="btn btn-outline-warning">Guardar</button>
                  <a href="{{ route('Author.index') }}" class="btn btn-outline-warning">Regresar</a>
    </form>
@endsection