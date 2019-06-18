@extends('layouts.app')
@section('title','Agregar')
@section('content')
    <h1>Agregar una nueva cancion</h1>
    <hr>
    <form action="{{route('Song.store')}}" method="POST" role="form">
            @csrf
                 <div class="form-group">
                
                    <label for="name">Nombre de cancion</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese nombre ">
                    <label for="duration">Duracion</label>
                    <input type="text" class="form-control" id="duration" name="duration" placeholder="Ingrese Duracion ">
                    <label for="name">Interprete</label>
                    <select class="form-control" id="interpreter_id" name="interpreter_id" >
                    @foreach($screate as $screates)
                    <option class="form-control" value="{{ $screates->id }}">{{ $screates->name }}</option>
                    @endforeach
                </select>
                <label for="name">Genero</label>
                <select class="form-control" id="gender_id" name="gender_id" >
                    @foreach($screateG as $screatesG)
                    <option class="form-control" value="{{ $screatesG->id }}">{{ $screatesG->name }}</option>
                    @endforeach
                </select>
                
                  </div>
                  <button type="submit" class="btn btn-outline-warning">Guardar</button>
                  <a href="{{ route('Song.index') }}" class="btn btn-outline-warning">Regresar</a>
    </form>
@endsection