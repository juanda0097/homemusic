@extends('layouts.app')
@section('content')
	<div class="card uper">
		<div class="card-header">
			Actualizar genero
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
			<form method="post" action="{{ route('Gender.update', $gender->id) }}">

				<div class="form-group">
					@csrf
					@method('PATCH')
					<label form="name"> Nombre del genero </label>
					<input type="text" name="name" class="form-control" value="{{ $gender->name}}">
				</div>
				<button type="submit" class="btn btn-primary">
					Actualizar
				</button>
				<a href="{{ route('Gender.index') }}" class="btn btn-outline-warning">Regresar</a>
				
			</form>
		</div>
	</div>
@endsection