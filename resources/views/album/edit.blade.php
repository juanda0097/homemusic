@extends('layouts.app')
@section('content')

	<div class="card uper">
		<div class="card-header">
			Actualizar Album
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
			
			<form method="post" action="{{ route('Album.update', $halbum->id) }}">

				<div class="form-group">
					@csrf
					@method('PATCH')
					<label form="name"> Nombre del album </label>
					<input type="text" name="name" class="form-control" value="{{ $halbum->name}}">
					<label form="date"> Fecha</label>
					<input type="text" name="date" class="form-control" value="{{ $halbum->date}}">
					<label for="homemusic_id">Casa musical</label>
					<input type="text" name="homemusic_id" class="form-control" value="{{ $halbum->homemusic_id}}">
					 
				
				</div>
				<button type="submit" class="btn btn-primary">
					Actualizar
				</button>
				<a href="{{ route('Album.index') }}" class="btn btn-outline-warning">Regresar</a>
				
			</form>
		</div>
	</div>
@endsection