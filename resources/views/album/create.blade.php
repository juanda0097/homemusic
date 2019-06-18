@extends('layouts.app')
@section('title','Agregar')
@section('content')
    <h1>Agregar un nuevo Album</h1>
    <hr>
    <form action="{{route('Album.store')}}" method="POST" role="form">
            @csrf
                 <div class="form-group">
                
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese nombre ">
                    <br>
                    <label for="date">Fecha de lanzamieno</label>
                    <input type="date" class="form-control" id="date" name="date" placeholder="Ingrese Fecha ">
                    <br>
                    <label for="">Casa  Musical</label>
                    <select class="form-control" id="homemusic_id" name="homemusic_id" >
                    <option value="0">Seleccione ua opcion</option>
                    @foreach($hacreate as $hacreates)
                    <option class="form-control" value="{{ $hacreates->id }}">{{ $hacreates->name }}</option>
                    @endforeach
                </select>
                
                  </div>
                  <button type="submit" class="btn btn-outline-warning">Guardar</button>
                  <a href="{{ route('Album.index') }}" class="btn btn-outline-warning">Regresar</a>
             
    </form>
@endsection