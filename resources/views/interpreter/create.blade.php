@extends('layouts.app')
@section('title','Agregar')
@section('content')
    <h1>Agregar un nuevo Interprete</h1>
    <hr>
    <form action="{{route('Interpreter.store')}}" method="POST" role="form">
            @csrf
                 <div class="form-group">
                
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese nombre ">
                    <label for="name">Nacionalidad</label>
                    <input type="text" class="form-control" id="nationality" name="nationality" placeholder="Ingrese Nacionalidad ">
                
                  </div>
                  <button type="submit" class="btn btn-outline-warning">Guardar</button>
                  <a href="{{ route('Interpreter.index') }}" class="btn btn-outline-warning">Regresar</a>
    </form>
@endsection