<!DOCTYPE html>
<html>
<head>
	<title>[AAACEC] Dota Team - Seletiva</title>

	{!! Helpers::css() !!}
	{!! Helpers::js()  !!}

	<link rel="stylesheet" type="text/css" href="/jumbotron-narrow.css">

	<style>
		label {
			margin: 0;
		}

		.help-block {
			margin-top: 0;
			margin-bottom: 0;
			font-size: .75em;
		}

		div .radio-inline:last-child {
			margin-left: 0;
			padding-left: 0;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="header clearfix">
			<h3 class="text-muted">[AAACEC] Dota Team - Seletiva</h3>
		</div>

		<div class="row marketing">
			<div class="col-lg-12">
				{!! Form::horizontal() !!}
					<div class="form-group">
						<label for="name">Nome Completo</label>
						<input type="text" class="form-control" name="name" required>
					</div>

					<div class="form-group">
						<label for="nick">Nickname</label>
						<span class="help-block">Nick que utilizará durante as seletivas</span>
						<input type="text" class="form-control" name="nick" required>
					</div>

					<div class="form-group">
						<label for="course">Curso</label>
						<span class="help-block">ATENÇÃO: Caso você não estude na Unicamp, coloque seu curso e universidade na opção "Outro"</span>
						<div class="radio">
							<label>
								<input type="radio" name="course" value="ec">
								Engenharia de Computação
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="course" value="cc">
								Ciência da Computação
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="course" value="em">
								Engenharia Mecânica
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="course" value="ee">
								Engenharia Elétrica
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="course" value="eo">
								Engenharia Civil
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="course" value="ea">
								Engenharia Agrícola
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="course" value="fi">
								Física
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="course" value="ou">
								Outro
								<input type="text" class="form-control" name="course_ou">
							</label>
						</div>
					</div>

					<div class="form-group">
						<label for="ra">Número do RA</label>
						<input type="text" class="form-control" name="ra" required>
					</div>

					<div class="form-group">
						<label for="steam_link">Link da Steam</label>
						<span class="help-block">Ex: <a href="#">www.steamcommunity.com/id/jogadorX</a></span>
						<input type="text" class="form-control" name="steam_link" required>
					</div>

					<div class="form-group">
						<label for="skype_name">Nome Skype</label>
						<input type="text" class="form-control" name="skype_name" required>
					</div>

					<div class="form-group">
						<label for="solo_mmr">MMR Solo</label>
						<span class="help-block">Escreva seu MMR solo médio</span>
						<input type="number" class="form-control" name="solo_mmr" required>
					</div>

					<div class="form-group">
						<label for="position">Posição(ões) que Joga</label>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="position_hc" value="">
								Hard Carry
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="position_ml" value="">
								Mid Laner
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="position_of" value="">
								Offlaner
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="position_ss" value="">
								Semi Support
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="position_su" value="">
								Support
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="position_ju" value="">
								Jungler
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="position_ro" value="">
								Roaming
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="position_ro" value="">
								Não tenho posição definida
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="position_ou" value="">
								Outro
								<input type="text" class="form-control" name="position_ou">
							</label>
						</div>
					</div>

					<div class="form-group">
						<label for="solo_mmr">Marque todos os horários que você poderia treinar com o time.</label>
						<span class="help-block">Isso é apenas uma aproximação para analisar qual seria o melhor horário para marcar o treino do time. Caso você possa treinar entre as 19h e as 20h45 marque a opção "19h - 21h". Caso tenha alguma observação escreva nos comentários no fim do formulário.</span>
						<table class="table table-striped table-condensed text-center">
							<thead>
								<th>
									<td>Domingo</td>
									<td>Segunda</td>
									<td>Terça</td>
									<td>Quarta</td>
									<td>Quinta</td>
									<td>Sexta</td>
									<td>Sábado</td>
								</th>
							</thead>
							<tbody>
								@for($i = 8, $j = 8; $i < 26; $i++, $j = $i % 24)
									<tr>
										<td>{{ str_pad($j, 2, '0', STR_PAD_LEFT) . 'h - ' . str_pad($j + 1, 2, '0', STR_PAD_LEFT) . 'h'}}</td>
										@foreach(['dom', 'seg', 'ter', 'qua', 'qui', 'sex', 'sab'] as $day)
											<td>
												<input type="checkbox" name="{{$day . '_' . $j}}" value="">
											</td>
										@endforeach
									</tr>
								@endfor
							</tbody>
						</table>
					</div>

					<div class="form-group">
						<label for="course">Equipamentos Necessários</label>
						<span class="help-block">Você tem os equipamentos (conexão de internet, disponibilidade de uso do computador etc.) necessários para jogar com estabilidade? Caso tenha alguma observação escreva nos comentários no fim do formulário.</span>
						<div>
							<label class="radio-inline">
								Nunca
							</label>
							<label class="radio-inline">
								<input type="radio" name="course" value="1">
								&nbsp;
							</label>

							<label class="radio-inline">
								<input type="radio" name="course" value="2">
								&nbsp;
							</label>

							<label class="radio-inline">
								<input type="radio" name="course" value="3">
								&nbsp;
							</label>

							<label class="radio-inline">
								<input type="radio" name="course" value="4">
								&nbsp;
							</label>

							<label class="radio-inline">
								<input type="radio" name="course" value="5">
								&nbsp;
							</label>
							<label class="radio-inline">
								Sempre
							</label>
						</div>
					</div>

					<div class="form-group">
						<label for="comments">Comentários</label>
						<textarea class="form-control" name="comments" rows="8"></textarea>
					</div>


					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-lg">Enviar</button>
					</div>
				{!! Form::close()  !!}
			</div>
		</div>

		<footer class="footer">
			<p>© AAACEC 2015</p>
		</footer>
	</div>
</body>
</html>
