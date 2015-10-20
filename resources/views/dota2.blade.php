@extends('partials.seletivas')

@section('title')
	[AAACEC] DotA 2 Team - Seletiva
@endsection

@section('specifics')
	@include('question.url', [
		'name' => 'steam',
		'label' => 'Link da Steam',
		'help' => 'Ex: http://steamcommunity.com/id/jogadorX',
		'required' => true,
	])

	@include('question.number', [
		'name'     => 'solo_mmr',
		'label'    => 'MMR Solo',
		'required' => false,
	])
@endsection