@extends('partials.seletivas')

@section('title')
	[AAACEC] CS:GO Team - Seletiva
@endsection

@section('specifics')
	@include('question.url', [
		'name' => 'steam',
		'label' => 'Link da Steam',
		'help' => 'Ex: http://steamcommunity.com/id/jogadorX',
		'required' => true,
	])

	@include('question.radio', [
		'name'     => 'rank',
		'label'    => 'Rank',
		'cols'     => 6,
		'required' => true,
		'options'  => [
			['text' => 'Silver I', 'value' => 'si'],
			['text' => 'Silver II', 'value' => 'sii'],
			['text' => 'Silver III', 'value' => 'siii'],
			['text' => 'Silver IV', 'value' => 'siv'],
			['text' => 'Silver Elite', 'value' => 'se'],
			['text' => 'Silver Elite Master', 'value' => 'sem'],

			['text' => 'Gold Nova I', 'value' => 'gni'],
			['text' => 'Gold Nova II', 'value' => 'gnii'],
			['text' => 'Gold Nova III', 'value' => 'gniii'],
			['text' => 'Gold Nova Master', 'value' => 'gnm'],

			['text' => 'Master Guardian I', 'value' => 'mgi'],
			['text' => 'Master Guardian II', 'value' => 'mgii'],
			['text' => 'Master Guardian Elite', 'value' => 'mge'],
			['text' => 'Distinguished Master Guardian', 'value' => 'dmg'],

			['text' => 'Legendary Eagle', 'value' => 'le'],
			['text' => 'Legendary Eagle Master', 'value' => 'lem'],

			['text' => 'Supreme Master First Class', 'value' => 'smfc'],

			['text' => 'The Global Elite', 'value' => 'tge'],

			['text' => 'Não definido', 'value' => 'tbd'],
		],
	])
@endsection