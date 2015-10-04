<div class="form-group">
	<label>{{$label}}{{$required ? '*' : ''}}</label>
	@if (isset($help))
		<span class="help-block">{{$help}}</span>
	@endif
	<input type="email" class="form-control" name="{{$name}}" {{$required ? 'required' : ''}}>
</div>