@extends('partials.seletivas')

@section('title')
	[AAACEC] LoL Team - Seletiva
@endsection

@section('specifics')
	@include('question.text', [
		'name' => 'summoner',
		'label' => 'Nome do Summoner',
		'required' => true,
	])

	@include('question.radio', [
		'name'     => 'rank',
		'label'    => 'Rank',
		'cols'     => 6,
		'required' => true,
		'options'  => [
			['text' => 'Unranked', 'value' => 'tbd'],

			['text' => 'Bronze V', 'value' => 'bv'],
			['text' => 'Bronze IV', 'value' => 'biv'],
			['text' => 'Bronze III', 'value' => 'biii'],
			['text' => 'Bronze II', 'value' => 'bii'],
			['text' => 'Bronze I', 'value' => 'bi'],

			['text' => 'Silver V', 'value' => 'sv'],
			['text' => 'Silver IV', 'value' => 'siv'],
			['text' => 'Silver III', 'value' => 'siii'],
			['text' => 'Silver II', 'value' => 'sii'],
			['text' => 'Silver I', 'value' => 'si'],

			['text' => 'Gold V', 'value' => 'gv'],
			['text' => 'Gold IV', 'value' => 'giv'],
			['text' => 'Gold III', 'value' => 'giii'],
			['text' => 'Gold II', 'value' => 'gii'],
			['text' => 'Gold I', 'value' => 'gi'],

			['text' => 'Platinum V', 'value' => 'pv'],
			['text' => 'Platinum IV', 'value' => 'piv'],
			['text' => 'Platinum III', 'value' => 'piii'],
			['text' => 'Platinum II', 'value' => 'pii'],
			['text' => 'Platinum I', 'value' => 'pi'],

			['text' => 'Diamond V', 'value' => 'dv'],
			['text' => 'Diamond IV', 'value' => 'div'],
			['text' => 'Diamond III', 'value' => 'diii'],
			['text' => 'Diamond II', 'value' => 'dii'],
			['text' => 'Diamond I', 'value' => 'di'],

			['text' => 'Master', 'value' => 'mst'],

			['text' => 'Challenger', 'value' => 'chl'],
		],
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
		'name'     => 'champs',
		'label'    => 'Melhores Champions',
		'help'     => 'Das posições selecionadas acima, cite ao menos 3 champions com os quais você se sente confortável ao jogar.',
		'required' => true,
	])
@endsection