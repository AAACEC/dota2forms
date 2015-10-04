<div class="form-group">
	<label for="{{$name}}">{{$label}}{{$required ? '*' : ''}}</label>
	@if (isset($help))
		<span class="help-block">{{$help}}</span>
	@endif
	<div>
		@foreach ($options as $option)
			<div class="radio col-lg-{{$cols or '12'}}">
				<label>
					<input type="radio" name="{{$name}}" value="{{$option['value']}}" {{$required ? 'required' : ''}}>
					{{$option['text']}}
				</label>
			</div>
		@endforeach
		@if (isset($other))
			<div class="radio col-lg-{{$cols or '12'}}">
				<label>
					<input type="radio" name="{{$name}}" value="ou">
					Outro
					<input type="text" class="form-control" name="{{$name}}_ou">
				</label>
			</div>
		@endif
	</div>
</div>