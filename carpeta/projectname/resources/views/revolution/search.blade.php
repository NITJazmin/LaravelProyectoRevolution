@if($vista=="empresa")
		{!! Form::open(array('url'=>'/revolution/empresa','method'=>'GET','autocomplete'=>'on','role'=>'search')) !!}
@elseif($vista=="coordinador")
	{!! Form::open(array('url'=>'/revolution/coordinador','method'=>'GET','autocomplete'=>'on','role'=>'search')) !!}
@elseif($vista=="empleado")
	{!! Form::open(array('url'=>'/revolution/empleado','method'=>'GET','autocomplete'=>'on','role'=>'search')) !!}
@elseif($vista=="analista")
	{!! Form::open(array('url'=>'/revolution/analista','method'=>'GET','autocomplete'=>'on','role'=>'search')) !!}
@elseif($vista=="reclutador")
	{!! Form::open(array('url'=>'/revolution/reclutador','method'=>'GET','autocomplete'=>'on','role'=>'search')) !!}
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
