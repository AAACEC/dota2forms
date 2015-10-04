<div class="form-group">
	<label for="{{$name}}">{{$label}}{{$required ? '*' : ''}}</label>
	@if (isset($help))
		<span class="help-block">{{$help}}</span>
	@endif
	<div>
		@if (isset($preLabel))
			<label class="radio-inline">
				{{$preLabel}}
			</label>
		@endif
		@foreach ($options as $option)
			<label class="radio-inline">
				<input type="radio" name="{{$name}}" value="{{$option['value']}}" {{$required ? 'required' : ''}}>
				@if (isset($option['text']))
					{{$option['text']}}
				@else
					&nbsp;
				@endif
			</label>
		@endforeach
		@if (isset($posLabel))
			<label class="radio-inline">
				{{$posLabel}}
			</label>
		@endif
	</div>
</div>