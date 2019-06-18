@extends('layouts.app')
@section('content')
	<div class="card uper">
		<div class="card-header">
			Actualizar Medio
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
			<form method="post" action="{{ route('Medial.update', $medial->id) }}">

				<div class="form-group">
					@csrf
					@method('PATCH')
					<label form="name"> Nombre de medios </label>
					<input type="text" name="name" class="form-control" value="{{ $medial->name}}">
				</div>
				<button type="submit" class="btn btn-primary">
					Actualizar
				</button>
				<a href="{{ route('Medial.index') }}" class="btn btn-outline-warning">Regresar</a>
			</form>
		</div>
	</div>
@endsection