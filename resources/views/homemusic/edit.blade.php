@extends('layouts.app')
@section('content')
	<div class="card uper">
		<div class="card-header">
			Actualizar casa muscial 
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
			<form method="post" action="{{ route('Homemusic.update', $hmusic->id) }}">

				<div class="form-group">
					@csrf
					@method('PATCH')
					<label form="name"> Nombre de casa musical </label>
					<input type="text" name="name" class="form-control" value="{{ $hmusic->name}}">
				</div>
				<button type="submit" class="btn btn-primary">
					Actualizar
				</button>
				<a href="{{ route('Homemusic.index') }}" class="btn btn-outline-warning">Regresar</a>
			</form>
		</div>
	</div>
@endsection