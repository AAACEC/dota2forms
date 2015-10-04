<div class="form-group">
	<label>{{$label}}{{$required ? '*' : ''}}</label>
	@if (isset($help))
		<span class="help-block">{{$help}}</span>
	@endif
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
							<input type="checkbox" name="{{$namePrefix or ''}}{{$day . '_' . $j}}" value="">
						</td>
					@endforeach
				</tr>
			@endfor
		</tbody>
	</table>
</div>