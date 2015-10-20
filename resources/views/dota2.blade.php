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

	@include('question.check', [
		'name'     => 'role',
		'label'    => 'Posição(ões) que Joga',
		'help'     => 'Em quais posições você se sente mais confortável/tem mais experiência jogando?',
		'cols'     => 12,
		'required' => true,
		'other'    => true,
		'options'  => [
			['text' => 'Hard Carrier', 'value' => 'hc'],
			['text' => 'Mid Laner', 'value' => 'ml'],
			['text' => 'Offlaner', 'value' => 'off'],
			['text' => 'Support', 'value' => 'sup'],
			['text' => 'Semi Support', 'value' => 'ssup'],
			['text' => 'Jungler', 'value' => 'jng'],
			['text' => 'Roamer', 'value' => 'roam'],
		],
	])

	@include('question.text', [
		'name'     => 'heroes',
		'label'    => 'Melhores Heróis',
		'help'     => 'Das posições selecionadas acima, cite ao menos 3 heróis com os quais você se sente confortável ao jogar.',
		'required' => true,
	])
@endsection