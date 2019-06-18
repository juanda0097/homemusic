@extends('layouts.app')
@section('content')

	<div class="card uper">
		<div class="card-header">
			Actualizar Canciones
		</div>
		
		<div class="card-body">
			@if($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach($errors->all() as $error)
							<li>
								{{ $error }}
							</li>
						@endforeach
					</ul>
				</div> <br>
			@endif
			
			<form method="post" action="{{ route('Song.update', $song->id) }}">

				<div class="form-group">
					@csrf
					@method('PATCH')
					<label form="name"> Nombre de la cancion </label>
					<input type="text" name="name" class="form-control" value="{{ $song->name}}">
					<label form="duration"> Duracion</label>
					<input type="text" name="duration" class="form-control" value="{{ $song->duration}}">
					<label for="interprete_id">Interprete</label>
					<input type="text" name="interprete_id" class="form-control" value="{{ $song->interpreter_id}}">
                    <label for="gender_id">Genero</label>
					<input type="text" name="gender_id" class="form-control" value="{{ $song->gender_id}}">
					 
				
				</div>
				<button type="submit" class="btn btn-primary">
					Actualizar
				</button>
				<a href="{{ route('Song.index') }}" class="btn btn-outline-warning">Regresar</a>
			</form>
		</div>
	</div>
@endsection