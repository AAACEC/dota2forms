@extends('layout')

@section('content')
	{!! Form::horizontal() !!}
		@yield('questions')

		<div class="form-group">
			<button type="submit" class="btn btn-primary btn-lg pull-right">Enviar</button>
		</div>
	{!! Form::close()  !!}
@endsection