@extends('layouts.app')
@section('content')
	<div class="card uper">
		<div class="card-header">
			Actualizar Interprete
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
			<form method="post" action="{{ route('Interpreter.update', $interpreter->id) }}">

				<div class="form-group">
					@csrf
					@method('PATCH')
					<label form="name"> Nombre del interprete </label>
					<input type="text" name="name" class="form-control" value="{{ $interpreter->name}}">
                    <label form="nationality"> Nacionalidad </label>
					<input type="text" name="nationality" class="form-control" value="{{ $interpreter->nationality}}">
				</div>
				<button type="submit" class="btn btn-primary">
					Actualizar
				</button>
				<a href="{{ route('Interpreter.index') }}" class="btn btn-outline-warning">Regresar</a>
			</form>
		</div>
	</div>
@endsection