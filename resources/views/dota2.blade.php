@extends('form')

@section('title')
	[AAACEC] CS:GO Team - Seletiva
@endsection

@section('questions')
	@include('question.text', [
		'name' => 'nome',
		'label' => 'Nome Completo',
		'required' => true,
	])

	@include('question.text', [
		'name' => 'nick',
		'label' => 'Nickname',
		'help' => 'Nick que utilizará durante as seletivas',
		'required' => true,
	])

	@include('question.radio', [
		'name'     => 'curso',
		'label'    => 'Curso',
		'cols'     => 12,
		'required' => true,
		'other'    => true,
		'options'  => [
			['text' => 'Engenharia de Computação', 'value' => 'ec'],
			['text' => 'Ciência da Computação', 'value' => 'cc'],
			['text' => 'Engenharia Mecânica', 'value' => 'em'],
			['text' => 'Engenharia Elétrica', 'value' => 'ee'],
			['text' => 'Engenharia Civil', 'value' => 'eo'],
			['text' => 'Engenharia Agrícola', 'value' => 'ea'],
			['text' => 'Física', 'value' => 'fi'],
		],
	])

	@include('question.text', [
		'name' => 'ra',
		'label' => 'Número do RA',
		'required' => true,
	])

	@include('question.url', [
		'name' => 'steam',
		'label' => 'Link da Steam',
		'help' => 'Ex: http://steamcommunity.com/id/jogadorX',
		'required' => true,
	])

	@include('question.url', [
		'name' => 'facebook',
		'label' => 'Link do Facebook',
		'help' => 'Ex: https://www.facebook.com/jogadorX',
		'required' => true,
	])

	@include('question.email', [
		'name' => 'email',
		'label' => 'Email',
		'required' => true,
	])

	@include('question.text', [
		'name' => 'skype',
		'label' => 'Nome no Skype',
		'required' => true,
	])

	@include('question.number', [
		'name'     => 'solo_mmr',
		'label'    => 'MMR Solo',
		'required' => false,
	])

	@include('question.timetable', [
		'label'    => 'Marque todos os horários que você poderia treinar com o time.',
		'help'     => 'Isso é apenas uma aproximação para analisar qual seria o melhor horário para marcar o treino do time. Caso você possa treinar entre as 19h e as 20h45 marque a opção "19h - 21h". Caso tenha alguma observação escreva nos comentários no fim do formulário.',
		'required' => true,
	])

	@include('question.inline-radio', [
		'name'     => 'equip',
		'label'    => 'Equipamentos Necessários',
		'help'     => 'Você tem os equipamentos (conexão de internet, disponibilidade de uso do computador etc.) necessários para jogar com estabilidade? Caso tenha alguma observação escreva nos comentários no fim do formulário.',
		'required' => true,
		'preLabel' => 'Nunca',
		'posLabel' => 'Sempre',
		'options'  => [
			['value' => 1],
			['value' => 2],
			['value' => 3],
			['value' => 4],
			['value' => 5],
		],
	])

	@include('question.textarea', [
		'name' => 'comments',
		'label' => 'Comentários',
		'required' => false,
	])
@endsection