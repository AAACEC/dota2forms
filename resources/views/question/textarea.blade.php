<div class="form-group">
	<label>{{$label}}{{$required ? '*' : ''}}</label>
	@if (isset($help))
		<span class="help-block">{{$help}}</span>
	@endif
	<textarea rows="8" class="form-control" name="{{$name}}" {{$required ? 'required' : ''}}></textarea>
</div>