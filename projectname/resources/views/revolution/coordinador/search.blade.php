@if($vista=="empresa")
		{!! Form::open(array('url'=>'revolution/empresa','method'=>'GET','autocomplete'=>'on','role'=>'search')) !!}
@else
	{!! Form::open(array('url'=>'revolution/coordinador','method'=>'GET','autocomplete'=>'on','role'=>'search')) !!};
@endif




<div class="form-group">
	<div class="input-group">
		<input type="text" class="form-control" name="searchText" placeholder="Buscar..." value="{{$searchText}}">
		<span class="input-group-btn">
			<button type="submit" class="btn btn-primary">Buscar</button>
		</span>
	</div>
</div>


{!! Form::close() !!}
