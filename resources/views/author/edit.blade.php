@extends('layouts.app')
@section('content')
	<div class="card uper">
		<div class="card-header">
			Actualizar Autor
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
			<form method="post" action="{{ route('Author.update', $author->id) }}">

				<div class="form-group">
					@csrf
					@method('PATCH')
					<label form="name"> Nombre del author </label>
					<input type="text" name="name" class="form-control" value="{{ $author->name}}">
                    <label form="date"> Fecha de nacimiento </label>
					<input type="date" name="date" class="form-control" value="{{ $author->date}}">
                    <label form="nationality"> Nacionalidad</label>
					<input type="text" name="nationality" class="form-control" value="{{ $author->nationality}}">
                    <label form="sex">Sexo </label>
					<input type="text" name="sex" class="form-control" value="{{ $author->sex}}">

				</div>
				<button type="submit" class="btn btn-primary">
					Actualizar
				</button>
				<a href="{{ route('Author.index') }}" class="btn btn-outline-warning">Regresar</a>
				
			</form>
		</div>
	</div>
@endsection